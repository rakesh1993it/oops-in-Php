<?php 
// Abstract mean incomplete class where we can declare the class but is not implement.

Abstract class BaseEmployee{
	protected $firstname;
	protected $lastname;
	public function getFullName()
	{
		return $this->firstname."".$this->lastname;
	}
	public abstract function getMonthSalary();
	
	public function __construct($f, $l)
	{
		$this->firstname=$f;
		$this->lastname=$l;
	}
}
class FullTimeEmployee extends BaseEmployee {
	//protected $firstname;
	//protected $lastname;
	protected $annualsalary;
	
	
	
	public function getMonthSalary()
	{
		return $this->annualsalary/12;
	}
	
	
}

class ContractEmployee extends BaseEmployee{
	//protected $firstname;
	//protected $lastname;
	protected $totalhours;
	protected $hourlyrate;
	
	
	public function getMonthSalary()
	{
		return $this->hourlyrate * $this->totalhours;
	}
	
	
}
	//We can't directly create obj of abstract class. oly we can create object of child classof the abstract parent class.
	// This error will be generate "Fatal error: Cannot instantiate abstract class BaseEmployee"
	//$fulltime1 = new BaseEmployee('FullTime','Employee');
	$fulltime = new FullTimeEmployee('FullTime','Employee');
	$contract = new ContractEmployee('contract','Employee');
	
	echo $fulltime->getFullname();
	echo $contract->getFullname();
	
	echo $fulltime->getMonthSalary();

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
</body>
</html>
