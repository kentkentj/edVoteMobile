<!-- App Bottom Menu -->
<div class="appBottomMenu">
        <a href="../public" class="item <?php echo (basename($_SERVER['PHP_SELF']) == 'index.php' ? 'active' : '')?>">
            <div class="col">
                <ion-icon name="home-outline"></ion-icon>
            </div>
        </a>
        <a href="election" class="item <?php echo (basename($_SERVER['PHP_SELF']) == 'election.php' || basename($_SERVER['PHP_SELF']) == 'balot.php' ? 'active' : '')?>">
            <div class="col">
                <ion-icon name="archive-outline"></ion-icon>
            </div>
        </a>
        <!--<a href="page-chat.html" class="item">
            <div class="col">
                <ion-icon name="chatbubble-ellipses-outline"></ion-icon>
                <span class="badge badge-danger">5</span>
            </div>
        </a>-->
        <a href="app-pages.html" class="item">
            <div class="col">
                <ion-icon name="layers-outline"></ion-icon>
            </div>
        </a>
        <a href="javascript:;" class="item" data-toggle="modal" data-target="#sidebarPanel">
            <div class="col">
                <ion-icon name="menu-outline"></ion-icon>
            </div>
        </a>
    </div>
<!-- * App Bottom Menu -->