<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="cs"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang="cs"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang="cs"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="cs"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-responsive.min.css">
        <link rel="stylesheet" href="css/main.css">

        <script src="js/vendor/modernizr-2.6.1-respond-1.1.0.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
        <![endif]-->

        <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <a class="brand" href="#">Project Gabriela</a>
                    <div class="nav-collapse collapse">
                        <ul class="nav">
                            <li><a href="#about">O aplikaci</a></li>
                            <li><a href="#contact">Tvůrce</a></li>
                        </ul>
                    </div><!--/.nav-collapse -->
                </div>
            </div>
        </div>

        <div class="container">

            <h1>Gabriela - překladatelská aplikace</h1>
	    <form class="form-horizontal" action="app/processFile.php" method="post">
		<fieldset>
		    <legend>Loader překladatelské třídy</legend>
		    <div class="control-group">
			<label class="control-label" for="classToLoad">Jazyková třída <i class="icon-file"></i></label>
			<div class="controls">
			    <div class="fileupload fileupload-new" data-provides="fileupload">
				<div class="input-append">
				    <div class="uneditable-input span3"><i class="icon-file fileupload-exists"></i> <span class="fileupload-preview"></span></div><span class="btn btn-file"><span class="fileupload-new">Vyber soubor</span><span class="fileupload-exists">Změň</span><input type="file" /></span><a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Odstraň</a>
				</div>
			    </div>
			</div>
		    </div>
		    <div class="control-group">
			<div class="controls">
			    <input type="submit" name="load" class="btn btn-primary" value="Zpracuj" />
			</div>
		    </div>			
		</fieldset>
	    </form>
            <hr>

            <footer>
                <p class="center"><i class="icon-wrench"></i> 2012 - <?php echo date('Y') ?></p>
            </footer>

        </div> <!-- /container -->

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.8.2.min.js"><\/script>')</script>

        <script src="js/vendor/bootstrap.min.js"></script>

        <script src="js/main.js"></script>
    </body>
</html>