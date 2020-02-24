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
		<td align="left" width="50%"> <a href="#"><img src="images/company-logo.png" width="324" height="87"  /></a> </td>
		<td align="right" width="50%"> 229 Farley Rd<br/>Torrumbarry VIC VIC <br/> 0408258298 <br/> <a href="mailto:martin@newkirksolar.com.au" style="color:#000;text-decoration:none;"> martin@newkirksolar.com.au </a> 
        <br/> ABN: 80023118982 </td>
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
		<td align="left" width="47%">Firstname Customer<br/>123 John St<br/> Melbourne VIC 3000 </td>																					
		<td align="right" width="50%" >Date:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;06/09/15<br>Reference:&nbsp;&nbsp;&nbsp;CustomerF1</td>
	</tr>
</table>



<table border="0" cellspacing="0" cellpadding="0" width="100%">
	<tr><td align="right" style="line-height:25px"></td></tr>
</table>


<table border="0" cellspacing="0" cellpadding="0" width="100%" class="data-table">
  <tr  class="data-table-head">
    <td><strong> Salesperson</strong></td>
    <td><strong> Terms</strong></td>
  </tr>
  <tr>
    <td> Martin Newkrik </td>
    <td> Pre paid - Upfront discount on STCs </td>
  </tr>
</table>




 

<table border="0" cellspacing="0" cellpadding="0" width="100%">
	<tr><td align="right" style="line-height:25px"></td></tr>
</table>


<table border="0" cellspacing="0" cellpadding="0"   class="data-table">
  <tr  class="data-table-head">
    <td class="qty" style="width:40px;"  bgcolor="#ebebeb"><strong>Qty</strong></td>
    <td style="width:425px;"  bgcolor="#ebebeb"><strong> Description</strong></td>
    <td align="right" style="width:100px;"  bgcolor="#ebebeb"><strong> Unit Price ex GST &nbsp;</strong></td>
    <td align="right" style="width:100px;"  bgcolor="#ebebeb"><strong> Total inc GST &nbsp;</strong></td>
  </tr>

  <tr>
    <td class="qty"><strong>1</strong></td>
    <td>  5kW solar system </td>
    <td align="right"> $8,102.18  &nbsp;</td>
    <td align="right"  bgcolor="#ebebeb"> $8,912.40  &nbsp;</td>
  </tr>


  <tr>
    <td class="qty"> </td>
    <td> <strong>System price includes:</strong></td>
    <td align="right">  &nbsp;</td>
    <td align="right"  bgcolor="#ebebeb">  &nbsp;</td>
  </tr>

 <tr>
    <td class="qty"><strong>1</strong></td>
    <td>  TDG T250P606 </td>
    <td></td>
    <td  bgcolor="#ebebeb"> </td>
  </tr>
  
  
  <tr>
    <td class="qty"><strong>1</strong></td>
    <td>  ZeverSolar TL5000-10 </td>
    <td></td>
    <td  bgcolor="#ebebeb"> </td>
  </tr>
 


 
   <tr>
    <td class="qty"><strong></strong></td>
    <td>  STC discount </td>
    <td align="right">(3,282.40)</td>
    <td align="right"  bgcolor="#ebebeb">(3,282.40) </td>
  </tr>
 
 
 
<tr>
    <td class="qty"><strong></strong></td>
    <td align="left"> <strong>.</strong>Mounting and electrical components for installation	</td>
    <td>   </td>
    <td align="right"  bgcolor="#ebebeb">  </td>
 </tr>
<tr>
    <td class="qty"><strong></strong></td>
    <td align="left"> <strong>.</strong>Full installation of solar system </td>
    <td>   </td>
    <td align="right"  bgcolor="#ebebeb">  </td>
 </tr>
<tr>
    <td class="qty"><strong></strong></td>
    <td align="left"> <strong>.</strong> Completing and submitting all paperwork required for<br/> connection to grid	 </td>
    <td>   </td>
    <td align="right"  bgcolor="#ebebeb">  </td>
 </tr>
<tr>
    <td class="qty"><strong></strong></td>
    <td align="left"> Independent safety inspection </td>
    <td>   </td>
    <td align="right"  bgcolor="#ebebeb">  </td>
 </tr>
 
   <tr>
    <td class="qty"><strong></strong></td>
    <td>   </td>
    <td align="right"> </td>
    <td align="right"  bgcolor="#ebebeb">  </td>
  </tr>
   <tr>
    <td class="qty"><strong></strong></td>
    <td>   </td>
    <td align="right"> </td>
    <td align="right"  bgcolor="#ebebeb">  </td>
  </tr>

<tr>
    <td class="qty"><strong></strong></td>
    <td align="left"> <strong>Price does not include:</strong> </td>
    <td>   </td>
    <td align="right"  bgcolor="#ebebeb">  </td>
 </tr>
<tr>
    <td class="qty"><strong></strong></td>
    <td align="left"> Metering or other distribution costs </td>
    <td>   </td>
    <td align="right"  bgcolor="#ebebeb">  </td>
 </tr>
<tr>
    <td class="qty"><strong></strong></td>
    <td align="left"> Upgrade of existing electrical wiring or switchboard </td>
    <td>   </td>
    <td align="right"  bgcolor="#ebebeb">  </td>
 </tr>

 
 
 

   <tr>
    <td class="qty"><strong></strong></td>
    <td>   </td>
    <td align="right"> </td>
    <td align="right"  bgcolor="#ebebeb">  </td>
  </tr>
   <tr>
    <td class="qty"><strong></strong></td>
    <td>   </td>
    <td align="right"> </td>
    <td align="right"  bgcolor="#ebebeb">  </td>
  </tr>
   <tr>
    <td class="qty"><strong></strong></td>
    <td>   </td>
    <td align="right"> </td>
    <td align="right"  bgcolor="#ebebeb">  </td>
  </tr>
   <tr>
    <td class="qty"><strong></strong></td>
    <td>   </td>
    <td align="right"> </td>
    <td align="right"  bgcolor="#ebebeb">  </td>
  </tr>



  <tr>
	<td colspan="2">
		<table border="0" cellspacing="0" cellpadding="0" width="100%">
			<tr>
			<td width="2%"></td>
			<td width="90%">
				<table border="0" cellspacing="0" cellpadding="0" width="100%">
					<tr><td colspan="2" width="100%" style="line-height:5px;"></td> </tr>
					<tr>
						<td width="20%"><p style="border-bottom:1px solid #000;font-weight:bold; font-size:10px;line-height:10px;">Bank Details : </p></td>
						<td width="80%"></td>
					</tr>
					<tr>
						<td align="left" width="20%"><strong>Acc name</strong></td>
						<td align="left" width="80%">Solar On Electrical</td>
					</tr>	          
					<tr>
						<td align="left" width="20%"><strong>BSB</strong></td>
						<td align="left" width="80%">013620</td>
					</tr>	          
					<tr>
						<td align="left" width="20%"><strong>Acc no.</strong></td>
						<td align="left" width="80%">384143456</td>
					</tr>
					<tr><td colspan="2" width="100%" style="line-height:5px;"></td> </tr>	          
				</table>
			</td>
			</tr>
		</table>    
	</td>
	
	
	
    <td colspan="2"><table border="0" cellspacing="0" cellpadding="0" width="100%" class="total-amount-table">
            <tr>
                <td align="right" width="50%"> Total (inc GST) &nbsp;</td>
				<td align="right" width="50%" bgcolor="#ebebeb"> $5,630.00 &nbsp;</td>
            </tr>
            <tr>
                <td align="right" width="50%">(GST) &nbsp;</td>
				<td align="right" width="50%" bgcolor="#ebebeb"> $810.22 &nbsp;</td>
            </tr>
            <tr>
                <td align="right" width="50%"> Paid to date &nbsp;</td>
				<td align="right" width="50%" bgcolor="#ebebeb"> $1,407.00 &nbsp;</td>
            </tr>
            <tr>
                <td align="right" width="50%"> Balance Due &nbsp;</td>
				<td align="right" width="50%" bgcolor="#ebebeb"> <strong>$4,222.50</strong> &nbsp;</td>
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
