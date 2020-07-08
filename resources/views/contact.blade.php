@extends('layouts.app')


@section('content')

    <h1>Contact Page</h1>

    @if(count($peoples))

        <ul>

            @foreach($peoples as $person)
                <li>{{$person}}</li>

            @endforeach
        </ul> 
    @endif

@stop

@section('footer')
{{--    <script>alert("Hello From Contact Page")--}}
{{--    </script>--}}

@stop
