<?php
	/**
	* 
	*/
	class accessbooktest extends TestCase{

	
		public function testaddnewkey()
		{
			$access = new accessBook;
			$access->setbookId(1234);
			$access->setuserId(4321);
			$temp=$access->addnewkey();

			$this->assertEquals(4321,$temp->userid);
			$this->assertEquals(1234,$temp->bookid);

		}
	}
?>