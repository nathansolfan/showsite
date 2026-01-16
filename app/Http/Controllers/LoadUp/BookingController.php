<?php

namespace App\Http\Controllers\LoadUp;

use App\Http\Controllers\Controller;
use App\Models\LoadUp\Booking;
use App\Models\LoadUp\Service;
use App\Services\BookingServiceConfig;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function index()
    {
        $services = Service::all();

        return view('loadUp.index');
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
        
        return redirect('/loadup/bookings');
    }

    public function bookings()
    {
        $user = auth()->user();

        if ($user && $user->id === 1) {
            $bookings = Booking::all();
        } else {
            $bookings = $user->bookings()->latest()->get();
        }

        return view('loadUp.bookings', ['bookings' => $bookings]);
    }

    public function show(Request $request, $id)
    {
        $booking = Booking::findOrFail($id);
        return view('loadUp.show', ['booking' => $booking]);
    }

    public function edit(Booking $booking)
    {
        $service = $booking->service;
        $fields = BookingServiceConfig::getFieldsForService($service->name);
        return view('loadUp.edit', [
            'booking' => $booking,
            'service' => $service,
            'fields' => $fields
        ]);
    }

    public function update(Booking $booking, Request $request)
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
        $booking->update($validated);

        return redirect('/loadup/show/' . $booking->id);
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

    public function destroy(Booking $booking)
    {
        $booking->delete();
        return redirect('/loadup/bookings');
    }
}
