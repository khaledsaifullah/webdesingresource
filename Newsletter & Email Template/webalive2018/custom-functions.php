<?php
function getOrderIdByHash($hash) {
	global $wpdb;
	$sql = "SELECT * FROM " . $wpdb->prefix . "wa_order_user_check WHERE hash = '" . $hash . "'";
	$user = $wpdb->get_row($sql);
	if (!empty($user)) {
		return $user->order_id;
	}else {
		return "";
	}
}

function getTemplateCategories() {
	$args = array(
		'hide_empty'=> false,
		'taxonomy'  => 'template_category',
		'slug' => 'online-stores'
	);
	$parent = get_categories($args);
	$parent_cat_id = $parent[0]->cat_ID;

	$categories = get_categories( array(
		'orderby'   => 'name',
		'hide_empty'=> false,
		'taxonomy'  => 'template_category',
		'parent'  => $parent_cat_id
	) );
	return $categories;
}

function brief_form_category_save() {
	$order_id = $_REQUEST["order_id"];
	global $wpdb;

	$sql = "SELECT * FROM " . $wpdb->prefix . "wa_brief_form WHERE order_id = '" . $order_id . "'";
	$db_data = $wpdb->get_row($sql);
	if (empty($db_data)) {
		$data = array(
			'order_id'=> $order_id,
			'category'=> json_encode($_REQUEST)
		);
		$wpdb->insert($wpdb->prefix."wa_brief_form", $data);
	}else {
		$data = array(
			'category'=> json_encode($_REQUEST)
		);
		$wpdb->update($wpdb->prefix."wa_brief_form", $data, array('order_id'=> $order_id));
	}
	exit();
}

/**
 * Business Details Form
 */
function brief_form_business_detail_form() {
	$data = $_REQUEST;
	if (isset($data['action'])) {
		unset($data['action']);
	}
	if (isset($data['order_id'])) {
		$order_id = $data['order_id'];
		unset($data['order_id']);
		$status = updateBriefForm('business_detail', $data, $order_id);
		if($status) {
			return true;
		}else{
			return false;
		}
	}else{
		return false;
	}
	exit();
}

/**
 * Business Unique Brand Form
 */
function brief_form_business_unique_brand_form() {
	$data = $_REQUEST;
	if (isset($data['action'])) {
		unset($data['action']);
	}
	if (isset($data['order_id'])) {
		$order_id = $data['order_id'];
		unset($data['order_id']);
		$status = updateBriefForm('business_unique_brand', $data, $order_id);
		if($status) {
			return true;
		}else{
			return false;
		}
	}else{
		return false;
	}
	exit();
}

/**
 * Business Offer Form
 */
function brief_form_business_offer_form() {
	$data = $_REQUEST;
	if (isset($data['action'])) {
		unset($data['action']);
	}
	if (isset($data['order_id'])) {
		$order_id = $data['order_id'];
		unset($data['order_id']);
		$status = updateBriefForm('business_offer', $data, $order_id);
		if($status) {
			return true;
		}else{
			return false;
		}
	}else{
		return false;
	}
	exit();
}

/**
 * Business Assets Form
 */
function brief_form_business_assets_form() {
	$data = $_REQUEST;
	if (isset($data['action'])) {
		unset($data['action']);
	}
	if (isset($data['order_id'])) {
		$order_id = $data['order_id'];
		unset($data['order_id']);
		$status = updateBriefForm('business_website_assets', $data, $order_id);
		if($status) {
			return true;
		}else{
			return false;
		}
	}else{
		return false;
	}
	exit();
}

/**
 * Business Choose Template Form Function
 */
function brief_form_business_choose_template_form() {
	$data = $_REQUEST;
	if (isset($data['action'])) {
		unset($data['action']);
	}
	if (isset($data['order_id'])) {
		$order_id = $data['order_id'];
		unset($data['order_id']);

		$status = updateBriefForm('business_choose_template', $data, $order_id);
		if($status) {
			return true;
		}else{
			return false;
		}
	}else{
		return false;
	}
	exit();
}

/**
 * Business Choose Template Form Function
 */
function brief_form_business_website_custom_design_form() {
	$data = $_REQUEST;
	if (isset($data['action'])) {
		unset($data['action']);
	}
	if (isset($data['order_id'])) {
		$order_id = $data['order_id'];
		unset($data['order_id']);
		$status = updateBriefForm('business_website_custom_design', $data, $order_id);
		if($status) {
			return true;
		}else{
			return false;
		}
	}else{
		return false;
	}
	exit();
}

/**
 * Business Choose Color Function
 */
function brief_form_choose_website_color_form() {
	$data = $_REQUEST;
	if (isset($data['action'])) {
		unset($data['action']);
	}
	if (isset($data['order_id'])) {
		$order_id = $data['order_id'];
		unset($data['order_id']);
		$status = updateBriefForm('business_choose_website_color', $data, $order_id);
		if($status) {
			return true;
		}else{
			return false;
		}
	}else{
		return false;
	}
	exit();
}


/**
 * Business Domain Name Function
 */
function brief_form_business_domain_name_form() {
	$data = $_REQUEST;
	if (isset($data['action'])) {
		unset($data['action']);
	}
	if (isset($data['order_id'])) {
		$order_id = $data['order_id'];
		unset($data['order_id']);
		$status = updateBriefForm('business_domain_name', $data, $order_id);
		if($status) {
			return true;
		}else{
			return false;
		}
	}else{
		return false;
	}
	exit();
}

/**
 * Business Domain Email Function
 */
function brief_form_business_domain_email_form() {
	$data = $_REQUEST;
	if (isset($data['action'])) {
		unset($data['action']);
	}
	if (isset($data['order_id'])) {
		$order_id = $data['order_id'];
		unset($data['order_id']);
		
		$status = updateBriefForm('business_domain_email', $data, $order_id);
		if($status) {
			return $data;
		}else{
			return false;
		}
	}else{
		return false;
	}
	exit();
}

/**
 * Business Online Store Function
 */
function brief_form_business_online_store_form() {
	$data = $_REQUEST;
	if (isset($data['action'])) {
		unset($data['action']);
	}
	if (isset($data['order_id'])) {
		$order_id = $data['order_id'];
		unset($data['order_id']);
		
		$status = updateBriefForm('business_online_store', $data, $order_id);
		if($status) {
			return $data;
		}else{
			return false;
		}
	}else{
		return false;
	}
	exit();
}

/**
 * Business Content Save Form
 */
function brief_form_business_save_form() {
	global $wpdb;
	$data = $_REQUEST;
	if (isset($data['action'])) {
		unset($data['action']);
	}
	if (isset($data['order_id'])) {
		$order_id = $data['order_id'];
		unset($data['order_id']);
		
		$status = $wpdb->update( $wpdb->prefix.'wa_brief_form', array('submit_status'=> $data['save_form']), array('order_id' => $order_id) );


		$to = array(
			'rabiul@bitmascot.com',
			'autobillsmtp@webalive.biz',
			'khalik@bitmascot.com',
			'iman@bitmascot.com'

		);
		$from = 'autobillsmtp@webalive.biz';

		$subject = 'Form Submit Confirmation';

		$message = webalive_email_template($order_id);

		$headers = array('From: Webalive <'.$from.'>');


		//Send the email
		add_filter('wp_mail_content_type', create_function('', 'return "text/html"; '));

		wp_mail($to, $subject, $message, $headers); // mail to user
		//wp_mail($from, $subject, $message, $headers_admin); // mail to admin
		remove_filter('wp_mail_content_type', 'set_html_content_type');

	}else{
		return false;
	}
	exit();
}

function webalive_email_template($order_id) {
	global $wpdb;
	global $post;
	$results = $wpdb->get_results(
		$wpdb->prepare( "SELECT * FROM ".$wpdb->prefix."wa_brief_form WHERE order_id=%d", $order_id )
	);

	$template = json_decode($results[0]->business_choose_template, true);
	if(!empty($template['temp_id'])) {
		$get_post_id = explode( '-', $template['temp_id'] );
		$post_id = $get_post_id[1];
	}

	$category = json_decode($results[0]->category, true);
	$business_detail = json_decode($results[0]->business_detail, true);
	$business_unique_brand = json_decode($results[0]->business_unique_brand, true);
	$business_offer = json_decode($results[0]->business_offer, true);
	$business_website_assets = json_decode($results[0]->business_website_assets, true);
	$business_choose_template = json_decode($results[0]->business_choose_template, true);
	$business_website_custom_design = json_decode($results[0]->business_website_custom_design, true);
	$business_choose_website_color = json_decode($results[0]->business_choose_website_color, true);
	$business_domain_name = json_decode($results[0]->business_domain_name, true);
	$business_domain_email = json_decode($results[0]->business_domain_email, true);
	$business_online_store = json_decode($results[0]->business_online_store, true);

	// Business Details data 
	if(isset($business_website_assets['website_logo'])){
		$logo_files = $business_website_assets['website_logo'];
	}
	if(isset($business_website_assets['website_banner'])) {
		$banner_files = $business_website_assets['website_banner'];
	}
	if(isset($business_website_assets['website_content'])) {
		$content_files = $business_website_assets['website_content'];
	}

	// Business Online Store data 
	if(isset($business_online_store['website_excel_files'])) {
		$excel_files = $business_online_store['website_excel_files'] ;
	}
	if(isset($business_online_store['website_product_images'])) {
		$product_image_files = $business_online_store['website_product_images'] ;
	}

	$payment_methods = '';
	if(isset($business_online_store['payment_gateway'])) {
		$payment_methods = implode(', ', $business_online_store['payment_gateway']);
	}

	// Business Details Data
	$name 		= isset($business_detail['business_detail']['firstname']) ? $business_detail['business_detail']['firstname'] : '';
	$phone 		= isset($business_detail['business_detail']['phone']) ? $business_detail['business_detail']['phone'] : '';
	$email 		= isset($business_detail['business_detail']['email']) ? $business_detail['business_detail']['email'] : '';
	$address 	= isset($business_detail['business_detail']['address']) ? $business_detail['business_detail']['address'] : '';
	$city 		= isset($business_detail['business_detail']['city']) ? $business_detail['business_detail']['city'] : '';
	$post_code 	= isset($business_detail['business_detail']['post_code']) ? $business_detail['business_detail']['post_code'] : '';
	$state 		= isset($business_detail['business_detail']['state']) ? $business_detail['business_detail']['state'] : '';

	// Social Media data
	$facebook 		= isset($business_detail['social_media']['facebook']) ? $business_detail['social_media']['facebook'] : '';
	$twitter		= isset($business_detail['social_media']['twitter']) ? $business_detail['social_media']['twitter'] : '';
	$linkedin 		= isset($business_detail['social_media']['linkedin']) ? $business_detail['social_media']['linkedin'] : '';
	$google_plus 	= isset($business_detail['social_media']['google-plus']) ? $business_detail['social_media']['google-plus'] : '';
	$youtube 		= isset($business_detail['social_media']['youtube']) ? $business_detail['social_media']['youtube'] : '';
	$pinterest 		= isset($business_detail['social_media']['pinterest']) ? $business_detail['social_media']['pinterest'] : '';

$email_template = '
<table style="font-family:Arial, Helvetica, sans-serif;color: #676767" cellspacing="0" cellpadding="0" border="0" bgcolor="#f2f2f2" width="100%">
  <tbody>
    <tr><td height="40">&nbsp;</td></tr>
    <tr>
      <td align="center">
         <table cellspacing="0" cellpadding="0" border="0" bgcolor="#ffffff" width="750">
           	<tbody>
			<tr><td colspan="3" height="40">&nbsp;</td></tr>
            <tr>
              <td width="40">&nbsp;</td>
              <td align="left" style="text-align:left;"><a href="https://www.webalive.com.au/"><img alt="WebAlive" src="https://33t2km132djh3q21qa47elmw-wpengine.netdna-ssl.com/wp-content/themes/webalive/images/logo.png" /></a></td>
              <td width="40">&nbsp;</td>
            </tr>
            <tr><td colspan="3" height="60">&nbsp;</td></tr>
			<tr>
              <td width="40">&nbsp;</td>
              <td align="left">
              <table width="100%" cellspacing="0" cellpadding="0" border="0" align="left"> 
                        <tbody><tr>
                        <td style="line-height:20px;color:#000;font-size:14px; font-weight:bold;text-align:left;font-family:Arial, Helvetica, sans-serif;" valign="top" align="left">Dear XYZ,</td></tr>
                    	<tr>
                        <td style="line-height:20px;color:#000;font-size:14px; font-weight:normal;text-align:left;font-family:Arial, Helvetica, sans-serif;" valign="top" align="left">Thank you for ordering products from WebAlive. The following are the details of your order:</td></tr>
                    </tbody></table>
              </td>
              <td width="40">&nbsp;</td>
            </tr>			
			<tr><td colspan="3" height="35"></td></tr>			
   			<tr>
              <td width="40">&nbsp;</td>
              <td align="left">
              <table width="100%" cellspacing="0" cellpadding="0" border="0" align="left"> 
                        <tbody><tr>
                        <td style="line-height:20px;color:#000;font-size:14px; font-weight:bold;text-align:left;font-family:Arial, Helvetica, sans-serif;" valign="top" align="left">Invoice ID - 001</td></tr>
                    	<tr>
                        <td style="line-height:20px;color:#000;font-size:14px; font-weight:normal;text-align:left;font-family:Arial, Helvetica, sans-serif;" valign="top" align="left">Date:03/07/2018</td></tr>
                    </tbody></table>
              </td>
              <td width="40">&nbsp;</td>
            </tr>         
<tr><td colspan="3" height="35"></td></tr>
<table cellspacing="0" cellpadding="0" border="0" width="100%">
  <thead>
    <tr bgcolor="#f4f4f4">
      <th width="100%" colspan="2" align="left" style="padding-left:15px;padding-top:8px;padding-bottom:8px;color:#000000;font-size:16px;font-family:Arial, Helvetica, sans-serif;">User Info</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td width="40%" align="left"   valign="top"  style="padding-top:15px;padding-bottom:8px;color:#000000;font-size:16px;font-family:Arial, Helvetica, sans-serif;">Category: </td>
      <td width="60%" align="left"   valign="top"  style="padding-top:15px;padding-bottom:8px;color:#000000;font-size:16px;font-family:Arial, Helvetica, sans-serif;">
	  '.$category['category_name'].'
	  </td>
    </tr>
    <tr>
      <td width="40%" align="left"   valign="top"  style="padding-top:8px;padding-bottom:8px;color:#000000;font-size:16px;font-family:Arial, Helvetica, sans-serif;">Name: </td>
      <td width="60%" align="left"   valign="top"  style="padding-top:8px;padding-bottom:8px;color:#000000;font-size:16px;font-family:Arial, Helvetica, sans-serif;">
	  '.$name.'
	  </td>
    </tr>
    <tr>
      <td width="40%" align="left"   valign="top"  style="padding-top:8px;padding-bottom:8px;color:#000000;font-size:16px;font-family:Arial, Helvetica, sans-serif;">Address: </td>
      <td width="60%" align="left"   valign="top"  style="padding-top:8px;padding-bottom:8px;color:#000000;font-size:16px;font-family:Arial, Helvetica, sans-serif;">
	  '.$address.'
	  </td>
    </tr>
    <tr>
      <td width="40%" align="left"   valign="top"  style="padding-top:8px;padding-bottom:8px;color:#000000;font-size:16px;font-family:Arial, Helvetica, sans-serif;">Phone: </td>
        <td width="60%" align="left"   valign="top"  style="padding-top:8px;padding-bottom:8px;color:#000000;font-size:16px;font-family:Arial, Helvetica, sans-serif;">
      	<a href="tel:'.$phone.'" style="color:#f47520; text-decoration:none;">'.$phone.'</a>
	  </td>
    </tr>
    <tr>
      <td width="40%" align="left"   valign="top"  style="padding-top:8px;padding-bottom:8px;color:#000000;font-size:16px;font-family:Arial, Helvetica, sans-serif;">Email: </td>
        <td width="60%" align="left"   valign="top"  style="padding-top:8px;padding-bottom:8px;color:#000000;font-size:16px;font-family:Arial, Helvetica, sans-serif;">
      	<a href="mailto:'.$email.'" style="color:#f47520; text-decoration:none;">'.$email.'</a>
	  </td>
    </tr>
    <tr>
      <td width="40%" align="left"   valign="top"  style="padding-top:8px;padding-bottom:8px;color:#000000;font-size:16px;font-family:Arial, Helvetica, sans-serif;">City </td>
      <td width="60%" align="left"   valign="top"  style="padding-top:8px;padding-bottom:8px;color:#000000;font-size:16px;font-family:Arial, Helvetica, sans-serif;">
	  '.$city.'
	  </td>
    </tr>
    <tr>
      <td width="40%" align="left"   valign="top"  style="padding-top:8px;padding-bottom:8px;color:#000000;font-size:16px;font-family:Arial, Helvetica, sans-serif;">Postcode </td>
      <td width="60%" align="left"   valign="top"  style="padding-top:8px;padding-bottom:8px;color:#000000;font-size:16px;font-family:Arial, Helvetica, sans-serif;">
	  '.$post_code.'
	  </td>
    </tr>
    <tr>
      <td width="40%" align="left"   valign="top"  style="padding-top:8px;padding-bottom:8px;color:#000000;font-size:16px;font-family:Arial, Helvetica, sans-serif;">State </td>
      <td width="60%" align="left"   valign="top"  style="padding-top:8px;padding-bottom:8px;color:#000000;font-size:16px;font-family:Arial, Helvetica, sans-serif;">
	  '.$state.'
	  </td>
    </tr>
  </tbody>
</table>
<tr><td colspan="3" height="35"></td></tr>			
<tr><td colspan="3" height="35"></td></tr>
<table cellspacing="0" cellpadding="0" border="0" width="100%">
  <thead>
    <tr bgcolor="#f4f4f4">
      <th width="100%" colspan="2" align="left" style="padding-left:15px;padding-top:8px;padding-bottom:8px;color:#000000;font-size:16px;font-family:Arial, Helvetica, sans-serif;">Social Media</th>
    </tr>
  </thead>
  <tbody>
      <tr>
	  <td width="40%" align="left"   valign="top"  style="padding-top:15px;padding-bottom:8px;color:#000000;font-size:16px;font-family:Arial, Helvetica, sans-serif;">Facebook: </td>
        <td width="60%" align="left"   valign="top"  style="padding-top:15px;padding-bottom:8px;color:#000000;font-size:16px;font-family:Arial, Helvetica, sans-serif;">
      	<a href="'.$facebook.'" target="_blank" style="color:#f47520; text-decoration:none;">'.$facebook.'</a>
	  </td>
    </tr>
      <tr>
	  <td width="40%" align="left"   valign="top"  style="padding-top:8px;padding-bottom:8px;color:#000000;font-size:16px;font-family:Arial, Helvetica, sans-serif;">Twitter: </td>
        <td width="60%" align="left"   valign="top"  style="padding-top:8px;padding-bottom:8px;color:#000000;font-size:16px;font-family:Arial, Helvetica, sans-serif;">
      	<a href="'.$twitter.'" target="_blank" style="color:#f47520; text-decoration:none;">'.$twitter.'</a>
	  </td>
    </tr>
  <tr>
	  <td width="40%" align="left"   valign="top"  style="padding-top:8px;padding-bottom:8px;color:#000000;font-size:16px;font-family:Arial, Helvetica, sans-serif;">Linkedin: </td>
        <td width="60%" align="left"   valign="top"  style="padding-top:8px;padding-bottom:8px;color:#000000;font-size:16px;font-family:Arial, Helvetica, sans-serif;">
      	<a href="'.$linkedin.'" target="_blank" style="color:#f47520; text-decoration:none;">'.$linkedin.'</a>
	  </td>
    </tr>
  <tr>
	  <td width="40%" align="left"   valign="top"  style="padding-top:8px;padding-bottom:8px;color:#000000;font-size:16px;font-family:Arial, Helvetica, sans-serif;">Youtube: </td>
        <td width="60%" align="left"   valign="top"  style="padding-top:8px;padding-bottom:8px;color:#000000;font-size:16px;font-family:Arial, Helvetica, sans-serif;">
      	<a href="'.$youtube.'" target="_blank" style="color:#f47520; text-decoration:none;">'.$youtube.'</a>
	  </td>
    </tr>
  <tr>
	  <td width="40%" align="left"   valign="top"  style="padding-top:8px;padding-bottom:8px;color:#000000;font-size:16px;font-family:Arial, Helvetica, sans-serif;">Pinterest: </td>
        <td width="60%" align="left"   valign="top"  style="padding-top:8px;padding-bottom:8px;color:#000000;font-size:16px;font-family:Arial, Helvetica, sans-serif;">
      	<a href="'.$pinterest.'" target="_blank" style="color:#f47520; text-decoration:none;">'.$pinterest.'</a>
	  </td>
    </tr>
    <tr>
      <td width="40%" align="left"   valign="top"  style="padding-top:8px;padding-bottom:8px;color:#000000;font-size:16px;font-family:Arial, Helvetica, sans-serif;">Postcode </td>
      <td width="60%" align="left"   valign="top"  style="padding-top:8px;padding-bottom:8px;color:#000000;font-size:16px;font-family:Arial, Helvetica, sans-serif;">
	  '.$post_code.'
	  </td>
    </tr>
  </tbody>
</table>
<tr><td colspan="3" height="35"></td></tr>			
<tr><td colspan="3" height="35"></td></tr>
<table cellspacing="0" cellpadding="0" border="0" width="100%">
  <thead>
    <tr bgcolor="#f4f4f4">
      <th width="100%" colspan="2" align="left" style="padding-left:15px;padding-top:8px;padding-bottom:8px;color:#000000;font-size:16px;font-family:Arial, Helvetica, sans-serif;">Business Details</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td width="40%" align="left"   valign="top"  style="padding-top:15px;padding-bottom:8px;color:#000000;font-size:16px;font-family:Arial, Helvetica, sans-serif;">Business Name: </td>
      <td width="60%" align="left"   valign="top"  style="padding-top:15px;padding-bottom:8px;color:#000000;font-size:16px;font-family:Arial, Helvetica, sans-serif;">
	  '.$category['category_name'].'
	  </td>
    </tr>
    <tr>
      <td width="40%" align="left"   valign="top"  style="padding-top:8px;padding-bottom:8px;color:#000000;font-size:16px;font-family:Arial, Helvetica, sans-serif;">Your Business: </td>
      <td width="60%" align="left"   valign="top"  style="padding-top:8px;padding-bottom:8px;color:#000000;font-size:16px;font-family:Arial, Helvetica, sans-serif;">
	   &nbsp;
	  </td>
    </tr>
    <tr>
      <td width="40%" align="left"   valign="top"  style="padding-top:8px;padding-bottom:8px;color:#000000;font-size:16px;font-family:Arial, Helvetica, sans-serif;">Tell us a bit about your business: </td>
      <td width="60%" align="left"   valign="top"  style="padding-top:8px;padding-bottom:8px;color:#000000;font-size:16px;font-family:Arial, Helvetica, sans-serif;">
	  '.$business_unique_brand['about_business'].'
	  </td>
    </tr>
    <tr>
      <td width="40%" align="left"   valign="top"  style="padding-top:8px;padding-bottom:8px;color:#000000;font-size:16px;font-family:Arial, Helvetica, sans-serif;">Tell us a bit about your business: </td>
      <td width="60%" align="left"   valign="top"  style="padding-top:8px;padding-bottom:8px;color:#000000;font-size:16px;font-family:Arial, Helvetica, sans-serif;">
	  '.$business_unique_brand['business_hours'].'
	  </td>
    </tr>
   <tr>
      <td width="40%" align="left"   valign="top"  style="padding-top:8px;padding-bottom:8px;color:#000000;font-size:16px;font-family:Arial, Helvetica, sans-serif;">What is your business hours? </td>
      <td width="60%" align="left"   valign="top"  style="padding-top:8px;padding-bottom:8px;color:#000000;font-size:16px;font-family:Arial, Helvetica, sans-serif;">
	  '.$business_unique_brand['business_hours'].'
	  </td>
    </tr>
   <tr>
       <td width="40%" align="left"   valign="top"  style="padding-top:8px;padding-bottom:8px;color:#000000;font-size:16px;font-family:Arial, Helvetica, sans-serif;">What makes your business different from the rest? </td>
      <td width="60%" align="left"   valign="top"  style="padding-top:8px;padding-bottom:8px;color:#000000;font-size:16px;font-family:Arial, Helvetica, sans-serif;">
	  '.$business_unique_brand['business_uniqueness'].'
	  </td>
    </tr>
 	<tr>
        <td width="40%" align="left"   valign="top"  style="padding-top:8px;padding-bottom:8px;color:#000000;font-size:16px;font-family:Arial, Helvetica, sans-serif;">Tell us more?</td>
      <td width="60%" align="left"   valign="top"  style="padding-top:8px;padding-bottom:8px;color:#000000;font-size:16px;font-family:Arial, Helvetica, sans-serif;">
	  '.$business_offer['business_offer_content'].'
	  </td>
    </tr>
	<tr>
      <td width="40%" align="left"   valign="top"  style="padding-top:8px;padding-bottom:8px;color:#000000;font-size:16px;font-family:Arial, Helvetica, sans-serif;"><b>Uploaded Files</b></td>
      <td width="60%" align="left"   valign="top"  style="padding-top:8px;padding-bottom:8px;color:#000000;font-size:16px;font-family:Arial, Helvetica, sans-serif;">
	   &nbsp;
	  </td>
    </tr> 
      <tr>
	    <td width="40%" align="left"   valign="top"  style="padding-top:8px;padding-bottom:8px;color:#000000;font-size:16px;font-family:Arial, Helvetica, sans-serif;">Logo</td>
      <td width="60%" align="left"   valign="top"  style="padding-top:8px;padding-bottom:8px;color:#000000;font-size:16px;font-family:Arial, Helvetica, sans-serif;">
	  '.email_logo_files($logo_files).'
	  </td>
    </tr>
	<tr>
        <td width="40%" align="left"   valign="top"  style="padding-top:8px;padding-bottom:8px;color:#000000;font-size:16px;font-family:Arial, Helvetica, sans-serif;">Images</td>
      <td width="60%" align="left"   valign="top"  style="padding-top:8px;padding-bottom:8px;color:#000000;font-size:16px;font-family:Arial, Helvetica, sans-serif;">
	  '.email_banner_files($banner_files).'
	  </td>
    </tr>
	<tr>
        <td width="40%" align="left"   valign="top"  style="padding-top:8px;padding-bottom:8px;color:#000000;font-size:16px;font-family:Arial, Helvetica, sans-serif;">Content</td>
      <td width="60%" align="left"   valign="top"  style="padding-top:8px;padding-bottom:8px;color:#000000;font-size:16px;font-family:Arial, Helvetica, sans-serif;">
	  '.email_content_files($content_files).'
	  </td>
    </tr>
 	<tr>
        <td width="40%" align="left"   valign="top"  style="padding-top:8px;padding-bottom:8px;color:#000000;font-size:16px;font-family:Arial, Helvetica, sans-serif;"><b>Design</b></td>
      <td width="60%" align="left"   valign="top"  style="padding-top:8px;padding-bottom:8px;color:#000000;font-size:16px;font-family:Arial, Helvetica, sans-serif;">
	  &nbsp;
	  </td>
    </tr>
	<tr>
        <td width="40%" align="left"   valign="top"  style="padding-top:8px;padding-bottom:8px;color:#000000;font-size:16px;font-family:Arial, Helvetica, sans-serif;">Selected Color</td>
      <td width="60%" align="left"   valign="top"  style="padding-top:8px;padding-bottom:8px;color:#000000;font-size:16px;font-family:Arial, Helvetica, sans-serif;">
	  '.$business_choose_website_color['choose_color'].'
	  </td>
    </tr>
	<tr>
        <td width="40%" align="left"   valign="top"  style="padding-top:8px;padding-bottom:8px;color:#000000;font-size:16px;font-family:Arial, Helvetica, sans-serif;">Preview</td>
      <td width="60%" align="left"   valign="top"  style="padding-top:8px;padding-bottom:8px;color:#000000;font-size:16px;font-family:Arial, Helvetica, sans-serif;">
	  '.fetch_template_image($post_id).'
	  </td>
    </tr>
 	<tr>
        <td width="40%" align="left"   valign="top"  style="padding-top:8px;padding-bottom:8px;color:#000000;font-size:16px;font-family:Arial, Helvetica, sans-serif;"><b>Uploaded Files</b></td>
      <td width="60%" align="left"   valign="top"  style="padding-top:8px;padding-bottom:8px;color:#000000;font-size:16px;font-family:Arial, Helvetica, sans-serif;">
	  &nbsp;
	  </td>
    </tr>
	<tr>
        <td width="40%" align="left"   valign="top"  style="padding-top:8px;padding-bottom:8px;color:#000000;font-size:16px;font-family:Arial, Helvetica, sans-serif;">Product Excel Files:</td>
      <td width="60%" align="left"   valign="top"  style="padding-top:8px;padding-bottom:8px;color:#000000;font-size:16px;font-family:Arial, Helvetica, sans-serif;">
	  '.email_excel_content($excel_files).'
	  </td>
    </tr>
	<tr>
        <td width="40%" align="left"   valign="top"  style="padding-top:8px;padding-bottom:8px;color:#000000;font-size:16px;font-family:Arial, Helvetica, sans-serif;">Website Images:</td>
      <td width="60%" align="left"   valign="top"  style="padding-top:8px;padding-bottom:8px;color:#000000;font-size:16px;font-family:Arial, Helvetica, sans-serif;">
	  '.email_product_image_files($product_image_files).'
	  </td>
    </tr>

	<tr>
        <td width="40%" align="left"   valign="top"  style="padding-top:8px;padding-bottom:8px;color:#000000;font-size:16px;font-family:Arial, Helvetica, sans-serif;">Payment Gateway</td>
      <td width="60%" align="left"   valign="top"  style="padding-top:8px;padding-bottom:8px;color:#000000;font-size:16px;font-family:Arial, Helvetica, sans-serif;">
	  '.$payment_methods.'
	  </td>
    </tr>
 
 
	<tr>
        <td width="40%" align="left"   valign="top"  style="padding-top:8px;padding-bottom:8px;color:#000000;font-size:16px;font-family:Arial, Helvetica, sans-serif;">Shipping Rules:</td>
      <td width="60%" align="left"   valign="top"  style="padding-top:8px;padding-bottom:8px;color:#000000;font-size:16px;font-family:Arial, Helvetica, sans-serif;">
	  '.ucwords($business_online_store['shipping_rules']).'
	  </td>
    </tr>
	<tr>
        <td width="40%" align="left"   valign="top"  style="padding-top:8px;padding-bottom:8px;color:#000000;font-size:16px;font-family:Arial, Helvetica, sans-serif;"><b>Domain</b></td>
      <td width="60%" align="left"   valign="top"  style="padding-top:8px;padding-bottom:8px;color:#000000;font-size:16px;font-family:Arial, Helvetica, sans-serif;">
	  &nbsp;
	  </td>
    </tr>
	<tr>
        <td width="40%" align="left"   valign="top"  style="padding-top:8px;padding-bottom:8px;color:#000000;font-size:16px;font-family:Arial, Helvetica, sans-serif;">Domain Name</td>
      <td width="60%" align="left"   valign="top"  style="padding-top:8px;padding-bottom:8px;color:#000000;font-size:16px;font-family:Arial, Helvetica, sans-serif;">
	  '.$business_domain_name['domain_name'].'
	  </td>
    </tr>
	<tr>
        <td width="40%" align="left"   valign="top"  style="padding-top:8px;padding-bottom:8px;color:#000000;font-size:16px;font-family:Arial, Helvetica, sans-serif;">Domain Email Address</td>
      <td width="60%" align="left"   valign="top"  style="padding-top:8px;padding-bottom:8px;color:#000000;font-size:16px;font-family:Arial, Helvetica, sans-serif;">
	  '.$business_domain_email['domain_email_detail'].'
	  </td>
    </tr>
  </tbody>
</table>
<tr><td colspan="3" height="35"></td></tr>			
			</tbody>
        </table>
        </td>
    </tr>
    <tr>
      <td height="40">&nbsp;</td>
    </tr>
  </tbody>
</table>';
	
	/*$email_template = '
	<table>
		<tr>
			<th colspan="2"><h3>User Info</h3></th>
		</tr>
		<tr>
			<th>Category:</th>
			<td>'.$category['category_name'].'</td>
		</tr>
		<tr>
			<th>Name:</th>
			<td>'.$name.'</td>
		</tr>
		<tr>
			<th>Address:</th>
			<td>'.$address.'</td>
		</tr>
		<tr>
			<th>Phone:</th>
			<td>'.$phone.'</td>
		</tr>
		<tr>
			<th>Email:</th>
			<td>'.$email.'</td>
		</tr>
		<tr>
			<th>City</th>
			<td>'.$city.'</td>
		</tr>
		<tr>
			<th>Postcode</th>
			<td>'.$post_code.'</td>
		</tr>
		<tr>
			<th>State</th>
			<td>'. $state.'</td>
		</tr>
		<tr>
			<th colspan="2"><h3>Social Media</h3></th>
		</tr>
		<tr>
			<th>Facebook</th>
			<td>'.$facebook.'</td>
		</tr>
		<tr>
			<th>Twitter</th>
			<td>'.$twitter.'</td>
		</tr>
		<tr>
			<th>Linkedin</th>
			<td>'.$linkedin.'</td>
		</tr>
		<tr>
			<th>Youtube</th>
			<td>'.$youtube.'</td>
		</tr>
		<tr>
			<th>Pinterest</th>
			<td>'.$pinterest.'</td>
		</tr>
		<tr>
			<th colspan="2"><h3>Business Details</h3></th>
		</tr>
		<tr>
			<th>Business Name</th>
			<td>'.$category['category_name'].'</td>
		</tr>
		<tr>
			<th>Your Business</th>
		</tr>
		<tr>
			<th>Tell us a bit about your business</th>
			<td>'.$business_unique_brand['about_business'].'</td>
		</tr>
		<tr>
			<th>What is your business hours?</th>
			<td>'.$business_unique_brand['business_hours'].'</td>
		</tr>
		<tr>
			<th>What makes your business different from the rest?</th>
			<td>'.$business_unique_brand['business_uniqueness'].'</td>
		</tr>
		<tr>
			<th>Tell us more?</th>
			<td>'.$business_offer['business_offer_content'].'</td>
		</tr>
		<tr>
			<th>Uploaded Files</th>
		</tr>
		<tr>
			<th>Logo</th>
			<td>'.email_logo_files($logo_files).'</td>
		</tr>
		<tr>
			<th>Images</th>
			<td>'.email_banner_files($banner_files).'</td>
		</tr>
		<tr>
			<th>Content</th>
			<td>'.email_content_files($content_files).'</td>
		</tr>
		<tr>
			<th><h3>Design</h3></th>
		</tr>
		<tr>
			<th>Selected Color:</th>
			<td>'.$business_choose_website_color['choose_color'].'</td>
		</tr>
		<tr>
			<th>Preview</th>
			<td>'.fetch_template_image($post_id).'</td>
		</tr>
		<tr>
			<th>Uploaded Files</th>
		</tr>
		<tr>
			<th>Product Excel Files: </th>
			<td>'.email_excel_content($excel_files).'</td>
		</tr>
		<tr>
			<th>Website Images: </th>
			<td>'.email_product_image_files($product_image_files).'</td>
		</tr>
		<tr>
			<th>Payment Gateway</th>
			<td>'.$payment_methods.'</td>
		</tr>
		<tr>
			<th>Shipping Rules</th>
			<td>'.ucwords($business_online_store['shipping_rules']).'</td>
		</tr>
		<?php endif; ?>
		<tr>
			<th><h3>Domain</h3></th>
		</tr>
		<tr>
			<th>Domain Name</th>
			<td>'.$business_domain_name['domain_name'].'</td>
		</tr>
		<tr>
			<th>Domain Email Address</th>
			<td>'.$business_domain_email['domain_email_detail'].'</td>
		</tr>
	</table>
	';*/

	return $email_template;
}

function fetch_template_image($post_id) {
	$loop = new WP_Query(array( 'p' => $post_id, 'post_type' => 'templates' ));
	while( $loop->have_posts() ) : $loop->the_post();
		the_post_thumbnail('full');
	endwhile;
}
function email_logo_files($logo_files) {
	if( !empty($logo_files) ) {
		foreach( $logo_files as $key=>$value ) {
			$logo_file = explode('/', $value);
			$logo_name = end( $logo_file );
			return '<a href="'.home_url('/').$value.'" target="_blank" download><span>'.$logo_name.'</span></a>';
		}
	}
}
function email_banner_files($banner_files) {
	if( !empty($banner_files) ) {
		foreach( $banner_files as $key=>$value ) {
			$banner_file = explode('/', $value);
			$banner_name = end( $banner_file );
			return '<a href="'.home_url('/').$value.'" target="_blank" download><span>'.$banner_name.'</span></a>';
		}
	}
}
function email_content_files($content_files) {
	if( !empty($content_files) ) {
		foreach( $content_files as $key=>$value ) {
			$content_file = explode('/', $value);
			$content_name = end( $content_file );
			return '<a href="'.home_url('/').$value.'" target="_blank" download><span>'.$content_name.'</span></a>';
		}
	}
}
function email_product_image_files($product_image_files) {
	if( !empty($product_image_files) ) {
		foreach( $product_image_files as $key=>$value ) {
			$product_image_file = explode('/', $value);
			$product_image_name = end( $product_image_file );
			return '<a href="'.home_url('/').$value.'" target="_blank" download><span>'.$product_image_name.'</span></a>';
		}
	}
}
function email_excel_content($excel_files) {
	if( !empty($excel_files) ) {
		foreach( $excel_files as $key=>$value ) {
			$excel_file = explode('/', $value);
			$excel_name = end( $excel_file );
			return '<a href="'.home_url('/').$value.'" target="_blank" download><span>'.$excel_name.'</span></a>';
		}
	}
}

/**
 * Fetch Brief FOrm Field Data When Comeback
 */
function getBriefFormFieldData($field_name, $order_id) {
	global $wpdb;
	$sql = "SELECT ".$field_name." FROM " . $wpdb->prefix . "wa_brief_form WHERE order_id = '" . $order_id . "'";
	$data = $wpdb->get_var($sql);
	$output = '';
	if(!empty($data)) {
		$output = $data;
	}
	return $output;
}

/**
 * Update Brief Fomr Data
 */
function updateBriefForm($field_name, $data, $order_id) {
	global $wpdb;
	if( !empty($data) ) {
		$formatted_data = array(
			$field_name => json_encode($data)
		);
		if($order_id > 0) {
			$status = $wpdb->update($wpdb->prefix . "wa_brief_form", $formatted_data, array('order_id' => $order_id));
			if($status) {
				return true;
			}else{
				return false;
			}
		}
	}
}

function get_brief_form_field_data() {
	$field_name = $_REQUEST['field_name'];
	$order_id = $_REQUEST['order_id'];
	$data = getBriefFormFieldData($field_name, $order_id);
	echo $data;
	exit();
}

/**
 * Fetch Selected Template ans pass it to view through Ajax
 */
function fetch_selected_template() {
    $order_id = $_REQUEST['order_id'];
	global $wpdb;
    $results = $wpdb->get_results(
        $wpdb->prepare( "SELECT business_choose_template FROM ".$wpdb->prefix."wa_brief_form WHERE order_id=%d", $order_id )
    );
	$results = json_decode($results[0]->business_choose_template, true);
	if( !empty($results['temp_id']) ) {
		$post_id = $results['temp_id'];
		
		$loop = new WP_Query( array( 'p' => $post_id, 'post_type' => 'templates' ) );
		while( $loop->have_posts() ) : $loop->the_post();
            $color_1 = get_post_meta( $post_id, 'colour_1', true );
            $color_2 = get_post_meta( $post_id, 'colour_2', true );
            $color_3 = get_post_meta( $post_id, 'colour_3', true );
            $color_4 = get_post_meta( $post_id, 'colour_4', true );
            $color_5 = get_post_meta( $post_id, 'colour_5', true );
            ?>
            <div class="choose-color-wrap">
            <?php
            if( !empty($color_1) ) {
                ?>
                <div class="choose-color" style="width: 40px; height: 40px; background-color: <?php echo esc_attr($color_1); ?>">
                    <input type="radio" name="choose_color" value="<?php echo esc_attr($color_1); ?>" data-check="off">
					<div class="control-check" style="background-color: <?php echo esc_attr($color_1); ?>"></div>
                </div>
                <?php
            }
            if( !empty($color_2) ) {
                ?>
                <div class="choose-color" style="width: 40px; height: 40px; background-color: <?php echo esc_attr($color_2); ?>">
                    <input type="radio" name="choose_color" value="<?php echo esc_attr($color_2); ?>" data-check="off">
					<div class="control-check" style="background-color: <?php echo esc_attr($color_2); ?>"></div>
                </div>
                <?php
            }
            if( !empty($color_3) ) {
                ?>
                <div class="choose-color" style="width: 40px; height: 40px; background-color: <?php echo esc_attr($color_3); ?>">
                    <input type="radio" name="choose_color" value="<?php echo esc_attr($color_3); ?>" data-check="off">
					<div class="control-check" style="background-color: <?php echo esc_attr($color_3); ?>"></div>
                </div>
                <?php
            }
            if( !empty($color_4) ) {
                ?>
                <div class="choose-color" style="width: 40px; height: 40px; background-color: <?php echo esc_attr($color_4); ?>">
                    <input type="radio" name="choose_color" value="<?php echo esc_attr($color_4); ?>" data-check="off">
					<div class="control-check" style="background-color: <?php echo esc_attr($color_4); ?>"></div>
                </div>
                <?php
            }
            if( !empty($color_5) ) {
                ?>
                <div class="choose-color" style="width: 40px; height: 40px; background-color: <?php echo esc_attr($color_5); ?>">
                    <input type="radio" name="choose_color" value="<?php echo esc_attr($color_5); ?>" data-check="off">
					<div class="control-check" style="background-color: <?php echo esc_attr($color_5); ?>"></div>
                </div>
                <?php
            }
            ?>
            </div>
			<div class="selected-template">
				<?php the_post_thumbnail('full'); ?>
			</div>
            <div class="view-more-template text-center">
				<button type="button" class="common-btn previous"><i class="fa fa-angle-left"></i> View All Template</button>
            </div>
            <?php
        endwhile;
	}else {
		?>
		<p class="text-danger">No Template Selected</p>
		<?php
	}
    	
	exit();
}

/**
 * Fetch Ttemplates by Selected Category and pass it through Ajax
 */
function fetch_templates_by_category() {
	$order_id = $_REQUEST['order_id'];
	$order_detail = getOrderDetails($order_id);
	$theme_id = $order_detail['order']['theme_id'];
	?>
	<div class="template-carousel" id="template-carousel">
	<?php  
		global $wpdb;
		global $post;
		$results = $wpdb->get_results(
			$wpdb->prepare( "SELECT category FROM ".$wpdb->prefix."wa_brief_form WHERE order_id=%d", $order_id )
		);
		$results = json_decode($results[0]->category, true);
		
		// Check package option
		$options = $wpdb->get_results(
			$wpdb->prepare( "SELECT option_name FROM ".$wpdb->prefix."wa_order_details WHERE order_id=%d && option_type=%s", $order_id, 'pricing_plan' )
		);

		// var_dump($options[0]->option_name);

		// With Selected Category
		$args = array(
			'posts_per_page' => -1,
			'post_type' => 'templates',
			'tax_query' => array(
				'relation' => 'AND',
				array(
					'taxonomy'  => 'template_category',
					'field'     => 'term_id',
					'terms'     => $results['category_id'],
				),
			)
		);        
                
		$loop = new WP_Query( $args );
		while( $loop->have_posts() ) : $loop->the_post();
			if( has_post_thumbnail( $post->ID ) ) : ?>
				<div class="web-template text-center<?php if( $theme_id == $post->ID ) : echo ' '; endif; ?>" data-template="<?php echo esc_attr($post->ID); ?>">
					<label for="<?php echo 'template-'.$post->ID; ?>">
						<?php the_post_thumbnail( 'full' ); ?>
					</label>
					<div class="template-caption">
						<input type="button" value="<?php if( $theme_id == $post->ID ) : echo 'Deselect'; else: echo 'Select'; endif; ?>" class="bnt btn-primary select-template" data-template="<?php echo esc_attr($post->ID); ?>" data-text="<?php if( $theme_id == $post->ID ) : echo 'on'; else: echo 'off'; endif; ?>">
						<?php if( 'Basic' == $options[0]->option_name ) : ?>
							<a href="http://choose-launch.webcommander.com/view-demo-iframe/?url=<?php echo get_post_meta( $post->ID, 'demo_url', true ); ?>&id=<?php echo $post->ID; ?>&template_type=<?php echo $options[0]->option_name; ?>" class="btn btn-primary" target="_blank">View Demo</a>
						<?php endif; ?>
						<?php if( 'Advanced' == $options[0]->option_name ) : ?>
							<a href="http://choose-launch.webcommander.com/view-demo-iframe/?url=<?php echo get_post_meta( $post->ID, 'advance_demo_url', true ); ?>&id=<?php echo $post->ID; ?>&template_type=<?php echo $options[0]->option_name; ?>" class="btn btn-primary" target="_blank">View Demo</a>
						<?php endif; ?>
						<?php if( 'Shop' == $options[0]->option_name ) : ?>
							<a href="http://choose-launch.webcommander.com/view-demo-iframe/?url=<?php echo get_post_meta( $post->ID, 'shop_demo_url', true ); ?>&id=<?php echo $post->ID; ?>&template_type=<?php echo $options[0]->option_name; ?>" class="btn btn-primary" target="_blank">View Demo</a>
						<?php endif; ?>
					</div>
				</div>
		<?php
			endif;
		endwhile;
		// With Excluded category
		$args = array(
			'posts_per_page' => -1,
			'post_type' => 'templates',
			'tax_query' => array(
				'relation' => 'AND',
				array(
					'taxonomy'  => 'template_category',
					'field'     => 'slug',
					'terms'     => 'online-stores',
				),
				array(
					'taxonomy'  => 'template_category',
					'field'     => 'term_id',
					'terms'     => $results['category_id'],
					'operator'  => 'NOT IN'
				),
			)
		);                       
		$loop = new WP_Query( $args );
		while( $loop->have_posts() ) : $loop->the_post();
			if( has_post_thumbnail( $post->ID ) ) :
			?>
				<div class="web-template text-center<?php if( $theme_id == $post->ID ) : echo ' '; endif; ?>" data-template="<?php echo esc_attr($post->ID); ?>">
					<label for="<?php echo 'template-'.$post->ID; ?>">
						<?php the_post_thumbnail( 'full' ); ?>
					</label>
					<div class="template-caption">
					<input type="button" value="<?php if( $theme_id == $post->ID ) : echo 'Deselect'; else: echo 'Select'; endif; ?>" class="bnt btn-primary select-template" data-template="<?php echo esc_attr($post->ID); ?>" data-text="<?php if( $theme_id == $post->ID ) : echo 'on'; else: echo 'off'; endif; ?>">
						<?php if( 'Basic' == $options[0]->option_name ) : ?>
							<a href="http://choose-launch.webcommander.com/view-demo-iframe/?url=<?php echo get_post_meta( $post->ID, 'demo_url', true ); ?>&id=<?php echo $post->ID; ?>&template_type=<?php echo $options[0]->option_name; ?>" class="btn btn-primary" target="_blank">View Demo</a>
						<?php endif; ?>
						<?php if( 'Advanced' == $options[0]->option_name ) : ?>
							<a href="http://choose-launch.webcommander.com/view-demo-iframe/?url=<?php echo get_post_meta( $post->ID, 'advance_demo_url', true ); ?>&id=<?php echo $post->ID; ?>&template_type=<?php echo $options[0]->option_name; ?>" class="btn btn-primary" target="_blank">View Demo</a>
						<?php endif; ?>
						<?php if( 'Shop' == $options[0]->option_name ) : ?>
							<a href="http://choose-launch.webcommander.com/view-demo-iframe/?url=<?php echo get_post_meta( $post->ID, 'shop_demo_url', true ); ?>&id=<?php echo $post->ID; ?>&template_type=<?php echo $options[0]->option_name; ?>" class="btn btn-primary" target="_blank">View Demo</a>
						<?php endif; ?>
					</div>
				</div>
			<?php
			endif;
		endwhile;                   
        ?>
    </div>
	<!-- This field contains template id -->
	<input type="hidden" name="temp_id" value="">

	<script>
	jQuery(document).ready(function($) {
		$('#template-carousel').not('.slick-initialized').slick({
			slidesPerRow: 3,
    		rows: 2,
			prevNext: true,
			arrows: true,

			responsive: [
				{
					breakpoint: 1024,
					settings: {
						slidesToShow: 3,
						slidesToScroll: 3
					}
				},
				{
					breakpoint: 1023,
					settings: {
						slidesToShow: 2,
						slidesToScroll: 2
					}
				},
				{
					breakpoint: 480,
					settings: {
						slidesToShow: 1,
						slidesToScroll: 1
					}
				}
			]
		});
		$('.template-carousel').each(function() {
			if($(this).hasClass('slick-slider')) {
				// do nothing
			}else {
				$(this).remove();
			}
		});
	});
	</script>
	<?php
	exit();
}

/**
 * Fetch Overview Content
 */
function fetch_overview_content() {
	global $wpdb;
	global $post;
	$order_id = $_REQUEST['order_id'];
	$results = $wpdb->get_results(
		$wpdb->prepare( "SELECT * FROM ".$wpdb->prefix."wa_brief_form WHERE order_id=%d", $order_id )
	);

	$template = json_decode($results[0]->business_choose_template, true);
	if(!empty($template['temp_id'])) {
		$post_id = $template['temp_id'];
	}

	$category = json_decode($results[0]->category, true);
	$business_detail = json_decode($results[0]->business_detail, true);
	$business_unique_brand = json_decode($results[0]->business_unique_brand, true);
	$business_offer = json_decode($results[0]->business_offer, true);
	$business_website_assets = json_decode($results[0]->business_website_assets, true);
	$business_choose_template = json_decode($results[0]->business_choose_template, true);
	$business_website_custom_design = json_decode($results[0]->business_website_custom_design, true);
	$business_choose_website_color = json_decode($results[0]->business_choose_website_color, true);
	$business_domain_name = json_decode($results[0]->business_domain_name, true);
	$business_domain_email = json_decode($results[0]->business_domain_email, true);
	$business_online_store = json_decode($results[0]->business_online_store, true);

	// Business Details data 
	if(isset($business_website_assets['website_logo'])){
		$logo_files = $business_website_assets['website_logo'];
	}
	if(isset($business_website_assets['website_banner'])) {
		$banner_files = $business_website_assets['website_banner'];
	}
	if(isset($business_website_assets['website_content'])) {
		$content_files = $business_website_assets['website_content'];
	}

	// Business Online Store data 
	if(isset($business_online_store['website_excel_files'])) {
		$excel_files = $business_online_store['website_excel_files'] ;
	}
	if(isset($business_online_store['website_product_images'])) {
		$product_image_files = $business_online_store['website_product_images'] ;
	}
	
	?>
<div class="row">
    <div class="col-md-12">
		<!-- Tell Us More panel -->
        <div class="panel-group" id="accordion">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" href="#tell-us-more">Tell Us More</a>
                    </h4>
                </div>
                <div id="tell-us-more" class="panel-collapse collapse in">
                    <div class="panel-body">
                        <p>Business Category: <span><?php echo $category['category_name']; ?></span></p>
						<!-- Business Details -->
						<div class="panel-group" id="accordion">
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" href="#tell-us-more-business-details">Business Details</a>
									</h4>
								</div>
								<div id="tell-us-more-business-details" class="panel-collapse collapse in">
									<?php  
										// Business Details Data
										$firstname = isset($business_detail['business_detail']['firstname']) ? $business_detail['business_detail']['firstname'] : '';
										$phone 	= isset($business_detail['business_detail']['phone']) ? $business_detail['business_detail']['phone'] : '';
										$email 	= isset($business_detail['business_detail']['email']) ? $business_detail['business_detail']['email'] : '';
										$city 	= isset($business_detail['business_detail']['city']) ? $business_detail['business_detail']['city'] : '';
										$post_code 	= isset($business_detail['business_detail']['post_code']) ? $business_detail['business_detail']['post_code'] : '';
										$state 	= isset($business_detail['business_detail']['state']) ? $business_detail['business_detail']['state'] : '';
									?>
									<div class="panel-body">
										<p>Name: <span><?php echo $firstname; ?></span></p>
										<p>Address: <span><?php echo $business_detail['business_detail']['address']; ?></span></p>
										<p>Phone: <span><?php echo $phone; ?></span></p>
										<p>Email: <span><?php echo $email; ?></span></p>
										<p>City: <span><?php echo $city; ?></span></p>
										<p>Postcode: <span><?php echo $post_code; ?></span></p>
										<p>State: <span><?php echo $state; ?></span></p>
									</div>
								</div>
							</div>
						</div>
						<!-- Social Media -->
						<div class="panel-group" id="accordion">
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" href="#tell-us-more-social-media">Social Media</a>
									</h4>
								</div>
								<div id="tell-us-more-social-media" class="panel-collapse collapse in">
									<?php  
										// Social Media data
										$facebook = isset($business_detail['social_media']['facebook']) ? $business_detail['social_media']['facebook'] : '';
										$twitter = isset($business_detail['social_media']['twitter']) ? $business_detail['social_media']['twitter'] : '';
										$linkedin = isset($business_detail['social_media']['linkedin']) ? $business_detail['social_media']['linkedin'] : '';
										$google_plus = isset($business_detail['social_media']['google-plus']) ? $business_detail['social_media']['google-plus'] : '';
										$youtube = isset($business_detail['social_media']['youtube']) ? $business_detail['social_media']['youtube'] : '';
										$pinterest = isset($business_detail['social_media']['pinterest']) ? $business_detail['social_media']['pinterest'] : '';
									?>
									<div class="panel-body">
										<?php if( !empty($facebook) ) : ?>
											<p>Facebook: <span><?php echo $facebook; ?></span></p>
										<?php endif; ?>
										<?php if( !empty($twitter) ) : ?>
											<p>Twitter: <span><?php echo $twitter; ?></span></p>
										<?php endif; ?>
										<?php if( !empty($linkedin) ) : ?>
											<p>Linkedin: <span><?php echo $linkedin; ?></span></p>
										<?php endif; ?>
										<?php if( !empty($google_plus) ) : ?>
											<p>Google+: <span><?php echo $google_plus; ?></span></p>
										<?php endif; ?>
										<?php if( !empty($youtube) ) : ?>
											<p>Youtube: <span><?php echo $youtube; ?></span></p>
										<?php endif; ?>
										<?php if( !empty($pinterest) ) : ?>
											<p>Pinterest: <span><?php echo $pinterest; ?></span></p>
										<?php endif; ?>
									</div>
								</div>
							</div>
						</div>
                    </div>
                </div>
            </div>
        </div>
		<!-- Business Detail panel -->
        <div class="panel-group" id="accordion">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" href="#business-details">Business Details</a>
                    </h4>
                </div>
                <div id="business-details" class="panel-collapse collapse">
                    <div class="panel-body">
                        <p>Business Name: <span><?php echo $firstname; ?></span></p>
						<!-- Your Business -->
						<div class="panel-group">
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" href="#business-details-your-business">Your Business</a>
									</h4>
								</div>
								<div id="business-details-your-business" class="panel-collapse collapse">
									<div class="panel-body">
										<p>Tell us a bit about your business
											<span><?php echo $business_unique_brand['about_business']; ?></span></p>

										<p>What is your business hours?
											<span><?php echo $business_unique_brand['business_hours']; ?></span></p>

										<p>What makes your business different from the rest?
											<span><?php echo $business_unique_brand['business_uniqueness']; ?></span></p>

										<p>Tell us more?
											<span><?php echo $business_offer['business_offer_content']; ?></span></p>
									</div>
								</div>
							</div>
						</div>
						<!--Upload Files -->
						<div class="panel-group">
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" href="#business-details-upload-fields">Upload Files</a>
									</h4>
								</div>
								<div id="business-details-upload-fields" class="panel-collapse collapse">
									<div class="panel-body">
										<p>Logo:
										<?php  
											if( !empty($logo_files) ) {
												foreach( $logo_files as $key=>$value ) {
													$logo_file = explode('/', $value);
													$logo_name = end( $logo_file );
													echo '<a href="'.home_url('/').$value.'" target="_blank" download><span>'.$logo_name.'</span></a>';
												}
											}
										?>
										</p>
										<p>Images:
										<?php  
											if( !empty($banner_files) ) {
												foreach( $banner_files as $key=>$value ) {
													$banner_file = explode('/', $value);
													$banner_name = end( $banner_file );
													echo '<a href="'.home_url('/').$value.'" target="_blank" download><span>'.$banner_name.'</span></a>';
												}
											}
										?>
										</p>
										<p>Content:
										<?php  
											if( !empty($content_files) ) {
												foreach( $content_files as $key=>$value ) {
													$content_file = explode('/', $value);
													$content_name = end( $content_file );
													echo '<a href="'.home_url('/').$value.'" target="_blank" download><span>'.$content_name.'</span></a>';
												}
											}
										?>
										</p>
									</div>
								</div>
							</div>
						</div>
                    </div>
                </div>
            </div>
		</div>
		
		<!-- Design panel -->
        <div class="panel-group" id="accordion">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" href="#business-design">Design</a>
                    </h4>
                </div>
                <div id="business-design" class="panel-collapse collapse">
                    <div class="panel-body">
						<?php if( webalive_skip_step($order_id) === false ) : ?>
							<?php if(!empty($template['temp_id'])) : ?>
								<p>Selected Color: <span><?php echo $business_choose_website_color['choose_color']; ?></span></p>
								<?php  
									$loop = new WP_Query(array( 'p' => $post_id, 'post_type' => 'templates' ));
									while( $loop->have_posts() ) : $loop->the_post();
										the_post_thumbnail('full');
									endwhile;
								?>
							<?php endif; ?>
						<?php endif; ?>
						<?php if( webalive_shop_step($order_id) === true ) : ?>
						<!--Upload Files -->
						<div class="panel-group">
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" href="#business-design-upload-fields">Upload Files</a>
									</h4>
								</div>
								<div id="business-design-upload-fields" class="panel-collapse collapse">
									<div class="panel-body">
										<p>Product Excel Files: 
										<?php  
											if( !empty($excel_files) ) {
												foreach( $excel_files as $key=>$value ) {
													$excel_file = explode('/', $value);
													$excel_name = end( $excel_file );
													echo '<a href="'.home_url('/').$value.'" target="_blank" download><span>'.$excel_name.'</span></a>';
												}
											}
										?>
										</p>
										<p>Website Images: 
										<?php  
											if( !empty($product_image_files) ) {
												foreach( $product_image_files as $key=>$value ) {
													$product_image_file = explode('/', $value);
													$product_image_name = end( $product_image_file );
													echo '<a href="'.home_url('/').$value.'" target="_blank" download><span>'.$product_image_name.'</span></a>';
												}
											}
											$payment_methods = '';
											if(isset($business_online_store['payment_gateway'])) {
												$payment_methods = implode(', ', $business_online_store['payment_gateway']);
											}
										?>
										</p>
										<p>Payment Gateway: <span><?php echo $payment_methods; ?></span></p>
										<p>Shipping Rules: <span><?php echo ucwords($business_online_store['shipping_rules']); ?></span></p>
									</div>
								</div>
							</div>
						</div>
						<?php endif; ?>
                    </div>
                </div>
            </div>
		</div>

		<!-- Domain panel -->
        <div class="panel-group" id="accordion">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" href="#business-domain">Domain</a>
                    </h4>
                </div>
                <div id="business-domain" class="panel-collapse collapse">
                    <div class="panel-body">
						<!--Domain Details -->
						<div class="panel-group">
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" href="#business-domain-details">Domain Name & Email</a>
									</h4>
								</div>
								<div id="business-domain-details" class="panel-collapse collapse">
									<div class="panel-body">
										<p>Domain Name: <span><?php echo $business_domain_name['domain_name']; ?></span></p>
										<p>Domain Email Address: <span><?php echo $business_domain_email['domain_email_detail']; ?></span></p>
									</div>
								</div>
							</div>
						</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
	<?php

	exit();
}

add_action('wp_ajax_nopriv_brief_form_category_save', 'brief_form_category_save');
add_action('wp_ajax_nopriv_brief_form_business_detail_form', 'brief_form_business_detail_form');
add_action('wp_ajax_nopriv_brief_form_business_unique_brand_form', 'brief_form_business_unique_brand_form');
add_action('wp_ajax_nopriv_brief_form_business_offer_form', 'brief_form_business_offer_form');
add_action('wp_ajax_nopriv_brief_form_business_assets_form', 'brief_form_business_assets_form');
add_action('wp_ajax_nopriv_brief_form_business_choose_template_form', 'brief_form_business_choose_template_form');
add_action('wp_ajax_nopriv_brief_form_business_website_custom_design_form', 'brief_form_business_website_custom_design_form');
add_action('wp_ajax_nopriv_brief_form_choose_website_color_form', 'brief_form_choose_website_color_form');
add_action('wp_ajax_nopriv_brief_form_business_domain_name_form', 'brief_form_business_domain_name_form');
add_action('wp_ajax_nopriv_brief_form_business_domain_email_form', 'brief_form_business_domain_email_form');
add_action('wp_ajax_nopriv_get_brief_form_field_data', 'get_brief_form_field_data');
add_action('wp_ajax_nopriv_brief_form_business_online_store_form', 'brief_form_business_online_store_form');
add_action('wp_ajax_nopriv_fetch_selected_template', 'fetch_selected_template');
add_action('wp_ajax_nopriv_fetch_templates_by_category', 'fetch_templates_by_category');
add_action('wp_ajax_nopriv_fetch_overview_content', 'fetch_overview_content');
add_action('wp_ajax_nopriv_brief_form_business_save_form', 'brief_form_business_save_form');

add_action('wp_ajax_nopriv_brief_form_default_template_update', 'brief_form_default_template_update');

function brief_form_default_template_update() {

	$field_name = 'business_choose_template';
	$order_id = $_REQUEST['order_id'];
	$order_template_id = $_REQUEST['order_template_id'];
	$db_data = getBriefFormFieldData($field_name, $order_id);
	if(empty($db_data) && $order_template_id > 0) {
		$data = array(
			'temp_id' => $order_template_id
		);
		echo $status = updateBriefForm($field_name, $data, $order_id);
	}
	exit();
}

// Create Custom Dir Folder
function webalive_create_template_dir() {
  
    $upload = wp_upload_dir();
    $upload_dir = $upload['basedir'];
    $upload_dir = $upload_dir . '/brief-form';
    if (! is_dir($upload_dir)) {
       mkdir( $upload_dir, 0700 );
    }
}
add_action('after_setup_theme', 'webalive_create_template_dir');

// Custom Dir Overwiding
function webalive_custom_dir( $dir ) {
    return array(
        'path'   => $dir['basedir'] . '/brief-form',
        'url'    => $dir['baseurl'] . '/brief-form',
        'subdir' => '/brief-form',
    ) + $dir;
}
add_filter( 'upload_dir', 'webalive_custom_dir' );

// Webalive brief form file upload
function webalive_brief_form_file_uploader() {
	$fileErrors = array(
		0 => "There is no error, the file uploaded with success",
		1 => "The uploaded file exceeds the upload_max_files in server settings",
		2 => "The uploaded file exceeds the MAX_FILE_SIZE from html form",
		3 => "The uploaded file uploaded only partially",
		4 => "No file was uploaded",
		6 => "Missing a temporary folder",
		7 => "Failed to write file to disk",
		8 => "A PHP extension stoped file to upload" );
	$posted_data =  isset( $_POST ) ? $_POST : array();
	$file_data = isset( $_FILES ) ? $_FILES : array();
	$data = array_merge( $posted_data, $file_data );
	$response = array();
	$uploaded_file = wp_handle_upload( $data['webalive_brief_form_file_uploader'], array( 'test_form' => false ) );
	$full_url = $uploaded_file['url'];
	$partial_url = explode( 'wp-content', $full_url );
	if( $uploaded_file && ! isset( $uploaded_file['error'] ) ) {
		$response['response'] 	= "SUCCESS";
		$response['filename'] 	= basename( $uploaded_file['url'] );
		$response['url'] 		= 'wp-content'.$partial_url[1];
		$response['preview']	= $full_url;
		$response['type']		= $uploaded_file['type'];
	} else {
		$response['response'] = "ERROR";
		$response['error'] = $uploaded_file['error'];
	}
	
	echo json_encode( $response );
	// Removing the dir override
	remove_filter( 'upload_dir', 'webalive_custom_dir' );
	die();
}
add_action('wp_ajax_nopriv_webalive_brief_form_file_uploader', 'webalive_brief_form_file_uploader');

// Delete file Mechanism
function webalive_file_delete() {
	if( isset( $_POST ) ){
		global $wpdb;
	
		$fileurl = $_POST['fileurl'];
		$response = array();
	
		$filename = basename( $fileurl );
		$upload_dir = wp_upload_dir();
	    $upload_path = $upload_dir["path"];
	    $uploaded_file = $upload_path .'/'. $filename;
		if(file_exists($uploaded_file)){
			@unlink($uploaded_file);
			$response['response'] = "SUCCESS";
		}else {
			$response['response'] = "ERROR";
			$response['error'] = 'File does not exist';
			$response['path'] = $uploaded_file;
		}
		
		echo json_encode( $response );
	} 
	die();
}
add_action( 'wp_ajax_nopriv_webalive_file_delete', 'webalive_file_delete' );

/**
 * Skip step if option_type != custom_addons_2
 */
function webalive_skip_step($order_id) {
	global $wpdb;
	$query = $wpdb->get_results($wpdb->prepare("SELECT option_type FROM ".$wpdb->prefix."wa_order_details WHERE order_id=%d", $order_id));
	$arr = array();
	$plan_type = array();
	foreach( $query as $key=>$plan ) {
		$arr[] = $plan;
		$plan_type[] = $arr[$key]->option_type;
	}
	if( in_array( 'custom_addons_2', $plan_type ) ) {
		return true;
	}else {
		return false;
	}
}

/**
 * Skip step if option_name != shop
 */
function webalive_shop_step($order_id) {
	global $wpdb;
	$query = $wpdb->get_results($wpdb->prepare("SELECT option_name FROM ".$wpdb->prefix."wa_order_details WHERE order_id=%d", $order_id));
	$arr = array();
	$plan_name = array();
	foreach( $query as $key=>$plan ) {
		$arr[] = $plan;
		$plan_name[] = $arr[$key]->option_name;
	}
	if( in_array( 'Shop', $plan_name ) ) {
		return true;
	}else {
		return false;
	}
}