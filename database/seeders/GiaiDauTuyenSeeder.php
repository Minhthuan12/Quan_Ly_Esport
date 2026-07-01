<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\GiaiDauTuyen;

class GiaiDauTuyenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $mappings = [
            // Giải 1: Teams 1 to 8
            1 => [1, 2, 3, 4, 5, 6, 7, 8],
            // Giải 2: Teams 1 to 6, 9, 10
            2 => [1, 2, 3, 4, 5, 6, 9, 10],
            // Giải 3: Teams 1, 2, 5, 6, 7, 8, 9, 10
            3 => [1, 2, 5, 6, 7, 8, 9, 10],
            // Giải 4: Teams 3 to 10
            4 => [3, 4, 5, 6, 7, 8, 9, 10],
            // Giải 5: Teams 1, 2, 3, 4, 7, 8, 9, 10
            5 => [1, 2, 3, 4, 7, 8, 9, 10]
        ];

        foreach ($mappings as $giaiDauId => $doiTuyenIds) {
            foreach ($doiTuyenIds as $doiTuyenId) {
                GiaiDauTuyen::create([
                    'giai_dau_id' => $giaiDauId,
                    'doi_tuyen_id' => $doiTuyenId
                ]);
            }
        }
    }
}
