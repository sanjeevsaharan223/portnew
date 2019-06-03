<?php
include "main2.php";
include "connect.php";

$query="SELECT * FROM `state` WHERE `applicationNo`='10000'";
$result = mysqli_query($link,$query);
$row=mysqli_fetch_array($result);
$state = $row['state'];
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>

</head>
<body class="bg-success">
<input type="hidden" value="<?php echo $state ?>" id="state">
<div class="container">
	<div class="row no-gutters h-100 justify-content-center">
		<div class="col-md-8 bg-light p-4 rounded">
			<h5 class="text-center text-light bg-success mb-2 p-2 rounded lead" id="result">hello world</h5>
			<div class="progress mb-2" style="height: 40px;">
			<div class="progress-bar bg-danger" role="progress-bar" style="width: 100%;" id="progressBar">
				<b class="lead" id="progressText">Step-4 Upload Photo And Sign</b>
			</div>
			</div>
			<form action="" method="post" id="form-data" enctype="multipart/form-data">
        <div id="fourth">
            <div class="input-group my-auto col-6">
                          <div class="custom-file">
                              <label class="my-auto p-4 "for="photo">Upload Photograph</label>
                              <input type="file" class="custom-file-input" id="photo" name="photo">
                              <label class="custom-file-label" for="photo">Choose file</label>
                          </div>
                          <div class="input-group-append">
                              <span class="input-group-text" id="">Upload</span>
                          </div>
                  </div>

                  <div class="input-group my-8 col-6">
                          <div class="custom-file">
                              <label class="my-auto p-2" for="sign">Upload Sign</label>
                              <input type="file" class="custom-file-input" id="sign" name="sign">
                              <label class="custom-file-label" for="sign">Choose file</label>
                          </div>
                          <div class="input-group-append">
                              <span class="input-group-text" id="">Upload</span>
                          </div>
                  </div>

                  <div class="form-group float-content-center">
                            <a href="step3.php" class="btn btn-danger" id="prev-4">Previous</a>
                            <input type="submit" name="submit" value="Submit" id="submit" class="btn btn-success">
                  </div>
        </div>

      </div>




        		</form>

        	</div>

  	</div>

</div>
<script  src="https://code.jquery.com/jquery-3.4.1.min.js"
          integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
          crossorigin="anonymous"></script>



</body>
</html>
