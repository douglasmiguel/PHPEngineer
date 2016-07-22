<div class="form-group col-lg-10 {{ $hasError }}"@if(isset($groupId)) id="{{ $groupId}}"@endif @if(isset($visibleState)&&$visibleState==false) style=" display: none; "@endif>
    {{ Form::label($label, null, ['class' => 'control-label']) }}
    <div class="clearfix"></div>
    {{ Form::select($name, $options, $value, array_merge(['class' => 'form-control'], $attributes)) }}
</div>