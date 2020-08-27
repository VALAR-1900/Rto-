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
	<link rel="stylesheet" type="text/css" href="fine_payment.css">
</head>
<body>

<!-- <nav class="navbar navbar-expand-lg navbar-light navbar-laravel">
    <div class="container">
    <a class="navbar-brand" href="#">Laravel</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="#">Login</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Register</a>
            </li>
        </ul>

    </div>
    </div>
</nav> -->

<main class="my-form">
    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">Register</div>
                        <div class="card-body">
                            <form name="my-form" onsubmit="return validform()" action="fine_payment_back.php" method="POST">
                                <div class="form-group row">
                                    <label for="ID" class="col-md-4 col-form-label text-md-right">ID</label>
                                    <div class="col-md-6">
                                        <input type="number" id="full_name" class="form-control" name="ID">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="VID" class="col-md-4 col-form-label text-md-right">VID</label>
                                    <div class="col-md-6">
                                        <input type="number" id="email_address" class="form-control" name="VID">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="LID" class="col-md-4 col-form-label text-md-right">LID</label>
                                    <div class="col-md-6">
                                        <input type="text" id="user_name" class="form-control" name="LID">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="RULE_NUMBER" class="col-md-4 col-form-label text-md-right"> RULE_NUMBER</label>
                                    <div class="col-md-6">
                                        <input type="text" id="phone_number" class="form-control" name="RULE_NUMBER">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="RDATE" class="col-md-4 col-form-label text-md-right">DATE</label>
                                    <div class="col-md-6">
                                        <input type="date" id="present_address" class="form-control" name="RDATE">
                                    </div>
                                </div>

                                <!-- <div class="form-group row">
                                    <label for="permanent_address" class="col-md-4 col-form-label text-md-right">Permanent Address</label>
                                    <div class="col-md-6">
                                        <input type="text" id="permanent_address" class="form-control" name="permanent-address">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="nid_number" class="col-md-4 col-form-label text-md-right"><abbr
                                                title="National Id Card">NID</abbr> Number</label>
                                    <div class="col-md-6">
                                        <input type="text" id="nid_number" class="form-control" name="nid-number">
                                    </div>
                                </div> -->

                                    <div class="col-md-6 offset-md-4">
                                        <input type="submit" class="btn btn-primary" name="PAY">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
            </div>
        </div>
    </div>

</main>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</body>