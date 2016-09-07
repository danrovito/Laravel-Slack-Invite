<?php

namespace Darovi\LaravelSlackInvite;

class Slack
{
    public static function invite($email)
    {
        $slackInviteUrl = 'https://'.env('SLACK_HOSTNAME').'.slack.com/api/users.admin.invite?t='.time();

        $queries = [
            'email'      => urlencode($email),
            'token'      => env('SLACK_TOKEN'),
            'set_active' => true,
            '_attempts'  => '1',
        ];

        $query_string = '';

        foreach ($queries as $key => $value) {
            $query_string .= $key.'='.$value.'&';
        }

        // open connection
        $ch = curl_init();

        // set the url, number of POST vars, POST data
        curl_setopt($ch, CURLOPT_URL, $slackInviteUrl);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POST, count($queries));
        curl_setopt($ch, CURLOPT_POSTFIELDS, $query_string);

        // exec
        $json = curl_exec($ch);

        // close connection
        curl_close($ch);

        return $json;
    }
}
