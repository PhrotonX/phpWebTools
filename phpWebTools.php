<?php
	$version = "Version 0.1.0.1 alpha test 1";

	class phpWebTools{
	
		/*public funciton __construct(){
			
		}
		
		public function connect(){
			
		}*/
		
		public function generateUUID(int $variant, int $version){
			
		
			$time_low = dechex(rand(0, 16));
			$time_mid = "";
			$time_hi_and_version = "";
			$clock_seq_hi_and_res_clock_seq_low = "";
			$node = "";
			
			return $time_low;
			
		}
	}

?>