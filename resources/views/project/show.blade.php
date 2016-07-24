@extends('_layout.base')

@section('content')
<section class="content-header">
    <h1>
        <i class="fa fa-bar-chart"></i> Projects
        <small>project title</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{ route('project.index') }}"><i class="fa fa-home"></i> Back to project's list</a></li>
    </ol>
</section>
<section class="content">
    <div class="project">
        <h2>project title</h2>
        <p>project description</p>
        <ul>
            <li></li>
        </ul>
        <div class="images">
            <img src="" alt="">
            <img src="" alt="">
            <img src="" alt="">
        </div>
    </div>
</section>
@endsection
