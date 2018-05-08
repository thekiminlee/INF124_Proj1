function switchImage(id){
	var newSrc = document.getElementById(id).src;
	var newAlt = document.getElementById(id).alt;
	document.getElementById("mainImage").src = newSrc;
	document.getElementById("mainImage").alt = newAlt;
}

function purchaseForm(){
	var form = '<fieldset> \
					<legend>Purchase Form (red required)</legend>\
					<form id="purchaseform" action="../confirmation.php" method="post">\
						First Name: <input type="text" name="First Name" required>\
						Last Name: <input type="text" name="Last Name" required>\
						Phone Number: <input type="text" id="pno" name="Phone number" pattern="[0-9]{10}" maxlength="10" required>\
						E-Mail: <input type="email" id="email" name="e-mail" required><br>\
						Product Name: <input type="text" name="Product Name" required>\
						Quantity: <input type="number" name="Quantity" required min="1" max="1000"><br>\
						Address: <input type="text" id="address" name="Address" size="100"" required><br> \
						Zip Code: <input type="text" name="Zip code" required pattern="[0-9]{4,5}" maxlength="5" onblur="getLocation(this.value)"> \
						City: <input type="textarea" id="city" name="City" required>\
						State: <input type="text" id="state" name="State" required><br>\
						Card Number: <input type="text" id="cno" name="Card number" pattern="[0-9]{16}" maxlength="16" required><br>\
						Shipping Method: <input type="text" name="Shipping method" required>\
					<center>\
						<input type="submit" value="Purchase">\
						<input type="reset" name="Reset">\
					</center></form>\
					</fieldset>';

	document.getElementById("purchase").innerHTML = form;
}

function closeForm(){
	document.getElementById("purchase").innerHTML= '';
}

function getLocation(zip){
	if (window.XMLHttpRequest) {
		// IE7+, Firefox, Chrome, Opera, Safari
		var xhr = new XMLHttpRequest();
	} else {
		// IE5, IE6
		var xhr = new ActiveXObject ("Microsoft.XMLHTTP");
	}

	xhr.onreadystatechange = function () {
		if(xhr.readyState == 4 && xhr.status == 200) {
			var result = xhr.responseText;
			var place = result.split(', ');

			document.getElementById("city").value = place[1];
			document.getElementById("state").value = place[0];
		}
	}

	xhr.open("POST", "../_getCityState.php", true);
	xhr.setRequestHeader("content-type", "application/x-www-form-urlencoded");
	xhr.send("zip="+zip);
}
