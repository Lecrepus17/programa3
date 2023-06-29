<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UsuariosController extends Controller
{
        public function index(Request $request){
        if ($request->isMethod('POST')){
            $ord = $request->ord == 'asc' ? 'asc' : 'desc';
            $busca = $request->busca;
            $users = Usuario::where('name', 'LIKE', "%{$busca}%")->orderBy('name', $ord)->paginate();
            return view('usuarios.index', [
                'users' => $users,
            ]);
        } else {
        //$users = Usuario::all();
        $users = Usuario::paginate();
    }
        // $users = Usuario::withTrashed()->get(); ou $users = Usuario::onlyTrashed()->get();
        return view('usuarios.index', [
            'users' => $users,
        ]);
}
    public function add(){
        return view('usuarios.add');
    }
    public function addSave(Request $form, Usuario $Usuario){
        $dados['password'] = bcrypt($form->password);
        $dados = $form->validate([
            'name' => ['required'],
            'email' => ['required', Rule::unique('usuarios')],
            'password' => ['required']
        ]);

        Usuario::create($dados);

        return redirect()->route('usuarios')->with('sucesso', 'Usuario inserido com sucesso!');
    }
    public function edit(Usuario $Usuario){
        return view('usuarios.add', [
            'user' => $Usuario,
        ]);
    }
    public function editSave(Request $form, Usuario $Usuario){
        $dados['password'] = bcrypt($form->password);
        $dados = $form->validate([
            'name' => ['required'],
            'email' => ['required', Rule::unique('usuarios')->ignore($Usuario['id'])],
            'password' => ['required']
        ]);


        $Usuario->fill($dados)->save();

        return redirect()->route('usuarios')->with('sucesso', 'Usuario alterado com sucesso!');;
    }
    public function view(Usuario $Usuario){
        return view('usuarios.view',[
            'user' => $Usuario
        ]);
    }
    public function delete(Usuario $Usuario){
        return view('usuarios.delete', [
            'user' => $Usuario,
        ]);
    }
    public function deletefORrEAL(Usuario $Usuario){
        $Usuario->delete();
        return redirect()->route('usuarios')->with('sucesso', 'Usuario deletado com sucesso!');
    }
}
