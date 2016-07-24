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
                    <p>When I started working with development in 2002, I built layouts in Photoshop, and used the PSD to generate HTML and CSS.</p>
                    <p>In 2004 I stopped using tables to build structures and sites and started using only CSS. I also learned a lot about AJAX that year and ended up greatly improving my use of JavaScript.</p>
                    <p>I started using frameworks (such as jQuery) in 2009 when I started working in an advertising agency.</p>
                    <p>Since then, I've been doing everything possible to keep up with new technologies, but I devoted myself to study PHP and dev-ops in recent years, so I feel I need to make some progress in this area.</p>
                    <p><strong>Strong skills:</strong></p>
                    <ul>
                        <li>HTML5</li>
                        <li>CSS3</li>
                        <li>JavaScript</li>
                        <li>jQuery</li>
                        <li>PSD-2-HTML</li>
                        <li>Bootstrap</li>
                    </ul>
                    <p><strong>Skills to improve:</strong></p>
                    <ul>
                        <li>Animations using HTML5 and CSS3</li>
                        <li>JavaScript Modern Frameworks: AngularJS, ReactJS, BackboneJS, etc.</li>
                        <li>ECMAScript</li>
                        <li>NodeJS</li>
                    </ul>
                </div>
            </div>
            {{-- BACK-END --}}
            <div class="box box-success">
                <div class="box-header with-border">
                    <h3 class="box-title">Back-end</h3>
                </div>
                <div class="box-body">
                    <p>Early in my career (I was very young - 15 years old) I did not have many opportunities to study programming logic, data structure, so it took a few years for me to learn object orientation, optimization of queries in MySQL or how to structure a web server. That began to change when I started my first college at 18, (2005) and it eventually became my main area of interest.</p>
                    <p>In the last  10 years I have been dedicating myself to study: programming logic, performance and design patterns and I am very happy with the results.</p>
                    <p><strong>Strong skills:</strong></p>
                    <ul>
                        <li>PHP</li>
                        <li>PHP Command-line</li>
                        <li>Laravel 5</li>
                        <li>SlimFramework</li>
                        <li>MySQL (SQL queries, optimization)</li>
                        <li>MongoDB</li>
                        <li>RESTfull API's</li>
                        <li>Specification of projects (use cases) and database modeling</li>
                    </ul>
                    <p><strong>Points to improve:</strong></p>
                    <ul>
                        <li>TDD</li>
                        <li>Socket</li>
                    </ul>
                    <p><strong>Other languages that had little experience:</strong></p>
                    <ul>
                        <li>Perl</li>
                        <li>Java</li>
                        <li>Ruby (Rails)</li>
                    </ul>
                </div>
            </div>
            {{-- DEV-OPS --}}
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">Dev-ops</h3>
                </div>
                <div class="box-body">
                    <p>Nine years ago, when moved to São Paulo, I began to face major challenges in my career, because I found out my lack of knowledge in this area.</p>
                    <p>When I worked on the project <a href="{{ route('project.show', 'gazeta-esportiva') }}" title="Gazeta Esportiva">GazetaEsportiva</a> we had several performance problems because the site was massively accessed on days of soccer matches. I had to study a lot about Apache, cache, SQL query optimization at that time and I’ve never stopped studying ever since.</p>
                    <p>In 2011 I started to learn how to set up my own servers in Linux environment and since then I've been doing this often, configuring machines for my own use and for customers.</p>
                    <p>In 2013 I changed from Apache to nginx and since then I have focused my studies on this server.</p>
                    <p><strong>Strong skills:</strong></p>
                    <ul>
                        <li>Configuration of web servers: Apache and nginx + PHP</li>
                        <li>Configuration of MySQL servers</li>
                        <li>Creating backup routines for MySQL database</li>
                        <li>DNS configuration, domains, sub-domains and SSL</li>
                    </ul>
                    <p><strong>Points to improve:</strong></p>
                    <ul>
                        <li>Virtualization: Docker, Vagrant, ...</li>
                        <li>Servers to: NodeJS e MongoDB</li>
                        <li>Script automations like Ansible</li>
                    </ul>
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
                    <p>There are some blank pages, but if you navigate through the project you can find various things implemented (try creating a character and printing the PDF sheet).</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
