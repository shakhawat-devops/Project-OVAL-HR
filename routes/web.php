<?php

use Illuminate\Support\Facades\DB;

Route::get('/', function () {
  $worked = DB::select('select * from devops_tools where worked = ?', [1]);
  $togo = DB::select('select * from devops_tools where worked = ?', [0]);

  return view('my_db', ['worked' => $worked, 'togo' => $togo ] );
});
