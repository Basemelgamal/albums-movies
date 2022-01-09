@extends('layouts.app')
@section('content')
<section class="check_demo_movie">
    <div class="container emp-profile">
        <div class="card">
            <div class="card-body">
                <form class="form-horizontal" action="{{ url('user/update/'.auth()->user()->id) }}" method="POST" role="form">
                    @csrf
                    {{ method_field('PUT') }}
                    <input type="hidden" name="id" value="{{ auth()->user()->id }}">
                    <div class="form-group">
                        <div class="row mt-3">
                            <div class="col-md-2">
                                <label class="control-label">Name</label>
                            </div>
                            <div class="col-md-10">
                                <input type="text" class="form-control" name="name" placeholder="Ex. Mohamed " value="{{ auth()->user()->name }}">
                                <span class="help-block text-muted"><small>Role name must be <strong>Unique</strong>.</small></span>
                                @error('name')
                                    <span class="text-danger"><small>{{ $message }}</small></span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mt-3"  style="margin-top: 10px">
                            <div class="col-md-2">
                                <label class="control-label">E-Mail</label>
                            </div>
                            <div class="col-md-10">
                                <input type="text" class="form-control" name="email" placeholder="Ex. Example@example.com" value="{{ auth()->user()->email }}">
                                @error('email')
                                    <span class="text-danger"><small>{{ $message }}</small></span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mt-3" style="margin-top: 10px">
                            <div class="col-md-2">
                                <label class="control-label">Password</label>
                            </div>
                            <div class="col-md-10">
                                <input type="password" class="form-control" name="password" placeholder="Password" value="">
                                <span class="text-muted"><small><i class="fas fa-asterisk fas-sm text-danger"></i> If you will not change the password leave it empty.</small></span>
                                @error('password')
                                    <span class="text-danger"><small>{{ $message }}</small></span>
                                @enderror
                            </div>
                        </div>
                        <div class="row" style="margin-top: 10px">
                            <div class="col-md-2">
                                <label class="control-label">Confirm password</label>
                            </div>
                            <div class="col-md-10">
                                <input type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password" value="">
                                @error('password_confirmation')
                                    <span class="text-danger"><small>{{ $message }}</small></span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-3 mt-md-5">
                            <input type="submit" class="btn btn-gradiant" value="Submit">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
