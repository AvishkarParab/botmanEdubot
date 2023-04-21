<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use App\Models\Admin;
use App\Models\Question;
use App\Models\Course;
use App\Models\Chapter;
use App\Models\Subtopic;
use Illuminate\Support\Facades\Http;

class AdminController extends Controller
{
    function getCredentials(Request $req){

        $req->validate([
            'name'=>'required',
            'password'=>'required | max:10'
        ]);
        $name = $req->input('name');
        $password = $req->input('password');

        $data = Admin::where('name',$name )->where('password',$password );
        
        if($data){
            $req->session()->put('adminName', $name);
            return redirect('adminhome');
        }

        // return $req->input('name');/
    }

    function getUploadFile(Request $req){
        return $req->file('file')->store('img');
    }

    function addQuestion(Request $req){

        // echo "reached";
        // echo $req->input('qtype');
        // echo $req->input('shortquest');

        // $req->validate([
        //     'qtype'=>'required',
        //     'quest'=>'required'
        // ]);
        $question = new Question;
        $question->qtype = $req->qtype;
        $question->quest = $req->quest;
        $question->opt1 = null;
        $question->opt2 = null;
        $question->opt3 = null;
        $question->opt4 = null;
        $question->correctopt = null;
        $question->imgLink = null;
        $question->vidLink = null;

        if($req->qtype === "mcq2"){

            $question->opt1 = $req->opt2_1;
            $question->opt2 = $req->opt2_2;
            $question->correctopt = $req->correctOpt2;
        }else if($req->qtype === "mcq4"){
            $question->opt1 = $req->opt4_1;
            $question->opt2 = $req->opt4_2;
            $question->opt3 = $req->opt4_3;
            $question->opt4 = $req->opt4_4;
            $question->correctopt = $req->correctOpt4;
        }else if($req->qtype === "chk2"){

            $question->opt1 = $req->chkopt2_1;
            $question->opt2 = $req->chkopt2_2;
            $question->correctopt = implode(",", $req->correctchkopt2);            
        }else if($req->qtype === "chk4"){

            $question->opt1 = $req->chkopt4_1;
            $question->opt2 = $req->chkopt4_2;
            $question->opt3 = $req->chkopt4_3;
            $question->opt4 = $req->chkopt4_4;
            $question->correctopt = implode(",", $req->correctchkopt4);
        }
        $question->imgLink=$req->imgLink;
        $question->vidLink=$req->vidLink;

        $question->save();
        // echo $question;
        return redirect('adminhome');

    }
    function getQuestion(){
        $data = Question::all();
        return view('manageQuest.viewquestion',['data'=>$data]);

    }

    function addCourse(Request $req){
        $course = new Course;
        $course->courseName=$req->courseName;
        $course->classID=$req->grade;
        $course->save();

        return redirect('addchapter');
        
        // return redirect('adminhome');
    }
    function getCourse(){
        $data = Course::all();
        return view('manageCourse.viewCourse',['data'=>$data]);
    }
    function editCourse(){
        $data = Course::all();
        return view('manageCourse.editCourse',['data'=>$data]);
    }
    function getChapter(){
        $data = Chapter::all();
        return view('manageChapter.viewchapter',['data'=>$data]);
    }
    function getSubTopic(){
        $data = Subtopic::all();
        return view('manageSubtopic.viewsubtopic',['data'=>$data]);
    }
    function addChapter(Request $req){
        $chapter = new Chapter;
        $chapter->chapterName=$req->chapterName;
        $chapter->courseID=$req->courseId;
        $chapter->save();

        return redirect('addsubtopic');
    }
    function getCourseChapter(){
        $data = Course::all();
        return view('manageChapter.chapterConfig',['data'=>$data]);
    }

    function getCourseAddChapter(){
        $data = Course::all();
        return view('manageChapter.addchapter',['data'=>$data]);
    }
    function addSubtopic(Request $req){
        $subtopic = new Subtopic;
        $subtopic->subtopicName=$req->subtopicName;
        $subtopic->chapterID=$req->chapterId;
        $subtopic->save();

        return redirect('addquestion');
    }
    function getSubtopicChapter(){
        $data = Chapter::all();
        return view('manageSubtopic.addSubtopic',['data'=>$data]);
    }
    function adminDetails(){
        $data = Admin::all();
        return view('adminLogin',['data'=>$data]);
    }
}