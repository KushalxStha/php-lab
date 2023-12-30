<!-- Remove specific element by value from an array in PHP -->

<?php 

function removeByValue($value,&$arr){   // & => This allows function to modify original value directly.
    if (($key=array_search($value,$arr))!==false){
        unset($arr[$key]);
    }
}

$colors=["red","green","blue"];
$rcol="blue";
print_r($colors);

removeByValue($rcol,$colors);
print_r($colors);
?>
