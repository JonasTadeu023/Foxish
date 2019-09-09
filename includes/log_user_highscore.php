<?php
    session_start();
    include_once "question_array.php";
    if(isset($_POST['submit'])){
        for ($i=1; $i < count($_POST); $i++){
            $name_concatenation = "quest$i";
            if (true){
                $post_array[$i] = mysqli_real_escape_string($conn ,$_POST["$name_concatenation"]);
            }
            else{
                $post_array[$i] = false;
            }
        }


        $jogador_recorde = 0;
        for ($i=1; array_key_exists($i, $reg) == true; $i++) {
            if($post_array[$i] == $reg[$i][5]){
             
               $jogador_recorde++;
            }
        }
        exit();         
        $id = $_SESSION['jogador_id'];
        $query = "SELECT jogador_recorde FROM `jogador` WHERE `id` = '$id';";
        $result = mysqli_fetch_assoc(mysqli_query($conn, $query));
        if($jogador_recorde > $result['jogador_recorde']){
            $query = "UPDATE jogador SET jogador_recorde = $jogador_recorde ;";
            mysqli_query($conn, $query);
            header("Location: leaderboards.php");
            exit();
        }
        else{
            header("Location: leaderboards.php");
            exit();
        }
    }
    else{
        header("Location: ../public/quiz.php");
        exit();
    }
?>