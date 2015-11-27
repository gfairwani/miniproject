

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Auto Complete Input box</title>
<link rel="stylesheet" type="text/css" href="jquery.autocomplete.css" />
<link rel="stylesheet" type="text/css" href="style.css"/>
<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript" src="jquery.autocomplete.js"></script>

<script>
$(document).ready(function(){
 $("#tag").autocomplete("autocomplete.php", {
		selectFirst: true
	});
});
</script>
</head>

<html>
<head>
 <style type="text/css">
       
       body{
       
       	background-image:url(p7.jpg);
            background-image-repeat:no repeat+       
       }
        h1{font-weight:bold;}
       h1{margin:1 px; }
       h1{color:magenta;}
       h1{font-size:50px}
       h1{font-style:italic;}
       h1{line-height:130%;}

       p {color:red;}
       p {line-height:100%;}
       </style>
<title>welcome to my project</title>

</head>
<body bgcolor="#c1bdba">
<h1><center>welcome</center></h1>  



<marquee bgcolor="yellow"behavior="scroll"><font color="red"><h2>jai mata di</h2  ></marquee>


<form method='post' action='home.php'>
<p>
YEAR:<input type='text' placeholder="YEAR 1944 TO 2013" name='year'><br /><br />
<font color="red"><?php echo @$_GET ['YEAR']; ?></font>





NAME:<input name="tag" type="text" id="tag"  placeholder="NAME" size="20"/>
<br /><br/>
<font color="red"><?php echo @$_GET ['NUMBER'];?></font>



<select name='gender'>
<option value ='null'>Select Gender</option>
<option value ='Male'>Male</option>
<option value ='Female'>Female</option>
<option value ='Both'>Both</option>
</select><br /><br />
<font color="red"><?php echo @$_GET ['GENDER']; ?></font>






<input type='submit' name='submit' value='submit'>
 <input type="reset" name="reset" id="reset" value="clear all"></p>

</form>


 
 
 </body>
 </html>
 
 
 


 

 
 
 