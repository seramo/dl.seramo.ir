<!doctype html>
<html lang="en-US">
<head>
	<meta charset="utf-8">
	<title>آپلود</title>
</head>

<body>
  
	<div id="upload">

		<h2><span class="fontawesome-upload"></span>آپلود</h2>

		<form method="POST">

			<fieldset>

				<p><span class="fontawesome-link"></span><label for="link">لینک :</label>
				<p><input type="text" id="input" name="link" placeholder="لطفا لینک را وارد کنید" required autofocus></p>

        <p><span class="fontawesome-lock"></span><label for="password">رمز عبور :</label></p>
				<p><input type="password" name="pass" placeholder="لطفا رمز عبور را وارد کنید" id="Input" required></p>

				<p><input type="submit" value="آپلود" name="send" class="Button"></p>

			</fieldset>

		</form>

	</div> <!-- end login -->

</body>	
</html>
<?php
    $pass = "00";
	if(isset($_POST["send"])) { 
		if($_POST["pass"] == "$pass") {
			//--------------don't edit blow this line-----------------//
			$url = $_POST["link"];
			$name = basename($url);
			file_put_contents("[SeRaMo.iR]-$name", file_get_contents($url));
			echo "<div class=\"success\">با موفقیت آپلود شد</div>";
		} else {
			echo "<div class=\"error\">خطایی رخ داد</div>";
		}
	}	
?>