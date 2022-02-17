<?php
header("Content-Type: text/html; charset=UTF-8");
/*
Задача 1
Сделайте функцию,
которая возвращает квадрат числа.
Число передается параметром.
*/

// [+]  Задача 1 
function func_get($task_1){
   $get= pow($task_1,2);
    return $get;
}

/*
Задача 2
Напишите функцию my_pow(x, n),
которая возводит x в натуральную степень n (умножает x на само себя n раз).
*/

// [+] Задача 2
function my_pow($x, $n){
    $pow= pow($x,$n);
    print($pow);
}

/*
Задача 3
Написать функцию season,
принимающую 1 аргумент — номер месяца (от 1 до 12),
и возвращающую время года, которому этот месяц принадлежит (зима, весна, лето или осень).
*/

// [+] Задача 3
function task_3($m){
    switch ($m) {
        case 1:
            echo "зима";
            break;
        case 2:
            echo "зима";
            break;
        case 3:
            echo "весна";
            break;
        case 4:
            echo "весна";
            break;
        case 5:
            echo "весна";
            break;
        case 6:
            echo "лето";
            break;
        case 7:
            echo "лето";
            break;
        case 8:
            echo "лето";
            break;
        case 9:
            echo "осень";
            break;
        case 10:
            echo "осень";
            break;
        case 11:
            echo "осень";
            break;
        case 12:
            echo "зима";
            break;

        }       
    }


/*
Задача 4
Пользователь делает вклад в размере a рублей сроком на years лет под 10% годовых
(каждый год размер его вклада увеличивается на 10%. Эти деньги прибавляются к сумме вклада,
и на них в следующем году тоже будут проценты).
Напишите функцию bank, принимающая аргументы a и years,
и возвращающую сумму, которая будет на счету пользователя.

*/

// [+] Задача 4  
function bank($a,$years){
    $percent=(10/100);
    $sum=$a;
    for($i=1;$i<$years;$i++){
        $tr= $sum*$percent;
        $sum=$tr+$sum;
    }
    return $sum;
}

/*
Задача 5
Реализуйте функцию isSimple,
которая параметром будет принимать число и проверять,
простое оно или нет. Простое число - это число,
которое не делится ни на одно другое число (кроме как на 1 и на само себя - на это делятся все числа).
Если число простое - функция должна вернуть true,
в противном случае false.
Самый простой способ проверить число на простоту - попробовать
поделить его на все числа от 2 до самого числа (на само число не делим).
Если ни на одно из этих чисел наше число не поделится - оно простое,
а если хотя бы на одно поделится - вернем false и выйдем из функции.
*/

// [+] Задача 5
function isSimple($x){
  for($i=2;$i<$x-1;$i++){
    if(($x % $i) == 0){
        return false;
        break;
    }else{
        return true;
        
    }
  }
}

/*
Задача 6
Напишите функцию, которая принимает текст и выводит
наиболее часто встречающееся слово с количеством его повторений.
*/

// [+] Задача 6   
function task_6($string){
$words = str_word_count($string, 1);
$word_frequencies = array_count_values($words);
arsort($word_frequencies);
print_r($word_frequencies);

}
echo'<br>';
echo'Задача 1 ';
echo'<br>';
print(func_get(2));
echo'<br>';

echo'Задача 2 ';
echo'<br>';
my_pow(2,2);
echo'<br>';

echo'Задача 3 ';
echo'<br>';
task_3(5);
echo'<br>';

echo'Задача 4 ';
echo'<br>';
print(bank(100,8));
echo'<br>';

echo'Задача 5 ';
echo'<br>';
$chi= 7 ; 
$t5=isSimple($chi);
if($t5==true){
    echo '  число '.$chi.' простое ';
}
else{
    echo '  число '.$chi.' не простое ';
}
echo'<br>';

echo'Задача 6 ';
echo'<br>';
$str="test vb test dsvfd fffr rfr ff rfr ff ads crf ff sacre ff";
task_6($str);

?>
