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
<p  style="line-height:2px;font-size:14px;color:#61a9dd;">SAFE WORK METHOD STATEMENT</p>
<p style="line-height:2px;">1.&nbsp;&nbsp;This SWMS is a site-specific statement that must be prepared before high-risk 
construction work (as defined by WorkSafe Victoria) is commenced. </p>
<p style="line-height:2px;">2.&nbsp;&nbsp;Read and sign this page before work commences.</p>


<p><strong>High-risk job: Installation of solar panels – falling more than 2 meters, working on or near electrical installations or services</strong></p>
<table cellpadding="0" cellspacing="0"  border="0">
	<tr>
    	<td align="right" width="15%"> Responsible person:</td>
    	<td align="left" width="85%"> Brooke Coghlan</td>
    </tr>
	<tr>
    	<td align="right" width="15%"> Installation company:</td>
    	<td align="left" width="85%"> Solar On Electrical</td>
    </tr>
	<tr>
    	<td align="right" width="15%"> Site location:</td>
    	<td align="left" width="85%"> Solar On Electrical, Melbourne VIC 3000 </td>
    </tr>
	<tr>
    	<td align="right" width="15%"> Date:</td>
    	<td align="left" width="85%"> 
			<table border="0" cellspacing="0" cellpadding="0"  width="100%">
			  <tr>
				<td align="left" width="20%"><p style="border-bottom:1px solid #000;line-height:10px;"> </p></td>
				<td align="left" width="80%"></td>
			  </tr>
			</table>
		</td>
    </tr>
</table>


<table border="0" cellspacing="0" cellpadding="0" align="center">
	<tr> <td align="left" style="line-height:10px;">&nbsp;</td>    </tr>
</table>




<table cellpadding="0" cellspacing="0"  border="0"  class="data-table">
	<tr>
    	<td align="left" width="15%"><strong style="line-height:10px;"> What are tasks <span> involved?</span> </strong></td>
    	<td align="left" width="15%"><strong style="line-height:10px;"> What are the <span> hazards and risks?  </span> </strong></td>
    	<td align="left" width="70%"><strong> What are tasks involved?</strong></td>
    </tr>
	<tr>
    	<td align="left" width="15%"> Preparing materials</td>
    	<td align="left" width="15%" style="line-height:10px;"> Use of power tools</td>
    	<td align="left" width="70%"> Always use PPE ie. hearing and eye protection. Tools and leads must be tested and tagged</td>
    </tr>
	<tr>
    	<td align="left" width="15%"> Manual handling</td>
    	<td align="left" width="15%" style="line-height:10px;"> Lifting, loading <span> materials. Back</span> </td>
    	<td align="left" width="70%"> Use correct lifting techniques. Do not exceed 20kg without help.</td>
    </tr>
	
	<tr>
    	<td align="left" width="15%"> Use of ladders</td>
    	<td align="left" width="15%"> Falling</td>
    	<td align="left" width="70%"> Ensure all ladders are tied off and footed securely. </td>
    </tr>


	<tr>
    	<td align="left" width="15%"> Working outdoors</td>
    	<td align="left" width="15%"> Sunburn, sunstroke </td>
    	<td align="left" width="70%"> Wear sunscreen, hat and eye protection. Ensure fluid levels are maintained. </td>
    </tr>



	<tr>
    	<td align="left" width="15%"> Working at heights</td>
    	<td align="left" width="15%"> Falling </td>
    	<td align="left" width="70%"> Use a harness where required. Reference WorkSafe Victoria “Fall protection for roof work”.</td>
    </tr>
	
	<tr>
    	<td align="left" width="15%" style="line-height:10px;"> Working with <span> electricity</span></td>
    	<td align="left" width="15%"  style="line-height:10px;"> Electrocution (death),<span> electric shock</span> </td>
    	<td align="left" width="70%"  style="line-height:10px;"> Do not work live. Ensure all test equipment is in good working order. Always consult electrician if unsure.</td>
    </tr>
	<tr>
    	<td align="left" width="15%"> Site maintenance</td>
    	<td align="left" width="15%"> Trip hazards</td>
    	<td align="left" width="70%"> Ensure site is kept clean and tidy. </td>
    </tr>
	<tr>
    	<td align="left" width="15%"></td>
    	<td align="left" width="15%"></td>
    	<td align="left" width="70%"></td>
    </tr>
	<tr>
    	<td align="left" width="15%"></td>
    	<td align="left" width="15%"></td>
    	<td align="left" width="70%"></td>
    </tr>
	<tr>
    	<td align="left" width="15%"></td>
    	<td align="left" width="15%"></td>
    	<td align="left" width="70%"></td>
    </tr>
</table>


<table border="0" cellspacing="0" cellpadding="0" align="center">
	<tr> <td align="left" style="line-height:30px;">&nbsp;</td>    </tr>
</table>



<table cellpadding="0" cellspacing="0"  border="0">
<tr>
<td align="left"  width="70%">
	<table cellpadding="0" cellspacing="0"  border="0">
		<tr>
			<td align="left" width="50%"><strong style="line-height:10px;"> Contractors/ Employees full name </strong></td>
			<td align="left" width="5%"></td>
			<td align="left" width="20%"><strong style="line-height:10px;"> Signature </strong></td>
			<td align="left" width="5%"></td>
			<td align="left" width="15%"><strong> Date</strong></td>
		</tr>
		<tr><td colspan="5" style="line-height:8px;"></td></tr>
		<tr>
			<td align="left" width="50%"><p style="border-bottom:1px solid #ccc;line-height:10px;"> </p> </td>
			<td align="left" width="5%"></td>
			<td align="left" width="20%"><p style="border-bottom:1px solid #ccc;line-height:10px;"> </p> </td>
			<td align="left" width="5%"></td>
			<td align="left" width="15%"><p style="border-bottom:1px solid #ccc;line-height:10px;"> </p> </td>
		</tr>
		<tr><td colspan="5" style="line-height:8px;"></td></tr>
		<tr>
			<td align="left" width="50%"><p style="border-bottom:1px solid #ccc;line-height:10px;"> </p> </td>
			<td align="left" width="5%"></td>
			<td align="left" width="20%"><p style="border-bottom:1px solid #ccc;line-height:10px;"> </p> </td>
			<td align="left" width="5%"></td>
			<td align="left" width="15%"><p style="border-bottom:1px solid #ccc;line-height:10px;"> </p> </td>
		</tr>
		<tr><td colspan="5" style="line-height:8px;"></td></tr>
		<tr>
			<td align="left" width="50%"><p style="border-bottom:1px solid #ccc;line-height:10px;"> </p> </td>
			<td align="left" width="5%"></td>
			<td align="left" width="20%"><p style="border-bottom:1px solid #ccc;line-height:10px;"> </p> </td>
			<td align="left" width="5%"></td>
			<td align="left" width="15%"><p style="border-bottom:1px solid #ccc;line-height:10px;"> </p> </td>
		</tr>
		<tr><td colspan="5" style="line-height:8px;"></td></tr>
		<tr>
			<td align="left" width="50%"><p style="border-bottom:1px solid #ccc;line-height:10px;"> </p> </td>
			<td align="left" width="5%"></td>
			<td align="left" width="20%"><p style="border-bottom:1px solid #ccc;line-height:10px;"> </p> </td>
			<td align="left" width="5%"></td>
			<td align="left" width="15%"><p style="border-bottom:1px solid #ccc;line-height:10px;"> </p> </td>
		</tr>
	</table>
</td>
<td align="left"  width="2%"></td>
<td align="left"  width="28%"><p style="line-height:130px;font-weight:blod;font-style:italic; font-size:11px;">Installer logo here</p></td>
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
