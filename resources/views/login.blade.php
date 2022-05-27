@extends('layouts.header')
@section('content')

<?php $all_users = true; ?>

<!-- Page content -->
<div class="page-content">


    <!-- Main content -->
    <div class="content-wrapper">

        <!-- Login Section - START  -->
        <section class="mt-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 offset-md-3">
                        <div class="bg-white br_15px px-3 py-3">
                            <div class="text-center">
                                <h2 class="fs_25px roboto">Login to your account</h2>
                            </div>
                            <div class="mt-5 px-3">
                                <form action="">
                                    <input type="text" class="w-100 br_10px b_1px_lightgrey h_40px fs_20px roboto px-2" placeholder="Email">
                                    <div class="input-group mt-2 h_40px">
                                        <input id="login_password" type="password" class="form-control h_40px br_10px fs_20px roboto" placeholder="Password" aria-label="Recipient's username" aria-describedby="basic-addon2">
                                        <div class="input-group-append cursor_pointer showLoginPass">
                                            <span class="input-group-text" id="basic-addon2"><i class="fa-solid fa-eye"></i></span>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="text-right px-3">
                                <a href="javascript:void(0)" class="text-primary fs_15px">Forgot Password ?</a>
                            </div>
                            <div class="mt-3 px-3">
                                <button class="py-1 bg-primary w-100 border-0">
                                    <span class="text-white fs_20px">Login</span>
                                </button>
                            </div>
                            <div class="mt-4 text-center">
                                <p>Don't have an account? <a href="javascript:void(0)" class="text-primary fs_15px">Sign Up Now!</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Login Section - END  -->

    </div>
    <!-- /main content -->

</div>
<!-- /page content -->

@endsection