<?php 

    // Set action for incoming requests (no curly braces for optomization)
    if ( isset($_GET['action']) ) $action = $_GET['action']; 
    else if( isset($_POST['action']) ) $action = $_POST['action'];
    
    include 'header.php';
    
    switch ($variable) {
        case 'value':
            // code...
            break;
        
        default:
             include 'main.php';
            break;
            
        
    }
    
     include 'footer.php';
    ?>
    