@extends('layouts.app')

@section('css')
    <link href="{{ asset('css/home.css') }}" rel="stylesheet">
@endsection

@section('content')
<div class="container-fluid">

    <div class="col-sm-2">
    </div>

    <div class="col-sm-8 text-justify">
@foreach ($entries as $entry)
        <div class="panel panel-success">

            <div class="panel-heading">
                <h3>
                    <medium class="text-muted">{{ $entry->title }}</medium>
                </h3>
            </div>

            <div class="panel-body">
                {!! $entry->entry !!}
            </div>

            <div class="panel-footer panel-success">
                <small class="text-muted">{{ $entry->updated_at->format('d/m/Y') }} - {{ $entry->name }}</small>
            </div>

        </div>
@endforeach
    <div class="text-center"> 
        {{ $entries->links() }}
    </div>

    </div>

    <div class="col-sm-2">
    </div>
</div>
@endsection
