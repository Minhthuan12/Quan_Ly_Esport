<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ChiTietVanDau;
use App\Models\KetQuaTranDau;
use App\Models\TranDau;

class ChiTietVanDauSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $results = KetQuaTranDau::all();
        $vanCount = 1;

        foreach ($results as $res) {
            $tranDau = TranDau::find($res->tran_dau_id);
            if (!$tranDau) {
                continue;
            }

            $score1 = $res->ti_so_doi_1;
            $score2 = $res->ti_so_doi_2;
            $totalVans = $score1 + $score2;
            
            // For draw match
            if ($totalVans == 2 && $res->doi_thang_id == null) {
                // Game 1 winner doi 1, Game 2 winner doi 2
                ChiTietVanDau::create([
                    'id' => $vanCount,
                    'tran_dau_id' => $tranDau->id,
                    'so_thu_tu_van' => 1,
                    'thoi_gian_dau' => rand(1500, 2200),
                    'doi_thang_id' => $tranDau->doi_1_id,
                    'video_url' => 'https://www.youtube.com/watch?v=dQw4w9WgXcQ'
                ]);
                $vanCount++;
                
                ChiTietVanDau::create([
                    'id' => $vanCount,
                    'tran_dau_id' => $tranDau->id,
                    'so_thu_tu_van' => 2,
                    'thoi_gian_dau' => rand(1500, 2200),
                    'doi_thang_id' => $tranDau->doi_2_id,
                    'video_url' => 'https://www.youtube.com/watch?v=dQw4w9WgXcQ'
                ]);
                $vanCount++;
                continue;
            }

            $currentScore1 = 0;
            $currentScore2 = 0;

            for ($v = 1; $v <= $totalVans; $v++) {
                if ($currentScore1 < $score1 && ($currentScore2 == $score2 || rand(0, 1) == 0)) {
                    $winnerId = $tranDau->doi_1_id;
                    $currentScore1++;
                } else {
                    $winnerId = $tranDau->doi_2_id;
                    $currentScore2++;
                }

                ChiTietVanDau::create([
                    'id' => $vanCount,
                    'tran_dau_id' => $tranDau->id,
                    'so_thu_tu_van' => $v,
                    'thoi_gian_dau' => rand(1200, 2500),
                    'doi_thang_id' => $winnerId,
                    'video_url' => 'https://www.youtube.com/watch?v=dQw4w9WgXcQ'
                ]);
                $vanCount++;
            }
        }
    }
}
