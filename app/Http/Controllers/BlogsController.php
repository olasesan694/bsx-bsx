<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use Purifier;

// brings in the model
use App\Post; /** brings in the posts, so we can use all it's functions 
 * Post.php uses the namespace 'App' and it's class name is 'Post' */

class BlogsController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // denies access to any action method of POST except the specified pages in the array
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index ()
    {
        // loads the view | shows 10 pages at a time and then displays arrow for the option for more
        // $posts = Post::orderBy('created_at', 'desc');
        // $posts = Post::orderBy('created_at', 'desc')->paginate(10); 
        $posts = Post::all(); // eloquent fetches all the data in an array
        // $postRow = Post::orderBy('title', 'desc')->get();
        // $postRow = Post::orderBy('title', 'desc')->take(1)->get();
        // $postRow = Post::DB("SELECT * FROM posts"); | Can be used if use App\DB is imported

        return view('blog.index')->with("posts", $posts);
        // return view('posts.index')->with('posts', $posts);
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // create posts page
        return view('blog.create');
    }

    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // The validation | Specifies what is required
        // The store method gets called when the form's submit button is pressed.
        $this->validate($request, [
            'title' => 'required',
            'descriptionText' => 'required',
            'image_file_post' => 'image|nullable|mimes:jpeg,png,jpg,gif,svg|max:2048' // nullable (not required) | Max (size should be under 2MB for apache)
        ]); // takes the request and an array of rules | We specified names of the fields to be required

        // // Handle File Upload
        // if($request->hasFile('image_file_post')) { // if user submitted an image
        //     // get filename with the extension
        //     $filenameWithExt = $request->file('image_file_post')->getClientOriginalName(); // ext.
        //     // get just the filename without the extension
        //     $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME); // php funcs
        //     // get just the extension
        //     $extension = $request->file('image_file_post')->getClientOriginalExtension(); // laravel funcs
        //     // the unique filename to store - to avoid interference with other upload of similar names
        //     $fileNameToStore = $filename.'_'.time().'.'.$extension; // using timestamp to make it unique and avoid overriding
        //     // Uploads the Image
        //     $path = $request->file('image_file_post')->storeAs('public/image_file_post', $fileNameToStore);

        // } else { // if the user didn't upload anything
        //     $fileNameToStore = 'noimage.png';
        // }
        
        // ELOQUENT: send to db. and create post
        $post = new Post; // creates a post
        $post->title = $request->input('title');
        $post->body = Purifier::clean($request->input('descriptionText')); // avoids placing raw script in db.
        $post->user_id = auth()->user()->id; // db value of column user_id is set to the currently logged in user.
        // add post image
        // $post->image_file_post = $fileNameToStore; // either no image or the image with timestamp
        $post->image_file_post = 'noimage.png'; // either no image or the image with timestamp

        $post->save();

        // redirect to new page with a success message about the post being created
        return redirect('/blog')->with('success', 'Your post has been created.');
         
    }




    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // fetches the data that correspond to that specific row clicked
        $postRow = Post::find($id); // find corresponding data by id
        return view('blog.show')->with('postRow', $postRow);
    }




        /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // bring in the specific post by it's id
        $postRowToEdit = Post::find($id); // find corresponding data by id
        // check for the user correct user
        if (auth()->user()->id !== $postRowToEdit->user_id) {
            return redirect('/blog')->with('error', '');
        }
        return view('blog.edit')->with('postRowToEdit', $postRowToEdit);
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
        // The validation | Specifies what is required
        // The store method gets called when the form's submit button is pressed.
        $this->validate($request, [
            'title' => 'required',
            'descriptionText' => 'required' 
        ]); // takes the request and an array of rules | We specified names of the fields to be required

        // // Handle File Upload
        // if($request->hasFile('image_file_post')) { // if user submitted an image
        //     // get filename with the extension
        //     $filenameWithExt = $request->file('image_file_post')->getClientOriginalName(); // ext.
        //     // get just the filename without the extension
        //     $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME); // php funcs
        //     // get just the extension
        //     $extension = $request->file('image_file_post')->getClientOriginalExtension(); // laravel funcs
        //     // the unique filename to store - to avoid interference with other upload of similar names
        //     $fileNameToStore = $filename.'_'.time().'.'.$extension; // using timestamp to make it unique and avoid overriding
        //     // Uploads the Image
        //     $path = $request->file('image_file_post')->storeAs('public/image_file_post', $fileNameToStore);
        // } 

        // send to db. and create post
        $editedPost = Post::find($id); // creates a post
        // check for the user correct user
        if (auth()->user()->id !== $editedPost->user_id) {
            return redirect('/blog')->with('error', '');
        }
        $editedPost->title = $request->input('title');
        $editedPost->body = $request->input('descriptionText');

        // add only if user uploaded an image
        // if($request->hasFile('image_file_post')) { // if user submitted an image
        //     $editedPost->image_file_post = $fileNameToStore;
        // }

        $editedPost->save();

        // redirect to new page with a success message about the post being created
        return redirect('/blog')->with('success', 'Your post has been updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // find the specific post by it's id
        $postToDelete = Post::find($id);

        // check for the user correct user
        if (auth()->user()->id !== $postToDelete->user_id) {
            return redirect('/blog')->with('error', "");
        }

        // delete the image if the user uploaded and image
        if ($postToDelete->image_file_post != 'noimage.jpg') {
            // To delete the image 
            Storage::delete('public/image_file_post/'.$postToDelete->image_file_post);
        }

        $postToDelete->delete();
        return redirect('/blog')->with('success', 'Your post has been removed');
    }
}
