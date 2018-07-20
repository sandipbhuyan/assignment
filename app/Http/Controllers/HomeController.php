<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Items;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    /**
     * Add the items and render to next page
     *
     * This function aims to add the item in  database and send the data to the
     * item desctiption page
     *
     * @param Request $request
     *
     * return Response
     */
    public function addItem(Request $request)
    {

        $value = $request->get('value');
        $overview = $request->get('overview');

        for( $i = 0; $i < sizeof($value) ;$i++) {
            if ( $value[$i] && $overview[$i] && is_numeric($value[$i]) && is_string($overview[$i])) {
                $item = new Items;
                $item->value = $value[$i];
                $item->overview = $overview[$i];
                $item->save();
            }
        }
        $for = Items::where('overview','For')->get();
        $against = Items::where('overview','Against')->get();
        $forUnset = [];
        $closedData = [];
        $againstUnset = [];
        $forData = [];
        $againstData = [];
        $forTotal = 0;
        $againstTotal = 0;
        $closedTotal = 0;
        // Setting forUnset
        for($i = 0; $i < sizeof($for); $i++) {
            $forUnset[] = false;
        }

        for ($i = 0; $i < sizeof($against); $i++) {
            $againstUnset[] = false;
        }

        for ($i = 0; $i < sizeof($for); $i++ ) {
            if($forUnset[$i] == false) {
                for($j = 0; $j < sizeOf($against); $j++) {
                    if($againstUnset[$j] == false && $for[$i]['value'] == $against[$j]['value']) {
                        $forUnset[$i] = true;
                        $againstUnset[$j] = true;
                        $closedData[] = $for[$i];
                        $closedTotal = $closedTotal + $for[$i]['value'];
                        break;
                    }
                }
            }
        }


        for($i = 0; $i < sizeof($for); $i++) {
            if($forUnset[$i] == false) {
                $forData[] = $for[$i];
                $forTotal = $forTotal + $for[$i]['value'];
            }
        }
        for($i = 0; $i < sizeof($against); $i++) {
            if($againstUnset[$i] == false) {
                $againstData[] = $against[$i];
                $againstTotal = $againstTotal + $against[$i]['value'];
            }
        }
        return view('result',['forData' => $forData, 'forTotal' => $forTotal, 'againstData' => $againstData, 'againstTotal' => $againstTotal, 'close' => $closedData]);
    }
}
