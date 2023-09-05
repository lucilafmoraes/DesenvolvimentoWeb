<?php
    /*
    Cada ['aluno' => 'Fulano',
        'notas => [5.5, 8.5, 7.6]    
    ], 
    é um elemento do array
    */
    $infoAlunos = array(
        ['aluno' => 'Fulano',
        'notas' => [5.5, 8.5, 7.6]
        ],
        ['aluno' => 'Beltrano',
        'notas' => [8.4, 4.4]
        ],
        ['aluno' => 'Ciclano',
        'notas' => [6.2, 8.2, 10, 4.8]
        ],
    );
    
    //Função pra calcular a média do aluno.
    function calcMedia($notas): float{
        $somatorio = array_sum($notas);
        $qtdNotas = count($notas);
        //Esse if é opcional, pois no final da no mesmo. Ele só serve para
        //evitar a divisão da média por zero.
        return ($somatorio / $qtdNotas);
    }

    //Código para implementar o nome, as notas e a média de cada aluno.
    echo '<table border="1">';
    echo '<tr>
            <th>ALUNO</th>
            <th>NOTAS</th>
            <th>MEDIA</th>
          </tr>';
    //Essa função ira percorrer as posições 0, 1 e 2 do array $infoAlunos, e ira
    //procurar em todos os alunos ($alunos), o nome e a nota que são
    //representados pelo "aluno" e "notas", respectivamente.
    foreach($infoAlunos as $alunos){
        echo '<tr>';
        echo '<td>'.$alunos["aluno"].'</td>';
        echo '<td>';
        /*
        foreach($alunos["notas"] as $notas){
            echo "$notas |";
        }
        echo '</td>';
        echo '<td>'.calcMedia($alunos["notas"]).'</td>';
        //Aqui chamaremos a função calcMedia, e colocaremos como parametro as
        //notas dos alunos, ou seja, $aluno["notas"].
        echo '</tr>';
    }
    echo '</table>';
    
?>