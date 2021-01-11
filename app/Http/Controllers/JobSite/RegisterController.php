<?php

namespace App\Http\Controllers\Jobsite;

use App\Http\Controllers\AppBaseController;
use App\Http\Requests\SiteRegisterRequest;
use App\Repositories\SiteRegisterRepository;
use Flash;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\View\View;

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

  
    public function register(SiteRegisterRequest $request)
    {
       
        $input = $request->all();
        dd($input);
        $this->SiteRegisterRepository->store($input);
        $userType = ($input['type'] == 1) ? 'Candidate' : 'Employer';
        Flash::success('You have registered successfully, Activate your account from mail.');

        return $this->sendSuccess("{$userType} registration done successfully.");
    }
}
