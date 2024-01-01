<?php
// Database connection
include"./php/dbconnection.php";
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['file'])) {
    $file = $_FILES['file'];

    // File information
    $file_name = $file['name'];
    $file_tmp = $file['tmp_name'];
    $file_size = $file['size'];
    $file_error = $file['error'];

    // File extension
    $file_ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));

    // Allowed file extensions
    $allowed_ext = array('jpg', 'jpeg', 'png', 'gif');

    // if ($file_error === 0) {
        // if (in_array($file_ext, $allowed_ext)) {
            // if ($file_size <= 5242880) { // 5MB in bytes
                $upload_path = 'uploads/' . $file_name;

                if (move_uploaded_file($file_tmp, $upload_path)) {
                    // Insert file information into the database
                    $sql = "INSERT INTO files (file_name, file_path) VALUES ('$file_name', '$upload_path')";
                    if ($conn->query($sql) === TRUE) {
                        echo 'File uploaded and saved to the database successfully.';
                    } else {
                        echo 'An error occurred while saving file information to the database.';
                    }
                } else {
                    echo 'An error occurred while uploading the file.';
                }
            // } else {
            //     echo 'The file size exceeds the allowed limit.';
            // }
    //     } else {
    //         echo 'Invalid file extension. Only JPG, JPEG, PNG, and GIF files are allowed.';
    //     }
    // } else {
    //     echo 'An error occurred while uploading the file.';
    // // }
}

// Close database connection
$conn->close();
?>