<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Stats;
use DB;

class StatsController extends Controller
{
    /**
     * Display a listing and total sum of the resource.
     *
     * @group  Statistics Management

     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stats = Stats::with('state:id,name')->get();
        foreach($stats as $stat)
        {
            if($stat->state){
                $total_donations = DB::table("donations")
                    ->where("state",'like', "%{$stat->state->name}%")
                    ->get()
                //dd($total_donations, $stat);
                                ->sum("donation_amount");
                $stat->state->total_donations = $total_donations;
            }

        } 
        

        $confirmed = DB::table("stats")->get()->sum("confirmed_cases");

        $active = DB::table("stats")->get()->sum("active_cases");

        $recovery = DB::table("stats")->get()->sum("recovery");

        return response()
                    ->json([
                         "confirmed" => $confirmed , "active" => $active , "recovery" => $recovery ,"stats" => $stats,
                    ], 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     * 
     * @bodyParam  state_id integer required The state of the Statistic data.
     * @bodyParam  confirmed_cases integer required The confirmed_cases of the Statistic data.
     * @bodyParam  active_cases integer required The active_cases of the Statistic data.
     * @bodyParam  recovery integer required The recovery of the Statistic data.
     * @bodyParam  budgeted_spending string required The budgeted_spending of the Statistic data.
     * @bodyParam  actual_spending string required The actual_spending of the Statistic data.
     * 
     * @group  Statistics Management
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'state_id' => 'required|exists:states,id',
            'confirmed_cases' => 'required',
            'budgeted_spending' => 'required|string',
            'actual_spending' => 'required|string',
            'active_cases' => 'required',
            'recovery' => 'required',
        ]);
        $stats = new stats;
        $stats->state_id = $request->state_id;
        $stats->confirmed_cases = $request->confirmed_cases;
        $stats->active_cases = $request->active_cases;
        $stats->budgeted_spending = $request->budgeted_spending;
        $stats->actual_spending = $request->actual_spending;
        $stats->recovery = $request->recovery;
        $stats->save();

        return $stats;
    }

    /**
     * Display the specified resource.
     *
     * @queryParam  id required The id of the Statistics data.
     *
     * @group  Statistics Management
     * 
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Stats::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @queryParam  id required The id of the Statistics data.
     * @bodyParam  state_id integer required The state of the Statistic data.
     * @bodyParam  confirmed_cases integer required The confirmed_cases of the Statistic data.
     * @bodyParam  active_cases integer required The active_cases of the Statistic data.
     * @bodyParam  recovery integer required The recovery of the Statistic data.
     * @bodyParam  budgeted_spending string required The budgeted_spending of the Statistic data.
     * @bodyParam  actual_spending string required The actual_spending of the Statistic data.
     * 
     *
     * @group  Statistics Management
     * 
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'state_id' => 'required',
            'budgeted_spending' => 'required|string',
            'actual_spending' => 'required|string',
            'confirmed_cases' => 'required',
            'active_cases' => 'required',
            'recovery' => 'required',
        ]);

        $stats = Stats::find($id);
        $stats->state_id = $request->state_id;
        $stats->confirmed_cases = $request->confirmed_cases;
        $stats->budgeted_spending = $request->budgeted_spending;
        $stats->actual_spending = $request->actual_spending;
        $stats->active_cases = $request->active_cases;
        $stats->recovery = $request->recovery;

        $stats->save();

        return $stats;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @queryParam  id required The id of the Statistics data.
     *
     * @group  Statistics Management
     * 
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $stats = Stats::find($id);

        $stats->delete();

        return response()
            ->json(["message" => "State statistics deleted"]);
    }
}
