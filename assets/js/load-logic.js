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
				$('#wedContent').load("components/pages/gallery.php");
		break;

		case 'SERVICES':
			$('#wedContent').load("components/pages/services.php");
		break;

		case 'PACKAGES':
			$('#wedContent').load("components/pages/packages.php");
		break;

		case 'CONTACT':
			$('#wedContent').load("components/pages/contact.php");
		break;
		
		default:
			// statements_def
		break;
	}
}