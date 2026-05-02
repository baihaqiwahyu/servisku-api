<?php

namespace Database\Seeders;

use App\Models\Motorcycle;
use Illuminate\Database\Seeder;

class MotorcycleSeeder extends Seeder
{
    public function run(): void
    {
        $motors = [
            [
                'slug' => 'honda-beat-fi-110cc',
                'name' => 'Honda Beat FI 110cc',
                'brand' => 'Honda',
                'cc' => '110cc',
                'transmission' => 'Matic',
                'category' => 'Matic Harian',
                'description' => 'Motor matic ringan dan irit untuk penggunaan harian di perkotaan.',
                'services' => $this->maticServices(),
            ],
            [
                'slug' => 'honda-beat-street',
                'name' => 'Honda Beat Street',
                'brand' => 'Honda',
                'cc' => '110cc',
                'transmission' => 'Matic',
                'category' => 'Matic Harian',
                'description' => 'Motor matic bergaya street yang praktis untuk mobilitas harian.',
                'services' => $this->maticServices(),
            ],
            [
                'slug' => 'honda-scoopy-110',
                'name' => 'Honda Scoopy',
                'brand' => 'Honda',
                'cc' => '110cc',
                'transmission' => 'Matic',
                'category' => 'Retro Matic',
                'description' => 'Motor matic bergaya retro yang cocok untuk aktivitas harian.',
                'services' => $this->maticServices(),
            ],
            [
                'slug' => 'honda-genio-110',
                'name' => 'Honda Genio',
                'brand' => 'Honda',
                'cc' => '110cc',
                'transmission' => 'Matic',
                'category' => 'Matic Harian',
                'description' => 'Motor matic compact dengan desain modern dan konsumsi bahan bakar yang efisien.',
                'services' => $this->maticServices(),
            ],
            [
                'slug' => 'honda-vario-125',
                'name' => 'Honda Vario 125',
                'brand' => 'Honda',
                'cc' => '125cc',
                'transmission' => 'Matic',
                'category' => 'Matic Premium',
                'description' => 'Motor matic 125cc yang nyaman untuk penggunaan harian dan perjalanan menengah.',
                'services' => $this->maticServices(),
            ],
            [
                'slug' => 'honda-vario-160',
                'name' => 'Honda Vario 160',
                'brand' => 'Honda',
                'cc' => '160cc',
                'transmission' => 'Matic',
                'category' => 'Matic Premium',
                'description' => 'Motor matic 160cc dengan performa lebih bertenaga dan desain modern.',
                'services' => $this->maticServices(true),
            ],
            [
                'slug' => 'honda-pcx-160',
                'name' => 'Honda PCX 160',
                'brand' => 'Honda',
                'cc' => '160cc',
                'transmission' => 'Matic',
                'category' => 'Maxi Scooter',
                'description' => 'Motor matic premium yang nyaman untuk perjalanan harian maupun jarak menengah.',
                'services' => $this->maticServices(true),
            ],
            [
                'slug' => 'honda-adv-160',
                'name' => 'Honda ADV 160',
                'brand' => 'Honda',
                'cc' => '160cc',
                'transmission' => 'Matic',
                'category' => 'Adventure Matic',
                'description' => 'Motor matic bergaya adventure yang cocok untuk penggunaan harian dan perjalanan santai.',
                'services' => $this->maticServices(true),
            ],
            [
                'slug' => 'yamaha-mio-m3-125',
                'name' => 'Yamaha Mio M3 125',
                'brand' => 'Yamaha',
                'cc' => '125cc',
                'transmission' => 'Matic',
                'category' => 'Matic Harian',
                'description' => 'Motor matic compact yang cocok untuk mobilitas harian.',
                'services' => $this->maticServices(),
            ],
            [
                'slug' => 'yamaha-gear-125',
                'name' => 'Yamaha Gear 125',
                'brand' => 'Yamaha',
                'cc' => '125cc',
                'transmission' => 'Matic',
                'category' => 'Matic Harian',
                'description' => 'Motor matic praktis dengan desain fungsional untuk aktivitas harian.',
                'services' => $this->maticServices(),
            ],
            [
                'slug' => 'yamaha-fazzio-125',
                'name' => 'Yamaha Fazzio 125',
                'brand' => 'Yamaha',
                'cc' => '125cc',
                'transmission' => 'Matic',
                'category' => 'Retro Matic',
                'description' => 'Motor matic bergaya modern-retro yang cocok untuk pengguna muda dan aktivitas harian.',
                'services' => $this->maticServices(),
            ],
            [
                'slug' => 'yamaha-freego-125',
                'name' => 'Yamaha FreeGo 125',
                'brand' => 'Yamaha',
                'cc' => '125cc',
                'transmission' => 'Matic',
                'category' => 'Matic Harian',
                'description' => 'Motor matic dengan bagasi luas dan posisi berkendara yang nyaman.',
                'services' => $this->maticServices(),
            ],
            [
                'slug' => 'yamaha-aerox-155',
                'name' => 'Yamaha Aerox 155',
                'brand' => 'Yamaha',
                'cc' => '155cc',
                'transmission' => 'Matic',
                'category' => 'Sport Matic',
                'description' => 'Motor matic sporty dengan mesin 155cc yang cocok untuk pengguna yang mengutamakan performa.',
                'services' => $this->maticServices(true),
            ],
            [
                'slug' => 'yamaha-nmax-155',
                'name' => 'Yamaha NMAX 155',
                'brand' => 'Yamaha',
                'cc' => '155cc',
                'transmission' => 'Matic',
                'category' => 'Maxi Scooter',
                'description' => 'Motor matic besar yang nyaman untuk perjalanan harian maupun jarak menengah.',
                'services' => $this->maticServices(true),
            ],
            [
                'slug' => 'suzuki-nex-ii',
                'name' => 'Suzuki Nex II',
                'brand' => 'Suzuki',
                'cc' => '115cc',
                'transmission' => 'Matic',
                'category' => 'Matic Harian',
                'description' => 'Motor matic ringan dan ekonomis untuk kebutuhan mobilitas sehari-hari.',
                'services' => $this->maticServices(),
            ],
            [
                'slug' => 'suzuki-address-115',
                'name' => 'Suzuki Address 115',
                'brand' => 'Suzuki',
                'cc' => '115cc',
                'transmission' => 'Matic',
                'category' => 'Matic Harian',
                'description' => 'Motor matic praktis dengan kapasitas bagasi yang cukup besar untuk penggunaan harian.',
                'services' => $this->maticServices(),
            ],
            [
                'slug' => 'suzuki-burgman-street-125',
                'name' => 'Suzuki Burgman Street 125',
                'brand' => 'Suzuki',
                'cc' => '125cc',
                'transmission' => 'Matic',
                'category' => 'Maxi Scooter',
                'description' => 'Motor matic bergaya maxi scooter dengan kenyamanan berkendara yang baik.',
                'services' => $this->maticServices(),
            ],
            [
                'slug' => 'honda-supra-x-125',
                'name' => 'Honda Supra X 125',
                'brand' => 'Honda',
                'cc' => '125cc',
                'transmission' => 'Manual',
                'category' => 'Bebek',
                'description' => 'Motor bebek yang dikenal irit, tangguh, dan cocok untuk penggunaan harian.',
                'services' => $this->manualServices(),
            ],
            [
                'slug' => 'yamaha-vixion-150',
                'name' => 'Yamaha Vixion 150',
                'brand' => 'Yamaha',
                'cc' => '150cc',
                'transmission' => 'Manual',
                'category' => 'Sport',
                'description' => 'Motor sport naked 150cc yang cocok untuk pengguna harian dengan karakter sporty.',
                'services' => $this->manualServices(true),
            ],
            [
                'slug' => 'kawasaki-klx-150',
                'name' => 'Kawasaki KLX 150',
                'brand' => 'Kawasaki',
                'cc' => '150cc',
                'transmission' => 'Manual',
                'category' => 'Trail',
                'description' => 'Motor trail ringan yang cocok untuk jalan harian maupun medan semi-offroad.',
                'services' => $this->manualServices(),
            ],
        ];

        foreach ($motors as $motorData) {
            $services = $motorData['services'];
            unset($motorData['services']);

            $motorcycle = Motorcycle::updateOrCreate(
                ['slug' => $motorData['slug']],
                $motorData
            );

            $motorcycle->serviceComponents()->delete();
            $motorcycle->serviceComponents()->createMany($services);
        }
    }

    private function maticServices(bool $hasCoolant = false): array
    {
        $services = [
            [
                'name' => 'Oli Mesin',
                'interval_text' => '2.000-4.000 km',
                'priority' => 'Tinggi',
                'note' => 'Disarankan rutin diganti agar performa mesin tetap halus dan suhu mesin lebih stabil.',
                'sort_order' => 1,
            ],
            [
                'name' => 'Oli Gardan',
                'interval_text' => '8.000-12.000 km',
                'priority' => 'Sedang',
                'note' => 'Penting untuk menjaga sistem transmisi matic tetap halus dan tidak cepat aus.',
                'sort_order' => 2,
            ],
            [
                'name' => 'V-Belt',
                'interval_text' => '20.000-25.000 km',
                'priority' => 'Tinggi',
                'note' => 'Cek kondisi retak, getas, atau aus saat servis CVT agar tidak putus di jalan.',
                'sort_order' => 3,
            ],
            [
                'name' => 'Roller CVT',
                'interval_text' => '20.000-25.000 km',
                'priority' => 'Sedang',
                'note' => 'Roller yang aus dapat membuat tarikan motor terasa berat atau tidak responsif.',
                'sort_order' => 4,
            ],
            [
                'name' => 'Kampas Ganda',
                'interval_text' => '20.000-30.000 km',
                'priority' => 'Sedang',
                'note' => 'Cek kampas ganda jika motor terasa bergetar saat awal jalan atau tarikan kurang halus.',
                'sort_order' => 5,
            ],
            [
                'name' => 'Busi',
                'interval_text' => '8.000-12.000 km',
                'priority' => 'Sedang',
                'note' => 'Busi yang baik membantu pembakaran mesin lebih stabil dan motor mudah dinyalakan.',
                'sort_order' => 6,
            ],
            [
                'name' => 'Filter Udara',
                'interval_text' => '8.000-16.000 km',
                'priority' => 'Sedang',
                'note' => 'Bersihkan atau ganti filter udara sesuai kondisi, terutama jika sering melewati jalan berdebu.',
                'sort_order' => 7,
            ],
            [
                'name' => 'Kampas Rem',
                'interval_text' => 'Cek berkala',
                'priority' => 'Tinggi',
                'note' => 'Wajib dicek karena berhubungan langsung dengan keselamatan berkendara.',
                'sort_order' => 8,
            ],
            [
                'name' => 'Ban',
                'interval_text' => 'Cek berkala',
                'priority' => 'Tinggi',
                'note' => 'Periksa tekanan angin, ketebalan alur, dan kondisi retak pada ban.',
                'sort_order' => 9,
            ],
            [
                'name' => 'Aki',
                'interval_text' => '12.000-24.000 km',
                'priority' => 'Sedang',
                'note' => 'Cek kondisi aki jika starter terasa lemah, lampu redup, atau panel indikator tidak stabil.',
                'sort_order' => 10,
            ],
        ];

        if ($hasCoolant) {
            $services[] = [
                'name' => 'Cairan Radiator',
                'interval_text' => '12.000-24.000 km',
                'priority' => 'Sedang',
                'note' => 'Cek volume dan kondisi coolant agar sistem pendingin mesin tetap bekerja optimal.',
                'sort_order' => 11,
            ];
        }

        return $services;
    }

    private function manualServices(bool $hasCoolant = false): array
    {
        $services = [
            [
                'name' => 'Oli Mesin',
                'interval_text' => '2.000-4.000 km',
                'priority' => 'Tinggi',
                'note' => 'Penggantian oli mesin secara rutin membantu menjaga performa dan umur mesin.',
                'sort_order' => 1,
            ],
            [
                'name' => 'Rantai',
                'interval_text' => 'Cek setiap 500-1.000 km',
                'priority' => 'Tinggi',
                'note' => 'Bersihkan dan lumasi rantai secara berkala agar tarikan tetap halus dan aman.',
                'sort_order' => 2,
            ],
            [
                'name' => 'Gear Set',
                'interval_text' => '20.000-30.000 km',
                'priority' => 'Sedang',
                'note' => 'Cek kondisi gear depan dan belakang, terutama jika rantai sering kendor atau suara kasar.',
                'sort_order' => 3,
            ],
            [
                'name' => 'Kampas Kopling',
                'interval_text' => '20.000-30.000 km',
                'priority' => 'Sedang',
                'note' => 'Cek jika tarikan motor terasa selip atau perpindahan gigi kurang responsif.',
                'sort_order' => 4,
            ],
            [
                'name' => 'Busi',
                'interval_text' => '8.000-12.000 km',
                'priority' => 'Sedang',
                'note' => 'Busi perlu dicek jika motor sulit menyala, brebet, atau konsumsi bahan bakar terasa boros.',
                'sort_order' => 5,
            ],
            [
                'name' => 'Filter Udara',
                'interval_text' => '8.000-16.000 km',
                'priority' => 'Sedang',
                'note' => 'Filter udara yang bersih membantu pembakaran lebih optimal.',
                'sort_order' => 6,
            ],
            [
                'name' => 'Kampas Rem',
                'interval_text' => 'Cek berkala',
                'priority' => 'Tinggi',
                'note' => 'Periksa ketebalan kampas rem untuk menjaga keamanan saat berkendara.',
                'sort_order' => 7,
            ],
            [
                'name' => 'Ban',
                'interval_text' => 'Cek berkala',
                'priority' => 'Tinggi',
                'note' => 'Periksa tekanan angin, ketebalan alur, dan kondisi permukaan ban.',
                'sort_order' => 8,
            ],
            [
                'name' => 'Aki',
                'interval_text' => '12.000-24.000 km',
                'priority' => 'Sedang',
                'note' => 'Cek aki jika starter elektrik melemah atau lampu tidak stabil.',
                'sort_order' => 9,
            ],
            [
                'name' => 'Kabel Gas / Kopling',
                'interval_text' => 'Cek berkala',
                'priority' => 'Sedang',
                'note' => 'Pastikan kabel tidak seret, aus, atau hampir putus agar kontrol motor tetap aman.',
                'sort_order' => 10,
            ],
        ];

        if ($hasCoolant) {
            $services[] = [
                'name' => 'Cairan Radiator',
                'interval_text' => '12.000-24.000 km',
                'priority' => 'Sedang',
                'note' => 'Cek volume coolant agar suhu mesin tetap stabil.',
                'sort_order' => 11,
            ];
        }

        return $services;
    }
}