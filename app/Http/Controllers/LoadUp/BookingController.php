<?php

namespace App\Http\Controllers\LoadUp;

use App\Http\Controllers\Controller;
use App\Models\LoadUp\Service;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function index()
    {
        $services = Service::all();

        return view('loadUp/index');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([

            'service_id' => ['required', 'exists:services,id'],
            'pickup_address' => ['required', 'string'],
            'pickup_postcode' => ['required', 'string'],
            'pickup_date' => ['required', 'date'],
            'delivery_address' => ['nullable', 'string'],
            'delivery_postcode' => ['nullable', 'string'],
            'item_description' => ['nullable', 'string'],
            'item_size' => ['nullable', 'string'],
            'extra_fields' => ['nullable', 'array']
        ]);

        $booking = auth()->user()->bookings()->create($validated);

        return redirect('/');

    }


    public function removalsForm()
    {
        return view('loadUp.forms.removals');
    }

    public function recyclingForm()
    {
        return view('loadUp.forms.recycling');
    }

    public function additionalServiceForm()
    {
        return view('loadUp.forms.additional');
    }


}
