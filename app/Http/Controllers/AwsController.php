<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use AWS;

class AwsController extends Controller
{

    public function index() {
        return view('aws');
    }

    public function upload(Request $request) {
        $file_path   =   realpath(public_path('upload\aws.txt'));

        $s3 = AWS::createClient('s3');
        try {
            $temp = $s3->putObject(array(
                'Bucket'     => 'mymono',
                'Key'        => 'test/aws.txt',
                'SourceFile' => $file_path,
            ));
            dd($temp);
        } catch (Exception $e) {
            dd($temp);
            dd($e->getMessage());
        }

    }
}
