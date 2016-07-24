@extends('_layout.base')

@section('content')
<section class="content-header">
    <h1>
        <i class="fa fa-bar-chart"></i> Projects
        <small>List of the main projects on last 14 years</small>
    </h1>
</section>
<section class="content">
    <div class="projects">
        <div class="project">
            <h2>project title</h2>
            <p>project description</p>
            <a href="{{ route('project.show', 1) }}" title="see more details about this project: ">see more</a>
        </div>
    </div>
</section>
@endsection
