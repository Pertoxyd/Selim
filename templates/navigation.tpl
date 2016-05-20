<!-- Fixed navbar -->
    <nav class="navbar navbar-default navbar-fixed-top headerSelim">
		<div class="container">
			<div class="navbar-header">
				<!-- Hauptnavibutton -->
				<button type="button" class="navbar-toggle collapsed pull-left btn-lg navButton" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<span class="navbar-brand hidden-md hidden-lg">{$module_mobile_title}</span>
				<!-- iWis Tipp Button -->
				<button type="button" class="navbar-toggle collapsed pull-right btn-lg" data-toggle="collapse" data-target="#iwistipp" aria-expanded="false" aria-controls="navbar">
					<span class="sr-only">Toggle navigation</span>
					<span class="glyphicon glyphicon-question-sign"></span>
				</button>
			</div>
			<div class="row">
				<div class="col-md-9 col-lg-9">
					<div class="row">
						<div class="col-lg-8 col-lg-offset-4 hidden-xs hidden-sm ">
							<h1>{$module_title}</h1>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-12">
						<!-- das klappt aus -->
							<div id="navbar" class="navbar-collapse collapse">
							  <ul class="nav navbar-nav">
								<li class="active"><a href="{$selimwebbase}index.php">Startseite</a></li>
								<li><a href="#about">Mein Profil</a></li>
								<li class="dropdown">
								  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Alle SELiM Module <span class="caret"></span></a>
								  <ul class="dropdown-menu">
									<li><a href="http://www.uni-hildesheim.de/mimor/selim_st/Modul_GDI/GDI_Einstieg.php" target="_blank">Grundbegriffe IW   <span class='glyphicon glyphicon-new-window'></span></a></li>
									<li><a href="http://www.uni-hildesheim.de/mimor/selim_st/Modul_IR/IR_1_bekog_SELIM/inhalt.php" target="_blank">Information Retrieval 1   <span class='glyphicon glyphicon-new-window'></span></a></li>
									<li><a href="http://www.uni-hildesheim.de/mimor/selim_st/Modul_IR/IR_2_bekog_SELIM/r_inhalt.php" target="_blank">Information Retrieval 2   <span class='glyphicon glyphicon-new-window'></span></a></li>
									<!--<li role="separator" class="divider"></li>
									<li class="dropdown-header">Nav header</li>-->
									<li><a href="{$selimwebbase}module/evaIR/inhalt_eva.php">Evaluierung von IR Systemen</a></li>
									<li><a href="{$selimwebbase}module/fis/inhalt_fis.php">Fakteninformationssysteme</a></li>
									<li><a href="{$selimwebbase}module/mue/inhalt_mue.php">Maschinelle Übersetzung</a></li>
								  </ul>
								</li>
								<li><a href="{$selimwebbase}glossar/glossar.php">Glossar</a></li>
								<li><a href="{$selimwebbase}formelsammlung/formelsammlung.php">Formelsammlung</a></li>
							  </ul>
							</div><!--/.nav-collapse -->
						</div>
					</div>
				</div>
				<div class="col-md-3 col-lg-3">
					<div id="iwistipp" class="navbar-collapse collapse pull-right {$visibility}">
					<ul class="nav navbar-nav">
						<li class="dropdown">
						  <a href="#" class="dropdown-toggle iwisTipp" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" title="Bitte iWi um Hilfe"></a>
						  <ul class="dropdown-menu dropdown-menu-right well">
							<li><h2>{$iwisHeadline}</h2></li>
							<li>
								<p>{$iwisTipp}
								</p>
							</li>
						  </ul>
						</li>
					</ul>
				</div>
				</div>
			</div>
		  <!-- iWi's Tipp und Navigation zum Ausklappen -->
		  
		</div><!-- /.container-->
    </nav>

	<!-- Content Bereich beginnt -->
	<div class="container">

      <!-- Warpper um den Inhalt, de für Abstand zum fixed Header sorgt -->
      <div class="jumbotron">