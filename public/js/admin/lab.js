// Set a global dummy audio var for audio test.
var dummyAudio = null;
// Set global volume value for test and trigger intro
var volume = 1;
// Initialize modals
var modalLoading = document.getElementById("modal-loading");
// Get the CSRF Token for Laravel AJAX.
var csrf = document.getElementById('_token').content;

/**
 * 
 * Experiment for adding a "noticeable" class onto the element, belonging to the iframe, when hovering
 * fade-out-select options.
 * Sadly this won't work on Chrome. What a shitty browser.
 * 
 * @param void
 * @return void
 * 
 */
// $(document).ready(function (event) {
//     // On mouse over
//     fadeOutSelect.onmouseover = function (event) {
//         event = event || window.event;
//         var target = event.target ? event.target : event.srcElement;
//         if (target.nodeName.toLowerCase() === 'option') {
//             var dummy = document.getElementById(target.value);
//             if (!dummy.classList.contains("bg-primary")) {
//                 dummy.classList.add("bg-primary");
//             }
//         }
//     };

//     // On mouse out
//     fadeOutSelect.onmouseout = function (event) {
//         event = event || window.event;
//         var target = event.target ? event.target : event.srcElement;
//         if (target.nodeName.toLowerCase() === 'option') {
//             var dummy = document.getElementById(target.value);
//             if (dummy.classList.contains("bg-primary")) {
//                 dummy.classList.remove("bg-primary");
//             }
//         }
//     };
// });

/**
 * 
 * Takes all audios from the current loaded Beon and updates the list (for fade-out purposes).
 * 
 * @param void
 * @return void
 * 
 */
function loadOrRefreshSpans() {
    var iframe = document.getElementById("iframe");
    var allSpans = iframe.getElementsByTagName("span");
    var fadeOutSelect = document.getElementById("fade-out-select");

    while(fadeOutSelect.options.length > 0) {                
        fadeOutSelect.remove(0);
    }

    for (var i = 0; i < allSpans.length; i++) {
        var dummy = document.createElement("option");
        if(allSpans[i].getAttribute("data-name")) {
            dummy.text = allSpans[i].getAttribute("data-name");
            dummy.value = allSpans[i].getAttribute("id");
            fadeOutSelect.add(dummy);
        }
    }

    return true;
}

/**
 * 
 * Ajax call to BE to retrieve Audio from DB and update the lists.
 * 
 * @param void
 * @return void
 * 
 */
function loadOrRefreshAudio() {
    var http = new XMLHttpRequest();

    http.open("GET", "/refreshAudio");
    http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    http.send("_token=" + csrf);

    http.onreadystatechange = function () {
        if (http.readyState === 4 && http.status === 200) {
            // Get response
            var response = JSON.parse(http.responseText);

            // Get the "selects" from HTML 
            var selectAmbient = document.getElementById("ambient-select");
            var selectFx = document.getElementById("fx-select");
            var selectMusic = document.getElementById("music-select");
            var eraseAudioSelect = document.getElementById("delete-audio-select");

            if (response.success) {
                // Destroy previous Ambient list
                while(selectAmbient.options.length > 0) {
                    selectAmbient.remove(0);
                }
                // Insert an option for each returned Ambient audio
                for(var i = 0, length = response.data.insert.length; i < length; i++) {
                    if(response.data.insert[i].type == "ambient") {
                        var dummy = document.createElement("option");
                        dummy.text = response.data.insert[i].name;
                        dummy.id = response.data.insert[i].id;
                        dummy.dataset.filename = response.data.insert[i].filename;
                        dummy.dataset.type = response.data.insert[i].type;
                        dummy.dataset.name = response.data.insert[i].name;
                        selectAmbient.add(dummy);
                    }
                }

                // Destroy previous Fx list
                while(selectFx.options.length > 0) {
                    selectFx.remove(0);
                }
                // Insert an option for each returned Fx audio
                for(var i = 0, length = response.data.insert.length; i < length; i++) {
                    if(response.data.insert[i].type == "fx") {
                        var dummy = document.createElement("option");
                        dummy.text = response.data.insert[i].name;
                        dummy.id = response.data.insert[i].id;
                        dummy.dataset.filename = response.data.insert[i].filename;
                        dummy.dataset.type = response.data.insert[i].type;
                        dummy.dataset.name = response.data.insert[i].name;
                        selectFx.add(dummy);
                    }
                }

                // Destroy previous Music list
                while(selectMusic.options.length > 0) {
                    selectMusic.remove(0);
                }
                // Insert an option for each returned Music audio
                for(var i = 0, length = response.data.insert.length; i < length; i++) {
                    if(response.data.insert[i].type == "music") {
                        var dummy = document.createElement("option");
                        dummy.text = response.data.insert[i].name;
                        dummy.id = response.data.insert[i].id;
                        dummy.dataset.filename = response.data.insert[i].filename;
                        dummy.dataset.type = response.data.insert[i].type;
                        dummy.dataset.name = response.data.insert[i].name;
                        selectMusic.add(dummy);
                    }
                }

                // Destroy previous Delete Audio list
                while(eraseAudioSelect.options.length > 0) {
                    eraseAudioSelect.remove(0);
                }
                // Insert an option for each returned audio
                for(var i = 0, length = response.data.delete.length; i < length; i++) {
                    var dummy = document.createElement("option");
                    dummy.text = response.data.delete[i].name;
                    dummy.id = response.data.delete[i].id;
                    eraseAudioSelect.add(dummy);
                }

                return true;
            }

            document.getElementById("status").innerHTML = response.data;
            modalLoading.style.display = "none";
            return false;
        }
    };
}

/**
 * 
 * Ajax call to BE to retrieve Beons from DB and update the lists.
 * 
 * @param void
 * @return void
 * 
 */
function loadOrRefreshBeons() {
    var http = new XMLHttpRequest();

    http.open("GET", "/refreshBeons");
    http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    http.send("_token=" + csrf);

    http.onreadystatechange = function () {
        if (http.readyState === 4 && http.status === 200) {
            // Get response
            var response = JSON.parse(http.responseText);
            var loadBeonSelect = document.getElementById("load-beon-select");
            var eraseBeonSelect = document.getElementById("delete-beon-select");

            if (response.success) {
                // Destroy previous Beon list
                while(loadBeonSelect.options.length > 0) {                
                    loadBeonSelect.remove(0);
                }
                // Insert an option for each Beon returned value
                for(var i = 0, length = response.data.length; i < length; i++) {
                    var dummy = document.createElement("option");
                    dummy.text = response.data[i].name;
                    dummy.value = response.data[i].id;
                    loadBeonSelect.add(dummy);
                }

                // Destroy previous Beon list
                while(eraseBeonSelect.options.length > 0) {
                    eraseBeonSelect.remove(0);
                }
                // Insert an option for each Beon returned value
                for(var i = 0, length = response.data.length; i < length; i++) {
                    var dummy = document.createElement("option");
                    dummy.text = response.data[i].name;
                    dummy.value = response.data[i].id;
                    eraseBeonSelect.add(dummy);
                }

                return true;
            }

            document.getElementById("status").innerHTML = response.data;
            modalLoading.style.display = "none";
            return false;
        }
    };
}

/**
 * 
 * Cleans up the entries and starts a new, clean Beon.
 * 
 * @param void
 * @return void
 * 
 */
function newBeon() {
    // Cleanup the environment
    document.getElementById("beon-savename").value = "";
    document.getElementById("iframe").innerHTML = "";
    document.getElementById("offset").innerHTML = 50;
    document.getElementById("beon-id").value = 0;

    // Inform that a new beon placeholder was created
    document.getElementById("status").innerHTML = "New beon ready to use";
}

/**
 * 
 * Ajax call to BE to retrieve a Beon from DB.
 * 
 * @param void
 * @return void
 * 
 */
function loadBeon() {
    modalLoading.style.display = "block";

    var id = document.getElementById("load-beon-select").value;
    var http = new XMLHttpRequest();

    http.open("POST", "/loadBeon");
    http.setRequestHeader("Content-type", "application/json");
    http.send(JSON.stringify({ "_token": csrf, "id": id }))

    http.onreadystatechange = function () {
        if (http.readyState === 4 && http.status === 200) {
            // Get response
            var response = JSON.parse(http.responseText);

            if (response.success) {
                // Update hidden ID
                document.getElementById("beon-id").value = response.data.id;
                // Put parsed values into "the box"
                document.getElementById("beon-savename").value = response.data.name;
                // Update iframe
                document.getElementById("iframe").innerHTML = response.data.text;
            }

            loadOrRefreshSpans();
            document.getElementById("status").innerHTML = response.message;
            modalLoading.style.display = "none";
            return true;
        }
    };
}

/**
 * 
 * Ajax call to BE to save a Beon and its file into DB.
 * 
 * @param void
 * @return void
 * 
 */
function saveBeon() {
    modalLoading.style.display = "block";

    // Get Text
    var text = document.getElementById("iframe").innerHTML;
    // Get Name
    var saveName = document.getElementById("beon-savename").value;
    // Get ID
    var id = document.getElementById("beon-id").value;

    // Validate name
    var validated = validateName(saveName);
    if(!validated) {
        return false;
    }

    // Make AJAX request
    var http = new XMLHttpRequest();
    http.open("POST", "/saveBeon");
    http.setRequestHeader("Content-type", "application/json");
    http.send(JSON.stringify({ "_token": csrf, "name": saveName, "text": text, "id": id }));

    http.onreadystatechange = function () {
        if (http.readyState === 4 && http.status === 200) {
            // Get response
            var response = JSON.parse(http.responseText);

            if (response.success) {
                // Refresh the list
                loadOrRefreshBeons();
                // If responses id is not null, it's a new entry
                if(response.data.id != null) {
                    document.getElementById("beon-id").value = response.data.id;
                }
            }

            document.getElementById("status").innerHTML = response.message;
            modalLoading.style.display = "none";
            return true;
        }
    };
}

/**
 * 
 * Ajax call to BE to delete a Beon from DB and local storage.
 * 
 * @param void
 * @return void
 * 
 */
function deleteBeon() {
    // Get the beon "select" value and name
    var select = document.getElementById("delete-beon-select");
    var id = select.value;
    var name = select.options[select.selectedIndex].text;

    // Confirm delete
    var confirm = window.confirm("Are you sure you want to delete '" + name + "'?");
    if(!confirm) {
        return false;
    }

    modalLoading.style.display = "block";

    // Make AJAX request
    var http = new XMLHttpRequest();
    http.open("POST", "/deleteBeon");
    http.setRequestHeader("Content-type", "application/json");
    http.send(JSON.stringify({ "_token": csrf, "id": id, "name": name }));

    http.onreadystatechange = function () {
        if (http.readyState === 4 && http.status === 200) {
            // Get response
            var response = JSON.parse(http.responseText);

            // Display message
            document.getElementById("status").innerHTML = response.message;

            // Refresh all Beons
            loadOrRefreshBeons();
            modalLoading.style.display = "none";

            return true;
        }
    };
}

/**
 * 
 * AJAX call to BE. It creates a temporary URL with the Beon current settings, to test.
 * 
 * @return void
 * 
 */
function testBeon() {
    copyTextareaContent();

    var form = document.getElementById("textarea-form");
    form.action = "/admin/testBeon";
    form.submit();

    return true;
}

/**
 * 
 * AJAX call to create an independant, playable HTML Beon.
 * 
 * @return void
 * 
 */
function publishBeon() {
    copyTextareaContent();

    var beonId = document.getElementById("beon-id").value;
    var beonSavename = document.getElementById("beon-savename").value;
    var textarea = document.getElementById("textarea").value;

    // Confirm publish
    var confirm = window.confirm("Are you sure you want to publish this beon?.");
    if(!confirm) {
        return false;
    }

    // Make AJAX request
    var http = new XMLHttpRequest();
    http.open("POST", "/admin/publishBeon");

    var formdata = new FormData();
    formdata.append("beon-id", beonId);
    formdata.append("beon-savename", beonSavename);
    formdata.append("textarea", textarea);
    formdata.append("_token", csrf);
    http.send(formdata);

    http.onreadystatechange = function () {
        if (http.readyState === 4 && http.status === 200) {
            // Get response
            var response = JSON.parse(http.responseText);

            document.getElementById("status").innerHTML = response.message;
            modalLoading.style.display = "none";

            return true;
        }
    };
}

/**
 * 
 * Ajax call to BE to upload a Beon from local storage.
 * 
 * @param void
 * @return void
 * 
 */
function uploadAudio() {
    modalLoading.style.display = "block";

    // Get files uploaded from the form
    var audiofile = document.getElementById("audiofile").files[0];
    var radio = document.getElementsByName("type");
    var type = "";

    // Search for the checked radio button
    for(var i = 0, length = radio.length; i < length; i++) {
        if(radio[i].checked) {
            type = radio[i].value;
            break;
        }
    }

    // Prepare variables to validate name
    var fileName = audiofile.name;
    var val = /^[0-9a-zA-Z_\\.]+$/;

    // Validate name
    if(!fileName.match(val)) {
        document.getElementById("status").innerHTML = "Name can only contain numbers, letters and/or underscores.";
        modalLoading.style.display = "none";

        return false;
    }

    // Make AJAX request
    var http = new XMLHttpRequest();
    http.open("POST", "/uploadAudio");

    var formdata = new FormData();
    formdata.append("type", type);
    formdata.append("audiofile", audiofile);
    formdata.append("_token", csrf);
    http.send(formdata);

    http.onreadystatechange = function () {
        if (http.readyState === 4 && http.status === 200) {
            // Get response
            var response = JSON.parse(http.responseText);

            document.getElementById("status").innerHTML = response.message;
            loadOrRefreshAudio();
            modalLoading.style.display = "none";

            return true;
        }
    };
}

/**
 * 
 * Ajax call to BE to delete an audio entry from DB and local storage.
 * 
 * @param void
 * @return void
 * 
 */
function deleteAudio() {
    // Get the audio "select" values
    var select = document.getElementById("delete-audio-select");
    var id = select.options[select.selectedIndex].id;
    var name = select.options[select.selectedIndex].text;

    // Confirm delete
    var confirm = window.confirm("Are you sure you want to delete '" + name + "'?");
    if(!confirm) {
        return false;
    }

    modalLoading.style.display = "block";

    // Make AJAX request
    var http = new XMLHttpRequest();
    http.open("POST", "/deleteAudio");
    http.setRequestHeader("Content-type", "application/json");
    http.send(JSON.stringify({ "_token": csrf, "id": id, "name": name }));

    http.onreadystatechange = function () {
        if (http.readyState === 4 && http.status === 200) {
            // Get response
            var response = JSON.parse(http.responseText);

            document.getElementById("status").innerHTML = response.message;
            loadOrRefreshAudio();
            modalLoading.style.display = "none";

            return true;
        }
    };
}

/**
 * 
 * Validate immediately that beon name has the correct characters and length.
 * 
 * @param string
 * @return bool
 * 
 */
function validateName(name) {
    var val = /^[0-9a-zA-Z ]+$/;
    var nameLen = name.length;

    // Validate name length
    if(nameLen > 30) {
        document.getElementById("status").innerHTML = "Maximum name length is 30 characters.";
        return false;
    }

    // Validate permitted characters
    if(!name.match(val)) {
        document.getElementById("status").innerHTML = "Name can only contain number and letters.";
        return false;
    }

    return true;
}

/**
 * 
 * Called on any music insert. Takes the document current selection and wraps it into a "span" with the selected info.
 * As ID, we take the current time and convert it to miliseconds. This should give us a UID.
 * 
 * @param string
 * @return void
 * 
 */
function getSel(type) {
    var typeSelect = document.getElementById(type + "-select");
    var fadeOutSelect = document.getElementById("fade-out-select");
    var offset = document.getElementById("offset").value;

    // Validate offset
    if(offset.length < 1) {
        alert("Please insert a correct offset percentage");
        return false;
    }

    if(type === "silence") {
        var loop = "";
        var fadein = "";
        var audioId = "silence";
        var dataFilename = "";
        var dataName = "";
        var volumeInfo = "";
        var offsetInfo = offset;
        var fadeOutInfo = "";
    } else {
        var dateObject = new Date();

        var loop = document.getElementById("loop").checked;
        var fadein = document.getElementById("fade-in").value;
        var fadeout = document.getElementById("fade-out").value;
        var audioId = dateObject.getTime();
        var dataFilename = typeSelect.options[typeSelect.selectedIndex].getAttribute("data-filename");
        var dataName = typeSelect.options[typeSelect.selectedIndex].getAttribute("data-name");
        var volumeInfo = volume;
        var offsetInfo = offset;
        var fadeOutInfo = "";
        if(fadeOutSelect.value && fadeout) {
            fadeOutInfo = fadeOutSelect.options[fadeOutSelect.selectedIndex].text + ',' + fadeOutSelect.options[fadeOutSelect.selectedIndex].value + ',' + fadeout;   
        }
    }

    /*
    // Insert
    document.execCommand("insertHTML", false, '<span id="' + audioId + '" data-name="' + dataName + '" onmouseover="mouseOn(this)" onmouseout="mouseOut()" class="trigger-' + type + '" data-type="' + type + '" data-loop="' + loop + '" data-fadein="' + fadein + '" data-fadeout="' + fadeOutInfo + '" data-aac="' + dataAac + '" data-ogg="' + dataOgg + '" data-volume="' + volume + '" data-offset="' + offsetInfo + '">' + document.getSelection() + '</span>'
    );
    */

    // Emulate execCommand to fight Chromes bug with it and spans
    if (window.getSelection && (window.getSelection()).rangeCount) {
        var sel;
        var selectedText = window.getSelection();
        var range = selectedText.getRangeAt(0);
        var span = document.createElement("span");

        span.id = audioId;
        span.dataset.name = dataName;
        span.setAttribute("onmouseover", "mouseOn(this)");
        span.setAttribute("onmouseout", "mouseOut()");
        span.setAttribute("class", "trigger-" + type + "");
        span.dataset.type = type;
        span.dataset.loop = loop;
        span.dataset.fadein = fadein;
        span.dataset.fadeout = fadeOutInfo;
        span.dataset.audio = dataFilename;
        span.dataset.volume = volume;
        span.dataset.offset = offsetInfo;
        span.appendChild(document.createTextNode(selectedText));

        window.getSelection().deleteFromDocument();
        range.insertNode(span);
    }

    emptyOptions();
    loadOrRefreshSpans();

    return true;
}

/**
 * 
 * Selectors and setters to empty options after a trigger insertion.
 * 
 * @param void
 * @return void
 * 
 */
function emptyOptions() {
    document.getElementById("loop").checked = false;
    document.getElementById("fade-in").value = "";
    document.getElementById("fade-out").value = "";
    document.getElementById("offset").value = 50;
    // document.getElementById("range-volume").value = 1;
    // document.getElementById("range-value").innerText = "100 %";

    return true;
}

/**
 * 
 * Function to play selected Audio in real-time, from the library.
 * 
 * @param string
 * @return void
 * 
 */
function testAudio(type) {
    /***************************
    Unicode Play
        button.value = '\u25B6';
    Unicode Pause
        button.value = '\u23F8';
    Unicode Stop
        button.value = '\u25FC';
    ***************************/

    /************************
    HTML Entity Decimal Play
        &#9654;
    HTML Entity Decimal Pause
        &#9208;
    HTML Entity Decimal Stop
        &#9632;
    ************************/

    // Get selected option
    var testSelect = document.getElementById(type + "-select");

    // Parse into the audio sources
    var audioFile = testSelect.options[testSelect.selectedIndex].dataset.filename;

    // Get button value to change Symbol on states
    var button = document.getElementById("audio-test-" + type);
    
    // If stopped load audio and play
    if(dummyAudio === null) {
        button.value = '\u25FC';
        dummyAudio = null;
        dummyAudio = new Howl({
            volume: volume,
            loop: true,
            src: ["/" + audioFile]
        });

        dummyAudio.play();
    // Else is in any other state than playing, so stop and cleanup
    } else {
        document.getElementById("audio-test-ambient").value = '\u25B6';
        document.getElementById("audio-test-fx").value = '\u25B6';
        document.getElementById("audio-test-music").value = '\u25B6';
        dummyAudio.stop();
        dummyAudio = null;
    }

    return true;
}

/**
 * 
 * Displays "trigger-info" div inline with the trigger info.
 * 
 * @param object
 * @return void
 * 
 */
function mouseOn(object) {
    var triggerInfo = document.getElementById("trigger-info");
    var leftWidth = document.getElementById("left").offsetWidth;

    // Set tooltip x with the viewport x
    triggerInfo.style.left = (object.getBoundingClientRect().left - leftWidth) + 'px';
    // Set tooltip y with the viewport y
    triggerInfo.style.top = object.getBoundingClientRect().top + 'px';

    var volume = (object.getAttribute("data-volume") * 100) + "%";
    var fadeIn = object.getAttribute("data-fadein") ? object.getAttribute("data-fadein") + 'ms' : "";
    var fadeOut = "";
    var split = object.getAttribute("data-fadeout").split(",");
    if(split.length > 1) {
        fadeOut = split[0] + ", " + split[2] + "ms";
    }

    // Update tooltip innerHTML with the object info
    triggerInfo.innerHTML = 
        '<b>Name: </b>' + object.getAttribute("data-name") +
        ' <br /><b>Type: </b>' + object.getAttribute("data-type") +
        ' <br /><b>Volume: </b>' + volume + 
        ' <br /><b>Offset: </b>' + object.getAttribute("data-offset") + 
        '% <br /><b>Loop: </b>' + object.getAttribute("data-loop") +
        ' <br /><b>Fade-in: </b>' + fadeIn +
        ' <br /><b>Fade-out: </b>' + fadeOut +
        '';

    // Make tooltip visible
    triggerInfo.style.display = "inline-block";

    // Now (Yes, now, because the trigger is an inline-block and actually has a height) we check if its out ofthe boundaries of the viewport
    var triggerFinalPosition = object.getBoundingClientRect().bottom + triggerInfo.getBoundingClientRect().height;

    if (triggerFinalPosition > window.innerHeight) {
        triggerInfo.style.top = (object.getBoundingClientRect().top - (triggerInfo.getBoundingClientRect().height + object.getBoundingClientRect().height + 5)) + 'px';
    }

    return true;
}

/**
 * 
 * Hides the "trigger-info" div.
 * 
 * @param void
 * @return void
 * 
 */
function mouseOut() {
    document.getElementById("trigger-info").style.display = "none";

    return true;
}

/**
 * 
 * Execute given command on contentEditable div.
 * 
 * @param void
 * @return void
 * 
 */
function execute(command) {
    document.execCommand(command, false, null);

    return true;
}

/**
 * 
 * HOTFIX: this function is a hotfix for CHROME not removing triggers with executeCommand.
 * It does, however, work in any situation.
 * Removes the trigger even if selection covers just partially the text.
 * 
 * @param void
 * @return void
 * 
 */
function removeTrigger() {
    if (document.selection) {
        var span = document.selection.createRange().parentElement();

        // Avoids deleting any other element but the SPAN wrapper 
        if (span.nodeName !== "SPAN") {
            return false;
        }

        var selectedText = span.textContent || span.innerText;
        var node = document.createTextNode(selectedText);
    } else {
        var selection = window.getSelection();
        if (selection.rangeCount > 0) {
            var span = selection.getRangeAt(0).startContainer.parentNode;

            // Avoids deleting any other element but the SPAN wrapper
            if (span.nodeName !== "SPAN") {
                return false;
            }

            var selectedText = span.textContent || span.innerText;
            var node = document.createTextNode(selectedText);
        }
    }
 
    span.parentNode.replaceChild(node, span);
    loadOrRefreshSpans();

    document.execCommand("removeFormat", false, null);

    return true;
}

/**
 * 
 * Takes the volume slider input and updates the range-text DIV with the value.
 * Also refreshes in real time the audio for testAudio.
 * 
 * @param int
 * @return void
 * 
 */
function showValue(value) {
    var rangeValue = document.getElementById("range-value");
    rangeValue.innerHTML = Math.ceil(value * 100) + " %";

    if (dummyAudio) {
        dummyAudio.volume(volume);
    }

    volume = value;

    return true;
}

/**
 * 
 * On form submit we copy the iframe innerHTML (containing the spans with the audio data) so we can POST it to the BE proccessor script.
 * 
 * @param void
 * @return void
 * 
 */
function copyTextareaContent() {
    // Validated. Copy iframe info and carry on with form submit
    document.getElementById("textarea").innerHTML = document.getElementById("iframe").innerHTML;
    return true;
}

/**
 * 
 * Event listener.
 * On page load run the following functions.
 * 
 * @param void
 * @return void
 * 
 */
document.addEventListener('DOMContentLoaded', function() {
    // Fill beon and audio lists
    loadOrRefreshBeons();
    loadOrRefreshAudio();
    // Autofocus on iframe
    setTimeout(function() {
        document.getElementById("iframe").focus();
    }, 0);

}, false);

/**
 * 
 * On paste, remove format (paste as text/plain).
 * 
 * @param void
 * @return void
 * 
 */
document.querySelector("#iframe").addEventListener("paste", function(e) {
    e.preventDefault();
    var text = e.clipboardData.getData("text/plain");
    document.execCommand("insertHTML", false, text);
});
