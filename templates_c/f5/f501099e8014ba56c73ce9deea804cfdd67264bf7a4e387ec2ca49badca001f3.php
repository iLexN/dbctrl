<?php

/* pp_email_client.html */
class __TwigTemplate_83ff4505ac80316b567b365fa0a222781409b7882c1bb857d6da174c0e195e34 extends Twig_Template
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
        echo "<!-- saved from url=(0022)http://internet.e-mail -->
<!doctype html>
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
                                    <td width=\"200px;\"><a href=\"http://www.pacificprime.com/\" target=\"_blank\"><img width=\"200\" src=\"http://www.pacificprime.com/assets/b/logo.png\" height=\"57\" alt=\"Pacific Prime\" style=\"display:block\" border=\"0\" target=\"_blank\"></a></td>
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
        // line 43
        if (isset($context["firstname"])) { $_firstname_ = $context["firstname"]; } else { $_firstname_ = null; }
        echo twig_escape_filter($this->env, $_firstname_, "html", null, true);
        echo "  ";
        if (isset($context["lastname"])) { $_lastname_ = $context["lastname"]; } else { $_lastname_ = null; }
        echo twig_escape_filter($this->env, $_lastname_, "html", null, true);
        echo ",<br /><br />Thank you for your insurance enquiry. One of our professional advisors will contact you soon to clarify the details and prepare a quotation that suits your needs and requirements.</p>
                            <p style=\"margin:15px 0;\">We look forward to working with you and will be in touch soon. If you wish to contact one of our advisors please call one of the numbers below and quote reference ";
        // line 44
        if (isset($context["uid"])) { $_uid_ = $context["uid"]; } else { $_uid_ = null; }
        echo twig_escape_filter($this->env, $_uid_, "html", null, true);
        echo "</p>
                            <p style=\"margin:15px 0;\">Kind Regards<br />Pacific Prime Team</p>
                        </td>
                    </tr>
                    <tr>
                        <td style=\"background-color:#fff;padding-bottom:10px;border-left:1px solid #dddee1;border-right:1px solid #dddee1;border-bottom:1px solid #dddee1; padding: 0 60px 40px;\">
                            <p style=\"font-size: 12px; line-height:1.3; color:#60666d; margin:15px 0;font-family: Arial\">
                                <strong>Hong Kong:</strong> Unit 1-11, 25th Floor, One Hung To Road, Hong Kong. +852 3113 2112<br />
                                <strong>Singapore:</strong> 3 Pickering Street,02-27, China Square Central, Singapore. +65 6536 6173<br />
                                <strong>Shanghai:</strong> 19th floor, Yunhai building, 1329 Middle Huaihai road, Xuhui district, Shanghai, China. +68 (0)21 6445 4592
                            </p>
                            <table width=\"500\" class=\"btn\">
                                <tr>
                                    <td align=\"center\" style=\"background: #28c; color: #fff; font-size: 30px; font-weight: 600; text-align: center;  width:500px;padding-top: 20px ;padding-bottom:20px ;padding-left:60px;padding-right:60px;font-family:arial\">
                                        <a href=\"http://www.pacificprime.com/detailed-quote/quote-infomation/?uid=";
        // line 58
        if (isset($context["uid"])) { $_uid_ = $context["uid"]; } else { $_uid_ = null; }
        echo twig_escape_filter($this->env, $_uid_, "html", null, true);
        echo "\" style=\"text-decoration:none;  color:#fff; line-heigth:40px\">Click to Find Plans Now</a>
                                    </td>
                                </tr>
                            </table>
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
        return "pp_email_client.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 58,  71 => 44,  63 => 43,  19 => 1,);
    }
}
/* <!-- saved from url=(0022)http://internet.e-mail -->*/
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
/*                                     <td width="200px;"><a href="http://www.pacificprime.com/" target="_blank"><img width="200" src="http://www.pacificprime.com/assets/b/logo.png" height="57" alt="Pacific Prime" style="display:block" border="0" target="_blank"></a></td>*/
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
/*                             <p style="margin:15px 0;">Kind Regards<br />Pacific Prime Team</p>*/
/*                         </td>*/
/*                     </tr>*/
/*                     <tr>*/
/*                         <td style="background-color:#fff;padding-bottom:10px;border-left:1px solid #dddee1;border-right:1px solid #dddee1;border-bottom:1px solid #dddee1; padding: 0 60px 40px;">*/
/*                             <p style="font-size: 12px; line-height:1.3; color:#60666d; margin:15px 0;font-family: Arial">*/
/*                                 <strong>Hong Kong:</strong> Unit 1-11, 25th Floor, One Hung To Road, Hong Kong. +852 3113 2112<br />*/
/*                                 <strong>Singapore:</strong> 3 Pickering Street,02-27, China Square Central, Singapore. +65 6536 6173<br />*/
/*                                 <strong>Shanghai:</strong> 19th floor, Yunhai building, 1329 Middle Huaihai road, Xuhui district, Shanghai, China. +68 (0)21 6445 4592*/
/*                             </p>*/
/*                             <table width="500" class="btn">*/
/*                                 <tr>*/
/*                                     <td align="center" style="background: #28c; color: #fff; font-size: 30px; font-weight: 600; text-align: center;  width:500px;padding-top: 20px ;padding-bottom:20px ;padding-left:60px;padding-right:60px;font-family:arial">*/
/*                                         <a href="http://www.pacificprime.com/detailed-quote/quote-infomation/?uid={{ uid }}" style="text-decoration:none;  color:#fff; line-heigth:40px">Click to Find Plans Now</a>*/
/*                                     </td>*/
/*                                 </tr>*/
/*                             </table>*/
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
