<?php
header("Content-Type: text/html; charset=UTF-8");
/*
Задача 6
Реализовать подсчет котов в питомнике:
1. В класс Cat добавить статическую переменную cats 
2. При каждом создании кота (нового объекта Cat) в переменную cats добавлять +1
3. Создать 10 объектов Cat.
4. Метод printCats должен выводить всех котов на экран и их общее количество, используя переменную cats.
*/

// [+]  Задача 6

class Cat{
    public static $cats=0;
    public $name;
    public function __construct($name)
    {
        $this->name = $name;    
          (++self::$cats);  
    }
    public function printCats(){
       $cats=$cats+1;
        echo'name Cat '.$this->name;        
    }
}

echo'<br>';
echo'Cat :';
echo'<br>';
$quantity_Cat=10;
for ($i=0; $i < $quantity_Cat ; $i++) { 
    $code_Cat=rand(100,999);
    $object_class_Cat[$i] = new Cat($code_Cat,$i);
    $object_class_Cat[$i]-> printCats();
    echo'<br>';
}
echo'quantity Cat = '. Cat::$cats;

?>