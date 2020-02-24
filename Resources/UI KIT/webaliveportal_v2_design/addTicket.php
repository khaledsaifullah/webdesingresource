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
        <div class="ticket-service">
            <form>
                <h3 class="ticket-service-title">How happy are you with our service?</h3>
                <div class="ticket-service-emoticon">
                    <div class="emoticon-ticket">
                        <div class="emoticon-ticket-icon"><img src="images/smile-emoticon-green.png" alt="emoticon"></div>
                        <p>Loved it.Thanks</p>
                        <p>To the point,nice and fast</p>
                    </div>
                    <div class="emoticon-ticket">
                        <div class="emoticon-ticket-icon"><img src="images/smile-emoticon-redish.png" alt="emoticon"></div>
                        <p>I was bad. Sorry!</p>
                        <p>Not the one I expected</p>
                    </div>
                </div>
                <div class="ticket-service-textarea">
                    <textarea rows="3" cols="2">Comment</textarea>
                </div>
                <div class="ticket-service-submit">
                    <input type="submit" value="SUBMIT" class="btn btn-secondary" />
                </div>
            </form>


        </div>



    </div>
</div>
</body>
</html>