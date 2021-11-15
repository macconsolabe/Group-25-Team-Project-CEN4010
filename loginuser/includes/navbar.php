<div class="usernav">
    <?php
    $sql2 = "SELECT COUNT(*) AS count FROM friendship 
                 WHERE friendship.user2_id = {$_SESSION['user_id']} AND friendship.friendship_status = 0";
    $query2 = mysqli_query($conn, $sql2);
    $row = mysqli_fetch_assoc($query2);
    ?>
    <nav class="nav">
        <a href="home.php" class="nav__link">
            <i class="material-icons nav__icon">chat</i>
            <span class="nav__text">Feed</span>
        </a>
        <a href="profile.php" class="nav__link">
            <i class="material-icons nav__icon">person</i>
            <span class="nav__text">Profile</span>
        </a>
        <a href="playlist.php" class="nav__link nav__link--active">
            <i class="material-icons nav__icon">headphones</i>
            <span class="nav__text">Music</span>
        </a>
        <a href="friends.php" class="nav__link">
            <i class="material-icons nav__icon">people</i>
            <span class="nav__text">Friends</span>
        </a>
        <a href="requests.php" class="nav__link">
            <i class="material-icons nav__icon">group add</i>
            <span class="nav__text">Requests</span>
        </a>
        <a href="logout.php" class="nav__link">
            <i class="material-icons nav__icon">logout</i>
            <span class="nav__text">Logout</span>
        </a>
        <a>

            <div class="globalsearch">
                <form methid="get" action="search.php" onsubmit="return validateField()">
                    <!-- Ensure there are no enter escape characters.-->
                    <select name="location">
                        <option value="names">Names</option>
                        <option value="posts">Posts</option>
                    </select><input type="text" placeholder="Search" name="query" id="query"><input type="submit" value="Search" id="querybutton">
                </form>
            </div>

        </a>
    </nav>
</div>

<script>
    function validateField() {
        var query = document.getElementById("query"); // validates user search with fuction inside userquery.
        var button = document.getElementById("querybutton");
        if (query.value == "") {
            query.placeholder = 'Type something!';
            return false;
        }
        return true;
    }
</script>