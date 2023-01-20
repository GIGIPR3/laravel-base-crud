<?php

namespace App\Http\Controllers;

use App\Model\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /* $comic = Comic::all(); */
        $comic = Comic::paginate(4);

        $data = [

            'comic' => $comic
        ];

        /* dd($data); */

        return view('pages.fumetti.index', $data );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.fumetti.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $new_record = new Comic();
        $new_record->title = $data['title'];
        $new_record->description = $data['description'];
        $new_record->price = $data['price'];
        $new_record->sale_date = $data['sale_date'];
        $new_record->save();

        return redirect()->route('fumetti.index', ['id' => $new_record->id]);


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        /* dd($id); */

        $elem = Comic::findOrFail($id);
        /* dd($elem); */
        return view('pages.fumetti.show', compact('elem'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $comic = Comic::findOrFail($id);

        return view('pages.fumetti.edit', compact('comic'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->all();
        $comic = Comic::findOrFail($id);
        $request->validate(
            [
                'title' => 'required|max:50'
            ],
            [
                'title.required' => 'Attenzione il campo title è obbligatorio',
                'title.max' => 'Attenzione il campo non deve superare i 50 caratteri'
            ]
            );
            $comic->update($data);

            return redirect()->route('fumetti.index');/* ->with('success',"Hai modificato con sccesso: $elem->title"); */
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $comic = Comic::findOrFail($id);
        $comic->delete(); //si prende la variabile $comic e si da la funzione delete() che è una funzione pre impostata di laravel

        return redirect()-> route('fumetti.index')->with('success', "Hai cancellato con successo: $comic->title");
    }
}
