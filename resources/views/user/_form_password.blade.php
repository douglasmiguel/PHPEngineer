<div class="clearfix"></div>
<div class="form-group col-lg-4">
    {{ Form::label('Alterar senha', null, ['class' => 'control-label']) }}
    <div class="input-group">
        <span class="input-group-addon">
            {{ Form::checkbox('password[change]', null, null, ['id'=>'password-change', 'class'=>'flat-red']) }}
        </span>
        {{ Form::text('password[new]', null, ['id'=>'password-new', 'class'=>'form-control']) }}
    </div>
</div>
