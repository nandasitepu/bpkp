<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Post;
use Session;

class PostController extends Controller
{

    public function vueIndex(Request $request)
    {
        $posts = Post::latest()->paginate(5);

        $response = [
            'pagination' => [
                'total' => $posts->total(),
                'per_page' => $posts->perPage(),
                'current_page' => $posts->currentPage(),
                'last_page' => $posts->lastPage(),
                'from' => $posts->firstItem(),
                'to' => $posts->lastItem()
            ],
            'data' => $posts
        ];

        return response()->json($response);
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function Index()
     {
        $posts  = Post::all();

        return view('post.index')->withPosts($posts);
     }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $post = Post::all();

      return view('post.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      // Input Validation
      $this->validate($request,[
        'title'        => 'required|max: 255',
        'slug'         => 'required',
        'body'         => 'required',
      ]);

      // Save to Database
      $post = new Post;

      $post->title  = $request->title;
      $post->slug   = $request->slug;
      $post->body   = $request->body;

      $post->save();

      // Flash Message and redirect
      Session::flash('success', 'Artikel Berhasil Di Save');

      return redirect()->route('posts.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $post = Post::find($id);

      return view('post.show')->withPost($post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $post = Post::find($id);

      return view('post.edit')->withPost($post);
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
      // Input Validation
      $this->validate($request,[
        'title'        => 'required|max: 255',
        'slug'         => 'required',
        'body'         => 'required',
      ]);

      // Save to Database
      $post = new Post;

      $post->title  = $request->title;
      $post->slug   = $request->slug;
      $post->body   = $request->body;

      $post->save();

      // Flash Message and redirect
      Session::flash('success', 'Artikel Berhasil Di Update');

      return redirect()->route('posts.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $post = Post::find($id);

      $post->delete();

      Session::flash('success','Artikel Berhasil Di Delete');

      return redirect()->route('post.index');
    }
}
