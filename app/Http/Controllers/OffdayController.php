<?php

namespace App\Http\Controllers;

use App\Models\offday;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Carbon;

class OffdayController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (auth()->user()->id) {
            $offdays = User::find(auth()->user()->id)->first();
            // dd($offdays);
            return view("user.offdays.create",compact("offdays"));
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("user.offdays.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)

    {
        if (($request->holiday_type == "sick") && ($request->no_of_days <= 7)) {

            if (offday::where('user_id', auth()->user()->id)) {
                $daysoff = new offday();
                $daysoff->user_id = auth()->user()->id;
                $daysoff->holiday_type = $request->holiday_type;
                $daysoff->date = $request->date;
                $daysoff->no_of_days = $request->no_of_days;
                $daysoff->reason = $request->reason;
                $daysoff->save();
            }
            return redirect('offdays')->with(['status' => 'your request is under review']);
        } elseif ((($request->holiday_type == "vacation") && ($request->no_of_days <= 7))) {

            if (offday::where('user_id', auth()->user()->id)) {
                $daysoff = new offday();
                $daysoff->user_id = auth()->user()->id;
                $daysoff->holiday_type = $request->holiday_type;
                $daysoff->date = $request->date;
                $daysoff->no_of_days = $request->no_of_days;
                $daysoff->reason = $request->reason;
                $daysoff->save();
            }
            return redirect('offdays')->with(['status' => 'your request is under review']);
        } elseif ((($request->holiday_type == "work") && ($request->no_of_days <= 7))) {

            if (offday::where('user_id', auth()->user()->id)) {
                $daysoff = new offday();
                $daysoff->user_id = auth()->user()->id;
                $daysoff->holiday_type = $request->holiday_type;
                $daysoff->date = $request->date;
                $daysoff->no_of_days = $request->no_of_days;
                $daysoff->reason = $request->reason;
                $daysoff->save();
            }
            return redirect('offdays')->with(['status' => 'your request is under review']);
        } else {
            return redirect('offdays')->with(['wrong' => 'you have exceeded the amount of availabe leaves.']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\offday  $offday
     * @return \Illuminate\Http\Response
     */
    public function show(offday $offday)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\offday  $offday
     * @return \Illuminate\Http\Response
     */
    public function edit(offday $offday)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\offday  $offday
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, offday $offday)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\offday  $offday
     * @return \Illuminate\Http\Response
     */
    public function destroy(offday $offday)
    {
        //
    }
}
