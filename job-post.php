<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require 'includes/links.php' ?>
    <title>PostJob - Post a Job</title>
</head>
<body>
    <?php require 'includes/header.php'; ?>
    <div class="container">
  <form action="job-posted.php" method="POST">
        <div class="row">
            <div class="col-25">
            <label for="cname">Company Name</label>
            </div>
            <div class="col-75">
            <input type="text" id="cname" name="companyname" placeholder="Your company.." required>
            </div>
        </div>
        <div class="row">
            <div class="col-25">
            <label for="jname">Position</label>
            </div>
            <div class="col-75">
            <input type="text" id="jname" name="jobname" placeholder="Job position for the employee.." required>
            </div>
        </div>
        <div class="row">
            <div class="col-25">
            <label for="contact">Contact</label>
            </div>
            <div class="col-75">
            <input type="text" id="contact" name="contact" placeholder="Contact email" required>
            </div>
        </div>
        <div class="row">
            <div class="col-25">
            <label for="category">Category</label>
            </div>
            <div class="col-75">
            <select id="category" name="category" required>
                <option value="none" selected disabled hidden>Select an Option</option> 
                <option value="Sales">Sales</option>
                <option value="IT">IT</option>
                <option value="Management">Management</option>
                <option value="Administration">Administration</option>
                <option value="Architecture">Architecture</option>
                <option value="Beauty Care">Beauty Care</option>
                <option value="Design">Design</option>
                <option value="Economy">Economy</option>
                <option value="Pharmacy">Pharmacy</option>
                <option value="Finance">Finance</option>
            </select>
            </div>
        </div>
        <div class="row">
            <div class="col-25">
            <label for="jobdescription">Job Description</label>
            </div>
            <div class="col-75">
            <textarea id="jobdescription" name="jobdescription" placeholder="Benefits.. Work hours.." style="height:200px"></textarea>
            </div>
        </div>
        <input type="hidden" name="timedate" value="<?php echo date('Y-m-d H:i:s'); ?>" readonly="readonly">
        <input type="hidden" name="ip" value="<?php echo $_SERVER['REMOTE_ADDR']; ?>" readonly="readonly">
        <br>
        <div class="row">
            <input type="submit" value="Submit">
        </div>
  </form>
</div>
</body>
</html>