<?php

namespace App\Http\Controllers;

// Import Model "Post"
use App\Models\Post;

// return type View
use Illuminate\View\View;

//import Facade "Storage"
use Illuminate\Support\Facades\Storage;

//return type redirectResponse
use Illuminate\Http\RedirectResponse;

use Illuminate\Http\Request;

class PostController extends Controller
{
   public function shop(Request $request): View
   {
      $query = $request->input('query');
      $search = $request->input('search');

      $posts = Post::query();
  
      if ($search) {
          $posts->where('judul', 'LIKE', '%' . $search . '%')
                ->orWhere('deskripsi', 'LIKE', '%' . $search . '%');
      }
  
      $posts = $posts->latest()->paginate(100);
  
      return view('posts.shop', compact('posts', 'search'));
   }

   public function admin(): View
   {
      $posts = Post::latest()->paginate(1000);
      return view('posts.admin', compact('posts'));
   }
   public function index(): View
   {
      $posts = Post::latest()->paginate(1000);
      return view('posts.index', compact('posts'));
   }

   public function about(): View
   {
      $posts = Post::latest()->paginate(1000);
      return view('posts.about', compact('posts'));
   }

   public function beli(): View
   {
      $posts = Post::latest()->paginate(1000);
      return view('posts.beli', compact('posts'));
   }


   public function create(): View
   {
      return view('posts.create');
   }

   public function store(Request $request): RedirectResponse
   {
      //validate form
      $this->validate($request, [
         'image' => 'required|image|mimes:jpeg,jpg,png,gif|max:10048',
         'judul' => 'required|min:1',
         'harga' => 'required|min:1',
         'deskripsi' => 'required|min:1'
      ]);

      //upload image
      $image = $request->file('image');
      $image->storeAs('public/posts', $image->hashName());

      //create post
      Post::create([
         'image' => $image->hashName(),
         'judul' => $request->judul,
         'harga' => $request->harga,
         'deskripsi' => $request->deskripsi
      ]);

      //redirect to index
      return redirect()->route('posts.index')->with(['success' => 'DataBerhasil Disimpan!']);
   }

   public function show(string $id): View
   {
      //get post by Id
      $post = Post::findOrFail($id);

      //render view with post
      return view('posts.show', compact('post'));
   }

   public function destroy($id): RedirectResponse
   {
      // Get post by id 
      $post = Post::findOrFail($id);

      // Delete image
      Storage::delete('public/posts/' . $post->image);

      // Delete post
      $post->delete();

      // Redirect to admin page
      return redirect()->route('admin')->with(['success' => 'Data Berhasil Dihapus!']);
   }
   public function edit(string $id): View
   {
      //get post by Id
      $post = Post::findOrFail($id);

      //render view with post
      return view('posts.edit', compact('post'));
   }

   public function update(Request $request, $id): RedirectResponse
   {
      //validate form
      $this->validate($request, [
         'image' => 'image|mimes:jpeg,jpg,png,gif|max:10048',
         'judul' => 'required|min:5',
         'harga' => 'required|min:5',
         'deskripsi' => 'required|min:10'
      ]);

      //get post by ID
      $post = Post::findOrFail($id);

      //check if image is uploaded
      if ($request->hasFile('image')) {
         //upload new image
         $image = $request->file('image');
         $image->storeAs('public/posts', $image->hashName());

         //delete old image 
         Storage::delete('public/posts/' . $post->image);

         //update post with new image
         $post->update([
            'image' => $image->hashName(),
            'judul' => $request->judul,
            'harga' => $request->harga,
            'deskripsi' => $request->deskripsi
         ]);
      } else {
         //update post without image
         $post->update([
            'judul' => $request->judul,
            'harga' => $request->harga,
            'deskripsi' => $request->deskripsi
         ]);
      }

      //redirect to admin
      return redirect()->route('admin')->with(['success' => 'Data Berhasil Diubah!']);
   }
}
