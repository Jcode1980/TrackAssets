<?php	
	require_once(BLOGIC."/BLogic.php");
	
	class FrontPage extends PLController
	{
		public function __construct($formData)
		{
			parent::__construct($formData, "FrontPage");
		}
	}

?>