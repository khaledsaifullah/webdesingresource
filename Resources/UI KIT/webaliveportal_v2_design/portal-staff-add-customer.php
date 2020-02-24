<?php include 'header.php'; ?>
<div class="main-container">
    <?php include 'main-sidebar.php'; ?>
    <div class="main-page-content">
        <div class="create-new-customer">
            <div class="page-heading">
                <h2>Create New Customer</h2>
                <p><b> Company Information</b></p>
            </div>
            <form action="#" method="post">
                <div class="row">
                    <div class="col-md-6">
                        <div class="create-customer-left">
                            <div class="company-information">
                                <div class="form-group title-name">
                                    <label>Company Name:</label>
                                    <input type="text" class="form-control inputmargin" placeholder="" name="company-name">
                                </div>
                                <div class="form-group title-name">
                                    <label>ABN:</label>
                                    <input type="text" class="form-control inputmargin" placeholder="" name="company-abn-number">
                                </div>
                                <div class="form-group title-name">
                                    <label>Email Address:</label>
                                    <input type="text" class="form-control inputmargin" placeholder="" name="company-email-address">
                                </div>
                                <div class="form-group title-name">
                                    <label>Phone:</label>
                                    <input type="text" class="form-control inputmargin" placeholder="" name="company-phone-number">
                                </div>
                                <div class="form-group title-name">
                                    <label>Address Line 1:</label>
                                    <input type="text" class="form-control inputmargin" placeholder="" name="company-address-one">
                                </div>
                                <div class="form-group title-name">
                                    <label>Address Line 2:</label>
                                    <input type="text" class="form-control inputmargin" placeholder="" name="company-address-two">
                                </div>
                                <div class="form-group title-name">
                                    <label>Suburb/City</label>
                                    <input type="text" class="form-control inputmargin" placeholder="" name="company-suburborcity">
                                </div>
                            </div>
                            <div class="primary-contact-information">
                                <h4 class="sub-title">Primary Contact Information</h4>
                                <div class="form-group title-name">
                                    <label>Given Name:</label>
                                    <input type="text" class="form-control inputmargin" placeholder="" name="primary-contact-name">
                                </div>
                                <div class="form-group title-name">
                                    <label>Last Name:</label>
                                    <input type="text" class="form-control inputmargin" placeholder="" name="primary-lastname">
                                </div>
                                <div class="form-group title-name">
                                    <label>Email Address:</label>
                                    <input type="text" class="form-control inputmargin" placeholder="" name="primary-email-address">
                                </div>
                                <div class="form-group title-name">
                                    <label>Phone</label>
                                    <input type="text" class="form-control inputmargin" placeholder="" name="primary-phone-number">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="create-customer-right">
                            <div class="form-group title-name">
                                <label>Mobile</label>
                                <input type="text" class="form-control inputmargin" placeholder="" name="mobile-number">
                            </div>
                            <div class="form-group title-name">
                                <label>Fax:</label>
                                <input type="text" class="form-control inputmargin" placeholder="" name="fax-number">
                            </div>
                            <div class="form-group title-name">
                                <label>Website</label>
                                <input type="text" class="form-control inputmargin" placeholder="" name="website-address">
                            </div>
                            <div class="margin-topcss">
                                <div class="form-group title-name">
                                    <label>Zip/Postcode:</label>
                                    <input type="text" class="form-control inputmargin" placeholder="" name="postcode-number">
                                </div>
                                <div class="form-group title-name">
                                    <label>State:</label>
                                    <input type="text" class="form-control inputmargin" placeholder="" name="state-name">
                                </div>
                                <div class="form-group title-name">
                                    <label>Country</label>
                                    <input type="text" class="form-control inputmargin" placeholder="" name="country-name">
                                </div>
                            </div>
                            <div class="primary-contact-information">
                                <h4 class="sub-title">Secondary Contact Information</h4>
                                <div class="form-group title-name">
                                    <label>Given Name:</label>
                                    <input type="text" class="form-control inputmargin" placeholder="" name="secondary-givenname">
                                </div>
                                <div class="form-group title-name">
                                    <label>Last Name:</label>
                                    <input type="text" class="form-control inputmargin" placeholder="" name="secondary-lastname">
                                </div>
                                <div class="form-group title-name">
                                    <label>Email Address:</label>
                                    <input type="text" class="form-control inputmargin" placeholder="" name="secondary-email-address">
                                </div>
                                <div class="form-group title-name">
                                    <label>Phone:</label>
                                    <input type="text" class="form-control inputmargin" placeholder="" name="secondary-phone-number">
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <input type="submit" class="btn btn-primary createbtn" value="CREATE ACCOUNT" />
            </form>
        </div>
    </div>
</div>
</body>
</html>







