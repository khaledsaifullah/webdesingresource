<?php include 'header.php'; ?>
<div class="main-container">
    <?php include 'main-sidebar-admin.php'; ?>
    <div class="main-page-content">
        <div class="comment-form">
            <div class="comment-form-heading">
                <h2>What is happening</h2>
            </div>

            <script type="text/javascript">
                $(document).ready(function(){
                    $(".timeline-filter-headingtext .timeline-bulet").click(function(){
                        $('.timeline-filter-body').slideToggle('slow');
                        $('.timeline-filter-headingtext .timeline-bulet').toggleClass("active");
                    });
                });
            </script>
            <div class="admin-timeline-filter">
                <div class="timeline-filter-headingtext">
                    <p>Time Line <button class="timeline-bulet"></button></p>
                </div>
                <div class="timeline-filter-body">
                    <div class="timeline-filter">
                            <div class="left-part">
                                <label>Filter By Field</label>
                                <div class="filter-by-field-admin">
                                    <div class="form-group">
                                        <select class="custom-dropdown">
                                            <option>Domain Name</option>
                                            <option disabled>Disabled Option</option>
                                            <option>Select Option Two</option>
                                            <option>Select Option Three</option>
                                            <option>Select Option Four</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <input type="text" class="form-control"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="right-part">
                                <label>Filter By Field</label>
                                <div class="filter-by-field-admin">
                                    <div class="form-group">
                                        <div class="date-picker input-group">
                                            <input type="text" class="form-control" placeholder="Start Date" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="date-picker input-group">
                                            <input type="text" class="form-control" placeholder="End Date"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>


                    <div class="timeline-filter">
                            <div class="left-part">
                                <div class="filter-by-field-admin">
                                    <div class="form-group">
                                        <label>Filter By Staff</label>
                                        <select class="custom-dropdown">
                                            <option>All</option>
                                            <option disabled>Disabled Option</option>
                                            <option>Select Option Two</option>
                                            <option>Select Option Three</option>
                                            <option>Select Option Four</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Filter By Text</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="right-part">
                                <div class="filter-by-field-admin">
                                    <div class="form-group">
                                        <label>Filter By Activity Type</label>
                                        <select class="custom-dropdown">
                                            <option>All</option>
                                            <option disabled>Disabled Option</option>
                                            <option>Select Option Two</option>
                                            <option>Select Option Three</option>
                                            <option>Select Option Four</option>
                                        </select>
                                    </div>

                                </div>
                            </div>
                    </div>

                    <div class="timeline-filter-button-group">
                        <input type="reset" value="Reset" class="btn reset-timeline-btn" />
                        <input type="submit" value="Search Feed" class="btn search-timeline-btn" />
                    </div>

                </div>


                <div class="message-feeback-wrapper">

                <div class="message-feeback">
                    <div class="message-feeback-picture"><img src="images/Lily-Webalive-Site.jpg" alt="" /></div>
                    <div class="message-feeback-content">
                        <h5>Chrys Anastasi(WebAlive)</h5>
                        <p>A Message has been added by:Chrys Anastasi(WebAlive)</p>
                        <p>Project: Web Design Package - cfmg.com.au</p>
                        <div class="message-feeback-publish-date">May 20,2019 at 5:25pm</div>
                        <div class="message-feeback-status">
                            <span class="message-feeback-status-count active">2 Likes</span>
                            <span class="message-feeback-status-text">Lily Keating liked this</span>
                        </div>
                    </div>
                </div>

                <div class="message-feeback">
                    <div class="message-feeback-picture"><img src="images/Lily-Webalive-Site.jpg" alt="" /></div>
                    <div class="message-feeback-content">
                        <h5>Chrys Anastasi(WebAlive)</h5>
                        <p>A Message has been added by:Chrys Anastasi(WebAlive)</p>
                        <p>Project: Web Design Package - cfmg.com.au</p>
                        <div class="message-feeback-publish-date">May 20,2019 at 5:25pm</div>
                        <div class="message-feeback-status">
                            <span class="message-feeback-status-count">2 Likes</span>
                            <span class="message-feeback-status-text">Lily Keating liked this</span>
                        </div>
                    </div>
                </div>

                <div class="message-feeback">
                    <div class="message-feeback-picture"><img src="images/Lily-Webalive-Site.jpg" alt="" /></div>
                    <div class="message-feeback-content">
                        <h5>Chrys Anastasi(WebAlive)</h5>
                        <p>A Message has been added by:Chrys Anastasi(WebAlive)</p>
                        <p>Project: Web Design Package - cfmg.com.au</p>
                        <div class="message-feeback-publish-date">May 20,2019 at 5:25pm</div>
                        <div class="message-feeback-status">
                            <span class="message-feeback-status-count">2 Likes</span>
                            <span class="message-feeback-status-text">Lily Keating liked this</span>
                        </div>
                    </div>
                </div>

                <div class="message-feeback">
                    <div class="message-feeback-picture"><img src="images/Lily-Webalive-Site.jpg" alt="" /></div>
                    <div class="message-feeback-content">
                        <h5>Chrys Anastasi(WebAlive)</h5>
                        <p>A Message has been added by:Chrys Anastasi(WebAlive)</p>
                        <p>Project: Web Design Package - cfmg.com.au</p>
                        <div class="message-feeback-publish-date">May 20,2019 at 5:25pm</div>
                        <div class="message-feeback-status">
                            <span class="message-feeback-status-count active">2 Likes</span>
                            <span class="message-feeback-status-text">Lily Keating liked this</span>
                        </div>
                    </div>
                </div>



                </div>

            </div>







        </div>
    </div>
</div>
</body>
</html>