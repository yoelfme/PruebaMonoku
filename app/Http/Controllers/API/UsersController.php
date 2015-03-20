<?php
/**
 * Created by PhpStorm.
 * User: YOEL
 * Date: 20/03/15
 * Time: 10:50
 */

namespace Monoku\Http\Controllers\API;

use Monoku\Repositories\User\UserRepo;
use Monoku\Vendor\Helpers\FieldX;

class UsersController extends CrudController {
    protected $rules = array(
        'email' => 'required|email',
        'name' => 'required',
        'type' => 'required|in:admin,user',
        'password' => 'required|min:6'
    );
    protected $module = '_users';

    function __construct(UserRepo $userRepo)
    {
        parent::__construct();
        $this->repo = $userRepo;
    }

    public function fields($data=null)
    {
        $type = [
            'admin' => 'Administrador',
            'user' => 'Usuario Normal'
        ];

        if($data)
        {
            return FieldX::make()
                ->input('email','Email','Email',$data->email)
                ->select('type','Tipo:',$type,$data->type)
                ->input('name','Nombre','Nombre',$data->name);
        }
        else
        {
            return FieldX::make()
                ->input('email','Email:','Email')
                ->input('password','Contraseña:','Contraseña','','password')
                ->select('type','Tipo:',$type)
                ->input('name','Nombre:','Nombre');
        }
    }

    public function change_password(Request $request)
    {
        // Get user active
        $user = $this->repo->findOrFail(\Auth::id());

        if($user)
        {
            $data = $request->all();
            $success = true;
            $message = "Contraseña actualizada exitosamente";

            // Validate data
            $validator = \Validator::make($data, [
                'password' => 'required',
                'new-password' => 'required|min:5',
                'new-password-confirm' => 'required|same:new-password'
            ]);

            if($validator->passes())
            {
                $data['password'] = \Hash::make($data['new-password']);
                $this->repo->update($user,$data);
            }
            else
            {
                $success = false;
                $message = "Algunos campos son requeridos";
            }

            return compact('success','message');
        }
    }
}