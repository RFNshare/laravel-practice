@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-12 col-md-6">
            <h1>Contact Page</h1>
            <button type="button" class="btn btn-primary">Primary</button>
            <button type="button" class="btn btn-secondary">Secondary</button>
            <button type="button" class="btn btn-success">Success</button>
            <button type="button" class="btn btn-danger">Danger</button>
            <button type="button" class="btn btn-warning">Warning</button>
            <button type="button" class="btn btn-info">Info</button>
            <button type="button" class="btn btn-light">Light</button>
            <button type="button" class="btn btn-dark">Dark</button>

            <button type="button" class="btn btn-link">Link</button>
        </div>
        <div class="col-12 col-md-6">
            @if(count($peoples))
                <ul>
                    @foreach($peoples as $person)
                        <li>{{$person}}</li>

                    @endforeach
                </ul>
            @endif</div>
    </div>
@stop


@section('footer')
    {{--    <script>alert("Hello From Contact Page")--}}
    {{--    </script>--}}

@stop
