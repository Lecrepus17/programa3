<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ProdutosController extends Controller
{
    public function index(Request $request){
        if ($request->isMethod('POST')){
            $ord = $request->ord == 'asc' ? 'asc' : 'desc';
            $busca = $request->busca;
            $prods = Produto::where('name', 'LIKE', "%{$busca}%")->orderBy('name', $ord)->paginate();
            return view('produtos.index', [
                'prods' => $prods,
            ]);
        } else {
        //$prods = Produto::all();
        $prods = Produto::paginate();
    }
        // $prods = Produto::withTrashed()->get(); ou $prods = Produto::onlyTrashed()->get();
        return view('produtos.index', [
            'prods' => $prods,
        ]);
}
    public function add(){
        return view('produtos.add');
    }
    public function addSave(Request $form, Produto $produto){
        $dados = $form->validate([
            'name' => ['required', Rule::unique('produtos'), 'min:3'],
            'price' => ['required', 'gte:0', 'numeric'],
            'quantity' => ['required', 'integer', 'gte:0']
        ]);

        Produto::create($dados);

        return redirect()->route('produtos')->with('sucesso', 'Produto inserido com sucesso!');
    }
    public function edit(Produto $produto){
        return view('produtos.add', [
            'prod' => $produto,
        ]);
    }
    public function editSave(Request $form, Produto $produto){
        $dados = $form->validate([
            'name' => ['required', Rule::unique('produtos')->ignore($produto['id']), 'min:3'],
            'price' => ['required', 'gte:0', 'numeric'],
            'quantity' => ['required', 'integer', 'gte:0']
        ]);

        $produto->fill($dados)->save();

        return redirect()->route('produtos')->with('sucesso', 'Produto alterado com sucesso!');;
    }
    public function view(Produto $produto){
        return view('produtos.view',[
            'prod' => $produto
        ]);
    }
    public function delete(Produto $produto){
        return view('produtos.delete', [
            'prod' => $produto,
        ]);
    }
    public function deletefORrEAL(Produto $produto){
        $produto->delete();
        return redirect()->route('produtos')->with('sucesso', 'Produto deletado com sucesso!');
    }
}
