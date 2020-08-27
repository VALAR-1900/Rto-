<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" type="text/css" href="license_clearance.css">
</head>
<body>
<!-- Button to open the modal -->
<button onclick="document.getElementById('id01').style.display='block'">FILL THE RESULTS</button>

<!-- The Modal (contains the Sign Up form) -->
<div id="id01" class="modal">
  <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">RTO;</span>
  <form class="modal-content" action="license_clearance_back.php" method="POST">
    <div class="container">
      <h1>PASS OR FAIL</h1>  
      <p>Please fill in this form to apply for license.</p>
      <hr>
      <label for="ID"><b>ID</b></label>
      <input type="NUMER" placeholder="Enter ID" name="ID" required>

      <br>
      <br>

      <label for="A"><b> A =>  PASS </b></label>
      <input type="radio" name="A" value="PASS">
      <label for="A"><b>  FAIL </b></label>
      <input type="radio" name="A" value="FAIL" checked="checked">

      <br>

      <label for="B"><b> B =>  PASS </b></label>
      <input type="radio" name="B" value="PASS">
      <label for="B"><b>  FAIL </b></label>
      <input type="radio" name="B" value="FAIL" checked="checked">

      <br>

      <label for="C"><b> C =>  PASS </b></label>
      <input type="radio" name="C" value="PASS">
      <label for="C"><b>  FAIL </b></label>
      <input type="radio" name="C" value="FAIL" checked="checked">

      <br>

      <label for="D"><b> D =>  PASS </b></label>
      <input type="radio" name="D" value="PASS">
      <label for="D"><b>  FAIL </b></label>
      <input type="radio" name="D" value="FAIL" checked="checked">

      <br>

      <label for="E"><b> E =>  PASS </b></label>
      <input type="radio" name="E" value="PASS">
      <label for="E"><b>  FAIL </b></label>
      <input type="radio" name="E" value="FAIL" checked="checked">

      <br><br>

      <!-- <label>
        <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
      </label> -->

      

      <div class="clearfix">
        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
        <button type="submit" name="submit" class="signup">Submit</button>
      </div>
    </div>
  </form>
</div>
</body>
</html>
<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>