<<<<<<< HEAD
<?php

namespace Iyzipay\Model\Mapper;

use Iyzipay\Model\CheckoutFormInitializeResource;

class CheckoutFormInitializeResourceMapper extends IyzipayResourceMapper
{
    public static function create($rawResult = null)
    {
        return new CheckoutFormInitializeMapper($rawResult);
    }

    public function mapCheckoutFormInitializeResourceFrom(CheckoutFormInitializeResource $initialize, $jsonObject)
    {
        parent::mapResourceFrom($initialize, $jsonObject);

        if (isset($jsonObject->token)) {
            $initialize->setToken($jsonObject->token);
        }
        if (isset($jsonObject->checkoutFormContent)) {
            $initialize->setCheckoutFormContent($jsonObject->checkoutFormContent);
        }
        if (isset($jsonObject->tokenExpireTime)) {
            $initialize->setTokenExpireTime($jsonObject->tokenExpireTime);
        }
        if (isset($jsonObject->paymentPageUrl)) {
            $initialize->setPaymentPageUrl($jsonObject->paymentPageUrl);
        }
        if (isset($jsonObject->signature)) {
            $initialize->setSignature($jsonObject->signature);
        }
        return $initialize;
    }

    public function mapCheckoutFormInitializeResource(CheckoutFormInitializeResource $initialize)
    {
        return $this->mapCheckoutFormInitializeResourceFrom($initialize, $this->jsonObject);
    }
=======
<?php

namespace Iyzipay\Model\Mapper;

use Iyzipay\Model\CheckoutFormInitializeResource;

class CheckoutFormInitializeResourceMapper extends IyzipayResourceMapper
{
    public static function create($rawResult = null)
    {
        return new CheckoutFormInitializeMapper($rawResult);
    }

    public function mapCheckoutFormInitializeResourceFrom(CheckoutFormInitializeResource $initialize, $jsonObject)
    {
        parent::mapResourceFrom($initialize, $jsonObject);

        if (isset($jsonObject->token)) {
            $initialize->setToken($jsonObject->token);
        }
        if (isset($jsonObject->checkoutFormContent)) {
            $initialize->setCheckoutFormContent($jsonObject->checkoutFormContent);
        }
        if (isset($jsonObject->tokenExpireTime)) {
            $initialize->setTokenExpireTime($jsonObject->tokenExpireTime);
        }
        if (isset($jsonObject->paymentPageUrl)) {
            $initialize->setPaymentPageUrl($jsonObject->paymentPageUrl);
        }
        if (isset($jsonObject->signature)) {
            $initialize->setSignature($jsonObject->signature);
        }
        return $initialize;
    }

    public function mapCheckoutFormInitializeResource(CheckoutFormInitializeResource $initialize)
    {
        return $this->mapCheckoutFormInitializeResourceFrom($initialize, $this->jsonObject);
    }
>>>>>>> 0aeda949 (Updating backend files in main_files)
}