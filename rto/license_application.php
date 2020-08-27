<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="license_application.css">
</head>
<body>
<!-- Button to open the modal -->
<button onclick="document.getElementById('id01').style.display='block'">APPLY</button>

<!-- The Modal (contains the Sign Up form) -->
<div id="id01" class="modal">
  <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">RTO;</span>
  <form class="modal-content" action="license_application_back.php" method="POST">
    <div class="container">
      <h1>REGISTER</h1>  
      <p>Please fill in this form to apply for license.</p>
      <hr>
      <label for="ID"><b>ID</b></label>
      <input type="NUMER" placeholder="Enter ID" name="ID" required>

      <br>
      <br>

      <label for="A"><b> A =>  YES </b></label>
      <input type="radio" name="A" value="APPLIED">
      <label for="A"><b>  NO </b></label>
      <input type="radio" name="A" value="N.A.">

      <br>

      <label for="B"><b> B =>  YES </b></label>
      <input type="radio" name="B" value="APPLIED">
      <label for="B"><b>  NO </b></label>
      <input type="radio" name="B" value="N.A.">

      <br>

      <label for="C"><b> C =>  YES </b></label>
      <input type="radio" name="C" value="APPLIED">
      <label for="C"><b>  NO </b></label>
      <input type="radio" name="C" value="N.A.">

      <br>

      <label for="D"><b> D =>  YES </b></label>
      <input type="radio" name="D" value="APPLIED">
      <label for="D"><b>  NO </b></label>
      <input type="radio" name="D" value="N.A.">

      <br>

      <label for="E"><b> E =>  YES </b></label>
      <input type="radio" name="E" value="APPLIED">
      <label for="E"><b>  NO </b></label>
      <input type="radio" name="E" value="N.A.">

      <br><br>

      <!-- <label>
        <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
      </label> -->

      

      <div class="clearfix">
        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
        <button type="submit" name="submit" class="signup">Sign Up</button>
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