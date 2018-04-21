<?php;
session_start();
include('server.php'); 
echo <<<_END
<html>
<head>
<title>$username</title>
</head>
<body>
<p>
<h3>Upload new files</h3>
<form method='post' action='page.php' enctype='multipart/form-data'>
Please Select Files: <input type='file' name='filename' size = '50'>
<input type= 'submit' value= 'Upload!!'>

_END;

if(!file_exists('userdb/')){
	mkdir('userdb/$username')
}
if($_FILES) {
	$fname = $_FILES['filename']['name'];
	move_uploaded_file($_FILES['filename']['tmp_name'], 'userdb/$username');
}

echo '<br><br><br>';

<h3> Your Files</h3>
if(isset($_POST['$link'];
{  unlink('userdb/$username/$link');
}
$list = scandir('userdb/$username');

$n = sizeof('$readings') + 2 ;
echo "Total no. of files ".$n-2 ;
for($i=0;$i<=$n ; $i++) {
  $link = $readings[$i];
echo "<br> $link ";
echo <<<_END
<p align="RIGHT"> 
<a href = 'userdb/$username/$link' > View </a>
<a href = 'userdb/$username/$link' download> Download </a> "; ";
<form method-'post' action='page.php' >
<input type='submit' name='$link' value='Delete'>

<br><br> <h5> That's IT!!</h5>
_END
}
echo '<br><br>';

echo "<a href="logout.php" align="Center"> Logout </a>;

?>

