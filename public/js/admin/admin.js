// Globals
var csrf = document.getElementById("csrf-token").content;

/**
 * 
 * Gets all users from DB and parses given info into a table.
 * 
 * @return void
 * 
 */
function getUserInfo() {
    var data = null;
    var http = new XMLHttpRequest();

    http.open("GET", "/getAllUsers"); 
    http.setRequestHeader("Content-type", "application/json");
    http.send(JSON.stringify({ "_token": csrf}));

    http.onreadystatechange = function () {
        if (http.readyState === 4 && http.status === 200) {
            // Get response
            data = JSON.parse(http.responseText);

            // Get table
            var tableBody = document.getElementById("user-table-body");
            // Get row
            var row = tableBody.getElementsByTagName("tr")[0];
            // Get select
            var select = document.getElementById("users");
            // Get option
            var option = select.options[select.selectedIndex];

            // Destroy previous User row
            row.parentNode.removeChild(row);

            // Create a new row
            var newRow = document.createElement("tr");

            // Create new tds
            var tdName = document.createElement("td");
            var tdEmail = document.createElement("td");
            var tdAdmin = document.createElement("td");

            // var toggleContent = document.createElement('a');
            var toggleContent = document.createElement('input');

            FULFIL:
            for(var i = 0, length = data.length; i < length; i++) {
                if (data[i].id == option.id) {
                    tdName.innerHTML = data[i].name;
                    tdEmail.innerHTML = data[i].email;
                    tdAdmin.innerHTML = data[i].admin ? "SI" : "NO";

                    break FULFIL;
                }
            }

            // Append every td info to every td
            newRow.appendChild(tdName);
            newRow.appendChild(tdEmail);
            newRow.appendChild(tdAdmin);

            // Append the filled new row to the table
            tableBody.appendChild(newRow);
        }
    };
}

/**
 * 
 * Toggles admin privileges for selected user back and forth.
 * 
 * @return void
 * 
 */
function toggleAdmin() {
    var select = document.getElementById("users");
    var id = select.options[select.selectedIndex].id;
    var http = new XMLHttpRequest();

    http.open("POST", "/toggleAdmin");
    http.setRequestHeader("Content-type", "application/json");
    http.send(JSON.stringify({ "_token": csrf, "id": id }))

    http.onreadystatechange = function () {
        if (http.readyState === 4 && http.status === 200) {
            // Get response
            var response = JSON.parse(http.responseText);

            if(!response.success) {
                alert(response.message);

                return false;
            }
        }
    };

    getUserInfo();
    alert("User admin privileges succesfuly changed");
}
