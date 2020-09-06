<?php session_start();
	include 'sql_connection.php';
	static $marks=0;
	static $total_marks=0;
	$quiz_id=$_POST['quizid'];
	// echo $quiz_id;
	$sql="SELECT * from quiz_questions WHERE quiz_id=$quiz_id";
	$result=mysqli_query($conn,$sql);
	while ($val=mysqli_fetch_assoc($result)) 
	{
		$question_id=$val['question_id'];
		$correct_option=$val['correct_option'];
		if($_POST[$question_id]==$correct_option)
		{
			$marks++;
		}
		$total_marks++;
	}
	$uid=$_SESSION['id'];
	
	$sql2="UPDATE quiz_result set status=1,score=$marks,total_score=$total_marks WHERE (quiz_id=$quiz_id and id=$uid)";
	
	$result2=mysqli_query($conn,$sql2);

	header("Location:student_quiz.php?status=1");
?>


