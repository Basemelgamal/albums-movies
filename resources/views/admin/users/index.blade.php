@extends('admin.layouts.app')
@section('content')
    <!-- Start content -->
    <div class="content">
        <div class="container">
            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="btn-group pull-right m-t-15">
                        <a href="{{ url('admin/members/create') }}" class="btn btn-primary dropdown-toggle waves-effect waves-light">Add New Member<span class="m-l-5"><i class="fas fa-plus"></i></span></a>
                    </div>
                    <h4 class="page-title">Members</h4>
                    <ol class="breadcrumb">
                        <li>
                            <a href="{{ url('admin/') }}">Dashboard</a>
                        </li>
                        <li class="active">
                            Members
                        </li>
                    </ol>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <ul class="nav nav-tabs">
                        <li class="">
                            <a href="#admins" data-toggle="tab" aria-expanded="false">
                                <span class="visible-xs"><i class="fa fa-home"></i></span>
                                <span class="hidden-xs">Admins</span>
                            </a>
                        </li>
                        <li class="active">
                            <a href="#users" data-toggle="tab" aria-expanded="true">
                                <span class="visible-xs"><i class="fa fa-user"></i></span>
                                <span class="hidden-xs">Users</span>
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane" id="admins">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="card-box table-responsive">
                                        <h4 class="m-t-0 header-title"><b>Admins Table</b></h4>
                                        <table id="datatable-colvid" class="table table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Admin name</th>
                                                    <th>Admin E-Mail</th>
                                                    <th>Created At</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @foreach ($admins as $admin)
                                                <tr>
                                                    <td>{{ $admin->id }}</td>
                                                    <td>{{ $admin->name }}</td>
                                                    <td>{{ $admin->email }}</td>
                                                    <td>{{ Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $admin->created_at)->format('Y d M'); }}</td>
                                                    <td>
                                                        <div class="row">
                                                            @if(auth()->user()->hasRole('superadmin'))
                                                                <div class="col-md-3">
                                                                    <a href="{{ url('admin/members/'.$admin->id.'/edit') }}" class="btn btn-dradient-primary dropdown-toggle waves-effect waves-light"><span class="m-l-5"><i class="fas fa-edit"></i></span></a>
                                                                </div>
                                                            @endif
                                                            <div class="col-md-3">
                                                                <a href="javascript:void(0)" onclick="submit_delete({{ $admin->id }})" style="pointer-events: {{ $admin->id == auth()->user()->id ? 'none' : '' }}" class="btn btn-dradient-danger dropdown-toggle waves-effect waves-light"><span class="m-l-5 text-danger"><i class="fas fa-trash"></i></span></a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane active" id="users">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="card-box table-responsive">
                                        <h4 class="m-t-0 header-title"><b>Users Table</b></h4>
                                        <table id="x" class="table table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>User name</th>
                                                    <th>User E-Mail</th>
                                                    <th>Created At</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($users as $user)
                                                <tr>
                                                    <td>{{ $user->id }}</td>
                                                    <td>{{ $user->name }}</td>
                                                    <td>{{ $user->email }}</td>
                                                    <td>{{ Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $user->created_at)->format('Y d M'); }}</td>
                                                    <td>
                                                        <div class="row">
                                                            @if(auth()->user()->hasRole('superadmin'))
                                                                <div class="col-md-4">
                                                                    <a href="{{ url('admin/members/'.$user->id.'/edit') }}" class="btn btn-dradient-primary dropdown-toggle waves-effect waves-light"><span class="m-l-5"><i class="fas fa-edit"></i></span></a>
                                                                </div>
                                                            @endif
                                                            <div class="col-md-4">
                                                                <a href="javascript:void(0)" onclick="submit_delete({{ $user->id }})" class="btn btn-dradient-danger dropdown-toggle waves-effect waves-light"><span class="m-l-5 text-danger"><i class="fas fa-trash"></i></span></a>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <a href="{{ url('admin/albums/'.$user->id) }}" class="btn btn-dradient-info dropdown-toggle waves-effect waves-light"><span class="m-l-5"><i class="fas fa-eye"></i></span></a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->

        </div> <!-- container -->
    </div> <!-- content -->
@endsection
@section('additional_scripts')
    <script>
        function submit_delete(id){
            if(id == null){
                Swal.fire({
                    icon: 'error',
                    title: 'Failed!',
                    text: 'this row is not able to be deleted',
                });
            }
            $.ajax({
                url:"{{ url('admin/members/') }}"+'/'+id,
                type:'POST',
                data:{_method: 'DELETE', '_token':'{{ csrf_token() }}' },
                success: function (data) {
                    console.log(data);
                    if(data['err'] == 0){
                        Swal.fire({
                            icon: data['alert']['icon'],
                            title: data['alert']['title'],
                        });
                        location.reload();
                    }else{
                        Swal.fire({
                            icon: data['alert']['icon'],
                            title: data['alert']['title'],
                            text: data['alert']['text'],
                        });
                    }
                },error:function(res){
                    Swal.fire({
                        icon: 'error',
                        title: 'Failed!',
                        text: 'There is touble please call the support!',
                    });
                }
            })
        };
    </script>
@endsection
