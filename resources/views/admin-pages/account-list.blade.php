@extends('layouts.admin')


@section('content')
<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0 font-size-18">Users List</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Contacts</a></li>
                                <li class="breadcrumb-item active">Users List</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->
            <div class="row">
                <div class="col d-flex justify-content-end">
                    <label for="formrow-inputState" class="form-label" style="margin-right:30px;margin-top:10px">Sort by: </label>
                    <div class="col-lg-4" style="width: 20%">
                        <div class="mb-3">
                            <form action="" method="POST">
                                @csrf
                            <select name="sort" id="formrow-inputState" class="form-select" onchange="this.form.submit()">
                                <option value="created_at-desc" {{ $selected == "created_at-desc" ? "selected":"" }}>Recent</option>
                                <option value="created_at-asc" {{ $selected == "created_at-asc" ? "selected":"" }}>Date</option>
                                <option value="name-asc" {{ $selected == "name-asc" ? "selected":"" }}>Name, A to Z</option>
                                <option value="name-desc" {{ $selected == "name-desc" ? "selected":"" }}>Name, Z to A</option>
                            </select>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table align-middle table-nowrap table-hover">
                                    <thead class="table-light">
                                        <tr>
                                            <th scope="col" style="width: 70px;">#</th>
                                            <th scope="col">Picture</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Phone</th>
                                            <th scope="col">Date</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                   <tbody>
                                    @foreach ($list as $user)
                                    <a href="#">
                                        <tr onclick="window.location='#'">
                                            <td>{{$rank++}}</td>
                                            <td><img class="rounded-circle" src="{{url('images/profiles') . '/' . (empty($user->profile->avatar) ? 'default.jpg' : $user->profile->avatar)}}" alt="" width="40px"></td>
                                            <td>{{$user->name}}</td>
                                            <td>{{$user->email}}</td>
                                            <td>{{$user->profile->phone}}</td>
                                            <td>{{$user->created_at}}</td>
                                            <td></td>
                                         </tr>
                                    </a>
                                    @endforeach
                                   </tbody>
                                </table>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="pagination pagination-rounded d-flex justify-content-center">{{ $list->links('pagination::bootstrap-4') }}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- container-fluid -->
    </div>
    <!-- End Page-content -->

    

</div>


@endsection