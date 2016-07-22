<div class="form-group col-lg-4 {{ $hasError }}">
    {{ Form::label($label, null, ['class' => 'control-label']) }}
    <div class="input-group color-picker">
        {{ Form::text($name, $value, array_merge(['class' => 'form-control'], $attributes)) }}
        <div class="input-group-addon">
            <i></i>
        </div>
    </div>
</div>
<div class="clearfix"></div>
