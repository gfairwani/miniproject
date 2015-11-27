<html>
<head>
 <style type="text/css">
 body
 h1{font-weight:bold;}
       h1{margin:1 px; }
       h1{font-size:50px}
       h1{font-style:italic;}
       h1{line-height:130%;}
       </style>
<title>result</title>
</head>
<body bgcolor='#D2B48C'>
<h1><center><font color='#228B22'>QUERY RESULT</center></h1>

<h2><marquee behavior="alternate" scrollamount='7' bgcolor='red'><font color="yellow">DETAILS</marquee></h2>



<table width='400' align="center" border='3' bgcolor='#FFF'>

<tr>
<th bgcolor='#1ab188' align="center" width="100"><strong>YEAR</strong></th>
<th bgcolor='#1ab188' align="center" width="100"><strong>AMOUNT</strong></th>

</tr>
</table>



</body>
</html>




<?php

$conn=mysql_connect("localhost","root");
$db=mysql_select_db('babynames',$conn);




	        $year1 = $_POST['year'];
            $name1 = $_POST['tag'];
            $gender1 = $_POST['gender'];
		   
		   
		  if(isset($_POST['submit']))
          {
           
			                if($year1==''|| $year1>2013 || $year1<1944)
                            {
	                                   
									     echo 
		                                   "<script>window.open('index.php?YEAR=Year Is Invalid','self')</script>";
		                                        exit();
	                        }
							else if($gender1=='null')
                            {
		                                	 
		                                  echo 
		                             "<script>window.open('index.php?GENDAR=Please Select option','self')</script>";
		                                exit();
	                        }
						   else
	                       {
		                            if($gender1=='Both')
		                             {
										 
										      ?>

	                                             <h1>MALE LIST</h1>
												<?php
										    
                             	             $store="male";
											 $count=0;
											 $check=(2013-$year1)+1;
											
				                            
 		                     
                                            for($i=$year1;$i<=2013;$i++)
                                            {
                                						   
                                                 
                                                   $strQuery = "SELECT  amount from $store$i where name='$name1'";
                                                   $result = mysql_query($strQuery);
												   $row = mysql_fetch_array($result);
			                                        $amount= $row[0];
													if (empty($amount))
													{
														 $count=$count+1;
														 continue;
                                                    }
                                                     else
													 {

			                                          $year= $i;
													  ?>

	                                             <table width="200" align="center" border="3" bgcolor="brown">
                                                <tr>
                                                <td align="left" width="100"><?php echo $year;?> </td>
			                                    <td align="right" width="100"><?php echo $amount;?> </td>
			                                   
                                                </tr>
												</table>
												<?php
													 }
											}
											 echo nl2br("\n");
											  echo nl2br("\n");
											 if($check==$count)
											 {
												 echo "THIS NAME IS NOT FOUND IN MALE TABLE";
											 }
											     $store="Female";
												  ?>

	                                             <h1>FEMALE LIST</h1>
												<?php
										    
											     echo nl2br("\n");
												  
											$count=0;
											 for($i=$year1;$i<=2013;$i++)
                                            {
                                						   
                                                   $strQuery = "SELECT  amount from $store$i where name='$name1'";
                                                   $result = mysql_query($strQuery);
												   
		                                             $row = mysql_fetch_array($result);
			                                          $amount= $row[0];
													  if (empty($amount))
													  { 
														  $count=$count+1;
														  continue;
                                                       }
			                                          $year= $i;
													  ?>

	                                             <table width="200" align="center" border="3" bgcolor="yellow">
                                                <tr>
                                                <td align="left" width="100"><?php echo $year;?> </td>
			                                    <td align="right" width="100"><?php echo $amount;?> </td>
			                                   
                                                </tr>
												</table>
												<?php
												  
											}
											echo nl2br("\n");
											  echo nl2br("\n");
											 if($check==$count)
											 {
												 echo "THIS NAME IS NOT FOUND IN FEMALE TABLE";
											 }
													
													
			                             }
									else
									{
										$count=0;
										$check=(2013-$year1)+1;
										 for($i=$year1;$i<=2013;$i++)
                                            {
                                						   
                                                 
                                                   $strQuery = "SELECT  amount from $gender1$i where name='$name1'";
                                                   $result = mysql_query($strQuery);
												   $row = mysql_fetch_array($result);
			                                        $amount= $row[0];
													if (empty($amount))
													{
														 $count=$count+1;
														 continue;
                                                    }
                                                     else
													 {

			                                          $year= $i;
													  ?>

	                                             <table width="200" align="center" border="3" bgcolor="brown">
                                                <tr>
                                                <td align="left" width="100"><?php echo $year;?> </td>
			                                    <td align="right" width="100"><?php echo $amount;?> </td>
			                                   
                                                </tr>
												</table>
												<?php
													 }
											}
											 echo nl2br("\n");
											  echo nl2br("\n");
											 if($check==$count)
											 {
												 echo "THIS NAME IS NOT FOUND IN $gender1 TABLE";
											 }
									}
								}
		                  }								   

						   ?>