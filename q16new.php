<!DOCTYPE html>  
<html>  
<body>  
<?php  
     
    $vCount = 0;  
    $cCount = 0;  
      
     
    $str = "This is a really simple sentence";  
          
    
    $str = strtolower($str);  
    for($i = 0; $i < strlen($str); $i++) {  
              
     
    if( $str[$i] == 'a' || $str[$i] == 'e' || $str[$i] == 'i' || $str[$i] == 'o' || $str[$i] == 'u') {  
        
        $vCount++;  
    }  
     
    else if($str[$i] >= 'a' && $str[$i] <= 'z') {  
      
        
        $cCount++;  
        }  
    }  
    echo "Number of vowels : " , $vCount;  
    echo "<br>";  
    echo "\nNumber of consonants : " , $cCount;  
?>  
</body>  
</html>  