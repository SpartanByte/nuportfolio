<?php
namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Intervention\Image\ImageManager;
use Carbon\Carbon;
use Image;
use Response;
use File;
use App\Services\PageServices\SkillsRundownService;

class PageController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function home(){
        $today = Carbon::now()->format('l, F jS Y');
        return view('pages.home')->with(compact('today'));
    }
    public function about(){
        return view('pages/about');
    }
    public function experience(){
        return view('pages/experience');
    }
    public function skillsRundown(){
        $skillsList = new SkillsRundownService();
        $languagesList = $skillsList->getLanguages();
        $webTechnologiesList = $skillsList->getWebTechnologies();
        $javascriptLibraries = $skillsList->getJavaScriptLibraries();
        $databasesList = $skillsList->getDatabases();
        $serversList = $skillsList->getServers();
        $versionControlList = $skillsList->getVersionControl();
        $commandLineToolsList = $skillsList->getCommandLineTools();
        $ideTextEditorsList = $skillsList->getIDETextEditors();
        $scriptingLanguagesList = $skillsList->getScriptingLanguages();
        $iOTaRSoftwareList = $skillsList->getIOTARSoftware();
        $osList = $skillsList->getOperatingSystems();
        $otherSkillsList = $skillsList->getOtherSkills();

        return view ('pages.skills-rundown')
            ->with(compact('languagesList','webTechnologiesList', 'javascriptLibraries', 'databasesList', 'serversList','versionControlList','commandLineToolsList',
            'ideTextEditorsList','scriptingLanguagesList','iOTaRSoftwareList','osList','otherSkillsList'));
    }
    public function projects(){
        return view('pages/projects');
    }
    public function upload()
    {
        return view('pages/upload');
    }
    // new method for gallery page template
    public function galleryTemplate(){
        return view('templates/gallery-template');
    }

    public function currentPage(){
        $currentPage = url()->current();
        return view('code_pages.code-information', $currentPage);
    }

    public function denyRegister(){

        return redirect()->route('home');
    }

    public function lightbox(){
        $imagePath = 'images/photoshop';
        $imageFiles = File::allFiles($imagePath);
        $idReference = 0;
        return view('pages/lightbox-test')->with(compact('imagePath', 'imageFiles', 'idReference'));
    }

    // temp page for rsvp
    public function rsvp(){
        return view('pages/rsvp');
    }
}