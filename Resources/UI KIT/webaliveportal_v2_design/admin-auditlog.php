<?php include 'header.php'; ?>
<div class="main-container">
    <?php include 'main-sidebar-admin.php'; ?>

    <div class="main-page-content">
        <div class="page-listing-wraper">
            <div class="page-listing-header">
                <h2>Audit Log</h2>
            </div>
        </div>

        <div class="admin-auditlog-filter">
               <div class="auditlog-top-filter">
                   <form action="#" method="get">
                       <div class="title">Serach User/Customer(Optional)</div>
                       <div class="customer-domain">
                            <div class="form-group">
                                <select class="custom-dropdown">
                                    <option>Domain Name</option>
                                    <option disabled>Disabled Option</option>
                                    <option>Select Option Two</option>
                                    <option>Select Option Three</option>
                                    <option>Select Option Four</option>
                                </select>
                            </div>
                        </div>
                       <div class="customer-domain-name">
                           <div class="form-group">
                               <input type="text" class="form-control" placeholder="">
                           </div>
                       </div>
                       <div class="search-customer-btn">
                        <input type="submit" value="Search Customer" class="btn btn-primary"  />
                       </div>
                   </form>
               </div>
               <div class="auditlog-bottom-filter">
                <div class="auditlog-search-history">
                    <form action="#" method="get">
                        <div class="customer-id-section">
                            <div class="title">User Name/ Customer ID:</div>
                            <div class="form-group">
                                <select class="custom-dropdown">
                                    <option>#12345</option>
                                    <option disabled>Disabled Option</option>
                                    <option>Select Option Two</option>
                                    <option>Select Option Three</option>
                                    <option>Select Option Four</option>
                                </select>
                            </div>
                        </div>
                        <div class="date-field-section">
                            <div class="title">Date Range:</div>
                            <div class="form-group">
                                <div class="date-picker input-group">
                                    <input type="text" class="form-control" placeholder="Start Date" />
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="date-picker input-group">
                                    <input type="text" class="form-control" placeholder="End Date" />
                                </div>
                            </div>
                        </div>
                        <div class="search-button-group">
                            <input type="submit" value="Search History" class="btn btn-primary"  />
                            <input type="reset" value="Reset" class="btn btn-primary"  />
                        </div>
                    </form>
                </div>
                <div class="auditlog-export-filter">
                    <form action="#" method="get">
                        <div class="form-group">
                            <select class="custom-dropdown">
                                <option>Filter By</option>
                                <option disabled>Disabled Option</option>
                                <option>Select Option Two</option>
                                <option>Select Option Three</option>
                                <option>Select Option Four</option>
                            </select>
                        </div>
                        <a href="javascript:void(0)" class="btn btn-secondary export-button">Export</a>
                    </form>
                </div>
            </div>
        </div>


        <div class="page-listing-content">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>Name</th>
                    <th>Event</th>
                    <th>Domain</th>
                    <th>Time</th>
                    <th>IP Address</th>
                    <th>Function</th>
                    <th class="admin-action-split  text-center">Action</th>
                </tr>
                </thead>
                <tbody>
                <?php for($i=0;$i<26;$i++){?>
                    <tr>
                        <td>Portal Admin</td>
                        <td>CREATE</td>
                        <td>strenghteyou.com.au</td>
                        <td>May 8,2019,5:05</td>
                        <td>103.78.74.26</td>
                        <td>Project Message</td>
                        <td class="admin-action-split text-center">
                            <span><a href="#"><i class="fa fa-eye" aria-hidden="true"></i></a></span>
                        </td>
                    </tr>
                <?php } ?>


                </tbody>
            </table>
        </div>
    </div>
</div>
</body>
</html>