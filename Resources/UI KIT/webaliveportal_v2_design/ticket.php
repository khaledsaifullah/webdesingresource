<?php include 'header.php'; ?>
<script type="text/javascript">
    $(document).ready(function(){
        $(".message-email-arrow-link").on("click",function (e) {
            e.preventDefault();
            $('.message-email-cc-content').toggle();
            $(this).toggleClass('active');
        });
    });
</script>
<div class="main-container">
    <?php include 'main-sidebar.php'; ?>
    <div class="main-page-content">
        <div class="page-ticket-content">
            <div class="page-listing-header">
                <h2>Tickets  <span><a href="ticketDetails.php" class="btn btn-primary">Create a ticket</a></span></h2>
            </div>
            <div class="ticket-search-filter">
                <form action="#" method="get">
                    <h5 class="title">Filter By</h5>
                    <div class="ticket-search-filter-body">
                        <div class="form-group">
                            <select class="custom-dropdown" name="owner">
                                <option>Owner</option>
                                <option value="mahtab">mahtab</option>
                                <option value="nafisur">nafisur</option>
                                <option value="masud">masud</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <div class="date-picker">
                                <input type="text" class="form-control" placeholder="Created"  name="created-date"   />
                            </div>
                        </div>
                        <div class="form-group">
                            <select class="custom-dropdown" name="dept">
                                <option>Dept</option>
                                <option value="srvdesign">SRV Design</option>
                                <option value="development">Development</option>
                                <option value="support">Support</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <select class="custom-dropdown" name="due">
                                <option>Due</option>
                                <option value="urgent">Urgent</option>
                                <option value="high">high</option>
                                <option value="medium">Medium</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <select class="custom-dropdown" name="status">
                                <option>Status</option>
                                <option value="open">Open</option>
                                <option value="closed">Closed</option>
                                <option value="resolved">Resolved</option>
                            </select>
                        </div>
                        <div class="form-group submit-filter">
                            <input type="text" class="form-control" placeholder="" name="ticketsearch" />
                            <input type="submit" class="btn btn-primary searchbtn" value="Search" />
                        </div>
                    </div>
                </form>
            </div>

            <table class="table email-ticket">
                <thead>
                <tr>
                    <th>
                        <div class="input-group">
                                <span class="custom-checkbox">
                                    <input type="checkbox" id="ch-1">
                                    <label for="ch-1">ID</label>
                                </span>
                        </div>
                    </th>

                    <th>Contact</th>
                    <th>Subject</th>
                    <th>Owner</th>
                    <th>Department</th>
                    <th>Priority</th>
                    <th>Status</th>
                </tr>
                </thead>

                <tbody>

                <tr>
                    <td>
                        <div class="input-group">
                                            <span class="custom-checkbox">
                                                <input type="checkbox" id="c-41">
                                                <label for="c-41">
                                                    <span class="star-ticket">
                                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                                        <strong>ABC-101-1001</strong>
                                                    </span>
                                                </label>
                                            </span>
                        </div>
                    </td>

                    <td><strong>Roberto Bolling</strong></td>
                    <td>Webcommander platform upgrade to 4.0 </td>
                    <td>Ani Disuza</td>
                    <td>General</td>
                    <td>Urgent</td>
                    <td>
                        <a href="#" class="archive-btn btn-radius">Open</a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="input-group">
                                            <span class="custom-checkbox">
                                                <input type="checkbox" id="c-42">
                                                <label for="c-42">
                                                    <span class="star-ticket">
                                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                                        ABC-101-1001
                                                    </span>
                                                </label>
                                            </span>
                        </div>
                    </td>

                    <td>Roberto Bolling</td>
                    <td>Webcommander platform upgrade to 4.0 </td>
                    <td>Ani Disuza</td>
                    <td>General</td>
                    <td>high</td>
                    <td>
                        <a href="#" class="link-ticket-btn btn-radius">Closed</a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="input-group">
                            <span class="custom-checkbox">
                                                <input type="checkbox" id="c-43">
                                                <label for="c-43">
                                                    <span class="star-ticket">
                                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                                        ABC-101-1001
                                                    </span>
                                                </label>
                                            </span>

                        </div>
                    </td>

                    <td>Roberto Bolling</td>
                    <td>Webcommander platform upgrade to 4.0 </td>
                    <td>Ani Disuza</td>
                    <td>General</td>
                    <td>Medium</td>
                    <td>
                        <a href="#" class="create-ticket-btn btn-radius">Resolved</a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="input-group">
                                            <span class="custom-checkbox">
                                                <input type="checkbox" id="c-44">
                                                <label for="c-44">
                                                    <span class="star-ticket">
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <strong>ABC-101-1001</strong>
                                                    </span>
                                                </label>
                                            </span>
                        </div>
                    </td>

                    <td><strong>Roberto Bolling</strong></td>
                    <td>Webcommander platform upgrade to 4.0 </td>
                    <td>Ani Disuza</td>
                    <td>General</td>
                    <td>Urgent</td>
                    <td>
                        <a href="#" class="archive-btn btn-radius">Open</a>
                    </td>
                </tr>



                <tr>
                    <td>
                        <div class="input-group">
                                            <span class="custom-checkbox">
                                                <input type="checkbox" id="c-51">
                                                <label for="c-51">
                                                    <span class="star-ticket">
                                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                                        <strong>ABC-101-1001</strong>
                                                    </span>
                                                </label>
                                            </span>
                        </div>
                    </td>

                    <td><strong>Roberto Bolling</strong></td>
                    <td>Webcommander platform upgrade to 4.0 </td>
                    <td>Ani Disuza</td>
                    <td>General</td>
                    <td>Urgent</td>
                    <td>
                        <a href="#" class="archive-btn btn-radius">Open</a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="input-group">
                                            <span class="custom-checkbox">
                                                <input type="checkbox" id="c-52">
                                                <label for="c-52">
                                                    <span class="star-ticket">
                                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                                        ABC-101-1001
                                                    </span>
                                                </label>
                                            </span>
                        </div>
                    </td>

                    <td>Roberto Bolling</td>
                    <td>Webcommander platform upgrade to 4.0 </td>
                    <td>Ani Disuza</td>
                    <td>General</td>
                    <td>high</td>
                    <td>
                        <a href="#" class="link-ticket-btn btn-radius">Closed</a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="input-group">
                            <span class="custom-checkbox">
                                                <input type="checkbox" id="c-53">
                                                <label for="c-53">
                                                    <span class="star-ticket">
                                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                                        ABC-101-1001
                                                    </span>
                                                </label>
                                            </span>

                        </div>
                    </td>

                    <td>Roberto Bolling</td>
                    <td>Webcommander platform upgrade to 4.0 </td>
                    <td>Ani Disuza</td>
                    <td>General</td>
                    <td>Medium</td>
                    <td>
                        <a href="#" class="create-ticket-btn btn-radius">Resolved</a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="input-group">
                                            <span class="custom-checkbox">
                                                <input type="checkbox" id="c-54">
                                                <label for="c-54">
                                                    <span class="star-ticket">
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <strong>ABC-101-1001</strong>
                                                    </span>
                                                </label>
                                            </span>
                        </div>
                    </td>

                    <td><strong>Roberto Bolling</strong></td>
                    <td>Webcommander platform upgrade to 4.0 </td>
                    <td>Ani Disuza</td>
                    <td>General</td>
                    <td>Urgent</td>
                    <td>
                        <a href="#" class="archive-btn btn-radius">Open</a>
                    </td>
                </tr>




                <tr>
                    <td>
                        <div class="input-group">
                                            <span class="custom-checkbox">
                                                <input type="checkbox" id="c-61">
                                                <label for="c-61">
                                                    <span class="star-ticket">
                                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                                        <strong>ABC-101-1001</strong>
                                                    </span>
                                                </label>
                                            </span>
                        </div>
                    </td>

                    <td><strong>Roberto Bolling</strong></td>
                    <td>Webcommander platform upgrade to 4.0 </td>
                    <td>Ani Disuza</td>
                    <td>General</td>
                    <td>Urgent</td>
                    <td>
                        <a href="#" class="archive-btn btn-radius">Open</a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="input-group">
                                            <span class="custom-checkbox">
                                                <input type="checkbox" id="c-62">
                                                <label for="c-62">
                                                    <span class="star-ticket">
                                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                                        ABC-101-1001
                                                    </span>
                                                </label>
                                            </span>
                        </div>
                    </td>

                    <td>Roberto Bolling</td>
                    <td>Webcommander platform upgrade to 4.0 </td>
                    <td>Ani Disuza</td>
                    <td>General</td>
                    <td>high</td>
                    <td>
                        <a href="#" class="link-ticket-btn btn-radius">Closed</a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="input-group">
                            <span class="custom-checkbox">
                                                <input type="checkbox" id="c-63">
                                                <label for="c-63">
                                                    <span class="star-ticket">
                                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                                        ABC-101-1001
                                                    </span>
                                                </label>
                                            </span>

                        </div>
                    </td>

                    <td>Roberto Bolling</td>
                    <td>Webcommander platform upgrade to 4.0 </td>
                    <td>Ani Disuza</td>
                    <td>General</td>
                    <td>Medium</td>
                    <td>
                        <a href="#" class="create-ticket-btn btn-radius">Resolved</a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="input-group">
                                            <span class="custom-checkbox">
                                                <input type="checkbox" id="c-64">
                                                <label for="c-64">
                                                    <span class="star-ticket">
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <strong>ABC-101-1001</strong>
                                                    </span>
                                                </label>
                                            </span>
                        </div>
                    </td>

                    <td><strong>Roberto Bolling</strong></td>
                    <td>Webcommander platform upgrade to 4.0 </td>
                    <td>Ani Disuza</td>
                    <td>General</td>
                    <td>Urgent</td>
                    <td>
                        <a href="#" class="archive-btn btn-radius">Open</a>
                    </td>
                </tr>





                </tbody>

                <tfoot>
                <tr><td colspan="7">
                        <div class="ticket-footer">
                            <div class="ticket-next-previous float-right">
                                <a class="page-link previous" href="#" aria-label="Previous">
                                    <i class="fa fa-angle-left" aria-hidden="true"></i>
                                </a>
                                <a class="page-link next" href="#" aria-label="Next">
                                    <i class="fa fa-angle-right" aria-hidden="true"></i>
                                </a>
                            </div>
                            <div class="ticket-count-number float-right">1-20 of 500</div>
                        </div>

                    </td></tr>
                </tfoot>

            </table>

        </div>
    </div>
</div>
</body>
</html>