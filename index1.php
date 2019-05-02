<?php 
	include "connection.php";
?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>PHP Quiz</title>
</head>
<body>
<div>
<h1>PHP Quiz</h1>
<form action="result.php" method="post">
<ol>
<section>
	<li>

		<h3><?php echo "$pergunta1" ?></h3>
		<div>
			<input type="radio" name="question1" value="A" />
			<label>Answer 1</label>
		</div>
		
		<div>
			<input type="radio" name="question1" value="B" />
			<label>Answer 2</label>
		</div>
		<div>
			<input type="radio" name="question1" value="C" />
			<label>Answer 3</label>
		</div>
		<div>
			<input type="radio" name="question1" value="D" />
			<label>Answer 4</label>
		</div>
	</li>
</section>

<section style="position: relative;">
<li>
<h3><?php echo "$new_array[1]" ?></h3>
<div>
<input type="radio" name="question2" value="A" />
<label>Answer 1</label>
</div>
<div>
<input type="radio" name="question2" value="B" />
<label>Answer 2</label>
</div>
<div>
<input type="radio" name="question2" value="C" />
<label>Answer 3</label>
</div>
<div>
<input type="radio" name="question2" value="D" />
<label>Answer 4</label>
</div>
</li>    
<img style="max-width: 105px; position: absolute; top: 10px; left: 153px" src="teste.png">
</section>

<section style="position: relative;">
<li>
<h3 style="font-family: monospace;"><?php echo "$pergunta3" ?></h3>
<div>
<input type="radio" name="question3" value="A" />
<label>Answer 1</label>
</div>
<div>
<input type="radio" name="question3" value="B" />
<label>Answer 2</label>
</div>
<div>
<input type="radio" name="question3" value="C" />
<label>Answer 3</label>
</div>
<div>
<input type="radio" name="question3" value="D" />
<label>Answer 4</label>
</div>
</li>
<p style="font-family: monospace;position: absolute; top: 16px; left: 153px">if(verifica){<br> &nbsp {System.out.println("ola";)<br> else{<br>System.out.println("Adeus")<br>&nbsp}<br>}</p>
</section>	
</ol>
<input type="submit" value="Submit Quiz" />
</form>
</div>
</body>
</html>