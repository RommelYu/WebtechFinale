<?php
session_start();
include ('connect.php');

$totalCorrect = 0;

 if (empty($_POST['question-1-answers'])) {
        $totalCorrect + 0;
        } else {
		$answer1 = $_POST['question-1-answers'];
        if ($answer1 == "A") { $totalCorrect++; }
}

 if (empty( $_POST['question-2-answers'])) {
        $totalCorrect + 0;
        } else {
		$answer2 = $_POST['question-2-answers'];
        if ($answer2 == "C") { $totalCorrect++; }
}

 if (empty($_POST['question-3-answers'])) {
        $totalCorrect + 0;
        } else {
		$answer3 = $_POST['question-3-answers'];
        if ($answer3 == "B") { $totalCorrect++; }
}

 if (empty($_POST['question-4-answers'])) {
        $totalCorrect + 0;
        } else {
		$answer4 = $_POST['question-4-answers'];
        if ($answer4 == "A") { $totalCorrect++; }
}

 if (empty($_POST['question-5-answers'])) {
        $totalCorrect + 0;
        } else {
		$answer5 = $_POST['question-5-answers'];
        if ($answer5 == "C") { $totalCorrect++; }
}

 if (empty($_POST['question-6-answers'])) {
        $totalCorrect + 0;
        } else {
		$answer1 = $_POST['question-6-answers'];
        if ($answer1 == "B") { $totalCorrect++; }
}

 if (empty($_POST['question-7-answers'])) {
        $totalCorrect + 0;
        } else {
		$answer1 = $_POST['question-7-answers'];
        if ($answer1 == "B") { $totalCorrect++; }
}

 if (empty($_POST['question-8-answers'])) {
        $totalCorrect + 0;
        } else {
		$answer1 = $_POST['question-8-answers'];
        if ($answer1 == "A") { $totalCorrect++; }
}

 if (empty($_POST['question-9-answers'])) {
        $totalCorrect + 0;
        } else {
		$answer1 = $_POST['question-9-answers'];
        if ($answer1 == "A") { $totalCorrect++; }
}

 if (empty($_POST['question-10-answers'])) {
        $totalCorrect + 0;
        } else {
		$answer1 = $_POST['question-10-answers'];
        if ($answer1 == "A") { $totalCorrect++; }
}

 if (empty($_POST['question-11-answers'])) {
        $totalCorrect + 0;
        } else {
		$answer1 = $_POST['question-11-answers'];
        if ($answer1 == "A") { $totalCorrect++; }
}

 if (empty($_POST['question-12-answers'])) {
        $totalCorrect + 0;
        } else {
		$answer1 = $_POST['question-12-answers'];
        if ($answer1 == "B") { $totalCorrect++; }
}

 if (empty($_POST['question-13-answers'])) {
        $totalCorrect + 0;
        } else {
		$answer1 = $_POST['question-13-answers'];
        if ($answer1 == "C") { $totalCorrect++; }
}

 if (empty($_POST['question-14-answers'])) {
        $totalCorrect + 0;
        } else {
		$answer1 = $_POST['question-14-answers'];
        if ($answer1 == "A") { $totalCorrect++; }
}

 if (empty($_POST['question-15-answers'])) {
        $totalCorrect + 0;
        } else {
		$answer1 = $_POST['question-15-answers'];
        if ($answer1 == "A") { $totalCorrect++; }
}


$score = "INSERT INTO quiz_scores (user_id, score) VALUES ('1', $totalCorrect)";
$insert_score = mysqli_query($conn,$score);
?>
<html>
<body>
<?php
echo "<div id='results'>$totalCorrect / 15</div>";
?>
</body>
</html>
