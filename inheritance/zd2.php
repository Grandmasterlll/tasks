<?php
header("Content-Type: text/html; charset=UTF-8");

/*
Задача 2
Классы Rose, Peony наследуют от базового класса Flower поле $price и метод getPrice.
 Надо реализовать конструкторы классов розы и пиона так, что:
цена на пион одна и та же - 1$
цена на розу зависит от её высоты: 20-40 см - 1$, 40-80 см - 2$, 80-100 см - 3$.
Нужно сгенерировать букет из 10 цветков случайным образом и посчитать его стоимость. 
*/

// [+]  Задача 2
class Flower{
    //$price
}
class Peony extends Flower{
   public $price;
  function getPrice(){
    $price=1;
    return $price;
  }

}
class Rose extends Flower{
   public $price;
   function getPrice($long){
    if(20<=$long && $long<=40){
        $price=1;
       return $price;
    }else if(40<=$long && $long<=80){
        $price=2;
       return $price;
    }
    else if(80<=$long && $long<=100){
        $price=3;
       return $price;
    }
  }


}
//
$count=10;
$sum=0;
$rand=rand(1,9);
$rose=$rand;

for ($i=0; $i < $count ; $i++) { 
    if (0<$rose) {
        $long=rand(20,100);
        $flower[$i]=new Rose();
        $sum=$sum+$flower[$i]->getPrice($long);
        $rose=$rose-1;
        print( '<br> Rose стоимость :'.$sum);
    }
    else{
        $flower[$i]=new Peony();
        $sum=$sum+$flower[$i]->getPrice();
        print( ' <br>Peony стоимость :'.$sum);
    }
}
echo ' <br> ';
echo ' <br> ';
echo ' стоимость :'.$sum;
?>