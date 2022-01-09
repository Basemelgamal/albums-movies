@extends('layouts.app')
@section('content')
<section class="check_demo_movie">
    <div class="container emp-profile">
        <div class="card">
            <div class="card-body">
                <form class="form-horizontal" action="{{ url('albums/'.$album->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    {{ method_field('PUT') }}
                    <div class="form-group">
                        <div class="row mt-3">
                            <div class="col-md-2">
                                <label class="control-label">Image</label>
                            </div>
                            <div class="col-md-10">
                                <input type="file" class="float-left" name="img">
                                <span class="help-block text-muted"><small>If you do not want to change movie image leace it empty.</small></span>
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
                                <input type="text" class="form-control" name="title" placeholder="Ex. Mohamed " value="{{ $album->title }}">
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
                                <input type="number" class="form-control" name="price" placeholder="Ex. 500 " value="{{ $album->price }}">
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
                                <input type="number" class="form-control" name="discount" placeholder="Ex. 10 % " value="{{ $album->discount }}">
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
                                            <input type="radio" class="mt-1" name="status" {{ $album->status == 0 ? 'checked' : ''  }} value="0">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="row">
                                            <lable class="col-md-4">Show</lable>
                                            <input type="radio" class="mt-1" name="status" {{ $album->status == 1 ? 'checked' : ''  }} value="1">
                                        </div>
                                    </div>
                                </div>
                                @error('status')
                                    <span class="text-danger"><small>{{ $message }}</small></span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-3 mt-md-5">
                            <input type="submit" class="btn btn-gradiant" value="Update">
                        </div>
                    </div>
                </form>
            </div>
        </div>
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
