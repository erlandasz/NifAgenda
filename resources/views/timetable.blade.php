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

        
        @component('timetable.alzheimers')
        @endcomponent

        @component('timetable.nmda')
        @endcomponent

        @component('timetable.neuropsychiatry')
        @endcomponent
        
        @component('timetable.earlystage')
        @endcomponent

        @component('timetable.lunch')
        @endcomponent

        @component('timetable.new-approaches')
        @endcomponent

        @component('timetable.orphan')
        @endcomponent

        @component('timetable.current-trends')
        @endcomponent

        @component('timetable.coffee2')
        @endcomponent

        @component('timetable.reception')
        @endcomponent

        @component('timetable.end')
        @endcomponent

    </div>

@endsection