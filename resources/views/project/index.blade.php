@extends('_layout.base')

@section('content')
<section class="content-header">
    <h1>
        <i class="fa fa-bar-chart"></i> Projects
        <small>List of the main projects on last 14 years</small>
    </h1>
</section>
<section class="content">
    <p>List of the main projects developed over 14 years working as a web developer and technical lead development teams.</p>
    <p>If you have any questions about any ot those projects please send me an email.</p>
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
</section>
@endsection
