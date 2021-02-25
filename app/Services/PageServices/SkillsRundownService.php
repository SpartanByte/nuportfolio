<?php
namespace App\Services\PageServices;

use Illuminate\Http\Request;
use Carbon\Carbon;

class SkillsRundownService
{

	// This provides the array of holidays to fill the first two columns of PHP Holidays (php/timeanddates)
	// public $languagesArray = array("PHP, ", "Laravel MVC Framework, ", "JavaScript, ", "C#, ", "Razor (.NET Template Language), ", "Java, ", "some Python");


	public function getLanguages()
    {
		// return $this->languages; // available for 
		$languagesArray = array("PHP, ", "Laravel MVC Framework, ", "JavaScript, ", "C#, ", "Razor (.NET Template Language), ", "Java, ", "some Python");
		return $languagesArray;
	}
	public function getWebTechnologies(){
		$webTechnologiesArray = array("Umbraco (.NET CMS), ", "WordPress (PHP CMS)", "REST API, ", "JSON", "XML", "CURL (SSL Certificate Verification)");
		return $webTechnologiesArray;
	}
	public function getJavaScriptLibraries(){
		$javascriptLibraries = array("jQuery, ", "Bootstrap, ", "Node.js*, ", "Vue.js*, ", "Ionic.JS*, ", "KnockoutJS*");
		return $javascriptLibraries;
	}
	public function getDatabases(){
		$databasesArray = array("MySQL, ", "MS SQL, ", "SQLLite*");
		return $databasesArray;
	}
	public function getServers(){
		$serversArray = array("Vagrant, ", "Apache Server, ", "Microsoft Azure*, ", "IIS*, ", "Windows Server 2012");
		return $serversArray;
	}
	public function getVersionControl(){
		$versionControlArray = array("GitHub, ", "VSTS (Visual Studio Team Services, ", "GitBash (Command Line), ", "GitKracken (GUI Application)");
		return $versionControlArray;
	}
	public function getCommandLineTools(){
		$commandLineToolsArray = array("Vagrant, ", "PuTTY, ", "GitBash, ", "Laravel Artisan, ", "Laravel PHP Tinker");
		return $commandLineToolsArray;
	}
	public function getIDETextEditors(){
		$ideTextEditorsArray = array("Visual Studio 2017 (.NET), ", "Eclipse (Java), ", "Sublime Text (PHP, JavaScript), ", "Visual Code (CSHTML/Razor), ", "Android Studio*");
		return $ideTextEditorsArray;
	}
	public function getScriptingLanguages(){
		$scriptingLanguagesArray = array("PowerShell*, ", "Python, ", "PHP", "JavaScript, ", "Lua");
		return $scriptingLanguagesArray;
	}
	public function getIOTARSoftware(){
		$iotARSoftwareArray = array("PTC Thingwork (IoT), ", "Vuforia Studio (AR), ", "PTC Creo (PLM)*");
		return $iotARSoftwareArray;
	}
	public function getOperatingSystems(){
		$osArray = array("Microsoft Windows, ", "Linux (Ubunto and Fedora)");
		return $osArray;
	}
	public function getOtherSkills(){
		$otherSkillsArray = array("Adobe Photoshop, ", "GIMP Graphic Application", "VirtualBox (Virtual Machine Software, ", "VMWare (Virtual Machine Software)");
		return $otherSkillsArray;
	}
}