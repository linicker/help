<?php

namespace App\Http\Controllers;

use App\Usuario;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      return view('usuarios.lista');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function formCadastro()
     {
       return view('usuarios.cadastro');
     }

    public function cadastraUsuarios(Request $requisicao)
    {
      Usuario::create([
        'nome' => $requisicao->get('nome'),
        'email' => $requisicao->get('email'),
        'user' => $requisicao->get('user'),
        'senha' => $requisicao->get('senha')
      ]);
      return redirect('/');
    }


    public function listaUsuarios(Request $requisicao)
    {
      $usuarios = Usuario::select('*');

      if($requisicao->has('pesquisa')) {
        $usuarios->where('user', 'like', '%' . $requisicao->get('pesquisa') . '%');
        $usuarios->Orwhere('user', 'like', '%' . $requisicao->get('pesquisa') . '%');
      }

      $usuarios->orderBy('user', 'asc');
      $listausuarios = $usuarios->get();

      return view('usuarios.lista', [
        'usuarios' => $listausuarios,
      ]);
    }

    public function editaUsuario($id)
    {
      $usuarios = Usuario::find($id);

      return view('usuarios.editar',[
        'usuarios' => $usuarios,
      ]);
    }

    public function alteraUsuario($id, Request $requisicao)
    {
      $usuarios = Usuario::find($id);
      $usuarios->update([
        'nome' => $requisicao->get('nome'),
        'email' => $requisicao->get('email'),
        'user' => $requisicao->get('user'),
        'senha' => $requisicao->get('senha')
      ]);

      return redirect('listar-usuarios');
    }


    public function detalhe($id)
    {
      $usuarios = Usuario::find($id);

      return view('usuarios.detalhe',[
        'usuarios' => $usuarios,
      ]);
    }


    public function excluirUsuario($id)
    {
      Usuario::destroy($id);

      return redirect('listar-usuarios');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $requisicao)
    {
        $this->validate($requisicao,[
          'user' => 'required|max:12',
          ] , [
          'user.required' => 'No máximo até 12 caracteres',

          // mensagem personalizada de erros
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Usuario  $Usuario
     * @return \Illuminate\Http\Response
     */
    public function show(Usuario $usuario)
    {
        //
    }

}
