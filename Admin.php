<?php
namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\AdminModel;
use App\Models\ClassModel;
use App\Models\StudentModel;
use App\Models\SubjectModel;
use App\Models\MarksModel;


class Admin extends BaseController
{
    public function home()
    {
        return view('Home');
    }
    public function register()
    {
        return view('register');
    }
    public function admindata()
    {
        $adminModel=new AdminModel;
        if (!$this->validate($adminModel->validationRules)) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->to(base_url('/register'));
        }    
        $id = $adminModel->insert($this->request->getpost()); //insert data to database
        if($id){
            session()->setFlashdata('success', 'Successfully registered');
        }
        return redirect()->to(base_url('/'));
    }
    public function adminlogin(){
        $adminModel =new AdminModel;
        $postData = $this->request->getPost();
        $username = $postData['username'] ?? null;
        $password = $postData['password'] ?? null;
        $existingRecord = $adminModel->where('username', $username)->where('password', $password)->first();
        if($existingRecord)
        {
            return redirect()->to(base_url('/Admin'));
        }
        else{
            return redirect()->to(base_url('/'))->with("message","username or password incorrect");
        }
    }
    public function dashboard()
    {
        return view('Admin/dashboard');
    }
    public function studentform()
    {
            $classModel = new ClassModel();
            $data['classes'] = $classModel->findAll();
            return view('Admin/studentform', $data);
    }
    public function classform()
    {
        return view('Admin/classform');
    }
    public function classdata()
    {
        $classModel = new ClassModel;
        $data=$classModel->insert($this->request->getPost());
        if($data === false){
            return redirect()->back()->with("errors",$classModel->errors());
        }
        return redirect()->to(base_url('/Admin'))->with("message","class added");
    }
    public function studentdata()
    {
        $studentModel =new StudentModel;
        $postData = $this->request->getPost();
        $rollnumber = $postData['rollNo'] ?? null;
        $classname = $postData['class'] ?? null;
        $existingRecord = $studentModel->where('rollNo', $rollnumber)->where('class', $classname)->first();
        if($existingRecord)
        {
            return redirect()->back()->withInput()->with('errors', ['The roll number already exists in this class.']);
        }
        $data=$studentModel->insert($postData);
        if($data === false){
            return redirect()->back()->with("errors",$studentModel->errors());
        }
        return redirect()->to(base_url('/Admin'))->with("message","class added");
    }
    public function viewclass(){
        $classModel = new ClassModel;
        $data['class']=$classModel->findAll();
        return view('Admin/viewclass',$data);    
    }
    public function viewstudents(){
        $studentModel = new StudentModel;
        $data['students']=$studentModel->findAll();
        return view('Admin/viewstudents',$data);    
    }
    public function editstudent($id)
    {
        $studentModel=new StudentModel;
        $data['student']=$studentModel->find($id);
        return view('Admin/editstudent',$data);
    }
    public function studentupdate($id)
    {
        $studentModel=new StudentModel;
        $data=[
            'rollNo'=>$this->request->getPost('rollNo'),
            'name'=>$this->request->getPost('name'),
            'class'=>$this->request->getPost('class'),
        ];
        $studentModel->update($id,$data);
        return redirect()->to(base_url('/viewstudents'))->with('status','student updated succesfully');
    }
    public function deletestudent($id)
    {
        $studentModel=new StudentModel;
        $studentModel->delete($id);
        return redirect()->to(base_url('/viewstudents'))->with('status','deleted successfully');
    }
    public function subjectadd()
    {
        return view('Admin/subjectadd');
    }
    public function subjectdata()
    {
        $subjectModel = new SubjectModel;
        $data=$subjectModel->insert($this->request->getPost());
        if($data === false){
            return redirect()->back()->with("errors",$subjectModel->errors());
        }
        return redirect()->to(base_url('/Admin'))->with("message","subject added");
    }
    public function viewsubject()
    {
        $subjectModel = new SubjectModel;
        $data['subject']=$subjectModel->findAll();
        return view('Admin/viewsubject',$data);    
    }
    public function addmarks()
    {
        return view('Admin/addmarks');
    }
    public function marksadding()
    {
        $studentModel = new StudentModel();
        $subjectModel = new SubjectModel();
        $studentId = $this->request->getPost('student_id');
        $subjectId = $this->request->getPost('subject_id');
        if (!$studentModel->find($studentId) || !$subjectModel->find($subjectId)) {
            return redirect()->to(base_url('/addmarks'))->withInput()->with('errors', ['Student or subject not found.']);
        }
        $marksModel = new MarksModel();
        $data = [
            'student_id' => $studentId,
            'subject_id' => $subjectId,
            'marks' => $this->request->getPost('marks')
        ];
        if ($marksModel->insert($data) === false) {
            return redirect()->to(base_url('/addmarks'))->withInput()->with('errors', ['Failed to add marks.']);
        }

        return redirect()->to(base_url('/Admin'))->with('message', 'Marks added successfully.');
    }
    public function viewmarks(){
        $marksModel = new MarksModel;
        $data['marks']=$marksModel->findAll();
        return view('Admin/viewmarks',$data);    
    }
    public function deletesubject($id)
    {
        $subjectModel=new SubjectModel;
        $subjectModel->delete($id);
        return redirect()->to(base_url('/viewsubject'))->with('status','deleted successfully');
    }
    public function studentlogin(){
        $rollNumber = $this->request->getPost('roll_no');
        $className = $this->request->getPost('class_name');
        if(!empty($rollNumber) && !empty($className)) {
            $studentModel = new StudentModel;
            $student = $studentModel->where('rollNo', $rollNumber)->where('class', $className)->first();
            if ($student) {
                $marksModel = new MarksModel();
                $marks = $marksModel->getMarksWithSubjectNames($student['id']);
                return view('Student/studentmarks', ['student' => $student, 'marks' => $marks]);
            } else {
                return redirect()->to(base_url('/'))->with("error", "Student not found.");
            }
        } else {
            return redirect()->to(base_url('/'))->with("error", "Please provide both roll number and class.");
        }
            }
}
?>