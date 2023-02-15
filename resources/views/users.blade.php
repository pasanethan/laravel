

{{URL::previous()}}

<x-header  data="user DDDD" />

<a href="/home">Home</a>


@foreach ($user as $item)
<h4>{{$item}}</h4>
@endforeach

