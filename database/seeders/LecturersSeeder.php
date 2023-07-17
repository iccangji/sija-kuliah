<?php

namespace Database\Seeders;

use App\Models\Lecturers;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class LecturersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                "nama"=> "Sutardi, S.Kom., MT",
                "nidn"=> "0022027607",
            ],
            [
                "nama"=> "Dr. Laode Muhammad Golok Jaya, ST., MT",
                "nidn"=> "0020107601",
            ],
            [
                "nama"=> "Hasmina Tari Mokui, S.ST.,M.E.,P.hD",
                "nidn"=> "0017127802",
            ],
            [
                "nama"=> "Isnawaty, S.Si., MT",
                "nidn"=> "0017117606",
            ],
            [
                "nama"=> "LM. Fid Aksara, S.Kom., M.Kom",
                "nidn"=> "0022078406",
            ],
            [
                "nama"=> "Mustarum Musaruddin, S.T., M.IT., Ph.D",
                "nidn"=> "0022017304",
            ],
            [
                "nama"=> "Dr. Muh Ihsan Sarita, M.Kom",
                "nidn"=> "0009096503",
            ],
            [
                "nama"=> "Ika Purwanti Ningrum, S.Kom., M.Cs",
                "nidn"=> "0016018306",
            ],
            [
                "nama"=> "Rizal Adi Saputra, ST., M.Kom",
                "nidn"=> "0006049104",
            ],
            [
                "nama"=> "Statiswaty, ST., MMSI",
                "nidn"=> "0007118106",
            ],
            [
                "nama"=> "Jumadil Nangi, S.Kom., MT",
                "nidn"=> "0906028701",
            ],
            [
                "nama"=> "LM. Bahtiar Aksara, ST., MT",
                "nidn"=> "0929098602",
            ],
            [
                "nama"=> "Muhammad Yamin, ST., M.Eng",
                "nidn"=> "0014068304",
            ],
            [
                "nama"=> "Natalis Ransi, S.Si., M.Cs",
                "nidn"=> "0025128402",
            ],
            [
                "nama"=> "Bambang Pramono, S.Si., MT",
                "nidn"=> "0025047107",
            ],
            [
                "nama"=> "Adha Mashur Sajiah, ST., M.Eng",
                "nidn"=> "0023069101",
            ],
            [
                "nama"=> "Asa Hari Wibowo, ST., M.Eng",
                "nidn"=> "0017089402",
            ],
            [
                "nama"=> "Subardin, ST., MT",
                "nidn"=> "0920057902",
            ],
            [
                "nama"=> "La Surimi, S.Si., M.Cs",
                "nidn"=> "0005078610",
            ],
            [
                "nama"=> "Laode Muhammad Tajidun, ST.,  MT",
                "nidn"=> "0030048107",
            ],
            [
                "nama"=> "Ilham Julian Efendi, ST., MT",
                "nidn"=> "0011078904",
            ],
            [
                "nama"=> "Arman",
                "nidn"=> "001",
            ],
            [
                "nama"=> "Andi Tenriawaru",
                "nidn"=> "002",
            ],
            [
                "nama"=> "Irawaty",
                "nidn"=> "003",
            ],
            [
                "nama"=> "Nerlin",
                "nidn"=> "004",
            ],
            [
                "nama"=> "Prof. Asrul Sani",
                "nidn"=> "005",
            ],
            [
                "nama"=> "Mansur",
                "nidn"=> "006",
            ],
            [
                "nama"=> "Rahmad Prajono",
                "nidn"=> "007",
            ],
            [
                "nama"=> "Mansur",
                "nidn"=> "008",
            ]
        ];

        foreach($data as $item){
            Lecturers::create($item);
        }
    }
}
