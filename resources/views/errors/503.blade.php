@extends('_layout.base')

@section('content')
<section class="content-header">
    <h1>
        <i class="fa fa-warning"></i> Error
        <small>503</small>
    </h1>
</section>
@include('errors._error')
@endsection
