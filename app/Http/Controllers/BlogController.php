<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class BlogController extends Controller
{
    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            // 'name' => ['required', 'string', 'max:255'],
            'title' => ['required', 'string', 'max:255'],
        ]);

        $post =  new Blog;
        $post->name = $request->name;
        $post->title = $request->title;
        $post->content = $request->content;
        
        if (Auth::check()) {
            $post->user_id = Auth::user()->id;
        }
        else {
            $post->user_id = 0;
        }
        // 這裡要想辦法抓user ID 考慮Auth 功能 Auth::login($user);
        $post->save();

        return redirect('blog');
    }

    public function show(Request $request)
    {
        $blogs = Blog::paginate(15);
        return view('blog', ['posts' => $blogs]);
        // return redirect('blog')

    }
}