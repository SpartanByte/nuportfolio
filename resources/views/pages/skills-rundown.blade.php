    @extends('layouts.default')
    @section('description', 'Skills and Technology for software and web application software')
    @section('title', 'Skills Rundown')

    @section('content')
    <div class="static-content about">
        <span class="page-header uppercase-shadow mid-size-font">Skills and Technologies Rundown</span><br />
        <section class="background">
            
            <table class="skills-rundown-table">
                <tr>
                    <th>Type of Skill/Technology</th>
                    <th>Skill(s)</th>
                </tr>
            <tr>
                <td>Languages</td>
                <td>
                    @foreach($languagesList as $language)
                        {{ $language }}
                    @endforeach
                </td>
            </tr>
             <tr>
                <td>Web Technologies</td>
                <td>
                    @foreach($webTechnologiesList as $webTechnology)
                        {{ $webTechnology }}
                    @endforeach
                </td>
            </tr>
            <tr>
                <td>JavaScript</td>
                <td>
                    @foreach($javascriptLibraries as $javascriptLibrary)
                        {{ $javascriptLibrary }}
                    @endforeach
                </td>
            </tr>
            <tr>
                <td>Databases</td>
                <td>
                    @foreach($databasesList as $database)
                        {{ $database }}
                    @endforeach
                </td>
            </tr>
            <tr>
                <td>Server Environments</td>
                <td>
                    @foreach($serversList as $server)
                        {{ $server }}
                    @endforeach
                </td>
            </tr>
            <tr>
                <td>Version Control Tools</td>
                <td>
                    @foreach($versionControlList as $versionControlTool)
                        {{ $versionControlTool }}
                    @endforeach
                </td>
            </tr>
            <tr>
                <td>Command Line Tools</td>
                <td>
                    @foreach($commandLineToolsList as $commandLineTool)
                        {{ $commandLineTool }}
                    @endforeach
                </td>
            </tr>
            <tr>
                <td>IDE/Text Editors</td>
                <td>
                    @foreach($ideTextEditorsList as $ideTextEditor)
                        {{ $ideTextEditor }}
                    @endforeach
                </td>
            </tr>
            <tr>
                <td>Scripting Languages</td>
                <td>
                    @foreach($scriptingLanguagesList as $scriptingLanguage)
                        {{ $scriptingLanguage }}
                    @endforeach
                </td>
            </tr>
            <tr>
                <td>IoT (Internet of Things), AR (Augmented Reality), PLM (Product Lifecycle Management) Software</td>
                <td>
                    @foreach($iOTaRSoftwareList as $iOTaRSoftware)
                        {{ $iOTaRSoftware }}
                    @endforeach
                </td>
            </tr>
            <tr>
                <td>Operating Systems</td>
                <td>
                    @foreach($osList as $operatingSystem)
                        {{ $operatingSystem }}
                    @endforeach
                </td>
            </tr>
            <tr>
                <td>Other Skills/Technologies</td>
                <td>
                    @foreach($otherSkillsList as $otherSkill)
                        {{ $otherSkill }}
                    @endforeach
                </td>
            </tr>
            </table>
            <p><strong>*</strong> = mild experience/beginner</p>
        </section>
    </div>
@stop