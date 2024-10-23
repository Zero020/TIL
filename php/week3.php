<!--<?php
    echo "주간 근무 : 9,500원<br>";
    echo "야간 근무 : 주간 시급 * 1.5<br>";
    echo "주말 근무 : 주간시급 * 2 (주간/야간 모두 적용)<br>";
    echo "주말 근무 : 야간 시급 * 1.5 * 2<br>";

    $hour_rate = 9500;
     
    $day_time = 5;
    $night_time = 3;
    $is_weekend = true;

    if ($is_weekend) {
        $day_pay = $hour_rate * $day_time*2;
        $night_pay = $hour_rate * $night_time * 2 * 1.5;
     }   
    else{ //주간
        $day_pay = $hour_rate * $day_time;
        $night_pay = $hour_rate * $night_time * 1.5;
        
     }

    echo "총 급여는 ".$day_pay + $night_pay."원  입니다.";
 ?>-->


 <!--<?php
    $month = 12;

    if ($month < 1 || $month > 12){
        echo "잘못입력하셨습니다.";
    }
    else{
             if ($month>=3 && $month<=5) { 
                $season = '봄';
                $activity = "꽃 구경";
            } 
            elseif ($month>=6 && $month<=8) {
                $season = '여름';
                $activity = "해수욕";
            }
            elseif ($month >=9 && $month <=11) {
                $season = '가을'; 
                $activity  = "단풍구경";
            }
            elseif ($month==12 || $month== 1 || $month== 2 ) {
                $season = '겨울'; 
                $activity = "스키타기";
            }
            echo $month."월은". $season. "입니다. 추천하는 활동은 ".$activity;
    }
    
 ?>-->

 <!--<?php
    $month = 12;

    switch ($month) {
        case 1:
        case 12:
        case 2:
            $season = '겨울'; 
            $activity = "스키타기";
            break;
        default:
            // code...
            break;
    }

    echo $month."월은". $season. "입니다. 추천하는 활동은 ".$activity;

 ?>-->

<!-- <?php
$score = 85;
if ($score >= 80){
    $grade = 'A';
}

switch ($grade){
    case 'A':
        echo "A : 학점 A 훌륭합니다.";
        break;
    default:
        break;

}


?>-->

<?--<?php
    $rank = "골드";
    $pay = 150000;
    $is_coupon = true;


    switch ($rank){
        case "일반":
            $discount = 0.02;
            break;
        case "실버":
            $discount = 0.05;
            break;
        case "골드":
            $discount = 0.1;
            break;
        default:
            echo "기타 : 잘못된 회원등급입니다.";
            break;
    }
    $total_pay = $pay * (1 - $discount);

    if ($total_pay >= 200000)
    {
        $extra_discount = 0.05;
    }
    elseif($total_pay >= 100000)

    {
        $extra_discount = 0.03;
    }

    if ($is_coupon){
        $extra_discount += 0.05;
    }

    $total_result = $pay * (1 - ($discount + $extra_discount));

    if ($total_result >= 100000){
        $restore = $total_result * 0.02;
    }

    $total_discount = ($discount + $extra_discount)*100;
    echo $pay. "   ".$total_discount. "   ".$total_result. "   ".$restore;
?>-->


<form method = "POST" action = "">
    <label for = "price">상품가격 </label>
    <input type = "number" id = "price" required><br><br>
    <select id = "membership" name = "membership" required>
        <option value = "실버">일반</option>
        <option value="골드">골드</option>
        <option value ="일반">일반ㄴ</option>
    </select><br>

    <input type = "checkbox" id = "coupon">
    <input type = "submit">
</form>

<?php
    if ($_SERVER["REQUEST_METHOD"]=="POST"){
        $value = $_POST['membership'];
        echo $value;
    }

?>