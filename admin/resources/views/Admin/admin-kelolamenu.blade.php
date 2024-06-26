<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>KOPI HITADO | Kelola Menu</title>
    
    <!-- Style partial -->
    @include('Admin.asset.style')
    <!-- end Style Partial -->

</head>
<body>

    <!-- partial navbar -->
    @include('Admin.layout.admin-navbar')
    <!-- end partial navbar -->

    <!-- partial sidebar -->
    @include('Admin.layout.admin-sidebar')
    <!-- end sidebar partial -->

    <div class="left" style="padding-left: 20px; margin-left: 220px;">
        <div style="font-family: Arial, sans-serif; margin: 0; padding: 0;">
            <div style="max-width: 900px; margin: 20px auto; padding: 20px; background-color: #EFE9D3; border-radius: 5px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
                <h1 style="text-align: center; font-family: 'Playfair Display'; margin-bottom: 40px;">Kelola Menu</h1>
                <div style="margin-bottom: 20px;">
                    <div class="search" style="display:flex; align-items: center; margin-left:25%">
                        <div class="search-box" style="align-items: center; border: 1px solid #cfbcae; border-radius: 5px; padding: 5px; width: 400px; height: 35px;">
                            <input type="text" placeholder="Search Product" style="border: none; outline: none; background-color: #EFE9D3;">
                        </div>
                        <div class="icon" style="color: #ffffff; background-color: #000000; border-radius: 5px; cursor: pointer; margin-left: 5px; height: 27px; width: 27px; display: flex; justify-content: center; align-items: center;">
                            <i class="fas fa-search"></i>
                        </div>
                    </div>
                    <button onclick="openAdd()" style="background-color: #8B4233; color: white; float:right; margin-bottom:10px; padding: 5px 10px; font-size:10px; border: none; border-radius: 5px; cursor: pointer; margin-top: 68px; margin-right:30px;  display:flex;">Tambah Menu</button>
                    <h2 style="margin-top: 60px; font-family: 'Playfair Display';">Makanan</h2>
                    <div id="addModal" class="modal" style="display: none; position: fixed; margin-left:150px; z-index: 1; left: 0; top: 0; width: 100%; height: 100%; overflow: auto; background-color: rgba(0, 0, 0, 0.4);">
                        <div class="modal-content" style="background-color: #fefefe; margin: 15% auto; padding: 20px; border: 1px solid #888; width: 60%;">
                            <!-- Modal content -->
                            <span onclick="closeAdd()" style="color: #aaa; float: right; font-size: 28px; font-weight: bold;">&times;</span>
                            <h2 style="margin-bottom: 20px;">Tambah Menu</h2>
                            <form action="">
                                <label>Pilihan Kategori:</label><br>
                                <select name="komposisi" id="komposisi" style="border: 1px solid #ccc; border-radius: 5px; padding:10px; width: 100%;">
                                    <option value="food">Makanan</option>
                                    <option value="drink">Minuman</option>
                                </select><br>
                                <label for="menu_image">Gambar:</label><br>
                                <input type="file" id="menu_image" name="menu_image" style="padding: 10px; width: 100%; border-radius: 5px; border: 1px solid #ccc;"><br>
                                <label for="menu_name">ID Menu:</label><br>
                                <input type="text" id="menu_id" name="menu_id" placeholder="Masukkan ID Menu" style="padding: 10px; width: 100%; border-radius: 5px; border: 1px solid #ccc; margin-bottom: 10px;"><br>
                                <label for="menu_name">Nama Menu:</label><br>
                                <input type="text" id="menu_name" name="menu_name" placeholder="Masukkan Nama Menu" style="padding: 10px; width: 100%; border-radius: 5px; border: 1px solid #ccc; margin-bottom: 10px;"><br>
                                <label for="menu_price">Harga:</label><br>
                                <input type="number" id="menu_price" name="menu_price" placeholder="Masukkan Harga Menu"  style="padding: 10px; width: 100%; border-radius: 5px; border: 1px solid #ccc; margin-bottom: 10px;"><br>
                                <label for="menu_price">Komposisi:</label><br>
                                <!-- Input komposisi disini -->
                                <div class="komposisi" id="" name="komposisi" style="display:flex; padding: 10px; border-radius: 5px; width: 50%; border: 1px solid #ccc; margin-bottom: 10px;" >
                                    <input type="text" placeholder="ID Bahan" style="border: 0;  margin-right:5px; width: 85%;">
                                    <input type="number" placeholder="Quantitiy" style="border: 0; margin-right:5px; width: 85%;">
                                    <select name="quantity" id="quantity" style="float: right; border: 0;">
                                    <option value="gram">gr</option>
                                    <option value="mililiter">ml</option>
                                    </select> <br>
                                </div>
                                <div class="komposisi" id="" name="komposisi" style="display:flex; padding: 10px; border-radius: 5px; width: 50%; border: 1px solid #ccc; margin-bottom: 10px;" >
                                    <input type="text" placeholder="ID Bahan" style="border: 0;  margin-right:5px; width: 85%;">
                                    <input type="number" placeholder="Quantitiy" style="border: 0; margin-right:5px; width: 85%;">
                                    <select name="quantity" id="quantity" style="float: right; border: 0;">
                                    <option value="gram">gr</option>
                                    <option value="mililiter">ml</option>
                                    </select> <br>
                                </div>
                                <div class="komposisi" id="" name="komposisi" style="display:flex; padding: 10px; border-radius: 5px; width: 50%; border: 1px solid #ccc; margin-bottom: 10px;" >
                                    <input type="text" placeholder="ID Bahan" style="border: 0;  margin-right:5px; width: 85%;">
                                    <input type="number" placeholder="Quantitiy" style="border: 0; margin-right:5px; width: 85%;">
                                    <select name="quantity" id="quantity" style="float: right; border: 0;">
                                    <option value="gram">gr</option>
                                    <option value="mililiter">ml</option>
                                    </select> <br>
                                </div>
                                <div class="komposisi" id="" name="komposisi" style="display:flex; padding: 10px; border-radius: 5px; width: 50%; border: 1px solid #ccc; margin-bottom: 10px;" >
                                    <input type="text" placeholder="ID Bahan" style="border: 0;  margin-right:5px; width: 85%;">
                                    <input type="number" placeholder="Quantitiy" style="border: 0; margin-right:5px; width: 85%;">
                                    <select name="quantity" id="quantity" style="float: right; border: 0;">
                                    <option value="gram">gr</option>
                                    <option value="mililiter">ml</option>
                                    </select> <br>
                                </div>
                            <button type="submit" style="background-color: #8B4233; color: white; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer;">Simpan</button>
                            </form>
                        </div>
                    </div>
                </div>
                <table style="width: 100%; border-collapse: collapse; margin-top: 20px; background-color: #ffffff; border-radius:15px;">
                    <tr>
                        <th style="padding: 10px; border-bottom: 1px solid #ddd; background-color: #ffffff; border-radius: 15px 0px 0px 0px;">ID</th>
                        <th style="padding: 10px; border-bottom: 1px solid #ddd; background-color: #ffffff;">Nama Menu</th>
                        <th style="padding: 10px; border-bottom: 1px solid #ddd; background-color: #ffffff;">Harga</th>
                        <th style="padding: 10px; border-bottom: 1px solid #ddd; background-color: #ffffff; border-radius: 0px 15px 0px 0px;">Aksi</th>
                    </tr>

                    <tr>
                        <td style="padding: 10px; border-bottom: 1px solid #ddd;">NG01</td>
                        <td style="padding: 10px; border-bottom: 1px solid #ddd;">Nasi Goreng</td>
                        <td style="padding: 10px; border-bottom: 1px solid #ddd;">Rp 25.000</td>
                        <td style="padding: 10px; border-bottom: 1px solid #ddd;">
                            <button onclick="openEdit()" style="background-color: #8B4233; color: white; padding: 5px 10px; font-size:10px; border: none; border-radius: 5px; cursor: pointer;">Edit</button>
                            <button style="background-color: #8E181F; color: white; padding: 5px 10px; font-size:10px; border: none; border-radius: 3px; cursor: pointer;">Hapus</button>
                        </td>
                    </tr>

                    <tr>
                        <td style="padding: 10px; border-bottom: 1px solid #ddd;">KS001</td>
                        <td style="padding: 10px; border-bottom: 1px solid #ddd;">Kopi Susu</td>
                        <td style="padding: 10px; border-bottom: 1px solid #ddd;">Rp 15.000</td>
                        <td style="padding: 10px; border-bottom: 1px solid #ddd;">
                            <button onclick="openEdit()" style="background-color: #8B4233; color: white; padding: 5px 10px; font-size:10px; border: none; border-radius: 5px; cursor: pointer;">Edit</button>
                            <button style="background-color: #8E181F; color: white; padding: 5px 10px; font-size:10px; border: none; border-radius: 3px; cursor: pointer;">Hapus</button>
                        </td>
                    </tr>
                </table>
                
                <!-- Table for Minuman -->
                <h2 style="margin-top: 50px; font-family: 'Playfair Display';">Minuman</h2>
                <table style="width: 100%; border-collapse: collapse; margin-top: 20px; background-color: #ffffff; border-radius:15px;">
                    <tr>
                        <th style="padding: 10px; border-bottom: 1px solid #ddd; background-color: #ffffff; border-radius: 15px 0px 0px 0px;">ID</th>
                        <th style="padding: 10px; border-bottom: 1px solid #ddd; background-color: #ffffff;">Nama Menu</th>
                        <th style="padding: 10px; border-bottom: 1px solid #ddd; background-color: #ffffff;">Harga</th>
                        <th style="padding: 10px; border-bottom: 1px solid #ddd; background-color: #ffffff; border-radius: 0px 15px 0px 0px;">Aksi</th>
                    </tr>

                    <!-- Sample data for Minuman -->
                    <tr>
                        <td style="padding: 10px; border-bottom: 1px solid #ddd;">MN01</td>
                        <td style="padding: 10px; border-bottom: 1px solid #ddd;">Es Teh</td>
                        <td style="padding: 10px; border-bottom: 1px solid #ddd;">Rp 5.000</td>
                        <td style="padding: 10px; border-bottom: 1px solid #ddd;">
                            <button onclick="openEdit()" style="background-color: #8B4233; color: white; padding: 5px 10px; font-size:10px; border: none; border-radius: 5px; cursor: pointer; ">Edit</button>
                            <button style="background-color: #8E181F; color: white; padding: 5px 10px; font-size:10px; border: none; border-radius: 3px; cursor: pointer;">Hapus</button>
                        </td>
                    </tr>

                    <tr>
                        <td style="padding: 10px; border-bottom: 1px solid #ddd;">MN01</td>
                        <td style="padding: 10px; border-bottom: 1px solid #ddd;">Es Teh</td>
                        <td style="padding: 10px; border-bottom: 1px solid #ddd;">Rp 5.000</td>
                        <td style="padding: 10px; border-bottom: 1px solid #ddd;">
                            <button onclick="openEdit()" style="background-color: #8B4233; color: white; padding: 5px 10px; font-size:10px; border: none; border-radius: 5px; cursor: pointer; ">Edit</button>
                            <button style="background-color: #8E181F; color: white; padding: 5px 10px; font-size:10px; border: none; border-radius: 3px; cursor: pointer;">Hapus</button>
                        </td>
                    </tr>

                    <tr>
                        <td style="padding: 10px; border-bottom: 1px solid #ddd;">MN01</td>
                        <td style="padding: 10px; border-bottom: 1px solid #ddd;">Es Teh</td>
                        <td style="padding: 10px; border-bottom: 1px solid #ddd;">Rp 5.000</td>
                        <td style="padding: 10px; border-bottom: 1px solid #ddd;">
                            <button onclick="openEdit()" style="background-color: #8B4233; color: white; padding: 5px 10px; font-size:10px; border: none; border-radius: 5px; cursor: pointer; ">Edit</button>
                            <button style="background-color: #8E181F; color: white; padding: 5px 10px; font-size:10px; border: none; border-radius: 3px; cursor: pointer;">Hapus</button>
                        </td>
                    </tr>

                    <tr>
                        <td style="padding: 10px; border-bottom: 1px solid #ddd;">MN01</td>
                        <td style="padding: 10px; border-bottom: 1px solid #ddd;">Es Teh</td>
                        <td style="padding: 10px; border-bottom: 1px solid #ddd;">Rp 5.000</td>
                        <td style="padding: 10px; border-bottom: 1px solid #ddd;">
                            <button onclick="openEdit()" style="background-color: #8B4233; color: white; padding: 5px 10px; font-size:10px; border: none; border-radius: 5px; cursor: pointer; ">Edit</button>
                            <button style="background-color: #8E181F; color: white; padding: 5px 10px; font-size:10px; border: none; border-radius: 3px; cursor: pointer;">Hapus</button>
                        </td>
                    </tr>

                    <tr>
                        <td style="padding: 10px; border-bottom: 1px solid #ddd;">MN01</td>
                        <td style="padding: 10px; border-bottom: 1px solid #ddd;">Es Teh</td>
                        <td style="padding: 10px; border-bottom: 1px solid #ddd;">Rp 5.000</td>
                        <td style="padding: 10px; border-bottom: 1px solid #ddd;">
                            <button onclick="openEdit()" style="background-color: #8B4233; color: white; padding: 5px 10px; font-size:10px; border: none; border-radius: 5px; cursor: pointer; ">Edit</button>
                            <button style="background-color: #8E181F; color: white; padding: 5px 10px; font-size:10px; border: none; border-radius: 3px; cursor: pointer;">Hapus</button>
                        </td>
                    </tr>

                    <tr>
                        <td style="padding: 10px; border-bottom: 1px solid #ddd;">MN02</td>
                        <td style="padding: 10px; border-bottom: 1px solid #ddd;">Jus Alpukat</td>
                        <td style="padding: 10px; border-bottom: 1px solid #ddd;">Rp 10.000</td>
                        <td style="padding: 10px; border-bottom: 1px solid #ddd;">
                            <button onclick="openEdit()" style="background-color: #8B4233; color: white; padding: 5px 10px; font-size:10px; border: none; border-radius: 5px; cursor: pointer;">Edit</button>
                            <button style="background-color: #8E181F; color: white; padding: 5px 10px; font-size:10px; border: none; border-radius: 3px; cursor: pointer;">Hapus</button>
                        </td>
                    </tr>
                </table>
                
                <!-- Modal Edit -->
                <div id="editModal" class="modal" style="display: none; position: fixed; margin-left:150px; z-index: 1; left: 0; top: 0; width: 100%; height: 100%; overflow: auto; background-color: rgba(0, 0, 0, 0.4);">
                    <div class="modal-content" style="background-color: #fefefe; margin: 15% auto; padding: 20px; border: 1px solid #888; width: 60%;">
                        <!-- Modal content -->
                        <span onclick="closeEdit()" style="color: #aaa; float: right; font-size: 28px; font-weight: bold;">&times;</span>
                        <h2 style="margin-bottom: 20px;">Edit Menu</h2>
                        <form action="">
                        <label>Kategori:</label><br>
                        <input type="text" id="menu_id" name="menu_id" style="padding: 10px; width: 100%; border-radius: 5px; border: 1px solid #ccc; background-color:#ccc; margin-bottom: 10px;"><br>
                        <label for="menu_image">Gambar:</label><br>
                        <input type="file" id="menu_image" name="menu_image" style="padding: 10px; width: 100%; border-radius: 5px; border: 1px solid #ccc; margin-bottom: 10px;"><br>
                        <label for="menu_name">ID Menu:</label><br>
                        <input type="text" id="menu_id" name="menu_id" style="padding: 10px; width: 100%; border-radius: 5px; border: 1px solid #ccc; background-color:#ccc; margin-bottom: 10px;"><br>
                        <label for="menu_name">Nama Menu:</label><br>
                        <input type="text" id="menu_name" name="menu_name" style="padding: 10px; width: 100%; border-radius: 5px; border: 1px solid #ccc; margin-bottom: 10px;"><br>
                        <label for="menu_price">Harga:</label><br>
                        <input type="text" id="menu_price" name="menu_price" style="padding: 10px; width: 100%; border-radius: 5px; border: 1px solid #ccc; margin-bottom: 10px;"><br>
                        <label for="menu_price">Komposisi:</label><br>
                        <!-- Input komposisi disini -->
                            <div class="komposisi" id="" name="komposisi" style="display:flex; padding: 10px; border-radius: 5px; width: 50%; border: 1px solid #ccc; margin-bottom: 10px;" >
                                <input type="text" placeholder="ID Bahan" style="border: 0;  margin-right:5px; width: 85%;">
                                <input type="text" placeholder="Quantitiy" style="border: 0; margin-right:5px; width: 85%;">
                                <select name="quantity" id="quantity" style="float: right; border: 0;">
                                <option value="gram">gr</option>
                                <option value="mililiter">ml</option>
                                </select> <br>
                            </div>
                            <div class="komposisi" id="" name="komposisi" style="display:flex; padding: 10px; border-radius: 5px; width: 50%; border: 1px solid #ccc; margin-bottom: 10px;" >
                                <input type="text" placeholder="ID Bahan" style="border: 0;  margin-right:5px; width: 85%;">
                                <input type="text" placeholder="Quantitiy" style="border: 0; margin-right:5px; width: 85%;">
                                <select name="quantity" id="quantity" style="float: right; border: 0;">
                                <option value="gram">gr</option>
                                <option value="mililiter">ml</option>
                                </select> <br>
                            </div>
                            <div class="komposisi" id="" name="komposisi" style="display:flex; padding: 10px; border-radius: 5px; width: 50%; border: 1px solid #ccc; margin-bottom: 10px;" >
                                <input type="text" placeholder="ID Bahan" style="border: 0;  margin-right:5px; width: 85%;">
                                <input type="text" placeholder="Quantitiy" style="border: 0; margin-right:5px; width: 85%;">
                                <select name="quantity" id="quantity" style="float: right; border: 0;">
                                <option value="gram">gr</option>
                                <option value="mililiter">ml</option>
                                </select> <br>
                            </div>
                            <div class="komposisi" id="" name="komposisi" style="display:flex; padding: 10px; border-radius: 5px; width: 50%; border: 1px solid #ccc; margin-bottom: 10px;" >
                                <input type="text" placeholder="ID Bahan" style="border: 0;  margin-right:5px; width: 85%;">
                                <input type="text" placeholder="Quantitiy" style="border: 0; margin-right:5px; width: 85%;">
                                <select name="quantity" id="quantity" style="float: right; border: 0;">
                                <option value="gram">gr</option>
                                <option value="mililiter">ml</option>
                                </select> <br>
                            </div>
                            <div class="komposisi" id="" name="komposisi" style="display:flex; padding: 10px; border-radius: 5px; width: 50%; border: 1px solid #ccc; margin-bottom: 10px;" >
                                <input type="text" placeholder="ID Bahan" style="border: 0;  margin-right:5px; width: 85%;">
                                <input type="text" placeholder="Quantitiy" style="border: 0; margin-right:5px; width: 85%;">
                                <select name="quantity" id="quantity" style="float: right; border: 0;">
                                <option value="gram">gr</option>
                                <option value="mililiter">ml</option>
                                </select> <br>
                            </div>
                            <button type="submit" style="background-color: #8B4233; color: white; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer;">Simpan</button>
                        </form>
                    </div>
                </div>
                
            </div>
        </div>
    </div>

    <!-- partial script -->
    @include('Admin.asset.script')
    <!-- end partial script -->

</body>

</html>
