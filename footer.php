		<div class="row footer">
			<div class="container">
					<div class="col-xs-12 col-xs-offset-0 col-sm-4 col-sm-offset-0 col-md-2 col-md-offset-0 col-lg-2 col-lg-offset-0">
						<ul class="footer-nav">
							<li><a href="#">Головна</a></li>
							<li><a href="about-us.html">Про нас</a></li>
							<li><a href="places.html">Місця</a></li>
							<li><a href="team.html">Команда</a></li>
						</ul>
					</div>
					<div class="col-xs-12 col-xs-offset-0 col-sm-6 col-sm-offset-2 col-md-4 col-md-offset-6 col-lg-4 col-lg-offset-6">
						<div class="feedback">
							<h3>Напишіть нам</h3>
							<form method="POST" action="#">
							    <input id="name-input" name="field" maxlength="25" type="text" autocomplete="on" placeholder="введіть свое ім'я"></input>
							    <input id="email-input" name="field" maxlength="25" type="text" autocomplete="on" placeholder="введіть свій e-mail"></input>
							    <textarea name="message-input" placeholder="введіть свое питання, яке вас цікавить" rows="5"></textarea>    
							    <button id="submit-form" type="submit">Відправити</button>
		  					</form>
		  				</div>
					</div>
			</div>
		</div>
	</div>
	<script type="text/javascript" src="http://localhost/wordpress/wp-content/themes/paramania/js/jquery.leanModal.min.js"></script>
	<script>
		(function($){
			  var btn = $( '.button-wrap' );
			  var menu = $( 'nav' );
			  
			  btn.click(function(){
			    $( this ).toggleClass( 'on' );
			    menu.toggleClass( 'on' );
			  });
			  
			})(jQuery);
	</script>
	<script>
		document.querySelector( ".button-wrap" )
	.addEventListener( "click", function() {
	    this.classList.toggle( "active" );
	  });
	</script>
	<script>
		$(function () {
		    var screen = $("#hid");
		    $(window).scroll(function () {
		        var scroll = $(window).scrollTop();

		        if (scroll >= 200) {
		            screen.css('display','block');
		        } else {
		            screen.css('display','none');
		        }
		    });
		});
	</script>
	<!-- Yandex.Metrika counter --><!-- /Yandex.Metrika counter -->
	<!-- Google Analytics counter --><!-- /Google Analytics counter -->
</body>
</html>