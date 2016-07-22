<div class="row row-pagination">
    <div class="info">
        <p>@if($pagination['page']['total'] > 1)Página <strong>{{ $pagination['page']['current'] }}</strong> de <strong>{{ $pagination['page']['total'] }}</strong>.@endif</p>
    </div>
    @if(isset($search) && $search==true)
    <div class="search">
        {!! Form::open(['route' => $route, 'method' => 'GET', 'id' => 'form-search']) !!}
            <label for="search">Pesquisar por:</label>
            <input type="text" name="s"@if(isset($s)) value="{{ $s }}"@endif>
            <a class="btn btn-sm btn-info button-search">
                <i class="fa fa-search"></i>
            </a>
        {!! Form::close() !!}
    </div>
    @endif
    @if($pagination['page']['total'] > 1)
    <ul class="pagination pagination-sm pull-right">
        @if($pagination['page']['total'] <= 10)
        @include('admin.layout.list.pagination._simple')
        @else
        @include('admin.layout.list.pagination._many')
        @endif
    </ul>
    @endif
</div>
<div class="clearfix"></div>