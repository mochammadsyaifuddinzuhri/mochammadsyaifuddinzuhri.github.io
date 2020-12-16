<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bamboo Restaurant - Syaifuddin</title>
    <!-- Link Font -->
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
      rel="stylesheet">
    <!-- Link Css -->

    <link rel="stylesheet" href="./assets/css/main.css">
    <link rel="stylesheet" href="./assets/css/order.css">
    <link rel="stylesheet" href="./assets/css/dropdown.css">
  </head>

  <body>

    <!-- Header -->
    <header>
      <div class="wrap__nav">
        <div class="app__logo">
          <a href="./index.php">
            <h1>Bamboo Restaurant</h1>
          </a>
        </div>
        <nav>
          <ul>
            <li><a href="./index.php" class="nav__link">Home</a></li>
            <li><a href="./profile.php" class="nav__link">Profil</a></li>
            <li><a href="./about.php" class="nav__link">Tentang</a></li>
            <li><a href="./order.php" class="nav__link">Kasir</a></li>
          </ul>
        </nav>
      </div>
    </header>
    <!-- End Header -->

    <!-- Content -->
    <section id="info">
      <div class="container">
        <div class="wrap__info">
          <h1 class="title__section">Makanan Terbaru</h1>
          <div class="list">
            <div class="card">
              <div class="wrap__img">
                <img src="./assets/img/1.png" alt="Makanan">
              </div>
              <h3>Veggie Burgers</h3>
              <p>Rp. 15000</p>
            </div>
            <div class="card">
              <div class="wrap__img">
                <img src="./assets/img/3.png" alt="Makanan">
              </div>
              <h3>Salmon Scrambled</h3>
              <p>Rp. 12000</p>
            </div>
            <div class="card">
              <div class="wrap__img">
                <img src="./assets/img/2.png" alt="Makanan">
              </div>
              <h3>Mustard Salad</h3>
              <p>Rp. 18000</p>
            </div>
            <div class="card">
              <div class="wrap__img">
                <img src="./assets/img/4.png" alt="Makanan">
              </div>
              <h3>Huevo Crocantes</h3>
              <p>Rp. 10000</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="order">
      <div class="container">
        <div class="wrap__order">
          <div class="input__order">
            <h1>Input Pesanan</h1>
            <hr>
            <form action="" method="POST" class="form">
              <div class="form__group">
                <label for="id">ID</label>
                <input type="text" name="id" class="input" id="id" required>
              </div>
              <div class="form__group">
                <label for="name">Nama Pembeli</label>
                <input type="text" name="name" class="input" id="name" required>
              </div>
              <div class="form-group">
                <label for="food_menu" id="label">Jenis Makanan</label>
                <select name="food_menu" id="food_menu" multiple data-multi-select-plugin>
                  <option value="Veggie Burgers" data-price="15000">Veggie Burgers</option>
                  <option value="Buttery Honey Mustard Salad" data-price="18000">Buttery Honey Mustard Salad</option>
                  <option value="Salmon Scrambled" data-price="12000">Salmon Scrambled</option>
                  <option value="Huevo Crocantes" data-price="10000">Huevo Crocantes</option>
                </select>
              </div>
              <div class="form__group">
                <label for="total_order">Jumlah Pesanan</label>
                <input type="number" name="total_order" class="input" id="total_order" required>
              </div>
              <div class="form__group">
                <label>Status Pembeli</label>
                <div class="group__radio">
                  <div>
                    <input type="radio" id="member" name="status" value="Member" required>
                    <label for="member">Member</label><br>
                  </div>
                  <div>
                    <input type="radio" id="non_member" name="status" value="Non-member" required>
                    <label for="non_member">Non-member</label><br>
                  </div>
                </div>
              </div>
              <button type="submit" class="btn__submit">Submit</button>
            </form>
          </div>
          <div class="result__order">
            <h1>Hasil Pesanan</h1>
            <hr>
            <p>ID : <span id="res_id"></span></p>
            <p>Nama Pembeli : <span id="res_name"></span></p>
            <p>Status Pembeli : <span id="res_status"></span></p>
            <p>Jenis Makanan : <span id="res_menu"></span></p>
            <p>Jumlah Pesanan : <span id="res_order"></span></p>
            <hr>
            <p>Diskon : <span id="diskon"></span>%</p>
            <p>Total Harga : Rp. <span id="res_harga"></span>,-</p>
          </div>
        </div>
      </div>
    </section>
    <!-- End Content -->

    <!-- Footer -->
    <footer>
      <p>Powered by <a href="https://github.com/syaifuddinzuhri" target="_blank">Mochammad Syaifuddin Zuhri</a>,
        Politeknik Negeri
        Malang</p>
    </footer>


    <script src="./assets/js/order.js"></script>
    <script src="./assets/js/operation_order.js"></script>

  </body>

</html>
<!-- End Footer -->