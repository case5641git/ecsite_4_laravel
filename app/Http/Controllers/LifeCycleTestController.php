<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LifeCycleTestController extends Controller
{
    public function showServiceContainerTest() {
        app()->bind('lifeCycleTest', function(){
            return 'LifeCycleTestControllerのshowServiceContainerTestメソッドから返された値です';
        });

        $test = app()->make('lifeCycleTest');

        //サービスコンテナなし
        // $message = new Message();
        // $sample = new Sample($message);
        // $sample->run();

        //サービスコンテナあり
        app()->bind('sample', Sample::class);
        $sample = app()->make('sample');
        $sample->run();

        dd($test,app());
    }
}

class Sample{
    public $message;
    public function __construct(Message $message)
    {
        $this->message = $message;
    }
    public function run(){
        $this->message->send();
    }
}

class Message
{
    public function send(){
        echo 'メッセージを送信しました';
    }
}