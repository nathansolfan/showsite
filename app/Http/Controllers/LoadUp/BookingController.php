<?php

namespace App\Http\Controllers\LoadUp;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BookingController extends Controller
{
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
