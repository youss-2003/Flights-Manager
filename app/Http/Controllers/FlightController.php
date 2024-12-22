<?php

namespace App\Http\Controllers;

use App\Models\Flight;
use Illuminate\Http\Request;

class FlightController extends Controller
{
    public function home()
    {
        $flights = Flight::all();
        return view("welcome",compact("flights"));
    }

    public function dashboard()
    {
        return view("dashboard");
    }
    public function store(Request $request)
    {
        // Validate the request
        $validatedData = $request->validate([
            'from_city' => 'required|string|max:255',
            'to_city' => 'required|string|max:255',
            'airline' => 'required|string|max:255',
            'imageAirline' => 'required|url',
            'cityimg' => 'required|url',
            'oldprice' => 'required|numeric',
            'newprice' => 'nullable|numeric',
            'percentage' => 'nullable|numeric',
            'departing_time' => 'required|date',
            'arriving_time' => 'required|date',
            'duration' => 'required|string|max:255',
            'has_wifi' => 'required|boolean',
            'is_direct' => 'required|boolean',
            'is_offer' => 'required|boolean',
            'showcase' => 'required|boolean',
        ]);

        // Create the flight with validated data
        Flight::create($validatedData);

        // Redirect back with success message
        return redirect()->back()->with('success', 'Flight added successfully!');
    }
    public function index()
{
    // Fetch all flights
    $flights = Flight::all();

    // Return the view with the compacted data
    return view('flights', compact('flights'));
}
public function offer()
{
    // Fetch all flights
    $flights = Flight::all();

    // Return the view with the compacted data
    return view('offers', compact('flights'));
}
public function supportpage()
{

    return view('support');
}
// Update flight page
public function edit($id)
{
    $flight = Flight::findOrFail($id);
    return view('update', compact('flight'));
}
// Update a flight
public function update(Request $request, $id)
{
    // Find the flight by ID
    $flight = Flight::find($id);

    if (!$flight) {
        return redirect()->back()->with('error', 'Flight not found.');
    }

    // Validate the request
    $validatedData = $request->validate([
        'from_city' => 'required|string|max:255',
        'to_city' => 'required|string|max:255',
        'airline' => 'required|string|max:255',
        'imageAirline' => 'required|url',
        'cityimg' => 'required|url',
        'oldprice' => 'required|numeric',
        'newprice' => 'nullable|numeric',
        'percentage' => 'nullable|numeric',
        'departing_time' => 'required|date',
        'arriving_time' => 'required|date',
        'duration' => 'required|string|max:255',
        'has_wifi' => 'required|boolean',
        'is_direct' => 'required|boolean',
        'is_offer' => 'required|boolean',
        'showcase' => 'required|boolean',
    ]);

    // Update the flight
    $flight->update($validatedData);

     return to_route('offer')->with('success', 'Flight updated successfully!');
}

// Delete a flight
public function destroy($id)
{
    // Find the flight by ID
    $flight = Flight::find($id);

    if (!$flight) {
        return redirect()->back()->with('error', 'Flight not found.');
    }

    // Delete the flight
    $flight->delete();

    return redirect()->back()->with('success', 'Flight deleted successfully!');
}
}
