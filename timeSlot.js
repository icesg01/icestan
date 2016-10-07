function secureTime(whichone,week){
	var ajaxRequest;  // The variable that makes Ajax possible!
	var whichone;
	var week;
	var derp;
	try{
		// Opera 8.0+, Firefox, Safari
		ajaxRequest = new XMLHttpRequest();
		
	} catch (e){
		// Internet Explorer Browsers
		try{
			ajaxRequest = new ActiveXObject("Msxml2.XMLHTTP");
		} catch (e) {
			try{
				ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP");
			} catch (e){
				// Something went wrong
				alert("Your browser broke!");
				return false;
			}
		}
	
		}
	
	// Create a function that will receive data sent from the server

	
	var id;
		
		switch(whichone){
			case "Monday":
			
			
			 derp = document.getElementById(whichone + week);
			
			
			
			break;
			
			case "Tuesday":
			
			break;
			
			case "Wednesday":
			
			break;
			
			case "Thursday":
			
			break;
			
			case "Friday":
			
			break;
			
			case "Saturday":
			
			break;
			
			case "Sunday":
			
			break;

			default:
			
			
			
			
		}
	
	
		
		
		

	
	
		
	derp.innerHTML = "you clicked me!"

	
		

	//ajaxRequest.open("GET","ajax-select-query.php" + queryString, true);
	ajaxRequest.send(null);
	
	
	
}