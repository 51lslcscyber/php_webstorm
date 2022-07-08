/**
 * Created by PhpStorm.
 * User: 23056
 * Date: 2022/7/7
 * Time: 22:53
 *///鹄思鹄想_bit森
<?php

echo mb_internal_encoding();

echo "
";

$str="D.C is 中国人"; //

echo strlen($str);

echo "
";

echo mb_strlen($str,"utf-8");

echo "
";

echo mb_strlen($str,"gbk");

?>