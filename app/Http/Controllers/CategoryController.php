<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Ad;

class CategoryController extends Controller
{
    /**
     * 顯示子分類頁面
     */
    public function show($id)
    {
        // 取得類別資料
        $category = Category::findOrFail($id);

        // 取得該類別下的所有啟用廣告
        $ads = Ad::where('category_id', $id)
            ->where('is_active', true)
            ->orderBy('sort_order')
            ->orderBy('created_at', 'desc')
            ->get();

        return view('subcategories', compact('category', 'ads'));
    }
}

