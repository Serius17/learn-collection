<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CollectionController extends Controller
{
    public function custom()
    {
        $myCollection = collect([
            'taylor',
            'abigail',
            null,
            'tom',
            null,
            'caleb'
        ]);

        $newCollection = $myCollection->map(function ($item) {
            return strtoupper($item);
        })->reject(function ($item) {
            return empty($item);
        });
        dump($newCollection);
    }

    public function collection()
    {
        // $nums = collect([100, 200, 50, 80, 140, 30, 15, 180, 185, 70, 75, 100]);
        // // Operasi agregat
        // dump($nums->sum());
        // dump($nums->avg());
        // dump($nums->max());
        // dump($nums->min());
        // dump($nums->median());
        // dump($nums->random());
        // dump($nums->contains(100));
        // dump($nums->unique());
        // dump($nums->all());

        $orang = collect([
            "nama" => "Fauzi",
            "umur" => "21",
            "kota" => "Bandung",
            "status" => "Belum Nikah Udah Kawin"
        ]);
        dump($orang->get('nama'));
        dump($orang->get('umur'));
        dump($orang->get('status'));

        dump($orang->has('umur'));

        $orangBaru = $orang->replace([
            "umur" => "25 Tahun",
            "kota" => "Cimahi"
        ]);
        dump($orangBaru);

        $orang->forget('nama');
        dump($orang);
        // dump($orang->get('gender', 'Ga ketemu'));
    }

    public function nestedArray()
    {
        $bikes = collect([
            ["constructor" => "Yamaha", "topSpeed" => 354],
            ["constructor" => "Suzuki", "topSpeed" => 356],
            ["constructor" => "Honda", "topSpeed" => 360],
            ["constructor" => "Ducati", "topSpeed" => 365],
            ["constructor" => "KTM", "topSpeed" => 362],
            ["constructor" => "Aprilia", "topSpeed" => 354],
        ]);

        dump($bikes->pluck('constructor'));
        dump($bikes->pluck('topSpeed'));
    }

    public function objectArray()
    {
    }
}
