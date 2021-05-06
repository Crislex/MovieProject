<?php

namespace App\Http\Controllers;

use App\Models\Alquiler;
use Illuminate\Http\Request;

/**
 * Class AlquilerController
 * @package App\Http\Controllers
 */
class AlquilerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $alquilers = Alquiler::paginate();

        return view('alquiler.index', compact('alquilers'))
            ->with('i', (request()->input('page', 1) - 1) * $alquilers->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $alquiler = new Alquiler();
        return view('alquiler.create', compact('alquiler'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Alquiler::$rules);

        $alquiler = Alquiler::create($request->all());

        return redirect()->route('alquilers.index')
            ->with('success', 'Alquiler created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $alquiler = Alquiler::find($id);

        return view('alquiler.show', compact('alquiler'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $alquiler = Alquiler::find($id);

        return view('alquiler.edit', compact('alquiler'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Alquiler $alquiler
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Alquiler $alquiler)
    {
        request()->validate(Alquiler::$rules);

        $alquiler->update($request->all());

        return redirect()->route('alquilers.index')
            ->with('success', 'Alquiler updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $alquiler = Alquiler::find($id)->delete();

        return redirect()->route('alquilers.index')
            ->with('success', 'Alquiler deleted successfully');
    }
}
