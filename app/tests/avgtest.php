<?php
	/**
	* 
	*/
	class avgtest extends TestCase
	{

		public function testavgrate()
		{
			$bookRate=Mockery::mock('Book');
			$numRate=Mockery::mock('Book');
			$numRate->shouldReceive('getnumRate')->andReturn($numRate);
			$bookRate->shouldReceive('getbookRate')->andReturn($bookRate);
			$score=new Book($bookRate,$numRate);
			$avgrate=$bookRate/$numRate;
			$score=$score->calavgrate();

			$this->assertEquals($score,$avgrate);
		}
	}
?>