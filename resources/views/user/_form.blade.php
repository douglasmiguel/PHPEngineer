@if (isset($user)){!! Form::open(['route' => [$route, $user->id], 'method' => 'PUT', 'files' => true, 'id' => 'form-user']) !!}@else{!! Form::open(['route' => $route, 'method' => 'POST', 'files' => true, 'id' => 'form-user']) !!}@endif
    <div class="box-body">
        {{ Form::bsEmail('E-mail', 'email', ( isset($user->email) ? $user->email : null ), ($errors->first('email')) ? 'has-error' : '', ['placeholder'=>'email@email.com.br']) }}
        {{ Form::bsText('Nome', 'name', ( isset($user->name) ? $user->name : null ), ($errors->first('name')) ? 'has-error' : '', ['class'=>'form-control input-lg', 'placeholder'=>'Nome do usuário']) }}
        @include('admin.user._form_avatar')
        @if (isset($user))
        @include('admin.user._form_password')
        @endif
        {{ Form::bsSubmit($action, 'form-user') }}
    </div>
{!! Form::close() !!}
