<?php

# verify that user is logged in
$User->check_user_session();
# perm check
$User->check_module_permissions ("pstn", User::ACCESS_R, true, false);
# show all prefix objects
include(dirname(__FILE__)."/../../tools/pstn-prefixes/index.php");