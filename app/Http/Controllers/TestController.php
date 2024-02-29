<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

use Illuminate\View\View;


class TestController extends Controller
{
    //
    /**
     * Display the user's profile form.
     */
    public function index(Request $request)
    {

        // $user = User::find(1);
        // return view('test', [
        //     'user' => $user,
        // ]);

        $KIVS   = config('kivs.KIVS');

        print_r($KIVS);
        $users = [
            "Скваж Сергей Михайлович",
            "Васильев Сергей Дмитриевич",
            "Алёшин Александр Сергеевич",
            "Бабич Владимир Владимирович",
            "Сивко Лиана Зурабовна",
            "Матюшина Лилия Васильевна"
        ];


        foreach ($users as $user) {
            # code...
            echo "<br>";
            print_r($user);
            $tmp = explode(" ", $user);
            $fname      = $tmp[0];
            $name       = $tmp[1];
            $sname      = $tmp[2];


            print_r($tmp);
            $fname_lat = "";
            for($i=0; $i<strlen($fname); $i++){
                // $fname_lat .= $KIVS[$fname[$i]];
                print("  ");
                print_r($fname[$i]);
                // print_r($KIVS[$fname[$i]]);
            }

            /*
            $name_lat = "";
            for($i=0; $i<strlen($name); $i++){
                $name_lat .= $KIVS[$name[$i]];
            }

            $aname_lat = "";
            for($i=0; $i<strlen($sname); $i++){
                $aname_lat .= $KIVS[$sname[$i]];
            }

            print_r($fname, $name, $sname);
            // $users_lat  = [];
            // $fname_lat  = [];
            // $name_lat   = [];
            // $sname_lat  = [];
*/

        }
    }
}
