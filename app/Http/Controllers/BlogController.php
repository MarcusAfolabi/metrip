<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Support\Str;
use App\Http\Requests\BlogRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{

    public function index()
    {
        if (auth()->check() && auth()->user()->role === 'admin') {
            return view('admin.support.list', [
                'lists' => Blog::paginate(25)
            ]);
            abort(403, 'You are not allowed to perform this operation!');
        }

        return view('admin.support.index', [
            'lists' => Blog::paginate(15)
        ]);
    }
    public function create()
    {
        if (auth()->check() && auth()->user()->role === 'admin') {
            return view('admin.support.create');
        }
        abort(403, 'You are not allowed to perform this operation!');
    }

    public function store(BlogRequest $request)
    {
        if (auth()->user()->role === 'admin') {
            $blog = new Blog;
            $blog->title = $request['title'];
            $blog->category_id = $request['category_id'];
            $blog->tags = $request['tags'];
            $blog->content = $request['content'];
            $blog->status = $request['status'];
            $blog->user_id = auth()->user()->id;
            $blog->slug = Str::slug($request['title'], '-');
            if ($request->hasFile('image')) {
                $blog->image = 'storage/' . $request->file('image')->store('postImages', 'public');
            }
            $blog->save();
            return redirect()->route('inspirations.show', $blog->id);
        }
    }

    public function show(Blog $blog)
    {
        return view('admin.support.show', compact('blog'));
    }
    public function edit(Blog $blog)
    {
        if (auth()->check() && auth()->user()->role === 'admin') {
            return view('admin.support.edit', compact('blog'));
        } else {
            abort(403, 'You are not allowed to perform this operation!');
        }
    }
    public function update(BlogRequest $request, Blog $blog)
    {
        if (auth()->user()->role === 'admin') {
            $blog = Blog::findOrFail($blog->id);
            $blog->title = $request['title'];
            $blog->category_id = $request['category_id'];
            $blog->tags = $request['tags'];
            $blog->content = $request['content'];
            $blog->status = $request['status'];
            $blog->slug = Str::slug($request['title'], '-');
            if ($request->hasFile('image')) {
                Storage::delete($blog->image);
                $blog->image = 'storage/' . $request->file('image')->store('postImages', 'public');
            }
            $blog->save();
            return redirect()->route('inspirations.show', $blog->id);
        } else {
            abort(403, 'You are not allowed to perform this operation!');
        }
    }
    public function destroy(Blog $blog)
    {
        if (auth()->check() && auth()->user()->role === 'admin') {
            if ($blog->image) {
                Storage::delete($blog->image);
            }
            $blog->delete();
            return redirect()->back()->with('status', 'Delete');
        } else {
            abort(403, 'You are not allowed to perform this operation!');
        }
    }
}
