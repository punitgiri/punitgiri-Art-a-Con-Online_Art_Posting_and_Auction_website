<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
        <ul class="nav flex-column side_nav">
            <li class="nav-item">
                <a class="nav-link <?php if ("home" == $_GET['page']) { echo "active"; } else { echo ""; }?>" aria-current="page" href="index.php?page=home">
                    <span class="side_nav_h">
                        <i class="fas fa-home"></i>
                        Home
                    </span>
                </a> 
            </li>
            <li class="nav-item">
                <a class="nav-link <?php if ("categories" == $_GET['page']) { echo "active"; } else { echo ""; }?>" href="index.php?page=categories">
                    <span class="side_nav_h">
                      <i class="fas fa-tags"></i>
                        Categories
                    </span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php if ("products" == $_GET['page'] || "manage_product" == $_GET['page']) { echo "active"; } else { echo ""; }?>" href="index.php?page=products">
                    <span class="side_nav_h">
                       <i class="fas fa-shopping-cart"></i>
                        Products
                    </span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link <?php if ("bids" == $_GET['page']) { echo "active"; } else { echo ""; }?>" href="index.php?page=bids">
                    <span class="side_nav_h">
                       <i class="fas fa-money-bill-alt"></i>
                        Bids
                    </span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link <?php if ("seller" == $_GET['page']) { echo "active"; } else { echo ""; }?>" href="index.php?page=seller">
                    <span class="side_nav_h">
                       <i class="fas fa-money-bill-alt"></i>
                        Seller
                    </span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link <?php if ("users" == $_GET['page']) { echo "active"; } else { echo ""; }?>" href="index.php?page=users">
                    <span class="side_nav_h">
                        <i class="fas fa-users"></i>
                        Users
                    </span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php if ("manage_account" == $_GET['page']) { echo "active"; } else { echo ""; }?>" href="index.php?page=manage_account">
                    <span class="side_nav_h">
                        <i class="fas fa-user-cog"></i>
                        Manage Account
                    </span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php if ("message" == $_GET['page']) { echo "active"; } else { echo ""; }?>" href="index.php?page=message">
                    <span class="side_nav_h">
                        <i class="fas fa-envelope-open-text"></i>
                        Message
                    </span>
                </a>
            </li>
        </ul>
    </div>
</nav>