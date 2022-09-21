@extends('blog::layouts.master')

@section('content')
    <h1>Hello Module 1</h1>

    <p>
        This view is loaded from module: {!! config('blog.name') !!}
    </p>
@endsection
