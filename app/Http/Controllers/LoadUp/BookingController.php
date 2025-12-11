<?php

namespace App\Http\Controllers\LoadUp;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BookingController extends Controller
{

    public function store(Request $request)
    {
        $validated = $request->validate([
            'service_id' => ['required', 'exists:services,id'],
            'pickup_address' => ['required', 'string'],
            'pickup_postcode' => ['required', 'string'],
            'delivery_address' => ['nullable', 'string'],
            'delivery_postcode' => ['nullable', 'string'],
            'item_description' => ['nullable', 'string'],
            'item_size' => ['nullable', 'string'],
        ]);
        $booking = auth()->user()->bookings()->create([
            ...$validated,
            'extra_fields' => $request->except([
                'service_id',
                'pickup_address',
                'pickup_postcode',
                'pickup_date',
                'delivery_address',
                'delivery_postcode',
                'item_description',
                'item_size'
            ])
        ]);

    }


    public function removalsForm()
    {
        return view('loadUp.forms.removals');
    }

    public function recyclingForm()
    {
        return view('loadUp.forms.recycling');
    }

    public function smallMovesForm()
    {
        return view('loadUp.forms.moves');
    }

    public function additionalServiceForm()
    {
        return view('loadUp.forms.additional');
    }


}
