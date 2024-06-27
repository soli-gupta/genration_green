@extends('layouts.template_page')
@section('content')

<section class="cms">
    <div class="wrapper" style="height: auto; min-height: 100%;">
        <h1>{{$name}}</h1>

        {!! $content !!}

    </div>
</section>

@endsection