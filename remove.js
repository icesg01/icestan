
function remove(id){

	var ajaxRequest;  // The variable that makes Ajax possible!

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

	

		 responseDiv = document.getElementById(id);
			
			
			
	
		
	
		ajaxRequest.onreadystatechange = function(){
			
			if(ajaxRequest.readyState == 4){
			
				HandleResponse(ajaxRequest.responseText,responseDiv);
			}
			
			
		}

	
		var parameters = "?id=" + id;

	ajaxRequest.open("GET","remove.php" + parameters, true);
	ajaxRequest.send(null);

}


function HandleResponse(response,responseDiv)
{
	responseDiv.innerHTML = response;
}