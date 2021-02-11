@extends('layouts.head_body')

@section('content_main')
    <h1>{{$title}}</h1>

    <div>
        @foreach($testi as $testo)
            <h2>{{$testo["title"]}}</h2>
            <p>{{$testo["text"]}}</p>
        @endforeach
    </div>
@endsection