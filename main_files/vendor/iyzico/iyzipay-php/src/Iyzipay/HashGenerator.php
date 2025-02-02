<<<<<<< HEAD
<?php

namespace Iyzipay;

class HashGenerator
{
    public static function generateHash($apiKey, $secretKey, $randomString, $request)
    {
        $pKIRequestString = $request ? $request->toPKIRequestString() : '';
        $hashStr = $apiKey . $randomString . $secretKey . $pKIRequestString;
        return base64_encode(sha1($hashStr, true));
    }
=======
<?php

namespace Iyzipay;

class HashGenerator
{
    public static function generateHash($apiKey, $secretKey, $randomString, $request)
    {
        $pKIRequestString = $request ? $request->toPKIRequestString() : '';
        $hashStr = $apiKey . $randomString . $secretKey . $pKIRequestString;
        return base64_encode(sha1($hashStr, true));
    }
>>>>>>> 0aeda949 (Updating backend files in main_files)
}