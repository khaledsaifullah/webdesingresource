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
	font-size:7px;
}
.data-table{
 	border:1px solid #d6d6d6;
}
.data-table td{
	line-height:13px;
	text-align:left;	
	border:1px solid #d6d6d6;
}
</style>
 
 
  
<p style="font-size:13px;line-height:1px;">Photovoltaic (Solar) Generator Connection Form</p>

<table border="0" cellspacing="0" cellpadding="0"   class="data-table">
  <tr>
    <td align="left" style="width:200px;"> Distribution Network <p style="line-height:6px;color:#ff4444;"> (Please tick applicable Distributor)</p>   </td>
    <td align="left" style="width:82px;"> 
	<table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
            <td align="left"  style="width:60px;">SP AUSNet</td>
            <td align="left"> <img src="images/ticmark.jpg" /> </td>
        </tr>
        </table>
	</td>
    <td align="left" style="width:82px;"> 
	<table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
            <td align="left"  style="width:60px;line-height:10px;">United Energy <br/> Distribution</td>
            <td align="left"> <img src="images/ticmark.jpg" /> </td>
        </tr>
        </table>
	</td>
    <td align="left" style="width:95px;"> 
	<table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
            <td align="left"  style="width:75px;line-height:10px;">Jemena Electricity <br/> Networks (Vic) Ltd</td>
            <td align="left"> <img src="images/ticmark.jpg" /> </td>
        </tr>
        </table>
	</td>
    <td align="left" style="width:80px;"> 
	<table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
            <td align="left"  style="width:55px;line-height:10px;">City Power Pty</td>
            <td align="left"> <img src="images/ticmark.jpg" /> </td>
        </tr>
        </table>
	</td>
    <td align="left" style="width:100px;"> 
	<table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
            <td align="left"  style="width:75px;line-height:10px;">Powercor <br/> Australia Ltd</td>
            <td align="left"> <img src="images/ticmark.jpg" /> </td>
        </tr>
        </table>
	</td>

  </tr>
  
  
  
  
    <tr>
    <td align="left" style="width:200px;color:#ff4444;"> System Size Limit  </td>
    <td align="left" style="width:82px;"> 
	<table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
            <td align="left"  style="width:60px;">Up to 4.5kW <p style="line-height:6px;color:#ff4444;"> (Per Site)</p> </td>
            <td align="left">   </td>
        </tr>
        </table>
	</td>
    <td align="left" style="width:82px;"> 
	<table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
            <td align="left"  style="width:60px;">Up to 10kW <p style="line-height:6px;color:#ff4444;"> (Per Phase )</p> </td>
            <td align="left">  </td>
        </tr>
        </table>
	</td>
    <td align="left" style="width:95px;"> 
	<table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
            <td align="left"  style="width:75px;">Up to 10kW <p style="line-height:6px;color:#ff4444;"> (Per Phase )</p> </td>
            <td align="left">   </td>
        </tr>
        </table>
	</td>
    <td align="left" style="width:80px;"> 
	<table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
            <td align="left"  style="width:55px;">Up to 10kW <p style="line-height:6px;color:#ff4444;"> (Per Site)</p> </td>
            <td align="left">    </td>
        </tr>
        </table>
	</td>
    <td align="left" style="width:100px;"> 
	<table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
            <td align="left"  style="width:75px;">Up to 10kW <p style="line-height:6px;color:#ff4444;"> (Per Site)</p> </td>
            <td align="left">  </td>
        </tr>
        </table>
	</td>

  </tr>
  
    <tr>
    <td align="left" colspan="6">
		&nbsp;Solar Inverters above the specified size limits will be permitted in certain circumstances. If your solar inventer is greater than above size limits, or for further
information, please <span> contact your Distributor.</span>
	</td>
  </tr>

</table>
<table cellpadding="0" cellspacing="0"  border="0">
  <tr>
    <td> <p style="line-height:6px;color:#ff4444; font-size:10px;"> <b>SECTION 1: INSTALLATION DETAILS (to be completed and signed by installer)</b> </p></td>
  </tr>
</table>


 


<table border="0" cellspacing="0" cellpadding="0" align="center">
	<tr> <td align="left" style="line-height:10px;">&nbsp;</td>    </tr>
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
      <b>  Total Installed Capacity</b>(Total raiting of,<br /> <span>&nbsp;&nbsp;all solar panels)</span> </td>
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
				<p style="line-height:10px">Solar Inverter Power Rating	<br/> (1 hour or continouous raiting)</p>
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
    <td align="left" style="width:40%;"><strong> Solar Inverter Manufacturer</strong></td>
    <td align="left"  style="width:64%;"><table border="0" cellspacing="0" cellpadding="0" width="100%" >
        <tr>
          <td align="left" style="width:30%;"><strong> ZeverSolar</strong></td>
          <td align="left" style="width:40%;border-left:1px solid #d6d6d6;"><strong> Solar Inverter Model Name</strong></td>
          <td align="left" style="width:30%;border-left:1px solid #d6d6d6;"><strong> TL5000-10 </strong></td>
        </tr>
      </table></td>
  </tr>
  
  
    <tr>
    <td align="left" style="width:40%"> <b>Operating Manual Provided to Customer</b> </td>
    <td align="left" style="width:64%;"><table border="0" cellspacing="0" cellpadding="0"  width="100%" >
        <tr>
          <td align="center" style="width:10%;"><img src="images/ticmark.jpg" /> Yes</td>
          <td align="center" style="width:80%;border-left:1px solid #d6d6d6;"> Instructed Customer in Operation of System </td>
          <td align="center" style="width:10%;border-left:1px solid #d6d6d6;"><img src="images/ticmark.jpg" /> Yes</td>
        </tr>
      </table></td>
  </tr>
</table>


<p>By signing this form, you acknowledge amd represent that the information provided  is true and correct. </p>

<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td align="left" width="50%"> 
		<table width="100%" border="0" cellspacing="0" cellpadding="0">
		<tr>
			<td align="left" width="20%"> <strong>Installer Name:</strong> </td>
			<td align="left" width="80%" style="line-height:5px;"> 
			<div  style="border-bottom:1px dotted #000;width:100px;">&nbsp;&nbsp;<b style="line-height:2px;">Brooke Coghlan</b></div> </td>
		</tr>
		</table>
	</td>
    <td align="left" width="50%"> 
		<table width="100%" border="0" cellspacing="0" cellpadding="0">
		<tr>
			<td align="left" width="35%"> <strong>Installer Accredation No*:</strong> </td>
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
			<td align="left" width="25%"> <strong>Installer Signature:</strong> </td>
			<td align="left" width="75%" style="line-height:5px;"> 
			<div  style="border-bottom:1px dotted #000;width:100px;">&nbsp;&nbsp;<b style="line-height:2px;"> </b></div> </td>
		</tr>
		</table>
	</td>
    <td align="left" width="50%"> 
		<table width="100%" border="0" cellspacing="0" cellpadding="0">
		<tr>
			<td align="left" width="10%"> <strong>Date:</strong> </td>
			<td align="left" width="90%" style="line-height:5px;"> 
			<div  style="border-bottom:1px dotted #000;width:100px;">&nbsp;&nbsp;<b style="line-height:2px;">  </b></div> </td>
		</tr>
		</table>
	</td>
  </tr>


</table>



<table cellpadding="0" cellspacing="0"  border="0">
  <tr><td style="line-height:7px;"></td></tr>	
  <tr>
    <td><p style="line-height:6px;color:#ff4444; font-size:10px;"><b>SECTION 2: INSTALLATION COMPLIANCE (to be completed and signed by the Registerd Electrical Contractor )</b></p></td>
  </tr>
  <tr><td style="line-height:7px;"></td></tr>	
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
		  <tr> <td align="left" style="border-bottom:1px solid #d6d6d6;"><p style="line-height:13px;">&nbsp;&nbsp;<strong>Inverter number of <br> &nbsp;Phase</strong></p> </td> </tr>
		  <tr> <td align="left"><p style="line-height:13px;">&nbsp;&nbsp;<strong>Inverter number of <br> &nbsp;Phase</strong></p> </td> </tr>
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
				<br /> <br /> <br /> <strong>Access to Meter<br />Switchboard and Inverter </strong>
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




<p>By signing this form, you asknowledge and represent that: </p>
<table border="0" cellspacing="0" cellpadding="0" width="100%">
  <tr>
    <td align="left" width="49%">
	<table border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td align="left" width="2%">*</td>
          <td align="left" width="80%">The PV (Solar) Generator complies with the Electricity Safety Act 1998 
            (Vic) and associated Safety Regualtions, the Electricity Distribution
            Code, the Victorian Service & Installation Rules, AS/NZS3000 (Wiring
            Rules) and AS4777 (Grid Connection of Energy, Systems via (Inverters)
            and any other relevant Actsm regulations, standards or guidelines; </td>
        </tr>
        <tr>
        <td align="left" width="2%"> *</td>
          <td align="left"  width="80%">The PV (Solar) Generator is connected to a dedicated circuit complete 
            with lockable isloilating switch at the switchboard; </td>
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
                <td align="left"  width="80%">The generator owner has been advised that the PV (Solar) Generator should
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
 



<table border="0" cellspacing="0" cellpadding="0">
<tr>
    <td align="left" style="width:300px;"><table border="0" cellspacing="0" cellpadding="0">
  <tr>
	<td align="left" style="width:60px;"> <strong>REC Name:</strong> </td>
	<td align="left" style="line-height:5px;"> <div  style="border-bottom:1px dotted #000;width:100px;">&nbsp;&nbsp;<b style="line-height:2px;"> Solar On Electrical</b></div> </td>
 </tr>
    </table></td>
    <td align="left" style="width:400px;"> <table border="0" cellspacing="0" cellpadding="0">
  <tr>
	<td align="left" style="width:100px;"> <strong>REC License No*:</strong> </td>
	<td align="left" style="line-height:5px;"> <div  style="border-bottom:1px dotted #000;width:100px;">&nbsp;&nbsp;<b style="line-height:2px;">22896</b></div> </td>
 </tr>
    </table> </td>
</tr>
<tr>
    <td align="left" style="width:300px;"><table border="0" cellspacing="0" cellpadding="0">
  <tr>
	<td align="left" style="width:70px;"> <strong>REC Signature: </strong></td>
	<td align="left" style="line-height:5px;"> <div  style="border-bottom:1px dotted #000;width:100px;">&nbsp;&nbsp;<b style="line-height:2px;"> </b></div> </td>
 </tr>
    </table></td>
    <td align="left" style="width:200px;"> <table border="0" cellspacing="0" cellpadding="0">
  <tr>
	<td align="left" style="width:25px;"><strong> Date:</strong> </td>
	<td align="left" style="line-height:5px;"> <div  style="border-bottom:1px dotted #000;width:100px;">&nbsp;&nbsp;<b style="line-height:2px;"> </b></div> </td>
 </tr>
    </table> </td>
</tr>
</table> 

<table border="0" cellspacing="0" cellpadding="0" align="center">
	<tr> <td align="left" style="line-height:10px;">&nbsp;</td>    </tr>
</table>
 
<table cellpadding="0" cellspacing="0"  border="0">
  <tr>
    <td><p style="line-height:6px;color:#ff4444; font-size:10px;"><strong>SECTION 3: GENERATOR OWNER DETAILS (to be completed and signed by the generator owner) </strong> </p></td>
  </tr>
	<tr> <td align="left" style="line-height:6px;">&nbsp;</td>    </tr>
</table>


 <table border="0" cellspacing="0" cellpadding="0"   class="data-table">
  <tr>
    <td align="left" style="width:305px;"> <strong>Customer Name* </strong></td>
    <td align="left"> 
		<table border="0" cellspacing="0" cellpadding="0" >
		  <tr>
			<td align="left" style="width:90px;"> <strong>Firstname Customer</strong>	</td>
			<td align="left" style="width:150px;border-left:1px solid #d6d6d6;"> <strong>Customer NMI*</strong> <p style="line-height:8px;">(Refer to your electricity bill)</p></td>
			<td align="left" style="width:100px;border-left:1px solid #d6d6d6;">   </td>
		  </tr>
		</table>
	</td>
  </tr>



  <tr>
    <td align="left" style="width:305px;">  <strong>Supply Address*</strong></td>
    <td align="left"> 
		<table border="0" cellspacing="0" cellpadding="0" >
		  <tr>
			<td align="left" style="width:90px;line-height:8px;"> <strong>123 John St <br/> Melbourne  VIC 3000</strong> </td>
			<td align="left" style="width:150px;border-left:1px solid #d6d6d6;"> Mailing Address* </td>
			<td align="left" style="width:90px;line-height:8px;border-left:1px solid #d6d6d6;"> 123 John St <br/> Melbourne  VIC 3000 </td>
		  </tr>
		</table>
	</td>
  </tr>
  
  
  <tr>
    <td align="left" style="width:305px;">  <strong>Phone Number*	</strong>	 </td>
    <td align="left"> 
		<table border="0" cellspacing="0" cellpadding="0" >
		  <tr>
			<td align="left" style="width:150px;">  <strong>Business Hours: 040000000	</strong></td>
			<td align="left" style="width:150px;border-left:1px solid #d6d6d6;"> <strong>After Hours: 50000000</strong></td>
		  </tr>
		</table>
	</td>
  </tr>

   <tr>
    <td align="left" style="width:305px;">  <strong>Email Address*		</strong>	 </td>
    <td align="left"> 
		<a href="mailto:customer@example.com.au">customer@example.com.au</a>
	</td>
  </tr>

 
</table>


<p><strong>CUSTOMER ACKNOWLEDGEMENT, INDEMNITY AND RELEASE</strong> </p>
<p>By signing this form, you acknowledge and represent that you have read understand and agree to comply with the connection obligations,
  and that you: </p>
<p>*are the onwer of the PV (Solar) system listed under the Supply Address in sction 3 above;</p>
<p>*have recieved a Photovoltaic Embedded generator operating manual form, and been instructed on the operation of the Photovotaic Embedded Genarator by, the installation Company 
  detailed in section1; </p>
<p>*accept that approval will only be granted for the Photovoltaic Embedded Generator detailed in this form, and you must obtain further prior approval from your distributor to alter your Photovoltaic Embedded Generator in any way; </p>
<p>*release and indemnify and agree to keep indermnfield your Distributor, its officers, employees and agents against all actions, proceedings, claims and demands whatsoever 
  which may be brought, incluing any indirect or consequential loss or any other form of pure economic loss, made or prosecuted against them or any by any person in resoect 
  of the installation if your Photovoltaic Embedded Generator, particularly in relation to works completed by the installation company detailed in section 1 or the complaince 
  certification provided by the registered electrical contractor in section 2, or in respect of connection of 	your Photovoltaic Embedded Generator to the victorian 
  electricty grid.</p>




<table border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td align="left" style="width:300px;">
    <table border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td align="left" style="width:80px;"> <strong>Customer Name:</strong> </td>
          <td align="left" style="line-height:5px;width:200px;">
          <div  style="border-bottom:1px dotted #000;width:100px;">&nbsp;&nbsp;<b style="line-height:2px;">Firstname Customer</b></div></td>
        </tr>
      </table></td>
    
    
    <td align="left" style="width:200px;"><table border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td align="left" style="width:100px;"> <strong>Customer Signature:</strong> </td>
          <td align="left" style="line-height:5px;"><div  style="border-bottom:1px dotted #000;width:100px;">&nbsp;&nbsp;<b style="line-height:2px;"> </b></div></td>
        </tr>
      </table></td>

    <td align="left" style="width:130px;"><table border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td align="left" style="width:25px;"> <strong>Date:</strong> </td>
          <td align="left" style="line-height:5px;"><div  style="border-bottom:1px dotted #000;width:100px;">&nbsp;&nbsp;<b style="line-height:2px;"> </b></div></td>
        </tr>
      </table></td>

  </tr>
</table>


<p>*PRIVACY STATEMENT: The personal inforamtion you provide in this from will be collected by your Distributor for the purpose of connecting your Photovoltaic Embedded Generator to the Victorian electricity grid. This information will be used and disclosed by your Distribution in accordance with its privacy processes.You can find more information on your Distributor’s privacy 
policy processes on their website.
</p>


<p style="text-align:right;">V1.0 21/5/2010</p>



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
