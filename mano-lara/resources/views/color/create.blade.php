@extends('main')

@section('content')
<h1>Create color<h1>
<ul>
    <form action="{{route('colors-store')}}" method="POST">
    <input type="color" name="create_color_input" />
    <input type="text" name="color_title" />
    @csrf
    <button type="submit">Ja, ja, nice color</button>
    </form>
</ul>
@endsection