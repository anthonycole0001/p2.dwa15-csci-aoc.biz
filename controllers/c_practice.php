<?php
class practice_controller extends base_controller	{
	
	public function test1(){

		require(APP_PATH.'/libraries/image.php');

		$imageObj = new Image('http://placekitten.com/1000/1000');

		$imageObj->resize(200,200);

		$imageObj->display();

	}

		public function text2(){

			echo Time::now();
	}

}
