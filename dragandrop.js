// =========drag and drop============

const dragArea = document.querySelector('.drag-area');
const fileInput = document.getElementById('file');
const browseBtn = document.getElementById('browseBtn');

browseBtn.addEventListener('click', () => {
    fileInput.click();
});
// Prevent default behavior for drag events
dragArea.addEventListener('dragover', (e) => {
    e.preventDefault();
});

dragArea.addEventListener('dragenter', (e) => {
    e.preventDefault();
});

dragArea.addEventListener('dragleave', (e) => {
    e.preventDefault();
});

// Handle file drop event
dragArea.addEventListener('drop', (e) => {
    e.preventDefault();
    const files = e.dataTransfer.files;
    fileInput.files = files;
    uploadFiles(files);
});

// Add an event listener to the file input
fileInput.addEventListener('change', () => {
    const files = fileInput.files;
    uploadFiles(files);
});

// Function to handle file upload
function uploadFiles(files) {
    // Create a FormData object and append the files to it
    const formData = new FormData();
    for (let i = 0; i < files.length; i++) {
        formData.append('file', files[i]);
    }

    // Create an XMLHttpRequest object and send the request
    const xhr = new XMLHttpRequest();
    xhr.open('POST', 'upload.php', true);
    xhr.onload = function () {
        if (xhr.status === 200) {
            alert(xhr.responseText); // Show the response from the PHP script
        } else {
            alert('An error occurred.');
        }
    };
    xhr.onerror = function () {
        alert('An error occurred.');
    };
    xhr.send(formData);
}

