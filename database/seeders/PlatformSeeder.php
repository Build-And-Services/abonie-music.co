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
            ],
        ];

        foreach ($platforms as $platform) {
            Platform::create($platform);
        }
    }
}
