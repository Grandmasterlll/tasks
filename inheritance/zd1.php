<?php 
header("Content-Type: text/html; charset=UTF-8");

/*
Задача 1
Унаследовать от питомца классы Cat и Dog. И переопределить у них метод talk().
Для собаки: “Cобака <кличка> лает”
Для кошки: “Кошка <кличка> мурчит”
Создать массив и заполнить его собаками и кошками. Пройти по нему по циклу и вызвать у объектов метод talk()
*/

// [+]  Задача 1
class Pet{
    public $name;
    function __construct($name)
    {
        $this->name = $name;
    }
    function talk()
    {
        echo "Имя: $this->name<br>";
    }
}
class Cat extends Pet{
    public $name;
    function __construct($name)
    {
        $this->name = $name;
    }
    function talk()
    {
        echo "Кошка ".($this->name)." мурчит";
    }
}
class Dog extends Pet{
    public $name;
    function __construct($name)
    {
        $this->name = $name;
    }
    function talk()
    {
        echo "Cобака ".($this->name)." лает";
    }
}
$pet=array("cat1","dog1","cat2","dog2","cat3","dog3","cat4","dog4","cat5","dog5","cat6","dog6");
$count=0;
for ($i=0; $i < count($pet) ; $i++) { 
    if($count==0){
        $count=1;
        $cat[$i]=new Cat($pet[$i]);
        $cat[$i]->talk();
        echo'<br>';
    }
    else{
        $count=0;
        $dog[$i]=new Dog($pet[$i]);
        $dog[$i]->talk();
        echo'<br>';
    }
}

?>