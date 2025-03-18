<?php

namespace App\Http\Controllers;

use App\Models\ShortUrl;
use Illuminate\Http\Request;

class ShortUrlController extends Controller
{
    function index()
    {
        return view("welcome");
    }

    function store(Request $request)
    {
        $request->validate([
            "url" => "required|url"
        ]);

        $url = $request->url;
        $shortCode = $this->generateShortCode();
        ShortUrl::create([
            'short_code' => $shortCode,
            'url' => $request->url,
        ]);

        return view("success", compact("shortCode"));
    }

    function get_url($code)
    {
        $short_url = ShortUrl::where('short_code', $code)->firstOrFail();
        return redirect($short_url->url);
    }

    function generateShortCode()
    {
        do {
            $code = substr(str_shuffle('abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789'), 0, 6);
        } while (ShortUrl::where('short_code', $code)->exists());

        return $code;
    }
}
