<?php
/**
 * WebAPI CORS
 * https://[TLD]/[PASS]/?u=https://[API]
 */
 header("Access-Control-Allow-Origin: *");
 echo file_get_content($_GET["u"]);
