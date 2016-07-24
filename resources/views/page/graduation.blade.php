@extends('_layout.base')

@section('content')
<section class="content-header">
    <h1>
        <i class="fa fa-graduation-cap"></i> Graduation
        <small>-</small>
    </h1>
</section>
<section class="content graduation">
    <div class="row">
        <div class="col-md-12">
            {{-- Not graduate --}}
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Not graduate</h3>
                </div>
                <div class="box-body">
                    <p>Throughout my career I have always given emphasis in my professional career and often saw me with opportunities that forced me to leave college and me relocating. The conclusion of my place at the end of the year 2016, for this last semester I only pending reports for delivery, as the course is online there is no need for any classroom activity, all the tests have been performed.</p>
                </div>
            </div>
            {{-- IT Management --}}
            <div class="box box-warning">
                <div class="box-header with-border">
                    <h3 class="box-title">IT Management</h3>
                    <p>Tecnólogo em Gestão da Tecnologia da Informação EAD</p>
                </div>
                <div class="box-body">
                    <h3><a href="http://portal.anhembi.br/" target="_blank">Universidade Anhembi Morumbi</a></h3>
                    <h4>São Paulo – SP</h4>
                    <p>Startet at 2013 July</p>
                    <p>Forecasted Completion December 2016 <em>*</em></p>
                    <p class="info"><em>*</em> All disciplines have been completed, lacking only fulfill 120 hours of extracurricular courses and submit an internship report (professional experience). The delivery of these documents need not be in person.</p>
                </div>
            </div>
            {{-- System Analyses and Development --}}
            <div class="box box-danger">
                <div class="box-header with-border">
                    <h3 class="box-title">System Analyses and Development</h3>
                    <p>Análise e Desenvolvimento de Sistemas</p>
                </div>
                <div class="box-body">
                    <h3><a href="http://www.ibta.edu.br/" target="_blank">IBTA</a></h3>
                    <h4>São Paulo – SP</h4>
                    <p>Three semesters - 2010 / 2011</p>
                </div>
            </div>
            {{-- Information Systems --}}
            <div class="box box-danger">
                <div class="box-header with-border">
                    <h3 class="box-title">Information Systems</h3>
                    <p>Sistemas de Informação</p>
                </div>
                <div class="box-body">
                    <h3><a href="http://www.uniube.br/" target="_blank">Universidade de Uberaba (UNIUBE)</a></h3>
                    <h4>Uberaba - MG</h4>
                    <p>Three semesters - 2005 / 2006</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
