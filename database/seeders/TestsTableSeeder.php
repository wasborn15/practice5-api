<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TestsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tests')->truncate();

        $num = 3;

        $tests = [];
        for ($i = 1; $i <= $num; $i++) {
            $tests[] = [
                'title' => 'タイトル' . str_pad($i, 3, '0', STR_PAD_LEFT),
                'body' => 'ボディ' . str_pad($i, 3, '0', STR_PAD_LEFT),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ];
        }

        DB::table('tests')->insert($tests);
    }
}
