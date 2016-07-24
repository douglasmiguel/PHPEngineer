@extends('_layout.base')

@section('content')
<section class="content-header">
    <h1>
        <i class="fa fa-lightbulb-o"></i> Technology
        <small>PHP, Laravel 5, REST, MySQL, MongoDB, HTML5, CSS3, Javascript, etc...</small>
    </h1>
</section>
<section class="content">
    <div class="row">
        <div class="col-md-12">
            {{-- FRONT-END --}}
            <div class="box box-warning">
                <div class="box-header with-border">
                    <h3 class="box-title">Front-end</h3>
                </div>
                <div class="box-body">
                    <p></p>
                </div>
            </div>
            {{-- BACK-END --}}
            <div class="box box-success">
                <div class="box-header with-border">
                    <h3 class="box-title">Back-end</h3>
                </div>
                <div class="box-body">
                    <p></p>
                </div>
            </div>
            {{-- DEV-OPS --}}
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">Dev-ops</h3>
                </div>
                <div class="box-body">
                    <p></p>
                </div>
            </div>
            {{-- DEMONSTRATION PROJECT --}}
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Demonstration project</h3>
                </div>
                <div class="box-body">
                    <p>I've been working on a Laravel 5.1 project in the past few months to manage a role-playing game (based on <strong>Vampire: The Masquerade</strong>) that I participate with my friends. This project is in <a href="https://gitlab.com/douglasmiguel/MIDCharacterSheet" target="_blank">GitLab</a>. All programming is in English, as well as the application.</p>
                    <p>This project is a Linux server (Ubuntu) with PHP 5.6, MySQL and nginx. I was the one who set up this server on <a href="http://linode.com/" target="_blank">Linode</a>.</p>
                    <p>The structure of the database is in <strong><em>_docs/Model</em></strong> directory (MySQL Workbench files).</p>
                    <p>You can access the application using:</p>
                    <ul>
                        <li><a href="http://midsheet.work/" target="_blank">http://midsheet.work/</a></li>
                        <li><strong>E-mail:</strong> test@midsheet.work</li>
                        <li><strong>Password:</strong> test</li>
                    </ul>
                    <p>There are some blank pages, but navigating through the project one can find various things implemented (try create a character and print the PDF sheet).</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
