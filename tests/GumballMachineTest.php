<?php

/* hello */
require 'GumballMachine.php';

class GumballMachineTest extends PHPUnit_Framework_TestCase
{
    public $gumballMachineInstance;

    public function setUp()
    {
        $this->gumballMachineInstance = new GumballMachine();
    }
    
    public function testAffichageProfAVI()
    {
        $this->gumballMachineInstance->AffichageProf("Avant Insertion");
    }
    public function testInsertP()
    {
        $this->gumballMachineInstance->InsertP($this->gumballMachineInstance->getDB(),"yassine","Amakrane","1994-04-22","Zagoura");
       
    }
    public function testAffichageProfAPI()
    {
        $this->gumballMachineInstance->AffichageProf("Apr�s Insertion");
    }
    public function testInsertC()
    {
        $this->gumballMachineInstance->InsertC("IOT","12",$this->gumballMachineInstance->GetIdP("yassine","Amakrane"));
        
    }

   
}
