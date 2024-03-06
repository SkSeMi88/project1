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
            ['name'=>'Управление экономики и финансов ЖКХ','is_entered'=>true, 'entered_at'=>'01.01.2020'],
            ['name'=>'Управление благоустройства и экологии','is_entered'=>true, 'entered_at'=>'01.01.2020'],
            ['name'=>'Управление жилищного хозяйства','is_entered'=>true, 'entered_at'=>'01.01.2020'],
            ['name'=>'Управление жилищного контроля и контроля в сфере благоустройства','is_entered'=>true, 'entered_at'=>'01.11.2020'],
            ['name'=>'Управление городского хозяйства','is_entered'=>true, 'entered_at'=>'01.11.2020'],
            ['name'=>'Управление дорожного хозяйства и транспорта','is_entered'=>true, 'entered_at'=>'01.11.2020'],
            ['name'=>'Управление бухгалтерского учета и отчетности','is_entered'=>true, 'entered_at'=>'01.11.2020'],
            ['name'=>'Финансовое управление','is_entered'=>true, 'entered_at'=>'01.11.2020'],
            ['name'=>'Управление экономики и инвестиционной политики','is_entered'=>true, 'entered_at'=>'01.01.2022'],
            ['name'=>'Управление финансов и экономики','is_entered'=>true, 'entered_at'=>'01.11.2020'],
            ['name'=>'Управление по вопросам семьи и детства','is_entered'=>true, 'entered_at'=>'01.11.2020'],
            ['name'=>'Управление культуры','is_entered'=>true, 'entered_at'=>'01.11.2020'],
            ['name'=>'Управление образования','is_entered'=>true, 'entered_at'=>'01.11.2020'],
            ['name'=>'Управление физической культуры, спорта и молодежной политики','is_entered'=>true, 'entered_at'=>'11.12.2023'],
            ['name'=>'Управление архитектуры и градостроительства','is_entered'=>true, 'entered_at'=>'01.11.2020'],
            ['name'=>'Управление земельных ресурсов/Комитет градостроительства и землепользования','is_entered'=>true, 'entered_at'=>'01.11.2020'],
            ['name'=>'Управление по делам ГО ЧС','is_entered'=>true, 'entered_at'=>'01.11.2020'],
            ['name'=>'Нормативно-правовое управление','is_entered'=>true, 'entered_at'=>'01.11.2020'],
            ['name'=>'Информационно-аналитическое управление','is_entered'=>true, 'entered_at'=>'01.11.2020'],
            ['name'=>'Управление организационной работы','is_entered'=>true, 'entered_at'=>'01.11.2020'],
            ['name'=>'Управление кадров и муниципальной службы','is_entered'=>true, 'entered_at'=>'01.11.2020'],
            ['name'=>'Управление общественных связей','is_entered'=>true, 'entered_at'=>'01.11.2020'],
        ];

        foreach($managements as $management){
            DB::table('managements')->insert(
                $management
            );
        };
    }
}
