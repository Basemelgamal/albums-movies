<?php

namespace App\Http\Controllers;

use App\Http\Requests\AlbumRequest;
use App\Models\Album;
use App\Models\AlbumImage;

class AlbumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('albums.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AlbumRequest $request)
    {
        $album = new Album();
        $album->title = $request->title;
        $album->user_id = auth()->user()->id;
        $album->price = $request->price;
        $album->discount = $request->discount;
        $album->status = $request->status;
        $album->save();
        //------- Upload Image of movie in another table with album id -------
        //=============== There is Three ways to store image ===============
        /*
        *   First Way     => Store iamge PATH in another table in case we have multiple images.
        *   Seconed Way   => Store image PATH in a column call image with TEXT(data Type).
        *   Third Way     => Store images PATH in json array in the same columns.
        */
        if ($request->hasFile('img')) {
            $image = $request->file('img');
            $image->extension();
            $imageName = time() . rand(10, 10000) . '.' . $image->extension();
            $image->move(public_path().'/storage/albums', $imageName);
            $albumImage = new AlbumImage();
            $albumImage->album_id = $album->id;
            $albumImage->image = 'public/storage/albums/'. $imageName;
            $albumImage->save();
        }

        return redirect('profile')->with(['alert'=>[
            'icon'=>'success',
            'title'=>'Done',
            'text'=>'Movie Added successfully',
        ]]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Album  $album
     * @return \Illuminate\Http\Response
     */
    public function show(Album $album)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Album  $album
     * @return \Illuminate\Http\Response
     */
    public function edit(Album $album)
    {
        $input = [
            'album' => $album
        ];

        return view('albums.edit', $input);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Album  $album
     * @return \Illuminate\Http\Response
     */
    public function update(AlbumRequest $request, Album $album)
    {
        $album          = Album::find($album->id);
        $album->title   = $request->title;
        $album->user_id = auth()->user()->id;
        $album->price   = $request->price;
        $album->discount= $request->discount;
        $album->status  = $request->status;
        $album->save();
        //------- Upload Image of movie in another table with album id -------
        if ($request->hasFile('img')) {
            $image = $request->file('img');
            $image->extension();
            $imageName = time() . rand(10, 10000) . '.' . $image->extension();
            $image->move(public_path().'/storage/albums', $imageName);
            $albumImage = AlbumImage::where('album_id',$album->id)->first();
            $albumImage->image = 'public/storage/albums/'. $imageName;
            $albumImage->save();
        }

        return redirect('profile')->with(['alert'=>[
            'icon'=>'success',
            'title'=>'Done',
            'text'=>'Movie Added successfully',
        ]]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Album  $album
     * @return \Illuminate\Http\Response
     */
    public function destroy(Album $album)
    {
        $album = Album::find($album->id);
        if(!is_null($album)){
            $album ->delete();
            return response()->json(['err' => 0 ,'alert' =>
            [
                'icon'=>'success',
                'title'=> 'Deleted'
            ]]);
        }else{
            return response()->json(['err' => 1 ,'alert' =>
            [
                'icon'=>'error',
                'title'=> 'Failed!',
                'text'=> 'Try agan in another time'
            ]]);
        }
    }
}
