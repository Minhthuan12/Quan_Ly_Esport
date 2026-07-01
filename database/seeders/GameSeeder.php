<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Game;

class GameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $games = [
            [
                'id' => 1,
                'ten_game' => 'Liên Minh Huyền Thoại',
                'ten_tieng_anh' => 'League of Legends',
                'the_loai' => 'MOBA',
                'logo' => 'https://api.placeholder.com/games/lol.png',
                'anh_bia' => 'https://api.placeholder.com/games/lol-banner.png',
                'mo_ta' => 'Đấu trường trận chiến trực tuyến nhiều người chơi hàng đầu thế giới.',
                'trang_thai' => 'Hoạt động'
            ],
            [
                'id' => 2,
                'ten_game' => 'Valorant',
                'ten_tieng_anh' => 'Valorant',
                'the_loai' => 'FPS',
                'logo' => 'https://api.placeholder.com/games/val.png',
                'anh_bia' => 'https://api.placeholder.com/games/val-banner.png',
                'mo_ta' => 'Bắn súng góc nhìn thứ nhất chiến thuật đầy kịch tính.',
                'trang_thai' => 'Hoạt động'
            ],
            [
                'id' => 3,
                'ten_game' => 'Counter Strike 2',
                'ten_tieng_anh' => 'Counter Strike 2',
                'the_loai' => 'FPS',
                'logo' => 'https://api.placeholder.com/games/cs2.png',
                'anh_bia' => 'https://api.placeholder.com/games/cs2-banner.png',
                'mo_ta' => 'Tựa game bắn súng huyền thoại nâng cấp đồ họa Source 2.',
                'trang_thai' => 'Hoạt động'
            ],
            [
                'id' => 4,
                'ten_game' => 'Dota 2',
                'ten_tieng_anh' => 'Dota 2',
                'the_loai' => 'MOBA',
                'logo' => 'https://api.placeholder.com/games/dota2.png',
                'anh_bia' => 'https://api.placeholder.com/games/dota2-banner.png',
                'mo_ta' => 'Trò chơi chiến thuật đấu trường MOBA lâu đời và sâu sắc nhất.',
                'trang_thai' => 'Hoạt động'
            ],
            [
                'id' => 5,
                'ten_game' => 'PUBG',
                'ten_tieng_anh' => 'PUBG: Battlegrounds',
                'the_loai' => 'Battle Royale',
                'logo' => 'https://api.placeholder.com/games/pubg.png',
                'anh_bia' => 'https://api.placeholder.com/games/pubg-banner.png',
                'mo_ta' => 'Trò chơi bắn súng sinh tồn Battle Royale nguyên bản.',
                'trang_thai' => 'Hoạt động'
            ]
        ];

        foreach ($games as $game) {
            Game::create($game);
        }
    }
}
