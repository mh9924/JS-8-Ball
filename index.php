<?php
session_start();
if(isset($_SESSION['username'])) {
?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="refresh" content="8">
<!--<script type="text/javascript">
setTimeout(function(){
   window.location.reload('1');
}, 8000);
</script>
<script type="text/javascript">
setTimeout(function() { 
  window.location=window.location;}
  ,8000);
</script>  
-->
<title>PHP 8-Ball Script</title>
<style>
body {
  background-color: black;
  font-family: 'courier new';
}
h2.yellow,span.yellow {
  font-family: 'courier new';
  font-weight: bold;
  color: yellow;
}
h2.red,span.red {
  font-family: 'courier new';
  font-weight: bold;
  color: red;
}
h2.green,span.green {
  font-family: 'courier new';
  font-weight: bold;
  color: green;
}
h1,p {
  color: white;
  font-family: 'courier new';
}
</style>
</head>
<body>
<h1>PHP 8-Ball Script</h1>
<p>These are the normal answers you'd expect from an 8-ball! <br>Refresh the page for a different answer! (Refreshes automatically every 8 seconds). <br>Key: <span class="yellow">Yellow=Neutral</span> <span class="red">Red=Danger</span> <span class="green">Green=Good</span></p>
<?php
$randnum = rand(1,20); //8-Ball Icosahedron Answers
if($randnum == "1") {
    echo "<h2 class=\"red\">Signs point to yes.</h2>";
}
if($randnum == "2") {
    echo "<h2 class=\"green\">Yes.</h2>";
}
if($randnum == "3") {
    echo "<h2 class=\"yellow\">Reply hazy, try again.</h2>";
}
if($randnum == "4") {
    echo "<h2 class=\"green\">Without a doubt.</h2>";
}
if($randnum == "5") {
    echo "<h2 class=\"red\">My sources say no.</h2>";
}
if($randnum == "6") {
    echo "<h2 class=\"green\">As I see it, yes.</h2>";
}
if($randnum == "7") {
    echo "<h2 class=\"green\">You may rely on it.</h2>";
}
if($randnum == "8") {
    echo "<h2 class=\"yellow\">Concentrate and ask again.</h2>";
}
if($randnum == "9") {
    echo "<h2 class=\"red\">Outlook not so good.</h2>";
}
if($randnum == "10") {
    echo "<h2 class=\"green\">It is decidedly so.</h2>";
}
if($randnum == "11") {
    echo "<h2 class=\"yellow\">Better not tell you now.</h2>";
}
if($randnum == "12") {
    echo "<h2 class=\"red\">Very doubtful.</h2>";
}
if($randnum == "13") {
    echo "<h2 class=\"green\">Yes - definitely.</h2>";
}
if($randnum == "14") {
    echo "<h2 class=\"green\">It is certain.</h2>";
}
if($randnum == "15") {
    echo "<h2 class=\"yellow\">Cannot predict now.</h2>";
}
if($randnum == "16") {
    echo "<h2 class=\"green\">Most likely.</h2>";
}
if($randnum == "17") {
    echo "<h2 class=\"yellow\">Ask again later.</h2>";
}
if($randnum == "18") {
    echo "<h2 class=\"red\">My reply is no.</h2>";
}
if($randnum == "19") {
    echo "<h2 class=\"green;\">Outlook good.</h2>";
}
if($randnum == "20") {
    echo "<h2 class=\"yellow\">Don&#x27;t count on it.</h2>";
}
?>
</body>
</html>
<?php
} else {
	echo "<script>location=\"http://henrys1teg4mes.tk/login.php\";</script>";
	}
?>