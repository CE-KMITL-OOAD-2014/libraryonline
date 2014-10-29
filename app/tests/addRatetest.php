<?php
	/**
	* 
	*/
	class addRatetest extends TestCase
	{
		
		public function testaddrate()
		{
			$bookRate=Mockery::mock('Book');
			$bookRate->shouldReceive('getbookRate')->andReturn($bookRate);
			$score=new Book($bookRate);
			$finalscore=$bookRate;
			for ($i=1; $i <=5 ; $i++) { 
				$finalscore+=i;
				$score=$score->addrate(i);
				$this->assertEquals($score,$finalscore);
			}
		}
	}
?>