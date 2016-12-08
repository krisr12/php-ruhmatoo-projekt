<?php
require("../function/login.php");
if (!empty($_POST["name"])) {
	echo "Kasutajanimi sisestatud";
	$name = $_POST["name"];
	if (!empty($_POST["pass"])) {
		echo "Parool sisestatud.";
		$startLogin = 1;
	} else {
		echo "Parooli ei sisestatud";
		$startLogin = 0;
	}

} else {
	echo "Kasutajanime ei sisestatud";
	$startLogin = 0;
}

if ($startLogin == 1) {
	echo "Alustasin sisselogimisega.";
	
	logIn($_POST["name"], $_POST["pass"]);
}
?>
<link rel="stylesheet" type="text/css" href="../styles/login.css">


<title>Töömehe leidja</title>


<div class="materialContainer">

   <div class="box">

      <div class="title">Logi sisse</div>

      <div class="input">
	 <form method="post">
         <label for="name">E-mail</label>
         <input type="email" name="name" id="name" value="<?php echo $name; ?>">
         <span class="spin"></span>
      </div>

      <div class="input">
         <label for="pass">Parool</label>
         <input type="password" name="pass" id="pass">
         <span class="spin"></span>
      </div>

      <div class="button login">
         <input type="submit" value="Logi sisse" class="fa fa-check">
	</div>
	</form>

      <a href="" class="pass-forgot">Unustasid parooli?</a>

   </div>

</div>
</html>
