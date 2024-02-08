<?php

namespace App\Imports;

use Maatwebsite\Excel\Concerns\ToModel;
use App\Models\Excel;

class ExcelImport implements ToModel
{
    public function model(array $row)
    {
        return new Excel([
            'nis' => $row[1],
            'nama' => $row[2],
            'kelas' => $row[3],
            'jenis_kelamin' => $row[4],
        ]);
    }
}
