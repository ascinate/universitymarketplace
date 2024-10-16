<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function store(Request $request)
    {
        $post = new Post();

        $request->validate([
            'category' => 'required|integer',
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
                $image->move(public_path('uploads'), $imageName);
                $imagePaths[] = 'uploads/' . $imageName;
            }
            $photos = implode(',', $imagePaths);
        }


        Post::create([
            'userid' => session('user_id'),
            'category' => $request->input('category'),
            'location' => $request->input('location'),
            'city' => $request->input('city'),
            'address' => $request->input('address'),
            'zip' => $request->input('zip'),
            'name' => $request->input('name'),
            'phone' => $request->input('phone'),
            'email' => $request->input('email'),
            'price' => $request->input('price'),
            'transaction' => $request->input('transaction'),
            'conditions' => $request->input('conditions'),
            'item_title' => $request->input('item_title'),
            'item_description' => $request->input('item_description'),
            'photos' => $photos,

        ]);

        return redirect('directory')->back()->with('success', 'Post created successfully!');
    }

    public function index()
    {
        $posts = Post::all();
        return view('directory', ['posts' => $posts]);
    }
}
