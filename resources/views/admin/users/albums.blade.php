@extends('admin.layouts.app')
@section('content')
    <!-- Start content -->
    <div class="content">
        <div class="container">
            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <h4 class="page-title">Albums of {{ $user->name }}</h4>
                    <ol class="breadcrumb">
                        <li>
                            <a href="{{ url('admin/') }}">Dashboard</a>
                        </li>
                        <li class="active">
                            Albums
                        </li>
                    </ol>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="card-box table-responsive">
                        <h4 class="m-t-0 header-title"><b>{{ $user->name."'s" }} Albums Table</b></h4>
                        <table id="datatable-colvid" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Title</th>
                                    <th>Status</th>
                                    <th>Price</th>
                                    <th>Created At</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach ($albums as $album)
                            <tr>
                                <td>{{ $album->id}}</td>
                                <td>{{ $album->title}}</td>
                                <td>{{ $album->status}}</td>
                                <td>{{ $album->price}}</td>
                                <td>{{ Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $album->created_at)->format('Y d M'); }}</td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div> <!-- container -->
    </div> <!-- content -->
@endsection
