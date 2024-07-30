<?php
	//obterPrecoDeVenda (1)
	function obterPrecoDeVenda(array $produto, float $margemDeLucro):float{
		return $produto['precoDeCusto']+($produto['precoDeCusto'] * $margemDeLucro/100);
	}
	//sacar (recebe uma conta e devolve a conta modificada) (2)
	function sacar(array $conta, float $valor):array{
		$conta['saldo']-= $valor;
		return $conta;
	}

	//deposita (passagem por referência) (4)
	function deposita(array &$conta, float $valor):void{
		$conta['saldo']+=valor;
	}
	//validaCpf (conta) (6)
?>