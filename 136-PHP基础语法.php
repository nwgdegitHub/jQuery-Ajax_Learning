<?php
// 为什么选择PHP?
// 语法和JS差不多
//所有相关代码都写在这里

//1.
$num = 10;
echo $num; //输出
// 后段的代码都不能直接运行 必须放到服务器文件夹下

//2.
$arr = array(1,3,5);
print_r($arr);
echo "<br>";
echo $arr[1];//取出数组中下标为1的元素

//3.
$dict = array("name"=>"lnj","age"=>"33");
print_r($dict);

echo "<br>";//换行
echo $dict["name"];//取出字典里的name

//4. if/switch/三目/for/while
$age = 17;
if ($age >= 18) {
  echo "成年人";
}
else {
  echo "未成年人";
}

$res = ($age >= 18) ? "成年人" : "未成年人";
echo $res;

switch ($age) {
  case 0:
    echo "0";
    break;
  case 18:
    echo "成年人";
    break;
  default:
    echo "未成年人";
    break;
}

for ($i=0; $i < count($arr); $i++) {
  echo $arr[$i];
  echo "<br>";
}

$a = 0;
while ($a <= 10) {
  echo $a;
}




?>
