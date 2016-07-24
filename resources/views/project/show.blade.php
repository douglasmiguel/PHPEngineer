@extends('_layout.base')

@section('content')
<section class="content-header">
    <h1>
        <i class="fa fa-bar-chart"></i> <a href="{{ route('project.index') }}">Projects</a>
        <small>List of the main projects on last 14 years</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{ route('project.index') }}"><i class="fa fa-home"></i> Back to project's list</a></li>
    </ol>
</section>
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">{{ $project->title }} (<em><strong>{{ $project->year }}</strong></em>)</h3>
                </div>
                <div class="box-body">
                    <h5><a href="{{ $project->url }}" target="_blank">{{ $project->url }}</a></h5>
                    <p>{!! $project->description !!}</p>
                    @foreach($project->technologies as $technology)<span class="badge bg-purple">{{ $technology->technology->technology }}</span> @endforeach
                </div>
            </div>
        </div>
    </div>
    @if(count($project->images)>0)
    <div class="row project-images">
        @foreach($project->images as $image)
        <div class="col-md-4">
            <div class="box box-danger">
                <div class="box-header with-border">
                    <p>{!! $image->description !!}</p>
                </div>
                <div class="box-body">
                    <a href="{{ $config->path_root }}image/project/{!! $image->image !!}" target="_blank"><img src="{{ $config->path_root }}image/project/{!! $image->image !!}" alt="{!! $image->description !!}" title="{!! $image->description !!}"></a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    @endif
    <div class="row button-back">
        <div class="col-xs-2"></div>
        <div class="col-xs-8">
            <a href="{{ route('project.index') }}" class="btn btn-block bg-purple btn-lg">Project's list</a>
        </div>
        <div class="col-xs-2"></div>
    </div>
</section>
@endsection
