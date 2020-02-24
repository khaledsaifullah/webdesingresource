<?php include 'header.php'; ?>
<script type="text/javascript">
    $(document).ready(function(){

            $('#prompt-setpassword-checkfield').change(function(){
                if($(this).is(":checked")) {
                    $('.prompt-setpassword').addClass('hide');
                } else {
                    $('.prompt-setpassword').removeClass('hide');
                }
            });

    });
</script>
<div class="main-container">
    <?php include 'main-sidebar-admin.php'; ?>

    <div class="main-page-content">
        <div class="page-listing-wraper">
            <div class="page-listing-header">
                <h2>Add Employee</h2>
            </div>

        </div>
        <div class="page-listing-content">
            <form action="#" method="get">
                <div class="admin-add-employee">
                    <div class="form-group">
                        <label>Name:</label>
                        <input type="text" class="form-control" placeholder="" name="name" />
                    </div>
                    <div class="form-group">
                        <label>Email:</label>
                        <input type="email" class="form-control" placeholder="" name="email" />
                    </div>

                    <div class="form-group">
                        <span class="custom-checkbox">
                            <input type="checkbox" id="prompt-setpassword-checkfield">
                            <label for="prompt-setpassword-checkfield">Prompt employee to set password</label>
                        </span>
                    </div>

                    <div class="form-group prompt-setpassword">
                        <label>Password:</label>
                        <input type="password" class="form-control" placeholder="" name="password" />
                    </div>


                    <div class="admin-officer-section">
                        <h5 class="title">Officers:</h5>
                        <div class="vertical-menu-of-base-permission">
                            <ul>
                                <li>
                                    <div class="input-group">
                                        <span class="custom-checkbox">
                                            <input type="checkbox" id="c-1">
                                            <label for="c-1">Base Permission</label>
                                        </span>
                                    </div>
                                    <ul>
                                        <li>
                                            <div class="input-group">
                                                <span class="custom-checkbox">
                                                    <input type="checkbox" id="c-2">
                                                    <label for="c-2">Can search by exact match</label>
                                                </span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="input-group">
                                                <span class="custom-checkbox">
                                                    <input type="checkbox" id="c-3">
                                                    <label for="c-3">Can view customer information (by exact match)</label>
                                                </span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="input-group">
                                                <span class="custom-checkbox">
                                                    <input type="checkbox" id="c-4">
                                                    <label for="c-4">Can view assigned tickets</label>
                                                </span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="input-group">
                                                <span class="custom-checkbox">
                                                    <input type="checkbox" id="c-5">
                                                    <label for="c-5">Can reply assigned tickets</label>
                                                </span>
                                            </div>
                                        </li>
                                    </ul>
                                </li>

                                <li>
                                    <div class="input-group">
                                        <span class="custom-checkbox">
                                            <input type="checkbox" id="c-6">
                                            <label for="c-6">Group 1</label>
                                        </span>
                                    </div>
                                    <ul>
                                        <li>
                                            <div class="input-group">
                                                <span class="custom-checkbox">
                                                    <input type="checkbox" id="c-7">
                                                    <label for="c-7">Can Search customer</label>
                                                </span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="input-group">
                                                <span class="custom-checkbox">
                                                    <input type="checkbox" id="c-8">
                                                    <label for="c-8">Can View customer information</label>
                                                </span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="input-group">
                                                <span class="custom-checkbox">
                                                    <input type="checkbox" id="c-9">
                                                    <label for="c-9">Can edit customer information</label>
                                                </span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="input-group">
                                                <span class="custom-checkbox">
                                                    <input type="checkbox" id="c-10">
                                                    <label for="c-10">Can view subscription</label>
                                                </span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="input-group">
                                                <span class="custom-checkbox">
                                                    <input type="checkbox" id="c-11">
                                                    <label for="c-11">Can view transaction</label>
                                                </span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="input-group">
                                                <span class="custom-checkbox">
                                                    <input type="checkbox" id="c-12">
                                                    <label for="c-12">Can view ticket</label>
                                                </span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="input-group">
                                                <span class="custom-checkbox">
                                                    <input type="checkbox" id="c-13">
                                                    <label for="c-13">Can assign tickets</label>
                                                </span>
                                            </div>
                                        </li>
                                    </ul>
                                </li>

                                <li>
                                    <div class="input-group">
                                        <span class="custom-checkbox">
                                            <input type="checkbox" id="c-14">
                                            <label for="c-14">Group 2</label>
                                        </span>
                                    </div>
                                </li>

                                <li>
                                    <div class="input-group">
                                        <span class="custom-checkbox disabled">
                                            <input type="checkbox" id="c-15" disabled>
                                            <label for="c-15">Group 3</label>
                                        </span>
                                    </div>
                                </li>

                                <li>
                                    <div class="input-group">
                                        <span class="custom-checkbox">
                                            <input type="checkbox" id="c-16">
                                            <label for="c-16">Group 4</label>
                                        </span>
                                    </div>
                                    <ul>
                                        <li>
                                            <div class="input-group">
                                                <span class="custom-checkbox">
                                                    <input type="checkbox" id="c-17">
                                                    <label for="c-17">Project Manager(PM)</label>
                                                </span>
                                            </div>
                                            <ul>
                                                <li>
                                                    <div class="input-group">
                                                        <span class="custom-checkbox">
                                                            <input type="checkbox" id="c-20">
                                                            <label for="c-20">Website Design</label>
                                                        </span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="input-group">
                                                        <span class="custom-checkbox">
                                                            <input type="checkbox" id="c-21">
                                                            <label for="c-21">Development</label>
                                                        </span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="input-group">
                                                        <span class="custom-checkbox">
                                                            <input type="checkbox" id="c-22">
                                                            <label for="c-22">Online Marketing</label>
                                                        </span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="input-group">
                                                        <span class="custom-checkbox">
                                                            <input type="checkbox" id="c-23">
                                                            <label for="c-23">Logo Design</label>
                                                        </span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="input-group">
                                                        <span class="custom-checkbox">
                                                            <input type="checkbox" id="c-24">
                                                            <label for="c-24">Maintenance</label>
                                                        </span>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <div class="input-group">
                                                <span class="custom-checkbox">
                                                    <input type="checkbox" id="c-18">
                                                    <label for="c-18">Assistant Project Manager (APM)</label>
                                                </span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="input-group">
                                                <span class="custom-checkbox">
                                                    <input type="checkbox" id="c-19">
                                                    <label for="c-19">Project Officer (PO)</label>
                                                </span>
                                            </div>
                                        </li>
                                    </ul>
                                </li>



                            </ul>



                        </div>
                    </div>

                    <div class="person-moderator">
                        <h5>Is this person a moderator</h5>
                        <div class="input-group">
                                        <span class="custom-radio no-btn">
                                      <input type="radio" name="additionalcost" value="no" id="no">
                                      <label for="no">No</label>
                                      </span>
                                        <span class="custom-radio yes-btn">
                                          <input type="radio" name="additionalcost" value="yes" id="yes">
                                          <label for="yes">Yes</label>
                                          </span></div>
                        <div class="add-employee-submitbtn">
                            <input type="submit" value="Create" class="btn btn-secondary" />
                        </div>
                    </div>

                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>