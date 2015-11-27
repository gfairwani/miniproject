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



<table width='200' align="center" border='3' bgcolor='#FFF'>

<tr>
<th bgcolor='#1ab188' align="center" width="100"><strong>NAME</strong></th>
<th bgcolor='#1ab188' align="center" width="100"><strong>AMOUNT</strong></th>
<th bgcolor='#1ab188' align="center" width="100"><strong>POSITION</strong></th>
</tr>
</table>



</body>
</html>







<?php
 $conn=mysql_connect("localhost","root");
 $db=mysql_select_db('babynames',$conn);
 $year1 = $_POST['year'];
 $people_quantity1 = $_POST['people_quantity'];
  $gender1 = $_POST['gender'];
  
  if(isset($_POST['submit']))
  {
	  
	  if($year1==''|| $year1>2013 || $year1<1944)
      {
	      echo 
		 "<script>window.open('p1.php?YEAR=Year Is Invalid','self')</script>";
		 echo "the limit exceeded";
		
		 
		 
		 exit();
	  
      }
	   else if($people_quantity1==''|| $people_quantity1>1000 || $people_quantity1<10)
      {
	       echo 
		  "<script>window.open('p1.php?NUMBER=Not In Range','self')</script>";
		   exit();
	  
      }
	  
	   
	  else if($gender1=='null')
      {
		  
		  
	      echo 
		 "<script>window.open('p1.php?GENDAR=Please Select option','self')</script>";
		  exit();
	  
      }
	  else
	  {
		  if($gender1=='Both')
		  {
			     
			     echo nl2br("\n");	
			     $store="Male";
 		         $male_table="$store$year1";
			    $que= "select count(*) from $male_table";
			    $run= mysql_query($que);
			    $row=mysql_fetch_array($run);
		        $count= $row[0];
			  
			   if($count<$people_quantity1)
			   {
				   
				  echo "The limit of male record exceeded";
                   echo nl2br("\n");	
                        echo nl2br("\n");
                    echo nl2br("\n"); 
                  echo nl2br("\n");	 
			   }  
			  else
		      {		  
			        echo "TOP MALE LIST";

                   		 
		
			         $que= "SELECT name,amount,position
                     FROM $male_table
                     ORDER BY amount DESC
                     LIMIT $people_quantity1";
					 
		              $run= mysql_query($que);
			 
			  while($row=mysql_fetch_array($run))
		      {
			         $name= $row[0];
			         $amount= $row[1];
			         $position=$row[2];
			 
		      ?>

	         <table width="200" align="center" border="3" bgcolor="brown">
             <tr>
             <td align="left" width="100"><?php echo $name;?> </td>
			 <td align="right" width="100"><?php echo $amount;?> </td>
			 <td align="right" width="100"><?php echo $position;?> </td>
             </tr>
             </tr>
			 
			 </table>
			 
		     <?php }
			  }
			 
			 
			   $temp="Female";
               $female_table="$temp$year1";	
			  $que= "select count(*) from $female_table";
			  $run= mysql_query($que);
			  $row=mysql_fetch_array($run);
		      $count= $row[0];
			    //echo $count;
			   if($count<$people_quantity1)
			   {
				  echo "The limit of female record exceeded";  
				   echo nl2br("\n");	
			   }
               else
               {
                    echo "TOP FEMALE LIST";
			        echo nl2br("\n");					   
			 	  $que= "SELECT name,amount,position
                  FROM $female_table
                  ORDER BY amount DESC
                  LIMIT $people_quantity1";
				  $run= mysql_query($que);
			      while($row=mysql_fetch_array($run))
		         {
			         $name= $row[0];
			         $amount= $row[1];
			         $position=$row[2];
			 
		        ?>

	         <table width="200" align="center" border="3" bgcolor="yellow">
             <tr>
             <td align="left" width="100"><?php echo $name;?> </td>
			 <td align="right" width="100"><?php echo $amount;?> </td>
			 <td align="right" width="100"><?php echo $position;?> </td>
             </tr>
			 </table>
		     <?php }
			}
			 
		  }
		 else
		  {
		       
		       $c="$gender1$year1";
		       //echo $c;
			   $que= "select count(*) from $c";
			   $run= mysql_query($que);
			   $row=mysql_fetch_array($run);
		       $count= $row[0];
			   //echo $count;
			  if($count<$people_quantity1)
			  {
				  echo "The limit of record exceeded";  
			  }  
			  else
			  {  
			 
			    
		      $que= "SELECT name,amount,position
                     FROM $c
                     ORDER BY amount DESC
                     LIMIT $people_quantity1";
					
               $run= mysql_query($que);
			   
		      while($row=mysql_fetch_array($run))
		      {
			         $name= $row[0];
			         $amount= $row[1];
			         $position=$row[2];
			 
		      ?>

	 <table width="200" border="3" align="center" bgcolor="brown">
             <tr>
             <td align="left" width="100"><?php echo $name;?> </td>
			 <td align="right" width="100"><?php echo $amount;?> </td>
			 <td align="right" width="100"><?php echo $position;?> </td>
			 

             </tr>
			 </table>
		     <?php }
		 } 
		  }	 
	  }
  }	  
	  ?>	 
			 
