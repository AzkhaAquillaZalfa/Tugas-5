<?php

namespace App\Http\Controllers;

use App\Models\Biodata;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class BiodataController extends Controller
{
    public function show(): View
    {
        return view('biodata.home', ['biodata' => Biodata::profile()]);
    }

    public function edit(): View
    {
        return view('biodata.admin', ['biodata' => Biodata::profile()]);
    }

    public function update(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'welcome_message' => ['required', 'string', 'max:255'],
            'name' => ['required', 'string', 'max:100'],
            'nickname' => ['nullable', 'string', 'max:50'],
            'birth_place' => ['nullable', 'string', 'max:100'],
            'birth_date' => ['nullable', 'date'],
            'address' => ['nullable', 'string', 'max:500'],
            'email' => ['nullable', 'email', 'max:255'],
            'phone' => ['nullable', 'string', 'max:30'],
            'education' => ['nullable', 'string', 'max:150'],
            'hobby' => ['nullable', 'string', 'max:150'],
            'about' => ['nullable', 'string', 'max:2000'],
        ]);

        Biodata::profile()->update($validated);

        return to_route('admin.biodata.edit')->with('status', 'Biodata berhasil diperbarui.');
    }
}
