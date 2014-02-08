
              
              <fieldset class="myForm" style="margin:0 auto;">
<legend class="text-Regular_Grey">
	<strong>New Customer Form</strong>

           <div id="row2">
                                 <div id="left">
                                    
                    
                                </div>
                                <div id="mid">
                                    <!-- BEGIN CENTER OF PAGE TEXT -->
                                    
                                <h1> Create Account</h1>
                      
                        <p>
                            Please fill out the form completely. <span class="requiredFieldMark">*</span> Required Field</p>
                        <div class="validation-summary-valid" data-valmsg-summary="true"><ul><li style="display:none"></li>
                    </ul></div>
                        <form action="/Account/Register" method="post">
                        <table id="CreateMemeber">
                            <tbody><tr>
                                <td>
                                    <span class="requiredFieldMark">*</span> <b>First Name</b>
                                    <br>
                                    <input id="firstName" name="firstName" size="15" type="text" value="">
                                    <span class="field-validation-valid" data-valmsg-for="firstName" data-valmsg-replace="false">*</span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="requiredFieldMark">*</span> <b>Last Name</b><br>
                                    <input id="lastName" name="lastName" size="15" type="text" value="">
                                    <span class="field-validation-valid" data-valmsg-for="lastName" data-valmsg-replace="false">*</span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="requiredFieldMark">*</span> <b>Company</b><br>
                                    <input id="Company" name="Company" size="35" type="text" value="">
                                    <span class="field-validation-valid" data-valmsg-for="Company" data-valmsg-replace="false">*</span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="requiredFieldMark">*</span> <b>Email</b><br>
                                    <input id="Email" name="Email" size="35" type="text" value="">
                                    <span class="field-validation-valid" data-valmsg-for="Email" data-valmsg-replace="false">*</span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="requiredFieldMark">*</span> <b>Address</b><br>
                                    <input id="Add" name="Add" size="35" type="text" value="">
                                    <span class="field-validation-valid" data-valmsg-for="Add1" data-valmsg-replace="false">*</span>
                                </td>
                            </tr>
                           
                            <tr>
                                <td>
                                    <span class="requiredFieldMark">*</span> <b>City</b><br>
                                    <input id="City" name="City" size="35" type="text" value="">
                                    <span class="field-validation-valid" data-valmsg-for="City" data-valmsg-replace="false">*</span>
                                </td>
                            </tr>        
                            <tr>
                                <td>
                                    <span class="requiredFieldMark">*</span> <b>State</b><br>
                                    <select name="State" id="State">
                                        <option value="AK">AK</option>
                                        <option value="AL">AL</option>
                                        <option value="AR">AR</option>
                                        <option value="AZ">AZ</option>
                                        <option value="CA">CA</option>
                                        <option value="CO">CO</option>
                                        <option value="CT">CT</option>
                                        <option value="DE">DE</option>
                                        <option value="FL">FL</option>
                                        <option value="GA">GA</option>
                                        <option value="HI">HI</option>
                                        <option value="IA">IA</option>
                                        <option value="ID">ID</option>
                                        <option value="IL">IL</option>
                                        <option value="IN">IN</option>
                                        <option value="KS">KS</option>
                                        <option value="KY">KY</option>
                                        <option value="LA">LA</option>
                                        <option value="MA">MA</option>
                                        <option value="MD">MD</option>
                                        <option value="ME">ME</option>
                                        <option value="MI">MI</option>
                                        <option value="MN">MN</option>
                                        <option value="MO">MO</option>
                                        <option value="MS">MS</option>
                                        <option value="NT">NT</option>
                                        <option value="NC">NC</option>
                                        <option value="ND">ND</option>
                                        <option value="NE">NE</option>
                                        <option value="NH">NH</option>
                                        <option value="NJ">NJ</option>
                                        <option value="NM">NM</option>
                                        <option value="NV">NV</option>
                                        <option value="NY">NY</option>
                                        <option value="OH">OH</option>
                                        <option value="OK">OK</option>
                                        <option value="OR">OR</option>
                                        <option value="PA">PA</option>
                                        <option value="RI">RI</option>
                                        <option value="SC">SC</option>
                                        <option value="SD">SD</option>
                                        <option value="TN">TN</option>
                                        <option value="TX">TX</option>
                                        <option value="UT">UT</option>
                                        <option value="VA">VA</option>
                                        <option value="VT">VT</option>
                                        <option value="WA" selected="">WA</option>
                                        <option value="WI">WI</option>
                                        <option value="WV">WV</option>
                                        <option value="WY">WY</option>
                                    </select>&nbsp;
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="requiredFieldMark">*</span> <b>Zip</b><br>
                                    <input id="Zip" name="Zip" size="15" type="text" value="">
                                    <span class="field-validation-valid" data-valmsg-for="Zip" data-valmsg-replace="false">*</span>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <span class="requiredFieldMark">*</span> <b>Phone Number</b><br>
                                    <input id="Tel" name="Tel" type="text" value="">
                                    <span class="field-validation-valid" data-valmsg-for="Tel" data-valmsg-replace="false">*</span>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <b>Fax Number</b><br>
                                    <input id="Fax" name="Fax" type="text" value="">
                                    <span class="field-validation-valid" data-valmsg-for="Fax" data-valmsg-replace="false">*</span>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <span class="requiredFieldMark">*</span> <b>Password</b><br>
                                    <input id="PWD" name="PWD" type="password">
                                    <span class="field-validation-valid" data-valmsg-for="password" data-valmsg-replace="false">*</span>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <span class="requiredFieldMark">*</span> <b>Confirm password</b><br>
                                    <input id="confirmPassword" name="confirmPassword" type="password">
                                    <span class="field-validation-valid" data-valmsg-for="confirmPassword" data-valmsg-replace="false">*</span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="submit" value="Next">
                                </td>
                            </tr>
                        </tbody></table>
                        </form></legend></fieldset>
                                    <!-- END CENTER OF PAGE TEXT -->
                                </div>
                             
                    
                                </div>
                            </div>
                                  
               
                </div>
        </div>
        
      <div id="footer"> Copyright 2013-2014 by ChumbaMike Record Flow. All Rights Reserved.
  </div>   
</body>
</html>
