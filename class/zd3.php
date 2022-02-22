<?php
header("Content-Type: text/html; charset=UTF-8");
/*
 Задача 3
Сделайте класс Worker, в котором будут следующие
private поля - name (имя), age (возраст), salary (зарплата) и 
следующие public методы setName, getName, setAge, getAge, setSalary, getSalary.

Создайте 2 объекта этого класса: 'Иван', возраст 25, зарплата 1000 и 'Вася', возраст 26, зарплата 2000.

Выведите на экран сумму зарплат Ивана и Васи. Выведите на экран сумму возрастов Ивана и Васи.
*/

// [+]  Задача 3

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
        $this->age = $age;
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