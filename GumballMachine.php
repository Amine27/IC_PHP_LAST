<?php
//test
class GumballMachine
{

	private $gumballs;
	
	private $bdd;
	
	function __construct()
	{
	    try
	    {
	        $conn = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '');
	        print "Yes Dans le constructeur de BaseClass\n";
	        $this->$bdd=$conn;
	    }
	    
	    catch (Exception $e)
	    {
	        die('Erreur : ' . $e->getMessage());
	    }
	}

    public function getDB()
    {
        return $this->bdd;
    }
	public function setGumballs($amount)
	{
		$this->gumballs = $amount;
	}

	
	public function turnWheel()
	{
		$this->setGumballs($this->getGumballs() - 1);
	}
	public function InsertP($bdd, $nom, $prenom , $date_naissance,$lieu)
	{  
	    try 
	    {
	       //$bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '');
	       $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	       $sql = "INSERT INTO prof (nom, prenom, date_naissance, lieu_naissance) VALUES ('$nom','$prenom', '$date_naissance','$lieu')";
	       $bdd->exec($sql);
	       echo "New record created successfully";
	    }
	    catch(PDOException $e)
	    {
	        echo $sql . "<br>" . $e->getMessage();
	    }
	    //$bdd = null;
	    
	}
	
	// Set the amount of gumballs in the machine
	public function UpdateP()
	{
	    //$this->gumballs = $amount;
	}
	
	// The user turns the wheel, machine dispenses gumball!
	public function DeleteP()
	{
	    //$this->setGumballs($this->getGumballs() - 1);
	}
}
