<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">

    <style>
        /* Basic layout and styling */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            display: flex;
            flex-direction: column;
            /* height: 100vh; */
        }

        #main-content {
            display: flex;
            flex: 1;
            background-color: black;
        }

        #sidebar {
            width: 20%;
            /* background-color: black; */
            padding: 20px;
            border-right: 1px solid #ddd;
            display: flex;
            flex-direction: column;
        }

        /* Content Area Styling (80% width) */
        #content {
            width: 75%;
            height: 800px;
            padding: 20px;
            margin-right: 5%;
            border: 10px double white;
            /* overflow-y: auto; */
        }

        /* Inline display for anchor tags in sidebar */
        #sidebar a {
            display: inline-block;
            margin-right: 15px;
            /* Space between the links */
            text-decoration: none;
            color: white;
            cursor: pointer;
            font-size: 22px;
            background-color: #2b2828;
            margin-top: 5px;
            padding: 10px;
        }

        #sidebar a:hover {
            /* text-decoration: underline; */
            color: orange;
        }

        #sidebar a:active {
            /* text-decoration: underline; */
            color: red;
        }


        /* Hide elements initially */
        .hidden {
            /* display: none; */
            /* color: orange !important; */
        }

        iframe {
            border: 0px;
        }

        /* Navbar Styles */
        /* ......................nav bar is here............................. */
        nav {
            
            background-color: black;
            padding: 10px;
            text-align: center;
            height: 75px;
            display: flex;
            align-items: center;
            justify-content: center;

        }

        nav img {
            margin-top: -15px;
            margin-left: -21px;
        }

        nav a {
            color: white;
            padding: 14px 20px;
            text-decoration: none;
            text-transform: uppercase;
        }
       
        nav a:hover {
            color: orange;
        }

        nav h4 {
            font-size: 22px;
            color: white;
            position: absolute;
            left: 10px;
            font-family: "Dancing Script", cursive;
            font-optical-sizing: auto;
            font-style: normal;
        }
        nav a i{
            font-size: 20px;
        }
       
        nav h3 {
            font-size: 22px;
            color: white;
            position: absolute;
            right: 15px;
            font-family: "Dancing Script", cursive;
            font-optical-sizing: auto;
            font-style: normal;
        }

        /* ............................................footer................................ */
        .footer {
            background-color: black;
            color: white;
            display: flex;
        }

        .fleft {
            /* background-color: green; */
            width: 30%;
            margin-left: 5%;
            padding: 20px;
        }

        .fleft p {
            padding: 5px;
            text-align: justify;
        }

        .fleft h4 {
            font-size: 22px;
            margin-bottom: 8px;
            font-style: italic;
        }

        .fright {
            display: flex;
            justify-content: space-between;
            text-align: center;
            margin-right: 5%;
            /* background-color: red; */
            width: 60%;
            padding: 20px;
        }

        .fright ul {
            list-style-type: none;
            line-height: 30px;
            text-align: left;
            width: 30%;
        }

        .fright span {
            font-weight: bold;
            font-size: 18px;
        }

        .fa-brands {
            font-size: 22px;
            color: white;
            padding: 10px;
            border: .2px solid white;
            border-radius: 8px;
            /* background-color: black; */
        }

        .fa-brands:hover {
            background-color: #4CAF50;
        }

        .ftext {
            text-align: center;
            background-color: black;
            color: white;
            padding: 10px;
        }

        .hr {
            background-color: white;
            width: 100%;
            height: 1px;
        }
    </style>
    <script>
        function loadContent(page) {
            var contentFrame = document.getElementById('content');
            contentFrame.innerHTML = "<iframe src='" + page + "' style='width: 100%; height: 100%; border: none;'></iframe>";

            document.getElementById('listList').classList.add('hidden');
            document.getElementById('createLink').classList.add('hidden');
            document.getElementById('updateLink').classList.add('hidden');
            document.getElementById('deleteLink').classList.add('hidden');

            if (page === 'clublist.php') {
                document.getElementById('updateLink').classList.remove('hidden');
                document.getElementById('deleteLink').classList.remove('hidden');
                document.getElementById('createLink').classList.remove('hidden');
            } else if (page === 'update_club.php') {
                document.getElementById('listList').classList.remove('hidden');
                document.getElementById('createLink').classList.remove('hidden');
                document.getElementById('deleteLink').classList.remove('hidden');
            } else if (page === 'deleteclub.php') {
                document.getElementById('createLink').classList.remove('hidden');
                document.getElementById('updateLink').classList.remove('hidden');
                document.getElementById('listList').classList.remove('hidden');

            } else if (page === 'createnewclub.php') {
                document.getElementById('deleteLink').classList.remove('hidden');
                document.getElementById('updateLink').classList.remove('hidden');
                document.getElementById('listList').classList.remove('hidden');

            }
        }
    </script>
</head>

<body>
    <nav>
        <a href="javascript:void(0);" id="toggleSidebar" onclick="toggleSidebar()"><i class="fa-solid fa-list"></i></a>
        
        <h4>The Noida Clubs</h4>
        <a href="../Html/index.php">Home</a>
        <a href="../about.php">About</a>
        <a href="../service.php">Services</a>
        <a href="../contact.php">Contact Us</a>
        <a href="../Html/index.php">LogOut</a>
        <h3>+91 70076000000</h3>
    </nav>

    <div id="main-content">
        <div id="sidebar">
            <a href="showallbookings.php" id="listList">Bookings</a>
            <a href="query.php" id="listList">Queries</a>
            <a href="javascript:void(0);" id="listList" onclick="loadContent('clublist.php')">Club List</a>
            <a href="javascript:void(0);" id="createLink" onclick="loadContent('createnewclub.php')" class="hidden">Create New Club</a>
            <a href="javascript:void(0);" id="updateLink" onclick="loadContent('update_club.php')" class="hidden">Update Club Details</a>
            <a href="javascript:void(0);" id="deleteLink" onclick="loadContent('deleteclub.php')" class="hidden">Delete Club</a>
        </div>

        <div id="content">
            <iframe src="clublist.php" style="width:100%" height="100%"></iframe>
        </div>
    </div>

    <script>
        function toggleSidebar() {
            var sidebar = document.getElementById('sidebar');
            var content = document.getElementById('content');
            var toggleButton = document.getElementById('toggleSidebar');
            
            
            if (sidebar.style.display === 'none') {
                sidebar.style.display = 'flex';
                content.style.width = '75%';
                content.style.marginRight = '5%'; 
                content.style.border='10px double white';
                // toggleButton.innerText = 'Hide Sidebar'; 
            } else {
                sidebar.style.display = 'none'; 
                content.style.width = '100%';
                content.style.margin = '0px';
                content.style.border='none';
                // toggleButton.innerText = '<i class="fa-solid fa-list"></i>'; 
            }
        }

        function loadContent(page) {
            var contentFrame = document.getElementById('content');
            contentFrame.innerHTML = "<iframe src='" + page + "' style='width: 100%; height: 100%; border: none;'></iframe>";

            document.getElementById('listList').classList.add('hidden');
            document.getElementById('createLink').classList.add('hidden');
            document.getElementById('updateLink').classList.add('hidden');
            document.getElementById('deleteLink').classList.add('hidden');

            if (page === 'clublist.php') {
                document.getElementById('updateLink').classList.remove('hidden');
                document.getElementById('deleteLink').classList.remove('hidden');
                document.getElementById('createLink').classList.remove('hidden');
            } else if (page === 'update_club.php') {
                document.getElementById('listList').classList.remove('hidden');
                document.getElementById('createLink').classList.remove('hidden');
                document.getElementById('deleteLink').classList.remove('hidden');
            } else if (page === 'deleteclub.php') {
                document.getElementById('createLink').classList.remove('hidden');
                document.getElementById('updateLink').classList.remove('hidden');
                document.getElementById('listList').classList.remove('hidden');
            } else if (page === 'createnewclub.php') {
                document.getElementById('deleteLink').classList.remove('hidden');
                document.getElementById('updateLink').classList.remove('hidden');
                document.getElementById('listList').classList.remove('hidden');
            }
        }
    </script>


    <!-- Footer -->
    <div class="footer">
        <div class="fleft">
            <h4>The Noida Clubs</h4>
            <p>Noida hosts a number of premium, exclusive clubs that attract professionals and those looking for a
                high-end experience. Clubs like The Club at Jaypee Greens and The Grand Venice offer </p>
            <p>For younger crowds and those seeking nightlife, Noida's Sector 18 area, known for its malls and
                commercial spots, has some good options. Clubs like The Vault Café, Sky Bar, and The Noida </p>
        </div>
        <div class="fright">
            <ul>
                <span>Links</span>
                <li>Home</li>
                <li>About Us</li>
                <li>Clubs</li>
                <li>Pricing</li>
                <li>Contact</li>
            </ul>
            <ul>
                <span>Contact US</span>
                <li><b>Address</b> - Noida Sector 58 </li>
                <li>Delhi - Noida Expressway </li>
                <li><b>Phone :</b> +91,700760000</li>
                <li><b>Email I'd :-</b>amitpss239@gmail.com</li>
            </ul>
            <ul>
                <span>Social Links</span>
                <li>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vero asperiores es</li>
                <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                    <a href="#"><i class="fa-brands fa-x-twitter"></i></a>
                    <a href="#"><i class="fa-brands fa-facebook"></i></a>
                    <a href="#"><i class="fa-brands fa-youtube"></i></a>
                </li>
            </ul>
        </div>
    </div>
    <div class="hr"></div>
    <div class="ftext">
        <p>© 2024 Club. All Rights Reserved by PSS Tech noida </p>
    </div>
</body>

</html>