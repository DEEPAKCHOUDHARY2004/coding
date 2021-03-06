
<?php
include_once('mail.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TrickuWeb</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="styles/website.css">
</head>

<body>


  <div class="container mt-5 mycareer">
    <div class="row">
      <div class="col-md-8" style="margin:0 auto; float:none;">
        <h3 align="center">Build Your Career With TrickuWeb</h3>
        <br />
        <h4 align="center">Please fill this form</h4><br />
                <form method="post" enctype="multipart/form-data">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label>Enter Name</label>
                <input type="text" name="name" placeholder="Enter Name" class="form-control" required />
              </div>
              <div class="form-group">
                <label>Enter Address</label>
                <textarea name="address" placeholder="Enter Address" class="form-control" required></textarea>
              </div>
              <div class="form-group">
                <label>Enter Email Address</label>
                <input type="email" name="email" class="form-control" placeholder="Enter Email Address" required />
              </div>
              <div class="form-group">
                <label>Select Your Skills</label>
                <select name="skills[]" class="form-control" multiple  style="height:150px;" required>
                  <option value="Flutter">Flutter</option>
                  <option value="Laravel">Laravel</option>
                  <option value="Django">Django</option>
                  <option value="Firebase">Firebase</option>
                  <option value="Android">Android</option>
                  <option value="Data Engineer">Data Engineer</option>
                  <option value="AI & Data Science">AI & Data Science</option>
                  <option value="Arduino & Raspberry Pi">Arduino & Raspberry Pi</option>
                </select>
              </div>

            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Select Year of Experience</label>
                <select name="experience" class="form-control" required>
                  <option value="">Select Experience</option>
                  <option value="0-1 years">0-1 years</option>
                  <option value="2-3 years">2-3 years</option>
                  <option value="4-5 years">4-5 years</option>
                  <option value="6-7 years">6-7 years</option>
                  <option value="8-9 years">8-9 years</option>
                  <option value="10 or more years">10 or more years</option>
                </select>
              </div>
              <div class="form-group">
                <label>Enter Mobile Number</label>
                <input type="text" name="mobile" placeholder="Enter Mobile Number" class="form-control" pattern="\d*" required />
              </div>
              <div class="form-group">
                <label>Select Your Resume</label>
                <input type="file" name="resume" accept=".doc,.docx,.pdf"/ required>
              </div>
              <div class="form-group">
                <label>Enter Additional Information</label>
                <textarea name="additional_information" placeholder="Enter Additional Information" class="form-control" required rows="8"></textarea>
              </div>
            </div>
          </div>
          <div class="form-group" align="center">
            <input type="submit" name="submit" value="Submit" class="btn btn-lg btn-success" />
          </div>
        </form>
      </div>
    </div>
  </div>

</body>

</html>


