<div class="jumbotron text-center">
    <h1 class="display-4">Welcome To Silfa Online Food!</h1>
    <p class="lead">Temukan Makanan Terbaik Dengan Harga Terjangkau</p>
    <a class="btn btn-primary btn-lg" href="#" role="button">Belanja Sekarang</a>
</div>

<!-- Featured Products Section -->
<div class="container mt-5">
    <h2 class="text-center">Makanan yang direkomendasikan</h2>
    <div class="row">
        <?php
        // Dummy products array
        $products = [
            ["name" => "Ayam Goreng", "price" => "Rp15.000", "image" => "https://img-global.cpcdn.com/recipes/ff70ae9c035a4aba/400x400cq70/photo.jpg"],
            ["name" => "Ayam Goreng Bawang Putih", "price" => "Rp20.000", "image" => "https://images.tokopedia.net/img/cache/500-square/VqbcmM/2023/6/21/857e1eb1-9557-4c16-bf89-059c8b943708.jpg"],
            ["name" => "Ayam Geprek", "price" => "Rp15.000", "image" => "https://www.masakapahariini.com/wp-content/uploads/2023/03/shutterstock_1949306203-500x300.jpg"],
            ["name" => "Ayam Bakar", "price" => "Rp15.000", "image" => "https://images.tokopedia.net/img/JFrBQq/2023/11/16/2c781909-607e-413f-aab2-8b8715487416.jpg"]
        ];

        // Display products in a grid
        foreach ($products as $product) {
            echo '
            <div class="col-md-3">
                <div class="card mb-4 shadow-sm">
                    <img src="' . $product['image'] . '" class="card-img-top" alt="' . $product['name'] . '">
                    <div class="card-body">
                        <h5 class="card-title">' . $product['name'] . '</h5>
                        <p class="card-text">' . $product['price'] . '</p>
                        <a href="#" class="btn btn-primary">Tambahkan ke Keranjang</a>
                    </div>
                </div>
            </div>';
        }
        ?>
    </div>
</div>

<!-- Bootstrap and jQuery JavaScript -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>