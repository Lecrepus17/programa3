<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutosController extends Controller
{
    public function index(){
        $prods = Produto::all();
        return view('produtos.index', [
            'prods' => $prods,
        ]);
    }
    public function add(){
        return view('produtos.add');
    }
    public function addSave(Request $form){
        //  dd(Produto::create($form->toArray()));
        Produto::create($form->toArray());

        return redirect()->route('produtos');
    }
    public function view(){

    }
}
