<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateTrigger extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared(
            'CREATE TRIGGER `kurang_stok`
            AFTER INSERT ON `obat_keluar` 
            FOR EACH ROW 
            BEGIN 
            UPDATE obat SET stok = stok - NEW.jumlah 
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
        DB::unprepared('DROP TRIGGER `kurang_stok`');
    }
}
