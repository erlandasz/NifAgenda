@extends('layouts.master')

@section('title', '3rd NIF: Speakers')


@section('content')
    <div class='index-container'>
    <div class='container'>
        <p class='section__headings index__first-lines'>Keynote Speakers</p>
    </div>

    <div class="card mb-3">
        <div class="row no-gutters">
            <div class="col-md-4">
                <img src="{{URL::asset('/images/speakers/Harry Tracy PIC.jpg')}}" class="card-img mt-4" alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title person__card-company">NI Research</h5>
                    <h5 class="card-title">Harry Tracy</h5>
                    <h6 class='card-subtitle mb-2 text-muted'>President</h6>
                    <p class="card-text">
                        Dr. Tracy is the founder and President of NI Research. Since 1995, NIR has been the leading publisher of independent analysis and commentary
                         regarding the neurotherapeutics area. NIR's bimonthly publication, NeuroPerspective, is utilized by pharmaceutical
                    ​</p>
                </div>
            </div>
        </div>
    </div>

    <div class="card mb-3">
        <div class="row no-gutters">
            <div class="col-md-4">
                <img src="{{URL::asset('/images/speakers/Jonathan Javitt PIC.jpg')}}" class="card-img card-img-sticky mt-4" alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title person__card-company">NeuroRx, Inc.</h5>
                    <h5 class="card-title">Jonathan Javitt</h5>
                    <h6 class='card-subtitle mb-2 text-muted'>Founder, Chairman & CEO</h6>
                    <p class="card-text">
                        Jonathan serves as Chairman and CEO of NeuroRx, Inc., which is developing the first oral FDA-designated Breakthrough 
                        Therapy for suicidal depression and PTSD. His professional background spans 30 years of combining clinical understanding with expertise in 
                    ​</p>
                </div>
            </div>
        </div>
    </div>

    <div class='container'>
        <p class='section__headings'>Speakers</p>
    </div>

    @forelse($speakers as $speaker)
        <div class="card mb-3">
            <div class="row no-gutters">
                <div class="col-md-4">
                    <img src="/images/speakers/{{$speaker->photo}}" class="card-img card-img-sticky mt-4" alt="...">
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
            
    @empty
        <p> no speakers </p>
    @endforelse
    </div>
@endsection