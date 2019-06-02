@extends('main')

@section('title', '| About')

@section('content')
    <br><br>
        <div class="row">
            <div class="col-md-3">
            </div>
            <div class="col-md-6">
                <div class="row">
                    <h1>About Us</h1>
                    <p>
                        We at STT strive to make quality education affordable to the masses. Over the years the cost of education has increased
                        many folds to make it beyond the reach of many. You may be appalled to learn that even in most developed nations students resort
                        to prostitution to pay up for their college tuition fees. We want to remove this  financial barrier to good education.
                        In fact, the only barrier to education must be an individuals thirst for knowledge.
                    </p>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-6"><img src="{{{ asset('images/mission.jpg') }}}" alt="" class="img-responsive"></div>
                    <div class="col-md-6">
                        <h4 class="list-group-item-heading">Vision</h4>
                        <ul class="vision">
                            <li>Provide world class preparatory tools</li>
                            <li>One stop solution</li>
                            <li>Make technical learning easy, interesting</li>
                            <li>Make coaching accessible to all</li>
                        </ul>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <h4 class="list-group-item-heading">Mission</h4>
                    <ul class="vision">
                        <li>To advance the software testing profession through education-based software testing certifications.</li>
                        <li>To provide free software testing training to help organizations with limited or no training budget.</li>
                        <li>To create a pool of qualified software testing professionals to meet the needs of testing organizations.</li>
                        <li>To provide assistance and guidance to organizations around the world in every aspect of testing of all types of software systems.</li>
                        <li>To provide a framework for assessing organizational testing practices and procedures.
                        <li>To partner with different software quality groups around the world to assure continuity of information flow among testing professionals.</li>
                        <li>To provide an open forum for discussing different testing issues.</li>
                        <li>In order to follow its charter, we relies on the support and guidance from
                            its Advisory Board which consists of authorities and practitioners in the field.</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3">
            </div>
        </div>
@endsection
