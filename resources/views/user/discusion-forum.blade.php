@extends('layouts.user')
@section('content')
<style>
    .welcome-container {
        margin-top: 80px;
        text-align: center;
        background: linear-gradient(135deg, #1e3c72, #2a5298);
        padding: 60px 30px;
        border-radius: 15px;
        color: #fff;
        box-shadow: 0 10px 25px rgba(0,0,0,0.1);
    }

    .welcome-container h1 {
        font-size: 2.2rem;
        font-weight: 700;
        margin-bottom: 20px;
    }

    .welcome-container h1 .text-warning {
        color: #ffb347;
    }

    .welcome-container p {
        font-size: 1.1rem;
        color: #f0f0f0;
        margin-bottom: 15px;
    }

    .welcome-container a {
        color: #ffb347;
        font-weight: 600;
        text-decoration: none;
        transition: color 0.3s ease, transform 0.2s ease;
    }

    .welcome-container a:hover {
        color: #ffd17f;
        transform: translateY(-2px);
        text-decoration: underline;
    }

    .forum-guidelines {
        text-align: left;
        max-width: 700px;
        margin: 30px auto 0;
        background: rgba(255, 255, 255, 0.1);
        padding: 25px;
        border-radius: 12px;
        line-height: 1.6;
    }

    .forum-guidelines h3 {
        color: #ffb347;
        margin-bottom: 15px;
    }

    .forum-guidelines ul {
        list-style: disc;
        padding-left: 20px;
    }

    .forum-guidelines li {
        margin-bottom: 10px;
        color: #201e1e;
    }

    @media (max-width: 768px) {
        .welcome-container {
            padding: 40px 20px;
        }

        .welcome-container h1 {
            font-size: 1.8rem;
        }

        .welcome-container p {
            font-size: 1rem;
        }

        .forum-guidelines {
            padding: 20px;
        }
    }
</style>

<div class="container">
    <div class="welcome-container">
        <h1>Welcome, <strong class="text-warning">{{ $userInfo->fullname }}</strong></h1>
        <p>We're kindly requesting you to
            <a href="https://mwecauictclubforum.onrender.com?username={{ Auth::user()->registration_number }}&room={{ Auth::user()->category }}&userType=user" target="_blank">click here</a> to access the full club discussion forum.
        </p>
    </div>

    <div class="forum-guidelines">
        <h3>Forum Guidelines & Etiquette</h3>
        <ul class="text-muted">
            <li>Be respectful to all members and avoid offensive language.</li>
            <li>Stay on topic; post content relevant to the discussion room.</li>
            <li>Do not share personal sensitive information publicly.</li>
            <li>Avoid spamming or posting irrelevant links.</li>
            <li>Use constructive feedback when responding to others.</li>
            <li>Follow the club's code of conduct at all times.</li>
            <li>Report any inappropriate content to the moderators.</li>
        </ul>
        <p class="mt-3"><strong>Tip:</strong> Keep your posts clear and concise for better engagement!</p>
    </div>
</div>
@endsection
