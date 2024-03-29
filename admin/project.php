<!DOCTYPE html> 
<html lang="en"> 

<head> 
	<meta charset="UTF-8"> 
	<meta http-equiv="X-UA-Compatible"
		content="IE=edge"> 
	<meta name="viewport"
		content="width=device-width, 
				initial-scale=1.0"> 
	<title>Martial Arts</title> 
	<link rel="stylesheet"
		href="style.css"> 
	<link rel="stylesheet"
		href="responsive.css"> 
        <style>
            /* Main CSS Here */

@import url( 
"https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"); 

* { 
margin: 0; 
padding: 0; 
box-sizing: border-box; 
font-family: "Poppins", sans-serif; 
} 
:root { 
--background-color1: #fafaff; 
--background-color2: #ffffff; 
--background-color3: #ededed; 
--background-color4: #cad7fda4; 
--primary-color: #4b49ac; 
--secondary-color: #0c007d; 
--Border-color: #3f0097; 
--one-use-color: #3f0097; 
--two-use-color: #5500cb; 
} 
body { 
background-color: var(--background-color4); 
max-width: 100%; 
overflow-x: hidden; 
} 

header { 
height: 70px; 
width: 100vw; 
padding: 0 30px; 
background-color: var(--background-color1); 
position: fixed; 
z-index: 100; 
box-shadow: 1px 1px 15px rgba(161, 182, 253, 0.825); 
display: flex; 
justify-content: space-between; 
align-items: center; 
} 

.logo { 
font-size: 27px; 
font-weight: 600; 
color: rgb(47, 141, 70); 
} 

.icn { 
height: 30px; 
} 
.menuicn { 
cursor: pointer; 
} 

.searchbar, 
.message, 
.logosec { 
display: flex; 
align-items: center; 
justify-content: center; 
} 

.searchbar2 { 
display: none; 
} 

.logosec { 
gap: 60px; 
} 

.searchbar input { 
width: 250px; 
height: 42px; 
border-radius: 50px 0 0 50px; 
background-color: var(--background-color3); 
padding: 0 20px; 
font-size: 15px; 
outline: none; 
border: none; 
} 
.searchbtn { 
width: 50px; 
height: 42px; 
display: flex; 
align-items: center; 
justify-content: center; 
border-radius: 0px 50px 50px 0px; 
background-color: var(--secondary-color); 
cursor: pointer; 
} 

.message { 
gap: 40px; 
position: relative; 
cursor: pointer; 
} 
.circle { 
height: 7px; 
width: 7px; 
position: absolute; 
background-color: #fa7bb4; 
border-radius: 50%; 
left: 19px; 
top: 8px; 
} 
.dp { 
height: 40px; 
width: 40px; 
background-color: #626262; 
border-radius: 50%; 
display: flex; 
align-items: center; 
justify-content: center; 
overflow: hidden; 
} 
.main-container { 
display: flex; 
width: 100vw; 
position: relative; 
top: 70px; 
z-index: 1; 
} 
.dpicn { 
height: 42px; 
} 

.main { 
height: calc(100vh - 70px); 
width: 85%; 
overflow-y: scroll; 
overflow-x: hidden; 
padding: 40px 30px 30px 30px; 
} 

.main::-webkit-scrollbar-thumb { 
background-image: 
		linear-gradient(to bottom, rgb(0, 0, 85), rgb(0, 0, 50)); 
} 
.main::-webkit-scrollbar { 
width: 5px; 
} 
.main::-webkit-scrollbar-track { 
background-color: #9e9e9eb2; 
} 

.box-container { 
display: flex; 
justify-content: space-evenly; 
align-items: center; 
flex-wrap: wrap; 
gap: 50px; 
} 
.nav { 
min-height: 91vh; 
width: 250px; 
background-color: var(--background-color2); 
position: absolute; 
top: 0px; 
left: 00; 
box-shadow: 1px 1px 10px rgba(198, 189, 248, 0.825); 
display: flex; 
flex-direction: column; 
justify-content: space-between; 
overflow: hidden; 
padding: 30px 0 20px 10px; 
} 
.navcontainer { 
height: calc(100vh - 70px); 
width: 250px; 
position: relative; 
overflow-y: scroll; 
overflow-x: hidden; 
transition: all 0.5s ease-in-out; 
} 
.navcontainer::-webkit-scrollbar { 
display: none; 
} 
.navclose { 
width: 80px; 
} 
.nav-option { 
width: 250px; 
height: 60px; 
display: flex; 
align-items: center; 
padding: 0 30px 0 20px; 
gap: 20px; 
transition: all 0.1s ease-in-out; 
} 
.nav-option:hover { 
border-left: 5px solid #a2a2a2; 
background-color: #dadada; 
cursor: pointer; 
} 
.nav-img { 
height: 30px; 
} 

.nav-upper-options { 
display: flex; 
flex-direction: column; 
align-items: center; 
gap: 30px; 
} 

.option1 { 
border-left: 5px solid #010058af; 
background-color: var(--Border-color); 
color: white; 
cursor: pointer; 
} 
.option1:hover { 
border-left: 5px solid #010058af; 
background-color: var(--Border-color); 
} 
.box { 
height: 130px; 
width: 230px; 
border-radius: 20px; 
box-shadow: 3px 3px 10px rgba(0, 30, 87, 0.751); 
padding: 20px; 
display: flex; 
align-items: center; 
justify-content: space-around; 
cursor: pointer; 
transition: transform 0.3s ease-in-out; 
} 
.box:hover { 
transform: scale(1.08); 
} 

.box:nth-child(1) { 
background-color: var(--one-use-color); 
} 
.box:nth-child(2) { 
background-color: var(--two-use-color); 
} 
.box:nth-child(3) { 
background-color: var(--one-use-color); 
} 
.box:nth-child(4) { 
background-color: var(--two-use-color); 
} 

.box img { 
height: 50px; 
} 
.box .text { 
color: white; 
} 
.topic { 
font-size: 13px; 
font-weight: 400; 
letter-spacing: 1px; 
} 

.topic-heading { 
font-size: 30px; 
letter-spacing: 3px; 
} 

.report-container { 
min-height: 300px; 
max-width: 1200px; 
margin: 70px auto 0px auto; 
background-color: #ffffff; 
border-radius: 30px; 
box-shadow: 3px 3px 10px rgb(188, 188, 188); 
padding: 0px 20px 20px 20px; 
} 
.report-header { 
height: 80px; 
width: 100%; 
display: flex; 
align-items: center; 
justify-content: space-between; 
padding: 20px 20px 10px 20px; 
border-bottom: 2px solid rgba(0, 20, 151, 0.59); 
} 

.recent-Articles { 
font-size: 30px; 
font-weight: 600; 
color: #5500cb; 
} 

.view { 
height: 35px; 
width: 90px; 
border-radius: 8px; 
background-color: #5500cb; 
color: white; 
font-size: 15px; 
border: none; 
cursor: pointer; 
} 

.report-body { 
max-width: 1160px; 
overflow-x: auto; 
padding: 20px; 
} 
.report-topic-heading, 
.item1 { 
width: 1120px; 
display: flex; 
justify-content: space-between; 
align-items: center; 
} 
.t-op { 
font-size: 18px; 
letter-spacing: 0px; 
} 

.items { 
width: 1120px; 
margin-top: 15px; 
} 

.item1 { 
margin-top: 20px; 
} 
.t-op-nextlvl { 
font-size: 14px; 
letter-spacing: 0px; 
font-weight: 600; 
} 

.label-tag { 
width: 100px; 
text-align: center; 
background-color: rgb(0, 177, 0); 
color: white; 
border-radius: 4px; 
}

        </style>
        <style>
            /* Responsive CSS Here */
@media screen and (max-width: 950px) { 
.nav-img { 
	height: 25px; 
} 
.nav-option { 
	gap: 30px; 
} 
.nav-option h3 { 
	font-size: 15px; 
} 
.report-topic-heading, 
.item1, 
.items { 
	width: 800px; 
} 
} 

@media screen and (max-width: 850px) { 
.nav-img { 
	height: 30px; 
} 
.nav-option { 
	gap: 30px; 
} 
.nav-option h3 { 
	font-size: 20px; 
} 
.report-topic-heading, 
.item1, 
.items { 
	width: 700px; 
} 
.navcontainer { 
	width: 100vw; 
	position: absolute; 
	transition: all 0.6s ease-in-out; 
	top: 0; 
	left: -100vw; 
} 
.nav { 
	width: 100%; 
	position: absolute; 
} 
.navclose { 
	left: 00px; 
} 
.searchbar { 
	display: none; 
} 
.main { 
	padding: 40px 30px 30px 30px; 
} 
.searchbar2 { 
	width: 100%; 
	display: flex; 
	margin: 0 0 40px 0; 
	justify-content: center; 
} 
.searchbar2 input { 
	width: 250px; 
	height: 42px; 
	border-radius: 50px 0 0 50px; 
	background-color: var(--background-color3); 
	padding: 0 20px; 
	font-size: 15px; 
	border: 2px solid var(--secondary-color); 
} 
} 

@media screen and (max-width: 490px) { 
.message { 
	display: none; 
} 
.logosec { 
	width: 100%; 
	justify-content: space-between; 
} 
.logo { 
	font-size: 20px; 
} 
.menuicn { 
	height: 25px; 
} 
.nav-img { 
	height: 25px; 
} 
.nav-option { 
	gap: 25px; 
} 
.nav-option h3 { 
	font-size: 12px; 
} 
.nav-upper-options { 
	gap: 15px; 
} 
.recent-Articles { 
	font-size: 20px; 
} 
.report-topic-heading, 
.item1, 
.items { 
	width: 550px; 
} 
} 

@media screen and (max-width: 400px) { 
.recent-Articles { 
	font-size: 17px; 
} 
.view { 
	width: 60px; 
	font-size: 10px; 
	height: 27px; 
} 
.report-header { 
	height: 60px; 
	padding: 10px 10px 5px 10px; 
} 
.searchbtn img { 
	height: 20px; 
} 
} 

@media screen and (max-width: 320px) { 
.recent-Articles { 
	font-size: 12px; 
} 
.view { 
	width: 50px; 
	font-size: 8px; 
	height: 27px; 
} 
.report-header { 
	height: 60px; 
	padding: 10px 5px 5px 5px; 
} 
.t-op { 
	font-size: 12px; 
} 
.t-op-nextlvl { 
	font-size: 10px; 
} 
.report-topic-heading, 
.item1, 
.items { 
	width: 300px; 
} 
.report-body { 
	padding: 10px; 
} 
.label-tag { 
	width: 70px; 
} 
.searchbtn { 
	width: 40px; 
} 
.searchbar2 input { 
	width: 180px; 
} 
}

        </style>
</head> 

<body> 
	
	<!-- for header part -->
	<header> 

		<div class="logosec"> 
			<div class="logo">Martial Arts</div> 
			<img src= 
"https://media.geeksforgeeks.org/wp-content/uploads/20221210182541/Untitled-design-(30).png"
				class="icn menuicn"
				id="menuicn"
				alt="menu-icon"> 
		</div> 

		<div class="searchbar"> 
			<input type="text"
				placeholder="Search"> 
			<div class="searchbtn"> 
			<img src= 
"https://media.geeksforgeeks.org/wp-content/uploads/20221210180758/Untitled-design-(28).png"
					class="icn srchicn"
					alt="search-icon"> 
			</div> 
		</div> 

		<div class="message"> 
			<div class="circle"></div> 
			<img src= 
"https://media.geeksforgeeks.org/wp-content/uploads/20221210183322/8.png"
				class="icn"
				alt=""> 
			<div class="dp"> 
			<img src= 
"https://media.geeksforgeeks.org/wp-content/uploads/20221210180014/profile-removebg-preview.png"
					class="dpicn"
					alt="dp"> 
			</div> 
		</div> 

	</header> 

	<div class="main-container"> 
		<div class="navcontainer"> 
			<nav class="nav"> 
				<div class="nav-upper-options"> 
					<div class="nav-option option1"> 
						<img src= 
"https://media.geeksforgeeks.org/wp-content/uploads/20221210182148/Untitled-design-(29).png"
							class="nav-img"
							alt="dashboard"> 
						<h3> Dashboard</h3> 
					</div> 

					<div class="option2 nav-option"> 
					   <img src=https://th.bing.com/th/id/OIP.YlBPEj_pGOln7dokuYvgcQHaHa?rs=1&pid=ImgDetMain
                        class="nav-img" 
                        alt="student-icon"> 
						<h3> Students </h3> 
					</div> 

					<div class="nav-option option3">
    <a href="YOUR_INSTRUCTOR_URL">
        <img src=https://th.bing.com/th/id/OIP.4-kbMw89Ts4oDtpf37C7swHaHa?w=198&h=198&c=7&r=0&o=5&cb=11&pid=1.7
        class="nav-img" 
        alt="instructor-icon">
    </a>
    <h3>Instructor </h3>
</div>

					<div class="nav-option option4"> 
						<img src= 
"data:image/jpeg;base64,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"
							class="nav-img"
							alt="institution"> 
						<h3> Class </h3> 
					</div> 

					<div class="nav-option option5">
    <a href="YOUR_PAYMENT_URL">
        <img src="https://th.bing.com/th/id/OIP.FH4j44uhf_1y2ecM_ahV-QHaHa?w=184&h=183&c=7&r=0&o=5&cb=11&pid=1.7" 
        class="nav-img" 
        alt="payment-icon">
    </a>
    <h3>Payment </h3>
</div>

                    <div class="nav-option option4"> 
						<img src= 
"https://th.bing.com/th/id/OIP.HF-hAFyKOW479ynHQUHLlgHaHa?w=188&h=188&c=7&r=0&o=5&cb=11&pid=1.7"
							class="nav-img"
							alt="institution"> 
						<h3> Content </h3> 
					</div> 

                    
                    <div class="nav-option option4"> 
						<img src= 
                        https://static.vecteezy.com/system/resources/previews/000/423/506/non_2x/vector-document-icon.jpg
							class="nav-img"
							alt="institution"> 
						<h3>Reports </h3> 
					</div> 
                    
                    <div class="nav-option option6"> 
						<img src= 
                        https://th.bing.com/th?id=OIP.kK1PPwZvL5kKWnb6pdXDEQHaHa&w=250&h=250&c=8&rs=1&qlt=90&o=6&pid=3.1&rm=2
							class="nav-img"
							alt="settings"> 
						<h3> Communication</h3> 
					</div> 

					<div class="nav-option option6"> 
						<img src= 
"https://media.geeksforgeeks.org/wp-content/uploads/20221210183320/4.png"
							class="nav-img"
							alt="settings"> 
						<h3> Settings</h3> 
					</div> 

					<div class="nav-option logout"> 
						<img src= 
"https://media.geeksforgeeks.org/wp-content/uploads/20221210183321/7.png"
							class="nav-img"
							alt="logout"> 
						<h3>Logout</h3> 
					</div> 

				</div> 
			</nav> 
		</div> 

		<div class="main">
    <div class="searchbar2">
        <input type="text" name="" id="" placeholder="Search">
        <div class="searchbtn">
            <img src="https://media.geeksforgeeks.org/wp-content/uploads/20221210180758/Untitled-design-(28).png" class="icn srchicn" alt="search-button">
        </div>
    </div>

    <div class="box-container">
        <div class="box box1">
            <div class="text">
                <h2 class="topic-heading">30</h2>
                <h2 class="topic">Karate Classes</h2>
            </div>
            <img src="https://th.bing.com/th/id/OIP.CuL5ocO_TuMN-8Fh7hodcwHaH_?w=173&h=187&c=7&r=0&o=5&cb=11&pid=1.7" alt="Classes">
        </div>

        <div class="box box2">
            <div class="text">
                <h2 class="topic-heading">100</h2>
                <h2 class="topic">Students Enrolled</h2>
            </div>
            <img src="https://media.geeksforgeeks.org/wp-content/uploads/20221210185030/14.png" alt="Students">
        </div>

        <div class="box box3">
            <div class="text">
                <h2 class="topic-heading">20</h2>
                <h2 class="topic">Instructors</h2>
            </div>
            <img src="https://th.bing.com/th/id/OIP.4-kbMw89Ts4oDtpf37C7swHaHa?w=198&h=198&c=7&r=0&o=5&cb=11&pid=1.7" alt="Instructors">
        </div>

        <div class="box box4">
            <div class="text">
                <h2 class="topic-heading">10</h2>
                <h2 class="topic">Locations</h2>
            </div>
            <img src="https://th.bing.com/th?id=OIP.QJFAlTkHBQDyBuzplJCYiQHaHa&w=250&h=250&c=8&rs=1&qlt=90&o=6&pid=3.1&rm=2" alt="Locations">
        </div>
    </div>

    <div class="report-container">
        <div class="report-header">
            <h1 class="recent-Articles">Class Schedule</h1>
            <button class="view">View All</button>
        </div>

        <div class="report-body">
            <div class="report-topic-heading">
                <h3 class="t-op">Class Name</h3>
                <h3 class="t-op">Day/Time</h3>
                <h3 class="t-op">Instructor</h3>
                <h3 class="t-op">Location</h3>
            </div>

            <div class="items">
                <div class="item1">
                    <h3 class="t-op-nextlvl">Beginner's Karate</h3>
                    <h3 class="t-op-nextlvl">Mon/Wed 6:00 PM</h3>
                    <h3 class="t-op-nextlvl">Sensei John Doe</h3>
                    <h3 class="t-op-nextlvl label-tag">Dojo A</h3>
                </div>

                <div class="item1">
                    <h3 class="t-op-nextlvl">Intermediate Karate</h3>
                    <h3 class="t-op-nextlvl">Tue/Thu 7:00 PM</h3>
                    <h3 class="t-op-nextlvl">Sensei Jane Smith</h3>
                    <h3 class="t-op-nextlvl label-tag">Dojo B</h3>
                </div>

                <div class="item1">
                    <h3 class="t-op-nextlvl">Advanced Karate</h3>
                    <h3 class="t-op-nextlvl">Sat 10:00 AM</h3>
                    <h3 class="t-op-nextlvl">Sensei Michael Johnson</h3>
                    <h3 class="t-op-nextlvl label-tag">Dojo C</h3>
                </div>
            </div>
        </div>
    </div>
</div>


	<script>let menuicn = document.querySelector(".menuicn"); 
        let nav = document.querySelector(".navcontainer"); 
        
        menuicn.addEventListener("click", () => { 
            nav.classList.toggle("navclose"); 
        })
        </script> 
</body> 
</html>

