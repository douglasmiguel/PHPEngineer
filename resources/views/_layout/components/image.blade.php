<div class="form-group-image col-lg-10 {{ $hasError }}">
    <div class="btn bg-purple btn-file">
        <i class="fa fa-paperclip m-r-5"></i>
        <span id="file-label">{{ $label }}</span>
        <strong id="file-name"></strong>
        {{ Form::file($name, $value, array_merge(['class' => 'form-control'], $attributes)) }}
    </div>
</div>