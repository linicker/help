@extends('layout')

@section('conteudo-principal')
<center>
	<h1 class="mt-4">Cadastro</h1>
</center>

<div class="row justify-content-sm-center">
	<form method="POST" class="form-row mt-4 mb-5" action="/cadastrar-usuario">
		<table cellpadding="8px" cellspacing="4px">
			<tr>
				<td>Nome: </td>
				<td ><input class="form-control ml-1 mr-1" type="text" id="nome" name="nome" placeholder="Digite aqui.."></td>
				
			</tr>
			<tr>
				<td>Usuário: </td>
				<td><input class="form-control ml-1 mr-1" type="text" id="usuer" name="user"></td>
				
			</tr>
			<tr>
				<td>Email: </td>
				<td><input class="form-control ml-1 mr-1" type="email" id="email" name="email" placeholder="exemplo@exemplo.com.."></td>
				
			</tr>
			<tr>
				<td>Senha: </td>
				<td><input class="form-control ml-1 mr-1" type="password" id="senha" name="senha"></td>
				
			</tr>
			<tr>
				<td colspan="2"> <input type="submit" class="btn btn-outline-secondary" id="cadastrar" name="cadastrar" value="cadastrar">
				<!--
			<tr>
				<td>Confirme a senha: </td>
				<td><input class="form-control ml-1 mr-1" type="password" id="csenha" name="csenha"></td>
				
			</tr
					<button class="btn btn-success" id="buscar" type="button">Buscar</button>
			<tr>
				<td colspan="2" id="dados">
	            
					<?php 

					 ?>


				</td>
			</tr>

				 -->
				</td>
			</tr>
		</table>
	</form>
</div>
@stop