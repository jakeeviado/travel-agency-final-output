<?php

?>

<footer class="footer">
    <div class="social-icons">
        <a href=""><img src="{{ asset('images/facebook.png') }}" alt="Facebook"></a>
        <a href=""><img src="{{ asset('images/instagram.png') }}" alt="Instagram"></a>
        <a href=""><img src="{{ asset('images/email.png') }}" alt="Email"></a>
    </div>
    <style>
        .footer {
    display: flex;
    justify-content: flex-end; 
    align-items: center;       
    padding: 1rem 2rem;
    border-top: 1px solid #ccc; 
}

    .social-icons {
    display: flex;
    gap: 15px;
}
    </style>
</footer>