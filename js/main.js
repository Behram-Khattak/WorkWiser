
// ================Editor js==============


function executeCommand(command) {
    document.execCommand(command, false, null);
}
function createLink() {
    var url = prompt("Enter the URL:");
    document.execCommand("createLink", false, url);
}

function format(command, value = null) {
    document.execCommand(command, false, value);
}

document.querySelector('form').addEventListener('submit', function (e) {
    var content = document.getElementById('editor-content').innerHTML;
    document.getElementById('hidden-content-input').value = content;
});



