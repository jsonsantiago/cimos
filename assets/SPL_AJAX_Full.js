// holds an instance of XMLHttpRequest
var SPLxmlHttp = SPLcreateXmlHttpRequestObject();
var postcodeid_current, addressid_current;

// creates an XMLHttpRequest instance
function SPLcreateXmlHttpRequestObject() {
	// will store the reference to the XMLHttpRequest object
	var xmlHttp;
	// this should work for all browsers except IE6 and older
	try {
		// try to create XMLHttpRequest object
		xmlHttp = new XMLHttpRequest();
	} catch(e) {
		// assume IE6 or older
		var XmlHttpVersions = new Array('MSXML2.XMLHTTP.6.0',
										'MSXML2.XMLHTTP.5.0',
										'MSXML2.XMLHTTP.4.0',
										'MSXML2.XMLHTTP.3.0',
										'MSXML2.XMLHTTP',
										'Microsoft.XMLHTTP');
		// try every prog id until one works
		for (var i=0; i<XmlHttpVersions.length && !xmlHttp; i++) {
			try { 
				// try to create XMLHttpRequest object
				xmlHttp = new ActiveXObject(XmlHttpVersions[i]);
			} catch (e) {}
		}
	}
	// return the created object or display an error message
	if (!xmlHttp) alert("Error creating the XMLHttpRequest object.");
	else return xmlHttp;
}

// function called when the state of the HTTP request changes
function SPLhandleRequestStateChange() {
	try {
		// when readyState is 4, we are ready to read the server response
		if (SPLxmlHttp.readyState == 4) {
			// continue only if HTTP status is "OK"
			if (SPLxmlHttp.status == 200) {
				try {
					// do something with the response from the server
					SPLhandleServerResponse();
				} catch(e) {
				// display error message
				//alert("Error reading the response: " + e.toString());
				}
			} else {
				// display status message
				alert("There was a problem retrieving the data:\n" + 
				SPLxmlHttp.statusText);
			}
		}
	} catch(e) {
	// ignore
	}
}
 
// #################### Get Address to Combo ############################ 
function SPLGetAddressData() {

	var postcode = $('#modal_postcode').val();
	// only continue if xmlHttp isn't void
	if (SPLxmlHttp) {
		// try to connect to the server
		try {
			// initiate reading a file from the server
			SPLxmlHttp.open("GET", "http://localhost/SPLGetFullAddressStep1.php?postcode=" + escape(postcode), true);
			SPLxmlHttp.onreadystatechange = SPLhandleRequestStateChange;
			SPLxmlHttp.send(null);
		} catch (e) {
			//display the error in case of failure
			//alert("Can't connect to server:\n" + e.toString());
			//Suppress error, since can be cause by two calls at once
		}
	}
}

// #################### On Click on Combo ############################ 
function SPLAddressChange(AddressCombo) {

	// only continue if xmlHttp isn't void
	if (SPLxmlHttp) {
		// try to connect to the server
		try {
			// initiate reading a file from the server
			SPLxmlHttp.open("GET", "http://localhost/SPLGetFullAddressStep2.php?AddressID=" + AddressCombo.options[AddressCombo.selectedIndex].value, true);
			SPLxmlHttp.onreadystatechange = SPLhandleRequestStateChange;
			SPLxmlHttp.send(null);
		} catch (e) {
			//display the error in case of failure
			//alert("Can't connect to server:\n" + e.toString());
			//Suppress error, since can be cause by two calls at once
		}
	}
	document.getElementById("SPLSearchArea").innerHTML = "";
} 

// #################### Handle returned data ############################ 
function SPLhandleServerResponse() {
	//##########################################################
	//### Delete this line on production server              ###
	//### This can be used for debuging to show XML returned ###
	//alert(SPLxmlHttp.responseText);
	//##########################################################

	// Test that XML contains valid Address, test for <line1>
	var Credits="",COMP="", LINE1="",LINE2="",LINE3="",TOWN="",COUNTY="",POSTCODE="",COUNTRY="",MultiLineAddress=""
	var XMLresponse = SPLxmlHttp.responseText;

	if (XMLresponse.indexOf("</select>")>0) {
		//if contains a </select> then must be combo box
		document.getElementById("SPLSearchArea").innerHTML = XMLresponse;
	} else {
		if (XMLresponse.indexOf("<line1>")==-1) document.getElementById("SPLSearchArea").innerHTML = XMLresponse;
		else {
			//contains address information so write to fields
			// read the message from the server
			var xmlResponse = SPLxmlHttp.responseXML;

			// obtain the XML's document element
			xmlRoot = xmlResponse.documentElement;

			if (xmlRoot.getElementsByTagName("credits_display_text").item(0).firstChild) 
			{Credits = xmlRoot.getElementsByTagName("credits_display_text").item(0).firstChild.data ;}

			if (xmlRoot.getElementsByTagName("organisation").item(0).firstChild) 
			{COMP = xmlRoot.getElementsByTagName("organisation").item(0).firstChild.data;}

			if (xmlRoot.getElementsByTagName("line1").item(0).firstChild) 
			{LINE1 = xmlRoot.getElementsByTagName("line1").item(0).firstChild.data;}

			if (xmlRoot.getElementsByTagName("line2").item(0).firstChild) 
			{LINE2 = xmlRoot.getElementsByTagName("line2").item(0).firstChild.data;}

			if (xmlRoot.getElementsByTagName("line3").item(0).firstChild) 
			{LINE3 = xmlRoot.getElementsByTagName("line3").item(0).firstChild.data;}

			if (xmlRoot.getElementsByTagName("town").item(0).firstChild) 	
			{TOWN = xmlRoot.getElementsByTagName("town").item(0).firstChild.data;}

			if (xmlRoot.getElementsByTagName("county").item(0).firstChild) 
			{COUNTY = xmlRoot.getElementsByTagName("county").item(0).firstChild.data;}

			if (xmlRoot.getElementsByTagName("postcode").item(0).firstChild) 
			{POSTCODE = xmlRoot.getElementsByTagName("postcode").item(0).firstChild.data;}

			if (xmlRoot.getElementsByTagName("country").item(0).firstChild) 
			{COUNTRY = xmlRoot.getElementsByTagName("country").item(0).firstChild.data;}

			/*document.getElementById("company").value=COMP;
			document.getElementById("postcode").value=POSTCODE;
			document.getElementById("line1").value=LINE1;
			document.getElementById("line2").value=LINE2;
			document.getElementById("line3").value=LINE3;
			document.getElementById("town").value=TOWN;
			document.getElementById("county").value=COUNTY;
			document.getElementById("country").value=COUNTRY;*/

			// Multi line
			if (COMP!="") {MultiLineAddress = MultiLineAddress  + COMP + "\r\n"}
			if (LINE1!="") {MultiLineAddress = MultiLineAddress + LINE1 + "\r\n"}
			if (LINE2!="") {MultiLineAddress = MultiLineAddress + LINE2 + "\r\n"}
			if (LINE3!="") {MultiLineAddress = MultiLineAddress + LINE3 + "\r\n"}
			if (TOWN!="") {MultiLineAddress = MultiLineAddress + TOWN + "\r\n"}
			if (COUNTY!="") {MultiLineAddress = MultiLineAddress + COUNTY + "\r\n"}
			/*if (POSTCODE!="") {MultiLineAddress = MultiLineAddress + POSTCODE + "\r\n"}
			if (COUNTRY!="") {MultiLineAddress = MultiLineAddress + COUNTRY + "\r\n"}*/
			document.getElementById(addressid_current).value=MultiLineAddress;
			document.getElementById(postcodeid_current).value=POSTCODE;

			/* FOR YMD PRESCREEN*/
			if (document.getElementById("ppc_lookup") != null){
				var ppc = "";  
				for (var i = 0; i < POSTCODE.length; i++) {
					if ('0123456789'.indexOf(POSTCODE.charAt(i)) !== -1) { break; }
					else ppc += POSTCODE.charAt(i);
				}
				

				document.getElementById("line1_lookup").value=LINE1;
				document.getElementById("line2_lookup").value=LINE2;
				document.getElementById("city_lookup").value=TOWN;
				document.getElementById("county_lookup").value=COUNTY;
				document.getElementById("ppc_lookup").value=ppc;
			}

			$('.bs-example-modal-lookup').modal('toggle');
			
		}
	}
}