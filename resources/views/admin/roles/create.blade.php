@extends('admin.layouts.app')
@section('content')
<!-- Start content -->
    <div class="content">
        <div class="container">
            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <h4 class="page-title">Roles</h4>
                    <ol class="breadcrumb">
                        <li>
                            <a href="{{ url('admin/') }}">Dashboard</a>
                        </li>
                        <li>
                            <a href="{{ url('admin/roles') }}">Roles</a>
                        </li>
                        <li class="active">
                            Create
                        </li>
                    </ol>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="card-box">
                        <div class="col-md-12 mt-md-6">
                            <h4 class="m-t-0 header-title"><b>Create New Role</b></h4>
                        </div>
                        <div class="row m-t-4">
                            <div class="col-md-12 ">
                                <form class="form-horizontal" action="{{ url('admin/roles') }}" method="POST" role="form">
                                    @csrf
                                    <div class="form-group">
                                        <div class="row" style="margin-top: 10px">
                                            <div class="col-md-2">
                                                <label class="control-label">Name</label>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" name="name" placeholder="Ex. Admin" value="{{ old('name') }}">
                                                <span class="help-block"><small>Role name must be <strong>Unique</strong>.</small></span>
                                                @error('name')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="row" style="margin-top: 10px">
                                            <div class="col-md-2">
                                                <label class="control-label">Display Name</label>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" name="display_name" placeholder="Ex. Admin" value="{{ old('admin') }}">
                                                @error('display_name')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="row" style="margin-top: 10px">
                                            <div class="col-md-2">
                                                <label class="control-label">Description</label>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" name="desc" placeholder="Ex. User is allowed to manage and edit other users " value="{{ old('desc') }}">
                                                @error('desc')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-3 mt-md-5">
                                            <input type="submit" class="btn btn-primary" value="Submit">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- container -->
    </div> <!-- content -->
@endsection
