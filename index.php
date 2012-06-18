
//<?php
 // header('location: page2.php');
//?>

<html>
<head>



<title>String Operations</title>
</head>
<body>
<div style="background_color:'red'"><h1>String Operations:</h1></div>
<?php 


	
    $str1='PHP parses a file by looking for <br/> one of the special tags that tells it to start interpreting the text as PHP code. The parser then executes all of the code it finds until it runs into a PHP closing <br/> tag.';
    $str2='PHP does not require (or support) explicit type definition in variable declaration; a variables type is determined by the context in which the variable is used.';



//1.Find occurance of PHP from string 1.
    echo " 1. The no.of occurances of PHP is: ";
    $cnt= substr_count($str1,'PHP',0);
    echo "$cnt<br>";
//--------------------------------------------------------------------------------------------------------------------------------


    $strexplode=explode(" ",$str1);
    $strlength=strlen($strexplode);

//2. Find the position where PHP occures in the string 1.
    $j=a;
    echo "<br>2. ";
    for($i=0;$i<count($strexplode);$i++) 
    {
    	  if($strexplode[$i]=="PHP")
        {
            echo "$j. $i ,";
            $j++;
		  }
    }
    echo "<br>";
//-------------------------------------------------------------------------------------------------------------------------------------------------


//3. Create array of words in string 1 & print them using a recursive function.
echo "<br>3. ";
recarray($strexplode,count($strexplode),0); 
function recarray($array , $count ,$i){
    if($i==$count)
    return;
    else 
    {
         echo "$array[$i] ";
         recarray($array,$count,$i+1);
    }
}
   
//-------------------------------------------------------------------------------------------------------------------------------------------------------
//4. Capitalise string 1
    $strupper = strtoupper($str1);
    echo "<br><br>4 .$strupper<br>"; 
//-----------------------------------------------------------------------------------------------------------------------------------------------------


//5. Combine string 1 & 2. 
    echo "<br>5. $str1 $str2<br>";
//---------------------------------------------------------------------------------------------------------------------------------------------


//6. Echo string 1 & 2 using heredoc.
    echo "<br>6. '$str1 $str2'<br>";
//-------------------------------------------------------------------------------------------------------------------------------------------


//7. Print current date
    $date=date("Y-m-d");
    echo "<br>7. $date <br />";
//----------------------------------------------------------------------------------------------------------------------------------------------


//8. print 12th Jan 2012 
    $date = array('12', 'Jan', '2012');
    print("<br>8. The date is: ".implode("-",$date)."<br>");
//--------------------------------------------------------------------------------------------------------------------------------------------------


//9. add 7 days in current date
    $today=date();
    $nextday=strftime("%Y-%m-%d", strtotime("$today +7 day"));
    echo "<br>9. $nextday<br>";
//------------------------------------------------------------------------------------------------------------------------------------------------------ 

 
//10. Cut the string 1 into 4 parts & print it.
    $arrsplit = str_split($str1, 54);
    echo "<br>10. ";
    $i=1;
    foreach ($arrsplit as $value) {
        echo "$i: $value<br />\n";
        $i++;
    }
//------------------------------------------------------------------------------------------------------------------------------------------------------


//11. Divide the string 1 by occurances of '.'. Combine the array in reverse word sequence 
    $array = explode(".",$str1); 
    $array_r = array_reverse($array);
    $word_combined = "";
    foreach($array_r as $value1)
    {
        $word_combined = $word_combined.$value1;      
    }
    echo "<br>11. $word_combined<br>";
//----------------------------------------------------------------------------------------------------------------------------------------------------


//12. Remove the HTML characters from string.
    echo "<br>12. ";
    $remove_tags=strip_tags($str1); 
    echo "$remove_tags<br>";
//------------------------------------------------------------------------------------------------------------------------------------------------------
  
    
//13 Print the 'PHP' word from string 1 by traversing it using string functions
    $pos = strpos($str1, "PHP");
    $subpos=substr($str1,$pos,3);
    echo "<br>13. $subpos<br>";


//------------------------------------------------------------------------------------------------------------------------------------------------------- 
//14. Find the length of string 1 & 2 
    $len1=strlen($str1);
    $len2=strlen($str2);
    echo "<br>14. Length of string 1st is: $len1 and 2nd is:";
    echo " $len2 <br />";
//----------------------------------------------------------------------------------------------------------------------------------------------------------

 
//15. Create file & write string 1 to that file using PHP functions. 
    $file_name = "welcome.txt";
    $file_pointer = fopen($file_name, "w");
    fwrite($file_pointer,$str1); 
//--------------------------------------------------------------------------------------------------------------------------------------------------------


//16. Print all Global varibles provided by PHP
    echo "<br>16. ";
    phpinfo(INFO_VARIABLES);
//------------------------------------------------------------------------------------------------------------------------------------------------------------


//17. Usage and examples of Header (PHP) 



//----------------------------------------------------------------------------------------------------------------------------------------------------------------


//18. Redirect page 1 to page 2.
//---------------------------------------------------------------------------------------------------------------------------------------------------------------


//19. Compare two dates. (12-4-2010 & 12-5-2011). Calculate the days between these two dates. 
    $diff = strtotime('12-5-2011') - strtotime('12-4-2010');
    $days = floor($diff/(3600*24));
    echo "<br>19. Difference is $days days<br>";
//-------------------------------------------------------------------------------------------------------------------------------------------------------------


//20. Print date after 20 days from current date
    $today1=date();
    $twenty_days=strftime("%Y-%m-%d", strtotime("$today1 +20 day"));
    echo "<br>20.  $twenty_days<br>";
//--------------------------------------------------------------------------------------------------------------------------------------------------------------


//21. Print date in array format.
   
    echo "<br>21. Date in array format is: ";
    $today = getdate();
    print_r($today);
    echo "<br>";
//-----------------------------------------------------------------------------------------------------------------------------------------------------------------













?>


</body>
</html>