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
		<td align="left"  style="width:500px;"><strong style="font-size:13px;line-height:50px;">Inverter Energy System (IES) Generator Connection Form</strong> </td>
	</tr>
</table>
<table border="0" cellspacing="0" cellpadding="0" width="100%">
	<tr><td align="right" style="line-height:10px"></td></tr>
</table>


<table width="100%" border="0" cellspacing="0" cellpadding="0"  class="data-table">
  <tr>
    <td align="left" style="line-height:10px;color:#40b360;"> Inverter Energy	<br/> <span> system type </span> </td>
    <td align="left"> <img src="images/ticmark.jpg" /><span> Solar</span> &nbsp;&nbsp; <img src="images/ticmark.jpg" /><span> Wind</span> </td>
    <td align="left"> <img src="images/ticmark.jpg" /><span> Solar</span> &nbsp;&nbsp; <img src="images/ticmark.jpg" /><span> Wind</span> </td>
    <td align="left"> <img src="images/ticmark.jpg" /><span> Solar/Wind Combined </span>  </td>
    <td align="left"> <img src="images/ticmark.jpg" /><span> Other....</span>  </td>
    <td align="left"> <img src="images/ticmark.jpg" /><span> Other....</span>  </td>
  </tr>
  <tr>
    <td align="left" style="line-height:10px;color:#40b360;"> System Size Limit	<br/> <span  style="line-height:65px;"> Customer Phases </span> </td>
    <td align="left">  
		<table width="100%" border="0" cellspacing="0" cellpadding="0">
		  <tr><td align="left" colspan="8">Up to 4.6kW</td></tr>
		  <tr>
			<td align="left" colspan="3"></td>
			<td align="left"> </td>
			<td align="left"  colspan="4" style="line-height:10px;">  </td>
		  </tr>
		  <tr>
			<td align="left" style="width:10px">1</td>
			<td align="left"><img src="images/ticmark.jpg" /></td>
			<td align="left" style="width:5px"></td>
			<td align="left" style="width:10px">2</td>
			<td align="left"><img src="images/ticmark.jpg" /></td>
			<td align="left" style="width:5px"></td>
			<td align="left" style="width:10px">3</td>
			<td align="left"><img src="images/ticmark.jpg" /></td>
		  </tr>
		</table>
	</td>
    <td align="left">  
		<table width="100%" border="0" cellspacing="0" cellpadding="0">
		  <tr><td align="left" colspan="8">4.6kW - 15kW</td></tr>
		  <tr>
			<td align="left" style="width:12px;"><img src="images/ticmark.jpg" /></td>
			<td align="left" colspan="7" style="width:100px;line-height:10px;">pre-Approval<br />Submitted </td>
		  </tr>
		  <tr>
			<td align="left" style="width:10px">1</td>
			<td align="left"><img src="images/ticmark.jpg" /></td>
			<td align="left" style="width:5px"></td>
			<td align="left" style="width:10px">2</td>
			<td align="left"><img src="images/ticmark.jpg" /></td>
			<td align="left" style="width:5px"></td>
			<td align="left" style="width:10px">3</td>
			<td align="left"><img src="images/ticmark.jpg" /></td>
		  </tr>
		</table>
	</td>

    <td align="left">  
		<table width="100%" border="0" cellspacing="0" cellpadding="0">
		  <tr><td align="left" colspan="8">4.6kW - 15kW</td></tr>
		  <tr>
			<td align="left" style="width:12px;"><img src="images/ticmark.jpg" /></td>
			<td align="left" colspan="7" style="width:100px;line-height:10px;">pre-Approval<br />Submitted </td>
		  </tr>
		  <tr>
			<td align="left" style="width:10px">1</td>
			<td align="left"><img src="images/ticmark.jpg" /></td>
			<td align="left" style="width:5px"></td>
			<td align="left" style="width:10px">2</td>
			<td align="left"><img src="images/ticmark.jpg" /></td>
			<td align="left" style="width:5px"></td>
			<td align="left" style="width:10px">3</td>
			<td align="left"><img src="images/ticmark.jpg" /></td>
		  </tr>
		</table>
	</td>

    <td align="left">  
		<table width="100%" border="0" cellspacing="0" cellpadding="0">
		  <tr><td align="left" colspan="8">Up to 4.6kW</td></tr>
		  <tr>
			<td align="left" style="width:12px;"></td>
			<td align="left" colspan="7" style="width:100px;line-height:10px;"></td>
		  </tr>
		  <tr>
			<td align="left" style="width:10px">1</td>
			<td align="left"><img src="images/ticmark.jpg" /></td>
			<td align="left" style="width:5px"></td>
			<td align="left" style="width:10px">2</td>
			<td align="left"><img src="images/ticmark.jpg" /></td>
			<td align="left" style="width:5px"></td>
			<td align="left" style="width:10px">3</td>
			<td align="left"><img src="images/ticmark.jpg" /></td>
		  </tr>
		</table>
	</td>


    <td align="left">  
		<table width="100%" border="0" cellspacing="0" cellpadding="0">
		  <tr><td align="left" colspan="8">4.6kW-15kW</td></tr>
		  <tr>
			<td align="left" style="width:12px;"><img src="images/ticmark.jpg" /></td>
			<td align="left" colspan="7" style="width:100px;line-height:10px;">pre-Approval<br />Submitted </td>
		  </tr>
		  <tr>
			<td align="left" style="width:10px">1</td>
			<td align="left"><img src="images/ticmark.jpg" /></td>
			<td align="left" style="width:5px"></td>
			<td align="left" style="width:10px">2</td>
			<td align="left"><img src="images/ticmark.jpg" /></td>
			<td align="left" style="width:5px"></td>
			<td align="left" style="width:10px">3</td>
			<td align="left"><img src="images/ticmark.jpg" /></td>
		  </tr>
		</table>
	</td>


  </tr>
</table>


<table border="0" cellspacing="0" cellpadding="0" align="center">
	<tr> <td align="left" style="line-height:10px;">&nbsp;</td>    </tr>
</table>

<table cellpadding="0" cellspacing="0">
<tr>
<td><p style="line-height:10px;color:#40b360; font-size:10px;">SECTION 1: INSTALLATION DETAILS (to be completed, signed and submitted to AusNet Services by the installer) </p></td>
</tr>
<tr>
<td><p style="line-height:10px;"></p></td>
</tr>
</table>



<table border="0" cellspacing="0" cellpadding="0"   class="data-table">
  <tr>
    <td align="left" style="width:40%;"><strong> Installer Company Name</strong></td>
    <td align="left"  style="width:64%;"><table border="0" cellspacing="0" cellpadding="0" width="100%" >
        <tr>
          <td align="left" style="width:30%;"><strong> Solar On Electrical</strong></td>
          <td align="left" style="width:40%;border-left:1px solid #d6d6d6;"><strong> Installer Phone Number</strong></td>
          <td align="left" style="width:30%;border-left:1px solid #d6d6d6;"><strong> 0408258298</strong></td>
        </tr>
      </table></td>
  </tr>
  <tr>
    <td align="left"  style="width:40%;"><strong> Installer Company Address</strong></td>
    <td align="left"  style="width:64%;"><table border="0" cellspacing="0" cellpadding="0"  width="100%" >
        <tr>
          <td align="left" style="line-height:18px;"><strong> 229 Farley Rd, Torrumbarry VIC 3562</strong></td>
        </tr>
      </table></td>
  </tr>
    <tr>
    <td align="left" style="width:40%;line-height:10px;"><br/>
      <br/>
      <b>  Total Installed Capacity</b>(Total raiting of,<br /> <span>&nbsp;&nbsp;all solar panels, all turbines, or all other energy sources)</span> </td>
    <td align="left" style="width:64%;"><table border="0" cellspacing="0" cellpadding="0"  width="100%" >
        <tr>
          <td align="center" style="width:33%;line-height:30px;">
				<table width="100%" border="0" cellspacing="0" cellpadding="0" align="center">
				  <tr>
					<td align="left" width="5%"></td>
					<td align="left" width="30%"><p style="border-bottom:1px solid #000;line-height:20px;">  </p></td>
					<td align="center" width="20%">5,00</td>
					<td align="left" width="30%"><p style="border-bottom:1px solid #000;line-height:20px;">  </p></td>
					<td align="left" width="10%">KW</td>
				  </tr>
				</table>
		  </td>
          <td align="center" style="width:33%;line-height:30px;border-left:1px solid #d6d6d6;">		
				<p style="line-height:10px">Inverter Power Raiting	<br/> (1 hour or continouous raiting)</p>
		  </td>
          <td align="center" style="width:33%;line-height:30px;border-left:1px solid #d6d6d6;">
				<table width="100%" border="0" cellspacing="0" cellpadding="0" align="center">
				  <tr>
					<td align="left" width="5%"></td>
					<td align="left" width="30%"><p style="border-bottom:1px solid #000;line-height:20px;">  </p></td>
					<td align="center" width="20%">5,00</td>
					<td align="left" width="30%"><p style="border-bottom:1px solid #000;line-height:20px;">  </p></td>
					<td align="left" width="10%">KW</td>
				  </tr>
				</table>
		  </td>
        </tr>
      </table></td>
  </tr>
  <tr>
    <td align="left" style="width:40%;line-height:10px;"><br/>
      <br/>
      <b> Installed Capacity Per Phase</b> <br/>
      <span> &nbsp;&nbsp; (mark N/A for phases not available)</span> </td>
    <td align="left" style="width:64%;"><table border="0" cellspacing="0" cellpadding="0"  width="100%" >
        <tr>
          <td align="center" style="width:33%;line-height:30px;">
				<table width="100%" border="0" cellspacing="0" cellpadding="0" align="center">
				  <tr>
					<td align="left" width="35%"> <strong>Phase A</strong>:</td>
					<td align="left" width="40%"><p style="border-bottom:1px solid #000;line-height:20px;">  </p></td>
					<td align="left" width="25%">kW</td>
				  </tr>
				</table>
		  </td>
          <td align="center" style="width:33%;line-height:30px;border-left:1px solid #d6d6d6;">
				<table width="100%" border="0" cellspacing="0" cellpadding="0" align="center">
				  <tr>
					<td align="left" width="35%"> <strong>Phase B</strong>:</td>
					<td align="left" width="40%"><p style="border-bottom:1px solid #000;line-height:20px;">  </p></td>
					<td align="left" width="25%">kW</td>
				  </tr>
				</table>
		  </td>
          <td align="center" style="width:33%;line-height:30px;border-left:1px solid #d6d6d6;">
				<table width="100%" border="0" cellspacing="0" cellpadding="0" align="center">
				  <tr>
					<td align="left" width="35%"> <strong>Phase C</strong>:</td>
					<td align="left" width="40%"><p style="border-bottom:1px solid #000;line-height:20px;">  </p></td>
					<td align="left" width="25%">kW</td>
				  </tr>
				</table>
		  </td>
        </tr>
      </table></td>
  </tr>
  <tr>
    <td align="left" style="width:40%"> Operating Manual Provided to Customer </td>
    <td align="left" style="width:64%;"><table border="0" cellspacing="0" cellpadding="0"  width="100%" >
        <tr>
          <td align="center" style="width:10%;"><img src="images/ticmark.jpg" /> Yes</td>
          <td align="center" style="width:80%;border-left:1px solid #d6d6d6;"> Instructed Customer in Operation of System </td>
          <td align="center" style="width:10%;border-left:1px solid #d6d6d6;"><img src="images/ticmark.jpg" /> Yes</td>
        </tr>
      </table></td>
  </tr>
</table>







<p><strong>By signing this form, you acknowledgement amd represent that the information provided  is true and correct.</strong> </p>

<table border="0" cellspacing="0" cellpadding="0" width="100%">
<tr>
	<td align="left" width="49%">
        <table border="0" cellspacing="0" cellpadding="0" width="100%">
        <tr>
            <td align="left" width="30%"> <strong>Installer Name: </strong></td>
            <td align="center" width="70%"><div  style="border-bottom:1px dotted #000;width:100px;">&nbsp;&nbsp;<b style="line-height:2px;">Brooke Coghlan</b></div></td>
        </tr>
        </table>   
    </td>
	<td align="left" width="2%"></td>
	<td align="left" width="49%">
        <table border="0" cellspacing="0" cellpadding="0" width="100%">
        <tr>
            <td align="left" width="40%"> <strong>Installer Accreditation No*:</strong> </td>
            <td align="center" width="60%"><div  style="border-bottom:1px dotted #000;width:100px;">&nbsp;&nbsp;<b style="line-height:2px;"> A7493265 </b></div></td>
        </tr>
        </table>   
    </td>
	 
</tr>

<tr>
	<td align="left" width="49%">
        <table border="0" cellspacing="0" cellpadding="0" width="100%">
        <tr>
            <td align="left" width="30%"> <strong>Installer Signature:</strong> </td>
            <td align="center" width="70%"><div  style="border-bottom:1px dotted #000;width:100px;">&nbsp;&nbsp;<b style="line-height:2px;"> </b></div></td>
        </tr>
        </table>   
    </td>
	<td align="left" width="2%"></td>
		<td align="left" width="49%">
        <table border="0" cellspacing="0" cellpadding="0" width="100%">
        <tr>
            <td align="left" width="10%"><strong>Date*.</strong> </td>
            <td align="center" width="90%"><div  style="border-bottom:1px dotted #000;width:100px;">&nbsp;&nbsp;<b style="line-height:2px;"></b></div></td>
        </tr>
        </table>   
    </td>

	 
</tr>
</table>


<table cellpadding="0" cellspacing="0">
<tr>
<td><p style="line-height:10px;color:#40b360; font-size:10px;"> SECTION 2: INSTALLATION COMPLIANCE (to be completed and signed by the Registerd Electrical Contractor) </p></td>
</tr>
<tr>
<td><p style="line-height:10px;"></p></td>
</tr>
</table>





<table border="0" cellspacing="0" cellpadding="0" align="center">
	<tr> <td align="left" style="line-height:10px;">&nbsp;</td>    </tr>
</table>
 

<table border="0" cellspacing="0" cellpadding="0" width="100%"  class="data-table">
  <tr>
    <td align="left" width="20%"><p style="line-height:13px;">&nbsp;&nbsp;<strong>Wired for Net Metering</strong></p> </td>
    <td align="left" width="80%"> 
		<table width="100%" border="0" cellspacing="0" cellpadding="0">
		  <tr><td align="left" width="100%" colspan="5" style="line-height:3px;"></td></tr>
		  <tr>
			<td align="left" width="10%"><img src="images/ticmark.jpg" /> Yes</td>
			<td align="left" width="10%"><img src="images/ticmark.jpg" /> No</td>
			<td align="left" width="13%">Please Spicify :</td>
			<td align="left" width="60%"><p style="border-bottom:1px solid #000;line-height:10px;">  </p></td>
			<td align="left" width="5%"></td>
		  </tr>
		</table>
	</td>
  </tr>
  <tr>
    <td align="left" width="20%" >
		<table width="100%" border="0" cellspacing="0" cellpadding="0">
		  <tr> <td align="left" style="line-height:10px;"></td> </tr>
		  <tr> <td align="left" style="border-bottom:1px solid #d6d6d6;"><p style="line-height:13px;">&nbsp;&nbsp;<strong>Inverter Number of <br> &nbsp;Phase</strong></p> </td> 
		  </tr>
		  <tr> <td align="left"><p style="line-height:13px;">&nbsp;&nbsp;<strong>Inverter Number of <br> &nbsp;Phase</strong></p> </td> </tr>
		</table>
	</td>
    <td align="left" width="80%">
		<table width="100%" border="0" cellspacing="0" cellpadding="0">
		<tr>
			<td align="left" width="60%" style="border-right:1px solid #d6d6d6;">
				<table width="100%" border="0" cellspacing="0" cellpadding="0">
					<tr>
						<td align="left" width="50%"> <img src="images/ticmark.jpg" /> Single phase 230V</td>
						<td align="left" width="50%"> <img src="images/ticmark.jpg" /> Three phase 400V</td>
					</tr>
					<tr>
						<td align="left" width="50%" style="border-bottom:1px solid #d6d6d6;"> <img src="images/ticmark.jpg" /> Two phase 230/400V	</td>
						<td align="left" width="50%" style="border-bottom:1px solid #d6d6d6;"> <img src="images/ticmark.jpg" /> Two phase 230/460V </td>
					</tr>
					<tr>
						<td align="left" width="50%"> <img src="images/ticmark.jpg" /> Single phase 230V</td>
						<td align="left" width="50%"> <img src="images/ticmark.jpg" /> Three phase 400V</td>
					</tr>
					<tr>
						<td align="left" width="50%"> <img src="images/ticmark.jpg" /> Two phase 230/400V	</td>
						<td align="left" width="50%"> <img src="images/ticmark.jpg" /> Two phase 230/460V </td>
					</tr>
				</table>
			</td>
			<td align="center" width="30%" style="border-right:1px solid #d6d6d6;text-align:center;line-height:12px;">
				<br /> <br /> <br /> <strong>Access to Meter<br />Switchboard</strong>
			</td>
			<td align="center" width="10%"><br /><br />
				<img src="images/ticmark.jpg" /> Yes<br />
				<img src="images/ticmark.jpg" /> No
			</td>
		</tr>
		</table>
	</td>
  </tr>
</table>


<p><strong style="color:#40b360;font-size:11px;">INVERTER TEST RECORDS</strong> This test muct be conducted at a time of day when the prevalling weather conditions
allow the PV system to be producing at least a minimum output. This must be greater than 20% of the rated output of the PV array or the inverter (whichever is less)</p>

 
 


<table border="0" cellspacing="0" cellpadding="0" width="100%"  class="data-table">
<tr>
<td align="left" width="33%" style="line-height:10px;"><br /><br />
	<table width="100%" border="0" cellspacing="0" cellpadding="0">
	  <tr>
		<td align="left"  style="width:150px;">
			<p style="line-height:10px;color:#4eae49;"> INVERTER TYPE 1	</p>
		</td>
		<td align="left" style="width:30px;"> </td>
		<td align="left" style="width:30px;"> </td>
	  </tr>
	  <tr> <td align="right" colspan="2"  style="height:3px;"> </td> </tr>
	  <tr>
		<td align="left"  style="width:150px;">
			<p style="line-height:10px;color:#4eae49;"> MICRO INVERTERS <br> ANTI ISLANDING OPERATION	</p>
		</td>
		<td align="left" style="width:40px;color:#4eae49;"> Yes <img src="images/ticmark.jpg" /> </td>
		<td align="left" style="width:30px;color:#4eae49;"> No <img src="images/ticmark.jpg" /> </td>
	  </tr>
	</table>
</td>
 

<td align="left" width="33%">
	<table border="0" cellspacing="0" cellpadding="0" width="100%">
		<tr><td colspan="2" style="line-height:8px;"></td></tr>
        <tr><td style="width:40px;"></td><td><p style="border-bottom:1px solid #000;line-height:8px;font-size:8px;text-align:center;font-weight:bold;">
		Inverter Make</p> </td></tr>    
		<tr><td style="width:40px;"></td><td><p style="border-bottom:1px dashed #000;line-height:8px;font-size:8px;text-align:center;font-weight:bold;">ZeverSolar</p> 
		</td></tr>    
		<tr><td style="width:40px;"></td><td><p style="border-bottom:1px solid #fff;line-height:8px;font-size:8px;text-align:center;font-weight:bold;">
		Total inverters installed</p> </td></tr>    
		<tr><td style="width:40px;"></td><td><p style="border-bottom:1px dashed #000;line-height:7px;font-size:8px;text-align:center;font-weight:bold;"> </p> 
		</td></tr>    
	</table>
</td>


<td align="left" width="33%">
	<table border="0" cellspacing="0" cellpadding="0" width="100%">
		<tr><td colspan="2" style="line-height:8px;"></td></tr>
        <tr><td style="width:40px;"></td><td><p style="border-bottom:1px solid #000;line-height:8px;font-size:8px;text-align:center;font-weight:bold;">
		Inverter Model</p> </td></tr>    
		<tr><td style="width:40px;"></td><td><p style="border-bottom:1px dashed #000;line-height:8px;font-size:8px;text-align:left;font-weight:bold;">TL5000-10</p> 
		</td></tr>    
	</table>
</td>


</tr>

 






<tr>
<td align="left" width="33%" style="line-height:10px;font-weight:bold;"><br /><br />
	&nbsp;Test 1: Time for inverter/s to disconnect.<br/> <span> Must be &lt;  2 seconds to pass</span>
</td>
 

<td align="left" width="33%">
	<table border="0" cellspacing="0" cellpadding="0" width="100%">
    	<tr>
        	<td align="left"  style="width:90px;"></td>
        	<td align="left" style="width:65px;"><p style="border-bottom:1px solid #000;line-height:10px;"> <strong>Measurement</strong> </p></td>
        	<td align="left"> </td>
        </tr>
    	<tr>
        	<td align="left"  style="width:10px;"></td>
        	<td align="left" style="width:60px;"><p style="border-bottom:1px solid #000;line-height:10px;">  </p></td>
        	<td align="left"> <strong>Seconds</strong> </td>
        </tr>
    </table>
</td>
<td align="left" width="33%">
	<table border="0" cellspacing="0" cellpadding="0" width="100%">
	    <tr> <td align="right" colspan="2"  style="line-height:5px;"> </td> </tr>
    	<tr>
        	<td align="left"  style="width:90px;"></td>
        	<td align="left" style="width:120px;"><p style="border-bottom:1px solid #000;line-height:10px;"> <strong>Result (Please circle one)</strong> </p></td>
        	<td align="left"> </td>
        </tr>
    	<tr>
        	<td align="left"  style="width:10px;"> </td>
        	<td align="left" style="width:100px;"> </td>
        	<td align="left"> <strong>Pass/Fail</strong> </td>
        </tr>
    </table>

</td>
</tr>

<tr>
<td align="left" width="33%" style="line-height:10px;font-weight:bold;"><br /><br />
	&nbsp;Test 2: Time for inverter to reconnect.  <br/> <span> &nbsp; Must be &gt; 60 seconds to pass</span>
</td>
<td align="left" width="33%">
	<table border="0" cellspacing="0" cellpadding="0" width="100%">
    	<tr>
        	<td align="left"  style="width:90px;"></td>
        	<td align="left" style="width:65px;"> </td>
        	<td align="left"> </td>
        </tr>
    	<tr>
        	<td align="left"  style="width:10px;"></td>
        	<td align="left" style="width:60px;"><p style="border-bottom:1px solid #000;line-height:10px;">  </p></td>
        	<td align="left"> <strong>Seconds</strong> </td>
        </tr>
    </table>
</td>
<td align="left" width="33%">
	<table border="0" cellspacing="0" cellpadding="0" width="100%">
    	<tr>
        	<td align="left"  style="width:90px;"></td>
        	<td align="left" style="width:110px;"> </td>
        	<td align="left"> </td>
        </tr>
    	<tr>
        	<td align="left"  style="width:10px;"> </td>
        	<td align="left" style="width:100px;"> </td>
        	<td align="left"> <strong>Pass/Fail</strong> </td>
        </tr>
    </table>

</td>
</tr>
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


<table border="0" cellspacing="0" cellpadding="0" width="100%">
	<tr>
		<td align="left" style="width:100px;"> <a href="#"><img src="images/ausnet-logo.jpg" width="85" height="50"  /></a> </td>
		<td align="left"  style="width:500px;"><strong style="font-size:13px;line-height:50px;">Inverter Energy System (IES) Generator connection Form</strong> </td>
	</tr>
</table>
<table border="0" cellspacing="0" cellpadding="0" width="100%">
	<tr><td align="right" style="line-height:10px"></td></tr>
</table>

 
<table border="0" cellspacing="0" cellpadding="0" align="center">
	<tr> <td align="left" style="line-height:10px;">&nbsp;</td>    </tr>
</table>
 

<table border="0" cellspacing="0" cellpadding="0" width="100%"  class="data-table">
<tr>
<td align="left" width="33%" style="line-height:10px;"><br /><br />
	<table width="100%" border="0" cellspacing="0" cellpadding="0">
	  <tr>
		<td align="left"  style="width:150px;">
			<p style="line-height:10px;color:#4eae49;"> INVERTER TYPE (if applicable) </p>
		</td>
		<td align="left" style="width:30px;"> </td>
		<td align="left" style="width:30px;"> </td>
	  </tr>
	  <tr> <td align="right" colspan="2"  style="height:3px;"> </td> </tr>
	  <tr>
		<td align="left"  style="width:150px;">
			<p style="line-height:10px;color:#4eae49;"> MICRO INVERTERS <br> ANTI ISLANDING OPERATION	</p>
		</td>
		<td align="left" style="width:40px;color:#4eae49;"> Yes <img src="images/ticmark.jpg" /> </td>
		<td align="left" style="width:30px;color:#4eae49;"> No <img src="images/ticmark.jpg" /> </td>
	  </tr>
	</table>
</td>
 

<td align="left" width="33%">
	<table border="0" cellspacing="0" cellpadding="0" width="100%">
		<tr><td colspan="2" style="line-height:8px;"></td></tr>
        <tr><td style="width:40px;"></td><td><p style="border-bottom:1px solid #000;line-height:8px;font-size:8px;text-align:center;font-weight:bold;">
		Inverter Make</p> </td></tr>    
		<tr><td style="width:40px;"></td><td><p style="border-bottom:1px dashed #000;line-height:8px;font-size:8px;text-align:center;font-weight:bold;"> </p> 
		</td></tr>    
		<tr><td style="width:40px;"></td><td><p style="border-bottom:1px solid #fff;line-height:8px;font-size:8px;text-align:center;font-weight:bold;">
		Total inverters installed</p> </td></tr>    
		<tr><td style="width:40px;"></td><td><p style="border-bottom:1px dashed #000;line-height:7px;font-size:8px;text-align:center;font-weight:bold;"> </p> 
		</td></tr>    
	</table>
</td>

<td align="left" width="33%">
	<table border="0" cellspacing="0" cellpadding="0" width="100%">
		<tr><td colspan="2" style="line-height:8px;"></td></tr>
        <tr><td style="width:40px;"></td><td><p style="border-bottom:1px solid #000;line-height:8px;font-size:8px;text-align:center;font-weight:bold;">
		Inverter Model</p> </td></tr>    
		<tr><td style="width:40px;"></td><td><p style="border-bottom:1px dashed #000;line-height:8px;font-size:8px;text-align:left;font-weight:bold;"> </p> 
		</td></tr>    
	</table>
</td>
</tr>


<tr>
<td align="left" width="33%" style="line-height:10px;"><br /><br />
	&nbsp;Test 1: Time for inverter/s to disconnect.<br/> <span> Must be &lt;  2 seconds to pass</span>
</td>
 

<td align="left" width="33%">
	<table border="0" cellspacing="0" cellpadding="0" width="100%">
    	<tr>
        	<td align="left"  style="width:90px;"></td>
        	<td align="left" style="width:65px;"><p style="border-bottom:1px solid #000;line-height:10px;"> <strong>Measurement</strong> </p></td>
        	<td align="left"> </td>
        </tr>
    	<tr>
        	<td align="left"  style="width:10px;"></td>
        	<td align="left" style="width:60px;"><p style="border-bottom:1px solid #000;line-height:10px;">  </p></td>
        	<td align="left"> <strong>Seconds</strong> </td>
        </tr>
    </table>
</td>
<td align="left" width="33%">
	<table border="0" cellspacing="0" cellpadding="0" width="100%">
	    <tr> <td align="right" colspan="2"  style="line-height:5px;"> </td> </tr>
    	<tr>
        	<td align="left"  style="width:90px;"></td>
        	<td align="left" style="width:120px;"><p style="border-bottom:1px solid #000;line-height:10px;"> <strong>Result (Please circle one)</strong> </p></td>
        	<td align="left"> </td>
        </tr>
    	<tr>
        	<td align="left"  style="width:10px;"> </td>
        	<td align="left" style="width:100px;"> </td>
        	<td align="left"> <strong>Pass/Fail</strong> </td>
        </tr>
    </table>

</td>
</tr>

<tr>
<td align="left" width="33%" style="line-height:10px;"><br /><br />
	&nbsp;Test 2: Time for inverter to reconnect. Must be &gt;  <br/> <span> &nbsp;60 seconds to pass</span>
</td>
<td align="left" width="33%">
	<table border="0" cellspacing="0" cellpadding="0" width="100%">
    	<tr>
        	<td align="left"  style="width:90px;"></td>
        	<td align="left" style="width:65px;"> </td>
        	<td align="left"> </td>
        </tr>
    	<tr>
        	<td align="left"  style="width:10px;"></td>
        	<td align="left" style="width:60px;"><p style="border-bottom:1px solid #000;line-height:10px;">  </p></td>
        	<td align="left"> <strong>Seconds</strong> </td>
        </tr>
    </table>
</td>
<td align="left" width="33%">
	<table border="0" cellspacing="0" cellpadding="0" width="100%">
    	<tr>
        	<td align="left"  style="width:90px;"></td>
        	<td align="left" style="width:110px;"> </td>
        	<td align="left"> </td>
        </tr>
    	<tr>
        	<td align="left"  style="width:10px;"> </td>
        	<td align="left" style="width:100px;"> </td>
        	<td align="left"> <strong>Pass/Fail</strong> </td>
        </tr>
    </table>

</td>
</tr>
</table>

 
<table border="0" cellspacing="0" cellpadding="0" align="center">
	<tr> <td align="left" style="line-height:10px;">&nbsp;</td>    </tr>
</table>



<p>By signing this form, you acknowledgement  and represent that: </p>
<table border="0" cellspacing="0" cellpadding="0" width="100%">
  <tr>
    <td align="left" width="49%">
	<table border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td align="left" width="2%">*</td>
          <td align="left" width="80%">the Inverter Energy System complies with the Electricity Safety Act 1998 
            (Vic) and associated Safety Regualtions, the Electricity Distribution
            Code, the Victorian Service & Installation Rules, AS/NZS3000 (Wiring
            Rules) and AS4777 (Grid Connection of Energy, Systems via (Inverters)
            and any other relevant Actsm regulations, standards or guidelines; </td>
        </tr>
        
		<tr>
          <td align="left" width="2%">*</td>
          <td align="left"  width="80%"> the Inverter Energy System  is connected to a dedicated circuit complete with lockable isloilating switch at the switchboard; </td>
        </tr>
		
        <tr>
          <td align="left" width="2%">*</td>
          <td align="left"  width="80%">the main switchboard, Isolating fuses/switch/circuit breaker are labelled
            correctly; </td>
        </tr>
      </table>
     </td>
    <td align="left" width="2%"></td>
    <td align="left" width="49%">
        <table border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td align="left" width="2%">*</td>
              <td align="left"  width="80%"> Commissioning tests as specified in the Service & Installation Rules have 
            been completed and passed. It is recommended that the solar inverter is 
            left in the off position;</td>
            </tr>
            <tr>
            <td align="left" width="2%">*</td>
              <td align="left"  width="80%">alternative supply signage has been installed;</td>
            </tr>
            <tr>
              <td align="left" width="2%">*</td>
              <td align="left"  width="80%">a prescirbed Certificate of Electrical Safety (CES) has been obtained; and
            coples of the Electrical Works Request and the CES will be sent to the 
            generator owner’s Retailer; and</td>
            </tr>
            
            <tr>
                <td align="left" width="2%">*</td>
                <td align="left"  width="80%">the Inverter Energy System owner has been advised that the PV (Solar) Generator should
            remain switched off untill any metering upgrades are complete to avoid 
            potential metering and billing issues.</td>
            </tr>
            
          </table>
     </td>
  </tr>
</table>

<table border="0" cellspacing="0" cellpadding="0" align="center">
	<tr> <td align="left" style="line-height:10px;">&nbsp;</td>    </tr>
</table>


<p style="line-height:10px;color:#4eae49;font-weight:bold;">TEST UNDERTAKEN BY:</p>
<table border="0" cellspacing="0" cellpadding="0" width="100%">
<tr>
	<td align="left" width="49%">
        <table border="0" cellspacing="0" cellpadding="0" width="100%">
        <tr>
            <td align="left" width="70%" style="font-weight:bold;">Licensed Electtrical Installation Worker Name : </td>
            <td align="center" width="30%"><div  style="border-bottom:1px dotted #000;width:100px;">&nbsp;&nbsp;<b style="line-height:2px;">Darren Nagel</b></div></td>
        </tr>
        </table>   
    </td>
	<td align="left" width="2%"></td>
	<td align="left" width="49%">  </td>
</tr>

<tr>
	<td align="left" width="49%">
        <table border="0" cellspacing="0" cellpadding="0" width="100%">
        <tr>
            <td align="left" width="20%"  style="font-weight:bold;">License No*. </td>
            <td align="center" width="80%"><div  style="border-bottom:1px dotted #000;width:100px;">&nbsp;&nbsp;<b style="line-height:2px;">A9537398</b></div></td>
        </tr>
        </table>   
    </td>
    
    
	<td align="left" width="2%"></td>
    
	<td align="left" width="49%">
        <table border="0" cellspacing="0" cellpadding="0" width="100%">
        <tr>
            <td align="left" width="10%" style="font-weight:bold;">Date*. </td>
            <td align="center" width="90%"><div  style="border-bottom:1px dotted #000;width:100px;">&nbsp;&nbsp;<b style="line-height:2px;"></b></div></td>
        </tr>
        </table>   
    </td>
</tr>
<tr>
	<td align="left" width="49%">
        <table border="0" cellspacing="0" cellpadding="0" width="100%">
        <tr>
            <td align="left" width="20%" style="font-weight:bold;">Signature : </td>
            <td align="center" width="80%"><div  style="border-bottom:1px dotted #000;width:100px;">&nbsp;&nbsp;<b style="line-height:2px;"></b></div></td>
        </tr>
        </table>   
    </td>
	<td align="left" width="2%"></td>
	<td align="left" width="49%">  </td>
</tr>
</table> 


<table border="0" cellspacing="0" cellpadding="0" align="center">
	<tr> <td align="left" style="line-height:10px;">&nbsp;</td>    </tr>
</table>

<p style="line-height:10px;color:#4eae49;font-weight:bold;">SECTION 3: INVERTER ENERGY SYSTEM OWNER DETAILS (to be completed and signed by IES owner)</p>
<table border="0" cellspacing="0" cellpadding="0"   class="data-table">
  <tr>
    <td align="left" width="20%"> <strong>Customer Name* </strong></td>
    <td align="left" width="80%">
	   <table border="0" cellspacing="0" cellpadding="0" >
		<tr>
			<td align="left" width="35%"> Firstname Customer </td>
			<td align="left" width="30%" style="border-left:1px solid #d6d6d6;"> <strong>Customer NMI*</strong> 
			<p style="line-height:8px;">(Refer to your electricity bill)</p> </td>
			<td align="left" width="35%" style="border-left:1px solid #d6d6d6;"> 4201last 6 digits</td>
		</tr>
	   </table>
    </td>
  </tr>
  
  <tr>
    <td align="left" width="20%"> <strong>Supply Address*</strong></td>
    <td align="left" width="80%">
	   <table border="0" cellspacing="0" cellpadding="0" >
		<tr>
			<td align="left" width="35%" style="font-weight:bold;line-height:10px;">  123 John St<br /> <span> Melbourne VIC 3000</span></td>
			<td align="left" width="30%" style="border-left:1px solid #d6d6d6;"> <strong>Mailing Address*</strong></td>
			<td align="left" width="35%" style="border-left:1px solid #d6d6d6;font-weight:bold;line-height:10px;">  123 John St<br /> <span> Melbourne VIC 3000</span></td>
		</tr>
	   </table>
	 </td>
  </tr>
  
  
  <tr>
    <td align="left" width="20%"> <strong>Phone Number* </strong></td>
    <td align="left" width="80%">
	   <table border="0" cellspacing="0" cellpadding="0" >
		<tr>
			<td align="left" width="50%" style="line-height:20px;">  Business Hours: <b> 0400000000 </b> </td>
			<td align="left" width="50%" style="line-height:20px;border-left:1px solid #d6d6d6;"> After Hours: <b>  50000000 </b> </td>
		</tr>
	   </table>
	 </td>
  </tr>
  
  
  
  
  <tr>
    <td align="left" width="20%"> <strong>Existing Meter Number*</strong></td>
    <td align="left" width="80%" style="line-height:20px;">  1234  </td>
  </tr>
</table>
<table border="0" cellspacing="0" cellpadding="0" align="center">
	<tr> <td align="left" style="line-height:10px;">&nbsp;</td>    </tr>
</table>




<p style="font-size:11px;font-weight:bold;">CUSTOMER ACKNOWLEDGEMENT,INDEMNITY AND RELEASE</p>
<p style="font-weight:bold;">By signing this form, you asknowledge and represent that you have read, understand and agree to comply with <br> the connection obligations, and that you: </p>

<table border="0" cellspacing="0" cellpadding="0" width="100%">
  <tr>
    <td align="left" width="100%">
	<table border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td align="left" width="2%">*</td>
          <td align="left" width="80%"> are the owner of the Inverter Energy System listed under the Supply Address in section 3 above </td>
        </tr>
         
         
        <tr>
          <td align="left" width="2%">*</td>
          <td align="left" width="80%"> have received an Inverter Energy System operating manual from, and been instructed on the operation of the Inverter Energy System by,
		  the installation Company detailed  in section 1; </td>
        </tr>
        
		 
		 
        <tr>
          <td align="left" width="2%">*</td>
          <td align="left" width="80%"> accept that approval will only be granted for the Inverter Energy System detailed in this form , and that you must 
		  obtain further prior approval from your Distributor to alter your inveter Energy System in any way </td>
        </tr>
         
		 

        <tr>
          <td align="left" width="2%">*</td>
          <td align="left" width="80%"> release and indemnify and agree to keep indemnified your Distributor. its officers, employees and agents against all actions,
		  procedings, claims and demands whatover which may be brought, including any indirect or consequential loss or any other form of pure economic loss, made or
		  prosecuted against them or any of the by any person in respect of the installation of your Inverter Energy System, particularly  in relation to works completed by the installation Company detailed  in section 1 or the compliance certification provided by the registered electircal contractor in section 2, or in respect of connection of your Inverter Energy Systems to the Victorian electricity grid. </td>
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
