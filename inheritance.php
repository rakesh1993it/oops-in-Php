
<?php
class Shape {
	public function name(){
    	echo "I am a shape.";
    }
}

class circle extends Shape {

}
/*The Key word here is extends . When Cirlce class extends from Shape class, it inherits all of the public and protected method as well as properties from Shape class.*/
$circle = new circle();
$circle->name();

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
