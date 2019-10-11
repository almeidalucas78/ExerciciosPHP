<?php
	class Calcula{
		/*Atributos / variaveis*/
		private $valor;
		private $taxa;
		private $operacao;
		
		/*Métodos*/
		public function setValor($valor){
			$this->valor = $valor;
		}
		public function getValor(){
			return $this->valor;		
		}
	}
?>