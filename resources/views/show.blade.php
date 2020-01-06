@extends('layouts.master')

@section('title', '3rd NIF: Presenter Profile')


@section('content')
    <div class="card mb-3">
        <div class="row no-gutters">
            <div class="col-md-4 border-right">
                <img src="/images/presenters/{{$presenter->logo}}/logo.png" class="card-img card-img-sticky mt-4 presenter__img" alt="No Logo Found">
                <p class='presenter__left-text'><span class='presenter__left-title'>ADDRESS</span><br />
                <span class='presenter__left-subtitle'>{{ $presenter->address }}</span></p>
                <p class='presenter__left-text'><span class='presenter__left-title'>WEBSITE</span><br />
                <span class='presenter__left-subtitle'>{{ $presenter->website }}</span></p>
                <p class='presenter__left-text'><span class='presenter__left-title'>E-MAIL</span><br />
                <span class='presenter__left-subtitle'>{{ $presenter->email }}</span></p>
                <p class='presenter__left-text'><span class='presenter__left-title'>PHONE</span><br />
                <span class='presenter__left-subtitle'>{{ $presenter->phone }}</span></p>
                <p class='presenter__left-text'><span class='presenter__left-title'>COMPANY TYPE</span><br />
                <span class='presenter__left-subtitle presenter__capitalize'>{{ $presenter->type }}</span></p>
                <p class='presenter__left-text'><span class='presenter__left-title'>SECTOR</span><br />
                <span class='presenter__left-subtitle presenter__capitalize'>{{ $presenter->sector }}</span></p>
                <p class='presenter__left-text'><span class='presenter__left-title'>FOUNDED</span><br />
                <span class='presenter__left-subtitle'>{{ $presenter->founded }}</span></p>
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <div class='person__card-info non-opaque-person'>
                        <h5 class="card-title person__card-company">{{ $presenter->name }}</h5>
                    </div>
                    <p class="card-text">
                        <p class='presenter__right-title'>company profile</p>
                            @if($presenter->presenting_person)
                                <p class='presenter__right-title'>Presenter: <span class='no-text-transform'>{!! $presenter->presenting_person !!}</span></p>
                            @endif
                            @if($presenter->presenting_time)
                                <p class='presenter__right-title'>Presenting Time: <span class='no-text-transform'>{!! $presenter->presenting_time !!}</span></p>
                            @endif
                            <p>{!! $presenter->profile !!}</p>
                            <p>{!! $presenter->management !!}</p>
                            <p>{!! $presenter->pipeline !!}</p>
                    ​</p>
                </div>
            </div>
        </div>
    </div>
@endsection
