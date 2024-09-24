<header>
    <div class="logo">
        <a href="index.php">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ1eTwnyF6aiRokiPnyr0iezWcDk1k5bxet-A&s" alt="Inspired Gym Logo">
        </a>
    </div>
    <nav>
        <ul>
            <li><a href="index.php" class="<?php echo (basename($_SERVER['PHP_SELF']) == 'index.php') ? 'active' : ''; ?>">Home</a></li>
            <li><a href="cold-bath.php" class="<?php echo (basename($_SERVER['PHP_SELF']) == 'cold-bath.php') ? 'active' : ''; ?>">Cold Bath</a></li>
            <li><a href="thinAir.php" class="<?php echo (basename($_SERVER['PHP_SELF']) == 'thinAir.php') ? 'active' : ''; ?>">thinAir Room</a></li>
            <li><a href="personal-trainers.php" class="<?php echo (basename($_SERVER['PHP_SELF']) == 'personal-trainers.php') ? 'active' : ''; ?>">Personal Trainers</a></li>
            <li><a href="classes.php" class="<?php echo (basename($_SERVER['PHP_SELF']) == 'classes.php') ? 'active' : ''; ?>">Classes</a></li>
            <li><a href="staff.php" class="<?php echo (basename($_SERVER['PHP_SELF']) == 'staff.php') ? 'active' : ''; ?> staff-link">Staff</a></li>
            
            <!-- Dropdown Menu for Training Styles -->
            <li class="dropdown">
                <a href="#" class="dropdown-btn">Training Styles</a>
                <ul class="dropdown-content">
                    <li><a href="powerlifting.php">Powerlifting</a></li>
                    <li><a href="strongman.php">Strongman</a></li>
                    <li><a href="bodybuilding.php">Bodybuilding</a></li>
                    <li><a href="boxing.php">Boxing</a></li>
                    <li><a href="classes.php">Classes</a></li>
                    <li><a href="olympic-lifting.php">Olympic Lifting</a></li>
                    <li><a href="crossfit.php">Crossfit</a></li>
                    <li><a href="cardio.php">Cardio Area</a></li>
                </ul>
            </li>
        </ul>
    </nav>
</header>
