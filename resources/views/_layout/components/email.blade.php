<div class="form-group col-lg-10 {{ $hasError }}">
    {{ Form::label($label, null, ['class' => 'control-label']) }}
    <div class="input-group">
        <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
        {{ Form::email($name, $value, array_merge(['class' => 'form-control'], $attributes)) }}
    </div>
</div>