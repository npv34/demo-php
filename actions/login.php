<?php


$arr = [1,2,4,5];
echo $arr[0];

for ($i = 0; $i < count($arr); $i++) {

}

$array2 = array(1,2,3,45);

$arr3 = [
  [12,3,4,5],
  [1,2,345,5]
];

$user = ["name" => "Linh", "age" => 20];
$nameUser = $user['name'];
foreach ($arr as $item) {
    echo $item . " ";
}

function sum(int $a, int $b): int|float {
    return $a + $b;
}

echo sum(1,2);



