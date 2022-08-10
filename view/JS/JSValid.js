function isValidRegistration(Registration) 
{
	const firstName = Registration.firstName.value;
	const lastName = Registration.lastName.value;
	const gender = Registration.gender.value;
	const dateOfBirth = Registration.dateOfBirth.value;
	const religion = Registration.religion.value;
	const presentAddress = Registration.presentAddress.value;
	const permanentAddress = Registration.permanentAddress.value;
	const Phone = Registration.Phone.value;
	const username = Registration.username.value;
	const password = Registration.password.value;
	const email = Registration.email.value;
	const recoveryEmail = Registration.recoveryEmail.value;
	const color = Registration.color.value;

	/*console.log(fname + " " + lname);*/

	if (username===""  || password==="" || email==="" || firstName===""|| lastName===""|| gender==="" || dateOfBirth===""|| religion==="" || presentAddress===""|| permanentAddress==="" || Phone===""|| recoveryEmail==="" || color==="") {
		document.getElementById("message").innerHTML = "Please fill up the form properly!";
		return false;
	}

	return true;
}

function isLoginValid(LoginForm) 
{
	const username = LoginForm.username.value;
	const password = LoginForm.password.value;

	/*console.log(fname + " " + lname);*/

	if (username===""  || password==="") {
		document.getElementById("message").innerHTML = "Please fill up the form properly!";
		return false;
	}

	return true;
}

function isValidFP(ForgetPassword) 
{
	const username = ForgetPassword.username.value;
	const email = ForgetPassword.email.value;

	/*console.log(fname + " " + lname);*/

	if (username===""  || email==="") {
		document.getElementById("message").innerHTML = "Please fill up the form properly!";
		return false;
	}

	return true;
}

function isValidV(RP) {
	const vDoB = RP.vDoB.value;
	const vEmail = RP.vEmail.value;
	const vColor = RP.vColor.value;
	const npassword = RP.npassword.value;
	const cpassword = RP.cpassword.value;

	if (vDoB === "" || vEmail === "" || vColor==="" || npassword==="" || cpassword ==="")
	{
		document.getElementById("message").innerHTML = "Please fill up the form properly!";
		return false;
	}

	return true;
}

function isValidATC(ATC)
{
	const medName= ATC.medName.value;
	const quantity = ATC.quantity.value;

	if(medName==="Select a value" || quantity==="")
	{
		document.getElementById("message").innerHTML="Please Select a Medicine and it's quantity to add!";
		return false;
	}

	// if (is_numeric(quantity))
	//  {
	//  	document.getElementById("message1").innerHTML="Quantity needs to be a number!";
	// 	return false;
	//  }

	return true;
}

function isValidCP(CP)
{
	const npassword = CP.npassword.value;
	const currentpassword = CP.currentpassword.value;
	const confirmpassword= CP.confirmpassword.value;

	if(npassword === "" || currentpassword==="" || confirmpassword==="")
	{
		document.getElementById("message").innerHTML = "Please fill up the form properly!";
		return false;
	}

	return true;
}

function isValidUP(UpdateProfile)
{
	const firstName = UpdateProfile.firstName.value;
	const lastName = UpdateProfile.lastName.value;
	const gender = UpdateProfile.gender.value;
	const dateOfBirth = UpdateProfile.DoB.value;
	const religion = UpdateProfile.religion.value;
	const presentAddress = UpdateProfile.presentAddress.value;
	const permanentAddress = UpdateProfile.permanentAddress.value;
	const Phone = UpdateProfile.num.value;
	const email = UpdateProfile.email.value;

	if (email==="" || firstName===""|| lastName===""|| gender==="" || dateOfBirth===""|| religion==="" || presentAddress===""|| permanentAddress==="" || Phone==="") {
		document.getElementById("message").innerHTML = "Please fill up the form properly!";
		return false;
	}

	return true;
}