


<?php
//Oops basically everything is object.
/**
* 
*/
class TV
{
	public $model;
	public $volume;

	function volumeUp()
	{
		$this->volume++;
	}  
	function volumeDown()
	{
		$this->volume--;
	}
	// We can also override the constructor.
	function __construct($m, $v)
	{
		$this->model=$m;
		$this->volume=$v;
	}
}
//How to work constructore. First we are passing the valu into the constructor then print the value.
$tv1 = new TV('def',2);

echo $tv1->model;
echo $tv1->volume;

//inheritance mean reusability the code. parent and child class relationship.

class plazmaTv extends TV {

	//Here we override the model variable.
	public $model='Plazma series 1';
	//Here we override the constructor without pasing parametter.
	function __construct($m, $v)
	{
		$this->model=$m;
		$this->volume=$v;
	}
	

}



$plazma= new plazmaTv("Plazma",2);
echo $plazma->model;
echo $plazma->volume;



$plazma->model='Plazma series 3';
echo $plazma->model;

$tv1 = new TV('simple TV',1);

echo $tv1->model;
echo $tv1->volume;


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
