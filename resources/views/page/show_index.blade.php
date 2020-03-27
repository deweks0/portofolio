@extends('layouts.app', ['title' => 'Main Page'])

@section('content')
@include('layouts.headers.cards')

<div class="container-fluid mt--7">
    <!-- Table -->
    <div class="row">
        <div class="col">
            <div class="card shadow">
                <div class="card-header border-0 d-flex justify-content-between align-items-center">
                    <h3 class="mb-0">Main Page | {{ $page->title }}</h3>
                </div>
                <hr class="my-1">
                <div class="card-body">

                    <div class="d-flex flex-column border mb-4 rounded card-body">
                        <div class="d-flex mb-4">
                            <h4 class="mr-3 mb-0">Slide 1 Images</h4>
                        </div>

                        <section class="grid">
                            <div class="brand">
                                <div>
                                    Website Name
                                </div>
                                <div>
                                    Website Info
                                </div>
                            </div>
                            <div class="small-box">
                                Project 1
                            </div>
                            <div class="small-box">
                                Project 2
                            </div>
                            <div class="big-box">
                                Project 3
                            </div>
                            <div class="small-box">
                                Project 4
                            </div>
                            <div class="small-box">
                                News
                            </div>
                            <div class="small-box">
                                About
                            </div>
                            <div class="small-box">
                                Project 5
                            </div>
                            <div class="small-box">
                                Project 6
                            </div>
                            <div class="small-box">
                                Project 7
                            </div>
                            <div class="small-box">
                                Project 8
                            </div>
                            <div class="small-box">
                                Project 9
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    @include('layouts.footers.auth')
</div>
@endsection

@push('js')
<script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
<script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
@endpush