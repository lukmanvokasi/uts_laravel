<?php

use Illuminate\Database\Seeder;
use App\Barang;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        for($i = 0; $i < 10; $i++) {
        	Barang::create([
        		"nama" => "Kopi " .($i+1),
        		"harga" => "Rp " .(time()/1000000000 + $i + 1000),
        		"stok" => 1000 
         
        	]);
        }
    }
}
