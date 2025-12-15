<?php

namespace App\Http\Controllers;

use App\Models\Ad;
use App\Models\AllianceAd;
use App\Models\TimelineItem;

class AdPageController extends Controller
{
    /**
     * 顯示單一廣告頁面
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        // 根據傳入的 ID 取得對應的已上架廣告，若找不到則回傳 404
        $ad = Ad::where('is_active', true)
            ->where('id', $id)
            ->firstOrFail();

        return view('ad_page', compact('ad'));
    }

    /**
     * 顯示廣告刊登頁面
     */
    public function label()
    {
        $allianceAds = AllianceAd::where('is_active', true)
            ->orderBy('sort_order')
            ->orderBy('created_at', 'desc')
            ->get();

        $timelineItems = TimelineItem::where('is_active', true)
            ->orderBy('sort_order')
            ->orderBy('date', 'desc')
            ->get();

        return view('ad_label', compact('allianceAds', 'timelineItems'));
    }
}
