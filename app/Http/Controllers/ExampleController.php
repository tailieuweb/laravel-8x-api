<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

    use Illuminate\Support\Collection;
use App\Models\User;

class ExampleController extends Controller
{
    
    public function ex01() {
            $this->ex01_05_cursor();
        
    }
    
    public function ex01_01() {
        $users = User::get();
        var_dump($users);
        die();
        $users = $users->reject(function ($user) {
            return $user->email;
        });
        var_dump($users->toArray());
        die();
    }
    
    
    
   
    public function ex01_02() {
        
        $collection = Collection::make([1, 2, 3, 4, 5]);
        
        var_dump( $collection->all());
        
        echo $collection->avg();
        
        var_dump($collection->chunk(3));
        
    }
    
    
    //https://laravel.com/docs/8.x/eloquent#chunking-results
    
    public function ex01_03_chunk() {
        
        User::chunk(5, function ($users) {
            var_dump($users->toArray());
        });
    }
    
    public function ex01_04_chunk() {
        User::where('status', 1)
        ->chunkById(5, function ($users) {
            $users->each->update(['status' => 0]);
        }, $column = 'id');
    }
    
    public function ex01_05_cursor() {
        $user = User::where('status', '1')->cursor();
        var_dump($user->toArray());
        die();
    }
}
