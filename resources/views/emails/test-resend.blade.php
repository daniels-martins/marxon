<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Email via Resend</title>
    <style>
        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif;
            background-color: #f4f6f8;
            color: #333333;
            margin: 0;
            padding: 24px;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #ffffff;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
            border: 1px solid #e5e7eb;
        }
        .header {
            background-color: #1e293b;
            color: #ffffff;
            padding: 24px;
            text-align: center;
        }
        .header h1 {
            margin: 0;
            font-size: 20px;
            font-weight: 600;
        }
        .content {
            padding: 24px;
            line-height: 1.6;
        }
        .badge {
            display: inline-block;
            padding: 4px 10px;
            border-radius: 4px;
            font-size: 13px;
            font-weight: 600;
            background-color: #e0f2fe;
            color: #0369a1;
            margin-bottom: 16px;
        }
        .details-table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
            font-size: 14px;
        }
        .details-table th, .details-table td {
            padding: 10px 12px;
            text-align: left;
            border-bottom: 1px solid #e5e7eb;
        }
        .details-table th {
            background-color: #f9fafb;
            color: #4b5563;
            font-weight: 600;
            width: 35%;
        }
        .footer {
            padding: 16px 24px;
            background-color: #f9fafb;
            text-align: center;
            font-size: 12px;
            color: #6b7280;
            border-top: 1px solid #e5e7eb;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>{{ config('app.name', 'Marxon') }} Email Delivery Test</h1>
        </div>
        <div class="content">
            <span class="badge">{{ $mode }}</span>
            <p>This is a test notification confirming that the Resend mailing system is properly configured and operational.</p>
            
            <table class="details-table">
                <tr>
                    <th>Delivery Mode</th>
                    <td><strong>{{ $mode }}</strong></td>
                </tr>
                <tr>
                    <th>Mailer</th>
                    <td>{{ $meta['mailer'] ?? config('mail.default') }}</td>
                </tr>
                <tr>
                    <th>Queue Driver</th>
                    <td>{{ $meta['queue_driver'] ?? config('queue.default') }}</td>
                </tr>
                <tr>
                    <th>Environment</th>
                    <td>{{ app()->environment() }}</td>
                </tr>
                <tr>
                    <th>Timestamp</th>
                    <td>{{ now()->toDateTimeString() }}</td>
                </tr>
            </table>

            <p style="margin-top: 20px; font-size: 13px; color: #6b7280;">
                If you received this message, the SMTP/API transport layer successfully accepted and dispatched the email.
            </p>
        </div>
        <div class="footer">
            &copy; {{ date('Y') }} {{ config('app.name', 'Marxon') }}. All rights reserved.
        </div>
    </div>
</body>
</html>
