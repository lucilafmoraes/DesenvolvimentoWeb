<?
#declaração de função com argumentos variáveis
function minhaFuncao():void
{
    $meusArgumentos = func_get_arg();
    var_dump($meusArgumentos);
    echo '</br>'; 
}

//chamada da função com argumentos variáveis
minhaFuncao("Olá", "Mundo");
minhaFuncao("Rafael", 5, 8.9, false);
minhaFuncao("teste", 7.4, 9.7);


?>