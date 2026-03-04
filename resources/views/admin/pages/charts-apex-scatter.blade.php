@extends('admin.layouts.vertical')

@section('title', 'Apex Scatter Charts')

@section('extra_css')

@section('page_content')

@php $subTitle = 'Scatter'; @endphp
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
                                        at:</span> <code> ../static/js/components/apexchart-scatter.js</code></p>
            </div><!-- end card-body -->
        </div><!-- end card -->
        <div class="card">
            <div class="card-body">
                <h4 class="card-title anchor" id="basic">Scatter (XY) Chart</h4>
                <div dir="ltr">
                    <div class="apex-charts" id="basic-scatter"></div>
                </div>
            </div>
            <!-- end card body-->
        </div>
        <!-- end card -->
        <div class="card">
            <div class="card-body">
                <h4 class="card-title anchor" id="datetime">Scatter Chart - Datetime</h4>
                <div dir="ltr">
                    <div class="apex-charts" id="datetime-scatter"></div>
                </div>
            </div>
            <!-- end card body-->
        </div>
        <!-- end card -->
        <div class="card">
            <div class="card-body">
                <h4 class="card-title anchor" id="images">Scatter - Images</h4>
                <div dir="ltr">
                    <div class="apex-charts scatter-images-chart" id="scatter-images"></div>
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
                    <a class="nav-link" href="#basic">Scatter (XY) Chart</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#datetime">Scatter Chart - Datetime</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#images">Scatter - Images</a>
                </li>
            </ul>
        </div>
    </div>
</div> <!-- end row -->
@endsection

@section('extra_javascript')
<script src="{{ asset('assets/admin') }}/js/components/apexchart-scatter.js"></script>
@endsection
