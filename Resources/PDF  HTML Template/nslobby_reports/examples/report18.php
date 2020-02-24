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
	width:640px;
	border:1px solid #d6d6d6;
}
.data-table-head td{
	color:#000;
	line-height:25px;
	text-align:left;	
	font-weight:bold;
}
.data-table td{
	line-height:13px;
	text-align:left;	
	border:1px solid #d6d6d6;
}
.data-table .qty{
	width:40px;
	text-align:center;	
}
.total-amount-table{
	border:none;
	width:100%;	
}
.total-amount-table  td{
	width:50%;	
	line-height:15px;
	text-align:left;	
	border-right:1px solid #d6d6d6;
	border-bottom:1px solid #d6d6d6;
}
</style>


<table border="0" cellspacing="0" cellpadding="0" width="100%">
	<tr>
		<td align="left" width="50%">ABN <br/>123 John St<br/>Melbourne VIC 3000<br/>040000000</td>
	</tr>
</table>

<table border="0" cellspacing="0" cellpadding="0" width="100%">
    <tr><td style="line-height:6px;"></td></tr>
</table>


<table border="0" cellspacing="0" cellpadding="0" width="100%">
    <tr><td align="right" style="line-height:6px;font-size:18px; font-weight:bold"> Tax Invoice </td></tr>
</table>

<table border="0" cellspacing="0" cellpadding="0" width="100%">
    <tr><td style="line-height:35px;"></td></tr>
</table>


<table border="0" cellspacing="0" cellpadding="0" width="100%">
	<tr>
		<td align="left" width="3%">To:</td>
		<td align="left" width="47%">FormBay Pty Ltd<br />Level 1, 275 Clarence Street, Sydney NSW, 2000<br />ABN: 31 146 464 995	</td>																					
		<td align="right" width="50%" >Date:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;22/08/15<br>Reference:&nbsp;&nbsp;&nbsp;STCs</td>
	</tr>
</table>



<table border="0" cellspacing="0" cellpadding="0" width="100%">
	<tr><td align="right" style="line-height:25px"></td></tr>
</table>

 



 

<table border="0" cellspacing="0" cellpadding="0" width="100%">
	<tr><td align="right" style="line-height:25px"></td></tr>
</table>


<table border="0" cellspacing="0" cellpadding="0"   class="data-table">
  <tr  class="data-table-head">
    <td class="qty" style="width:40px;"  bgcolor="#ebebeb"><strong>Qty</strong></td>
    <td style="width:425px;"  bgcolor="#ebebeb"><strong> Description</strong></td>
    <td align="right" style="width:100px;"  bgcolor="#ebebeb"><strong> Unit Price &nbsp;</strong></td>
    <td align="right" style="width:100px;"  bgcolor="#ebebeb"><strong> Amount &nbsp;</strong></td>
  </tr>

  <tr>
    <td class="qty"><strong>88</strong></td>
    <td>
<p> Supply of create Small Scale Technology Certificate (STCs) rights.</p>
<p> These rights have been generated from the installation of the solar PV system installed at Customer, 123 John St, Melbourne, 3000 installed by Solar On Electrical.	</p>
<p> The supply of STC rights is in exchange for the Point of Sale Discount we received from Solar On Electrical for the supply and install of the Solar PV System.</p>
	</td>
    <td align="right"> $37.30  &nbsp;</td>
    <td align="right"> $3282.40  &nbsp;</td>
  </tr>

 
   <tr>
    <td class="qty"></td>
    <td align="left">&nbsp;</td>
    <td align="right">&nbsp;</td>
    <td align="right">&nbsp;</td>
  </tr>
   <tr>
    <td class="qty"></td>
    <td align="left">&nbsp;</td>
    <td align="right">&nbsp;</td>
    <td align="right">&nbsp;</td>
  </tr>
   <tr>
    <td class="qty"></td>
    <td align="left">&nbsp;</td>
    <td align="right">&nbsp;</td>
    <td align="right">&nbsp;</td>
  </tr>
   <tr>
    <td class="qty"></td>
    <td align="left">&nbsp;</td>
    <td align="right">&nbsp;</td>
    <td align="right">&nbsp;</td>
  </tr>
   <tr>
    <td class="qty"></td>
    <td align="left">&nbsp;</td>
    <td align="right">&nbsp;</td>
    <td align="right">&nbsp;</td>
  </tr>
   <tr>
    <td class="qty"></td>
    <td align="left">&nbsp;</td>
    <td align="right">&nbsp;</td>
    <td align="right">&nbsp;</td>
  </tr>
   <tr>
    <td class="qty"></td>
    <td align="left">&nbsp;</td>
    <td align="right">&nbsp;</td>
    <td align="right">&nbsp;</td>
  </tr>
   <tr>
    <td class="qty"></td>
    <td align="left">&nbsp;</td>
    <td align="right">&nbsp;</td>
    <td align="right">&nbsp;</td>
  </tr>


   <tr>
    <td class="qty"></td>
    <td align="left">&nbsp;</td>
    <td align="right"> Total</td>
    <td align="right"> $3,282.40</td>
  </tr>
  <tr>
    <td class="qty"></td>
    <td align="left">&nbsp;</td>
    <td align="right"> (GST)</td>
    <td align="right"> $3,28.24</td>
  </tr>
  <tr>
    <td class="qty"></td>
    <td align="left">&nbsp;</td>
    <td align="right"> Balace due</td>
    <td align="right"> $3,610.64</td>
  </tr>
 

</table>

<table border="0" cellspacing="0" cellpadding="0" width="100%">
	<tr><td align="right" style="line-height:25px"></td></tr>
</table>



<table border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td align="left" style="width:445px;">&nbsp;</td>
    <td align="left">
        <table border="0" cellspacing="0" cellpadding="0">
    	 <tr>
             <td align="left" colspan="2" style="line-height:15px">Approved by</td> 
         </tr>
    	 <tr>
             <td align="left" style="width:45px;">Name</td> 
             <td align="left"><p style="border-bottom:1px solid dashed;"><b> &nbsp; </b></p></td>
         </tr>
    	 <tr>
             <td align="left" style="width:45px;">Position</td> 
             <td align="left"><p style="border-bottom:1px solid dashed;"><b> &nbsp; </b></p></td>
         </tr>
    	 <tr>
             <td align="left" style="width:45px;">Signature</td> 
             <td align="left"><p style="border-bottom:1px solid dashed;"><b> &nbsp; </b></p></td>
         </tr>
    	 <tr>
             <td align="left" style="width:45px;">Date</td> 
             <td align="left"><p style="border-bottom:1px solid dashed;"><b> &nbsp; </b></p></td>
         </tr>
        </table>
    </td>
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
