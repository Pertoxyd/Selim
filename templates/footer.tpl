</div> <!-- schließt den Content Container "Jumbotron (.jumbotron)
    <!-- Pfeilbuttons!!!!! :) -->
	<div class="row {$hide}">
	<div class="col-lg-7 col-lg-offset-3 text-center">
		<div class="btn-group text-center" role="group">
			<!-- Button 1 (ganz links) -->
			<a class="btn btn-default btn-lg" href="{$footernav_first}" role="button">
				<span class="glyphicon glyphicon-step-backward" aria-hidden="true"></span>
			</a>
			<!-- Button 2 -->
			<a class="btn btn-default text-left btn-lg" href="{$footernav_prev}" role="button">
				<span class="glyphicon glyphicon-triangle-left" aria-hidden="true"></span>
				<span class="hidden-xs">vorherige Seite</span>
			</a>
			<!-- Dropdown Seitenzahl -->
			<div class="btn-group dropup" role="group">
			  <button class="btn btn-default dropdown-toggle btn-lg" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
				{$footernav_cur_page}
				<span class="caret"></span>
			  </button>
			  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
				{$footernav_all_pages}
			  </ul>
			</div>
			<!-- Button 3  -->
			<a class="btn btn-default text-left btn-lg" href="{$footernav_next}" role="button">
				<span class="hidden-xs">nächste Seite</span>
				<span class="glyphicon glyphicon-triangle-right" aria-hidden="true"></span>
			</a>
			<!-- Button 4 (ganz rechts) -->
			<a class="btn btn-default btn-lg" href="{$footernav_last}" role="button">
				<span class="glyphicon glyphicon-step-forward" aria-hidden="true"></span>
			</a>
		</div>
		</div>
	</div> <!-- row der Pfeilbuttons -->
    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="https://code.jquery.com/ui/1.12.0-rc.2/jquery-ui.js"></script>
	<script type="text/javascript" src="{$selimwebbase}script/jquery.ui.touch-punch.js"></script>
    <!--<script src="../../dist/js/bootstrap.min.js"></script>-->
	<script language="JavaScript" src="{$selimwebbase}/Bootstrap/bootstrap-3.3.5-dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="{$selimwebbase}/assets/js/ie10-viewport-bug-workaround.js"></script>
	<!-- JavaScript Datei mit möglichen Funktionen zur Validierung etc. -->
	<script type="text/javascript" src="{$selimwebbase}script/script.js"></script>
</body>
</html>