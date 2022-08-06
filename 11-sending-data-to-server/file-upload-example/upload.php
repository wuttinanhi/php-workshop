<?php

$file = $_FILES['file'];

if ($_SERVER['REQUEST_METHOD'] === "POST") {
    // var dump file
    var_dump($file);

    // get file name
    $file_name = $file['name'];
    echo '<br><br>$file_name = ' . $file_name;

    // get file extension
    $file_extension = pathinfo($file_name, PATHINFO_EXTENSION);
    echo '<br><br>$file_extension = ' . $file_extension;

    // get file size
    $file_size = $file['size'];
    echo '<br><br>$file_size = ' . $file_size;

    // file image size
    $image_size_data = getimagesize($file['tmp_name']);
    echo '<br><br>$image_size_data = ';
    if ($image_size_data) {
        var_dump($image_size_data);
    } else {
        echo '(file is not image)';
    }

    // move file to uploads directory 
    move_uploaded_file($file['tmp_name'], 'uploads/' . $file_name);
}
