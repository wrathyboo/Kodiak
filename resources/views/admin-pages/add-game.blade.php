@extends('layouts.admin')

@section('content')
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0 font-size-18">Form</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Forms</a></li>
                                    <li class="breadcrumb-item active">Form</li>
                                </ol>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title mb-4">Add new app</h5>

                                <form class="row row-cols-lg-auto g-3 align-items-center" method="POST">
                                    @csrf
                                    <div class="col-12">
                                        <label class="visually-hidden" for="inlineFormInputGroupUsername">Game ID</label>
                                        <div class="input-group">
                                        
                                            <input type="text" class="form-control" name="id" id="inlineFormInputGroupUsername"
                                                placeholder="appid">
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <label class="visually-hidden" for="inlineFormSelectPref">Preference</label>
                                        <select name="status" class="form-select" id="inlineFormSelectPref">
                                            <option value="1">Published</option>
                                            <option value="0">Hidden</option>
                                        </select>
                                    </div>

                                    <div class="col-12">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="inlineFormCheck">
                                            <label class="form-check-label" for="inlineFormCheck">
                                                Check
                                            </label>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <button type="submit" class="btn btn-primary w-md">Submit</button>
                                    </div>
                                </form>

                            </div>
                            <!-- end card body -->
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end col -->
                </div>
            </div>
        </div>
    </div>
@endsection
