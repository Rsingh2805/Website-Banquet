<link rel="stylesheet" type="text/css" href="assets/css/services.css">
<div class="container">
	<div class="service-header">
		<h1>Customizable services</h1>
		We provide you a number of services to you at BLABanquets which you can either choose to include in or opt out. This alongside providing for personalizations reduces wastage of both efforts and money.
	</div>
	<div class="row">
		<div class ="col-md-4">
			<ul class="nav nav-pills nav-stacked">
				<li class="active"><a data-tab="0">In-House DJ</a></li>
				<li><a data-tab="1">Catering</a></li>
				<li><a data-tab="2">Decorations</a></li>
				<li><a data-tab="3">Waitering</a></li>
			</ul>
		</div>
		<div class="col-md-8">
			<div class="tab" data-tabid="0">
				<div class="col-md-8">
					<h3 style="margin-top:0px">Faltu DJ</h3>
					<span>The DJ we suggest you is faltu DJ. His services include:</span>
					<ul>
						<li>Dance lighting (Optional)</li>
						<li>State of the art sound systems</li>
						<li>Music ranging from the 80's to the latest track, so that everyone can groove</li>
						<li>Can request any number of exotic songs before the occasion</li>
					</ul>
					<p>When boooking for BlaBanquets, you can book faltuDJ at a lower price</p>
					<p>Contact +91 90XXXXXXXX for more information and bookings</p>
				</div>
				<div class="col-md-4">
					<div class="img-back" style="margin:10px; height: 200px; background-image: url('assets/images/DJ.jpg')"></div>
				</div>
			</div> 
			<div class="tab" data-tabid="1">
				<div class="col-md-8">
					<h3 style="margin-top:0px">BLA BLA Caterers</h3>
					<span>We have ties with BLA bLA caterers who will be able to provide you mouth-watering dishes that your guests will remember you for!</span>
					<ul>
						<li>Wide variety of options</li>
						<li>Indian, Chinese, Continental, Italian dishes available</li>
						<li>Cakes and pastries also available</li>
					</ul>
					<p>Contact +91 90XXXXXXXX for more information and bookings</p>
				</div>
				<div class="col-md-4">
					<div class="img-back" style="margin:10px; height: 200px; background-image: url('assets/images/cater.jpg')"></div>
				</div>
			</div> 
			<div class="tab" data-tabid="2">
				<div class="col-md-12">
					<h3 style="margin-top:0px">Let us handle this!</h3>
					<span>Instead of booking expensive decorators, we have professional decorators who will take care of the whole banquet hall for you so that you can just sit back and chill</span>
					<p>Further you can customize the decorations by directly talking to us before the occassion</p>
				</div>
				<div class="col-md-4">
					<div class="img-back" style="margin:10px; height: 200px; background-image: url('assets/images/dec1.jpg')"></div>
				</div>
				<div class="col-md-4">
					<div class="img-back" style="margin:10px; height: 200px; background-image: url('assets/images/dec2.jpg')"></div>
				</div>
				<div class="col-md-4">
					<div class="img-back" style="margin:10px; height: 200px; background-image: url('assets/images/dec3.jpg')"></div>
				</div>
			</div> 
			<div class="tab" data-tabid="3">
				<div class="col-md-12">
					<h3 style="margin-top:0px">Serving</h3>
					<span>Leave the service to us. Bla la banquets provide you with upto 50 waiters to fulfill all the need of your guests so that they can have a pleasant time at our place</span>
					<p>The corteuos and professional staff makes sure that you have no complaints about the service</p>
				</div>
				<div class="col-md-12">
					<div class="img-back" style="margin:10px; height: 300px; background-image: url('assets/images/servers.jpg')"></div>
				</div>
			</div> 
		</div>
	</div>
</div>

<script>
	$('.nav-pills').find('a').on("click", function(){
		// alert('h')
		$('.nav-pills').find('li').removeClass('active');
		$(this).parent().addClass('active');
		$('.tab').hide();
		$('.tab[data-tabid="'+ $(this).attr('data-tab') +'"]').show();
	})
	$('document').ready(function(){
		$('a[data-tab="0"]').click();
	})

</script>