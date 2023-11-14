<?php
//checando a existencia ou nulidade com ISSET

$a = array('nome' => 'Fulano', 'celular' => null );

var_dump(isset($a['nome'])); //bool(true)
var_dump(isset($a['celular'])); //bool(false)
var_dump(isset($a['endereco'])); //bool(false)




?>