<?php
class ABC{
	public function fun1()
	{
		echo 'fun1 of ABC class.';
		echo '<br>';
		return $this;
	}
	
	public function fun2()
	{
		echo 'fun2 of ABC class.';
		echo '<br>';
		return $this;
	}
	public function fun3()
	{
		echo 'fun3 of ABC class.';
		echo '<br>';
		return $this;
	}
}

$abc = new ABC;

// return the object from fun1 of ABC class.
$abc->fun1()->fun2()->fun3();

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
