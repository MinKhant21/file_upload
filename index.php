<?php

    echo "<pre>";
    print_r($_FILES);

    if(isset($_POST['btnupload'])){
        $file = $_FILES;
        foreach($file['image']['name'] as $k=>$value){
            $tmp_name = $file['image']['tmp_name'][$k];
            $file_name = uniqid().$value;
            move_uploaded_file($tmp_name,'./image/'.$file_name);
        }
    }

?>

<form action="" enctype="multipart/form-data" method="POST">

<input type="file" name="image[]" multiple id="">
<input type="submit" name="btnupload" value="Upload">

</form>