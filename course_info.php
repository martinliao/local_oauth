<?php

require_once '../../config.php';
require_once __DIR__.'/lib.php';

\core\session\manager::write_close();
//debugBreak();
$server = oauth_get_server();
if (!$server->verifyResourceRequest(OAuth2\Request::createFromGlobals())) {
    $logparams = array('other' => array('cause' => '
    '));
    $event = \local_oauth\event\user_info_request_failed::create($logparams);
    $event->trigger();

    $server->getResponse()->send();
    die();
}


$token = $server->getAccessTokenData(OAuth2\Request::createFromGlobals());
if (isset($token['user_id']) && !empty($token['user_id'])) {

    //$user = $DB->get_record('user', array('id'=>$token['user_id']), 'id,auth,username,idnumber,firstname,lastname,email,lang,country,phone1,address,description');
    $userid = $token['user_id'];
    $courses = enrol_get_users_courses($userid, true, 'id, shortname, fullname, idnumber, visible,
                   summary, summaryformat, format, showgrades, lang, enablecompletion, category, startdate, enddate');
    if (!$courses) {
        $logparams = array('other' => array('cause' => 'user_not_found'));
        $event = \local_oauth\event\user_info_request_failed::create($logparams);
        $event->trigger();

        $response->send();
    }

    $request = OAuth2\Request::createFromGlobals();
    $response = new OAuth2\Response();
    $scopeRequired = 'course_info';
//debugBreak();
    if (!$server->verifyResourceRequest($request, $response, $scopeRequired)) {
        $logparams = array('relateduserid' => $userid, 'other' => array('cause' => 'insufficient_scope'));
        $event = \local_oauth\event\user_info_request_failed::create($logparams);
        $event->trigger();

          // if the scope required is different from what the token allows, this will send a "401 insufficient_scope" error
          $response->send();
    }
    else{
        $logparams = array('userid' => $userid);
        $event = \local_oauth\event\user_info_request::create($logparams);
        $event->trigger();
        echo json_encode($courses);
    }
} else {
    $logparams = array('other' => array('cause' => 'invalid_token'));
    $event = \local_oauth\event\user_info_request_failed::create($logparams);
    $event->trigger();

    $server->getResponse()->send();
}
