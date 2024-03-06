<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $departments = [
            ['name'=>'Отдел экономики и тарифов','is_entered'=>true, 'entered_at'=>'01.01.2020'],
            ['name'=>'Отдел финансового обеспечения','is_entered'=>true, 'entered_at'=>'01.01.2020'],
            ['name'=>'Отдел учета и распределения жилья','is_entered'=>true, 'entered_at'=>'01.11.2020'],
            ['name'=>'Отдел инженерной инфраструктуры жилищного хозяйства','is_entered'=>true, 'entered_at'=>'01.11.2020'],
            ['name'=>'Отдел исполнения бюджета','is_entered'=>true, 'entered_at'=>'01.11.2020'],
            ['name'=>'Отдел внутреннего финансового контроля','is_entered'=>true, 'entered_at'=>'01.10.2022'],
            ['name'=>'Отдел доходов бюджета','is_entered'=>true, 'entered_at'=>'01.01.2022'],
            ['name'=>'Отдел финансов жилищно-коммунального хозяйства и строительства','is_entered'=>true, 'entered_at'=>'01.01.2022'],
            ['name'=>'Бюджетный отдел','is_entered'=>true, 'entered_at'=>'01.01.2022'],
            ['name'=>'Отдел финансов социальной сферы','is_entered'=>true, 'entered_at'=>'01.01.2022'],
            ['name'=>'Отдел распоряжения, управления и аренды муниципального имущества','is_entered'=>true, 'entered_at'=>'01.01.2022'],
            ['name'=>'Отдел финансового обеспечения','is_entered'=>true, 'entered_at'=>'01.01.2022'],
            ['name'=>'Отдел финансового обеспечения/Комитет градостроительства и землепользования','is_entered'=>true, 'entered_at'=>'01.11.2020'],
            ['name'=>'Архитектурно-планировочный отдел','is_entered'=>true, 'entered_at'=>'01.10.2022'],
            ['name'=>'Отдел обеспечения градостроительной деятельности','is_entered'=>true, 'entered_at'=>'01.10.2022'],
            ['name'=>'Отдел специальных программ','is_entered'=>true, 'entered_at'=>'01.11.2020'],
            ['name'=>'Отдел обеспечения деятельности Административной комиссии Петрозаводского городского округа','is_entered'=>true, 'entered_at'=>'01.11.2020'],
            ['name'=>'Отдел правового обеспечения','is_entered'=>true, 'entered_at'=>'01.11.2020'],
            ['name'=>'Отдел претензионно-исковой работы','is_entered'=>true, 'entered_at'=>'01.11.2020'],
            ['name'=>'Отдел финансового обеспечения Администрации','is_entered'=>true, 'entered_at'=>'01.11.2020'],
            ['name'=>'Организационный отдел','is_entered'=>true, 'entered_at'=>'01.11.2020'],
            ['name'=>'Отдел делопроизводства','is_entered'=>true, 'entered_at'=>'01.11.2020'],


        ];

        foreach($departments as $department){
            DB::table('departments')->insert(
                $department
            );
        };
    }
}
