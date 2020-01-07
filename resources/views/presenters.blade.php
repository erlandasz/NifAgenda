@extends('layouts.master')

@section('title', '3rd NIF: Presenters')


@section('content')
    <div class="row sticky-search-box" style=''>
        <div class="col-12 mt-4" >
            <div id="custom-search-input">
                <div class="input-group">
                    <input id="search" name="search" type="text" class="form-control" placeholder="Search" />
                </div>
            </div>
        </div>
    </div>
    @forelse($presenters as $presenter)
        <div class="card mb-3">
            <div class="row no-gutters">
                <div class="col-md-4 border-right">
                    <img src="/images/presenters/{{$presenter->logo}}/logo.png" class="card-img card-img-sticky mt-4 presenter__img" alt="No Logo Found">
                    @if($presenter->address)
                        <p class='presenter__left-text'><span class='presenter__left-title'>ADDRESS</span><br />
                        <span class='presenter__left-subtitle'>{!! $presenter->address !!}</span></p>
                    @endif
                    @if($presenter->website)
                        <p class='presenter__left-text'><span class='presenter__left-title'>WEBSITE</span><br />
                        <a href='{{ $presenter->website }}' class='presenter__left-subtitle purple__hyper-link'>{{ $presenter->website }}</a></p>
                    @endif
                    @if($presenter->email)
                        <p class='presenter__left-text'><span class='presenter__left-title'>E-MAIL</span><br />
                        <a href='mailto:{{ $presenter->email }}' class='presenter__left-subtitle purple__hyper-link'>{{ $presenter->email }}</a></p>
                    @endif
                    @if($presenter->phone)
                        <p class='presenter__left-text'><span class='presenter__left-title'>PHONE</span><br />
                        <span class='presenter__left-subtitle'>{{ $presenter->phone }}</span></p>
                    @endif
                    @if($presenter->type)
                        <p class='presenter__left-text'><span class='presenter__left-title'>COMPANY TYPE</span><br />
                        <span class='presenter__left-subtitle presenter__capitalize'>{{ $presenter->type }}</span></p>
                    @endif
                    @if($presenter->ticker)
                        <p class='presenter__left-text'><span class='presenter__left-title'>TICKER</span><br />
                        <span class='presenter__left-subtitle'>{!! $presenter-> ticker !!}</span></p>
                    @endif
                    @if($presenter->sector)
                        <p class='presenter__left-text'><span class='presenter__left-title'>SECTOR</span><br />
                        <span class='presenter__left-subtitle presenter__capitalize'>{!! $presenter->sector !!}</span></p>
                    @endif
                    @if($presenter->founded)
                        <p class='presenter__left-text'><span class='presenter__left-title'>FOUNDED</span><br />
                        <span class='presenter__left-subtitle'>{{ $presenter->founded }}</span></p>
                    @endif
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
                        </p>
                    </div>
                </div>
            </div>
        </div>
        @empty
        <p> no presenters </p>
    @endforelse
    

    <script>


        $(document).ready(function() {
           $( "#search" ).autocomplete({
        
               source: function(request, response) {
                   $.ajax({
                   url: "{{url('autocomplete')}}",
                   data: {
                           term : request.term
                    },
                   dataType: "json",
                   success: function(data){
                      var resp = $.map(data,function(obj){
                           return {
                               label: obj.name,
                               id: obj.id,
                               value: obj.name
                           }
                      }); 
                      response(resp);
                   },
                   
                   });
               },
               select:function(event, ui){
                   window.location.href = 'presenting-companies/' + ui.item.id
               },
               
           minLength: 1
        });
       });
        
       </script>   
@endsection
