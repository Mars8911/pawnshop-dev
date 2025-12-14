<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Ad;

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

        // 取得所有已刊登的廣告，不分區、不分類別，按排序順序
        $ads = Ad::where('is_active', true)
            ->orderBy('sort_order')
            ->orderBy('created_at', 'desc')
            ->get();

        return view('home', compact('categories', 'ads'));
    }
}

