
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<title>Login  </title>
<link rel="stylesheet" href="uti/style.css" />
<link rel="icon" type="image/x-icon" href="mylogo.png" />
<style>
	body{background-image: url("log.jpg");background-repeat:no-repeat;background-size: cover;}
.login{position:fixed;
left:32%;
top:22%;
width:35%;
height:70%;
background:linear-gradient(to left,#CCCCCC,#FFFFFF);
opacity:1;
border:none;
box-shadow: 3px 3px 5px #CCCCCC;
border-radius:25px;}
.login form input[type="submit"]{position:absolute;
left:15%;
top:84%;
width:150px;
height:50px;
border-radius:10px;
color:black;
font-size:24px;
 background: linear-gradient(to left,#FFCC66,#CCCCCC);}
 .login form input[type="submit"]:hover{opacity:0.9;
 background: linear-gradient(to left,#FFCC66,#CCCCCC);}


.login form span{position:absolute;
left:60%;
top:45%;
color:red;}

.lg1{position:absolute;
left:0%;
top:43%;
width:100%;
height:30%; margin-left:30px;}
.lg2{position:absolute;
left:0%;
top:62%;
width:100%;
height:30%;margin-left:30px;}
.l11,.l12{position:absolute;top:30px;left:3px;width:350px;height:25px;border-radius:10px;padding:12px;text-align:center;font-size:22px;font-style:oblique;border: 1px solid black;}
header{position:fixed;
left:0%;
top:0%;
width:100%;
height:17%;
border:none;

background-image: blue;
box-shadow: 0 10px 20px #666666;
color:white;
background-color: none;
}
h1.logn{letter-spacing:3px; font-size:50px;font-style:italic; text-align:center;margin-top:128px;border-bottom:2px solid black;text-shadow:0 0 20px #ff005b;}
.l11:hover,.l12:hover{width:349px;border-radius:12px}
:focus{outline:none;}
.phlog{position:absolute;
left:30%;
top:-2%;
height:27%;
width:40%;
	 clip-path:ellipse(50% 50%);
	 background:none;}.desc_page{position:fixed;
left:34%;
top:4.5%;
/*background-color:yellow;*/
}
h1.nom_app{
letter-spacing:4px;
font:Arial, Helvetica, sans-serif;
font-size:45px;
font-style:italic;
font-weight:900;
color:white;
text-shadow:0 0 20px #ff005b;
}
h1.nom_app:hover{color:black;
}
.lg1 label,.lg2 label{margin-left:10px;}
.sub:hover{cursor: pointer;}
</style>
</head>

<body onload="document.getElementById('k1').focus()">


<header>
<div class="desc_page">
<h1 class="nom_app"><span>Gestionnaire du stock</span></h1>
</div>
</header>

<main>
<div class="login">
<h1 class="logn">Login</h1>
<div class="phlog"><img src="img_son.png" width="100%" height="100%"></div>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" id="frm">
<div class="lg1">
<label> Nom d'utilisateur :</label>
<input type="text" value="<?= ''?>" autocomplete="off" name="username" class="l11" id="k1" placeholder="" required>
</div>
<div class="lg2">
<label>Mot de passe :</label>
<input type="password" value="" autocomplete="off" name="password" class="l12" id="k2" placeholder="">
</div>
<?php if(!empty($_GET['erreur']))
{echo"<span>Erreur de connexion</span>";}
?>
<input  type="submit" value="connecter" class="sub">
</form>
</div>
<?php 
if($_SERVER['REQUEST_METHOD']=="POST"){
	session_start();
$password=$_POST['password'];
$user=$_POST['username'];
  if(($password=="zakaria1609")&&($user=="zakaria16")){
$_SESSION['username']=$user;
$conn=mysqli_connect("localhost","root","","stock"); 
$date=date("y-m-d H:i:s");
$sql="INSERT INTO `conn`(`id_con`, `date`,`user`) VALUES ('','$date','$user')";
$conn->query($sql);
header('location:produit/produit.php');}
  else{header('location:login.php?erreur=1');}
}
?>
</main>
</body>
</html>
