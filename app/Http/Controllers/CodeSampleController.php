<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Services\CodeSamples\PHP\HolidaysService;

/* use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;*/


class CodeSampleController extends Controller
{

    public function jqueryToggle()
    {
        return view('programs/js/jquery-toggling');
    }
    public function jsSlideshow()
    {
    	return view('programs/js/slideshow');
    }

    public function phpTime(){
    	$CST = date_default_timezone_set("America/Chicago"); 
        $currentDate = date("n/j/Y");
    	$timestamp = date("h:i");
        return view('programs/php/timeanddates')->with(compact('currentDate', 'timestamp')); 
    } 

    /* public function phpHolidays(){
        // Setting default timezone
        // $timezone = date_default_timezone_set("America\Chicago");
        $today = date("n/j/Y");

        // Need to get each holiday name and date into a multidimensional array to print to a table "days until..." for example
        $holidays = [
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

        /* foreach($holidays as list($holiday, $date)){

                      $central = date_default_timezone_set("America/Chicago"); 
                      $daysUntil = strtotime($date);
                      $daysUntil = ceil(($daysUntil-time())/60/60/24); 

                      if($daysUntil < 0){
                        $daysUntil = $daysUntil + 365;}
                     
                     // echo '<tr><td>'.$holiday. "</td><td>" . $date . "</td><td>" .$daysUntil. " days remaining </td></tr>"; 
                        } */

        /* return view('programs/php/timeanddates')->with(compact('holidays', 'today'));
        //return view('programs/php/timeanddates')->with(['holidays' => $holidays, 'holiday' => $holiday, 'date' => $date, 'daysUntil' => $daysUntil]);
    } */

    public function setHolidays(HolidaysService $holidaysArray){

        $h1 = new HolidaysService();

        $holidaysArray = $h1->getHolidays();


        return view('programs/php/timeanddates')->with(compact('holidaysArray'));       
    }
    public function setDaysRemaining(HolidaysService $daysRemaining){
        $daysRemaining = $daysUntil->getDaysRemaining(); 
    }

}
