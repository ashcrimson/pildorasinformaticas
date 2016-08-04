<!doctype html>
<html>
    
    <head>
    
        <meta charset="utf-8">
        <title>Documento sin título</title>
        <style>
			table{
				background-color:#FFC;
				border:1px solid #FF0000;
				margin:auto;
				padding:25px;
			}
		h1{
			width:50%;
			margin:25px auto;
			
			text-align:center;
			margin-bottom:50px;
		}
		
		body{
			background-color:#FC9;
		}
		
		#boton{
			padding-top:25px;
			
		}
		
		</style>
    </head>
    
    <body>
    <h1> Alta de artículos nuevos</h1>
    
        <form action="resultados_insertar_registros.php" method="get">
        <table>
        <tr><td>
            <label>Código Artículo:</label></td><td> <input type="text" name="c_art"></td></tr>
            <tr><td><label>Sección:</label></td><td><input type="text" name="secc"></td></tr>
          <tr><td>  <label>Nombre Artículo:</label> </td><td><input type="text" name="n_art"></td></tr>
          <tr><td>  <label>Precio: </label></td><td><input type="text" name="pre"></td></tr>
           <tr><td> <label>Fecha: </label></td><td><input type="text" name="fec"></td></tr>
           <tr><td> <label>Importado:</label> </td><td><input type="text" name="imp"></td></tr>
           <tr><td> <label>País de Origen: </label></td><td><input type="text" name="p_ori"></td></tr>
          <tr><td colspan="2" align="center" id="boton">  <input type="submit" name="enviando" value="¡Dale!"></td></tr>
        </table>
        </form>
    
    </body>
    
</html>