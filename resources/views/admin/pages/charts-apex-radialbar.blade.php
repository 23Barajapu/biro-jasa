@extends('admin.layouts.vertical')

@section('title', 'Apex RadialBar Charts')

@section('extra_css')

@section('page_content')

@php $subTitle = 'RadialBar'; @endphp
@php $title = 'Charts'; @endphp
@include('admin.partials.page-title')

<div class="row">
    <div class="col-xl-9">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title anchor mb-1" id="overview">
                    Overview
                </h5>
                <p class="mb-0"><span class="fw-medium">Find the JS file for the following chart
                                        at:</span> <code> ../static/js/components/apexchart-radialbar.js</code></p>
            </div><!-- end card-body -->
        </div><!-- end card -->
        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-4 anchor" id="basic">Basic RadialBar Chart</h4>
                <div dir="ltr">
                    <div class="apex-charts" id="basic-radialbar"></div>
                </div>
            </div>
            <!-- end card body-->
        </div>
        <!-- end card -->
        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-4 anchor" id="multiple">Multiple RadialBars</h4>
                <div dir="ltr">
                    <div class="apex-charts" id="multiple-radialbar"></div>
                </div>
            </div>
            <!-- end card body-->
        </div>
        <!-- end card -->
        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-4 anchor" id="circle-angle">Circle Chart - Custom Angle</h4>
                <div class="text-center" dir="ltr">
                    <div class="apex-charts" id="circle-angle-radial"></div>
                </div>
            </div>
            <!-- end card body-->
        </div>
        <!-- end card -->
        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-4 anchor" id="image">Circle Chart with Image</h4>
                <div dir="ltr">
                    <div class="apex-charts" id="image-radial"></div>
                </div>
            </div>
            <!-- end card body-->
        </div>
        <!-- end card -->
        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-4 anchor" id="stroked-guage">Stroked Circular Gauge</h4>
                <div dir="ltr">
                    <div class="apex-charts" id="stroked-guage-radial"></div>
                </div>
            </div>
            <!-- end card body-->
        </div>
        <!-- end card -->
        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-4 anchor" id="gradient">Gradient Circular Chart</h4>
                <div dir="ltr">
                    <div class="apex-charts" id="gradient-chart"></div>
                </div>
            </div>
            <!-- end card body-->
        </div>
        <!-- end card -->
        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-4 anchor" id="semi-circle">Semi Circle Gauge</h4>
                <div dir="ltr">
                    <div class="apex-charts" id="semi-circle-gauge"></div>
                </div>
            </div>
            <!-- end card body-->
        </div>
        <!-- end card -->
    </div> <!-- end col -->
    <div class="col-xl-3">
        <div class="card docs-nav">
            <ul class="nav bg-transparent flex-column">
                <li class="nav-item">
                    <a class="nav-link" href="#overview">Overview</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#basic">Basic RadialBar Chart</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#multiple">Multiple RadialBars</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#circle-angle">Circle Chart - Custom Angle</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#image">Circle Chart with Image</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#stroked-guage">Stroked Circular Guage</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#gradient">Gradient Circular Chart</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#semi-circle">Semi Circle Gauge</a>
                </li>
            </ul>
        </div>
    </div>
</div> <!-- end row -->
@endsection

@section('extra_javascript')
<script src="{{ asset('assets/admin') }}/js/components/apexchart-radialbar.js"></script>
@endsection
