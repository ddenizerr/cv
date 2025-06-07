<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact Confirmation</title>
</head>
<body style="margin: 0; padding: 0; background-color: var(--pale-mist); font-family: var(--noto-font-family);">
<table width="100%" cellpadding="0" cellspacing="0" style="padding: 40px 0;">
    <tr>
        <td align="center">
            <table width="600" cellpadding="0" cellspacing="0"
                   style="background-color: #ffffff; border-radius: 12px; padding: 40px; box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);">
                <tr>
                    <td align="center"
                        style="background-color: #7D62F4; border-top-left-radius: 12px; border-top-right-radius: 12px; padding: 20px;">
                        <h2 style="color: #ffffff; margin: 0; font-size: 20px; font-family: var(--noto-font-family); text-decoration: none; ">{{ config('app.name') }}</h2>
                        <p style="color: #ffffff; margin: 5px 0 0; font-size: 14px; font-family: var(--noto-font-family);">We’ve received your message!</p>
                    </td>
                </tr>
                <tr>
                    <td align="center">
                        <img src="/images/avatars/memoji-casual.png" alt="Welcome Banner"
                             style="width: 100px; height: auto; margin-bottom: 20px;">
                    </td>
                </tr>
                <tr>
                    <td align="center" style="font-size: 24px; font-weight: bold; color:  #7D62F4; font-family: var(--noto-font-family);">
                        Hello {{ $data['name'] }},
                    </td>
                </tr>
                <tr>
                    <td align="center" style="font-size: 18px; color: #393D3F; padding: 10px 0 30px; font-family: var(--noto-font-family);">
                        Thank you for reaching out!
                    </td>
                </tr>
                <tr>
                    <td style="font-size: 16px; color: #393D3F; line-height: 1.6; text-align: center; font-family: var(--noto-font-family);">
                        I’ve received your message and will get back to you as soon as possible. <br>
                        In the meantime, feel free to explore more about our work on our website or reply to this email
                        if you have more to add.
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
