<option value="0" enabled>- Seleccione su Sub-procedimiento-</option>
<?php
    include 'conexion.php';
    $idgerenc=intval($_GET['param_id']);
    $idproced=intval($_GET['param_proc']);
    $sql="SELECT * FROM subprocedimientos WHERE id_gerencias='$idgerenc' and id_procedimientos='$idproced'";
    $resultado= mysqli_query($coneccion,$sql) or die ('Consulta fallida: '. mysqli_error());
        while($row=mysqli_fetch_array($resultado)){
			if($row['detalle_subproc'] != ""){
				echo '<option value="'.$row['id_subproced'].'">'.utf8_encode($row['detalle_subproc']).'</option>';
			}else {
            	echo '<option value="'.$row['id_subproced'].'">DETALLADO</option>';
			}
        }
   
?>