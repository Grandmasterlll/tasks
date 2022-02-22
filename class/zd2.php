<?php

/*
Сделайте класс Worker, в котором будут следующие 
public поля - name (имя), age (возраст), salary (зарплата).
Создайте объект этого класса,
затем установите поля в следующие значения (не в __construct, а для созданного объекта)
- имя 'Иван', возраст 25, зарплата 1000. Создайте второй объект этого класса,
 установите поля в следующие значения - имя 'Вася', возраст 26, зарплата 2000.
Выведите на экран сумму зарплат Ивана и Васи. Выведите на экран сумму возрастов Ивана и Васи.
*/


// [+/-]  Задача 2

/*
class Worker{
    public $name;
    public $age;
    public $salary;
    public function __construct($name,$age,$salary)
    {
        $this->name = $name;
        $this->age = $age;
        $this->salary = $salary;
         
    }
    function get_salary(){
        return $this->salary;
    }
    function get_age(){
        return $this->age;
    }
    function get_name(){
        return $this->name;
    }
}
 //
 echo"---";
 echo"<br>";
 $object1_class_Worker = new Worker('Иван',25,1000);
 $object2_class_Worker = new Worker('Вася',26,2000);
 $sum_salary=($object1_class_Worker->get_salary())+($object2_class_Worker->get_salary());
 $sum_age=($object1_class_Worker->get_age())+($object2_class_Worker->get_age());
 echo ' суммa  зарплат '.$object1_class_Worker->get_name().' and '.$object2_class_Worker->get_name().' sum ='.$sum_salary;
 echo'<br>';
 echo ' суммa  возрастов '.$object1_class_Worker->get_name().' and '.$object2_class_Worker->get_name().' sum ='.$sum_age;
//
*/

class Worker{
    public $name;
    public $age;
    public $salary;
    }
 //
 
 echo"<br>";
 echo"Задача 2";
 echo"<br>";
 $object1_class_Worker = new Worker();
 $object1_class_Worker->name='Иван';
 $object1_class_Worker->age=25;
 $object1_class_Worker->salary=1000;
 $object2_class_Worker = new Worker('Вася',26,2000);
 $object2_class_Worker->name='Вася';
 $object2_class_Worker->age=26;
 $object2_class_Worker->salary=2000;

 $sum_salary=($object1_class_Worker->salary)+($object2_class_Worker->salary);
 $sum_age=($object1_class_Worker->age)+($object2_class_Worker->age);
 echo ' суммa  зарплат '.$object1_class_Worker->name.' and '.$object2_class_Worker->name.' sum ='.$sum_salary;
 echo'<br>';
 echo ' суммa  возрастов '.$object1_class_Worker->name.' and '.$object2_class_Worker->name.' sum ='.$sum_age;
 echo'<br>';
 
//
?>