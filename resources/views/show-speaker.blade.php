@extends('layouts.master')

@section('title', '3rd NIF: Speaker')


@section('content')
<div class="card mb-3">
    <div class="row no-gutters">
        <div class="col-md-4">
            <img src="/images/speakers/{{$speaker->photo}}" class="card-img card-img-sticky mt-4 mb-4" alt="...">
        </div>
        <div class="col-md-8">
            <div class="card-body">
                <div class='person__card-info non-opaque-person'>
                    <h5 class="card-title person__card-company">{{ $speaker->company }}</h5>
                    <h5 class="card-title person__card-titles">{{ $speaker->name }} {{ $speaker->surname }}</h5>
                    <h6 class='card-subtitle person__card-titles mb-2 text-muted'>{{ $speaker->job_title }}</h6>
                </div>
                <p class="card-text">
                    {!! $speaker->bio !!}
                ​</p>
            </div>
        </div>
    </div>
</div>
@endsection
