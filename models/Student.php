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
        'Residence_Permit',
        'personal_email',
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
        'Reguee_number',
        'issueing_country',
        'Bachelor_University',
        'Bachelor_program',
        'Bachelor_country',
        'Bachelor_gpa',
        'Start_Bachelor',
        'End_Bachelor',
        'Turkish_Proficiency',
        'English_Proficiency',
        'course',
        'work_experience',
        'brief_statement',
    ];

    public $timestamps = true;
}
