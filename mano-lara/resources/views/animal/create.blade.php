@extends('main')

@section('content')
<h1>Create Animal<h1>
<ul>
    <form action="{{route('pets-store')}}" method="POST">
    <input type="text" name="animal_name" />
    @csrf
    <button type="submit">I found Animal!</button>
    </form>
</ul>
@endsection