@extends('layouts.default')
@section('description', 'General information about server-side language PHP and the Laravel framework')
@section('title', 'Laravel Information')

@section('content')
<div class="static-content general-coding">
    <span class="page-header uppercase-shadow mid-size-font">Laravel</span><hr />
    <img class="coding-logo" src="/images/logos/laravel-white-block.png">
    <span class="section-header mid-size-font">Laravel</span>
    <p>Laravel is a very powerful PHP MVC (Model-View-Controller) framework that has gradually and consistently become very popular among PHP developers. Many repedative tasks such as requests, responses, and routing are built into Laravel while including a massive package repository which adds to an impressive list of features and packages that come with Laravel out of the box.</p>

    <span class="section-header mid-size-font">Resources for me while developing</span>
    <p>
        <a href="https://en.wikipedia.org/wiki/Laravel">Laravel on Wikipedia</a><br>
        <a href="https://www.linkedin.com/pulse/8-features-make-php-laravel-framework-best-varun-bhagat-1">LinkedIn article on 8 best features of Laravel</a><br>
        <a href="https://www.cloudways.com/blog/whats-new-in-laravel-5-6/">New features in 5.6</a>
    </p>

    <div>
        <br /><span class="page-header mid-size-font" style="letter-spacing:0;">Official Laravel Features &amp; Packages, APIs, and Beyond</span><br />

        {{-- Blade --}}
        <h3 class="alt-h3">Blade Templating Engine</h3>
        <p><a href="https://laravel.com/docs/5.6/blade" title="Laravel 5.6 Blade" target="_blank">Blade</a> is Laravel's template engine, much like ASP.NET's <a href="https://docs.microsoft.com/en-us/aspnet/web-pages/overview/getting-started/introducing-razor-syntax-c" title="Microsoft Docs: ..Using Razor Syntax" target="_blank">Razor</a> templating engine for C#. Just like the Razor template engine, Blade can be used to generate markup (HTML) as well as simplifying many procedural PHP syntax. This includes importing routes into a typical link (rather than URL), if/else conditions, and layout. With Blade, you can control multiple layouts and sections, including parent & sibling templates.</p>

        <p><a href="/files/laravel/blade-examples.txt">Code comparisons and a couple simple examples of Blade vs. Procedural PHP</a></p>

        {{-- Carbon --}}
        <h3 class="alt-h3">Carbon</h3>
        <p><a href="https://carbon.nesbot.com/docs/" title="NesBot Carbon Documentation" target="_blank">Carbon</a> comes out of the box in Laravel. It's inherits PHP's <em>DateTime</em> class and drastically simplifies many timestamp, timezone, formatting and other retrieval/manipulation tasks. It can be used within many types of classes from Controller classes to Service or Job classes but must have it imported into that class using the "use" directive such as <code>use Carbon\Carbon;</code></p>
        <p>You can "instantiate" (create a new instance of) Carbon two ways. <br>
            The first is more standard to Object Oriented Programming: <code>$carbon = new Carbon();</code>. This is equivalent to <code>$carbon = Carbon::now();</code> (exaplained below) but can also be instantiated as a certain date as well as timezone: <code>$carbon = new Carbon('last day of January 2018', 'America/Chicago');</code>.<br >
            You can also create a Carbon instance directly: <code>$dtChicago = Carbon::create('2018, 1, 1, 0, 0, 0, 'America/Chicago');</code>
        </p>
        <p>Carbon also comes with many methods for manipulation of date and time gathering and formatting. Some examples are below:<br>
            Add two weeks from today: <code>$twoWeekAdvance = Carbon::now()->addWeeks(2)); </code><br>
            Grab tomorrow directly from Carbon: <code>$tomorrow = Carbon::tomorrow('America\Chicago');</code></p>
        <p>A full list of methods for formatting, gathering, and other Carbon functionality can be found <a href="http://carbon.nesbot.com/docs/" title="nesbot Carbon Documentation" target="_blank">Nesbot Carbon Documentation</a>.</p>

        {{-- Eloquent --}}
        <h3 class="alt-h3">Eloquent ORM</h3>
        <p>Laravel's <a href="https://laravel.com/docs/5.6/eloquent" title="Laravel 5.6 Eloquent ORM" target="_blank">Eloquent ORM</a> allows the developer/programmer to work directly with database objects and relationships using a straight-forward, eleqant syntax. An Object Relational Mapper (ORM) is "a programming technique for converting data between incompatible type systems using object oriented languages" (<a href="https://en.wikipedia.org/wiki/Object-relational_mapping" title="Object-Relational-Mapping" target="_blank">Source</a>).</p>
        <p>Elquent ORM allows the Model class to be interacted with directly once the "use" directive is added to the beginning of a class that will be using it, such as <code>use App\Users;</code>. From there you can get the following<br>
            All users: <code>$users = Users::all();</code><br>
            A certain user: <code>$updatedUser = Users::find($id);</code> (where $id would come through a request such as a form).<br>
            Querying can be much simpler: <code>Users::where('first_name', 'Brian')->orderBy('created_at')->get();</code>
        </p>
        <p>As with other MVC frameworks, Model classes can also be in their own folders. Used in the following relationship example, a user can have one profile:<br>
            Namespace: <code>namespace App\Models;</code><br>
            Import the Class needed: <code>App\Models\Profile;</code>
            Relationship:<br>
                <code>public function getProfile(){<br>
                    return $this->hasOne('App\Models\Users', 'id', 'profile_id');<br>
                }</code>
        </p>
        <p><a href="https://laravel.com/docs/5.6/eloquent" title="Laravel Docs Eloquent ORM" target="_blank">More information on Laravel's Eloquent ORM</a></p>

        {{-- Artisan --}}
        <h3 class="alt-h3">Artisan CLI</h3>
        <p><a href="https://laravel.com/docs/5.6/artisan" title="Laravel Docs Artisan CLI" target="_blank">Artisan</a> is Laravels CLI (command-line interface). Artisan CLI grants the functionality of running out of the box commands for creating migration, controller, model classes, and more. It also allows output for development and/or troubleshooting such as checking routes with <code>php artisan route:list</code> or database migration tasks such as rolling back: <code>php artisan migrate:rollback</code>. It also allows the developer to create custom commands to be run either using Carbon or using Cron jobs. These custom commands can be added to the <code>app\Console\Commands</code> such as <code>app\Console\Commands\EmailReminder.php</code>. This is defined class's $signature variable such as <code>$signature = 'email:reminder';</code>. The $description variable allows you to add a description when all commands are listed in <code>php artisan list</code>. The class's <code>handle()</code> method either handles the command itself or will include if you desfine the logic in a Service class.</p>
        <p>This command is then registered in Laravel's "Kernel.php" in the $commands method:<br>
            <code>protected $commands = [<br>
                \App\Console\Commands\EmailReminder::class,<br>
                // Other commands here<br>
                ];
            </code><br>
        </p>
        <p>If this is an automated command, such as checking if user passwords are near expiration and it is to be logged, Cron jobs can be used such as the following. It checks at 6:30am everyday and logs results:<br>
            <code>
                protected function schedule(Schedule $schedule){<br>
                    $schedule->command('email:reminder')<br>->cron('30 6 * * * *')->timezone('America/Chicago')<br>->sendOutputTo(base_path('PasswordReminders.log'));<br>
            }</code><br>
        If multiple commands need to be scheduled, they are simply added after each one in the schedule() method as above.
        </p>
        <p><a href="https://laravel.com/docs/5.6/artisan" title="Laravel Docs on Artisan CLI" target="_blank">More information on Laravel's Artisan CLI</a></p>

        {{-- Swiftmailer --}}
        <h3 class="alt-h3">Swiftmailer</h3>
        <p><a href="https://swiftmailer.symfony.com/" title="Symfony's Swiftmailer Documentation" target="_blank">Swiftmailer</a> is a <a href="https://symfony.com/" title="Symfony PHP framework" target="_blank">Symfony</a> PHP library that includes drivers for SMTP servers, which allows simpler email sending and receiving. Laravel is partially built on components from Symfony and Swiftmailer is included out of the box. Laravel use it under the <code>Mail::</code> <a href="https://laravel.com/docs/5.6/facades" title="Laravel Documentation on Facades" target="_blank"> Facade</a>. </p>
        <p>
            <code>Mail::send('emails.reminder', ['data' => $data], function($message) use($data){<br>
                $user_email = $data['email'];<br>
                $message->from('noreply@company.com', 'Some Company');<br>
                $message->to('$user_email');<br>
                $message->subject("Your Password Is Expiring!");<br>
            });
            </code><br>
            This sends an email view (in this case within emails/reminder.blade.php) to the user which generates any customization, such as the user's name, from the view and given data (contained in the $data[] array and functionality in the class before the Mail facade).
    </p>

        <p><strong>Information on more Laravel features will be coming to this page very soon.</strong></p>
    </div>


    <h4>Sources:</h4>
    <ul>
        <li><a href="https://symfony.com/about" title="Symfony Official Documentation" target="_blank">Symfony.com/about</a></li>
        <li><a href="https://en.wikipedia.org/wiki/Symfony" title="Symfony Wiki" target="_blank">Symfony wiki</a></li>
    </ul>
    <hr />
</div>
@stop