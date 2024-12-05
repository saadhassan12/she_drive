<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="{{ asset('assets/images/14-removebg-logo.png') }}" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>She Drives Links</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            padding: 50px;
        }
        .social-links {
            list-style-type: none;
            padding: 0;
        }
        .social-links li {
            display: inline-block;
            margin: 10px;
        }
        .social-links a {
            text-decoration: none;
        }
        .social-links img {
            width: 50px;
            height: 50px;
        }
    </style>
</head>
<body>
<h2>Follow Us</h2>
<ul class="social-links">
    <li><a href="https://www.facebook.com/profile.php?id=61560156579887&mibextid=LQQJ4d" target="_blank">
            <img src="https://upload.wikimedia.org/wikipedia/commons/5/51/Facebook_f_logo_%282019%29.svg" alt="Facebook">
        </a></li>

    <li><a href="https://apps.apple.com/pk/app/shedrives/id6670424505" target="_blank">
            <img src="{{ asset('assets/images/app-store1.png') }}" alt="AppStore">
        </a></li>

    <li><a href="https://drive.google.com/file/d/1LRYHcqMGEBawXZtV-tYHDmUeS8LwhOap/view?usp=drive_link" target="_blank">
            <img src="{{ asset('assets/images/playstore.png') }}" alt="AppStore">
        </a></li>


    <li><a href="https://www.instagram.com/shedrives_pakistan?igsh=MWEzNmZxbTJwNGkxYw%3D%3D&utm_source=qr" target="_blank">
            <img src="https://upload.wikimedia.org/wikipedia/commons/a/a5/Instagram_icon.png" alt="Instagram">
            <i class="fa-brands fa-instagram"></i>
        </a></li>
    <li><a href="https://www.shedrivesapp.com/" target="_blank">
{{--            <img src="https://upload.wikimedia.org/wikipedia/commons/6/6f/Website_icon.png" alt="Website">--}}
            <img src="{{ asset('assets\images\14-removebg-logo.png') }}" alt="Website">
        </a></li>
    <li><a href="https://www.tiktok.com/@shedrives_pakista?_t=8ov0UnwK6q5&_r=1" target="_blank">
{{--            <img src="https://upload.wikimedia.org/wikipedia/en/a/a9/TikTok_logo.png" alt="TikTok">--}}
            <img src="{{ asset('assets/images/Tiktok.png') }}" alt="Website">
        </a></li>

    <li><a href="https://www.youtube.com/@shedrives_pakistan?si=9wVVifwsrEpueJPV" target="_blank">
            <img src="https://upload.wikimedia.org/wikipedia/commons/4/42/YouTube_icon_%282013-2017%29.png" alt="YouTube">
        </a></li>


</ul>
</body>
</html>
