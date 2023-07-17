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
                "tipe" => "KBJ",
                "sks" => 2
              ],
              [
                "kode" => "EEA61003",
                "nama" => "Bahasa Inggris",
                "tipe" => "MKU",
                "sks" => 2
              ],
              [
                "kode" => "EEA62019",
                "nama" => "Sistem Operasi",
                "tipe" => "MKU",
                "sks" => 2
              ],
              [
                "kode" => "EEA64039",
                "nama" => "Teori Graf dan Otomata",
                "tipe" => "RPL",
                "sks" => 2
              ],
              [
                "kode" => "EEA62012",
                "nama" => "Aljabar Linear",
                "tipe" => "MKU",
                "sks" => 3
              ],
              [
                "kode" => "EEA66052",
                "nama" => "Arsitektur Perangkat Lunak (Peminatan Rekayasa Perangkat Lunak)",
                "tipe" => "RPL",
                "sks" => 3
              ],
              [
                "kode" => "EEA64032",
                "nama" => "Kecerdasan Buatan",
                "tipe" => "KCV",
                "sks" => 2
              ],
              [
                "kode" => "EEA62020",
                "nama" => "Wawasan Kemaritiman",
                "tipe" => "MKU",
                "sks" => 3
              ],
              [
                "kode" => "EEA64040",
                "nama" => "Verifikasi dan Validasi Perangkat Lunak (Pilihan 1)",
                "tipe" => "RPL",
                "sks" => 2
              ],
              [
                "kode" => "EEA64041",
                "nama" => "Logika Fuzzy (Peminatan  Komputasi Cerdas dan Visualisasi)",
                "tipe" => "KCV",
                "sks" => 3
              ],
              [
                "kode" => "EEA64042",
                "nama" => "Sistem Basis Data",
                "tipe" => "MKU",
                "sks" => 2
              ],
              [
                "kode" => "EEA64044",
                "nama" => "Struktur Data",
                "tipe" => "RPL",
                "sks" => 3
              ],
              [
                "kode" => "EEA62014",
                "nama" => "Kewarganegaraan",
                "tipe" => "MKU",
                "sks" => 2
              ],
              [
                "kode" => "EEA64031",
                "nama" => "Jaringan Komputer",
                "tipe" => "KBJ",
                "sks" => 2
              ],
              [
                "kode" => "EEA64035",
                "nama" => "Praktikum Kecerdasan Buatan",
                "tipe" => "KCV",
                "sks" => 1
              ],
              [
                "kode" => "EEA66064",
                "nama" => "Sistem Multimedia (Peminatan  Komputasi berbasis jaringan)",
                "tipe" => "KBJ",
                "sks" => 3
              ],
              [
                "kode" => "EEA62017",
                "nama" => "Sistem Basis Data",
                "tipe" => "MKU",
                "sks" => 2
              ],
              [
                "kode" => "EEA62018",
                "nama" => "Sistem Digital",
                "tipe" => "MKU",
                "sks" => 3
              ],
              [
                "kode" => "EEA64030",
                "nama" => "Analisis dan Perancangan Sistem",
                "tipe" => "MKU",
                "sks" => 3
              ],
              [
                "kode" => "EEA66055",
                "nama" => "Jaringan Syaraf Tiruan (Peminatan  Komputasi Cerdas dan Visualisasi)",
                "tipe" => "KCV",
                "sks" => 3
              ],
              [
                "kode" => "EEA66060",
                "nama" => "Pemrograman Perangkat Mobile (Peminatan  Rekayasa Perangkat Lunak)",
                "tipe" => "RPL",
                "sks" => 3
              ],
              [
                "kode" => "EEA64038",
                "nama" => "Struktur Data",
                "tipe" => "RPL",
                "sks" => 3
              ],
              [
                "kode" => "EEA66062",
                "nama" => "Sekuritas Jaringan (Peminatan  Komputasi berbasis jaringan)",
                "tipe" => "KBJ",
                "sks" => 3
              ],
              [
                "kode" => "EEA62016",
                "nama" => "Praktikum Pemrograman Dasar",
                "tipe" => "RPL",
                "sks" => 1
              ],
              [
                "kode" => "EEA62013",
                "nama" => "Kalkulus 2",
                "tipe" => "MKU",
                "sks" => 3
              ],
              [
                "kode" => "EEA66057",
                "nama" => "Komputasi Grid (Pilihan 1)",
                "tipe" => "KBJ",
                "sks" => 2
              ],
              [
                "kode" => "EEA64036",
                "nama" => "Praktikum Struktur Data",
                "tipe" => "RPL",
                "sks" => 1
              ],
              [
                "kode" => "EEA66063",
                "nama" => "Sistem Informasi Geografis (Pilihan 1)",
                "tipe" => "RPL",
                "sks" => 2
              ],
              [
                "kode" => "EEA64034",
                "nama" => "Praktikum Jaringan Komputer 1",
                "tipe" => "KBJ",
                "sks" => 1
              ],
              [
                "kode" => "EEA62015",
                "nama" => "Pemrograman Dasar",
                "tipe" => "RPL",
                "sks" => 2
              ],
              [
                "kode" => "EEA66066",
                "nama" => "Sistem Terdistribusi (Peminatan  Komputasi berbasis jaringan)",
                "tipe" => "KBJ",
                "sks" => 3
              ],
              [
                "kode" => "EEA66059",
                "nama" => "Manajemen Proyek Perangkat Lunak (Peminatan Rekayasa Perangkat Lunak)",
                "tipe" => "RPL",
                "sks" => 3
              ],
              [
                "kode" => "EEA68079",
                "nama" => "KKN",
                "tipe" => "MKU",
                "sks" => 4
              ],
              [
                "kode" => "EEA66054",
                "nama" => "Jaringan Nirkabel (Peminatan Komputasi berbasis jaringan)",
                "tipe" => "KBJ",
                "sks" => 3
              ],
              [
                "kode" => "EEA66050",
                "nama" => "Metode Riset",
                "tipe" => "MKU",
                "sks" => 2
              ],
              [
                "kode" => "EEA64037",
                "nama" => "Rekayasa Perangkat Lunak",
                "tipe" => "RPL",
                "sks" => 3
              ],
              [
                "kode" => "EEA66051",
                "nama" => "Animasi Komputer (Peminatan  Rekayasa Perangkat Lunak)",
                "tipe" => "RPL",
                "sks" => 3
              ],
              [
                "kode" => "EEA66061",
                "nama" => "Pengenalan Pola (Peminatan Komputasi Cerdas dan Visualisasi)",
                "tipe" => "KCV",
                "sks" => 3
              ],
              [
                "kode" => "EEA64033",
                "nama" => "Metode Numerik",
                "tipe" => "MKU",
                "sks" => 2
              ],
              [
                "kode" => "EEA66065",
                "nama" => "Sistem Pakar Peminatan  (Komputasi Cerdas dan Visualisasi)",
                "tipe" => "KCV",
                "sks" => 3
              ],
              [
                "kode" => "EEA64043",
                "nama" => "Metode Numerik",
                "tipe" => "MKU",
                "sks" => 2
              ],
              [
                "kode" => "EEA66056",
                "nama" => "Kerja Praktik",
                "tipe" => "MKU",
                "sks" => 2
              ],
              [
                "kode" => "EEA68080",
                "nama" => "Tugas Akhir ",
                "tipe" => "MKU",
                "sks" => 6
              ]
        ];
        foreach($data as $item){
            Courses::create($item);
        }
    }
}
