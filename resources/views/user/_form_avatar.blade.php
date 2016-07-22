<div class="form-group col-lg-10">
    {{ Form::label('Avatar', null, ['class' => 'control-label']) }}
    <div class="form-show-image avatar-show">
        <div class="image-1">
            <p class="image-info">
                <strong>Tamanho máximo:</strong> 10 MB
            </p>
            @if(isset($user->avatar) and !empty($user->avatar))
            {{ Form::bsImage('Alterar avatar', 'avatar', null, ($errors->first('avatar')) ? 'has-error' : '') }}
            @else
            {{ Form::bsImage('Selecionar avatar', 'avatar') }}
            @endif
        </div>
        @if(isset($user->avatar) and !empty($user->avatar))
        <div class="image-2">
            {{ Html::image(route('image.show', ['user', 100, $user->avatar]), $user->name, ['title' => $user->name]) }}
        </div>
        @endif
    </div>
</div>