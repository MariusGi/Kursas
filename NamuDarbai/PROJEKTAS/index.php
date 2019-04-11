<?php
    session_start();

    include_once 'partials/head.html';

    echo 
    '<body class="indexBackground">
        <header>
            <nav class="navbar navbar-expand-lg navbar-dark bg-light indexNav">
    ';

    include_once 'partials/header.php';
    include_once 'includes/feedback-messages.inc.php';
?>

    <section>
        <div id="chartdiv"></div>
        <div id="ex1" class="modal"></div>
    </section>
    
<?php
    include_once 'partials/footer.html';
?>