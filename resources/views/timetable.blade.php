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
            <div class='col-1' style="color:white; writing-mode: vertical-rl;text-orientation: upright;background-color:green; word-break:break-all; cursor:pointer;text-align:center; display:flex;
            justify-content:center;
            align-items:center;" id='curson-pointer' onclick="location.href='pr-timetable'">

                PR TRACKS A & B

            </div>
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
            
            <div class='col-1' style="color:white; writing-mode: vertical-rl;text-orientation: upright;background-color:green; word-break:break-all; cursor:pointer;text-align:center; display:flex;
            justify-content:center;
            align-items:center;" id='curson-pointer' onclick="location.href='pr-timetable'">

                PR TRACKS C & D

            </div>
        </div>
                @component('timetable.coffee2')
                @endcomponent

                <div class='row'>

                    <div class='col-11'>
                        @component('timetable.roundtable')
                        @endcomponent
                    </div>

                    <div class='col-1' style="color:white; writing-mode: vertical-rl;text-orientation: upright;background-color:green; word-break:break-all; cursor:pointer;text-align:center; display:flex;
            justify-content:center;
            align-items:center z-index:1; margin-top:-10%;" id='curson-pointer' onclick="location.href='pr-timetable'">

                <span style='writing-mode:horizontal-tb !important; font-size: 0.9rem;'>15:45 E & F</span> 

            </div>
                    
                </div>
                    @component('timetable.reception')
                    @endcomponent
                    
                @component('timetable.end')
                @endcomponent

    </div>


@endsection