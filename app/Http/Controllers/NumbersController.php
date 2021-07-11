<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Custom\Random;
use Illuminate\Support\Facades\DB;
use App\Http\Resources\NumbersResource;

class NumbersController extends Controller
{
    /**
     * TEST LANG
     */
    public function index()
    {  
        if($id = $this->insertGeneratedNumber())
        return NumbersResource::collection($this->retrieve($id));
    }

    /**
     * Display all records in the generated tables in the DB
     * @return Array
     */
    public function all()
    {
        return NumbersResource::collection(DB::table('generated')->get());
    }

    private function generateHash() 
    {
        $rand = new Random();
        return $rand->generateHashNumber();
    }
    
    /**
     * Insert record and return ID
     * @return Int
     */
    private function insertGeneratedNumber()
    {
        $res = DB::table('generated')->insertGetId(
            [
                'generated_hash'        => $this->generateHash(),
                'generated_number'      => mt_rand()
            ]
        );

        return $res;
    }



    /**
     * @param Int $id 
     */
    public function retrieve(int $id)
    {
        return DB::table('generated')->where('id', '=', $id)->get();
    }

}
