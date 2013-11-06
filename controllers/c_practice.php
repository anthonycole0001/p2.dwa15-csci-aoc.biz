<?php
class practice_controller extends base_controller	{
	
	public function test1(){

		require(APP_PATH.'/libraries/image.php');

		//echo APP_PATH."<br>";
    	//echo DOC_ROOT."<br>";


		$imageObj = new Image('http://placekitten.com/1000/1000');

		$imageObj->resize(200,200);

		$imageObj->display();

	}

		public function text2(){

			echo Time::now();
	}

		public function test_DB(){

			/*
			$q = 'INSERT INTO users SET first_name = "Albert", last_name = "Einstein"';

			echo $q;

			DB:: instance(DB_NAME)-> query($q);

			*/
			/*
			$q= 'UPDATE users SET email = "albert@emc.com"
			WHERE first_name = "Albert"';

			echo $q;

			DB:: instance(DB_NAME)-> query($q);
			*/


			/*
			$new_user = array(
				'first_name' => 'Lucinda',
				'last_name' => 'Garber',
				'email'  => 'Lucinda@gmail.com',
			);


			echo $new_user;


			DB:: instance(DB_NAME)-> INSERT('users', $new_user);
			*/



}
