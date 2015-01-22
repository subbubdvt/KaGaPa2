<?php  
$theid = $_REQUEST['imgid'];  
  
switch($theid) {  
    case 1:  
        $heading = "ಕಗಪ";  
        $origin  = "./";  
        $source  = "./images/1.jpg";  
        break;  
    case 2:  
        $heading = "ಕೃತಿ";  
        $origin  = "./";  
        $source  = "./images/2.jpg";   
        break;  
    case 3:  
        $heading = "ಭಗವತಿ";  
        $origin  = "./";  
        $source  = "./images/3.jpg";  
        break;  
    case 4:  
        $heading = "ಭದ್ರಕಾಳಿ";  
        $origin  = "./";  
        $source  = "./images/4.jpg"; 
        break;  
    default:  
        $heading = "ಕಗಪ";  
        $origin  = "./";  
        $source  = "./images/1.jpg"; 
}  
?>  

<div data-role="page" id="images" data-add-back-btn="true">  
    <header data-role="header">  
        <h1><?php echo $heading; ?></h1>  
    </header>  
      
    <div data-role="content">  
        <p><strong><a href="<?php echo $origin; ?>" data-rel="external">ಮೂಲ ಚಿತ್ರ</a></strong></p>  
        <p><a href="<?php echo $origin; ?>" data-rel="external"><img src="<?php echo $source; ?>" /></a></p>  
    </div>  
      
    <footer data-role="footer"><h3>www.kagapa.in</h3></footer>  
</div>  