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
	line-height:18px;
	text-align:left;	
	border:1px solid #d6d6d6;
}
</style>


 <table border="0" cellspacing="0" cellpadding="0" align="center">
<tr>
<td valign="top">


<table border="0" cellspacing="0" cellpadding="0" width="100%">
	<tr>
		<td align="left" width="50%"> <a href="#"><img src="images/company-logo.png" width="324" height="87"  /></a> </td>
		<td align="right" width="50%"> 0408258298<br/> <a href="mailto:brooke@solaronelectrical.com.au"  style="color:#000;text-decoration:none;"> brooke@solaronelectrical.com.au </a> 
        <br/> 229 Farley Rd, Torrumbarry,VIC<br/> <a href="http://www.solaronelectrical.com.au/">www.solaronelectrical.com.au</a> </td>
	</tr>
</table>

<table border="0" cellspacing="0" cellpadding="0" width="100%">
    <tr><td style="line-height:6px;"></td></tr>
</table>


<table border="0" cellspacing="0" cellpadding="0" width="100%">
    <tr><td align="right" style="line-height:6px;font-size:18px; font-weight:bold"> Quotation </td></tr>
</table>

<table border="0" cellspacing="0" cellpadding="0" width="100%">
    <tr><td style="line-height:35px;"></td></tr>
</table>


 


<table width="100%" border="0" cellspacing="0" cellpadding="0" >
 	<tr>
		<td align="left" style="width:60%;">
        	<table width="100%" border="0" cellspacing="0" cellpadding="0">
            	<tr>
                	<td align="left">Customer: </td>
                	<td align="left">Firstname Customer</td>
                </tr>
            </table>
        </td>
		<td align="right"  style="width:40%;"> Date:&nbsp;  16/08/15  </td>
	</tr>
	
	
	
	<tr>
		<td align="left" style="width:60%;">
        	<table width="100%" border="0" cellspacing="0" cellpadding="0">
            	<tr>
                	<td align="left">Install address:</td>
                	<td align="left">123 John St, Melbourne,3000</td>
                </tr>
            </table>
        </td>
		<td align="right"  style="width:40%;"> Reference:&nbsp;  CustomerF1  </td>
	</tr>
</table>


<table border="0" cellspacing="0" cellpadding="0">
	<tr> <td align="left" width="100%">&nbsp;</td></tr>
</table>


<table border="0" cellspacing="0" cellpadding="0" style="border:1.4px solid #000;">
	<tr>
	    <th align="left" width="25%" bgcolor="#ebebeb">&nbsp;</th>
	    <th align="center" width="25%" bgcolor="#158b4e" style="color:#fff;line-height:20px;">Option 1</th>
	    <th align="center" width="25%" bgcolor="#a3cf3c" style="color:#fff;line-height:20px;">Option 2</th>
	    <th align="center" width="25%" bgcolor="#89c4a8" style="color:#fff;line-height:20px;">Option 3</th>
	</tr>
	<tr>
	    <td align="left" width="25%" bgcolor="#ebebeb" style="color:#000;line-height:20px;"> <strong>System siz(kw)</strong> </td>
	    <td align="left" width="25%" bgcolor="#ffffff" style="color:#000;line-height:20px;">5.0kw</td>
	    <td align="left" width="50%" bgcolor="#ffffff" style="color:#ab1c22;line-height:20px;" colspan="2">
			(System size to 1 decimal,then "kw")
		</td>
	</tr>
	<tr>
	    <td align="left" width="25%" bgcolor="#ebebeb" style="color:#000;line-height:20px;"> <strong>Panels</strong> </td>
	    <td align="left" width="25%" bgcolor="#ffffff" style="color:#000;line-height:20px;"> 20 x TDG 250W  </td>
	    <td align="left" width="50%" bgcolor="#ffffff" style="color:#ab1c22;line-height:20px;" colspan="2">
			(panel qty & panel manufacturer & panel Pmax)
		</td>
	</tr>


	<tr>
	    <td align="left" width="25%" bgcolor="#ebebeb" style="color:#000;line-height:20px;"><strong> Inverter manufacturer(1) </strong> </td>
	    <td align="left" width="25%" bgcolor="#ffffff" style="color:#000;line-height:20px;"> ZeverSolar  </td>
	    <td align="left" width="50%" bgcolor="#ffffff" style="color:#ab1c22;line-height:20px;" colspan="2">
			 (first inverter manufacturer)
		</td>
	</tr>

	<tr>
	    <td align="left" width="25%" bgcolor="#ebebeb" style="color:#000;line-height:20px;"><strong> Inverter model(1) </strong> </td>
	    <td align="left" width="25%" bgcolor="#ffffff" style="color:#000;line-height:20px;"> 1 x TL5000-10  </td>
	    <td align="left" width="50%" bgcolor="#ffffff" style="color:#ab1c22;line-height:20px;" colspan="2">
			 (first inverter qty & model)
		</td>
	</tr>

	<tr>
	    <td align="left" width="25%" bgcolor="#ebebeb" style="color:#000;line-height:20px;"><strong> Inverter manufacturer(1) </strong> </td>
	    <td align="left" width="25%" bgcolor="#ffffff" style="color:#000;line-height:20px;">    </td>
	    <td align="left" width="50%" bgcolor="#ffffff" style="color:#ab1c22;line-height:20px;" colspan="2">
			 (as above for 2nd and 3rd inverters (max3)
		</td>
	</tr>

	<tr>
	    <td align="left" width="25%" bgcolor="#ebebeb" style="color:#000;line-height:20px;"><strong> Inverter model(1) </strong> </td>
	    <td align="left" width="25%" bgcolor="#ffffff" style="color:#000;line-height:20px;">    </td>
	    <td align="left" width="50%" bgcolor="#ffffff" style="color:#ab1c22;line-height:20px;" colspan="2">
			 (as above for 2nd and 3rd inverters (max3)
		</td>
	</tr>


 

 	<tr>
            <td align="left" width="25%" bgcolor="#ebebeb" style="color:#000;line-height:20px;"><strong> Battery model  </strong> </td>
            <td align="left" width="25%" bgcolor="#ffffff" style="color:#000;line-height:20px;"> Narada2V 1500AH  </td>
            <td align="left" width="50%" bgcolor="#ffffff" style="color:#ab1c22;line-height:20px;" colspan="2">
                 (man. & model - Only if battery is included)
            </td>
        </tr>
	<tr>
	    <td align="left" width="25%" bgcolor="#ebebeb" style="color:#000;line-height:20px;"><strong> Battery qty(size kWh) </strong> </td>
	    <td align="left" width="25%" bgcolor="#ffffff" style="color:#000;line-height:20px;"> 72.00KWH  </td>
	    <td align="left" width="50%" bgcolor="#ffffff" style="color:#ab1c22;line-height:20px;" colspan="2">
			 (from system details,should be no decimal places)
		</td>
	</tr>

	<tr>
	    <td align="left" width="25%" bgcolor="#ebebeb" style="color:#000;line-height:20px;"><strong> Roof type </strong> </td>
	    <td align="left" width="25%" bgcolor="#ffffff" style="color:#000;line-height:20px;"> Tin  </td>
	    <td align="left" width="50%" bgcolor="#ffffff" style="color:#ab1c22;line-height:20px;" colspan="2">
			(from system details) 
		</td>
	</tr>
	<tr>
	    <td align="left" width="25%" bgcolor="#ebebeb" style="color:#000;line-height:20px;"><strong> Array pitch(deg) </strong> </td>
	    <td align="left" width="25%" bgcolor="#ffffff" style="color:#000;line-height:20px;"> 25  </td>
	    <td align="left" width="50%" bgcolor="#ffffff" style="color:#ab1c22;line-height:20px;" colspan="2">&nbsp;
			(from system detials,if multiple arrays add "&")
		</td>
	</tr>



	<tr>
	    <td align="left" width="25%" bgcolor="#ebebeb" style="color:#000;line-height:20px;"><strong> Array orientation </strong> </td>
	    <td align="left" width="25%" bgcolor="#ffffff" style="color:#000;line-height:20px;"> North  </td>
	    <td align="left" width="50%" bgcolor="#ffffff" style="color:#ab1c22;line-height:20px;" colspan="2">&nbsp;
			(from system detials,if multiple arrays add "&")
		</td>
	</tr>

	<tr>
	    <td align="left" width="25%" bgcolor="#ebebeb" style="color:#000;line-height:20px;"><strong> All options include </strong> </td>
	    <td align="left" width="75%" bgcolor="#ffffff" style="color:#000;line-height:13px;" colspan="3"><b style="font-size:12px;">.</b>Mounting and electrical components for installation<br/> <b style="font-size:12px;">.</b>Full installation of solar system <br/> <b style="font-size:12px;">.</b>Completing and submitting all paperwork required for connection to grid <br> Independent safety inspection
		</td>
	</tr>





<tr>
	    <td align="left" width="25%" bgcolor="#ebebeb" style="color:#000;line-height:20px;"><strong> Price before rebates </strong> </td>
	    <td align="left" width="75%" bgcolor="#ffffff" style="color:#000;line-height:13px;" colspan="3"> $8,912 </td>
	</tr>

	<tr>
	    <td align="left" width="25%" bgcolor="#ebebeb" style="color:#000;line-height:20px;"><strong> STC discount </strong> </td>
	    <td align="left" width="25%" bgcolor="#ffffff" style="color:#000;line-height:20px;"> $3,282  </td>
	    <td align="left" width="50%" bgcolor="#ffffff" style="color:#ab1c22;line-height:20px;" colspan="2">
			(from system details)
		</td>
	</tr>



	<tr>
	    <td align="left" width="25%" bgcolor="#ebebeb" style="color:#000;line-height:20px;"><strong> Deposit </strong> </td>
		<td align="left" width="25%" bgcolor="#ffffff" style="color:#000;line-height:20px;"> <strong>$1407.50</strong></td> 
		<td align="left" width="25%" bgcolor="#ffffff" style="color:#000;line-height:20px;"> <strong>$7190.00</strong></td>
		<td align="left" width="25%" bgcolor="#ffffff" style="color:#000;line-height:20px;"> <strong>$3475.00</strong></td>
	</tr>
	<tr>
		<td align="left" width="25%" bgcolor="#ebebeb" style="color:#000;line-height:20px;"><strong> Balance</strong> due on installation </td>
		<td align="left" width="25%" bgcolor="#ffffff" style="color:#000;line-height:20px;"> <strong>$4222.50</strong></td> 
		<td align="left" width="25%" bgcolor="#ffffff" style="color:#000;line-height:20px;"> <strong>$21570.00</strong></td>
		<td align="left" width="25%" bgcolor="#ffffff" style="color:#000;line-height:20px;"> <strong>$10425.00</strong></td>
	</tr>
	


 
	<tr>
	    <td align="left" width="25%" bgcolor="#ebebeb" style="color:#000;line-height:20px;"><strong> Discount </strong> </td>
	    <td align="left" width="25%" bgcolor="#ffffff" style="color:#000;line-height:20px;"> <strong>$0.00</strong>  </td>
	    <td align="left" width="50%" bgcolor="#ffffff" style="color:#ab1c22;line-height:20px;" colspan="2">
			(Only if discount field is used)
		</td>
	</tr>



	<tr>
	    <td align="left" width="25%" bgcolor="#ebebeb" style="color:#000;line-height:20px;"><strong> Customer pays (inc GST)</strong> </td>
		<td align="left" width="25%" bgcolor="#c4e2d2" style="color:#000;line-height:20px;"> <strong>$5630.00</strong></td>
		<td align="left" width="25%" bgcolor="#c4e2d2" style="color:#000;line-height:20px;"> <strong>$28760.00</strong> </td>
		<td align="left" width="25%" bgcolor="#c4e2d2" style="color:#000;line-height:20px;"> <strong>$13900.00</strong></td>
	</tr>


    
    
    
</table>
<table border="0" cellspacing="0" cellpadding="0">
   <tr>
	    <td width="25%" bgcolor="#ffffff" align="left" style="color:#000;line-height:20px;"><strong> Bank detials</strong></td>
	    <td width="75%" bgcolor="#ffffff" align="left" colspan="3" style="color:#ab1c22;line-height:13px;">
        (Client Account name & BSB & Account number)
        </td>
	</tr>    
</table>


<table border="0" cellspacing="0" cellpadding="0">
	<tr> <td align="left">&nbsp;</td></tr>
	<tr> <td align="left" width="100%" style="color:#000;line-height:12px;">
	Quote is valid for 7 days<br /><strong>Meter configuration and setup charges are incurred by property owner and cost is at discretion of electricity <br /> distributor </strong>
	</td></tr>
</table>



	</td></tr>
</table>









EOD;

// Print text using writeHTMLCell()
$pdf->writeHTMLCell(0, 0, '', '', $html, 0, 1, 0, true, '', true);


// Add  page 2
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
	line-height:18px;
	text-align:left;	
	border:1px solid #d6d6d6;
}
</style>

 
<table border="0" cellspacing="0" cellpadding="0" style="border:1.4px solid #000;">
	<tr>
	    <th align="left" width="25%" bgcolor="#ebebeb">&nbsp;</th>
	    <th align="center" width="25%" bgcolor="#158b4e" style="color:#fff;line-height:20px;">Option 1</th>
	    <th align="center" width="25%" bgcolor="#a3cf3c" style="color:#fff;line-height:20px;">Option 2</th>
	    <th align="center" width="25%" bgcolor="#89c4a8" style="color:#fff;line-height:20px;">Option 3</th>
	</tr>
	<tr>
	    <td align="left" width="25%" bgcolor="#ebebeb" style="color:#000;line-height:20px;"> <strong>Panels</strong> <span>&nbsp; Workmanship</span></td>
	    <td align="left" width="25%" bgcolor="#ffffff" style="color:#000;line-height:20px;">10years</td>
 	    <td align="left" width="50%" bgcolor="#ffffff" style="color:#ab1c22;line-height:20px;" colspan="2">(from panel specs)</td>
	</tr>
	<tr>
	    <td align="left" width="25%" bgcolor="#ebebeb" style="color:#000;line-height:20px;"> 
		<strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong> <span> Performance</span></td>
	    <td align="left" width="25%" bgcolor="#ffffff" style="color:#000;line-height:20px;">25years</td>
 	    <td align="left" width="50%" bgcolor="#ffffff" style="color:#ab1c22;line-height:20px;" colspan="2">(from panel specs)</td>
	</tr>
	<tr>
	    <td align="left" width="25%" bgcolor="#ebebeb" style="color:#000;line-height:20px;"> 
		<strong>Inverter</strong> <span> Standard</span></td>
	    <td align="left" width="25%" bgcolor="#ffffff" style="color:#000;line-height:20px;"> 5years</td>
 	    <td align="left" width="50%" bgcolor="#ffffff" style="color:#ab1c22;line-height:20px;" colspan="2">(from inverter specs)</td>
	</tr>
	<tr>
	    <td align="left" width="25%" bgcolor="#ebebeb" style="color:#000;line-height:20px;"> 
		<strong>Installation</strong> <span> Workmanship</span></td>
	    <td align="left" width="25%" bgcolor="#ffffff" style="color:#000;line-height:20px;"> 1years</td>
 	    <td align="left" width="50%" bgcolor="#ffffff" style="color:#ab1c22;line-height:20px;" colspan="2">(from client specs)</td>
	</tr>
</table>	
<p style="font-size:7px;">*Guideline only,for full details warranty documents are available</p>

<table border="0" cellspacing="0" cellpadding="0">
	<tr> <td align="left" width="100%">&nbsp;</td></tr>
</table>

<p style="font-size:14px;text-align:center"><strong>Estimated solar production (first year)</strong></p>
<table border="0" cellspacing="0" cellpadding="0" style="border:2px solid #000;">
  <tr>
    <td width="25%" align="left" style="line-height:20px;"> <strong>Ave. daily outpur(kWh)* </strong></td>
    <td width="25%" align="left" style="line-height:20px;"> 0.00 </td>
    <td width="25%" align="left" style="line-height:20px;"> 0.00 </td>
    <td width="25%" align="left" style="line-height:20px;"> 0.00 </td>
  </tr>
  <tr>
    <td width="25%" align="left" style="line-height:20px;"> <strong>First year output(kWh)*</strong> </td>
    <td width="25%" align="left" style="line-height:20px;"> 0.0 </td>
    <td width="25%" align="left" style="line-height:20px;"> 0.0 </td>
    <td width="25%" align="left" style="line-height:20px;"> 0.0 </td>
  </tr>
  <tr>
    <td width="25%" align="left" style="line-height:20px;"> <strong>Ghouse gas saved/yr(kg)*</strong> </td>
    <td width="25%" align="left" style="line-height:20px;"> 0.0 </td>
    <td width="25%" align="left" style="line-height:20px;"> 0.0 </td>
    <td width="25%" align="left" style="line-height:20px;"> 0.0 </td>
  </tr>
</table>
  

<table border="0" cellspacing="0" cellpadding="0">
	<tr> <td align="left" width="100%" style="line-height:20px;">&nbsp;</td></tr>
</table>


<table border="0" cellspacing="0" cellpadding="0">
	<tr> <td align="left" width="100%">
	<img src="images/graphchart-two.jpg" />
	</td></tr>
</table>


<p style="font-size:14px;text-align:center"><strong> System output limitations </strong></p>



<table border="0" cellspacing="0" cellpadding="0" style="border:1.4px solid #000;">
	<tr>
	    <td align="left" width="25%" bgcolor="#ebebeb" style="color:#000;line-height:20px;"> 
		<span style="line-height:10px;">Battery bank recommended <br> usable capacity </span></td>
	    <td align="left" width="25%" bgcolor="#ffffff" style="color:#000;line-height:20px;">21.60kWh</td>
 	    <td align="left" width="50%" bgcolor="#ffffff" style="color:#ab1c22;line-height:20px;" colspan="2">(from syestems details & battery specs)</td>
	</tr>
	<tr>
	    <td align="left" width="25%" bgcolor="#ebebeb" style="color:#000;line-height:20px;"> 
		<span style="line-height:10px;">Maximum surge load </span></td>
	    <td align="left" width="25%" bgcolor="#ffffff" style="color:#000;line-height:20px;">97.00%kWh</td>
 	    <td align="left" width="50%" bgcolor="#ffffff" style="color:#ab1c22;line-height:20px;" colspan="2">(from panel specs)</td>
	</tr>
	<tr>
	    <td align="left" width="25%" bgcolor="#ebebeb" style="color:#000;line-height:20px;"> 
		<span style="line-height:10px;">Maximum surge time </span></td>
	    <td align="left" width="25%" bgcolor="#ffffff" style="color:#000;line-height:20px;">18 </td>
 	    <td align="left" width="50%" bgcolor="#ffffff" style="color:#ab1c22;line-height:20px;" colspan="2">(from panel specs)</td>
	</tr>
	<tr>
	    <td align="left" width="25%" bgcolor="#ebebeb" style="color:#000;line-height:20px;"> 
		<span style="line-height:10px;">Continuous load </span></td>
	    <td align="left" width="25%" bgcolor="#ffffff" style="color:#000;line-height:20px;">30kWh</td>
 	    <td align="left" width="50%" bgcolor="#ffffff" style="color:#ab1c22;line-height:20px;" colspan="2">(from panel specs)</td>
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
