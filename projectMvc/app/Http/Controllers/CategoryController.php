<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index(){
        $categories = Category::all();
        return view('categories.index', compact('categories'));
    }
    
    public function create(){
        return view ('categories.create');
    }

    public function store(Request $request){
        $category = new Category();

        $category->name = $request->name;
        $category->description = $request->description;

        $category->save();

        return redirect('categories')->with( 'msg', 'Categoria criada com sucesso!' );
    }

    public function destroy($id){
        Category::findOrFail($id)->delete();
        
        return redirect('/categories') -> with('msg', 'Caterogia excluída com sucesso');
    }
}
