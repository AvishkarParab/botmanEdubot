<?php

namespace App\Http\Controllers;


use BotMan\BotMan\BotMan;
use BotMan\BotMan\Messages\Conversations\MyProgressConversation;
use BotMan\BotMan\Messages\Incoming\Answer;
use Illuminate\Http\Request;
use BotMan\BotMan\Messages\Conversations\CourseConversation;


class BotManController extends Controller
{
    public function handle()
    {
        $botman = app('botman');

        $botman->hears('{message}', function ($bot,$message) {
            if($message == 'hi'|| $message == 'hello'){
                $bot->typesAndWaits(1);
                $bot->startConversation(new CourseConversation);
                // $bot->reply("Type learn to start with course");
                // $this->askName($bot);
            }else if($message == 'progress'){
                $bot->typesAndWaits(1);
                $bot->startConversation(new MyProgressConversation);
            }
            else{
                $bot->typesAndWaits(2);
                $bot->reply("Please type 'hi' or 'hello' for testing");
            }
        });

        $botman->listen();
    }

    public function askName($botman)
    {
        $botman->ask("hello ! What is your name ?", function (Answer $answer) {
            $name = $answer->getText();
            $this->say('Nice to meet you ' . $name);
        });
    }
}
