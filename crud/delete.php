<?php



function deleteAlunoById($id){
    
    require 'connection.php';
    
    try{
        $sql = 'DELETE FROM alunos WHERE id_aluno = ' . $id . ';';
        
        if($con->query($sql)){
            $con->query($sql);
            return true;
        }else{
            return false;   
        }
    }catch(PDOException $e){
        echo 'Não foi possível deletar ao banco de dados' . $e->getMessage();
        die();
    }
}

