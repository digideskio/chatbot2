<?php
return function(JAXL $client, XMPPStanza $msg, array $params) {
	if(empty($params)) {
		return "Usage: #say <message>";
	} else {
		return implode(" ", $params);
	}
};
