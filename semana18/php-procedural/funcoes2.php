<?php
	//saca (por referência) (3)
	function saca(array &$conta, float $valor):void{
		$conta['saldo']-=$valor;
	}
	//validarCpf (cpf) (5)
	function validarCpf(string $cpf):bool{
		if(strlen($cpf)===14 && strpos($cpf, '-', 11))
			return true;
		return false;
	}
	//aumentaPrecoDeCusto (por referência) (7)
?>