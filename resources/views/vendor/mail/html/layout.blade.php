<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office" lang="ru">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta http-equiv="X-UA-Compatiable" content="IE=edge" />

        <meta name="color-scheme" content="light">
        <meta name="supported-color-schemes" content="light">

        

        <style>

            table{
                border-spacing: 0;
                mso-cellspacing: 0;
                mso-padding-alt: 0;
            }

            td {
                padding: 0;
            }

            #outlook a {
                padding: 0;
            }

            a {
                text-decoration: none;
                color: black;
                font-size: 16px;
            }

          

            @media only screen and (max-width: 600px) {
                .inner-body {
                width: 100% !important;
                }

                .header {
                width: 100% !important;
                }

                .footer {
                width: 100% !important;
                }
            }

            @media only screen and (max-width: 500px) {
                .button {
                width: 100% !important;
                }
            }

        </style>
    </head>

    <body>
        <table class="wrapper" width="100%" cellpadding="0" cellspacing="0" role="presentation">
            <tr>
                <td align="center">
                    <table class="content" width="100%" cellpadding="0" cellspacing="0" role="presentation">
 
                        {{ $header ?? '' }}
                        {{ $congratulation ?? '' }}
                        {{ $listingtitle ?? '' }}
                        {{ $listing ?? '' }}
                        {{ $orderinfo ?? '' }}
                        {{ $counter ?? '' }}
                        {{ $help ?? '' }}
                        {{ $helpdata ?? '' }}
                        {{ $fastlinkstitle ?? '' }}
                        {{ $policy ?? '' }}


                        <!-- Email Body -->
                        <!-- <tr>
                            <td class="body" width="100%" cellpadding="0" cellspacing="0">
                                <table class="inner-body" align="center" width="570" cellpadding="0" cellspacing="0" role="presentation"> -->

                                    <!-- Body content -->
                                    <!-- <tr>
                                        <td class="content-cell">
                                        {{ Illuminate\Mail\Markdown::parse($slot) }}
                                        {{ $subcopy ?? '' }}
                                        </td>
                                    </tr> -->

                                <!-- </table>
                            </td>
                        </tr> -->

                        {{ $footer ?? '' }}

                    </table>
                </td>
            </tr>
        </table>
    </body>

</html>
