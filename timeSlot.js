function secureTime(whichone,timeRow,color,teamName,timeSlot){
	var ajaxRequest;  // The variable that makes Ajax possible!
	var whichone; // the day of the week associated with the cell
	var timeRow; // the row associated with the given cell 
	var responseDiv; // the element to add the resposne too 
	var timeSlot;
	var color; // the color of the team who is logged in
	var teamName; // the name of the team that is logged in
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
		
		 responseDiv = document.getElementById(whichone + timeRow);
			
		id = whichone + timeRow;	
			
	
		
	
		ajaxRequest.onreadystatechange = function(){
			
			if(ajaxRequest.readyState == 4){
			
				HandleResponse(ajaxRequest.responseText,responseDiv);
			}
			
			
		}
		
		var parameters = "?username=" + teamName + "&teamColor=" + color + "&id=" + id + "&timeSlot=" +  timeSlot;

	
	
		alert(id);
	

	
		

	ajaxRequest.open("GET","timeManipulation.php" + parameters, true);
	ajaxRequest.send(null);
	
	
	
}

function HandleResponse(response,responseDiv)


{

if(response == "taken"){
	alert("time slot already selected");
	
}else{


 responseDiv.innerHTML = response;
}



}
