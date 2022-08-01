<?php
	$version = "Version 0.1.0.1 alpha test 6";

	class phpWebTools{
	
		/*public funciton __construct(){
			
		}
		
		public function connect(){
			
		}*/
		
		public function generateUUID(int $version, int $variant){
			
			$time_low = array(dechex(rand(0, 15)), dechex(rand(0, 15)),
						dechex(rand(0, 15)), dechex(rand(0, 15)),
						dechex(rand(0, 15)), dechex(rand(0, 15)),
						dechex(rand(0, 15)), dechex(rand(0, 15)));

			$time_mid = array(dechex(rand(0, 15)), dechex(rand(0, 15)),
						dechex(rand(0, 15)), dechex(rand(0, 15)));

			$time_hi_and_version = array($version, dechex(rand(0, 15)),
						dechex(rand(0, 15)), dechex(rand(0, 15)));

			$clock_seq_hi_and_res_clock_seq_low = array($this->generateUUIDVariant($variant), dechex(rand(0, 15)),
						dechex(rand(0, 15)), dechex(rand(0, 15)));

			$node = array(dechex(rand(0, 15)), dechex(rand(0, 15)), dechex(rand(0, 15)), dechex(rand(0, 15)),
						dechex(rand(0, 15)), dechex(rand(0, 15)), dechex(rand(0, 15)), dechex(rand(0, 15)),
						dechex(rand(0, 15)), dechex(rand(0, 15)), dechex(rand(0, 15)), dechex(rand(0, 15)));
			
			//return $time_low . "-" . $time_mid . "-" . $time_hi_and_version . "-" . $clock_seq_hi_and_res_clock_seq_low . "-" . $node;
			
			$uuid = "";
			
			for($i = 0; $i < 8; $i++){
				$uuid . $time_low[$i];
			}
			for($i = 0; $i < 4; $i++){
				$uuid . $time_mid[$i];
			}
			for($i = 0; $i < 4; $i++){
				$uuid . $time_hi_and_version[$i];
			}
			for($i = 0; $i < 4; $i++){
				$uuid . $clock_seq_hi_and_res_clock_seq_low[$i];
			}
			for($i = 0; $i < 12; $i++){
				$uuid . $node[$i];
			}
		}

		private function generateUUIDVariant(int $variant){
			//0 = Variant 10
			//1 = Variant 110
			//2 = Variant 0
			//3 = Variant 111
			switch($variant){
				case 0:
					return dechex(rand(8, 11));
				case 1:
					return dechex(rand(12, 13));
				case 2:
					return dechex(rand(0, 7));
				case 3:
					return dechex(rand(14, 15));
				default:
					return "Error";
			}
		}
		
	}

?>