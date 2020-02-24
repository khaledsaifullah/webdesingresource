<?php include 'header.php'; ?>
<div class="main-container">
    <?php include 'main-sidebar.php'; ?>
    <div class="main-page-content">

        <div class="websitebrief-content">
            <div class="page-heading">
                <p class="head-title"> Web Design Package (clubbpromotions.com.au) for Clubb Games & Promotions </p>
                <h2>Analytics Report</h2>
            </div>
            <div class="page-tab-wrapper analytics-report-tab-content">
                <div class="page-tab-heading page-tab-heading-analytics-top">
                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="pills-keywordranking-tab" data-toggle="pill" href="#pills-keywordranking" role="tab" aria-controls="pills-keywordranking" aria-selected="true">Keyword Ranking</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-googleadwords-tab" data-toggle="pill" href="#pills-googleadwords" role="tab" aria-controls="pills-googleadwords" aria-selected="false">Google AdWords</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-googleanalytics-tab" data-toggle="pill" href="#pills-googleanalytics" role="tab" aria-controls="pills-googleanalytics" aria-selected="false">Google Analytics</a>
                        </li>
                    </ul>
                </div>
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-keywordranking" role="tabpanel" aria-labelledby="pills-keywordranking-tab">
                        <div class="page-tab-heading">
                            <ul class="nav nav-pills mb-3" id="pills-child-tab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="pills-primarykeywords-tab" data-toggle="pill" href="#pills-primarykeywords" role="tab" aria-controls="pills-primarykeywords" aria-selected="true">Primary Keywords</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="pills-allkeywords-tab" data-toggle="pill" href="#pills-allkeywords" role="tab" aria-controls="pills-allkeywords" aria-selected="false">All Keywords</a>
                                </li>
                            </ul>
                        </div>

                        <div class="tab-content" id="pills-child-tabContent">
                            <div class="tab-pane fade show active" id="pills-primarykeywords" role="tabpanel" aria-labelledby="pills-primarykeywords-tab">
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="page-tab-heading">
                                            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                                <li class="nav-item">
                                                    <a class="nav-link active" id="pills-google-tab" data-toggle="pill" href="#pills-google" role="tab" aria-controls="pills-google" aria-selected="true">Google</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" id="pills-bing-tab" data-toggle="pill" href="#pills-bing" role="tab" aria-controls="pills-bing" aria-selected="false">Bing</a>
                                                </li>
                                            </ul>
                                        </div>

                                        <div class="tab-content" id="pills-child-tabContent">
                                            <div class="tab-pane fade show active" id="pills-google" role="tabpanel" aria-labelledby="pills-google-tab">
                                                <div class="pie-chart-block">
                                                    <div class="pie-chart-block-head">
                                                        Rank Comparisons(5% of keywords ranked)
                                                    </div>
                                                    <div class="pie-chart-block-content">
                                                        <div class="cell-box-pie-wrap">
                                                            <div class="cell-box-pieleft">
                                                                <canvas id="top10ItemsChart" class="pie"></canvas>
                                                            </div>
                                                            <div class="cell-box-pieright" id="top10Legend"></div>
                                                        </div>



                                                    </div>
                                                </div>

                                            </div>
                                            <div class="tab-pane fade" id="pills-bing" role="tabpanel" aria-labelledby="pills-bing-tab">Parent 1, Child 1, Child 2</div>
                                        </div>
                                    </div>

                                    <div class="col-md-7">
                                        <h5 class="page-table-title-analytics">No of Keywords in Top 10</h5>
                                        <table class="table table-striped table-analytic-date-keyword">
                                            <thead>
                                            <tr>
                                                <th>Serial</th>
                                                <th>Date</th>
                                                <th>Keyword in Top 10</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php for($i=1;$i<10;$i++){?>
                                                <tr>
                                                    <td><?php echo $i;?></td>
                                                    <td>Mar 02,2019</td>
                                                    <td>2 of 10</td>
                                                </tr>
                                            <?php } ?>
                                            </tbody>
                                        </table>

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <h5 class="page-table-title-analytics">Keyword Ranking as of -May 02,2019 </h5>
                                        <table class="table table-striped table-analytic-rank-keyword">
                                            <thead>
                                            <tr>
                                                <th>&nbsp;</th>
                                                <th>Keyword</th>
                                                <th>Google Rank</th>
                                                <th>Bing Rank</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php for($i=1;$i<10;$i++){?>
                                                <tr>
                                                    <td><?php echo $i;?></td>
                                                    <td>Side Loader Container truck</td>
                                                    <td>Not in 100</td>
                                                    <td>Not in 100</td>
                                                </tr>
                                            <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-allkeywords" role="tabpanel" aria-labelledby="pills-allkeywords-tab">Parent 1, Child 2</div>
                        </div>
                    </div>


                    <div class="tab-pane fade" id="pills-googleadwords" role="tabpanel" aria-labelledby="pills-googleadwords-tab">Parent 2</div>
                    <div class="tab-pane fade" id="pills-googleanalytics" role="tabpanel" aria-labelledby="pills-googleanalytics-tab">Parent 3</div>
                </div>
            </div>


        </div>
    </div>
    <?php //$this->Html->script('chart.js') ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/1.1.0/Chart.js"></script>
    <script>
        var data = [{
            value: 30,
            color: "#7cc576",
            label: "Top 10"
        }, {
            value: 20,
            color: "#f6d35f",
            label: "Top 11 to 20"
        }, {
            value: 40,
            color: "#f68d5f",
            label: "Top 21 to 100"
        }, {
            value: 200,
            color: "#efddb7",
            label: "Not in top 100"
        }];

        var optionsPie = {
            responsive: true,
            scaleBeginAtZero: true,
            legendTemplate: "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<segments.length; i++){%><li><span style=\"background-color:<%=segments[i].fillColor%>\"></span><%if(segments[i].label){%><%=segments[i].label%><%}%></li><%}%></ul>"
        }

        var ctx = $("#top10ItemsChart").get(0).getContext("2d");
        var top10PieChart = new Chart(ctx).Pie(data, optionsPie);
        $("#top10Legend").html(top10PieChart.generateLegend());
    </script>



</div>
</div>
</body>
</html>