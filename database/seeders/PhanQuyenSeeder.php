<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PhanQuyen;

class PhanQuyenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Admin (role_id: 1) has all permissions (id 1 to 10)
        for ($i = 1; $i <= 10; $i++) {
            PhanQuyen::create([
                'role_id' => 1,
                'permission_id' => $i
            ]);
        }

        // Ban tổ chức (role_id: 2)
        $btcPerms = [1, 3, 6, 7, 9];
        foreach ($btcPerms as $p) {
            PhanQuyen::create([
                'role_id' => 2,
                'permission_id' => $p
            ]);
        }

        // Quản lý đội (role_id: 3)
        $qldPerms = [1, 4, 5];
        foreach ($qldPerms as $p) {
            PhanQuyen::create([
                'role_id' => 3,
                'permission_id' => $p
            ]);
        }

        // Huấn luyện viên (role_id: 4)
        $hlvPerms = [1, 5];
        foreach ($hlvPerms as $p) {
            PhanQuyen::create([
                'role_id' => 4,
                'permission_id' => $p
            ]);
        }

        // Trọng tài (role_id: 5)
        $ttPerms = [1, 6];
        foreach ($ttPerms as $p) {
            PhanQuyen::create([
                'role_id' => 5,
                'permission_id' => $p
            ]);
        }
    }
}
