<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>Ingresar Motos</title>
</head>
<body>
<center><img src="img/imagen.jpg" class="imgcenter1" width="500" height="250"></center><br>
<header>
	<center><font size="5" face="cooper black">Ingresar los datos para cotizar motos</font></center><br>
</header> 
<form action='administrar-moto.php' method='post'>
	<center><table>
		<tr>
			<td><font face="Emmet" size="+2">marca:</font></td>
			<td><select name="tipo" style="width:170px">
				<option selected>------Elige la marca--------</option>
				<option value="enduro">BMW</option>
				<option value="turismo">Yamaha</option>
				<option value="ciudad">Susuki</option>
				<option value="enduro">Hero</option>
				<option value="enduro">Auteco</option>
				<option value="enduro">Honda</option>

			</select></td>
		</tr>

		<tr>
			<td><font face="Emmet" size="+2">tipo:</font></td>
			<td><select name="tipo" style="width:170px">
				<option selected>------Elige el tipo--------</option>
				<option value="turismo">moto turismo</option>
				<option value="ciudad">moto ciudad</option>
				<option value="enduro">moto enduro</option>
			</select></td>
		</tr>
		<tr>
			<td><font face="Emmet" size="+2">cilindraje:</font></td>
			<td><select name="tipo" style="width:170px">
				<option selected>------Elige el cilindraje--------</option>
				<option value="turismo">110</option>
				<option value="ciudad">125</option>
				<option value="enduro">150</option>
				<option value="enduro">200</option>
				<option value="enduro">250</option>
				<option value="enduro">1000</option>
				<option value="enduro">1200</option>
			</select></td>
		</tr>

		<input type='hidden' name="insertar" value="insertar">
	</table></center>
	
	<center><input type="submit" name="Guardar" style="width:90px; height: 30px"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		
		   <input type="reset" name="Borrar" style="width:90px; height: 30px"></center><br>

		<center><a href="index.php"><font size="5" face="Emmet" color="blue">volver</font></a></center>
</form>
<footer><br>
	<center><font size="3" face="Cooper Black">Concesionario 2021</font></center><br><br>
	<center>&copy; desasoft 2021 por Manuel Macias</center>
	</footer>
</body>
</html>