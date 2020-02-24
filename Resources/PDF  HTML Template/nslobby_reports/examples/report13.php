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
p{
	line-height:11px;
}
</style>


<table border="0" cellspacing="0" cellpadding="0" width="100%">
	<tr>
		<td align="left" width="50%"> <a href="#"><img src="images/company-logo.png" width="324" height="87"  /></a> </td>
		<td align="right" width="50%"> 0431 158 662<br/>4/147 Hotham St <br/>Collingwood VIC 3066 <br/> <a href="mailto:martin@newkirksolar.com.au" style="color:#000;text-decoration:none;"> martin@newkirksolar.com.au </a> 
        <br/> ABN: 80023118982 </td>
	</tr>
</table>

<table border="0" cellspacing="0" cellpadding="0" width="100%">
    <tr><td style="line-height:16px;"></td></tr>
</table>



<table border="0" cellspacing="0" cellpadding="0" width="100%">
    <tr><td style="line-height:16px;">
	<strong style="font-size:10px;">Solar PV System Manual</strong><br />
	For installation at:	123 John St, Melbourne VIC 3000<br />
	<strong style="font-size:10px;color:red;">WARNING</strong><br />
There are significant hazards that relate to solar PV systems, they include the risk of:<br />
<span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  .Electric shock due to voltage greater than 120V DC; and</span><br />
<span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  .Falling from the roof when performing maintenance. </span> 
<p>We advise that no person other than a suitably licensed electrical worker should perform any type of maintenance on a solar PV system. When standing on a roof there is always the risk of falling. No person should be at heights above 2 meters without following correct OH&S procedures. </p>
<p> <strong style="font-size:10px;">Function and operation of solar system</strong><br/>Your solar array (group of solar panels) produces electricity from light. This electricity is produced in the form of direct current (DC), which cannot be used in your house. DC electricity runs from your array to your inverter, where it is converted into alternating current (AC) electricity. The AC electricity then runs into your switchboard, and whatever power is needed to operate lights and appliances goes into your house. Any excess that you do not need in your house runs back into the electricity grid so your neighbours can use the excess power you produced. You get paid for the electricity that runs back to the grid. When you are not producing enough solar electricity to operate your lights and appliances, you will draw electricity from the grid and you will be charged for what you use. </p>

<p>Your inverter will tell you how much electricity your system is producing at any given time. Please contact us if you need help making sense of the readings. We have provided details of your expected system output based on the time of year below.</p>

<p>
<strong>Shutdown and isolation procedure for emergency and maintenance</strong><br />
1 - Turn off the inverter AC switch, labelled “Solar AC Main Switch”, located in the switch board, and if your inverter is more than 2 meters from your switchboard there will be a separate one next to the inverter.
</p>

<p>
2 - <strong>Turn off solar DC isolator</strong>, labelled “PV Array Main Switch”, located next to the inverter.<br />
Following these instructions will isolate your the solar array, reverse the procedure to switch it back on.<br />
NOTE: A shutdown procedure label should be visible close to your inverter.
</p>


<p><strong>Actions in case of system failure</strong><br />
The inverter displays LED lights and/or screen displays to help monitor the normal operation and fault conditions of the system. The occurrence of a problem within the system will usually be indicated by the inverter. The inverter user manual contains a trouble shooting chapter which will explain these lights and displays.<br />
NOTE: In the event of a mains grid supply failure your inverter will turn off automatically. This occurs to prevent workers working on the grid from getting a shock from your systems output. </p>


<p><strong>Maintenance of your system</strong><br />
Solar PV systems generally require little maintenance. It is advisable to have your solar panels cleaned on a yearly basis (more often if they are located where dirt and grime build up quickly) as dirt and grime can reduce the output of your solar system. Rainfall and spraying with a hose will generally keep dirt off panels, however if they do become excessively soiled they can be cleaned with cold water, do not use detergents or solvents. We strongly advise against climbing on a roof, this should be done by a qualified professional. <br />
It is also important to check on a regular basis that your system is running as it should be, and that your inverter is operating and not showing a fault during sunny periods. Shading does effect system performance, plant and tree growth that causes shade should be cut back. <br />
Do not attempt to service the system unless you are fully qualified to do so. You must be an electrician to touch any electrical connections. </p>


	</td></tr>
</table>

<table border="0" cellspacing="0" cellpadding="0" width="100%">
    <tr><td style="line-height:18px;"></td></tr>
</table>

<table border="0" cellspacing="0" cellpadding="0" width="100%">
    <tr><td style="line-height:18px;"><strong>System components and ratings</strong></td></tr>
</table>



<table border="0" cellspacing="0" cellpadding="0"   class="data-table">
  <tr>
    <td align="left" width="25%"><strong> Panels</strong></td>
    <td align="left" width="25%"> 20 x TDG 250W</td>
    <td align="left" width="25%"><strong> DC wiring</strong></td>
    <td align="left" width="25%"> Panel array to inverter</td>
  </tr>
  <tr>
    <td align="left" width="25%"><strong> Max array output (W)</strong></td>
    <td align="left" width="25%"> 5000</td>
    <td align="left" width="25%"><strong> DC isolators</strong></td>
    <td align="left" width="25%"> At array and inverter</td>
  </tr>
  <tr>
    <td align="left" width="25%"><strong> Panel model</strong></td>
    <td align="left" width="25%"> T250P606</td>
    <td align="left" width="25%"><strong> DC iso. brand</strong></td>
    <td align="left" width="25%"> IPD TFV5022</td>
  </tr>
  <tr>
    <td align="left" width="25%"><strong> Inverter brand</strong></td>
    <td align="left" width="25%"> ZeverSolar</td>
    <td align="left" width="25%"><strong> DC iso. rating</strong></td>
    <td align="left" width="25%"> 40A DC at 1000V</td>
  </tr>
  <tr>
    <td align="left" width="25%"><strong> Inverter model</strong></td>
    <td align="left" width="25%"> TL5000-10</td>
    <td align="left" width="25%"><strong> AC wiring</strong></td>
    <td align="left" width="25%"> Inverter to switch board</td>
  </tr>
  <tr>
    <td align="left" width="25%"><strong> Max DC power (W)</strong></td>
    <td align="left" width="25%"> 5300</td>
    <td align="left" width="25%"><strong> AC switches</strong></td>
    <td align="left" width="25%"> In switch brd and next to inverter</td>
  </tr>
  <tr>
    <td align="left" width="25%"><strong> Max AC power (VA)</strong></td>
    <td align="left" width="25%"> 5000</td>
    <td align="left" width="25%"><strong> AC iso. brand</strong></td>
    <td align="left" width="25%"> IPD IPW351</td>
  </tr>
  <tr>
    <td align="left" width="25%"><strong> Mounting</strong></td>
    <td align="left" width="25%"> Chiko</td>
    <td align="left" width="25%"><strong> AC iso. rating</strong></td>
    <td align="left" width="25%"> 35A</td>
  </tr>
</table>

 

<table border="0" cellspacing="0" cellpadding="0" width="100%">
    <tr><td style="line-height:13px;"></td></tr>
</table>


 
<table border="0" cellspacing="0" cellpadding="0">
  <tr  class="data-table-head">
    <td align="left" style="width:65px;"> <strong></strong></td>
    <td align="left" style="width:65px;"><strong>  </strong></td>
    <td align="left" style="width:65px;"><strong>  &nbsp;</strong></td>
    <td align="left" style="width:150px;"><strong style="font-size:12px;"> Warranties &nbsp;</strong></td>
    <td align="left" style="width:100px;"><strong>  &nbsp;</strong></td>
  </tr>
</table>


<table border="0" cellspacing="0" cellpadding="0"   class="data-table">
  <tr  class="data-table-head">
    <td align="left" class="qty" bgcolor="#ebebeb" style="width:65px;"> <strong>Component</strong></td>
    <td align="left" bgcolor="#ebebeb" style="width:65px;"><strong> Cover for</strong></td>
    <td align="left" bgcolor="#ebebeb" style="width:65px;"><strong> Length &nbsp;</strong></td>
    <td align="left" bgcolor="#ebebeb" style="width:150px;"><strong> Contact &nbsp;</strong></td>
    <td align="left" bgcolor="#ebebeb"  style="width:100px;"><strong> Phone &nbsp;</strong></td>
  </tr>
  <tr>
    <td align="left" class="qty" style="width:65px;"> Panels </td>
    <td align="left" style="width:65px;"> Workmanship<br/><span> Performance</span> </td>
    <td align="left" style="width:65px;"> 10 years <br/><span> 25 years</span> </td>
    <td align="left" style="width:150px;"> Trina Solar Australia</td>
    <td align="left" style="width:100px;"> 02 8667 3088</td>
  </tr>
  <tr>
    <td align="left" class="qty" style="width:65px;"> Inverter </td>
    <td align="left" style="width:65px;"> Standard<br/><span> Upgradable to</span> </td>
    <td align="left" style="width:65px;"> 5 years <br/><span> 20 years</span> </td>
    <td align="left" style="width:150px;"> ZeverSolar</td>
    <td align="left" style="width:100px;"> 1800 762 287 </td>
  </tr>
  <tr>
    <td align="left" class="qty" style="width:65px;"> Installation </td>
    <td align="left" style="width:65px;"> Workmanship<br/><span>  </span> </td>
    <td align="left" style="width:65px;"> 1 years </td>
    <td align="left" style="width:150px;"> Solar On Electrical </td>
    <td align="left" style="width:100px;"> 0408258298</td>
  </tr>
</table>


EOD;

// Print text using writeHTMLCell()
$pdf->writeHTMLCell(0, 0, '', '', $html, 0, 1, 0, true, '', true);

//page 2


 


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
p{
	line-height:11px;
}
</style>
<table border="0" cellspacing="0" cellpadding="0" width="100%">
	<tr>
		<td align="left"> <a href="#"><img src="images/graphchart-one.jpg"  /></a> </td>
	</tr>
	<tr>
			<td align="left">
			<p>*This is an estimate based on manufacturer specifications and average climate data, output is not guaranteed.
Crystalline solar panel output decreases by approximately 0.5% per year. </p>
		<p><br><strong>Derating factors of your system</strong><br />
There are some factors that can decrease the output of your solar system that you should be aware of. These include the losses in transporting the electricity through wiring, the direction your panels are facing, the position of the sun, the efficiency of the panels and inverter, soiling of the panels, and also heat has a negative impact on the efficiency of the panels. These factors have all been accounted for when determining your system output, though they do vary significantly. </p>
		</td>

	</tr>
	<tr>
		<td align="center" style="line-height:18px;"></td>
	</tr>
	<tr>
		<td align="center" ><strong style="line-height:18px;font-size:13px;">Equipment location diagram</strong></td>
	</tr>
</table> 



<p style="font-size:10px;"><strong>Additional documentation to provide in accordance with AS/NZS5033 (2012):</strong></p>
<table cellpadding="0" cellspacing="0" width="100%">
  <tr>
    <td align="left" width="2%"><img src="images/tickmar-one.jpg"  /></td>
    <td align="left" width="98%"> Component serial numbers </td>
  </tr>
  <tr>
    <td align="left" width="2%"><img src="images/tickmar-one.jpg"   /></td>
    <td align="left" width="98%"> System connection diagram (circuit diagram) </td>
  </tr>
  <tr>
    <td align="left" width="2%"><img src="images/tickmar-one.jpg" /></td>
    <td align="left" width="98%"> The array frame engineering certificate for wind and mechanical loading </td>
  </tr>
  <tr>
    <td align="left" width="2%"><img src="images/tickmar-one.jpg"  /></td>
    <td align="left" width="98%"> Equipment manufacturers documentation (data sheets, handbooks, etc.) </td>
  </tr>
  <tr>
    <td align="left" width="2%"><img src="images/tickmar-one.jpg"   /></td>
    <td align="left" width="98%"> Commissioning records, installation checklist and declaration of compliance for wind and mechanical loading </td>
  </tr>
</table>


 
EOD;
//end of page 2
$pdf->writeHTMLCell(0, 0, '', '', $html, 0, 1, 0, true, '', true);



// Close and output PDF document
// This method has several options, check the source code documentation for more information.
$pdf->Output('example_001.pdf', 'I');

//============================================================+
// END OF FILE
//============================================================+
