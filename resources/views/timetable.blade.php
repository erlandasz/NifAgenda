@extends('layouts.master')

@section('title', '3rd NIF: Timetable')


@section('content')
    
    <div class="list-group timetable__list">

        @component('timetable.wifi')
        @endcomponent

        @component('timetable.welcome-speech')
        @endcomponent

        @component('timetable.2020vision')
        @endcomponent

        @component('timetable.stateOfIndustry')
        @endcomponent

        @component('timetable.bioPartnering')
        @endcomponent

        @component('timetable.coffee')
        @endcomponent

        {{-- pr track a & b --}}
        <div class='row'>
            <div class='col-11'>
            
                @component('timetable.alzheimers')
                @endcomponent

                @component('timetable.nmda')
                @endcomponent

                @component('timetable.neuropsychiatry')
                @endcomponent
                
                @component('timetable.earlystage')
                @endcomponent
            </div>

            <a href='/pr-timetable' class='col-1' style='background-color: #410f57;'>
                <div  style='color:white; display:flex; flex-direction:column;justify-content:center;  align-items:center; color:white;'>
                    <div style='padding-top:15px;'><p>P<br/>R</p></div>
                    <div><br/>T<br/>R<br/>A<br/>C<br/>K<br/>S</div>
                    <div><br/>A<br/>&<br/>B</div>
                </div>
            </a>

        </div>

        {{-- pr track a & b end --}}

        @component('timetable.lunch')
        @endcomponent

        <div class='row'>
            <div class='col-11'>
                @component('timetable.new-approaches')
                @endcomponent

                @component('timetable.orphan')
                @endcomponent

                @component('timetable.current-trends')
                @endcomponent
            </div>
            
            <a href='/pr-timetable' class='col-1' style='background-color: #410f57;'>
                <div  style='color:white; display:flex; flex-direction:column;justify-content:center;  align-items:center; color:white;'>
                    <div style='padding-top:15px;'><p>P<br/>R</p></div>
                    <div><br/>T<br/>R<br/>A<br/>C<br/>K<br/>S</div>
                    <div><br/>C<br/>&<br/>D</div>
                </div>
            </a>
        </div>
                @component('timetable.coffee2')
                @endcomponent

                @component('timetable.roundtable')
                @endcomponent

                @component('timetable.reception')
                @endcomponent

                @component('timetable.end')
                @endcomponent

    </div>

@endsection