 <?php
    
	$q=$_GET['q'];
	$my_data=mysql_real_escape_string($q);
	$mysql=mysql_connect('localhost','root');
    $db=mysql_select_db('babynames',$mysql);
	 //echo $year1 = $_POST['year'];
	  //echo $gender1 = $_POST['gender'];
     	
	$sql="SELECT distinct name FROM male1945 WHERE name LIKE '$my_data%' ORDER BY name";
	//$sql="SELECT name FROM male1945";
	$result = mysql_query($sql) or die(mysql_error());
	
	
	if($result)
	{
		while($row=mysql_fetch_array($result))
		{
		
			echo $row['name']."\n";
		}
		
	}
	
		   
?>