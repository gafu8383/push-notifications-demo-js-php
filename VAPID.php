<?php
require_once("vendor/autoload.php");

use Minishlink\WebPush\VAPID;

print_r(VAPID::createVapidKeys());

/*
[publicKey] => BI3cmMF3aztywu1vkGxfTGpR2hFEhFSnhE1BQafj08LECgr60ET6hEMp84zNEEMYLM5_S_D7kydUdRmHD-tV5Fk
[privateKey] => 5exnDTaspZ5mePOgMAF0JSVkndMmKs1zB7ddBZPPnFQ
*/
