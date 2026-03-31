<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Test;
use Illuminate\Support\Facades\DB;

class TestController extends Controller
{
    public function index()
    {
        dd('test');
        //Eloquent--------------------------------------
        $values = Test::all();

        $count = Test::count();

        $first = Test::findOrFail(1);
        // findOrFail()はデータが存在しない場合はエラーを返す

        $whereBBB = Test::where('text', '=', 'bbb')->get();

        //Querybuilder--------------------------------------
        $querybuilder = DB::table('tests')->where('text', '=', 'bbb')
            ->select('id', 'text')
            ->get();

        dd($values, $count, $first, $whereBBB, $querybuilder);
        //ブラウザでデバッグ

        return view('tests.test', compact('values'));
        //viewはLarvelのビューのディレクトリにあるファイルを表示するためのヘルパ関数
    }
}
