<?php 

if(!empty($_POST['download']))
{
    $selected_value = $_POST['letter'];
    $name = $_POST['name'];
    $sid = $_POST['ID'];
    $date = $_POST['date'];
    $tf = $_POST['tf'];
    $tt = $_POST['tt'];
    $isb = $_POST['isb'];
    $efd = $_POST['efd'];
    $title = $_POST['title'];
    $for = $_POST['for'];
    $cc = $_POST['cc'];
    $prof = $_POST['prof'];
    $address = $_POST['address'];
    if($selected_value == "Transfer Letter"){
    require("fpdf/fpdf.php");
  
    
  $pdf=new FPDF('P','mm','A4');
    $pdf-> AddPage("L");  
    $pdf->SetFont("Times");
    $pdf->Image('ghs.png',10,10,280);
    $pdf->Cell(250);
    $pdf->SetXY(230,-130);
    $pdf->Cell(10,10,"{$date}",0,1,'R');
    $pdf->SetXY(30,-120);
    $pdf->SetFont("Arial",'B',17);   
    $pdf->MultiCell(90,8,$address,'FJ');
    $pdf->SetXY(30,-93); 
    $pdf->SetFont("Arial","BU",17);
    $pdf->Cell(90,8,$title." ". $name. " " .$prof. " ". "STAFF ID:{$sid}", 'FJ');
    $pdf->SetXY(30,-70); 
    $pdf->SetFont("Times");
    $pdf->SetXY(30,-82);
    $pdf->SetFontSize(13);
    $pdf->MultiCell(210,7,"Our various correspondences on the above-mentioned officer and based on assurance of vacancy from your outfit, $name has been released from  $tf  to be transfered to the $tt. ",0,'L'); 
     $pdf->SetXY(30,-64); 
     $pdf->SetFontSize(13);
    $pdf->MultiCell(210,7,"Thus, $name is by this letter tranfered to you for permanent assignment with effect from $efd. ",0,'L');
    $pdf->SetXY(30,-52); 
    $pdf->SetFontSize(13);
    $pdf->MultiCell(205,7,"Kindly report  his assumption of duty and ensure that his salary is taken up by the receiving facility within three(3) months upon receipt of this letter.",0,'L');
    $pdf->SetXY(30,-37); 
    $pdf->SetFontSize(13);
    $pdf->MultiCell(205,7,"Thank You.",0,'L');
    $pdf->SetXY(160,-37);
    $pdf->SetFont("Arial","B");
    $pdf->SetFontSize(11);
    $pdf->MultiCell(70,7,$isb, 0,'R');
    $pdf->SetXY(160,-29);
    $pdf->SetFont("Arial","B");
    $pdf->SetFontSize(11);
    $pdf->MultiCell(60,7,"For:{$for}",0,'R');
        
    $pdf->SetXY(160,-27);
    $pdf->SetFont("Arial","B");
    $pdf->SetFontSize(11);
    $pdf->MultiCell(60,7,"CC:{$cc}",0,'R');
    $pdf->output();
    
}
}


?>