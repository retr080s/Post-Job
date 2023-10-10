<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require 'includes/links.php' ?>
    <?php require 'includes/db-connection.php' ?>
    <?php 
    
    $sql = "SELECT * FROM info ORDER BY id DESC";
    $result = mysqli_query($conn, $sql);

    $allInfo = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $allInfo[] = $row;
    }
    ?>
    <title>PostJob - All Jobs</title>
</head>
<body>
    <?php require 'includes/header.php'; ?>
    <div class="newest-jobs-section">
        <h2>All jobs</h2>
    </div>
   <div class="job-position">
        <?php foreach ($allInfo as $info) {
        echo '<div class="job-info">';
            echo '<ul>';
                echo '<li>' . '<span class="orange-span-text">Company: </span> ' . htmlspecialchars($info['company']) . '</li>';
                echo '<li>' . '<span class="orange-span-text">Category: </span>' . htmlspecialchars($info['category']) . '</li>';
                echo '<li>' . '<span class="orange-span-text">Position: </span>' . htmlspecialchars($info['position']) . '</li>';
                echo '<li>' . '<span class="orange-span-text">Contact: </span>' . htmlspecialchars($info['contact']) . '</li>';
                echo '<li>' . '<span class="orange-span-text">Post date: </span>' . $info['date'] . '</li>';
            echo '</ul>';
        echo "</div>";
        }
        ?>
   </div>
</body>
</html>