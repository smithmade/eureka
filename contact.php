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
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
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
<body class="about">


<div class="wrapper">
    
    <?php include( "header.php"); ?>
	
	<div class="content"> 

		<form id="contact" name="contact" method="post" novalidate="novalidate">
		    <fieldset>
		        <input type="text" name="name" id="name" placeholder="NAME" value="" required="">
		        <input type="text" name="phone" id="phone" placeholder="PHONE" value="">
		        <input type="text" name="email" id="email" placeholder="EMAIL" value="" required="">
		        <input type="text" name="subject" id="subject" placeholder="SUBJECT" value="">
		        <textarea name="message" id="message" placeholder="MESSAGE" required=""></textarea>
		        <span class="input-button"><input id="submit" type="submit" name="submit" value="Send"></span>
		    </fieldset>
		</form>

		<div id="success">
		    <span class="green textcenter">
		        <p>Your message was sent successfully! I will be in touch as soon as I can.</p>
		    </span>
		</div>

		<div id="error">
		    <span>
		        <p>Something went wrong, try refreshing and submitting the form again.</p>
		    </span>
		</div>

        <div class="info-box">
            <p>
                732.774.3331
            </p>
            <p>
                <a href="mailto:info@pbw601.com">info@pbw601.com</a>
            </p>
        </div>

	</div>

</div>

<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery.form/3.32/jquery.form.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.11.1/jquery.validate.min.js"></script>
<script type="text/javascript">
jQuery.validator.addMethod('answercheck', function (value, element) {
        return this.optional(element) || /^\bcat\b$/.test(value);
    }, "type the correct answer -_-");

// validate contact form
$(function() {
    $('#contact').validate({
        rules: {
            name: {
                required: true,
                minlength: 2
            },
            email: {
                required: true,
                email: true
            },
            message: {
                required: true
            },
            answer: {
                required: false,
                answercheck: false
            }
        },
        messages: {
            name: {
                required: "Please enter a name",
                minlength: "Name must consist of more than 2 characters"
            },
            email: {
                required: "Please enter a valid email addresss"
            },
            message: {
                required: "Please enter a message",
                minlength: "thats all? really?"
            },
            answer: {
                required: "sorry, wrong answer!"
            }
        },
        submitHandler: function(form) {
            $(form).ajaxSubmit({
                type:"POST",
                data: $(form).serialize(),
                url:"process.php",
                success: function() {
                    $('#contact :input').attr('disabled', 'disabled');
                    $('#contact').fadeTo( "slow", 0, function() {
                        $(this).find(':input').attr('disabled', 'disabled');
                        $(this).find('label').css('cursor','default');
                        $('#success').fadeIn();
                    });
                },
                error: function() {
                    $('#contact').fadeTo( "slow", 0, function() {
                        $('#error').fadeIn();
                    });
                }
            });
        }
    });
});
</script>
<!--
<script type="text/javascript">
	$(document).ready(function(){
		resizeDiv();
	});

	window.onresize = function(event) {
		resizeDiv();
	}

	function resizeDiv() {
		vpw = $(window).width();
		vph = $(window).height();
		$('.info-box').css({'height': vph});
	}
</script>
-->

<script type="text/javascript">
    $( document ).ready(function() {
      $(".info-box").css('height',$("#contact").height() - 7);
    });
</script>


<script type="text/javascript">
	$( document ).ready(function() {
	  $(".title-block").css('height',$(".copy-block").height() + 54);
	});
</script>

<!-- End Document
================================================== -->
</body>
</html>