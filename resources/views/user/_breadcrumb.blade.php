<section class="content-header">
    <h1>
        Usuário
        <small>Gerenciar usuários que administram</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{ route('home') }}"><i class="fa fa-home"></i> Home</a></li>
        <li><a href="{{ route('user.index') }}"><i class="fa fa-user"></i> Usuário</a></li>
    </ol>
</section>
@include('admin._layout.form.error')
@include('admin._layout.form.message')
@include('admin._layout.form.password')
