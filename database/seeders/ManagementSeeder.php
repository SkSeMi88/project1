<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ManagementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $managements = [
            ['name'=>'Комитет жилищно-коммунального хозяйства','is_entered'=>true, 'entered_at'=>'01.01.2020'],
            ['name'=>'Комитет финансов','is_entered'=>true, 'entered_at'=>'01.01.2020'],
            ['name'=>'Комитет экономического развития','is_entered'=>true, 'entered_at'=>'01.11.2020'],
            ['name'=>'Комитет социального развития','is_entered'=>true, 'entered_at'=>'01.11.2020'],
            ['name'=>'Комитет градостроительства и землепользования','is_entered'=>true, 'entered_at'=>'01.11.2020'],
            ['name'=>'Аппарат','is_entered'=>true, 'entered_at'=>'01.11.2020'],
            ['name'=>'Глава Петрозаводского городского округа','is_entered'=>true, 'entered_at'=>'01.01.2020'],


        ];

        foreach($managements as $management){
            DB::table('managements')->insert(
                $management
            );
        };
    }
}
