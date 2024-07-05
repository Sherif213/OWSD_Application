<?php
session_start();

if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    header("Location: /"); 
    exit;
}
require_once __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . '/config/database.php';

use Illuminate\Database\Capsule\Manager as Capsule;

$students = Capsule::table('students')->get();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="aydin University" href="images/IAU.png">
    <title>Admin Panel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="stylesheet" href="src/css/admin.css">
</head>

<body>
    <div>
        <h1>Admin Panel - Student Data</h1>
        <div class="btn-group mb-3">
            <a href="export.php?format=csv" class="btn btn-primary">Export as CSV</a>
        </div>
        <div>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Submission ID</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Gender</th>
                        <th>Country of Origin</th>
                        <th>date Of Birth</th>
                        <th>Country of Residence</th>
                        <th>Residence Permit</th>
                        <th>country</th>
                        <th>telephone</th>
                        <th>home address</th>
                        <th>City</th>
                        <th>Postal Code</th>
                        <th>Father's Full Name</th>
                        <th>Father's Occupation</th>
                        <th>Father's Email</th>
                        <th>Father's Telephone</th>
                        <th>Mother's Full Name</th>
                        <th>Mother's Occupation</th>
                        <th>Mother's Email</th>
                        <th>Mother's Telephone</th>
                        <th>passport availablitiy</th>
                        <th>Reguee_availablitiy</th>
                        <th>Reguee number</th>
                        <th>issueing country</th>
                        <th>Bachelor University</th>
                        <th>Bachelor program</th>
                        <th>Bachelor country</th>
                        <th>Bachelor gpa</th>
                        <th>Start Bachelor</th>
                        <th>End Bachelor</th>
                        <th>Turkish Proficiency</th>
                        <th>English Proficiency</th>
                        <th>Student Certificate</th>
                        <th>Program</th>
                        <th>work_experience</th>
                        <th>Recommendation Letter</th>
                        <th>brief_statement</th>
                        <th>personal_picture</th>
                        <th>personal_CV</th>
                        <th>passport_copy</th>
                        <th>Reguee_copy</th>
                        <th>Bachelors_Diploma</th>
                        <th>Bachelors_Transcript</th>
                        <th>Equivalency_Paper</th>
                        <th>Turkish_Proficiency_Document</th>
                        <th>English_Proficiency_Document</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($students as $index => $student): ?>
                        <?php
                        // Retrieve attachment data for the current student
                        $attachment = Capsule::table('attachments')->where('submissionId', $student->submissionId)->first();
                        ?>
                        <tr class="<?php echo ($index % 2 == 0) ? 'even' : ''; ?>">
                            <td><?php echo $student->id; ?></td>
                            <td><?php echo $student->submissionId; ?></td>
                            <td><?php echo $student->first_name; ?></td>
                            <td><?php echo $student->last_name; ?></td>
                            <td><?php echo $student->gender; ?></td>
                            <td><?php echo $student->Citizenship; ?></td>
                            <td><?php echo $student->dateOfBirth; ?></td>
                            <td><?php echo $student->Country_of_Residence; ?></td>
                            <td><?php echo $student->Residence_Permit; ?></td>
                            <td><?php echo $student->country; ?></td>
                            <td><?php echo $student->telephone; ?></td>
                            <td><?php echo $student->home_address; ?></td>
                            <td><?php echo $student->City; ?></td>
                            <td><?php echo $student->Postal_Code; ?></td>
                            <td><?php echo $student->fathers_full_name; ?></td>
                            <td><?php echo $student->Occupation_first; ?></td>
                            <td><?php echo $student->fathers_email; ?></td>
                            <td><?php echo $student->fathers_telephone; ?></td>
                            <td><?php echo $student->mothers_full_name; ?></td>
                            <td><?php echo $student->Occupation_second; ?></td>
                            <td><?php echo $student->mothers_email; ?></td>
                            <td><?php echo $student->mothers_telephone; ?></td>
                            <td><?php echo $student->passport_availablitiy; ?></td>
                            <td><?php echo $student->Reguee_availablitiy; ?></td>
                            <td><?php echo $student->Reguee_number; ?></td>
                            <td><?php echo $student->issueing_country; ?></td>
                            <td><?php echo $student->Bachelor_University; ?></td>
                            <td><?php echo $student->Bachelor_program; ?></td>
                            <td><?php echo $student->Bachelor_country; ?></td>
                            <td><?php echo $student->Bachelor_gpa; ?></td>
                            <td><?php echo $student->Start_Bachelor; ?></td>
                            <td><?php echo $student->End_Bachelor; ?></td>
                            <td><?php echo $student->Turkish_Proficiency; ?></td>
                            <td><?php echo $student->English_Proficiency; ?></td>
                            <td><?php echo $student->course; ?></td>
                            <td><?php echo $student->work_experience; ?></td>
                            <td><?php echo $student->brief_statement; ?></td>
                            <td><a href="/uploads/<?php echo $student->first_name."/". $attachment->personal_picture; ?>"><?php echo isset($attachment->personal_picture) ? $attachment->personal_picture : ''; ?></a></td>
                            <td><a href="/uploads/<?php echo $student->first_name."/". $attachment->personal_CV; ?>"><?php echo isset($attachment->personal_CV) ? $attachment->personal_CV : ''; ?></a></td>
                            <td><a href="/uploads/<?php echo $student->first_name."/". $attachment->passport_copy; ?>"><?php echo isset($attachment->passport_copy) ? $attachment->passport_copy : ''; ?></a></td>
                            <td><a href="/uploads/<?php echo $student->first_name."/". $attachment->Reguee_copy; ?>"><?php echo isset($attachment->Reguee_copy) ? $attachment->Reguee_copy : ''; ?></td>
                            <td><a href="/uploads/<?php echo $student->first_name."/". $attachment->Bachelors_Diploma; ?>"><?php echo isset($attachment->Bachelors_Diploma) ? $attachment->Bachelors_Diploma : ''; ?></td>
                            <td><a href="/uploads/<?php echo $student->first_name."/". $attachment->Bachelors_Transcript; ?>"><?php echo isset($attachment->Bachelors_Transcript) ? $attachment->Bachelors_Transcript : ''; ?></td>
                            <td><a href="/uploads/<?php echo $student->first_name."/". $attachment->Equivalency_Paper; ?>"><?php echo isset($attachment->Equivalency_Paper) ? $attachment->Equivalency_Paper : ''; ?></td>
                            <td><a href="/uploads/<?php echo $student->first_name."/". $attachment->Turkish_Proficiency_Document; ?>"><?php echo isset($attachment->Turkish_Proficiency_Document) ? $attachment->Turkish_Proficiency_Document : ''; ?></td>
                            <td><a href="/uploads/<?php echo $student->first_name."/". $attachment->English_Proficiency_Document; ?>"><?php echo isset($attachment->English_Proficiency_Document) ? $attachment->English_Proficiency_Document : ''; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
    <script>
    var timeout;

    function resetTimer() {
        clearTimeout(timeout);
        timeout = setTimeout(function () {
            <?php $_SESSION['logged_in'] = false; ?>;
            window.location.href = '/secretAdmin';
        }, 300000);
    }

    document.addEventListener('mousemove', resetTimer);
    document.addEventListener('mousedown', resetTimer);
    document.addEventListener('keypress', resetTimer);
</script>
</body>

</html>