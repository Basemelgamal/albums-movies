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
                            <a href="{{ url('admin/members') }}">Members</a>
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
                            <h4 class="m-t-0 header-title"><b>Update Member</b></h4>
                        </div>
                        <div class="row m-t-4">
                            <div class="col-md-12 ">
                                <form class="form-horizontal" action="{{ url('admin/members/'.$user->id) }}" method="POST" role="form">
                                    @csrf
                                    {{ method_field('PUT') }}
                                    <div class="form-group">
                                        <div class="row mt-3">
                                            <div class="col-md-2">
                                                <label class="control-label">Name</label>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" name="name" placeholder="Ex. Mohamed " value="{{ $user->name }}">
                                                <span class="help-block"><small>Role name must be <strong>Unique</strong>.</small></span>
                                                @error('name')
                                                    <span class="text-danger"><small>{{ $message }}</small></span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="row mt-3"  style="margin-top: 10px">
                                            <div class="col-md-2">
                                                <label class="control-label">E-Mail</label>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" name="email" placeholder="Ex. Example@example.com" value="{{ $user->email }}">
                                                @error('email')
                                                    <span class="text-danger"><small>{{ $message }}</small></span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="row mt-3" style="margin-top: 10px">
                                            <div class="col-md-2">
                                                <label class="control-label">Password</label>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="password" class="form-control" name="password" placeholder="Password" value="">
                                                <span class="text-dark"><small><i class="fas fa-asterisk fas-sm text-danger"></i> If you will not change the password leave it empty.</small></span>
                                                @error('password')
                                                    <span class="text-danger"><small>{{ $message }}</small></span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="row" style="margin-top: 10px">
                                            <div class="col-md-2">
                                                <label class="control-label">Confirm password</label>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password" value="">
                                                @error('password_confirmation')
                                                    <span class="text-danger"><small>{{ $message }}</small></span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="row" style="margin-top: 10px">
                                            <div class="col-md-2">
                                                <label class="control-label">Role</label>
                                            </div>
                                            <div class="col-md-6">
                                                <select class="form-control" name="role">
                                                    @foreach ($roles as $role)
                                                        <option value="{{ $role->id }}" {{ $user->roles->first()->id == $role->id ? 'selected' : '' }}>{{ $role->name }}</option>
                                                    @endforeach
                                                </select>
                                                @error('role')
                                                    <span class="text-danger"><small>{{ $message }}</small></span>
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
