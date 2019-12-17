@extends('layouts.master')

@section('title', '3rd NIF: Timetable')


@section('content')
    
    <div class="list-group timetable__list">
    {{-- HEADERS --}}
        <div class='row timetable__highlighted-container-1'>
            <div class= 'col-2 timetable__time'> <span>07:30</span></div>
            <div class='col-10 timetable__header'> Registration & Breakfast </div>
        </div>
        <div class='row timetable__highlighted-container-2'>
            <div class= 'col-2 timetable__time'> 08:20 </div>
            <div class='col-8 timetable__header'>Welcome Speech by Leonard Sachs, Managing Director, Sachs Associates
            </div>
            <div class='col-2 timeteable__room'>
                Room Commandants
            </div>
        </div>
        <div class='row timetable__highlighted-container-2'>
            <div class= 'col-2 timetable__time'> 08:30 </div>
            <div class='col-8 timetable__header'>“2020 Vision: Neurotherapeutics in the N 08:30 ew Decade” by Harry Tracy, President, NI Research</div>
            <div class='col-2 timeteable__room'>
                Room Commandants
            </div>
        </div>
        
        {{-- PANELS --}}

        <div class='row timetable__panel-container'>
            <div class= 'col-2 timetable__time'><span class='timetable__time-span'> 08:50</span></div>
            <div class='col-8 timetable__panel-body'>
                <p class='panel__name'> State of the Industry Roundtable</p>
                <p class='panel__small-text panel__cochair'>Co-Chaired by: </p>
                <p class='panel__content'>
                    <span class='panel__paragraph-bold'> Beth Jacobs, </span>Managing Partner, <span class=panel__paragraph-bold>Excellentia Global Partners</span><br />
                    <span class='panel__paragraph-bold'>Guy Seabrook,</span> Vice President & Global Lead, <span class=panel__paragraph-bold>Neuroscience External Innovation, Johnson & Johnson Innovation</span>
                </p>
                <p class='panel__small-text'>Panelists:</p>
                <p class='panel__content'>
                    <span class='panel__paragraph-bold'>Alexander Breidenbach,</span> Entrepreneur in Residence, <span class=panel__paragraph-bold>BB Pureos Bioventures</span><br />
                    <span class='panel__paragraph-bold'>Jesús Martin-Garcia,</span> CEO, <span class=panel__paragraph-bold>GeNeuro SA</span><br />
                    <span class='panel__paragraph-bold'>Peter Thompson,</span> Partner, <span class=panel__paragraph-bold>OrbiMed Advisors LLC</span><br />
                    <span class='panel__paragraph-bold'>Ravneesh Sachdev,</span> Vice President, Business Development,<span class=panel__paragraph-bold> Sage Therapeutics, Inc.</span>
                </p>
            </div>
                        <div class='col-2 timeteable__room'>
                Room Commandants
            </div>
        </div>

        <div class='row timetable__panel-container'>
            <div class= 'col-2 timetable__time'><span class='timetable__time-span'>09:30</span></div>
            <div class='col-8 timetable__panel-body'>
                <p class='panel__name'> BioPartnering & DealMaking Panel</p>
                <p class='panel__small-text panel__cochair'>Co-Chaired by: </p>
                <p class='panel__content'>
                    <span class='panel__paragraph-bold'>Joel Sandler,</span>Associate Principal,<span class=panel__paragraph-bold>Cello Health BioConsulting, previously Defined Health</span><br />
                    <span class='panel__paragraph-bold'>Stuart Barich,</span> Managing Director, <span class=panel__paragraph-bold>Raymond James</span>
                </p>
                <p class='panel__small-text'>Panelists:</p>
                <p class='panel__content'>
                    <span class='panel__paragraph-bold'>Christian Thomsen, </span>Global Head of CNS BD&L, <span class=panel__paragraph-bold>Boehringer Ingelhelm International GmbH</span><br />
                    <span class='panel__paragraph-bold'>Hans Christinger, </span>Vice President, Business Development & Alliance Management, <span class=panel__paragraph-bold>Ovid Therapeutics, Inc.</span><br />
                    <span class='panel__paragraph-bold'>John Donello, </span>Vice President, External Science & Innovation<span class=panel__paragraph-bold>Allergan Plc.</span><br />
                    <span class='panel__paragraph-bold'>Keld Flintholm Jørgensen, </span>Executive VP & CBO, <span class=panel__paragraph-bold>H. Lundbeck A/S</span><br />
                    <span class='panel__paragraph-bold'>Nicholas Adams, </span>VP Business Development & Alliance Management, <span class=panel__paragraph-bold>ReNeuron Group Plc.</span>         
                </p>
            </div>
            <div class='col-2 timeteable__room'>
                Room Commandants
            </div>
        </div>

        {{-- COFFEE BREAK --}}
        <div class='row timetable__highlighted-container-1'>
            <div class= 'col-2 timetable__time'> <span>10:10</span></div>
            <div class='col-8 timetable__header'> Coffee Break </div>
            <div class='col-2 timeteable__room'>
                Room Crystal Lounge
            </div>
        </div>

        {{-- SMALL PANELS --}}  

        <div class='row timetable__panel-container'>

            <div class='col-2 timetable__time'>
                <span class='timetable__time-span'>10:25</span>
            </div>
            <div class='col timetable__panel-body'>
                <p class='panel__name'>Advances in Alzheimer's & Other Cognitive Disorders Panel</p>
                <p class='panel__small-text panel__cochair'>Co-Chaired by: </p>
                <p class='panel__content'>
                    <span class='panel__paragraph-bold'>Christian Jung, </span>Partner, <span class='panel__paragraph-bold'>Dementia Discovery Fund</span><br />
                    <span class='panel__paragraph-bold'>Sumant Kulkarni, </span>Managing Director, Biotechnology Equity Research, <span class='panel__paragraph-bold'>Canaccord Genuity LLC</span>
                </p>
                <p class='panel__small-text'>Panelists:</p>
                <p class='panel__content'>
                    <span class='panel__paragraph-bold'>Bill Ketelbey, </span>CEO & Managing Director, <span class='panel__paragraph-bold'>Actinogen Medical Ltd.</span><br />
                    <span class='panel__paragraph-bold'>Carlos Buesa, </span>Founder & CEO, <span class='panel__paragraph-bold'>Oryzon Genomics S.A.</span><br />
                    <span class='panel__paragraph-bold'>Casey Lynch, </span>Co-Founder, Chairman & CEO, <span class='panel__paragraph-bold'>Cortexyme, Inc.</span><br />
                    <span class='panel__paragraph-bold'>Christopher Shaffer, </span>Senior Director - Scientific Entrepreneur, Search & Evaluation Head, <span class='panel__paragraph-bold'>Biogen, Inc.</span><br />
                    <span class='panel__paragraph-bold'>Jonathan Savidge, </span>CEO<span class='panel__paragraph-bold'>Syndesi Therapeutics SA</span><br />
                </p>
            </div>
            <div class='col'>
                <div class='row'>
                    <div class='col'>
                        2
                    </div>
                    <div class='col'>1</div>
                </div>
            </div>

        </div>

    </div>  

@endsection