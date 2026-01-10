<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Website Enquiry</title>
</head>

<body style="margin:0;padding:0;background:#f0f3f8;font-family:Arial,sans-serif;">
<div style="padding:25px">
<div style="max-width:600px;margin:auto;background:#fff;border-radius:10px;padding:25px;border:1px solid #ddd">

<h2 style="color:#1a73e8">🔔 New Website Enquiry</h2>

<table width="100%" cellpadding="0" cellspacing="0">

<tr><td><b>Name</b></td><td>{{ $name }}</td></tr>
<tr><td><b>Email</b></td><td>{{ $email }}</td></tr>
<tr><td><b>Phone</b></td><td>{{ $phone }}</td></tr>
<tr><td><b>Subject</b></td><td>{{ $subject }}</td></tr>
@if(!empty($message))
<tr><td><b>Message</b></td><td>{{ $message }}</td></tr>
@endif

</table>

</div>
</div>
</body>
</html>
