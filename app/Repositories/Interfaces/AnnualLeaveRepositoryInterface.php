<?php
namespace App\Repositories\Interfaces;

Interface AnnualLeaveRepositoryInterface{
    
    public function allAnnualLeave();
    public function storeAnnualLeave($data);
    public function findAnnualLeave($id);
    public function updateAnnualLeave($data, $id); 
    public function destroyAnnualLeave($id);
}