@extends('layouts.master')

@section('title', '3rd NIF: Sponsors & Supporters')


@section('content')

    <div class='index-container'>

    <div class='container first__sponsor-container'>
        <p class='section__headings sponsors__purple-background sponsors__first-line'>
            bronze sponsor
        </p>
    </div>

    <div class="card mb-3">
        <div class="row no-gutters">
            <div class="col-md-4">
                <img src="{{URL::asset('/images/sponsors/neurorx.jpg')}}" class="card-img mt-4" alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">NeuroRx</h5>
                    <p class="card-text">
                        NeuroRx, Inc. is a clinical stage, small molecule pharmaceutical company developing novel 
                        therapeutics for the treatment of central nervous system disorders.  The company is built upon 30 years of basic science 
                        and clinical expertise in understanding the role of the brain’s N-methyl-D-aspartate (NMDA) receptor in regulating human thought processes in 
                        general and in regulating depression and suicidality in specific. The company’s lead drug treatment regimen is NRX-100/NRX-101, the first sequential drug 
                        treatment regimen for Bipolar Depression in patients with Acute Suicidal Ideation & Behavior (ASIB).  We have also started to investigate our treatments 
                        for PTSD in patients with ASIB.
                    ​</p>
                </div>
            </div>
        </div>
        <div class="card-footer">
            <small class="text-muted"><a href='http://www.neurorxpharma.com' class='supporter__muted-text'>neurorxpharma.com</a></small>
        </div>
    </div>
    
    <div class='container'>
        <p class='section__headings sponsors__purple-background index__first'>
            supporters
        </p>
    </div>

    <div class="card mb-3">
        <div class="row no-gutters">
            <div class="col-md-4">
                <img src="{{URL::asset('/images/supporters/1.png')}}" class="card-img mt-4" alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">​BIOPARTNER</h5>
                    <p class="card-text">
                        ​BioPartner is an independent, government-accredited trade organisation, 
                        promoting international partnering for trade, investment and collaborations with UK Life Science companies. 
                        BioPartner's delegations promote the UK presence at major international biopharma conferences, 
                        and companies are assisted with access to government grants and heavily discounted entry fees. 
                        Through the BioPartner Programme, members receive extra benefits and support to effectively trade overseas. 
                    ​</p>
                </div>
            </div>
        </div>
        <div class="card-footer">
            <small class="text-muted"><a href='www.biopartner.co.uk' class='supporter__muted-text'>biopartner.co.uk</a></small>
        </div>
    </div>

    <div class="card mb-3">
        <div class="row no-gutters">
            <div class="col-md-4">
                <img src="{{URL::asset('/images/supporters/2.png')}}" class="card-img mt-4" alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">BIOTECHGATE</h5>
                    <p class="card-text">
                        Biotechgate is a global, comprehensive, life science database covering the Biotech, Pharma and Medtech industries. 
                        There are currently over 36,000 company profiles on the Biotechgate database. Biotechgate is commonly used to find product pipelines, 
                        collaboration partners, in/out-licensing opportunities and information about technology platforms, management details, new business 
                        leads and financing rounds. In addition, our licensing deals database supports companies in negotiating their licensing agreements. 
                    ​</p>
                </div>
            </div>
        </div>
        <div class="card-footer">
            <small class="text-muted"><a href='http://www.biotechgate.com' class='supporter__muted-text'>biotechgate.com</a></small>
        </div>
    </div>

    <div class="card mb-3">
        <div class="row no-gutters">
            <div class="col-md-4">
                <img src="{{URL::asset('/images/supporters/3.png')}}" class="card-img mt-4" alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">CITIGATE DEWE ROGERSON</h5>
                    <p class="card-text">
​Citigate Dewe Rogerson is one of the world’s leading strategic communications consultancies. 
Our Life Sciences team has established a reputation for excellence spanning financial, corporate and scientific communications; this has enabled us to become trusted advisors and to build a broad portfolio including some of the most innovative and exciting international life sciences companies. Our clients are at all stages of development, from start-up to multinationals, and our activities are focused on delivering campaigns that support corporate objectives. As a result, we have been involved in major corporate transactions and events in the life sciences sector over the past decade such as IPOs, other public and private fundraisings, and M&As.
                    </p>
                    <p class="card-text">
Recent IPO transactions: ABIVAX (Euronext Paris - €60m), OSE Pharma (Euronext Paris - €21m), Nordic Nanovector (Oslo – NOK575m), Midatech Pharma (London AIM - £32m), Abzena (London AIM - £20m), arGEN-X (Brussels - €42m), Pixium Vision (Euronext Paris - €39.5m), Crossject (Euronext Paris - €17m). Other recent financings: Abingworth (£225m ABV VI), Rigontec (€14.25m Series A), Calcivis (£4.5m fundraising), ViraTherapeutics ($3.6m - Series A). Recent M&A: Heptares (up to $400m acquisition by Sosei), Prosonix (up to £100m acquisition by Circassia), bioquell (Sale of subsidiary for £44.5m).
                    ​</p>
                </div>
            </div>
        </div>
        <div class="card-footer">
            <small class="text-muted"><a href='https://citigatedewerogerson.com' class='supporter__muted-text'>citigatedewerogerson.com</a></small>
        </div>
    </div>

    <div class="card mb-3">
        <div class="row no-gutters">
            <div class="col-md-4">
                <img src="{{URL::asset('/images/supporters/4.png')}}" class="card-img mt-4" alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">​EDISON GROUP</h5>
                    <p class="card-text">
                        Edison is an international advisory firm with around 450 corporate clients and 110 people working from offices in London, New York, 
                        Frankfurt, Sydney and Wellington. The team consists of 80 analysts, investment and logistics professionals with experience in capital markets, 
                        investor roadshows and communications. Healthcare is Edison’s largest sector, 
                        with 16 analysts covering over 100 biotech and medtech stocks across the UK, continental Europe, North America and Asia-Pacific. 
                    ​</p>
                </div>
            </div>
        </div>
        <div class="card-footer">
            <small class="text-muted"><a href='http://www.edisongroup.com/' class='supporter__muted-text'>edisongroup.com</a></small>
        </div>
    </div>

    <div class="card mb-3">
        <div class="row no-gutters">
            <div class="col-md-4">
                <img src="{{URL::asset('/images/supporters/5.png')}}" class="card-img mt-4" alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">​​FREEMIND GROUP</h5>
                    <p class="card-text">
                        FreeMind is a consulting group whose goal is to assist in maximizing potential to receive funding from non-dilutive sources. 
                        Established in 1999, FreeMind is the largest consulting group of its kind working with academics and Industry alike. 
                        FreeMind's proven long-term strategic approach has garnered its clients over 1.5 billion dollars to date.
                    ​</p>
                    <p class="card-text">
                        Our expertise in applying for grants and contracts extends throughout every government mechanism open to funding the life 
                        sciences including all NIH institutes, DoD, NSF, FDA, CDC, BARDA, etc., as well as private foundations.
                    ​</p>
                     <p class="card-text">
                        FreeMind's knowledgeable and experienced team of Client Strategists and Project Managers are dedicated to guiding non-dilutive funding
                         efforts from identification of the most suitable opportunity through to submission and subsequent award.  Our team of experts will assist 
                         in making non-dilutive funding a key tool in a long-term financial strategy.
                    ​</p>
                </div>
            </div>
        </div>
        <div class="card-footer">
            <small class="text-muted"><a href='https://www.freemindconsultants.com/' class='supporter__muted-text'>freemindconsultants.com</a></small>
        </div>
    </div>

    <div class="card mb-3">
        <div class="row no-gutters">
            <div class="col-md-4">
                <img src="{{URL::asset('/images/supporters/6.png')}}" class="card-img mt-4" alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">​​INSTINCTIF PARTNERS</h5>
                    <p class="card-text">
                        ​Instinctif Partners is an international business communications consultancy. With a track record of delivering truly creative programmes, 
                        the Life Sciences practice focuses on enhancing the value proposition for companies seeking investment, partnerships or customers. Our core skill is 
                        working with clients to communicate the value of their science and innovation to key stakeholders through the most relevant channels: crafting
                        communications solutions that showcase each company, product or technology. Specifically, we are unique in offering specialist expertise seamlessly
                         across corporate, financial, healthcare and marketing communications with outreach programmes to media, industry, professional, public, financial and
                          investment communities. Our service offering covers all communications disciplines including strategic counsel, PR, IR, media relations, public affairs,
                           crisis communications, internal communications, marketing, advertising, copywriting, design, research and event management. Our globally integrated and
                            dedicated life sciences team serves clients around the world from our headquarters in London, and bases across Europe, AsiaPac and the USA.
                    ​</p>
                </div>
            </div>
        </div>
        <div class="card-footer">
            <small class="text-muted"><a href='https://instinctif.com/eu/' class='supporter__muted-text'>instinctif.com/eu</a></small>
        </div>
    </div>

    <div class="card mb-3">
        <div class="row no-gutters">
            <div class="col-md-4">
                <img src="{{URL::asset('/images/supporters/7.jpg')}}" class="card-img mt-4" alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">​​ONTARIO BIOSCIENCE INNOVATION ORGANIZATION</h5>
                    <p class="card-text">
                        The Ontario Bioscience Innovation Organization (OBIO®) founded in 2009, is a not-for-proﬁt, membership based organization engaged in strategy,
                         programming, policy development and advocacy to further the commercialization of Ontario’s human health science companies positioning Ontario as 
                         a leader in the international marketplace. OBIO advances this goal through collaborative partnerships with industry, the investment community,
                          academia, patients and government.
                    ​</p>
                </div>
            </div>
        </div>
        <div class="card-footer">
            <small class="text-muted"><a href='http://www.obio.ca/' class='supporter__muted-text'>obio.ca/</a></small>
        </div>
    </div>

    <div class="card mb-3">
        <div class="row no-gutters">
            <div class="col-md-4">
                <img src="{{URL::asset('/images/supporters/8.png')}}" class="card-img mt-4" alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">​​PLATTFORM LIFE SCIENCES</h5>
                    <p class="card-text">
                        The Life Sciences-Series - Launched in 2014 four issues of the Life Sciences-Series appear annually. 
                        Based on the three pillars – technology, financing, investment – the issues combine current topics of 
                        life sciences with knowledge and networking from corporate financing and capital market. The mission: Building a cross medial 
                        bridge between the life sciences and the financial industry by the help of the quarterly Life Sciences issues, 
                        the monthly digital newsletter LifeSciences<i>Update</i>
                    ​</p>
                </div>
            </div>
        </div>
        <div class="card-footer">
            <small class="text-muted"><a href='http://www.goingpublic.de/lifesciences' class='supporter__muted-text'>goingpublic.de/lifesciences</a></small>
        </div>
    </div>

    <div class="card mb-3">
        <div class="row no-gutters">
            <div class="col-md-4">
                <img src="{{URL::asset('/images/supporters/9.png')}}" class="card-img mt-4" alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">​​SWISS BIOTECH</h5>
                    <p class="card-text">
                        Swiss Biotech unites the four leading biotech regions of Switzerland (BioAlps, BaselArea, Biopolo Ticino and Greater Zurich Area).
                         The regions have early on combined efforts with the SWX Swiss Exchange which holds a leading position in terms of life-science listings and services.
                    ​</p>
                    <p class="card-text">
                        The National Industry Association named Swiss Biotech Association Represents more than 150 companies to date and 
                        acts as the operational arm for the marketing alliance. Swiss Biotech raises Switzerland’s profile as an economic center 
                        in Europe and profiles the biotech industry with its key research institutions and companies.Swiss Biotechs’ mission is to spread the 
                        message of Switzerland as one of the top biotech locations in the world. This will be achieved by presenting a comprehensive picture of the 
                        drivers of biotechnology including research, education, economics, finance and industry. The bases for success in biotechnology are the critical 
                        mass of research institutes and accelerated technology transfer. The early integration of industry and well-trained workforce is another critical 
                        success factor for rapid economic growth. More than 40 technology parks throughout the country support the increasingly important and successful 
                        TechTransfer process.​
                    </p>
                </div>
            </div>
        </div>
        <div class="card-footer">
            <small class="text-muted"><a href='www.swissbiotech.org' class='supporter__muted-text'>swissbiotech.org</a></small>
        </div>
    </div>

    <div class="card mb-3">
        <div class="row no-gutters">
            <div class="col-md-4">
                <img src="{{URL::asset('/images/supporters/10.png')}}" class="card-img mt-4" alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">​​​TIBEREND STRATEGIC ADVISORS, INC.</h5>
                    <p class="card-text">
                        ​Tiberend Strategic Advisors, Inc. is a corporate communications firm providing media strategy and execution for life science companies – 
                        biotech (therapeutics), medical devices and diagnostics. We work with both public and private emerging growth companies:
                        <ol>
                            <li>To enhance valuation </li>
                            <li>To build visibility for partnerships and strategic alliances</li>
                        </ol>
                    ​</p>
                </div>
            </div>
        </div>
        <div class="card-footer">
            <small class="text-muted"><a href='http://www.tiberendstrategicadvisors.com/' class='supporter__muted-text'>tiberendstrategicadvisors.com</a></small>
        </div>
    </div>
    </div>
@endsection