<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Autumn Spice - Thank you!</title>

    <!-- Scripts -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="https://kit.fontawesome.com/ca6dee911a.js" crossorigin="anonymous"></script>
    <script src="script.js"></script>

    <!-- CSS -->
    <link rel="stylesheet" href="main.css">
</head>

<body>
    <div class="container">
        <!--HEADER-->
        <header>
            <ul id="slideShow">
                <li id="slide"><img src="images/slideshow/img1.jpg" alt="Barista pouring milk"></li>
                <li id="slide"><img src="images/slideshow/img2.jpg" alt="Espresso machine"></li>
                <li id="slide"><img src="images/slideshow/img3.jpg" alt="breakfast menu displayed on a table"></li>
                <li id="slide"><img src="images/slideshow/img4.jpg" alt="1 pound coffe bean bags on a shelf"></li>
                <li id="slide"><img src="images/slideshow/img5.jpg" alt="close in espresso shot"></li>
            </ul>
            <h1 id="titleLogo">Autumn Spice</h1>
            <nav id="navApp">
                <ul v-for="item in menu">
                    <li><a v-bind:key="item.id" :href="item.url">{{ item.name }}</a></li>
                </ul>
            </nav>
        </header>

        <!--MAIN-->
        <main>
            <div id="leftPanel">
                <h2>Submitted Information</h2>
                <table>
                    <tr>
                        <th>Name</th>
                        <th>Value</th>
                    </tr>

                    <?php
                    foreach ($_POST as $n => $v) {

                        echo "<tr>
                            <th>$n</th>
                            <th>$v</th>
                            </tr>";
                    }
                    ?>
                </table>
            </div>
        </main>

        <!--FOOTER-->
        <footer>
            <div id="footerText">FOOTER - Giselle Njaastad</div>
            <div id="footerSocial">
                <i class="fa-brands fa-facebook"></i>
                <i class="fa-brands fa-twitter"></i>
                <i class="fa-brands fa-instagram"></i>
            </div>
        </footer>
    </div>

    <!-- VUE -->
    <script>
        const app = Vue.createApp({
            data() {
                return {
                    menu: [
                        { id: 10, url: 'index.html', name: 'Home' },
                        { id: 11, url: 'menu.html', name: 'Menu' },
                        { id: 12, url: 'about.html', name: "About Us" },
                        { id: 13, url: 'craft.html', name: "Our Craft" },
                        { id: 14, url: 'locations.html', name: "Locations" },
                        { id: 15, url: 'catering.html', name: "Catering" }
                    ]
                }
                //end menu
            }
        }).mount('#navApp')
    </script>
</body>

</html>