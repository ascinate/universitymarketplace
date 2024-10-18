<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class PostController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'category' => 'required|string',
            'location' => 'required|string',
            'city' => 'required|string',
            'address' => 'required|string',
            'zip' => 'required|string',
            'name' => 'required|string',
            'phone' => 'required|string',
            'email' => 'required|email',
            'price' => 'nullable|numeric',
            'transaction' => 'nullable|string',
            'conditions' => 'nullable|string',
            'item_title' => 'required|string',
            'item_description' => 'required|string',
             'photos.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        

        $photos = '';
        if ($request->hasFile('photos')) {
            $imagePaths = [];

            foreach ($request->file('photos') as $image) {
                $imageName = time() . '_' . $image->getClientOriginalName();
                $image->move('uploads', $imageName);
                $imagePaths[] = $imageName;
            }
            $photos = implode(',', $imagePaths);
        }
      
        $post = new Post();
        $post->userid = Session::get('user_id');
        $post->category = $request->category; 
        $post->location = $request->location;
        $post->city = $request->city;
        $post->address = $request->address;
        $post->zip = $request->zip;
        $post->name = $request->name;
        $post->phone = $request->phone;
        $post->email = $request->email;
        $post->price = $request->price;
        $post->transaction = $request->transaction;
        $post->conditions = $request->conditions;
        $post->item_title = $request->item_title;
        $post->item_description = $request->item_description;
        $post->photos = $photos;
    
        $post->save();
        return redirect('directory');
    }

    public function index()
    {
        $posts = Post::all();
        return view('directory', ['posts' => $posts]);
    }

    public function show($id)
    {
        $data = Post::find($id);
        $relatedProducts = Post::where('category', $data->category)
                            ->where('id', '!=', $data->id)
                            ->get();
        return view('details', ['data' => $data,'relatedProducts' => $relatedProducts]);
    }
}
