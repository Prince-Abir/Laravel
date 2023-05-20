<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        echo "Index";
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        echo "Create";
    }
    

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        echo "Store";
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        echo "Show";
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        echo "Edit";
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        echo "Update";
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        echo "Delete";
    }
}
