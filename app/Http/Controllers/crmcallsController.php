<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatecrmcallsRequest;
use App\Http\Requests\UpdatecrmcallsRequest;
use App\Repositories\crmcallsRepository;
use App\Http\Controllers\AppBaseController;
use App\Http\Controllers\AfricasTalkingGatewayController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use Auth;
use Mail;
use Exception;

class crmcallsController extends AppBaseController
{
    /** @var  crmcallsRepository */
    private $crmcallsRepository;

    public function __construct(crmcallsRepository $crmcallsRepo)
    {
        $this->crmcallsRepository = $crmcallsRepo;
    }

    /**
     * Display a listing of the crmcalls.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->crmcallsRepository->pushCriteria(new RequestCriteria($request));
        $crmcalls = $this->crmcallsRepository->all();

        return view('crmcalls.index')
            ->with('crmcalls', $crmcalls);
    }

    /**
     * Show the form for creating a new crmcalls.
     *
     * @return Response
     */
    public function create()
    {
        $stamp      = time();
        date_default_timezone_set('Africa/Nairobi');
        $time = date("H");
        $opening = '';
        if ($time < "12") {
            $opening = "Good Morning";
        } elseif ($time >= "12" && $time < "17") {
            $opening = "Good Afternoon";
        } elseif ($time >= "17" && $time < "19") {
            $opening = "Good Evening";
        } else {
            $opening = "Good Evening";
        }
        $name = '';
        if (Auth::check()) {
            $name = Auth::user()->name;
            $opening = $opening.' '.$name.','; 
        }
        return view('crmcalls.create',['name' => $name, 'opening' => $opening]);
    }

    /**
     * Store a newly created crmcalls in storage.
     *
     * @param CreatecrmcallsRequest $request
     *
     * @return Response
     */
    public function store(CreatecrmcallsRequest $request)
    {
        $input = $request->all();
        include 'atgateway.php';
        //send mail & text here
        if($request->q13 == 'Yes') {
            Mail::raw($request->emailtext, function($m) use ($request) {
                $m->to($request->q13_mail)->cc('patwiri@gmail.com')->subject('Escalation');
            });
            // text using ATs
            $apikey     = config('app.at_key');
            $apiusername  = config('app.at_username');
            $text       = $request->smstext;
            $from   = '+254727542899';
            $to      = $request->q13_phone;
            $at = new AfricasTalkingGatewayController($apiusername,$apikey);
            if(!$at->sendMessage($to, $text)) {
                error_log($at);
            }
        }

        $crmcalls = $this->crmcallsRepository->create($input);

        Flash::success('Crmcalls saved successfully.');

        return redirect(route('crmcalls.index'));
    }

    /**
     * Display the specified crmcalls.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $crmcalls = $this->crmcallsRepository->findWithoutFail($id);

        if (empty($crmcalls)) {
            Flash::error('Crmcalls not found');

            return redirect(route('crmcalls.index'));
        }

        return view('crmcalls.show')->with('crmcalls', $crmcalls);
    }

    /**
     * Show the form for editing the specified crmcalls.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $crmcalls = $this->crmcallsRepository->findWithoutFail($id);

        if (empty($crmcalls)) {
            Flash::error('Crmcalls not found');

            return redirect(route('crmcalls.index'));
        }
        $stamp      = time();
        date_default_timezone_set('Africa/Nairobi');
        $time = date("H");
        $opening = '';
        if ($time < "12") {
            $opening = "Good Morning";
        } elseif ($time >= "12" && $time < "17") {
            $opening = "Good Afternoon";
        } elseif ($time >= "17" && $time < "19") {
            $opening = "Good Evening";
        } else {
            $opening = "Good Evening";
        }
        $name = '';
        if (Auth::check()) {
            $name = Auth::user()->name;
            $opening = $opening.' '.$name.','; 
        }
        return view('crmcalls.edit', ['name' => $name, 'opening' => $opening, 'crmcalls' => $crmcalls]);//->with('crmcalls', $crmcalls);
    }

    /**
     * Update the specified crmcalls in storage.
     *
     * @param  int              $id
     * @param UpdatecrmcallsRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatecrmcallsRequest $request)
    {
        $crmcalls = $this->crmcallsRepository->findWithoutFail($id);

        if (empty($crmcalls)) {
            Flash::error('Crmcalls not found');

            return redirect(route('crmcalls.index'));
        }

        $crmcalls = $this->crmcallsRepository->update($request->all(), $id);

        Flash::success('Crmcalls updated successfully.');

        return redirect(route('crmcalls.index'));
    }

    /**
     * Remove the specified crmcalls from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $crmcalls = $this->crmcallsRepository->findWithoutFail($id);

        if (empty($crmcalls)) {
            Flash::error('Crmcalls not found');

            return redirect(route('crmcalls.index'));
        }

        $this->crmcallsRepository->delete($id);

        Flash::success('Crmcalls deleted successfully.');

        return redirect(route('crmcalls.index'));
    }

    /*
    * Export
    */
    public function export() {
        $headers = array(
            "Content-type" => "text/csv",
            "Content-Disposition" => "attachment; filename= ".time()."file.csv",
            "Pragma" => "no-cache",
            "Cache-Control" => "must-revalidate, post-check=0, pre-check=0",
            "Expires" => "0"
        );

        $calls = $this->crmcallsRepository->all();
        $columns = array('q0','not reachable','q1','q2','q2 notclientsnumber','q2 datetime','q3','q3 desposition','q4','q5','q5 others','reachable desposition','q6','q6 others','q7','q8','q9','q10','q10 datetime','q11 email','q12','q12 details','q13','q13 phone','q13 mail','created at');
        $callback = function() use ($calls, $columns)
        {
            $file = fopen('php://output', 'w');
            fputcsv($file, $columns);

            foreach($calls as $call) {
                fputcsv($file, array($call->q0,$call->not_reachable,$call->q1,$call->q2,$call->q2_notclientsnumber,$call->q2_datetime,$call->q3,$call->q3_desposition,$call->q4,$call->q5,$call->q5_others,$call->reachable_desposition,$call->q6,$call->q6_others,$call->q7,$call->q8,$call->q9,$call->q10,$call->q10_datetime,$call->q11_email,$call->q12,$call->q12_details,$call->q13,$call->q13_phone,$call->q13_mail,$call->created_at));
            }
            fclose($file);
        };
        return Response::stream($callback, 200, $headers);
    }
}
