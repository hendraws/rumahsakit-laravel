<?php

namespace App\Imports;

use App\Pasien;
use Illuminate\Support\Collection;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Concerns\ToCollection;

class PasienImport implements ToCollection
{
    /**
    * @param Collection $collection
    */
    public function collection(Collection $collection)
    {
        // dd($collection);
        foreach ($collection as $key => $row) {
            if($key >= 2){
                Pasien::create([
                    'nik' => $row[0],
                    'nama'=> $row[1], 
                    'slug' => \Str::slug($row[1]),  
                    'jenis_kelamin' => $row[2],
                    'alamat' => $row[3],
                    'no_telp' => $row[4]
                    ]);
            }
        }


    }

}
