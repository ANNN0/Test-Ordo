<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>TEST ORDO</title>
    <link rel="icon" href="{{ asset('images/logo2.png') }}">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter+Tight:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&display=swap" rel="stylesheet">
   
    @vite(['resources/css/app.css', 'resources/scss/all.scss', 'resources/scss/navbar.scss', 'resources/scss/header.scss', 'resources/scss/pt.scss', 'resources/scss/tentang.scss', 'resources/scss/event.scss', 'resources/scss/sponsor.scss', 'resources/scss/support.scss', 'resources/js/app.js'])

</head>

<body>
    <!--navbar start-->
    <nav>
        <div class="logo">
            <img src="{{ asset('image/aset navigation.png') }}" alt="logo" width="165px" height="50px">
        </div>
        <div class="navbar">
            <a href="about" id="aboutLink">About Green Haven</a>
            <a href="details" id="detailsLink">Event Details</a>
            <a href="sponsors" id="sponsorsLink">Our Sponsors</a>
            <a href="leaderboard" id="leaderboardLink">Leaderboard</a>
        </div>
        <div class="extra">
            <button id="plantButton">Plant a Mangrove</button>
        </div>
    </nav>
    

    <!--navbar start-->

    <!--header start-->
    <header>
        <div class="left-section">
            <div class="left-column-wrapper">
                <button class="project-gh">Green Haven Project - Mangrove</button>
                <h1 class="headline">Green Horizons Await, Join Us in Planting 10,000 Mangroves!</h1>
                <div class="project-card">
                    <div class="card-content">
                        <div class="logo-container">
                            <img src="{{ asset('image/aset leaderbboard 4.png') }}" alt="logo" width="40px">
                        </div>
                        <div class="tree-info">
                            <h1 class="tree-count">5,690<span class="tree-label">/ 10,000 Trees</span></h1>
                        </div>
                        <div class="support-section">
                            <button class="support-button">Support Our Mission</button>
                        </div>
                    </div>
                    <div class="progress-bar-container">
                        <div class="progress-bar"></div>
                    </div>
                </div>
            </div>
            <div class="mangrove-image-container">
                <img src="{{ asset('image/danau.png') }}" alt="mangrove" width="500px" height="500%" class="mangrove-image">
            </div>
        </div>
    
        <div class="right-section">
            <div class="leaderboard-container">
                <h1 class="leaderboard-title">Leaderboard</h1>
                <p class="most-donations">Most Donation</p>
                <p class="most-recent">Most Recent</p>
                <br><br>
                <div class="leaderboard-entry">
                    <div class="rank-number">
                        <p>01</p>
                    </div>
                    <div class="user-details">
                        <p class="user-role">Mangrove Maven</p>
                        <p class="user-name">Budi Hartanto</p>
                    </div>
                    <div class="tree-details">
                        <div class="total-trees">
                            <h1>350 <span class="tree-small">Trees</span></h1>
                        </div>
                    </div>
                </div>
    
                <div class="leaderboard-entry">
                    <div class="rank-number">
                        <p>02</p>
                    </div>
                    <div class="user-details">
                        <p class="user-role">Mangrove Maven</p>
                        <p class="user-name">Dewi Sartika</p>
                    </div>
                    <div class="tree-details">
                        <div class="total-trees">
                            <h1>330 <span class="tree-small">Trees</span></h1>
                        </div>
                    </div>
                </div>
    
                <div class="leaderboard-entry">
                    <div class="rank-number">
                        <p>03</p>
                    </div>
                    <div class="user-details">
                        <p class="user-role">Mangrove Maven</p>
                        <p class="user-name">Eko Wahyudi</p>
                    </div>
                    <div class="tree-details">
                        <div class="total-trees">
                            <h1>200 <span class="tree-small">Trees</span></h1>
                        </div>
                    </div>
                </div>
    
                <div class="leaderboard-entry">
                    <div class="rank-number rank-4">
                        <p>04</p>
                    </div>
                    <div class="user-details">
                        <p class="user-role">Guardian of the Grove</p>
                        <p class="user-name">Rina Kartika</p>
                    </div>
                    <div class="tree-details">
                        <div class="total-trees">
                            <h1>190 <span class="tree-small">Trees</span></h1>
                        </div>
                    </div>
                </div>
    
                <div class="leaderboard-entry">
                    <div class="rank-number rank-5">
                        <p>05</p>
                    </div>
                    <div class="user-details">
                        <p class="user-role">Guardian of the Grove</p>
                        <p class="user-name">Agus Prasetyo</p>
                    </div>
                    <div class="tree-details">
                        <div class="total-trees">
                            <h1>140 <span class="tree-small">Trees</span></h1>
                        </div>
                    </div>
                </div>
    
                <div class="leaderboard-entry">
                    <div class="rank-number rank-6">
                        <p>06</p>
                    </div>
                    <div class="user-details">
                        <p class="user-role">Mangrove Master</p>
                        <p class="user-name">Irfan Setiawan</p>
                    </div>
                    <div class="tree-details">
                        <div class="total-trees">
                            <h1>80 <span class="tree-small">Trees</span></h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
        
    <!--header end-->

    <!--pt start-->
    <div class="partner-container">
        <div class="partner-item">
            <img src="{{ asset('image/Jala.png') }}" alt="jala" class="partner-logo">
        </div>
        <div class="partner-item">
            <img src="{{ asset('image/Efishery.png') }}" alt="efishery" class="partner-logo">
        </div>
        <div class="partner-item">
            <img src="{{ asset('image/Azarine.png') }}" alt="azarine" class="partner-logo">
        </div>
        <div class="partner-item">
            <img src="{{ asset('image/Kompas.png') }}" alt="kompas" class="partner-logo">
        </div>
        <div class="partner-item">
            <img src="{{ asset('image/Tribun.png') }}" alt="tribunnews" class="partner-logo">
        </div>
        <div class="partner-item">
            <img src="{{ asset('image/JawaPos.png') }}" alt="jawapos" class="partner-logo">
        </div>
    </div>
    
    <br>
    <br>
    <!--pt end-->

    <!--tentang start-->
    <div class="project-about">
        <div class="about-images">
            <img src="{{ asset('image/JCI.png') }}" alt="jci" width="120px">
            <img src="{{ asset('image/GreenProject.png') }}" alt="greenproject" width="120px">
        </div>
        <div class="about-title">
            About Green Haven Project
        </div>
        <div class="about-description">
            <p class="description-text">The Green Haven Project - Mangrove aims to restore coastal ecosystems and raise
                awareness by planting mangroves and educating participants about the importance of these areas. This
                six-hour event will involve JCI members, local farmers, and students, focusing on combating beach
                erosion and promoting ESG values.</p>
        </div>
        <br>
        <br>
    
        <div class="before-after-images">
            <div class="before-image">
                <div class="before-caption">
                    <img src="{{ asset('image/Laut.jpg') }}" alt="before-img" width="500px">
                    <br>
                    <p>Before mangroves were planted</p>
                </div>
            </div>
            <div class="after-image">
                <div class="after-caption">
                    <img src="{{ asset('image/Kemarau.png') }}" alt="after-img" width="500px">
                    <br>
                    <p>After mangroves were planted</p>
                </div>
            </div>
            <div class="image-transformation">
                <img src="{{ asset('image/Arrow hijau.png') }}" alt="arrow">
                <p class="transformation-title">TRANSFORMATION</p>
            </div>
        </div>
    </div>
    
    <!--tentang end-->

    <!--event start-->
    <div class="event-summary-container">

        <div class="event-info">
            <div class="event-heading">
                Event Summary
            </div>
            <div class="event-description">
                <p>We give you a brief overview of the event to give you a glimpse of what we're doing </p>
                <p>in the Green Haven Project, download the detailed PDF to see how you can get involved</p>
            </div>
            <br>
            <br>
        </div>
    
        <div class="event-card">
            <div class="left-card">
                <div class="schedule">
                    <h1 class="event-date">26/04/2024</h1>
                    <h1 class="event-time">08:00 - 11:00 WIB</h1>
                </div>
                <p class="event-details">Join the impactful journey of planting mangroves,
                    where you'll learn, collaborate with locals, earn recognition,
                    and share your story through media coverage</p>
                <br>
                <div class="event-button">
                    <p class="button-text">View Event Details</p>
                </div>
            </div>
    
            <div class="right-card">
                <div class="image-wrapper">
                    <img src="{{ asset('image/Menanam.png') }}" alt="img-event">
                    </div>
                </div>
            </div>
        </div>
    
        <br>
        <br>
    
        <div class="step-container">
            <div class="step-item">
                <div class="step-line"></div>
                <p class="step-number">01</p>
                <p class="step-description">Introducing the beauty <br> of mangroves on a journey to the planting site.</p>
            </div>
            <div class="step-item">
                <div class="step-line gray"></div>
                <p class="step-number">02</p>
                <p class="step-description">Working together with <br>local farmers while <br> planting each mangrove</p>
            </div>
            <div class="step-item">
                <div class="step-line gray"></div>
                <p class="step-number">03</p>
                <p class="step-description">Exploring the wonders of mangrove ecotourism, an educational adventure.</p>
            </div>
            <div class="step-item">
                <div class="step-line gray"></div>
                <p class="step-number">04</p>
                <p class="step-description">Receive a plaque & badge, a mark of honor for every tree you plant.</p>
            </div>
            <div class="step-item">
                <div class="step-line gray"></div>
                <p class="step-number">05</p>
                <p class="step-description">Coverage & documentation by news media, share your story of change!</p>
            </div>
        </div>
    </div>
    
    <!--event end-->

    <!--sponsor start-->
    <div class="sponsorship-section">

        <div class="sponsorship-header">
            Sponsorship Packages
        </div>
        <div class="sponsorship-description">
            <p>Our sponsorship package offers branding, promotional opportunities, and visibility at our event, ideal
                for enhancing company presence and community engagement.</p>
        </div>
        <br>
        <br>
        <div class="individual-sponsorship">
            <p>Personal Sponsorship Package</p>
        </div>
        <br>
        <div class="sponsorship-table1">
            <table class="sponsor-table1">
    
                <tr>
                    <th class="tier-column">Membership Tier</th>
                    <th>Min. Seeds</th>
                    <th>Min. Buy</th>
                    <th>Benefits</th>
                    <th>Donors</th>
                    <th>Action</th>
                </tr>
                <tr>
                    <td class="tier-info">
                        <p class="tier-name">Seedling Scout</p>
                    </td>
                    <td>
                        5 Seeds
                    </td>
                    <td>
                        IDR 75K
                    </td>
                    <td>
                        Badge
                    </td>
                    <td>
                        4,900 Donors
                    </td>
                    <td>
                        <button class="action-button">Support Our Mission <img src="{{ asset('images/arrow-right.png') }}" alt=""></button>
                    </td>
                </tr>
                <tr>
                    <td class="tier-info">
                        <p class="tier-name">Sapling Savior</p>
                    </td>
                    <td>
                        10 Seeds
                    </td>
                    <td>
                        IDR 150K
                    </td>
                    <td>
                        Badge + Pin
                    </td>
                    <td>
                        4,300 Donors
                    </td>
                    <td>
                        <button class="action-button">Support Our Mission <img src="{{ asset('images/arrow-right.png') }}" alt=""></button>
                    </td>
                </tr>
                <tr>
                    <td class="tier-info">
                        <p class="tier-name">Tree Titan</p>
                    </td>
                    <td>
                        20 Seeds
                    </td>
                    <td>
                        IDR 300K
                    </td>
                    <td>
                        Badge + Pin
                    </td>
                    <td>
                        15,000 Donors
                    </td>
                    <td>
                        <button class="action-button">Support Our Mission <img src="{{ asset('images/arrow-right.png') }}" alt=""></button>
                    </td>
                </tr>
                <tr>
                    <td class="tier-info">
                        <p class="tier-name">Mangrove Master</p>
                    </td>
                    <td>
                        50 Seeds
                    </td>
                    <td>
                        IDR 750K
                    </td>
                    <td>
                        Badge + Pin + Bag
                    </td>
                    <td>
                        5,000 Donors
                    </td>
                    <td>
                        <button class="action-button">Support Our Mission <img src="{{ asset('images/arrow-right.png') }}" alt=""></button>
                    </td>
                </tr>
                <tr>
                    <td class="tier-info">
                        <p class="tier-name">Guardian of the Grove</p>
                    </td>
                    <td>
                        100 Seeds
                    </td>
                    <td>
                        IDR 1,500K
                    </td>
                    <td>
                        Badge + Pin + Bag
                    </td>
                    <td>
                        300 Donors
                    </td>
                    <td>
                        <button class="action-button">Support Our Mission <img src="{{ asset('images/arrow-right.png') }}" alt=""></button>
                    </td>
                </tr>
                <tr>
                    <td class="tier-info">
                        <p class="tier-name">Mangrove Maven</p>
                    </td>
                    <td>
                        200 Seeds
                    </td>
                    <td>
                        IDR 3,000K
                    </td>
                    <td>
                        Badge + Pin + Bag
                    </td>
                    <td>
                        10 Donors
                    </td>
                    <td>
                        <button class="action-button">Support Our Mission <img src="{{ asset('images/arrow-right.png') }}" alt=""></button>
                    </td>
                </tr>
            </table>
        </div>
        <br>
        <br>
        <div class="divider"></div>
        <br>
        <br>
    
        <div class="corporate-section">
            <div class="corporate-sponsorship-title">
                <p>Corporate Sponsorship Package</p>
            </div>
        </div>
        <br>
        <div class="sponsorship-table2">
            <table class="sponsor-table2">
                <tr>
                    <th>Benefits</th>
                    <th>Eco Trailblazers</th>
                    <th>Green Innovators</th>
                    <th>Eco Vanguard</th>
                </tr>
                <tr>
                    <td class="benefit-column">
                        <p class="benefit-text">Price</p>
                    </td>
                    <td>
                        15 Million IDR
                    </td>
                    <td>
                        30 Million IDR
                    </td>
                    <td>
                        45 Million IDR
                    </td>
                </tr>
                <tr>
                    <td class="benefit-column">
                        <p class="benefit-text">CO2 Sequestration</p>
                    </td>
                    <td>
                        22,5 ton/year
                    </td>
                    <td>
                        45 ton/year
                    </td>
                    <td>
                        67,5 ton/year
                    </td>
                </tr>
                <tr>
                    <td class="benefit-column">
                        <p class="benefit-text">Number of Trees</p>
                    </td>
                    <td>
                        1000 Trees
                    </td>
                    <td>
                        2000 Trees
                    </td>
                    <td>
                        3000 Trees
                    </td>
                </tr>
                <tr>
                    <td>
                        <p class="benefit-text">Logo on JCI Banner</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p class="benefit-text">Logo on Communal Stainless Plate</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p class="benefit-text">Considered as Main Sponsor</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p class="benefit-text">Report Update on Planted Trees</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p class="benefit-text">Logo on Event Clothings</p>
                    </td>
                </tr>
                <tr class="donation-section">
                    <td>
                        <p class="benefit-text">Make a Donation</p>
                    </td>
                    <td>
                        <button class="action-button-support">Donate Now ></button>
                    </td>
                    <td>
                        <button class="action-button-support">Donate Now ></button>
                    </td>
                    <td>
                        <button class="action-button-support">Donate Now ></button>
                    </td>
                </tr>
            </table>
        </div>
        <br>
        <br>
        <br>
    </div>
    
    <!--sponsor end-->

    <!--support start-->
    <div class="donation-container">
        <div class="donation-heading">
            Donate Today and be a <br>
            Guardian of the Green Belt.
        </div>
        <div class="donation-description">
            <p>Join us in our mission to rejuvenate and protect our shorelines
                by donating to our mangrove planting project. </p>
        </div>
        <br>
        <button class="donation-btn">Support Our Mission <img src="{{ asset('images/arrow-right.png') }}"
                alt=""></button>
        <div class="donation-images">
            <img src="{{ asset('image/rawa.png') }}" alt="support-img" width="240px" height="425px" class="donation-img1">
            <img src="{{ asset('image/tangan.png') }}" alt="support-img" width="240px" height="281px" class="donation-img2">
            <img src="{{ asset('image/menggali.png') }}" alt="support-img" width="240px" height="161px" class="donation-img3">
            <img src="{{ asset('image/Tanaman.png') }}" alt="support-img" width="240px" height="281px" class="donation-img4">
            <img src="{{ asset('image/pantai.png') }}" alt="support-img" width="240px" height="425px" class="donation-img5">
        </div>
    </div>
    <br>
    <br>
    <!--support end-->

    <!--nama pembuat-->
    <p class="developer-info"> Nama: Anindya Ananta Putra</p> <style></style>
    
</body>

</html>