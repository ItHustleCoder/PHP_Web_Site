<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
        <h5 class="my-0 mr-md-auto font-weight-normal">It_hustlecoder</h5>
        <nav nav class="my-2 my-md-0 mr-md-3">
            <a class="p-2 text-dark" href="/project/index.php">Menu</a>
            <a class="p-2 text-dark" href="/project/about.php">Contacts</a>
        </nav>
        <?php
            if ($_COOKIE['user'] == 'true'):
        ?>
            <a class="btn btn-outline-primary" href="/project/auth.php">Log out</a>
        <?php else: ?>
            <a class="btn btn-outline-primary" href="/project/auth.php">Sign up</a>
            
        <?php endif; ?>
    </div>