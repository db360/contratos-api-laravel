<?php

namespace App\Http\Controllers;

use App\Models\ContratoMenor;
use Illuminate\Http\Request;

class ContratoMenorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $query = ContratoMenor::query();


        $sortField = request('sort_field', 'created_at');
        $sortDirection = request('sort_direction', 'asc');

        $contratosMenores = $query->orderBy($sortField, $sortDirection)->paginate(20);

        return response()->json(['contratos_menores' => $contratosMenores], 200);
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
    public function show(ContratoMenor $contratoMenor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ContratoMenor $contratoMenor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ContratoMenor $contratoMenor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ContratoMenor $contratoMenor)
    {
        //
    }
}
