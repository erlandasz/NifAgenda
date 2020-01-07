@extends('layouts.master')

@section('title', '3rd NIF: Speakers')


@section('content')
    <div class='index-container'>
        <div class="row sticky-search-box" style=''>
            <div class="col-12 mt-4" >
                <div id="custom-search-input">
                    <div class="input-group">
                        <input id="search" name="search" type="text" class="form-control" placeholder="Search" />
                    </div>
                </div>
            </div>
        </div>
    <div class='container'>
        <p class='section__headings index__first-lines'>Keynote Speakers</p>
    </div>

    <div class="card mb-3">
        <div class="row no-gutters">
            <div class="col-md-4">
                <img src="{{URL::asset('/images/speakers/Harry Tracy PIC.jpg')}}" class="card-img card-img-sticky mt-4" alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title person__card-company">NI Research</h5>
                    <h5 class="card-title">Harry Tracy</h5>
                    <h6 class='card-subtitle mb-2 text-muted'>President</h6>
                    <p class="card-text person__card-text">
                        <p>Dr. Tracy is the founder and President of NI Research. Since 1995, NIR has been the leading publisher of independent analysis and commentary regarding the neurotherapeutics area. NIR's bimonthly publication, NeuroPerspective, is utilized by pharmaceutical companies and investment professionals around the world, and is known for its willingness to directly address the often painful realities of the CNS area, albeit with style and humor. NIR also publishes  the annual NeuroLicensing, and NIR’s Second Opinion service offers consulting services regarding strategic planning and licensing to pharmaceutical companies ranging from the largest of major pharma firms to small startups. </p>
                        <p>Dr. Tracy's background includes twenty-five years of experience as a clinician and consultant in a variety of psychiatric and neurological settings.  He received his PhD from the University of Miami, and completed his clinical training at Massachusetts General Hospital/Harvard Medical School.</p>

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
                    <p class="card-text person__card-text">
                        <p>Prof. Jonathan Javitt, MD, MPH is Chairman, and CEO of NeuroRx, Inc.. He is a physician with a background in health economics, and drug development who has held roles in academia, industry, and four Presidential administrations. Jonathan has a 30-year history of innovative startups in pharmaceutical and medical technology and has played key roles in seven companies with successful public exits. He has played key roles in drug development programs for Allergan, Merck, Novartis, Pharmacia, Pfizer, and Eyetech. In all cases, he has focused on first-in-class drugs for serious or life-threatening medical conditions.</p>

                        <p>In public service, Jonathan has served as an expert consultant to the Health Care Financing Administration (Reagan, Bush’41), a member of the White House Health Reform Task Force (Clinton), a Special Employee of the Undersecretary of Defense (Bush ’43), a Committee Chair of the President’s Information Technology Advisory Committee (Bush ’43, Presidential Commission), and a White House-appointed delegate to the President’s Conference on Aging (Bush ’43). He has served as a consultant to the National Institutes of Health, the US Department of Veterans Affairs, the US Department of Justice, and the National Institute of Medicine. Additionally, he has served as a health care adviser to the governments of UK, Sweden, Netherlands, Australia, Japan, China, and Israel.</p>
                        
                        <p>Jonathan is a graduate of Princeton University (AB with Honors in Biochemistry), Cornell University Medical College (MD), and The Harvard School of Public Health (MPH), which designated him its Alumnus of Merit in 2015. He is the author of more than 200 scientific publications that have been cited by more than 23,000 people worldwide. He has received the 2012 Edison Award, as well as awards from the American Academy of Ophthalmology, Research to Prevent Blindness, Prevent Blindness America. He is Adjunct Professor of Ophthalmology at the Johns Hopkins School of Medicine and a Senior Fellow of the National Security Health Policy Center of the Potomac Institute for Policy Studies.</p>
                        
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
                        <p class="card-text person__card-text">
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

    <script>


        $(document).ready(function() {
           $( "#search" ).autocomplete({
        
               source: function(request, response) {
                   $.ajax({
                   url: "{{url('autocompleteSpeaker')}}",
                   data: {
                           term : request.term
                    },
                   dataType: "json",
                   success: function(data){
                      var resp = $.map(data,function(obj){
                           return {
                               label: obj.name + ' ' + obj.surname,
                               id: obj.id,
                               value: obj.name
                           }
                      }); 
                      response(resp);
                   },
                   
                   });
               },
               select:function(event, ui){
                   window.location.href = 'speakers/' + ui.item.id
               },
               
           minLength: 1
        });
       });
        
       </script>
@endsection