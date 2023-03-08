<?php

namespace App\Http\Controllers;

use App\Http\Requests\AnnualLeaveRequest;
use Illuminate\Http\Request;
use App\Repositories\Interfaces\AnnualLeaveRepositoryInterface;
use App\Models\AnnualLeave;

class AnnualLeavesController extends Controller
{
    private $annualLeavesRepository;

    public function __construct(AnnualLeaveRepositoryInterface $annualLeavesRepository)
    {
        $this->annualLeavesRepository = $annualLeavesRepository;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Controller function to get all leave data
        $annualLeaves =  $this->annualLeavesRepository->allAnnualLeaves();

        return view('test-flex', compact('annualLeaves'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AnnualLeavesRequest $request)
    {
        // Controller function to store leave data
        $data = $request->all();

        $this->annualLeavesRepository->storeCategory($data);

        return view('test-flex');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // Controller function to show a specific leave data
        $annualLeaves = $this->annualLeavesRepository->findAnnualLeave($id);

        return view('test-flex', compact('annualLeaves'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
