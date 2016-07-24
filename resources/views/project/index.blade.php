@extends('_layout.base')

@section('content')
<section class="content-header">
    <h1>
        <i class="fa fa-bar-chart"></i> Projects
        <small>List of the main projects on last 14 years</small>
    </h1>
</section>
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <p>List of the main projects developed over 14 years of working as a web developer and technical lead for development teams.</p>
                    <p>If you have any questions about any of these projects please send me an email.</p>
                </div>
                <div class="box-body">
                    <ul class="projects">
                        @forelse ($projects as $project)
                        <li class="project">
                            <a href="{{ route('project.show', $project->slug) }}" title="see more details about this project: {{ $project->title }}">{{ $project->title }}</a> ({{ $project->year }})
                        </li>
                        @empty
                        <li class="empty">
                            <p>No project available.</p>
                        </li>
                        @endforelse
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
