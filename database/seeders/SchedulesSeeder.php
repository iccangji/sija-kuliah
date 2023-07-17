<?php

namespace Database\Seeders;

use App\Models\Schedules;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SchedulesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                "id"=> 1,
                "kode"=> "EEA66053",
                "mahasiswa"=> "2020 / 6 / 40",
                "kelas"=> "GANJIL/GENAP",
                "hari"=> 1,
                "jam"=> "07.31-09.10",
                "ruang"=> "IT3",
                "dosen1"=> "0022078406",
                "dosen2"=> "0005078610"
              ],
              [
                "id"=> 2,
                "kode"=> "EEA61003",
                "mahasiswa"=> "2022/ 2 / 75",
                "kelas"=> "B",
                "hari"=> 1,
                "jam"=> "07.31-09.10",
                "ruang"=> "IT1",
                "dosen1"=> "0005078610",
                "dosen2"=> "0006049104"
              ],
              [
                "id"=> 3,
                "kode"=> "EEA62019",
                "mahasiswa"=> "2022 / 2 / 75",
                "kelas"=> "A",
                "hari"=> 1,
                "jam"=> "07.31-09.10",
                "ruang"=> "IT2",
                "dosen1"=> "0025128402",
                "dosen2"=> "0022027607"
              ],
              [
                "id"=> 4,
                "kode"=> "EEA64039",
                "mahasiswa"=> "2021 / 4 / 50",
                "kelas"=> "GANJIL",
                "hari"=> 1,
                "jam"=> "07.31-09.10",
                "ruang"=> "LAB. RPL",
                "dosen1"=> "0007118106",
                "dosen2"=> "0920057902"
              ],
              [
                "id"=> 5,
                "kode"=> "EEA62012",
                "mahasiswa"=> "2022 / 2 / 75",
                "kelas"=> "B",
                "hari"=> 1,
                "jam"=> "09.31-12.00",
                "ruang"=> "IT2",
                "dosen1"=> "0025128402",
                "dosen2"=> "001"
              ],
              [
                "id"=> 6,
                "kode"=> "EEA66052",
                "mahasiswa"=> "2020 / 6 / 40",
                "kelas"=> "GANJIL/GENAP",
                "hari"=> 1,
                "jam"=> "10.01-12.30",
                "ruang"=> "LAB. RPL",
                "dosen1"=> "0007118106",
                "dosen2"=> "0929098602"
              ],
              [
                "id"=> 7,
                "kode"=> "EEA64032",
                "mahasiswa"=> "2021 / 4 / 50",
                "kelas"=> "GANJIL",
                "hari"=> 1,
                "jam"=> "09.31-11.10",
                "ruang"=> "LAB. SI",
                "dosen1"=> "0006049104",
                "dosen2"=> "0017089402"
              ],
              [
                "id"=> 8,
                "kode"=> "EEA62020",
                "mahasiswa"=> "2022 / 2 / 75",
                "kelas"=> "A",
                "hari"=> 1,
                "jam"=> "09.31-12.00",
                "ruang"=> "IT1",
                "dosen1"=> "0022027607",
                "dosen2"=> "0009096503",
                "dosen3"=> "002"
              ],
              [
                "id"=> 9,
                "kode"=> "EEA64037",
                "mahasiswa"=> "2021 / 4 / 50",
                "kelas"=> "GENAP",
                "hari"=> 1,
                "jam"=> "10.01-12.30",
                "ruang"=> "IT3",
                "dosen1"=> "0025047107",
                "dosen2"=> "0929098602"
              ],
              [
                "id"=> 10,
                "kode"=> "EEA64040",
                "mahasiswa"=> "2020 / 6 / 40",
                "kelas"=> "GANJIL/GENAP",
                "hari"=> 1,
                "jam"=> "13.01-14.40",
                "ruang"=> "LAB. MULTIMEDIA",
                "dosen1"=> "0906028701",
                "dosen2"=> "0011078904"
              ],
              [
                "id"=> 11,
                "kode"=> "EEA64041",
                "mahasiswa"=> "2020 / 6 / 40",
                "kelas"=> "GANJIL/GENAP",
                "hari"=> 1,
                "jam"=> "13.01-15.30",
                "ruang"=> "LAB. SI",
                "dosen1"=> "0006049104",
                "dosen2"=> "0011078904"
              ],
              [
                "id"=> 12,
                "kode"=> "EEA64042",
                "mahasiswa"=> "2022 / 2 / 75",
                "kelas"=> "A",
                "hari"=> 1,
                "jam"=> "13.01-14.40",
                "ruang"=> "IT1",
                "dosen1"=> "0025047107",
                "dosen2"=> "0025128402"
              ],
              [
                "id"=> 13,
                "kode"=> "EEA64043",
                "mahasiswa"=> "2021 / 4 / 50",
                "kelas"=> "GANJIL",
                "hari"=> 1,
                "jam"=> "13.31-14.40",
                "ruang"=> "IT2",
                "dosen1"=> "0906028701",
                "dosen2"=> "0005078610"
              ],
              [
                "id"=> 14,
                "kode"=> "EEA64044",
                "mahasiswa"=> "2021 / 4 / 50",
                "kelas"=> "GENAP",
                "hari"=> 1,
                "jam"=> "13.31-15.30",
                "ruang"=> "IT3",
                "dosen1"=> "0025047107",
                "dosen2"=> "0011078904"
              ],
              [
                "id"=> 15,
                "kode"=> "EEA62014",
                "mahasiswa"=> "2022 / 2 / 150",
                "kelas"=> "B",
                "hari"=> 1,
                "jam"=> "14.41-16.20",
                "ruang"=> "IT1",
                "dosen1"=> "003",
                "dosen2"=> "004"
              ],
              [
                "id"=> 16,
                "kode"=> "EEA62014",
                "mahasiswa"=> "2022 / 2 / 75",
                "kelas"=> "C",
                "hari"=> 1,
                "jam"=> "14.41-16.20",
                "ruang"=> "LAB. RPL",
                "dosen1"=> "0025047107",
                "dosen2"=> "0030048107"
              ],
              [
                "id"=> 17,
                "kode"=> "EEA64031",
                "mahasiswa"=> "2021 / 4 / 50",
                "kelas"=> "GENAP",
                "hari"=> 2,
                "jam"=> "07.31-09.10",
                "ruang"=> "IT3",
                "dosen1"=> "0022078406",
                "dosen2"=> "0005078610"
              ],
              [
                "id"=> 18,
                "kode"=> "EEA62014",
                "mahasiswa"=> "2022 / 2 / 75",
                "kelas"=> "A",
                "hari"=> 2,
                "jam"=> "07.31-09.10",
                "ruang"=> "LAB. RPL",
                "dosen1"=> "0025047107",
                "dosen2"=> "0030048107"
              ],
              [
                "id"=> 19,
                "kode"=> "EEA64035",
                "mahasiswa"=> "2021 / 4 / 50",
                "kelas"=> "GANJIL",
                "hari"=> 2,
                "jam"=> "07.31-08.20",
                "ruang"=> "LAB.SI",
                "dosen1"=> "0006049104",
                "dosen2"=> "0017089402"
              ],
              [
                "id"=> 20,
                "kode"=> "EEA66064",
                "mahasiswa"=> "2020 / 6 / 40",
                "kelas"=> "GANJIL/GENAP",
                "hari"=> 2,
                "jam"=> "09.31- 12.00",
                "ruang"=> "LAB. MLTIMEDIA",
                "dosen1"=> "0017117606",
                "dosen2"=> "0022078406"
              ],
              [
                "id"=> 21,
                "kode"=> "EEA62017",
                "mahasiswa"=> "2022 / 2 / 75",
                "kelas"=> "C",
                "hari"=> 2,
                "jam"=> "10.01-11.40",
                "ruang"=> "IT3",
                "dosen1"=> "0025047107",
                "dosen2"=> "0025128402"
              ],
              [
                "id"=> 22,
                "kode"=> "EEA62018",
                "mahasiswa"=> "2022 / 2 / 75",
                "kelas"=> "A",
                "hari"=> 2,
                "jam"=> "10.01-12.30",
                "ruang"=> "IT1",
                "dosen1"=> "0017117606",
                "dosen2"=> "0017127802"
              ],
              [
                "id"=> 23,
                "kode"=> "EEA64030",
                "mahasiswa"=> "2021 / 4 / 50",
                "kelas"=> "GANJIL",
                "hari"=> 2,
                "jam"=> "10.01-12.30",
                "ruang"=> "LAB. RPL",
                "dosen1"=> "0007118106",
                "dosen2"=> "0906028701"
              ],
              [
                "id"=> 24,
                "kode"=> " EEA64039",
                "mahasiswa"=> "2021 / 4 / 50",
                "kelas"=> "GENAP",
                "hari"=> 2,
                "jam"=> "10.01-12.30",
                "ruang"=> "IT2",
                "dosen1"=> "0007118106",
                "dosen2"=> "0920057902"
              ],
              [
                "id"=> 25,
                "kode"=> "EEA66055",
                "mahasiswa"=> "2020 / 6 / 40",
                "kelas"=> "GANJIL/GENAP",
                "hari"=> 2,
                "jam"=> "10.01-12.30",
                "ruang"=> "LAB. SI",
                "dosen1"=> "0009096503",
                "dosen2"=> "0022017304"
              ],
              [
                "id"=> 26,
                "kode"=> "EEA66060",
                "mahasiswa"=> "2020 / 6 / 40",
                "kelas"=> "GANJIL/GENAP",
                "hari"=> 2,
                "jam"=> "13.01-15.30",
                "ruang"=> "IT2",
                "dosen1"=> "0025047107",
                "dosen2"=> "0017089402"
              ],
              [
                "id"=> 27,
                "kode"=> "EEA62014",
                "mahasiswa"=> "2022 / 2 / 150",
                "kelas"=> "A",
                "hari"=> 2,
                "jam"=> "13.01-14.40",
                "ruang"=> "IT1",
                "dosen1"=> "003",
                "dosen2"=> "004"
              ],
              [
                "id"=> 28,
                "kode"=> "EEA64038",
                "mahasiswa"=> "2021 / 4 / 50",
                "kelas"=> "GANJIL",
                "hari"=> 2,
                "jam"=> "14.41-17.10",
                "ruang"=> "IT3",
                "dosen1"=> "0025047107",
                "dosen2"=> "0011078904"
              ],
              [
                "id"=> 29,
                "kode"=> "EEA66062",
                "mahasiswa"=> "2020 / 6 / 40",
                "kelas"=> "GANJIL/GENAP",
                "hari"=> 2,
                "jam"=> "13.01-15.30",
                "ruang"=> "LAB. MLTIMEDIA",
                "dosen1"=> "0022078406",
                "dosen2"=> "0929098602"
              ],
              [
                "id"=> 30,
                "kode"=> "EEA61003",
                "mahasiswa"=> "2022/ 2 / 75",
                "kelas"=> "A",
                "hari"=> 2,
                "jam"=> "14.41-16.20",
                "ruang"=> "IT1",
                "dosen1"=> "0005078610",
                "dosen2"=> "0006049104"
              ],
              [
                "id"=> 31,
                "kode"=> "EEA62016",
                "mahasiswa"=> "2022 / 2 / 75",
                "kelas"=> "C",
                "hari"=> 2,
                "jam"=> "13.01-13.50",
                "ruang"=> "LAB. RPL",
                "dosen1"=> "0025047107",
                "dosen2"=> "0030048107"
              ],
              [
                "id"=> 32,
                "kode"=> "EEA64031",
                "mahasiswa"=> "2021 / 4 / 50",
                "kelas"=> "GANJIL",
                "hari"=> 3,
                "jam"=> "07.31-09.10",
                "ruang"=> "IT2",
                "dosen1"=> "0022078406",
                "dosen2"=> "0005078610"
              ],
              [
                "id"=> 33,
                "kode"=> "EEA62013",
                "mahasiswa"=> "2022 / 2 / 75",
                "kelas"=> "A",
                "hari"=> 3,
                "jam"=> "07.31-09.10",
                "ruang"=> "IT1",
                "dosen1"=> "005",
                "dosen2"=> "008",
                "dosen3"=> "007"
              ],
              [
                "id"=> 34,
                "kode"=> "EEA66057",
                "mahasiswa"=> "2020 / 6 / 40",
                "kelas"=> "GANJIL/GENAP",
                "hari"=> 3,
                "jam"=> "07.31-09.10",
                "ruang"=> "LAB. MULTIMEDIA",
                "dosen1"=> "0022017304",
                "dosen2"=> "0920057902"
              ],
              [
                "id"=> 35,
                "kode"=> "EEA62020",
                "mahasiswa"=> "2022 / 2 / 75",
                "kelas"=> "B",
                "hari"=> 3,
                "jam"=> "07.31-09.11",
                "ruang"=> "IT3",
                "dosen1"=> "0022027607",
                "dosen2"=> "0009096503",
                "dosen3"=> "002"
              ],
              [
                "id"=> 36,
                "kode"=> "EEA64036",
                "mahasiswa"=> "2021 / 4 / 50",
                "kelas"=> "GENAP",
                "hari"=> 3,
                "jam"=> "07.31-08.20",
                "ruang"=> "LAB. RPL",
                "dosen1"=> "0025047107",
                "dosen2"=> "0011078904"
              ],
              [
                "id"=> 37,
                "kode"=> "EEA66063",
                "mahasiswa"=> "2020 / 6 / 40",
                "kelas"=> "GANJIL/GENAP",
                "hari"=> 3,
                "jam"=> "09.31-11.10",
                "ruang"=> "IT3",
                "dosen1"=> "0020107601",
                "dosen2"=> "0030048107"
              ],
              [
                "id"=> 38,
                "kode"=> "EEA64030",
                "mahasiswa"=> "2021 / 4 / 50",
                "kelas"=> "GENAP",
                "hari"=> 3,
                "jam"=> "10.01-12.30",
                "ruang"=> "LAB. RPL",
                "dosen1"=> "0007118106",
                "dosen2"=> "0906028701"
              ],
              [
                "id"=> 39,
                "kode"=> "EEA62018",
                "mahasiswa"=> "2022 / 2 / 75",
                "kelas"=> "B",
                "hari"=> 3,
                "jam"=> "10.01-12.30",
                "ruang"=> "IT1",
                "dosen1"=> "0017117606",
                "dosen2"=> "0017127802"
              ],
              [
                "id"=> 40,
                "kode"=> "EEA62012",
                "mahasiswa"=> "2022 / 2 / 75",
                "kelas"=> "A",
                "hari"=> 3,
                "jam"=> "10.01-12.30",
                "ruang"=> "IT2",
                "dosen1"=> "0025128402",
                "dosen2"=> "001"
              ],
              [
                "id"=> 41,
                "kode"=> "EEA64034",
                "mahasiswa"=> "2021 / 4 / 50",
                "kelas"=> "GENAP",
                "hari"=> 3,
                "jam"=> "13.01-13.50",
                "ruang"=> "LAB. MULTIMEDIA",
                "dosen1"=> "0022078406",
                "dosen2"=> "0011078904"
              ],
              [
                "id"=> 42,
                "kode"=> "EEA62015",
                "mahasiswa"=> "2022 / 2 / 75",
                "kelas"=> "B",
                "hari"=> 3,
                "jam"=> "13.01-14.40",
                "ruang"=> "IT2",
                "dosen1"=> "0025047107",
                "dosen2"=> "0030048107"
              ],
              [
                "id"=> 43,
                "kode"=> "EEA66066",
                "mahasiswa"=> "2020 / 6 / 40",
                "kelas"=> "GANJIL/GENAP",
                "hari"=> 3,
                "jam"=> "13.01-15.30",
                "ruang"=> "IT1",
                "dosen1"=> "0929098602",
                "dosen2"=> "0920057902"
              ],
              [
                "id"=> 44,
                "kode"=> "EEA66059",
                "mahasiswa"=> "2020 / 6 / 40",
                "kelas"=> "GANJIL/GENAP",
                "hari"=> 3,
                "jam"=> "13.01-15.30",
                "ruang"=> "LAB. RPL",
                "dosen1"=> "0017117606",
                "dosen2"=> "0906028701"
              ],
              [
                "id"=> 46,
                "kode"=> "EEA62020",
                "mahasiswa"=> "2022 / 2 / 75",
                "kelas"=> "C",
                "hari"=> 3,
                "jam"=> "15.31-17.10",
                "ruang"=> "IT3",
                "dosen1"=> "0022027607",
                "dosen2"=> "0009096503",
                "dosen3"=> "002"
              ],
              [
                "id"=> 47,
                "kode"=> "EEA66054",
                "mahasiswa"=> "2020 / 6 / 40",
                "kelas"=> "GANJIL/GENAP",
                "hari"=> 4,
                "jam"=> "07.31-10.00",
                "ruang"=> "LAB. MLTIMEDIA",
                "dosen1"=> "0022078406",
                "dosen2"=> "0920057902"
              ],
              [
                "id"=> 48,
                "kode"=> "EEA64036",
                "mahasiswa"=> "2021 / 4 / 50",
                "kelas"=> "GANJIL",
                "hari"=> 4,
                "jam"=> "07.31-08.20",
                "ruang"=> "LAB. RPL",
                "dosen1"=> "0025047107",
                "dosen2"=> "0011078904"
              ],
              [
                "id"=> 49,
                "kode"=> "EEA62014",
                "mahasiswa"=> "2022 / 2 / 150",
                "kelas"=> "C",
                "hari"=> 4,
                "jam"=> "07.31-09.10",
                "ruang"=> "IT1",
                "dosen1"=> "003",
                "dosen2"=> "004"
              ],
              [
                "id"=> 50,
                "kode"=> "EEA66050",
                "mahasiswa"=> "2020 / 6 / 40",
                "kelas"=> "GENAP",
                "hari"=> 4,
                "jam"=> "07.31-09.10",
                "ruang"=> "IT3",
                "dosen1"=> "0020107601",
                "dosen2"=> "0009096503"
              ],
              [
                "id"=> 51,
                "kode"=> "EEA64037",
                "mahasiswa"=> "2021 / 4 / 50",
                "kelas"=> "GANJIL",
                "hari"=> 4,
                "jam"=> "09.31-12.00",
                "ruang"=> "LAB. RPL",
                "dosen1"=> "0025047107",
                "dosen2"=> "0929098602"
              ],
              [
                "id"=> 52,
                "kode"=> "EEA62019",
                "mahasiswa"=> "2022 / 2 / 75",
                "kelas"=> "B",
                "hari"=> 4,
                "jam"=> "09.31-11.10",
                "ruang"=> "IT1",
                "dosen1"=> "0025128402",
                "dosen2"=> "0022027607"
              ],
              [
                "id"=> 53,
                "kode"=> "EEA61003",
                "mahasiswa"=> "2022 / 2 / 75",
                "kelas"=> "C",
                "hari"=> 4,
                "jam"=> "09.31-11.10",
                "ruang"=> "IT2",
                "dosen1"=> "0005078610",
                "dosen2"=> "0006049104"
              ],
              [
                "id"=> 54,
                "kode"=> "EEA64032",
                "mahasiswa"=> "2021 / 4 / 50",
                "kelas"=> "GENAP",
                "hari"=> 4,
                "jam"=> "10.01-11.40",
                "ruang"=> "LAB. SI",
                "dosen1"=> "0006049104",
                "dosen2"=> "0017089402"
              ],
              [
                "id"=> 55,
                "kode"=> "EEA66051",
                "mahasiswa"=> "2020 / 6 / 40",
                "kelas"=> "GANJIL/GENAP",
                "hari"=> 4,
                "jam"=> "13.01-15.30",
                "ruang"=> "IT2",
                "dosen1"=> "0906028701",
                "dosen2"=> "0929098602"
              ],
              [
                "id"=> 56,
                "kode"=> "EEA64034",
                "mahasiswa"=> "2021 / 4 / 50",
                "kelas"=> "GANJIL",
                "hari"=> 4,
                "jam"=> "13.01-13.50",
                "ruang"=> "LAB. MULTIMEDIA",
                "dosen1"=> "0022078406",
                "dosen2"=> "0011078904"
              ],
              [
                "id"=> 57,
                "kode"=> "EEA66061",
                "mahasiswa"=> "2020 / 6 / 40",
                "kelas"=> "GANJIL/GENAP",
                "hari"=> 4,
                "jam"=> "13.01-15.30",
                "ruang"=> "LAB. SI",
                "dosen1"=> "0006049104",
                "dosen2"=> "0011078904"
              ],
              [
                "id"=> 58,
                "kode"=> "EEA62016",
                "mahasiswa"=> "2022 / 2 / 75",
                "kelas"=> "A",
                "hari"=> 4,
                "jam"=> "13.01-13.50",
                "ruang"=> "LAB. RPL",
                "dosen1"=> "0025047107",
                "dosen2"=> "0030048107"
              ],
              [
                "id"=> 59,
                "kode"=> "EEA62013",
                "mahasiswa"=> "2022 / 2 / 75",
                "kelas"=> "B",
                "hari"=> 4,
                "jam"=> "13.01-13.50",
                "ruang"=> "IT1",
                "dosen1"=> "005",
                "dosen2"=> "008",
                "dosen3"=> "007"
              ],
              [
                "id"=> 60,
                "kode"=> "EEA62012",
                "mahasiswa"=> "2022 / 2 / 75",
                "kelas"=> "C",
                "hari"=> 4,
                "jam"=> "13.01-13.50",
                "ruang"=> "IT2",
                "dosen1"=> "0025128402",
                "dosen2"=> "001"
              ],
              [
                "id"=> 61,
                "kode"=> "EEA64033",
                "mahasiswa"=> "2021 / 4 / 50",
                "kelas"=> "GENAP",
                "hari"=> 5,
                "jam"=> "07.31-09.10",
                "ruang"=> "IT3",
                "dosen1"=> "0906028701",
                "dosen2"=> "0005078610"
              ],
              [
                "id"=> 62,
                "kode"=> "EEA66050",
                "mahasiswa"=> "2020 / 6 / 40",
                "kelas"=> "GANJIL",
                "hari"=> 5,
                "jam"=> "07.31-09.10",
                "ruang"=> "IT2",
                "dosen1"=> "0020107601",
                "dosen2"=> "0009096503"
              ],
              [
                "id"=> 63,
                "kode"=> "EEA62016",
                "mahasiswa"=> "2022 / 2 / 75",
                "kelas"=> "B",
                "hari"=> 5,
                "jam"=> "09.31-10.20",
                "ruang"=> "LAB. RPL",
                "dosen1"=> "0025047107",
                "dosen2"=> "0030048107"
              ],
              [
                "id"=> 64,
                "kode"=> "EEA62013",
                "mahasiswa"=> "2022 / 2 / 75",
                "kelas"=> "C",
                "hari"=> 5,
                "jam"=> "07.31-09.10",
                "ruang"=> "IT1",
                "dosen1"=> "005",
                "dosen2"=> "008",
                "dosen3"=> "007"
              ],
              [
                "id"=> 65,
                "kode"=> "EEA64035",
                "mahasiswa"=> "2021 / 4 / 50",
                "kelas"=> "GENAP",
                "hari"=> 5,
                "jam"=> "09.31-10.20",
                "ruang"=> "LAB.SI",
                "dosen1"=> "0006049104",
                "dosen2"=> "0017089402"
              ],
              [
                "id"=> 66,
                "kode"=> "EEA62017",
                "mahasiswa"=> "2022 / 2 / 75",
                "kelas"=> "B",
                "hari"=> 2,
                "jam"=> "13.01-14.40",
                "ruang"=> "IT3",
                "dosen1"=> "0025047107",
                "dosen2"=> "0025128402"
              ],
              [
                "id"=> 67,
                "kode"=> "EEA66065",
                "mahasiswa"=> "2020 / 6 / 40",
                "kelas"=> "GANJIL/GENAP",
                "hari"=> 5,
                "jam"=> "09.30-12.00",
                "ruang"=> "IT3",
                "dosen1"=> "0009096503",
                "dosen2"=> "0011078904"
              ],
              [
                "id"=> 68,
                "kode"=> "EEA62018",
                "mahasiswa"=> "2022 / 2 / 75",
                "kelas"=> "C",
                "hari"=> 5,
                "jam"=> "10.01-12.30",
                "ruang"=> "IT1",
                "dosen1"=> "0017117606",
                "dosen2"=> "0017127802"
              ],
              [
                "id"=> 69,
                "kode"=> "EEA62019",
                "mahasiswa"=> "2022 / 2 / 75",
                "kelas"=> "C",
                "hari"=> 5,
                "jam"=> "13.01-14.40",
                "ruang"=> "IT2",
                "dosen1"=> "0025128402",
                "dosen2"=> "0022027607"
              ],
              [
                "id"=> 70,
                "kode"=> "EEA66056",
                "mahasiswa"=> "2020 / 6 / 80",
                "kelas"=> "GANJIL/GENAP",
                "hari"=> 5,
                "jam"=> "13.01-14.40",
                "ruang"=> "IT1",
                "dosen1"=> "0017117606"
              ]
            ];
        foreach($data as $item){
            Schedules::create($item);
        }
    }
}
