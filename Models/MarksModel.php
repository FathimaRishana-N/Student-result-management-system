<?php
namespace App\Models;

use CodeIgniter\Model;

class MarksModel extends Model
{
    protected $table = 'marks';
    protected $allowedFields = ['student_id','subject_id','marks']; 
    protected $validationRules = ['student_id' => 'required',
        'subject_id' => 'required','marks' => 'required'];
        public function getMarksWithSubjectNames($studentId)
        {
            // Select marks with subject names based on student ID
            $this->select('marks.marks, subjects.subject_name')
                 ->join('subjects', 'subjects.id = marks.subject_id')
                 ->where('marks.student_id', $studentId);
    
            return $this->findAll();
        }    
}