<?php
// Set the title dynamically
$pageTitle = "How to Share a WhatsApp Group Link";

// Function to display a greeting based on the time of day
function greet() {
    $hour = date("H");
    if ($hour < 12) {
        return "Good Morning!";
    } elseif ($hour < 18) {
        return "Good Afternoon!";
    } else {
        return "Good Evening!";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pageTitle; ?></title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background: #f0f0f0;
            color: #333;
        }
        .container {
            max-width: 800px;
            margin: 20px auto;
            background: #fff;
            padding: 20px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            border-radius: 8px;
        }
        h1, h2 {
            color: #0a4a72;
        }
        p, li {
            line-height: 1.6;
        }
        a {
            color: #0077cc;
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }
        ul {
            list-style-type: none;
            padding: 0;
        }
        li {
            margin-bottom: 10px;
            padding-left: 20px;
            position: relative;
        }
        li:before {
            content: '•';
            position: absolute;
            left: 0;
            color: #0a4a72;
        }
        .footer {
            text-align: center;
            margin-top: 20px;
            color: #666;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1><?php echo $pageTitle; ?></h1>
        <p><?php echo greet(); ?> Sharing a <a href="https://realgrouplinks.com/">WhatsApp group links</a> is an effective way to expand your network by inviting new members to join group chats. Whether it's for coordinating work, organizing community events, or keeping friends and family connected, understanding how to share a WhatsApp group link can streamline the process of adding new participants. Here’s your step-by-step guide to sharing a WhatsApp group link effectively.</p>

        <!-- The rest of the content remains unchanged -->
        <h2>Step 1: Ensure You Have Admin Privileges</h2>
        <p>Only the admin of a WhatsApp group has the permissions to share its link. If you’re not the admin, you’ll need to ask the admin of the group to share the link with you or to make you an admin.</p>

        <!-- Add more steps as previously outlined in the HTML -->

        <div class="footer">
            <p>&copy; 2024 Real Group Links. All rights reserved.</p>
        </div>
    </div>
</body>
</html>
