<?php

namespace App\Http\Controllers\Jobsite;

use Flash;
use Illuminate\View\View;
use Illuminate\Contracts\View\Factory;
use App\Http\Requests\SiteRegisterRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\SiteRegisterRepository;
use Symfony\Component\HttpFoundation\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Controllers\Controller;

class RegisterController extends AppBaseController
{
    /** @var  SiteRegisterRepository */
    private $SiteRegisterRepository;

    public function __construct(SiteRegisterRepository $SiteRegisterRepository)
    {
        $this->SiteRegisterRepository = $SiteRegisterRepository;
    }

    /**
     * @return Factory|View
     */
    public function candidateRegister()
    {
        return view('Jobsite.Auth.candidate-Register');
    }


    /**
     * @return Factory|View
     */
    public function employerRegister()
    {
  
        return view('Jobsite.Auth.Employeer-Register');
    }

  
    // public function register(SiteRegisterRequest $request)
    public function register(Request $request)
    {
       
        $input = $request->all();
        // dd($input);
        $this->SiteRegisterRepository->store($input);
        $userType = ($input['type'] == 1) ? 'Candidate' : 'Employer';
        // Flash::success('You have registered successfully, Activate your account from mail.');

        return $this->sendSuccess("{$userType} registration done successfully.");
    }
}
