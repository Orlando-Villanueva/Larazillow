<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Listing;
use Illuminate\Http\Request;

class ListingController extends Controller
{
    public function index()
    {
        return inertia(
            'Listing/Index',
            [
                'listings' => Listing::all()
            ]
        );
    }

    public function create()
    {
        return inertia('Listing/Create');
    }

    public function store(Request $request)
    {
        Listing::create($request->validate([
            'beds' => ['required', 'integer', 'max:20', 'min:0'],
            'baths' => ['required', 'integer', 'max:20', 'min:0'],
            'area' => ['required', 'integer', 'max:1500', 'min:15'],
            'city' => ['required', 'string', 'max:255'],
            'code' => ['required', 'string', 'max:255'],
            'street_number' => ['required', 'string', 'max:255', 'min:1'],
            'street' => ['required', 'string', 'max:255'],
            'price' => ['required', 'integer', 'max:200000000', 'min:1'],

        ])
        );

        return redirect()->route('listing.index')
            ->with('success', 'Listing created successfully.');
    }

    public function show(Listing $listing)
    {
        return inertia(
            'Listing/Show',
            [
                'listing' => $listing
            ]
        );
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
