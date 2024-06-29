<?php
namespace App\Models;

require_once __DIR__ . '/../config/database.php';
use Illuminate\Database\Eloquent\Model;

class Student extends Model {
    protected $table = 'students';
    protected $fillable = [
        'submissionId',
        'first_name',
        'last_name',
        'gender',
        'Citizenship',
        'dateOfBirth',
        'Country_of_Residence',
        'Country_of_Visa',
        'Residence_Permit',
        'Turkish_Nationality',
        'country',
        'telephone',
        'home_address',
        'City',
        'Postal_Code',
        'fathers_full_name',
        'Occupation_first',
        'fathers_email',
        'fathers_telephone',
        'mothers_full_name',
        'Occupation_second',
        'mothers_email',
        'mothers_telephone',
        'passport_availablitiy',
        'Reguee_availablitiy',
        'Reguee_number',
        'Bachelor_University',
        'Bachelor_country',
        'Bachelor_gpa',
        'Start_Bachelor',
        'End_Bachelor',
        'Turkish_Proficiency',
        'English_Proficiency',
        'course',
        'work_experience',
        'brief_statement',
        'iban',

    ];

    public $timestamps = true;
}
