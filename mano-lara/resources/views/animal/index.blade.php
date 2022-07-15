@extends('main')

@section('content')
<a href="{{route('colors-index', ['sort' => 'asc'])}}">A-Z</a>
<a href="{{route('colors-index', ['sort' => 'desc'])}}">Z-A</a>
<a href="{{route('colors-index')}}">Reset</a>
<ul>
    @forelse($colors as $color)
    <li>
        <div class="color-box" style="background:{{$color->color}};">
        {{$color->color}}
        <h2>{{$color->title}}</h2>
        </div>
        <div class="controls">
        <a href="{{route('colors-show', $color->id)}}">|SHOW|</a>
        <a href="{{route('colors-edit', $color)}}">|EDIT|</a>
        <form class="delete" action="{{route('colors-delete', $color)}}" method="post">
            @csrf
            @method('delete')
            <button type="submit">|Destroy|</button>
        </form>
        </div>
    </li>
    @empty
    <li>No colors, no life.</li>
    @endforelse
</ul>

@endsection