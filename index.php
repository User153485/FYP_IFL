<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Institute for Financial Literacy</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="global.css">
        <link rel="icon" href="assets/favicon.ico" type="image/x-icon">
        <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script>
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
                    $('#searchbtndiv').animate({left: '30px'}, {duration: 275, queue: false});
                    $('#searchbox').animate({left: '0px'}, {duration: 275, queue: false}).animate({opacity: '1'}, {duration: 400, queue: false}).css('z-index', 'auto').focus();
                    $searchmode = 1;
                };
                var contract = function () {
                    $('#searchbtndiv').animate({left: '225px'}, {duration: 275, queue: false});
                    $('#searchbox').animate({left: '225px'}, {duration: 275, queue: false}).animate({opacity: '0'}, {duration: 220, queue: false}).css('z-index', '-1');
                    $searchmode = 0;
                };
            });
        </script> 
    </head>
    <body>
        <nav class="navbar navbar-default navbar-static-top" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#" style="padding:0;margin-right:25px;"><img src="assets/IFL-web-logo.png" height="53"></a>
                </div>
                <div>
                    <ul class="nav navbar-nav" style="font-weight:bold;">
                        <li class="active"><a href="#">Home</a></li>
                        <li><a href="#">Competitions</a></li>
                        <li><a href="#">Submissions</a></li>
                        <li><a href="#">Vote</a></li>
                        <li><a href="#">Enquiry</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#">Login</a></li>
                        <li style="padding-top:13px;">|</li>
                        <li><a href="#">Register</a></li>
                    </ul>
                    <form class="navbar-form navbar-right" role="search" style="height:34px;width:240px;padding:0;">
                        <div class="button" id="searchbtndiv" onclick="" style="float:left;position:relative;left:225px;z-index:1;">
                            <span class="glyphicon glyphicon-search" id="searchbtn" style="color:#888888;font-size:1.1em;padding-top:8px;width:20px;cursor:pointer;"></span>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="searchbox" style="padding-left:30px;position:relative;left:225px;opacity:0;z-index:-1;" placeholder="Search">
                        </div>
                    </form>
                </div>
            </div>
        </nav>
        <div id="debug">NULL</div>
        <div id="debug2">NULL2</div>
        <div id="debug3">NULL3</div>
        <?php
        echo 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';
        ?>
    </body>
</html>