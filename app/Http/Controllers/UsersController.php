<?php
/**
 * Created by PhpStorm.
 * User: apotente
 * Date: 07/05/15
 * Time: 12:04
 */

namespace Curso\Http\Controllers;

use Curso\User;


class UsersController extends Controller {

    public function getOrm()
    {
        $user = User::where('name','<>','')->get();
        dd($user->ToArray());
    }
    public function getIndex()
    {
        $result= \DB::table('users')
            //->select('name')
            ->where('name','<>','')
            ->orderBy('name','ASC')
            ->join('user_profiles','users.id','=','user_profiles.user_id')
            ->get();
        dd($result);
        return $result;
    }

} 