	var days = ["Monday0", "Monday1", "Monday2", "Monday3", "Monday4", "Monday5", "Monday6", "Monday7", "Monday8", "Monday9", "Monday10",
	"Tuesday0", "Tuesday1", "Tuesday2", "Tuesday3", "Tuesday4", "Tuesday5", "Tuesday6", "Tuesday7", "Tuesday8", "Tuesday9", "Tuesday10",
	"Wednesday0", "Wednesday1", "Wednesday2", "Wednesday3", "Wednesday4", "Wednesday5", "Wednesday6", "Wednesday7", "Wednesday8", "Wednesday9", "Wednesday10",
	"Thursday0", "Thursday1", "Thursday2", "Thursday3", "Thursday4", "Thursday5", "Thursday6", "Thursday7", "Thursday8", "Thursday9", "Thursday10",
	"Friday0", "Friday1", "Friday2", "Friday3", "Friday4", "Friday5", "Friday6", "Friday7", "Friday8", "Friday9", "Friday10"];

function checkTime(index, username){

	if(index == days.length){
		return;
	}
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

	var id;

		 responseDiv = document.getElementById(days[index]);
			
		id = days[index];	
			
	
		
	
		ajaxRequest.onreadystatechange = function(){
			
			if(ajaxRequest.readyState == 4){
				
				HandleResponsee(ajaxRequest.responseText,responseDiv);
				checkTime(index += 1,username);
			}
			
			
		}
		
		var parameters = "?id=" + id + "&username=" + username;
		

	ajaxRequest.open("GET","checkTimes.php" + parameters, true);
	ajaxRequest.send(null);

}


function HandleResponsee(response,responseDiv)


{
if(response == ""){

}
else{
 responseDiv.innerHTML = response;
}

}
