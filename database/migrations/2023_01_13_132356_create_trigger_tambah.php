<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTriggerTambah extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared(
            'CREATE TRIGGER `tambah_stok`
            AFTER INSERT ON `obat_masuk` 
            FOR EACH ROW 
            BEGIN 
            UPDATE obat SET stok = stok + NEW.jumlah 
            WHERE obat.seri = NEW.obat_id; END'
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::unprepared('DROP TRIGGER `tambah_stok`');
    }
}
