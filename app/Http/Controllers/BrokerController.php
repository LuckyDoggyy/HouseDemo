<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Broker;
use Illuminate\Support\Facades\Input;
use App\House;


class BrokerController extends Controller
{
    //

    protected $username;
    protected $password;
    protected $phone;
    protected $broker;


    function __construct()
    {
        \DB::listen(function ($sql) {
            header('sql: ' . $sql->sql);
        });
        $this->broker = new Broker();
        $this->username = Input::get('username');
        $this->password = Input::get('password');
        $this->phone = Input::get('phone');
        if (empty($this->broker))
            $this->broker = new Broker();
    }

    public function loginOrRegister(Request $request)
    {
        $validateBroker = $this->broker->show($this->username);
        if ($request->input('submit') == 'login') {
            if (empty($validateBroker[0])) {
                $this -> skipToPage('login', 'There is no user '.$this -> username);
            } else if ($validateBroker[0]->password != $this->password) {
                $this -> skipToPage('login', 'Login failed, wrong username or password.');
                } else {
                session() -> put('username', $this->username);
                session() -> put('password', $this->password);
                session() -> put('userId', $validateBroker[0] -> id);
                $this -> skipToPage('/houseList','Login successful, skip to homepage.');
            }
        } else {
            if (empty($validateBroker[0])) {
                var_dump($validateBroker);
                $status = $this->broker->create($this->username, $this->password, $this->phone);
                if ($status != 0) {
                    $this -> skipToPage('login','Register successful, skip to login page.');
                    } else {
                    $this -> skipToPage('login','Register failed, skip to login page.');
                    }
            } else {
                $this -> skipToPage('login','Register failed, the username '.$this -> username.' has been registered.');
                }
        }
    }

    public function logout()
    {
        session()->flush();
        return view('login');
    }

    public function __destruct()
    {
        // TODO: Implement __destruct() method.
        $this->broker = null;
        $this->username = null;
        $this->password = null;
        $this->phone = null;
    }

    function skipToPage($targetPage, $mes){
        echo <<<TTT
                        <script>
                            window.alert('$mes');
                            location.href=('$targetPage');
                        </script>
TTT;
    }
}
