<?php

namespace App\Repositories;

use App\Repositories\Interfaces\AnnualLeaveRepositoryInterface;
use App\Models\AnnualLeave;

class AnnualLeaveRepository implements AnnualLeaveRepositoryInterface
{

    public function allCategories()
    {
        return AnnualLeave::latest()->paginate(10);
    }

    public function storeAnnualLeave($data)
    {
        return AnnualLeave::create($data);
    }

    public function findAnnualLeave($id)
    {
        return AnnualLeave::find($id);
    }

    public function updateAnnualLeave($data, $id)
    {
        $annualLeave = AnnualLeave::where('id', $id)->first();
        $annualLeave->name = $data['name'];
        $annualLeave->slug = $data['slug'];
        $annualLeave->save();
    }

    public function destroyAnnualLeave($id)
    {
        $annualLeave = AnnualLeave::find($id);
        $annualLeave->delete();
    }
}