<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Carbon;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {

        $date = now();

        $birthday = User::whereMonth('birthday', '>', $date->month)

            ->orWhere(function ($query) use ($date) {

                $query->whereMonth('birthday', '=', $date->month)

                    ->whereDay('birthday', '>=', $date->day);
            })

            ->orderByRaw("DAYOFMONTH('birthday')", "ASC")

            ->take(3)

            ->get();



        return view('user.birthdays.index', compact('birthday'));
    }
}
