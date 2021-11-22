@extends('layouts.app')

@section('content')
<div class = 'container'>
    @foreach($categories as $category)
        <b>{{$category->name}}</b><br>
    @endforeach
</div>
@endsection