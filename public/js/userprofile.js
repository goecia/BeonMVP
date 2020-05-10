// Globals
var modalLoading = document.getElementById("modal-loading");
var csrf = document.getElementById('csrf-token').content;

function updatePassword() {
    //
}

function updateEmail() {
    //
}

function updateName() {
    //
}

function updateAvatar() {
    // Get files uploaded from the form
    var image = document.getElementById("avatar").files[0];

    if (image.size > 666000) {
        document.getElementById("status").innerHTML = "La imagen es muy pesada. El tamaño maximo permitido es de 666kb.";
        return;
    }

    // Make AJAX request
    var http = new XMLHttpRequest();
    http.open("POST", "/updateAvatar");

    var formdata = new FormData();
    formdata.append("avatar", image);
    formdata.append("_token", csrf);
    http.send(formdata);

    http.onreadystatechange = function () {
        if (http.readyState === 4 && http.status === 200) {

            // Get response
            var response = JSON.parse(http.responseText);

            if (response.success) {
                location.reload();
            }

            return;
        }
    };
}