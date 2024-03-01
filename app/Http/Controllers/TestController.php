<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

use Illuminate\View\View;

use Illuminate\Support\Str;


class TestController extends Controller
{
    //
    /**
     * Display the user's profile form.
     */
    public function index(Request $request)
    {


        $KIVS   = config('kivs.KIVS');

        print_r($KIVS);

        $users = [
            "Скваж Сергей Михайлович",
            "Васильев Сергей Дмитриевич",
            "Алешин Александр Сергеевич",
            "Бабич Владимир Владимирович",
            "Сивко Лиана Зурабовна",
            "Матюшина Лилия Васильевна"
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

    }

}
