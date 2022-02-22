<?php
header("Content-Type: text/html; charset=UTF-8");
/*
Задача 4
Дополните класс Worker из предыдущей
задачи private методом checkAge, ---
который будет проверять возраст на корректность (от 1 до 100 лет).
Этот метод должен использовать метод setAge перед установкой нового возраста
(если возраст не корректный - он не должен меняться).

*/

// [+\-]  Задача 4

class Worker_2{
    private $name;
    private $age;
    private $salary;

    public function setName($name) {
        $this->name = $name;
    }
    public function getName() {
        return $this->name;
    }
    public function setAge($age){
        if($this->checkAge($age)){
            $this->age = $age;
        }
        else{
            $this->age=null;
        }
    }
    public function getAge(){
        return $this->age;
    }
    public function setSalary($salary){
        $this->salary = $salary;
    }
    public function getSalary(){
        return $this->salary;
    }
    private function checkAge($age){
        return ( 1<=($age) && ($age)<=100);      
    }
}
//
$object_class_Worker_2_1= new  Worker_2;
$object_class_Worker_2_1->setName('Иван');
$object_class_Worker_2_1->setAge(25);
$object_class_Worker_2_1->setSalary(1000);
$object_class_Worker_2_2= new  Worker_2;
$object_class_Worker_2_2->setName('Вася');
$object_class_Worker_2_2->setAge(26);
$object_class_Worker_2_2->setSalary(2000);
$sum_salary=$object_class_Worker_2_1->getSalary()+$object_class_Worker_2_2->getSalary();
$sum_age=$object_class_Worker_2_1->getAge()+$object_class_Worker_2_2->getAge();
echo'<br> сумму зарплат Ивана и Васи = '.$sum_salary;
echo'<br> сумму возрастов Ивана и Васи = '.$sum_age;


//

?>