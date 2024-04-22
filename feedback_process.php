<?php
    require_once("DBconnect.php");
    $type = $_POST['feedback_type'];
    $initial = $_POST['initial'];
    $semester = $_POST["semester_name"];
    $course = $_POST["course_name"];
    $rating = $_POST["rating"];
    $comment = $_POST["comment"];

    $sql = "INSERT INTO `feedback` (`user_id`, `initial`, `semester`, `course_name`, `rating`, `comment`) VALUES ('23101789', '$initial', '$semester', '$course', '$rating', '$comment')";
    $result = mysqli_query($conn, $sql);

    if($result) {
        echo "Feedback submitted successfully.";
    } else {
        echo "Error: " . mysqli_error($conn);
    }

?>
