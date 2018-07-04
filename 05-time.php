<?php 
    header('content-type:text/html;charset=utf-8');
    
   //获得当前的时间戳
    echo time();
    echo '<hr />';

    // date_default_timezone_set('PRC');

    echo date('Y-m-d H:i:s',time());

?> 