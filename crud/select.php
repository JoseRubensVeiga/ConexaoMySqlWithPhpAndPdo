<?php



function selectAlunoById($id){
    
    require 'connection.php';
    
    try{
        $sql = 'SELECT * FROM alunos WHERE id_aluno = ' . $id . ';';
        
        if($con->query($sql)){
            foreach($con->query($sql) as $item){
                
                return $item;
            }
        }else{
            return false;   
        }
    }catch(PDOException $e){
        echo 'Erro no select ao banco de dados' . $e->getMessage();
        die();
    }
}
