<?php 
class abc
{
	public function test()
	{
		echo 'Test from class ABC.';
	}

}

trait test{
	public function test2()
	{
		echo 'Test2 from class trait.';
	}
}

trait test1{
	public function test3()
	{
		echo 'Test3 from class test3.';
	}
}

class one extends abc{
	//we can use multiple traits.
	use test, test1;
	
}

class two extends abc{
	use test;
}

class three extends abc{

}

class four extends abc{

}

class five extends abc{

}
$one = new one;
$one->test2();
echo'<br>';
$one->test3();

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
