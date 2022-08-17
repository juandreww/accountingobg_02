<?php

namespace App\Http\Controllers;

use stdClass;
use \Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use \App\Models\KelapaBakar;
use \App\Models\User;
use Illuminate\Support\Str;
use Maatwebsite\Excel\Facades\Excel;
use Faker\Factory as Faker;


class KelapaBakarController extends Controller
{
    public function list(Request $request) {
        $data = KelapaBakar::get();
        return view('kelapabakar.list', ['data' => $data]);
    }

    public function dashboard(Request $requesst) {
        $data = KelapaBakar::get();
        $das_stockremaining = $this->calculateStockRemaining($data);
        $das_totalpurchase = $this->totalSales($data);
        return view('kelapabakar.dashboard', ['das_stockremaining' => $das_stockremaining, 'das_totalpurchase' => $das_totalpurchase]);
    }

    private function calculateStockRemaining($data) {
        $tot_purchase = 0;
        $tot_sales = 0;
        foreach ($data as $d) {
            if (strtolower($d->type) == 'masuk') $tot_purchase+= $d->quantity;
            elseif (strtolower($d->type) == 'keluar') $tot_purchase+= $d->quantity;
        }
        $total = $tot_purchase - $tot_sales;
        return $total;
    }

    private function totalSales($data) {
        $obj = new stdClass();
        $tot_purchase = 0;
        $tot_nsales = 0;
        $tot_msales = 0;
        foreach ($data as $d) {
            if (strtolower($d->type) == 'masuk') $tot_purchase+= $d->quantity;
            elseif (strtolower($d->type) == 'keluar' && strtolower($d->type2) == 'biasa') $tot_nsales+= $d->quantity;
            elseif (strtolower($d->type) == 'keluar' && strtolower($d->type2) == 'bakar') $tot_msales+= $d->quantity;
        }
        $obj->purchase = $tot_purchase;
        $obj->nsales = $tot_nsales;
        $obj->msales = $tot_msales;
        return $obj;
    }

    public function show(Request $request) {
    }

    public function save(Request $request) {
        // $request = $request->getContent();
        $now = now()->addHours(7)->toDateTimeString();
        $uuid = Str::uuid()->toString();
        $data = new KelapaBakar();
        $data->uid = $uuid;
        $data->created_at = $now;
        $data->date = $request->date;
        $data->type = $request->type;
        $data->type2 = $request->type2;
        $data->quantity = $request->quantity;
        $data->price = $request->price;
        $data->totalamount = $data->price * $data->quantity;
        $data->save();

        $data = KelapaBakar::get();
        return view('kelapabakar.list', ['data' => $data]);
    }

    public function upload(Request $request) {

    }

    public function delete(Request $request) {

    }

    public function display1(Request $request) {
        return view('kelapabakar.display1');
    }

    public function display2(Request $request) {
        return view('kelapabakar.display2');
    }

    public function display3(Request $request) {
        return view('kelapabakar.display3');
    }

    public function display4(Request $request) {
        return view('kelapabakar.display4');
    }

    public function display5(Request $request) {
        return view('kelapabakar.display5');
    }

    public function apitest(Request $request) {
        $target = 1;

        $maximumPattern = $target * 2 - 1;
        $halfMax = $target + 1;
        $halfMin = $target - 1;

        $string = null; $pattern = 'x';
        for ($i = 1; $i <= $maximumPattern; $i++) {
            if ($i % 2 == 0) $string = $string . ' ';
            else {
                if ($i == $halfMax && $target % 2 == 0) $pattern = $pattern == 'x' ? 'o' : 'x';
                $string = $string . $pattern;
                $pattern = $pattern == 'x' ? 'o' : 'x';

            }
        }
        $mid[] = $string;
        $strbot = substr($string,$target-1, $target);
        $strtop = substr($string,0, $target);

        $bott  = [];
        for($i = 1; $i < $target; $i++) {
            $tmp = str_repeat(' ', $halfMin);
            $strbot = substr($strbot, 1);
            $tmp = $tmp . $strbot;
            $bott[] = $tmp;
        }

        $top = [];
        for($i = 1; $i < $target; $i++) {
            $tmp = str_repeat('  ', $halfMin);
            $strtop = ' ' . substr($strtop, 0, -1);
            // $tmp = $strtop . $tmp;
            // $top[] = $tmp;
            $top[] = $strtop;
        }


        $result = array_merge($top, $mid, $bott);
        dd($result);

        return response($result, 200);
        return "ok";
    }
}
