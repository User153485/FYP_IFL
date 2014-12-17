<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Institute for Financial Literacy</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="global.css">
        <link rel="stylesheet" type="text/css" href="assets/imgSlider/imgSlider.css">
        <link rel="icon" href="assets/favicon.ico" type="image/x-icon">
        <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="assets/js/jssor.slider.mini.js"></script>
        <script type="text/javascript" src="assets/imgSlider/imgSliderConfig.js"></script>
        <script type="text/javascript">
            $(document).ready(function () {
                var $searchmode = 0;
                $(document).click(function (e) {
                    if ((e.target.id === 'searchbtn' || e.target.id === 'searchbox') && !$searchmode) {
                        expand();
                    } else if ((e.target.id === 'searchbtn' || e.target.id === 'searchbox') && $searchmode) {
                        //run search logic here if event target is searchbtn
                    } else {
                        contract();
                    }
                });
                var expand = function () {
                    $('#searchbtndiv').animate({right: '296px'}, {duration: 275, queue: false});
                    $('#searchbox').animate({left: '0px'}, {duration: 275, queue: false}).animate({opacity: '1'}, {duration: 400, queue: false}).css({'z-index': 'auto', 'display': 'inline-block'}).focus();
                    $searchmode = 1;
                };
                var contract = function () {
                    $('#searchbtndiv').animate({right: '130px'}, {duration: 275, queue: false});
                    $('#searchbox').animate({left: '225px'}, {duration: 275, queue: false}).animate({opacity: '0'}, {duration: 220, queue: false}).css('z-index', '-1').delay(500).queue(function (next) {
                        $(this).hide();
                        next();
                    });
                    $searchmode = 0;
                };
            });
        </script>
    </head>
    <body>
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom:0px;" >
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#" style="padding:0;margin-right:25px;"><img src="assets/IFL-web-logo.png" height="53"></a>
                </div>
                <div class="collapse navbar-collapse" id="main-navbar-collapse">
                    <ul class="nav navbar-nav"> <!--style="font-weight:bold;"-->
                        <li class="active"><a href="#">Home</a></li>
                        <li><a href="#">Competitions</a></li>
                        <li><a href="#">Submissions</a></li>
                        <li><a href="#">Vote</a></li>
                        <li><a href="#">Enquiry</a></li>
                    </ul>
                    <div style="position:relative;">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="#">Login</a></li>
                            <li class="hidden-xs" style="padding-top:13px;">|</li>
                            <li><a href="#">Register</a></li>
                        </ul>
                        <form class="navbar-form navbar-right hidden-xs" role="search" style="padding:0;margin:9px 0 0;">
                            <div class="button" id="searchbtndiv" onclick="" style="position:absolute;right: 130px;z-index:1;">
                                <span class="glyphicon glyphicon-search" id="searchbtn" style="color:#888888;font-size:1.1em;margin:6px 0 0 6px;padding:2px;cursor:pointer;"></span>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="searchbox" style="width: 185px;position:relative;left:179px;opacity:0;z-index:-1;display:none;margin:0;padding:0;padding-left:26px;" placeholder="Search">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </nav>
        <div id="slider1_container" style="display:none;position:relative;margin:0 auto 0;width:1200px;height:500px;overflow:hidden;">
            <div u="slides" style="position:absolute;left:0px;top:0px;width:1200px;height:500px;overflow:hidden;">
                <div><img u="image" src="assets/sampleImg/red.jpg"></div>
                <div><img u="image" src="assets/sampleImg/purple.jpg"></div>
                <div><img u="image" src="assets/sampleImg/blue.jpg"></div>
            </div>
            <div u="navigator" class="jssorb21" style="position:absolute;bottom:26px;left:6px;">
                <div u="prototype" style="position:absolute;width:19px;height:19px;text-align:center;line-height:19px;color:white;font-size:12px;"></div>
            </div>
            <span u="arrowleft" class="jssora21l" style="width: 55px; height: 55px; top: 123px; left: 8px;"></span>
            <span u="arrowright" class="jssora21r" style="width: 55px; height: 55px; top: 123px; right: 8px"></span>
        </div>
        <?php
        echo 'Lorem ipsum dolor sit amet, mei porro dicit consequat at, cu duo volutpat ocurreret referrentur, veniam labitur legendos ex per. Scripta scribentur consectetuer est ne, semper iriure pro ut, porro detracto petentium no has. An mel nihil pertinax instructior, vis no vide decore postea, id elaboraret inciderint ius. Adolescens temporibus eu nam, no nam eruditi fuisset forensibus. Per verear legendos ne. Ad vidit omnes solet sit, sea ne populo mollis conceptam, ea antiopam evertitur cum. Quo id consul possim ullamcorper, at dicta possim argumentum est. Ius ne labitur urbanitas philosophia, est stet tation decore in. Cu quas natum mei, ut his idque summo appellantur. In odio inani minim vim, dicam interpretaris sed in. Eum ne dicat audire phaedrum, ut eos populo instructior complectitur, falli consulatu liberavisse at eam. At his alia legimus fastidii, justo altera comprehensam eam ut. Vis ne velit dicam, epicuri prodesset intellegebat ea eam.';
        ?>
    </body>
</html>