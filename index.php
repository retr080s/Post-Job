<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require 'includes/db-connection.php' ?>
    <?php 
    
    $sql = "SELECT * FROM info LIMIT 3";
    $result = mysqli_query($conn, $sql);

    $allInfo = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $allInfo[] = $row;
    }


    ?>
    <?php require 'includes/links.php' ?>
    <title>PostJob</title>
</head>
<body>
     <?php require 'includes/header.php'; ?>
     <section class="main-section-text">
         <h1 style="color: #fff; ">The old school way of posting jobs.</h1>
         <p style="color: #fff;">Post<span class="orange-span-text">Job</span> is a platform that lets employers post jobs in a traditional way for free.</p>
         <a href="job-post.php"><button class="try-now-btn">Try Now</button></a>
    </section>
    <div class="newest-jobs-section">
        <h2>Newest jobs</h2>
    </div>
   <div class="job-position">
        <?php foreach ($allInfo as $info) {
        echo '<div class="job-info">';
            echo '<ul>';
                echo '<li>' . 'Company: ' . $info['company'] . '</li>';
                echo '<li>' . 'Category: ' . $info['category'] . '</li>';
                echo '<li>' . 'Position: ' . $info['position'] . '</li>';
                echo '<li>' . 'Contact: ' . $info['contact'] . '</li>';
                echo '<li>' . 'Post date: ' . $info['date'] . '</li>';
            echo '</ul>';
        echo "</div>";
        }
        ?>
   </div>
</body>
</html>