<?php # -*- coding: utf-8 -*-

namespace Mollie\WooCommerceTests\Unit\WC\Helper;

use function Brain\Monkey\Functions\expect;
use Mollie\WooCommerceTests\TestCase;
use Mollie_WC_Helper_PaymentMethodsIconUrl as Testee;

/**
 * Class PaymentMethodIconUrl
 */
class Payment_Method_Icon_Url_Test extends TestCase
{
    /**
     * Test PaymentMethodIconUrl returns svg url string when svgUrlForPaymentMethod is called
     *
     * @test
     */
    public function svgUrlForPaymentMethodReturnsSVGString()
    {
        /*
         * Setup stubs
         */
        $image = json_decode('{
                            "size1x": "https://mollie.com/external/icons/payment-methods/ideal.png",
                            "size2x": "https://mollie.com/external/icons/payment-methods/ideal%402x.png",
                            "svg": "https://mollie.com/external/icons/payment-methods/ideal.svg"
                            }');
        $paymentMethodsList = [
            "ideal" => $image
        ];

        /*
         * Setup Testee
         */
        $testee = new Testee ($paymentMethodsList);

        /*
         * Execute Test
         */
        $result = $testee->svgUrlForPaymentMethod('ideal');
        $idealSvg = '<svg style="float:right"  width="32" height="24" viewBox="0 0 32 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M4.12903 0.5H27.871C29.8701 0.5 31.5 2.13976 31.5 4.17391V19.8261C31.5 21.8602 29.8701 23.5 27.871 23.5H4.12903C2.12986 23.5 0.5 21.8602 0.5 19.8261V4.17391C0.5 2.13976 2.12986 0.5 4.12903 0.5Z" fill="white" stroke="#E6E6E6"/>
<path fill-rule="evenodd" clip-rule="evenodd" d="M0 0V12.5212H8.30034C10.1134 12.4942 11.5498 12.0462 12.569 11.1836C13.8086 10.1345 14.4372 8.47817 14.4372 6.26058C14.4372 5.20054 14.2719 4.24969 13.9458 3.4345C13.6339 2.65466 13.173 1.9916 12.5758 1.46371C11.5241 0.534015 10.0479 0.031316 8.30034 0.00275604C8.30034 0.0027402 5.53356 0.00182163 0 0Z" transform="translate(8.77417 5.73972)" fill="white"/>
<path fill-rule="evenodd" clip-rule="evenodd" d="M0 3.82108H2.31348V0H0V3.82108Z" transform="translate(10.3789 12.7876)" fill="#0A0B09"/>
<path fill-rule="evenodd" clip-rule="evenodd" d="M2.61911 1.30262C2.61911 2.02199 2.03276 2.6055 1.30955 2.6055C0.586377 2.6055 0 2.02199 0 1.30262C0 0.583247 0.586377 0 1.30955 0C2.03276 0 2.61911 0.583247 2.61911 1.30262Z" transform="translate(10.2479 9.57452)" fill="#0A0B09"/>
<path fill-rule="evenodd" clip-rule="evenodd" d="M8.14328 0.831615C9.75192 0.831615 11.0926 1.26515 12.0205 2.08536C13.0693 3.01254 13.6011 4.41727 13.6011 6.26058C13.6011 9.9137 11.8159 11.6896 8.14328 11.6896C7.85786 11.6896 1.56999 11.6896 0.836044 11.6896C0.836044 10.9446 0.836044 1.57658 0.836044 0.831615C1.56999 0.831615 7.85786 0.831615 8.14328 0.831615ZM8.30034 0H0V12.5212H8.30034V12.5188C10.1134 12.4942 11.5498 12.0462 12.569 11.1836C13.8086 10.1345 14.4372 8.47817 14.4372 6.26058C14.4372 5.20054 14.2719 4.24969 13.9458 3.4345C13.6339 2.65466 13.173 1.9916 12.5758 1.46371C11.5241 0.534015 10.0479 0.031316 8.30034 0.00275604C8.30034 0.00273228 8.30034 0 8.30034 0Z" transform="translate(8.77417 5.73972)" fill="#0A0B09"/>
<path fill-rule="evenodd" clip-rule="evenodd" d="M8.14328 0.831615C9.75192 0.831615 11.0926 1.26515 12.0205 2.08536C13.0693 3.01254 13.6011 4.41727 13.6011 6.26058C13.6011 9.9137 11.8159 11.6896 8.14328 11.6896C7.85786 11.6896 1.56999 11.6896 0.836044 11.6896C0.836044 10.9446 0.836044 1.57658 0.836044 0.831615C1.56999 0.831615 7.85786 0.831615 8.14328 0.831615ZM8.30034 0H0V12.5212H8.30034V12.5188C10.1134 12.4942 11.5498 12.0462 12.569 11.1836C13.8086 10.1345 14.4372 8.47817 14.4372 6.26058C14.4372 5.20054 14.2719 4.24969 13.9458 3.4345C13.6339 2.65466 13.173 1.9916 12.5758 1.46371C11.5241 0.534015 10.0479 0.031316 8.30034 0.00275604C8.30034 0.00273228 8.30034 0 8.30034 0Z" transform="translate(8.77417 5.73972)" fill="#0A0B09"/>
<path fill-rule="evenodd" clip-rule="evenodd" d="M2.93449 9.02922H0V0H2.93449H2.81606C5.26332 0 7.86827 0.960705 7.86827 4.52648C7.86827 8.29614 5.26332 9.02922 2.81606 9.02922H2.93449Z" transform="translate(13.7546 7.58371)" fill="#CD0067"/>
<path fill-rule="evenodd" clip-rule="evenodd" d="M0.440403 0.368287V1.8043H0.770354C0.893754 1.8043 0.982829 1.7974 1.03758 1.7836C1.10924 1.76585 1.16869 1.73577 1.21599 1.69338C1.26324 1.65099 1.30184 1.58123 1.3317 1.48412C1.36156 1.38701 1.37649 1.25465 1.37649 1.08704C1.37649 0.919433 1.36156 0.79077 1.3317 0.701027C1.30184 0.611332 1.26004 0.541334 1.20629 0.491057C1.15255 0.440756 1.08435 0.406755 1.00175 0.388982C0.940023 0.375201 0.819108 0.368287 0.638976 0.368287H0.440403ZM0 0H0.805683C0.987391 0 1.12589 0.0138291 1.22122 0.0414863C1.34928 0.0790277 1.45899 0.145723 1.55034 0.241573C1.64168 0.337399 1.71117 0.454727 1.75884 0.593535C1.8065 0.732344 1.83034 0.903514 1.83034 1.10702C1.83034 1.28587 1.80798 1.43998 1.76331 1.5694C1.70871 1.7275 1.63076 1.85543 1.52951 1.95325C1.45304 2.02736 1.34978 2.08514 1.21972 2.12663C1.1224 2.15728 0.992359 2.17258 0.829522 2.17258H0V0Z" transform="translate(13.2489 9.91452)" fill="#FFFFFE"/>
<path fill-rule="evenodd" clip-rule="evenodd" d="M0 2.17258V0H1.61686V0.368287H0.440428V0.849435H1.53474V1.21772H0.440428V1.8043H1.65866V2.17258H0Z" transform="translate(15.5775 9.91452)" fill="#FFFFFE"/>
<path fill-rule="evenodd" clip-rule="evenodd" d="M1.37974 1.31127L1.07866 0.506382L0.783636 1.31127H1.37974ZM2.19163 2.17258H1.71186L1.52127 1.67955H0.648674L0.467897 2.17258H0L0.848777 0H1.31818L2.19163 2.17258Z" transform="translate(17.5109 9.91452)" fill="#FFFFFE"/>
<path fill-rule="evenodd" clip-rule="evenodd" d="M0 2.15476V0H0.440428V1.78647H1.53772V2.15476H0Z" transform="translate(20.0709 9.93234)" fill="#FFFFFE"/>
</svg>
';
        self::assertEquals($idealSvg, $result );
    }

    /**
     * Test PaymentMethodIconUrl returns svg url string when svgUrlForPaymentMethod is called
     *
     * @test
     */
    public function svgUrlForPaymentMethodFallBackToAssets()
    {
        /*
         * Setup stubs
         */
        $paymentMethod = 'ideal';
        $paymentMethodsList = [];
        expect('esc_attr')
            ->once()
            ->withAnyArgs()
            ->andReturn("/images/ideal.svg");

        /*
         * Setup Testee
         */
        $testee = new Testee($paymentMethodsList);

        /*
         * Execute Test
         */
        $result = $testee->svgUrlForPaymentMethod($paymentMethod);
        $expected = '<img src="/images/ideal.svg" style="width: 25px; vertical-align: bottom;" />';

        self::assertStringEndsWith($expected, $result);
    }
}
