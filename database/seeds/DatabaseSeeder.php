<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     public function run()
    {
        DB::table('stats')->insert([
            'detail' => "Verifikasi berkas oleh SDM",
        ]);
        DB::table('stats')->insert([
            'detail' => "SDM upload data ke sistem SAP",
        ]);
        DB::table('stats')->insert([
            'detail' => "SDM approve claim di sistem SAP",
        ]);
        DB::table('stats')->insert([
            'detail' => "SDM submitted to financial di sistem SAP",
        ]);
        DB::table('stats')->insert([
            'detail' => "SDM print daftar rincian pembayaran restitusi",
        ]);
        DB::table('stats')->insert([
            'detail' => "Daftar rincian pembayaran disetujui oleh Asman PA Area dan Manager Area",
        ]);
        DB::table('stats')->insert([
            'detail' => "Daftar rincian pembayaran dikirim ke manager bidang keuangan melalui AMS",
        ]);
        DB::table('stats')->insert([
            'detail' => "Manager bidang keuangan disposisi AMS ke DM keuangan",
        ]);
        DB::table('stats')->insert([
            'detail' => "DM Keuangan disposisi AMS ke Spv.Pembayaran",
        ]);
        DB::table('stats')->insert([
            'detail' => "Spv.pembayaran disposisi AMS ke staf pembayaran",
        ]);
        DB::table('stats')->insert([
            'detail' => "Proses pembayaran dilakukan",
        ]);
    }
}
