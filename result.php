<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>PHP Quiz</title>
</head>
<body>
<div>
<h1>PHP Quiz</h1>
<?php
$totalCorrect = 0;
if (empty($_POST['question1'])): echo "<p>1 - No answer</p>";
elseif ($_POST['question1'] == "A"): $totalCorrect++;
echo "<p>1 - OK</p>";
else: echo "<p>1 - NO</p>";
endif;
if (empty($_POST['question2'])): echo "<p>2 - No answer</p>";
elseif ($_POST['question2'] == "B"): $totalCorrect++;
echo "<p>2 - OK</p>";
else: echo "<p>2 - NO</p>";
endif;
if (empty($_POST['question3'])): echo "<p>3 - No answer</p>";
elseif ($_POST['question3'] == "C"): $totalCorrect++;
echo "<p>3 - OK</p>";
else: echo "<p>3 - NO</p>";
endif;
echo "<p id='results'>Result $totalCorrect/3</p>";
?>
</div>
</body>
</html>