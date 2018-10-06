function loadPage(currentPage){
	// alert("hi");
	switch (currentPage) {
		case "HOME":
			$('#wedContent').load("components/pages/home.php");
			break;

			case 'ABOUT':
				$('#wedContent').load("components/pages/about.php");
				break;

				case 'GALLERY':
					$('#wedContent').load("components/pages/gallery.php", function(){
						alert('hello');
						var Shuffle = window.Shuffle;
						var element = document.querySelector('.my-shuffle-container');
						var sizer = element.querySelector('.my-sizer-element');

						var shuffleInstance = new Shuffle(element, {
							itemSelector: '.picture-item',
							sizer: sizer // could also be a selector: '.my-sizer-element'
						});
						// shuffleInstance.filter('animal');
						$("#all").on("click", function(){
							shuffleInstance.filter();
						});
						$("#btn-animal").on("click", function(){
							shuffleInstance.filter('animal');
						});
						$("#btn-city").on("click", function(){
							shuffleInstance.filter('city');
						});
						$("#btn-nature").on("click", function(){
							shuffleInstance.filter('nature');
						});
					});
					
					break;
					default:
						// statements_def
						break;
					}
				}