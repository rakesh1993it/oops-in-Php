<?php 

class MyClass
{
	public $x;
	private $y;
	function __construct($x,$y)
	{
		$this->x=$x;
		$this->y=$y;
	}
	
	function __clone()
	{
		$this->x='z';
	}
}

$a = new MyClass("w3resource","com"); // Create a new object.
$b = clone($a); // clone of the object.
var_dump($a);
echo '<br>';
var_dump($b);
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
