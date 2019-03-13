@extends('main')

@section('title', '| Homepage')

@section('content')
    <div class="row limit">
        <div class="cont">
            <img src="https://www.ittiam.com/wp-content/uploads/2018/02/thinkode-blog-banner-image.jpg" alt="Norway" style="width:100%;">
            <div class="centered">
                <img src="{{{ asset('images/rumi.jpg') }}}" class="img-circle" alt="Cinque Terre"><br>
                <a class="ct-btn-scroll ct-js-btn-scroll" href="#scrolly"><img alt="Arrow Down Icon" src="https://www.solodev.com/assets/anchor/arrow-down.png"></a>
            </div>
            <div class="text-block">
                <h4>Software Testing Tools</h4>
                <p>Software Engineering Firm in USA/JAPAN/Eupore.</p>
            </div>
        </div>
    </div><br>

    <div class="row" id="scrolly">
        <div class="col-md-1">
        </div>
        <div class="col-md-2">
            <div class="row">
                <div class="list-group">
                    <div class="list-group-item active">
                        <h4 class="list-group-item-heading">Vision</h4>
                        <ul class="vision">
                            <li>Provide world class preparatory tools</li>
                            <li>One stop solution</li>
                            <li>Make technical learning easy, interesting</li>
                            <li>Make coaching accessible to all</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="list-group">
                    <div class="list-group-item active">
                        <h4 class="list-group-item-heading">Courses</h4>
                        <ul class="vision">
                            <li>ITEE Exam</li>
                            <li>Apps Development</li>
                            <li>Software Testing</li>
                            <li>CS Basic Courses</li>
                            <li>Higher Secondary</li>
                            <li>School Programming</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="list-group">
                    <div class="list-group-item active">
                        <h4 class="list-group-item-heading">Our Wings</h4>
                        <ul class="vision">
                            <li>Training</li>
                            <li>Food Items</li>
                            <li>Tesxtiles</li>
                            <li>Pharmacy</li>
                            <li>Hospital</li>
                            <li>Local Business</li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
        <div class="col-md-6">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h1 class="panel-title">Apps Design & Development</h1>
                </div>
                <div class="panel-body">
                    <p class="mb-1">The same is true of your blog homepage design: it could be the make-or-break reason why someone decides to dig deeper into your content or
                        to leave the site and search elsewhere. If that sounds daunting to you, don't panic. Creating a good blog homepage that makes readers stick around is
                        all about making the right choices in what content you choose to display, and I’ve got some advice to help you do just that. The purpose of a blog homepage.
                    </p>
                </div>
            </div>
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Freelance Consultant / Training</h3>
                </div>
                <div class="panel-body">
                    <p class="mb-1">The same is true of your blog homepage design: it could be the make-or-break reason why someone decides to dig deeper into your content or
                        to leave the site and search elsewhere. If that sounds daunting to you, don't panic. Creating a good blog homepage that makes readers stick around is
                        all about making the right choices in what content you choose to display, and I’ve got some advice to help you do just that. The purpose of a blog homepage.
                    </p>
                </div>
            </div>
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Testing and Documenting</h3>
                </div>
                <div class="panel-body">
                    <p class="mb-1">The same is true of your blog homepage design: it could be the make-or-break reason why someone decides to dig deeper into your content or
                        to leave the site and search elsewhere. If that sounds daunting to you, don't panic. Creating a good blog homepage that makes readers stick around is
                        all about making the right choices in what content you choose to display, and I’ve got some advice to help you do just that. The purpose of a blog homepage.
                    </p>
                </div>
            </div>
        </div>

        <div class="col-md-2">
            <div class="row">
                <div class="card mb-3">
                    <h4 class="card-header">Testimonial</h4>
                    <img style="height: 200px; width: 100%; display: block;" src="https://store.webkul.com/media/catalog/product/cache/1/image/040ec09b1e35df139433887a97daa66f/t/e/testimonialthumbnail.png" alt="Card image">
                </div>
            </div>
            <br>
            <div class="row">
                <ul class="list-group">
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        On Going Project
                        <span class="badge badge-primary badge-pill">14</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        No. of Products
                        <span class="badge badge-primary badge-pill">21</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Customers
                        <span class="badge badge-primary badge-pill">100</span>
                    </li>
                </ul>
            </div>
            <div class="row">
                <div class="card mb-3">
                    <img style="height: 200px; width: 100%; display: block;" src="http://ghananews360.com/wp-content/uploads/2018/03/Ad-Space-300x250.png" alt="Card image">
                </div>
            </div>
        </div>
        <div class="col-md-1">
        </div>
    </div>
@stop
