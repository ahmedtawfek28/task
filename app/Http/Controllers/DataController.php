<?php

    namespace App\Http\Controllers;

    use Illuminate\Http\Request;
    use App\Department;
    use App\User;
    class DataController extends Controller
    {
            // public function open() 
            // {
            //     $data = "This data is open and can be accessed without the client being authenticated";
            //     return response()->json(compact('data'),200);

            // }

            // public function closed() 
            // {
            //     $data = "Only authorized users can see this";
            //     return response()->json(compact('data'),200);
            // }

            public function department(){
                
                $Department=Department::with( ['users'] )->get();
                return response()->json(compact('Department'),200);
            }

            public function Managers(){
                
                $managers=User::with( 'employees')->get();
                return response()->json(compact('managers'),200);
            }
            public function Manager($id){
              $manager=User::where('id',$id)->with('employees')->get();
                return response()->json(compact('manager'),200);
            }
    }