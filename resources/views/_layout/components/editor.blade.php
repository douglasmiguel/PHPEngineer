<div class="form-group col-lg-10 {{ $hasError }}">
    {{ Form::label($label, null, ['class' => 'control-label']) }}
    {{ Form::textarea($name, $value, array_merge(['class' => 'form-control wysihtml5'], $attributes)) }}
</div>