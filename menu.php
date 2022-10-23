<?php
echo("1. Create"."\n");
echo("2. Read\n");
echo("3. Write\n");
echo("4. Append\n");
echo("5. Copy\n");
echo("6. Delete\n");
echo("7. Exit\n");   
$num=(int)readline("Plesae Choose an Option : ");   
switch($num){  

case 1:      
echo("Creating a file by getting file form user \n File has been created");
$file1 = fopen("newfile.txt", "w") or die("Unable to open file!");
// $txt = "Hi Mark\n";
// fwrite($ffile1, $txt);
// $txt = "Hi Luke\n";
// fwrite($file1, $txt);
// fclose($file1);
// echo("\n");
// readfile("newfile.txt");
break; 

case 2:      
echo("Reading the name of the file \n");
$file3=readline("Please give the name of the file : ");
$file2 = fopen($file3, "w+");
fwrite($file2,"Hi,I'm Rohit King of Kings ");
fclose($file2);
if(!file_exists("$file3"))
      {
          echo "Error NOOB User :File doesn't exist";
      }
else{
  readfile($file3);
}
break;  

case 3:      
echo("Getting the name of the file from the user");
$file3=readline("Please give the name of the file : ");
if(!file_exists("$file3"))
      {
          echo "File doesn't exist\n Creating file for writing data into it";
      }
$file2 = fopen($file3, "w+");
$Student = array (
  array("Rohit Kumar Gautam","20BCE1620","CSE","92","77","65"),
  array("Rishav","20BCE1288","CSE","82","55","90"),
  array("Abhijit","20BCE1298","ECE","72","35","78"),
  array("Aum","20BCE1922","CSE","62","78","65"),
  array("Rohit Kumar Gautam","20BCE1722","MECH","52","77","99")
);
file_put_contents("$file3", serialize($Student));
// var_dump(unserialize(file_get_contents($file3)));
$readstu = unserialize(file_get_contents($file3));
// file_put_contents("$file3",implode(',',$Student));

// print_r($readstu);
// readfile($file3);

// foreach($two_darray2 as $i){
  // $j=0
  function grade($g1){
    global $b1,$b2,$b3,$b4,$b5,$b6,$b7,$b8;
    if($g1<50){
      $b7++;
      echo ' F '; 
    }
    elseif($g1>=50 and $g1<60){
      $b6++;
      echo '"> E </span>';
    }
    elseif($g1>=60 and $g1<70){
      $b5++;
      echo 'D';
    }
    elseif($g1>=70 and $g1<80){
      $b4++;
      echo ' C ';
    }
    elseif($g1>=80 and $g1<90){
      $b3++;
      echo ' B ';
    }
    elseif($g1>=90 and $g1<95){
      $b2++;
      echo 'A';
    }
    elseif($g1>=95){
      $b1++;
      echo ' S ';
    }
  }
  $file4=fopen("roh2.txt","w+");
for($j=0;$j<=4;$j++){
  $total=0;
  $total=$readstu[$j][3]+$readstu[$j][4]+$readstu[$j][5];
  echo "Total marks of student ".$readstu[$j][0] ." : ".$total ."\n";
  $average=$total/3;
  echo "Avarege marks of student ".$readstu[$j][0] ." : ".$average . "\n";
  echo "Grade of student ".$readstu[$j][0] ." : "  ;
  grade($average);
  echo "\n";
  fwrite($file4,"Student Total:$total  Average:$average \n");
}

 

 
  // //  echo "Grade of student ".$j+1 ." : ".$grade1 . "\n";
fclose($file4);
fclose($file2);
// readfile("roh.txt");
break;
case 4:   
  echo("Getting the name of the file from the user");
  $file3=readline("Please give the name of the file : ");
  if(!file_exists("$file3"))
        {
            echo "File doesn't exist\n Creating file for writing data into it";
        }
  $file2 = fopen($file3, "a+");
  $Student = array (
    array("Rohit Kumar Gautam","20BCE1620","CSE","92","77","65"),
    array("Rishav","20BCE1288","CSE","82","55","90"),
    array("Abhijit","20BCE1298","ECE","72","35","78"),
    array("Aum","20BCE1922","CSE","62","78","65"),
    array("Rohit Kumar Gautam","20BCE1722","MECH","52","77","99")
  );
  file_put_contents("$file3", serialize($Student));
  // var_dump(unserialize(file_get_contents($file3)));
  $readstu = unserialize(file_get_contents($file3));
  // file_put_contents("$file3",implode(',',$Student));
  
  // print_r($readstu);
  // readfile($file3);
  
  // foreach($two_darray2 as $i){
    // $j=0
    function grade($g1){
      global $b1,$b2,$b3,$b4,$b5,$b6,$b7,$b8;
      if($g1<50){
        $b7++;
        echo ' F '; 
      }
      elseif($g1>=50 and $g1<60){
        $b6++;
        echo '"> E </span>';
      }
      elseif($g1>=60 and $g1<70){
        $b5++;
        echo 'D';
      }
      elseif($g1>=70 and $g1<80){
        $b4++;
        echo ' C ';
      }
      elseif($g1>=80 and $g1<90){
        $b3++;
        echo ' B ';
      }
      elseif($g1>=90 and $g1<95){
        $b2++;
        echo 'A';
      }
      elseif($g1>=95){
        $b1++;
        echo ' S ';
      }
    }
    $file4=fopen("roh2.txt","w+");
  for($j=0;$j<=4;$j++){
    $total=0;
    $total=$readstu[$j][3]+$readstu[$j][4]+$readstu[$j][5];
    echo "Total marks of student ".$readstu[$j][0] ." : ".$total ."\n";
    $average=$total/3;
    echo "Avarege marks of student ".$readstu[$j][0] ." : ".$average . "\n";
    echo "Grade of student ".$readstu[$j][0] ." : "  ;
    grade($average);
    echo "\n";
    fwrite($file2,"Student Total:$total  Average:$average \n");
  }
    // //  echo "Grade of student ".$j+1 ." : ".$grade1 . "\n";
  fclose($file4);
  fclose($file2);
  // readfile("roh.txt");
break; 
case 5:      
  echo("Reading the name of the file \n");
$file3=readline("Please give the name of the file : ");
$file2 = fopen($file3, "w+");
$file5 = fopen("gautam.txt", "w+");
fwrite($file2,"Hi,I'm Rohit King of Kings ");
copy($file3,"gautam.txt") or die("Unable to copy file!");
echo "Succesfully copied\n";
fclose($file2);
fclose($file5);
readfile("gautam.txt");
break;

case 6:      
  echo("Reading the name of the file to be deleted but first we will create the file then delete it\n");
  $file3=readline("Please give the name of the file : ");
  $file2 = fopen($file3, "w+");
  fwrite($file2,"Hi,I'm Rohit King of Kings ");
  fclose($file2);
  readfile("$file3");
  unlink($file3);
  echo "\nFile succesfully deleted";
  // readfile("$file3");
break;
case 7:      
exit("I'm exiting");     
break;      
default:      
echo("This is  not a valid Option. Please Choose a Valid Option");      
}     
?>

