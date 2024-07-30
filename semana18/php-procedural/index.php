<?php
declare(strict_types=1);
require_once("funcoes1.php");
require_once("funcoes2.php");
    $produtos = [
        1=>[
            'descricao' => 'cerveja',
            'precoDeCusto'=>5 
        ],
        2=>[
            'descricao' => 'coca',
            'precoDeCusto'=>10
        ],
        3=>[
            'descricao' => 'suco',
            'precoDeCusto'=>4 
        ]
        ];

            $contas = [
                1=>[
                    'titular'=>'davi',
                    'cpf'=> '123465',
                    'saldo' => 30000
                ],
                2=>[
                    'titular'=>'lu',
                    'cpf'=> '123465',
                    'saldo' => 30005
                ],
                3=>[
                    'titular'=>'ana',
                    'cpf'=> '123465',
                    'saldo' => 30500
                ]
                ];

    echo "<h3>PRODUTOS: </h3>";
   // var_dump($produtos);
    echo "<hr>";
    print_r($produtos);
    echo "</pre><hr>";
    echo "<h3>contas: </h3></pre>";
    //var_dump($contas);
    echo "<hr>";
    print_r($contas);
    echo "</pre><hr>";

    $precoDeVendaDaCerveja = obterPrecoDeVenda($produtos[1], 30);
    echo "Produto: {$produtos[1]['descricao']}: R\${$produtos[1]['precoDeCusto']} (custo) -R\${$precoDeVendaDaCerveja} (venda)<hr>";

    $contaDaJuliaPosSaque = saca($contas[3], 5000);
    echo "Depois do saque: A conta da {$contas[3]}['titular']} tem saldo {$contas[3]['saldo']}<hr>";
    $contas[3] = $contaDaJuliaPosSaque;
    echo "Depois do saque (alterando o array de contas): a conta da {$contas[3]['titular']} tem saldo {$contas[3]['saldo']}<hr>";
    $valorDoSaque=6000;
    saca($contas[1], 6000);
    deposita($contas[1], 10000.00);
    echo "</pre>";
    print_r($conta);
    echo "</pre><hr>"; 

?>