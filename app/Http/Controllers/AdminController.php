<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\ValidationException;
use App\Models\Category;
use App\Models\Ad;
use App\Models\AllianceAd;

class AdminController extends Controller
{
    /**
     * 顯示登入頁面
     */
    public function showLoginForm()
    {
        return view('admin.login');
    }

    /**
     * 處理登入請求
     */
    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        // 從資料庫查找用戶（使用 email 或 name 作為帳號）
        $user = \App\Models\User::where('email', $request->username)
            ->orWhere('name', $request->username)
            ->first();

        // 驗證用戶是否存在且密碼正確
        if ($user && \Illuminate\Support\Facades\Hash::check($request->password, $user->password)) {
            // 登入用戶
            Auth::login($user, $request->filled('remember'));

            $request->session()->regenerate();

            return redirect()->intended(route('admin.dashboard'));
        }

        throw ValidationException::withMessages([
            'username' => ['帳號或密碼錯誤'],
        ]);
    }

    /**
     * 顯示後台首頁
     */
    public function dashboard()
    {
        return view('admin.dashboard');
    }

    /**
     * 處理登出請求
     */
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('admin.login');
    }

    /**
     * 顯示分類管理頁面
     */
    public function categories()
    {
        $categories = Category::orderBy('sort_order')->get();
        return view('admin.categories', compact('categories'));
    }

    /**
     * 顯示新增分類表單
     */
    public function createCategory()
    {
        return view('admin.category-form');
    }

    /**
     * 儲存新分類
     */
    public function storeCategory(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:categories,slug',
            'description' => 'nullable|string',
            'sort_order' => 'nullable|integer',
            'is_active' => 'nullable|boolean',
        ]);

        Category::create([
            'name' => $request->name,
            'slug' => $request->slug,
            'description' => $request->description,
            'sort_order' => $request->sort_order ?? 0,
            'is_active' => $request->has('is_active'),
        ]);

        return redirect()->route('admin.categories')->with('success', '分類已成功建立！');
    }

    /**
     * 顯示編輯分類表單
     */
    public function editCategory($id)
    {
        $category = Category::findOrFail($id);
        return view('admin.category-form', compact('category'));
    }

    /**
     * 更新分類
     */
    public function updateCategory(Request $request, $id)
    {
        $category = Category::findOrFail($id);

        $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:categories,slug,' . $id,
            'description' => 'nullable|string',
            'sort_order' => 'nullable|integer',
            'is_active' => 'nullable|boolean',
        ]);

        $category->update([
            'name' => $request->name,
            'slug' => $request->slug,
            'description' => $request->description,
            'sort_order' => $request->sort_order ?? 0,
            'is_active' => $request->has('is_active'),
        ]);

        return redirect()->route('admin.categories')->with('success', '分類已成功更新！');
    }

    /**
     * 刪除分類
     */
    public function deleteCategory($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();

        return redirect()->route('admin.categories')->with('success', '分類已成功刪除！');
    }

    /**
     * 顯示廣告管理頁面
     */
    public function ads()
    {
        $ads = Ad::with('category')->orderBy('sort_order')->orderBy('created_at', 'desc')->get();
        return view('admin.ads', compact('ads'));
    }

    /**
     * 顯示新增廣告表單
     */
    public function createAd()
    {
        $categories = Category::where('is_active', true)->orderBy('sort_order')->get();
        return view('admin.ad-form', compact('categories'));
    }

    /**
     * 儲存新廣告
     */
    public function storeAd(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'subtitle' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'description' => 'nullable|string|max:105',
            'content' => 'nullable|string',
            'sort_order' => 'nullable|integer',
            'is_active' => 'nullable|boolean',
            'category_id' => 'nullable|exists:categories,id',
        ]);

        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('ads', 'public');
        }

        Ad::create([
            'name' => $request->name,
            'subtitle' => $request->subtitle,
            'image' => $imagePath,
            'description' => $request->description,
            'content' => $request->content,
            'sort_order' => $request->sort_order ?? 0,
            'is_active' => $request->has('is_active'),
            'category_id' => $request->category_id,
        ]);

        return redirect()->route('admin.ads')->with('success', '廣告已成功建立！');
    }

    /**
     * 顯示編輯廣告表單
     */
    public function editAd($id)
    {
        $ad = Ad::findOrFail($id);
        $categories = Category::where('is_active', true)->orderBy('sort_order')->get();
        return view('admin.ad-form', compact('ad', 'categories'));
    }

    /**
     * 更新廣告
     */
    public function updateAd(Request $request, $id)
    {
        $ad = Ad::findOrFail($id);

        $request->validate([
            'name' => 'required|string|max:255',
            'subtitle' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'description' => 'nullable|string|max:105',
            'content' => 'nullable|string',
            'sort_order' => 'nullable|integer',
            'is_active' => 'nullable|boolean',
            'category_id' => 'nullable|exists:categories,id',
        ]);

        $data = [
            'name' => $request->name,
            'subtitle' => $request->subtitle,
            'description' => $request->description,
            'content' => $request->content,
            'sort_order' => $request->sort_order ?? 0,
            'is_active' => $request->has('is_active'),
            'category_id' => $request->category_id,
        ];

        if ($request->hasFile('image')) {
            // 刪除舊圖片
            if ($ad->image) {
                Storage::disk('public')->delete($ad->image);
            }
            $data['image'] = $request->file('image')->store('ads', 'public');
        }

        $ad->update($data);

        return redirect()->route('admin.ads')->with('success', '廣告已成功更新！');
    }

    /**
     * 刪除廣告
     */
    public function deleteAd($id)
    {
        $ad = Ad::findOrFail($id);

        // 刪除圖片
        if ($ad->image) {
            Storage::disk('public')->delete($ad->image);
        }

        $ad->delete();

        return redirect()->route('admin.ads')->with('success', '廣告已成功刪除！');
    }

    /**
     * 顯示聯盟廣告管理頁面
     */
    public function allianceAds()
    {
        $allianceAds = AllianceAd::orderBy('sort_order')->orderBy('created_at', 'desc')->get();
        return view('admin.alliance-ads', compact('allianceAds'));
    }

    /**
     * 顯示新增聯盟廣告表單
     */
    public function createAllianceAd()
    {
        return view('admin.alliance-ad-form');
    }

    /**
     * 儲存新聯盟廣告
     */
    public function storeAllianceAd(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'link' => 'required|url|max:255',
            'alt' => 'nullable|string|max:255',
            'sort_order' => 'nullable|integer',
            'is_active' => 'nullable|boolean',
        ]);

        $imagePath = $request->file('image')->store('alliance-ads', 'public');

        AllianceAd::create([
            'image' => $imagePath,
            'link' => $request->link,
            'alt' => $request->alt,
            'sort_order' => $request->sort_order ?? 0,
            'is_active' => $request->has('is_active'),
        ]);

        return redirect()->route('admin.alliance-ads')->with('success', '聯盟廣告已成功建立！');
    }

    /**
     * 顯示編輯聯盟廣告表單
     */
    public function editAllianceAd($id)
    {
        $allianceAd = AllianceAd::findOrFail($id);
        return view('admin.alliance-ad-form', compact('allianceAd'));
    }

    /**
     * 更新聯盟廣告
     */
    public function updateAllianceAd(Request $request, $id)
    {
        $allianceAd = AllianceAd::findOrFail($id);

        $request->validate([
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'link' => 'required|url|max:255',
            'alt' => 'nullable|string|max:255',
            'sort_order' => 'nullable|integer',
            'is_active' => 'nullable|boolean',
        ]);

        $data = [
            'link' => $request->link,
            'alt' => $request->alt,
            'sort_order' => $request->sort_order ?? 0,
            'is_active' => $request->has('is_active'),
        ];

        if ($request->hasFile('image')) {
            // 刪除舊圖片
            if ($allianceAd->image) {
                Storage::disk('public')->delete($allianceAd->image);
            }
            $data['image'] = $request->file('image')->store('alliance-ads', 'public');
        }

        $allianceAd->update($data);

        return redirect()->route('admin.alliance-ads')->with('success', '聯盟廣告已成功更新！');
    }

    /**
     * 刪除聯盟廣告
     */
    public function deleteAllianceAd($id)
    {
        $allianceAd = AllianceAd::findOrFail($id);

        // 刪除圖片
        if ($allianceAd->image) {
            Storage::disk('public')->delete($allianceAd->image);
        }

        $allianceAd->delete();

        return redirect()->route('admin.alliance-ads')->with('success', '聯盟廣告已成功刪除！');
    }
}

