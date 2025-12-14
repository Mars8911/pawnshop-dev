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

        // 如果是桃園、新竹、苗栗相關類別，使用 taocategories 視圖
        if (stripos($category->name, '桃園') !== false ||
            stripos($category->name, '新竹') !== false ||
            stripos($category->name, '苗栗') !== false ||
            stripos($category->slug, 'taoyuan') !== false ||
            stripos($category->slug, 'hsinchu') !== false ||
            stripos($category->slug, 'miaoli') !== false) {

            // 取得桃園類別
            $taoyuanCategory = Category::where('name', '桃園')
                ->orWhere('slug', 'taoyuan')
                ->first();

            // 取得新竹類別
            $hsinchuCategory = Category::where('name', '新竹')
                ->orWhere('slug', 'hsinchu')
                ->first();

            // 取得苗栗類別
            $miaoliCategory = Category::where('name', '苗栗')
                ->orWhere('slug', 'miaoli')
                ->first();

            // 取得桃園類別下的所有啟用廣告
            $taoyuanAds = collect();
            if ($taoyuanCategory) {
                $taoyuanAds = Ad::where('category_id', $taoyuanCategory->id)
                    ->where('is_active', true)
                    ->orderBy('sort_order')
                    ->orderBy('created_at', 'desc')
                    ->get();
            }

            // 取得新竹類別下的所有啟用廣告
            $hsinchuAds = collect();
            if ($hsinchuCategory) {
                $hsinchuAds = Ad::where('category_id', $hsinchuCategory->id)
                    ->where('is_active', true)
                    ->orderBy('sort_order')
                    ->orderBy('created_at', 'desc')
                    ->get();
            }

            // 取得苗栗類別下的所有啟用廣告
            $miaoliAds = collect();
            if ($miaoliCategory) {
                $miaoliAds = Ad::where('category_id', $miaoliCategory->id)
                    ->where('is_active', true)
                    ->orderBy('sort_order')
                    ->orderBy('created_at', 'desc')
                    ->get();
            }

            return view('taocategories', compact('category', 'taoyuanCategory', 'hsinchuCategory', 'miaoliCategory', 'taoyuanAds', 'hsinchuAds', 'miaoliAds'));
        }

        // 如果是雲林、嘉義、南投相關類別，使用 yunlincategories 視圖
        if (stripos($category->name, '雲林') !== false ||
            stripos($category->name, '嘉義') !== false ||
            stripos($category->name, '南投') !== false ||
            stripos($category->slug, 'yunlin') !== false ||
            stripos($category->slug, 'chiayi') !== false ||
            stripos($category->slug, 'nantou') !== false) {

            // 取得雲林類別
            $yunlinCategory = Category::where('name', '雲林')
                ->orWhere('slug', 'yunlin')
                ->first();

            // 取得嘉義類別
            $chiayiCategory = Category::where('name', '嘉義')
                ->orWhere('slug', 'chiayi')
                ->first();

            // 取得南投類別
            $nantouCategory = Category::where('name', '南投')
                ->orWhere('slug', 'nantou')
                ->first();

            // 取得雲林類別下的所有啟用廣告
            $yunlinAds = collect();
            if ($yunlinCategory) {
                $yunlinAds = Ad::where('category_id', $yunlinCategory->id)
                    ->where('is_active', true)
                    ->orderBy('sort_order')
                    ->orderBy('created_at', 'desc')
                    ->get();
            }

            // 取得嘉義類別下的所有啟用廣告
            $chiayiAds = collect();
            if ($chiayiCategory) {
                $chiayiAds = Ad::where('category_id', $chiayiCategory->id)
                    ->where('is_active', true)
                    ->orderBy('sort_order')
                    ->orderBy('created_at', 'desc')
                    ->get();
            }

            // 取得南投類別下的所有啟用廣告
            $nantouAds = collect();
            if ($nantouCategory) {
                $nantouAds = Ad::where('category_id', $nantouCategory->id)
                    ->where('is_active', true)
                    ->orderBy('sort_order')
                    ->orderBy('created_at', 'desc')
                    ->get();
            }

            return view('yunlincategories', compact('category', 'yunlinCategory', 'chiayiCategory', 'nantouCategory', 'yunlinAds', 'chiayiAds', 'nantouAds'));
        }

        // 如果是高雄、屏東相關類別，使用 highcategories 視圖
        if (stripos($category->name, '高雄') !== false ||
            stripos($category->name, '屏東') !== false ||
            stripos($category->slug, 'kaohsiung') !== false ||
            stripos($category->slug, 'pingtung') !== false) {

            // 取得高雄類別
            $kaohsiungCategory = Category::where('name', '高雄')
                ->orWhere('slug', 'kaohsiung')
                ->first();

            // 取得屏東類別
            $pingtungCategory = Category::where('name', '屏東')
                ->orWhere('slug', 'pingtung')
                ->first();

            // 取得高雄類別下的所有啟用廣告
            $kaohsiungAds = collect();
            if ($kaohsiungCategory) {
                $kaohsiungAds = Ad::where('category_id', $kaohsiungCategory->id)
                    ->where('is_active', true)
                    ->orderBy('sort_order')
                    ->orderBy('created_at', 'desc')
                    ->get();
            }

            // 取得屏東類別下的所有啟用廣告
            $pingtungAds = collect();
            if ($pingtungCategory) {
                $pingtungAds = Ad::where('category_id', $pingtungCategory->id)
                    ->where('is_active', true)
                    ->orderBy('sort_order')
                    ->orderBy('created_at', 'desc')
                    ->get();
            }

            return view('highcategories', compact('category', 'kaohsiungCategory', 'pingtungCategory', 'kaohsiungAds', 'pingtungAds'));
        }

        // 如果是宜蘭、花蓮、台東、離島相關類別，使用 tokyocategories 視圖
        if (stripos($category->name, '宜蘭') !== false ||
            stripos($category->name, '花蓮') !== false ||
            stripos($category->name, '台東') !== false ||
            stripos($category->name, '離島') !== false ||
            stripos($category->slug, 'yilan') !== false ||
            stripos($category->slug, 'hualien') !== false ||
            stripos($category->slug, 'taitung') !== false ||
            stripos($category->slug, 'offshore') !== false ||
            stripos($category->slug, 'offshore-islands') !== false) {

            // 取得宜蘭類別
            $yilanCategory = Category::where('name', '宜蘭')
                ->orWhere('slug', 'yilan')
                ->first();

            // 取得花蓮類別
            $hualienCategory = Category::where('name', '花蓮')
                ->orWhere('slug', 'hualien')
                ->first();

            // 取得台東類別
            $taitungCategory = Category::where('name', '台東')
                ->orWhere('slug', 'taitung')
                ->first();

            // 取得離島類別
            $offshoreCategory = Category::where('name', '離島')
                ->orWhere('slug', 'offshore')
                ->orWhere('slug', 'offshore-islands')
                ->first();

            // 取得宜蘭類別下的所有啟用廣告
            $yilanAds = collect();
            if ($yilanCategory) {
                $yilanAds = Ad::where('category_id', $yilanCategory->id)
                    ->where('is_active', true)
                    ->orderBy('sort_order')
                    ->orderBy('created_at', 'desc')
                    ->get();
            }

            // 取得花蓮類別下的所有啟用廣告
            $hualienAds = collect();
            if ($hualienCategory) {
                $hualienAds = Ad::where('category_id', $hualienCategory->id)
                    ->where('is_active', true)
                    ->orderBy('sort_order')
                    ->orderBy('created_at', 'desc')
                    ->get();
            }

            // 取得台東類別下的所有啟用廣告
            $taitungAds = collect();
            if ($taitungCategory) {
                $taitungAds = Ad::where('category_id', $taitungCategory->id)
                    ->where('is_active', true)
                    ->orderBy('sort_order')
                    ->orderBy('created_at', 'desc')
                    ->get();
            }

            // 取得離島類別下的所有啟用廣告
            $offshoreAds = collect();
            if ($offshoreCategory) {
                $offshoreAds = Ad::where('category_id', $offshoreCategory->id)
                    ->where('is_active', true)
                    ->orderBy('sort_order')
                    ->orderBy('created_at', 'desc')
                    ->get();
            }

            return view('tokyocategories', compact('category', 'yilanCategory', 'hualienCategory', 'taitungCategory', 'offshoreCategory', 'yilanAds', 'hualienAds', 'taitungAds', 'offshoreAds'));
        }

        // 如果是台中、彰化相關類別，使用 taichungcategories 視圖
        if (stripos($category->name, '台中') !== false ||
            stripos($category->name, '彰化') !== false ||
            stripos($category->slug, 'taichung') !== false ||
            stripos($category->slug, 'changhua') !== false) {

            // 取得台中類別
            $taichungCategory = Category::where('name', '台中')
                ->orWhere('slug', 'taichung')
                ->first();

            // 取得彰化類別
            $changhuaCategory = Category::where('name', '彰化')
                ->orWhere('slug', 'changhua')
                ->first();

            // 取得南投類別
            $nantouCategory = Category::where('name', '南投')
                ->orWhere('slug', 'nantou')
                ->first();

            // 取得台中類別下的所有啟用廣告
            $taichungAds = collect();
            if ($taichungCategory) {
                $taichungAds = Ad::where('category_id', $taichungCategory->id)
                    ->where('is_active', true)
                    ->orderBy('sort_order')
                    ->orderBy('created_at', 'desc')
                    ->get();
            }

            // 取得彰化類別下的所有啟用廣告
            $changhuaAds = collect();
            if ($changhuaCategory) {
                $changhuaAds = Ad::where('category_id', $changhuaCategory->id)
                    ->where('is_active', true)
                    ->orderBy('sort_order')
                    ->orderBy('created_at', 'desc')
                    ->get();
            }

            // 取得南投類別下的所有啟用廣告
            $nantouAds = collect();
            if ($nantouCategory) {
                $nantouAds = Ad::where('category_id', $nantouCategory->id)
                    ->where('is_active', true)
                    ->orderBy('sort_order')
                    ->orderBy('created_at', 'desc')
                    ->get();
            }

            return view('taichungcategories', compact('category', 'taichungCategory', 'changhuaCategory', 'nantouCategory', 'taichungAds', 'changhuaAds', 'nantouAds'));
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

