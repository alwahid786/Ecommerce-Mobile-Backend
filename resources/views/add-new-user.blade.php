@extends('layouts.header')
@section('content')

<?php $all_users = true; ?>

<!-- Page content -->
<div class="page-content">

    @include('layouts.sidebar')

    <!-- Main content -->
    <div class="content-wrapper">

        <section>
            <div class="container">
                <div class="row">
                    <div class="col-12  py-3 ">
                        <h1 class="text-center">Add New User</h1>
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
                                <div class="row align-items-center">
                                    <div class="col">
                                        <input type="text" class="form-control" placeholder="Name">
                                    </div>
                                </div>
                                <div class="row align-items-center mt-4">
                                    <div class="col">
                                        <input type="email" class="form-control" placeholder="Email">
                                    </div>
                                </div>
                                <div class="row align-items-center mt-4">
                                    <div class="col">
                                        <input type="password" class="form-control" placeholder="Password">
                                    </div>
                                    <div class="col">
                                        <input type="password" class="form-control" placeholder="Confirm Password">
                                    </div>
                                </div>
                                <div class="row justify-content-start mt-4">
                                    <div class="col">
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input">
                                                I Read and Accept <a href="https://www.froala.com">Terms and Conditions</a>
                                            </label>
                                        </div>

                                        <button class="btn btn-primary mt-4">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="my-5">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <b>DATE & TIME PICKER</b>
                    </div>
                    <div class="col-12">
                        <input type="text" class="form-control" id="date">
                    </div>
                </div>
            </div>
        </section>

        <section class="mt-5">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <b>BOOTSTRAP SELECT</b>
                    </div>
                    <div class="col-12">
                        <select class="selectpicker" multiple data-live-search="true">
                            <option>Mustard</option>
                            <option>Ketchup</option>
                            <option>Barbecue</option>
                        </select>
                    </div>
                </div>
            </div>
        </section>

        <!-- Upload Image with preview -->

        <section class="mt-5">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <b> DROPZONE</b>
                    </div>
                    <div class="col-12">
                        <form action="url" enctype="multipart/form-data">
                            <div style="overflow: scroll;" class="input-images"></div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <!-- CKEditor - START  -->
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <b>CK EDITOR</b>
                    </div>
                    <div class="col-12">
                        <form>
                            <textarea name="editor1" id="editor1" rows="10" cols="80">
                                This is my textarea to be replaced with CKEditor 4.
                            </textarea>
                        </form>
                    </div>
                </div>
            </div>
        </section>






    </div>
    <!-- /main content -->

</div>
<!-- /page content -->
<script>
    $(function() {
        $('.input-images').imageUploader();
        $('#date').datetimepicker({
            icons: {
                time: 'fa fa-clock',
                date: 'fa fa-calendar',
                up: 'fa fa-chevron-up',
                down: 'fa fa-chevron-down',
                previous: 'fa fa-chevron-left',
                next: 'fa fa-chevron-right',
                today: 'fa fa-crosshairs',
                clear: 'fa fa-trash-o',
                close: 'fa fa-times'
            },

        });
    });
</script>

@endsection