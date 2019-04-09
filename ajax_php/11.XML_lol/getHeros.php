<?php
    //设置返回的内容是 xml
   header('content-type:text/xml;charset=utf-8');
  
   //读取并返回数据
   echo file_get_contents('data/heros.xml');

?>