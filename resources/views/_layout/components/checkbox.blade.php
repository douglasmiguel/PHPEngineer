<div class="form-group col-lg-4 {{ $hasError }}">
    {{ Form::label($label, null, ['class' => 'control-label']) }}
    <div class="clearfix"></div>
    {{ Form::checkbox($name, $value, $default, array_merge(['class' => 'form-control flat-red'], $attributes)) }}
</div>