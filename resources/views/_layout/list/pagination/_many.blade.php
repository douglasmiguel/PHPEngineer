
@if($pagination['many']['show']['start'])
<li class="disabled pagination-many pagination-many-start"><a href="javascript:void(0);" title="">...</a></li>
@endif

@for ($i = $pagination['many']['start']; $i <= $pagination['many']['end']; $i++)
@if($pagination['page']['current'] == $i)
<li class="active"><a href="javascript:void(0);" title="Página {{ $i }}">{{ $i }}</a></li>
@else
<li><a href="{{ route($route) . '?p=' . $i . '&s=' . $s }}" title="Ir para página {{ $i }}">{{ $i }}</a></li>
@endif
@endfor

@if($pagination['many']['show']['end'])
<li class="disabled pagination-many pagination-many-end"><a href="javascript:void(0);" title="">... {{ $pagination['page']['total'] }}</a></li>
@endif
