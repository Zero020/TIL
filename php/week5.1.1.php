<?php 


	$students = array(array("name" => "가", "math" => 85, "english" => 78, "science" => 90),
		array("name" => "나", "math" => 62, "english" => 88, "science" => 75),
		array("name" => "다", "math" => 95, "english" => 82, "science" => 75));

	echo $students[0]["name"]."<br>";

	function total_score($students)
	{
		
		return $students["math"]+ $students["english"]+ $students["science"];

	}

	function average_score($total)
	{
		return ($total)/3;
	}

	//1번째 방법 - for문 사용하기
	

	//2번째 방법 - foreach문 사용하기 (최우선)
	foreach ($students as $student) {
		$name = $student["name"];
		$total = total_score($student);
		$average = average_score($total);

		echo "학생: $name<br>";
		echo "총점: $total<br>";

		echo "평균: $average<br>";

	}

	if ($average >= 60){
		echo "합격<br>";
	}else{
		echo "불합격<br>";
	}
	echo "<br>";

	
	$subjects = ["math", "english", "science"];

	
	foreach ($subjects as $subject) {
		$top_score = 0;
		$top_student = "";
		foreach($students as $student)
		{
			if ($student[$subject] > $top_score){
				$top_score = $student[$subject];
				$top_student = $student["name"];
			}
		}
		echo "최고점수: ".$top_score. "최고점수를 가진 학생: ". $top_student;
	}
?>