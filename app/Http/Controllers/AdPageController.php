<?php

namespace App\Http\Controllers;

use App\Models\Ad;

class AdPageController extends Controller
{
    /**
     * 顯示廣告頁面
     */
    public function show()
    {
        // 獲取第一個上架的廣告，按排序順序
        $ad = Ad::where('is_active', true)
            ->orderBy('sort_order')
            ->orderBy('created_at', 'desc')
            ->first();

        return view('ad_page', compact('ad'));
    }

    /**
     * 顯示廣告刊登頁面
     */
    public function label()
    {
        return view('ad_label');
    }
}
