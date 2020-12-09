<?php
/**
 * Created by PhpStorm.
 * User: zikirillahi
 * Date: 14/10/2015
 * Time: 09:39
 */
require_once("includes/loggedin.php");
require_once("includes/fpdf/fpdf.php");

$pdf= new FPDF();
$pdf->AddPage();
$pdf->setFont("Arial","B",16);
$pdf->Cell(0,10,"                                               Voters credential",1,2);

$pdf->setFont("Arial","B",16);
$pdf->Cell(0,10,"Name: {$voter_name}",1,1);

$pdf->setFont("Arial","B",16);
$pdf->Cell(0,10,"school: {$voter_school}",1,1);

$pdf->setFont("Arial","B",16);
$pdf->Cell(0,10,"Department:{$voter_department}",1,1);

$pdf->setFont("Arial","B",16);
$pdf->Cell(0,10,"Registration Number:{$voter_regno}",1,1);

$pdf->setFont("Arial","B",16);
$pdf->Cell(0,10,"Voter I.D: {$voter_id}",1,1);

$pdf->output();














?>