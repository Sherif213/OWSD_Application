<!-- Information Container -->
<div class="information-container">
    <!-- Headline -->
    <div class="container-headline1">
        <img src="images/questionMark.jpg" alt="Texture Image" class="texture-image1">
        <h2 class="headline1">IMPORTANT INFORMATION</h2>
    </div>


    <!-- Left Section -->
    <div class="left-section">
        <!-- Program Dates Section -->
        <div class="section" style="min-height: 48%;">
            <h3>PROGRAM DATES</h3>
            <div class="programDatesContent">
                <p>Arrival of International Participants: <strong>6th and 7th
                        July</strong>.<span>&#9992;</span></p>
                <p>Orientation Day: <strong>8th July</strong> </p>
                <p>Program Courses and activities: <strong>9th July till 18th July</strong></p>
                <p>Closing Ceremony: <strong>19th July</strong></p>
                <p>Departure of International Participants: <strong>20th July</strong></p>
            </div>
        </div>
        <!-- Payment Method Section -->
        <div class="section">
            <h3>PAYMENT DETAILS</h3>
            <div class="programDatesContent">
                <p>After your application has been reviewed, you will receive the payment details along with
                    your acceptance letter.</p>
            </div>
        </div>
        <!-- Schedule Section -->
        <div class="section">
            <h3>SCHEDULE</h3>
            <div class="programDatesContent">
                <strong>
                    <p>You can check Schedule <a href="#" id="openSchedule" class="terms-link">HERE</a> !
                    </p>
                </strong>
            </div>
        </div>

    </div>

    <!-- Right Section -->
    <div class="right-section">
        <!-- Registration Deadline Section -->
        <div class="section" style="min-height: 22.5%;">
            <h3>REGISTRATION DEADLINES</h3>
            <div class="programDatesContent">
                <p>Registration Deadline: <strong>25th June</strong></p>
            </div>
        </div>
        <!-- Courses Section -->
        <div class="section" style="min-height: 22%;">
            <h3>COURSES</h3>
            <div class="programDatesContent">
                <p>International Relations and Intercultural Competence</p>
            </div>
        </div>
        <!-- Fees Section -->
        <div class="section" style="min-height: 47%;">
            <h3>FEES</h3>
            <div class="programDatesContent">
                <p>The fee will be communicated to you via <strong>email</strong> after your application has been
                    reviewed.</p>
                <p>This process ensures that you receive all necessary information regarding the cost of the program.
                </p>

            </div>
            <div class="alert alert-warning" role="alert">
                <i class="fa-solid fa-circle-info"></i>&nbsp;
                After payment, share receipt for confirmation.
            </div>
        </div>


    </div>
    <div class="bottom-section1">

    </div>
</div>
<form id="myForm" action="/submit.php" method="POST" enctype="multipart/form-data">
    <!-- Information Container 2 -->
    <div class="information-container2">
        <!-- Headline -->
        <div class="container-headline1">
            <img src="images/StudentInformation.jpg" alt="Texture Image" class="texture-image1">
            <h2 class="headline1">PERSONAL INFORMATION</h2>
        </div>



        <div class="bottom-section3">
            <div class="left-section3">
                <label for="first_name">First Name</label>
                <input type="text" aria-label="First Name" class="form-control" id="first_name" name="first_name"
                    required>
            </div>
            <div class="right-section3">
                <label for="last_name">Last Name</label>
                <input type="text" aria-label="Last Name" class="form-control" id="last_name" name="last_name" required>
            </div>
        </div>
        <div class="bottom-section3">
            <div class="left-section3">
                <label for="gender">Gender</label>
                <select class="form-control" id="gender" name="gender" required>
                    <option value="option">--Select Gender--</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select>
            </div>
            <div class="right-section3">
                <label for="Citizenship">Citizenship</label>
                <select name="Citizenship" class="form-control" required>
                    <option value="">-- Select Your Citizenship --</option>
                    <?php include "include/Citizenship.php" ?>
            </div>
        </div>
        <div class="bottom-section3">
            <div class="left-section3">
                <label for="date_of_birth">Date of Birth</label>
                <input class="form-control" type="date" id="date_of_birth" name="date_of_birth" required>
            </div>
            <!-- Place of Birth -->
            <div class="right-section3">
                <label for="Country_of_Residence">Country of Residence</label>
                <select name="Country_of_Residence" class="form-control" required>
                    <option value="">-- Select Your Citizenship --</option>
                    <?php include "include/Citizenship.php" ?>
            </div>
        </div>
        <div class="bottom-section3">
            <div class="left-section3">
                <label for="Country_of_Visa">Country of Visa</label>
                <input type="text" aria-label="Country of Visa" class="form-control" id="place_of_birth"
                    name="Country_of_Visa" required>
            </div>
            <!-- T-Shirt Size -->
            <div class="right-section3">
                <label for="Residence_Permit">Do you have a Residence Permit in Turkiye?</label>
                <select class="form-control" id="Residence_Permit" name="Residence_Permit" required>
                    <option selected>--Select--</option>
                    <option value="YES">Yes</option>
                    <option value="NO">No</option>
                </select>
            </div>
        </div>
        <div class="bottom-section3">
            <div class="left-section3">
                <label for="Turkish_Nationality">Do you have a Turkish Nationality?</label>
                <select class="form-control" id="Turkish_Nationality" name="Turkish_Nationality" required>
                    <option selected>--Select--</option>
                    <option value="YES">Yes</option>
                    <option value="NO">No</option>
                </select>
            </div>
            <div class="right-section3">
                <label for="personal_picture">Photo</label>
                <input type="file" class="form-control" id="personal_picture" name="personal_picture" required>
            </div>
        </div>
        <div class="bottom-section3">
            <div class="left-section3">
                <label for="personal_CV">CV</label>
                <input type="file" class="form-control" id="personal_CV" name="personal_CV" required>
            </div>
        </div>
    </div>
    <div class="information-container3">
        <!-- Headline -->
        <div class="container-headline1">
            <img src="images/ContactCropped.png" alt="Texture Image" class="texture-image2">
            <h2 class="headline1">CONTACT INFORMATION</h2>
        </div>
        <div class="bottom-section3">
            <div class="left-section3">
                <label for="country">Country</label>
                <select name="country" class="form-control" required>
                    <option value="">-- Select Country --</option>
                    <?php include "include/Citizenship.php" ?>
            </div>
            <div class="right-section3">
                <label for="telephone1">Mobile Phone</label>
                <input type="tel" id="telephone1" name="telephone" class="form-control" required>
            </div>
        </div>
        <!-- Home Address Row -->
        <div class="top-section3">
            <label for="home_address">Home Address</label>
            <textarea id="home_address" name="home_address" class="form-control full-width-input" required></textarea>
        </div>

        <!-- Email and Telephone Row -->
        <div class="bottom-section3">
            <div class="left-section3">
                <label for="City">City</label>
                <input type="text" list="datalistOptions" id="City" name="City" class="form-control" required>
                <datalist id="datalistOptions">
                    <option value="Istanbul">
                    <option value="Cairo">
                    <option value="Aman">
                    <option value="Los Angeles">
                    <option value="Chicago">
                </datalist>
            </div>
            <div class="right-section3">
                <label for="Postal_Code">Postal Code</label>
                <input type="text" id="Postal_Code" name="Postal_Code" class="form-control" required>
            </div>
        </div>
    </div>
    <div class="information-container4">
        <div class="container-headline1">
            <img src="images/Emergency1.jpg" alt="Texture Image" class="texture-image2">
            <h2 class="headline1">EMERGENCY CONTACT INFORMATION</h2>
        </div>
        <div class="bottom-section3">
            <div class="left-section3">
                <label for="fathers_full_name">1.Parent/Legal Guardian's Full Name</label>
                <input type="text" id="fathers_full_name" name="fathers_full_name" class="form-control full-width-input"
                    required>

            </div>
            <div class="right-section3">
                <label for="Occupation_first">Occupation</label>
                <input type="text" id="Occupation_first" name="Occupation_first" class="form-control" required>
            </div>
        </div>

        <!-- Email and Telephone Row -->
        <div class="bottom-section3">
            <div class="left-section3">
                <label for="email2">Email</label>
                <input type="email" id="email2" name="fathers_email" class="form-control" required>
            </div>
            <div class="right-section3">
                <label for="telephone2">Telephone</label>
                <input type="tel" id="telephone2" name="fathers_telephone" class="form-control" required>
            </div>
        </div>
        <div class="separator"></div>
        <div class="bottom-section3">
            <div class="left-section3">
                <label for="mothers_full_name">2.Parent/Legal Guardian's Full Name</label>
                <input type="text" id="mothers_full_name" name="mothers_full_name" class="form-control full-width-input"
                    required>

            </div>
            <div class="right-section3">
                <label for="Occupation_second">Occupation</label>
                <input type="text" id="Occupation_second" name="Occupation_second" class="form-control" required>
            </div>
        </div>
        <!-- Email and Telephone Row -->
        <div class="bottom-section3">
            <div class="left-section3">
                <label for="email3">Email</label>
                <input type="email" id="email3" name="mothers_email" class="form-control" required>
            </div>
            <div class="right-section3">
                <label for="telephone3">Telephone</label>
                <input type="tel" id="telephone3" name="mothers_telephone" class="form-control" required>
            </div>
        </div>
    </div>
    <div class="information-container5">
        <div class="container-headline1">
            <img src="images/Passport.jpg" alt="Texture Image" class="texture-image2">
            <h2 class="headline1">PASSPORT INFORMATION</h2>
        </div>
        <!-- Top Section -->
        <div class="bottom-section3">
            <!-- Left Section -->
            <div class="left-section3">
                <label for="passport_name">Name on Passport</label>
                <input type="text" class="form-control" id="passport_name" name="passport_name" required>
            </div>
            <!-- Right Section -->
            <div class="right-section3">
                <label for="given_place">Given Place</label>
                <input type="text" class="form-control" id="given_place" name="given_place" required>
            </div>
        </div>

        <!-- Second Section -->
        <div class="bottom-section3">
            <!-- Left Section -->
            <div class="left-section3">
                <label for="passport_name_2">Passport Number</label>
                <input type="text" class="form-control" id="passport_name_2" name="passport_number" required>
            </div>
            <!-- Right Section -->
            <div class="right-section3">
                <label for="expiry_date">Expiry Date</label>
                <input type="text" class="form-control" id="expiry_date" name="expiry_date" required>
            </div>
        </div>

        <!-- Third Section -->
        <div class="bottom-section3">
            <div class="left-section3">
                <label for="passport_copy" class="input-group-text">Passport Copy</label>
                <input type="file" class="form-control" id="passport_copy" name="passport_copy" required>
            </div>
        </div>
    </div>

    <div class="information-container4">
        <div class="container-headline1">
            <img src="images/Emergency1.jpg" alt="Texture Image" class="texture-image2">
            <h2 class="headline1">BACHELOR INFORMATION</h2>
        </div>
        <div class="bottom-section3">
            <div class="left-section3">
                <label for="Bachelor_University">University of Bachelor</label>
                <input type="text" aria-label="Bachelor_University" class="form-control" id="Bachelor_University"
                    name="Bachelor_University" required>
            </div>
            <div class="right-section3">
                <label for="Bachelor_University">Program of Bachelor</label>
                <input type="text" aria-label="Bachelor_University" class="form-control" id="Bachelor_University"
                    name="Bachelor_University" required>
            </div>
            
        </div>

        <div class="bottom-section3">
            <div class="left-section3">
                <label for="Bachelor_country">Country of Bachelor</label>
                <select name="Bachelor_country" class="form-control" required>
                    <option value="">-- Select Country --</option>
                    <?php include "include/Citizenship.php" ?>
            </div>
            <div class="right-section3">
                <label for="Bachelor_gpa">GPA of Bachelor</label>
                <input type="number" aria-label="Bachelor_gpa" class="form-control" id="Bachelor_gpa" step="0.01"
                    min="0" name="Bachelor_gpa" required>
            </div>
        </div>

        <div class="bottom-section3">
            <div class="left-section3">
                <label for="Start_Bachelor">Start Date of Bachelor</label>
                <input class="form-control" type="date" id="Start_Bachelor" name="Start_Bachelor" required>
            </div>
            <div class="right-section3">
                <label for="End_Bachelor">End Date of Bachelor</label>
                <input class="form-control" type="date" id="End_Bachelor" name="End_Bachelor" required>
            </div>
        </div>

        <div class="bottom-section3">
            <div class="left-section3">
                <label for="Bachelors_Diploma">Bachelors Diploma</label>
                <input type="file" class="form-control" id="Bachelors_Diploma" name="Bachelors_Diploma" required>
            </div>
            <div class="right-section3">
                <label for="Bachelors_Transcript">Bachelors Transcript</label>
                <input type="file" class="form-control" id="Bachelors_Transcript" name="Bachelors_Transcript" required>
            </div>
        </div>
        <div class="bottom-section3">
            <div class="left-section3">
                <label for="Equivalency_Paper">Equivalency Paper/Denklik Belge </label>
                <input type="file" class="form-control" id="Equivalency_Paper" name="Equivalency_Paper">
            </div>
        </div>
    </div>
    <div class="information-container4">
        <div class="container-headline1">
            <img src="images/Emergency1.jpg" alt="Texture Image" class="texture-image2">
            <h2 class="headline1">LANGUAGE INFORMATION</h2>
        </div>
        <div class="bottom-section3">
            <div class="left-section3">
                <label for="Turkish_Proficiency">Turkish Proficiency</label>
                <select class="form-control" id="Turkish_Proficiency" name="Turkish_Proficiency" required>
                    <option selected>--Select--</option>
                    <option value="A1">A1</option>
                    <option value="A2">A2</option>
                    <option value="B1">B1</option>
                    <option value="B2">B2</option>
                    <option value="C1">C1</option>
                </select>
            </div>
            <div class="right-section3">
                <label for="English_Proficiency">English Proficiency</label>
                <select class="form-control" id="English_Proficiency" name="English_Proficiency" required>
                    <option selected>--Select--</option>
                    <option value="A1">A1</option>
                    <option value="A2">A2</option>
                    <option value="B1">B1</option>
                    <option value="B2">B2</option>
                    <option value="C1">C1</option>
                    <option value="C2">C2</option>
                </select>
            </div>
        </div>
    </div>
    <div class="information-container6">
        <div class="container-headline1">
            <img src="images/Course.jpg" alt="Texture Image" class="texture-image2">
            <h2 class="headline1">COURSE SELECTION</h2>
        </div>
        <div class="course-selection">
            <label for="course">Course</label>
            <select id="course" name="course" required>
                <option value="">-- Select Course --</option>
                <option value="Programming With JAVA II">International Relations and Intercultural Competence.
                </option>
            </select>
        </div>
    </div>
    <div class="information-container8">
        <div class="container-headline1">
            <img src="images/dollar.jpg" alt="Texture Image" class="texture-image2">
            <h2 class="headline1">PREFERRED PAYMENT METHOD</h2>
        </div>
        <div class="course-selection">
            <label for="course2">Payment Method</label>
            <select id="course2" name="iban" required>
                <option value="">-- Select Payment Method --</option>
                <option value="ibanTR">Turkish Lira IBAN</option>
                <option value="ibanUS">US Dollar IBAN</option>
                <option value="ibanEURO">EURO IBAN</option>
            </select>
        </div>
    </div>

    <div class="information-container9">
        <div class="top-section6">
            <div class="left-section6">
                <label class="checkbox-container">
                    <input type="checkbox" id="agreeCheckbox" required class="checkbox-input" required>
                    <span class="checkmark"></span>
                    <span class="checkbox-text">I agree to the <a href="#" id="openModal" class="terms-link">Terms
                            and Conditions</a></span>
                </label>
            </div>
            <div class="alert alert-warning" role="alert">
                <i class="fa-solid fa-circle-info"></i>&nbsp;
                Read terms and conditions before proceeding!
            </div>
        </div>

    </div>
    <div class="information-container8">
        <div class="g-recaptcha" data-sitekey="6LdqOvspAAAAAN2h0gs6rDQ9sg6yVwOSoXTJCf1l"></div>
    </div>
    <div class="information-container8">
        <div class="button-section">
            <button type="submit" class="btn btn-success">Submit Application</button>
            <button type="reset" class="btn btn-danger">Reset Field</button>
        </div>
    </div>
    <div id="modal">
        <div class="modal-content">
            <h2>UNESCO JUNIOR DIPLOMACY PROGRAM TERMS AND CONDITIONS</h2>
            <div class="terms-section">
                <strong>1. Eligibility:</strong>
                <p>- The program is open to all participants ages 14 and above, including international students.
                </p>
                <p>- Participants must have a minimum proficiency level of B1 in English.</p>
                <p>- Participants must submit a personal statement, a letter of recommendation, and a valid ID or
                    passport.</p>
                <p>- Students under 18 years of age require the consent of a legal guardian to participate.</p>
            </div>
            <div class="terms-section">
                <strong>2. Accommodation:</strong>
                <p>- Accommodation will be provided only for students arriving from outside of Istanbul.</p>
                <p>- Participants must adhere to the accommodation rules and regulations set forth by the
                    organizers.
                </p>
            </div>
            <div class="terms-section">
                <strong>3. Program Activities:</strong>
                <p>- The program will include trips and educational activities organized by the UNESCO Chair at
                    Istanbul
                    Aydin University.</p>
                <p>- Program activity details such as time and location maybe subject to change.</p>
            </div>
            <div class="terms-section">
                <strong>4. Code of Conduct:</strong>
                <p>- Participants must conduct themselves in a respectful and professional manner at all times.</p>
                <p>- Any misdemeanor may result in immediate termination from the program without refund.</p>
            </div>
            <div class="terms-section">
                <strong>5. Health and Safety:</strong>
                <p>- Participants are responsible for their own health insurance coverage for the duration of the
                    program.</p>
                <p>- Emergency contact information must be provided upon registration.</p>
                <p>- Any medical conditions or special requirements must be disclosed to the organizers in advance.
                </p>
            </div>
            <div class="terms-section">
                <strong>6. Payment:</strong>
                <p>- Payment for the program is non-refundable, other than in exceptional circumstances at the
                    discretion of
                    the organizing committee.</p>
            </div>
            <div class="terms-section">
                <strong>7. Liability:</strong>
                <p>- Istanbul Aydin University and the UNESCO Chair are not liable for any loss, damage, or injury
                    sustained during the program, including during scheduled trips.</p>
                <p>- Participants are responsible for their personal belongings and valuables.</p>
            </div>
            <div class="terms-section">
                <strong>8. Changes and Cancellations:</strong>
                <p>- The organizers reserve the right to make changes to the program itinerary or schedule if
                    necessary.
                </p>
                <p>- In the event of program cancellation by the organizers, participants will be notified as soon
                    as
                    possible, and any fees paid will be refunded.</p>
            </div>
            <div class="terms-section">
                <strong>9. Agreement:</strong>
                <p>- By submitting an application, participants agree to abide by these terms and conditions.</p>
            </div>
            <p>By participating in the UNESCO Junior Peace Program, participants acknowledge that they have read,
                understood, and agree to comply with these terms and conditions.</p>
        </div>
    </div>
    <div id="scheduleDetails">
        <div class="schedule-content">
            <h2>Program Schedule</h2>
            <div class="schedule-item">
                <strong>July 6th (Saturday)</strong>
                <p>Arrival of International Participants to Istanbul - No scheduled activities</p>
            </div>
            <div class="schedule-item">
                <strong>July 7th (Sunday)</strong>
                <p>Arrival of International Participants to Istanbul - No scheduled activities</p>
            </div>
            <div class="schedule-item">
                <strong>July 8th (Monday) - Day 1: Introduction</strong>
                <p><span class="time">09:00 - 12:30:</span> Orientation, UNESCO overview, Mission and
                    Values, Peace Education, Introduction to International Organizations (UNESCO, UN,
                    History)</p>
                <p><span class="time">12:30 - 14:00:</span> Lunch break</p>
                <p><span class="time">14:00 - 18:00:</span> Campus Tour</p>
            </div>
            <div class="schedule-item">
                <strong>July 9th (Tuesday) - Day 2: Intercultural Integration</strong>
                <p><span class="time">09:00 - 12:30:</span> Intercultural integration workshop</p>
                <p><span class="time">12:30 - 14:00:</span> Lunch break</p>
                <p><span class="time">14:00 - 18:00:</span> Counselling session & Volleyball</p>
            </div>
            <div class="schedule-item">
                <strong>July 10th (Wednesday) - Day 3: Cross-cultural Communication</strong>
                <p><span class="time">09:00 - 12:30:</span> Understanding and managing intercultural
                    conflicts</p>
                <p><span class="time">12:30 - 14:00:</span> Lunch break</p>
                <p><span class="time">14:00 - 18:00:</span> Istanbul Aquarium Tour</p>
            </div>
            <div class="schedule-item">
                <strong>July 11th (Thursday) - Day 4: International Relations</strong>
                <p><span class="time">09:00 - 12:30:</span> Concepts of International Relations</p>
                <p><span class="time">12:30 - 14:00:</span> Lunch break</p>
                <p><span class="time">14:00 - 18:00:</span> Counselling session & Table Tennis/Basketball
                </p>
            </div>
            <div class="schedule-item">
                <strong>July 12th (Friday) - Day 5: International Relations</strong>
                <p><span class="time">09:00 - 12:30:</span> Theories of International Relations</p>
                <p><span class="time">12:30 - 14:00:</span> Lunch break</p>
                <p><span class="time">14:00 - 18:00:</span> Koç Museum and Pierre Loti Tour</p>
            </div>
            <div class="schedule-item">
                <strong>July 13th (Saturday) - Weekend 1: Historical Peninsula Tour</strong>
                <p>Full day tour</p>
            </div>
            <div class="schedule-item">
                <strong>July 14th (Sunday) - Weekend 2: Bosphorus Boat Tour</strong>
                <p>Full day tour</p>
            </div>
            <div class="schedule-item">
                <strong>July 15th (Monday) - Day 6: Exploring Values</strong>
                <p><span class="time">09:00 - 12:30:</span> Human Dignity and Freedom</p>
                <p><span class="time">12:30 - 14:00:</span> Lunch break</p>
                <p><span class="time">14:00 - 18:00:</span> VIALAND Themepark Tour</p>
            </div>
            <div class="schedule-item">
                <strong>July 16th (Tuesday) - Day 7: Appreciation of Democratic Values</strong>
                <p><span class="time">09:00 - 12:30:</span> Democracy and Equality</p>
                <p><span class="time">12:30 - 14:00:</span> Lunch break</p>
                <p><span class="time">14:00 - 18:00:</span> Sports Activity</p>
            </div>
            <div class="schedule-item">
                <strong>July 17th (Wednesday) - Day 8: Emphasis on Legal and Human Rights</strong>
                <p><span class="time">09:00 - 12:30:</span> Rule of Law and Human Rights</p>
                <p><span class="time">12:30 - 14:00:</span> Lunch break</p>
                <p><span class="time">14:00 - 18:00:</span> Çamlıca Mosque and Tower Tour</p>
            </div>
            <div class="schedule-item">
                <strong>July 18th (Thursday) - Day 9: Student Presentations</strong>
                <p><span class="time">09:00 - 12:30:</span> Presentations on Education and Peace</p>
                <p><span class="time">12:30 - 14:00:</span> Lunch break</p>
                <p><span class="time">14:00 - 18:00:</span> Sports Activity</p>
            </div>
            <div class="schedule-item">
                <strong>July 19th (Friday) - Day 10: Graduation Day</strong>
                <p><span class="time">09:00 - 12:30:</span> University Life / Faculties overview</p>
                <p><span class="time">12:30 - 14:00:</span> Lunch break</p>
                <p><span class="time">14:00 - 18:00:</span> Graduation Ceremony</p>
            </div>
            <div class="schedule-item">
                <strong>July 20th (Saturday)</strong>
                <p>Departure of International Participants- No scheduled activities</p>
            </div>
            <div class="clear"><br><br></div>
        </div>
    </div>
</form>

<?php include "include/footer.php" ?>
<div class="info-container">
</div>
</div>
</div>
<script src="src/js/schedule.js"></script>
<script src="src/js/termsConditions.js"></script>
<script src="src/js/agree_terms.js"></script>