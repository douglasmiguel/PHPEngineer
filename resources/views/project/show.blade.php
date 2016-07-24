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
                    <h3 class="box-title">{{ $project->title }}</h3>
                    <p>{!! $project->description !!}</p>
                    @foreach($project->technologies as $technology)<span class="badge bg-purple">{{ $technology->technology->technology }}</span> @endforeach
                </div>
                <div class="box-body project">
                    @if(count($project->images)>0)
                    <div class="images">
                        @foreach($project->images as $image)
                        <div class="image">
                            <a href="javascript:void();"><img src="{{ $config->path_root }}image/project/{!! $image->image !!}" alt="{!! $image->description !!}" title="{!! $image->description !!}"></a>
                        </div>
                        @endforeach
                        <div class="clearfix"></div>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <div class="row button-back">
        <div class="col-xs-2"></div>
        <div class="col-xs-8">
            <a href="{{ route('project.index') }}" class="btn btn-block bg-purple btn-lg">Project's list</a>
        </div>
        <div class="col-xs-2"></div>
    </div>
</section>
@endsection
