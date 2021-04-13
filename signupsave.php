<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Create Account</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="stylesheet" type="text/css" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
	<link rel="stylesheet" type="text/css" href="css/signup.css">
	<script type="text/javascript" src="js/cities.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script>
        
	function check() {
        var firstname  = document.signup.firstname;
        var gender = document.signup.gender;
        var lastname  = document.signup.lastname;
		var dateofbirth = document.signup.dateofbirth ;
		var code = document.signup.code ;
		var phone = document.signup.phone ;
		var email = document.signup.email;
		var password = document.signup.password;
        var country = document.signup.country;		
		var street = document.signup.street ;
		var address = document.signup.address ;
		var zip = document.signup.zip ;
		var stt = document.signup.stt ;
		var city = document.signup.city;

	if (firstname.value == "" && lastname.value == "" && gender.value == "" && dateofbirth.value ==""  && code.value ==""  && phone.value ==""  && email.value ==""  && password.value =="" 
		&& country.value =="" 
		&& street.value =="" 
		&& address.value =="" 
		&& zip.value ==""
		&& stt.value =="" && city.value =="" 
		){
			alert("fields are required");
			firstname.style.border = "3px solid rgb(72, 53, 212)";
			lastname.style.border = "3px solid rgb(72, 53, 212)";
			dateofbirth.style.border = "3px solid rgb(72, 53, 212)";
			gender.style.border = "3px solid rgb(72, 53, 212)";
			phone.style.border = "3px solid rgb(72, 53, 212)";
			code.style.border = "3px solid rgb(72, 53, 212)";
			password.style.border = "3px solid rgb(72, 53, 212)";
			email.style.border = "3px solid rgb(72, 53, 212)";
			zip.style.border = "3px solid white";
			stt.style.border = "3px solid white";
			address.style.border = "3px solid white";
			street.style.border = "3px solid white";
			city.style.border = "3px solid white";
			country.style.border = "3px solid white";
			return false;

	}
		if (firstname.value =="") {
                alert("First name is required");
                firstname.style.border = "3px solid red";
                return false;
        }
		if (lastname.value =="") {
                alert("Last name is required");
                lastname.style.border = "3px solid red";
                return false;
        }
		if (gender.value =="") {
                alert("Gender is required");
                gender.style.border = "3px solid red";
                return false;
        }
		if (dateofbirth.value =="") {
                alert("D.O.B is required");
                dateofbirth.style.border = "3px solid red";
                return false;
        }
		if (code.value =="") {
                alert("Country code is required");
                code.style.border = "3px solid red";
                return false;
        }
		if (code.value.length !=2) {
			alert("wrong country code.\ncountry code format '+XX'");
			code.style.border = "3px solid red"; 
                return false;
		}
		if (phone.value =="") {
                alert("Contact is required");
                phone.style.border = "3px solid red";
                return false;
        }
		if (email.value =="") {
                alert("E-mail is required");
                email.style.border = "3px solid red";
                return false;
        }
		if (password.value =="") {
                alert("Password is required");
                password.style.border = "3px solid red";
                return false;
        }
		if (password.value.length !=6) {
                alert("Password length is of 6 digits");
                password.style.border = "3px solid red";
                return false;
        }
		if (street.value =="") {
                alert("Street is required");
                street.style.border = "3px solid red";
                return false;
        }
		if (address.value =="") {
                alert("Address is required");
                address.style.border = "3px solid red";
                return false;
        }
		if (zip.value =="") {
                alert("zip is required");
                zip.style.border = "3px solid red";
                return false;
        }
		if (zip.value.length !=6) {  
                alert("zip length too small or large");
                zip.style.border = "3px solid red";
                return false;
        }
		if (stt.value =="") {
                alert("Street is required");
                stt.style.border = "3px solid red";
                return false;
        }
		if (phone.value.length !=10) {
			alert("Phone number length too small or large");
                phone.style.border = "3px solid red"; 
                return false;
		}
		else{
			alert("form submitted");			
		}

	} 
</script>
</head>
<body class="form-v10">
	<div class="page-content">
		<div class="form-v10-content">
			<form  name="signup" method="POST" class="form-detail" action="signupsave.php" >
				<div class="form-left">
					<h2>Applicant Infomation</h2>
					<div class="form-group">
						<div class="form-row form-row-1">
							<input type="text" name="firstname" class="input-text" placeholder="First Name" >
						</div>
						<div class="form-row form-row-2">
							<input type="text" name="lastname" class="input-text" placeholder="Last Name" >
						</div>
					</div>
					<div class="form-group">
						<div class="form-row form-row-1">
							<select name="gender">
							    <option value="">Gender</option>
							    <option value="male">Male</option>
							    <option value="trainee">Female</option>
							    <option value="colleague">Other</option>
							</select>
							<span class="select-btn">
								<i class="fa fa-angle-down" aria-hidden="true"></i>
						  </span>
						</div>
						<div class="form-row form-row-2">
							<input type="date" name="dateofbirth" class="input-text" placeholder="Date of Birth" >
						</div>
					</div>
					<h2>Contact Infomation</h2>
					<div class="form-group">
						<div class="form-row form-row-1">
							<input type="text" name="code" placeholder="Code +"  >
						</div>
						<div class="form-row form-row-2">
							<input type="text" name="phone" placeholder="Phone Number" >
						</div>
					</div>
                    <div class="form-group">
                        <div class="form-row form-row-1">
                            <input type="email" name="email" class="input-text" placeholder="Your Email">
                        </div>
                        <div class="form-row form-row-2">
							<input type="password" name="password" placeholder="Enter Password" >
						</div>
                    </div>				
				</div>
				<div class="form-right">
					<h2>Residential Details</h2>
					<div class="form-row">
						<input type="text" name="street" placeholder="Street" >
					</div>
					<div class="form-row">
						<input type="text" name="address" placeholder="Address line 1"  >
					</div>
					<div class="form-group">
						<div class="form-row form-row-1">
							<input type="text" name="zip" placeholder="Zip Code"  >
						</div>
						<div class="form-row form-row-2">
							<select onchange="print_city('state', this.selectedIndex);" id="sts" name ="stt" class="form-control" placeholder="State"  ></select>
							<span class="select-btn">
							  	<i class="fa fa-angle-down" aria-hidden="true"></i>
							</span>
						</div>
					</div>
					<div class="form-group">
						<div class="form-row form-row-1">
							<select id ="state" name="city" class="form-control"></select>
						<script language="javascript">print_state("sts") ;</script>
						<span class="select-btn">
							<i class="fa fa-angle-down" aria-hidden="true"></i>
					  </span>
					</div>
						<div class="form-row form-row-2">
							<span class="select-btn">
								<i class="fa fa-angle-down" aria-hidden="true"></i>
						  </span>
							<select name="country" id="count1">
								<option value="">Country</option>
								<option value="Afghanistan">Afghanistan</option>
								<option value="Åland Islands">Åland Islands</option>
								<option value="Albania">Albania</option>
								<option value="Algeria">Algeria</option>
								<option value="American Samoa">American Samoa</option>
								<option value="Andorra">Andorra</option>
								<option value="Angola">Angola</option>
								<option value="Anguilla">Anguilla</option>
								<option value="Antarctica">Antarctica</option>
								<option value="Antigua and Barbuda">Antigua and Barbuda</option>
								<option value="Argentina">Argentina</option>
								<option value="Armenia">Armenia</option>
								<option value="Aruba">Aruba</option>
								<option value="Australia">Australia</option>
								<option value="Austria">Austria</option>
								<option value="Azerbaijan">Azerbaijan</option>
								<option value="Bahamas">Bahamas</option>
								<option value="Bahrain">Bahrain</option>
								<option value="Bangladesh">Bangladesh</option>
								<option value="Barbados">Barbados</option>
								<option value="Belarus">Belarus</option>
								<option value="Belgium">Belgium</option>
								<option value="Belize">Belize</option>
								<option value="Benin">Benin</option>
								<option value="Bermuda">Bermuda</option>
								<option value="Bhutan">Bhutan</option>
								<option value="Bolivia">Bolivia</option>
								<option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
								<option value="Botswana">Botswana</option>
								<option value="Bouvet Island">Bouvet Island</option>
								<option value="Brazil">Brazil</option>
								<option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
								<option value="Brunei Darussalam">Brunei Darussalam</option>
								<option value="Bulgaria">Bulgaria</option>
								<option value="Burkina Faso">Burkina Faso</option>
								<option value="Burundi">Burundi</option>
								<option value="Cambodia">Cambodia</option>
								<option value="Cameroon">Cameroon</option>
								<option value="Canada">Canada</option>
								<option value="Cape Verde">Cape Verde</option>
								<option value="Cayman Islands">Cayman Islands</option>
								<option value="Central African Republic">Central African Republic</option>
								<option value="Chad">Chad</option>
								<option value="Chile">Chile</option>
								<option value="China">China</option>
								<option value="Christmas Island">Christmas Island</option>
								<option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
								<option value="Colombia">Colombia</option>
								<option value="Comoros">Comoros</option>
								<option value="Congo">Congo</option>
								<option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option>
								<option value="Cook Islands">Cook Islands</option>
								<option value="Costa Rica">Costa Rica</option>
								<option value="Cote D'ivoire">Cote D'ivoire</option>
								<option value="Croatia">Croatia</option>
								<option value="Cuba">Cuba</option>
								<option value="Cyprus">Cyprus</option>
								<option value="Czech Republic">Czech Republic</option>
								<option value="Denmark">Denmark</option>
								<option value="Djibouti">Djibouti</option>
								<option value="Dominica">Dominica</option>
								<option value="Dominican Republic">Dominican Republic</option>
								<option value="Ecuador">Ecuador</option>
								<option value="Egypt">Egypt</option>
								<option value="El Salvador">El Salvador</option>
								<option value="Equatorial Guinea">Equatorial Guinea</option>
								<option value="Eritrea">Eritrea</option>
								<option value="Estonia">Estonia</option>
								<option value="Ethiopia">Ethiopia</option>
								<option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
								<option value="Faroe Islands">Faroe Islands</option>
								<option value="Fiji">Fiji</option>
								<option value="Finland">Finland</option>
								<option value="France">France</option>
								<option value="French Guiana">French Guiana</option>
								<option value="French Polynesia">French Polynesia</option>
								<option value="French Southern Territories">French Southern Territories</option>
								<option value="Gabon">Gabon</option>
								<option value="Gambia">Gambia</option>
								<option value="Georgia">Georgia</option>
								<option value="Germany">Germany</option>
								<option value="Ghana">Ghana</option>
								<option value="Gibraltar">Gibraltar</option>
								<option value="Greece">Greece</option>
								<option value="Greenland">Greenland</option>
								<option value="Grenada">Grenada</option>
								<option value="Guadeloupe">Guadeloupe</option>
								<option value="Guam">Guam</option>
								<option value="Guatemala">Guatemala</option>
								<option value="Guernsey">Guernsey</option>
								<option value="Guinea">Guinea</option>
								<option value="Guinea-bissau">Guinea-bissau</option>
								<option value="Guyana">Guyana</option>
								<option value="Haiti">Haiti</option>
								<option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
								<option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
								<option value="Honduras">Honduras</option>
								<option value="Hong Kong">Hong Kong</option>
								<option value="Hungary">Hungary</option>
								<option value="Iceland">Iceland</option>
								<option value="India">India</option>
								<option value="Indonesia">Indonesia</option>
								<option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
								<option value="Iraq">Iraq</option>
								<option value="Ireland">Ireland</option>
								<option value="Isle of Man">Isle of Man</option>
								<option value="Israel">Israel</option>
								<option value="Italy">Italy</option>
								<option value="Jamaica">Jamaica</option>
								<option value="Japan">Japan</option>
								<option value="Jersey">Jersey</option>
								<option value="Jordan">Jordan</option>
								<option value="Kazakhstan">Kazakhstan</option>
								<option value="Kenya">Kenya</option>
								<option value="Kiribati">Kiribati</option>
								<option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
								<option value="Korea, Republic of">Korea, Republic of</option>
								<option value="Kuwait">Kuwait</option>
								<option value="Kyrgyzstan">Kyrgyzstan</option>
								<option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
								<option value="Latvia">Latvia</option>
								<option value="Lebanon">Lebanon</option>
								<option value="Lesotho">Lesotho</option>
								<option value="Liberia">Liberia</option>
								<option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
								<option value="Liechtenstein">Liechtenstein</option>
								<option value="Lithuania">Lithuania</option>
								<option value="Luxembourg">Luxembourg</option>
								<option value="Macao">Macao</option>
								<option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option>
								<option value="Madagascar">Madagascar</option>
								<option value="Malawi">Malawi</option>
								<option value="Malaysia">Malaysia</option>
								<option value="Maldives">Maldives</option>
								<option value="Mali">Mali</option>
								<option value="Malta">Malta</option>
								<option value="Marshall Islands">Marshall Islands</option>
								<option value="Martinique">Martinique</option>
								<option value="Mauritania">Mauritania</option>
								<option value="Mauritius">Mauritius</option>
								<option value="Mayotte">Mayotte</option>
								<option value="Mexico">Mexico</option>
								<option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
								<option value="Moldova, Republic of">Moldova, Republic of</option>
								<option value="Monaco">Monaco</option>
								<option value="Mongolia">Mongolia</option>
								<option value="Montenegro">Montenegro</option>
								<option value="Montserrat">Montserrat</option>
								<option value="Morocco">Morocco</option>
								<option value="Mozambique">Mozambique</option>
								<option value="Myanmar">Myanmar</option>
								<option value="Namibia">Namibia</option>
								<option value="Nauru">Nauru</option>
								<option value="Nepal">Nepal</option>
								<option value="Netherlands">Netherlands</option>
								<option value="Netherlands Antilles">Netherlands Antilles</option>
								<option value="New Caledonia">New Caledonia</option>
								<option value="New Zealand">New Zealand</option>
								<option value="Nicaragua">Nicaragua</option>
								<option value="Niger">Niger</option>
								<option value="Nigeria">Nigeria</option>
								<option value="Niue">Niue</option>
								<option value="Norfolk Island">Norfolk Island</option>
								<option value="Northern Mariana Islands">Northern Mariana Islands</option>
								<option value="Norway">Norway</option>
								<option value="Oman">Oman</option>
								<option value="Pakistan">Pakistan</option>
								<option value="Palau">Palau</option>
								<option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
								<option value="Panama">Panama</option>
								<option value="Papua New Guinea">Papua New Guinea</option>
								<option value="Paraguay">Paraguay</option>
								<option value="Peru">Peru</option>
								<option value="Philippines">Philippines</option>
								<option value="Pitcairn">Pitcairn</option>
								<option value="Poland">Poland</option>
								<option value="Portugal">Portugal</option>
								<option value="Puerto Rico">Puerto Rico</option>
								<option value="Qatar">Qatar</option>
								<option value="Reunion">Reunion</option>
								<option value="Romania">Romania</option>
								<option value="Russian Federation">Russian Federation</option>
								<option value="Rwanda">Rwanda</option>
								<option value="Saint Helena">Saint Helena</option>
								<option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
								<option value="Saint Lucia">Saint Lucia</option>
								<option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
								<option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option>
								<option value="Samoa">Samoa</option>
								<option value="San Marino">San Marino</option>
								<option value="Sao Tome and Principe">Sao Tome and Principe</option>
								<option value="Saudi Arabia">Saudi Arabia</option>
								<option value="Senegal">Senegal</option>
								<option value="Serbia">Serbia</option>
								<option value="Seychelles">Seychelles</option>
								<option value="Sierra Leone">Sierra Leone</option>
								<option value="Singapore">Singapore</option>
								<option value="Slovakia">Slovakia</option>
								<option value="Slovenia">Slovenia</option>
								<option value="Solomon Islands">Solomon Islands</option>
								<option value="Somalia">Somalia</option>
								<option value="South Africa">South Africa</option>
								<option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option>
								<option value="Spain">Spain</option>
								<option value="Sri Lanka">Sri Lanka</option>
								<option value="Sudan">Sudan</option>
								<option value="Suriname">Suriname</option>
								<option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
								<option value="Swaziland">Swaziland</option>
								<option value="Sweden">Sweden</option>
								<option value="Switzerland">Switzerland</option>
								<option value="Syrian Arab Republic">Syrian Arab Republic</option>
								<option value="Taiwan, Province of China">Taiwan, Province of China</option>
								<option value="Tajikistan">Tajikistan</option>
								<option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
								<option value="Thailand">Thailand</option>
								<option value="Timor-leste">Timor-leste</option>
								<option value="Togo">Togo</option>
								<option value="Tokelau">Tokelau</option>
								<option value="Tonga">Tonga</option>
								<option value="Trinidad and Tobago">Trinidad and Tobago</option>
								<option value="Tunisia">Tunisia</option>
								<option value="Turkey">Turkey</option>
								<option value="Turkmenistan">Turkmenistan</option>
								<option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
								<option value="Tuvalu">Tuvalu</option>
								<option value="Uganda">Uganda</option>
								<option value="Ukraine">Ukraine</option>
								<option value="United Arab Emirates">United Arab Emirates</option>
								<option value="United Kingdom">United Kingdom</option>
								<option value="United States">United States</option>
								<option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
								<option value="Uruguay">Uruguay</option>
								<option value="Uzbekistan">Uzbekistan</option>
								<option value="Vanuatu">Vanuatu</option>
								<option value="Venezuela">Venezuela</option>
								<option value="Viet Nam">Viet Nam</option>
								<option value="Virgin Islands, British">Virgin Islands, British</option>
								<option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
								<option value="Wallis and Futuna">Wallis and Futuna</option>
								<option value="Western Sahara">Western Sahara</option>
								<option value="Yemen">Yemen</option>
								<option value="Zambia">Zambia</option>
								<option value="Zimbabwe">Zimbabwe</option>
							</select>
						</div>
					    </div>

					<div class="form-checkbox">
						<label class="container"><p>I do accept the <a href="#" class="text">Terms and Conditions</a> of your site.</p>
						  	<input type="checkbox" name="checkbox">
						  	<span class="checkmark"></span>
						</label>
					</div>
					<div class="form-row-last">
						<input type="submit" class="register" value="Register" onclick="return check()">
					</div>
				</div>
			</form>
		</div>
	</div>
</body>
<?php 
session_start();
$firstname  = test_input($_POST['firstname']);
$gender =test_input($_POST['gender']);
$lastname  = test_input($_POST['lastname']);
$dateofbirth = test_input($_POST['dateofbirth']) ;
$code = test_input($_POST['code']);
$phone = test_input($_POST['phone']) ;
$email = test_input($_POST['email']);
$password = test_input($_POST['password']);
$country = test_input($_POST['country']);		
$street = test_input($_POST['street']) ;
$address = test_input($_POST['address']) ;
$zip = test_input($_POST['zip']) ;
$stt = test_input($_POST['stt']) ;
$city = test_input($_POST['city']) ;

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
      }

    $host = "localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "php";
                // Create connection
$connection = new mysqli ($host, $dbusername, $dbpassword, $dbname);
if (mysqli_connect_error()){
    die('Connect Error ('. mysqli_connect_errno() .') '. mysqli_connect_error());
}
else{
    $conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
    if (mysqli_connect_error()){
        die('Connect Error ('. mysqli_connect_errno() .') '
        . mysqli_connect_error());
    }
    else{
        $query2 = mysqli_query($conn, "SELECT * FROM `signup` WHERE `firstname` = '$firstname'");
        $query3 = mysqli_query($conn, "SELECT * FROM `signup` WHERE `password` = '$password'");
        $query1 = mysqli_query($conn, "SELECT * FROM `signup` WHERE `email` = '$email'");
        if ((mysqli_num_rows($query1) >0) || (mysqli_num_rows($query2) >0) || (mysqli_num_rows($query3) >0)) {
            if(mysqli_num_rows($query1) >0) {
                echo "This email is already being used<br>";     
            }
            elseif(mysqli_num_rows($query2) >0) {
                echo "firstname is already being used";
            }
            elseif(mysqli_num_rows($query3) >0) {
                echo "password is already being used";
            }
			else{
				echo "<script>alert('Enter details');</script>";
			}
        }                      
        else{
            $sql = "INSERT INTO signup (firstname,lastname,password,gender,email,contact,country,zip,code,dateofbirth,street,address,stt,city)
            values ('$firstname','$lastname','$password','$gender','$email','$phone','$country','$zip','$code','$dateofbirth','$street','$address','$stt','$city')";
            if ($conn->query($sql)){
                echo "New record is inserted sucessfully";
            }
            else{
                echo "Error: ". $sql ."
                ". $conn->error;
            }
            $conn->close();
        }
    }  
}
                
?>
</html>