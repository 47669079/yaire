<?php
	namespace X\App\Models;
	use \X\Sys\Model;
	class mTienda extends Model{
		public function __construct(){
			parent::__construct();

		}

		/**
	    * 
	    * getProductos: funcion que devueve los productos.
	    * 
	    */

		public function getProductos()
		{
			$sql="SELECT * FROM productos";
			$this->query($sql);
			$res=$this->execute();
			if($res){
				$result=$this->resultset();

			}else {$result=null;}
			return $result;
		}

		/**
	    * 
	    * getProducto: funcion que devueve un producto.
	    * 
	    */

		public function getProducto($id)
		{
			$sql="SELECT * FROM productos Where id_productos = ".$id;
			$this->query($sql);
			$res=$this->execute();
			if($res){
				$result=$this->resultset();

			}else {$result=null;}
			return $result;
		}

		/**
	    * 
	    * set_concepto: funcion que inserta un concepto.
	    * 
	    */

		public function set_concepto($producto,$cantidad,$precio,$alumno)
		{
			$sql="INSERT INTO conceptos (cantidad,precio,productos,alumnos,fecha) VALUES(".$cantidad.",".$precio.",".$producto.",".$alumno.",'".Date("Y-m-d")."')";
			$this->query($sql);
			$res=$this->execute();
		}

		/**
	    * 
	    * get_concepto: funcion que devuelve un concepto.
	    * 
	    */

		public function get_concepto($producto,$alumno)
		{
			$sql="SELECT * FROM conceptos  WHERE alumnos =".$alumno." AND productos =".$producto." AND compras is NULL";
			$this->query($sql);
			$res=$this->execute();
			if($res){
				$result=$this->resultset();

			}else {$result=null;}
			return $result;
		}

		/**
	    * 
	    * get_concepto_alumno: funcion que devuelve los conceptos de un alumno que aun no tiene un concepto.
	    * 
	    */

		public function get_concepto_alumno($alumno)
		{
			$sql="SELECT productos.nombre, productos.img, conceptos.precio, conceptos.cantidad, productos.id_productos, conceptos.id_conceptos FROM conceptos inner join productos on conceptos.productos = productos.id_productos  WHERE alumnos =".$alumno." AND compras is NULL";

			$this->query($sql);
			$res=$this->execute();
			if($res){
				$result=$this->resultset();

			}else {$result=null;}
			return $result;
		}

		/**
	    * 
	    * update_concepto: funcion que modifica un concepto, la cantidad y el precio sumando al anterior.
	    * 
	    */

		public function update_concepto($producto,$cantidad,$precio,$alumno)
		{
			$sql="UPDATE conceptos SET cantidad = cantidad + ".$cantidad." , precio = precio + ".$precio." Where productos =".$producto." AND alumnos =".$alumno." AND compras is NULL";
			$this->query($sql);
			$res=$this->execute();
		}

		/**
	    * 
	    * update_concepto_2: funcion que modifica un concepto, la cantidad y el precio completo.
	    * 
	    */

		public function update_concepto_2($producto,$cantidad,$precio,$alumno)
		{
			$sql="UPDATE conceptos SET cantidad = ".$cantidad." , precio = ".$precio." Where productos =".$producto." AND alumnos =".$alumno." AND compras is NULL";
			$this->query($sql);
			$res=$this->execute();
		}

		/**
	    * 
	    * get_alumno: funcion que devuelve un alumno.
	    * 
	    */

		public function get_alumno($uw)
		{
			$sql="SELECT * FROM alumnos  WHERE userweb =".$uw;

			$this->query($sql);
			$res=$this->execute();
			if($res){
				$result=$this->resultset();

			}else {$result=null;}
			return $result;
		}

		/**
	    * 
	    * delete_conceptos: funcion que elimina los conceptos sin compra cual fecha es inferior a un dia de la fecha actual.
	    * 
	    */

		public function delete_conceptos()
		{
			$sql="DELETE FROM conceptos WHERE fecha < DATE_SUB(CURDATE(), INTERVAL 1 DAY) WHERE compras is NULL";
			$this->query($sql);
			$res=$this->execute();
		}

		/**
	    * 
	    * get_num_conceptos: funcion que devuelve el numero de conceptos.
	    * 
	    */

		public function get_num_conceptos($alumno)
		{
			$sql="SELECT count(*) as 'total' FROM conceptos  WHERE alumnos =".$alumno." AND compras is NULL";
			$this->query($sql);
			$res=$this->execute();
			if($res){
				$result=$this->resultset();

			}else {$result=null;}
			return $result;
		}

		/**
	    * 
	    * get_precio_producto: funcion que devuelve el precio de un producto.
	    * 
	    */

		public function get_precio_producto($producto)
		{
			$sql="SELECT precio FROM productos  WHERE id_productos =".$producto;
			$this->query($sql);
			$res=$this->execute();
			if($res){
				$result=$this->resultset();

			}else {$result=null;}
			return $result;
		}

		/**
	    * 
	    * set_compra: funcion que inserta una compra.
	    * 
	    */

		public function set_compra($total,$alumno)
		{
			$sql="INSERT INTO compras (precio_total,fechas,alumnos) VALUES(".$total.",'NOW()',".$alumno.")";
			$this->query($sql);
			$res=$this->execute();
		}

		/**
	    * 
	    * get_compra: funcion que devuelve una compra.
	    * 
	    */

		public function get_compra($alumno)
		{
			$sql="SELECT * FROM compras  WHERE alumnos =".$alumno." Order by fechas limit 1";
			$this->query($sql);
			$res=$this->execute();
			if($res){
				$result=$this->resultset();

			}else {$result=null;}
			return $result;
		}

		/**
	    * 
	    * modificar_concepto_compra: funcion que modifica un concepto añadandole una compra.
	    * 
	    */

		public function modificar_concepto_compra($id, $concepto)
		{
			$sql="UPDATE conceptos SET compras = ".$id." Where id_conceptos =".$concepto;
			$this->query($sql);
			$res=$this->execute();
		}

		/**
	    * 
	    * borrar_concepto: funcion que borra un concepto.
	    * 
	    */

		public function borrar_concepto($concepto)
		{
			$sql="DELETE FROM conceptos Where id_conceptos =".$concepto;
			$this->query($sql);
			$res=$this->execute();
		}
	}
