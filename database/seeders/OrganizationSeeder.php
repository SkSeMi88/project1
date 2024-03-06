<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;



class OrganizationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        $orgs = [
            ['name'=>'АПГО','inn'=>'1001040505', 'is_actived'=>true, 'actived_at'=>'01.01.2020'],
            ['name'=>'МКУ "УКС Г.ПЕТРОЗАВОДСКА"','inn'=>'1001342721', 'is_actived'=>true, 'actived_at'=>'01.01.2020'],
            ['name'=>'МКУ "ЦБО"','inn'=>'1001345850', 'is_actived'=>true, 'actived_at'=>'01.01.2020'],
            ['name'=>'МКУ ЦУИ','inn'=>'1001012280', 'is_actived'=>true, 'actived_at'=>'01.01.2020'],
            ['name'=>'МКУ "ЕДДС"','inn'=>'1001043150', 'is_actived'=>true, 'actived_at'=>'01.01.2020'],
            ['name'=>'МКУ "МАП"','inn'=>'1001015450', 'is_actived'=>true, 'actived_at'=>'01.01.2020'],
            ['name'=>'МКУ "Петроснаб"','inn'=>'1001235134', 'is_actived'=>true, 'actived_at'=>'01.01.2020'],
            ['name'=>'МКУ "Ритуал"','inn'=>'1001253013', 'is_actived'=>true, 'actived_at'=>'01.01.2020'],
            ['name'=>'МКУ "Служба заказчика"','inn'=>'1001033191', 'is_actived'=>true, 'actived_at'=>'01.01.2020'],
            ['name'=>'МУ "ЖКХ"','inn'=>'1001357164', 'is_actived'=>true, 'actived_at'=>'01.01.2020'],
            ['name'=>'МУ "ХЭС"','inn'=>'1001043048', 'is_actived'=>true, 'actived_at'=>'01.01.2020'],
        ];


        foreach($orgs as $org){
            DB::table('organizations')->insert(
                $org
            );
        };
    }
}
