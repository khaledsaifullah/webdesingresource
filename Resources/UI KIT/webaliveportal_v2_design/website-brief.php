<?php include 'header.php'; ?>
<div class="main-container">
    <?php include 'main-sidebar.php'; ?>
    <div class="main-page-content">
        <div class="websitebrief-content">
            <div class="page-heading">
                <p class="head-title"> Web Design Package (clubbpromotions.com.au) for Clubb Games & Promotions </p>
                <h2>SEO Brief</h2>
            </div>
            <div class="page-tab-wrapper">
                <div class="page-tab-heading">
                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="pills-generalinfo-tab" data-toggle="pill" href="#pills-generalinfo" role="tab" aria-controls="pills-generalinfo" aria-selected="true">General Info</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-yourbusiness-tab" data-toggle="pill" href="#pills-yourbusiness" role="tab" aria-controls="pills-yourbusiness" aria-selected="false">Your Business</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-yourwebsite-tab" data-toggle="pill" href="#pills-yourwebsite" role="tab" aria-controls="pills-yourwebsite" aria-selected="false">Your Website</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-designartwork-tab" data-toggle="pill" href="#pills-designartwork" role="tab" aria-controls="pills-designartwork" aria-selected="false">Design & Artwork</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-websitecontent-tab" data-toggle="pill" href="#pills-websitecontent" role="tab" aria-controls="pills-websitecontent" aria-selected="false">Website Content</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-ecommercesocialnetwork-tab" data-toggle="pill" href="#pills-ecommercesocialnetwork" role="tab" aria-controls="pills-ecommercesocialnetwork" aria-selected="false">eCommerce Social Network</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-searchengineoptimisation-tab" data-toggle="pill" href="#pills-searchengineoptimisation" role="tab" aria-controls="pills-searchengineoptimisation" aria-selected="false">Search Engine Optimisation</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-additionaldetails-tab" data-toggle="pill" href="#pills-additionaldetails" role="tab" aria-controls="pills-additionaldetails" aria-selected="false">Additional Details</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-finalise-tab" data-toggle="pill" href="#pills-finalise" role="tab" aria-controls="pills-finalise" aria-selected="false">Finalise</a>
                        </li>



                    </ul>
                </div>

                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-generalinfo" role="tabpanel" aria-labelledby="pills-generalinfo-tab">
                        <form action="#" method="get">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <h6 class="input-title">Business Name:</h6>
                                        <input type="text" class="form-control inputmargin" placeholder="" name="businessname" />
                                    </div>

                                    <div class="form-group">
                                        <h6 class="input-title">Point of Contact:</h6>
                                        <span>Please specify the person that will sign off on the project requirements, schedule and deliverables. Please make sure that your nominated person for this role has access to the "Project Management" section of the WebAlive Online Portal.</span>
                                        <label class="sub-input-title">Full Name:</label>
                                        <input type="text" class="form-control inputmargin" placeholder="" name="fullname" />
                                    </div>

                                    <div class="form-group">
                                        <label class="sub-input-title">Position/Title:</label>
                                        <input type="text" class="form-control inputmargin" placeholder="" name="positiontitle" />
                                    </div>

                                    <div class="form-group">
                                        <label class="sub-input-title">Contact Email:</label>
                                        <input type="text" class="form-control inputmargin" placeholder="" name="contactemail" />
                                    </div>

                                    <div class="form-group">
                                        <label class="sub-input-title">Contact Phone:</label>
                                        <input type="text" class="form-control inputmargin" placeholder="" name="contactphone" />
                                    </div>
                                    <div class="form-group">
                                        <span class="additional-text">If additional costs are applicable for changes requested to the project scope (including changes in deliverables or changes in project schedule), would you like to nominate another point of contact in your organisation to approve these change requests?</span>
                                    </div>



                                    <div class="input-group brief-radio-btn">
                                        <span class="custom-radio yes-btn">
                                      <input type="radio" name="additionalcost" value="no" id="no">
                                      <label for="no">No</label>
                                      </span>
                                        <span class="custom-radio no-btn">
                                          <input type="radio" name="additionalcost" value="yes" id="yes">
                                          <label for="yes">Yes</label>
                                          </span></div>


                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <h6 class="input-title">How long has your business been in operation? (e.g. 2 years 3 months)</h6>
                                        <input type="text" class="form-control inputmargin" placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <h6 class="input-title">How many Staff do you currently employ?</h6>
                                        <input type="text" class="form-control inputmargin" placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <h6 class="input-title">Where do you operate your business from?</h6>
                                        <div class="input-group-inline brief-radio-btn businessbtn">
                                            <div class="input-group"> <span class="custom-radio">
                                              <input type="radio" name="operate" value="office" id="office">
                                              <label for="office">Office</label>
                                              </span></div>
                                                                                        <div class="input-group"> <span class="custom-radio">
                                              <input type="radio" name="operate" value="Retail Shop" id="retailshop">
                                              <label for="retailshop">Retail Shop</label>
                                              </span></div>
                                            <div class="input-group"> <span class="custom-radio">
                                              <input type="radio" name="operate" value="home" id="home">
                                              <label for="home">Home</label>
                                              </span> </div>
                                                                                        <div class="input-group"> <span class="custom-radio">
                                              <input type="radio" name="operate" value="other" id="other">
                                              <label for="other">Other</label>
                                              </span> </div>

                                        </div>
                                        <div class="form-group">
                                            <h6 class="input-title" style="margin-bottom:0px">What is your geographical coverage? Select one or more options as required.</h6>
                                            <span>(e.g.: Brisbane, Sydney, 100 KM radius of Perth CBD)</span>
                                            <textarea class="form-control" rows="5"></textarea>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <input type="submit" class="btn btn-secondary" value="SAVE AND NEXT"  />
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="tab-pane fade" id="pills-yourbusiness" role="tabpanel" aria-labelledby="pills-yourbusiness-tab">Your Business</div>
                    <div class="tab-pane fade" id="pills-yourwebsite" role="tabpanel" aria-labelledby="pills-yourwebsite-tab">Your Website</div>
                    <div class="tab-pane fade" id="pills-designartwork" role="tabpanel" aria-labelledby="pills-designartwork-tab">Design & Artwork</div>
                    <div class="tab-pane fade" id="pills-websitecontent" role="tabpanel" aria-labelledby="pills-websitecontent-tab">Website Content</div>
                    <div class="tab-pane fade" id="pills-ecommercesocialnetwork" role="tabpanel" aria-labelledby="pills-ecommercesocialnetwork-tab">eCommerce Social Network</div>
                    <div class="tab-pane fade" id="pills-searchengineoptimisation" role="tabpanel" aria-labelledby="pills-searchengineoptimisation-tab">Search Engine Optimisation</div>
                    <div class="tab-pane fade" id="pills-additionaldetails" role="tabpanel" aria-labelledby="pills-additionaldetails-tab">Additional Details</div>
                    <div class="tab-pane fade" id="pills-finalise" role="tabpanel" aria-labelledby="pills-finalise-tab">Finalise</div>
                </div>
            </div>


        </div>
    </div>
</div>
</body>
</html>