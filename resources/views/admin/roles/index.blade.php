@extends('admin.layouts.app')
@section('content')
    <!-- Start content -->
    <div class="content">
        <div class="container">

            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="btn-group pull-right m-t-15">
                        <a href="{{ url('admin/roles/create') }}" class="btn btn-primary dropdown-toggle waves-effect waves-light">Add New Role<span class="m-l-5"><i class="fas fa-plus"></i></span></a>
                    </div>

                    <h4 class="page-title">Roles</h4>
                    <ol class="breadcrumb">
                        <li>
                            <a href="{{ url('admin/') }}">Dashboard</a>
                        </li>
                        <li class="active">
                            Roles
                        </li>
                    </ol>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12">
                    <div class="card-box table-responsive">
                        <h4 class="m-t-0 header-title"><b>Roles Table</b></h4>
                        <p class="text-muted font-13 m-b-30">
                            In this example the column index is prefixed to the column title.
                        </p>

                        <table id="datatable-colvid" class="table table-striped table-bordered">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Role name</th>
                                <th>Role display name</th>
                                <th>Role description</th>
                                <th>Created At</th>
                                <th>Action</th>
                            </tr>
                            </thead>

                            <tbody>
                            @foreach ($roles as $role)
                            <tr>
                                <td>{{ $role->id }}</td>
                                <td>{{ $role->name }}</td>
                                <td>{{ $role->display_name }}</td>
                                <td>{{ $role->description }}</td>
                                <td>{{ Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $role->created_at)->format('Y d M'); }}</td>
                                <td>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <a href="{{ url('admin/roles/'.$role->id.'/edit') }}" class="btn btn-dradient-primary dropdown-toggle waves-effect waves-light"><span class="m-l-5"><i class="fas fa-edit"></i></span></a>
                                        </div>
                                        <div class="col-md-3">
                                            <a href="javascript:void(0)" onclick="submit_delete({{ $role->id }})" data-id="{{ $role->id }}" class="btn btn-dradient-danger dropdown-toggle waves-effect waves-light">
                                                <span class="m-l-5 text-danger">
                                                    <i class="fas fa-trash"></i>
                                                </span>
                                            </a>
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
                url:"{{ url('admin/roles/') }}"+'/'+id,
                type:'POST',
                data:{_method: 'delete', '_token':'{{ csrf_token() }}' },
                success: function (data) {

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
