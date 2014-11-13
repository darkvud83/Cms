<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of oop
 *
 * @author helingen83
 */
class person {

    //put your code here

    public $name = "Petar";
    public $last_name = "Petrovic";

    public function __construct() {
        echo 'The class "', __CLASS__, '" was initiated!<br />';
    }

    public function __destruct() {
        echo 'The class "', __CLASS__, '" was destroyed!<br />';
    }

    public function __toString() {
        echo 'Convert object to string';
        echo $this->get_property();
    }

    public function set_property($newval) {

        $this->name = $newval;
    }

    protected function get_property() {

        return $this->name;
    }

}

class My_Class extends person {

    public function __construct() {
        parent::__construct();
        echo 'Neew constructor';
    }

    public function newMethod() {


        echo "From a new method in " . __CLASS__ . ".<br />";
    }

    public function callProtected() {


        return $this->get_property(); //moramo dodati novu funkciju za pristup zasticenim funkcijama
    }

}

$obj = new person();
$newObj = new My_Class();
//echo $obj->get_property();
echo $obj->set_property("Novak");
//echo $obj->get_property();// mozemo koristiti ddestruktor za unistavanje objekta ili koristiti naredbu unset
echo $newObj->newMethod();
echo $newObj->callProtected();
