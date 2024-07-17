<?php
session_start();

require __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . '/config/database.php'; // Adjust path as necessary
require_once __DIR__ . '/models/Student.php'; // Adjust path as necessary
require_once __DIR__ . '/models/Attachment.php'; // Adjust path as necessary

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use App\Models\Student;
use App\Models\Attachment;

// Define the path to the log file
$logFile = __DIR__ . '/debug.log';

// Function to retrieve country name based on nationality value
function getCountryName($nationalityValue)
{
    global $capsule; // Assuming $capsule contains the Eloquent Capsule

    // Use Eloquent to query the database
    $country = $capsule->getConnection()->table('Countries')->where('value', $nationalityValue)->first();

    if ($country) {
        return $country->name;
    } else {
        return null; // Handle case where country is not found
    }
}

function createNewStudent($studentData)
{
    try {
        writeToLog("Creating new student...\n");
        $newStudent = Student::create($studentData);
        writeToLog("New student created successfully.\n");
        return $newStudent;
    } catch (Exception $e) {
        throw new Exception($e->getMessage());
    }
}

function createNewAttachment($imageData)
{
    try {
        writeToLog("Creating new attachment...\n");
        $newAttachment = Attachment::create($imageData);
        writeToLog("New attachment created successfully.\n");
        return $newAttachment;
    } catch (Exception $e) {
        throw new Exception($e->getMessage());
    }
}

function sendNotificationEmail($studentData, $imageData)
{
    $mail = new PHPMailer(true);
    try {
        // Server settings
        $mail->isSMTP();
        $mail->Host = 'smtp.mail.ru';
        $mail->SMTPAuth = true;
        $mail->Username = 'shouldtheone@mail.ru'; 
        $mail->Password = 'whupyvhXJJ5Sdan10vAC'; 
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; // Use PHPMailer::ENCRYPTION_STARTTLS if you use port 587
        $mail->Port = 465;

        // Recipients
        $mail->setFrom('shouldtheone@mail.ru', 'Your Application System'); 
        $mail->addAddress('Shouldtheone@gmail.com', 'Serif'); 
        $mail->addAddress('abonar213@gmail.com', 'Ahmed');

        $uploadDir = 'http://localhost:3000/uploads/' . $studentData['first_name'] . '/';
        $fileLinks = [];
        foreach ($imageData as $key => $filename) {
            if ($filename) {
                $fileLinks[$key] = "<a href=\"{$uploadDir}{$filename}\">{$filename}</a>";
            } else {
                $fileLinks[$key] = '';
            }
            // Log the filename and link for debugging
            writeToLog("Filename for {$key}: {$filename}\n");
            writeToLog("Generated link for {$key}: {$fileLinks[$key]}\n");
        }

        // Content
        $mail->isHTML(true);
        $mail->Subject = 'New Applicant Submission for owsd';
        $mail->Body = "
        <html>
        <body>
            <h2>New Applicant Submission</h2>
            <table border='1' cellpadding='10'>
                <tr><th>Field</th><th>Value</th></tr>
                <tr><td>First Name</td><td>{$studentData['first_name']}</td></tr>
                <tr><td>Last Name</td><td>{$studentData['last_name']}</td></tr>
                <tr><td>Gender</td><td>{$studentData['gender']}</td></tr>
                <tr><td>Citizenship</td><td>{$studentData['Citizenship']}</td></tr>
                <tr><td>Date of Birth</td><td>{$studentData['dateOfBirth']}</td></tr>
                <tr><td>Country of Residence</td><td>{$studentData['Country_of_Residence']}</td></tr>
                <tr><td>Residence Permit</td><td>{$studentData['Residence_Permit']}</td></tr>
                <tr><td>Personal Email</td><td>{$studentData['personal_email']}</td></tr>
                <tr><td>Country</td><td>{$studentData['country']}</td></tr>
                <tr><td>Telephone</td><td>{$studentData['telephone']}</td></tr>
                <tr><td>Home Address</td><td>{$studentData['home_address']}</td></tr>
                <tr><td>City</td><td>{$studentData['City']}</td></tr>
                <tr><td>Postal Code</td><td>{$studentData['Postal_Code']}</td></tr>
                <tr><td>Father's Full Name</td><td>{$studentData['fathers_full_name']}</td></tr>
                <tr><td>Father's Occupation</td><td>{$studentData['Occupation_first']}</td></tr>
                <tr><td>Father's Email</td><td>{$studentData['fathers_email']}</td></tr>
                <tr><td>Father's Telephone</td><td>{$studentData['fathers_telephone']}</td></tr>
                <tr><td>Mother's Full Name</td><td>{$studentData['mothers_full_name']}</td></tr>
                <tr><td>Mother's Occupation</td><td>{$studentData['Occupation_second']}</td></tr>
                <tr><td>Mother's Email</td><td>{$studentData['mothers_email']}</td></tr>
                <tr><td>Mother's Telephone</td><td>{$studentData['mothers_telephone']}</td></tr>
                <tr><td>Passport Availability</td><td>{$studentData['passport_availablitiy']}</td></tr>
                <tr><td>Refugee Number</td><td>{$studentData['Reguee_number']}</td></tr>
                <tr><td>Issuing Country</td><td>{$studentData['issueing_country']}</td></tr>
                <tr><td>Bachelor University</td><td>{$studentData['Bachelor_University']}</td></tr>
                <tr><td>Bachelor Program</td><td>{$studentData['Bachelor_program']}</td></tr>
                <tr><td>Bachelor Country</td><td>{$studentData['Bachelor_country']}</td></tr>
                <tr><td>Bachelor GPA</td><td>{$studentData['Bachelor_gpa']}</td></tr>
                <tr><td>Start Bachelor</td><td>{$studentData['Start_Bachelor']}</td></tr>
                <tr><td>End Bachelor</td><td>{$studentData['End_Bachelor']}</td></tr>
                <tr><td>Turkish Proficiency</td><td>{$studentData['Turkish_Proficiency']}</td></tr>
                <tr><td>English Proficiency</td><td>{$studentData['English_Proficiency']}</td></tr>
                <tr><td>Course</td><td>{$studentData['course']}</td></tr>
                <tr><td>Work Experience</td><td>{$studentData['work_experience']}</td></tr>
                <tr><td>Brief Statement</td><td>{$studentData['brief_statement']}</td></tr>
                <tr><td>Personal Picture</td><td>{$fileLinks['personal_picture']}</td></tr>
                <tr><td>Personal CV</td><td>{$fileLinks['personal_CV']}</td></tr>
                <tr><td>Passport Copy</td><td>{$fileLinks['passport_copy']}</td></tr>
                <tr><td>Refugee Copy</td><td>{$fileLinks['Reguee_copy']}</td></tr>
                <tr><td>Bachelor's Diploma</td><td>{$fileLinks['Bachelors_Diploma']}</td></tr>
                <tr><td>Bachelor's Transcript</td><td>{$fileLinks['Bachelors_Transcript']}</td></tr>
                <tr><td>Equivalency Paper</td><td>{$fileLinks['Equivalency_Paper']}</td></tr>
                <tr><td>Turkish Proficiency Document</td><td>{$fileLinks['Turkish_Proficiency_Document']}</td></tr>
                <tr><td>English Proficiency Document</td><td>{$fileLinks['English_Proficiency_Document']}</td></tr>
            </table>
        </body>
        </html>";

        $mail->send();
        writeToLog("Notification email sent successfully.\n");
    } catch (Exception $e) {
        writeToLog("ERROR: Could not send email. Mailer Error: {$mail->ErrorInfo}\n");
    }
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    writeToLog("Processing form submission...\n");

    // Establish database connection if not already done
    require_once __DIR__ . '/config/database.php'; // Adjust path as necessary

    // Prepare student data
    $nationalityValue = $_POST['Citizenship'];
    $countryName = getCountryName($nationalityValue);
    $nationalityValue2 = $_POST['Country_of_Residence'];
    $countryName2 = getCountryName($nationalityValue2);
    $nationalityValue3 = $_POST['country'];
    $countryName3 = getCountryName($nationalityValue3);
    $nationalityValue4 = $_POST['Bachelor_country'];
    $countryName4 = getCountryName($nationalityValue4);
    $nationalityValue5 = $_POST['issueing_country'];
    $countryName5 = getCountryName($nationalityValue5);

    $studentData = [
        'submissionId' => uniqid(),
        'first_name' => $_POST['first_name'],
        'last_name' => $_POST['last_name'],
        'gender' => $_POST['gender'],
        'Citizenship' => $countryName,
        'dateOfBirth' => $_POST['date_of_birth'],
        'Country_of_Residence' => $countryName2,
        'Residence_Permit' => $_POST['Residence_Permit'],
        'personal_email' => $_POST['personal_email'],
        'country' => $countryName3,
        'telephone' => $_POST['telephone'],
        'home_address' => $_POST['home_address'],
        'City' => $_POST['City'],
        'Postal_Code' => $_POST['Postal_Code'],
        'fathers_full_name' => $_POST['fathers_full_name'],
        'Occupation_first' => $_POST['Occupation_first'],
        'fathers_email' => $_POST['fathers_email'],
        'fathers_telephone' => $_POST['fathers_telephone'],
        'mothers_full_name' => $_POST['mothers_full_name'],
        'Occupation_second' => $_POST['Occupation_second'],
        'mothers_email' => $_POST['mothers_email'],
        'mothers_telephone' => $_POST['mothers_telephone'],
        'passport_availablitiy' => $_POST['passport_availablitiy'],
        'Reguee_number' => isset($_POST['Reguee_number']) ? $_POST['Reguee_number'] : null,
        'issueing_country' => $countryName5,
        'Bachelor_University' => $_POST['Bachelor_University'],
        'Bachelor_program' => $_POST['Bachelor_program'],
        'Bachelor_country' => $countryName4,
        'Bachelor_gpa' => $_POST['Bachelor_gpa'],
        'Start_Bachelor' => $_POST['Start_Bachelor'],
        'End_Bachelor' => $_POST['End_Bachelor'],
        'Turkish_Proficiency' => $_POST['Turkish_Proficiency'],
        'English_Proficiency' => $_POST['English_Proficiency'],
        'course' => $_POST['course'],
        'work_experience' => $_POST['work_experience'],
        'brief_statement' => $_POST['brief_statement'],
    ];

    // Prepare image data
    $imageData = [
        'submissionId' => $studentData['submissionId'],
        'first_name' => $_POST['first_name'],
        'personal_picture' => $_FILES['personal_picture']['name'] ?? '',
        'personal_CV' => $_FILES['personal_CV']['name'] ?? '',
        'passport_copy' => $_FILES['passport_copy']['name'] ?? '',
        'Reguee_copy' => $_FILES['Reguee_copy']['name'] ?? '',
        'Bachelors_Diploma' => $_FILES['Bachelors_Diploma']['name'] ?? '',
        'Bachelors_Transcript' => $_FILES['Bachelors_Transcript']['name'] ?? '',
        'Equivalency_Paper' => $_FILES['Equivalency_Paper']['name'] ?? '',
        'Turkish_Proficiency_Document' => $_FILES['Turkish_Proficiency_Document']['name'] ?? '',
        'English_Proficiency_Document' => $_FILES['English_Proficiency_Document']['name'] ?? ''
    ];
    

    try {
        writeToLog("Creating upload directory...\n");

        // Create directory if it doesn't exist
        $uploadDir = 'uploads/' . $studentData['first_name'] . '/';
        if (!file_exists($uploadDir)) {
            mkdir($uploadDir, 0777, true); // Creates the directory recursively
            writeToLog("Upload directory created: $uploadDir\n");
        }

        writeToLog("Creating new student and attachment...\n");

        // Create new student and attachment records
        $newStudent = createNewStudent($studentData);
        $newAttachment = createNewAttachment($imageData);

        // Handle file uploads
        move_uploaded_file($_FILES['personal_picture']['tmp_name'], $uploadDir . $_FILES['personal_picture']['name']);
        move_uploaded_file($_FILES['personal_CV']['tmp_name'], $uploadDir . $_FILES['personal_CV']['name']);
        move_uploaded_file($_FILES['passport_copy']['tmp_name'], $uploadDir . $_FILES['passport_copy']['name']);
        if (isset($_FILES['Reguee_copy'])) {
            move_uploaded_file($_FILES['Reguee_copy']['tmp_name'], $uploadDir . $_FILES['Reguee_copy']['name']);
        }
        move_uploaded_file($_FILES['Bachelors_Diploma']['tmp_name'], $uploadDir . $_FILES['Bachelors_Diploma']['name']);
        move_uploaded_file($_FILES['Bachelors_Transcript']['tmp_name'], $uploadDir . $_FILES['Bachelors_Transcript']['name']);
        move_uploaded_file($_FILES['Equivalency_Paper']['tmp_name'], $uploadDir . $_FILES['Equivalency_Paper']['name']);
        move_uploaded_file($_FILES['Turkish_Proficiency_Document']['tmp_name'], $uploadDir . $_FILES['Turkish_Proficiency_Document']['name']);
        move_uploaded_file($_FILES['English_Proficiency_Document']['tmp_name'], $uploadDir . $_FILES['English_Proficiency_Document']['name']);
        writeToLog("Data insertion successful.\n");

        // Send notification email
        sendNotificationEmail($studentData,$imageData);
        // Redirect to success page
        header('Location: /SuccessfulRegistration');
        exit;
    } catch (Exception $e) {
        // Log the error and display a generic error message
        writeToLog("ERROR: " . $e->getMessage() . "\n");
        echo 'Form submission failed. Please try again later.';
    }
} else {
    // Redirect back to the form page if the request method is not POST
    header('Location: /');
    exit;
}

function writeToLog($message)
{
    global $logFile;
    file_put_contents($logFile, date('Y-m-d H:i:s') . ' - ' . $message, FILE_APPEND);
}
?>
