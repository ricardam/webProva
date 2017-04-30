@extends('master')
@section('title')
Missatges
@stop
@section('header')
	<h2>Missatges</h2>
@stop
@section('content')
	<p>Aquí pots deixar un missatge per al propietari de la casa.   Font: http://www.tutorialesmanu.epizy.com/como-crear-un-formulario-de-contacto-en-html5-y-php/?i=1</p>
	<div class="form-group" action="formulario.php" method="post">
		 <table class="table" width="400" border="0" cellspacing="0" cellpadding="0" align="center">
		 	<tr>
		 		<td>Nom:</td>
		 		<br>
				<td><input type="text" name="nom" placeholder="Escriu el teu nom" required></td>
		 	</tr>

			<tr>
				<td>E-mail:</td>
				<td><input type="email" name="correu" placeholder="Aqui@el_teu_correu.com" required></td>
		 	</tr>

			<tr>
				 <td>Edat:</td>
				 <td><input type="number" name="edat" max="100" min="0" required></td>
			</tr>
		
			<tr>
				<td>Data:</td>
				<td><input type="date" name="data" required></td>
			</tr>

		 	<tr>
				<td> A qui li vols enviar?</td>
					<td> <select class="selectpicker">
		  					<option>Carregar tot els usuaris per pasar el correu a la funcio</option>
		 					<option>Ketchup</option>
		 					<option>Relish</option>
						</select>
					</td>
			<tr>


			<tr>
				 <td>Missatge:</td>
				 <td><textarea cols="17" rows="6" name="contingut" placeholder="Escriu el teu missatge" required></textarea></td>
			</tr>

			<tr>
				 <td>&nbsp;</td>
				 <td><input id="boton" type="submit" class="btn btn-success" name="boton" value="Enviar missatge"></td>
			</tr>

			<tr>
				 <td>&nbsp;</td>
				 <td>&nbsp;</td>
			 </tr>
	 </table> 
</div>

@stop
@section('footer')

@stop