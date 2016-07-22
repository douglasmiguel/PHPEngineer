@for ($i = 1; $i <= $pagination['page']['total']; $i++)
@if($pagination['page']['current'] == $i)
<li class="active"><a href="javascript:void(0);" title="Página {{ $i }}">{{ $i }}</a></li>
@else
@if(isset($s))
<li><a href="{{ route($route) . '?p=' . $i . '&s=' .$s }}" title="Ir para página {{ $i }}">{{ $i }}</a></li>
@else
<li><a href="{{ route($route) . '?p=' . $i }}" title="Ir para página {{ $i }}">{{ $i }}</a></li>
@endif
@endif
@endfor