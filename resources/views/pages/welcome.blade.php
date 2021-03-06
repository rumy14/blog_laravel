@extends('main')

@section('title', '| Homepage')

@section('content')
    <div class="row limit">
        <div class="cont">

            <!-- Carousel Fixed Height -->
            <section class="carousel-fixed-height">
                <div id="carousel-fixed-height" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-fixed-height" data-slide-to="0" class=""></li>
                        <li data-target="#carousel-fixed-height" data-slide-to="1" class=""></li>
                        <li data-target="#carousel-fixed-height" data-slide-to="2" class="active"></li>
                    </ol>
                    <div class="carousel-inner" role="listbox">
                        <div class="item">
                            <div style="background:url('{{ asset("/images/slider_002.jpg") }}') center center; background-size:cover;" class="slider-size">
                                <div class="carousel-caption">
{{--                                    <h3>A woman with a camera</h3>--}}
{{--                                    <p>She is probably taking a picture</p>--}}
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div style="background:url('{{ asset("/images/slider_003.jpg") }}') center center; background-size:cover;" class="slider-size">
                                <div class="carousel-caption">
{{--                                    <h3>Down came the rain</h3>--}}
{{--                                    <p>And washed the spider out</p>--}}
                                </div>
                            </div>
                        </div>
                        <div class="item active">
                            <div style="background:url('{{ asset("/images/slider_001.jpg") }}') center center; background-size:cover;" class="slider-size">
                                <div class="carousel-caption">
{{--                                    <h3>Making love</h3>--}}
{{--                                    <p>She is probably taking a picture</p>--}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div><br>

    <div class="row">
        <div class="col-md-1">
        </div>
        <div class="col-md-10">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h1 class="panel-title">Apps Design & Development</h1>
                </div>
                <div class="panel-body">
                    <p class="mb-1">Software Testing Tools is a professional app design company providing solutions for corporate or
                        individuals interested in outsourcing their app design and application development needs. Driven by values and founded on
                        strong white hat business ethics, We have a unique space among 100's (hundreds) of so-called Professional App Development and
                        Design Companies.
                    </p>
                </div>
            </div>
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Freelance Consultant / Training</h3>
                </div>
                <div class="panel-body">
                    <p class="mb-1">As one of the leading information technology consulting firms, We delivers custom-tailored
                        IT consultancy services and business IT support for organizations of any size. By partnering with STT,
                        we can help lead your organization forward with highly-effective IT strategies. Implement innovative solutions
                        with our IT consultancy services today.
                    </p>
                </div>
            </div>
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Testing and Documenting</h3>
                </div>
                <div class="panel-body">
                    <p class="mb-1">Founded in 2015 Software Testing Tools begun leading independent software testing company.
                        With 250+ global QA resources in 8 different countries offering more than 10 QA Testing Services and covering all time zones.
                        We are global Software Quality Assurance and Testing space. Serving 30+ clients from Fortune 5 to start ups in many countries,
                        We supports applications in three  different industries. With unique products propositions from a crowdsourcing platform with
                        a pool of 100 crowdsourced testers to a test management platform, unique and economical services offerings and QA education
                        from e-learning and corporate training, Software Testing Tools continues its growth, expansion and footprint around the globe
                        to become the top and the best Software Testing Company in the World.
                    </p>
                </div>
            </div>
        </div>

        <div class="col-md-1">
        </div>
    </div>

    <div class="row">
        <div class="col-md-1">
        </div>
        <div class="col-md-10">
            <hr class="zig-zag-hr">
            <section class="wrapper">
                <div class="container-fostrap">
                    <div>
{{--                        <img src="https://4.bp.blogspot.com/-7OHSFmygfYQ/VtLSb1xe8kI/AAAAAAAABjI/FxaRp5xW2JQ/s320/logo.png" class="fostrap-logo"/>--}}
                        <div class="hedertext">
                            <a href="">Our Solution</a>
                        </div>
                    </div>
                    <div class="content">
                        <div class="container">
                            <div class="row">
                                <div class="col-xs-12 col-sm-4">
                                    <div class="card">
                                        <a class="img-card" href="http://www.fostrap.com/2016/03/bootstrap-3-carousel-fade-effect.html">
                                            <img src="{{{ asset("/images/our_solutions_001.jpg") }}}" />
                                        </a>
                                        <div class="card-content">
                                            <h4 class="card-title">
                                                <p>Advance Blog System</p>
                                            </h4>
                                            <p class="">
                                                Tutorial to make a carousel bootstrap by adding more wonderful effect fadein ...
                                            </p>
                                        </div>
                                        <div class="card-read-more">
                                            <a href="http://www.fostrap.com/2016/03/bootstrap-3-carousel-fade-effect.html" class="btn btn-link btn-block">
                                                Read More
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-4">
                                    <div class="card">
                                        <a class="img-card" href="http://www.fostrap.com/2016/03/5-button-hover-animation-effects-css3.html">
                                            <img src="{{{ asset("/images/our_solutions_002.jpg") }}}" />
                                        </a>
                                        <div class="card-content">
                                            <h4 class="card-title">
                                                <p>Modern Ecommerce System</p>
                                            </h4>
                                            <p class="">
                                                Material Design is a visual programming language made by Google. Language programming...
                                            </p>
                                        </div>
                                        <div class="card-read-more">
                                            <a href="https://codepen.io/wisnust10/full/ZWERZK/" class="btn btn-link btn-block">
                                                Read More
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-4">
                                    <div class="card">
                                        <a class="img-card" href="http://www.fostrap.com/2016/03/5-button-hover-animation-effects-css3.html">
                                            <img src="{{{ asset("/images/our_solutions_003.jpg") }}}" />
                                        </a>
                                        <div class="card-content">
                                            <h4 class="card-title">
                                                <p>User Friendly Payroll System</p>
                                            </h4>
                                            <p class="">
                                                tutorials button hover animation, although very much a hover button is very beauti...
                                            </p>
                                        </div>
                                        <div class="card-read-more">
                                            <a href="http://www.fostrap.com/2016/03/5-button-hover-animation-effects-css3.html" class="btn btn-link btn-block">
                                                Read More
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <div class="col-md-1">
        </div>
    </div>

    <div class="row">
        <div class="col-md-1">
        </div>
        <div class="col-md-10">
            <hr class="zig-zag-hr">
            <div class="hedertext">
                <a href="">Team Member</a>
            </div>
            <div class="wrapper">
                <div class="tile job-bucket">
                    <div class="front">
                        <div class="contents">
                            <img src="{{{ asset("/images/team_member_001.jpg") }}}" />
                            <h3>Taxi Drivers</h3>
                            <p>"Driving here at Yellow Cab gives me the freedom and flexibility to make money at my pace. Being my own boss allows me to work harder, the more I work the more I can bring in."</p>
                            <br>
                            <a href="#">View Jobs</a>
                        </div>
                    </div>
                    <div class="back">
                        <h3>Open Jobs</h3>
                        <a href="#">Experienced Taxi Driver</a>
                        <a href="#">Taxi Driver - East Valley</a>
                        <a href="#">Taxi Driver - West Valley</a>
                        <a href="#">Taxi Driver - Central Valley</a>
                        <a href="#">View All Jobs</a>
                    </div>
                </div>
                <div class="tile job-bucket">
                    <div class="front">
                        <div class="contents">
                            <img src="{{{ asset("/images/team_member_001.jpg") }}}" />
                            <h3>Sedan Drivers</h3>
                            <p>"Being able to offer a higher level of service, wearing a black suit and tie helps make me stand out from the crowd. When I meet someone for the first time I feel they are more relaxed...</p>
                            <br>
                            <a href="#">View Jobs</a>
                        </div>
                    </div>
                    <div class="back">
                        <h3>Open Jobs</h3>
                        <a href="#">Medical Transportation Sedan Drivers Phoenix</a>
                        <a href="#">Sedan Driver - East Valley</a>
                        <a href="#">Sedan Driver - Nights</a>
                        <a href="#">View All Jobs</a>
                    </div>
                </div>
                <div class="tile job-bucket">
                    <div class="front">
                        <div class="contents">
                            <img src="{{{ asset("/images/team_member_001.jpg") }}}" />
                            <h3>Dispatchers</h3>
                            <p>"Coming to work every day is exciting because I love my job and the people I work with. I enjoy interacting with people and this allows me to do so, but in a safe working environment with flexible shifts.</p>
                            <br>
                            <a href="#">View Jobs</a>
                        </div>
                    </div>
                    <div class="back">
                        <h3>Open Jobs</h3>
                        <a href="#">Customer Service Representatives Phoenix</a>
                        <a href="#">Street Team</a>
                        <a href="#">View All Jobs</a>
                    </div>
                </div>
                <div class="tile job-bucket">
                    <div class="front">
                        <div class="contents">
                            <img src="{{{ asset("/images/team_member_001.jpg") }}}" />
                            <h3>Dispatchers</h3>
                            <p>"Coming to work every day is exciting because I love my job and the people I work with. I enjoy interacting with people and this allows me to do so, but in a safe working environment with flexible shifts.</p>
                            <br>
                            <a href="#">View Jobs</a>
                        </div>
                    </div>
                    <div class="back">
                        <h3>Open Jobs</h3>
                        <a href="#">Customer Service Representatives Phoenix</a>
                        <a href="#">Street Team</a>
                        <a href="#">View All Jobs</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-1">
        </div>
    </div>
    <div class="row">
        <div class="col-md-1">
        </div>
        <div class="col-md-10">
            <hr class="zig-zag-hr">
            <div class="hedertext">
                <a href="">Pricing</a>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <button type="button" class="btn btn-default btn-circle btn-lg"><i class="glyphicon glyphicon glyphicon-user"></i></button>
                            </div>
                            <div class="panel-body text-center">
                                <p class="lead">
                                    <strong> What can I do for you?</strong>
                                </p>
                            </div>
                            <ul class="list-group list-group-flush text-justify">
                                <li class="list-group-item">
                                    Self employed person
                                    <span class="glyphicon glyphicon-ok pull-right"></span>
                                </li>
                                <li class="list-group-item">
                                    Start-up projects
                                    <span class="glyphicon glyphicon-remove pull-right"></span>
                                </li>
                                <li class="list-group-item">
                                    Multiple site Commercial license
                                    <span class="glyphicon glyphicon-remove pull-right"></span>
                                </li>
                                <li class="list-group-item">
                                    Technical Support
                                    <span class="glyphicon glyphicon-remove pull-right"></span>
                                </li>
                            </ul>
                            <div class="panel-footer">

                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <button type="button" class="btn btn-default btn-circle btn-lg"><i class="glyphicon glyphicon glyphicon-user"></i></button>
                            </div>
                            <div class="panel-body text-center">
                                <p class="lead">
                                    <strong> What can I do for you?</strong>
                                </p>
                            </div>
                            <ul class="list-group list-group-flush text-justify">
                                <li class="list-group-item">
                                    Self employed person
                                    <span class="glyphicon glyphicon-ok pull-right"></span>
                                </li>
                                <li class="list-group-item">
                                    Start-up projects
                                    <span class="glyphicon glyphicon-remove pull-right"></span>
                                </li>
                                <li class="list-group-item">
                                    Multiple site Commercial license
                                    <span class="glyphicon glyphicon-remove pull-right"></span>
                                </li>
                                <li class="list-group-item">
                                    Technical Support
                                    <span class="glyphicon glyphicon-remove pull-right"></span>
                                </li>
                            </ul>
                            <div class="panel-footer">

                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <button type="button" class="btn btn-default btn-circle btn-lg"><i class="glyphicon glyphicon glyphicon-user"></i></button>
                            </div>
                            <div class="panel-body text-center">
                                <p class="lead">
                                    <strong> What can I do for you?</strong>
                                </p>
                            </div>
                            <ul class="list-group list-group-flush text-justify">
                                <li class="list-group-item">
                                    Self employed person
                                    <span class="glyphicon glyphicon-ok pull-right"></span>
                                </li>
                                <li class="list-group-item">
                                    Start-up projects
                                    <span class="glyphicon glyphicon-remove pull-right"></span>
                                </li>
                                <li class="list-group-item">
                                    Multiple site Commercial license
                                    <span class="glyphicon glyphicon-remove pull-right"></span>
                                </li>
                                <li class="list-group-item">
                                    Technical Support
                                    <span class="glyphicon glyphicon-remove pull-right"></span>
                                </li>
                            </ul>
                            <div class="panel-footer">

                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <button type="button" class="btn btn-default btn-circle btn-lg"><i class="glyphicon glyphicon glyphicon-user"></i></button>
                            </div>
                            <div class="panel-body text-center">
                                <p class="lead">
                                    <strong> What can I do for you?</strong>
                                </p>
                            </div>
                            <ul class="list-group list-group-flush text-justify">
                                <li class="list-group-item">
                                    Self employed person
                                    <span class="glyphicon glyphicon-ok pull-right"></span>
                                </li>
                                <li class="list-group-item">
                                    Start-up projects
                                    <span class="glyphicon glyphicon-remove pull-right"></span>
                                </li>
                                <li class="list-group-item">
                                    Multiple site Commercial license
                                    <span class="glyphicon glyphicon-remove pull-right"></span>
                                </li>
                                <li class="list-group-item">
                                    Technical Support
                                    <span class="glyphicon glyphicon-remove pull-right"></span>
                                </li>
                            </ul>
                            <div class="panel-footer">

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="col-md-1">
        </div>
    </div>
    <div class="row">
        <div class="col-md-1">
        </div>
        <div class="col-md-10">
            <hr class="zig-zag-hr">
            <div class="hedertext">
                <a href="">Honorable Clients List</a>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="flip-box">
                        <div class="flip-box-inner">
                            <div class="flip-box-front">
                                <h2>Front Side</h2>
                            </div>
                            <div class="flip-box-back">
                                <h2>Back Side</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="flip-box">
                        <div class="flip-box-inner">
                            <div class="flip-box-front">
                                <h2>Front Side</h2>
                            </div>
                            <div class="flip-box-back">
                                <h2>Back Side</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="flip-box">
                        <div class="flip-box-inner">
                            <div class="flip-box-front">
                                <h2>Front Side</h2>
                            </div>
                            <div class="flip-box-back">
                                <h2>Back Side</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="flip-box">
                        <div class="flip-box-inner">
                            <div class="flip-box-front">
                                <h2>Front Side</h2>
                            </div>
                            <div class="flip-box-back">
                                <h2>Back Side</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="flip-box">
                        <div class="flip-box-inner">
                            <div class="flip-box-front">
                                <h2>Front Side</h2>
                            </div>
                            <div class="flip-box-back">
                                <h2>Back Side</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="flip-box">
                        <div class="flip-box-inner">
                            <div class="flip-box-front">
                                <h2>Front Side</h2>
                            </div>
                            <div class="flip-box-back">
                                <h2>Back Side</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="flip-box">
                        <div class="flip-box-inner">
                            <div class="flip-box-front">
                                <h2>Front Side</h2>
                            </div>
                            <div class="flip-box-back">
                                <h2>Back Side</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="flip-box">
                        <div class="flip-box-inner">
                            <div class="flip-box-front">
                                <h2>Front Side</h2>
                            </div>
                            <div class="flip-box-back">
                                <h2>Back Side</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-1">
        </div>
    </div>
@stop
