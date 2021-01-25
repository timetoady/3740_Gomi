<?php 
$title= 'Cabot Cruises!';
include '_top.php'; 
?>
    <div id="container">

        <div class="slider">
            <div class="slideImageDiv">
                <picture>
                    <source media="(max-width: 700px)" srcset="./assets/images/ship1Square.jpg">
                    <source media="(min-width: 701px)" srcset="./assets/images/ship1Wide.jpg">
                    <img src="./assets/images/ship1Wide.jpg" alt="Cruise ship on the open sea">
                </picture>
            </div>
            <div class="slideImageDiv">
                <picture>
                    <source media="(max-width: 700px)" srcset="./assets/images/ship2Square.jpg">
                    <source media="(min-width: 701px)" srcset="./assets/images/ship2Wide.jpg">
                    <img src="./assets/images/ship2Wide.jpg" alt="Cruise ship on the open sea">
                </picture>
            </div>
            <div class="slideImageDiv">
                <picture>
                    <source media="(max-width: 700px)" srcset="./assets/images/ship3Square.jpg">
                    <source media="(min-width: 701px)" srcset="./assets/images/ship3Wide.jpg">
                    <img src="./assets/images/ship3Wide.jpg" alt="Cruise ship on the open sea">
                </picture>
            </div>
            <div class="slideImageDiv">
                <picture>
                    <source media="(max-width: 700px)" srcset="./assets/images/ship4Square.jpg">
                    <source media="(min-width: 701px)" srcset="./assets/images/ship4SWide.jpg">
                    <img src="./assets/images/ship4Wide.jpg" alt="Cruise ship on the open sea">
                </picture>
            </div>
        </div>


        <div>
            <h2>Recent Blog Articles</h2>
        </div>
        <div class="blogsDiv">

            <a href="#">
                <div class="aBlog blog1">
                    <div class="blogTitle">
                        Sparking water, sun and...
                    </div>
                    <div class="dateDiv">
                        May 22 2022
                    </div>
                </div>
            </a>

            <a href="#">
                <div class="aBlog blog2">
                    <div class="blogTitle">
                        Why you can afford the trip of your dreams
                    </div>
                    <div class="dateDiv">
                        Feb 16 2020
                    </div>
                </div>
            </a>

            <a href="#">
                <div class="aBlog blog3">
                    <div class="blogTitle">
                        You, the sky, the sound
                    </div>
                    <div class="dateDiv">
                        April 6 2019
                    </div>
                </div>
            </a>

            <a href="#">
                <div class="aBlog blog4">
                    <div class="blogTitle">
                        You want a party? Here's a party.
                    </div>
                    <div class="dateDiv">
                        March 11 2019
                    </div>
                </div>
            </a>


        </div>
    </div>
    <?php include '_bot.php'; ?>