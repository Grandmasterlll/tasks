<?php
header("Content-Type: text/html; charset=UTF-8");

/*
Задача 3

Сделайте класс User,
в котором будут следующие protected поля - name (имя), age (возраст),
public методы setName, getName, setAge, getAge.

Сделайте класс Worker,
который наследует от класса User и вносит дополнительное private поле salary (зарплата),
а также методы public getSalary и setSalary.

Создайте объект этого класса 'Иван', 
возраст 25, зарплата 1000. 
Создайте второй объект этого класса 'Вася', возраст 26, 
зарплата 2000. 
Найдите сумму зарплата Ивана и Васи.

Сделайте класс Student,
который наследует от класса User и
вносит дополнительные private поля стипендия, курс, 
а также геттеры и сеттеры для них.

Сделайте класс Driver (Водитель), 
который будет наследоваться от класса Worker из предыдущей задачи.
Этот метод должен вносить следующие private поля:
водительский стаж, 
категория вождения (A, B, C).

*/

// [+]  Задача 3
class User{
    protected $name;
    protected $age;
    public function setName($name){
        $this->name = $name;
    } 
    public function getName(){
        return $this->name;
    } 
    public function setAge($age){
        $this->age = $age;
    }
    public function getAge(){
        return $this->age;
    }
}
class Worker extends User{
    private $salary;
    public function setSalary($salary){
        $this->salary = $salary;
    }
    public function getSalary(){
        return $this->salary;
    }
}
class  Student extends User {
    private $course;
    private $scholarship;
    public function setCourse($course){
        $this->course = $course;
    }
    public function getCourse(){
        return $this->course;
    }
    public function setScholarship($scholarship){
        $this->scholarship = $scholarship;
    }
    public function getScholarship(){
        return $this->scholarship;
    }
}
class  Driver extends Worker{
    private $driving_experience;
    private $driving_category;
    public function setDriving_experience($driving_experience){
        $this->driving_experience = $driving_experience;
    }
    public function getDriving_experience(){
        return $this->driving_experience;
    }
    public function setDriving_category($driving_category){
        $this->driving_category = $driving_category;
    }
    public function getDriving_category(){
        return $this->driving_category;
    }
    
    
}

$object_class_Worker=new Worker();
$object_class_Worker->setName('Иван');
$object_class_Worker->setAge(25);
$object_class_Worker->setSalary(1000);
$object_class_Worker2=new Worker();
$object_class_Worker2->setName('Вася');
$object_class_Worker2->setAge(26);
$object_class_Worker2->setSalary(2000);
$sum=($object_class_Worker->getSalary()+$object_class_Worker2->getSalary());
echo ' сумму зарплат '.$object_class_Worker->getName().' '.$object_class_Worker2->getName().' = '.$sum;

echo '<br>';
$object_class_Student=new Student();
$object_class_Student->setName('Иван');
$object_class_Student->setAge(19);
$object_class_Student->setCourse(2);
$object_class_Student->setScholarship(200);
$object_class_Student2=new Student();
$object_class_Student2->setName('Вася');
$object_class_Student2->setAge(20);
$object_class_Student2->setCourse(2);
$object_class_Student2->setScholarship(300);
echo' Student '.$object_class_Student->getName().' age '.$object_class_Student->getAge().' Course '.$object_class_Student->getCourse().' Scholarship '.$object_class_Student->getScholarship();
echo '<br>';
echo' Student '.$object_class_Student2->getName().' age '.$object_class_Student2->getAge().' Course '.$object_class_Student2->getCourse().' Scholarship '.$object_class_Student2->getScholarship();
echo '<br>';

echo '<br>';
$Driver=new Driver();
$Driver->setName('Иван');
$Driver->setAge(19);
$Driver->setDriving_experience(2);
$Driver->setDriving_category('AB');
$Driver2=new Driver();
$Driver2->setName('Вася');
$Driver2->setAge(20);
$Driver2->setDriving_experience(5);
$Driver2->setDriving_category('ABC');
echo' Driver '.$Driver->getName().' Age '.$Driver->getAge().' Driving_experience '.$Driver->getDriving_experience().' Driving_category '.$Driver->getDriving_category();
echo '<br>';
echo' Driver '.$Driver2->getName().' Age '.$Driver2->getAge().' Driving_experience '.$Driver2->getDriving_experience().' Driving_category '.$Driver2->getDriving_category();

?>