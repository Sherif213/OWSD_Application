<?php
require __DIR__ . '/vendor/autoload.php';
use Illuminate\Database\Capsule\Manager as Capsule;

// Define the path to the log file
$logFile = __DIR__ . '/error.log';

// Enable error reporting
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

try {
    // Create a new Capsule Manager instance
    $capsule = new Capsule;

    // Set the database connection
    $capsule->addConnection([
        'driver' => 'mysql',
        'host' => 'localhost',
        'database' => 'owsd',
        'username' => 'root',
        'password' => '1532910',
        'charset' => 'utf8mb4',
        'collation' => 'utf8mb4_general_ci',
        'prefix' => '',
    ]);

    // Set the Capsule Manager instance as global
    $capsule->setAsGlobal();

    // Boot Eloquent ORM
    $capsule->bootEloquent();

    // Check if the 'students' table exists before creating it
    if (!Capsule::schema()->hasTable('students')) {
        // Create 'students' table
        Capsule::schema()->create('students', function ($table) {
            $table->increments('id');
            $table->string('submissionId')->unique();
            $table->string('first_name');
            $table->string('last_name')->nullable();
            $table->string('gender')->nullable();
            $table->string('Citizenship')->nullable();
            $table->date('dateOfBirth');
            $table->string('Country_of_Residence')->nullable();
            $table->string('Country_of_Visa')->nullable();
            $table->string('Residence_Permit')->nullable();
            $table->string('Turkish_Nationality')->nullable();
            $table->string('country')->nullable();
            $table->string('telephone')->nullable();
            $table->string('home_address')->nullable();
            $table->string('City')->nullable();
            $table->string('Postal_Code')->nullable();
            $table->string('fathers_full_name')->nullable();
            $table->string('Occupation_first')->nullable();
            $table->string('fathers_email')->nullable();
            $table->string('fathers_telephone')->nullable();
            $table->string('mothers_full_name')->nullable();
            $table->string('Occupation_second')->nullable();
            $table->string('mothers_email')->nullable();
            $table->string('mothers_telephone')->nullable();
            $table->string('passport_availablitiy')->nullable();
            $table->string('Reguee_availablitiy')->nullable();
            $table->string('Reguee_number')->nullable();
            $table->string('Bachelor_University')->nullable();
            $table->string('Bachelor_country')->nullable();
            $table->float('Bachelor_gpa')->nullable();
            $table->date('Start_Bachelor')->nullable();
            $table->date('End_Bachelor')->nullable();
            $table->string('Turkish_Proficiency')->nullable();
            $table->string('English_Proficiency')->nullable();
            $table->string('course');
            $table->text('work_experience')->nullable();
            $table->text('brief_statement')->nullable();
            $table->string('iban');
            $table->timestamps();
        });
        // Output a success message
        echo "Students table migration completed successfully.\n";
    } else {
        echo "Table 'students' already exists.\n";
    }

    // Check if the 'attachments' table exists before creating it
    if (!Capsule::schema()->hasTable('attachments')) {
        // Create 'attachments' table
        Capsule::schema()->create('attachments', function ($table) {
            $table->increments('id');
            $table->string('submissionId');
            $table->string('firstName');
            $table->string('personal_picture')->nullable();
            $table->string('personal_CV')->nullable();
            $table->string('passport_copy')->nullable();
            $table->string('Reguee_copy')->nullable();
            $table->string('Bachelors_Diploma')->nullable();
            $table->string('Bachelors_Transcript')->nullable();
            $table->string('Equivalency_Paper')->nullable();
            $table->timestamps();
        });
        // Output a success message
        echo "Attachments table migration completed successfully.\n";
    } else {
        echo "Table 'attachments' already exists.\n";
    }

} catch (\Exception $e) {
    // Log the error to a file
    file_put_contents($logFile, date('Y-m-d H:i:s') . ' - ERROR: ' . $e->getMessage() . PHP_EOL, FILE_APPEND);

    // Output a generic error message to the console
    echo "An error occurred. Please see the log file for details.\n";
}
?>