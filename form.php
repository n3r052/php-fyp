<?php
    require "fpdf/fpdf.php";
    
    class myPDF extends FPDF{ 
        function header(){
            $this->SetFont('Arial','BU',32);
            $this->Cell(0,5,'NOTICE OF VIOLATION',0,0,'C');
            $this->Ln();
            //---------------------------//
            $this->SetFont('Times','',16);
            $this->Cell(0,10,'Illegal U-Turn Violation',0,0,'C');
            $this->Ln(20);
            
        }
        function footer(){
            $this->SetY(-15);
            $this->SetFont('Arial','',8);
            $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
        }
    }

    $owner= $_POST['owner'];
    $plate_no= $_POST['plate_no'];
    $offense_type= $_POST['offense_type'];
      include "config.php";

    $pdf = new myPDF();
    $pdf->AliasNbPages();
    $pdf->AddPage();
    $pdf->SetFont('Times','',12);


    // $pdf->Cell(10,10,'Date:',0,0);
    // $pdf->Cell(10,10,$date_time,0,1);

    $pdf->Cell(10,10,'Dear',0,0);
    $pdf->Cell(10,10,$owner,0,1);


    // $pdf->Cell(80,10,'This notice is to inform you that you have been cited with a traffic violation and must pay your citation ',0,1);
    // $pdf->Cell(0,10,'within 72hours. We have payment plans available if necessary.',0,0);
    

    // $pdf->Image('logo.png',140,30,0,30);
    // $pdf->Image('logo.png',30,80,0,90);

    $pdf->Cell(0,10,'',0,1,0);
    $pdf->Cell(0,10,'',0,1,0);
    $pdf->Cell(0,10,'',0,1,0);
    $pdf->Cell(0,10,'',0,1,0);
    $pdf->Cell(0,10,'',0,1,0);
    $pdf->Cell(0,10,'',0,1,0);
    $pdf->Cell(0,10,'',0,1,0);
    $pdf->Cell(0,10,'',0,1,0);
    $pdf->Cell(0,10,'',0,1,0);
    $pdf->Cell(0,10,'',0,1,0);
    $pdf->Cell(0,10,'',0,1,0);

    $pdf->Cell(0,10,'DETAILS OF CITATION',1,1,'C');

    // $pdf->Cell(100,10,'Offense:',1,0);
    // $pdf->Cell(0,10,$offense_type,1,1);

    // $pdf->Cell(100,10,'City:',1,0);
    // $pdf->Cell(0,10,$location,1,1);

    $pdf->Cell(100,10,'Plate number:',1,0);
    $pdf->Cell(0,10,$plate_no,1,1);

    $pdf->Cell(0,10,'All citations must be paid online.',0,1);
    $pdf->Cell(0,20,'If you have any questions or concerns, or need assistance, please contact me at +673 7135636 ',0,1);
    $pdf->Cell(0,5,'or by email support teams at 19ftt1185@student.pb.edu.bn.',0,1);
    $pdf->Cell(0,20,'This was an automated message sent on behalf of your local Department of Motor Vehicles. ',0,1);
    $pdf->Cell(0,5,'Do not reply to this message and do not mail in your checks to us.',0,1);
    
    





    $pdf->Output();

?>