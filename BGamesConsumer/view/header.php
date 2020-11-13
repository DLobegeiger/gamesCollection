<?php
    if ($_SESSION['role'] == null ){
        header('Location: login.php?mesg=You must log in first');
    }
?>
<nav>
    <ul>
        <li><a href="../controller/logout.php"><img id="profileicon" src="images/user-circle-solid.svg"></a>
        <li><a href="search.php"><img id="searchicon" src="images/search-solid.svg"></a>
        <li><a href="settings.php"><img id="settingsicon" src="images/cog-solid.svg"></a>
    </ul>
</nav>
<script src="https://unpkg.com/@popperjs/core@2"></script>
<script src="https://unpkg.com/tippy.js@6"></script>
<script>
    tippy('#profileicon', {
        content: 'Click here to logout.'
    })
</script>
<script>
    tippy('#searchicon', {
        content: 'Click here to search for games.'
    })
</script>
<script>
    tippy('#settingsicon', {
        content: 'Click here to adjust settings.'
    })
</script>