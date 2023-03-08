<?php

namespace App\Repositories;

use App\Repositories\Interfaces\AnnualLeaveRepositoryInterface;
use App\Models\AnnualLeave;

class AnnualLeaveRepository implements AnnualLeaveRepositoryInterface
{

    // return all leave data
    public function allCategories()
    {
        return AnnualLeave::latest()->paginate(10);
    }

    // store leave data
    public function storeAnnualLeave($data)
    {
        return AnnualLeave::create($data);
    }

    // find a specific leave data by id
    public function findAnnualLeave($id)
    {
        return AnnualLeave::find($id);
    }

    // update existing leave data
    public function updateAnnualLeave($data, $id)
    {
        $annualLeave = AnnualLeave::where('id', $id)->first();
        $annualLeave->name = $data['name'];
        $annualLeave->slug = $data['slug'];
        $annualLeave->save();
    }

    // delete a leave data
    public function destroyAnnualLeave($id)
    {
        $annualLeave = AnnualLeave::find($id);
        $annualLeave->delete();
    }
}