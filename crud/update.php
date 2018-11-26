<?php


function updateNomeAluno($id, $nome){
    
    require 'connection.php';
    
    try{
        
        $sql = "UPDATE alunos
                SET nome_aluno = '$nome'
                WHERE id_aluno = $id;";
        
        $stmt = $con->prepare($sql);
        
        $stmt->execute(); 
        
        return true;
        
    }catch(PDOException $e){
        echo 'Erro no insert ao banco de dados' . $e->getMessage();
        die();
    }
}


