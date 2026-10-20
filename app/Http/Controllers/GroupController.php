<?php

namespace App\Http\Controllers;

use App\Models\Group;
use Illuminate\Http\Request;

class GroupController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'birth_year' => ['nullable', 'integer', 'min:1990', 'max:' . date('Y')],
            'description' => ['nullable', 'string', 'max:255'],
        ]);

        Group::create($validated);

        return redirect()
            ->route('home')
            ->with('success', 'Grup başarıyla oluşturuldu.');
    }
}
