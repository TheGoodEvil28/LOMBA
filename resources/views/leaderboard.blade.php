<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ReWard Leaderboard</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.7.2/font/bootstrap-icons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/leaderboard.css">
    
</head>
<body>

    @include('layouts.navbar')

<main>
    <h1>ReWard Leaderboard</h1>

    <div class="leaderboard-tabs">
        <button class="active" onclick="showLeaderboard('buyer')">Buyer</button>
        <button onclick="showLeaderboard('seller')">Seller</button>
        <button onclick="showLeaderboard('brand')">Brand</button>
    </div>

    <!-- Buyer Leaderboard -->
    <table id="buyer-leaderboard" class="leaderboard-table">
        <thead>
            <tr>
                <th>Place</th>
                <th>User</th>
                <th>ReWard Point</th>
                <th>Contribution</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>🥇 1</td>
                <td><img src="images/Icon_Gambar/Semua_Icon/profile.png" alt="Profile" style="width: 20px; height: 20px; margin-right: 5px;"> Khan</td>
                <td><img src="images/Icon_Gambar/Semua_Icon/poin.png" alt="Points" style="width: 20px; height: 20px; margin-right: 5px;"> 1300</td>
                <td><img src="images/Icon_Gambar/Leaderboard/donate%20clothes.png" alt="Donation" style="width: 20px; height: 20px; margin-right: 5px;"> 13000 kg CO2e</td>
            </tr>
            <tr>
                <td>🥈 2</td>
                <td><img src="images/Icon_Gambar/Semua_Icon/profile.png" alt="Profile" style="width: 20px; height: 20px; margin-right: 5px;"> Lien</td>
                <td><img src="images/Icon_Gambar/Semua_Icon/poin.png" alt="Points" style="width: 20px; height: 20px; margin-right: 5px;"> 1200</td>
                <td><img src="images/Icon_Gambar/Leaderboard/donate%20clothes.png" alt="Donation" style="width: 20px; height: 20px; margin-right: 5px;"> 12000 kg CO2e</td>
            </tr>
            <tr>
                <td>🥉 3</td>
                <td><img src="images/Icon_Gambar/Semua_Icon/profile.png" alt="Profile" style="width: 20px; height: 20px; margin-right: 5px;"> Karu</td>
                <td><img src="images/Icon_Gambar/Semua_Icon/poin.png" alt="Points" style="width: 20px; height: 20px; margin-right: 5px;"> 1100</td>
                <td><img src="images/Icon_Gambar/Leaderboard/donate%20clothes.png" alt="Donation" style="width: 20px; height: 20px; margin-right: 5px;"> 11000 kg CO2e</td>
            </tr>
            <tr>
                <td>4</td>
                <td><img src="images/Icon_Gambar/Semua_Icon/profile.png" alt="Profile" style="width: 20px; height: 20px; margin-right: 5px;"> Kish</td>
                <td><img src="images/Icon_Gambar/Semua_Icon/poin.png" alt="Points" style="width: 20px; height: 20px; margin-right: 5px;"> 1000</td>
                <td><img src="images/Icon_Gambar/Leaderboard/donate%20clothes.png" alt="Donation" style="width: 20px; height: 20px; margin-right: 5px;"> 10000 kg CO2e</td>
            </tr>
            <tr>
                <td>5</td>
                <td><img src="images/Icon_Gambar/Semua_Icon/profile.png" alt="Profile" style="width: 20px; height: 20px; margin-right: 5px;"> Liam</td>
                <td><img src="images/Icon_Gambar/Semua_Icon/poin.png" alt="Points" style="width: 20px; height: 20px; margin-right: 5px;"> 900</td>
                <td><img src="images/Icon_Gambar/Leaderboard/donate%20clothes.png" alt="Donation" style="width: 20px; height: 20px; margin-right: 5px;"> 9000 kg CO2e</td>
            </tr>
            <tr>
                <td>6</td>
                <td><img src="images/Icon_Gambar/Semua_Icon/profile.png" alt="Profile" style="width: 20px; height: 20px; margin-right: 5px;"> Omar</td>
                <td><img src="images/Icon_Gambar/Semua_Icon/poin.png" alt="Points" style="width: 20px; height: 20px; margin-right: 5px;"> 800</td>
                <td><img src="images/Icon_Gambar/Leaderboard/donate%20clothes.png" alt="Donation" style="width: 20px; height: 20px; margin-right: 5px;"> 8000 kg CO2e</td>
            </tr>
            <tr>
                <td>7</td>
                <td><img src="images/Icon_Gambar/Semua_Icon/profile.png" alt="Profile" style="width: 20px; height: 20px; margin-right: 5px;"> Hilda</td>
                <td><img src="images/Icon_Gambar/Semua_Icon/poin.png" alt="Points" style="width: 20px; height: 20px; margin-right: 5px;"> 700</td>
                <td><img src="images/Icon_Gambar/Leaderboard/donate%20clothes.png" alt="Donation" style="width: 20px; height: 20px; margin-right: 5px;"> 7000 kg CO2e</td>
            </tr>
            <tr>
                <td>8</td>
                <td><img src="images/Icon_Gambar/Semua_Icon/profile.png" alt="Profile" style="width: 20px; height: 20px; margin-right: 5px;"> Toti</td>
                <td><img src="images/Icon_Gambar/Semua_Icon/poin.png" alt="Points" style="width: 20px; height: 20px; margin-right: 5px;"> 600</td>
                <td><img src="images/Icon_Gambar/Leaderboard/donate%20clothes.png" alt="Donation" style="width: 20px; height: 20px; margin-right: 5px;"> 6000 kg CO2e</td>
            </tr>
            <tr>
                <td>9</td>
                <td><img src="images/Icon_Gambar/Semua_Icon/profile.png" alt="Profile" style="width: 20px; height: 20px; margin-right: 5px;"> Mark</td>
                <td><img src="images/Icon_Gambar/Semua_Icon/poin.png" alt="Points" style="width: 20px; height: 20px; margin-right: 5px;"> 500</td>
                <td><img src="images/Icon_Gambar/Leaderboard/donate%20clothes.png" alt="Donation" style="width: 20px; height: 20px; margin-right: 5px;"> 5000 kg CO2e</td>
            </tr>
            <tr>
                <td>10</td>
                <td><img src="images/Icon_Gambar/Semua_Icon/profile.png" alt="Profile" style="width: 20px; height: 20px; margin-right: 5px;"> Jhon</td>
                <td><img src="images/Icon_Gambar/Semua_Icon/poin.png" alt="Points" style="width: 20px; height: 20px; margin-right: 5px;"> 400</td>
                <td><img src="images/Icon_Gambar/Leaderboard/donate%20clothes.png" alt="Donation" style="width: 20px; height: 20px; margin-right: 5px;"> 4000 kg CO2e</td>
            </tr>
        </tbody>
    </table>
<!-- Seller Leaderboard -->
<table id="seller-leaderboard" class="leaderboard-table hidden">
    <thead>
        <tr>
            <th>Place</th>
            <th>User</th>
            <th>Contribution</th>
        </tr>
    </thead>
    <tbody>
        <!-- 10 data dummy seller -->
        <tr>
            <td>🥇 1</td>
            <td><img src="images/Icon_Gambar/Semua_Icon/profile.png" alt="Profile" style="width: 20px; height: 20px; margin-right: 5px;"> Hanun</td>
            <td><img src="images/Icon_Gambar/Leaderboard/donate%20clothes.png" alt="Donation" style="width: 20px; height: 20px; margin-right: 5px;"> 13000 kg CO2e</td>
        </tr>
        <tr>
            <td>🥈 2</td>
            <td><img src="images/Icon_Gambar/Semua_Icon/profile.png" alt="Profile" style="width: 20px; height: 20px; margin-right: 5px;"> Mily</td>
            <td><img src="images/Icon_Gambar/Leaderboard/donate%20clothes.png" alt="Donation" style="width: 20px; height: 20px; margin-right: 5px;"> 12000 kg CO2e</td>
        </tr>
        <tr>
            <td>🥉 3</td>
            <td><img src="images/Icon_Gambar/Semua_Icon/profile.png" alt="Profile" style="width: 20px; height: 20px; margin-right: 5px;"> Sarah</td>
            <td><img src="images/Icon_Gambar/Leaderboard/donate%20clothes.png" alt="Donation" style="width: 20px; height: 20px; margin-right: 5px;"> 11000 kg CO2e</td>
        </tr>
        <tr>
            <td>4</td>
            <td><img src="images/Icon_Gambar/Semua_Icon/profile.png" alt="Profile" style="width: 20px; height: 20px; margin-right: 5px;"> Mark</td>
            <td><img src="images/Icon_Gambar/Leaderboard/donate%20clothes.png" alt="Donation" style="width: 20px; height: 20px; margin-right: 5px;"> 10000 kg CO2e</td>
        </tr>
        <tr>
            <td>5</td>
            <td><img src="images/Icon_Gambar/Semua_Icon/profile.png" alt="Profile" style="width: 20px; height: 20px; margin-right: 5px;"> Dwain</td>
            <td><img src="images/Icon_Gambar/Leaderboard/donate%20clothes.png" alt="Donation" style="width: 20px; height: 20px; margin-right: 5px;"> 9000 kg CO2e</td>
        </tr>
        <tr>
            <td>6</td>
            <td><img src="images/Icon_Gambar/Semua_Icon/profile.png" alt="Profile" style="width: 20px; height: 20px; margin-right: 5px;"> Mein</td>
            <td><img src="images/Icon_Gambar/Leaderboard/donate%20clothes.png" alt="Donation" style="width: 20px; height: 20px; margin-right: 5px;"> 8000 kg CO2e</td>
        </tr>
        <tr>
            <td>7</td>
            <td><img src="images/Icon_Gambar/Semua_Icon/profile.png" alt="Profile" style="width: 20px; height: 20px; margin-right: 5px;"> Nadya</td>
            <td><img src="images/Icon_Gambar/Leaderboard/donate%20clothes.png" alt="Donation" style="width: 20px; height: 20px; margin-right: 5px;"> 7000 kg CO2e</td>
        </tr>
        <tr>
            <td>8</td>
            <td><img src="images/Icon_Gambar/Semua_Icon/profile.png" alt="Profile" style="width: 20px; height: 20px; margin-right: 5px;"> Jhon</td>
            <td><img src="images/Icon_Gambar/Leaderboard/donate%20clothes.png" alt="Donation" style="width: 20px; height: 20px; margin-right: 5px;"> 6000 kg CO2e</td>
        </tr>
        <tr>
            <td>9</td>
            <td><img src="images/Icon_Gambar/Semua_Icon/profile.png" alt="Profile" style="width: 20px; height: 20px; margin-right: 5px;"> Kim</td>
            <td><img src="images/Icon_Gambar/Leaderboard/donate%20clothes.png" alt="Donation" style="width: 20px; height: 20px; margin-right: 5px;"> 5000 kg CO2e</td>
        </tr>
        <tr>
            <td>10</td>
            <td><img src="images/Icon_Gambar/Semua_Icon/profile.png" alt="Profile" style="width: 20px; height: 20px; margin-right: 5px;"> Jilk</td>
            <td><img src="images/Icon_Gambar/Leaderboard/donate%20clothes.png" alt="Donation" style="width: 20px; height: 20px; margin-right: 5px;"> 4000 kg CO2e</td>
        </tr>
    </tbody>
</table>

    <!-- Brand Leaderboard -->
    <table id="brand-leaderboard" class="leaderboard-table hidden">
        <thead>
            <tr>
                <th>Place</th>
                <th>Brand</th>
                <th>Items Sold</th>
                <th>Contribution</th>
            </tr>
        </thead>
        <tbody>
            <!-- 10 data dummy brand -->
            <tr>
                <td>🥇 1</td>
                <td><img src="images/Icon_Gambar/Semua_Icon/profile.png" alt="Brand" style="width: 20px; height: 20px; margin-right: 5px;"> H&M</td>
                <td><img src="images\Icon_Gambar\Leaderboard\shopping-bags.png" alt="Items Sold" style="width: 20px; height: 20px; margin-right: 5px;"> 110 pcs</td>
                <td><img src="images/Icon_Gambar/Leaderboard/donate%20clothes.png" alt="Contribution" style="width: 20px; height: 20px; margin-right: 5px;"> 13000 kg CO2e</td>
            </tr>
            <tr>
                <td>🥈 2</td>
                <td><img src="images/Icon_Gambar/Semua_Icon/profile.png" alt="Brand" style="width: 20px; height: 20px; margin-right: 5px;"> Uniqlo</td>
                <td><img src="images\Icon_Gambar\Leaderboard\shopping-bags.png" alt="Items Sold" style="width: 20px; height: 20px; margin-right: 5px;"> 100 pcs</td>
                <td><img src="images/Icon_Gambar/Leaderboard/donate%20clothes.png" alt="Contribution" style="width: 20px; height: 20px; margin-right: 5px;"> 12000 kg CO2e</td>
            </tr>
            <tr>
                <td>🥉 3</td>
                <td><img src="images/Icon_Gambar/Semua_Icon/profile.png" alt="Brand" style="width: 20px; height: 20px; margin-right: 5px;"> Nike</td>
                <td><img src="images\Icon_Gambar\Leaderboard\shopping-bags.png" alt="Items Sold" style="width: 20px; height: 20px; margin-right: 5px;"> 90 pcs</td>
                <td><img src="images/Icon_Gambar/Leaderboard/donate%20clothes.png" alt="Contribution" style="width: 20px; height: 20px; margin-right: 5px;"> 11000 kg CO2e</td>
            </tr>
            <tr>
                <td>4</td>
                <td><img src="images/Icon_Gambar/Semua_Icon/profile.png" alt="Brand" style="width: 20px; height: 20px; margin-right: 5px;"> Gucci</td>
                <td><img src="images\Icon_Gambar\Leaderboard\shopping-bags.png" alt="Items Sold" style="width: 20px; height: 20px; margin-right: 5px;"> 80 pcs</td>
                <td><img src="images/Icon_Gambar/Leaderboard/donate%20clothes.png" alt="Contribution" style="width: 20px; height: 20px; margin-right: 5px;"> 10000 kg CO2e</td>
            </tr>
            <tr>
                <td>5</td>
                <td><img src="images/Icon_Gambar/Semua_Icon/profile.png" alt="Brand" style="width: 20px; height: 20px; margin-right: 5px;"> Dior</td>
                <td><img src="images\Icon_Gambar\Leaderboard\shopping-bags.png" alt="Items Sold" style="width: 20px; height: 20px; margin-right: 5px;"> 70 pcs</td>
                <td><img src="images/Icon_Gambar/Leaderboard/donate%20clothes.png" alt="Contribution" style="width: 20px; height: 20px; margin-right: 5px;"> 9000 kg CO2e</td>
            </tr>
            <tr>
                <td>6</td>
                <td><img src="images/Icon_Gambar/Semua_Icon/profile.png" alt="Brand" style="width: 20px; height: 20px; margin-right: 5px;"> Hermes</td>
                <td><img src="images\Icon_Gambar\Leaderboard\shopping-bags.png" alt="Items Sold" style="width: 20px; height: 20px; margin-right: 5px;"> 60 pcs</td>
                <td><img src="images/Icon_Gambar/Leaderboard/donate%20clothes.png" alt="Contribution" style="width: 20px; height: 20px; margin-right: 5px;"> 8000 kg CO2e</td>
            </tr>
            <tr>
                <td>7</td>
                <td><img src="images/Icon_Gambar/Semua_Icon/profile.png" alt="Brand" style="width: 20px; height: 20px; margin-right: 5px;"> Chanel</td>
                <td><img src="images\Icon_Gambar\Leaderboard\shopping-bags.png" alt="Items Sold" style="width: 20px; height: 20px; margin-right: 5px;"> 70 pcs</td>
                <td><img src="images/Icon_Gambar/Leaderboard/donate%20clothes.png" alt="Contribution" style="width: 20px; height: 20px; margin-right: 5px;"> 7000 kg CO2e</td>
            </tr>
            <tr>
                <td>8</td>
                <td><img src="images/Icon_Gambar/Semua_Icon/profile.png" alt="Brand" style="width: 20px; height: 20px; margin-right: 5px;"> Burberry</td>
                <td><img src="images\Icon_Gambar\Leaderboard\shopping-bags.png" alt="Items Sold" style="width: 20px; height: 20px; margin-right: 5px;"> 60 pcs</td>
                <td><img src="images/Icon_Gambar/Leaderboard/donate%20clothes.png" alt="Contribution" style="width: 20px; height: 20px; margin-right: 5px;"> 6000 kg CO2e</td>
            </tr>
            <tr>
                <td>9</td>
                <td><img src="images/Icon_Gambar/Semua_Icon/profile.png" alt="Brand" style="width: 20px; height: 20px; margin-right: 5px;"> Prada</td>
                <td><img src="images\Icon_Gambar\Leaderboard\shopping-bags.png" alt="Items Sold" style="width: 20px; height: 20px; margin-right: 5px;"> 70 pcs</td>
                <td><img src="images/Icon_Gambar/Leaderboard/donate%20clothes.png" alt="Contribution" style="width: 20px; height: 20px; margin-right: 5px;"> 5000 kg CO2e</td>
            </tr>
            <tr>
                <td>10</td>
                <td><img src="images/Icon_Gambar/Semua_Icon/profile.png" alt="Brand" style="width: 20px; height: 20px; margin-right: 5px;"> Ralph Lauren</td>
                <td><img src="images\Icon_Gambar\Leaderboard\shopping-bags.png" alt="Items Sold" style="width: 20px; height: 20px; margin-right: 5px;"> 60 pcs</td>
                <td><img src="images/Icon_Gambar/Leaderboard/donate%20clothes.png" alt="Contribution" style="width: 20px; height: 20px; margin-right: 5px;"> 4000 kg CO2e</td>
            </tr>
        </tbody>
    </table>
</main>

@include('layouts.footer')

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

<script>
    function showLeaderboard(type) {
        document.getElementById('buyer-leaderboard').classList.add('hidden');
        document.getElementById('seller-leaderboard').classList.add('hidden');
        document.getElementById('brand-leaderboard').classList.add('hidden');

        document.querySelectorAll('.leaderboard-tabs button').forEach(btn => btn.classList.remove('active'));

        if (type === 'buyer') {
            document.getElementById('buyer-leaderboard').classList.remove('hidden');
            document.querySelector('.leaderboard-tabs button:nth-child(1)').classList.add('active');
        } else if (type === 'seller') {
            document.getElementById('seller-leaderboard').classList.remove('hidden');
            document.querySelector('.leaderboard-tabs button:nth-child(2)').classList.add('active');
        } else {
            document.getElementById('brand-leaderboard').classList.remove('hidden');
            document.querySelector('.leaderboard-tabs button:nth-child(3)').classList.add('active');
        }
    }
</script>

</body>
</html>
