<?php include 'header.php'; ?>
<script type="text/javascript">
    $(document).ready(function(){
        $('.web-package-name-field').hover(
            function () {
                $(this).find('a.web-package-edit').show()
            },
            function () {
                $(this).find('a.web-package-edit').hide()
            }
        )



        $(".web-package-edit").on("click",function (e) {
            e.preventDefault();
            $(this).siblings('.popup-fullpage').show();
        });

        $(".milestone-plus-button").on("click",function (e) {
            e.preventDefault();
            $(this).siblings('.progress-milestone-add').toggle();
        });
        $('.milestone-checklist-row .input-group').hover(
            function () {
                $(this).addClass('inactive-color');
                $( this ).append( $( '<a href="javascript:void(0)" class="progress-icon"> <span class="icon-circle miniextra"><i class="fa"><img src="images/icons/mini-minus.png" alt="plus" /></i></span></a>' ) );
                $('.milestone-checklist-row .progress-icon').click(function () {
                    $(this).parent('.input-group').remove();
                })
            },
            function () {
                $(this).removeClass('inactive-color');
                $( this ).find( "a:last" ).remove();
            }
        )
        $("#project-timeline-popup").on("click",function (e) {
            e.preventDefault();
            $('#popup-fullpage-project-timeline').show();
        });
        $(".popup-head .close").on("click",function (e) {
            e.preventDefault();
            $('.popup-fullpage').hide();
        });



        //start custom search
        var countCheckedSearch = function () {
            var selfObj = $(this);
            //console.log(this);
            var getData = $(this).val();
            var customSearchHtml = $('<span class="result-text"><span>' + getData + '</span> <span class="close-result-text"></span></span>');
            //$(this).parent('.custom-checkbox').parent('.custom-search-box-item').parent('.dropdown-down-list').siblings('div.inputfield-result').appendTo(customSearchHtml);
            var newItem = customSearchHtml.appendTo(selfObj.closest('.custom-search-box').find('.inputfield-result'));
            newItem.find('.close-result-text').on('click', function () {
                $(this).parent().remove();
            })
        }
        $( ".dropdown-down-list .custom-search-box-item input[type=checkbox]" ).on( "click", countCheckedSearch );




    });


</script>


<div class="main-container">
    <?php include 'main-sidebar.php'; ?>
    <div class="main-page-content">
                    <div class="page-listing-header">
                        <h2>Web Design Package (clubbpromotions.com.au) for Clubb Games & Promotions</h2>
                    </div>
        <div class="web-package-staff-roll">
            <div class="web-package-name-field">
                <span class="team-rank-value">Salesperson : </span>
                <div class="tool-tip tooltip-with-picture">
                    <div class="user-profile">
                                        <span class="avatar">
                                            <img src="/webaliveportal_v2/assets/images/Lily-Webalive-Site.jpg" alt="">
                                        </span>
                    </div>
                    <span class="tool-tip-text">Johnny</span>
                </div>
                <a href="javascript:void(0)"  class="web-package-edit"><img src="/webaliveportal_v2/assets/images/icons/pencil-small-icon.png" alt="plus" /></a>
                <div class="popup-fullpage project-manager-popup">
                    <div class="popup">
                        <div class="popup-head"><h4>Add Sales Person<a href="javascript:void(0)" class="close"></a></h4></div>
                        <div class="popup-body">
                            <form action="#" method="get">
                                <div class="form-group">
                                    <div class="custom-search-box test">
                                        <div class="inputfield">
                                            <input type="text" placeholder="Search employee" name="custom-search-box-inputfield" />
                                        </div>

                                        <!--                                                            Changed section-->
                                        <div class="inputfield-result">

                                        </div>
                                        <!--                                                            Changed section end-->
                                        <div class="dropdown-down-list">
                                            <div class="custom-search-box-item" id="custom-search-box-item">
                                                                   <span class="custom-checkbox">
                                                                        <input type="checkbox" id="c-51" value="Julie">
                                                                        <label for="c-51">
                                                                            <span class="avatar">
                                                                                <img src="/webaliveportal_v2/assets/images/Lily-Webalive-Site.jpg" alt="author"/>
                                                                            </span>
                                                                            <span class="name-field">Julie</span>
                                                                        </label>
                                                                   </span>
                                            </div>

                                            <div class="custom-search-box-item">
                                                                   <span class="custom-checkbox">
                                                                        <input type="checkbox" id="c-52" value="Sunny">
                                                                        <label for="c-52">
                                                                            <span class="avatar">
                                                                                <img src="/webaliveportal_v2/assets/images/Lily-Webalive-Site.jpg" alt="author"/>
                                                                            </span>
                                                                            <span class="name-field">Sunny</span>
                                                                        </label>
                                                                   </span>
                                            </div>

                                            <div class="custom-search-box-item">
                                                                   <span class="custom-checkbox">
                                                                        <input type="checkbox" id="c-53" value="Lily">
                                                                        <label for="c-53">
                                                                            <span class="avatar">
                                                                                <img src="/webaliveportal_v2/assets/images/Lily-Webalive-Site.jpg" alt="author"/>
                                                                            </span>
                                                                            <span class="name-field">Lily</span>
                                                                        </label>
                                                                   </span>
                                            </div>

                                            <div class="custom-search-box-item">
                                                                   <span class="custom-checkbox">
                                                                        <input type="checkbox" id="c-54" value="John">
                                                                        <label for="c-54">
                                                                            <span class="avatar">
                                                                                <img src="/webaliveportal_v2/assets/images/Lily-Webalive-Site.jpg" alt="author"/>
                                                                            </span>
                                                                            <span class="name-field">John</span>
                                                                        </label>
                                                                   </span>
                                            </div>
                                            <div class="custom-search-box-item">
                                                                   <span class="custom-checkbox">
                                                                        <input type="checkbox" id="c-55" value="John">
                                                                        <label for="c-55">
                                                                            <span class="avatar">
                                                                                <img src="/webaliveportal_v2/assets/images/Lily-Webalive-Site.jpg" alt="author"/>
                                                                            </span>
                                                                            <span class="name-field">John</span>
                                                                        </label>
                                                                   </span>
                                            </div>
                                            <div class="custom-search-box-item">
                                                                   <span class="custom-checkbox">
                                                                        <input type="checkbox" id="c-56" value="John">
                                                                        <label for="c-56">
                                                                            <span class="avatar">
                                                                                <img src="/webaliveportal_v2/assets/images/Lily-Webalive-Site.jpg" alt="author"/>
                                                                            </span>
                                                                            <span class="name-field">John</span>
                                                                        </label>
                                                                   </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group submit-popup">
                                    <input type="submit" value="Cancel" class="btn" />
                                    <button class="btn btn-primary">Add</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="web-package-name-field">
                <span class="team-rank-value">Project Manager Onshore : </span>
                <div class="tool-tip tooltip-with-picture">
                    <div class="user-profile">
                                        <span class="avatar">
                                               <img src="/webaliveportal_v2/assets/images/Lily-Webalive-Site.jpg" alt="">
                                        </span>
                    </div>
                    <span class="tool-tip-text">Johnny</span>
                </div>
                <a href="javascript:void(0)"  class="web-package-edit"><img src="/webaliveportal_v2/assets/images/icons/pencil-small-icon.png" alt="plus" /></a>
                <div class="popup-fullpage project-manager-popup">
                    <div class="popup">
                        <div class="popup-head"><h4>Project Manager Onshore<a href="javascript:void(0)" class="close"></a></h4></div>
                        <div class="popup-body">
                            <form action="#" method="get">
                                <div class="form-group">
                                    <div class="custom-search-box">
                                        <div class="inputfield">
                                            <input type="text" placeholder="Search employee" name="custom-search-box-inputfield" />
                                        </div>
                                        <div class="inputfield-result">
                                            <span class="result-text"><span>Sunny</span> <span class="close-result-text"></span></span>
                                        </div>
                                        <div class="dropdown-down-list">
                                            <div class="custom-search-box-item">
                                                                   <span class="custom-checkbox">
                                                                        <input type="checkbox" id="c-61" value="Julie" />
                                                                        <label for="c-61">
                                                                            <span class="avatar">
                                                                                <img src="/webaliveportal_v2/assets/images/Lily-Webalive-Site.jpg" alt="author"/>
                                                                            </span>
                                                                            <span class="name-field">Julie</span>
                                                                        </label>
                                                                   </span>
                                            </div>

                                            <div class="custom-search-box-item">
                                                                   <span class="custom-checkbox">

                                                                        <input type="checkbox" id="c-62" value="Sunny" />
                                                                        <label for="c-62">
                                                                            <span class="avatar">
                                                                                <img src="/webaliveportal_v2/assets/images/Lily-Webalive-Site.jpg" alt="author"/>
                                                                            </span>
                                                                            <span class="name-field">Sunny</span>
                                                                        </label>
                                                                   </span>
                                            </div>

                                            <div class="custom-search-box-item">
                                                                   <span class="custom-checkbox">
                                                                        <input type="checkbox" id="c-63" value="Lily" />
                                                                        <label for="c-63">
                                                                            <span class="avatar">
                                                                                <img src="/webaliveportal_v2/assets/images/Lily-Webalive-Site.jpg" alt="author"/>
                                                                            </span>
                                                                            <span class="name-field">Lily</span>
                                                                        </label>
                                                                   </span>
                                            </div>

                                            <div class="custom-search-box-item">
                                                                   <span class="custom-checkbox">
                                                                        <input type="checkbox" id="c-64" value="John" />
                                                                        <label for="c-64">
                                                                            <span class="avatar">
                                                                                <img src="/webaliveportal_v2/assets/images/Lily-Webalive-Site.jpg" alt="author"/>
                                                                            </span>
                                                                            <span class="name-field">John</span>
                                                                        </label>
                                                                   </span>
                                            </div>
                                            <div class="custom-search-box-item">
                                                                   <span class="custom-checkbox">
                                                                        <input type="checkbox" id="c-65" value="John" />
                                                                        <label for="c-65">
                                                                            <span class="avatar">
                                                                                <img src="/webaliveportal_v2/assets/images/Lily-Webalive-Site.jpg" alt="author"/>
                                                                            </span>
                                                                            <span class="name-field">John</span>
                                                                        </label>
                                                                   </span>
                                            </div>
                                            <div class="custom-search-box-item">
                                                                   <span class="custom-checkbox">
                                                                        <input type="checkbox" id="c-66" value="John" />
                                                                        <label for="c-66">
                                                                            <span class="avatar">
                                                                                <img src="/webaliveportal_v2/assets/images/Lily-Webalive-Site.jpg" alt="author"/>
                                                                            </span>
                                                                            <span class="name-field">John</span>
                                                                        </label>
                                                                   </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group submit-popup">
                                    <input type="submit" value="Cancel" class="btn" />
                                    <button class="btn btn-primary">Add</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="web-package-name-field">
                <span class="team-rank-value">Project Manager Offshore : </span>
                <div class="tool-tip tooltip-with-picture">
                    <div class="user-profile">
                <span class="avatar">
                   <img src="/webaliveportal_v2/assets/images/Lily-Webalive-Site.jpg" alt="">
               </span>
                    </div>
                    <span class="tool-tip-text">Johnny</span>
                </div>
                <a href="javascript:void(0)"  class="web-package-edit"><img src="/webaliveportal_v2/assets/images/icons/pencil-small-icon.png" alt="plus" /></a>
                <div class="popup-fullpage project-manager-popup">
                    <div class="popup">
                        <div class="popup-head"><h4>Project Manager Offshore<a href="javascript:void(0)" class="close"></a></h4></div>
                        <div class="popup-body">
                            <form action="#" method="get">
                                <div class="form-group">
                                    <div class="custom-search-box">
                                        <div class="inputfield">
                                            <input type="text" placeholder="Search employee" name="custom-search-box-inputfield" />
                                        </div>
                                        <div class="inputfield-result">
                                            <span class="result-text"><span>Julie</span> <span class="close-result-text"></span></span>
                                        </div>
                                        <div class="dropdown-down-list">
                                            <div class="custom-search-box-item">
                                                                   <span class="custom-checkbox">
                                                                        <input type="checkbox" id="c-71" value="Julie" />
                                                                        <label for="c-71">
                                                                            <span class="avatar">
                                                                                <img src="/webaliveportal_v2/assets/images/Lily-Webalive-Site.jpg" alt="author"/>
                                                                            </span>
                                                                            <span class="name-field">Julie</span>
                                                                        </label>
                                                                   </span>
                                            </div>

                                            <div class="custom-search-box-item">
                                                                   <span class="custom-checkbox">
                                                                        <input type="checkbox" id="c-72" value="Sunny" />
                                                                        <label for="c-72">
                                                                            <span class="avatar">
                                                                                <img src="/webaliveportal_v2/assets/images/Lily-Webalive-Site.jpg" alt="author"/>
                                                                            </span>
                                                                            <span class="name-field">Sunny</span>
                                                                        </label>
                                                                   </span>
                                            </div>

                                            <div class="custom-search-box-item">
                                                                   <span class="custom-checkbox">
                                                                        <input type="checkbox" id="c-73" value="Lily" />
                                                                        <label for="c-73">
                                                                            <span class="avatar">
                                                                                <img src="/webaliveportal_v2/assets/images/Lily-Webalive-Site.jpg" alt="author"/>
                                                                            </span>
                                                                            <span class="name-field">Lily</span>
                                                                        </label>
                                                                   </span>
                                            </div>

                                            <div class="custom-search-box-item">
                                                                   <span class="custom-checkbox">
                                                                        <input type="checkbox" id="c-74" value="John" />
                                                                        <label for="c-74">
                                                                            <span class="avatar">
                                                                                <img src="/webaliveportal_v2/assets/images/Lily-Webalive-Site.jpg" alt="author"/>
                                                                            </span>
                                                                            <span class="name-field">John</span>
                                                                        </label>
                                                                   </span>
                                            </div>
                                            <div class="custom-search-box-item">
                                                                   <span class="custom-checkbox">
                                                                        <input type="checkbox" id="c-75" value="John" />
                                                                        <label for="c-75">
                                                                            <span class="avatar">
                                                                                <img src="/webaliveportal_v2/assets/images/Lily-Webalive-Site.jpg" alt="author"/>
                                                                            </span>
                                                                            <span class="name-field">John</span>
                                                                        </label>
                                                                   </span>
                                            </div>
                                            <div class="custom-search-box-item">
                                                                   <span class="custom-checkbox">
                                                                        <input type="checkbox" id="c-76" value="John" />
                                                                        <label for="c-76">
                                                                            <span class="avatar">
                                                                                <img src="/webaliveportal_v2/assets/images/Lily-Webalive-Site.jpg" alt="author"/>
                                                                            </span>
                                                                            <span class="name-field">John</span>
                                                                        </label>
                                                                   </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group submit-popup">
                                    <input type="submit" value="Cancel" class="btn" />
                                    <button class="btn btn-primary">Add</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="web-package-name-field">
                <div class="team-group">
                    <span class="team-rank-value">Team : </span>
                    <div class="tool-tip tooltip-with-picture">
                        <div class="user-profile">
                                    <span class="avatar">
                                           <img src="/webaliveportal_v2/assets/images/Lily-Webalive-Site.jpg" alt="">
                                    </span>
                        </div>
                        <span class="tool-tip-text">Johnny</span>
                    </div>

                    <div class="tool-tip tooltip-with-picture">
                        <div class="user-profile">
                                    <span class="avatar">
                                           <img src="/webaliveportal_v2/assets/images/Lily-Webalive-Site.jpg" alt="">
                                    </span>
                        </div>
                        <span class="tool-tip-text">Lily Keating</span>
                    </div>

                    <div class="tool-tip tooltip-with-picture">
                        <div class="user-profile">
                                    <span class="avatar">
                                           <img src="/webaliveportal_v2/assets/images/Lily-Webalive-Site.jpg" alt="">
                                    </span>
                        </div>
                        <span class="tool-tip-text">Monzur</span>
                    </div>

                    <div class="tool-tip tooltip-with-picture">
                        <div class="user-profile">
                                    <span class="avatar">
                                           <img src="/webaliveportal_v2/assets/images/Lily-Webalive-Site.jpg" alt="">
                                    </span>
                        </div>
                        <span class="tool-tip-text">Johnny</span>
                    </div>

                    <a href="javascript:void(0)"  class="web-package-edit"><img src="/webaliveportal_v2/assets/images/icons/pencil-small-icon.png" alt="plus" /></a>
                    <div class="popup-fullpage project-manager-popup">
                        <div class="popup">
                            <div class="popup-head"><h4>Team<a href="javascript:void(0)" class="close"></a></h4></div>
                            <div class="popup-body">
                                <form action="#" method="get">
                                    <div class="form-group">
                                        <div class="custom-search-box">
                                            <div class="inputfield">
                                                <input type="text" placeholder="Search employee" name="custom-search-box-inputfield" />
                                            </div>
                                            <div class="inputfield-result">
                                                <span class="result-text"><span>Sunny</span> <span class="close-result-text"></span></span>
                                            </div>
                                            <div class="dropdown-down-list">
                                                <div class="custom-search-box-item">
                                                               <span class="custom-checkbox">
                                                                    <input type="checkbox" id="c-81" value="Julie" />
                                                                    <label for="c-81">
                                                                        <span class="avatar">
                                                                            <img src="/webaliveportal_v2/assets/images/Lily-Webalive-Site.jpg" alt="author"/>
                                                                        </span>
                                                                        <span class="name-field">Julie</span>
                                                                    </label>
                                                               </span>
                                                </div>

                                                <div class="custom-search-box-item">
                                                               <span class="custom-checkbox">
                                                                    <input type="checkbox" id="c-82" value="Sunny" />
                                                                    <label for="c-82">
                                                                        <span class="avatar">
                                                                            <img src="/webaliveportal_v2/assets/images/Lily-Webalive-Site.jpg" alt="author"/>
                                                                        </span>
                                                                        <span class="name-field">Sunny</span>
                                                                    </label>
                                                               </span>
                                                </div>

                                                <div class="custom-search-box-item">
                                                               <span class="custom-checkbox">
                                                                    <input type="checkbox" id="c-83" value="Lily" />
                                                                    <label for="c-83">
                                                                        <span class="avatar">
                                                                            <img src="/webaliveportal_v2/assets/images/Lily-Webalive-Site.jpg" alt="author"/>
                                                                        </span>
                                                                        <span class="name-field">Lily</span>
                                                                    </label>
                                                               </span>
                                                </div>

                                                <div class="custom-search-box-item">
                                                               <span class="custom-checkbox">
                                                                    <input type="checkbox" id="c-84" value="John" />
                                                                    <label for="c-84">
                                                                        <span class="avatar">
                                                                            <img src="/webaliveportal_v2/assets/images/Lily-Webalive-Site.jpg" alt="author"/>
                                                                        </span>
                                                                        <span class="name-field">John</span>
                                                                    </label>
                                                               </span>
                                                </div>
                                                <div class="custom-search-box-item">
                                                               <span class="custom-checkbox">
                                                                    <input type="checkbox" id="c-85" value="John" />
                                                                    <label for="c-85">
                                                                        <span class="avatar">
                                                                            <img src="/webaliveportal_v2/assets/images/Lily-Webalive-Site.jpg" alt="author"/>
                                                                        </span>
                                                                        <span class="name-field">John</span>
                                                                    </label>
                                                               </span>
                                                </div>
                                                <div class="custom-search-box-item">
                                                               <span class="custom-checkbox">
                                                                    <input type="checkbox" id="c-86" value="John" />
                                                                    <label for="c-86">
                                                                        <span class="avatar">
                                                                            <img src="/webaliveportal_v2/assets/images/Lily-Webalive-Site.jpg" alt="author"/>
                                                                        </span>
                                                                        <span class="name-field">John</span>
                                                                    </label>
                                                               </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group submit-popup">
                                        <input type="submit" value="Cancel" class="btn" />
                                        <button class="btn btn-primary">Add</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="web-package-name-field">
                <span class="team-rank-value">Support:</span>
                <div class="tool-tip tooltip-with-picture">
                    <div class="user-profile">
                                        <span class="avatar">
                                                <img src="/webaliveportal_v2/assets/images/Lily-Webalive-Site.jpg" alt="">
                                        </span>
                    </div>
                    <span class="tool-tip-text">Reza</span>
                </div>
                <a href="javascript:void(0)"  class="web-package-edit"><img src="/webaliveportal_v2/assets/images/icons/pencil-small-icon.png" alt="plus" /></a>
                <div class="popup-fullpage project-manager-popup">
                    <div class="popup">
                        <div class="popup-head"><h4>Support<a href="javascript:void(0)" class="close"></a></h4></div>
                        <div class="popup-body">
                            <form action="#" method="get">
                                <div class="form-group">
                                    <div class="custom-search-box">
                                        <div class="inputfield">
                                            <input type="text" placeholder="Search employee" name="custom-search-box-inputfield" />
                                        </div>
                                        <div class="inputfield-result">
                                            <span class="result-text"><span>Sunny</span> <span class="close-result-text"></span></span>
                                        </div>
                                        <div class="dropdown-down-list">
                                            <div class="custom-search-box-item">
                                                                   <span class="custom-checkbox">
                                                                        <input type="checkbox" id="c-91" value="Julie" />
                                                                        <label for="c-91">
                                                                            <span class="avatar">
                                                                                <img src="/webaliveportal_v2/assets/images/Lily-Webalive-Site.jpg" alt="author"/>
                                                                            </span>
                                                                            <span class="name-field">Julie</span>
                                                                        </label>
                                                                   </span>
                                            </div>

                                            <div class="custom-search-box-item">
                                                                   <span class="custom-checkbox">
                                                                        <input type="checkbox" id="c-92" value="Sunny" />
                                                                        <label for="c-92">
                                                                            <span class="avatar">
                                                                                <img src="/webaliveportal_v2/assets/images/Lily-Webalive-Site.jpg" alt="author"/>
                                                                            </span>
                                                                            <span class="name-field">Sunny</span>
                                                                        </label>
                                                                   </span>
                                            </div>

                                            <div class="custom-search-box-item">
                                                                   <span class="custom-checkbox">
                                                                        <input type="checkbox" id="c-93" value="Lily" />
                                                                        <label for="c-93">
                                                                            <span class="avatar">
                                                                                <img src="/webaliveportal_v2/assets/images/Lily-Webalive-Site.jpg" alt="author"/>
                                                                            </span>
                                                                            <span class="name-field">Lily</span>
                                                                        </label>
                                                                   </span>
                                            </div>

                                            <div class="custom-search-box-item">
                                                                   <span class="custom-checkbox">
                                                                        <input type="checkbox" id="c-94" value="John" />
                                                                        <label for="c-94">
                                                                            <span class="avatar">
                                                                                <img src="/webaliveportal_v2/assets/images/Lily-Webalive-Site.jpg" alt="author"/>
                                                                            </span>
                                                                            <span class="name-field">John</span>
                                                                        </label>
                                                                   </span>
                                            </div>
                                            <div class="custom-search-box-item">
                                                                   <span class="custom-checkbox">
                                                                        <input type="checkbox" id="c-95" value="John" />
                                                                        <label for="c-95">
                                                                            <span class="avatar">
                                                                                <img src="/webaliveportal_v2/assets/images/Lily-Webalive-Site.jpg" alt="author"/>
                                                                            </span>
                                                                            <span class="name-field">John</span>
                                                                        </label>
                                                                   </span>
                                            </div>
                                            <div class="custom-search-box-item">
                                                                   <span class="custom-checkbox">
                                                                        <input type="checkbox" id="c-96" value="John" />
                                                                        <label for="c-96">
                                                                            <span class="avatar">
                                                                                <img src="/webaliveportal_v2/assets/images/Lily-Webalive-Site.jpg" alt="author"/>
                                                                            </span>
                                                                            <span class="name-field">John</span>
                                                                        </label>
                                                                   </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group submit-popup">
                                    <input type="submit" value="Cancel" class="btn" />
                                    <button class="btn btn-primary">Add</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>



                 <div class="staff-project-overview">
                    <h4>Milestone Checklist</h4>
                    <div class="row milestone-checklist-row">
                        <div class="col-md-4">
                            <h6 class="sub-title">Client progress</h6>
                                <div class="input-group-inline">
                                    <div class="input-group">
                                        <span class="custom-radio">
                                            <input type="radio" id="r-1" name="client-progress">
                                            <label for="r-1">Fill our your website Brief &amp; finalise it</label>
                                        </span>
                                    </div>
                                    <div class="input-group">
                                        <span class="custom-radio">
                                            <input type="radio" id="r-2" name="client-progress">
                                            <label for="r-2">Upload your witten and visual content.</label>
                                        </span>
                                    </div>
                                    <div class="input-group">
                                        <span class="custom-radio">
                                            <input type="radio" id="r-3" name="client-progress">
                                            <label for="r-3">Create your sitemap.</label>
                                        </span>
                                    </div>
                                    <!--start:milestone-->
                                    <div  class="progress-milestone">
                                        <a href="javascript:void(0)" class="milestone-plus-button">
                                            <span class="icon-circle miniextra"><i class="fa"><img src="images/icons/mini-plus.png" alt="plus" /></i></span>
                                        </a>
                                        <div  class="progress-milestone-add">
                                            <form action="#" method="post">
                                                <div  class="progress-milestone-add-content">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" placeholder="" name="client-progress" />
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="submit" class="btn-primary" value="Add" />
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <!--end:milestone-->

                                </div>

                        </div>

                        <div class="col-md-4">
                            <h6 class="sub-title"> Onshore PM</h6>
                            <div class="input-group-inline">
                                <div class="input-group">
                                        <span class="custom-radio">
                                            <input type="radio" id="r-4" name="onshore-pm">
                                            <label for="r-4">Fill in timeline</label>
                                        </span>
                                </div>
                                <div class="input-group">
                                        <span class="custom-radio">
                                            <input type="radio" id="r-5" name="onshore-pm">
                                            <label for="r-5">Request Brief & Timeline</label>
                                        </span>
                                </div>
                                <div class="input-group">
                                        <span class="custom-radio">
                                            <input type="radio" id="r-6" name="onshore-pm">
                                            <label for="r-6">Send welcome email</label>
                                        </span>
                                </div>
                                <!--start:milestone-->
                                <div  class="progress-milestone">
                                    <a href="javascript:void(0)" class="milestone-plus-button">
                                        <span class="icon-circle miniextra"><i class="fa"><img src="images/icons/mini-plus.png" alt="plus" /></i></span>
                                    </a>
                                    <div  class="progress-milestone-add">
                                        <form action="#" method="post">
                                            <div  class="progress-milestone-add-content">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="" name="client-progress" />
                                                </div>
                                                <div class="form-group">
                                                    <input type="submit" class="btn-primary" value="Add" />
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <!--end:milestone-->
                            </div>

                        </div>


                        <div class="col-md-4">
                            <h6 class="sub-title">Offshore PM</h6>
                            <div class="input-group-inline">
                                <div class="input-group">
                                        <span class="custom-radio">
                                            <input type="radio" id="r-7" name="offshore-pm">
                                            <label for="r-7">Review client brief & project details</label>
                                        </span>
                                </div>
                                <div class="input-group">
                                        <span class="custom-radio">
                                            <input type="radio" id="r-8" name="offshore-pm">
                                            <label for="r-8">Upload your witten and visual content</label>
                                        </span>
                                </div>
                                <!--start:milestone-->
                                <div  class="progress-milestone">
                                    <a href="javascript:void(0)" class="milestone-plus-button">
                                        <span class="icon-circle miniextra"><i class="fa"><img src="images/icons/mini-plus.png" alt="plus" /></i></span>
                                    </a>
                                    <div  class="progress-milestone-add">
                                        <form action="#" method="post">
                                            <div  class="progress-milestone-add-content">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="" name="client-progress" />
                                                </div>
                                                <div class="form-group">
                                                    <input type="submit" class="btn-primary" value="Add" />
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <!--end:milestone-->
                            </div>

                        </div>


                    </div>
               </div>

        <div class="brief-sitemap-content">
            <h4>Brief & Sitemap</h4>
            <table class="table-normal">
                <thead>
                <tr>
                    <th>Type</th>
                    <th>Status</th>
                    <th>Action</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>Sitemap</td>
                    <td>Complete</td>
                    <td><a href="#">Disable</a></td>
                    <td><a href="#">Delete</a></td>
                </tr>
                <tr>
                    <td>Website Brief</td>
                    <td>Not in Use</td>
                    <td><a href="#">Enable</a></td>
                    <td><a href="#">Delete</a></td>
                </tr>
                </tbody>
            </table>
        </div>


            <div class="staff-project-overview brief-sitemap">
                <h4>
                    Project Timeline
                    <a href="javascript:void(0)" class="project-timeline-popup" id="project-timeline-popup"><span class="icon-circle mini"><img src="images/icons/small-plus.png" alt="plus"></span></a>
                </h4>
                <div class="popup-fullpage" id="popup-fullpage-project-timeline">
                    <div class="popup">
                        <div class="popup-head"><h4>Add Project Timeline<a href="javascript:void(0)" class="close"></a></h4></div>
                        <div class="popup-body">
                        <form action="#" method="get">
                            <div class="form-group">
                                <label>Milestone Type</label>
                                <select class="custom-dropdown">
                                    <option>Concept Design</option>
                                    <option>Concept Design</option>
                                    <option>Concept Design</option>
                                    <option>Concept Design</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Details:</label>
                                <textarea class="form-control" rows="5"></textarea>
                            </div>
                            <div class="form-group">
                                <label>Start Date:</label>
                                <div class="date-picker input-group">
                                    <input type="text" class="form-control"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>End Date:</label>
                                <div class="date-picker input-group">
                                    <input type="text" class="form-control"/>
                                </div>
                            </div>

                            <div class="form-group submit-popup">
                                <input type="submit" value="Cancel" class="btn" />
                                <button class="btn btn-primary">Add</button>
                            </div>
                            
                            

                        </form>
                        </div>


                    </div>
                </div>

                <div class="project-time-line">
                    <div class="step-timeline step-timeline-project">
                        <div class="step panning one-week" title="Planning"><div class="panning-progress" style="width: 50%;">&nbsp;</div></div>
                        <div class="step concept-design three-week" title="Concept Design" ><div class="panning-progress" style="width: 0;">&nbsp;</div></div>
                        <div class="step concept-revision five-week" title="Concept Revision"><div class="panning-progress"  style="width: 0;">&nbsp;</div></div>
                        <div class="step development nine-week" title="Development"><div class="panning-progress"  style="width:0;">&nbsp;</div></div>
                        <div class="step development-revision eleven-week" title="Development Revision" ><div class="panning-progress" style="width: 0;">&nbsp;</div></div>
                        <div class="step implimentation twelve-week" title="Implimentation" ><div class="panning-progress" style="width: 0;">&nbsp;</div></div>
                        <div class="step warranty sixteen-week"  title="Warranty" ><div class="panning-progress"style="width: 0;">&nbsp;</div></div>
                    </div>
                </div>
                <div class="table-wrap project-milestone-table">
                    <table class="table-normal table-timeline">
                        <thead>
                        <tr>
                            <th>Milestone</th>
                            <th>Duration</th>
                            <th>Progress</th>
                            <th>Time Remaining</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>Planning</td>
                            <td>27/09/2018 - 04/10/2018</td>
                            <td>
                                <div class="step-timeline">
                                    <div class="step panning one-week" title="Panning">
                                        <div class="panning-progress" style="width: 50%;">&nbsp;</div>
                                    </div>
                                </div>
                            </td>
                            <td>1 Week <a href="javascript:void(0)"  class="project-timeline-popup float-right"><img src="/webaliveportal_v2/assets/images/icons/pencil-small-icon.png" alt="plus" /></a> </td>
                        </tr>
                        <tr>
                            <td>Concept Design</td>
                            <td>04/10/2018 - 18/10/2018</td>
                            <td>
                                <div class="step-timeline">
                                    <div class="step concept-design three-week" title="Concept Design">
                                        <div class="panning-progress" style="width: 0;">&nbsp;</div>
                                    </div>
                                </div>
                            </td>
                            <td>3 Weeks</td>
                        </tr>
                        <tr>
                            <td>Concept Revision</td>
                            <td>18/10/2018 - 25/10/2018</td>
                            <td>
                                <div class="step-timeline">
                                    <div class="step concept-revision five-week" title="Concept Revision">
                                        <div class="panning-progress" style="width: 0;">&nbsp;</div>
                                    </div>
                                </div>
                            </td>
                            <td>5 Weeks</td>
                        </tr>
                        <tr>
                            <td>Development</td>
                            <td>25/10/2018 - 22/11/2018</td>
                            <td><div class="step-timeline">
                                    <div class="step development nine-week" title="Development">
                                        <div class="panning-progress" style="width: 0;">&nbsp;</div>
                                    </div>
                                </div>
                            </td>
                            <td>9 Week</td>
                        </tr>
                        <tr>
                            <td>Development Revision</td>
                            <td>22/11/2018 - 06/12/2018</td>
                            <td><div class="step-timeline">
                                    <div class="step development-revision eleven-week" title="Development Revision">
                                        <div class="panning-progress" style="width: 0;">&nbsp;</div>
                                    </div>
                                </div>
                            </td>
                            <td>11 Weeks</td>
                        </tr>
                        <tr>
                            <td>Implimentation</td>
                            <td>06/12/2018 - 13/06/2019</td>
                            <td><div class="step-timeline">
                                    <div class="step implimentation twelve-week" title="Implimentation">
                                        <div class="panning-progress" style="width: 0;">&nbsp;</div>
                                    </div>
                                </div>
                            </td>
                            <td>12 Weeks</td>
                        </tr>
                        <tr>
                            <td>Warranty</td>
                            <td>06/12/2018 - 13/06/2019</td>
                            <td><div class="step-timeline">
                                    <div class="step warranty sixteen-week" title="Warranty">
                                        <div class="panning-progress" style="width: 0;">&nbsp;</div>
                                    </div>
                                </div>
                            </td>
                            <td>16 Weeks</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
               </div>

        <div class="comment-form latest-project-message">
            <div class="latest-project-heading">
                <h3>Latest Project Message <a href="#" class="btn-primary view-more-link"><i class="fa fa-eye" aria-hidden="true"></i>VIEW MORE</a></h3>
            </div>
            <div class="comment-description">
                <div class="comment-feeback-picture"><img src="images/Lily-Webalive-Site.jpg" alt=""></div>
                <div class="comment-right-part">
                    <div class="title-description border-bottom">
                        <span class="left-title-text">Lily Keating (WebAlive)</span>
                        <span class="right-title-text">Feb 14, 2019 at 11:06 am <a href="#" class="edit-link"><span class="icon-circle mini"><img src="images/icons/pencil.png" alt="pencil"></span></a>  </span>
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

            <div class="comment-description">
                <div class="comment-feeback-picture"><img src="images/Lily-Webalive-Site.jpg" alt=""></div>
                <div class="comment-right-part">
                    <div class="title-description border-bottom">
                        <span class="left-title-text">Lily Keating (WebAlive)</span>
                        <span class="right-title-text">Feb 14, 2019 at 11:06 am <a href="#" class="edit-link"><span class="icon-circle mini"><img src="images/icons/pencil.png" alt="pencil"></span></a>  </span>
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

            <!--<div class="comment-group-btn">
                <button type="button" class="btn btn-secondary add-comment-btn"><span>ADD COMMENT</span></button>
                <button type="button" class="btn btn-secondary right approve-comment-btn">APPROVE</button>
            </div>-->

        </div>



</div>
</div>



</body>
</html>


