@extends('layout')

@section('conteudo-principal')

<div class="row justify-content-sm-center">
	<form method="POST" class="form-row mt-5 mb-5">
		<table cellpadding="8px" cellspacing="4px">
			<tr>
				<td colspan="4"><input class="form-control ml-1 mr-1" type="search" id="palavra" name="palavra" placeholder="Digite aqui.."></td>
				<td><input type="submit" class="btn btn-outline-secondary" id="buscar" name="buscar" value="buscar">
				<!--	<button class="btn btn-success" id="buscar" type="button">Buscar</button> -->
				</td>
			</tr>
			
			<tr>
				<td colspan="2" id="dados">
	            	<?php

	            		if (isset($_POST['buscar'])) {
						include_once('acoes/select.php');

						$selectObj = new Selecionar;
						$selectObj->SelectDado();
	            		}

	            	?>


				</td>
			</tr>
		</table>
	</form>
			
	<!-- 	
		<div class="row">
	            	
		</div>	

		<script>
			function buscar(palavra){
				var page = "pages/busca.php";
				$.ajax({
					type: 'POST',
					dataType: 'html',
					url: page,
					beforeSend: function(){
						$("#dados").html("Carregando..");
					},
					data: {palavra: palavra},
					sucess: function (msg){
						$("#dados").html(msg);
					}
				});
			}
			$.('buscar').click(function(){
				buscar($("#palavra").val())
			});
		</script>
	-->	
</div>

@stop