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

</style>
<table border="0" cellspacing="0" cellpadding="0" align="center">
	<tr>
    	<td valign="top" width="50%"  align="left" style="line-height:10px;"><strong style="font-size:12px;">ELECTRICAL WORK REQUEST(EWR)</strong><br />
            <span  style="line-height:5px;">(Submit to responsible Retailer or Distribution Company)</span>
        </td>
    	<td valign="top" width="50%"  align="right"  style="line-height:10px;">
			<table cellpadding="0" cellspacing="0" border="0">
			  <tr>
				<td style="widht:40px;line-height:8px;color:#000;"><strong>TO:</strong></td>
				<td style="widht:40px;line-height:8px;color:#000;">
				<table cellpadding="0" cellspacing="0" border="0">
					<tr>
					  <td><p style="border-bottom:1px dotted  #000;line-height:7px;width:100px;color:#000;">&nbsp;&nbsp;<b> </b></p></td>
					</tr>
					<tr>
					  <td style="font-size:7px; line-height:8px;text-align:center;">(Retailer/Distribution company)</td>
					</tr>
				  </table></td>
			  </tr>
			</table>


        </td>
    </tr>
</table>

<table border="0" cellspacing="0" cellpadding="0" align="center" style="border:0.5px solid #ccc;width:100%;">
    <tr> <td colspan="2"><p style="line-height:8px;color:#fff;"></p></td> </tr>
	
	<tr>
	<td>
	 
		<table border="0" cellspacing="0" cellpadding="0" align="center" style="width:98.3%;text-align:center;">
			<tr>
				<td valign="top" width="100"  align="left" style="line-height:14px;"><strong>WORK<br/>SITE<br/>ADDRESS</strong> </td>
				<td valign="top" align="left"  style="line-height:8px;">
				<table cellpadding="0" cellspacing="0" border="0" style="width:500px;">
  <tr>
    <td><table cellpadding="0" cellspacing="0" border="0" width="390">
        <tr>
          <td style="width:50px;line-height:7px;">CUSTOMER:</td>
          <td><p style="border-bottom:1px dotted  #000;line-height:7px;width:100px;color:#000;">&nbsp;&nbsp;<b>Firstname Customer</b></p></td>
        </tr>
      </table></td>
    <td>
      <table cellpadding="0" cellspacing="0" border="0" width="400">
        <tr>
          <td style="width:50px;line-height:7px;">PHONE NO:</td>
          <td><p style="border-bottom:1px dotted  #000;line-height:7px;width:100px;">&nbsp;&nbsp;<b>040000000</b></p></td>
        </tr>
      </table></td>
  </tr>
  
  
  <tr>
    <td><table cellpadding="0" cellspacing="0" border="0" width="330">
        <tr>
          <td style="width:85px;line-height:7px;">STREET NAME & NO:</td>
          <td><p style="border-bottom:1px dotted  #000;line-height:7px;width:100px;color:#000;">&nbsp;&nbsp;<b>123 John St</b></p></td>
        </tr>
      </table></td>
    <td>&nbsp;
      <table cellpadding="0" cellspacing="0" border="0" width="420">
        <tr>
          <td style="width:40px;">LOT No:</td>
          <td><p style="border-bottom:1px dotted  #000;line-height:7px;width:100px;">&nbsp;&nbsp;<b> &nbsp;</b></p></td>
        </tr>
      </table>
      </td>
  </tr>
  
<tr> <td colspan="2"><p style="border-bottom:1px dotted  #000;line-height:8px;color:#000;">&nbsp;</p></td> </tr>

  
<tr>
<td colspan="3">
<table cellpadding="0" cellspacing="0" border="0" style="width:640px;">
   <tr>
    <td style="widht:240px;line-height:8px;color:#000;">SUBRUB/Locality:</td>
	<td  style="widht:10px;line-height:8px;color:#000;">
	<p style="border-bottom:1px dotted  #000;line-height:8px;color:#000;text-align:left;">&nbsp;<b>Melbourne</b></p></td>
	<td style="width:2px;">&nbsp;</td>
    <td style="widht:140px;line-height:8px;color:#000;">POSTCODE:</td>
	<td  style="widht:2px;line-height:8px;color:#000;">
	<p style="border-bottom:1px dotted  #000;line-height:8px;color:#000;text-align:left;">&nbsp;<b>3000</b></p></td>
	<td style="width:5px;">&nbsp;</td>
    <td style="widht:240px;line-height:8px;color:#000;">MELWAYS RDS REF:</td>
	<td  style="widht:2px;line-height:8px;color:#000;">
	<p style="border-bottom:1px dotted  #000;line-height:8px;color:#000;text-align:left;">&nbsp;<b></b></p></td>
  </tr>
</table>

</td>
</tr>

</table>

				</td>
			</tr>
		</table>
	</td>
    </tr>
</table>



<table border="0" cellspacing="0" cellpadding="0" align="center">
	<tr> <td align="left" style="line-height:4px;">&nbsp;</td>    </tr>
</table>
 


<table border="0" cellspacing="0" cellpadding="0" align="center" style="border:0.5px solid #ccc;width:100%;">
	<tr>
        <td align="left" valign="top" colspan="9" style="line-height:10px;"> &nbsp; </td>
    </tr>

	<tr>
        <td align="left" valign="top" style="line-height:10px;width:100px;">	<strong>&nbsp;&nbsp;&nbsp;  INSTALLATION:</strong></td>
		<td align="left" valign="top" style="line-height:10px;width:60px">House<span> <img src="images/ticmark.jpg" /> </span></td>
		<td align="left" valign="top" style="line-height:10px;width:65px">Flat/Unit<span> <img src="images/ticmark.jpg" /> </span></td>
		<td align="left" valign="top" style="line-height:10px;width:65px">Shop<span> <img src="images/ticmark.jpg" /> </span></td>
		<td align="left" valign="top" style="line-height:10px;width:65px">Factory<span> <img src="images/ticmark.jpg" /> </span></td>
		<td align="left" valign="top" style="line-height:10px;width:65px">Farm<span> <img src="images/ticmark.jpg" /> </span></td>
		<td align="left" valign="top" style="line-height:10px;width:50px">Office<span> <img src="images/ticmark.jpg" /> </span></td>
		<td align="left" valign="top" style="line-height:10px;width:90px">Builders Pole<span> <img src="images/ticmark.jpg" /> </span></td>
		<td align="left" valign="top" style="line-height:10px;width:60px">BTS Perm<span> <img src="images/ticmark.jpg" /> </span></td>
    </tr>
	<tr>
    <td align="left" valign="top" style="line-height:10px;width:100px;">	<strong>&nbsp;&nbsp;&nbsp;  ADDITIONAL:</strong></td>
    <td align="left" valign="top" style="line-height:10px;width:120px;">Dual/Multi Occupancy<span> <img src="images/ticmark.jpg" /> </span></td>
	<td align="left" valign="top" style="line-height:10px;width:100px;">Private OH Line<span> <img src="images/ticmark.jpg" /> </span></td>
    <td align="left" valign="top" style="line-height:10px;width:40px;">H/V<span> <img src="images/ticmark.jpg" /> </span></td>
	<td align="left" valign="top" style="line-height:10px;width:110px;">Embedded Network<span> <img src="images/ticmark.jpg" /> </span></td>
    <td align="left" valign="top" style="line-height:10px;width:130px;"> Grid Connection/Solar <span> <img src="images/ticmark.jpg" /> </span></td>
	<td align="left" valign="top" style="line-height:10px;"></td>
    <td align="left" valign="top" style="line-height:10px;"></td>
    <td align="left" valign="top" style="line-height:10px;"></td>
    </tr>
	
	
	<tr>
    <td align="left" valign="top" style="line-height:10px;width:100px;">	<strong>&nbsp;&nbsp;&nbsp;  INFO:</strong></td>
	<td align="left" valign="top" style="line-height:10px;width:180px;">Are private mains on public land?&nbsp; Y<span> <img src="images/ticmark.jpg" /></span></td>
    <td align="left" valign="top" style="line-height:10px;width:40px;">N<span> <img src="images/ticmark.jpg" /> </span></td>
	<td align="left" valign="top" style="line-height:10px;width:85px;">Are EWP Reqd&nbsp; Y<span> <img src="images/ticmark.jpg" /> </span></td>
    <td align="left" valign="top" style="line-height:10px;width:40px;">N<span> <img src="images/ticmark.jpg" /> </span></td>
	<td align="left" valign="top" style="line-height:10px;width:135px;">Is Traffic Control Reqd?&nbsp; Y<span> <img src="images/ticmark.jpg" /> </span></td>
    <td align="left" valign="top" style="line-height:10px;width:40px;">N<span> <img src="images/ticmark.jpg" /> </span></td>
    <td align="left" valign="top" style="line-height:10px;"></td>
    <td align="left" valign="top" style="line-height:10px;"></td>
    </tr>


 
 	<tr>
        <td align="left" valign="top" style="line-height:10px;width:100px;">	<strong>&nbsp;&nbsp;&nbsp;  TYPE OF WORK:</strong></td>
		<td align="left" valign="top" style="line-height:10px;width:100px;">Alteration / Addition<br>New Installation<br>Un-metered supply</td>
        <td align="left" valign="top" style="line-height:10px;width:15px;"><img src="images/ticmark-three.jpg" /></td>
        <td align="left" valign="top" style="line-height:10px;width:10px;"> &nbsp; </td>
        <td align="left" valign="top" colspan="5" style="line-height:6px;">
		<p style="border-bottom:1px dotted  #000;color:#000;">Description of works:&nbsp;<b>Solar PV grid connect system </b></p>
		<p style="border-bottom:1px dotted  #000;color:#000;line-height:2px;">&nbsp;<b> &nbsp; </b></p>
		<p style="border-bottom:1px dotted  #000;color:#000;line-height:8px;">&nbsp;<b> &nbsp; </b></p>
		</td>
    </tr>

<tr>
    <td align="left" valign="top" style="line-height:10px;width:130px;">	<strong>&nbsp;&nbsp;&nbsp;  SUPPLY CONNECTED:</strong></td>
	<td align="left" valign="top" style="line-height:10px;width:45px;">YES<span> <img src="images/ticmark.jpg" /> </span></td>
    <td align="left" valign="top" style="line-height:10px;width:45px;">NO<span> <img src="images/ticmark.jpg" /> </span></td>
	<td align="left" valign="top" style="line-height:10px;width:220px;"> <b>ACCESS:</b>To meter position & switchboard<span> <img src="images/ticmark.jpg" /></span></td>
    <td align="left" valign="top" style="line-height:10px;width:60px;">PlLock<span> <img src="images/ticmark.jpg" /> </span></td>
    <td align="left" valign="top" style="line-height:10px;width:100px;">workmen on site<span> <img src="images/ticmark.jpg" /> </span></td>
    <td align="left" valign="top" style="line-height:10px;"></td>
    <td align="left" valign="top" style="line-height:10px;"></td>
    <td align="left" valign="top" style="line-height:10px;"></td>
    </tr>

	<tr>
        <td align="left" valign="top" colspan="9" style="line-height:10px;"> &nbsp; </td>
    </tr>
    	

</table>
 
 
 

<table border="0" cellspacing="0" cellpadding="0" align="center">
	<tr> <td align="left" style="line-height:4px;">&nbsp;</td>    </tr>
</table>
 


<table border="0" cellspacing="0" cellpadding="0" align="center" style="border:0.5px solid #ccc;width:100%;">
  <tr> <td align="left" height="10" style="line-height:10px;"  colspan="2">&nbsp;</td>    </tr>
  <tr>
    <td align="left" valign="top" style="line-height:9px;width:25%;">
	    <strong style="line-height:9px;">SUPPLY REQUIRED:</strong><br>
 <table border="0" cellspacing="0" cellpadding="0" align="center" width="100%">
  <tr>
    <td align="left" style="width:2px;"></td>
	<td align="left" style="font-size:6px;">Note:<br/>
    Further details of <br/>
    installed <br/>
    equipment may<br/>
    need to be <br/>
    provided to and <br/>
    the responsible<br/>
    Distribution<br/>
    company may<br/>
    reqiureconfimation of <br/>
    supply<br/>
    arrangements.
    </td>
  </tr>
</table>

	
	</td>

	<td style="line-height:10px;width:75%;">
        <table border="0" cellspacing="0" cellpadding="0" align="center">
        	<tr>
            	<td width="90" style="text-align:left;"><strong>OVERHEAD</strong></td>
                <td style="line-height:10px;">
					<table border="0" cellspacing="0" cellpadding="0" align="center" width="100%">
						<tr>
							<td style="width:15px;"><img src="images/ticmark.jpg" /> </td> 
							<td  style="width:120px;">Length of Overhead cable: </td> 
							<td style="width:150px;"><p style="border-bottom:1px dotted  #000;line-height:8px;color:#000;">&nbsp;</p></td> 
							<td style="width:30px;">Mtrs</td> 
						</tr>
					</table>
				</td>
            </tr>
			
			<tr>
            	<td width="90" style="text-align:left;"><strong>UNDERGROUND</strong></td>
                <td style="line-height:10px;">
					<table border="0" cellspacing="0" cellpadding="0" align="center" width="100%">
						<tr>
							<td style="width:15px;"><img src="images/ticmark.jpg" /> </td> 
							<td  style="width:60px;text-align:left;">Pole to pit </td> 
							<td style="width:15px;"><img src="images/ticmark.jpg" /> </td> 
							<td  style="width:130px;text-align:left;">Has pit been installed? </td> 
							<td style="width:30px;text-align:left;">Y <img src="images/ticmark.jpg" /> </td> 
							<td style="width:30px;text-align:left;">N <img src="images/ticmark.jpg" /> </td> 
							<td style="width:130px;text-align:left;">O/H to U/G Conversion <img src="images/ticmark.jpg" /> </td> 
						</tr>
					</table>
				</td>
            </tr>
			<tr>
            	<td width="90" style="text-align:left;"><strong>URD</strong></td>
                <td style="line-height:10px;">
					<table border="0" cellspacing="0" cellpadding="0" align="center" width="100%">
						<tr>
							<td style="width:15px;"><img src="images/ticmark.jpg" /> </td> 
							<td  style="width:300px;text-align:left;">(If pit has not been installed please call distribution company) </td> 
						</tr>
					</table>
				</td>
            </tr>


			<tr>
            	<td width="90" style="text-align:left;"><strong>SUBSTATION</strong></td>
                <td style="line-height:10px;">
					<table border="0" cellspacing="0" cellpadding="0" align="center" width="100%">
						<tr>
							<td style="width:15px;"><img src="images/ticmark.jpg" /> </td> 
							<td  style="width:70px;text-align:left;"> <strong>TERMINATION:</strong> </td> 
							<td  style="width:90px;text-align:left;">GROUP METERING <img src="images/ticmark.jpg" /> </td> 
							<td  style="width:45px;text-align:left;">PILLAR <img src="images/ticmark.jpg" /> </td> 
							<td  style="width:70px;text-align:left;">SUBSTATION <img src="images/ticmark.jpg" /> </td> 
							<td  style="width:45px;text-align:left;">FOLCB <img src="images/ticmark.jpg" /> </td> 
							<td  style="width:40px;text-align:left;">PIT <img src="images/ticmark.jpg" /> </td> 
						</tr>
					</table>
				</td>
            </tr>


			<tr>
            	<td width="130" style="text-align:left;"><strong>NEW MAINS:NO PHASES</strong></td>
                <td style="line-height:10px;">
					<table border="0" cellspacing="0" cellpadding="0" align="center" width="100%">
						<tr>
							<td style="width:30px;text-align:left;"> 1 <img src="images/ticmark.jpg" /> </td>
							<td style="width:30px;text-align:left;"> 2 <img src="images/ticmark.jpg" /> </td>  
							<td style="width:30px;text-align:left;"> 3 <img src="images/ticmark.jpg" /> </td>  
							<td style="width:30px;text-align:left;"> SIZE </td>
							<td style="width:50px;"><p style="border-bottom:1px dotted  #000;line-height:8px;color:#000;">&nbsp;</p></td>   
							<td style="width:30px;text-align:left;"> mm </td>
						</tr>
					</table>
				</td>
            </tr>
			
			<tr>
            	<td width="90" style="text-align:left;"><strong>NEW MAX DEMAND:</strong></td>
                <td style="line-height:10px;">
					<table border="0" cellspacing="0" cellpadding="0" align="center" width="100%">
						<tr>
							<td style="width:80px;text-align:left;font-size:7px;"> Total for Installation. </td>
							<td style="width:100px;"><p style="border-bottom:1px dotted  #000;line-height:8px;color:#000;">&nbsp;</p></td>   
							<td style="width:100px;text-align:left;"> Amps per phase </td>
						</tr>
					</table>
				</td>
            </tr>
			
			<tr>
            	<td width="160" style="text-align:left;"><strong>IF DUAL/MULTI OCC INSTALLATION:</strong></td>
                <td style="line-height:10px;">
					<table border="0" cellspacing="0" cellpadding="0" align="center" width="100%">
						<tr>
							<td style="width:80px;text-align:left;font-size:7px;"> Individual occupancy </td>
							<td style="width:100px;"><p style="border-bottom:1px dotted  #000;line-height:8px;color:#000;">&nbsp;</p></td>   
							<td style="width:100px;text-align:left;"> Amps per phase </td>
						</tr>
					</table>
				</td>
            </tr>
			

			
			
        </table>
    </td>
    
    
    
  </tr>
</table>
 
 
<table border="0" cellspacing="0" cellpadding="0" align="center">
	<tr> <td align="left" style="line-height:4px;">&nbsp;</td>    </tr>
</table>

 
 
 
 
<table border="0" cellspacing="0" cellpadding="0" align="center" style="border:0.5px solid #ccc;width:100%;">
  <tr> <td align="left" height="10" style="line-height:10px;"  colspan="2">&nbsp;</td>    </tr>

	<tr>
		<td>
			<table border="0" cellspacing="0" cellpadding="0" align="center" style="width:100%;" >
			<tr>
				<td style="width:10px;">&nbsp;</td>
				<td style="width:130px;text-align:left;"><strong>METERING REQUIRED:</strong></td>
				
				<td style="width:140px;text-align:left;"><strong>EXISTING METER NUMBERS/S</strong></td>
				<td style="width:180px;">
				<p style="border-bottom:1px dotted  #000;line-height:8px;color:#000;text-align:right;"><strong>1234</strong></p></td>
				
				<td style="width:10px;">&nbsp;</td>
				<td style="width:50px;text-align:left;"><strong>RETAILER</strong></td>
				
				<td style="width:100px;">
				<p style="border-bottom:1px dotted  #000;line-height:8px;color:#000;text-align:right;"><strong>&nbsp;</strong></p>
				</td>
			</tr>
			</table>
			


			<table border="0" cellspacing="0" cellpadding="0" align="center" style="width:100%;">
			<tr>
				<td style="width:10px;">&nbsp;</td>
				<td style="width:60px;text-align:left;">Domestic <img src="images/ticmark.jpg" /></td>
				<td style="width:110px;text-align:left;">Commercial/Industrial <img src="images/ticmark.jpg" /></td>
				<td style="width:150px;text-align:left;">Grid Connection/Solar:Gross <img src="images/ticmark.jpg" /></td>
				<td style="width:65px;text-align:left;">Net <img src="images/ticmark.jpg" /></td>
				<td style="width:150px;text-align:left;">Solar KVA Rating <img src="images/ticmark.jpg" /></td>
			</tr>
			</table>

			<table border="0" cellspacing="0" cellpadding="0" align="center" style="width:100%;">
			<tr>
				<td style="width:10px;">&nbsp;</td>
				<td style="width:60px;text-align:left;"><strong>METERING</strong></td>
			</tr>
			</table>




			<table border="0" cellspacing="0" cellpadding="0" align="center" style="width:100%;">
			<tr>
				<td style="width:10px;line-height:5px;">&nbsp;</td>
				<td style="width:160px;line-height:5px;text-align:left;">Basic Metering <img src="images/ticmark.jpg" /></td>
				<td style="width:5px;line-height:5px;">&nbsp;</td>
				<td style="width:90px;line-height:8px;text-align:left;">   </td>
				<td style="width:150px;line-height:5px;text-align:left;"> Switching Service / 2A Sync </td>
				<td style="width:20px;line-height:5px;text-align:left;">  <img src="images/ticmark.jpg" /></td>
				<td style="width:1px;line-height:5px;">&nbsp;</td>
				<td style="width:160px;line-height:8px;text-align:left;"> (Not available from all DBs) </td>
			</tr>
			</table>


			<table border="0" cellspacing="0" cellpadding="0" align="center" style="width:100%;">
			<tr>
				<td style="width:10px;line-height:5px;">&nbsp;</td>
				<td style="width:160px;line-height:5px;text-align:left;">Interval Metering <img src="images/ticmark.jpg" /></td>
				<td style="width:90px;line-height:8px;text-align:left;"> <strong>No. Phases</strong> </td>
				<td style="width:5px;line-height:5px;">&nbsp;</td>
				<td style="width:150px;line-height:5px;text-align:left;"> Hot Water </td>
				<td style="width:20px;line-height:5px;text-align:left;">  <img src="images/ticmark.jpg" /></td>
				<td style="width:1px;line-height:5px;">&nbsp;</td>
				<td style="width:60px;line-height:8px;text-align:left;"> No. of liters </td>
				<td style="width:30px;">
				<p style="border-bottom:1px dotted  #000;line-height:5px;color:#000;text-align:left;"><strong>&nbsp;</strong></p>
				</td>
				<td style="width:100px;line-height:8px;text-align:left;"> Single / twin element </td>
			</tr>
			</table>




			<table border="0" cellspacing="0" cellpadding="0" align="center" style="width:100%;">
			<tr>
				<td style="width:10px;line-height:5px;">&nbsp;</td>
				<td style="width:160px;line-height:5px;text-align:left;">Single Rate(for total consumption) </td>
				<td style="width:20px;line-height:9px;text-align:left;">1 <img src="images/ticmark.jpg" /> </td>
				<td style="width:2px;line-height:5px;">&nbsp;</td>
				<td style="width:20px;line-height:9px;text-align:left;"> 2 <img src="images/ticmark.jpg" /></td>
				<td style="width:2px;line-height:5px;">&nbsp;</td>
				<td style="width:20px;line-height:9px;text-align:left;"> 3 <img src="images/ticmark.jpg" /></td>
				<td style="width:30px;line-height:5px;">&nbsp;</td>
				<td style="width:150px;line-height:5px;text-align:left;"> Floor Heat (No Boast available) </td>
				<td style="width:100px;line-height:5px;text-align:left;">  KW Rating / per phase</td>
				<td style="width:60px;">
				<p style="border-bottom:1px dotted  #000;line-height:5px;color:#000;text-align:left;"><strong>&nbsp;</strong></p>
				</td>

			</tr>
			</table>


 
			<table border="0" cellspacing="0" cellpadding="0" align="center" style="width:100%;">
			<tr>
				<td style="width:10px;line-height:5px;">&nbsp;</td>
				<td style="width:160px;line-height:5px;text-align:left;">Two rates (peak / off peak)  </td>
				<td style="width:20px;line-height:10px;text-align:left;">1 <img src="images/ticmark.jpg" /> </td>
				<td style="width:2px;line-height:5px;">&nbsp;</td>
				<td style="width:20px;line-height:10px;text-align:left;"> 2 <img src="images/ticmark.jpg" /></td>
				<td style="width:2px;line-height:5px;">&nbsp;</td>
				<td style="width:20px;line-height:10px;text-align:left;"> 3 <img src="images/ticmark.jpg" /></td>
				<td style="width:30px;line-height:5px;">&nbsp;</td>
				<td style="width:150px;line-height:5px;text-align:left;"> Climate Saver(Powercor Only) </td>
				<td style="width:15px;line-height:5px;text-align:left;">  <img src="images/ticmark.jpg" /></td>
				<td style="width:20px;line-height:5px;">&nbsp;</td>
				<td style="width:30px;line-height:10px;text-align:left;"> 1PH <img src="images/ticmark.jpg" /></td>
				<td style="width:5px;line-height:5px;">&nbsp;</td>
				<td style="width:30px;line-height:10px;text-align:left;"> 2PH <img src="images/ticmark.jpg" /></td>
				<td style="width:5px;line-height:5px;">&nbsp;</td>
				<td style="width:30px;line-height:10px;text-align:left;"> 3PH <img src="images/ticmark.jpg" /></td>
			</tr>
			</table>



			<table border="0" cellspacing="0" cellpadding="0" align="center" style="width:100%;">
			<tr>
				<td style="width:10px;line-height:5px;">&nbsp;</td>
				<td style="width:130px;line-height:5px;text-align:left;"> Current Transformer Metering </td>
				<td style="width:20px;line-height:10px;text-align:left;"><img src="images/ticmark.jpg" /> </td>
				<td style="width:2px;line-height:5px;">&nbsp;</td>
				<td style="width:60px;line-height:5px;text-align:left;"> Max Demand </td>
				<td style="width:60px;">
				<p style="border-bottom:1px dotted  #000;line-height:5px;color:#000;text-align:left;"><strong>&nbsp;</strong></p>
				</td>
				<td style="width:2px;line-height:5px;">&nbsp;</td>
				<td style="width:30px;line-height:5px;text-align:left;"> Amps </td>
				<td style="width:60px;">
				<p style="border-bottom:1px dotted  #000;line-height:5px;color:#000;text-align:left;"><strong>&nbsp;</strong></p>
				</td>
				<td style="width:20px;line-height:5px;text-align:left;"> KW </td>
				<td style="width:5px;line-height:5px;">&nbsp;</td>
				<td style="width:110px;line-height:5px;text-align:left;"> Have CTs been installed? </td>
				<td style="width:5px;line-height:5px;">&nbsp;</td>
				<td style="width:20px;line-height:10px;text-align:left;">Y <img src="images/ticmark.jpg" /> </td>
				<td style="width:5px;line-height:5px;">&nbsp;</td>
				<td style="width:20px;line-height:10px;text-align:left;">N <img src="images/ticmark.jpg" /> </td>

			</tr>
			</table>


	
			
		</td>
	</tr>
</table>



<table border="0" cellspacing="0" cellpadding="0" align="center">
	<tr> <td align="left" style="line-height:4px;">&nbsp;</td>    </tr>
</table>
 
<table border="0" cellspacing="0" cellpadding="0" align="center" style="border:0.5px solid #ccc;width:100%;">
  <tr> <td align="left" height="10" style="line-height:10px;"  colspan="2">&nbsp;</td>    </tr>

	<tr>
		<td>

			<table border="0" cellspacing="0" cellpadding="0" align="center" style="width:100%;">
			<tr>
				<td style="width:10px;line-height:10px;">&nbsp;</td>
				<td style="width:160px;line-height:10px;text-align:left;"><b>TRUCK APPOINTMENT</b> </td>
			</tr>
			</table>
			
			
			<table border="0" cellspacing="0" cellpadding="0" align="center" style="width:100%;">
			<tr>
				<td style="width:10px;line-height:5px;">&nbsp;</td>
				<td style="width:160px;line-height:15px;text-align:left;"> Do you require a truck appoinment? </td>
				<td style="width:20px;line-height:10px;text-align:left;">Y <img src="images/ticmark.jpg" /> </td>
				<td style="width:2px;line-height:5px;">&nbsp;</td>
				<td style="width:20px;line-height:10px;text-align:left;"> N <img src="images/ticmark.jpg" /></td>
			</tr>
			</table>

			<table border="0" cellspacing="0" cellpadding="0" align="center" style="width:100%;">
			<tr>
				<td style="width:10px;line-height:10px;">&nbsp;</td>
				<td style="width:600px;line-height:10px;text-align:left;"> Appointments are not necessary supplied for all requests ,unless you are required to complete work in conjuction with the Distribution company </td>
			</tr>
			</table>
			 
			<table border="0" cellspacing="0" cellpadding="0" align="center" style="width:100%;">
			<tr>
				<td style="width:10px;line-height:5px;">&nbsp;</td>
				<td style="width:340px;line-height:15px;text-align:left;"> If  truck appoinment is required ,
					preferred time/date with Distribution Company: </td>
				<td  align="left" style="line-height:17px;text-align:left;width:23px;">Date:</td>
				<td  align="left" style="line-height:17px;text-align:left;width:23px;">
				<p style="line-height:9px;border-bottom:1px dotted  #000;color:#000;text-align:left;">
				<strong>&nbsp;</strong></p>
				</td>
				<td  align="left" style="line-height:17px;text-align:left;width:8px;"> /</td>
				<td  align="left" style="line-height:17px;text-align:left;width:23px;">
				<p style="line-height:9px;border-bottom:1px dotted  #000;color:#000;text-align:left;">
				<strong>&nbsp;</strong></p>
				</td>
				<td  align="left" style="line-height:17px;text-align:left;width:8px;"> /</td>
				<td  align="left" style="line-height:17px;text-align:left;width:23px;">
				<p style="line-height:9px;border-bottom:1px dotted  #000;color:#000;text-align:left;">
				<strong>&nbsp;</strong></p>
				</td>
				<td  align="left" style="line-height:17px;text-align:left;width:8px;"> </td>
				<td  align="left" style="line-height:17px;text-align:left;width:23px;">Time:</td>
				<td  align="left" style="line-height:17px;text-align:left;width:23px;">
				<p style="line-height:9px;border-bottom:1px dotted  #000;color:#000;text-align:left;">
				<strong>&nbsp;</strong></p>
				</td>
				<td  align="left" style="line-height:17px;text-align:left;width:8px;"> </td>
				<td  align="left" style="line-height:17px;text-align:left;width:13px;">am</td>
				<td  align="left" style="line-height:17px;text-align:left;width:8px;"> /</td>
				<td  align="left" style="line-height:17px;text-align:left;width:13px;">pm</td>
			</tr>
			</table>

			 
			<table border="0" cellspacing="0" cellpadding="0" align="center" style="width:100%;">
			<tr>
				<td style="width:10px;line-height:5px;">&nbsp;</td>
				<td style="width:190px;line-height:15px;text-align:left;"> Acceptance of changes for the truck appt: </td>
				<td style="width:50px;line-height:10px;text-align:left;">Retailer <img src="images/ticmark.jpg" /> </td>
				<td style="width:2px;line-height:5px;">&nbsp;</td>
				<td style="width:100px;line-height:10px;text-align:left;"> Field Works Order <img src="images/ticmark.jpg" /></td>
				<td style="width:50px;line-height:5px;">&nbsp;</td>
				<td style="width:100px;line-height:10px;text-align:left;"> REC <img src="images/ticmark.jpg" /></td>
			</tr>
			</table>



		 

			
		</td>
	</tr>
</table>


<table border="0" cellspacing="0" cellpadding="0" align="center">
	<tr> <td align="left" style="line-height:4px;">&nbsp;</td>    </tr>
</table>


<table border="0" cellspacing="0" cellpadding="0" align="center" style="border:0.5px solid #ccc;width:100%;">
  <tr> <td align="left" height="10" style="line-height:10px;"  colspan="2">&nbsp;</td>    </tr>

	<tr>
		<td>

 			
			<table border="0" cellspacing="0" cellpadding="0" align="center" style="width:100%;">
			<tr>
				<td style="width:60px;line-height:15px;text-align:left;"> <b>INSPECTION</b> </td>
				<td style="width:250px;line-height:15px;text-align:left;"> Do you require the Dist.Company to provide this service? </td>
				<td style="width:20px;line-height:10px;text-align:left;">Y <img src="images/ticmark.jpg" /> </td>
				<td style="width:2px;line-height:5px;">&nbsp;</td>
				<td style="width:20px;line-height:10px;text-align:left;"> N <img src="images/ticmark.jpg" /></td>
				<td style="width:20px;line-height:5px;">&nbsp;</td>
				<td style="width:170px;line-height:15px;font-size:7px;text-align:left;"> (Not all Dist. Companies provide this service) </td>
			</tr>
			</table>
			<table border="0" cellspacing="0" cellpadding="0" align="center" style="width:100%;">
			<tr>
				<td style="width:80px;line-height:15px;text-align:left;"> <b>The CES will be</b> </td>
				<td style="width:100px;line-height:15px;text-align:left;"> Provided to Retailer <img src="images/ticmark.jpg" /></td>
				<td style="width:20px;line-height:5px;">&nbsp;</td>
				<td style="width:150px;line-height:15px;text-align:left;"> Provided at Appointment <img src="images/ticmark.jpg" /></td>
			</tr>
			</table>
			<table border="0" cellspacing="0" cellpadding="0" align="center" style="width:100%;">
			<tr>
				<td style="width:65px;line-height:15px;text-align:left;"> <b>CES Number:</b> </td>
				<td style="width:100px;line-height:3px;text-align:left;"> 
				<p style="border-bottom:1px dotted  #000;color:#000;text-align:left;"><strong>&nbsp;</strong></p>
				</td>
				<td style="width:35px;line-height:5px;">&nbsp;</td>
				<td style="width:140px;line-height:15px;text-align:left;"> <b>Licensed Electrical inspector:</b> </td>
				<td style="width:150px;line-height:3px;text-align:left;"> 
					<p style="border-bottom:1px dotted #000;color:#000;text-align:left;"><strong style="line-height:8px;">Paul Downes</strong></p>
				</td>
			</tr>
			</table>
		 

			
		</td>
	</tr>
	  <tr> <td align="left" height="10" style="line-height:10px;"  colspan="2">&nbsp;</td>    </tr>

</table>




<table border="0" cellspacing="0" cellpadding="0" align="center">
	<tr> <td align="left" style="line-height:4px;">&nbsp;</td>    </tr>
</table>

 
<table border="0" cellspacing="0" cellpadding="0" align="center" style="border:0.5px solid #ccc;width:100%;">
  <tr> <td align="left" style="line-height:10px;"  colspan="2">&nbsp;</td>    </tr>

	<tr>
		<td>
<table border="0" cellspacing="0" cellpadding="0" align="center" style="width:100%;">
			<tr>
				<td style="width:10px;line-height:10px;">&nbsp;</td>
				<td style="width:600px;line-height:10px;text-align:left;"> I acknowledge that by submission of this notice the requirements of the relevant Distribution Company have been adhered to, and certify the electrical work this notice pertains to complies with the current Victorian Service installation Rules(Sirs) and Electrical Safety Act and Regulations. I also acknowledge the initial connection of prescribe work will not be connected without a Certification of Electrical Safety and that I am responsible for any associated distribution companies charges unless the retailer has accepted all charges. </td>
			</tr>
			</table>


			<table border="0" cellspacing="0" cellpadding="0" align="center" style="width:100%;">
			<tr>
				<td style="width:60px;line-height:8px;">&nbsp;</td>
			</tr>
			</table>
			
			
			<table border="0" cellspacing="0" cellpadding="0" align="center" style="width:100%;">
			<tr>
				<td style="width:600px;line-height:10px;text-align:center;"><b>Retailers are not permitted to amend this document or the 
				Certificate of Electrical Safety</b> </td>
			</tr>
			</table>
			
			
			
			 
			<table border="0" cellspacing="0" cellpadding="0" align="center" style="width:100%;">
			<tr>
				<td style="width:10px;line-height:5px;">&nbsp;</td>
				<td style="width:200px;line-height:15px;text-align:left;"> THE WORK WILL BE SAFE TO CONNECT ON: </td>
				<td style="width:180px;line-height:5px;">
						<table cellpadding="0" cellspacing="0" border="0">
						<tr>
						<td  align="left" style="line-height:17px;text-align:left;width:23px;">Date:</td>
						<td  align="left" style="line-height:17px;text-align:left;width:23px;">
						<p style="line-height:9px;border-bottom:1px dotted  #000;color:#000;text-align:left;">
						<strong>&nbsp;</strong></p>
						</td>
						<td  align="left" style="line-height:17px;text-align:left;width:8px;"> /</td>
						<td  align="left" style="line-height:17px;text-align:left;width:23px;">
						<p style="line-height:9px;border-bottom:1px dotted  #000;color:#000;text-align:left;">
						<strong>&nbsp;</strong></p>
						</td>
						<td  align="left" style="line-height:17px;text-align:left;width:8px;"> /</td>
						<td  align="left" style="line-height:17px;text-align:left;width:23px;">
						<p style="line-height:9px;border-bottom:1px dotted  #000;color:#000;text-align:left;">
						<strong>&nbsp;</strong></p>
						</td>
				        <td style="width:200px;line-height:15px;text-align:left;font-size:7px;">  OR at Completion of Truck  Appoinment </td>
						</tr>
						</table>
				</td>
			</tr>
			</table>

			<table border="0" cellspacing="0" cellpadding="0" align="center" style="width:100%;">
			<tr>
				<td style="width:10px;line-height:5px;">&nbsp;</td>
				<td style="width:180px;line-height:15px;text-align:left;"> REGISTERED ELECTRICAL CONTRACTION: </td>
				<td  align="left" style="line-height:17px;text-align:left;width:130px;">
				<p style="line-height:9px;border-bottom:1px dotted  #000;color:#000;text-align:left;">
				<strong>Solar On Electrical</strong></p>
				</td>
				<td style="width:10px;line-height:5px;">&nbsp;</td>
				<td style="width:40px;line-height:15px;text-align:left;"> REC No: </td>
				<td  align="left" style="line-height:17px;text-align:left;width:130px;">
				<p style="line-height:9px;border-bottom:1px dotted  #000;color:#000;text-align:left;">
				<strong>22896</strong></p>
				</td>
			</tr>
			</table>

			<table border="0" cellspacing="0" cellpadding="0" align="center" style="width:100%;">
			<tr>
				<td style="width:10px;line-height:5px;">&nbsp;</td>
				<td style="width:180px;line-height:15px;text-align:left;"> REGISTERED ADDRESS: </td>
				<td  align="left" style="line-height:17px;text-align:left;width:130px;">
				<p style="line-height:9px;border-bottom:1px dotted  #000;color:#000;text-align:left;">
				<strong>229 Farley Rd</strong></p>
				</td>
				<td style="width:10px;line-height:5px;">&nbsp;</td>
				<td style="width:50px;line-height:15px;text-align:left;"> Phone No: </td>
				<td  align="left" style="line-height:17px;text-align:left;width:130px;">
				<p style="line-height:9px;border-bottom:1px dotted  #000;color:#000;text-align:left;">
				<strong>0408258298</strong></p>
				</td>
			</tr>
			</table>
			<table border="0" cellspacing="0" cellpadding="0" align="center" style="width:100%;">
			<tr>
				<td style="width:10px;line-height:5px;">&nbsp;</td>
				<td  align="left" style="line-height:17px;text-align:left;width:310px;">
				<p style="line-height:9px;border-bottom:1px dotted  #000;color:#000;text-align:center;">
				<strong> Torrumbarry VIC 3562 </strong></p>
				</td>
				<td style="width:10px;line-height:5px;">&nbsp;</td>
				<td style="width:40px;line-height:15px;text-align:left;"> FAX No: </td>
				<td  align="left" style="line-height:17px;text-align:left;width:130px;">
				<p style="line-height:9px;border-bottom:1px dotted  #000;color:#000;text-align:left;">
				<strong> </strong></p>
				</td>
			</tr>
			</table>

 
			<table border="0" cellspacing="0" cellpadding="0" align="center" style="width:100%;">
			<tr>
				<td style="width:10px;line-height:5px;">&nbsp;</td>
				<td style="width:180px;line-height:15px;text-align:left;"> REGISTERED ADDRESS:<span style="font-size:7;">(Please Print)</span> </td>
				<td  align="left" style="line-height:17px;text-align:left;width:130px;">
				<p style="line-height:9px;border-bottom:1px dotted  #000;color:#000;text-align:left;">
				<strong>Brooke Coghalan</strong></p>
				</td>
				<td style="width:10px;line-height:5px;">&nbsp;</td>
				<td style="width:50px;line-height:15px;text-align:left;"> MOBILE No: </td>
				<td  align="left" style="line-height:17px;text-align:left;width:130px;">
				<p style="line-height:9px;border-bottom:1px dotted  #000;color:#000;text-align:left;">
				<strong>0408258298</strong></p>
				</td>
			</tr>
			</table>




			<table border="0" cellspacing="0" cellpadding="0" align="center" style="width:100%;">
			<tr>
				<td style="width:10px;line-height:5px;">&nbsp;</td>
				<td style="width:55px;line-height:15px;text-align:left;"> SIGNATURE : </td>
				<td style="width:1px;line-height:5px;">&nbsp;</td>
				<td  align="left" style="line-height:17px;text-align:left;width:255px;">
				<p style="line-height:9px;border-bottom:1px dotted  #000;color:#000;text-align:left;">
				<strong> </strong></p>
				</td>
				<td style="width:10px;line-height:5px;">&nbsp;</td>
                <td style="width:180px;line-height:5px;">
						<table cellpadding="0" cellspacing="0" border="0">
						<tr>
						<td  align="left" style="line-height:17px;text-align:left;width:23px;">Date:</td>
						<td  align="left" style="line-height:17px;text-align:left;width:23px;">
						<p style="line-height:9px;border-bottom:1px dotted  #000;color:#000;text-align:left;">
						<strong>&nbsp;</strong></p>
						</td>
						<td  align="left" style="line-height:17px;text-align:left;width:8px;"> /</td>
						<td  align="left" style="line-height:17px;text-align:left;width:23px;">
						<p style="line-height:9px;border-bottom:1px dotted  #000;color:#000;text-align:left;">
						<strong>&nbsp;</strong></p>
						</td>
						<td  align="left" style="line-height:17px;text-align:left;width:8px;"> /</td>
						<td  align="left" style="line-height:17px;text-align:left;width:23px;">
						<p style="line-height:9px;border-bottom:1px dotted  #000;color:#000;text-align:left;">
						<strong>&nbsp;</strong></p>
						</td>
						</tr>
						</table>
				</td>				
			</tr>
			</table>


			<table border="0" cellspacing="0" cellpadding="0" align="center" style="width:100%;">
				<tr><td style="line-height:4px;">&nbsp;</td></tr>
			</table>

			<table border="0" cellspacing="0" cellpadding="0" align="center" style="width:100%;">
				<tr><td style="width:500px;line-height:15px;text-align:left;"> 
				Privacy Statement:Information collected is for the purpose related to connection,provision and atteration of supply of electricity.
				</td></tr>
				<tr><td style="width:500px;line-height:15px;text-align:left;"> 
				This information may be disclosed to your Electricity Retailer and relevant Distributor identified here. -1300 131 871 <img src="images/ticmark.jpg" />
				</td></tr>
			</table>

			<table border="0" cellspacing="0" cellpadding="0" align="center" style="width:100%;">
				<tr>
				<td style="width:220px;line-height:15px;text-align:left;"> 
				Citipower Pty - 1300 301 101 <img src="images/ticmark.jpg" />
				</td>
				<td style="width:150px;line-height:15px;text-align:left;"> 
				Powercor Australia Ltd - 132 206  <img src="images/ticmark.jpg" />
				</td>
				<td style="width:120px;line-height:15px;text-align:left;"> 
				SP AusNet - 1300 360 795  <img src="images/ticmark.jpg" />
				</td>
				<td style="width:130px;line-height:15px;text-align:left;"> 
				United Energy - 1300 131 689  <img src="images/ticmark.jpg" />
				</td>
				</tr>
			</table>

			<table border="0" cellspacing="0" cellpadding="0" align="center" style="width:100%;">
				<tr><td style="line-height:6px;">&nbsp;</td></tr>
			</table>

			<table border="0" cellspacing="0" cellpadding="0" align="center" style="width:100%;">
			<tr>
				<td style="width:600px;line-height:10px;text-align:center;">
					(EWR) (Submit to responsible retailer or distribution  Company)
				</td>
			</tr>
			</table>
			<table border="0" cellspacing="0" cellpadding="0" align="center" style="width:100%;">
				<tr><td style="line-height:6px;">&nbsp;</td></tr>
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
