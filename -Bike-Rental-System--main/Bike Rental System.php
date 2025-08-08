<?php
if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $pass = $_POST['pass'];
    $email = $_POST['email'];
    $phno = $_POST['phno'];
    $servername = "localhost";
    $user = "root";
    $password = "";
    $dbname = "check";


    $con = mysqli_connect($servername, $user, "", $dbname   );
    if(mysqli_connect_errno()) {
        die("Failed to connect with MySQL: ". mysqli_connect_error());
    }

    $sql = "INSERT INTO tb_data (username, pass, email, phno) values ('','$username', '$pass' '$email', $phno)";
    $result=mysqli_query($con, $sql);
    if($result === true){
        echo '
        <script>
        alert("Data Entered sucessfully!!! Details will be sent to mail within 30 minutes")
        </script>';
    }
}
?>
<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous"/>
    <link rel="stylesheet" href="css.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="bike.js"></script>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-white">
            <div class="logo">
                <a class="navbar-brand" href="#Home">BIKE RENTAL SYSTEM</a>
                <img src="https://img.freepik.com/premium-vector/vector-motorcycle-sports-bike-logo-design_600323-955.jpg">
            </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ml-auto mr-5">
            <a class="nav-link active mr-4" href="#">
                Home
                <span class="sr-only">(current)</span>
            </a>
            <a class="nav-link mr-4" href="#Categories">Categories</a>
            <a class="nav-link mr-4" href="#Mountain Bikes">Mountain-Bikes</a>
            <a class="nav-link mr-4" href="#Normal Bikes">Normal-Bikes</a>
            <a class="nav-link mr-4" href="#Sports Bikes">Sports-Bikes</a>
            <a class="nav-link mr-4" href="#Electric Bikes">Electric-Bikes</a>
            <a class="nav-link mr-4" href="#Scooty">Scooty</a>
            <a class="nav-link mr-4" href="#Electric Scooty">Electric-Scooty</a>
            <a class="nav-link mr-4" href="#rent">Rent a Bike</a>
            </div>
        </div>
    </nav>
    <section id="Categories">
        <div class="g2kart-top-section">
            <h1 class="g2kart-top-section-heading">
                Happy Shopping!!!!!<br>
                Order the needy Bike on your choice.....
            </h1>
        </div>
        <div class="Mountain">
            <h1>Categories</h1>
        </div>
        <div class="g2kart-bottom-section">
            <div class="g2kart-card-item">
                <img
                src="https://bd.gaadicdn.com/processedimages/kawasaki/klx-140-g/source/klx-140-g660e894437721.jpg"
                class="g2kart-card-image"
                />
                <h1 class="g2kart-card-name">Mountain Bike</h1>
                <p class="g2kart-card-price">Starts from Rs 800</p>
                <a href="#Mountain Bikes">Click here to see all Mountain Bikes.</a>
            </div>
            <div class="g2kart-card-item">
                <img
                src="https://img.freepik.com/premium-vector/normal-motorcycle-illustration-logo_978275-5.jpg"
                class="g2kart-card-image"
                />
                <h1 class="g2kart-card-name">Normal Bike</h1>
                <p class="g2kart-card-price">Starts from Rs 700</p>
                <a href="#Normal Bikes">Click here to see all Normal Bikes.</a>
            </div>
            <div class="g2kart-card-item">
                <img
                src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRT9cykP1NhNPiIVIgh0o_S2vL2WXJSdAtf_Q&s"
                class="g2kart-card-image"
                />
                <h1 class="g2kart-card-name">Sports Bike</h1>
                <p class="g2kart-card-price">Starts fromRs 1000</p>
                <a href="#Sports Bikes">Click here to see all Sports Bikes.</a>
            </div>
            <div class="g2kart-card-item">
                <img
                src="https://bd.gaadicdn.com/processedimages/ola-electric/ola-electric-bike/source/ola-electric-bike66c832bf54bdc.jpg"
                class="g2kart-card-image"
                />
                <h1 class="g2kart-card-name">Electric Bikes</h1>
                <p class="g2kart-card-price">Starts from Rs 650</p>
                <a href="#Electric Bikes">Click here to see all Electric Bikes.</a>
            </div>
            <div class="g2kart-card-item">
                <img
                src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTBEtWfDSeoF2VhiZq0PXl9oXaVrzouvfgR3w&s"
                class="g2kart-card-image"
                />
                <h1 class="g2kart-card-name">Scooty</h1>
                <p class="g2kart-card-price">Starts from Rs 600</p>
                <a href="#Scooty">Click here to see all Scooties.</a>
            </div>
            <div class="g2kart-card-item">
                <img
                src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS-x0CCn6s--93KfupmFsLnLOwHsJM7ZQauKw&s"
                class="g2kart-card-image"
                />
                <h1 class="g2kart-card-name">Electric Scooty</h1>
                <p class="g2kart-card-price">Starts from Rs 600</p>
                <a href="#Electric Scooty">Click here to see all Electric Scooties.</a>
            </div>
        </div>
    </section>
    <br>
    <section id="Mountain Bikes">
        
        <div class="Mountain">
            <h1>Mountain Bikes</h1>
            <p>Each bike will have the same price</p>
            <p>Price: Rs 800/- per day
            </p>
            <div class="mimg">
                <div class="g2kart-card-item">
                    <img
                    src="https://img.freepik.com/premium-photo/orange-motorbike-cliff-background-mountain-village-high-mountains-travel-concept_158388-6026.jpg"
                    class="g2kart-card-image"
                    />
                </div>
                <div class="g2kart-card-item">
                    <img
                    src="https://s.alicdn.com/@sc04/kf/H653a24fb3eb34d718c558ea3b180a229I.jpg_300x300.jpg"
                    class="g2kart-card-image"
                    />
                </div>
                <div class="g2kart-card-item">
                    <img
                    src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSjhyzNjQLjiPH2SCUOx6akfJl10iK6Iq4T9Q&s"
                    class="g2kart-card-image"
                    />
                </div>
                <div class="g2kart-card-item">
                    <img
                    src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ26oyFy9lc2uW8XDSCfbyrQpq0JhUSyqGTjw&s"
                    class="g2kart-card-image"
                    />
                </div>
                <div class="g2kart-card-item">
                    <img
                    src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT_gAQaaXm2W5F-PsAQizXbhMzw_NTwdhflAg&s"
                    class="g2kart-card-image"
                    />
                </div>
                <div class="g2kart-card-item">
                    <img
                    src="https://s.alicdn.com/@sc04/kf/H90801a33b8a74e61872e8c6590f57982r.jpg_200x200.jpg"
                    class="g2kart-card-image"
                    />
                </div>
                <div class="g2kart-card-item">
                    <img
                    src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR3YoJEmimkWgxgu6N4iWgcPW6HlxnDpi-8oQ&s"
                    class="g2kart-card-image"
                    />
                </div>
                <div class="g2kart-card-item">
                    <img
                    src="https://www.odechair.com/blog/files/fx-bikes-film-illustration.jpg"
                    class="g2kart-card-image"
                    />
                </div>
                <div class="g2kart-card-item">
                    <img
                    src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSYIAIvIjR0liSTHl71wHxLgl18dhGKN0_kzQ&s"
                    class="g2kart-card-image"
                    />
                </div>
                <div class="g2kart-card-item">
                    <img
                    src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSfQfa3yS-ZYDfix5vK4Hm-5GGgjR0ak6vZRg&s"
                    class="g2kart-card-image"
                    />
                </div>
                <div class="g2kart-card-item">
                    <img
                    src="https://bd.gaadicdn.com/processedimages/kawasaki/klx-300r/640X309/klx-300r65fbe3a1c0236.jpg"
                    class="g2kart-card-image"
                    />
                </div>
            </div>
        </div>
    </section>
    <section id="Normal Bikes">
        <div class="Mountain">
            <h1>Normal Bikes</h1>
            <p>Each bike will have the same price</p>
            <p>Price: Rs 700/- per day</p>
            <div class="mimg">
                <div class="g2kart-card-item">
                    <img
                    src="https://cloudfront-us-east-1.images.arcpublishing.com/octane/U7NE4JOSA757H7EYU44LJEESSA.jpg"
                    class="g2kart-card-image"
                    />
                </div>
                <div class="g2kart-card-item">
                    <img
                    src="https://imgd.aeplcdn.com/272x153/n/cw/ec/185667/pulsar-150-right-side-view-9.jpeg?isig=0&q=80"
                    class="g2kart-card-image"
                    />
                </div>
                <div class="g2kart-card-item">
                    <img
                    src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT7xyuAHBs8D-r9lnOWNv3riT_GnnzvZMM8Dw&s"
                    class="g2kart-card-image"
                    />
                </div>
                <div class="g2kart-card-item">
                    <img
                    src="https://media.zigcdn.com/media/model/2023/Jul/harley-davidson-s-matte-black-right-side-view_360x240.jpg"
                    class="g2kart-card-image"
                    />
                </div>
                <div class="g2kart-card-item">
                    <img
                    src="https://cdn.britannica.com/89/126489-050-B744F07B/model-Harley-Davidson-Sportster-1957.jpg"
                    class="g2kart-card-image"
                    />
                </div>
                <div class="g2kart-card-item">
                    <img
                    src="https://www.cartoq.com/wp-content/uploads/2017/11/Avenger-Bruise.jpg"
                    class="g2kart-card-image"
                    />
                </div>
                <div class="g2kart-card-item">
                    <img
                    src="https://5.imimg.com/data5/DV/WN/GLADMIN-6484393/saluto-yamaha-motorcycle-500x500.png"
                    class="g2kart-card-image"
                    />
                </div>
            </div>
        </div>
    </section>
    <section id="Sports Bikes">
        <div class="Mountain">
            <h1>Sports Bikes</h1>
            <p>Each bike will have the same price</p>
            <p>Price: Rs 1000/- per day</p>
            <div class="mimg">
                <div class="g2kart-card-item">
                    <img
                    src="https://3.imimg.com/data3/KH/JX/GLADMIN-78117/sport-motorcycle-250x250.jpg"
                    class="g2kart-card-image"
                    />
                </div>
                <div class="g2kart-card-item">
                    <img
                    src="https://image.made-in-china.com/318f0j00aTZfDCHsVPYL/11%E6%9C%8816%E6%97%A5+%281%29%281%29.mp4.webp"
                    class="g2kart-card-image"
                    />
                </div>
                <div class="g2kart-card-item">
                    <img
                    src="https://www.datocms-assets.com/119921/1714134042-top-10-ten-sportsbikes-price-spec_thumb.jpg?auto=format&w=740"
                    class="g2kart-card-image"
                    />
                </div>
                <div class="g2kart-card-item">
                    <img
                    src="https://www.thebikemarket.co.uk/media/5354698/P90427257-highRes.jpg?width=640"
                    class="g2kart-card-image"
                    />
                </div>
                <div class="g2kart-card-item">
                    <img
                    src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSH5ENkQQGaS6IQtof4PtHH_E_HTEZ4zCcxmA&s"
                    class="g2kart-card-image"
                    />
                </div>
                <div class="g2kart-card-item">
                    <img
                    src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS9nqKQ6Biac7xOPk09Gan1pvHLngBoNnjZug&s"
                    class="g2kart-card-image"
                    />
                </div>
                <div class="g2kart-card-item">
                    <img
                    src="https://i.ytimg.com/vi/wqFODEvWslI/maxresdefault.jpg"
                    class="g2kart-card-image"
                    />
                </div>
                <div class="g2kart-card-item">
                    <img
                    src="https://static.toiimg.com/photo/80452572.cms"
                    class="g2kart-card-image"
                    />
                </div>
                <div class="g2kart-card-item">
                    <img
                    src="https://bearhugs.in/cdn/shop/files/ride-on-kids-sports-bike-r15-bear-hugs-1.webp?v=1725555289"
                    class="g2kart-card-image"
                    />
                </div>
            </div>
        </div>
    </section>
    <section id="Electric Bikes">
        <div class="Mountain">
            <h1>Electric Bikes</h1>
            <p>Each bike will have the same price</p>
            <p>Price: Rs 650/- per day
            </p>
            <div class="mimg">
                <div class="g2kart-card-item">
                    <img
                    src="https://images-cdn.ubuy.co.in/64d4f59ee0135472de0d1a0c-electric-motorcycle-for-kids.jpg"
                    class="g2kart-card-image"
                    />
                </div>
                <div class="g2kart-card-item">
                    <img
                    src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ9Q1A2AMOM6gkJfhger7sLiQTx8Q8FAGdGUg&s"
                    class="g2kart-card-image"
                    />
                </div>
                <div class="g2kart-card-item">
                    <img
                    src="https://images.squarespace-cdn.com/content/v1/63c94d36684e583a7ae37e3b/1695052363811-CP2OK22PD84SNB0J9Y61/Captain-Electro-Arc-Vector-1.jpg"
                    class="g2kart-card-image"
                    />
                </div>
                <div class="g2kart-card-item">
                    <img
                    src="https://rushlane.com/wp-content/uploads/2021/08/dab-electric-motorcycle-concept-launch-5-551x450.jpg"
                    class="g2kart-card-image"
                    />
                </div>
                <div class="g2kart-card-item">
                    <img
                    src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQKeGFZGj5XxH9xqfd4Fr7jS_O8E1Bd5yZhqw&s"
                    class="g2kart-card-image"
                    />
                </div>
                <div class="g2kart-card-item">
                    <img
                    src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSSGjKZNhGBUSDjMP-VcM0ghsMeChrZYDYuuw&s"
                    class="g2kart-card-image"
                    />
                </div>
            </div>
        </div>
    </section>
    <section id="Scooty">
        <div class="Mountain">
            <h1>Scooty</h1>
            <p>Each scooty will have the same price</p>
            <p>Price: Rs 600/- per day
            </p>
            <div class="mimg">
                <div class="g2kart-card-item">
                    <img
                    src="https://static.autox.com/uploads/bikes/2022/11/tvs-scooty-pep-plus.jpg"
                    class="g2kart-card-image"
                    />
                </div>
                <div class="g2kart-card-item">
                    <img
                    src="https://5.imimg.com/data5/SELLER/Default/2021/1/XQ/YX/PE/89419892/yellow-battery-operated-scooty-500x500.PNG"
                    class="g2kart-card-image"
                    />
                </div>
                <div class="g2kart-card-item">
                    <img
                    src="https://bd.gaadicdn.com/processedimages/honda/activa-6g/source/activa-6g65e80a97062a4.jpg"
                    class="g2kart-card-image"
                    />
                </div>
                <div class="g2kart-card-item">
                    <img
                    src="https://imgd.aeplcdn.com/476x268/bw/models/tvs-scooty-streak-standard-497.jpg?20190103151915"
                    class="g2kart-card-image"
                    />
                </div>
                <div class="g2kart-card-item">
                    <img
                    src="https://tiimg.tistatic.com/fp/2/007/956/stylish-pearl-white-125cc-lx-bs6-scooty-with-comfortable-to-ride-hero-destini-scooty-515.jpg"
                    class="g2kart-card-image"
                    />
                </div>
                <div class="g2kart-card-item">
                    <img
                    src="https://rsrtoursandtravel.com/wp-content/uploads/2022/08/Jupiter-tvs.jpg"
                    class="g2kart-card-image"
                    />
                </div>
                <div class="g2kart-card-item">
                    <img
                    src="https://bd.gaadicdn.com/processedimages/yamaha/ray-zr-125/source/ray-zr-1256613f28cc35e0.jpg?tr=w-320"
                    class="g2kart-card-image"
                    />
                </div>
                <div class="g2kart-card-item">
                    <img
                    src="https://static.autox.com/uploads/bikes/2023/03/suzuki-access-125.jpg"
                    class="g2kart-card-image"
                    />
                </div>
            </div>
        </div>
    </section>
    <section id="Electric Scooty">
        <div class="Mountain">
            <h1>Electric Scooty</h1>
            <p>Each scooty will have the same price</p>
            <p>Price: Rs 600/- per day
            </p>
            <div class="mimg">
                <div class="g2kart-card-item">
                    <img
                    src="https://bd.gaadicdn.com/processedimages/ola-electric/s1-pro/source/s1-pro664af02c3f229.jpg"
                    class="g2kart-card-image"
                    />
                </div>
                <div class="g2kart-card-item">
                    <img
                    src="https://imgd.aeplcdn.com/664x374/n/cw/ec/1/versions/honda-activa-electric-standard1718968974657.jpg?q=80"
                    class="g2kart-card-image"
                    />
                </div>
                <div class="g2kart-card-item">
                    <img
                    src="https://5.imimg.com/data5/SELLER/Default/2021/2/AY/WZ/KU/11189234/mareno-electric-scooty.jpg"
                    class="g2kart-card-image"
                    />
                </div>
                <div class="g2kart-card-item">
                    <img
                    src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSXWXENwXnp1JXTkaoU0FVKUWV42g_yCsmu6A&s"
                    class="g2kart-card-image"
                    />
                </div>
                <div class="g2kart-card-item">
                    <img
                    src="https://www.tvsmotor.com/electric-scooter/src/images/iqube/design-img.webp"
                    class="g2kart-card-image"
                    />
                </div>
            </div>
        </div>
    </section>
    <section id="rent">
    <form action="#" method="POST">
        First Name: <input type="text" placeholder="Create your username" name="username"> <br><br>
        password: <input type="password" placeholder="Create your own password" name="pass"><br><br>
        Email: <input type="email" placeholder="Enter your email" name="email"><br><br>
        Phno: <input type="number" placeholder="Enter your 10 digit mobile number" name="phno"><br><br>
        <input type="submit" name="submit" value="Send Data">
    </form>
    </section>
  </body>
</html>