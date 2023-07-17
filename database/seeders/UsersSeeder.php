<?php

namespace Database\Seeders;
use App\Models\User;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
class UsersSeeder extends Seeder

{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                "user"=> "0022027607",
                "name"=> "Sutardi, S.Kom., MT",
                "password" => Hash::make('123'),
                'level' => 'dosen'
            ],
            [
                "user"=> "0020107601",
                "name"=> "Dr. Laode Muhammad Golok Jaya, ST., MT",
                "password" => Hash::make('123'),
                'level' => 'dosen'
            ],
            [
                "user"=> "0017127802",
                "name"=> "Hasmina Tari Mokui, S.ST.,M.E.,P.hD",
                "password" => Hash::make('123'),
                'level' => 'dosen'
            ],
            [
                "user"=> "0017117606",
                "name"=> "Isnawaty, S.Si., MT",
                "password" => Hash::make('123'),
                'level' => 'dosen'
            ],
            [
                "user"=> "0022078406",
                "name"=> "LM. Fid Aksara, S.Kom., M.Kom",
                "password" => Hash::make('123'),
                'level' => 'dosen'
            ],
            [
                "user"=> "0022017304",
                "name"=> "Mustarum Musaruddin, S.T., M.IT., Ph.D",
                "password" => Hash::make('123'),
                'level' => 'dosen'
            ],
            [
                "user"=> "0009096503",
                "name"=> "Dr. Muh Ihsan Sarita, M.Kom",
                "password" => Hash::make('123'),
                'level' => 'dosen'
            ],
            [
                "user"=> "0016018306",
                "name"=> "Ika Purwanti Ningrum, S.Kom., M.Cs",
                "password" => Hash::make('123'),
                'level' => 'dosen'
            ],
            [
                "user"=> "0006049104",
                "name"=> "Rizal Adi Saputra, ST., M.Kom",
                "password" => Hash::make('123'),
                'level' => 'dosen'
            ],
            [
                "user"=> "0007118106",
                "name"=> "Statiswaty, ST., MMSI",
                "password" => Hash::make('123'),
                'level' => 'dosen'
            ],
            [
                "user"=> "0906028701",
                "name"=> "Jumadil Nangi, S.Kom., MT",
                "password" => Hash::make('123'),
                'level' => 'dosen'
            ],
            [
                "user"=> "0929098602",
                "name"=> "LM. Bahtiar Aksara, ST., MT",
                "password" => Hash::make('123'),
                'level' => 'dosen'
            ],
            [
                "user"=> "0014068304",
                "name"=> "Muhammad Yamin, ST., M.Eng",
                "password" => Hash::make('123'),
                'level' => 'dosen'
            ],
            [
                "user"=> "0025128402",
                "name"=> "Natalis Ransi, S.Si., M.Cs",
                "password" => Hash::make('123'),
                'level' => 'dosen'
            ],
            [
                "user"=> "0025047107",
                "name"=> "Bambang Pramono, S.Si., MT",
                "password" => Hash::make('123'),
                'level' => 'dosen'
            ],
            [
                "user"=> "0023069101",
                "name"=> "Adha Mashur Sajiah, ST., M.Eng",
                "password" => Hash::make('123'),
                'level' => 'dosen'
            ],
            [
                "user"=> "0017089402",
                "name"=> "Asa Hari Wibowo, ST., M.Eng",
                "password" => Hash::make('123'),
                'level' => 'dosen'
            ],
            [
                "user"=> "0920057902",
                "name"=> "Subardin, ST., MT",
                "password" => Hash::make('123'),
                'level' => 'dosen'
            ],
            [
                "user"=> "0005078610",
                "name"=> "La Surimi, S.Si., M.Cs",
                "password" => Hash::make('123'),
                'level' => 'dosen'
            ],
            [
                "user"=> "0030048107",
                "name"=> "Laode Muhammad Tajidun, ST.,  MT",
                "password" => Hash::make('123'),
                'level' => 'dosen'
            ],
            [
                "user"=> "0011078904",
                "name"=> "Ilham Julian Efendi, ST., MT",
                "password" => Hash::make('123'),
                'level' => 'dosen'
            ],
            [
                "user"=> "001",
                "name"=> "Arman",
                "password" => Hash::make('123'),
                'level' => 'dosen'
            ],
            [
                "user"=> "002",
                "name"=> "Andi Tenriawaru",
                "password" => Hash::make('123'),
                'level' => 'dosen'
            ],
            [
                "user"=> "003",
                "name"=> "Irawaty",
                "password" => Hash::make('123'),
                'level' => 'dosen'
            ],
            [
                "user"=> "004",
                "name"=> "Nerlin",
                "password" => Hash::make('123'),
                'level' => 'dosen'
            ],
            [
                "user"=> "005",
                "name"=> "Prof. Asrul Sani",
                "password" => Hash::make('123'),
                'level' => 'dosen'
            ],
            [
                "user"=> "006",
                "name"=> "Mansur",
                "password" => Hash::make('123'),
                'level' => 'dosen'
            ],
            [
                "user"=> "007",
                "name"=> "Rahmad Prajono",
                "password" => Hash::make('123'),
                'level' => 'dosen'
            ],
            [
                "user"=> "008",
                "name"=> "Mansur",
                "password" => Hash::make('123'),
                'level' => 'dosen'
            ],
            [
                "user"=> "admin",
                "name"=> "admin",
                "password" => Hash::make('admin123'),
                'level' => 'admin'
            ]
        ];

        foreach($data as $item){
            User::create($item);
        }
    }
}
