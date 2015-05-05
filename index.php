<?php

require 'vendor/autoload.php';

use OTPHP\TOTP;

class P extends TOTP
{

    /**
     * @return string The secret of the OTP
     */
    public function getSecret()
    {
        return 'JBSWY3DPEHPK3PXP';
    }

    /**
     * @return string The label of the OTP
     */
    public function getLabel()
    {
        return 'vorname.nachname@talk-point.de';
    }

    /**
     * @return string The issuer
     */
    public function getIssuer()
    {
        return 'TP-Auth';
    }

    /**
     * @return bool If true, the issuer will be added as a parameter in the provisioning URI
     */
    public function isIssuerIncludedAsParameter()
    {
        return true;
    }

    /**
     * @return int Number of digits in the OTP
     */
    public function getDigits()
    {
        return 6;
    }

    /**
     * @return string Digest algorithm used to calculate the OTP. Possible values are 'md5', 'sha1', 'sha256' and 'sha512'
     */
    public function getDigest()
    {
        return 'sha1';
    }

    /**
     * @return int Get the interval of time for OTP generation (a non-null positive integer, in second)
     */
    public function getInterval()
    {
        return 30;
    }
}

$totp = new P();
?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="js/jquery.qrcode-0.11.0.js"></script>
<script src="js/script.js"></script>
<div id="qrcontainer">
  <a id="qrstring" href="<?php echo $totp->getProvisioningUri();?>">Secret: JBSWY3DPEHPK3PXP</a>
</div>

<div>
<p>Current Token: <?php echo $totp->now(); ?></p>
<p>Url: <?php echo $totp->getProvisioningUri();?> </p>
</div>


