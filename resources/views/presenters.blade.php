@extends('layouts.master')

@section('title', '3rd NIF: Presenters')


@section('content')
    @forelse($presenters as $presenter)
        <div class="card mb-3">
            <div class="row no-gutters">
                <div class="col-md-4 border-right">
                    <img src="/images/presenters/{{$presenter->logo}}/logo.png" class="card-img card-img-sticky mt-4 presenter__img" alt="No Logo Found">
                    <p class='presenter__left-text'><span class='presenter__left-title'>ADDRESS</span><br />
                    <span class='presenter__left-subtitle'>{!! $presenter->address !!}</span></p>
                    <p class='presenter__left-text'><span class='presenter__left-title'>WEBSITE</span><br />
                    <a href='{{ $presenter->website }}' class='presenter__left-subtitle purple__hyper-link'>{{ $presenter->website }}</a></p>
                    @if($presenter->email)
                        <p class='presenter__left-text'><span class='presenter__left-title'>E-MAIL</span><br />
                        <a href='mailto:{{ $presenter->email }}' class='presenter__left-subtitle purple__hyper-link'>{{ $presenter->email }}</a></p>
                    @endif
                    @if($presenter->phone)
                        <p class='presenter__left-text'><span class='presenter__left-title'>PHONE</span><br />
                        <span class='presenter__left-subtitle'>{{ $presenter->phone }}</span></p>
                    @endif
                    <p class='presenter__left-text'><span class='presenter__left-title'>COMPANY TYPE</span><br />
                    <span class='presenter__left-subtitle presenter__capitalize'>{{ $presenter->type }}</span></p>
                    @if($presenter->ticker)
                        <p class='presenter__left-text'><span class='presenter__left-title'>TICKER</span><br />
                        <span class='presenter__left-subtitle'>{!! $presenter-> ticker !!}</span></p>
                    @endif
                    @if($presenter->sector)
                        <p class='presenter__left-text'><span class='presenter__left-title'>SECTOR</span><br />
                        <span class='presenter__left-subtitle presenter__capitalize'>{!! $presenter->sector !!}</span></p>
                    @endif
                    <p class='presenter__left-text'><span class='presenter__left-title'>FOUNDED</span><br />
                    <span class='presenter__left-subtitle'>{{ $presenter->founded }}</span></p>
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <div class='person__card-info non-opaque-person'>
                            <h5 class="card-title person__card-company company__name">{{ $presenter->name }}</h5>
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
        @empty
        <p> no presenters </p>
    @endforelse
@endsection
