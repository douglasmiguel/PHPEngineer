<div class="clearfix"></div>
<div class="box-group col-lg-4 box-submit">
    <a class="btn btn-{{ $color or 'info' }} btn-lg btn-submit" data-id="{{ $id }}">
        <i class="fa fa-save"></i>
        @if ($action=='edit') Salvar alterações @else Salvar registro @endif
    </a>
</div>