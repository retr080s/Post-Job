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
  <form action="job-posted.php">
  <div class="row">
    <div class="col-25">
      <label for="cname">Company Name</label>
    </div>
    <div class="col-75">
      <input type="text" id="cname" name="companyname" placeholder="Your company..">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="jname">Position</label>
    </div>
    <div class="col-75">
      <input type="text" id="jname" name="jobname" placeholder="Job position for the employee..">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="contact">Contact</label>
    </div>
    <div class="col-75">
      <input type="text" id="contact" name="contact" placeholder="Contact email">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="category">Category</label>
    </div>
    <div class="col-75">
      <select id="category" name="category">
        <option value="none" selected disabled hidden>Select an Option</option> 
        <option value="sales">Sales</option>
        <option value="management">Electrical Engineering</option>
        <option value="administration">Administration</option>
        <option value="architecture">Architecture</option>
        <option value="beauty care">Beauty Care</option>
        <option value="design">Design</option>
        <option value="economy">Economy</option>
        <option value="pharmacy">Pharmacy</option>
        <option value="finance">Finance</option>
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
  <br>
  <div class="row">
    <input type="submit" value="Submit">
  </div>
  </form>
</div>
</body>
</html>