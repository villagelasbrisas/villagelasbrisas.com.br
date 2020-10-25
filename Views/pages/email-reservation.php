<?php

$emailReservationPage = '
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>E-mail de reserva</title>
</head>
<body style="margin: 0; padding: 0;">
    <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" style="border-collapse: collapse; max-width: 600px;">
        <tr>
            <td align="center" bgcolor="#00AA88" style="padding: 30px 0;">
                <img src="http://www.villagelasbrisas.com.br/Views/pages/img/logo-contorno.png" alt="Logo Las Brisas" style="display: block;" />
            </td>
        </tr>
        <tr>
            <td bgcolor="#ffffff" style="padding: 40px 30px 40px 30px;">
                <table border="0" cellpadding="0" cellspacing="0" width="100%">
                    <tr>
                        <td style="color: #153643; font-family: Arial, sans-serif; font-size: 22px;">
                            <b>E-mail reserva - ' . $name . '</b>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding: 20px 0 30px 0; color: #153643; font-family: Arial, sans-serif; font-size: 18px;">
                            ' . $message . '
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                <tr>
                                    <td width="50%" valign="top" style="padding: 25px 0;">
                                        <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                            <tr>
                                                <td align="center">
                                                    <img src="https://www.villagelasbrisas.com.br/Views/pages/img/icons/adults.png" alt="Check-In" width="57" height="57" style="display: block;" />
                                                </td>
                                            </tr>
                                            <tr>
                                                <td align="center" style="padding-top: 10px; color: #00AACC; font-family: Arial, sans-serif; font-size: 21px;">
                                                    <b>' . $adults . '</b>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                    <td width="50%" valign="top" style="padding: 25px 0;">
                                        <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                            <tr>
                                                <td align="center">
                                                    <img src="https://www.villagelasbrisas.com.br/Views/pages/img/icons/baby.png" alt="Check-Out" width="57" height="57" style="display: block;" />
                                                </td>
                                            </tr>
                                            <tr>
                                                <td align="center" style="padding-top: 10px; color: #00AACC; font-family: Arial, sans-serif; font-size: 21px;">
                                                    <b>' . $kids . '</b>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="50%" valign="top" style="padding: 25px 0;">
                                        <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                            <tr>
                                                <td align="center">
                                                    <img src="https://www.villagelasbrisas.com.br/Views/pages/img/icons/calendar.png" alt="Check-In" width="50" height="50" style="display: block;" />
                                                </td>
                                            </tr>
                                            <tr>
                                                <td align="center" style="padding-top: 10px; color: #00AACC; font-family: Arial, sans-serif; font-size: 18px;">
                                                    <b>' . $checkin . '</b>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                    <td width="50%" valign="top" style="padding: 25px 0;">
                                        <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                            <tr>
                                                <td align="center">
                                                    <img src="https://www.villagelasbrisas.com.br/Views/pages/img/icons/calendar.png" alt="Check-Out" width="50" height="50" style="display: block;" />
                                                </td>
                                            </tr>
                                            <tr>
                                                <td align="center" style="padding-top: 10px; color: #00AACC; font-family: Arial, sans-serif; font-size: 18px;">
                                                    <b>' . $checkout . '</b>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td bgcolor="#FF9035" style="padding: 30px 30px 30px 30px;">
                <table border="0" cellpadding="0" cellspacing="0" width="100%">
                    <tr>
                        <td align="right">
                            <table border="0" cellpadding="0" cellspacing="0">
                                <tr>
                                    <td style="color: #ffffff; font-family: Arial, sans-serif; font-size: 14px;" width="75%">
                                        &reg; Village Las Brisas, Vera Cruz - BA 2020 <br/>

                                        <a href="#" style="color: #ffffff;">
                                            <font color="#ffffff">
                                                Remova sua inscrição
                                            </font>
                                        </a>

                                        desse e-mail marketing, instantaneamente.
                                    </td>
                                    <td>
                                        <a href="https://www.facebook.com/villagelasbrisas" target="_blank">
                                            <img src="https://www.villagelasbrisas.com.br/Views/pages/img/icons/facebook.png" alt="Facebook" width="38" height="38" style="display: block;" border="0" />
                                        </a>
                                    </td>
                                    <td style="font-size: 0; line-height: 0;" width="20">&nbsp;</td>
                                    <td>
                                        <a href="https://www.instagram.com/villagelasbrisas" target="_blank">
                                            <img src="https://www.villagelasbrisas.com.br/Views/pages/img/icons/instagram.png" alt="Instagram" width="32" height="32" style="display: block;" border="0" />
                                        </a>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>
</html>
';

return $emailReservationPage;

?>
