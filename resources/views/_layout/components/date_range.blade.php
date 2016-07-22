<div class="form-group col-lg-6">
    {{ Form::label($label, null, ['class' => 'control-label']) }}
    <div class="input-group {{ $hasError }}">
        <div class="input-group-addon">
            <i class="fa fa-calendar"></i>
        </div>
        {{ Form::text($name, $value, array_merge(['class' => 'form-control pull-right'], $attributes)) }}
    </div>
</div>