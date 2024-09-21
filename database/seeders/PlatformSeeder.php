<?php

namespace Database\Seeders;

use App\Models\Platform;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PlatformSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $platforms = [
            [
                'name' => 'Youtube',
                'thumbnail' => url("/img/platforms/youtube.png"),
                'url' => 'https://youtube.com/',
                'type' => 'BIOLINK',
            ],
            [
                'name' => 'Facebook',
                'thumbnail' => url("/img/platforms/facebook.png"),
                'url' => 'https://facebook.com/',
                'type' => 'BIOLINK',
            ],
            [
                'name' => 'X',
                'thumbnail' => url("/img/platforms/x.png"),
                'url' => 'https://x.com/',
                'type' => 'BIOLINK',
            ],
            [
                'name' => 'Instagram',
                'thumbnail' => url("/img/platforms/instagram.png"),
                'url' => 'https://instagram.com/',
                'type' => 'BIOLINK',
            ],
            [
                'name' => 'LinkedIn',
                'thumbnail' => url("/img/platforms/linkedin.png"),
                'url' => 'https://linkedin.com/',
                'type' => 'BIOLINK',
            ],
            [
                'name' => 'TikTok',
                'thumbnail' => url("/img/platforms/tiktok.png"),
                'url' => 'https://tiktok.com/',
                'type' => 'BIOLINK',
            ],
            [
                'name' => 'WhatsApp',
                'thumbnail' => url("/img/platforms/whatsapp.png"),
                'url' => 'https://wa.me/',
                'type' => 'BIOLINK',
            ],
            [
                'name' => 'Telegram',
                'thumbnail' => url("/img/platforms/telegram.png"),
                'url' => 'https://telegram.org/',
                'type' => 'BIOLINK',
            ],
            [
                'name' => 'Gmail',
                'thumbnail' => url("/img/platforms/gmail.png"),
                'url' => 'https://mail.google.com/',
                'type' => 'BIOLINK',
            ],
            [
                'name' => 'Line',
                'thumbnail' => url("/img/platforms/line.png"),
                'url' => 'https://line.me/',
                'type' => 'BIOLINK',
            ], [
                'id' => '11',
                'name' => 'Spotify',
                'thumbnail' => url('/assets-dashboard/images/platform/presave/1717876846.svg'),
                'url' => NULL,
                'type' => 'PRESAVE',
                'created_at' => '2024-06-08 20:00:46',
                'updated_at' => '2024-06-08 20:00:46',
            ],
            [
                'id' => '12',
                'name' => 'Apple Music',
                'thumbnail' => url('/assets-dashboard/images/platform/presave/1717876858.svg'),
                'url' => NULL,
                'type' => 'PRESAVE',
                'created_at' => '2024-06-08 20:00:58',
                'updated_at' => '2024-06-08 20:00:58',
            ],
            [
                'id' => '13',
                'name' => 'Youtube',
                'thumbnail' => url('/assets-dashboard/images/platform/presave/1717876877.svg'),
                'url' => NULL,
                'type' => 'PRESAVE',
                'created_at' => '2024-06-08 20:01:17',
                'updated_at' => '2024-06-08 20:01:17',
            ],
            [
                'id' => '14',
                'name' => 'Youtube Music',
                'thumbnail' => url('/assets-dashboard/images/platform/presave/1717876891.svg'),
                'url' => NULL,
                'type' => 'PRESAVE',
                'created_at' => '2024-06-08 20:01:31',
                'updated_at' => '2024-06-08 20:01:31',
            ],
            [
                'id' => '15',
                'name' => 'Deezer',
                'thumbnail' => url('/assets-dashboard/images/platform/presave/1717876910.svg'),
                'url' => NULL,
                'type' => 'PRESAVE',
                'created_at' => '2024-06-08 20:01:50',
                'updated_at' => '2024-06-08 20:01:50',
            ],
        ];

        foreach ($platforms as $platform) {
            Platform::create($platform);
        }
    }
}
