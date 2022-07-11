<!-- การเรียกใช้งาน Tempate -->
@extends('layouts.main_template')
@section('title')
    เกี่ยวกับเรา
@endsection
@section('content')
    <div class="jumbotron">
        <div class="container pt-5">
            <h2 class="display-3 head-title">เกี่ยวกับเรา</h2>
        </div>
    </div>

    <!--ส่วนของ Feature -->
    <div class="container mt-5">
        <div class="row featurette">
            <div class="col-md-7">
                <h2 class="featurette-heading fw-normal lh-1">First featurette heading. <span class="text-muted">It’ll
                        blow your
                        mind.</span></h2>
                <p class="lead">Some great placeholder content for the first featurette here. Imagine some exciting prose
                    here.</p>
            </div>
            <div class="col-md-5">
                <img src="{{ asset('assets/images/slide1.jpg') }}"
                    class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto">
            </div>
        </div>
        <hr class="featurette-divider">
        <div class="row featurette">
            <div class="col-md-7 order-md-2">
                <h2 class="featurette-heading fw-normal lh-1">Oh yeah, it’s that good. <span class="text-muted">See for
                        yourself.</span></h2>
                <p class="lead">Another featurette? Of course. More placeholder content here to give you an idea of how
                    this
                    layout would work with some actual real-world content in place.</p>
            </div>
            <div class="col-md-5 order-md-1">
                <img src="{{ asset('assets/images/slide1.jpg') }}"
                    class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto">

            </div>
        </div>
        <hr class="featurette-divider">
        <div class="row featurette">
            <div class="col-md-7">
                <h2 class="featurette-heading fw-normal lh-1">First featurette heading. <span class="text-muted">It’ll
                        blow your
                        mind.</span></h2>
                <p class="lead">Some great placeholder content for the first featurette here. Imagine some exciting prose
                    here.</p>
            </div>
            <div class="col-md-5">
                <img src="{{ asset('assets/images/slide1.jpg') }}"
                    class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto">
            </div>
        </div>
        <hr class="featurette-divider">
        <div class="row featurette">
            <div class="col-md-7 order-md-2">
                <h2 class="featurette-heading fw-normal lh-1">Oh yeah, it’s that good. <span class="text-muted">See for
                        yourself.</span></h2>
                <p class="lead">Another featurette? Of course. More placeholder content here to give you an idea of how
                    this
                    layout would work with some actual real-world content in place.</p>
            </div>
            <div class="col-md-5 order-md-1">
                <img src="{{ asset('assets/images/slide1.jpg') }}"
                    class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto">

            </div>
        </div>
    </div>
@endsection
