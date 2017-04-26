<!DOCTYPE html>
<html>
<head>
	<title></title>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<style type="text/css">
	.profile-img-card{
		display: block;
		margin-left: auto;
		margin-right: auto;
		
	}
</style>
</head>
<body>

	<div class="container">
	<div class="col-md-4"></div>
	<div class="col-md-4">
        <div class="card card-container">
            <!-- <img class="profile-img-card" src="//lh3.googleusercontent.com/-6V8xOA6M7BA/AAAAAAAAAAI/AAAAAAAAAAA/rzlHcD0KYwo/photo.jpg?sz=120" alt="" /> -->
            <img id="profile-img" class="profile-img-card" src="//ssl.gstatic.com/accounts/ui/avatar_2x.png" />
            <p id="profile-name" class="profile-name-card" ></p>
            <form class="form-signin" method="POST" action="test_session.php">
                 <span id="reauth-email" class="reauth-email"></span>
                <input type="text" id="inputEmail" class="form-control" placeholder="Vui lòng nhập tài khoản" name="username" value="<?php echo @$_COOKIE['user']; ?>" required autofocus>
                <input type="password" id="inputPassword" class="form-control" name="password" placeholder="Vui lòng nhập mật khẩu" value="<?php echo @$_COOKIE['password']; ?>" required>
                <div id="remember" class="checkbox">
                    <label>
                        <input type="checkbox" value="remember-me" name="nhoTk" > Ghi nhớ tài khoản
                    </label>
                </div>
                <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit" name="login">Đăng nhập</button>
            </form><!-- /form -->
            <a href="#" class="forgot-password">
                Forgot the password?
            </a>
        </div><!-- /card-container -->
        </div>
        <div class="col-md-4"></div>
    </div><!-- /container -->
</body>
</html>