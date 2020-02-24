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
    <div class="main-page-content email-page-content">
        <div class="email-detail-content">
            <div class="email-detail-content-body">
                <div class="page-heading">
                    <h2>Email Detail</h2>
                </div>

                <div class="message-email-detail-heading">
                    <div class="row">
                        <div class="col-sm-6">
                            <a href="email.php" class="left-arrow"></a>
                            <span class="number-value">45681</span>
                            <button class="link-ticket-btn btn-radius">Link Ticket</button>
                        </div>

                        <div class="col-sm-6 text-right">
                            <a href="email.php" class="prev-btn-style">Prev</a>
                            <a href="email.php" class="next-btn-style">Next</a>
                        </div>
                    </div>
                </div>

                <div class="message-requestqoute-heading">
                    <h5>Request a Qoute</h5>
                    <a href="email.php" class="btn btn-primary archive-requestqoute">Archive</a>
                </div>
                <div class="message-feeback">
                    <div class="message-feeback-picture"><img src="images/Lily-Webalive-Site.jpg" alt=""></div>
                    <div class="message-feeback-content">
                        <div class="message-feeback-publish-date">May 20,2019 at 5:25pm</div>
                        <h5>Lily Keating (WebAlive)</h5>
                        <div class="message-email-from">
                            <p>From: lily@webalive.com.au<a href="javascript:void(0)" class="message-email-arrow-link"></a></p>
                            <div class="message-email-cc-content">
                                <p><span class="cc-text">c<span>c</span>:</span> lily@webalive.com.au</p>
                                <p>lily@webalive.com.au</p>
                            </div>
                        </div>
                        <div class="message-email-content">
                            <p>Hello,</p>
                            <p>I saw a vintage table lamp on your site last monthe and i's bookmarked it to buy it later for a friend. I can't seem to find it anymore
                                though. Is it out of stock or do you not sell those anymore?</p>
                            <p class="any-query-plz">Any query plz <a href="#">mybusiness.com.au</a></p>
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
                    </div>
                </div>


            </div>
        </div>
        <div class="sidebar-right-content">
            <h6><strong>Link to a Ticket</strong></h6>
            <p>Merge to an existing ticket or create a new one</p>
            <div class="ticket-btn-group">
                <a href="#" class="btn btn-primary">CREATED NEW</a>
                <a href="#" class="btn btn-primary search-ticket-btn">SEARCH TICKETS</a>
            </div>
        </div>
    </div>
</div>
</body>
</html>