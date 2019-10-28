<?php 
    include('conexao.php');

include('login/verifica_login.php');

$matricula = $_SESSION['matricula'];
$tecnico = $_SESSION['nome'];
$rfid = $_SESSION['rfid'];
global $t;
$t = $_POST['t'][0];
foreach ($t as $values =>$id){
    if(isset($values)){
        echo "ligado".$values;
    }else{
        echo "Desligado";
    }
    
    echo "<br>";
}
/*
for($i = 1; $i<60; $i++){
    echo $_POST['t'.$i];
    //$t[$i] = $_POST['t'.$i];
    
}
*/



    try{


//$tipo = $_POST['tipo'];

            $stm = $conexao_pdo->prepare("INSERT INTO activities (`tecnico`, `matricula`, `rfid`, `atividade`, `razao`, `save`,`data_ini`, `prazo`, `dificuldade`, `contramedida`, `status`, `percent`, `supervisao`)  values (?,?,?,?,?,?,?,?,?,?,?,?,?)");
            $stm->bindValue(1, $tecnico);
            $stm->bindValue(2, $matricula);
            $stm->bindValue(3, $rfid);
            $stm->bindValue(4, $atividade);

            
            $stm->execute();
        
        
        echo "Tecnico: ";
        echo $tecnico;
        echo "<br>";
        echo "matricula: ";
        echo $matricula;
        echo "<br>";
        echo "rfid: ";
        echo $rfid;
        echo "<br>";
        echo "atividade: ";
        echo $atividade;
        echo "<br>";
        echo "razao: ";
        echo $razao;
        echo "<br>";
        echo "save: ";
        echo $save;
        echo "<br>";
        echo "Hoje: ";
        echo $hoje;
        echo "<br>";
        echo "Prazo: ";
        echo $prazo;
        
        echo "<br>";
        echo "Dificuldade: ";
        echo $dificuldade;
        echo "<br>";
        echo "Contramedida: ";
        echo $contramedida;
        echo "<br>";
        echo "Status: ";
        echo $status;
        echo "<br>";
        echo "Percent: ";
        echo $percent;
        echo "<br>";
        echo "supervisao: ";
        echo $supervisao;
        echo "<br>";
        
       //header('Location: good.php');
?>

<div class="alert alert-success">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Cadastrado com sucesso.</strong>
</div>
<?php 
            
            
            
            } catch(PDOException $e) {
            ?>
<div class="alert alert-danger">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Atenção</strong> Ocorreu um erro ao acessar o banco de dados. Tente novamente em alguns instantes. Se o erro persistir, entre em contato com o suporte e informe a seguinte mensagem de erro: <strong><?=$e->getMessage();?></strong>
</div>
<?php
        }



    

?>
