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
                    <div class="col-12  py-3 d-flex justify-content-between align-items-center">
                        <div>
                            <h1>All Users</h1>
                        </div>
                        <div>
                            <a href="{{route('add-user')}}" class="px-3 py-2 bg-primary border-0">
                                <i class="fa-solid fa-user-plus mr-2"></i>
                                Add New User
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Users table - START  -->
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-12 mt-3 ">
                        <!-- <table class="table">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">Sr #</th>
                                    <th scope="col">Profile</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">User Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>
                                        <div class="wh_50px overflow-hidden br_50 mr-2">
                                            <img class="objFitCover" src="{{asset('assets/images/profile-img.jpeg')}}" alt="">
                                        </div>
                                    </td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                    <td>@mdo</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Jacob</td>
                                    <td>Thornton</td>
                                    <td>@fat</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Larry</td>
                                    <td>the Bird</td>
                                    <td>@twitter</td>
                                </tr>
                            </tbody>
                        </table> -->
                        <table id="example" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Sr #</th>
                                    <th>Profile Photo</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-center">1</td>
                                    <td class="text-center">
                                        <div class="wh_50px overflow-hidden br_50 mx-auto">
                                            <img class=" objFitCover" src="{{asset('assets/images/profile-img.jpeg')}}" alt="">
                                        </div>
                                    </td>
                                    <td class="text-center">System Architect</td>
                                    <td class="text-center">Edinburgh</td>
                                    <td class="text-center">61</td>
                                </tr>


                            </tbody>
                        </table>


                    </div>
                </div>

            </div>
        </section>
        <!-- Users table - END  -->

    </div>
    <!-- /main content -->

</div>
<!-- /page content -->



@endsection