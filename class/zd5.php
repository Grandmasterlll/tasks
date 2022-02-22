<?php
header("Content-Type: text/html; charset=UTF-8");

/*
Задача 5
Модифицируйте класс Worker так, чтобы имя и 
возраст заполнялись в методе __construct при создании объекта (вот так: new Worker(имя, возраст) ). 
Создайте объект этого класса 'Дима', возраст 25, зарплата 1000. Выведите на экран произведение его возраста и зарплаты.

*/

// [+]  Задача 5


class Worker_2{
    private $name;
    private $age;
    private $salary;
    public function __construct($name,$age,$salary){
        $this->name = $name;
        if($this->checkAge($age)){
            $this->age = $age;
        }
        else{
            $this->age=null;
        }
        $this->salary = $salary;
    }
    public function proizvedenie(){
        $sum=($this->age * $this->salary);
        return $sum;
    }
    private function checkAge($age){
        return ( 1<=($age) && ($age)<=100);      
    }

}

$object_class_Worker=new  Worker_2('Дима',25,1000);
echo 'sum = '.$object_class_Worker->proizvedenie();





?>