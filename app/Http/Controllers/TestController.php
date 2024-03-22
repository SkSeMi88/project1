<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Models\User;

use Illuminate\View\View;

use Illuminate\Support\Str;

use App\Models\Position;

use App\Models\Organization;
use App\Models\Kommittee;
use App\Models\Manager;
use App\Models\Department;


class TestController extends Controller
{
    //
    /**
     * Display the user's profile form.
     */
    public function index(Request $request)
    {


        $KIVS   = config('kivs.KIVS');

        // print_r($KIVS);

        $users = [
            // "Скваж Сергей Михайлович",
            // "Васильев Сергей Дмитриевич",
            // "Алешин Александр Сергеевич",
            // "Бабич Владимир Владимирович",
            // "Сивко Лиана Зурабовна",
            // "Матюшина Лилия Васильевна"
        ];


        foreach($users as $user) {

            echo "<br>",$user;

            $tmp    = explode(" ", $user);
            $fname  = $tmp[0];
            $name   = $tmp[1];
            $sname  = $tmp[2];

            // foreach (mb_str_split($user) as $char)
            //     echo "  >",$KIVS[$char];
            // }

            // print_r($tmp);
            $fname_lat = "";
            // for($i=0; $i<strlen($fname); $i++){
            foreach (mb_str_split($fname) as $char){
                $fname_lat .= $KIVS[$char];
                // echo "  ",$char;
            }

            $name_lat = "";
            // for($i=0; $i<strlen($name); $i++){
            foreach (mb_str_split($name) as $char){
                $name_lat .= $KIVS[$char];
            }

            $sname_lat = "";
            foreach (mb_str_split($sname) as $char){
                $sname_lat .= $KIVS[$char];
            }

            $fname_lat  = Str::lower($fname_lat);
            $name_lat   = Str::lower($name_lat);
            $sname_lat  = Str::lower($sname_lat);

            echo "<br>",$fname_lat, $name_lat, $sname_lat;
            // $users_lat  = [];
            // $fname_lat  = [];
            // $name_lat   = [];
            // $sname_lat  = [];

            $login          = $fname_lat."".Str::of($name_lat)->charAt(0)."".Str::of($sname_lat)->charAt(0);
            $email_login    = $name_lat.".".$fname_lat."";
            $email          = $name_lat.".".$fname_lat."@petrozavodsk-mo.ru";
            echo "<br>", $login;
            echo "<br>", $email;
            echo "<br>", $email_login;


        }


        $orgs  = Organization::all();
        // dump($orgs->toArray());
        foreach ($orgs AS $org){
            // dump($position['attributes']);
            // dump($org->toArray());
        }
        $kommittees  = Kommittee::all();
        foreach ($kommittees AS $kommittee){
            // dump($position['attributes']);
            // dump($kommittee->toArray());
        }
        $managers  = Manager::all();
        foreach ($managers AS $manager){
            // dump($position['attributes']);
            // dump($manager->toArray());
        }
        $departments  = Department::all();
        foreach ($departments AS $department){
            // dump($position['attributes']);
            // dump($department->toArray());
        }

        $positions  = Position::all()->toArray();
        // dump($positions);

        return(view('kivs.create',['orgs'=>$orgs,'kommittees'=>$kommittees,'managers'=>$managers,'departments'=>$departments,'positions'=>$positions,]));
        // return(view('kivs.test'));
    }

    //
    /**
     * Display the user's profile form.
     */
    public function store(Request $request)
    {
        echo "Получена форма создания пользователя";
        $validated = validator($request->all(),[
            'fname' => ['required', 'string', 'max:100'],
            'name' => ['required', 'string', 'max:100'],
            'sname' => ['required', 'string', 'max:100'],

        ])->validate();

        dd($validated);
        //dump($request);
        // $guarded = [];
        // $validated = $request->validate([
        //     'org'       => ['required', 'string', 'max:256'],
        //     'committee' => ['required', 'string', 'max:256'],
        //     'manager'   => ['required', 'string', 'max:256'],
        //     'depart'    => ['required', 'string', 'max:256'],
        // ]);
        // dump($validated);
    }
    public function store2(Request $request)
    {
        echo "Получена форма создания пользователя";
        dump($request);
        // $guarded = [];
        // $validated = $request->validate([
        //     'org'       => ['required', 'string', 'max:256'],
        //     'committee' => ['required', 'string', 'max:256'],
        //     'manager'   => ['required', 'string', 'max:256'],
        //     'depart'    => ['required', 'string', 'max:256'],
        // ]);
        // dump($validated);
    }

}
