@extends('admin.layouts.vertical')

@section('title', 'Apex Treemap Charts')

@section('extra_css')

@section('page_content')

@php $subTitle = 'Treemap'; @endphp
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
                                        at:</span> <code> ../static/js/components/apexchart-treemap.js</code></p>
            </div><!-- end card-body -->
        </div><!-- end card -->
        <div class="card">
            <div class="card-body">
                <h4 class="card-title anchor" id="basic">Basic Treemap</h4>
                <div dir="ltr">
                    <div class="apex-charts" id="basic-treemap"></div>
                </div>
            </div>
            <!-- end card body-->
        </div>
        <!-- end card -->
        <div class="card">
            <div class="card-body">
                <h4 class="card-title anchor" id="multiple">Treemap Multiple Series</h4>
                <div dir="ltr">
                    <div class="apex-charts" id="multiple-treemap"></div>
                </div>
            </div>
            <!-- end card body-->
        </div>
        <!-- end card -->
        <div class="card">
            <div class="card-body">
                <h4 class="card-title anchor" id="distributed">Distributed Treemap</h4>
                <div dir="ltr">
                    <div class="apex-charts" id="distributed-treemap"></div>
                </div>
            </div>
            <!-- end card body-->
        </div>
        <!-- end card -->
        <div class="card">
            <div class="card-body">
                <h4 class="card-title anchor" id="color-range">Color Range Treemap</h4>
                <div dir="ltr">
                    <div class="apex-charts" id="color-range-treemap"></div>
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
                    <a class="nav-link" href="#basic">Basic</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#multiple">Treemap Multiple Series</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#distributed">Distributed Treemap</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#color-range">Color Range Treemap</a>
                </li>
            </ul>
        </div>
    </div>
</div> <!-- end row -->
@endsection

@section('extra_javascript')
<script src="{{ asset('assets/admin') }}/js/components/apexchart-treemap.js"></script>
@endsection
