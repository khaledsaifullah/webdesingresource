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
	width:96%;
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

.data-table-inner,.data-table-inner td{
	border:none;
}
</style>


 
<table border="0" cellspacing="0" cellpadding="0" width="100%">
  <tr>
    <td align="left" width="15%"><a href="#"><img src="images/citipower.jpg" /></a></td>
    <td align="left" width="15%"><a href="#"><img src="images/powercore.jpg" /></a></td>
	<td align="left"  width="70%"  style="line-height:25px;font-size:20px;"> Pre-Approval of Small Inverter <br/> 
	<span style="font-size:20px;"> Connection Form</span> </td>
  </tr>
</table>



<table border="0" cellspacing="0" cellpadding="0" width="100%"  class="data-table">
	<tr>
    	<td align="center"><b>Applicable</b></td>
    	<td align="center"><b>Submit Application to Powercor New Connections:</b></td>
    </tr>
	<tr>
    	<td align="center"><b style="color:#0a7ac7;line-height:10px;">This form is to be used for all proposed inverters up to 30kw<br> in capacity per site</b></td>
    	<td align="center"  bgcolor="#ccffcc" >
            <table border="0" cellspacing="0" cellpadding="0"><tr><td align="left"  style="line-height:8px;"> </td></tr></table>
			<table border="0" cellspacing="0" cellpadding="0" width="95%"  class="data-table-inner">
        	<tr><td align="left" width="10%" style="line-height:10px;">Mail :</td> <td  width="90%" align="left" style="line-height:10px;">PO Box 185,Geelong Vic 3220</td></tr>
        	<tr><td align="left" width="10%"  style="line-height:10px;">Email :</td> <td  width="90%" align="left"  style="line-height:10px;">egpreapproval@powercor.com.au</td></tr>
        	<tr><td align="left" width="10%" style="line-height:10px;">Fax :</td> <td  width="90%" align="left" style="line-height:10px;">96835132</td></tr>
            </table>
            <table border="0" cellspacing="0" cellpadding="0"><tr><td align="left"  style="line-height:8px;"> </td></tr></table>
        </td>
    </tr>
</table>
 
 
 

<table border="0" cellspacing="0" cellpadding="0" align="center">
	<tr> <td align="left" style="line-height:20px;">&nbsp;</td>    </tr>
</table>

<p style="line-height:2px;color:#0a7ac7; font-size:10px;">SECTION 1: PROPOSED GENERATOR INSTALLATION DETAILS</p>
<table border="0" cellspacing="0" cellpadding="0"   class="data-table">
    <tr>
    <td align="left" style="width:40%;line-height:10px;"><br/>
      <br/>
      <b>  Inverter Power Rating</b> <br /> <span>&nbsp;&nbsp;(1 hour or continuous rating)</span> </td>
    <td align="left" style="width:64%;"><table border="0" cellspacing="0" cellpadding="0"  width="100%" >
        <tr>
          <td align="center" style="width:33%;line-height:30px;">
				<table width="100%" border="0" cellspacing="0" cellpadding="0" align="center">
				  <tr>
					<td align="left" width="5%"></td>
					<td align="center" width="20%"> </td>
					<td align="left" width="30%"><p style="border-bottom:1px solid #000;line-height:20px;">  </p></td>
					<td align="left" width="10%">KW</td>
				  </tr>
				</table>
		  </td>
          <td align="center" style="width:33%;line-height:30px;border-left:1px solid #d6d6d6;"> </td>
          <td align="center" style="width:33%;line-height:30px;border-left:1px solid #d6d6d6;">  </td>
        </tr>
      </table></td>
  </tr>
  <tr>
    <td align="left" style="width:40%;line-height:10px;"><br/>
      <br/>
      <b> Proposed Inverter Capacity Per Phase </b> <br/>
      <span> (mark N/A for phases not available)</span> </td>
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
</table>
<table border="0" cellspacing="0" cellpadding="0" align="center">
	<tr> <td align="left" style="line-height:20px;">&nbsp;</td>    </tr>
</table>

<p style="line-height:2px;color:#0a7ac7; font-size:10px;">SECTION 2: CUSTOMER INSTALLATION CONFIGURATION</p>
<table border="0" cellspacing="0" cellpadding="0" width="100%"  class="data-table">
<tr>
	<td align="center" style="line-height:50px;">Customer Connection Number of Phases</td>
	<td align="center">
        <table border="0" cellspacing="0" cellpadding="0"><tr><td align="left"  style="line-height:2px;"> </td></tr></table>
        <table border="0" cellspacing="0" cellpadding="0" width="95%"  class="data-table-inner">
            <tr>
            	<td align="left"  width="50%"><img src="images/ticmark.jpg" /> Single phase 230V </td> 
            	<td align="left"  width="50%"><img src="images/ticmark.jpg" /> Three phase 400v </td> 
            </tr>
            <tr>
            	<td align="left"  width="50%"><img src="images/ticmark.jpg" /> Two phase 230/400v </td> 
            	<td align="left"  width="50%"><img src="images/ticmark.jpg" /> Two phase 230V/460v </td> 
            </tr>
        </table>
        <table border="0" cellspacing="0" cellpadding="0"><tr><td align="left"  style="line-height:2px;"> </td></tr></table>
    </td>
</tr>
</table>

<table border="0" cellspacing="0" cellpadding="0" align="center">
	<tr> <td align="left" style="line-height:20px;">&nbsp;</td>    </tr>
</table>
<p style="line-height:2px;color:#0a7ac7; font-size:10px;">SECTION 3: PROPOSED INSTALLER DETAILS(if known)</p>


<table border="0" cellspacing="0" cellpadding="0" width="100%"  class="data-table">
	<tr>
    	<td align="left" width="20%"> Installer Company Name</td>
    	<td align="left" width="80%"> 
			<table border="0" cellspacing="0" cellpadding="0" width="100%">
            	<tr>
                	<td align="left"  width="50%"><strong>Solar On Electrical</strong></td>
                	<td align="left"  width="50%">
                        <table border="0" cellspacing="0" cellpadding="0" width="100%">
                        	<tr>
                            	<td align="left"  width="50%" style="border-left:1px solid #d6d6d6;border-bottom:1px solid #d6d6d6;"> Installer Phone Number</td>
                            	<td align="left"  width="50%"  style="border-left:1px solid #d6d6d6;border-bottom:1px solid #d6d6d6;"> 0408258298</td>
                            </tr>
                        	<tr>
                            	<td align="left"  width="50%" style="border-left:1px solid #d6d6d6;"> Accreditation No  </td>
                            	<td align="left"  width="50%"  style="border-left:1px solid #d6d6d6;"> A7493265 </td>
                            </tr>
                        </table>
                    </td>
                </tr>	
			</table>        	
        </td>
    </tr>
	<tr>
    	<td align="left" width="20%"> Installer Mailing Address</td>
    	<td align="left" width="80%"> <strong>229 Farley Rd,Torrumbarry VIC 3562</strong> </td>
    </tr>
	<tr>
    	<td align="left" width="20%"> Email address</td>
    	<td align="left" width="80%"> <strong> brook@solaroneelectrical.com.au</strong> </td>
    </tr>
</table>
<table border="0" cellspacing="0" cellpadding="0" align="center">
	<tr> <td align="left" style="line-height:20px;">&nbsp;</td>    </tr>
</table>
<p style="line-height:2px;color:#0a7ac7; font-size:10px;">SECTION 4: GENERATOR OWNER DETAILS  </p>

<table border="0" cellspacing="0" cellpadding="0" width="100%"  class="data-table">
	<tr>
    	<td align="left" width="20%"> Customer Name*</td>
    	<td align="left" width="80%"> 
			<table border="0" cellspacing="0" cellpadding="0" width="100%">
            	<tr>
                	<td align="left"  width="40%"><strong>Firstname Customer </strong></td>
                	<td align="left"  width="60%">
                        <table border="0" cellspacing="0" cellpadding="0" width="100%">
                        	<tr>
                            	<td align="left"  width="50%" style="border-left:1px solid #d6d6d6;border-bottom:1px solid #d6d6d6;line-height:10px;"> 
									<strong>Customer NMI*</strong><br> <span style="font-size:7px;"> (Refer to your electricity bill)</span>
								</td>
                            	<td align="left"  width="50%"  style="border-left:1px solid #d6d6d6;border-bottom:1px solid #d6d6d6;"> 4201 last 6 digits</td>
                            </tr>
                        </table>
                    </td>
                </tr>	
			</table>        	
        </td>
    </tr>


	<tr>
    	<td align="left" width="20%"> Supply Address*</td>
    	<td align="left" width="80%"> 
			<table border="0" cellspacing="0" cellpadding="0" width="100%">
            	<tr>
                	<td align="left"  width="40%"><strong style="line-height:12px;"> 123 John St<br> Melbourne VIC 3000 </strong></td>
                	<td align="left"  width="60%">
                        <table border="0" cellspacing="0" cellpadding="0" width="100%">
                        	<tr>
                            	<td align="left"  width="50%" style="border-left:1px solid #d6d6d6;border-bottom:1px solid #d6d6d6;line-height:10px;"> 
									<strong style="line-height:30px;">Mailing Address</strong>  
								</td>
                            	<td align="left"  width="50%"  style="border-left:1px solid #d6d6d6;border-bottom:1px solid #d6d6d6;"><strong style="line-height:12px;"> 123 John St<br> Melbourne VIC 3000 </strong> </td>
                            </tr>
                        </table>
                    </td>
                </tr>	
			</table>        	
        </td>
    </tr>



	<tr>
    	<td align="left" width="20%"> Email address</td>
    	<td align="left" width="80%"> 
			<table border="0" cellspacing="0" cellpadding="0" width="100%">
				<tr>
					<td align="left"  width="41%"> <u style="color:#0007ac;font-weight:bold;font-size:10px;">customer@example.com.au</u> </td>
					<td align="left"  width="59%">  </td>
				</tr>
			</table>
		</td>
    </tr>


	<tr>
    	<td align="left" width="20%"> Phone Number</td>
    	<td align="left" width="80%"> 
			<table border="0" cellspacing="0" cellpadding="0" width="100%">
				<tr>
					<td align="left"  width="41%"> Business Houres:<strong>040000000</strong></td>
					<td align="left"  width="59%"  style="border-left:1px solid #d6d6d6;"> After Hours: <strong>5000000</strong></td>
				</tr>
			</table>
		</td>
    </tr>


	<tr>
    	<td align="left" width="20%"> Existing Meter Number*</td>
    	<td align="left" width="80%"> 
			<table border="0" cellspacing="0" cellpadding="0" width="100%">
				<tr>
					<td align="left"  width="41%"> <strong>1234</strong> </td>
					<td align="left"  width="59%"  style="border-left:1px solid #d6d6d6;">  </td>
				</tr>
			</table>
		</td>
    </tr>


</table>


<table border="0" cellspacing="0" cellpadding="0" align="center">
	<tr> <td align="left" style="line-height:10px;">&nbsp;</td>    </tr>
</table>

<table border="0" cellspacing="0" cellpadding="0" width="100%">
  <tr>
    <td align="left"  width="15%"><strong>Applicant Name:*</strong></td>
    <td align="left"  width="60%"><div  style="border-bottom:1px dotted #000;">&nbsp;&nbsp;<b style="line-height:2px;"> </b></div></td>
    <td align="left"  width="25%"> (Response will be returned to applicant) </td>
  </tr>
</table>
<table border="0" cellspacing="0" cellpadding="0" width="100%">
  <tr>
    <td align="left"  width="15%"><strong>Applicant Signature:*</strong></td>
    <td align="left"  width="40%"><p  style="border-bottom:1px dotted #000;">&nbsp;&nbsp;<b style="line-height:2px;"> </b></p></td>
    <td align="left"  width="5%"><strong>Date:*</strong></td>
    <td align="left"  width="40%"><p  style="border-bottom:1px dotted #000;text-align:center;font-size:13px;">06/09/15</p></td>
  </tr>
</table>
<p>PRIVACY STATEMENT: The personal information you provide in this form will be collected by CityPowercore for the purpose of assessing pre approval for connection of  your proposed Embedded Generator to the electricity grid. This information will be used and described by   CityPowercore in accordance with its privacy policy . You can find more information on the privacy policy on our website.</p>
<table border="0" cellspacing="0" cellpadding="0" align="center">
	<tr> <td align="left" style="line-height:20px;">&nbsp;</td>    </tr>
</table>
<p style="line-height:2px;color:#0a7ac7; font-size:10px;">SECTION 5: CITIPOWER/POWERCOR PRE APPROVAL ASSESMENT  </p>
<p>The assessment only considers the impact of the site of the inverter and the amount of electricity  exported to the grid. It does not consider the wiring of  your premise as to its suitability for the proposed PV system, or the configuration of panels used in the PV system. The Pre Approval only applies to the capacity of the inverter that can be connected to the grid. Any inverter installed must be on the Clean Energy Council Approved Grid-Connected Inverters list.  </p>


<table border="0" cellspacing="0" cellpadding="0" align="center">
	<tr> <td align="left" style="line-height:150px;">&nbsp;</td>    </tr>
</table>


<table border="0" cellspacing="0" cellpadding="0"   class="data-table">
   <tr>
    <td align="left" style="width:40%;line-height:10px;"><br/><br/> <b> Approved inverter </b> </td>
    <td align="left" style="width:64%;"><table border="0" cellspacing="0" cellpadding="0"  width="100%" >
        <tr>
		  <td align="center" style="width:33%;line-height:20px;">
				<table width="100%" border="0" cellspacing="0" cellpadding="0" align="center">
				  <tr> <td align="left" colspan="3">   &nbsp;&nbsp;&nbsp;&nbsp;<img src="images/ticmark.jpg" /> &nbsp; As Applied For</td></tr>
				  <tr>
					<td align="left" style="width:20px;"></td>
					<td align="left" style="width:70px;"><p style="border-bottom:1px solid #000;line-height:20px;">  </p></td>
					<td align="left" style="width:50px;">kW</td>
				  </tr>
				</table>
		  </td>
          
		  <td align="center" style="width:33%;line-height:20px;border-left:1px solid #d6d6d6;">
				<table width="100%" border="0" cellspacing="0" cellpadding="0" align="center">
				  <tr> <td align="left" colspan="3">   &nbsp;&nbsp;&nbsp;&nbsp;<img src="images/ticmark.jpg" /> &nbsp; Reduced Capacity </td></tr>
				  <tr>
					<td align="left" style="width:20px;"></td>
					<td align="left" style="width:70px;"><p style="border-bottom:1px solid #000;line-height:20px;">  </p></td>
					<td align="left" style="width:50px;">kW</td>
				  </tr>
				</table>
		  </td>
		  
		  <td align="center" style="width:33%;line-height:20px;border-left:1px solid #d6d6d6;">
				<table width="100%" border="0" cellspacing="0" cellpadding="0" align="center">
				  <tr> <td align="left" colspan="3">   &nbsp;&nbsp;&nbsp;&nbsp;<img src="images/ticmark.jpg" /> &nbsp; Further Assesment </td></tr>
				  <tr>
					<td align="left" style="width:20px;"></td>
					<td align="left" style="width:20px;"></td>
					<td align="left" style="width:100px;">Require</td>
				  </tr>
				</table>
		  </td>
		  
		  

          
        </tr>
      </table></td>
  </tr>
   
   <tr>
    <td align="left" style="width:40%;line-height:10px;"><br/>
      <br/>
      <b> Approved Capacity Per Phase </b> <br/>
      <span> (mark N/A for phases not available)</span> </td>
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
    <td align="left" style="width:40%;line-height:10px;"> 
				<table width="100%" border="0" cellspacing="0" cellpadding="0" align="center">
				  <tr>
					<td align="left" width="15%"> <strong>Signed</strong>:</td>
					<td align="left" width="40%"><p style="border-bottom:1px solid #000;line-height:20px;">  </p></td>
                    <td align="left" width="45%"></td>
 				  </tr>
				</table>
    </td>
    <td align="left" style="width:64%;"><table border="0" cellspacing="0" cellpadding="0"  width="100%" >
        <tr>
          <td align="center" style="width:33%;line-height:30px;">
				<table width="100%" border="0" cellspacing="0" cellpadding="0" align="center">
				  <tr>
					<td align="left" width="35%"> <strong>Date</strong>:</td>
					<td align="left" width="40%"><p style="border-bottom:1px solid #000;line-height:20px;">  </p></td>
					<td align="left" width="25%"> </td>
				  </tr>
				</table>
		  </td>
           <td align="left" style="width:100%;line-height:10px;border-left:1px solid #d6d6d6;">
				 <strong>Approval is valid for 90 days from this date . If not <br> installed within 90 days re approval is require</strong>
 		  </td>
        </tr>
      </table></td>
  </tr>
   
</table>

<p> Office use</p> 
<table border="0" cellspacing="0" cellpadding="0"  width="100%" style="border:1px solid #d6d6d6;">
	<tr>
    	<td width="80%">
			<table border="0" cellspacing="0" cellpadding="0"  width="100%">
            	<tr>
                	<td align="left" width="33.3%" style="border-bottom:1px solid #d6d6d6;">
                    	 <strong>Substation Name</strong>
                    </td>
                	<td align="left" width="33.3%" style="border-bottom:1px solid #d6d6d6;border-left:1px solid #d6d6d6;">
                    	 <table border="0" cellspacing="0" cellpadding="0"  width="100%">
                         	<tr> <td colspan="5" style="line-height:4px;"></td> </tr>
                            <tr>
                                <td align="left" style="width:12px;"><img src="images/ticmark.jpg" /> </td>
                                <td align="left" style="width:20px;">1e </td>
                                <td align="left" style="width:12px;"><img src="images/ticmark.jpg" /> </td>
                                <td align="left" style="width:15px;">3e</td>
                                <td align="left" style="width:12px;"><img src="images/ticmark.jpg" /> </td>
                                <td align="left" style="width:25px;">SWER</td>
                            </tr>
                            <tr>
                                <td align="left" style="width:70px;">   </td>
								<td align="left" style="width:60px;"><p style="border-bottom:1px solid #000;line-height:10px;">   </p></td>
                                <td align="left" style="width:20px;">kVA </td>
                                <td colspan="3" ></td>
                            </tr>
                         </table>
                    </td>
                	<td align="left" width="33.3%" style="border-bottom:1px solid #d6d6d6;border-left:1px solid #d6d6d6;">
                    	 <table border="0" cellspacing="0" cellpadding="0"  width="100%">
                         	<tr> <td colspan="5" style="line-height:4px;"></td> </tr>
                            <tr>
                                <td align="left" style="width:60px;">Connected PV</td>
								<td align="left" style="width:60px;"><p style="border-bottom:1px solid #000;line-height:10px;">   </p></td>
                                <td align="left" style="width:20px;">kw </td>
                            </tr>
                            <tr>
                                <td align="left" style="width:70px;"> % of tx rating </td>
								<td align="left" style="width:60px;"><p style="border-bottom:1px solid #000;line-height:10px;">   </p></td>
                                <td align="left" style="width:20px;"> % </td>
                            </tr>
                         </table>
                    </td>
                </tr>
            	<tr>
                	<td align="left" width="33.3%" style="border-bottom:1px solid #d6d6d6;">
                    	 <table border="0" cellspacing="0" cellpadding="0"  width="100%">
                         	<tr> <td colspan="3" style="line-height:4px;"></td> </tr>
                         	<tr>
                            <td align="left" width="40%"><strong>Date received</strong></td>
                            <td align="left" width="50%"><p style="border-bottom:1px solid #000;line-height:10px;">   </p></td>
                            <td align="left" width="10%"></td>
                            </tr>
                         </table>
                    </td>
                	<td align="left" width="33.3%" style="border-bottom:1px solid #d6d6d6;border-left:1px solid #d6d6d6;">
                    	 <table border="0" cellspacing="0" cellpadding="0"  width="100%">
                         	<tr> <td colspan="5" style="line-height:4px;"></td> </tr>
                            <tr>
                            	<td align="left" style="width:45px;">Referred </td>
                                <td align="left" style="width:12px;"><img src="images/ticmark.jpg" /> </td>
                                <td align="left" style="width:20px;">Yes </td>
                                <td align="left" style="width:12px;"><img src="images/ticmark.jpg" /> </td>
                                <td align="left" style="width:15px;">No</td>
                            </tr>
                         </table>
                    </td>
                	<td align="left" width="33.3%" style="border-bottom:1px solid #d6d6d6;border-left:1px solid #d6d6d6;">
                    	 <table border="0" cellspacing="0" cellpadding="0"  width="100%">
                         	<tr> <td colspan="5" style="line-height:4px;"></td> </tr>
                            <tr>
                            	<td align="left" style="width:70px;">CISOV Updated </td>
                                <td align="left" style="width:12px;"><img src="images/ticmark.jpg" /> </td>
                                <td align="left" style="width:20px;">Yes </td>
                            </tr>
                         </table>
                    </td>
                </tr>
            </table>
        </td>
         
    	<td width="20%"  style="border-left:1px solid #d6d6d6;">
                 <table border="0" cellspacing="0" cellpadding="0"  width="100%">
                     <tr> <td colspan="2" align="left" style="line-height:4px;"> </td> </tr>
                     <tr> <td colspan="2" align="left"> <strong>Response by</strong> </td> </tr>
                     <tr>
                        <td align="left" style="width:12px;"><img src="images/ticmark.jpg" /> </td>
                        <td align="left" style="width:50px;"> Post </td>
                    </tr>
                     <tr>
                        <td align="left" style="width:12px;"><img src="images/ticmark.jpg" /> </td>
                        <td align="left" style="width:50px;"> Email </td>
                    </tr>
                     <tr>
                        <td align="left" style="width:12px;"><img src="images/ticmark.jpg" /> </td>
                        <td align="left" style="width:50px;"> Fax </td>
                    </tr>
                 </table>
        </td>
    </tr>
</table>
<p style="text-align:right;"> v3 27/05/2013</p>















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
