@extends('admin._layout.base')

@section('content')
@include('admin.user._breadcrumb')
<section class="content">
    <!--create new-->
    @include('admin._layout.list.button.new', ['label'=>'Criar novo usuário', 'route'=>'user.create'])
    <!--pagination-->
    @include('admin._layout.list.pagination.pagination', ['route'=>'user.index'])
    <!--list-->
    <table class="table table-striped">
    <thead>
        <tr>
            <th>#</th>
            <th>Usuário</th>
            <th>Criada em</th>
            <th>Opções</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($list as $user)
        <tr>
            <td>{{ $user->id }}</td>
            <td>
                {{ Html::image(route('image.show', ['user', 50, ($user->avatar) ? $user->avatar : 'default.png']), $user->name, ['title' => $user->name, 'class' => 'user-avatar img-circle']) }}
                <div class="info">
                    <h3><a href="{{ route('user.edit', $user->id) }}">{{ $user->name }}</a></h3>
                    <p>{{ $user->email }}</p>
                </div>
            </td>
            <td width="15%">{{ date('d/m/Y H:i', strtotime($user->created_at)) }}</td>
            <td width="17%">
                <!--edit-->
                <a href="{{ route('user.edit', $user->id) }}" class="btn btn-success tooltips" data-placement="top" data-toggle="tooltip" data-original-title="Editar"><i class="fa fa-pencil"></i></a>
                <!--delete-->
                <a href="javascript:void(0);" id="delete-user-{{ $user->id }}" class="btn btn-danger tooltips btn-delete" data-url="user/" data-placement="top" data-toggle="tooltip" data-original-title="Excluir"><i class="fa fa-close"></i></a>
            </td>
        </tr>
        @endforeach
    </tbody>
    </table>
    <!--pagination-->
    @include('admin._layout.list.pagination.pagination', ['route'=>'user.index'])
</section>
@endsection
