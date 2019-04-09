<?php
    //接受用户的数据
    $starName=$_GET['name'];

    //准备图片的版本
    //假数据
    $personArr=array(
        '宋大韩'=>array('icon'=>'img/dahan.jpg','info'=>'稳重成熟，乖巧懂事'),
        '宋民国'=>array('icon'=>'img/minguo.jpg','info'=>'帝王级的撒娇，可爱小大人'),
        '宋万岁'=>array('icon'=>'img/wansui.jpg','info'=>'自由的灵魂，妹子吸引，霸道仲裁'),
        '三胞胎'=>array('icon'=>'img/sanbaotai.jpg','info'=>'我无敌可爱的，懂事的三胞胎')
    );

    //查询数据
    $someOne=$personArr[$starName];

    //返回结果
    //路径
    echo $someOne['icon'];

    //额外返回一些 用来切割的内容
    echo '||||';

    //返回信息
    echo $someOne['info'];

?>