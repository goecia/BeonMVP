// Get the CSRF Token for Laravel AJAX.
var csrf = document.getElementById('csrf-token').content;
// document.getElementById('file-input').addEventListener('change', uploadImage, false);

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
 * Prompts a dialog box to enter the URL to createLink link to.
 * 
 * @param void
 * @return void
 * 
 */
function createLink() {
    var url = prompt("Please enter the URL to link to: ");
    document.execCommand("createLink", false, url);

    return true;
}

/**
 * 
 * Ajax call to BE to save a blog post into DB.
 * 
 * @param void
 * @return boolean
 * 
 */
function saveEntry() {
    // Get Text
    var text = document.getElementById("iframe").innerHTML;
    // Get Title
    var title = document.getElementById("post-title").value;

    // Make AJAX request
    var http = new XMLHttpRequest();
    http.open("POST", "/saveEntry");
    http.setRequestHeader("Content-type", "application/json");
    http.send(JSON.stringify({ "_token": csrf, "title": title, "text": text}));

    http.onreadystatechange = function () {
        if (http.readyState === 4 && http.status === 200) {
            // Get response
            var response = JSON.parse(http.responseText);

            document.getElementById("status").innerHTML = response.message;
            return true;
        }
    };
}

/**
 * 
 * Listens for change on "Upload Image" button and creates a preview of given image.
 * 
 * @param void
 * @return void
 * 
 */
function uploadImage() {
    if (window.getSelection()) {
        var file = document.getElementById("file-input").files[0];
        var reader = new FileReader();

        // Closure to capture the file information.
        reader.onload = (function(theFile) {
            return function(e) {
                // Get range and create element
                var sel = window.getSelection();
                var range = sel.getRangeAt(0);
                var img = document.createElement('img');

                img.src = e.target.result;
                img.style.width = '100px';
                img.style.height = '100px';

                range.insertNode(img);
            };
        })(file);

        // Read in the image file as a data URL.
        reader.readAsDataURL(file);
    }
}

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
