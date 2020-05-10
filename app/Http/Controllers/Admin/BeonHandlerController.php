<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Blade;
use Tholu\Packer\Packer;
use App\Models\BeonsPublished;
use App\Models\UsersBeons;

class BeonHandlerController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('admin');
    }

    /**
     * Parses text and creates HTML elements.
     * Creates dynamic Javascript with Waypoints and Howler elements for each
     * given HTML element metadata.
     * Saves an HTML document containing a playable beon.
     *
     * @param Illuminate\Http\Request
     * @return App\Http\Controllers\JsonResponse JSON
     * 
     */
    public function publishBeon(Request $request)
    {
        // Initialize variables
        $response = array(
            'success' => true,
            'message' => 'Ok',
            'data' => array()
        );

        try {
            $userId = Auth::user()->isAdmin() ? 0 : Auth::user()->getId();
            $name = $request->input('beon-savename');
            $filename = strtolower(str_replace(' ', '_', $name)) . '.phtml';

            $beon = array(
                'id' => $request->input('beon-id'),
                'name' => $request->input('beon-savename'),
                'text' => $request->input('textarea'),
                'loaded' => '',
                'audios' => '',
                'waypoints' => ''
            );

            $parsedBeon = $this->parseBeon($beon, true);

            $view = View::make('publishbeon', ['beon' => $parsedBeon]);
            $contents = (string)$view;

            // Replace spaces with underscores and convert to lowercase
            $beon['name'] = strtolower(str_replace(' ', '_', $beon['name']));

            // If user folder doesn't exists, create it.
            if(!Storage::disk('beons_published')->exists($userId . '/')) {
                Storage::disk('beons_published')->makeDirectory($userId, 0777, true);
            }

            // Try to save into the user folder.
            if (Storage::disk('beons_published')->put($userId . '/' . $filename, $contents, 'public')) {
                $response['message'] = 'Your Beon "' . $beon['name'] . '" was successfully published!.';
            }

            // Save the new entry to published.
            $beonsPublished = new BeonsPublished;
            $beonsPublished->fk_users = $userId;
            $beonsPublished->name = $name;
            $beonsPublished->filename = $filename;
            $beonsPublished->save();

            // Save the new entry to its user relation table.
            $usersBeons = new UsersBeons;
            $usersBeons->fk_users = $userId;
            $usersBeons->fk_beons_published = $beonsPublished->id;
            $usersBeons->save();
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            $response['success'] = false;
            $response['message'] = 'ERROR: The beon could not be published. Please contact the administrator.';
            $response['data'] = null;
        }

        return Response()->json($response);
    }

    /**
     * Parses text and creates HTML elements.
     * Creates dynamic Javascript with Waypoints and Howler elements for each
     * given HTML element metadata.
     * Returns a view with all the information to build a beon by the template.
     *
     * @param Illuminate\Http\Request
     * @return Illuminate\Support\Facades\View
     * 
     */
    public function testBeon(Request $request)
    {
        // Initialize variables
        $beon = array(
            'id' => $request->input('beon-id'),
            'name' => $request->input('beon-savename'),
            'text' => $request->input('textarea'),
            'loaded' => '',
            'audios' => '',
            'waypoints' => '',
            'script' => ''
        );

        $parsedBeon = $this->parseBeon($beon, true);

        return view('testbeon', ['beon' => $parsedBeon]);
    }

    /**
     * Parses text and creates HTML elements.
     * Creates dynamic Javascript with Waypoints and Howler elements for each
     * given HTML element metadata.
     * Returns an array with all the information to build a beon.
     *
     * @param array
     * @return array
     * 
     */
    protected function parseBeon($beon, $obfuscate = true)
    {
        // Initialize variables
        $dom = null;
        $spans = null;
        $elements = array();
        $stripTags = array(
            '<html>',
            '</html>',
            '<head>',
            '</head>',
            '<body>',
            '</body>',
            '<meta http-equiv="Content-Type" content="text/html; charset=utf-8">'
        );

        $dom = new \DOMDocument();
        @$dom->loadHtml('<meta http-equiv="Content-Type" content="text/html; charset=utf-8">' . $beon['text'], LIBXML_HTML_NODEFDTD);
        $spans = $dom->getElementsByTagName('span');

        foreach ($spans as $k => $v) {
            // Check if given span it's not an empty one to avoid drag errors from frontend
            if (!$dom->getElementsByTagName('span')->item($k)->getAttribute('id')) {
                continue;
            }

            // Leave the id for Waypoints to identify the trigger
            $elements[$k]['id'] = $dom->getElementsByTagName('span')->item($k)->getAttribute('id');

            // If its a silence, assign an unique id by concatenation
            if($elements[$k]['id'] == 'silence') {
                $elements[$k]['id'] = 'silence' . $k;
                $dom->getElementsByTagName('span')->item($k)->setAttribute('id', 'silence' . $k);
            }

            // Save type then remove it
            $elements[$k]['type'] = $dom->getElementsByTagName('span')->item($k)->getAttribute('data-type');
            $dom->getElementsByTagName('span')->item($k)->removeAttribute('data-type');

            // Save audio location then remove it
            $elements[$k]['audio'] = $dom->getElementsByTagName('span')->item($k)->getAttribute('data-audio');
            $dom->getElementsByTagName('span')->item($k)->removeAttribute('data-audio');

            // Save loop then remove it
            $elements[$k]['loop'] = $dom->getElementsByTagName('span')->item($k)->getAttribute('data-loop');
            $dom->getElementsByTagName('span')->item($k)->removeAttribute('data-loop');

            // Save volume then remove it
            $elements[$k]['volume'] = $dom->getElementsByTagName('span')->item($k)->getAttribute('data-volume');
            $dom->getElementsByTagName('span')->item($k)->removeAttribute('data-volume');

            // Save offset then remove it
            $elements[$k]['offset'] = $dom->getElementsByTagName('span')->item($k)->getAttribute('data-offset');
            $dom->getElementsByTagName('span')->item($k)->removeAttribute('data-offset');

            // Save fadein info then remove it
            $elements[$k]['fadein'] = $dom->getElementsByTagName('span')->item($k)->getAttribute('data-fadein');
            $dom->getElementsByTagName('span')->item($k)->removeAttribute('data-fadein');

            $dummyFadeOut = explode(",", $dom->getElementsByTagName("span")->item($k)->getAttribute("data-fadeout"));
            $elements[$k]['fadeout'] = false;
            if(!empty($dummyFadeOut[0])) {
                $elements[$k]['fadeout'] = true;
                $elements[$k]['audioToFadeOutId'] = $dummyFadeOut[1];
                $elements[$k]['audioToFadeOutMs'] = $dummyFadeOut[2];
            }

            $dom->getElementsByTagName('span')->item($k)->removeAttribute('data-fadeout');

            // Remove the "tool" style
            $dom->getElementsByTagName('span')->item($k)->removeAttribute('class');

            // Remove onMouseOver event
            $dom->getElementsByTagName('span')->item($k)->removeAttribute('onmouseover');

            // Remove onMouseOut event
            $dom->getElementsByTagName('span')->item($k)->removeAttribute('onmouseout');

            // Remove name
            $dom->getElementsByTagName('span')->item($k)->removeAttribute('data-name');
        }

        // Replace old content with the updated info
        $beon['text'] = $dom->saveHTML();
        // Remove HTML tags saved by the encoding
        $beon['text'] = str_replace($stripTags, "", $beon['text']);

        // Create Howler, Waypoints and unify into a Javascript script (stop saying script!)
        $this->createHowls($beon, $elements);
        $this->createWaypoints($beon, $elements);
        $this->createScript($beon, $obfuscate);

        return $beon;
    }

    /**
     * Creates a string mimicking a Howl element for each given HTML span that
     * is not a silence.
     * Creates a string for the first 10 audios found. To use later as preload 
     * for the modal check. 
     *
     * @param array reference
     * @param array
     * @return void
     * 
     */
    protected function createHowls(&$beon, $elements)
    {
        foreach ($elements as $k => $v) {
            if(preg_match('/^silence/', $v['id'])) {
                continue;
            } else {
                $beon['audios'] .= 'var audio' . $v['id'] . ' = new Howl({
                    volume: ' . $v['volume'] . ',
                    src: ["/' . $v['audio'] . '"],
                    preload: true,
                    loop: ' . $v['loop'] . '
                });
                tracks.push(audio' . $v['id'] . ');

                ';

                if($k < 9) {
                    $beon['loaded'] .= 'audio' . $v['id'] . '.state() == "loaded" && ';    
                }
            }
        }

        // Remove the last, concatenated " && " from string
        $beon['loaded'] = substr($beon['loaded'], 0, -4);
        // If there is nothing to load just set a true boolean to pass the modal
        $beon['loaded'] = (empty($beon['loaded'])) ? true : $beon['loaded'];

        return;
    }

    /**
     * Creates a string mimicking a Waypoint element for each given HTML span with
     * its given waypoint properties, managed by the handler.
     *
     * @param array reference
     * @param array
     * @return void
     * 
     */
    protected function createWaypoints(&$beon, $elements)
    {
        foreach ($elements as $k => $v) {
            if(preg_match('/^silence/', $v['id'])) {
            $beon['waypoints'] .= "
                var waypoint" . $v['id'] . " = new Waypoint({
                    element: document.getElementById('" . $v['id'] . "'),
                    handler: function() {
                        ";
                        // From this index to very start, put a stop() on each audio
                        for ($i=0; $i < $k; $i++) {
                            // But if it is a silence, avoid it, since it has no variable asociated with that key, and there is nothing to "stop"
                            if(preg_match('/^silence/', $elements[$i]['id'])) {
                                continue;
                            }
                            $beon['waypoints'] .= "audio" . $elements[$i]['id'] . ".stop();";
                        }
                        $beon['waypoints'] .= "waypoint" . $v['id'] . ".destroy();
                    },
                    context: document.getElementById('book'),
                    offset: '" . $v['offset'] . "%'
                });";
            } else {
                $beon['waypoints'] .= "
                    var waypoint" . $v['id'] . " = new Waypoint({
                        element: document.getElementById('" . $v['id'] . "'),
                        handler: function() {
                        ";
                            // If it has fade-out, set it
                            if($v['fadeout']) {
                                $beon['waypoints'] .= "audio" . $v['audioToFadeOutId'] . ".fade(" . $v['volume'] . ", 0, " . $v['audioToFadeOutMs'] . ");
                                audio". $v['audioToFadeOutId'] . ".once('fade', function(){
                                    audio" . $v['audioToFadeOutId'] . ".stop();
                                });";
                            }

                            $beon['waypoints'] .= "audio" . $v['id'] . ".play();";

                            if($v['fadein']) {
                                $beon['waypoints'] .= "audio" . $v['id'] . ".fade(0, " . $v['volume'] . ", " . $v['fadein'] . ");";
                            }

                            $beon['waypoints'] .= "waypoint" . $v['id'] . ".destroy();
                        },
                        context: document.getElementById('book'),
                        offset: '" . $v['offset'] . "%'
                    });
                    ";
            }
        }

        return;
    }

    /**
     * Glues previous created Howler and Waypoint elements into the Beon JS template.
     * Optional (default true) JS code obfuscation. This also removes any comment from code.
     *
     * @param array reference
     * @param boolean
     * @return void
     * 
     */
    protected function createScript(&$beon, $obfuscate = true)
    {
        $beon['script'] = '
        // Global variables
        var tracks = [];

        // Take off scroll action for modal
        document.getElementById("book").style.overflowY = "hidden";
        // Disable mouse clicks on the whole HTML (document.documentElement)
        document.documentElement.style.pointerEvents = "none";

        // Collection of variables
        ';$beon['script'] .= $beon['audios'] . '        

        // Recursive function to check if loaded
        (function modalCheck() {
            if('; $beon['script'] .= $beon['loaded'] . ') {
                // If all loaded: hide modal, renew scroll and reset mouse events
                document.getElementById("modal").style.display = "none";
                document.getElementById("book").style.overflowY = "scroll";
                document.documentElement.style.pointerEvents = "auto";
            } else {
                // Set a one second delay (1000ms) and try again
                window.setTimeout(function(){
                    modalCheck();
                }, 1000);
            }
        })();

        // Collection of waypoints
        window.onload = function () {
            window.setTimeout(function(){';
            $beon['script'] .= $beon['waypoints'] . '
                }, 1000);
        }';

        // Obfuscate JS output
        if ($obfuscate) {
            $packer = new Packer($beon['script'], 62, false, false, false);
            $beon['script'] = $packer->pack();
        }

        return;
    }
}
