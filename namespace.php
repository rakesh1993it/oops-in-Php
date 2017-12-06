<?php
namespace def{
//def namespace.
	class xyz{
	
		public function __construct()
		{
			echo "XYZ from def namespace.";
		}
	}	
}

namespace {
//global namespace.
	class xyz{
	
		public function __construct()
		{
			echo " XYZ from global namespace.";
		}
	}
	// We are access instance namespace.
	$obj =new xyz();
	echo '<br>';
	//We can access def name space this way.
	$obj = new def\xyz();
	echo '<br>';
	//Another procedure is using use key word.
	use def\xyz as abc;// here abc is alise name. we can give any name of alie.
	 $obj1 = new abc();
	
}




 