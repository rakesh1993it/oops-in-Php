
<?php
/*
Type hinting can also be used to force a function to get an argument of type Object. For this purpose, we put the name of the class in front of the argument name in the function.

*/
class Car {
	protected $driver;
	
	//The constructor can only get Driver objects as arguments.
	public function __construct(Driver $driver)
	{
		echo 'this is type hinting from Driver class.';
		$this->driver=$driver;
	}
}

class Driver{}

$drive = new Driver();
$obj = new Car($drive);
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
