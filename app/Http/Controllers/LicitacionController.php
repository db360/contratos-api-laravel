<?php

namespace App\Http\Controllers;

use App\Models\Licitacion;
use Illuminate\Http\Request;

class LicitacionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $query = Licitacion::query();


        $sortField = request('sort_field', 'created_at');
        $sortDirection = request('sort_direction', 'asc');

        $licitaciones = $query->orderBy($sortField, $sortDirection)->paginate(20);

        return response()->json(['projects' => $licitaciones], 200);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Licitacion $licitacion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Licitacion $licitacion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Licitacion $licitacion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Licitacion $licitacion)
    {
        //
    }
}
