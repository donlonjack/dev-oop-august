<?php 
class Person{
    private $name;
    private $address;
    private $age;

    // name setter & getter
    public function setName($new_name){
        $this->name = $new_name;
    }

    public function getName(){
        return $this->name;
    }

    // address setter & getter
    public function setAddress($new_address){
        $this->address = $new_address; 
    }

    public function getAddress(){
        return $this->address;
    }

    // age setter & getter
    public function setAge($new_age){
        $this->age = $new_age; 
    }

    public function getAge(){
        return $this->age;
    }
}
?>