<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Input;
use Hash;
use App\cvinfo;
use App\extracurriculam;
use App\skill;
use App\achievement;
use App\reference;
use PDF;


class cvController extends Controller
{
    public function index()
    {
        return view('createCV');
    }
    public function submit(request $cv)
    {

                                             
            $cvinfos = new cvinfo;
            $extracurriculams = new extracurriculam;
            $skills = new skill;
            $achievements = new achievement;
            $references = new reference;


            $name = $cv -> input('name');
            $email = $cv -> input('email');
            $presentAddress = $cv -> input('presentAddress');
            $mobileNumber = $cv -> input('mobileNumber');
            $birthdate = $cv -> input('birthdate');
            $carrierObjective = $cv -> input('carrierObjective');
            $fatherName = $cv -> input('fatherName');
            $motherName = $cv -> input('motherName');
            $permanantAddress = $cv -> input('permanantAddress');
            $presentAddress = $cv -> input('presentAddress');
            $nationality = $cv -> input('nationality');
            $maritialState = $cv -> input('maritialState');
            $religion = $cv -> input('religion');
            $bloodGroup = $cv -> input('bloodGroup');
            $uDepartment = $cv -> input('uDepartment');
            $uUniversity = $cv -> input('uUniversity');
            $uPassingYear = $cv -> input('uPassingYear');
            $uCgpa = $cv -> input('uCgpa');
            $pDepartment = $cv -> input('pDepartment');
            $pUniversity = $cv -> input('pUniversity');
            $pPassingYear = $cv -> input('pPassingYear');
            $pCgpa = $cv -> input('pCgpa');
            $sDepartment = $cv -> input('sDepartment');
            $sBoard = $cv -> input('sBoard');


            $sPassingYear = $cv -> input('sPassingYear');
            $sgpa = $cv -> input('sgpa');
            $sInstitute = $cv -> input('sInstitute');
            $hDepartment = $cv -> input('hDepartment');
            $hBoard = $cv -> input('hBoard');
            $hPassingYear = $cv -> input('hPassingYear');
            $hgpa = $cv -> input('hgpa');
            $hInstitute = $cv -> input('hInstitute');
            $image = $cv -> file('image');

            $extracurriculam1 = $cv -> input('extraCurriculam1');
            $extracurriculam2 = $cv -> input('extraCurriculam2');
            $extracurriculam3 = $cv -> input('extraCurriculam3');
            $extracurriculam4 = $cv -> input('extraCurriculam4');
            $skill1 = $cv -> input('skill1');
            $skill2 = $cv -> input('skill2');
            $skill3 = $cv -> input('skill3');
            $skill4 = $cv -> input('skill4');
            $achievement1 = $cv -> input('achievement1');
            $achievement2 = $cv -> input('achievement2');
            $achievement3 = $cv -> input('achievement3');
            $achievement4 = $cv -> input('achievement4');
            $refname = $cv -> input('refname');
            $refdesignation = $cv -> input('refdesignation');
            $refinstitute = $cv -> input('refinstitute');
            $refphone = $cv -> input('refphone');
            $refemail = $cv -> input('refemail');
            $refname1 = $cv -> input('refnameone');
            $refdesignation1 = $cv -> input('refdesignationone');
            $refinstitute1 = $cv -> input('refinstituteone');
            $refphone1 = $cv -> input('refphoneone');
            $refemail1 = $cv -> input('refemailone');


            //$file = Input::file('image');
            //$file->move(public_path().'frontend/images/uploads',$file)->getClientOrginalName();
            





            $cvinfos -> uid = session('data1');
            $cvinfos -> name = $cv -> input('name');
            $cvinfos -> email = $cv -> input('email');
            $cvinfos -> birthdate = $cv -> input('birthdate');
            $cvinfos -> mobileNumber = $cv -> input('mobileNumber');
            $cvinfos -> carrierObjective = $cv -> input('carrierObjective');
            $cvinfos -> fatherName = $cv -> input('fatherName');
            $cvinfos -> motherName = $cv -> input('motherName');
            $cvinfos -> permanantAddress = $cv -> input('permanantAddress');
            $cvinfos -> presentAddress = $cv -> input('presentAddress');
            $cvinfos -> nationality = $cv -> input('nationality');
            $cvinfos -> maritialState = $cv -> input('maritialState');
            $cvinfos -> religion = $cv -> input('religion');
            $cvinfos -> bloodGroup = $cv -> input('bloodGroup');
            $cvinfos -> uDepartment = $cv -> input('uDepartment');
            $cvinfos -> uUniversity = $cv -> input('uUniversity');
            $cvinfos -> uPassingYear = $cv -> input('uPassingYear');
            $cvinfos -> uCgpa = $cv -> input('uCgpa');
            $cvinfos -> pDepartment = $cv -> input('pDepartment');
            $cvinfos -> pUniversity = $cv -> input('pUniversity');
            $cvinfos -> pPassingYear = $cv -> input('pPassingYear');
            $cvinfos -> pCgpa = $cv -> input('pCgpa');
            $cvinfos -> sDepartment = $cv -> input('sDepartment');
            $cvinfos -> sBoard = $cv -> input('sBoard');
            $cvinfos -> sPassingYear = $cv -> input('sPassingYear');
            $cvinfos -> sgpa = $cv -> input('sgpa');
            $cvinfos -> sInstitute = $cv -> input('sInstitute');
            $cvinfos -> hDepartment = $cv -> input('hDepartment');
            $cvinfos -> hBoard = $cv -> input('hBoard');
            $cvinfos -> hPassingYear = $cv -> input('hPassingYear');
            $cvinfos -> hgpa = $cv -> input('hgpa');
            $cvinfos -> hInstitute = $cv -> input('hInstitute');
            $cvinfos -> image = $cv -> input('image');


            $extracurriculams -> uid = session('data1');
            $extracurriculams -> extracurriculam1 = $cv -> input('extraCurriculam1');
            $extracurriculams -> extracurriculam2 = $cv -> input('extraCurriculam2');
            $extracurriculams -> extracurriculam3 = $cv -> input('extraCurriculam3');
            $extracurriculams -> extracurriculam4 = $cv -> input('extraCurriculam4');

            $skills -> uid = session('data1');
            $skills -> skill1 = $cv -> input('skill1');
            $skills -> skill2 = $cv -> input('skill2');
            $skills -> skill3 = $cv -> input('skill3');
            $skills -> skill4 = $cv -> input('skill4');


            $achievements -> uid =  session('data1');
            $achievements -> achievement1 = $cv -> input('achievement1');
            $achievements -> achievement2 = $cv -> input('achievement2');
            $achievements -> achievement3 = $cv -> input('achievement3');
            $achievements -> achievement4 = $cv -> input('achievement4');

            $references -> uid = session('data1');
            $references -> name = $cv -> input('refname');
            $references -> designation = $cv -> input('refdesignation');
            $references -> institute = $cv -> input('refinstitute');
            $references -> phone = $cv -> input('refphone');
            $references -> email = $cv -> input('refemail');
            $references -> name1 = $cv -> input('refnameone');
            $references -> designation1 = $cv -> input('refdesignationone');
            $references -> institute1 = $cv -> input('refinstituteone');
            $references -> phone1 = $cv -> input('refphoneone');
            $references -> email1 = $cv -> input('refemailone');

                                         

            $cvinfos -> save();
            $extracurriculams -> save();
            $skills -> save();
            $achievements -> save();
            $references -> save();



            
            
            session()->put('response', $name);
            session()->put('response1',$email);
            session()->put('response2',$presentAddress);
            session()->put('response3',$mobileNumber);
            session()->put('response4',$carrierObjective);
            session()->put('response5', $uDepartment);
            session()->put('response6',$uUniversity);
            session()->put('response7',$uPassingYear);
            session()->put('response8',$uCgpa);
            session()->put('response9',$pDepartment);
            session()->put('response10',$pUniversity);
            session()->put('response11',$pPassingYear);
            session()->put('response12',$pCgpa);
            session()->put('response13',$sDepartment);
            session()->put('response14',$sBoard);
            session()->put('response15', $sPassingYear);
            session()->put('response16',$sgpa);
            session()->put('response17',$sInstitute);
            session()->put('response18',$hDepartment);
            session()->put('response19',$hBoard);
            session()->put('response20', $hPassingYear);
            session()->put('response21',$hgpa);
            session()->put('response22',$hInstitute);
            session()->put('fatherName',$fatherName);
            session()->put('motherName',$motherName);
            session()->put('permanantAddress',$permanantAddress);
            session()->put('nationality',$nationality);
            session()->put('maritialState',$maritialState);
            session()->put('religion',$religion);
            session()->put('bloodGroup',$bloodGroup);
            session()->put('birthdate', $birthdate);
            session()->put('response31',$hgpa);
            session()->put('response22',$hInstitute);
            session()->put('response33',$fatherName);
            session()->put('response34',$motherName);

            session()->put('extracurriculam1', $extracurriculam1);
            session()->put('extracurriculam2',$extracurriculam2);
            session()->put('extracurriculam3',$extracurriculam3);
            session()->put('extracurriculam4',$extracurriculam4);
            session()->put('skill1',$skill1);
            session()->put('skill2',$skill2);
            session()->put('skill3',$skill3);
            session()->put('skill4',$skill4);
            session()->put('achievement1',$achievement1);
            session()->put('achievement2',$achievement2);
            session()->put('achievement3',$achievement3);
            session()->put('achievement4',$achievement4);
            session()->put('refname',$refname);
            session()->put('refdesignation',$refdesignation);
            session()->put('refinstitute',$refinstitute);
            session()->put('refphone', $refphone);
            session()->put('refemail',$refemail);
            session()->put('refname1',$refname1);
            session()->put('refdesignation1',$refdesignation1);
            session()->put('refinstitute1',$refinstitute1);
            session()->put('refphone1', $refphone1);
            session()->put('refemail1', $refemail1);

            return redirect('/cv');

    }

    public function create_pdf()
    {
        $pdf = PDF::loadView('demo');
        return $pdf->download('demo.pdf');
    }
}

?>
















