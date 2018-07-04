<?php
header('content-type:text/html;charset=utf-8');

print_r($_FILES);

move_uploaded_file($_FILES['file']['tmp_name'],'./'.$_FILES['file']['name']);


?>