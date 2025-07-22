<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>A Little Gift from Me to You</title>
    <link href="https://fonts.googleapis.com/css2?family=Caveat&display=swap" rel="stylesheet">
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
                        <h2 style="margin: 0; font-size: 20px; font-family: 'Noto Sans', sans-serif; font-weight: lighter">
                            <a href="{{ config('app.url') }}" style="color: #fff; text-decoration: none;">
                                Dear {{ $data['giftTitle'] }}
                            </a>
                        </h2>
                    </td>
                </tr>
                <tr>
                    <td align="center" style="padding: 20px;">
                        <img src="{{ config('app.url') }}/images/avatars/memoji-casual.png" alt="Confirmation Email Avatar"
                             style="width: 100px; height: auto;">
                    </td>
                </tr>
                <tr>
                    <td style="font-size: 16px; color: #393D3F; line-height: 1.6; text-align: justify; padding: 0.8rem">
                        <div style="font-family: 'Caveat', cursive; font-size: 20px;">
                            @if(!empty($data['isFamiliar']) && $data['isFamiliar'] === true)
                                I would like to welcome you (back) to Cyprus — where many beautiful memories already
                                live with you. I’m so glad one of you already calls this place home.
                            @else
                                I would like to welcome you to Cyprus — the place where I grew up and became who I am
                                today.
                            @endif

                            <br><br>

                            @if(!empty($data['honeymoon']) && $data['honeymoon'] === true)
                                Your friendship over these past two years has meant a lot to me, and I'd love to gift
                                you a small 1-week honeymoon stay in Cyprus.
                            @else
                                Your friendship over these past two years has meant a lot to me, and I'd love to gift
                                you a peaceful 1-week getaway in Cyprus.
                            @endif

                            <br><br>

                            This is an open-ended invitation. Whether I’m there or not, someone will always be around to
                            host you and show you around. If I happen to be around, even better!

                            @if($data['isFamiliar'] === false )

                                <br><br>
                                If you’re planning ahead, I’d be happy to coordinate — the ideal time for a summer-like
                                stay would be between May and mid-July or early September.
                                Avoid August at all costs!
                            @endif

                            <br><br>

                            Please just let me know your dates at least 2 months in advance, as the apartment is often
                            actively rented and I want to make sure everything’s set for you.
                        </div>

                        <hr style=" border: none; height: 1px; background-color: #7D62F4; margin: 20px 0;">

                        <table role="presentation" width="100%" cellspacing="0" cellpadding="0" style="margin-top: 20px;">
                            <tr>
                                <td style="padding-bottom: 20px;">
                                    <div style="background-color: #eae8f4; border-radius: 10px; padding: 16px;">
                                        <h3 style="margin: 0 0 10px 0; font-family: 'Noto Sans', sans-serif; color: #7D62F4;">
                                            Where You'll Stay</h3>
                                        <p style="margin: 0;">
                                            <a href="https://www.caesar-projects.com/caesar-resort" target="_blank"
                                               style="color: #7D62F4; text-decoration: none;">Caesar Resort in İskele</a><br>
                                            <a href="https://www.google.com/maps?q=35.26348,33.90187" target="_blank"
                                               style="color: #7D62F4; text-decoration: none;">Exact location of the
                                                apartment</a> —
                                            it overlooks the playground, <a
                                                href="https://www.caesar-projects.com/facilities/resort-spa" target="_blank"
                                                style="color: #7D62F4; text-decoration: none">spa</a>, and pools️.
                                            <span>Its a spacious two bedroom apartment and looks similar to my sister's <a
                                                    target="_blank" style="color: #7D62F4; text-decoration: none;"
                                                    href="https://www.booking.com/hotel/xy/artists-inn-2-1-yeni-iskele.en-gb.html?aid=356980&label=gog235jc-1FCAsyAnh5QhthcnRpc3RzLWlubi0yLTEteWVuaS1pc2tlbGVICVgDaGmIAQGYAQm4AQfIAQ3YAQHoAQH4AQKIAgGoAgO4ArCS6cMGwAIB0gIkYWRlZGFjOGMtN2I2MC00OWEzLTg4MmItYWZlNWEwYjFiODZm2AIF4AIB&sid=063a11d6b8199c4146deba2380c24579&age=0&checkin=2025-07-25&checkout=2025-07-28&dest_id=-2738862&dest_type=city&dist=0&group_adults=2&group_children=0&hapos=1&hpos=1&no_rooms=1&req_adults=2&req_children=0&room1=A%2CA&sb_price_type=total&soh=1&sr_order=popularity&srepoch=1752844596&srpvid=52a95d58ab170035&type=total&ucfs=1&#no_availability_msg">one </a>for what to expect.  </span>
                                        </p>

                                    </div>
                                </td>
                            </tr>
                            @if($data['isFamiliar'] === false)
                                <tr>
                                    <td style="padding-bottom: 20px;">
                                        <div style="background-color: #f4f2fe; border-radius: 10px; padding: 16px;">
                                            <h3 style="margin: 0 0 10px 0; font-family: 'Noto Sans', sans-serif; color: #7D62F4;">
                                                Travel Tips</h3>
                                            <p style="margin: 0;">
                                                <span>• Book 2–3 months in advance for reasonable flight tickets – prices go up quickly! <i> <small>Say Hi to Denis from me when booking holidays.</small></i> </span>
                                                <br>
                                                • Closest airport: Larnaca (LCA) — that’s where I usually land too.<br>
                                                • Heard TUI started direct flights from Dublin to Larnaca.<br>
                                                • Another option would be overlay from Cork to London then Larnaca.

                                            </p>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="padding-bottom: 20px;">
                                        <div style="background-color: #f4f2fe; border-radius: 10px; padding: 16px;">
                                            <h3 style="margin: 0 0 10px 0; font-family: 'Noto Sans', sans-serif; color: #7D62F4;">
                                                Getting Around</h3>
                                            <p style="margin: 0;">
                                                • Car rental is highly recommended — there isn’t much public transport, but
                                                everything
                                                is within driving distance. One edge of the island to another is just ~5 hours.
                                                You're staying kind of in the middle! <br>
                                                • Will be happy to provide agencies and contacts regarding rental companies.
                                            </p>
                                        </div>
                                    </td>
                                </tr>
                            @endif
                            <tr>
                                <td style="padding-bottom: 20px;">
                                    <div style="background-color: #f4f2fe; border-radius: 10px; padding: 16px;">
                                        <h3 style="margin: 0 0 10px 0; font-family: 'Noto Sans', sans-serif; color: #7D62F4;">
                                            Contact Me</h3>
                                        <p style="margin: 0;">
                                            🇮🇪 +353 89 975 1918<br>
                                            🇨🇾 +90 533 852 9191 (Cyprus North & WhatsApp)<br>
                                            📧 <a href="mailto:ddenizer14@gmail.com"
                                                 style="color: #7D62F4; text-decoration: none;">ddenizer14@gmail.com</a>
                                        </p>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td style="padding-bottom: 0;">
                                    <div style="background-color: #f4f2fe; border-radius: 10px; padding: 16px;">
                                        <h3 style="margin: 0 0 10px 0; font-family: 'Noto Sans', sans-serif; color: #7D62F4;">
                                            ...and there’s more to come!</h3>
                                        <p style="margin: 0;">
                                            Of course, there's so much more I'd love to share with you — from local gems to
                                            favorite places to eat, explore, and relax. But I’ll leave the rest for another time
                                            😊
                                        </p>
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td align="center"
                        style="padding-top: 30px; font-size: 20px; color: #999; font-family: 'Caveat', cursive;">
                        Lots of love <br>
                        Deniz 🌺 <br>
                        <a href="{{ config('app.url') }}"
                           style="color: #7D62F4; text-decoration: none;">{{ config('app.name') }}</a>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>
</body>
</html>
