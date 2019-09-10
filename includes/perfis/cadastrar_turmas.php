<?php
    session_start();
    include('../dbh.php');
?>

<html>
    <head>
    
    </head>
    <body>
        <h3>Alunos possiveis de serem cadastrados na turma</h3>
        <table>
            <tr>
                <td>Nome do aluno</td>
                <td>Código do aluno</td>
            </tr>
            <?php
                 $sql = mysqli_query($conn, "SELECT * FROM aluno");
                 $result = mysqli_num_rows($sql);
                 while ($linha = mysqli_fetch_array($sql)) {
                
            ?>  
            <tr>
                <td><?php echo $linha['aluno_name']?></td>
                <td><?php echo $linha['aluno_id']?></td>
            </tr>
            <?php } ?>
        </table>
        <form action="cadastrar.php" method="POST"> 
            <p>Nome da turma</p>
            <input type="text" name="nome" required="required">
            <br>
            <p>adicionar alunos</p> 
        </form>
    </body>
</html>