@extends('layouts.app')
@section('content')
<section class="check_demo_movie">
    <div class="container emp-profile">
        <div class="card">
            <div class="card-body">
                <form class="form-horizontal" action="{{ url('albums') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    {{ method_field('POST') }}
                    <div class="form-group">

                        <div class="row mt-3">
                            <div class="col-md-2">
                                <label class="control-label">Image</label>
                            </div>
                            <div class="col-md-10">
                                <input type="file" class="float-left" name="img">
                                @error('img')
                                    <span class="text-danger"><small>{{ $message }}</small></span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-md-2">
                                <label class="control-label">Title</label>
                            </div>
                            <div class="col-md-10">
                                <input type="text" class="form-control" name="title" placeholder="Ex. Mohamed " value="{{ old('title') }}">
                                @error('title')
                                    <span class="text-danger"><small>{{ $message }}</small></span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-md-2">
                                <label class="control-label">Price</label>
                            </div>
                            <div class="col-md-10">
                                <input type="number" class="form-control" name="price" placeholder="Ex. 500 " value="{{ old('price') }}">
                                @error('price')
                                    <span class="text-danger"><small>{{ $message }}</small></span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-md-2">
                                <label class="control-label">Discount</label>
                            </div>
                            <div class="col-md-10">
                                <input type="number" class="form-control" name="discount" placeholder="Ex. 10 % " value="{{ old('discount') }}">
                                @error('discount')
                                    <span class="text-danger"><small>{{ $message }}</small></span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-md-2">
                                <label class="control-label">Status</label>
                            </div>
                            <div class="col-md-10">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="row">
                                            <lable class="col-md-4">Hide</lable>
                                            <input type="radio" class="mt-1" name="status" value="0">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="row">
                                            <lable class="col-md-4">Show</lable>
                                            <input type="radio" class="mt-1" name="status" value="1">
                                        </div>
                                    </div>
                                </div>
                                @error('status')
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
