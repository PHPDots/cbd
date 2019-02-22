<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Validator;
use App\ContactForm;
use App\Custom;

class PagesController extends Controller
{
    public function __construct()
    {
    }

    function index(Request $request)
    {
        $data = [];
        return view('home',$data);
    }

	function officeTour(Request $request)
	{
		$data = [];
        return view('our_team.officeTour',$data);
	}

	function ourTeam(Request $request)
	{
		$data = [];
        return view('our_team.ourTeam',$data);
	}

	function cosmeticDentistry(Request $request)
    {
        $data = [];
        return view('services.cosmeticDentistry',$data);
    }

	function invisalign(Request $request)
    {
        $data = [];
        return view('services.cosmetic_dentistry.invisalign',$data);
    }

	function porcelainDentalVeneers(Request $request)
    {
        $data = [];
        return view('services.cosmetic_dentistry.porcelainDentalVeneers',$data);
    }

	function teethWhitening(Request $request)
    {
        $data = [];
        return view('services.cosmetic_dentistry.teethWhitening',$data);
    }

	public function generalFamilyDentistry(Request $request)
	{
		$data = [];
        return view('services.generalFamilyDentistry',$data);
	}

	public function dentalExamsCleanings(Request $request)
	{
		$data = [];
        return view('services.general_family_dentistry.dentalExamsCleanings',$data);
	}

	public function dentalHygiene(Request $request)
	{
		$data = [];
        return view('services.general_family_dentistry.dentalHygiene',$data);
	}

	public function dentalxRays(Request $request)
	{
		$data = [];
        return view('services.general_family_dentistry.dentalxRays',$data);
	}

	public function periodontalTreatment(Request $request)
	{
		$data = [];
        return view('services.general_family_dentistry.periodontalTreatment',$data);
	}

	public function preventiveCare(Request $request)
	{
		$data = [];
        return view('services.general_family_dentistry.preventiveCare',$data);
	}

	public function restorativeDentistry(Request $request)
	{
		$data = [];
        return view('services.restorativeDentistry',$data);
	}

    function compositeDental(Request $request)
    {
        $data = [];
        return view('services.restorative_dentistry.compositeDental',$data);
    }

    function dentalBridges(Request $request)
    {
        $data = [];
        return view('services.restorative_dentistry.dentalBridges',$data);
    }

    function dentalCrownsCaps(Request $request)
    {
        $data = [];
        return view('services.restorative_dentistry.dentalCrownsCaps',$data);
    }

	function dentalImplants(Request $request)
    {
        $data = [];
        return view('services.restorative_dentistry.dentalImplants',$data);
    }

	function denturesPartialDentures(Request $request)
    {
        $data = [];
        return view('services.restorative_dentistry.denturesPartialDentures',$data);
    }

	function rootCanalTherapy(Request $request)
    {
        $data = [];
        return view('services.restorative_dentistry.rootCanalTherapy',$data);
    }

	function toothExtractions(Request $request)
    {
        $data = [];
        return view('services.restorative_dentistry.toothExtractions',$data);
    }

	function contact(Request $request)
    {
        $data = [];
        return view('contact',$data);
    }

	public function faq(Request $request)
	{
		$data = [];
        return view('faq',$data);
	}

    public function submitContact(Request $request)
    {
        $status = 1;

        $msg = "Thank you! Your message has been successfully sent. We will contact you very soon!";

        $validator = Validator::make($request->all(), [
            'name' => 'required|min:2',
            'email' => 'required|email',
            'message' => 'required'
        ]);
        
        // check validations
        if ($validator->fails()) 
        {
            $messages = $validator->messages();
            
            $status = 0;
            $msg = "";
            
            foreach ($messages->all() as $message) 
            {
                $msg .= $message . "<br />";
            }
        }         
        else
        {
            // Save Form Log IN DB
            $model = new ContactForm();
            $input = $request->all();
            $input['ip'] = Custom::getIp();
            $model = $model->create($input);            

            // Send email to admin
            $data['name'] = $request->get("name");
            $data['email'] = $request->get("email");
            $data['message'] = $request->get("message");

            $email = env("CONTACT_EMAIL");
            $subject = "Appointment details from Windy City Family Dental";
            $returnHTML = view('emails.contact',$data)->render();
            $params["to"] = $email;
            $params["subject"] = $subject;
            $params["body"] = $returnHTML;
            Custom::sendHtmlMail($params);            
        }        

        return ['status' => $status, 'msg' => $msg];
    }    
}
