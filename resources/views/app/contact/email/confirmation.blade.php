<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact Confirmation</title>
</head>
<body style="margin: 0; padding: 0; background-color: #f7f6f8; font-family: 'Noto Sans', sans-serif;">
<table width="100%" cellpadding="0" cellspacing="0" style="padding: 40px 0;">
    <tr>
        <td align="center">
            <table width="600" cellpadding="0" cellspacing="0"
                   style="background-color: #ffffff; border-radius: 12px; padding: 40px; box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);">
                <tr>
                    <td align="center"
                        style="background-color: #7D62F4; border-top-left-radius: 12px; border-top-right-radius: 12px; padding: 20px;">
                        <h2 style="margin: 0; font-size: 20px; font-family: 'Noto Sans', sans-serif;">
                            <a href="{{ config('app.url') }}" style="color: #fff; text-decoration: none;">
                                {{ config('app.name') }}
                            </a>
                        </h2>
                        <p style="color: #ffffff; margin: 5px 0 0; font-size: 14px; font-family: 'Noto Sans', sans-serif;">We’ve received your message!</p>
                    </td>
                </tr>
                <tr>
                    <td align="center" style="margin: 1rem;">
                        <img src="{{ asset('images/avatars/memoji-casual.png') }}" alt="Confirmation Email Avatar"
                             style="width: 100px; height: auto; margin-bottom: 20px;">
                    </td>
                </tr>
                <tr>
                    <td align="center" style="font-size: 24px; font-weight: bold; color:  #7D62F4; font-family: 'Noto Sans', sans-serif;">
                        Hello {{ $data['name'] }},
                    </td>
                </tr>
                <tr>
                    <td align="center" style="font-size: 18px; color: #393D3F; padding: 10px 0 30px; font-family: 'Noto Sans', sans-serif;">
                        Thank you for reaching out!
                    </td>
                </tr>
                <tr>
                    <td style="font-size: 16px; color: #393D3F; line-height: 1.6; text-align: center; font-family: 'Noto Sans', sans-serif;">
                        Thanks for your message! I’ll get back to you as soon as I can.
                        In the meantime, feel free to check out more about what I do on the website or just reply here if there’s anything else you’d like to share.
                    </td>
                </tr>
                <tr>
                    <td align="center" style="padding-top: 30px; font-size: 14px; color: #999;">
                        — Warm regards, <br>
                        The {{ config('app.name') }} Team
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>
</body>
</html>
