<?php
//============================================================+
// File name   : example_001.php
// Begin       : 2008-03-04
// Last Update : 2013-05-14
//
// Description : Example 001 for TCPDF class
//               Default Header and Footer
//
// Author: Nicola Asuni
//
// (c) Copyright:
//               Nicola Asuni
//               Tecnick.com LTD
//               www.tecnick.com
//               info@tecnick.com
//============================================================+

/**
 * Creates an example PDF TEST document using TCPDF
 * @package com.tecnick.tcpdf
 * @abstract TCPDF - Example: Default Header and Footer
 * @author Nicola Asuni
 * @since 2008-03-04
 */

// Include the main TCPDF library (search for installation path).
require_once('tcpdf_include.php');

// create new PDF document
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Webalive');
$pdf->SetTitle('NSLobby');
$pdf->SetSubject('Quotation');
$pdf->SetKeywords('TCPDF, PDF, Webalive,NSLobby, guide');

// set default header data
$pdf->SetHeaderData();
$pdf->setFooterData(array(0,64,0), array(0,64,128));

// set header and footer fonts
$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));



// remove default header/footer
$pdf->setPrintHeader(false);
$pdf->setPrintFooter(false);



// set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins

// set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

// set some language-dependent strings (optional)
if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
	require_once(dirname(__FILE__).'/lang/eng.php');
	$pdf->setLanguageArray($l);
}

// ---------------------------------------------------------

// set default font subsetting mode
$pdf->setFontSubsetting(true);

// Set font
// dejavusans is a UTF-8 Unicode font, if you only need to
// print standard ASCII chars, you can use core fonts like
// helvetica or times to reduce file size.
$pdf->SetFont('dejavusans', '', 14, '', true);

// Add a page
// This method has several options, check the source code documentation for more information.
$pdf->AddPage();



// Set some content to print
$html = <<<EOD
<style>
*{
	font-size:8px;
}
.data-table{
	width:630px;
	border:1px solid #d6d6d6;
}
.data-table td{
	line-height:25px;
	text-align:right;	
	border:1px solid #d6d6d6;
}
.data-table th{
	line-height:10px;
	text-align:center;	
	border:1px solid #d6d6d6;
	font-weight:bold;
}

</style>


<p style="font-size:14px; line-height:14px;">VOLTAGE RISE CALCULATION</p>

<table cellpadding="0" cellspacing="0"  border="0"  style="width:630px;border:1px solid #fff;">
<tr>
	<td colspan="4" style="line-height:14px;text-align:left;"> Number of phases of supply:- </td>
</tr>
<tr>
	<td style="line-height:14px;text-align:left; width:180px;"> Largest single phase inverter (kW):- </td>
	<td style="line-height:14px;text-align:center; width:60px;"> 5 </td>
	<td style="line-height:14px;text-align:left; width:130px;"> Maximum phase current (A):- </td>
	<td style="line-height:14px;text-align:center; width:60px;"> 21.74 </td>
</tr>
<tr>
	<td style="line-height:14px;text-align:left; width:180px;"> Total 3 phase inverter capacity (kW):- </td>
	<td style="line-height:14px;text-align:center; width:60px;"> 0 </td>
	<td style="line-height:14px;text-align:left; width:130px;"> Maximum phase current (A):- </td>
	<td style="line-height:14px;text-align:center; width:60px;">  </td>
</tr>

<tr>
	<td style="line-height:14px;text-align:left; width:180px;"> Voltage Rise Multiplier (VR multiplier is:- </td>
	<td style="line-height:14px;text-align:left; width:260px;" colspan="2">1 for single phase inverters<br/>0.75 for single phase inverters connected across 2 phases,<br/>0.5 for 3 phase inverters
    </td>
</tr>
</table>


<table cellpadding="0" cellspacing="0"  border="0"  style="width:630px;border:1px solid #fff;">
<tr>
	<td  style="line-height:14px;text-align:left;"> Voltage Rise Calculated = Length*mV/Am*VR multiplier*Phase current/1000 and must not exceed 2.3V for each component ie Service mains, Consumer mains and Other wiring (other wiring is wiring from the main switch board (MSB) to the inverter and may consist of several sections)
    </td>
</tr>
</table>
<p style="font-size:12px; line-height:14px;"><b>Underground</b></p>

<table cellpadding="0" cellspacing="0"  border="0"  class="data-table">
  <tr>
    <th align="left"   bgcolor="#ebebeb" style="width:80px;"></th>
    <th align="center" bgcolor="#ebebeb">Length (m)</th>
    <th align="center" bgcolor="#ebebeb">Size (mm2)</th>
    <th align="center" bgcolor="#ebebeb">Type (Cu/Al)</th>
    <th align="center" bgcolor="#ebebeb">1 phase VR (mV/Am)</th>
    <th align="center" bgcolor="#ebebeb"> VR multiplier </th>
    <th align="center" bgcolor="#ebebeb">Phase current (A)</th>
    <th align="center" bgcolor="#ebebeb">Voltage Rise Calculated/1000 (V)</th>
    <th align="center" bgcolor="#ebebeb"> &#60; 2.3V (&#60;1%) </th>
  </tr>
  <tr>
    <td align="left" bgcolor="#ebebeb"> <strong>Service mains</strong></td>
    <td align="right">0 &nbsp;</td>
    <td align="right">50 &nbsp;</td>
    <td align="left">Cu &nbsp;</td>
    <td align="right">0.970 &nbsp;</td>
    <td align="right">1 &nbsp;</td>
    <td align="right">21.74 &nbsp;</td>
    <td align="right">0.000 &nbsp;</td>
    <td align="center">Yes &nbsp;</td>
  </tr>
  <tr>
    <td align="left" bgcolor="#ebebeb"> <strong>Consumer mains</strong></td>
    <td align="right">0 &nbsp;</td>
    <td align="right">16 &nbsp;</td>
    <td align="left">Cu &nbsp;</td>
    <td align="right">2.806 &nbsp;</td>
    <td align="right">1 &nbsp;</td>
    <td align="right">21.74 &nbsp;</td>
    <td align="right">0.000 &nbsp;</td>
    <td align="center">Yes &nbsp;</td>
  </tr>
  <tr>
    <td align="left" bgcolor="#ebebeb"> <strong>Other wiring</strong></td>
    <td align="right">0 &nbsp;</td>
    <td align="right">6 &nbsp;</td>
    <td align="left">Cu &nbsp;</td>
    <td align="right">7.494 &nbsp;</td>
    <td align="right">1 &nbsp;</td>
    <td align="right">21.74 &nbsp;</td>
    <td align="right">0.000 &nbsp;</td>
    <td align="center">Yes &nbsp;</td>
  </tr>
  <tr>
    <td align="left" bgcolor="#ebebeb"> &nbsp;</td>
    <td align="right">0 &nbsp;</td>
    <td align="right">0 &nbsp;</td>
    <td align="left">Cu &nbsp;</td>
    <td align="right"> &nbsp;</td>
    <td align="right">1 &nbsp;</td>
    <td align="right">21.74 &nbsp;</td>
    <td align="right">  &nbsp;</td>
    <td align="center">  &nbsp;</td>
  </tr>
  <tr>
    <td align="left" bgcolor="#ebebeb"> &nbsp;</td>
    <td align="right">0 &nbsp;</td>
    <td align="right">0 &nbsp;</td>
    <td align="left">Cu &nbsp;</td>
    <td align="right"> &nbsp;</td>
    <td align="right">1 &nbsp;</td>
    <td align="right">21.74 &nbsp;</td>
    <td align="right">  &nbsp;</td>
    <td align="center">  &nbsp;</td>
  </tr>
  <tr>
    <td align="left" bgcolor="#ebebeb">&nbsp;</td>
    <td align="right">0 &nbsp;</td>
    <td align="right">0 &nbsp;</td>
    <td align="left">Cu &nbsp;</td>
    <td align="right"> &nbsp;</td>
    <td align="right">1 &nbsp;</td>
    <td align="right">21.74 &nbsp;</td>
    <td align="right">  &nbsp;</td>
    <td align="center">  &nbsp;</td>
  </tr>
</table>









EOD;

// Print text using writeHTMLCell()
$pdf->writeHTMLCell(0, 0, '', '', $html, 0, 1, 0, true, '', true);

// ---------------------------------------------------------

// Close and output PDF document
// This method has several options, check the source code documentation for more information.
$pdf->Output('example_001.pdf', 'I');

//============================================================+
// END OF FILE
//============================================================+
