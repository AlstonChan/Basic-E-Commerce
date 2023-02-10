<?php

$page = $params['type'] === "login" ? "Log in" : "Sign Up";

require $_SERVER['DOCUMENT_ROOT'] . "/../src/views/head.php"

?>

<body>
    <section class="section is-large">
        <svg class="background--custom" id="demo" viewBox="0 0 100 100" preserveAspectRatio="none">
            <path class="path-auth" fill="#72fd54" fill-opacity="0.7" d="M-100 -100L200 -100L200 50L-100 50Z" style="animation: path0 9.803921568627452s linear infinite alternate;" />
            <path class="path-auth" fill="#8fa2f0" fill-opacity="0.5" d="M-100 -100L200 -100L200 40L-100 40Z" style="animation: path1 3.7037037037037037s linear infinite alternate;" />
            <path class="path-auth" fill="#155697" fill-opacity="0.8" d="M-100 -100L200 -100L200 50L-100 50Z" style="animation: path2 23.80952380952381s linear infinite alternate;" />
        </svg>
        <h1 class="title">Large section</h1>
        <h2 class="subtitle">
            A simple container to divide your page into <strong>sections</strong>, like the one you're currently reading.
        </h2>
    </section>
</body>

</html>