<?php

namespace App\Http\Controllers;
 use App\Catogory;
use Illuminate\Http\Request;

class CatogoryController extends Controller
{
    public function index() {
        $catogories = Catogory::all();
        return view('catogories.list', compact('catogories'));
    }
    public function create() {
        return view('catogories.create');
    }
    public function store(Request $request) {
        $catogory = new Catogory();
        $catogory->name = $request->input('name');
        $catogory->save();
        return redirect()->route('admin.post.index');
    }
    public function update(Request $request, $id) {
        $catogory = Catogory::findOrFail($id);
        $catogory->name = $request->input('name');
        $catogory->save();
        return redirect()->route('catogories.index');
    }
    public function edit($id){
        $catogory = Catogory::findOrFail($id);
        return view('catogories.edit', compact('catogory'));
    }
    public function destroy($id) {
        $catogory = Catogory::findOrFail($id);
        $catogory->posts->delete();
        $catogory->delete();
        return redirect()->route('catogories.index');
    }
    public function list()
    {
        $catogory = new Catogory();
        return redirect()->route('catogories.index', compact($catogory));
    }
}
