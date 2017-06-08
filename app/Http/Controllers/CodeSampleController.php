<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\CodeSamples\PHP\HolidaysService;

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

    public function setHolidays(HolidaysService $holidaysArray){
        $holidaysList = new HolidaysService();
        $holidaysArray = $holidaysList->getHolidays();

        return view('programs/php/timeanddates')->with(compact('holidaysArray'));    
    }


   /*public function setDaysRemaining(HolidaysService $remainingDays){
        $daysRemainingList = new HolidaysService();
        $remainingDays = $daysRemainingList->getDaysRemaining(); 

        return view('programs/php/timeanddates')->with(compact('remainingDays'));
    } */

}
