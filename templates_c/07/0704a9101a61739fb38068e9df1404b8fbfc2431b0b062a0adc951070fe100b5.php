<?php

/* umi_email_client.html */
class __TwigTemplate_0cc4bc5205de2dc0f37e41db9a47d0561683395c2758b49c5431845279dd84b4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!doctype html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <title>EDM</title>
    <meta name=\"viewport\" content=\"width=device-width\" />
    <style type=\"text/css\">
        body {margin:0; padding:0;}
        @media only screen and (max-device-width: 550px) {
            table {width:100%;}
            .mainWrapper .hidden {display:none;}
            .mainWrapper .hidden2 {display:none;}
            .mainWrapper > tbody > tr > td {padding-left:10px !important; padding-right:10px !important;}
            table.btn td{padding:20px !important; line-height:1.3 !important;}
        }
    </style>
</head>
<body>
    <table cellpadding=\"0\" border=\"0\" width=\"100%\" cellspacing=\"0\">
        <tr>
            <td style=\"background-color:#F5F7FA;\">
                <table cellpadding=\"0\" border=\"0\" width=\"600\" cellspacing=\"0\"  align=\"center\" class=\"mainWrapper\">
                    <tr class=\"hidden\">
                        <td style=\"font-size: 13px; color: #999;padding-top:10px;padding-bottom:10px;font-family:  Arial;\" align=\"center\">&nbsp;</td>
                    </tr>
                    <tr>
                        <td style=\"background-color:#fff;padding-top:10px;border-left:1px solid #dddee1;border-right:1px solid #dddee1;border-top:1px solid #dddee1\" align=\"center\">
                            <table cellpadding=\"0\" border=\"0\" width=\"100%\" cellspacing=\"0\" >
                                <tr>
                                    <td width=\"20\" class=\"hidden2\">&nbsp;</td>
                                    <td width=\"80px;\"><a href=\"http://www.uae-medical-insurance.com/\" target=\"_blank\"><img width=\"80\" src=\"http://resources.pacificprime.com/edm/school_conf/images/umi_80x57.jpg\" height=\"57\" alt=\"UAE\" style=\"display:block\" border=\"0\" target=\"_blank\"></a></td>
                                    <td width=\"20\" class=\"hidden2\">&nbsp;</td>
                                    <td width=\"162px;\"><a href=\"http://www.medstarinsurance.com/\" target=\"_blank\"><img width=\"162\" src=\"http://resources.pacificprime.com/edm/school_conf/images/medstar_162x57.jpg\" height=\"57\" alt=\"Medstar\" style=\"display:block\" border=\"0\" target=\"_blank\"></a></td>
                                    <td style=\"padding-right:20px;\">&nbsp;</td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td style=\"background-color:#fff;border-left:1px solid #dddee1;border-right:1px solid #dddee1;\" height=\"15\">&nbsp;</td>
                    </tr>
                    <tr>
                        <td style=\"background-color:#fff;border-bottom:0px solid #dddee1;border-left:1px solid #dddee1;border-right:1px solid #dddee1;padding:20px 60px 10px 60px;font-family: Arial;font-size:15px;color:#60666d;line-height:24px;\" align=\"left\">
                            <p style=\"margin:15px 0;\">Dear ";
        // line 44
        if (isset($context["firstname"])) { $_firstname_ = $context["firstname"]; } else { $_firstname_ = null; }
        echo twig_escape_filter($this->env, $_firstname_, "html", null, true);
        echo "  ";
        if (isset($context["lastname"])) { $_lastname_ = $context["lastname"]; } else { $_lastname_ = null; }
        echo twig_escape_filter($this->env, $_lastname_, "html", null, true);
        echo ",<br /><br />Thank you for your insurance enquiry. One of our professional advisors will contact you soon to clarify the details and prepare a quotation that suits your needs and requirements.</p>
                            <p style=\"margin:15px 0;\">We look forward to working with you and will be in touch soon. If you wish to contact one of our advisors please call one of the numbers below and quote reference ";
        // line 45
        if (isset($context["uid"])) { $_uid_ = $context["uid"]; } else { $_uid_ = null; }
        echo twig_escape_filter($this->env, $_uid_, "html", null, true);
        echo "</p>
                            <p style=\"margin:15px 0;\">Kind Regards<br />UMI</p>
                        </td>
                    </tr>
                    <tr>
                        <td style=\"background-color:#fff;padding-bottom:10px;border-left:1px solid #dddee1;border-right:1px solid #dddee1;border-bottom:1px solid #dddee1; padding: 0 60px 40px;\">
                            <p style=\"font-size: 12px; line-height:1.3; color:#60666d; margin:15px 0;font-family: Arial\">
                                <strong>Dubai (Administrative office):</strong> 10th floor, Platinum Tower, Cluster 1, Jumeirah Lakes Towers, Dubai, UAE  Tel: +971 (0) 42 793 800 
                            </p>
                            <table width=\"500\" class=\"btn\">
                                <tr>
                                    <td align=\"center\" style=\"background: #28c; color: #fff; font-size: 30px; font-weight: 600; text-align: center;  width:500px;padding-top: 20px ;padding-bottom:20px ;padding-left:60px;padding-right:60px;font-family:arial\">
                                        <a href=\"http://www.uae-medical-insurance.com/detailed-quote/quote-infomation/?uid=";
        // line 57
        if (isset($context["uid"])) { $_uid_ = $context["uid"]; } else { $_uid_ = null; }
        echo twig_escape_filter($this->env, $_uid_, "html", null, true);
        echo "\" style=\"text-decoration:none;  color:#fff; line-heigth:40px\">Click to Find Plans Now</a>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td align=\"center\" style=\"font-size: 12px; color: #999;padding-top:10px;padding-bottom:10px;font-family:  Arial;\">
                            UAE-Medical-Insurance is owned and operated by Medstar Insurance Brokers LLC who is regulated and licensed by the UAE Insurance Authority (license number 12) and the Health Authority of Abu Dhabi. <br />
                            Registered Office: PO Box 113048, Abu Dhabi, UAE.
                        </td>
                    </tr>
                    <tr class=\"hidden\">
                        <td align=\"center\" style=\"font-size: 13px; color: #999;padding-top:10px;padding-bottom:10px;font-family:  Arial;\">&nbsp;</td>
                    </tr>
                </table>
            </td>
\t\t</tr>
\t</table>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "umi_email_client.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 57,  72 => 45,  64 => 44,  19 => 1,);
    }
}
/* <!doctype html>*/
/* <html lang="en">*/
/* <head>*/
/*     <meta charset="UTF-8">*/
/*     <title>EDM</title>*/
/*     <meta name="viewport" content="width=device-width" />*/
/*     <style type="text/css">*/
/*         body {margin:0; padding:0;}*/
/*         @media only screen and (max-device-width: 550px) {*/
/*             table {width:100%;}*/
/*             .mainWrapper .hidden {display:none;}*/
/*             .mainWrapper .hidden2 {display:none;}*/
/*             .mainWrapper > tbody > tr > td {padding-left:10px !important; padding-right:10px !important;}*/
/*             table.btn td{padding:20px !important; line-height:1.3 !important;}*/
/*         }*/
/*     </style>*/
/* </head>*/
/* <body>*/
/*     <table cellpadding="0" border="0" width="100%" cellspacing="0">*/
/*         <tr>*/
/*             <td style="background-color:#F5F7FA;">*/
/*                 <table cellpadding="0" border="0" width="600" cellspacing="0"  align="center" class="mainWrapper">*/
/*                     <tr class="hidden">*/
/*                         <td style="font-size: 13px; color: #999;padding-top:10px;padding-bottom:10px;font-family:  Arial;" align="center">&nbsp;</td>*/
/*                     </tr>*/
/*                     <tr>*/
/*                         <td style="background-color:#fff;padding-top:10px;border-left:1px solid #dddee1;border-right:1px solid #dddee1;border-top:1px solid #dddee1" align="center">*/
/*                             <table cellpadding="0" border="0" width="100%" cellspacing="0" >*/
/*                                 <tr>*/
/*                                     <td width="20" class="hidden2">&nbsp;</td>*/
/*                                     <td width="80px;"><a href="http://www.uae-medical-insurance.com/" target="_blank"><img width="80" src="http://resources.pacificprime.com/edm/school_conf/images/umi_80x57.jpg" height="57" alt="UAE" style="display:block" border="0" target="_blank"></a></td>*/
/*                                     <td width="20" class="hidden2">&nbsp;</td>*/
/*                                     <td width="162px;"><a href="http://www.medstarinsurance.com/" target="_blank"><img width="162" src="http://resources.pacificprime.com/edm/school_conf/images/medstar_162x57.jpg" height="57" alt="Medstar" style="display:block" border="0" target="_blank"></a></td>*/
/*                                     <td style="padding-right:20px;">&nbsp;</td>*/
/*                                 </tr>*/
/*                             </table>*/
/*                         </td>*/
/*                     </tr>*/
/*                     <tr>*/
/*                         <td style="background-color:#fff;border-left:1px solid #dddee1;border-right:1px solid #dddee1;" height="15">&nbsp;</td>*/
/*                     </tr>*/
/*                     <tr>*/
/*                         <td style="background-color:#fff;border-bottom:0px solid #dddee1;border-left:1px solid #dddee1;border-right:1px solid #dddee1;padding:20px 60px 10px 60px;font-family: Arial;font-size:15px;color:#60666d;line-height:24px;" align="left">*/
/*                             <p style="margin:15px 0;">Dear {{ firstname }}  {{ lastname }},<br /><br />Thank you for your insurance enquiry. One of our professional advisors will contact you soon to clarify the details and prepare a quotation that suits your needs and requirements.</p>*/
/*                             <p style="margin:15px 0;">We look forward to working with you and will be in touch soon. If you wish to contact one of our advisors please call one of the numbers below and quote reference {{ uid }}</p>*/
/*                             <p style="margin:15px 0;">Kind Regards<br />UMI</p>*/
/*                         </td>*/
/*                     </tr>*/
/*                     <tr>*/
/*                         <td style="background-color:#fff;padding-bottom:10px;border-left:1px solid #dddee1;border-right:1px solid #dddee1;border-bottom:1px solid #dddee1; padding: 0 60px 40px;">*/
/*                             <p style="font-size: 12px; line-height:1.3; color:#60666d; margin:15px 0;font-family: Arial">*/
/*                                 <strong>Dubai (Administrative office):</strong> 10th floor, Platinum Tower, Cluster 1, Jumeirah Lakes Towers, Dubai, UAE  Tel: +971 (0) 42 793 800 */
/*                             </p>*/
/*                             <table width="500" class="btn">*/
/*                                 <tr>*/
/*                                     <td align="center" style="background: #28c; color: #fff; font-size: 30px; font-weight: 600; text-align: center;  width:500px;padding-top: 20px ;padding-bottom:20px ;padding-left:60px;padding-right:60px;font-family:arial">*/
/*                                         <a href="http://www.uae-medical-insurance.com/detailed-quote/quote-infomation/?uid={{ uid }}" style="text-decoration:none;  color:#fff; line-heigth:40px">Click to Find Plans Now</a>*/
/*                                     </td>*/
/*                                 </tr>*/
/*                             </table>*/
/*                         </td>*/
/*                     </tr>*/
/*                     <tr>*/
/*                         <td align="center" style="font-size: 12px; color: #999;padding-top:10px;padding-bottom:10px;font-family:  Arial;">*/
/*                             UAE-Medical-Insurance is owned and operated by Medstar Insurance Brokers LLC who is regulated and licensed by the UAE Insurance Authority (license number 12) and the Health Authority of Abu Dhabi. <br />*/
/*                             Registered Office: PO Box 113048, Abu Dhabi, UAE.*/
/*                         </td>*/
/*                     </tr>*/
/*                     <tr class="hidden">*/
/*                         <td align="center" style="font-size: 13px; color: #999;padding-top:10px;padding-bottom:10px;font-family:  Arial;">&nbsp;</td>*/
/*                     </tr>*/
/*                 </table>*/
/*             </td>*/
/* 		</tr>*/
/* 	</table>*/
/* </body>*/
/* </html>*/
