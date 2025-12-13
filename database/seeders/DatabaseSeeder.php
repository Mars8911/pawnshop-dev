<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // 創建管理員帳號
        User::firstOrCreate(
            ['email' => 'admin@admin.com'],
            [
                'name' => 'Admin',
                'password' => Hash::make('admin'),
            ]
        );

        $this->command->info('管理員帳號已創建：');
        $this->command->info('帳號：admin');
        $this->command->info('密碼：admin');
        $this->command->info('Email：admin@admin.com');

        // 創建分類
        $categories = [
            ['name' => '基隆', 'slug' => 'keelung', 'sort_order' => 1],
            ['name' => '新竹', 'slug' => 'hsinchu', 'sort_order' => 2],
            ['name' => '苗栗', 'slug' => 'miaoli', 'sort_order' => 3],
            ['name' => '彰化', 'slug' => 'changhua', 'sort_order' => 4],
            ['name' => '南投', 'slug' => 'nantou', 'sort_order' => 5],
            ['name' => '雲林', 'slug' => 'yunlin', 'sort_order' => 6],
            ['name' => '嘉義', 'slug' => 'chiayi', 'sort_order' => 7],
            ['name' => '屏東', 'slug' => 'pingtung', 'sort_order' => 8],
            ['name' => '宜蘭', 'slug' => 'yilan', 'sort_order' => 9],
            ['name' => '花蓮', 'slug' => 'hualien', 'sort_order' => 10],
            ['name' => '台東', 'slug' => 'taitung', 'sort_order' => 11],
            ['name' => '離島', 'slug' => 'offshore-islands', 'sort_order' => 12],
        ];

        foreach ($categories as $category) {
            Category::firstOrCreate(
                ['slug' => $category['slug']],
                [
                    'name' => $category['name'],
                    'sort_order' => $category['sort_order'],
                    'is_active' => true,
                ]
            );
        }

        $this->command->info('分類資料已創建：' . count($categories) . ' 個分類');

        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
