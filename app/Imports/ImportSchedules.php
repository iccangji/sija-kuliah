<?php
namespace App\Imports;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
class ImportSchedules implements ToCollection
{
   public function collection(Collection $row)
   {
    return $row;
   }
}