<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

    use Illuminate\Support\Collection;
use App\Models\User;
use App\Models\Permission;
use App\Models\UserHasPermission;

use Illuminate\Database\Eloquent\ModelNotFoundException;

class ExampleController extends Controller
{
    
    public function ex01() {
            $this->ex01_12_firstOrCreate();
        
    }
    
    public function ex01_12_firstOrCreate() {
        
        $permission = Permission::firstOrCreate([
            'permission_name' => 'foo'
        ]);
        
        var_dump($permission);
        die();
        
    }
    
    
    public function ex01_11_not_found_exception() {
        try {
            $user = User::findOrFail(11);
        } catch (ModelNotFoundException  $e) {
            echo $e->getMessage();
        }
    }
    
    public function ex01_10_sub_select() {
        $user =  User::addSelect(['last_permission_id' => UserHasPermission::select('permission_id')
                ->whereColumn('users.id', 'user_has_permissions.user_id')
                ->limit(1)
            ])->get();
        
        var_dump($user->toArray());
        die();
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
