function loadPage(currentPage){
	// alert("hi");
	switch (currentPage) {
		case "HOME":
			$('#wedContent').load("components/pages/home.php");
			$(document).prop('title', 'MyBanquets');
			removeHighlight();
		break;

		case 'ABOUT':
			$('#wedContent').load("components/pages/about.php");
			$(document).prop('title', 'About | MyBanquets');
			highlightHeaeder("ul.nav li.about")
		break;

		case 'GALLERY':
				$('#wedContent').load("components/pages/gallery.php");
				$(document).prop('title', 'Gallery | MyBanquets');
				highlightHeaeder("ul.nav li.gallery")
		break;

		case 'SERVICES':
			$('#wedContent').load("components/pages/services.php");
			$(document).prop('title', 'Services | MyBanquets');
			highlightHeaeder("ul.nav li.services")
		break;

		case 'PACKAGES':
			$('#wedContent').load("components/pages/packages.php");
			$(document).prop('title', 'Packages | MyBanquets');
			highlightHeaeder("ul.nav li.packages")
		break;

		case 'CONTACT':
			$('#wedContent').load("components/pages/contact.php");
			$(document).prop('title', 'Contact us | MyBanquets');
			highlightHeaeder("ul.nav li.contact")
		break;
		
		default:
			// statements_def
		break;
	}
}

function highlightHeaeder(el){
    removeHighlight();
	$(el).addClass('active');
    console.log($(el).find("span"))
}

function removeHighlight(){
	$('ul.nav').find('li.active').removeClass('active')
}