<?php  
	
	namespace App\Services\CodeSamples\PHP;

	use Illuminate\Http\Request;


	class HolidaysService{

		public $holidaysArray = [
	            ["New Years Day", "January 01"],
	            ["Valentine's Day", "February 14"],
	            ["Memorial Day", "May 29"], 
	            ["Independence Day", "July 04"],
	            ["Labor Day", "September 04"],
	            ["Halloween", "October 31"],
	            ["Veterans Day", "November 11"],
	            ["Christmas", "December 25"],
	            ["New Years Eve", "December 31"],
	        ]; 

		public function getHolidays(){
	
			return $this->holidaysArray;
		}


		public function getDaysRemaining(){

			foreach($holidays as list($holiday, $date))
			{

				$central = date_default_timezone_set("America/Chicago"); 
	            $daysUntil = strtotime($date);
	            $daysUntil = ceil(($daysUntil-time())/60/60/24); 

	            if($daysUntil < 0)
	            {
	            	$daysUntil = $daysUntil + 365;
	        	}

	        	return $daysUntil;
	        }

		}
	}