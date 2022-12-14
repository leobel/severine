<?php
    require 'vendor/autoload.php';
    use \Mailjet\Resources;
    if ($_SERVER['REQUEST_METHOD'] === 'POST') { 
        $mj = new \Mailjet\Client('1aaeedd3f2a2197486d49b052c21cef2','1704e7e64813be0f36d3f638d211d146',true,['version' => 'v3.1']);
        
        $name = strip_tags(trim($_POST["name"]));
        $email = strip_tags(trim($_POST["email"]));
        $message = strip_tags(trim($_POST["message"]));


        $body = [
            'Messages' => [
            [
                'From' => [
                'Email' => "webdesignort@gmail.com",
                'Name' => "Web Design"
                ],
                'To' => [
                [
                    'Email' => "leobelizquierdo@gmail.com",
                    'Name' => "Julio"
                ]
                ],
                'Subject' => "Greetings from ".$name.".",
                'TextPart' => $message,
                'CustomID' => "AppGettingStartedTest"
            ]
            ]
        ];
        $response = $mj->post(Resources::$Email, ['body' => $body]);
        $response->success() && var_dump($response->getData());
    }
?>