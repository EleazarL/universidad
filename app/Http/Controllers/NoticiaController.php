<?php

namespace App\Http\Controllers;

use App\Models\Noticia;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\NoticiaRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class NoticiaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $noticias = Noticia::paginate();

        return view('noticia.index', compact('noticias'))
            ->with('i', ($request->input('page', 1) - 1) * $noticias->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $noticia = new Noticia();

        return view('noticia.create', compact('noticia'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(NoticiaRequest $request): RedirectResponse
    {
        Noticia::create($request->validated());

        return Redirect::route('noticias.index')
            ->with('success', 'Noticia created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $noticia = Noticia::find($id);

        return view('noticia.show', compact('noticia'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $noticia = Noticia::find($id);

        return view('noticia.edit', compact('noticia'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(NoticiaRequest $request, Noticia $noticia): RedirectResponse
    {
        $noticia->update($request->validated());

        return Redirect::route('noticias.index')
            ->with('success', 'Noticia updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        Noticia::find($id)->delete();

        return Redirect::route('noticias.index')
            ->with('success', 'Noticia deleted successfully');
    }
}
