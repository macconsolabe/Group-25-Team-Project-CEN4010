<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>MUSIC</title>
    <!-- Load Bootstrap -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <!-- Loading our stylesheet -->
    <link href="resources/css/music.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" type="text/css" href="resources/css/home.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<body>

    <div class="look-find">
        <input type="text" name="" id="search-text" class="look-txt" placeholder="Click Icon to Start Search ➢➢" />
        <a class="look-btn" id="search_button"> <i class="fa fa-search"></i> </a>
    </div>


    <div class="container" id="song-list">
        <div class="row">
            <div id="song_0" class="col"></div>
            <div id="song_1" class="col"></div>
            <div id="song_2" class="col"></div>
        </div>
        <div class="row">
            <div id="song_3" class="col"></div>
            <div id="song_4" class="col"></div>
            <div id="song_5" class="col"></div>
        </div>
        <div class="row">
            <div id="song_6" class="col"></div>
            <div id="song_7" class="col"></div>
            <div id="song_8" class="col"></div>
        </div>
        <div class="row">
            <div id="song_9" class="col"></div>
            <div id="song_10" class="col"></div>
            <div id="song_11" class="col"></div>
        </div>
    </div>





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













    <script src="https://apis.google.com/js/platform.js"></script>



    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Latest compiled and minified Bootstrap JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <!-- Loading our JavaScript -->
    <script src="resources/js/music.js" charset="utf-8"></script>
</body>

</html>