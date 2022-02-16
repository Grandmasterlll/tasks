<?php
header("Content-Type: text/html; charset=UTF-8");
/*
Задача 1
Инициализируйте массив случайными значениями от 0 до 20. 
Размер массива должен вмещать 20 элементов. 
Выведите все элементы, которые меньше 5.
*/

// [+]  Задача 1 
function task_1(){
    $arr = array(20);
    echo"<pre>";
    for($i=0;$i<20;$i++){
        $arr[$i]=rand(-10,10);
        if($arr[$i]<5){
            print_r("element ".$i." = ".$arr[$i]."<br> ");
        }
    }
    echo"<br>";
    var_dump($arr);
    echo"</pre>"; 
    echo '<br>';       
}

/*
Задача 2
Инициализируйте два массива как в Задаче 1.
Выведите массив, который состоит из элементов,
общих для этих двух массивов.
*/

// [+] Задача 2
function task_2(){
$n=20;
$arr1=array($n);
$arr2=array($n);
for($i=0;$i<$n;$i++){
    $arr1[$i]=rand(0,10);
    $arr2[$i]=rand(-10,10);
}
for($i=0;$i<$n;$i++){
    for($j=0;$j<$n;$j++){
        if($arr1[$i]==$arr2[$j]){
            $arr3[]=$arr1[$i];
        }
    }
}
echo"<pre>";
var_dump($arr1);
echo"-------------";
var_dump($arr2);
echo"-------------";
var_dump($arr3);
echo"</pre>";
echo '<br>';
}

/*
Задача 3
Найдите три ключа с самыми высокими значениями в массиве 
$test =  [ 'a' => 564, 'b' => 7984, 'c' => 231, 'd' => 345, 'e' => 7865].
*/

// [+] Задача 3
function task_3(){
$test = array('a' => 564, 'b' => 7984, 'c' => 231, 'd' => 345, 'e' => 7865);
$arr=array(3);
$exit=3;
$n=count($test);
rsort($test);
echo"<br>";
for($i=0;$i<$n;$i++){
    if($exit!=0){
    echo "key " . $test[$key] . "  = " .$test[$i]  . "\n";
    $exit=$exit-1;
    } 
}
echo '<br>';
}


/*
Задача 4
Напишите проверку на то,
является ли строка палиндромом (перевертышем).
Работаем со строкой как с массивом символов.
*/

// [+/-] Задача 4  
// - на руские буквы не страбатывает немного не понял почему      !!!
function task_4(){
    $text= '110011';
    $textrev=strrev($text);
    if( $text== $textrev){
        echo 'палиндромом';
    }else{
        echo 'не палиндромом';
    }
    echo '<br>';
}

/*
Задача 5
Создайте массив, как в Задаче 1.
Выведите его значения на экран в строчку через запятую.
Поменяйте минимальное и максимальное значения местами. 
И выведите новый массив на экран в строчку через запятую.
*/

// [+] Задача 5
function task_5(){
    $arr = array(20);
    for($i=0;$i<20;$i++){
        $arr[$i]=rand(0,30);
        print_r("  ".$arr[$i].",");
    }
    echo"<br>";
    $min=min($arr);
    $max=max($arr);
    for($i=0;$i<20;$i++){
        if( $min==$arr[$i]){
            $arr[$i]=$max;
        }elseif( $max==$arr[$i]){
            $arr[$i]=$min;
        }
        print_r("  ".$arr[$i].","); 
    }  
    echo '<br>'; 
}

/*
Задача 6
Создайте массив, как в Задаче 1.
Выведите его значения на экран в строчку через запятую.
Выведите сумму элементов, которые более 3.
*/

// [+] Задача 6   
function task_6(){
    $arr = array(20);
    $sum=0;
    for($i=0;$i<20;$i++){
        $arr[$i]=rand(0,30);
        print_r("  ".$arr[$i].",");
        if($arr[$i]>3){
            $sum=$sum+$arr[$i];           
        }
    }
    echo"sum = ".$sum;
    echo '<br>';
}

/*
Задача 7
Выведите на экран фразу “Каждый охотник желает знать где сидит фазан”,
раскрашенной в соответствующие цвета радуги. 
*/

// [+] Задача 7
function task_7(){
 $color= array('Red','Orange','Yellow','Green','Aqua','Blue','DarkViolet');
 $text= 'Каждый охотник желает знать где сидит фазан';
 $string=explode(" ",$text);
 for($i=0;$i<20;$i++){
    echo '<p style= "color:'.$color[$i].'" >'.$string[$i].'</p> ';
 }
 echo '<br>';
}

/*
Задача 8
Подсчитать количество слов в строке,
используя функцию explode.
Слова могут быть разделены не только одинарным пробелом,
но и двойным, а также запятыми (другие знаки не учитываем). 
*/

// [+] Задача 8 
function task_8(){
    $text= 'Каждый  охотник , желает знать где сидит фазан';   
    $string = trim($text, "  ");
    $string2=preg_replace("/,+/", "", $string);
    $q=explode(" ",$string2);
    $rev=0;
    for($i=0;$i<count($q);$i++){
        if($q[$i]==""){
            $rev=$rev+1; 
        }
    }
    $col=count($q);
    $cols=$col-$rev;
    echo $text;
    echo '<br>';    
    echo 'количество слов = '.$cols;
    echo '<br>';
}
echo'<br> Задача 1 <br>';
task_1();
echo'<br> Задача 2 <br>';
task_2();
echo'<br> Задача 3 <br>';
task_3();
echo'<br> Задача 4 <br>';
task_4();
echo'<br> Задача 5 <br>';
task_5();
echo'<br> Задача 6 <br>';
task_6();
echo'<br> Задача 7 <br>';
task_7();
echo'<br> Задача 8 <br>';
task_8();
?>
