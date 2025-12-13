<?php

namespace App\Http\Controllers;

use App\Models\Category;

class HomeController extends Controller
{
    /**
     * 顯示首頁
     */
    public function index()
    {
        // 取得所有啟用的類別，按排序順序
        $categories = Category::where('is_active', true)
            ->orderBy('sort_order')
            ->orderBy('id')
            ->get();

        return view('home', compact('categories'));
    }
}

