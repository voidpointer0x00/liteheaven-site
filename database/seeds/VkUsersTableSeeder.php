<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VkUsersTableSeeder extends Seeder
{
    public function run(): void {
        DB::connection('vk_bot')->table('vk_users')->insert([
            'vk_id' => 233396725,
            'permissions' => '["*"]',
        ]);
    }
}
