<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ImportTableTest extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sql = base_path('technical_test.sql');
        DB::unprepared(file_get_contents($sql));
        $this->command->info('Import Table Berhasil!');

    }
}
