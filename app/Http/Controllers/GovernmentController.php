<?php

namespace App\Http\Controllers;

use App\Models\Government;
use Illuminate\Http\Request;
use Illuminate\View\View;

class GovernmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        //     $posts = Government::query()
        //     ->where(column: 'active', operator: '=', value: 1)
        //    ->whereDate('created_at', '<' , \Carbon\Carbon::now());
        //     return view('user/job-offers-user', compact('posts'));
        $posts = Government::query('governments')
            ->where('active', 1)
            ->get();

        return view('user/job-offers-user', compact('posts'));

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
    public function show(Government $government)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Government $government)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Government $government)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Government $government)
    {
        //
    }
}
