<?php

namespace App\Http\Controllers\ForYou;

use App\Http\Controllers\Controller;
use App\Jobs\confessionJob;
use App\Jobs\deptJob;
use App\Jobs\loveJob;
use App\Jobs\sweatJob;
use App\Mail\confessionMail;
use App\Mail\deptMail;
use App\Mail\loveMail;
use App\Mail\sweatMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function index()
    {

        return view('ForYou.sendMail');
    }

    public function getForm(Request $request)
    {
        $mailTo = $request->exampleInputEmail;

        $detail = [
            'name'  =>  $request->nameInput,
            'dept'  =>  isset($request->howManyDebtInput) && $request->howManyDebtInput != null ? $request->howManyDebtInput : null,
            'confession'  =>  isset($request->confessionInput) && $request->confessionInput != null ? $request->confessionInput : null,
            'mail'          =>  $mailTo,
        ];
        if(isset($request->yourNameInput) && $request->yourNameInput != null)
        {
            $yourName = substr($request->yourNameInput, 0,1);
            $detail['yourName'] = $yourName;
        }

        if($request->helpSelect == 'ter')
        {
            $job = (new sweatJob($detail));
        }
        else if($request->helpSelect == 'ask')
        {
            $job = (new loveJob($detail));
        }
        else if($request->helpSelect == 'borc')
        {
            $job = (new deptJob($detail));
        }
        else if($request->helpSelect == 'itiraf')
        {
            $job = (new confessionJob($detail));
        }

        dispatch($job);

        return redirect('/')->with('success','Hayırlı olsun canım şutladık maili. Bundan sonra otur ve hareketlerindeki değişiklikleri izle :)');
    }
}
