	<?php 
		include 'sql_connection.php';

		extract($_POST);
		if($fun=='save_quiz_title')
		{
			$sql="INSERT into quiz_details(quiz_title,quiz_maker_id,quiz_course) values ('$quiz_title','$quiz_maker_id','$quiz_course')";
			$result=mysqli_query($conn,$sql);

			$last_id=mysqli_insert_id($conn);
			$sql3="SELECT id from signup WHERE role='student'";
			$result3=mysqli_query($conn,$sql3);
			while ($val3=mysqli_fetch_assoc($result3)) 
			{
				$idd=$val3['id'];
				$sql2="INSERT into quiz_result (quiz_id,id,status,score,total_score) values ($last_id,'$idd',0,0,0)";
				$result2=mysqli_query($conn,$sql2);
				
			}

			
		}
		if($fun=='save_question_quiz')
		{
			$sql="INSERT into quiz_questions(question,quiz_id,option1,option2,option3,option4,correct_option) values ('$question_field','$quiz_id','$option1','$option2','$option3','$option4','$question_answer')";
			$result=mysqli_query($conn,$sql);
		}?>
		<?php
		if($fun=='show_questions')
		{ 
			static $count=1;
			$sql="SELECT * from quiz_questions WHERE quiz_id=$quiz_id";
			$result=mysqli_query($conn,$sql);
			?>
			<form action="quiz_result_testing.php" method="POST">
			<?php
			while ($val=mysqli_fetch_assoc($result)) 
			{
				// echo'<pre>';
				// print_r($val);
				$question_id=$val['question_id'];
				$qus=$val['question'];
				$option1=$val['option1'];
				$option2=$val['option2'];
				$option3=$val['option3'];
				$option4=$val['option4'];
				$correct_option=$val['correct_option'];

				?>
				<input type="hidden" name="quizid" value="<?php echo $quiz_id;?>">
					  <div class="form-group">
	                      	<b><label for="exampleTextarea1" class='card-title'><u>Question <span value="1" id="question_count"><?php echo $count++;?></u></span></label></b><br><br>
	                      	<label><?php echo $qus;?></label>
	                  </div>
						                     
					  <div class="form-group row">
                        <div class="col-lg-4 col-sm-10">
                        	<input type="radio" value="a" name="<?php echo $question_id;?>"><?php echo $option1;?>
                        </div>
                      </div>
                      <div class="form-group row">
                        <div class="col-lg-4 col-sm-10">
                        	<input type="radio" value="b" name="<?php echo $question_id;?>"><?php echo $option2;?>
                        </div>
                      </div>
                      <div class="form-group row">
                        <div class="col-lg-4 col-sm-10">
                        	<input type="radio" value="c" name="<?php echo $question_id;?>"><?php echo $option3;?>
                        </div>
                      </div>
                      <div class="form-group row">
                        <div class="col-lg-4 col-sm-10">
                        	<input type="radio" value="d" name="<?php echo $question_id;?>"><?php echo $option4;?>
                        </div>
                      </div>
                      <!-- <input type="hidden" name="questions[]" value=""> -->
                      <hr>

				<?php
			}
			?>
			<!-- <input type="submit" name="Ok"> -->
			<input type="submit" id="btn_post" name="btn_post" class="btn mr-2" style="background-color: rgba(13, 115, 230);color: white;">
			</form>
			<?php
		}	

	?>
	
