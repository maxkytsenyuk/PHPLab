<?php

//header("Location: http://google.com",TRUE,301);

header("HTTP/1.1 301 Moved Permanently");
header("Location: http://google.com");
exit();