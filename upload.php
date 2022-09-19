<?php
if (isset($_POST['submit'])) {
    $file = $_FILES['file'];
    
    $fileName = $_FILES['file']['name'];
    $fileTmpName = $_FILES['file']['tmp_name'];
    $fileSize = $_FILES['file']['size'];
    $fileError = $_FILES['file']['error'];
    $fileType = $_FILES['file']['type'];

    $fileExt = explode('.', $fileName); // Explode() splits up the string 
    $fileActualExt = strtolower(end($fileExt)); // strtolower() Make strings lowercase

    $allowed = array('jpg', 'jpeg', 'png', 'heic');

    if(in_array($fileActualExt, $allowed)) {
        if($fileError === 0) {
            if($fileSize < 10000000) {
                $fileNameNew = uniqid('', true).".".$fileActualExt;
                $fileDestination = '/Applications/XAMPP/xamppfiles/htdocs/my-website-in-HTML/uploads/'.$fileNameNew;
                move_uploaded_file($fileTmpName, $fileDestination);

                header("Location: profile.php?uploadsuccess");
            }
            else {
                echo "Your file is too big!";
            }
        }
        else {
            echo "There was an error uploading your file!";
        }

    }
    else {
        echo "You Cannot Upload Files of this type!";
    }
}