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
    $first_name= $_POST['first_name'];
    $plate_license= $_POST['plate_license'];
    $location= $_POST['location'];
    $date_time= $_POST['date_time'];
    $offense= $_POST['offense'];

    $pdf = new myPDF();
    $pdf->AliasNbPages();
    $pdf->AddPage();
    $pdf->SetFont('Times','',12);


    $pdf->Cell(80,10,'Date:',0,0);
    $pdf->Cell(0,10,$date_time,0,1);

    $pdf->Cell(80,10,'Name:',0,0);
    $pdf->Cell(0,10,$first_name,0,1);

    // $pdf->Image('test.jpeg',30,80,0,90);

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

    $pdf->Cell(100,10,'Offense:',1,0);
    $pdf->Cell(0,10,$offense,1,1);

    $pdf->Cell(100,10,'City:',1,0);
    $pdf->Cell(0,10,$location,1,1);

    $pdf->Cell(100,10,'District:',1,0);
    $pdf->Cell(0,10,$plate_license,1,1);

    $pdf->Output();
?>