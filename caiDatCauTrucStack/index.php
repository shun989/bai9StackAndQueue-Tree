<?php
include_once 'VideoList.php';
$myVideo = new VideoList();

$myVideo->push('Doraemon.');//phần tử cho vào đầu tiên.
$myVideo->push('Vua hải tặc.');
$myVideo->push('Naruto.');
$myVideo->push('Đấu phá thương khung.');
$myVideo->push('Đấu la đại lục.');//phần tử cho vào cuối cùng.

//Lấy ra lần lượt 3 phần tử
echo "1) Lấy ra 3 phần tử là:" . "<br>";
echo '+' . $myVideo->pop(). "<br>";
echo '+' . $myVideo->pop(). "<br>";
echo '+' . $myVideo->pop(). "<br>";

//Thêm 2 phần tử mới vào stack
$myVideo->push('Bleach.');
$myVideo->push('Tháng tư là lời nói dối của em.');

//Kiểm tra xem stack có rỗng hay không
echo '2) số phần tử trong stack :' ;
echo $myVideo->isEmpty(). "<br>";

//kiểm tra phần tử trên cùng của stack.
echo "3) Phần tử trên cùng là : ".' <br>';
echo $myVideo->top(). '<br>';

//Lấy ra 4 phần tử khỏi stack
echo "4) Lấy ra 4 phần tử là:" . "<br>";
echo '+' . $myVideo->pop(). "<br>";
echo '+' . $myVideo->pop(). "<br>";
echo '+' . $myVideo->pop(). "<br>";
echo '+' . $myVideo->pop(). "<br>";

//Kiểm tra xem stack có rỗng hay không
echo '5) số phần tử trong stack :' ;
echo $myVideo->isEmpty(). "<br>";

//kiểm tra phần tử trên cùng của stack.
echo "6) Phần tử trên cùng là : ".' <br>';
echo $myVideo->top();