<?php
header("Content-Type: text/html; charset=UTF-8");

/*
Задача 1
Создайте класс Square,
который вычисляет квадрат передаваемого числа двумя способами:
статическим и нестатическими методами. Продемонстрируйте работу каждого из них.
*/

// [+]  Задача 1 
class Square{
    static function func_get_static($object){
         $get= pow($object,2);
          return $get;
      }
      static function func_get($object){
         $get= pow($object,2);
          echo $get;
      }
 }
 //
 
 echo"Задача 1";
 echo"<br>";
 echo"static";
 echo"<br>";
 echo Square::func_get_static(4);
 echo"<br>";
 echo"нестатическими методами";
 echo"<br>";
 $object_class_Square =new Square();
 $object_class_Square->func_get(4);
 echo"<br>";
 
 //
?>