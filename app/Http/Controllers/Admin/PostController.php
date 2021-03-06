<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\Post;
use Session;

class PostController extends Controller
{

  Public function getPosts(Request $request)
   {
     $search = $request->search;

     $posts = Post::where('name', 'LIKE', "%$search%")->orderBy('id', 'Asc')->paginate();
     $response = [
             'pagination' => [
                 'total' => $posts->total(),
                 'per_page' => $posts->perPage(),
                 'current_page' => $posts->currentPage(),
                 'last_page' => $posts->lastPage(),
                 'from' => $posts->firstItem(),
                 'to' => $posts->lastItem()
             ],
             'posts' => $posts
         ];

     return response()->json($response);
   }



    // List of Posting
    public function Index()
     {
        $posts  = Post::orderBy('created_at', 'desc')->paginate(5);

        return view('post.index')->with('posts',$posts);
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
