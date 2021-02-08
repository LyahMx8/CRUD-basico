<?php
	class conx {
		protected $server='localhost';
		protected $usr='root';
		protected $pssw='';
		protected $DB='ventas_aaa';

		public function Open(){
			try{
				$lnk=mysqli_connect($this->server,$this->usr,$this->pssw)or die('No se ha podido realizar la conexión');
				echo "Conexion exitosa";
				return $lnk;
			}catch(Exception $e){
				echo $e->getMessage();
				return null;
			}
		}
	}