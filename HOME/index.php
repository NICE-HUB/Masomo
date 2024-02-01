<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">
    <link href="STYLES/style.css" rel="stylesheet">
    <title>Document</title>
    <header>
      <a href=""><img class="logo" src="hacker.png" alt="" width="50px" height="50px"></a>
      <nav>
          <ul class="nav_links">
              <li><a href="#">HOME</a></li>
              <li><a href="#">COURSES</a></li>
              <li><a href="#">ABOUT</a></li>
              <li><a href="#">CONTACT</a></li>
          </ul>
      </nav>
      <i class="fa-solid fa-magnifying-glass"></i>
      <a class="cta" href="ELEARNING\Masomo\FORMS\login.php"><button id="user">login<i class="fa-solid fa-user"></i></button></a>
  </header>
    <style>

      @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@500&family=PT+Sans&family=Roboto:wght@300&display=swap');

*{
    box-sizing: border-box;
    margin: 0;
    padding: 0;
    /* background-color: #24252A; */
}

li,a,#user{
    font-family: 'Montserrat', sans-serif;
    font-weight: 500;
    font-size: 16px;
    color: #24252A;
    text-decoration: none;
}

header{
    position: relative;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 30px 10%;
    background-color: #fff;
}

.logo{
    cursor: pointer;
}

.nav_link{
    list-style: none;
}
.nav_links li{
    display: inline-block;
    padding: 0px 20px;
}

.nav_links li a{
    transition: all 0.3s ease 0s;
}

.nav_links li a:hover{
    color: #0088a9;
}

#user{
    padding: 9px 25px;
    background-color: rgba(0, 136, 169, 1);
    border: none;
    border-radius: 50px;
    cursor: pointer;
    transition: all 0.3s ease 0s;
}

button:hover{
    background-color: rgba(0, 136, 169, 0.8);
}
.fa-solid{
    color: #24252A;;
}
.fa-solid:hover{
    cursor: pointer;
    color: rgba(0, 136, 169, 0.8);
}
.masomo{
    display: inline-block;
    position: absolute;
    color: #24252A;
}

      html {
        scroll-behavior: smooth;
      }
      body {
        background: #c2d5e4c3;
        margin: 0;
        padding: 0;
        font-family: 'Poppins', sans-serif;
      }
      .container {
        display: flex;
        padding: 10px;
      }
      .container .txt {       
        font-size: 48px;
        line-height: 1;
        text-align: left;
        width: 70%;
        
      }
      .txt h1 {
        font-size: 38px; /* Increased heading font size */
        font-weight: 900; /* Increased heading font weight */
        margin-bottom: 10px; /* Added margin-bottom for spacing */
      }
      .txt .p1 {
        font-size: 18px;
        font-weight: 200;
      }
      .txt button {
        color: white;
        background-color: blue;
        width: 194px;
        height: 50px;
        border-radius: 25px 25px 0px 20px;
        border: none;
        cursor: pointer;
        margin-top: 10px;
      }
      .w3-container{
        border: 3px solid #ccc;
        background-color: white;
        border-radius: 8px;
        width: 200px;
        text-align: center;
        display: flex;
        height: 50px;
      }
      .courses-container {
        display: flex;
        flex-wrap: wrap;
        gap: 10px;
        padding: 10px 0PX 0PX 20px;
        width: 75%; 
        
      }
      .courses-container .courses-card{
        width: 40%;
      }
      .courses-card {
        border: 3px solid #ccc;
        background-color: white;
        border-radius: 8px;
        padding: 10px;
        width: 20px;
        text-align: center;
        display: flex;
        height: 50px;
        align-items: center;
      }
      .courses-card img {
        max-width: 100%;
        height: 30px;
        margin-bottom: 3px;
        margin-left: 2px;

      }
      .unit-btn {
        background-color: white;
        color: #00a;
        border: none;
        cursor: pointer;
        margin-top: 10px;
      }
      .more{
        display: grid;
        place-items: center; 
      }
      .more a{
        color: blue;
        font-size: 20px;
        padding: 20px;
      }
      #Explore{
        display: grid;
        place-items: center; 
      }
      .column {
        float: left;
        width: 25%;
        padding: 10px 5px 10px 80px;
      }
      .row {margin: 0 -5px;}
      .row:after {
        content: "";
        display: table;
        clear: both;
      }
      @media screen and (max-width: 600px) {
        .column {
          width: 70%;
          display: block;
          margin-bottom: 20px;
         
        }
      }
      .card {
        box-shadow: 0 4px 8px 0 rgba(191, 54, 54, 0.2);
        padding: 26px;
        text-align: center;
        background-color: #f1f1f1;
      }
      .checked{
        color: rgb(220, 135, 7);
      }
      .card img{
        max-width: 100%;
        height: 140px;
        margin-bottom: 10px;
        margin-left: 1px;
      }
.row {margin: 0 -5px;}

.row:after {
  content: "";
  display: table;
  clear: both;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  padding: 16px;
  text-align: center;
  background-color: #f1f1f1;
}
    </style>
</head>
<body>
    <div class="container">
        <div class="txt">
          <h1><b>Find a top course category</b></h1>
            <p class="p1"><b>that fits you</b></p>
            <p class="p1">Whether it's a first brush on canvas or <br>
               the last frame in an animation, Skillshare  <br>
                is here to support you on every <br>
                 step of your creative journey.</p>
            <button onclick="window.location.href='#rodmps'" >Learn More</button>
            
        </div>
        <div class="courses-container" id="cosescontainer">
          <div class="courses-card">
            <img class="courses-image" src="https://www.bloemfonteincourant.co.za/wp-content/uploads/2018/07/digital-coding-785.jpg" alt="Course 2">
            <h3>BSE COURSE</h3>
            <p>
              <button class="unit-btn" onclick="window.location.href='#BSE';">
                321 units
              </button>
            </p>
          </div>
          <div class="courses-card">
            <img class="courses-image" src="https://www.bloemfonteincourant.co.za/wp-content/uploads/2018/07/digital-coding-785.jpg" alt="Course 2">
            <h3>BCS COURSE</h3>
            <p>
              <button class="unit-btn" onclick="window.location.href='#BCS';">
                321 units
              </button>
            </p>
          </div>
          <div class="courses-card">
            <img class="courses-image" src="https://www.bloemfonteincourant.co.za/wp-content/uploads/2018/07/digital-coding-785.jpg" alt="Course 2">
            <h3>BBIT COURSE</h3>
            <p>
              <button class="unit-btn" onclick="window.location.href='#BBIT';">
                321 units
              </button>
            </p>
          </div>
          <div class="courses-card">
            <img class="courses-image" src="https://www.bloemfonteincourant.co.za/wp-content/uploads/2018/07/digital-coding-785.jpg" alt="Course 2">
            <h3>BSCIT COURSE</h3>
            <p>
              <button class="unit-btn" onclick="window.location.href='#BIT';">
                321 units
              </button>
            </p>
          </div>
          <div class="courses-card">
            <img class="courses-image" src="https://www.bloemfonteincourant.co.za/wp-content/uploads/2018/07/digital-coding-785.jpg" alt="Course 2">
            <h3>IT COURSE</h3>
            <p>
              <button class="unit-btn" onclick="window.location.href='#BCOM';">
                321 units
              </button>
            </p>
          </div>
          <div class="courses-card">
            <img class="courses-image" src="https://www.bloemfonteincourant.co.za/wp-content/uploads/2018/07/digital-coding-785.jpg" alt="Course 2">
            <h3>BCT COURSE</h3>
            <p>
              <button class="unit-btn" onclick="window.location.href='#SE';">
                321 units
              </button>
            </p>
          </div>
          <div class="courses-card">
            <img class="courses-image" src="https://www.bloemfonteincourant.co.za/wp-content/uploads/2018/07/digital-coding-785.jpg" alt="Course 2">
            <h3>BSE COURSE</h3>
            <p>
              <button class="unit-btn" onclick="window.location.href='#BSE';">
                321 units
              </button>
            </p>
          </div>
          <div class="courses-card">
            <img class="courses-image" src="https://www.bloemfonteincourant.co.za/wp-content/uploads/2018/07/digital-coding-785.jpg" alt="Course 2">
            <h3>BCS COURSE</h3>
            <p>
              <button class="unit-btn" onclick="window.location.href='#BCS';">
                321 units
              </button>
            </p>
          </div>
          <div class="courses-card">
            <img class="courses-image" src="https://www.bloemfonteincourant.co.za/wp-content/uploads/2018/07/digital-coding-785.jpg" alt="Course 2">
            <h3>BSCIT COURSE</h3>
            <p>
              <button class="unit-btn" onclick="window.location.href='#BIT';">
                321 units
              </button>
            </p>
          </div>
          <div class="courses-card">
            <img class="courses-image" src="https://www.bloemfonteincourant.co.za/wp-content/uploads/2018/07/digital-coding-785.jpg" alt="Course 2">
            <h3>BCT COURSE</h3>
            <p>
              <button class="unit-btn" onclick="window.location.href='#SE';">
                321 units
              </button>
            </p>
          </div>
          <div class="courses-card">
            <img class="courses-image" src="https://www.bloemfonteincourant.co.za/wp-content/uploads/2018/07/digital-coding-785.jpg" alt="Course 2">
            <h3>BIT COURSE</h3>
            <p>
              <button class="unit-btn" onclick="window.location.href='#SE';">
                321 units
              </button>
            </p>
          </div>
          <div class="courses-card">
            <img class="courses-image" src="https://www.bloemfonteincourant.co.za/wp-content/uploads/2018/07/digital-coding-785.jpg" alt="Course 2">
            <h3>BCOT COURSE</h3>
            <p>
              <button class="unit-btn" onclick="window.location.href='#SE';">
                321 units
              </button>
            </p>
          </div>
        </div>
    </div>
    <div class="more" id="mocoses">
      <a href="#rodmps">Show more courses <i class="fa fa-sort-desc" aria-hidden="true"></i></a>
    </div>
    <div class="rodmaps" id="rodmps">
      <a href="#rodmps"><h3 id="Explore">EXPLORE OUR POPULAR ROADMAPS</h3></a>  
      <div class="row">
        <div class="column">
          <div class="card">
            <img src="https://cdn.sanity.io/images/tlr8oxjg/production/ada93729daf922ad0318c8c0295e5cb477921808-1456x816.png?w=3840&q=100&fit=clip&auto=format"> 
            <p>DATA SCIENCE</p>
            <p>5.0<span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span></p>
              <p>40$</p>
          </div>
        </div>
        <div class="column">
          <div class="card">
            <img src="https://cdn.sanity.io/images/tlr8oxjg/production/ada93729daf922ad0318c8c0295e5cb477921808-1456x816.png?w=3840&q=100&fit=clip&auto=format">
            <p>WEB DEVELOPMENT</p>
            <p>2.0<span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star "></span>
              <span class="fa fa-star"></span>
              <span class="fa fa-star"></span></p>
              <p>80$</p>
          </div>
        </div>
        <div class="column">
          <div class="card">
            <img src="https://cdn.sanity.io/images/tlr8oxjg/production/ada93729daf922ad0318c8c0295e5cb477921808-1456x816.png?w=3840&q=100&fit=clip&auto=format">
            <p>DATA ANALYTICS</p>
            <p>3.0<span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star"></span>
              <span class="fa fa-star"></span></p>
              <p>40$</p>
          </div>
        </div>
        <div class="column">
          <div class="card">
            <img src="https://cdn.sanity.io/images/tlr8oxjg/production/ada93729daf922ad0318c8c0295e5cb477921808-1456x816.png?w=3840&q=100&fit=clip&auto=format">
            <p>DATA STRUCTURES</p>
            <p>4.5<span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star"></span></p>
              V
          </div>
        </div>
        <div class="column">
          <div class="card">
            <img src="https://cdn.sanity.io/images/tlr8oxjg/production/ada93729daf922ad0318c8c0295e5cb477921808-1456x816.png?w=3840&q=100&fit=clip&auto=format">
            <p>MACHINE LEARNING</p>
            <p>3.0<span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star"></span>
              <span class="fa fa-star"></span></p>
              <p>100$</p>
          </div>
        </div>
        <div class="column">
          <div class="card">
            <img src="https://cdn.sanity.io/images/tlr8oxjg/production/ada93729daf922ad0318c8c0295e5cb477921808-1456x816.png?w=3840&q=100&fit=clip&auto=format">
            <p>APP  DEVELOPMEN <i>java</i> </p>
            <p><span class="fa fa-star "></span>
              <span class="fa fa-star "></span>
              <span class="fa fa-star"></span>
              <span class="fa fa-star"></span>
              <span class="fa fa-star"></span></p>
              <p>400$</p>
          </div>
        </div>
        <div class="column">
          <div class="card">
            <img src="https://cdn.sanity.io/images/tlr8oxjg/production/ada93729daf922ad0318c8c0295e5cb477921808-1456x816.png?w=3840&q=100&fit=clip&auto=format">
            <p>FLUTTER <i>dart</i> </p>
            <p>5.0<span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span></p>
              <p>150$</p>
          </div>
        </div>
        <div class="column">
          <div class="card">
            <img src="https://cdn.sanity.io/images/tlr8oxjg/production/ada93729daf922ad0318c8c0295e5cb477921808-1456x816.png?w=3840&q=100&fit=clip&auto=format">
            <p>Some text</p>
            <p>3.0<span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star"></span>
              <span class="fa fa-star"></span></p>
          </div>
        </div>
        <div class="column">
          <div class="card">
            <img src="https://cdn.sanity.io/images/tlr8oxjg/production/ada93729daf922ad0318c8c0295e5cb477921808-1456x816.png?w=3840&q=100&fit=clip&auto=format">
            <p>PYTHON FOR ML</p>
            <p><span class="fa fa-star checked"></span>
              <p><span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star "></span>
                <span class="fa fa-star "></span>
                <span class="fa fa-star"></span></p>
              <p>140$</p>
          </div>
        </div>
        <div class="column">
          <div class="card">
            <img src="https://cdn.sanity.io/images/tlr8oxjg/production/ada93729daf922ad0318c8c0295e5cb477921808-1456x816.png?w=3840&q=100&fit=clip&auto=format">
            <p>BLOCKCHAIN</p>
            <p><span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star"></span></p>
              <p>240$</p>
          </div>
        </div>  
        <div class="column">
          <div class="card">
            <img src="https://cdn.sanity.io/images/tlr8oxjg/production/ada93729daf922ad0318c8c0295e5cb477921808-1456x816.png?w=3840&q=100&fit=clip&auto=format">
            <p>Some text</p>
            <p><span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star"></span>
              <span class="fa fa-star"></span>
              <span class="fa fa-star"></span></p>
          </div>
        </div>   
        <div class="column">
          <div class="card">
            <div class="cardd">
            <img src="https://cdn.sanity.io/images/tlr8oxjg/production/ada93729daf922ad0318c8c0295e5cb477921808-1456x816.png?w=3840&q=100&fit=clip&auto=format">
            <p>Some text</p>
            <p><span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star"></span>
              <span class="fa fa-star"></span></p>
          </div>
        </div>
        </div>
      </div>
    </div>
    <div class="backtop" id="baktop">
      <a href="#cosescontainer"><h3>Back to courses</h3></a>
    </div>
<br>
    <h2 style="text-align:center">What our students are saying </h2>

   

</div>
</body>
</html>
