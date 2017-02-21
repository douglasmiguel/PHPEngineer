@extends('_layout.base')

@section('content')
<section class="content-header">
    <h1>
        <i class="fa fa-graduation-cap"></i> Education
    </h1>
</section>
<section class="content education">
    <div class="row">
        <div class="col-md-12">
            {{-- Not graduate --}}
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Not graduate</h3>
                </div>
                <div class="box-body">
                    <p>Throughout my career I have always given emphasis on my professional goals, which have often presented as opportunities that forced me to leave college and relocate. I am currently enrolled in an online IT Management course,  to be concluded at year 2017 (June), when I will have my diploma.</p>
                </div>
            </div>
            {{-- IT Management --}}
            <div class="box box-warning">
                <div class="box-header with-border">
                    <h3 class="box-title">IT Management</h3>
                    <p>Tecnólogo em Gestão da Tecnologia da Informação EAD</p>
                    <p><em>online course</em></p>
                </div>
                <div class="box-body">
                    <h3><a href="http://portal.anhembi.br/" target="_blank">Universidade Anhembi Morumbi</a></h3>
                    <h4>São Paulo – SP</h4>
                    <p>Startet at 2013 July</p>
                    <p>Forecasted Completion December 2016 <em>*</em></p>
                    <p class="info"><em>*</em> All disciplines have been completed, pending only the 120 hours of extracurricular courses to be submitted, as well as an internship report (professional experience). The delivery of these documents need not be in person.</p>
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
