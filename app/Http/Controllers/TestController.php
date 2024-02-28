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

        $users = [
            "Скваж Сергей Михайлович",
            "Васильев Сергей Дмитриевич",
            "Алёшин Александр Сергеевич",
            "Бабич Владимир Владимирович",
            "Сивко Лиана Зурабовна",
            "Матюшина Лилия Васильевна"
        ];

        $users_lat  = [];
        $fname_lat  = [];
        $name_lat   = [];
        $sname_lat  = [];


        foreach ($users as $user) {
            # code...
            echo "<br>";
            print_r($user);
        }
    }
}
