<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="registration.css">
</head>
<body>
<form action="registration_back.php" method="POST">
  <label>
    <p class="label-txt">VID</p>
    <input type="number" class="input" name="VID">
    <div class="line-box">
      <div class="line"></div>
    </div>
  </label>
  <label>
    <p class="label-txt">ID OF THE OWNER</p>
    <input type="number" class="input" name="ID">
    <div class="line-box">
      <div class="line"></div>
    </div>
  </label>
  <label>
    <p class="label-txt">PURPOSE</p>
    <input type="text" class="input" name="PURPOSE">
    <div class="line-box">
      <div class="line"></div>
    </div>
  </label>
  <input type="submit" name="submit">
</form>

<script type="text/javascript">
	$(document).ready(function(){

    $('.input').focus(function(){
    $(this).parent().find(".label-txt").addClass('label-active');
    });

    $(".input").focusout(function(){
    if ($(this).val() == '') {
      $(this).parent().find(".label-txt").removeClass('label-active');
    };
    });

});
</script>
</body>
</html>