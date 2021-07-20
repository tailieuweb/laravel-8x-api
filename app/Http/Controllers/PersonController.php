<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Person;
use Illuminate\Support\Facades\DB;

class PersonController extends Controller
{
    private $person;

    public function __constructor(Person $person) {
        $this->person = $person;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function tab1()
    {
        $this->run_22_ok();
    }

    public function index()
    {
        $this->run_0_sample();
    }

    public function run_22_ok() {
        //DB::raw("COPY table FROM '" . storage_path() . "/app/" . $file . "' DELIMITER ',' CSV");
        $params = [
//            ':file_path' => 'D:\1-github-workspace\1-tailieuweb\1-laravel-8x\database\persons.csv'
//            'asdfasdfe'
            ':file_path' => 'D:\1-github-workspace\1-tailieuweb\1-laravel-8x\database\persons.csv'
        ];

//        $persons = DB::select('select * from persons WHERE first_name = :first_name ', $params);
//        $persons = DB::statement('COPY sample.persons(id,first_name,last_name,dob,email) FROM :file_path', $params);
        $persons = DB::statement('
            COPY sample.persons(id,first_name,last_name,dob,email)
            FROM :file_path
            WITH CSV ENCODING \'UTF8\'
            ', $params);
        dd($persons);
    }


    public function run_0_sample() {
        $params = [
            'first_name' => 'test'
        ];

        $persons = DB::select('select * from persons WHERE first_name = :first_name ', $params);

        dd($persons);

    }

    public function run_2_param() {
        //
        $params = [
//            'file_path' => 'D:\1-github-workspace\1-tailieuweb\1-laravel-8x\database\persons.csv'
//            'file_path' => 'D:\\1-github-workspace\\1-tailieuweb\\1-laravel-8x\\database\\persons.csv'
            ':file_path' => 'asdfasdfasdf'
        ];

//        $persons = DB::select('select * from persons WHERE first_name = :first_name ', $params);
//        $persons = DB::statement('COPY sample.persons(id,first_name,last_name,dob,email) FROM :file_path', $params);
        $persons = DB::statement('
            COPY sample.persons(id,first_name,last_name,dob,email)
            FROM :file_path
            WITH CSV ENCODING \'UTF8\'
        ', $params);
        dd($persons);
    }

    public function run_1_ok() {
        //
        $params = [
//            'file_path' => 'D:\1-github-workspace\1-tailieuweb\1-laravel-8x\database'
        ];

//        $persons = DB::select('select * from persons WHERE first_name = :first_name ', $params);
//        $persons = DB::statement('COPY sample.persons(id,first_name,last_name,dob,email) FROM :file_path', $params);
        $persons = DB::statement('
            COPY sample.persons(id,first_name,last_name,dob,email)
FROM \'D:\1-github-workspace\1-tailieuweb\1-laravel-8x\database\persons.csv\'
WITH CSV ENCODING \'UTF8\'

        ');
        dd($persons);
    }

    public function run_11_ok() {
        //
        $params = [
//            ':file_path' => 'D:\1-github-workspace\1-tailieuweb\1-laravel-8x\database\persons.csv'
//            'asdfasdfe'
            ':file_path' => 'D:\1-github-workspace\1-tailieuweb\1-laravel-8x\database\persons.csv'
        ];

//        $persons = DB::select('select * from persons WHERE first_name = :first_name ', $params);
//        $persons = DB::statement('COPY sample.persons(id,first_name,last_name,dob,email) FROM :file_path', $params);
        $persons = DB::statement('
            COPY sample.persons(id,first_name,last_name,dob,email)
            FROM \'' . $params[':file_path'] . '\'
            WITH CSV ENCODING \'UTF8\'
            ');
        dd($persons);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
