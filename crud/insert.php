<?php


function insertAlunos($nome,  $data_nasc, $mensalidade, $venc_mensalidade){
    
    require 'connection.php';
    
    try{
        $statement = $con->prepare('INSERT INTO alunos (nome_aluno, data_nasc_aluno, mensalidade_aluno, venc_mensalidade_aluno)
        VALUES (:nome_aluno, :data_nasc_aluno, :mensalidade_aluno, :venc_mensalidade_aluno);');

        $res = $statement->execute([
            'nome_aluno' => $nome, // string value
            'data_nasc_aluno' => $data_nasc, // 'yyyy-mm--dd'
            'mensalidade_aluno' => $mensalidade, // double value
            'venc_mensalidade_aluno' => $venc_mensalidade // int value
        ]);
        
        
        return true;
        
    }catch(PDOException $e){
        echo 'Erro no insert ao banco de dados' . $e->getMessage();
        die();
    }
}

