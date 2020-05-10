@extends('layouts.app')

@section('css')
    <link href="{{ asset('css/home.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/css/material-icons.css"/>
@endsection

@section('content')
<div class="container-fluid">

    <div class="col-md-2">
    </div>

    <div class="col-md-8 text-center">
        <h2>Tus beons:</h2>
        @foreach($beons->chunk(4) as $beonsChunk)
        <div class="row course-set courses__row">
            @foreach($beonsChunk as $beon)
                <div class="col-sm-4" id="{{ $beon->id }}" title="{{ $beon->name }}">
                    <div class=" panel rounded text-center">
                        <a href="/getPublished/{{ $beon->id }}" target="_blank">
                            <i class="large material-icons md-dark md-48">book</i>
                        </a>
                        <br />
                        {{ $beon->name }} - {{ $beon->updated_at->format('d/m/Y') }}
                    </div>
                </div>
            @endforeach
        </div>
        @endforeach
    </div>

    <div class="col-md-2">
    </div>
</div>
@endsection
