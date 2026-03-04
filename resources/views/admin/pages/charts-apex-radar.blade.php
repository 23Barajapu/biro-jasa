@extends('admin.layouts.vertical')

@section('title', 'Apex Radar Charts')

@section('extra_css')

@section('page_content')

@php $subTitle = 'Radar'; @endphp
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
                                        at:</span> <code> ../static/js/components/apexchart-radar.js</code></p>
            </div><!-- end card-body -->
        </div><!-- end card -->
        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-3 anchor" id="basic">Basic Radar Chart</h4>
                <div dir="ltr">
                    <div class="apex-charts" id="basic-radar"></div>
                </div>
            </div>
            <!-- end card body-->
        </div>
        <!-- end card -->
        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-3 anchor" id="polygon">Radar with Polygon-fill</h4>
                <div dir="ltr">
                    <div class="apex-charts" id="radar-polygon"></div>
                </div>
            </div>
            <!-- end card body-->
        </div>
        <!-- end card -->
        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-3 anchor" id="multiple-series">Radar – Multiple Series</h4>
                <div dir="ltr">
                    <div class="apex-charts" id="radar-multiple-series"></div>
                    <div class="text-center mt-2">
                        <button class="btn btn-sm btn-primary" onclick="update()">Update</button>
                    </div>
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
                    <a class="nav-link" href="#basic">Basic Radar Chart</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#polygon">Radar with Polygon-fill</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#multiple-series">Radar – Multiple Series</a>
                </li>
            </ul>
        </div>
    </div>
</div> <!-- end row -->
@endsection

@section('extra_javascript')
<script src="{{ asset('assets/admin') }}/js/components/apexchart-radar.js"></script>
@endsection
