<?php

class Db{
	protected static $table ='baseTable';
	
	public function select()
	{
		//first it will check the statement and pending the table name because of static key word in run time.  
		echo 'SELECT * from '. static::$table;
	}
	
	public function insert ()
	{
		echo 'INSERT into ' . static::$table;
	} 

}


class abc extends Db
{
	protected static $table = 'abc';
}

// It will prints the table anme of the Db class
$db = new Db;
$db->insert();


echo '<br>';
// it prints the table name of the abc class. first it will check the class name then prin the corresponding table name.
$obj = new abc;
$obj->insert();
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
