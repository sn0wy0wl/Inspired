<header>
    <div class="logo">
        <a href="index.php">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ1eTwnyF6aiRokiPnyr0iezWcDk1k5bxet-A&s" alt="Inspired Gym Logo">
        </a>
    </div>
    <nav>
        <ul>
            <li><a href="index.php" class="<?php echo (basename($_SERVER['PHP_SELF']) == 'index.php') ? 'active' : ''; ?>">Home</a></li>
            <li><a href="cold-bath.php" class="<?php echo (basename($_SERVER['PHP_SELF']) == 'cold-bath.php') ? 'active' : ''; ?>">Recovery Suite</a></li>
            <li><a href="thinAir.php" class="<?php echo (basename($_SERVER['PHP_SELF']) == 'thinAir.php') ? 'active' : ''; ?>">thinAir Hyproxic training</a></li>
            <li><a href="personal-trainers.php" class="<?php echo (basename($_SERVER['PHP_SELF']) == 'personal-trainers.php') ? 'active' : ''; ?>">Personal Training</a></li>
            <li><a href="classes.php" class="<?php echo (basename($_SERVER['PHP_SELF']) == 'classes.php') ? 'active' : ''; ?>">Class Timetable</a></li>
            <li><a href="staff.php" class="<?php echo (basename($_SERVER['PHP_SELF']) == 'staff.php') ? 'active' : ''; ?> staff-link">Staff</a></li>
        </ul>
    </nav>
</header>
