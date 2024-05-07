<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>KOPI HITADO | Dashboard</title>
    <script src="https://unpkg.com/feather-icons"></script>

        <!-- Style partial -->
        @include('Pelanggan.asset.style')
        <!-- end Style Partial -->

</head>
<body>
        <!-- partial navbar -->
        @include('Pelanggan.layout.pelanggan-navbar')
        <!-- end partial navbar -->
    
        <section class="awal" style="display: flex; min-height: 50vh; background-position: center; align-items: center; background-repeat: no-repeat;">
            <div class="container" style="max-width: 100%; margin: 0 auto; padding-top: 8rem;">
                <h1 style="font-size: 3rem; font-family: 'Playfair Display'; color: #8e181f; margin: 3rem; text-align: center;">DAFTAR MENU</h1>
                <p style="font-size: 1rem; font-family: 'DM Sans'; color: #1e1e1e; text-align: center;">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus lobortis elit et mi lobortis, sed varius tortor aliquam. Maecenas ac quam lacinia,
                </p>
                <div class="header-content" style="display: flex; align-items: center; justify-content: center; margin-top: 3rem;">
                    <div class="search-box" style="display: flex; align-items: center; border: 1px solid #cfbcae; border-radius: 5px; padding: 5px; width: 500px; height: 40px;">
                        <input type="text" placeholder="Search Product" style="border: none; outline: none;">
                    </div>
                    <div class="icon" style="color: #ffffff; background-color: #000000; border-radius: 5px; cursor: pointer; margin-left: 5px; justify-content: flex-end; height: 30px; width: 30px;">
                        <i class="search-icon" data-feather="search" style="padding-left:5px;"></i>
                    </div>
                </div>
                <div class="toggle-box" style="display: flex; justify-content: flex-end; margin-top: 60px; margin-bottom: 10px;">
                    <button class="toggle-btn active" id="#toggle-food" style="padding: 10px 20px; background-color: #ccc; border: none; cursor: pointer;">Makanan</button>
                    <button class="toggle-btn active" id="#toggle-drink" style="padding: 10px 20px; background-color: #ccc; border: none; cursor: pointer;">Minuman</button>
                </div>
            </div>
        </section>

        <!-- Menu start -->
        <section class="minuman" id="toggle-drink" style="background-color: #efe9d3;">
            <h2 style="font-size: 4rem; margin-left: 4rem; font-family: 'Playfair Display'; color: #8e181f;">Minuman</h2>
            <div class="row" style="display: flex;  margin-top: 3rem; flex-direction:row;">
                <!-- Menu-card 1 -->
                <div class="menu-card" style="text-align: center; padding-bottom: 4rem;">
                    <img src="../img/minuman.jpeg" alt="Espresso" class="menu-card-img" style="border: 10px solid #ffffff; width: 15%;">
                    <h3 class="menu-card-title" style="margin: 1rem auto 0.5rem;"></h3>
                    <p class="menu-card-price" style="margin: 1rem auto 0.5rem;"></p>
                    <div class="addcart" style="margin-top: 10px;">
                        <button style="background-color: transparent; border: 1px solid #8e181f; color: #8e181f; padding: 5px 10px; font-size: 12px; display: inline-flex; align-items: center; cursor: pointer;">
                            <i data-feather="shopping-cart"></i>
                            <span>Tambahkan ke Keranjang</span>
                        </button>
                    </div>
                </div>

                <!-- Menu-card 2 -->
                <div class="menu-card" style="text-align: center; padding-bottom: 4rem;">
                    <img src="../img/minuman.jpeg" alt="Espresso" class="menu-card-img" style="border: 10px solid #ffffff; width: 15%;">
                    <h3 class="menu-card-title" style="margin: 1rem auto 0.5rem;"></h3>
                    <p class="menu-card-price" style="margin: 1rem auto 0.5rem;"></p>
                    <div class="addcart" style="margin-top: 10px;">
                        <button style="background-color: transparent; border: 1px solid #8e181f; color: #8e181f; padding: 5px 10px; font-size: 12px; display: inline-flex; align-items: center; cursor: pointer;">
                            <i data-feather="shopping-cart"></i>
                            <span>Tambahkan ke Keranjang</span>
                        </button>
                    </div>
                </div>

                <!-- Menu-card 3 -->
                <div class="menu-card" style="text-align: center; padding-bottom: 4rem;">
                    <img src="../img/minuman.jpeg" alt="Espresso" class="menu-card-img" style="border: 10px solid #ffffff; width: 15%;">
                    <h3 class="menu-card-title" style="margin: 1rem auto 0.5rem;"></h3>
                    <p class="menu-card-price" style="margin: 1rem auto 0.5rem;"></p>
                    <div class="addcart" style="margin-top: 10px;">
                        <button style="background-color: transparent; border: 1px solid #8e181f; color: #8e181f; padding: 5px 10px; font-size: 12px; display: inline-flex; align-items: center; cursor: pointer;">
                            <i data-feather="shopping-cart"></i>
                            <span>Tambahkan ke Keranjang</span>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Bagian bawah -->
            <div class="row" style="display: flex; flex-wrap: wrap; margin-top: 3rem; justify-content: center;">
                <!-- Menu-card 4 -->
                <div class="menu-card" style="text-align: center; padding-bottom: 4rem;">
                    <img src="../img/minuman.jpeg" alt="Espresso" class="menu-card-img" style="border: 10px solid #ffffff; width: 15%;">
                    <h3 class="menu-card-title" style="margin: 1rem auto 0.5rem;"></h3>
                    <p class="menu-card-price" style="margin: 1rem auto 0.5rem;"></p>
                    <div class="addcart" style="margin-top: 10px;">
                        <button style="background-color: transparent; border: 1px solid #8e181f; color: #8e181f; padding: 5px 10px; font-size: 12px; display: inline-flex; align-items: center; cursor: pointer;">
                            <i data-feather="shopping-cart"></i>
                            <span>Tambahkan ke Keranjang</span>
                        </button>
                    </div>
                </div>

                <!-- Menu-card 5 -->
                <div class="menu-card" style="text-align: center; padding-bottom: 4rem;">
                    <img src="../img/minuman.jpeg" alt="Espresso" class="menu-card-img" style="border: 10px solid #ffffff; width: 15%;">
                    <h3 class="menu-card-title" style="margin: 1rem auto 0.5rem;"></h3>
                    <p class="menu-card-price" style="margin: 1rem auto 0.5rem;"></p>
                    <div class="addcart" style="margin-top: 10px;">
                        <button style="background-color: transparent; border: 1px solid #8e181f; color: #8e181f; padding: 5px 10px; font-size: 12px; display: inline-flex; align-items: center; cursor: pointer;">
                            <i data-feather="shopping-cart"></i>
                            <span>Tambahkan ke Keranjang</span>
                        </button>
                    </div>
                </div>

                <!-- Menu-card 6 -->
                <div class="menu-card" style="text-align: center; padding-bottom: 4rem;">
                    <img src="../img/minuman.jpeg" alt="Espresso" class="menu-card-img" style="border: 10px solid #ffffff; width: 15%;">
                    <h3 class="menu-card-title" style="margin: 1rem auto 0.5rem;"></h3>
                    <p class="menu-card-price" style="margin: 1rem auto 0.5rem;"></p>
                    <div class="addcart" style="margin-top: 10px;">
                        <button style="background-color: transparent; border: 1px solid #8e181f; color: #8e181f; padding: 5px 10px; font-size: 12px; display: inline-flex; align-items: center; cursor: pointer;">
                            <i data-feather="shopping-cart"></i>
                            <span>Tambahkan ke Keranjang</span>
                        </button>
                    </div>
                </div>
            </div>
        </section>
        <!-- Menu end -->

        <!-- Menu start -->
        <section class="makanan" id="toggle-food" style="background-color: #f8f9fa;">
            <h2 style="font-size: 4rem; margin-left: 4rem; font-family: 'Playfair Display'; color: #8e181f;">Makanan</h2>
            <div class="row" style="display: flex; flex-wrap: wrap; margin-top: 3rem; justify-content: center;">
                <div class="menu-card" style="text-align: center; padding-bottom: 4rem;">
                    <img src="../img/makanan.jpeg" alt="Espresso" class="menu-card-img" style="border: 10px solid #ffffff; width: 15%;">
                    <h3 class="menu-card-title" style="margin: 1rem auto 0.5rem;"></h3>
                    <p class="menu-card-price" style="margin: 1rem auto 0.5rem;"></p>
                    <div class="addcart" style="margin-top: 10px;">
                        <button style="background-color: transparent; border: 1px solid #8e181f; color: #8e181f; padding: 5px 10px; font-size: 12px; display: inline-flex; align-items: center; cursor: pointer;">
                            <i data-feather="shopping-cart"></i>
                            <span>Tambahkan ke Keranjang</span>
                        </button>
                    </div>
                </div>
            </div>
        </section>
<!-- Menu end -->



        <!-- partial footbar -->
        @include('Pelanggan.layout.pelanggan-footbar')
        <!-- end partial footbar -->
 
    <script>
        feather.replace();
    </script>

</body>

</html>
