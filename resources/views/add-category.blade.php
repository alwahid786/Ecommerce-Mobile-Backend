@extends('layouts.header')
@section('content')

<?php $categories = true; ?>

<!-- Page content -->
<div class="page-content">

    @include('layouts.sidebar')

    <!-- Main content -->
    <div class="content-wrapper">

    <section>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="py-3 text-center">
                        <h1 class="roboto">
                            <b>Add New Category</b>
                        </h1>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
            <div class="container">
                <div class="row">
                    <div class="col-12  py-3 ">
                        <div class="row justify-content-center">
                            <div class="col-12 col-md-8 col-lg-8 col-xl-6">
                                <form action="{{route('addCategory')}}" method="post" enctype="multipart/form">
                                    @csrf
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <input type="text" class="form-control" name="name" placeholder="Name">
                                        </div>
                                    </div>
                                    <select  name="status" class="custom-select mr-sm-2 mt-3" id="inlineFormCustomSelect">
                                        <option selected>Choose...</option>
                                        <option value="1">Active</option>
                                        <option value="0">In-active</option>
                                    </select>
                                    <button type="submit" class="btn btn-primary mt-4">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    </div>
    <!-- /main content -->

</div>
<!-- /page content -->

@endsection