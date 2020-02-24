<?php include 'header.php'; ?>
<div class="main-container">
    <?php include 'main-sidebar.php'; ?>
    <div class="main-page-content">
        <div class="email-listing-content">
            <div class="page-heading">
                <h2>Emails</h2>
            </div>

            <div class="page-tab-wrapper">
                <div class="page-tab-heading email-tab-heading">
                    <ul class="nav nav-pills" id="pills-tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="pills-inbox-tab" data-toggle="pill" href="#pills-inbox" role="tab" aria-controls="pills-inbox" aria-selected="true">Inbox</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-unlinked-tab" data-toggle="pill" href="#pills-unlinked" role="tab" aria-controls="pills-unlinked" aria-selected="false">Unlinked</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-linked-tab" data-toggle="pill" href="#pills-linked" role="tab" aria-controls="pills-linked" aria-selected="false">Linked</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-archive-tab" data-toggle="pill" href="#pills-archive" role="tab" aria-controls="pills-archive" aria-selected="false">Archive</a>
                        </li>
                    </ul>
                    <div class="right-search-box float-right">
                        <form action="email-detail.php">
                            <div class="form-group">
                                <input type="text" class="form-control searchinput" placeholder="" name="searchinput" />
                                <input type="submit" value="search" class="btn btn-primary searchsubmit" />
                            </div>
                        </form>
                    </div>
                </div>

                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-inbox" role="tabpanel" aria-labelledby="pills-inbox-tab">
                        <table class="table email-table">
                            <thead>
                            <tr>
                                <th>
                                    <div class="input-group">
                            <span class="custom-checkbox">
                                <input type="checkbox" id="ch-1">
                                <label for="ch-1">Ticket</label>
                            </span>
                                    </div>
                                </th>
                                <th>&nbsp;</th>
                                <th>Sender</th>
                                <th>Email Subject</th>
                                <th>Received</th>
                            </tr>
                            </thead>

                            <tbody>
                            <tr>
                                <td>
                                    <div class="input-group">
                                    <span class="custom-checkbox">
                                        <input type="checkbox" id="c-1">
                                        <label for="c-1">45681</label>
                                    </span>
                                    </div>
                                </td>
                                <td>
                                    <a href="#" class="link-ticket-btn btn-radius">Link Ticket</a>
                                </td>
                                <td>Craig Jones</td>
                                <td>Ready to learn how to optimize your conversion rate?</td>
                                <td>Sat, May 25, 8:28PM</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="input-group">
                                    <span class="custom-checkbox">
                                        <input type="checkbox" id="c-2">
                                        <label for="c-2">C66552</label>
                                    </span>
                                    </div>
                                </td>
                                <td>
                                    <a href="#"  class="create-ticket-btn btn-radius">Create Ticket </a>
                                </td>
                                <td>Craig Jones</td>
                                <td>Request Quote</td>
                                <td>Sat, May 27, 8:28PM</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="input-group">
                                    <span class="custom-checkbox">
                                        <input type="checkbox" id="c-3">
                                        <label for="c-3">------</label>
                                    </span>
                                    </div>
                                </td>
                                <td>
                                    <a href="#" class="create-ticket-btn btn-radius">Create Ticket</span> </a>
                                    <a href="#" class="archive-btn btn-radius">Archive</span> </a>
                                </td>
                                <td>Craig Jones</td>
                                <td>We like to feature WebAlive as a top Software Company</td>
                                <td>Sat, May 25, 8:28PM</td>
                            </tr>

                            <tr>
                                <td>
                                    <div class="input-group">
                                    <span class="custom-checkbox">
                                        <input type="checkbox" id="c-4">
                                        <label for="c-4">45681</label>
                                    </span>
                                    </div>
                                </td>
                                <td>
                                    <a href="#" class="link-ticket-btn btn-radius">Link Ticket</a>
                                </td>
                                <td>Craig Jones</td>
                                <td>Ready to learn how to optimize your conversion rate?</td>
                                <td>Sat, May 25, 8:28PM</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="input-group">
                                    <span class="custom-checkbox">
                                        <input type="checkbox" id="c-5">
                                        <label for="c-5">C66552</label>
                                    </span>
                                    </div>
                                </td>
                                <td>
                                    <a href="#"  class="create-ticket-btn btn-radius">Create Ticket </a>
                                </td>
                                <td>Craig Jones</td>
                                <td>Request Quote</td>
                                <td>Sat, May 27, 8:28PM</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="input-group">
                                    <span class="custom-checkbox">
                                        <input type="checkbox" id="c-6">
                                        <label for="c-6">------</label>
                                    </span>
                                    </div>
                                </td>
                                <td>
                                    <a href="#" class="create-ticket-btn btn-radius">Create Ticket</span> </a>
                                    <a href="#" class="archive-btn btn-radius">Archive</span> </a>
                                </td>
                                <td>Craig Jones</td>
                                <td>We like to feature WebAlive as a top Software Company</td>
                                <td>Sat, May 25, 8:28PM</td>
                            </tr>

                            <tr>
                                <td>
                                    <div class="input-group">
                                    <span class="custom-checkbox">
                                        <input type="checkbox" id="c-7">
                                        <label for="c-7">45681</label>
                                    </span>
                                    </div>
                                </td>
                                <td>
                                    <a href="#" class="link-ticket-btn btn-radius">Link Ticket</a>
                                </td>
                                <td>Craig Jones</td>
                                <td>Ready to learn how to optimize your conversion rate?</td>
                                <td>Sat, May 25, 8:28PM</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="input-group">
                                    <span class="custom-checkbox">
                                        <input type="checkbox" id="c-8">
                                        <label for="c-8">C66552</label>
                                    </span>
                                    </div>
                                </td>
                                <td>
                                    <a href="#"  class="create-ticket-btn btn-radius">Create Ticket </a>
                                </td>
                                <td>Craig Jones</td>
                                <td>Request Quote</td>
                                <td>Sat, May 27, 8:28PM</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="input-group">
                                    <span class="custom-checkbox">
                                        <input type="checkbox" id="c-9">
                                        <label for="c-9">------</label>
                                    </span>
                                    </div>
                                </td>
                                <td>
                                    <a href="#" class="create-ticket-btn btn-radius">Create Ticket</span> </a>
                                    <a href="#" class="archive-btn btn-radius">Archive</span> </a>
                                </td>
                                <td>Craig Jones</td>
                                <td>We like to feature WebAlive as a top Software Company</td>
                                <td>Sat, May 25, 8:28PM</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="input-group">
                                    <span class="custom-checkbox">
                                        <input type="checkbox" id="c-10">
                                        <label for="c-10">45681</label>
                                    </span>
                                    </div>
                                </td>
                                <td>
                                    <a href="#" class="link-ticket-btn btn-radius">Link Ticket</a>
                                </td>
                                <td>Craig Jones</td>
                                <td>Ready to learn how to optimize your conversion rate?</td>
                                <td>Sat, May 25, 8:28PM</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="input-group">
                                    <span class="custom-checkbox">
                                        <input type="checkbox" id="c-11">
                                        <label for="c-11">C66552</label>
                                    </span>
                                    </div>
                                </td>
                                <td>
                                    <a href="#"  class="create-ticket-btn btn-radius">Create Ticket </a>
                                </td>
                                <td>Craig Jones</td>
                                <td>Request Quote</td>
                                <td>Sat, May 27, 8:28PM</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="input-group">
                                    <span class="custom-checkbox">
                                        <input type="checkbox" id="c-12">
                                        <label for="c-12">------</label>
                                    </span>
                                    </div>
                                </td>
                                <td>
                                    <a href="#" class="create-ticket-btn btn-radius">Create Ticket</span> </a>
                                    <a href="#" class="archive-btn btn-radius">Archive</span> </a>
                                </td>
                                <td>Craig Jones</td>
                                <td>We like to feature WebAlive as a top Software Company</td>
                                <td>Sat, May 25, 8:28PM</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="input-group">
                                    <span class="custom-checkbox">
                                        <input type="checkbox" id="c-13">
                                        <label for="c-13">45681</label>
                                    </span>
                                    </div>
                                </td>
                                <td>
                                    <a href="#" class="link-ticket-btn btn-radius">Link Ticket</a>
                                </td>
                                <td>Craig Jones</td>
                                <td>Ready to learn how to optimize your conversion rate?</td>
                                <td>Sat, May 25, 8:28PM</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="input-group">
                                    <span class="custom-checkbox">
                                        <input type="checkbox" id="c-14">
                                        <label for="c-14">C66552</label>
                                    </span>
                                    </div>
                                </td>
                                <td>
                                    <a href="#"  class="create-ticket-btn btn-radius">Create Ticket </a>
                                </td>
                                <td>Craig Jones</td>
                                <td>Request Quote</td>
                                <td>Sat, May 27, 8:28PM</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="input-group">
                                    <span class="custom-checkbox">
                                        <input type="checkbox" id="c-15">
                                        <label for="c-15">------</label>
                                    </span>
                                    </div>
                                </td>
                                <td>
                                    <a href="#" class="create-ticket-btn btn-radius">Create Ticket</span> </a>
                                    <a href="#" class="archive-btn btn-radius">Archive</span> </a>
                                </td>
                                <td>Craig Jones</td>
                                <td>We like to feature WebAlive as a top Software Company</td>
                                <td>Sat, May 25, 8:28PM</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="input-group">
                                    <span class="custom-checkbox">
                                        <input type="checkbox" id="c-16">
                                        <label for="c-16">45681</label>
                                    </span>
                                    </div>
                                </td>
                                <td>
                                    <a href="#" class="link-ticket-btn btn-radius">Link Ticket</a>
                                </td>
                                <td>Craig Jones</td>
                                <td>Ready to learn how to optimize your conversion rate?</td>
                                <td>Sat, May 25, 8:28PM</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="input-group">
                                    <span class="custom-checkbox">
                                        <input type="checkbox" id="c-17">
                                        <label for="c-17">C66552</label>
                                    </span>
                                    </div>
                                </td>
                                <td>
                                    <a href="#"  class="create-ticket-btn btn-radius">Create Ticket </a>
                                </td>
                                <td>Craig Jones</td>
                                <td>Request Quote</td>
                                <td>Sat, May 27, 8:28PM</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="input-group">
                                    <span class="custom-checkbox">
                                        <input type="checkbox" id="c-18">
                                        <label for="c-18">------</label>
                                    </span>
                                    </div>
                                </td>
                                <td>
                                    <a href="#" class="create-ticket-btn btn-radius">Create Ticket</span> </a>
                                    <a href="#" class="archive-btn btn-radius">Archive</span> </a>
                                </td>
                                <td>Craig Jones</td>
                                <td>We like to feature WebAlive as a top Software Company</td>
                                <td>Sat, May 25, 8:28PM</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane fade" id="pills-unlinked" role="tabpanel" aria-labelledby="pills-unlinked-tab">
                        <table class="table email-table">
                            <thead>
                            <tr>
                                <th>
                                    <div class="input-group">
                            <span class="custom-checkbox">
                                <input type="checkbox" id="ch-1unlinked">
                                <label for="ch-1unlinked">Ticket</label>
                            </span>
                                    </div>
                                </th>
                                <th>&nbsp;</th>
                                <th>Sender</th>
                                <th>Email Subject</th>
                                <th>Received</th>
                            </tr>
                            </thead>

                            <tbody>
                            <tr>
                                <td>
                                    <div class="input-group">
                                    <span class="custom-checkbox">
                                        <input type="checkbox" id="c-1unlinked">
                                        <label for="c-1unlinked">45681</label>
                                    </span>
                                    </div>
                                </td>
                                <td>
                                    <a href="#" class="link-ticket-btn btn-radius">Link Ticket</a>
                                </td>
                                <td>Craig Jones</td>
                                <td>Ready to learn how to optimize your conversion rate?</td>
                                <td>Sat, May 25, 8:28PM</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="input-group">
                                    <span class="custom-checkbox">
                                        <input type="checkbox" id="c-2unlinked">
                                        <label for="c-2unlinked">C66552</label>
                                    </span>
                                    </div>
                                </td>
                                <td>
                                    <a href="#"  class="create-ticket-btn btn-radius">Create Ticket </a>
                                </td>
                                <td>Craig Jones</td>
                                <td>Request Quote</td>
                                <td>Sat, May 27, 8:28PM</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="input-group">
                                    <span class="custom-checkbox">
                                        <input type="checkbox" id="c-3unlinked">
                                        <label for="c-3unlinked">------</label>
                                    </span>
                                    </div>
                                </td>
                                <td>
                                    <a href="#" class="create-ticket-btn btn-radius">Create Ticket</span> </a>
                                    <a href="#" class="archive-btn btn-radius">Archive</span> </a>
                                </td>
                                <td>Craig Jones</td>
                                <td>We like to feature WebAlive as a top Software Company</td>
                                <td>Sat, May 25, 8:28PM</td>
                            </tr>

                            <tr>
                                <td>
                                    <div class="input-group">
                                    <span class="custom-checkbox">
                                        <input type="checkbox" id="c-4unlinked">
                                        <label for="c-4unlinked">45681</label>
                                    </span>
                                    </div>
                                </td>
                                <td>
                                    <a href="#" class="link-ticket-btn btn-radius">Link Ticket</a>
                                </td>
                                <td>Craig Jones</td>
                                <td>Ready to learn how to optimize your conversion rate?</td>
                                <td>Sat, May 25, 8:28PM</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="input-group">
                                    <span class="custom-checkbox">
                                        <input type="checkbox" id="c-5unlinked">
                                        <label for="c-5unlinked">C66552</label>
                                    </span>
                                    </div>
                                </td>
                                <td>
                                    <a href="#"  class="create-ticket-btn btn-radius">Create Ticket </a>
                                </td>
                                <td>Craig Jones</td>
                                <td>Request Quote</td>
                                <td>Sat, May 27, 8:28PM</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="input-group">
                                    <span class="custom-checkbox">
                                        <input type="checkbox" id="c-6unlinked">
                                        <label for="c-6unlinked">------</label>
                                    </span>
                                    </div>
                                </td>
                                <td>
                                    <a href="#" class="create-ticket-btn btn-radius">Create Ticket</span> </a>
                                    <a href="#" class="archive-btn btn-radius">Archive</span> </a>
                                </td>
                                <td>Craig Jones</td>
                                <td>We like to feature WebAlive as a top Software Company</td>
                                <td>Sat, May 25, 8:28PM</td>
                            </tr>

                            <tr>
                                <td>
                                    <div class="input-group">
                                    <span class="custom-checkbox">
                                        <input type="checkbox" id="c-7unlinked">
                                        <label for="c-7unlinked">45681</label>
                                    </span>
                                    </div>
                                </td>
                                <td>
                                    <a href="#" class="link-ticket-btn btn-radius">Link Ticket</a>
                                </td>
                                <td>Craig Jones</td>
                                <td>Ready to learn how to optimize your conversion rate?</td>
                                <td>Sat, May 25, 8:28PM</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="input-group">
                                    <span class="custom-checkbox">
                                        <input type="checkbox" id="c-8unlinked">
                                        <label for="c-8unlinked">C66552</label>
                                    </span>
                                    </div>
                                </td>
                                <td>
                                    <a href="#"  class="create-ticket-btn btn-radius">Create Ticket </a>
                                </td>
                                <td>Craig Jones</td>
                                <td>Request Quote</td>
                                <td>Sat, May 27, 8:28PM</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="input-group">
                                    <span class="custom-checkbox">
                                        <input type="checkbox" id="c-9unlinked">
                                        <label for="c-9unlinked">------</label>
                                    </span>
                                    </div>
                                </td>
                                <td>
                                    <a href="#" class="create-ticket-btn btn-radius">Create Ticket</span> </a>
                                    <a href="#" class="archive-btn btn-radius">Archive</span> </a>
                                </td>
                                <td>Craig Jones</td>
                                <td>We like to feature WebAlive as a top Software Company</td>
                                <td>Sat, May 25, 8:28PM</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="input-group">
                                    <span class="custom-checkbox">
                                        <input type="checkbox" id="c-10unlinked">
                                        <label for="c-10unlinked">45681</label>
                                    </span>
                                    </div>
                                </td>
                                <td>
                                    <a href="#" class="link-ticket-btn btn-radius">Link Ticket</a>
                                </td>
                                <td>Craig Jones</td>
                                <td>Ready to learn how to optimize your conversion rate?</td>
                                <td>Sat, May 25, 8:28PM</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="input-group">
                                    <span class="custom-checkbox">
                                        <input type="checkbox" id="c-11unlinked">
                                        <label for="c-11unlinked">C66552</label>
                                    </span>
                                    </div>
                                </td>
                                <td>
                                    <a href="#"  class="create-ticket-btn btn-radius">Create Ticket </a>
                                </td>
                                <td>Craig Jones</td>
                                <td>Request Quote</td>
                                <td>Sat, May 27, 8:28PM</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="input-group">
                                    <span class="custom-checkbox">
                                        <input type="checkbox" id="c-12unlinked">
                                        <label for="c-12unlinked">------</label>
                                    </span>
                                    </div>
                                </td>
                                <td>
                                    <a href="#" class="create-ticket-btn btn-radius">Create Ticket</span> </a>
                                    <a href="#" class="archive-btn btn-radius">Archive</span> </a>
                                </td>
                                <td>Craig Jones</td>
                                <td>We like to feature WebAlive as a top Software Company</td>
                                <td>Sat, May 25, 8:28PM</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="input-group">
                                    <span class="custom-checkbox">
                                        <input type="checkbox" id="c-13unlinked">
                                        <label for="c-13unlinked">45681</label>
                                    </span>
                                    </div>
                                </td>
                                <td>
                                    <a href="#" class="link-ticket-btn btn-radius">Link Ticket</a>
                                </td>
                                <td>Craig Jones</td>
                                <td>Ready to learn how to optimize your conversion rate?</td>
                                <td>Sat, May 25, 8:28PM</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="input-group">
                                    <span class="custom-checkbox">
                                        <input type="checkbox" id="c-14unlinked">
                                        <label for="c-14unlinked">C66552</label>
                                    </span>
                                    </div>
                                </td>
                                <td>
                                    <a href="#"  class="create-ticket-btn btn-radius">Create Ticket </a>
                                </td>
                                <td>Craig Jones</td>
                                <td>Request Quote</td>
                                <td>Sat, May 27, 8:28PM</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="input-group">
                                    <span class="custom-checkbox">
                                        <input type="checkbox" id="c-15unlinked">
                                        <label for="c-15unlinked">------</label>
                                    </span>
                                    </div>
                                </td>
                                <td>
                                    <a href="#" class="create-ticket-btn btn-radius">Create Ticket</span> </a>
                                    <a href="#" class="archive-btn btn-radius">Archive</span> </a>
                                </td>
                                <td>Craig Jones</td>
                                <td>We like to feature WebAlive as a top Software Company</td>
                                <td>Sat, May 25, 8:28PM</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="input-group">
                                    <span class="custom-checkbox">
                                        <input type="checkbox" id="c-16unlinked">
                                        <label for="c-16unlinked">45681</label>
                                    </span>
                                    </div>
                                </td>
                                <td>
                                    <a href="#" class="link-ticket-btn btn-radius">Link Ticket</a>
                                </td>
                                <td>Craig Jones</td>
                                <td>Ready to learn how to optimize your conversion rate?</td>
                                <td>Sat, May 25, 8:28PM</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="input-group">
                                    <span class="custom-checkbox">
                                        <input type="checkbox" id="c-17unlinked">
                                        <label for="c-17unlinked">C66552</label>
                                    </span>
                                    </div>
                                </td>
                                <td>
                                    <a href="#"  class="create-ticket-btn btn-radius">Create Ticket </a>
                                </td>
                                <td>Craig Jones</td>
                                <td>Request Quote</td>
                                <td>Sat, May 27, 8:28PM</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="input-group">
                                    <span class="custom-checkbox">
                                        <input type="checkbox" id="c-18unlinked">
                                        <label for="c-18unlinked">------</label>
                                    </span>
                                    </div>
                                </td>
                                <td>
                                    <a href="#" class="create-ticket-btn btn-radius">Create Ticket</span> </a>
                                    <a href="#" class="archive-btn btn-radius">Archive</span> </a>
                                </td>
                                <td>Craig Jones</td>
                                <td>We like to feature WebAlive as a top Software Company</td>
                                <td>Sat, May 25, 8:28PM</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane fade" id="pills-linked" role="tabpanel" aria-labelledby="pills-linked-tab">
                        <table class="table email-table">
                            <thead>
                            <tr>
                                <th>
                                    <div class="input-group">
                            <span class="custom-checkbox">
                                <input type="checkbox" id="ch-1Linked">
                                <label for="ch-1Linked">Ticket</label>
                            </span>
                                    </div>
                                </th>
                                <th>&nbsp;</th>
                                <th>Sender</th>
                                <th>Email Subject</th>
                                <th>Received</th>
                            </tr>
                            </thead>

                            <tbody>
                            <tr>
                                <td>
                                    <div class="input-group">
                                    <span class="custom-checkbox">
                                        <input type="checkbox" id="c-1Linked">
                                        <label for="c-1Linked">45681</label>
                                    </span>
                                    </div>
                                </td>
                                <td>
                                    <a href="#" class="link-ticket-btn btn-radius">Link Ticket</a>
                                </td>
                                <td>Craig Jones</td>
                                <td>Ready to learn how to optimize your conversion rate?</td>
                                <td>Sat, May 25, 8:28PM</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="input-group">
                                    <span class="custom-checkbox">
                                        <input type="checkbox" id="c-2Linked">
                                        <label for="c-2Linked">C66552</label>
                                    </span>
                                    </div>
                                </td>
                                <td>
                                    <a href="#"  class="create-ticket-btn btn-radius">Create Ticket </a>
                                </td>
                                <td>Craig Jones</td>
                                <td>Request Quote</td>
                                <td>Sat, May 27, 8:28PM</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="input-group">
                                    <span class="custom-checkbox">
                                        <input type="checkbox" id="c-3Linked">
                                        <label for="c-3Linked">------</label>
                                    </span>
                                    </div>
                                </td>
                                <td>
                                    <a href="#" class="create-ticket-btn btn-radius">Create Ticket</span> </a>
                                    <a href="#" class="archive-btn btn-radius">Archive</span> </a>
                                </td>
                                <td>Craig Jones</td>
                                <td>We like to feature WebAlive as a top Software Company</td>
                                <td>Sat, May 25, 8:28PM</td>
                            </tr>

                            <tr>
                                <td>
                                    <div class="input-group">
                                    <span class="custom-checkbox">
                                        <input type="checkbox" id="c-4Linked">
                                        <label for="c-4Linked">45681</label>
                                    </span>
                                    </div>
                                </td>
                                <td>
                                    <a href="#" class="link-ticket-btn btn-radius">Link Ticket</a>
                                </td>
                                <td>Craig Jones</td>
                                <td>Ready to learn how to optimize your conversion rate?</td>
                                <td>Sat, May 25, 8:28PM</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="input-group">
                                    <span class="custom-checkbox">
                                        <input type="checkbox" id="c-5Linked">
                                        <label for="c-5Linked">C66552</label>
                                    </span>
                                    </div>
                                </td>
                                <td>
                                    <a href="#"  class="create-ticket-btn btn-radius">Create Ticket </a>
                                </td>
                                <td>Craig Jones</td>
                                <td>Request Quote</td>
                                <td>Sat, May 27, 8:28PM</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="input-group">
                                    <span class="custom-checkbox">
                                        <input type="checkbox" id="c-6Linked">
                                        <label for="c-6Linked">------</label>
                                    </span>
                                    </div>
                                </td>
                                <td>
                                    <a href="#" class="create-ticket-btn btn-radius">Create Ticket</span> </a>
                                    <a href="#" class="archive-btn btn-radius">Archive</span> </a>
                                </td>
                                <td>Craig Jones</td>
                                <td>We like to feature WebAlive as a top Software Company</td>
                                <td>Sat, May 25, 8:28PM</td>
                            </tr>

                            <tr>
                                <td>
                                    <div class="input-group">
                                    <span class="custom-checkbox">
                                        <input type="checkbox" id="c-7Linked">
                                        <label for="c-7Linked">45681</label>
                                    </span>
                                    </div>
                                </td>
                                <td>
                                    <a href="#" class="link-ticket-btn btn-radius">Link Ticket</a>
                                </td>
                                <td>Craig Jones</td>
                                <td>Ready to learn how to optimize your conversion rate?</td>
                                <td>Sat, May 25, 8:28PM</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="input-group">
                                    <span class="custom-checkbox">
                                        <input type="checkbox" id="c-8Linked">
                                        <label for="c-8Linked">C66552</label>
                                    </span>
                                    </div>
                                </td>
                                <td>
                                    <a href="#"  class="create-ticket-btn btn-radius">Create Ticket </a>
                                </td>
                                <td>Craig Jones</td>
                                <td>Request Quote</td>
                                <td>Sat, May 27, 8:28PM</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="input-group">
                                    <span class="custom-checkbox">
                                        <input type="checkbox" id="c-9Linked">
                                        <label for="c-9Linked">------</label>
                                    </span>
                                    </div>
                                </td>
                                <td>
                                    <a href="#" class="create-ticket-btn btn-radius">Create Ticket</span> </a>
                                    <a href="#" class="archive-btn btn-radius">Archive</span> </a>
                                </td>
                                <td>Craig Jones</td>
                                <td>We like to feature WebAlive as a top Software Company</td>
                                <td>Sat, May 25, 8:28PM</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="input-group">
                                    <span class="custom-checkbox">
                                        <input type="checkbox" id="c-10Linked">
                                        <label for="c-10Linked">45681</label>
                                    </span>
                                    </div>
                                </td>
                                <td>
                                    <a href="#" class="link-ticket-btn btn-radius">Link Ticket</a>
                                </td>
                                <td>Craig Jones</td>
                                <td>Ready to learn how to optimize your conversion rate?</td>
                                <td>Sat, May 25, 8:28PM</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="input-group">
                                    <span class="custom-checkbox">
                                        <input type="checkbox" id="c-11Linked">
                                        <label for="c-11Linked">C66552</label>
                                    </span>
                                    </div>
                                </td>
                                <td>
                                    <a href="#"  class="create-ticket-btn btn-radius">Create Ticket </a>
                                </td>
                                <td>Craig Jones</td>
                                <td>Request Quote</td>
                                <td>Sat, May 27, 8:28PM</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="input-group">
                                    <span class="custom-checkbox">
                                        <input type="checkbox" id="c-12Linked">
                                        <label for="c-12Linked">------</label>
                                    </span>
                                    </div>
                                </td>
                                <td>
                                    <a href="#" class="create-ticket-btn btn-radius">Create Ticket</span> </a>
                                    <a href="#" class="archive-btn btn-radius">Archive</span> </a>
                                </td>
                                <td>Craig Jones</td>
                                <td>We like to feature WebAlive as a top Software Company</td>
                                <td>Sat, May 25, 8:28PM</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="input-group">
                                    <span class="custom-checkbox">
                                        <input type="checkbox" id="c-13Linked">
                                        <label for="c-13Linked">45681</label>
                                    </span>
                                    </div>
                                </td>
                                <td>
                                    <a href="#" class="link-ticket-btn btn-radius">Link Ticket</a>
                                </td>
                                <td>Craig Jones</td>
                                <td>Ready to learn how to optimize your conversion rate?</td>
                                <td>Sat, May 25, 8:28PM</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="input-group">
                                    <span class="custom-checkbox">
                                        <input type="checkbox" id="c-14Linked">
                                        <label for="c-14Linked">C66552</label>
                                    </span>
                                    </div>
                                </td>
                                <td>
                                    <a href="#"  class="create-ticket-btn btn-radius">Create Ticket </a>
                                </td>
                                <td>Craig Jones</td>
                                <td>Request Quote</td>
                                <td>Sat, May 27, 8:28PM</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="input-group">
                                    <span class="custom-checkbox">
                                        <input type="checkbox" id="c-15Linked">
                                        <label for="c-15Linked">------</label>
                                    </span>
                                    </div>
                                </td>
                                <td>
                                    <a href="#" class="create-ticket-btn btn-radius">Create Ticket</span> </a>
                                    <a href="#" class="archive-btn btn-radius">Archive</span> </a>
                                </td>
                                <td>Craig Jones</td>
                                <td>We like to feature WebAlive as a top Software Company</td>
                                <td>Sat, May 25, 8:28PM</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="input-group">
                                    <span class="custom-checkbox">
                                        <input type="checkbox" id="c-16Linked">
                                        <label for="c-16Linked">45681</label>
                                    </span>
                                    </div>
                                </td>
                                <td>
                                    <a href="#" class="link-ticket-btn btn-radius">Link Ticket</a>
                                </td>
                                <td>Craig Jones</td>
                                <td>Ready to learn how to optimize your conversion rate?</td>
                                <td>Sat, May 25, 8:28PM</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="input-group">
                                    <span class="custom-checkbox">
                                        <input type="checkbox" id="c-17Linked">
                                        <label for="c-17Linked">C66552</label>
                                    </span>
                                    </div>
                                </td>
                                <td>
                                    <a href="#"  class="create-ticket-btn btn-radius">Create Ticket </a>
                                </td>
                                <td>Craig Jones</td>
                                <td>Request Quote</td>
                                <td>Sat, May 27, 8:28PM</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="input-group">
                                    <span class="custom-checkbox">
                                        <input type="checkbox" id="c-18Linked">
                                        <label for="c-18Linked">------</label>
                                    </span>
                                    </div>
                                </td>
                                <td>
                                    <a href="#" class="create-ticket-btn btn-radius">Create Ticket</span> </a>
                                    <a href="#" class="archive-btn btn-radius">Archive</span> </a>
                                </td>
                                <td>Craig Jones</td>
                                <td>We like to feature WebAlive as a top Software Company</td>
                                <td>Sat, May 25, 8:28PM</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane fade" id="pills-archive" role="tabpanel" aria-labelledby="pills-archive-tab">
                        <table class="table email-table">
                            <thead>
                            <tr>
                                <th>
                                    <div class="input-group">
                            <span class="custom-checkbox">
                                <input type="checkbox" id="ch-1Archive">
                                <label for="ch-1Archive">Ticket</label>
                            </span>
                                    </div>
                                </th>
                                <th>&nbsp;</th>
                                <th>Sender</th>
                                <th>Email Subject</th>
                                <th>Received</th>
                            </tr>
                            </thead>

                            <tbody>
                            <tr>
                                <td>
                                    <div class="input-group">
                                    <span class="custom-checkbox">
                                        <input type="checkbox" id="c-1Archive">
                                        <label for="c-1Archive">45681</label>
                                    </span>
                                    </div>
                                </td>
                                <td>
                                    <a href="#" class="link-ticket-btn btn-radius">Link Ticket</a>
                                </td>
                                <td>Craig Jones</td>
                                <td>Ready to learn how to optimize your conversion rate?</td>
                                <td>Sat, May 25, 8:28PM</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="input-group">
                                    <span class="custom-checkbox">
                                        <input type="checkbox" id="c-2Archive">
                                        <label for="c-2Archive">C66552</label>
                                    </span>
                                    </div>
                                </td>
                                <td>
                                    <a href="#"  class="create-ticket-btn btn-radius">Create Ticket </a>
                                </td>
                                <td>Craig Jones</td>
                                <td>Request Quote</td>
                                <td>Sat, May 27, 8:28PM</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="input-group">
                                    <span class="custom-checkbox">
                                        <input type="checkbox" id="c-3Archive">
                                        <label for="c-3Archive">------</label>
                                    </span>
                                    </div>
                                </td>
                                <td>
                                    <a href="#" class="create-ticket-btn btn-radius">Create Ticket</span> </a>
                                    <a href="#" class="archive-btn btn-radius">Archive</span> </a>
                                </td>
                                <td>Craig Jones</td>
                                <td>We like to feature WebAlive as a top Software Company</td>
                                <td>Sat, May 25, 8:28PM</td>
                            </tr>

                            <tr>
                                <td>
                                    <div class="input-group">
                                    <span class="custom-checkbox">
                                        <input type="checkbox" id="c-4Archive">
                                        <label for="c-4Archive">45681</label>
                                    </span>
                                    </div>
                                </td>
                                <td>
                                    <a href="#" class="link-ticket-btn btn-radius">Link Ticket</a>
                                </td>
                                <td>Craig Jones</td>
                                <td>Ready to learn how to optimize your conversion rate?</td>
                                <td>Sat, May 25, 8:28PM</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="input-group">
                                    <span class="custom-checkbox">
                                        <input type="checkbox" id="c-5Archive">
                                        <label for="c-5Archive">C66552</label>
                                    </span>
                                    </div>
                                </td>
                                <td>
                                    <a href="#"  class="create-ticket-btn btn-radius">Create Ticket </a>
                                </td>
                                <td>Craig Jones</td>
                                <td>Request Quote</td>
                                <td>Sat, May 27, 8:28PM</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="input-group">
                                    <span class="custom-checkbox">
                                        <input type="checkbox" id="c-6Archive">
                                        <label for="c-6Archive">------</label>
                                    </span>
                                    </div>
                                </td>
                                <td>
                                    <a href="#" class="create-ticket-btn btn-radius">Create Ticket</span> </a>
                                    <a href="#" class="archive-btn btn-radius">Archive</span> </a>
                                </td>
                                <td>Craig Jones</td>
                                <td>We like to feature WebAlive as a top Software Company</td>
                                <td>Sat, May 25, 8:28PM</td>
                            </tr>

                            <tr>
                                <td>
                                    <div class="input-group">
                                    <span class="custom-checkbox">
                                        <input type="checkbox" id="c-7Archive">
                                        <label for="c-7Archive">45681</label>
                                    </span>
                                    </div>
                                </td>
                                <td>
                                    <a href="#" class="link-ticket-btn btn-radius">Link Ticket</a>
                                </td>
                                <td>Craig Jones</td>
                                <td>Ready to learn how to optimize your conversion rate?</td>
                                <td>Sat, May 25, 8:28PM</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="input-group">
                                    <span class="custom-checkbox">
                                        <input type="checkbox" id="c-8Archive">
                                        <label for="c-8Archive">C66552</label>
                                    </span>
                                    </div>
                                </td>
                                <td>
                                    <a href="#"  class="create-ticket-btn btn-radius">Create Ticket </a>
                                </td>
                                <td>Craig Jones</td>
                                <td>Request Quote</td>
                                <td>Sat, May 27, 8:28PM</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="input-group">
                                    <span class="custom-checkbox">
                                        <input type="checkbox" id="c-9Archive">
                                        <label for="c-9Archive">------</label>
                                    </span>
                                    </div>
                                </td>
                                <td>
                                    <a href="#" class="create-ticket-btn btn-radius">Create Ticket</span> </a>
                                    <a href="#" class="archive-btn btn-radius">Archive</span> </a>
                                </td>
                                <td>Craig Jones</td>
                                <td>We like to feature WebAlive as a top Software Company</td>
                                <td>Sat, May 25, 8:28PM</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="input-group">
                                    <span class="custom-checkbox">
                                        <input type="checkbox" id="c-10Archive">
                                        <label for="c-10Archive">45681</label>
                                    </span>
                                    </div>
                                </td>
                                <td>
                                    <a href="#" class="link-ticket-btn btn-radius">Link Ticket</a>
                                </td>
                                <td>Craig Jones</td>
                                <td>Ready to learn how to optimize your conversion rate?</td>
                                <td>Sat, May 25, 8:28PM</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="input-group">
                                    <span class="custom-checkbox">
                                        <input type="checkbox" id="c-11Archive">
                                        <label for="c-11Archive">C66552</label>
                                    </span>
                                    </div>
                                </td>
                                <td>
                                    <a href="#"  class="create-ticket-btn btn-radius">Create Ticket </a>
                                </td>
                                <td>Craig Jones</td>
                                <td>Request Quote</td>
                                <td>Sat, May 27, 8:28PM</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="input-group">
                                    <span class="custom-checkbox">
                                        <input type="checkbox" id="c-12Archive">
                                        <label for="c-12Archive">------</label>
                                    </span>
                                    </div>
                                </td>
                                <td>
                                    <a href="#" class="create-ticket-btn btn-radius">Create Ticket</span> </a>
                                    <a href="#" class="archive-btn btn-radius">Archive</span> </a>
                                </td>
                                <td>Craig Jones</td>
                                <td>We like to feature WebAlive as a top Software Company</td>
                                <td>Sat, May 25, 8:28PM</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="input-group">
                                    <span class="custom-checkbox">
                                        <input type="checkbox" id="c-13Archive">
                                        <label for="c-13Archive">45681</label>
                                    </span>
                                    </div>
                                </td>
                                <td>
                                    <a href="#" class="link-ticket-btn btn-radius">Link Ticket</a>
                                </td>
                                <td>Craig Jones</td>
                                <td>Ready to learn how to optimize your conversion rate?</td>
                                <td>Sat, May 25, 8:28PM</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="input-group">
                                    <span class="custom-checkbox">
                                        <input type="checkbox" id="c-14Archive">
                                        <label for="c-14Archive">C66552</label>
                                    </span>
                                    </div>
                                </td>
                                <td>
                                    <a href="#"  class="create-ticket-btn btn-radius">Create Ticket </a>
                                </td>
                                <td>Craig Jones</td>
                                <td>Request Quote</td>
                                <td>Sat, May 27, 8:28PM</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="input-group">
                                    <span class="custom-checkbox">
                                        <input type="checkbox" id="c-15Archive">
                                        <label for="c-15Archive">------</label>
                                    </span>
                                    </div>
                                </td>
                                <td>
                                    <a href="#" class="create-ticket-btn btn-radius">Create Ticket</span> </a>
                                    <a href="#" class="archive-btn btn-radius">Archive</span> </a>
                                </td>
                                <td>Craig Jones</td>
                                <td>We like to feature WebAlive as a top Software Company</td>
                                <td>Sat, May 25, 8:28PM</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="input-group">
                                    <span class="custom-checkbox">
                                        <input type="checkbox" id="c-16Archive">
                                        <label for="c-16Archive">45681</label>
                                    </span>
                                    </div>
                                </td>
                                <td>
                                    <a href="#" class="link-ticket-btn btn-radius">Link Ticket</a>
                                </td>
                                <td>Craig Jones</td>
                                <td>Ready to learn how to optimize your conversion rate?</td>
                                <td>Sat, May 25, 8:28PM</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="input-group">
                                    <span class="custom-checkbox">
                                        <input type="checkbox" id="c-17Archive">
                                        <label for="c-17Archive">C66552</label>
                                    </span>
                                    </div>
                                </td>
                                <td>
                                    <a href="#"  class="create-ticket-btn btn-radius">Create Ticket </a>
                                </td>
                                <td>Craig Jones</td>
                                <td>Request Quote</td>
                                <td>Sat, May 27, 8:28PM</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="input-group">
                                    <span class="custom-checkbox">
                                        <input type="checkbox" id="c-18Archive">
                                        <label for="c-18Archive">------</label>
                                    </span>
                                    </div>
                                </td>
                                <td>
                                    <a href="#" class="create-ticket-btn btn-radius">Create Ticket</span> </a>
                                    <a href="#" class="archive-btn btn-radius">Archive</span> </a>
                                </td>
                                <td>Craig Jones</td>
                                <td>We like to feature WebAlive as a top Software Company</td>
                                <td>Sat, May 25, 8:28PM</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>


        </div>
    </div>
</div>
</body>
</html>