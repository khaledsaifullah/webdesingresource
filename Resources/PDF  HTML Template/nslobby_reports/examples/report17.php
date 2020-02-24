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

<p style="font-size:16px;color:#000;line-height:1px;text-align:center;">Installer Detials</p>
<table width="100%" border="0" cellspacing="0" cellpadding="0"  class="data-table">
  <tr>
    <td align="left"   width="50%"><strong> Installer</strong></td>
    <td align="left"   width="50%" ><strong> Installer</strong></td>
  </tr>
  <tr>
    <td align="left"   width="50%" ><strong> Installer Date</strong></td>
    <td align="left"   width="50%" ><strong> Installer (Dates Table)</strong></td>
  </tr>
</table>


<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr><td align="left"  width="100%" style="line-height:20px"></td> </tr>
</table>


<p style="font-size:12px;color:#2e74b5;line-height:1px;">Customer Detials</p>
<table border="0" cellspacing="0" cellpadding="0" width="100%"  class="data-table">
  <tr>
    <td align="left"   width="50%" ><strong> First    name</strong></td>
    <td align="left"   width="50%" >&nbsp;</td>
  </tr>
  <tr>
    <td align="left"   width="50%" ><strong> Last    name</strong></td>
    <td align="left"   width="50%" >&nbsp;</td>
  </tr>
  <tr>
    <td align="left"   width="50%" ><strong> Customer    reference</strong></td>
    <td align="left"   width="50%" >&nbsp;</td>
  </tr>
  <tr>
    <td align="left"   width="50%" ><strong> Install    address</strong></td>
    <td align="left"   width="50%" >&nbsp;</td>
  </tr>
  <tr>
    <td align="left"   width="50%" ><strong> Suburb</strong></td>
    <td align="left"   width="50%" >&nbsp;</td>
  </tr>
  <tr>
    <td align="left"   width="50%" ><strong> Post    Code</strong></td>
    <td align="left"   width="50%" >&nbsp;</td>
  </tr>
  <tr>
    <td align="left"   width="50%" ><strong> Email</strong></td>
    <td align="left"   width="50%" >&nbsp;</td>
  </tr>
  <tr>
    <td align="left"   width="50%" ><strong> Phone1</strong></td>
    <td align="left"   width="50%" >&nbsp;</td>
  </tr>
  <tr>
    <td align="left"   width="50%" ><strong> Phone2</strong></td>
    <td align="left"   width="50%" >&nbsp;</td>
  </tr>
</table>

<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr><td align="left"  width="100%" style="line-height:20px"></td> </tr>
</table>


<table border="0" cellspacing="0" cellpadding="0" width="100%">
  <tr>
    <td align="left"   width="50%" >
    <p style="font-size:12px;color:#2e74b5;line-height:1px;">System/Site Details</p>
	<table border="0" cellspacing="0" cellpadding="0" width="100%"  class="data-table">
      <tr>
        <td align="left"   width="50%"><p> System size (w)</p></td>
        <td align="left"   width="50%"><p><strong>  PV output</strong></p></td>
      </tr>
      <tr>
        <td align="left"   width="50%"><p> Module size(w)</p></td>
        <td align="left"   width="50%"><p> ??</p></td>
      </tr>
      <tr>
        <td align="left"   width="50%"><p> Inverter max DC input</p></td>
        <td align="left"   width="50%"><p> ??</p></td>
      </tr>
      <tr>
        <td align="left"   width="50%"><p> Shade derating</p></td>
        <td align="left"   width="50%"><p> Share derating annual</p></td>
      </tr>
      <tr>
        <td align="left"   width="50%"><p> Tilt</p></td>
        <td align="left"   width="50%"><p><strong>  No of      Panels</strong></p></td>
      </tr>
      <tr>
        <td align="left"   width="50%"><p> Azimuth</p></td>
        <td align="left"   width="50%"><p><strong>  Array      Azimuth (Direction)</strong></p></td>
      </tr>
      <tr>
        <td align="left"   width="50%"><p> Array direction</p></td>
        <td align="left"   width="50%"><p><strong>  Array      Direction</strong></p></td>
      </tr>
      <tr>
        <td align="left"   width="50%"><p> Stories</p></td>
        <td align="left"   width="50%"><p><strong>  No of      stories</strong></p></td>
      </tr>
      <tr>
        <td align="left"   width="50%"><p> No of Phases</p></td>
        <td align="left"   width="50%"><p> Property Details(Number of Phases)</p></td>
      </tr>
      <tr>
        <td align="left"   width="50%"><p> Switch board</p></td>
        <td align="left"   width="50%"><p> Property Details(Switchboard condition)</p></td>
      </tr>
      <tr>
        <td align="left"   width="50%"><p> Meter number</p></td>
        <td align="left"   width="50%"><p> Property Details(Meter number)</p></td>
      </tr>
      <tr>
        <td align="left"   width="50%"><p> NMI</p></td>
        <td align="left"   width="50%"><p> Property Details(NMI)</p></td>
      </tr>
    </table>
    </td>
    <td align="left"   width="2%" ></td>

    <td align="left"   width="48%" >
    <p style="font-size:12px;color:#2e74b5;line-height:1px;">Google satellite Image</p>
    </td>
  </tr>
</table>


<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr><td align="left"  width="100%" style="line-height:20px"></td> </tr>
</table>





<table border="0" cellspacing="0" cellpadding="0" width="100%">
  <tr>
    <td align="left"   width="50%" >
    <p style="font-size:12px;color:#2e74b5;line-height:1px;">List of materials</p>
	<table border="0" cellspacing="0" cellpadding="0" width="100%"  class="data-table">
      <tr>
        <td align="left"   width="50%"><p> List of all stock items</p></td>
        <td align="left"   width="50%"><p><strong>  </strong></p></td>
      </tr>
      <tr>
        <td align="left"   width="50%"><p> ???</p></td>
        <td align="left"   width="50%"><p> </p></td>
      </tr>

    </table>
    </td>
    <td align="left"   width="2%" ></td>

    <td align="left"   width="48%" >
    <p style="font-size:12px;color:#2e74b5;line-height:1px;">Installation notes</p>
    </td>
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
