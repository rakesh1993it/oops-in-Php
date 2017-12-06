
<?php
//We can access to the class directly with out object.

class abc {
	
	public static $objectcount = 0;
	
	public static function getCount()
	{
		return self::$objectcount;
	}
	
	public function __construct()
	{
		self::$objectcount++;
	}
}

$a = new abc();
$b = new abc();
$c = new abc();

echo abc::getCount();

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
