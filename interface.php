
<?php 
// We can't declare data variable and constructor into the interface. here we can olny declare method.
//it's basically use for multiple inheritance which is not posible by using abstract class.

 /*We can't declare private or protected function into interface but abstract class it's possible.
*/
interface a{
	public function abc();
}

interface b{
	public function xyz();
}

class c implements a,b{

	public function abc()
	{
		echo ' abc function';
	}
	
	public function xyz()
	{
		echo ' xyz function';
	}
}

$obj = new c;
echo $obj->abc();
echo $obj->xyz();

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
