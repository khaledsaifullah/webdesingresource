<?php include 'header.php'; ?>
<script type="text/javascript">
    $(document).ready(function(){

        $(".admin-lock-wrapper .admin-lock-link").on("click",function (e) {
            e.preventDefault();
            $(this).siblings('.admin-lock-wrapper .popup-fullpage').show();
        });
        $(".admin-lock-wrapper .popup-head .close").on("click",function (e) {
            e.preventDefault();
            $('.admin-lock-wrapper .popup-fullpage').hide();
        });


    });
</script>
<div class="main-container">
    <?php include 'main-sidebar-admin.php'; ?>

    <div class="main-page-content">
        <div class="page-listing-wraper">
            <div class="page-listing-header">
                <div class="row page-admin-top">
                    <div class="col-md-4"><h2>Employee <a href="admin-add-employee.php" class="btn btn-primary">ADD EMPLOYEE</a></h2></div>
                    <div class="col-md-8">
                        <div class="admin-top-right-search-filter">
                            <form action="#" method="get">
                            <div class="form-group">
                                <select class="custom-dropdown">
                                    <option>Sort By Types</option>
                                    <option disabled>Disabled Option</option>
                                    <option>Select Option Two</option>
                                    <option>Select Option Three</option>
                                    <option>Select Option Four</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="">
                            </div>
                            <div class="form-group form-group-submit"><input type="submit" class="btn btn-primary searchbtn" value="Search" /></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="page-listing-content">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>Type</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th class="text-center admin-status-split">Status</th>
                    <th class="admin-action-split">Action</th>
                </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Project Manager</td>
                        <td>Super Admin</td>
                        <td>admin@webalive.com.au</td>
                        <td class="text-center admin-status-split"><img src="images/icons/sucess-small-icon.png" alt="sucess" /></td>
                        <td class="admin-action-split">
                            <span><a href="#"><i class="fa fa-pencil" aria-hidden="true"></i></a></span>
                            <span  class="admin-lock-wrapper">
                                <a href="javascript:void(0)" class="admin-lock-link"><i class="fa fa-lock" aria-hidden="true"></i></a>
                                <div class="popup-fullpage">
                                    <div class="popup">
                                        <div class="popup-head"><h4>Reset Password1<a href="javascript:void(0)" class="close"></a></h4></div>
                                        <div class="popup-body">
                                            <form action="#" method="get">
                                                <div class="form-group title-name">
                                                    <label>Type New Password:</label>
                                                    <input type="text" class="form-control" placeholder="" name="type-new-password">
                                                </div>

                                                <div class="form-group title-name">
                                                    <label>Retype New Password:</label>
                                                    <input type="text" class="form-control" placeholder="" name="retype-new-password">
                                                </div>


                                                <div class="form-group submit-popup">
                                                    <input type="submit" value="Cancel" class="btn" />
                                                    <input type="reset" value="Reset" class="btn btn-primary" />
                                                </div>



                                            </form>
                                        </div>


                                    </div>
                                </div>
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <td>Project Manager</td>
                        <td>Super Admin</td>
                        <td>admin@webalive.com.au</td>
                        <td class="text-center admin-status-split"><img src="images/icons/remove-small-icon.png" alt="remove"></span></td>
                        <td class="admin-action-split">
                            <span><a href="#"><i class="fa fa-pencil" aria-hidden="true"></i></a></span>
                            <span  class="admin-lock-wrapper">
                                <a href="javascript:void(0)" class="admin-lock-link"><i class="fa fa-lock" aria-hidden="true"></i></a>
                                <div class="popup-fullpage">
                                    <div class="popup">
                                    <div class="popup-head"><h4>Reset Password2<a href="javascript:void(0)" class="close"></a></h4></div>
                                    <div class="popup-body">
                                        <form action="#" method="get">
                                            <div class="form-group title-name">
                                                <label>Type New Password:</label>
                                                <input type="text" class="form-control" placeholder="" name="type-new-password">
                                            </div>

                                            <div class="form-group title-name">
                                                <label>Retype New Password:</label>
                                                <input type="text" class="form-control" placeholder="" name="retype-new-password">
                                            </div>


                                            <div class="form-group submit-popup">
                                                <input type="submit" value="Cancel" class="btn" />
                                                <input type="reset" value="Reset" class="btn btn-primary" />
                                            </div>



                                        </form>
                                    </div>


                                </div>
                                </div>
                            </span>
                        </td>
                    </tr>



                    <tr>
                        <td>Project Manager</td>
                        <td>Super Admin</td>
                        <td>admin@webalive.com.au</td>
                        <td class="text-center admin-status-split"><img src="images/icons/sucess-small-icon.png" alt="sucess" /></td>
                        <td class="admin-action-split">
                            <span><a href="#"><i class="fa fa-pencil" aria-hidden="true"></i></a></span>
                            <span  class="admin-lock-wrapper">
                                <a href="javascript:void(0)" class="admin-lock-link"><i class="fa fa-lock" aria-hidden="true"></i></a>
                                <div class="popup-fullpage">
                                    <div class="popup">
                                        <div class="popup-head"><h4>Reset Password3<a href="javascript:void(0)" class="close"></a></h4></div>
                                        <div class="popup-body">
                                            <form action="#" method="get">
                                                <div class="form-group title-name">
                                                    <label>Type New Password:</label>
                                                    <input type="text" class="form-control" placeholder="" name="type-new-password">
                                                </div>

                                                <div class="form-group title-name">
                                                    <label>Retype New Password:</label>
                                                    <input type="text" class="form-control" placeholder="" name="retype-new-password">
                                                </div>


                                                <div class="form-group submit-popup">
                                                    <input type="submit" value="Cancel" class="btn" />
                                                    <input type="reset" value="Reset" class="btn btn-primary" />
                                                </div>



                                            </form>
                                        </div>


                                    </div>
                                </div>
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <td>Project Manager</td>
                        <td>Super Admin</td>
                        <td>admin@webalive.com.au</td>
                        <td class="text-center admin-status-split"><img src="images/icons/remove-small-icon.png" alt="remove"></span></td>
                        <td class="admin-action-split">
                            <span><a href="#"><i class="fa fa-pencil" aria-hidden="true"></i></a></span>
                            <span  class="admin-lock-wrapper">
                                <a href="javascript:void(0)" class="admin-lock-link"><i class="fa fa-lock" aria-hidden="true"></i></a>
                                <div class="popup-fullpage">
                                    <div class="popup">
                                        <div class="popup-head"><h4>Reset Password4<a href="javascript:void(0)" class="close"></a></h4></div>
                                        <div class="popup-body">
                                            <form action="#" method="get">
                                                <div class="form-group title-name">
                                                    <label>Type New Password:</label>
                                                    <input type="text" class="form-control" placeholder="" name="type-new-password">
                                                </div>

                                                <div class="form-group title-name">
                                                    <label>Retype New Password:</label>
                                                    <input type="text" class="form-control" placeholder="" name="retype-new-password">
                                                </div>


                                                <div class="form-group submit-popup">
                                                    <input type="submit" value="Cancel" class="btn" />
                                                    <input type="reset" value="Reset" class="btn btn-primary" />
                                                </div>



                                            </form>
                                        </div>


                                    </div>
                                </div>
                            </span>
                        </td>
                    </tr>


                </tbody>
            </table>
        </div>
    </div>
</div>
</body>
</html>