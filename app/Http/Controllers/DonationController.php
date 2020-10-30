<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Donation;

class DonationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * 
     * @queryParam  state string State ID. Example lagos 
     * @queryParam  count int The number of records to return. Example 10
     * 
     *  @group  Donation Management
     * 
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $validator = \Validator::make([
            "state" => $request->state ?? null,
            "count" => $count ?? null
        ], [
            'state' => 'nullable|string',
            'count' => 'nullable|integer',
        ]);
        if ($validator->fails()) {
            return response()
                ->json(["errors" => $validator->errors()], 400);
        }
        $count = isset($request->count) ? $request->count : 10;
        $state = $request->state;

        if ($state) {
            $donations = Donation::where('state', $state)->paginate($count);
            return response()->json($donations);
        }

        // No query string is provided, so
        // let's return all donations data. 

        $donations = Donation::paginate($count);
        return $donations;
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
     *  @bodyParam  state string required The state of the Donation data.
     * @bodyParam  donor_name string required The donor_name of the Donation data.
     * @bodyParam  donation_details string required The donation_details of the Donation data.
     * @bodyParam  donation_type string required The donation_type of the Donation data.
     * @bodyParam  donation_amount string required The donation_amount of the Donation data.
     * @bodyParam  source string required The source of the Donation data.
     *
     * @group  Donation Management
     * 
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'state' => 'required',
            'donor_name' => 'required',
            'donation_details' => 'required',
            'donation_type' => 'required',
            'donation_amount' => 'required',
            'date' => 'required|date_format:Y-m-d',
            'source' => 'required',
        ]);
        $date = \Carbon\Carbon::createFromFormat("Y-m-d", $request->date);
        $donation = new donation;
        $donation->state = $request->state;
        $donation->donor_name = $request->donor_name;
        $donation->donation_details = $request->donation_details;
        $donation->donation_type = $request->donation_type;
        $donation->donation_amount = $request->donation_amount;
        $donation->date = $request->date;
        $donation->source = $request->source;
        $donation->save();

        return $donation;
    }

    /**
     * Display the specified resource.
     * 
     * @queryParam  id required The id of the Donation data.
     *
     * @group  Donation Management
     * 
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Donation::find($id);
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
     *  @queryParam  id required The id of the Donation data.
     *  @bodyParam  state string required The state of the Donation data.
     * @bodyParam  donor_name string required The donor_name of the Donation data.
     * @bodyParam  donation_details string required The donation_details of the Donation data.
     * @bodyParam  donation_type string required The donation_type of the Donation data.
     * @bodyParam  donation_amount string required The donation_amount of the Donation data.
     * @bodyParam  source string required The source of the Donation data.
     *
     * @group  Donation Management
     * 
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $donation = Donation::find($id);
        $donation->state = $request->state;
        $donation->donor_name = $request->donor_name;
        $donation->donation_details = $request->donation_details;
        $donation->donation_type = $request->donation_type;
        $donation->donation_amount = $request->donation_amount;
        $donation->source = $request->source;

        $donation->save();

        return $donation;
    }

    /**
     * Remove the specified resource from storage.
     *
     *  @queryParam  id required The id of the Donation data.
     * 
     *   @group  Donation Management
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $donation = Donation::find($id);

        $donation->delete();

        return response()
            ->json(["message" => "Donation deleted"]);
    }
}
