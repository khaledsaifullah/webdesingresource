<?php include 'header.php'; ?>
<div class="main-container">
    <?php include 'main-sidebar.php'; ?>
    <div class="main-page-content">
        <script type="text/javascript">
            $(document).ready(function(){
                $(".message-email-from   .message-email-arrow-link").on("click",function (e) {
                    e.preventDefault();
                    var selfObj = $(this);

                    selfObj.parent().next('.message-email-cc-content').toggle();
                    selfObj.toggleClass('active');
                    selfObj.parent().next('.message-email-cc-content').toggleClass('active');
                });


                if($('.email-detail-content')[0]){
                    $('.main-page-content').addClass('nopadding');
                }


                $(".paymentfailed-for-ticket .message-ticket-subject .unlink-action-link").on("click",function (e) {
                    e.preventDefault();
                    var selfObj = $(this);
                    selfObj.closest(".message-ticket-subject").parent('.paymentfailed-for-ticket').remove();
                })


                $(".addednote-for-ticket .message-ticket-subject .delete-action-link").on("click",function (e) {
                    e.preventDefault();
                    var selfObj = $(this);
                    selfObj.closest(".message-feeback").parent('.addednote-for-ticket').remove();
                })

                $(".resolution-date-edit-link").on("click",function (e) {
                    e.preventDefault();
                    $(this).hide();
                    $(this).prev('.text').hide();
                    $(this).next('.date-edit-box').show();
                })

                $(".message-replay-button .replay-button").on("click",function (e) {
                    e.preventDefault();
                    $(this).closest('.message-feeback-content').find('.reply-content-block').slideToggle();
                })



            });
        </script>
        <div class="email-page-content-wrapper">
            <div class="email-detail-content">
                <div class="email-detail-content-body">
                    <div class="page-listing-header">
                        <h2>Tickets <span><a href="/webaliveportal_v2/pages/addTicket" class="btn btn-primary" target="_blank">NEW TICKET</a></span></h2>
                    </div>

                    <div class="message-email-detail-heading">
                        <a href="#" class="left-arrow"></a>
                        <span class="ticket-count-number">ABC-101-1001</span>
                    </div>

                    <div class="message-ticket-headercontent">
                        <div class="left-part">
                            <h6><strong>WebCommander platform upgrade to 4.0</strong></h6>
                            <div class="link-forward">
                                <a href="#"><i class="fa fa-comment-o" aria-hidden="true"></i>Reply</a>
                                <a href="#">Forward</a>
                                <a href="#">Merge</a>
                                <a href="#">Add Note</a>
                                <a href="#">Edit</a>
                            </div>
                        </div>
                        <div class="right-part">
                            <p><span class="name">Reported by:</span><span class="name-value"><strong>Lily Keating</strong></span></p>
                            <p><span class="name">Created by:</span><span class="name-value"><strong>Anik Mahtab</strong></span></p>
                            <p><span class="name">Status:</span><span class="name-value archive-btn btn-radius">OPEN</span></p>
                        </div>
                    </div>


                    <div class="message-ticket-contentbody">
                        <?php for($i=0;$i<3;$i++){?>

                            <div class="message-ticket-item">
                                <div class="message-feeback">
                                    <div class="message-feeback-picture"><img src="/webaliveportal_v2/assets/images/Lily-Webalive-Site.jpg" alt=""></div>
                                    <div class="message-feeback-content">
                                        <div class="message-feeback-publish-date">
                                            May 20,2019 at 12:37 pm
                                            <span class="message-replay-button"><a href="javascript:void(0)" class="btn replay-button"><i class="fa fa-reply" aria-hidden="true"></i></a></span>
                                        </div>

                                        <h5>Lily Keating (WebAlive)</h5>
                                        <div class="message-email-from">
                                            <p><strong>to:</strong> lily@webalive.com.au <a href="javascript:void(0)" class="message-email-arrow-link"></a> </p>
                                            <div class="message-email-cc-content">
                                                <p><span class="cc-text">c<span>c</span>:</span> lily@webalive.com.au</p>
                                                <p>lily@webalive.com.au</p>
                                            </div>
                                        </div>
                                        <div class="message-email-content">
                                            <p>Hello,</p>
                                            <p>I saw a vintage table lamp on your site last monthe and i's bookmarked it to buy it later for a friend. I can't seem to find it anymore
                                                though. Is it out of stock or do you not sell those anymore?</p>
                                        </div>
                                        <div class="message-email-content-footer">
                                            <p>Thnaks</p>
                                            <p>Lily Keating</p>
                                        </div>
                                        <div class="message-email-content-ps">
                                            <p>P.S. This is a sample message that has been sent to you from website page.</p>
                                        </div>
                                        <div class="message-email-attach-file">
                                            <h5>Attach file:</h5>
                                            <span class="download-file-name">ring creations.pdf<a href="#"><i class="fa fa-download" aria-hidden="true"></i></a></span>
                                            <span class="download-file-name">ring creations.pdf<a href="#"><i class="fa fa-download" aria-hidden="true"></i></a></span>
                                            <span class="download-file-name">ring creations.pdf<a href="#"><i class="fa fa-download" aria-hidden="true"></i></a></span>
                                        </div>
                                        <div class="reply-content-block">
                                            <div class="replay-content-wrapper">
                                                <div class="reply-header">
                                                    <div class="reply-header-top"> <span class="reply-picture"><img src="/webaliveportal_v2/assets/images/Lily-Webalive-Site.jpg" alt=""/></span>  <span class="reply-icon"><i class="fa fa-reply" aria-hidden="true"></i></span>  <span class="reply-emailid"><strong>From:</strong> lilykeating@mybusiness.com.au</span>
                                                    </div>
                                                    <div class="reply-header-bottom"><span class="reply-emailid"><strong>to:</strong> lilykeating@mybusiness.com.au</span>
                                                    </div>
                                                </div>
                                                <div class="reply-texteditor">
                                                    <img src="/webaliveportal_v2/assets/images/reply-texteditor.jpg" alt="" style="width: 100%;" />
                                                </div>
                                                <div class="reply-message-notification">
                                                    <div class="alert alert-success-check"><i class="fa fa-check" aria-hidden="true"></i>Satisfaction survey is added</div>
                                                </div>
                                                <div class="reply-attachmentp-link">
                                                    <div class="file-upload-block file-upload-custom">
                                                        <div class="file-upload"><i class="fa fa-paperclip fa-paperclip-custom" aria-hidden="true"></i>
                                                            <input type="file">
                                                        </div>
                                                    </div>
                                                    <a href="javascript:void(0)">
                                                        <img src="/webaliveportal_v2/assets/images/icons/replay-link.png" alt="link" />
                                                    </a>
                                                    <a href="javascript:void(0)">
                                                        <img src="/webaliveportal_v2/assets/images/icons/replay-link-pic.png" alt="link" />
                                                    </a>
                                                    <a href="javascript:void(0)">
                                                        <img src="/webaliveportal_v2/assets/images/icons/replay-comment-pic.png" alt="link" />
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="reply-footer text-right">
                                                <input type="reset" value="Cancel" class="btn btn-secondary cancel-btn-reply" />
                                                <input type="submit" value="SEND" class="btn btn-secondary" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="message-ticket-item paymentfailed-for-ticket">
                                <div class="message-ticket-subject">
                                    <p><strong>Chrys added this from email:</strong> <span class="status-msg-ticket">Payment failed</span></p>
                                    <a href="#" class="unlink-btn btn-radius unlink-action-link">Unlik</a>
                                </div>

                                <div class="message-feeback">
                                    <div class="message-feeback-picture"><img src="/webaliveportal_v2/assets/images/Lily-Webalive-Site.jpg" alt=""></div>
                                    <div class="message-feeback-content">
                                        <div class="message-feeback-publish-date">
                                            May 20,2019 at 12:37 pm
                                        </div>

                                        <h5>Lily Keating (WebAlive)</h5>
                                        <div class="message-email-from">
                                            <p><strong>to:</strong> lily@webalive.com.au</p>
                                        </div>
                                        <div class="message-email-content">
                                            <p>Hello,</p>
                                            <p>I saw a vintage table lamp on your site last monthe and i's bookmarked it to buy it later for a friend. I can't seem to find it anymore
                                                though. Is it out of stock or do you not sell those anymore?</p>
                                        </div>
                                        <div class="message-email-content-footer">
                                            <p>Thnaks</p>
                                            <p>Lily Keating</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="message-ticket-item">
                                <div class="message-feeback">
                                    <div class="message-feeback-picture"><img src="/webaliveportal_v2/assets/images/Lily-Webalive-Site.jpg" alt=""></div>
                                    <div class="message-feeback-content">
                                        <div class="message-feeback-publish-date">
                                            May 20,2019 at 12:37 pm
                                            <span class="message-replay-button"><a href="javascript:void(0)" class="btn replay-button"><i class="fa fa-reply" aria-hidden="true"></i></a></span>
                                        </div>

                                        <h5>Lily Keating (WebAlive)</h5>
                                        <div class="message-email-from">
                                            <p><strong>to:</strong> lily@webalive.com.au <!--<a href="javascript:void(0)" class="message-email-arrow-link"></a>--> </p>
                                            <!--<div class="message-email-cc-content">
                                                <p><span class="cc-text">c<span>c</span>:</span> lily@webalive.com.au</p>
                                                <p>lily@webalive.com.au</p>
                                            </div>-->
                                        </div>
                                        <div class="message-email-content">
                                            <p>Hello,</p>
                                            <p>I saw a vintage table lamp on your site last monthe and i's bookmarked it to buy it later for a friend. I can't seem to find it anymore
                                                though. Is it out of stock or do you not sell those anymore?</p>
                                            <!--<p class="any-query-plz">Any query plz <a href="#">mybusiness.com.au</a></p>-->
                                        </div>
                                        <div class="message-email-content-footer">
                                            <p>Thnaks</p>
                                            <p>Lily Keating</p>
                                        </div>
                                        <!--<div class="message-email-content-ps">
                                            <p>P.S. This is a sample message that has been sent to you from website page.</p>
                                        </div>-->
                                        <!--<div class="message-email-attach-file">
                                            <h5>Attach file:</h5>
                                            <span class="download-file-name">ring creations.pdf<a href="#"><i class="fa fa-download" aria-hidden="true"></i></a></span>
                                            <span class="download-file-name">ring creations.pdf<a href="#"><i class="fa fa-download" aria-hidden="true"></i></a></span>
                                            <span class="download-file-name">ring creations.pdf<a href="#"><i class="fa fa-download" aria-hidden="true"></i></a></span>
                                        </div>-->
                                        <div class="reply-content-block">
                                            <div class="replay-content-wrapper">
                                                <div class="reply-header">
                                                    <div class="reply-header-top"> <span class="reply-picture"><img src="/webaliveportal_v2/assets/images/Lily-Webalive-Site.jpg" alt=""/></span>  <span class="reply-icon"><i class="fa fa-reply" aria-hidden="true"></i></span>  <span class="reply-emailid"><strong>From:</strong> lilykeating@mybusiness.com.au</span>
                                                    </div>
                                                    <div class="reply-header-bottom"><span class="reply-emailid"><strong>to:</strong> lilykeating@mybusiness.com.au</span>
                                                    </div>
                                                </div>
                                                <div class="reply-texteditor">
                                                    <img src="/webaliveportal_v2/assets/images/reply-texteditor.jpg" alt="" style="width: 100%;" />
                                                </div>
                                                <div class="reply-message-notification">
                                                    <div class="alert alert-success-check"><i class="fa fa-check" aria-hidden="true"></i>Satisfaction survey is added</div>
                                                </div>
                                                <div class="reply-attachmentp-link">
                                                    <div class="file-upload-block file-upload-custom">
                                                        <div class="file-upload"><i class="fa fa-paperclip fa-paperclip-custom" aria-hidden="true"></i>
                                                            <input type="file">
                                                        </div>
                                                    </div>
                                                    <a href="javascript:void(0)">
                                                        <img src="/webaliveportal_v2/assets/images/icons/replay-link.png" alt="link" />
                                                    </a>
                                                    <a href="javascript:void(0)">
                                                        <img src="/webaliveportal_v2/assets/images/icons/replay-link-pic.png" alt="link" />
                                                    </a>
                                                    <a href="javascript:void(0)">
                                                        <img src="/webaliveportal_v2/assets/images/icons/replay-comment-pic.png" alt="link" />
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="reply-footer text-right">
                                                <input type="reset" value="Cancel" class="btn btn-secondary cancel-btn-reply" />
                                                <input type="submit" value="SEND" class="btn btn-secondary" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="message-ticket-item addednote-for-ticket">
                                <div class="message-feeback">
                                    <div class="message-feeback-picture"><img src="/webaliveportal_v2/assets/images/Lily-Webalive-Site.jpg" alt=""></div>
                                    <div class="message-feeback-content">
                                        <div class="message-ticket-subject">
                                            <p><strong>Noman Wahid</strong> added a not ,(May 20,2019 at 5:25pm) </p>
                                            <a href="javascript:void(0)" class="btn-radius unlink-btn delete-action-link">Delete</a>
                                        </div>
                                        <div class="message-email-content">
                                            <p>I saw a vintage table lamp on your site last monthe and i's bookmarked it to buy it later for a friend. I can't seem to find it anymore
                                                though. Is it out of stock or do you not sell those anymore?</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        <?php } ?>

                    </div>

                </div>
            </div>
            <div class="sidebar-right-content">
                <div class="resolution-date-block">
                    <p>Resolution Date</p>
                    <div class="date-text-element">
                        <span class="text">By Fri, 10 May 2019 ,08:30AM </span>
                        <a href="javascript:void(0)" class="resolution-date-edit-link"><img src="/webaliveportal_v2/assets/images/icons/pencil-small-icon.png" alt="pencil" /></a>
                        <div class="date-edit-box">
                            <form action="#" method="get">
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label>Start Date:</label>
                                            <div class="date-picker input-group date-picker-iconappend">
                                                <input type="text" class="form-control datepicker" value="" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>&nbsp;</label>
                                            <select class="custom-dropdown" name="am">
                                                <option value="">4:30AM</option>
                                                <option value="">4:30AM</option>
                                                <option value="">4:30AM</option>
                                                <option value="">4:30AM</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label>End Date:</label>
                                            <div class="date-picker input-group date-picker-iconappend">
                                                <input type="text" class="form-control datepicker" value="" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>&nbsp;</label>
                                            <select class="custom-dropdown" name="pm">
                                                <option value="">5:30PM</option>
                                                <option value="">5:30PM</option>
                                                <option value="">5:30PM</option>
                                                <option value="">5:30PM</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <input type="submit" value="Save" class="btn btn-primary" />
                            </form>
                        </div>

                    </div>
                    <div class="date-number-box">
                        <div class="date-number-item days">
                            <h6>21</h6>
                            <p>Days</p>
                        </div>
                        <div class="date-number-item hours">
                            <h6>12</h6>
                            <p>Hours</p>
                        </div>
                        <div class="date-number-item minutes">
                            <h6>51</h6>
                            <p>Minutes</p>
                        </div>
                    </div>

                </div>

                <div class="sidebar-message-ticket-filter">
                    <form action="#" method="get">
                        <div class="form-group">
                            <label>Status</label>
                            <select class="custom-dropdown" name="status">
                                <option value="">Open</option>
                                <option value="">Select Option Two</option>
                                <option value="">Select Option Three</option>
                                <option value="">Select Option Four</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Assign to</label>
                            <select class="custom-dropdown" name="assignto">
                                <option value="">devit done</option>
                                <option value="">Select Option Two</option>
                                <option value="">Select Option Three</option>
                                <option value="">Select Option Four</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Escalate to</label>
                            <select class="custom-dropdown" name="escalateto">
                                <option value="">Sales</option>
                                <option value="">Select Option Two</option>
                                <option value="">Select Option Three</option>
                                <option value="">Select Option Four</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Priority</label>
                            <select class="custom-dropdown" name="priority">
                                <option value="">High</option>
                                <option value="">Select Option Two</option>
                                <option value="">Select Option Three</option>
                                <option value="">Select Option Four</option>
                            </select>
                        </div>
                        <div class="form-group submit-filter">
                            <input type="submit" value="Update" class="btn btn-primary" />
                        </div>
                    </form>
                </div>


            </div>
        </div>
    </div>
</div>
</body>
</html>