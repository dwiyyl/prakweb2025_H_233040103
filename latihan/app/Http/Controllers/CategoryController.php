<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    // public function index()
    // {
    //     return view('categories', [
    //         'categories' => Category::all()
    //     ]);
    // }

    public function index()
    {
        // Mengambil semua kategori dari database
        // withCount('posts') = menghitung jumlah posts per kategori
        $categories = Category::withCount('posts')->get();

        // Mengirim data categories ke view 'category'
        return view('category', compact('categories'));
    }
}
