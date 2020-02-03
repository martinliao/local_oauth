<?php

$string['pluginname'] = 'OAuth provider';
$string['settings'] = 'OAuth provider settings';
$string['addclient'] = 'Add new client';
$string['addotherclient'] = 'Add other client';
$string['addnodesclient'] = 'Add Àgora-Nodes client';
$string['addwordpressclient'] = 'Add XTECBlocs client';

$string['client_id'] = 'Client identifier';
$string['client_secret'] = 'Client secret Key';
$string['redirect_uri'] = 'Redirect URL';
$string['grant_types'] = 'Grant Types';
$string['scope'] = 'Scope';
$string['user_id'] = 'User ID';
$string['wp_url'] = 'Blog URL';

$string['auth_question'] = '應用程式 <strong>{$a}</strong> 要求授權連結你的帳號，確認同意嗎? Do you want to authorize <strong>{$a}</strong>?';
$string['auth_question_desc'] = '這個應用程式要求存取您的帳號下列的資訊或服務:';
$string['auth_question_login'] = 'This application is to access your login information';


$string['oauth:manageclients'] = 'Manage OAuth provider Clients';

$string['client_not_exists'] = 'Client does not exist';
$string['saveok'] = 'Client successfully saved';
$string['confirmdeletestr'] = 'Are you sure you want to delete client {$a}?';
$string['delok'] = 'Client successfully deleted';
$string['client_id_existing_error'] = 'The Client identifier specified already exists, please choose another one';
$string['insert_error'] = 'Error occurred creating client';
$string['update_error'] = 'Error occurred updating client data';
$string['delete_error'] = 'Error occurred deleting client';

$string['scope_user_info'] = '用戶帳號資訊';
$string['scope_course_info'] = 'Course Profile Information';

$string['event_user_not_granted'] = 'User not granted';
$string['event_user_granted'] = 'User granted';
$string['event_user_info_request'] = 'User info requested';
$string['event_user_info_request_failed'] = 'User info request failed';

$string['client_id_help'] = 'Identifier to be used from the client form in order to reference this provider. It has to be unique. For instance, a valid identifier could be "blog1" or "nodes".';
$string['redirect_uri_help'] = 'URI where to redirect after login. For instance, for XTECBlocs or Nodes, the redirect URI are like: <ul><li>XTECBlocs: <i>https://blocs.xtec.cat/nomdelbloc/wp-content/plugins/wordpress-social-login/hybridauth/callbacks/moodle.php</i></li><li>NODES: <i>https://agora.xtec.cat/nomdelcentre/wp-content/plugins/wordpress-social-login/hybridauth/callbacks/moodle.php</i></li></ul>';
