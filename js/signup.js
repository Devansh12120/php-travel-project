
	function check() {
		var  Afn = document.signup.Afn ;
		 var  Aln = document.signup.Aln ;
		var  dateofbirth = document.signup.dateofbirth ;
		var  str= document.signup.str ;
		var  add= document.signup.add ;
		var  zipcode= document.signup.zipcode ;
		var  sts= document.signup.sts ;
		var  state= document.signup.state ;
		var  code= document.signup.code ;
		var  phone= document.signup.phone ;
		var  your_email= document.signup.your_email ;
		var  gender = document.signup.gender;
		var  count1 = document.signup.count1;
		var patt = /[a-zA-Z]{3,12}/;
		var patt_code = /[+][0-9]{2}/;
		var patt_code = /[0-9]{2}/;
		var patt_zip = /[0-9]{6}/;
		if (Afn.value == "" && Aln.value=="" && dateofbirth.value=="" && ffn.value=="" && fln.value==""&& mln.value =="" && mfn.value==""&& mmob.value=="" && memail.value=="" && fmail.value=="" && fmob.value==""  && str.value=="" && add.value=="" && zipcode.value=="" && your_email.value=="" && state.value==""&& phone.value=="" && code.value==""  && count1.value==""){
			alert("fields are required");
			Afn.style.border = "3px solid rgb(72, 53, 212)";
			Aln.style.border = "3px solid rgb(72, 53, 212)";
			dateofbirth.style.border = "3px solid rgb(72, 53, 212)";
			mfn.style.border = "3px solid rgb(72, 53, 212)";
			mln.style.border = "3px solid rgb(72, 53, 212)";
			ffn.style.border = "3px solid rgb(72, 53, 212)";
			fln.style.border = "3px solid rgb(72, 53, 212)";
			fmail.style.border = "3px solid rgb(72, 53, 212)";
			fmob.style.border = "3px solid rgb(72, 53, 212)";
			mmob.style.border = "3px solid rgb(72, 53, 212)";
			memail.style.border = "3px solid rgb(72, 53, 212)";
			gender.style.border = "3px solid rgb(72, 53, 212)";
			zipcode.style.border = "3px solid white";
			str.style.border = "3px solid white";
			add.style.border = "3px solid white";
			your_email.style.border = "3px solid white";
			state.style.border = "3px solid white";
			sts.style.border = "3px solid white";
			phone.style.border = "3px solid white";
			code.style.border = "3px solid white";
			count1.style.border = "3px solid white";
			return false;
        }
        if ( str.value=="" && add.value=="" && zipcode.value=="" && your_email.value=="" && state.value==""&& phone.value=="" && code.value==""  && count1.value=="") {
            zipcode.style.border = "3px solid red";
			str.style.border = "3px solid red";
			add.style.border = "3px solid red";
			your_email.style.border = "3px solid red";
			state.style.border = "3px solid red";
			sts.style.border = "3px solid red";
			phone.style.border = "3px solid red";
			code.style.border = "3px solid red";
            count1.style.border = "3px solid red";
            alert("fill the address details")
			return false;
        }
        //matching applicant name
        if (Afn.value =="" || !patt.test(Afn)) {
            if(Afn.value==""){
                alert("User First name required");
                Afn.style.border = "3px solid red";
                return false;
            }
            else{
                alert("Incorrect format \n Sample format {John}");
                Afn.style.border = "3px solid red"; 
                return false;
            }
        }
		if (Aln.value =="" || !patt.test(Aln)) {
            if(Aln.value==""){
                alert("User Last name required");
                Aln.style.border = "3px solid red";
                return false;
            }
            else{
                alert("Incorrect format \n Sample format {Boscow}");
                Aln.style.border = "3px solid red"; 
                return false;
            }
        }
        
		
        //validating user mail
		if (your_email.value =="") {
                alert("User mail is required");
                your_email.style.border = "3px solid red";
                return false;
        }

        // validating user contact 
		if (phone.value =="" || phone.value.length!=10) {
            if(phone.value==""){
                alert("User Phone number erquired");
                phone.style.border = "3px solid red";
                return false;
            }
            else{
                alert("Phone number length too small or large");
                phone.style.border = "3px solid red"; 
                return false;
            }
        }

		// validating Country code 
		if (code.value =="") {
                alert("Country code required");
                code.style.border = "3px solid red";
                return false;
        }
        // validating Country code 
		if (zipcode.value =="") {
                alert("Zip code required");
                zipcode.style.border = "3px solid red";
                return false;
        }
		else{
			alert("Registeration successful! \n continue to booking") ;
			return true;
		}
	} 