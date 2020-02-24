<?php include 'header.php'; ?>
<div class="main-container">
    <?php include 'main-sidebar.php'; ?>

    <div class="main-page-content">
        <div class="page-listing-wraper">
            <div class="page-listing-header">
                <div class="row page-admin-top">
                    <div class="col-md-4"><h2>Billing <a href="#" class="btn btn-primary">Pay Selected</a></h2></div>
                    <div class="col-md-8">
                        asdfasdf asdfasdfasdfa
                    </div>
                </div>
            </div>

        </div>
        <div class="page-listing-content">
            <table class="table">
                <thead>
                <tr>
                    <th>
                        <div class="input-group">
                            <span class="custom-checkbox">
                                <input type="checkbox" id="c-50">
                                <label for="c-50">Invoice ID</label>
                            </span>
                        </div>
                    </th>
                    <th>Issue Date</th>
                    <th>Due Date</th>
                    <th>Payment Date</th>
                    <th>Subtotal($)</th>
                    <th>GST($)</th>
                    <th>Total($)</th>
                    <th>Due($)</th>
                    <th class="admin-action-split">Invoice/Receipt</th>
                </tr>
                </thead>

                <tbody>
                <?php for($i=0;$i<3;$i++){?>
                     <tr>
                        <td>
                            <div class="input-group">
                                <span class="custom-checkbox">
                                    <input type="checkbox" id="c-<?php echo $i;?>">
                                    <label for="c-<?php echo $i;?>">GDG545</label>
                                </span>
                            </div>
                        </td>
                        <td>06.27.25</td>
                        <td>06.02.25</td>
                         <td>06.02.25</td>
                        <td>50000</td>
                        <td>200</td>
                        <td>50200 (Discount:100)</td>
                        <td>5010</td>
                        <td class="admin-action-split">
                            <span><a href="#"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></a></span>
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