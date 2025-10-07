<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <title>Admin Approval Request</title>
</head>

<body style="font-family: Arial, sans-serif; background-color:#f8fafc; padding: 30px;">
   <div
      style="background-color: #fff; padding: 30px; border-radius: 12px; box-shadow: 0 4px 10px rgba(0,0,0,0.1); max-width: 600px; margin: auto;">
      <h2 style="color:#1e3a8a;">New Admin Registration Request</h2>

      <p><strong>Name:</strong> {{ $admin->name }}</p>
      <p><strong>Email:</strong> {{ $admin->email }}</p>

      <p style="margin-top: 20px;">Click below to approve this admin:</p>
      <a href="{{ $approveUrl }}"
         style="display:inline-block; background-color:#4f46e5; color:white; padding:10px 20px; border-radius:8px; text-decoration:none; margin-top:10px;">
         Approve Admin
      </a>

      <p style="margin-top: 25px; color:#64748b; font-size:14px;">
         This link will approve the admin immediately. Please use with caution.
      </p>
   </div>
</body>

</html>