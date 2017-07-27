<?php
class Human{
    public $name,$surname,$pname;

    public function __construct($name,$sur,$p){
        $this->name=$name;
        $this->surname=$sur;
        $this->pname=$p;
    }

    public function printName(){
        echo "------------------------------<br>";
        echo "Name:".$this->name."<br>";
        echo "Surname:".$this->surname."<br>";
        echo "Pname:".$this->pname."<br>";
        echo "------------------------------<br>";
    }
}


$v = new Human("ivan","ivanov","ivanovich");
$v->printName();