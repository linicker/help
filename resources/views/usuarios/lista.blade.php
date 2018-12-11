@extends('layout')

@section('conteudo-principal')

<table class="table">
   <thead>
     <tr>
       <th>Id</th>
       <th>Nome</th>
       <th>Usuário</th>
       <th>Email</th>
       <th>Senha</th>
     </tr>
   </thead>
   <tbody>
     @foreach($usuarios as $usuario)
       <tr>
           <td> {{ $usuario->idusuario }} </td>
           <td> {{ $usuario->nome }} </td>
           <td> {{ $usuario->user }} </td>
           <td> {{ $usuario->email }} </td>
           <td> {{ $usuario->senha }} </td>
           <td>
             <a class="btn btn-outline-secondary" href="/editar-usuario/{{ $usuario->idusuario }}">
               <i class="fa fa-edit"></i> Editar
             </a>

             <form style="display: inline;" method="POST" action="excluir-usuario/{{ $usuario->idusuario }}">
               {!! method_field('DELETE') !!}
               {!! csrf_field() !!}
             <button type="submit" class="btn btn-outline-danger" href="/alterar-usuario/{{ $usuario->idusuario }}">
               <i class="fa fa-trash"></i> Deletar
             </button>
             </form>
           </td>
       </tr>
     @endforeach
   </tbody>
 </table>

 @stop