<header>
    <div class="logo">
        <a href="index.php">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ1eTwnyF6aiRokiPnyr0iezWcDk1k5bxet-A&s" alt="Inspired Gym Logo">
        </a>
    </div>
    <nav>
        <ul>
            <li><a href="index.php" class="<?php echo (basename($_SERVER['PHP_SELF']) == 'index.php') ? 'active' : ''; ?>">Home</a></li>
            <li><a href="recovery-suite.php" class="<?php echo (basename($_SERVER['PHP_SELF']) == 'recovery-suite.php') ? 'active' : ''; ?>">Recovery Suite</a></li>
            <li><a href="thinAir.php" class="<?php echo (basename($_SERVER['PHP_SELF']) == 'thinAir.php') ? 'active' : ''; ?>">thinAir Hypoxic Training</a></li>
            <li><a href="personal-trainers.php" class="<?php echo (basename($_SERVER['PHP_SELF']) == 'personal-trainers.php') ? 'active' : ''; ?>">Personal Training</a></li>
            <li><a href="classes.php" class="<?php echo (basename($_SERVER['PHP_SELF']) == 'classes.php') ? 'active' : ''; ?>">Class Timetable</a></li>
            <li><a href="inspired-charity.php" class="<?php echo (basename($_SERVER['PHP_SELF']) == 'inspired-charity.php') ? 'active' : ''; ?>">Inspired Charity</a></li>
            <li><a href="kangen-water.php" class="<?php echo (basename($_SERVER['PHP_SELF']) == 'kangen-water.php') ? 'active' : ''; ?>">Kangen Water</a></li>

            <!-- Dropdown menu for Training Styles -->
            <li class="dropdown">
                <a href="#" class="dropbtn">Training Styles</a>
                <div class="dropdown-content">
                    <a href="powerlifting.php">Powerlifting</a>
                    <a href="strongman.php">Strongman</a>
                    <a href="bodybuilding.php">Bodybuilding</a>
                    <a href="boxing.php">Boxing</a>
                    <a href="classes.php">Classes</a>
                    <a href="olympic-lifting.php">Olympic Lifting</a>
                    <a href="crossfit.php">Crossfit</a>
                    <a href="cardio-area.php">Cardio Area</a>
                </div>
            </li>

            <!-- Dropdown menu for Stock -->
            <li class="dropdown">
                <a href="#" class="dropbtn">Shop</a>
                <div class="dropdown-content">
                    <a href="aftershave.php">Aftershave</a>
                    <a href="supplements.php">Supplements</a>
                    <a href="cafe.php">Cafe (Coming Soon)</a>
                </div>
            </li>
            
            <li><a href="staff.php" class="<?php echo (basename($_SERVER['PHP_SELF']) == 'staff.php') ? 'active' : ''; ?> staff-link">Staff</a></li>
        </ul>
    </nav>
</header>
