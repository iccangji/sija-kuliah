<?php

namespace Database\Seeders;

use App\Models\Courses;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CoursesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                "kode" => "EEA66053",
                "nama" => "Cloud Computing (Pilihan 1)",
                "sks" => 2
              ],
              [
                "kode" => "EEA61003",
                "nama" => "Bahasa Inggris",
                "sks" => 2
              ],
              [
                "kode" => "EEA62019",
                "nama" => "Sistem Operasi",
                "sks" => 2
              ],
              [
                "kode" => "EEA64039",
                "nama" => "Teori Graf dan Otomata",
                "sks" => 2
              ],
              [
                "kode" => "EEA62012",
                "nama" => "Aljabar Linear",
                "sks" => 3
              ],
              [
                "kode" => "EEA66052",
                "nama" => "Arsitektur Perangkat Lunak (Peminatan Rekayasa Perangkat Lunak)",
                "sks" => 3
              ],
              [
                "kode" => "EEA64032",
                "nama" => "Kecerdasan Buatan",
                "sks" => 2
              ],
              [
                "kode" => "EEA62020",
                "nama" => "Wawasan Kemaritiman",
                "sks" => 3
              ],
              [
                "kode" => "EEA64040",
                "nama" => "Verifikasi dan Validasi Perangkat Lunak (Pilihan 1)",
                "sks" => 2
              ],
              [
                "kode" => "EEA64041",
                "nama" => "Logika Fuzzy (Peminatan  Komputasi Cerdas dan Visualisasi)",
                "sks" => 3
              ],
              [
                "kode" => "EEA64042",
                "nama" => "Sistem Basis Data",
                "sks" => 2
              ],
              [
                "kode" => "EEA64044",
                "nama" => "Struktur Data",
                "sks" => 3
              ],
              [
                "kode" => "EEA62014",
                "nama" => "Kewarganegaraan",
                "sks" => 2
              ],
              [
                "kode" => "EEA64031",
                "nama" => "Jaringan Komputer",
                "sks" => 2
              ],
              [
                "kode" => "EEA64035",
                "nama" => "Praktikum Kecerdasan Buatan",
                "sks" => 1
              ],
              [
                "kode" => "EEA66064",
                "nama" => "Sistem Multimedia (Peminatan  Komputasi berbasis jaringan)",
                "sks" => 3
              ],
              [
                "kode" => "EEA62017",
                "nama" => "Sistem Basis Data",
                "sks" => 2
              ],
              [
                "kode" => "EEA62018",
                "nama" => "Sistem Digital",
                "sks" => 3
              ],
              [
                "kode" => "EEA64030",
                "nama" => "Analisis dan Perancangan Sistem",
                "sks" => 3
              ],
              [
                "kode" => "EEA66055",
                "nama" => "Jaringan Syaraf Tiruan (Peminatan  Komputasi Cerdas dan Visualisasi)",
                "sks" => 3
              ],
              [
                "kode" => "EEA66060",
                "nama" => "Pemrograman Perangkat Mobile (Peminatan  Rekayasa Perangkat Lunak)",
                "sks" => 3
              ],
              [
                "kode" => "EEA64038",
                "nama" => "Struktur Data",
                "sks" => 3
              ],
              [
                "kode" => "EEA66062",
                "nama" => "Sekuritas Jaringan (Peminatan  Komputasi berbasis jaringan)",
                "sks" => 3
              ],
              [
                "kode" => "EEA62016",
                "nama" => "Praktikum Pemrograman Dasar",
                "sks" => 1
              ],
              [
                "kode" => "EEA62013",
                "nama" => "Kalkulus 2",
                "sks" => 3
              ],
              [
                "kode" => "EEA66057",
                "nama" => "Komputasi Grid (Pilihan 1)",
                "sks" => 2
              ],
              [
                "kode" => "EEA64036",
                "nama" => "Praktikum Struktur Data",
                "sks" => 1
              ],
              [
                "kode" => "EEA66063",
                "nama" => "Sistem Informasi Geografis (Pilihan 1)",
                "sks" => 2
              ],
              [
                "kode" => "EEA64034",
                "nama" => "Praktikum Jaringan Komputer 1",
                "sks" => 1
              ],
              [
                "kode" => "EEA62015",
                "nama" => "Pemrograman Dasar",
                "sks" => 2
              ],
              [
                "kode" => "EEA66066",
                "nama" => "Sistem Terdistribusi (Peminatan  Komputasi berbasis jaringan)",
                "sks" => 3
              ],
              [
                "kode" => "EEA66059",
                "nama" => "Manajemen Proyek Perangkat Lunak (Peminatan Rekayasa Perangkat Lunak)",
                "sks" => 3
              ],
              [
                "kode" => "EEA68079",
                "nama" => "KKN",
                "sks" => 4
              ],
              [
                "kode" => "EEA66054",
                "nama" => "Jaringan Nirkabel (Peminatan Komputasi berbasis jaringan)",
                "sks" => 3
              ],
              [
                "kode" => "EEA66050",
                "nama" => "Metode Riset",
                "sks" => 2
              ],
              [
                "kode" => "EEA64037",
                "nama" => "Rekayasa Perangkat Lunak",
                "sks" => 3
              ],
              [
                "kode" => "EEA66051",
                "nama" => "Animasi Komputer (Peminatan  Rekayasa Perangkat Lunak)",
                "sks" => 3
              ],
              [
                "kode" => "EEA66061",
                "nama" => "Pengenalan Pola (Peminatan Komputasi Cerdas dan Visualisasi)",
                "sks" => 3
              ],
              [
                "kode" => "EEA64033",
                "nama" => "Metode Numerik",
                "sks" => 2
              ],
              [
                "kode" => "EEA66065",
                "nama" => "Sistem Pakar Peminatan  (Komputasi Cerdas dan Visualisasi)",
                "sks" => 3
              ],
              [
                "kode" => "EEA64043",
                "nama" => "Metode Numerik",
                "sks" => 2
              ],
              [
                "kode" => "EEA66056",
                "nama" => "Kerja Praktik",
                "sks" => 2
              ],
              [
                "kode" => "EEA68080",
                "nama" => "Tugas Akhir ",
                "sks" => 6
              ]
        ];
        foreach($data as $item){
            Courses::create($item);
        }
    }
}
