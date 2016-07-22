<div class="form-group col-lg-10 {{ $hasError }}"@if(isset($groupId)) id="{{ $groupId}}"@endif @if(isset($visibleState)&&$visibleState==false) style=" display: none; "@endif>
    {{ Form::label($label, null, ['class' => 'control-label']) }}
    @if(!empty($icon))
    <div class="input-group">
        <span class="input-group-addon"><i class="fa {{ $icon }}"></i></span>
        {{ Form::text($name, $value, array_merge(['class' => 'form-control'], $attributes)) }}
    </div>
    @else
    {{ Form::text($name, $value, array_merge(['class' => 'form-control'], $attributes)) }}
    @endif
</div>