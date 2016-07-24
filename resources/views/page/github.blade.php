@extends('_layout.base')

@section('content')
<section class="content-header">
    <h1>
        <i class="fa fa-github"></i> GitHub
        <small>Laravel 5.2 example project</small>
    </h1>
</section>
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title"><i class="fa fa-code"></i> This project</h3>
                </div>
                <div class="box-body">
                    <p>This project is available on <i class="fa fa-github"></i> <strong>GitHub</strong>:</p>
                    <h4><a href="https://github.com/douglasmiguel/PHPEngineer" target="_blank">https://github.com/douglasmiguel/PHPEngineer</a></h4>
                    <br>
                    <p>It was developed with:</p>
                    <ul>
                        <li><a href="https://laravel.com/docs/5.2/" target="_blank">Laravel 5.2</a> (composer, migrations, artisan, etc...)</li>
                        <li>Bootstrap <a href="https://almsaeedstudio.com/preview" target="_blank">AdminLTE</a></li>
                        <li>MySQL</li>
                        <li>SublimeText</li>
                        <li><span class="badge bg-green">Linode</span> Ubuntu 14.04 + PHP 5.6 + MySQL</li>
                        <li><span class="badge bg-blue">GitHub</span> Automatic deploy on branch <strong>prod</strong></li>
                        <li>Some <i class="fa fa-coffee"></i> coffee and a lot of <i class="fa fa-heart"></i> love!!!</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
