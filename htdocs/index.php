<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <?php include 'includes/header.php' ?>
    </head>
    <body class='bg_med'>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        
        <!--======================================================
                                FIXED HEADER
        =========================================================-->
        <div id='header' class='bg_dark'>
            <div id='logo-holder' class='clearfix'>
                <div class='left bar bg_blue'></div>
                <div class='left bar bg_pink'></div>
                <div class='left bar bg_orange'></div>
                <div class='left bar bg_yellow'></div>
                <div class='left bar bg_green'></div>
                <img src='img/logo.png' alt='fishgate logo' />
            </div>
        </div>
        
        <!--======================================================
                                BODY
        =========================================================-->
        <form method='post' action=''>
        <div id='contentwrap' class='clearfix'>
            <!-- ------------------------ FORM MENU ---------- -->
            <div class='left menu-div'>
                <h1 id='menu-req-doc' class='active_blue'>Required Documents</h1><br />
                <h1 id='menu-contact' class='active_pink'>Contact Information</h1><br />
                <h1 id='menu-payment' class='active_orange'>Payment Details</h1><br />
                <h1 id='menu-tc' class='active_yellow'>Terms &amp; Conditions</h1>
            </div>
            <!-- ------------------------ FORM CONTENT ---------- -->
                <div class='left form-div'>
                    <!-- /////////////////////// req docs \\\\\\\\\\\ -->
                    <p class='notice dark'><span class='notice-arrow'></span>Please send documents per email to: accounts@fishgate.co.za. The original signed registration form and all required supporting documentation must also be sent to:<br /> <br />Fishgate Advertising<br />5 Falcon Crest,<br />Tygerfalls,<br />Bellville,<br />Cape Town,<br />7550</p>
                    
                    <h2 id='req-doc' class='white'>Required Documents</h2>
                    <br />
                    <label for='tax-cert'>Original valid Tax Clearance Certificate:</label>
                    <br />
                    <span class='border-left-blue'>
                        <input type='file' name='tax-cert' id='tax-cert' />
                    </span>
                    <br />
                    <label for='bee-cert'>Copy of valid BEE Verification Certificate:</label>
                    <br />
                    <span class='border-left-blue'>
                        <input type='file' name='bee-cert' id='bee-cert' />
                    </span>
                    <!-- /////////////////////// Contact Info \\\\\\\\\\\ -->
                    <div class='divider'></div>
                    <h2 id='contact' class='white'>Contact Info</h2>
                    <br />
                    <label for='trade-name'>Trading Name</label>
                    <span class='border-left-pink'>
                        <input type='text' name='trade-name' id='trade-name' />
                    </span>
                    <br />
                    <label for='reg-name'>Registered Name</label>
                    <span class='border-left-pink'>
                        <input type='text' name='reg-name' id='reg-name' />
                    </span>
                    <br />
                    <label for='reg-num'>Trading Name</label>
                    <span class='border-left-pink'>
                        <input type='number' name='reg-num' id='reg-num' />
                    </span>
                    <br />
                    <label>Company Structure</label>
                    <span class='border-left-pink'>
                        <input type='checkbox' id='structure-company' /> Company
                    </span>
                    <br />
                    <span class='border-left-pink'>
                        <input type='checkbox' id='structure-closed-corp' /> Closed Corp
                    </span>
                    <br />
                    <span class='border-left-pink'>
                        <input type='checkbox' id='sole-propprietor' /> Sole Proprietor
                    </span>
                    <br />
                    <span class='border-left-pink'>
                        <input type='checkbox' id='structure-partner' /> Partnership
                    </span>
                    <br />
                    <label for='vat-num'>VAT Registration Number</label>
                    <span class='border-left-pink'>
                        <input type='number' name='vat-num' id='vat-num' />
                    </span>
                    <br />
                    <label for='country'>Country</label>
                    <span class='border-left-pink'>
                        <select id='country'>
                            <option value="">Country...</option>
                            <option value="Afganistan">Afghanistan</option>
                            <option value="Albania">Albania</option>
                            <option value="Algeria">Algeria</option>
                            <option value="American Samoa">American Samoa</option>
                            <option value="Andorra">Andorra</option>
                            <option value="Angola">Angola</option>
                            <option value="Anguilla">Anguilla</option>
                            <option value="Antigua &amp; Barbuda">Antigua &amp; Barbuda</option>
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
                            <option value="Bonaire">Bonaire</option>
                            <option value="Bosnia &amp; Herzegovina">Bosnia &amp; Herzegovina</option>
                            <option value="Botswana">Botswana</option>
                            <option value="Brazil">Brazil</option>
                            <option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
                            <option value="Brunei">Brunei</option>
                            <option value="Bulgaria">Bulgaria</option>
                            <option value="Burkina Faso">Burkina Faso</option>
                            <option value="Burundi">Burundi</option>
                            <option value="Cambodia">Cambodia</option>
                            <option value="Cameroon">Cameroon</option>
                            <option value="Canada">Canada</option>
                            <option value="Canary Islands">Canary Islands</option>
                            <option value="Cape Verde">Cape Verde</option>
                            <option value="Cayman Islands">Cayman Islands</option>
                            <option value="Central African Republic">Central African Republic</option>
                            <option value="Chad">Chad</option>
                            <option value="Channel Islands">Channel Islands</option>
                            <option value="Chile">Chile</option>
                            <option value="China">China</option>
                            <option value="Christmas Island">Christmas Island</option>
                            <option value="Cocos Island">Cocos Island</option>
                            <option value="Colombia">Colombia</option>
                            <option value="Comoros">Comoros</option>
                            <option value="Congo">Congo</option>
                            <option value="Cook Islands">Cook Islands</option>
                            <option value="Costa Rica">Costa Rica</option>
                            <option value="Cote DIvoire">Cote D'Ivoire</option>
                            <option value="Croatia">Croatia</option>
                            <option value="Cuba">Cuba</option>
                            <option value="Curaco">Curacao</option>
                            <option value="Cyprus">Cyprus</option>
                            <option value="Czech Republic">Czech Republic</option>
                            <option value="Denmark">Denmark</option>
                            <option value="Djibouti">Djibouti</option>
                            <option value="Dominica">Dominica</option>
                            <option value="Dominican Republic">Dominican Republic</option>
                            <option value="East Timor">East Timor</option>
                            <option value="Ecuador">Ecuador</option>
                            <option value="Egypt">Egypt</option>
                            <option value="El Salvador">El Salvador</option>
                            <option value="Equatorial Guinea">Equatorial Guinea</option>
                            <option value="Eritrea">Eritrea</option>
                            <option value="Estonia">Estonia</option>
                            <option value="Ethiopia">Ethiopia</option>
                            <option value="Falkland Islands">Falkland Islands</option>
                            <option value="Faroe Islands">Faroe Islands</option>
                            <option value="Fiji">Fiji</option>
                            <option value="Finland">Finland</option>
                            <option value="France">France</option>
                            <option value="French Guiana">French Guiana</option>
                            <option value="French Polynesia">French Polynesia</option>
                            <option value="French Southern Ter">French Southern Ter</option>
                            <option value="Gabon">Gabon</option>
                            <option value="Gambia">Gambia</option>
                            <option value="Georgia">Georgia</option>
                            <option value="Germany">Germany</option>
                            <option value="Ghana">Ghana</option>
                            <option value="Gibraltar">Gibraltar</option>
                            <option value="Great Britain">Great Britain</option>
                            <option value="Greece">Greece</option>
                            <option value="Greenland">Greenland</option>
                            <option value="Grenada">Grenada</option>
                            <option value="Guadeloupe">Guadeloupe</option>
                            <option value="Guam">Guam</option>
                            <option value="Guatemala">Guatemala</option>
                            <option value="Guinea">Guinea</option>
                            <option value="Guyana">Guyana</option>
                            <option value="Haiti">Haiti</option>
                            <option value="Hawaii">Hawaii</option>
                            <option value="Honduras">Honduras</option>
                            <option value="Hong Kong">Hong Kong</option>
                            <option value="Hungary">Hungary</option>
                            <option value="Iceland">Iceland</option>
                            <option value="India">India</option>
                            <option value="Indonesia">Indonesia</option>
                            <option value="Iran">Iran</option>
                            <option value="Iraq">Iraq</option>
                            <option value="Ireland">Ireland</option>
                            <option value="Isle of Man">Isle of Man</option>
                            <option value="Israel">Israel</option>
                            <option value="Italy">Italy</option>
                            <option value="Jamaica">Jamaica</option>
                            <option value="Japan">Japan</option>
                            <option value="Jordan">Jordan</option>
                            <option value="Kazakhstan">Kazakhstan</option>
                            <option value="Kenya">Kenya</option>
                            <option value="Kiribati">Kiribati</option>
                            <option value="Korea North">Korea North</option>
                            <option value="Korea Sout">Korea South</option>
                            <option value="Kuwait">Kuwait</option>
                            <option value="Kyrgyzstan">Kyrgyzstan</option>
                            <option value="Laos">Laos</option>
                            <option value="Latvia">Latvia</option>
                            <option value="Lebanon">Lebanon</option>
                            <option value="Lesotho">Lesotho</option>
                            <option value="Liberia">Liberia</option>
                            <option value="Libya">Libya</option>
                            <option value="Liechtenstein">Liechtenstein</option>
                            <option value="Lithuania">Lithuania</option>
                            <option value="Luxembourg">Luxembourg</option>
                            <option value="Macau">Macau</option>
                            <option value="Macedonia">Macedonia</option>
                            <option value="Madagascar">Madagascar</option>
                            <option value="Malaysia">Malaysia</option>
                            <option value="Malawi">Malawi</option>
                            <option value="Maldives">Maldives</option>
                            <option value="Mali">Mali</option>
                            <option value="Malta">Malta</option>
                            <option value="Marshall Islands">Marshall Islands</option>
                            <option value="Martinique">Martinique</option>
                            <option value="Mauritania">Mauritania</option>
                            <option value="Mauritius">Mauritius</option>
                            <option value="Mayotte">Mayotte</option>
                            <option value="Mexico">Mexico</option>
                            <option value="Midway Islands">Midway Islands</option>
                            <option value="Moldova">Moldova</option>
                            <option value="Monaco">Monaco</option>
                            <option value="Mongolia">Mongolia</option>
                            <option value="Montserrat">Montserrat</option>
                            <option value="Morocco">Morocco</option>
                            <option value="Mozambique">Mozambique</option>
                            <option value="Myanmar">Myanmar</option>
                            <option value="Nambia">Nambia</option>
                            <option value="Nauru">Nauru</option>
                            <option value="Nepal">Nepal</option>
                            <option value="Netherland Antilles">Netherland Antilles</option>
                            <option value="Netherlands">Netherlands (Holland, Europe)</option>
                            <option value="Nevis">Nevis</option>
                            <option value="New Caledonia">New Caledonia</option>
                            <option value="New Zealand">New Zealand</option>
                            <option value="Nicaragua">Nicaragua</option>
                            <option value="Niger">Niger</option>
                            <option value="Nigeria">Nigeria</option>
                            <option value="Niue">Niue</option>
                            <option value="Norfolk Island">Norfolk Island</option>
                            <option value="Norway">Norway</option>
                            <option value="Oman">Oman</option>
                            <option value="Pakistan">Pakistan</option>
                            <option value="Palau Island">Palau Island</option>
                            <option value="Palestine">Palestine</option>
                            <option value="Panama">Panama</option>
                            <option value="Papua New Guinea">Papua New Guinea</option>
                            <option value="Paraguay">Paraguay</option>
                            <option value="Peru">Peru</option>
                            <option value="Phillipines">Philippines</option>
                            <option value="Pitcairn Island">Pitcairn Island</option>
                            <option value="Poland">Poland</option>
                            <option value="Portugal">Portugal</option>
                            <option value="Puerto Rico">Puerto Rico</option>
                            <option value="Qatar">Qatar</option>
                            <option value="Republic of Montenegro">Republic of Montenegro</option>
                            <option value="Republic of Serbia">Republic of Serbia</option>
                            <option value="Reunion">Reunion</option>
                            <option value="Romania">Romania</option>
                            <option value="Russia">Russia</option>
                            <option value="Rwanda">Rwanda</option>
                            <option value="St Barthelemy">St Barthelemy</option>
                            <option value="St Eustatius">St Eustatius</option>
                            <option value="St Helena">St Helena</option>
                            <option value="St Kitts-Nevis">St Kitts-Nevis</option>
                            <option value="St Lucia">St Lucia</option>
                            <option value="St Maarten">St Maarten</option>
                            <option value="St Pierre &amp; Miquelon">St Pierre &amp; Miquelon</option>
                            <option value="St Vincent &amp; Grenadines">St Vincent &amp; Grenadines</option>
                            <option value="Saipan">Saipan</option>
                            <option value="Samoa">Samoa</option>
                            <option value="Samoa American">Samoa American</option>
                            <option value="San Marino">San Marino</option>
                            <option value="Sao Tome &amp; Principe">Sao Tome &amp; Principe</option>
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
                            <option value="Spain">Spain</option>
                            <option value="Sri Lanka">Sri Lanka</option>
                            <option value="Sudan">Sudan</option>
                            <option value="Suriname">Suriname</option>
                            <option value="Swaziland">Swaziland</option>
                            <option value="Sweden">Sweden</option>
                            <option value="Switzerland">Switzerland</option>
                            <option value="Syria">Syria</option>
                            <option value="Tahiti">Tahiti</option>
                            <option value="Taiwan">Taiwan</option>
                            <option value="Tajikistan">Tajikistan</option>
                            <option value="Tanzania">Tanzania</option>
                            <option value="Thailand">Thailand</option>
                            <option value="Togo">Togo</option>
                            <option value="Tokelau">Tokelau</option>
                            <option value="Tonga">Tonga</option>
                            <option value="Trinidad &amp; Tobago">Trinidad &amp; Tobago</option>
                            <option value="Tunisia">Tunisia</option>
                            <option value="Turkey">Turkey</option>
                            <option value="Turkmenistan">Turkmenistan</option>
                            <option value="Turks &amp; Caicos Is">Turks &amp; Caicos Is</option>
                            <option value="Tuvalu">Tuvalu</option>
                            <option value="Uganda">Uganda</option>
                            <option value="Ukraine">Ukraine</option>
                            <option value="United Arab Erimates">United Arab Emirates</option>
                            <option value="United Kingdom">United Kingdom</option>
                            <option value="United States of America">United States of America</option>
                            <option value="Uraguay">Uruguay</option>
                            <option value="Uzbekistan">Uzbekistan</option>
                            <option value="Vanuatu">Vanuatu</option>
                            <option value="Vatican City State">Vatican City State</option>
                            <option value="Venezuela">Venezuela</option>
                            <option value="Vietnam">Vietnam</option>
                            <option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
                            <option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
                            <option value="Wake Island">Wake Island</option>
                            <option value="Wallis &amp; Futana Is">Wallis &amp; Futana Is</option>
                            <option value="Yemen">Yemen</option>
                            <option value="Zaire">Zaire</option>
                            <option value="Zambia">Zambia</option>
                            <option value="Zimbabwe">Zimbabwe</option>
                        </select>
                    </span>
                    <br />
                    <label for='address-postal'>Postal Address</label>
                    <span class='border-left-pink'>
                        <textarea id='address-postal' name='address-postal'></textarea>
                    </span>
                    <br />
                    <label for='city'>City</label>
                    <span class='border-left-pink'>
                        <input type='text' name='city' id='city' />
                    </span>
                    <br />
                    <label for='province'>Province</label>
                    <span class='border-left-pink'>
                        <input type='text' name='province' id='province' />
                    </span>
                    <br />
                    <label for='address-physical'>Physical Address</label>
                    <span class='border-left-pink'>
                        <textarea id='address-physical' name='address-physical'></textarea>
                    </span>
                    <br />
                    <label for='phone'>Telephone</label>
                    <span class='border-left-pink'>
                        <input type='tel' name='phone' id='phone' />
                    </span>
                    <br />
                    <label for='email'>Email</label>
                    <span class='border-left-pink'>
                        <input type='email' name='email' id='email' />
                    </span>
                    <br />
                    
                    <h3 class='bg_dark'>Account Liaison<br />(Will receive remittance)</h3>
                    <label for='name-liaison'>Name</label>
                    <span class='border-left-pink'>
                    <input type='name-liaison' name='name-liaison' id='name-liaison' />
                    </span>
                    <br />
                    <label for='phone-tel-liaison'>Phone - Office</label>
                    <span class='border-left-pink'>
                    <input type='phone-tel-liaison' name='phone-tel-liaison' id='phone-tel-liaison' />
                    </span>
                    <br />
                    <label for='phone-cell-liaison'>Phone - Cell</label>
                    <span class='border-left-pink'>
                    <input type='phone-cell-liaison' name='phone-cell-liaison' id='phone-cell-liaison' />
                    </span>
                    <br />
                    <label for='email-liaison'>Email</label>
                    <span class='border-left-pink'>
                    <input type='email-liaison' name='email-liaison' id='email-liaison' />
                    </span>
                    <br />
                    
                    <h3 class='bg_dark'>Financial Manager</h3>
                    <label for='name-fm'>Name</label>
                    <span class='border-left-pink'>
                    <input type='name-fm' name='name-fm' id='name-fm' />
                    </span>
                    <br />
                    <label for='phone-tel-fm'>Phone - Office</label>
                    <span class='border-left-pink'>
                    <input type='phone-tel-fm' name='phone-tel-fm' id='phone-tel-fm' />
                    </span>
                    <br />
                    <label for='phone-cell-fm'>Phone - Cell</label>
                    <span class='border-left-pink'>
                    <input type='phone-cell-fm' name='phone-cell-fm' id='phone-cell-fm' />
                    </span>
                    <br />
                    <label for='email-fm'>Email</label>
                    <span class='border-left-pink'>
                    <input type='email-fm' name='email-fm' id='email-fm' />
                    </span>
                    <br />
                    <h3 class='bg_dark'>Sales Liaison<br />(Will receive purchase orders)</h3>
                    <label for='name-sales'>Name</label>
                    <span class='border-left-pink'>
                    <input type='name-sales' name='name-sales' id='name-sales' />
                    </span>
                    <br />
                    <label for='phone-tel-sales'>Phone - Office</label>
                    <span class='border-left-pink'>
                    <input type='phone-tel-sales' name='phone-tel-sales' id='phone-tel-sales' />
                    </span>
                    <br />
                    <label for='phone-cell-sales'>Phone - Cell</label>
                    <span class='border-left-pink'>
                    <input type='phone-cell-sales' name='phone-cell-sales' id='phone-cell-sales' />
                    </span>
                    <br />
                    <label for='email-sales'>Email</label>
                    <span class='border-left-pink'>
                    <input type='email-sales' name='email-sales' id='email-sales' />
                    </span>
                    <br />
                    
                    <!-- /////////////////////// Payment Details \\\\\\\\\\\ -->
                    <div class='divider'></div>
                    <h2 id='payment' class='white'>Payment Details</h2>
                    <p><font style='color: red;'>*</font><em>Strictly NO third party payments allowed</em></p>
                    <br />
                    <label for='bank-name'>Bank Name</label>
                    <span class='border-left-orange'>
                        <input type='text' name='bank-name' id='bank-name' />
                    </span>
                    <br />
                    <label for='branch-code'>Branch Code</label>
                    <span class='border-left-orange'>
                        <input type='text' name='branch-code' id='branch-code' />
                    </span>
                    <br />
                    <label for='acc-num'>Account Number</label>
                    <span class='border-left-orange'>
                        <input type='text' name='acc-num' id='acc-num' />
                    </span>
                    <br />
                    <label for='acc-name'>Account Name</label>
                    <span class='border-left-orange'>
                        <input type='text' name='acc-name' id='acc-name' />
                    </span>
                    
                    <!-- /////////////////////// Terms & Conditions \\\\\\\\\\\ -->
                    <div class='divider'></div>
                    <h2 id='tc' class='white'>Terms &amp Conditions</h2>
                    
                    <strong>Please take note of Fishgates’ standard financial terms and conditions:</strong>
                    <ul class='border-left-yellow'>
                        <li>Suppliers must ensure their invoices comply with SARS legislation.</li>
                        <li>
                            Invoicing Fishgate Advertising:
                            <ul>
                                <li>when invoicing a Fishgate Advertising Purchase Order, tax invoices must be invoiced to Fishgate Advertising cc, VAT registration number: 4620225989</li>
                                <li>Invoices must be emailed to accounts@fishgate.co.za to ensure payment.</li>
                                <li>Invoices are to be send to Fishgate on or before the 25<sup>th</sup> of every month, or the closest working day before.</li>
                            </ul>
                        </li>
                        <li>No goods or services may be delivered without a Fishgate system generated Purchase Order being provided prior to such delivery.</li>
                        <li>Only invoices reflecting a Fishgate system generated Purchase Order number will be honoured. </li>
                        <li>Each invoice must carry a unique serial invoice number. Repeating invoice numbers, even in different fiscal years, will not be accepted. </li>
                        <li>Invoices with incorrect and/or incomplete data, will not be processed until corrected and/or completed by you and initial payment terms will cease to apply. </li>
                        <li>Manual changes to invoices will not be accepted.</li>
                    </ul>
                    <br />
                    <h2 class='white'>Acknowledgement</h2>
                    <p>I/We the Supplier representative/s warrant that all information contained in this document is true and correct and that I/we am/are duly authorized to sign.</p>
                    <p>For and on behalf of the supplier, he/she being duly authorized thereto:</p>
                    
                    <br />
                    <label for='verify-name'>Name</label>
                    <span class='border-left-yellow'>
                        <input type='text' name='verify-name' id='verify-name' />
                    </span>
                    <br />
                    <label for='verify-initials'>Initials</label>
                    <span class='border-left-yellow'>
                        <input type='text' name='verify-initials' id='verify-initials' />
                    </span>
                    <br />
                    <label for='verify-designate'>Designation</label>
                    <span class='border-left-yellow'>
                        <input type='text' name='verify-designate' id='verify-designate' />
                    </span>
                    <br />
                    <input type='submit' />
                </div>
            <!-- ------------------------ END FORM CONTENT ---------- -->
        </div>
        </form>
        
        <!--======================================================
                       SCRIPTS AND ANALYTRICS
        =========================================================-->
        <?php include 'includes/scripts.php' ?>
    </body>
</html>
