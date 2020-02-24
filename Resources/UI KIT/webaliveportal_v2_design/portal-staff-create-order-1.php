<?php include 'header.php'; ?>
<div class="main-container">
    <?php include 'main-sidebar.php'; ?>
    <div class="main-page-content">
        <div class="page-listing-wraper">
            <div class="page-listing-header">
                <h2>Create New Order</h2>
                <p><b> Choose customer</b></p>
            </div>
            <div class="page-search-filter search-filterwidth">
                <form name="page-search-filter" action="#" method="get">
                    <div class="row">
                        <div class="col-md-3">
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
                        <div class="col-md-3">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="">
                            </div>
                        </div>
                        <div class="col-md-1">
                            <button type="button" class="btn btn-primary searchbtn">Search</button>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group right sort-by-search">
                                <select class="custom-dropdown">
                                    <option>Select Customer</option>
                                    <option>Select Option Two</option>
                                    <option>Select Option Three</option>
                                    <option>Select Option Four</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <button type="button" class="btn btn-primary createinvoicebtn">Create Invoice</button>
                        </div>
                    </div>
                 </div>
            </form>
          </div>
       </div>

    </div>
</div>
</body>
</html>

