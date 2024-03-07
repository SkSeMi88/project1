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



        // $managements = [
        //     ['name'=>'Управление экономики и финансов ЖКХ','is_entered'=>true, 'entered_at'=>'01.01.2020'],
        //     ['name'=>'Управление благоустройства и экологии','is_entered'=>true, 'entered_at'=>'01.01.2020'],
        //     ['name'=>'Управление жилищного хозяйства','is_entered'=>true, 'entered_at'=>'01.01.2020'],
        //     ['name'=>'Управление жилищного контроля и контроля в сфере благоустройства','is_entered'=>true, 'entered_at'=>'01.11.2020'],
        //     ['name'=>'Управление городского хозяйства','is_entered'=>true, 'entered_at'=>'01.11.2020'],
        //     ['name'=>'Управление дорожного хозяйства и транспорта','is_entered'=>true, 'entered_at'=>'01.11.2020'],
        //     ['name'=>'Управление бухгалтерского учета и отчетности','is_entered'=>true, 'entered_at'=>'01.11.2020'],
        //     ['name'=>'Финансовое управление','is_entered'=>true, 'entered_at'=>'01.11.2020'],
        //     ['name'=>'Управление экономики и инвестиционной политики','is_entered'=>true, 'entered_at'=>'01.01.2022'],
        //     ['name'=>'Управление финансов и экономики','is_entered'=>true, 'entered_at'=>'01.11.2020'],
        //     ['name'=>'Управление по вопросам семьи и детства','is_entered'=>true, 'entered_at'=>'01.11.2020'],
        //     ['name'=>'Управление культуры','is_entered'=>true, 'entered_at'=>'01.11.2020'],
        //     ['name'=>'Управление образования','is_entered'=>true, 'entered_at'=>'01.11.2020'],
        //     ['name'=>'Управление физической культуры, спорта и молодежной политики','is_entered'=>true, 'entered_at'=>'11.12.2023'],
        //     ['name'=>'Управление архитектуры и градостроительства','is_entered'=>true, 'entered_at'=>'01.11.2020'],
        //     ['name'=>'Управление земельных ресурсов','is_entered'=>true, 'entered_at'=>'01.11.2020'],
        //     ['name'=>'Управление по делам ГО ЧС','is_entered'=>true, 'entered_at'=>'01.11.2020'],
        //     ['name'=>'Нормативно-правовое управление','is_entered'=>true, 'entered_at'=>'01.11.2020'],
        //     ['name'=>'Информационно-аналитическое управление','is_entered'=>true, 'entered_at'=>'01.11.2020'],
        //     ['name'=>'Управление организационной работы','is_entered'=>true, 'entered_at'=>'01.11.2020'],
        //     ['name'=>'Управление кадров и муниципальной службы','is_entered'=>true, 'entered_at'=>'01.11.2020'],
        //     ['name'=>'Управление общественных связей','is_entered'=>true, 'entered_at'=>'01.11.2020'],
        // ];

        // foreach($managements as $management){
        //     DB::table('managements')->insert(
        //         $management
        //     );
        // };
    }
}
