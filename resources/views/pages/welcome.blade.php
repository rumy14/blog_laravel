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
                        <p class="list-group-item-text">To earn Global admiration as an IT Outsourcer by delivering eminent Software Services.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="list-group">
                    <div class="list-group-item active">
                        <h4 class="list-group-item-heading">Vision</h4>
                        <p class="list-group-item-text">To earn Global admiration as an IT Outsourcer by delivering eminent Software Services.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="list-group">
                    <div class="list-group-item active">
                        <h4 class="list-group-item-heading">Vision</h4>
                        <p class="list-group-item-text">To earn Global admiration as an IT Outsourcer by delivering eminent Software Services.</p>
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
        </div>

        <div class="col-md-2">
            <div class="row">
                <div class="card mb-3">
                    <h4 class="card-header">ON/OFF Shore</h4>
                    <img style="height: 200px; width: 100%; display: block;" src="{{{ asset('images/home_sidebar.jpg') }}}" alt="Card image">
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
        </div>
        <div class="col-md-1">
        </div>
    </div>
@stop
