<?php
	/**
	* 
	*/
	class buybooktest extends TestCase{


	public function testnewreqkey()
		{
			$buy = new buyBook;
			$buy->setbookId(789);
			$buy->setuserId(987);
			$temp=$buy->newreqkey();
			
			$this->assertEquals(987,$temp->userid);
			$this->assertEquals(789,$temp->bookid);

		}
	}
?>