<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use App\Models\Post;
use App\Http\Controllers\Controller;


class BlogController extends Controller
{
    public function index(): View {
        return view('blog.index', [
            'posts' => \App\Models\Post::paginate(1)]);
    }

    public function show(string $slug, string $id): RedirectResponse | View {
        $post = Post::findOrFail($id);

        if ($post->slug != $slug) {

            return to_route('blog.show', ['slug' => $post->slug, 'id' => $post->id]);
        }
        return  View('blog.show', [
            'post' => $post
        ]);
    }

    public function create() {
        return View('blog.create');
    }

    public function store(CreatePostRequest $request) {
        $post = Post::create($request->validated());
        return redirect()->route('blade.show', ['slug' => $post->slug, 'post' => $post->id])->with('success', "L'article a bien été sauvegardé");
    }

    public function formulaire()
    {
        return view('blog.connexion');
    }

    public function traitement()
    {
        request()->validate([
            'email' => ['required', 'email'],
            'password' => ['required', 'password'],
        ]);

        return redirect()->route('connexion');
    }


    public function inscription()
    {
        return view('blog.inscription');
    }


    public function traitementInscription()
    {
        request()->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
            'email' => ['required', 'email'],
            'password' => ['required'],
            'email' => ['required', 'email'],
            'password' => ['required'],
            'email' => ['required', 'email'],
            'password' => ['required'],
            'email' => ['required', 'email'],
            'password' => ['required'],


        ]);
        return redirect()->route('inscription');
    }


    public function profil()
    {
        return view('blog.profil');
    }

}
