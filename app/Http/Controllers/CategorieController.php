<?php

namespace App\Http\Controllers;

use App\Categorie;
use Illuminate\Http\Request;

class CategorieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Categorie::paginate(5);

        return view('contents.categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('contents.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name'      => 'required|string|max:100',
            'price'     => 'required',
            'manfaat'   => 'required',
        ]);

        $categories = Categorie::create([
            'name'   => $request->input('name'),
            'price'  => $request->input('price'),
            'manfaat'=> $request->input('manfaat'),
        ]);

        $categories->save();

        flash()->success('Horay new categorie success add');

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Categorie $categories, $id)
    {
        $categories = Categorie::find($id);
        return view('contents.categories.edit', compact('categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Categorie $categorie)
    {
        $this->validate($request, [
            'name'      => 'required',
            'price'     => 'required',
        ]);

        $categorie->update($request->all());

        flash()->success('Horay update categorie success.');

        return redirect()->back();
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Categorie $categories, $id)
    {
        $categories = Categorie::find($id);
        $categories->delete();

        flash()->success('Kenapa kau hapus aku apa salah ku kepada mu.');

        return redirect()->route('categories.index');
    }
}
