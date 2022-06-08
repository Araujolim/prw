<?php
    include ("conexao.php");
    
    $sql = 'SELECT * FROM fluxo_caixa';

    $result = mysqli_query($con, $sql);
    if($result)
        echo "Dados inseridos com sucesso";
    else
        echo "Erro ao inserir no banco de dados". mysqli_error($con);
       

    if($tipo == 'entrada'){
      $sql-"select sum(valor) valor from fluxo_caixa where tipo = 'entrada'";
    } else if($tipo == 'saida'){
      $sql-"select sum(valor) valor from fluxo_caixa where tipo = 'saida'";
    }  else if($tipo == 'saldo'){
      $sql-"select sum(case when tipo = 'entrada' then valor else 0 end)
                   sum(case when tipo = 'saida' then valor else 0 end) as valor
                   from fluxo_caixa";
    }

?>
<p><a href="index.php">voltar</a></p>