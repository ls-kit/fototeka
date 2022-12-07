<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\TermsAndConditions;
use Illuminate\Http\Request;

class TermsAndConditionsController extends Controller
{
    public function index()
    {
        $data['terms'] = TermsAndConditions::first();

        return view('admin.terms-and-conditions.index', $data);
    }

    public function update(Request $request)
    {
        TermsAndConditions::updateOrCreate(
            ['id' => 1],
            ['description' => $request->description]
        );

        return redirect()->back()->with('success', 'Terms and Conditions page updated successfully!');
    }
}
