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
                    <div class="col-12  py-3 d-flex justify-content-between align-items-center">
                        <div>
                            <h1>All Categories</h1>
                        </div>
                        <div>
                            <a href="{{route('add-category')}}" class="px-3 py-2 bg-primary border-0">
                            <i class="fa-solid fa-plus"></i>
                                Add New Category
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

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
                        <table id="categoriesTable" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Sr #</th>
                                    <th>Category Name</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                            @for($i = 0; $i < count($activeCat); $i++)
                                <tr>
                                    <td class="text-center">
                                        {{$activeCat[$i]['id']}}
                                    </td>
                                    <td class="text-center">
                                        {{$activeCat[$i]['name']}}
                                    </td>
                                    <td class="text-center">
                                        <div class="dropdown show">
                                            <a class="btn btn-primary dropdown-toggle categoryDropdownTitle_d" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Status
                                            </a>

                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                <a class="dropdown-item categoryDropdownItem" href="javascript:void(0)">Active</a>
                                                <a class="dropdown-item categoryDropdownItem" href="javascript:void(0)">In-active</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endfor

                            </tbody>
                        </table>


                    </div>
                </div>

            </div>
        </section>

    </div>
    <!-- /main content -->

</div>
<!-- /page content -->

@endsection