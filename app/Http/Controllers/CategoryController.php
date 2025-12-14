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

        // 如果是新北市類別，使用 newcategories 視圖
        if (stripos($category->name, '新北市') !== false ||
            stripos($category->slug, 'newtaipei') !== false ||
            stripos($category->slug, 'new-taipei') !== false) {

            // 取得新北市類別下的所有啟用廣告
            $newtaipeiAds = Ad::where('category_id', $id)
                ->where('is_active', true)
                ->orderBy('sort_order')
                ->orderBy('created_at', 'desc')
                ->get();

            return view('newcategories', compact('category', 'newtaipeiAds'));
        }

        // 取得基隆和台北兩個類別
        $keelungCategory = Category::where('name', '基隆')
            ->orWhere('slug', 'keelung')
            ->first();

        $taipeiCategory = Category::where('name', '台北')
            ->orWhere('slug', 'taipei')
            ->first();

        // 取得基隆類別下的所有啟用廣告
        $keelungAds = collect();
        if ($keelungCategory) {
            $keelungAds = Ad::where('category_id', $keelungCategory->id)
                ->where('is_active', true)
                ->orderBy('sort_order')
                ->orderBy('created_at', 'desc')
                ->get();
        }

        // 取得台北類別下的所有啟用廣告
        $taipeiAds = collect();
        if ($taipeiCategory) {
            $taipeiAds = Ad::where('category_id', $taipeiCategory->id)
                ->where('is_active', true)
                ->orderBy('sort_order')
                ->orderBy('created_at', 'desc')
                ->get();
        }

        // 預設顯示當前類別的廣告（向後兼容）
        $ads = Ad::where('category_id', $id)
            ->where('is_active', true)
            ->orderBy('sort_order')
            ->orderBy('created_at', 'desc')
            ->get();

        return view('subcategories', compact('category', 'ads', 'keelungCategory', 'taipeiCategory', 'keelungAds', 'taipeiAds'));
    }

}

