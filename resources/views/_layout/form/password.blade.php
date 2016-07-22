@if (Session::has('password'))
<div class="row-alert alert alert-info alert-dismissible">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
    <h4><i class="icon fa fa-pencil-square-o"></i> Anote a senha do novo usuário:</h4>
    {{ Session::get('password') }}
</div>
@endif