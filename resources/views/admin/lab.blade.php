<!doctype html>
<html lang="{{ config('app.locale') }}">
<head>
    <!-- Behavioral Meta Data -->
    <meta charset="utf-8">
    <meta name="description" content="An audio trigger webpage">
    <meta name="author" content="Alexis Casasola (goecia@gmail.com), Agustin Guruciaga (agustinmuydesign@gmail.com)">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    <!-- Title -->
    <title>{{ config('app.name', 'BeonWords') }} - Lab</title>

    <!-- CSRF Token -->
    <meta id="_token" name="_token" content="{{ csrf_token() }}">

    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/admin/lab.css') }}"/>
</head>
<body>
    <div class="container-fluid">
            <!-- LEFT -->
            <div id="left" class="col-sm-3">
                <!-- LOAD BEON -->
                <div class="row">
                    <form class="form-inline" name="load-beon-form" action="javascript:loadBeon();" method="POST">
                        <b>Load Beon</b>
                        <br />
                        Select and click on "LOAD"
                        <br />
                        <select class="form-control" id="load-beon-select"></select>
                        <br />
                        <input class="btn btn-default" type="submit" name="load-beon-button" value="LOAD" />
                    </form>
                    <button class="btn btn-default" onclick="newBeon();" name="new-beon-button" value="NEW" />NEW</button>
                </div>

                <hr>

                <!-- UPLOAD AUDIO -->
                <div class="row">
                    <form class="form-inline" name="upload-audio-form" action="javascript:uploadAudio();void(0);" method="post" enctype="multipart/form-data">
                        <b>Upload Audio</b>
                        <br />
                        Select the file from your computer
                        <br />
                        <input class="btn btn-default" type="file" name="audiofile" id="audiofile" />
                        <br />
                        Audio Type:
                        <br />
                        <input type="radio" id="radio-ambient" name="type" value="AMBIENT" checked="checked" /> AMBIENT 
                        <input type="radio" id="radio-fx" name="type" value="FX" /> FX 
                        <input type="radio" id="radio-music" name="type" value="MUSIC" /> MUSIC
                        <br />
                        <input class="btn btn-default" type="submit" value="Upload" />
                    </form>
                </div>

                <hr>

                <!-- DELETE BEON -->
                <div class="row">
                    <form class="form-inline" name="delete-beon-form" action="javascript:deleteBeon();void(0);" method="POST">
                        <b>Delete Beon</b>
                        <br />
                        Select and click on "DELETE"
                        <br />
                        <select class="form-control" id="delete-beon-select"></select>
                        <br />
                        <input class="btn btn-default" type="submit" name="delete-beon-button" value="DELETE" />
                    </form>
                </div>

                <hr>

                <!-- DELETE AUDIO -->
                <div class="row">
                    <form class="form-inline" name="delete-audio-form" action="javascript:deleteAudio();void(0);" method="POST">
                        @if (Auth::user()->isAdmin())
                            <b>Delete Audio</b>
                        @else
                            <b>Delete your Audios</b>
                        @endif
                        <br />
                        Select and click on "DELETE"
                        <br />
                        <select class="form-control" id="delete-audio-select"></select>
                        <br />
                        <input class="btn btn-default" type="submit" name="delete-audio-button" value="DELETE" />
                    </form>
                </div>
            </div>
            <!-- MIDDLE -->
            <div id="middle" class="col-sm-6">
                <form name="textarea-form" id="textarea-form" enctype="application/x-www-form-urlencoded" action="/admin/testBeon" method="POST" target="_blank">
                    <!-- CSRF TOKEN -->
                    <input type="hidden" name="_token" id="csrf-token" value="{{ csrf_token() }}" />
                    <!-- BEON OPTIONS -->
                    <div class="text-center">
                        Name: <input type="text" name="beon-savename" id="beon-savename" placeholder="Name..." autocomplete="off" />
                        <input type="hidden" name="beon-id" id="beon-id" />
                        <input class="btn btn-default" type="button" name="save-button" onclick="saveBeon();" value="SAVE" />
                        <input class="btn btn-default" type="button" id="test-button" name="test-button" onclick="testBeon();" value="TEST BEON" />
                        <input class="btn btn-default" type="button" id="publish-button" name="publish-button" onclick="publishBeon();" value="PUBLISH BEON" />
                    </div>

                    <!-- WYSIWYG OPTIONS -->
                    <div class="teheader">
                        <div onmousedown="event.preventDefault();" onclick="execute('bold');" class="button-bold" title="Bold"></div>
                        <div onmousedown="event.preventDefault();" onclick="execute('italic');" class="button-italic" title="Italic"></div>
                        <div onmousedown="event.preventDefault();" onclick="execute('underline');" class="button-underline" title="Underline"></div>
                        <div onmousedown="event.preventDefault();" onclick="execute('strikethrough');" class="button-strikethrough" title="Strikethrough"></div>
                        <div class="tedivider"></div>
                        <div onmousedown="event.preventDefault();" onclick="execute('insertOrderedList');" class="button-ordered-list" title="Insert Ordered List"></div>
                        <div onmousedown="event.preventDefault();" onclick="execute('insertUnorderedList');" class="button-unordered-list" title="Insert Unordered List"></div>
                        <div class="tedivider"></div>
                        <div onmousedown="event.preventDefault();" onclick="execute('outdent');" class="button-outdent" title="Outdent"></div>
                        <div onmousedown="event.preventDefault();" onclick="execute('indent');" class="button-indent" title="Indent"></div>
                        <div class="tedivider"></div>
                        <div onmousedown="event.preventDefault();" onclick="execute('justifyLeft');" class="button-justify-left" title="Left Align"></div>
                        <div onmousedown="event.preventDefault();" onclick="execute('justifyCenter');" class="button-justify-center" title="Center Align"></div>
                        <div onmousedown="event.preventDefault();" onclick="execute('justifyRight');" class="button-justify-right" title="Right Align"></div>
                        <div onmousedown="event.preventDefault();" onclick="execute('justifyFull');" class="button-justify-full" title="Block Justify"></div>
                        <div class="tedivider"></div>
                        <div onmousedown="event.preventDefault();" onclick="execute('undo');" class="button-undo" title="Undo"></div>
                        <div onmousedown="event.preventDefault();" onclick="execute('redo');" class="button-redo" title="Redo"></div>
                    </div>
                    <!-- TEXT CONTENT -->
                    <textarea id="textarea" name="textarea" hidden></textarea>
                    <div id="iframe" name="iframe" class="iframe" contenteditable="true" spellcheck="false"></div>
                </form>
                <!-- HIDDEN DIVS: MODAL, STATUS AND TRIGGER-INFO -->
                <div class="modal-loading" id="modal-loading"></div>
                <div id="status" class="status"></div>
                <div id="trigger-info" class="trigger-info"></div>
            </div>
            <!-- RIGHT -->
            <div id="right" class="col-sm-3">
                <div class="row">
                    <b>Insert Audio</b>
                    <br />
                    Highlight text, select an audio, choose it's options and finally click on it's "INSERT"
                </div>

                <hr>
                <div class="row">
                    <div class="col-sm-4">
                        Ambient:
                        <br />
                        <select class="form-control" id="ambient-select"></select>
                    </div>
                    <div class="col-sm-4">
                        FX:
                        <br />
                        <select class="form-control" id="fx-select"></select>
                    </div>
                    <div class="col-sm-4">
                        Music:
                        <br />
                        <select class="form-control" id="music-select"></select>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-4 text-center">
                        Test:
                        <br />
                        <input class="btn btn-default" type="submit" id="audio-test-ambient" name="audio-test-ambient" onclick="testAudio('ambient')" value="&#9654" />
                    </div>
                    <div class="col-sm-4 text-center">
                        Test:
                        <br />
                        <input class="btn btn-default" type="submit" id="audio-test-fx" name="audio-test-fx" onclick="testAudio('fx')" value="&#9654" />
                    </div>
                    <div class="col-sm-4 text-center">
                        Test:
                        <br />
                        <input class="btn btn-default" type="submit" id="audio-test-music" name="audio-test-music" onclick="testAudio('music')" value="&#9654" />
                    </div>
                </div>

                <hr>

                <div class="row">
                        <b>Options</b>
                        <br />
                        <br />
                        Volume: <span id="range-value" class="range-value text-center">100 %</span>
                        <br />
                        <input id="range-volume" type="range" mix="0" max="1" step="0.01" value="1" oninput="showValue(this.value)" />
                        <br />
                        Loop: <input class="pointer" type="checkbox" id="loop" />
                        <br />
                        <br />
                        Trigger Offset (%) <input type="text" id="offset" name="offset" value="50" maxlength="2" size="1" />
                        <br />
                        <br />
                        Fade-in (In miliseconds): <input type="text" id="fade-in" placeholder="3000" size="4" />
                        <br />
                        <br />
                        Fade-out(In miliseconds): <input type="text" id="fade-out" placeholder="3000" size="4" />
                        <br />
                        Which sound to fade out?: <select class="form-control" id="fade-out-select"></select>
                </div>

                <hr>

                <div class="row">
                    <div class="col-sm-4 text-center">
                        <input class="btn btn-default" type="submit" name="beon-button-ambient" onclick="getSel('ambient')" value="INSERT AMBIENT" />
                    </div>
                    <div class="col-sm-4 text-center">
                        <input class="btn btn-default" type="submit" name="beon-button-fx" onclick="getSel('fx')" value="INSERT FX" />
                    </div>
                    <div class="col-sm-4 text-center">
                        <input class="btn btn-default" type="submit" name="beon-button-music" onclick="getSel('music')" value="INSERT MUSIC" />
                    </div>
                </div>

                <hr>

                <div class="row">
                    <b>Additional tools</b>
                    <br />
                    <br />
                    <input class="btn btn-default" type="button" name="beon-button-silence" onclick="getSel('silence')"  value="INSERT SILENCE" />
                    <input class="btn btn-default" type="button" name="beon-button-delete" onclick="removeTrigger()" value="REMOVE TRIGGER" />
                </div>
            </div>
    </div>

    <!-- Scripts -->
    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/howler.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/admin/lab.js') }}"></script>

</body>
</html>