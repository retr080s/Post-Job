<?php require 'includes/db-connection.php';
  
  if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $companyName = htmlspecialchars($_POST['companyname']);
    $jobName = htmlspecialchars($_POST['jobname']);
    $contact = htmlspecialchars($_POST['contact']);
    $category = $_POST['category'];
    $jobDescription = htmlspecialchars($_POST['jobdescription']);
    $timeDate = htmlspecialchars($_POST['timedate']);
    $ipAddress = htmlspecialchars($_POST['ip']);
  }
  
  $query = "INSERT INTO info VALUES('', '$companyName', '$jobName', '$contact', '$category', '$jobDescription', '$timeDate', '$ipAddress')";
  mysqli_query($conn, $query);

  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require 'includes/links.php' ?>
    <title>PostJob</title>
</head>
<body>
    <?php require 'includes/header.php'; ?>
    <h1 style="display: flex; justify-content: center; color: #fff;">Job posted successfully!</h1>
    <p style="display: flex; justify-content: center;"><span style="color: #fff">Go back to</span> <span class="orange-span-text"><a href="index.php" style="text-decoration: none; gap: 2px">&#8203; home page.</a></span></p>
</body>
</html>