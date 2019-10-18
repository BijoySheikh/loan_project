
<?php

include('sql_config.php');



if(isset($_POST["m_name"], $_POST["f_name"])){

    $m_name = mysqli_real_escape_string($conn, $_POST["m_name"]);
    $f_name = mysqli_real_escape_string($conn, $_POST["f_name"]);
    $phone_no = mysqli_real_escape_string($conn, $_POST["phone_no"]);
    $refer_name = mysqli_real_escape_string($conn, $_POST["refer_name"]);
    $present_addr = mysqli_real_escape_string($conn, $_POST["present_addr"]);
    $permanent_addr = mysqli_real_escape_string($conn, $_POST["permanent_addr"]);
    $loan_sirial = mysqli_real_escape_string($conn, $_POST["loan_sirial"]);
    $loan_date = mysqli_real_escape_string($conn, $_POST["loan_date"]);
    $loan_amount = mysqli_real_escape_string($conn, $_POST["loan_amount"]);
    $profit_amount = mysqli_real_escape_string($conn, $_POST["profit_amount"]);
    $total_amount = mysqli_real_escape_string($conn, $_POST["total_amount"]);
    $premier_amount = mysqli_real_escape_string($conn, $_POST["premier_amount"]);
    $savings_amount = mysqli_real_escape_string($conn, $_POST["savings_amount"]);
    $image = $_FILES['image']['name'];

}

$sql = "INSERT INTO all_member_form_data (m_name, f_name, phone_no, refer_name, present_addr, permanent_addr, loan_sirial, loan_date, loan_amount, profit_amount, total_amount, premier_amount, savings_amount, image)
 VALUES('$m_name', '$f_name', '$phone_no', '$refer_name', '$present_addr', '$permanent_addr', '$loan_sirial', '$loan_date', '$loan_amount', '$profit_amount', '$total_amount', '$premier_amount', '$savings_amount', '$image')";


if ($conn->query($sql) === TRUE) {
    $last_id = $conn->insert_id;  
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


header('location: single_view.php?id='. $last_id);



  // Image Upload Code

  if (isset($_POST['img_upload'])) {

  	// image file directory
  	$target = "images/".basename($image);

  	if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
  		$msg = "Image uploaded successfully";
  	}else{
  		$msg = "Failed to upload image";
  	}
  }


// sql to create table
$sql = "CREATE TABLE  ".$m_name.$f_name." (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    email VARCHAR(50),
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";
    
    if ($conn->query($sql) === TRUE) {
        echo "Table created successfully";
    } else {
        echo "Error creating table: " . $conn->error;
    }
    




  
  $conn->close();
?>



