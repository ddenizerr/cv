<!DOCTYPE html>
<html>
<head>
    <title>Contact Form Submission</title>
</head>
<body style="font-family: 'Noto Sans', sans-serif; background-color: #f7f6f8; color: #393D3F; margin: 0; padding: 20px;">
<div style="max-width: 600px; margin: 0 auto; background: #f1f1f1; border: 1px solid #7D62F4; border-radius: 8px; padding: 20px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
    <div style="text-align: center; font-size: 24px; font-family: 'Cinzel', serif; color: #7D62F4; margin-bottom: 20px;">Contact Form Submission</div>
    <p>Here is the data submitted through the contact form:</p>
    <table style="width: 100%; border-collapse: collapse; margin-bottom: 20px;">
        <tr>
            <th style="background-color: #826AED; color: #FDFDFF; text-align: left; padding: 10px;">Name</th>
            <td style="padding: 10px; border: 1px solid #7D62F4;">{{ $data['name'] }}</td>
        </tr>
        <tr>
            <th style="background-color: #826AED; color: #FDFDFF; text-align: left; padding: 10px;">Email</th>
            <td style="padding: 10px; border: 1px solid #7D62F4;">{{ $data['email'] }}</td>
        </tr>
        <tr>
            <th style="background-color: #826AED; color: #FDFDFF; text-align: left; padding: 10px;">Message</th>
            <td style="padding: 10px; border: 1px solid #7D62F4;">{{ $data['message'] }}</td>
        </tr>
    </table>
    <div style="text-align: center; font-size: 14px; color: #546A7B; margin-top: 20px;">
        <p>Thank you for reaching out!</p>
        <a href="{{ url('/') }}" style="display: inline-block; padding: 10px 20px; background-color: #4BCD97; color: #FDFDFF; text-decoration: none; border-radius: 5px; font-family: 'Noto Sans', sans-serif;">Visit Our Website</a>
    </div>
</div>
</body>
</html>
