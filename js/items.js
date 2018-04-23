function switchImage(id){
	var newSrc = document.getElementById(id).src;
	var newAlt = document.getElementById(id).alt;
	document.getElementById("mainImage").src = newSrc;
	document.getElementById("mainImage").alt = newAlt;
}

function purchaseForm(){
	var form = '<fieldset> \
					<legend>Purchase Form (red required)</legend>\
					<form id="purchaseform" action="mailto:pedalworld@gmail.com?subject=Item%20Purchase" method="post" enctype="text/plain">\
						First Name: <input type="text" name="First Name" required>\
						Last Name: <input type="text" name="Last Name" required>\
						Phone Number: <input type="text" id="pno" name="Phone number" pattern="[0-9]{10}" maxlength="10" required>\
						E-Mail: <input type="email" id="email" name="e-mail" required><br>\
						Product Name: <input type="text" name="Product Name" required>\
						Quantity: <input type="number" name="Quantity" required min="1" max="1000"><br>\
						Address: <input type="text" id="address" name="Address" size="100"" required><br> \
						Card Number: <input type="text" id="cno" name="Card number" pattern="[0-9]{16}" maxlength="16" required><br>\
						Shipping Method: <input type="text" name="Shipping method" required>\
					<center>\
						<input type="submit" value="Send">\
						<input type="reset" name="Reset">\
					</center></form>\
					</fieldset>';

	document.getElementById("purchase").innerHTML = form;
}

function closeForm(){
	document.getElementById("purchase").innerHTML= '';
}

