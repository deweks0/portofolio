@extends('main.app', ['title' => 'PROJECT'])

@section('content')
<div class="mt-4 mx-4 mb-4 mb-md-2">
    <div class="flexslider">
        <ul class="slides">
            @foreach ($page->projectDetails as $projectDetail)
            <li>
                <div class="project-container">
                    <img src="{{ asset('storage/'.$projectDetail->image->src) }}" class="d-block w-100 h-100">
                </div>

                <div class="container-fluid my-4">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="w-25 w-lg-100 mt-3">
                                <p style="white-space: pre-line">
                                    {{ $projectDetail->left_description }}
                                </p>
                            </div>
                        </div>
                        <div class="col-md-7 mt-3 text-justify">
                            <p style="white-space: pre-line">
                                {{ $projectDetail->right_description }}
                            </p>
                        </div>
                    </div>
                </div>
            </li>
            @endforeach
        </ul>
    </div>
    <div class="d-flex flex-column ml-3">
        <span class="text-black-50"> Back To Home</span>
        <a href="index.html" class="text-black  font-weight-bold">Home</a>
    </div>
</div>
@endsection