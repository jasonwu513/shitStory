<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;


class PostController extends Controller
{
  public function __construct(){
    $this->middleware('auth');
  }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home')->withPosts(Post::where('user_id', '=', Auth::id())->get());
        $user_id = Auth::id();
        Log::info('Showing  user id: '. $path);
        // $posts = Post::all();
        // return view('home', ['posts' => $posts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $post=Post::create($request->all());
        // $post->user_id = Auth::id();
        $image = $request->file('thumbnail')->getRealpath();
        // $image = imagecreatefromJPEG($imagePath);
        //
        // $exif = exif_read_data($request->file('thumbnail'));
        // if(!empty($exif['Orientation'])) {
        //     switch($exif['Orientation']) {
        //         case 8:
        //             $image = imagerotate($image,90,0);
        //             break;
        //         case 3:
        //             $image = imagerotate($image,180,0);
        //             break;
        //         case 6:
        //             $image = imagerotate($image,-90,0);
        //             break;
        //     }
        // }

        $path = $request->file('thumbnail')->store('public');
        // Log::info('Showing path: '. $path);
        // Log::info('Showing   $image: '.  $image);
        // Log::info('Showing   $orientation: '.  $exif['Orientation']);

        $path = str_replace('public/','/storage/', $path );

          $post =new Post;
        $post->fill($request->all());
        $post->user_id = Auth::id();
        $post->thumbnail = $path;
        $post->save();
        return redirect('post');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('show')->withPost(Post::find($id));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('edit')->withPost(Post::find($id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $post=Post::find($id);
        $post->update($request->all());
        return redirect('post');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post=Post::find($id);
        $post->delete();
        return redirect('post');
    }
}
