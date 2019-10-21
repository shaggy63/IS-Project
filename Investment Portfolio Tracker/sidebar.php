<div class="sidebar-section">
    <div class="sidebar-user">
        <i class="fa fa-user-circle fa-inverse" aria-hidden="true"></i>
        <div style="margin-top:15px;">
            <label>Welcome,</label>
            <label><?= $_SESSION['FirstName'] ?></label>
        </div>
    </div>
    <ul class="nav nav-list">
        <li class="header">Navigation Menu</li>
        <li <?php if (basename($_SERVER['PHP_SELF']) == 'profile.php') echo 'class="active"' ?>>
            <a href="profile.php"><i class="fa fa-address-card fa-fw" aria-hidden="true"></i>Profile</a>
        </li>
        <li <?php if (basename($_SERVER['PHP_SELF']) == 'goal.php') echo 'class="active"' ?>>
            <a href="goal.php"><i class="fa fa-gift fa-fw" aria-hidden="true"></i>INVESTMENT SELECTION</a>
        </li>
        <li <?php if (basename($_SERVER['PHP_SELF']) == 'invest.php') echo 'class="active"' ?>>
            <a href="invest.php"><i class="fa fa-credit-card-alt fa-fw" aria-hidden="true"></i>TRACK</a>
        </li>
    </ul>
    <ul class="nav nav-list sidebar-settings">
        <li <?php if (basename($_SERVER['PHP_SELF']) == 'settings.php') echo 'class="active"' ?>>
            <a href="settings.php"><i class="fa fa-cog fa-fw" aria-hidden="true"></i>Settings</a>
        </li>
    </ul>
</div>