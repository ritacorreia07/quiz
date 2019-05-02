<?php 

	$host = "localhost";
	$user = "root";
	$pass = "";
	$banco = "quiz";
	$connect = mysqli_connect($host, $user, $pass, $banco);

	if ($connect) {
		echo "Conexão bem sucedida";
	}else{
		echo "<p> Não foi feita a conexão";
	}



	$resultTry = $connect->query("SELECT question FROM questions ");

	while( $row = mysqli_fetch_assoc( $resultTry)){
    	$new_array[] = $row['question']; 
	}

	$pergunta1 = $new_array[0];
	$pergunta2 = $new_array[1];
	$pergunta3 = $new_array[2];


?>