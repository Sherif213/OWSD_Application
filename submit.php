<?php
session_start();

require __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . '/config/database.php'; // Adjust path as necessary
require_once __DIR__ . '/models/Student.php'; // Adjust path as necessary
require_once __DIR__ . '/models/Attachment.php'; // Adjust path as necessary

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
        'Reguee_availablitiy' => $_POST['Reguee_availablitiy'],
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
        'personal_picture' => $_FILES['personal_picture']['name'],
        'personal_CV' => $_FILES['personal_CV']['name'],
        'passport_copy' => $_FILES['passport_copy']['name'],
        'Reguee_copy' => isset($_FILES['Reguee_copy']['name']) ? $_FILES['Reguee_copy']['name'] : null,
        'Bachelors_Diploma' => $_FILES['Bachelors_Diploma']['name'],
        'Bachelors_Transcript' => $_FILES['Bachelors_Transcript']['name'],
        'Equivalency_Paper' => $_FILES['Equivalency_Paper']['name'],
        'Turkish_Proficiency_Document' => $_FILES['Turkish_Proficiency_Document']['name'],
        'English_Proficiency_Document' => $_FILES['English_Proficiency_Document']['name'],
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
