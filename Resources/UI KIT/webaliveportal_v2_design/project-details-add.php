<?php include 'header.php'; ?>

<script type="text/javascript">
    $(document).ready(function(){
        $("#add-comment-btn").on("click",function (e) {
            e.preventDefault();
            $('.add-project-comment-wrapper  .comment-form-body').toggle();
        });
        $("#post-comment-btn").on("click",function (e) {
            e.preventDefault();
            $('.add-project-comment-wrapper  .project-detail-message-content').toggle();
        });


    });

</script>

<div class="main-container">
    <?php include 'main-sidebar.php'; ?>
    <div class="main-page-content">
            <div class="comment-form">
                <div class="comment-form-heading project-title-heading">
                    <p> Web Design Package (clubbpromotions.com.au) for Clubb Games & Promotions </p>
                    <h2>Project Details</h2>
                </div>
                <div class="comment-description">
                    <div class="comment-feeback-picture"><img src="images/Lily-Webalive-Site.jpg" alt=""></div>
                    <div class="comment-right-part">
                        <div class="title-description">
                            <span class="left-title-text">Lily Keating (WebAlive)</span>
                            <span class="right-title-text">Feb 14, 2019 at 11:06 am <a href="http://localhost/webaliveportal_v2/project-details.php" class="edit-link"><span class="icon-circle mini"><img src="images/icons/pencil.png" alt="pencil"></span></a>  </span>
                            <div class="clear"></div>
                        </div>
                        <p>Responsive UI Design<br>
                            WebAlive will custom design and develop a brand new mobile responsive site, with modern UI design focused on representing and marketing your brand to your target audience. </p>

                        <p>This includes the design of up to 10 important pages (Home, Contact Us, Enquiry Page etc.) and search engine friendliness. There will be an allowance of up to 2 design concepts and 3 revisions.</p>
                        <p>Website Development <br>
                            WebAlive will research and work with you to plot how the content and navigation items of the website are laid out and communicated from a usability perspective.
                            We will develop the newly designed site in the WordPress CMS, making it fully mobile responsive.
                        </p>
                        <div class="download-project-files">
                            <span class="download-file-name">ring creations.pdf<a href="#"><i class="fa fa-download" aria-hidden="true"></i></a></span>
                        </div>
                    </div>
                </div>



                <div class="comment-group-btn project-btn-group">
                    <a href="javascript:void(0)" class="btn btn-secondary left" id="add-comment-btn">ADD COMMENT</a>
                    <div class="clear"></div>
                </div>
            </div>


        <div class="add-project-comment-wrapper">
            <div class="comment-form-body">
                <form method="get" action="#">
                    <div class="row">
                        <div class="comment-feeback-picture-large"><img src="images/Lily-Webalive-Site.jpg" alt="" /></div>
                        <div class="project-message-box">
                            <!--<div class="project-select-user">
                                <ul>
                                    <li class="select-user-text"><strong>Select User:</strong></li>
                                    <li>
                                        <div class="input-group">
                                        <span class="custom-checkbox">
                                            <input type="checkbox" id="c-5">
                                            <label for="c-5">Ricky Wilson(ricky@wilson.com)</label>
                                        </span>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="input-group">
                                        <span class="custom-checkbox">
                                            <input type="checkbox" id="c-6">
                                            <label for="c-6">Stephanie Davis(davil@stephanie.com.au)</label>
                                        </span>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="input-group">
                                        <span class="custom-checkbox">
                                            <input type="checkbox" id="c-7">
                                            <label for="c-7">Ricky Wilson(ricky@wilson.com)</label>
                                        </span>
                                        </div>
                                    </li>
                                </ul>
                            </div>-->
                            <div class="form-group">
                                <textarea class="form-control" rows="5" name="project-comment-box"></textarea>
                            </div>

                            <div class="row">
                                <div class="col-md-12"> <input type="submit" value="POST COMMENT"  class="btn btn-secondary right" id="post-comment-btn" /></div>
                            </div>
                        </div>

                    </div>
                </form>
            </div>
            <div class="project-detail-message-content">
                <ul>
                    <li>
                        <div class="message-feeback">
                            <div class="message-feeback-picture"><img src="images/Lily-Webalive-Site.jpg" alt="" /></div>
                            <div class="message-feeback-content">
                                <h5>Lily Keating(WebAlive)</h5>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                <div class="message-feeback-publish-date">May 20,2019 at 5:25pm</div>
                                <div class="message-replay-button"><a href="#" class="btn"><i class="fa fa-reply" aria-hidden="true"></i></a></div>
                            </div>
                        </div>
                    </li>

                    <li class="parent">
                        <div class="message-feeback">
                            <div class="message-feeback-picture"><img src="images/Lily-Webalive-Site.jpg" alt="" /></div>
                            <div class="message-feeback-content">
                                <h5>Lily Keating(WebAlive)</h5>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                <div class="message-feeback-publish-date">May 20,2019 at 5:25pm</div>
                            </div>
                        </div>
                        <ul>
                            <li>
                                <div class="message-feeback">
                                    <div class="message-feeback-picture"><img src="images/Lily-Webalive-Site.jpg" alt="" /></div>
                                    <div class="message-feeback-content">
                                        <h5>Chrys Anastasi(WebAlive)</h5>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                        <div class="message-feeback-publish-date">May 20,2019 at 5:25pm</div>
                                        <div class="message-replay-button"><a href="#" class="btn"><i class="fa fa-reply" aria-hidden="true"></i></a></div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="message-feeback">
                                    <div class="message-feeback-picture"><img src="images/Lily-Webalive-Site.jpg" alt="" /></div>
                                    <div class="message-feeback-content">
                                        <h5>Chrys Anastasi(WebAlive)</h5>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                        <div class="message-feeback-publish-date">May 20,2019 at 5:25pm</div>
                                        <div class="message-replay-button"><a href="#" class="btn"><i class="fa fa-reply" aria-hidden="true"></i></a></div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="message-feeback">
                                    <div class="message-feeback-picture"><img src="images/Lily-Webalive-Site.jpg" alt="" /></div>
                                    <div class="message-feeback-content">
                                        <h5>Chrys Anastasi(WebAlive)</h5>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                        <div class="message-feeback-publish-date">May 20,2019 at 5:25pm</div>
                                        <div class="message-replay-button"><a href="#" class="btn"><i class="fa fa-reply" aria-hidden="true"></i></a></div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <div class="message-feeback">
                            <div class="message-feeback-picture"><img src="images/Lily-Webalive-Site.jpg" alt="" /></div>
                            <div class="message-feeback-content">
                                <h5>Chrys Anastasi(WebAlive)</h5>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                <div class="message-feeback-publish-date">May 20,2019 at 5:25pm</div>
                                <div class="message-replay-button"><a href="#" class="btn"><i class="fa fa-reply" aria-hidden="true"></i></a></div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="message-feeback">
                            <div class="message-feeback-picture"><img src="images/Lily-Webalive-Site.jpg" alt="" /></div>
                            <div class="message-feeback-content">
                                <h5>Chrys Anastasi(WebAlive)</h5>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                <div class="message-feeback-publish-date">May 20,2019 at 5:25pm</div>
                                <div class="message-replay-button"><a href="#" class="btn"><i class="fa fa-reply" aria-hidden="true"></i></a></div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="message-feeback">
                            <div class="message-feeback-picture"><img src="images/Lily-Webalive-Site.jpg" alt="" /></div>
                            <div class="message-feeback-content">
                                <h5>Chrys Anastasi(WebAlive)</h5>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                <div class="message-feeback-publish-date">May 20,2019 at 5:25pm</div>
                                <div class="message-replay-button"><a href="#" class="btn"><i class="fa fa-reply" aria-hidden="true"></i></a></div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="message-feeback">
                            <div class="message-feeback-picture"><img src="images/Lily-Webalive-Site.jpg" alt="" /></div>
                            <div class="message-feeback-content">
                                <h5>Chrys Anastasi(WebAlive)</h5>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                <div class="message-feeback-publish-date">May 20,2019 at 5:25pm</div>
                                <div class="message-replay-button"><a href="#" class="btn"><i class="fa fa-reply" aria-hidden="true"></i></a></div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>





    </div>
  </div>
</body>
</html>
