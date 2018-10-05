function loadPage(currentPage){
	// alert("hi");
	switch (currentPage) {
		case "HOME":
			$('#wedContent').load("components/pages/home.php");
			break;

		case 'ABOUT':
			$('#wedContent').load("components/pages/about.php");
		break;
		default:
			// statements_def
			break;
	}
}