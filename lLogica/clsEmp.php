<?php
include_once('lDatos/cnxDb.php');

class ClsEmp extends conx {
	public $codEmp;
	public $nomEmp;
	public $apEmp;
	public $celEmp;
	public $dirEmp;

	function ClsEmp($codEmp,$nomEmp,$apEmp,$celEmp,$dirEmp){
		$this->codEmp=$codEmp;
		$this->nomEmp=$nomEmp;
		$this->apEmp=$apEmp;
		$this->celEmp=$celEmp;
		$this->dirEmp=$dirEmp;
	}

	public function MstrarTdo(){
		$cnslt="select * from empleado";
		$conx=$this->Open();
		$conx->select_db($this->DB) or die("No se pudo seleccionar la base de datos");
		$resp=$conx->query($cnslt)or die("Error en: $cnslt: ".mysqli_error());

		echo "
			<table border='1'>
				<thead><tr>
					<td>Código</td>
					<td>Nombre</td>
					<td>Apellido</td>
					<td>Celular</td>
					<td>Dirección</td>
				</tr></thead>
		";
		while($lne=mysqli_fetch_array($resp)){
			echo "<tr>";
			foreach ($lne as $col_vlr){
				echo "<td>$col_vlr</td>";
			}
			echo "</td>";
		}
		echo "
			</table>
		";
	}

	public function InsrtRgis(){
		$cnslt="INSERT INTO empleado (cod_emp,nombre,apellido,celular,direccion) VALUES(
			'$this->codEmp','$this->nomEmp','$this->apEmp',$this->celEmp,'$this->dirEmp'
		)";
		$conx=$this->Open();
		$conx->select_db($this->DB) or die("No se pudo seleccionar la base de datos");
		$resp=$conx->query($cnslt)or die("Error en: $cnslt: ".mysqli_error());
		echo "
			<table border='1'>
				<tr>
					<td>Resultado: $resp</td>
				</tr>
			</table>
		";
	}

	public function ActzaRgis(){
		$cnslt="UPDATE empleado SET
			nombre = '$this->nomEmp',
			apellido = '$this->apEmp',
			celular = '$this->celEmp',
			direccion = '$this->dirEmp'
		WHERE cod_emp == '$this->codEmp' 
		";
		$conx=$this->Open();
		$conx->select_db($this->DB) or die("No se pudo seleccionar la base de datos");
		$resp=$conx->query($cnslt)or die("Error en: $cnslt: ".mysqli_error());
		echo "
			<table border='1'>
				<tr>
					<td>Resultado: $resp</td>
				</tr>
			</table>
		";
	}

	public function ElmnRgis($codEmp){
		$cnslt="DELETE FROM empleado WHERE cod_emp = $codEmp";
		$conx=$this->Open();
		$conx->select_db($this->DB) or die("No se pudo seleccionar la base de datos");
		$resp=$conx->query($cnslt)or die("Error en: $cnslt: ".mysqli_error());
		echo "
			<table border='1'>
				<tr>
					<td>Resultado: $resp</td>
				</tr>
			</table>
		";
	}
}