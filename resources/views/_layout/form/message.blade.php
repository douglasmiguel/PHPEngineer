@if (Session::has('message'))
<div class="row-alert alert alert-{{ Session::get('message.type') }} alert-dismissible">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
    <h4><i class="icon fa fa-check"></i> {{ Session::get('message.title') }}!</h4>
    {{ Session::get('message.text') }}
</div>
@endif