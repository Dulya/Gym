<?php

if (isset($_POST['member_id'])) {
    
    $plan_type    = rtrim($_POST['name']);
    $trainer_list = rtrim($_POST['details']);
    $days    = rtrim($_POST['days']);
    $rate    = rtrim($_POST['rate']);
    $member_id = $_POST['member_id'];
    
	$this->load->model("submit_plan_model");
    mysqli_query($con, "INSERT INTO mem_types (mem_type_id,name,days,rate,details)
VALUES ('$p_id','$name','$days','$rate','$details')");
    echo "<meta http-equiv='refresh' content='0; url=view_plan.php'>";
} else {
    echo "<head><script>alert('Profile NOT Updated, Check Again');</script></head></html>";
    echo "<meta http-equiv='refresh' content='0; url=view_plan.php'>";
    
}
?>