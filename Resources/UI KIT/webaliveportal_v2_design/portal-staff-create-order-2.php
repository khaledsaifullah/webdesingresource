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
        <!--start:row form-->
       <div class="form-row-group-content">
           <h5 class="sub-title">Ilias & Slav Paliopoulos & Tortevski (STRENGTHEN YOU)	-  RF8557</h5>
                <div class="form-row-content">
                    <div class="form-column-left">
                           <div class="form-group title-name">
                               <label>Domain Name:</label>
                               <input type="text" class="form-control inputmargin" placeholder="" name="compamy">
                           </div>

                           <div class="form-group customdropwidth">
                                    <select class="custom-dropdown">
                                        <option>Number of invoices</option>
                                        <option disabled>Disabled Option</option>
                                        <option>Select Option Two</option>
                                        <option>Select Option Three</option>
                                        <option>Select Option Four</option>
                                    </select>
                           </div>
                    </div>
                    <div class="form-column-right">
                        <div class="form-group title-name">
                            <label>Package:</label>
                            <input type="text" class="form-control inputmargin" placeholder="" name="compamy">
                        </div>
                    </div>
                </div>
      </div>
    <!--end:row form-->
                <!--start:row form-->
                <div class="form-row-group-content">
                    <h6 class="sub-title">Invoice 1</h6>
                    <div class="form-row-content">
                         <div class="form-column-left">
                            <div class="form-group title-name">
                                <label>Invoice Amount:</label>
                                <input type="text" class="form-control inputmargin" placeholder="" name="InvoiceAmount:">
                            </div>
                             <div class="form-group title-name">
                                 <label>Invoice Date:</label>
                                 <div class="date-picker input-group">
                                     <input type="text" class="form-control inputmargin"/>
                                 </div>
                             </div>
                             <div class="form-group title-name">
                                 <label>Due Date:</label>
                                 <div class="date-picker input-group">
                                     <input type="text" class="form-control inputmargin"/>
                                 </div>
                             </div>
                        </div>
                         <div class="form-column-right">
                            <div class="form-group">
                                <label>Description:</label>
                                <textarea class="form-control" rows="5"></textarea>
                                <div class="input-group topcss-gap">
                                    <span class="custom-checkbox right-align-checkbox">
                                    <input type="checkbox" id="c-8">
                                    <label for="c-8">Send email to client now</label>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end:row form-->

                <!--start:row form-->
                <div class="form-row-group-content">
                    <h6 class="sub-title">Invoice 2</h6>
                    <div class="form-row-content">
                         <div class="form-column-left">
                            <div class="form-group title-name">
                                <label>Invoice Amount:</label>
                                <input type="text" class="form-control inputmargin" placeholder="" name="InvoiceAmount:">
                            </div>
                             <div class="form-group title-name">
                                 <label>Invoice Date:</label>
                                 <div class="date-picker input-group">
                                     <input type="text" class="form-control inputmargin"/>
                                 </div>
                             </div>
                             <div class="form-group title-name">
                                 <label>Due Date:</label>
                                 <div class="date-picker input-group">
                                     <input type="text" class="form-control inputmargin"/>
                                 </div>
                             </div>
                        </div>
                         <div class="form-column-right">
                            <div class="form-group">
                                <label>Description:</label>
                                <textarea class="form-control" rows="5"></textarea>
                                <div class="input-group topcss-gap">
                                    <span class="custom-checkbox right-align-checkbox">
                                    <input type="checkbox" id="c-9">
                                    <label for="c-9">Send email to client now</label>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end:row form-->

             <div class="form-row-group-content"><button type="button" class="btn btn-primary createbtn">CREATE</button></div>

        </div>
    </div>

</div>
</body>
</html>

