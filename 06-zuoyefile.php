<?php 
header('content-type:text/html;charset=utf-8');


//第一种方式:

// // print_r($_FILES);
// //先判断文件有没有上传成功 要用到error

// if($_FILES['file']['error']==0){
//     //上传成功 要判断上传的文件是不是图片文件 用到is_Array
//     $arr=['image/jpeg','image/png','image/gif'];
//     if(in_Array($_FILES['file']['type'],$arr)){
//        //定义新路径
//        $new_lujing = time().rand(10,999999999).$_FILES['file']['name'];
//         move_uploaded_file($_FILES['file']['tmp_name'],'./img/'.$new_lujing);
//         echo "上传成功";
//         header('refresh:2;url=06-zuoyefile.html');
//     }else {
//         echo "请上传文件";
//     header('refresh:2;url=06-zuoyefile.html');
//     }

// }else {
//     echo "请上传文件";
//     header('refresh:2;url=06-zuoyefile.html');
// }


//第二种方式

if($_FILES['file']['error']==0){
    //上传成功 要判断上传的文件类型是否是图片
    $arr=['image/jpeg','image/png','image/gif'];
    if(in_Array($_FILES['file']['type'],$arr)){
        //上传成功 修改文件名  存储到新文件
        switch($_FILES['file']['type']){
            case 'image/jpeg':
            $ext='.jpg';
            break;
            case 'image/png':
            $ext='.png';
            break;
            case 'image/gif':
            $ext='.gif';
            break;
        }
        $new_file = time().rand(1000,9999999).$ext;
        move_uploaded_file($_FILES['file']['tmp_name'],'./img/'.$new_file);
        echo "上传成功";
        header('refresh:2;url=06-zuoyefile.html');

    }else{
        echo "上传失败";
    header('refresh:2;url=06-zuoyefile.html');
    }



}else {
    echo "上传失败";
    header('refresh:2;url=06-zuoyefile.html');
}



?>