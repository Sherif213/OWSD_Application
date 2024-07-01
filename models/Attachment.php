<?php
namespace App\Models;

require_once __DIR__ . '/../config/database.php'; // Adjust the path if necessary
use Illuminate\Database\Eloquent\Model;

class Attachment extends Model {
    protected $table = 'attachments'; // Table name

    protected $fillable = [
        'submissionId',
        'first_name',
        'personal_picture',
        'personal_CV',
        'passport_copy',
        'Reguee_copy',
        'Bachelors_Diploma',
        'Bachelors_Transcript',
        'Equivalency_Paper',
        'Turkish_Proficiency_Document',
        'English_Proficiency_Document',
    ];

    public $timestamps = true; // Enable timestamps (created_at and updated_at)
}