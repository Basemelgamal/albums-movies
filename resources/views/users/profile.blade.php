@extends('layouts.app')
@section('content')
<section class="check_demo_movie">
    <div class="container emp-profile">
        <form method="post">
            <div class="row">
                <div class="col-md-6">
                    <div class="profile-head">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Movies</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-2 float-left">
                    <a class="btn btn-gradiant text-white" href="{{ url('user/edit') }}">Edit Profile</a>
                </div>
                <div class="col-md-2 float-left">
                    <a class="btn btn-gradiant text-white" href="{{ url('albums/create') }}">Add Movie</a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="tab-content profile-tab" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>User Id</label>
                                        </div>
                                        <div class="col-md-6">
                                            <p>{{ auth()->user()->id }}</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Name</label>
                                        </div>
                                        <div class="col-md-6">
                                            <p>{{ auth()->user()->name }}</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Email</label>
                                        </div>
                                        <div class="col-md-6">
                                            <p>{{ auth()->user()->email }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <div class="row">
                                @foreach (auth()->user()->albums as $album)
                                <div class="card" style="width: 18rem;">
                                    <img class="card-img-top" src="{{ url($album->image->image) }}" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $album->title }}</h5>
                                        <div class="row">
                                            @if(!is_null($album->discount))
                                                <del class="col-6 font-weight-bold">{{ $album->price .' EGP'}}</del>
                                                <span class="col-6 font-weight-bold">{{ $album->price - ($album->price * ($album->discount / 100)) .' EGP'}}</span>
                                            @else
                                                <span class="col-12 font-weight-bold">{{ $album->price .' EGP'}}</span>
                                            @endif
                                        </div>
                                        <div class="col-12 mt-2">
                                            <span class="col-6 badge badge-{{ $album->status  == 0 ? 'danger' : 'success'}} badge-lg">{{ $album->status == 0 ? 'Disappear' : 'Appear' }}</span>
                                        </div>
                                        <div class="mt-3">
                                            <a href="{{ url('albums/'.$album->id.'/edit') }}" class="btn btn-gradiant text-white"><i class="fas fa-edit"></i>Edit</a>
                                            <a href="javascript:void(0)" onclick="submit_delete({{ $album->id }})" class="btn btn-gradiant text-white"><i class="fas fa-trash"></i>Delete</a>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>
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
                url:"{{ url('albums/') }}"+'/'+id,
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
