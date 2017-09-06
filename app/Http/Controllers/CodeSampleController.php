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
    public function tuitionCalculator(){
        return view('programs/js/tuition-calculator');
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
        $currentDate = date("n/j/Y");
        return view('programs/php/timeanddates')->with(compact('holidaysArray'));
    }

    public function setCountdown(HolidaysService $daysRemaining){
        $countdownResponse = new HolidaysService();
        $daysRemaining = $countdownResponse->getCountdown();

        return view('programs/php/timeanddates')->with(compact('daysRemaining'));
    }

    public function testPython(){
        return view('/files/python/py-calculations.html');
    }
}
