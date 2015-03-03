<?php
    // This part manages the file uploads
    if(isset($_FILES['file'])){
        if ( 0 < $_FILES['file']['error'] ) {
            echo 'Error: ' . $_FILES['file']['error'] . '<br>';
        }
        else {
            move_uploaded_file($_FILES['file']['tmp_name'], 'uploads/' . $_FILES['file']['name']);
            
        }
    }
    
    
    // This returns back the contents of the uploads folder
    $fileList = scandir('uploads', 1);
    echo json_encode($fileList);

?>