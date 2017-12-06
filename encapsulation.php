
<?php
//Oops basically everything is object.
/**
* 
*/
class TV
{
	//private means we can acces this variable only within this class.
	protected $model;
	private $volume;

	function volumeUp()
	{
		$this->volume++;
	}  
	function volumeDown()
	{
		$this->volume--;
	}
	function getModel()
	{
		return $this->model;
	}
	
	function getVolume()
	{
		return $this->volume;
	}
	
	
	function __construct($m, $v)
	{
		$this->model=$m;
		$this->volume=$v;
	}
	
	
}

$tv = new TV('abc',3);
echo $tv->getModel();
echo $tv->getVolume();

class Plazma extends TV
{
	function getModel1()
	{
		return $this->model;
	}
 
}
$tv1 = new Plazma('xyz',2 );
echo $tv1->getModel1(); 
echo $tv1->getVolume();


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
