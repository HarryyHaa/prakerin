<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Artikel;
use App\Kategori;
use App\Tag;

class FrontendController extends Controller
{
    public function index()
    {
        $artikel = Artikel::orderBy('created_at', 'desc')->take(3)->get();

        return view('/', compact('artikel'));
    }

    public function allblog(Request $request)
    {
        $artikel = Artikel::with('kategori', 'tag', 'user')->latest()->paginate(5);
        $kategori = Kategori::all();

        $cari = $request->get('cari');

        if ($cari) {
            $artikel = Artikel::where('judul', 'LIKE', "%$cari%")->paginate(4);
        }
        return view('archive', compact('artikel', 'kategori'));
    }

    public function blogall(Artikel $artikel)
    {
        $artikel = Artikel::where('slug', $artikel->slug)->get();
        return view('frontend.mag.single', compact('artikel'));
    }

    public function blogcat(Kategori $cat)
    {
        $artikel = $cat->artikel()->latest()->paginate(5);
        return view('frontend.mag.index', compact('artikel', 'cat'));
    }

    public function tagblog(Request $request, Tag $tag)
    {
        $artikel = $tag->artikel()->with('kategori', 'tag', 'user')->latest()->paginate(5);
        $kategori = Kategori::all();

        $cari = $request->get('cari');

        if ($cari) {
            $artikel = Artikel::where('judul', 'LIKE', "%$cari%")->paginate(4);
        }
        return view('archive', compact('artikel', 'kategori'));
        // return view('frontend.mag.index', compact('artikel', 'tag'));
    }

    public function singel_post($slug)
    {
        $artikel = Artikel::where('slug', $slug)->get();
        return view('frontend.mag.singel', compact('artikel'));
    }

    public function categoryblog(Request $request, Kategori $slug)
    {
        // $artikel = Artikel::with('kategori', 'tag', 'user')->where('')->latest()->paginate(5);
        $artikel = $slug->artikel()->with('kategori', 'tag', 'user')->latest()->paginate(5);
        $kategori = Kategori::all();

        $cari = $request->get('cari');

        if ($cari) {
            $artikel = Artikel::where('judul', 'LIKE', "%$cari%")->paginate(4);
        }
        return view('archive', compact('artikel', 'kategori'));
    }
}
