<?php
namespace abc{
	class xyz{
		public function __construct()
		{
			echo " xyz from abc namespace.";
		}
	
	}
}
namespace abc\ghi{
	class xyz{
		public function __construct()
		{
			echo " xyz from ghi namespace which inside the abc namespase.";
		}
	
	}
}

namespace def{
	class xyz{
		public function __construct()
		{
			echo " xyz from abc namespace.";
		}
	
	}
	
	$boj = new xyz();
	echo'<br>';
	//we r accessing abc namespace into the def namespace.
	$obj =new \abc\xyz();
	
	echo'<br>';
	// we are access  ghi namespace which is inside abc namespace using use key word.
	use abc\ghi\xyz as klm;
	$obj = new klm();
}

?>