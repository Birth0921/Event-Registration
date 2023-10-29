<?php
    include 'language.php';
    $language = '';
    if (!empty($_GET['language'])) {
        $language = $_GET['language'];
        
    }
    else{
        $language = 'eng';
    }
    $con = new mysqli('localhost', 'root', '', 'abc');

    // Check connection
    if ($con->connect_error) {
      die("Connection failed: " . $con->connect_error);
    }
    if (isset($_POST['register'])) {
        $fname = $_POST['fname'];
        $place = $_POST['place'];
        $lname = $_POST['lname'];
        $country = $_POST['country'];
        $org = $_POST['org'];
        $email = $_POST['email'];
        $fav = $_POST['fav_language'];

        if (!isset($_POST['information'])) {
            echo "<script>alert('Check atleast one company industry');</script>";
        } 
        else if (!isset($_POST['post'])) {
            echo "<script>alert('Check atleast one Position in company');</script>";
        }
        else if (!isset($_POST['interest'])) {
            echo "<script>alert('Check atleast one Primary Subject');</script>";
        }
        else if($fav == ''){
            echo "<script>alert('Set your decision role');</script>";
        }
        else if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $info = implode(',',$_POST['information']);
            $post = implode(',',$_POST['post']);
            $interest = implode(',',$_POST['interest']);
            $sql = "INSERT INTO `form` (`SN`, `fname`, `place`, `lname`, `country`, `org`, `email`, `info`, `post`, `interest`, `fav`) VALUES (NULL, '$fname', '$place', '$lname', '$country', '$org', '$email', '$info', '$post', '$interest', '$fav');";
            $result = mysqli_query($con,$sql);
            echo "<script>alert('Form Submitted Successfully !!!');</script>";
        } 
        else {
            echo "<script>alert('Email is not valid');</script>";
          }
       /* if ($info == '') {
            echo "<script>alert(' atleast one company industry');</script>";
            header("Refresh:0");
        }
        else if($post == ''){
            echo "<script>alert('Check atleast one Position in company');</script>";
            header("Refresh:0");
        }
        else if($interest == ''){
            echo "<script>alert('Check atleast one Primary Subject');</script>";
            header("Refresh:0");
        }
        else */
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My From</title>
    <link rel="stylesheet" href="index2.css">
</head>
<body>
    <div class="container">
    <div class="language">
        <div class="lang-container">
            <img src="https://m.media-amazon.com/images/I/413Ntc99ZFL._AC_UF894,1000_QL80_.jpg" alt="finland" onclick="fn()">
            <img src="https://cdn.britannica.com/79/4479-050-6EF87027/flag-Stars-and-Stripes-May-1-1795.jpg" alt="USA" srcset="" onclick="en()">
        </div>
    </div>
        <div class="box">
            <form action="" method="POST">
                <h3><?php echo $top_nav[$language]['0']?></h3><hr>
                <div class="box1">
                    <!-- First Row  -->
                    <div class="row">
                        <div class="row1a">
                            <div class="row11">
                                <label><?php echo $top_nav[$language]['1']?></label>
                            </div>
                            <div class="row12">
                                <input type="text" name="fname" id="fname" required>
                            </div>
                        </div>
                        <div class="row1a">
                            <div class="row11">
                                <label><?php echo $top_nav[$language]['2']?></label>
                            </div>
                            <div class="row12">
                                <input type="text" name="place" id="place" required>
                            </div>
                        </div>
                    </div>
                    <!-- Second Row -->
                    <div class="row">
                        <div class="row1a">
                            <div class="row11">
                                <label><?php echo $top_nav[$language]['3']?></label>
                            </div>
                            <div class="row12">
                                <input type="text" name="lname" id="lname" required>
                            </div>
                        </div>
                        <div class="row1a">
                            <div class="row11">
                                <label><?php echo $top_nav[$language]['4']?></label>
                            </div>
                            <div class="row12">
                                <select name="country" id="country" required>
                                    <option value=""><?php echo $top_nav[$language]['67']?></option>
                                    <option value="Afghanistan">Afghanistan</option>
                                    <option value="Albania">Albania</option>
                                    <option value="Algeria">Algeria</option>
                                    <option value="Andorra">Andorra</option>
                                    <option value="Angola">Angola</option>
                                    <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                    <option value="Argentina">Argentina</option>
                                    <option value="Armenia">Armenia</option>
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
                                    <option value="Bhutan">Bhutan</option>
                                    <option value="Bolivia">Bolivia</option>
                                    <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                                    <option value="Botswana">Botswana</option>
                                    <option value="Brazil">Brazil</option>
                                    <option value="Cambodia">Cambodia</option>
                                    <option value="Cameroon">Cameroon</option>
                                    <option value="Canada">Canada</option>
                                    <option value="Cape Verde">Cape Verde</option>
                                    <option value="Central African Republic">Central African Republic</option>
                                    <option value="Chad">Chad</option>
                                    <option value="Chile">Chile</option>
                                    <option value="China">China</option>
                                    <option value="Colombia">Colombia</option>
                                    <option value="Comoros">Comoros</option>
                                    <option value="Congo, Democratic Republic of the">Congo, Democratic Republic of the</option>
                                    <option value="Congo, Republic of the">Congo, Republic of the</option>
                                    <option value="Costa Rica">Costa Rica</option>
                                    <option value="Croatia">Croatia</option>
                                    <option value="Cuba">Cuba</option>
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
                                    <option value="Eswatini">Eswatini</option>
                                    <option value="Ethiopia">Ethiopia</option>
                                    <option value="Fiji">Fiji</option>
                                    <option value="Finland">Finland</option>
                                    <option value="France">France</option>
                                    <option value="Gabon">Gabon</option>
                                    <option value="Gambia">Gambia</option>
                                    <option value="Georgia">Georgia</option>
                                    <option value="Germany">Germany</option>
                                    <option value="Ghana">Ghana</option>
                                    <option value="Greece">Greece</option>
                                    <option value="Grenada">Grenada</option>
                                    <option value="Guatemala">Guatemala</option>
                                    <option value="Guinea">Guinea</option>
                                    <option value="Guinea-Bissau">Guinea-Bissau</option>
                                    <option value="Guyana">Guyana</option>
                                    <option value="Haiti">Haiti</option>
                                    <option value="Honduras">Honduras</option>
                                    <option value="Hungary">Hungary</option>
                                    <option value="Iceland">Iceland</option>
                                    <option value="India">India</option>
                                    <option value="Indonesia">Indonesia</option>
                                    <option value="Iran">Iran</option>
                                    <option value="Iraq">Iraq</option>
                                    <option value="Ireland">Ireland</option>
                                    <option value="Israel">Israel</option>
                                    <option value="Italy">Italy</option>
                                    <option value="Jamaica">Jamaica</option>
                                    <option value="Japan">Japan</option>
                                    <option value="Jordan">Jordan</option>
                                    <option value="Kazakhstan">Kazakhstan</option>
                                    <option value="Kenya">Kenya</option>
                                    <option value="Kiribati">Kiribati</option>
                                    <option value="Korea, North">Korea, North</option>
                                    <option value="Korea, South">Korea, South</option>
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
                                    <option value="Madagascar">Madagascar</option>
                                    <option value="Malawi">Malawi</option>
                                    <option value="Malaysia">Malaysia</option>
                                    <option value="Maldives">Maldives</option>
                                    <option value="Mali">Mali</option>
                                    <option value="Malta">Malta</option>
                                    <option value="Marshall Islands">Marshall Islands</option>
                                    <option value="Mauritania">Mauritania</option>
                                    <option value="Mauritius">Mauritius</option>
                                    <option value="Mexico">Mexico</option>
                                    <option value="Micronesia">Micronesia</option>
                                    <option value="Moldova">Moldova</option>
                                    <option value="Monaco">Monaco</option>
                                    <option value="Mongolia">Mongolia</option>
                                    <option value="Montenegro">Montenegro</option>
                                    <option value="Morocco">Morocco</option>
                                    <option value="Mozambique">Mozambique</option>
                                    <option value="Myanmar (Burma)">Myanmar (Burma)</option>
                                    <option value="Namibia">Namibia</option>
                                    <option value="Nauru">Nauru</option>
                                    <option value="Nepal">Nepal</option>
                                    <option value="Netherlands">Netherlands</option>
                                    <option value="New Zealand">New Zealand</option>
                                    <option value="Nicaragua">Nicaragua</option>
                                    <option value="Niger">Niger</option>
                                    <option value="Nigeria">Nigeria</option>
                                    <option value="North Korea">North Korea</option>
                                    <option value="Norway">Norway</option>
                                    <option value="Oman">Oman</option>
                                    <option value="Pakistan">Pakistan</option>
                                    <option value="Palau">Palau</option>
                                    <option value="Palestine">Palestine</option>
                                    <option value="Panama">Panama</option>
                                    <option value="Papua New Guinea">Papua New Guinea</option>
                                    <option value="Paraguay">Paraguay</option>
                                    <option value="Peru">Peru</option>
                                    <option value="Philippines">Philippines</option>
                                    <option value="Poland">Poland</option>
                                    <option value="Portugal">Portugal</option>
                                    <option value="Qatar">Qatar</option>
                                    <option value="Romania">Romania</option>
                                    <option value="Russia">Russia</option>
                                    <option value="Rwanda">Rwanda</option>
                                    <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                    <option value="Saint Lucia">Saint Lucia</option>
                                    <option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
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
                                    <option value="South Sudan">South Sudan</option>
                                    <option value="Spain">Spain</option>
                                    <option value="Sri Lanka">Sri Lanka</option>
                                    <option value="Sudan">Sudan</option>
                                    <option value="Suriname">Suriname</option>
                                    <option value="Sweden">Sweden</option>
                                    <option value="Switzerland">Switzerland</option>
                                    <option value="Syria">Syria</option>
                                    <option value="Taiwan">Taiwan</option>
                                    <option value="Tajikistan">Tajikistan</option>
                                    <option value="Tanzania">Tanzania</option>
                                    <option value="Thailand">Thailand</option>
                                    <option value="Togo">Togo</option>
                                    <option value="Tonga">Tonga</option>
                                    <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                    <option value="Tunisia">Tunisia</option>
                                    <option value="Turkey">Turkey</option>
                                    <option value="Turkmenistan">Turkmenistan</option>
                                    <option value="Tuvalu">Tuvalu</option>
                                    <option value="Uganda">Uganda</option>
                                    <option value="Ukraine">Ukraine</option>
                                    <option value="United Arab Emirates">United Arab Emirates</option>
                                    <option value="United Kingdom">United Kingdom</option>
                                    <option value="United States">United States</option>
                                    <option value="Uruguay">Uruguay</option>
                                    <option value="Uzbekistan">Uzbekistan</option>
                                    <option value="Vanuatu">Vanuatu</option>
                                    <option value="Vatican City">Vatican City</option>
                                    <option value="Venezuela">Venezuela</option>
                                    <option value="Vietnam">Vietnam</option>
                                    <option value="Yemen">Yemen</option>
                                    <option value="Zambia">Zambia</option>
                                    <option value="Zimbabwe">Zimbabwe</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <!-- Third Row -->
                    <div class="row">
                        <div class="row1a">
                            <div class="row11">
                                <label><?php echo $top_nav[$language]['5']?></label>
                            </div>
                            <div class="row12">
                                <input type="text" name="org" id="org" required>
                            </div>
                        </div>
                        <div class="row1a">
                            <div class="row11">
                                <label><?php echo $top_nav[$language]['6']?></label>
                            </div>
                            <div class="row12">
                                <input type="text" name="email" id="email" required>
                            </div>
                        </div>
                    </div>
                    <!-- Fourth Row -->
                    <div class="rows">
                        <div class="row1">
                            <input type="checkbox" name="info" id="info"> <label><strong> <?php echo $top_nav[$language]['7']?></strong></label>
                    </div>
                </div>
                <h3><?php echo $top_nav[$language]['8']?></h3><hr>
                <label class="aaa"><?php echo $top_nav[$language]['9']?></label>
                <div class="box1">
                    <div class="row">
                        <div class="row1">
                            <input type="checkbox" name="information[]" value="<?php echo $top_nav[$language]['10']?>"> <label><?php echo $top_nav[$language]['10']?></label>
                        </div>
                        <div class="row1">
                            <input type="checkbox" name="information[]" value="<?php echo $top_nav[$language]['22']?>"> <label><?php echo $top_nav[$language]['22']?></label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="row1">
                            <input type="checkbox" name="information[]" value="<?php echo $top_nav[$language]['11']?>"> <label><?php echo $top_nav[$language]['11']?></label>
                        </div>
                        <div class="row1">
                            <input type="checkbox" name="information[]" value="<?php echo $top_nav[$language]['23']?>"> <label><?php echo $top_nav[$language]['23']?></label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="row1">
                            <input type="checkbox" name="information[]" value="<?php echo $top_nav[$language]['12']?>"> <label><?php echo $top_nav[$language]['12']?></label>
                        </div>
                        <div class="row1">
                            <input type="checkbox" name="information[]" value="<?php echo $top_nav[$language]['24']?>"> <label><?php echo $top_nav[$language]['24']?></label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="row1">
                            <input type="checkbox" name="information[]" value="<?php echo $top_nav[$language]['13']?>"> <label><?php echo $top_nav[$language]['13']?></label>
                        </div>
                        <div class="row1">
                            <input type="checkbox" name="information[]" value="<?php echo $top_nav[$language]['25']?>"> <label><?php echo $top_nav[$language]['25']?></label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="row1">
                            <input type="checkbox" name="information[]" value="<?php echo $top_nav[$language]['14']?>"> <label><?php echo $top_nav[$language]['14']?></label>
                        </div>
                        <div class="row1">
                            <input type="checkbox" name="information[]" value="<?php echo $top_nav[$language]['26']?>"> <label><?php echo $top_nav[$language]['26']?></label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="row1">
                            <input type="checkbox" name="information[]" value="<?php echo $top_nav[$language]['15']?>"> <label><?php echo $top_nav[$language]['15']?></label>
                        </div>
                        <div class="row1">
                            <input type="checkbox" name="information[]" value="<?php echo $top_nav[$language]['27']?>"> <label><?php echo $top_nav[$language]['27']?></label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="row1">
                            <input type="checkbox" name="information[]" value="<?php echo $top_nav[$language]['16']?>"> <label><?php echo $top_nav[$language]['16']?></label>
                        </div>
                        <div class="row1">
                            <input type="checkbox" name="information[]" value="<?php echo $top_nav[$language]['28']?>"> <label><?php echo $top_nav[$language]['28']?></label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="row1">
                            <input type="checkbox" name="information[]" value="<?php echo $top_nav[$language]['17']?>"> <label><?php echo $top_nav[$language]['17']?></label>
                        </div>
                        <div class="row1">
                            <input type="checkbox" name="information[]" value="<?php echo $top_nav[$language]['29']?>"> <label><?php echo $top_nav[$language]['29']?></label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="row1">
                            <input type="checkbox" name="information[]" value="<?php echo $top_nav[$language]['18']?>"> <label><?php echo $top_nav[$language]['18']?></label>
                        </div>
                        <div class="row1">
                            <input type="checkbox" name="information[]" value="<?php echo $top_nav[$language]['30']?>"> <label><?php echo $top_nav[$language]['30']?></label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="row1">
                            <input type="checkbox" name="information[]" value="<?php echo $top_nav[$language]['19']?>"> <label><?php echo $top_nav[$language]['19']?></label>
                        </div>
                        <div class="row1">
                            <input type="checkbox" name="information[]" value="<?php echo $top_nav[$language]['31']?>"> <label><?php echo $top_nav[$language]['31']?></label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="row1">
                            <input type="checkbox" name="information[]" value="<?php echo $top_nav[$language]['20']?>"> <label><?php echo $top_nav[$language]['20']?></label>
                        </div>
                        <div class="row1">
                            <input type="checkbox" name="information[]" value="<?php echo $top_nav[$language]['32']?>"> <label><?php echo $top_nav[$language]['32']?></label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="row1">
                            <input type="checkbox" name="information[]" value="<?php echo $top_nav[$language]['21']?>"> <label><?php echo $top_nav[$language]['21']?></label>
                        </div>
                        <div class="row1">
                            <input type="checkbox" name="information[]" value="<?php echo $top_nav[$language]['33']?>"> <label><?php echo $top_nav[$language]['33']?></label>
                        </div>
                    </div>
                </div>
                <label><?php echo $top_nav[$language]['34']?></label>
                <div class="box1">
                    <div class="row">
                        <div class="row1">
                            <input type="checkbox" name="post[]" value="<?php echo $top_nav[$language]['35']?>"> <label><?php echo $top_nav[$language]['35']?></label>
                        </div>
                        <div class="row1">
                            <input type="checkbox" name="post[]" value="<?php echo $top_nav[$language]['42']?>"> <label><?php echo $top_nav[$language]['42']?></label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="row1">
                            <input type="checkbox" name="post[]" value="<?php echo $top_nav[$language]['36']?>"> <label><?php echo $top_nav[$language]['36']?></label>
                        </div>
                        <div class="row1">
                            <input type="checkbox" name="post[]" value="<?php echo $top_nav[$language]['43']?>"> <label><?php echo $top_nav[$language]['43']?></label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="row1">
                            <input type="checkbox" name="post[]" value="<?php echo $top_nav[$language]['37']?>"> <label><?php echo $top_nav[$language]['37']?></label>
                        </div>
                        <div class="row1">
                            <input type="checkbox" name="post[]" value="<?php echo $top_nav[$language]['44']?>"> <label><?php echo $top_nav[$language]['44']?></label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="row1">
                            <input type="checkbox" name="post[]" value="<?php echo $top_nav[$language]['38']?>"> <label><?php echo $top_nav[$language]['38']?></label>
                        </div>
                        <div class="row1">
                            <input type="checkbox" name="post[]" value="<?php echo $top_nav[$language]['45']?>"> <label><?php echo $top_nav[$language]['45']?></label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="row1">
                            <input type="checkbox" name="post[]" value="<?php echo $top_nav[$language]['39']?>"> <label><?php echo $top_nav[$language]['39']?></label>
                        </div>
                        <div class="row1">
                            <input type="checkbox" name="post[]" value="<?php echo $top_nav[$language]['46']?>"> <label><?php echo $top_nav[$language]['46']?></label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="row1">
                            <input type="checkbox" name="post[]" value="<?php echo $top_nav[$language]['40']?>"> <label><?php echo $top_nav[$language]['40']?></label>
                        </div>
                        <div class="row1">
                            <input type="checkbox" name="post[]" value="<?php echo $top_nav[$language]['47']?>"> <label><?php echo $top_nav[$language]['47']?></label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="row1">
                            <input type="checkbox" name="post[]" value="<?php echo $top_nav[$language]['41']?>"> <label><?php echo $top_nav[$language]['41']?></label>
                        </div>
                        <div class="row1">
                            <input type="checkbox" value="<?php echo $top_nav[$language]['48']?>"> <label><?php echo $top_nav[$language]['48']?></label>
                        </div>
                    </div>
                </div>
                <label><?php echo $top_nav[$language]['49']?></label>
                <div class="box1">
                    <div class="row">
                        <input type="radio" name="fav_language" required value="<?php echo $top_nav[$language]['50']?>"><label><?php echo $top_nav[$language]['50']?></label>
                    </div>
                    <div class="row">
                        <input type="radio" name="fav_language" required value="<?php echo $top_nav[$language]['51']?>"><label><?php echo $top_nav[$language]['51']?></label>
                    </div>
                    <div class="row">
                        <input type="radio" name="fav_language" required value="<?php echo $top_nav[$language]['52']?>"><label><?php echo $top_nav[$language]['52']?></label>
                    </div>
                </div>
                <label class="adjust"><?php echo $top_nav[$language]['53']?></label>
                <div class="box1">
                    <div class="row">
                        <input type="checkbox" name="interest[]" value="<?php echo $top_nav[$language]['54']?>"><label><?php echo $top_nav[$language]['54']?></label>
                    </div>
                    <div class="row">
                        <input type="checkbox" name="interest[]" value="<?php echo $top_nav[$language]['55']?>"><label><?php echo $top_nav[$language]['55']?></label>
                    </div>
                    <div class="row">
                        <input type="checkbox" name="interest[]" value="<?php echo $top_nav[$language]['56']?>"><label><?php echo $top_nav[$language]['56']?></label>
                    </div>
                    <div class="row">
                        <input type="checkbox" name="interest[]" value="<?php echo $top_nav[$language]['57']?>"><label><?php echo $top_nav[$language]['57']?></label>
                    </div>
                    <div class="row">
                        <input type="checkbox" name="interest[]" value="<?php echo $top_nav[$language]['58']?>"><label><?php echo $top_nav[$language]['58']?></label>
                    </div>
                    <div class="row">
                        <input type="checkbox" name="interest[]" value="<?php echo $top_nav[$language]['59']?>"><label><?php echo $top_nav[$language]['59']?></label>
                    </div>
                    <div class="row">
                        <input type="checkbox" name="interest[]" value="<?php echo $top_nav[$language]['60']?>"><label><?php echo $top_nav[$language]['60']?></label>
                    </div>
                    <div class="row">
                        <input type="checkbox" name="interest[]" value="<?php echo $top_nav[$language]['61']?>"><label><?php echo $top_nav[$language]['61']?></label>
                    </div>
                    <div class="row">
                        <input type="checkbox" name="interest[]" value="<?php echo $top_nav[$language]['62']?>"><label><?php echo $top_nav[$language]['62']?></label>
                    </div>
                </div>
                <h3><?php echo $top_nav[$language]['63']?></h3><hr>
                <label style="color: blue;"><?php echo $top_nav[$language]['64']?></label>
                <div class="box1">
                    <div class="row">
                        <input type="checkbox" required> <label><?php echo $top_nav[$language]['65']?></label>
                    </div>
                </div>
                <div class="btn">
                    <input type="submit" value="<?php echo $top_nav[$language]['66']?>" name="register">
                </div>
            </form>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script>
        function fn(){
            var lang = 'fin';
            //alert(lang);
             window.location.href='http://localhost/Event Registration/index2.php?language='+lang;
        }
        function en(){
            var lang = 'eng';
            //alert(lang);
             window.location.href='http://localhost/Event Registration/index2.php?language='+lang;
        }
    </script>
    
</body>
</html>