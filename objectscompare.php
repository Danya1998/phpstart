<?php
class Human{
    private $name,$surname,$pname;
    function __construct($name,$surname,$father_name){
        $this->name=$name;
        $this->surname=$surname;
        $this->pname =$father_name;
    }

    public function info()
    {
        return $this->surname." ".$this->name." ".$this->pname."<br>";
    }
    public function compare(Human $user2){
        if(($res = strcmp($this->surname,$user2->surname)) != 0) return $res;
        if(($res = strcmp($this->name,$user2->name)) != 0) return $res;
        return strcmp($this->pname,$user2->pname);
    }
}

$users=[];
$users[] = new Human("aron","albertovich","krusenstein");
$users[] = new Human("vasil","pupkin","petrovich");
$users[] = new Human("petr","poroh","alekseevich");

$us = new Human("vasil","pupkin","petrovich");

foreach ($users as $user){
    if($us->compare($user)==0) echo $user->info();
}
