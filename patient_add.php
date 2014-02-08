<?php
include('includes/header.php');

?>
<!--Start of the container here-->
<div id="headlogin">
<div><a href="logout.php"><span class="glyphicon glyphicon-close pull-right">Logout</span></a></div>
        </div>
<div id="container">
	
 <!-- bootstrap here -->
<div id="form3">
                
		<form action="add_new_patient.php" method="post">
		<div id="record"><strong>New Patients Form</strong></div>
		
		<div class="myForm" style="margin-left:200px;width:500px;border:1px ridge lightgrey">
			<center><table>
			 <td for="patient_id">Patient ID: </td>
			 <td><input type="text" class="form-control" name="patient_id" id="patient_id" readonly value="<?=rand(100,9999)?>"> </td><tr/>

			 <td for="fname">First Name: </td>
			 <td><input class="form-control" type="text" name="fname" id="fname" required></td><tr/>
			<td for="mname">Middle Initial: </td>
			<td><input class="form-control" type="text" name="mname" id="mname"></td><tr/>
			 <td for="lname">Last Name: </td>
			 <td><input class="form-control" type="text" name="lname" id="lname" required></td><tr/>
			 <td for="bdate">Birth Date: </td>
			 <td><input class="form-control" type="date" name="bdate" id="bdate" class="bmonth" required></td><tr/>
          
			 <td for="age">Age: </td>
			 <td><input class="form-control" type="text" name="age" id="age" required></td> <tr/>
			 <td for="gender">Gender: </td>
			 <td>
			 <select name="gender" class="bmonth">
				<option value="male">Male</option>
				<option value="female">Female</option>
			 </select>
			 </td><tr/>
			 <td for="address">Address: </td>
			 <td><input class="form-control" type="text" name="address" id="address" required> </td><tr/>
			 <td for="status">Status: </td>
			 <td><input class="form-control" type="text" name="status" id="status" required> </td><tr/> 
			 <td for="occupation">Occupation: </td>
			 <td><input class="form-control" type="text" name="occupation" id="occupation" required></td><tr/> 
			 <td for="religion">Religion: </td>
			 <td><input class="form-control" type="text" name="religion" id="religion" required> </td> <tr/>  
			<td class="form-group">Nationality: </td>
			<td><select name="nationality">
                <option value="—">none</option>
                <option value="Afghan">Afghan</option>
                <option value="Åland Islander">Åland Islander</option>
                <option value="Albanian">Albanian</option>
                <option value="Algerian">Algerian</option>
                <option value="American Samoan">American Samoan</option>
                <option value="Andorran">Andorran</option>
                <option value="Angolan">Angolan</option>
                <option value="Anguillan">Anguillan</option>
                <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                <option value="Argentinian">Argentinian</option>
                <option value="Armenian">Armenian</option>
                <option value="Aruban">Aruban</option>
                <option value="Australian">Australian</option>
                <option value="Austrian">Austrian</option>
                <option value="Azerbaijani">Azerbaijani</option>
                <option value="Bahamian">Bahamian</option>
                <option value="Bahraini">Bahraini</option>
                <option value="Bangladeshi">Bangladeshi</option>
                <option value="Barbadian">Barbadian</option>
                <option value="Belarusian">Belarusian</option>
                <option value="Belgian">Belgian</option>
                <option value="Belizean">Belizean</option>
                <option value="Beninese">Beninese</option>
                <option value="Bermudian">Bermudian</option>
                <option value="Bhutanese">Bhutanese</option>
                <option value="Bolivian">Bolivian</option>
                <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                <option value="BW">Botswanan</option>
                <option value="Brazilian">Brazilian</option>
                <option value="British Virgin Islander">British Virgin Islander</option>
                <option value="Bruneian">Bruneian</option>
                <option value="Bulgarian">Bulgarian</option>
                <option value="Burkinabe">Burkinabe</option>
                <option value="Mayanmarese">Mayanmarese</option>
                <option value="Burundian">Burundian</option>
                <option value="Cambodian">Cambodian</option>
                <option value="Cameroonian">Cameroonian</option>
                <option value="Canadian">Canadian</option>
                <option value="Cape Verdean">Cape Verdean</option>
                <option value="Caymanian">Caymanian</option>
                <option value="Central African">Central African</option>
                <option value="Chadian">Chadian</option>
                <option value="Chilean">Chilean</option>
                <option value="Chinese">Chinese</option>
                <option value="Christmas Islander">Christmas Islander</option>
                <option value="Cocos Islander">Cocos Islander</option>
                <option value="Colombian">Colombian</option>
                <option value="Comorian">Comorian</option>
                <option value="Congolese">Congolese</option>
                <option value="Cook Islander">Cook Islander</option>
                <option value="Costa Rican">Costa Rican</option>
                <option value="Ivorian">Ivorian</option>
                <option value="Croat">Croat</option>
                <option value="Cuban">Cuban</option>
                <option value="Curaçaoan">Curaçaoan</option>
                <option value="Cypriot">Cypriot</option>
                <option value="Czech">Czech</option>
                <option value="Congolese">Congolese</option>
                <option value="Dane">Dane</option>
                <option value="Djiboutian">Djiboutian</option>
                <option value="Dominican">Dominican</option>
                <option value="Dominican">Dominican</option>
                <option value="East Timorese">East Timorese</option>
                <option value="Ecuadorian">Ecuadorian</option>
                <option value="Egyptian">Egyptian</option>
                <option value="Salvadorian">Salvadorian</option>
                <option value="Equatorial Guinean">Equatorial Guinean</option>
                <option value="Eritrean">Eritrean</option>
                <option value="Estonian">Estonian</option>
                <option value="Ethiopian">Ethiopian</option>
                <option value="Faeroese">Faeroese</option>
                <option value="Falkland Islander">Falkland Islander</option>
                <option value="Fijian">Fijian</option>
                <option value="Finn">Finn</option>
                <option value="French">French</option>
                <option value="Guianese">Guianese</option>
                <option value="Polynesian">Polynesian</option>
                <option value="Gabonese">Gabonese</option>
                <option value="Gambian">Gambian</option>
                <option value="Georgian">Georgian</option>
                <option value="German">German</option>
                <option value="Ghanaian">Ghanaian</option>
                <option value="Gibraltarian">Gibraltarian</option>
                <option value="Greek">Greek</option>
                <option value="Greenlander">Greenlander</option>
                <option value="Grenadian">Grenadian</option>
                <option value="Guadeloupean">Guadeloupean</option>
                <option value="Guamanian">Guamanian</option>
                <option value="Guatemalan">Guatemalan</option>
                <option value="Guernsey">Guernsey</option>
                <option value="Guinean">Guinean</option>
                <option value="Guinea-Bissau national">Guinea-Bissau national</option>
                <option value="Guyanese">Guyanese</option>
                <option value="Haitian">Haitian</option>
                <option value="Holy See/Vatican">Holy See/Vatican</option>
                <option value="Honduran">Honduran</option>
                <option value="Chinese">Chinese</option>
                <option value="Hungarian">Hungarian</option>
                <option value="Icelander">Icelander</option>
                <option value="Indian">Indian</option>
                <option value="Indonesian">Indonesian</option>
                <option value="Iranian">Iranian</option>
                <option value="Iraqi">Iraqi</option>
                <option value="Irishman; Irishwoman">Irishman; Irishwoman</option>
                <option value="Manxman; Manxwoman">Manxman; Manxwoman</option>
                <option value="Israeli">Israeli</option>
                <option value="Italian">Italian</option>
                <option value="Jamaican">Jamaican</option>
                <option value="Japanese">Japanese</option>
                <option value="Jersey">Jersey</option>
                <option value="Jordanian">Jordanian</option>
                <option value="Kazakh">Kazakh</option>
                <option value="Kenyan">Kenyan</option>
                <option value="Kiribatian">Kiribatian</option>
                <option value="Kuwaiti">Kuwaiti</option>
                <option value="Kyrgyz">Kyrgyz</option>
                <option value="Lao">Lao</option>
                <option value="Latvian">Latvian</option>
                <option value="Lebanese">Lebanese</option>
                <option value="Basotho">Basotho</option>
                <option value="Liberian">Liberian</option>
                <option value="Libyan">Libyan</option>
                <option value="Liechtensteiner">Liechtensteiner</option>
                <option value="Lithuanian">Lithuanian</option>
                <option value="Luxembourger">Luxembourger</option>
                <option value="Macanese">Macanese</option>
                <option value="Malagasy">Malagasy</option>
                <option value="Malawian">Malawian</option>
                <option value="Malaysian">Malaysian</option>
                <option value="Maldivian">Maldivian</option>
                <option value="Malian">Malian</option>
                <option value="Maltese">Maltese</option>
                <option value="Marshallese">Marshallese</option>
                <option value="Martinican">Martinican</option>
                <option value="Mauritanian">Mauritanian</option>
                <option value="Mauritian">Mauritian</option>
                <option value="Mahorais">Mahorais</option>
                <option value="Mexican">Mexican</option>
                <option value="Micronesian">Micronesian</option>
                <option value="Moldovan">Moldovan</option>
                <option value="Monegasque">Monegasque</option>
                <option value="Mongolian">Mongolian</option>
                <option value="Montenegrin">Montenegrin</option>
                <option value="Montserratian">Montserratian</option>
                <option value="Moroccan">Moroccan</option>
                <option value="Mozambican">Mozambican</option>
                <option value="Namibian">Namibian</option>
                <option value="Nauruan">Nauruan</option>
                <option value="Nepalese">Nepalese</option>
                <option value="Dutchman; Dutchwoman; Netherlander">Dutchman; Dutchwoman; Netherlander</option>
                <option value="New Caledonian">New Caledonian</option>
                <option value="New Zealander">New Zealander</option>
                <option value="Nicaraguan">Nicaraguan</option>
                <option value="Nigerien">Nigerien</option>
                <option value="Nigerian">Nigerian</option>
                <option value="Niuean">Niuean</option>
                <option value="Norfolk Islander">Norfolk Islander</option>
                <option value="North Korean">North Korean</option>
                <option value="Northern Mariana Islander">Northern Mariana Islander</option>
                <option value="Norwegian">Norwegian</option>
                <option value="Omani">Omani</option>
                <option value="Pakistani">Pakistani</option>
                <option value="Palauan">Palauan</option>
                <option value="Panamanian">Panamanian</option>
                <option value="Papua New Guinean">Papua New Guinean</option>
                <option value="Paraguayan">Paraguayan</option>
                <option value="Peruvian">Peruvian</option>
                <option value="Filipino">Filipino</option>
                <option value="Pitcairner">Pitcairner</option>
                <option value="Pole">Pole</option>
                <option value="Portuguese">Portuguese</option>
                <option value="Puerto Rican">Puerto Rican</option>
                <option value="Qatari">Qatari</option>
                <option value="Reunionese">Reunionese</option>
                <option value="Romanian">Romanian</option>
                <option value="Russian">Russian</option>
                <option value="Rwandan; Rwandese">Rwandan; Rwandese</option>
                <option value="Saint Barthélemy">Saint Barthélemy</option>
                <option value="Saint Helenian">Saint Helenian</option>
                <option value="Kittsian; Nevisian">Kittsian; Nevisian</option>
                <option value="Saint Lucian">Saint Lucian</option>
                <option value="Saint Martin">Saint Martin</option>
                <option value="St-Pierrais; Miquelonnais">St-Pierrais; Miquelonnais</option>
                <option value="Vincentian">Vincentian</option>
                <option value="Samoan">Samoan</option>
                <option value="San Marinese">San Marinese</option>
                <option value="São Toméan">São Toméan</option>
                <option value="Saudi Arabian">Saudi Arabian</option>
                <option value="Senegalese">Senegalese</option>
                <option value="Serb">Serb</option>
                <option value="Seychellois">Seychellois</option>
                <option value="Sierra Leonean">Sierra Leonean</option>
                <option value="Singaporean">Singaporean</option>
                <option value="Sint Maartener">Sint Maartener</option>
                <option value="Slovak">Slovak</option>
                <option value="Slovene">Slovene</option>
                <option value="Solomon Islander">Solomon Islander</option>
                <option value="Somali">Somali</option>
                <option value="South African">South African</option>
                <option value="South Korean">South Korean</option>
                <option value="South Sudanese">South Sudanese</option>
                <option value="Spaniard">Spaniard</option>
                <option value="Sri Lankan">Sri Lankan</option>
                <option value="Sudanese">Sudanese</option>
                <option value="Surinamer">Surinamer</option>
                <option value="Svalbard, of Jan Mayen">Svalbard, of Jan Mayen</option>
                <option value="Swazi">Swazi</option>
                <option value="Swede">Swede</option>
                <option value="Swiss">Swiss</option>
                <option value="Syrian">Syrian</option>
                <option value="Taiwanese">Taiwanese</option>
                <option value="Tajik">Tajik</option>
                <option value="Tanzanian">Tanzanian</option>
                <option value="Thai">Thai</option>
                <option value="Togolese">Togolese</option>
                <option value="Tokelauan">Tokelauan</option>
                <option value="Tongan">Tongan</option>
                <option value="Trinidadian; Tobagonian">Trinidadian; Tobagonian</option>
                <option value="Tunisian">Tunisian</option>
                <option value="Turk">Turk</option>
                <option value="Turkmen">Turkmen</option>
                <option value="Turks and Caicos Islander">Turks and Caicos Islander</option>
                <option value="Tuvaluan">Tuvaluan</option>
                <option value="Ugandan">Ugandan</option>
                <option value="Ukrainian">Ukrainian</option>
                <option value="Emirian">Emirian</option>
                <option value="Briton">Briton</option>
                <option value="American;US citizen">American;US citizen</option>
                <option value="Uruguayan">Uruguayan</option>
                <option value="US Virgin Islander">US Virgin Islander</option>
                <option value="Uzbek">Uzbek</option>
                <option value="Vanuatuan">Vanuatuan</option>
                <option value="Venezuelan">Venezuelan</option>
                <option value="Vietnamese">Vietnamese</option>
                <option value="Wallisian">Wallisian</option>
                <option value="Sahrawi">Sahrawi</option>
                <option value="Yemenite">Yemenite</option>
                <option value="Zambian">Zambian</option>
                <option value="Zimbabwean">Zimbabwean</option>
            </select></td><tr/>
			 <td for="contact">Contact Number: </td>
			 <td><input class="form-control" type="text" name="contact" id="contact" class="bmonth" required></td><tr/>
			 <td for="email">Email: </td>
			 <td><input class="form-control" type="email" name="email" id="email" required></td><tr/>
			 <td for="doctor_id">Doctor ID: </td>
			 <td><input class="form-control" type="text" name="doctor_id" id="doctor_id"  ></td><tr/>
		  </td><tr/>
			 <td for="dep_ward">Department & Ward: </td>
			 <td><select name="dep_ward" class="bmonth">
				<option value="dept0">- Select Department/Ward -</option>
				<option value="pediatrics department Station 1">Pediatrics Department Station1</option>
				<option value="pediatrics department Station 2">Pediatrics Department Station2</option>
				<option value="surgery main department">Surgery Main Department</option>
				<option value="surgery dorm department">Surgery Dorm Department</option>
				<option value="lr-dr (labor and lelivery room)">LR-DR (Labor and Delivery Room)</option>
				<option value="pospartum department">Pospartum Department</option>
				<option value="lower annex medicine department">Lower Annex Medicine Department</option>
				<option value="upper annex medicine department">Upper Annex Medicine Department</option>
				<option value="operating room">Operating Room</option>
				<option value="out-patient department (OPD)">Out-Patient Department (OPD)</option>
				<option value="prenatal department">Prenatal Department</option>
				<option value="mezzanine department (private rooms)">Mezzanine Department (Private Rooms)</option>
				<option value="under five clinic">Under Five Clinic</option>
			 </select>
		  </td><tr/>
			 <td for="c_pref">Charging Preference: </td>
			<td><select name="c_pref" class="bmonth">
				<option value="dept0">- Select preference -</option>
				<option value="philhealth">Philhealth</option>
				<option value="charity">Charity</option>
				<option value="payward">Payward</option>
			 </select>
		  </td><tr/>
			 <td for="adm_dx">Adm Dx: </td>
			 <td><input class="form-control" type="text" name="adm_dx" id="adm_dx" required>
             </td></tr> 
		  
                   <td><input type="submit" class="btn btn-primary pull-right" value="SAVE RECORD" name="submit"></td>
			</table>
		</div>

		</form>
</div>
		

		<?php
		if(isset($_GET['error']))
		{
			if($_GET['error']=='0')
			{
				echo"<div style='text-align:center;width:150px;margin-left:570px;background-color:lightblue'>The record Exist</div>";
			}
			if($_GET['error']=='1')
			{
				echo"<div style='text-align:center;width:150px;margin-left:570px;background-color:lightgreen'>The record is saved</div>";
			}
			if($_GET['error']=='2')
			{
				echo"<div style='text-align:center;width:150px;margin-left:570px;background-color:orange'>Cannot save the record</div>";
			}
		}
		?>
		
</div>
<!--Footer begins here-->
<?php
include('includes/footer.php');
?>






