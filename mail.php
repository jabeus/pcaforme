
<?php

if(isset($_FILES['file'])){
$name_file = $_FILES['file']['name'];
$temp_name = $_FILES['file']['temp_name'];
$local_image = "//home/pcaforme/public_html/resume";
    $move_file = move_uploaded_file($temp_name,$local_image.$name_file);
    
    if($move_file){
        echo 'sucess';
    }
 else {
        echo 'failed';        
}
            
}
