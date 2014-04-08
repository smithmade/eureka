<!DOCTYPE html>

<!--

MADE BY
                                                                     
   _|_|_|      _|      _|      _|_|_|      _|_|_|_|_|      _|    _|  
 _|            _|_|  _|_|        _|            _|          _|    _|  
   _|_|        _|  _|  _|        _|            _|          _|_|_|_|  
       _|      _|      _|        _|            _|          _|    _|  
 _|_|_|        _|      _|      _|_|_|          _|          _|    _|  
                                                                     
                                                        ASBURY PARK                 

-->


<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en">
<!--<![endif]-->

<head>

    <!-- Basic Page Needs
  ================================================== -->
    <meta charset="utf-8">
    <title>PALOMINO BLACKWING</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Mobile Specific Metas
  ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS
  ================================================== -->
    <link rel="stylesheet" href="stylesheets/base.css">
    <link rel="stylesheet" href="stylesheets/skeleton.css">
    <link rel="stylesheet" href="stylesheets/layout.css">

    <!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

    <!-- Favicons
	================================================== -->
    <link rel="shortcut icon" href="images/favicon.ico">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">

</head>

<body class="floor-plan">


    <div class="wrapper">

        <?php include( "header.php"); ?>

        <div class="content">

            <div class="col1">

                <div class="row1">
                    <div class="floor-plan-img">
                        <img src="images/fp-704.jpg">
                    </div>
                </div>

                <div class="row2">
                    <div class="unit-header">
                        units
                    </div>
                    <div class="floor-number">
                        <a href="floor-7">floor 7</a>
                        <a href="floor-8">floor 8</a>
                        <a href="floor-9">floor 9</a>
                    </div>
                    <div class="unit-number-link">
                        <a href="701">701</a>
                        <a href="702">702</a>
                        <a href="703">703</a>
                    </div>
                    <div class="unit-number-link">
                        <a href="704">704</a>
                        <a href="705">705</a>
                        <a href="706">706</a>
                    </div>
                    <div class="unit-number-link">
                        <a href="707">707</a>
                        <a href="708">708</a>
                    </div>
                </div>

            </div>

            <div class="col2">
                <div class="unit-number-header">
                    unit
                </div>
                <div class="unit-number">
                    704
                </div>
                <div class="features">
                    2500 SQ FT
                    <br>EAST VIEW
                    <br>1 BED
                    <br>2 BATH
                </div>
                <div class="features-header">
                    standard features
                </div>
                <div class="features-title">
                    <div class="plumbing">
                        plumbing
                    </div>
                    <div class="electric">
                        electric
                    </div>
                    <div class="appliances">
                        appliances
                    </div>
                    <div class="furniture">
                        furniture
                    </div>
                    <div class="miscellaneous">
                        miscellaneous
                    </div>
                </div>
            </div>

        </div>

    </div>

    <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script type="text/javascript" src="jquery.zoom.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
        		resizeDiv();
        	});
        
        	window.onresize = function(event) {
        		resizeDiv();
        	}
        
        	function resizeDiv() {
        		vpw = $(window).width();
        		vph = $(window).height() -89;
        		$('.content').css({'height': vph});
        	}
    </script>

    <!-- call zoom -->
    <script type="text/javascript">
        $(document).ready(function(){
        	  $('.floor-plan-img').zoom({
        	  	url: 'images/fp-704.jpg',
        	  	magnify: 1.1
        	  });
        	});
    </script>

    <!-- End Document
================================================== -->
</body>

</html>