@extends('admin._layout.base')

@section('css')
<link rel="stylesheet" href="/admin/plugins/iCheck/all.css">
@endsection

@section('content')
@include('admin.user._breadcrumb')
<section class="content">
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Editar usuário</h3>
        </div>
        @include('admin.user._form', ['action'=>'edit', 'route'=>'user.update'])
    </div>
</section>
@endsection

@section('js')
<script src="/admin/plugins/iCheck/icheck.min.js"></script>
<script src="/admin/js/user/form.js"></script>
@endsection
