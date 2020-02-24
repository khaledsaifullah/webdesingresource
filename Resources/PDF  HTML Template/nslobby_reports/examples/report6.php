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


<table border="0" cellspacing="0" cellpadding="0" width="100%">
	<tr>
		<td align="left" style="width:100px;"> <a href="#"><img src="images/ausnet-logo.jpg" width="85" height="50"  /></a> </td>
		<td align="left"  style="width:500px;"><strong style="font-size:13px;line-height:50px;">Embedded  Generator Pre-Approval Form </strong> </td>
	</tr>
</table>
<table border="0" cellspacing="0" cellpadding="0" width="100%">
	<tr><td align="right" style="line-height:10px"></td></tr>
</table>


<table width="100%" border="0" cellspacing="0" cellpadding="0"  class="data-table">
  <tr>
    <td align="left" style="line-height:10px;color:#2a87ca;"> Embeded	<br/> <span> Generation type </span> </td>
    <td align="left"> <img src="images/ticmark.jpg" />
	<span> Solar</span> &nbsp;&nbsp; <img src="images/ticmark.jpg" /><span> Wind</span> 
	<img src="images/ticmark.jpg" /><span> Battery</span> <br /> <img src="images/ticmark.jpg" /><span> Hydro</span> 
	</td>
    <td align="left"> <img src="images/ticmark.jpg" /><span> Other</span> </td>
    <td align="left"> ........................................ <span> Type</span> </td>
  </tr>
  <tr>
    <td align="left" style="line-height:10px;color:#2a87ca;"> System Size Limit </td>
    <td align="left"> <img src="images/ticmark.jpg" /><span> 4.6kW-15kW</span> &nbsp;&nbsp; <img src="images/ticmark.jpg" /><span> 15kw-Above</span>  <br />
    <img src="images/ticmark.jpg" /> Single Line Diagram attached
	</td>
    <td align="left"> <img src="images/ticmark.jpg" /><span> 4.6kW-15kW</span> &nbsp;&nbsp; <img src="images/ticmark.jpg" /><span> 15kw-Above</span>  <br />
    <img src="images/ticmark.jpg" /> Single Line Diagram attached
	</td>
    <td align="left"> ........................................ <span> kW</span> <br />
     <span> <img src="images/ticmark.jpg" /> Single Line Diagram attached</span>
	</td>
  </tr>

	<tr><td align="left" colspan="4">
	&nbsp;INVOICING DETAILS - Invoice and Approval /rejection letter will be send to company
	</td></tr>


  <tr>
    <td align="left" width="25%"> <strong>COMPANY NAME</strong></td>
    <td align="left" width="25%"> <strong>COMPANY CONTACT</strong></td>
    <td align="left" width="25%"> <strong>COMPANY ABN</strong></td>
    <td align="left" width="25%"> <strong>EMAIL:</strong> </td>
  </tr>

  <tr>
    <td align="left" width="25%"> Solar On Electrical</td>
    <td align="left" width="25%"> <strong>0408258298</strong></td>
    <td align="left" width="25%"> <strong>90000000000</strong></td>
    <td align="left" width="25%"> <a href="mailto:brooke@solaronelectrical.com.au">brooke@solaronelectrical.com.au</a></td>
  </tr>
  <tr>
    <td align="left" width="25%" colspan="2"> COMPANY ADDRESS</td>
    <td align="left" width="75%" colspan="2"> <strong>229Farley Rd</strong>, 
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	Torrumbarry VIC VIC</td>
  </tr>

</table>

<p style="color:#2a87ca;font-weight:bold;font-size:10px;line-height:8px;">SECTION 1: INSTALLATION DETAILS</p>

<table width="100%" border="0" cellspacing="0" cellpadding="0"  class="data-table">
  <tr>
    <td align="left" width="25%"> <strong>Installer Company Name</strong></td>
    <td align="left" width="25%"> <strong>Solar On Electrical</strong></td>
    <td align="left" width="25%"> Instraller Phone Number </td>
    <td align="left" width="25%"> <strong>0408258298</strong></td>
  </tr>
  <tr>
    <td align="left" width="25%"> <strong>Installer Company Address</strong></td>
    <td align="left" width="25%"> <strong>229Farley Rd,Torrumbarry  </strong> </td>
    <td align="left" width="25%"> Instraller email address</td>
    <td align="left" width="25%"> <a href="mailto:brooke@solaronelectrical.com.au">brooke@solaronelectrical.com.au</a></td>
  </tr>
  <tr>
    <td align="left" width="25%"> <span style="line-height:10px;"><strong>Is an existing Embedded Generator<br> Installed at this premise</span></strong></td>
    <td align="left" width="25%">  <img src="images/ticmark.jpg" /> Yes</td>
    <td align="left" width="25%">  <img src="images/ticmark.jpg" /> No</td>
    <td align="left" width="25%">  </td>
  </tr>

  <tr>
    <td align="left" width="25%"> <span style="line-height:10px;"><strong>Total Installed Capacity</strong>(Total rating of , all solar panels, all other energy sources including existing systems if applicable )</span> </td>
    <td align="left" width="25%">   
		<table width="100%" border="0" cellspacing="0" cellpadding="0" align="center">
		  <tr>
			<td align="left" width="5%"></td>
			<td align="left" width="30%"><p style="border-bottom:1px solid #000;line-height:20px;"> 5.00 </p></td>
			<td align="left" width="10%">KW</td>
		  </tr>
		</table>
	</td>
    <td align="left" width="25%"> <span style="line-height:10px;"><strong>Inverter Power Rating</strong> <br/> <span> (1 hour or continuous rating)</span></span> </td>
    <td align="left" width="25%">   
		<table width="100%" border="0" cellspacing="0" cellpadding="0" align="center">
		  <tr>
			<td align="left" width="5%"></td>
			<td align="left" width="30%"><p style="border-bottom:1px solid #000;line-height:20px;"> 5.00 </p></td>
			<td align="left" width="10%">KW</td>
		  </tr>
		</table>
	</td>
  </tr>


  <tr>
    <td align="left" width="25%"> <span style="line-height:10px;"><strong>Installed Capacity Per Phase</strong><br> (mark N/A for phases not available)</span> </td>
    <td align="left" width="25%">  
		<table width="100%" border="0" cellspacing="0" cellpadding="0" align="center">
		  <tr>
			<td align="left" width="35%"> <strong>Phase A</strong>:</td>
			<td align="left" width="40%"><p style="border-bottom:1px solid #000;line-height:20px;">  </p></td>
			<td align="left" width="25%">kW</td>
		  </tr>
		</table>
	</td>
    <td align="left" width="25%">  
		<table width="100%" border="0" cellspacing="0" cellpadding="0" align="center">
		  <tr>
			<td align="left" width="35%"> <strong>Phase B</strong>:</td>
			<td align="left" width="40%"><p style="border-bottom:1px solid #000;line-height:20px;">  </p></td>
			<td align="left" width="25%">kW</td>
		  </tr>
		</table>
	</td>
    <td align="left" width="25%">  
		<table width="100%" border="0" cellspacing="0" cellpadding="0" align="center">
		  <tr>
			<td align="left" width="35%"> <strong>Phase C</strong>:</td>
			<td align="left" width="40%"><p style="border-bottom:1px solid #000;line-height:20px;">  </p></td>
			<td align="left" width="25%">kW</td>
		  </tr>
		</table>
	</td>
  </tr>


  <tr>
    <td align="left" width="25%"> <strong>Inverter Manufacture</strong></td>
    <td align="left" width="25%"> <strong>ZeverSolar</strong> </td>
    <td align="left" width="25%"> Instraller Model Name</td>
    <td align="left" width="25%"> <strong>TL5000-10</strong></td>
  </tr>


  <tr>
    <td align="left" width="25%"> <strong>Export limited</strong></td>
    <td align="left" width="25%"> <strong> </strong> </td>
    <td align="left" width="25%">  </td>
    <td align="left" width="25%"> </td>
  </tr>



</table>


<p style="color:#2a87ca;font-weight:bold;font-size:10px;line-height:8px;"> SECTION 2: INSTALLATION COMPLIANCE (to be completed and signed by the installer) </p>

<table width="100%" border="0" cellspacing="0" cellpadding="0"  class="data-table">
  <tr>
    <td align="left" width="30%"> <strong>Is the Inverter an 'Approved' Inverter </strong></td>
    <td align="left" width="70%"> 
	<img src="images/ticmark.jpg" /> Yes &nbsp;&nbsp;	<img src="images/ticmark.jpg" /> No&nbsp;&nbsp; From Clean Energy Council Approved Grid-COnnected Inverters list
	</td>
  </tr>
  <tr>
    <td align="left" width="30%"> <strong>Inverter Number of Phases </strong></td>
    <td align="left" width="70%"> 
	 <img src="images/ticmark.jpg" /> Single phase 230v
	 <img src="images/ticmark.jpg" /> Three phase 400v
 	 <img src="images/ticmark.jpg" /> Two phase 230/400v
 	 <img src="images/ticmark.jpg" /> Two phase 230/460v
	</td>
  </tr>
  

  <tr>
    <td align="left" width="30%"> <strong>Total Customer Load Number of pHases </strong></td>
    <td align="left" width="70%"> 
	 <img src="images/ticmark.jpg" /> Single phase 230v
	 <img src="images/ticmark.jpg" /> Three phase 400v
 	 <img src="images/ticmark.jpg" /> Two phase 230/400v
 	 <img src="images/ticmark.jpg" /> Two phase 230/460v
	</td>
  </tr>


</table>



<table border="0" cellspacing="0" cellpadding="0" align="center">
	<tr> <td align="left" style="line-height:20px;">&nbsp;</td>    </tr>
</table>



<table width="100%" border="0" cellspacing="0" cellpadding="0">
<tr>
<td align="left" colspan="3">By  signing this form,you acknowledge and represent that the information provided is true and correct and that the minimum requirements set out for PV systems up to 3.5kw/phase(SWER system) up to 4.6kW/phase (on a Single Phase ) and 5kW/phase (on a three Phase System ) have been met.</td>
</tr>

<tr><td align="left" colspan="3" style="line-height:5px;"></td></tr>

<tr>
<td align="left" style="width:10px;">*</td>
<td align="left" style="width:10px;"></td>
<td align="left" style="width:500px;">AusNet Services accepts  no responsibility for nay costs if a customer installs an Embedded Generator prior to receving  authorisation.</td>
</tr>

<tr><td align="left" colspan="3" style="line-height:5px;"></td></tr>

<tr>
<td align="left" style="width:10px;">*</td>
<td align="left" style="width:10px;"></td>
<td align="left" style="width:500px;"> Other charges associated with metering alterations, approvals or  commissioning and testing are not included in pre-approval charge </td>
</tr>

<tr><td align="left" colspan="3" style="line-height:5px;"></td></tr>


<tr>
<td align="left" style="width:10px;">*</td>
<td align="left" style="width:10px;"></td>
<td align="left" style="width:500px;">If any adverse impacts to the network are  identified ,capacity of the systems proposed might need to reduced , connection may be refused, or a financial contribution may be required to upgrade the electricity network. </td>
</tr>
 


<tr><td align="left" colspan="3" style="line-height:5px;"></td></tr>


<tr>
<td align="left" style="width:10px;">*</td>
<td align="left" style="width:10px;"></td>
<td align="left" style="width:500px;">Inverter Energy Systems that do not meet the minimum requirements will not be accepted , and when indentified will be required to 
disconnect until modified to comply</td>
</tr>
<tr><td align="left" colspan="3" style="line-height:15px;"></td></tr>

</table>



<table border="0" cellspacing="0" cellpadding="0" align="center">
	<tr> <td align="left" style="line-height:20px;">&nbsp;</td>    </tr>
</table>





<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td align="left" width="50%"> 
		<table width="100%" border="0" cellspacing="0" cellpadding="0">
		<tr>
			<td align="left" width="20%"> Installer Name: </td>
			<td align="left" width="80%" style="line-height:5px;"> 
			<div  style="border-bottom:1px dotted #000;width:100px;">&nbsp;&nbsp;<b style="line-height:2px;">Brooke Coghlan</b></div> </td>
		</tr>
		</table>
	</td>
    <td align="left" width="50%"> 
		<table width="100%" border="0" cellspacing="0" cellpadding="0">
		<tr>
			<td align="left" width="35%"> Installer Accreditation  No*: </td>
			<td align="left" width="65%" style="line-height:5px;"> 
			<div  style="border-bottom:1px dotted #000;width:100px;">&nbsp;&nbsp;<b style="line-height:2px;">A7493265</b></div> </td>
		</tr>
		</table>
	</td>
  </tr>

<tr><td align="left" colspan="2" style="line-height:15px;"></td></tr>

  <tr>
    <td align="left" width="50%"> 
		<table width="100%" border="0" cellspacing="0" cellpadding="0">
		<tr>
			<td align="left" width="25%"> Installer Signature: </td>
			<td align="left" width="75%" style="line-height:5px;"> 
			<div  style="border-bottom:1px dotted #000;width:100px;">&nbsp;&nbsp;<b style="line-height:2px;"> </b></div> </td>
		</tr>
		</table>
	</td>
    <td align="left" width="50%"> 
		<table width="100%" border="0" cellspacing="0" cellpadding="0">
		<tr>
			<td align="left" width="10%"> Date*: </td>
			<td align="left" width="90%" style="line-height:5px;"> 
			<div  style="border-bottom:1px dotted #000;width:100px;">&nbsp;&nbsp;<b style="line-height:2px;"> </b></div> </td>
		</tr>
		</table>
	</td>
  </tr>


</table>
<p><i>Applicaion is valid for 90 days from this date. If not installed within 90 days new application is required</i></p>



<p style="color:#2a87ca;font-weight:bold;font-size:10px;line-height:8px;">SECTION 3: GENERATOR OWNER DETAILS</p>




<table width="100%" border="0" cellspacing="0" cellpadding="0"  class="data-table">
   <tr>
	<td align="left"  width="20%" > Customer Name* </td>
	<td align="left"  width="80%" >
		<table width="100%" border="0" cellspacing="0" cellpadding="0"  class="data-table">
		   <tr>
				<td align="left"> <strong>Firstname Customer</strong></td>
				<td align="left" style="width:120px;"> <b>Customer NMI*</b> <span  style="line-height:10px;">(Refer to)<br> your electricity bill) </span></td>
				<td align="left" style="width:92px;"> 420 1last 6 digits </td>
				<td align="left"> Existing Meter Number </td>
				<td align="left"> 1234 </td>
		  </tr>
		</table>
	</td>
  </tr>


   <tr>
	<td align="left"  width="20%" > Supply Address*</td>
	<td align="left"  width="80%" >
		<table width="100%" border="0" cellspacing="0" cellpadding="0"  class="data-table">
		   <tr>
				<td align="left"> <strong>123 John St</strong></td>
				<td align="left"> <strong>Melbourne VIC 3000</strong></td>
		  </tr>
		</table>
	</td>
  </tr>

   <tr>
	<td align="left"  width="20%" > Supply Address*</td>
	<td align="left"  width="80%" >
		<table width="100%" border="0" cellspacing="0" cellpadding="0"  class="data-table">
		   <tr>
				<td align="left"> <strong>123 John St</strong>  <strong>&nbsp;&nbsp;&nbsp;Melbourne VIC 3000</strong></td>
				<td align="left">
					&nbsp;&nbsp;Phone Number* &nbsp;&nbsp;40000000
				</td>
		  </tr>
		</table>
		
	</td>
  </tr>


</table>
<p>PRIVACY STATEMENT: The personal information you provide in this form will be collected by your Distributor for the purpose of connecting your proposed Embedded Generator to the Victorian electricity grid. This information will be used and disclosed by your Distributor in accordance with its privacy processes . 
You can find more information on your Distributors privacy processes on their website.  </p>
<p style="text-align:right;"> V5 5/8/2014 </p>







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
