<style type="text/css"> 
p, td, th { 
 font: 0.8em Arial, Helvetica, sans-serif; 
} 
 
p1, h1, h2 { 
 color: #33517A; 
} 
 
.datatable { 
 border: 1px solid #D6DDE6; 
 border-collapse: collapse; 
 width: 80%; 
} 
 
.datatable td { 
 border: 1px solid #D6DDE6;  
 padding: 4px; 
} 
 
.datatable th { 
 border: 1px solid #828282; 
 background-color: #BCBCBC; 
 font-weight: bold; 
 text-align: left; 
 padding-left: 4px; 
} 
 
.datatable caption { 
 font: bold 0.9em Arial, Helvetica, sans-serif; 
 color: #33517A; 
 text-align: left; 
 padding-top: 3px; 
 padding-bottom: 8px; 
} 
 
.datatable tr.altrow { 
 background-color: #DFE7F2; 
 color: #000000; 
} 
 
</style> 
 
</head> 
 
<body> 
 
<?php 
 
    // Connect to the database server 
    include('../dbConnect.inc'); 
    if (!$dbcnx) { 
 die('<p>Unable to connect to the '.'database server at this time.</p>'); 
    } 
 
    // Select the database 
    include('dbSelect.inc'); 
    if (!$dbslct) { 
 die('<p>Unable to locate the '.'database at this time.</p>'); 
    } 
 
    // Request the number of QSOs in the table 
    $num = @mysql_query('SELECT * FROM logbook'); // Returns a resource ID 
    if (!$num) { 
   die('<p>Error performing query: '.mysql_error().'</p>'); 
    } 
 
    $num1 = mysql_num_rows($num); // Uses that resource ID to count # rows 
    $num2 = $num1; // Use $num2 for a row switch when displaying table. 
     
    // Time period selection 
    if (date("A") == "AM") { 
   $ampm = "morning"; 
    } elseif((date("H")>=12) and (date("H")<18)) { 
   $ampm = "afternoon"; 
    } else { 
   $ampm = "evening"; 
    } //close time period selection 
 
 
    echo('<a HREF="/ham/ham.php">Back to Ham Radio</a><hr/>'); 
    echo('<h1>The K9PLX Internet Logbook</h1><br />'); 
    echo('<h2>Good '.$ampm.'. Here are the '.$num1.' QSOs logged since 2002.</h2>'); 
 echo('<hr>'); 
 echo('<span style="color:#33517A"><b>QSL code</b> (rightmost column): <b>C</b> = Card rec\'d | <b>E</b> = eQSL rec\'d | <b>L</b> = LoTW Confirmation</span>'); 
 echo('<hr>'); 
 
    // Request the selected fields from all the QSOs 
    $result = @mysql_query('SELECT QSO,qsoDate,qsoCall,qsoName,qsoBand,qsoMode,qsoCountry,qsoQsl,qslCard,qs lCard2 FROM logbook order by QSO desc'); 
    if (!$result) { 
 die('<p>Error performing query: '.mysql_error().'</p>'); 
    } 
 
    // Display as a table 
    // First define the table and print the heading row 
  echo('<table summary="K9PLX Logbook" class="datatable">'); 
  echo('<caption>In Reverse Order By Date And Time</caption>'); 
  echo('<tr>');  
    echo('<th scope="col">QSO#</th>');     
  echo('<th scope="col">Date</th>'); 
    echo('<th scope="col">Call</th>'); 
    echo('<th scope="col">Name</th>'); 
    echo('<th scope="col">Band</th>'); 
echo('<th scope="col">Mode</th>'); 
    echo('<th scope="col">Country</th>'); 
    echo('<th scope="col">QSL</th>'); 
    echo('<th scope="col">QSL Card (front)</th>'); 
    echo('<th scope="col">QSL Card (back)</th>'); 
  echo('</tr>'); 
 
    // Start the loop 
   while ( $row = mysql_fetch_array($result) ) {  
 $num2--; // Decrement the counter - acts as a switch for alternating rows 
 if (fmod($num2,2)==1){ 
  echo('<tr>'); 
 } 
 else { 
  echo('<tr class="altrow">'); 
 } 
   /* $bytes=$row['qslCard']; 
   $bytes2=$row['qslCard2']; */ 
 
     echo('<td>'.$row['QSO'].'</td>');    
     echo('<td>'.$row['qsoDate'].'</td>');     
     echo('<td>'.'<font color=navy>'.'<b>'.$row['qsoCall'].'</font>'.'</b>'.'</td>');    
     echo('<td>'.$row['qsoName'].'</td>');     
   echo('<td>'.$row['qsoBand']. ' ' . "Meters".'</td>');     
   echo('<td>'.$row['qsoMode'].'</td>');     
   echo('<td>'.$row['qsoCountry'].'</td>');    
   echo('<td>'.$row['qsoQsl'].'</td>');   
    
/*   FAILED ATTEMPT TO INCLUDE QSL CARD IMAGES, FRONT AND BACK 
   echo('<td>'; 
   header("Content-type: image/jpeg"); 
   print $bytes; 
   exit (); 
   echo('</td>'>; 
 
   echo('<td>'; 
header("Content-type: image/jpeg"); 
   print $bytes2; 
   exit (); 
   echo('</td>'>; 
 
   echo('</tr>');  */ 
 
    }    
 
 echo('</table>'); // Close the table 
 
?> 
 
</body> 
 
</html>