<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Contact Form Submission - Krishna Packs</title>
</head>
<body style="margin: 0; padding: 24px; background-color: #f4f6f8; font-family: Arial, Helvetica, sans-serif; color: #333333;">
    <table role="presentation" width="100%" cellpadding="0" cellspacing="0" style="max-width: 600px; margin: 0 auto; background-color: #ffffff; border: 1px solid #e2e8f0; border-radius: 6px; overflow: hidden;">
        <tr>
            <td style="background-color: #1f4e3d; padding: 20px 24px; color: #ffffff;">
                <h2 style="margin: 0; font-size: 20px; font-weight: 600;">New Contact Form Submission</h2>
                <p style="margin: 4px 0 0; font-size: 13px; color: #d1fae5;">Krishna Packs Website Inquiry</p>
            </td>
        </tr>
        <tr>
            <td style="padding: 24px;">
                <table role="presentation" width="100%" cellpadding="8" cellspacing="0" style="border-collapse: collapse;">
                    <tr>
                        <td style="width: 110px; font-weight: 600; color: #4a5568; border-bottom: 1px solid #edf2f7; vertical-align: top;">Name:</td>
                        <td style="color: #1a202c; border-bottom: 1px solid #edf2f7;">{{ $contactMessage->name }}</td>
                    </tr>
                    <tr>
                        <td style="width: 110px; font-weight: 600; color: #4a5568; border-bottom: 1px solid #edf2f7; vertical-align: top;">Email:</td>
                        <td style="color: #1a202c; border-bottom: 1px solid #edf2f7;">
                            <a href="mailto:{{ $contactMessage->email }}" style="color: #1f4e3d; text-decoration: none;">{{ $contactMessage->email }}</a>
                        </td>
                    </tr>
                    <tr>
                        <td style="width: 110px; font-weight: 600; color: #4a5568; border-bottom: 1px solid #edf2f7; vertical-align: top;">Phone:</td>
                        <td style="color: #1a202c; border-bottom: 1px solid #edf2f7;">
                            <a href="tel:{{ $contactMessage->phone }}" style="color: #1f4e3d; text-decoration: none;">{{ $contactMessage->phone }}</a>
                        </td>
                    </tr>
                    <tr>
                        <td style="width: 110px; font-weight: 600; color: #4a5568; vertical-align: top;">Message:</td>
                        <td style="color: #1a202c; line-height: 1.5;">{!! nl2br(e($contactMessage->message)) !!}</td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>
</html>
