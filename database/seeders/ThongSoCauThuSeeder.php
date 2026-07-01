<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ThongSoCauThu;
use App\Models\ChiTietVanDau;
use App\Models\TranDau;
use App\Models\TuyenThu;

class ThongSoCauThuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $vanDaus = ChiTietVanDau::all();

        foreach ($vanDaus as $van) {
            $tran = TranDau::find($van->tran_dau_id);
            if (!$tran) {
                continue;
            }

            // Get players from Team 1 and Team 2
            $players1 = TuyenThu::where('doi_tuyen_id', $tran->doi_1_id)->get();
            $players2 = TuyenThu::where('doi_tuyen_id', $tran->doi_2_id)->get();

            $allPlayers = $players1->merge($players2);
            if ($allPlayers->isEmpty()) {
                continue;
            }

            // Decide MVP from the winning team's players
            $winningTeamId = $van->doi_thang_id;
            $mvpCandidateId = null;
            if ($winningTeamId) {
                $winningPlayers = TuyenThu::where('doi_tuyen_id', $winningTeamId)->get();
                if ($winningPlayers->isNotEmpty()) {
                    $mvpCandidateId = $winningPlayers->random()->id;
                }
            }

            foreach ($allPlayers as $player) {
                $kills = rand(0, 15);
                $deaths = rand(0, 10);
                $assists = rand(0, 20);
                $gold = rand(8000, 18000);
                $damage = rand(10000, 45000);
                $isMvp = ($player->id === $mvpCandidateId);

                ThongSoCauThu::create([
                    'van_dau_id' => $van->id,
                    'tuyen_thu_id' => $player->id,
                    'kills' => $kills,
                    'deaths' => $deaths,
                    'assists' => $assists,
                    'vang_kiem_duoc' => $gold,
                    'sat_thuong' => $damage,
                    'is_mvp' => $isMvp
                ]);
            }
        }
    }
}
