<?php
   abstract class Person
{
static $name;
static $age;
public $height;
public $weight;
const address="cairo";
static function print() {
  echo "person name is     " . self::$name ."      and it's age  is       " . self::$age ;
}

//3.create abtract method to print name and age of Ali calss


abstract function print_name():string;
abstract function print_age():int;

}


//     1.create class Ali instance of Person Class
class Ali extends Person
{
 
   function print_name():string
  {
    return "Ali";
    }
    function print_age():int
    {
      return 28;
    }

    function show_address()
{
    return     self:: address ;
}


}

// 2.create class Nada instance of Person Class
class Nada extends Person{
  function print_name():string
  {
     return "Nada";
  }
   function print_age():int
  {
    return 35;
  }
}
$person1=new Ali();
echo $person1->print_name();
echo "<br>";
$person1=new Ali();
echo $person1->print_age();
echo "<br>";
$person2=new nada();
echo $person2->print_name();
echo "<br>";
echo $person2->print_age();
echo "<br>";
echo "<br>";
echo "<hr>";

echo "<br>";
//5.try to access constant method outside of the calss
echo Person::address;
echo "<br>";
echo "<br>";
echo "<hr>";

echo "<br>";
//4.try to access static method outside of the calss
person::$name = "Kholoud";   
echo "<br>";
person::$age = "38";
echo "<br>";
person::print();




























 



























































































?>