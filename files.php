
<?php 
header('content-type:text/html;charset=utf8');
//判断是否上传文件
    if ($_FILES['pic']['error'] == 0) {
        //定义图片字段的数组
    $arr = ['image/jpeg','image/png','image/gif'];
    //检测上传的文件是不是图片
 if (in_array($_FILES['pic']['type'],$arr)) {
    //定义新路径
    $new_url = time().rand(100,99999999).$_FILES['pic']['name'];
    //将上传的文件移到新路径
    move_uploaded_file($_FILES['pic']['tmp_name'],'./img/'. $new_url );
    echo '上传成功';
    header('refresh:2;url=file.html');

 }else {
//上传的文件不是图片格式返回
    echo '请上传正确的图片文件';
    header('refresh:2;url=file.html');
 }
    }else {
        //判断是否上传文件
        echo '请上传文件';
        header('refresh:2;url=file.html');

    }
    
 ?>