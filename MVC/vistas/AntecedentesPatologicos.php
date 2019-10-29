<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Antecedentes Patológicos</title>
	<link rel="stylesheet" href="../css/estiloAP.css">
</head>
<body>
<header><h1>ANTECEDENTES PATOLÓGICOS</h1></header>
       <div id="contenido">
       	    <div id="Izquierdo">
               <table border="1" cellpadding="1">
       	<tr>
       		<th>PATOLOGÍA</th>
       		<td > Sí </td>
       		<td > No </td>
       		<th>NOTAS</th>
       	</tr>
       		<tr>
       		<th>DIABETES</th>
       		<td ><input type="radio" name="si" value="si" align="center"></td>
       		<td ><input type="radio" name="no" value="no"></td>
       		<td><textarea></textarea></td>
       	</tr>
       		<tr>
       		<th>HIPERTENSIÓN ARTERIAL</th>
       		<td><input type="radio" name="si" value="si"></td>
       		<td><input type="radio" name="no" value="no"></td>
       		<td><textarea></textarea></td>
       	</tr>
       		<tr>
       		<th>CARDIOPATÍAS</th>
       		<td><input type="radio" name="si" value="si"></td>
       		<td><input type="radio" name="no" value="no"></td>
       		<td><textarea></textarea></td>
       	</tr>
       		<tr>
       		<th>NEOPLASIAS</th>
       		<td><input type="radio" name="no" value="no"></td>
       		<td><input type="radio" name="no" value="no"></td>
       		<td><textarea></textarea></td>
       	</tr>
       		<tr>
       		<th>EPILEPSIAS</th>
       		<td><input type="radio" name="si" value="si"></td>
       		<td><input type="radio" name="no" value="no"></td>
       		<td><textarea></textarea></td>
       	</tr>
       		<tr>
       		<th>MALFORMACIONES</th>
       		<td><input type="radio" name="si" value="si"></td>
       		<td><input type="radio" name="no" value="no"></td>
       		<td><textarea></textarea></td>
       	</tr>
       		<tr>
       		<th>SIDA</th>
       		<td><input type="radio" name="si" value="si"></td>
       		<td><input type="radio" name="no" value="no"></td>
       		<td><textarea></textarea></td>
       	</tr>
       		<tr>
       		<th>ENFERMEDADES RENALES</th>
       		<td><input type="radio" name="si" value="si"></td>
       		<td><input type="radio" name="no" value="no"></td>
       		<td><textarea></textarea></td>
       	</tr>
       		<tr>
       		<th>HEPATITIS</th>
       		<td><input type="radio" name="si" value="si"></td>
       		<td><input type="radio" name="no" value="no"></td>
       		<td><textarea></textarea></td>
       	</tr>
       		<tr>
       		<th>ARTITRIS</th>
       		<td><input type="radio" name="si" value="si"></td>
       		<td><input type="radio" name="no" value="no"></td>
       		<td><textarea></textarea></td>
       	</tr>
       	<tr>
       		<th>OTRA(S)</th>
       		<td><input type="radio" name="si" value="si"></td>
       		<td><input type="radio" name="no" value="no"></td>
       		<td><textarea></textarea></td>
       	</tr>
       		<tr>
       		<th>REPORTA SANO</th>
       		<td><input type="radio" name="si" value="si" width="10"></td>
       		<td><input type="radio" name="no" value="no"></td>
       		<td><textarea></textarea></td>
       	</tr>
       </table>
       	    </div>

       	    <div id="Derecho">
       	    	 
       <h2>CONSUME ALGÚN TIPO DE</h2>
       <br>
     <table class="tabla2">
       	<tr>
       	  <td><br>
       	  	  <input type="checkbox"><b>Tabaquismo</b><br>
       	  	  <input type="checkbox" name=""><b>Estupefaciente</b><br>
       	  	  <input type="checkbox" name=""><b>Alcohol</b><br>
       	  	  <br>
       	  </td> 
       	</tr>
      </table> 
       <br>
       <br>
      <table  cellspacing="10" class="adicciones" >
		<tr>
		   <td align="right"><b>Menarca:</b><input type="text"  maxlength="5" placeholder="Obligatorio"></td>
                 <td align="right"><b>Embarazos:</b><input type="text"  maxlength="5" placeholder="Obligatorio"></td>
		</tr>

		<tr>
		   <td align="right"><b>Partos:</b><input type="text" maxlength="5"  placeholder="Obligatorio"></td>
		   <td align="right"><b>Cesárea:</b><input type="text"  maxlength="5" name="FR" placeholder="Obligatorio"></td>
		</tr>
			
              <tr> 
		   <td align="right"><b>Abortos:</b><input type="text"  maxlength="5" name="FR" placeholder="Obligatorio"></td>
		   <td align="right"><b>Hijos:</b><input type="text"  maxlength="5" name="FR" placeholder="Obligatorio"></td>
		</tr>
		
              <tr>
		   <td align="right"><b>Menopausia:</b><input type="text"  maxlength="5" name="FR" placeholder="Obligatorio">
		   </td>
		</tr>
		<tr>
		    <td align="right"><b>Última Fecha de Menstruación:</b><input type="text" maxlength="5" name="FR" placeholder="Obligatorio">
		</td>
		</tr>
		
              <tr>
		     <td align="right"><b>Última Fecha de papanicolaou:</b><input type="text" maxlength="5" name="FR" placeholder="Obligatorio"></td>
		</tr>
	</table>
		<center>
	  <input type="submit" value="Regresar">
	  <input type="submit" value="Guardar">
	  <input type="submit" value="Siguiente">
	  </center>
          </div>
       </div>

	
</body>
</html>