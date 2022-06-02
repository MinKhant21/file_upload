<?php

echo "<pre>";
print_r($_FILES);
    $file = $_FILES;
    $limit_size = 1024 * 1024 * 2; // 2mb
    if($limit_size < $file['image']['size']){
         echo "limited below 2mb";
    }else{
        $tmp_name = $file['image']['tmp_name'];
        $file_name = uniqid().$file['image']['name'];
        move_uploaded_file($tmp_name , './image/'.$file_name);
        echo "success";
    }

?>

<form action="" enctype="multipart/form-data" method="POST">

<input type="file" name="image">
<input type="submit" name="btnupload" value="upload">

</form>