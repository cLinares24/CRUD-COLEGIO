<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <link rel="stylesheet" href="style.css">
    <style>
        #Cards{
    display: flex;
    justify-content: space-evenly;
    }
    #tablas{
    display: flex;
    justify-content: space-evenly;
    }
    

    </style> 
    <title>home</title>
</head>

<body>
    <div class="container-fluid ">

        <div class="row col-sm-12">

            <div class="col-sm-2 border border-dark listica">

                <div class="row col-sm-12 listica">
                    <div>
                        <div class=" px-1 py-3">
                            <img src="https://img.icons8.com/ios/512/c-plus-plus-logo.png" width="28" height="30">
                            <span class="h3 text-white">CodingLab</span>
                        </div>          
                        <ul class="list-group py-4">   
                            <?php
                            include_once("./db/ClassPoo.php");
                            $lista = new Lista();
                            $lista ->EnlistarArray(); 
                            ?>
                            </ul>
                            <br>
                            <a href="#" class="h3 text-white">Logout</a>
                        
                    </div>
                </div>

            </div>
            <div class="row col-sm-10 h-25 d-inline-block">

                <div class="col-sm-3 px-5 h-25 d-inline-block">
                    <h3 <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
</svg>>Dashboard</h3>
                </div>
                <div class="col-sm-6  py-3 h-25 d-inline-block">
                    <input class="form-control" list="datalistOptions" id="exampleDataList" placeholder="Search...">
                </div>
                <div class="col-sm-2 position-absolute top-0 end-0 h-25 d-inline-block py-2">
                    <a class="btn btn-light border border-info rounded-3 dropdown-toggle" role="button"
                        id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="https://cdn.icon-icons.com/icons2/1369/PNG/512/-person_90382.png" width="30" height="30" class="rounded-3"> Prem Shahi
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <li><a>Edit profile</a></li>
                        <li><a>My account</a></li>
                        <li><a>Log Out</li>
                    </ul>
                </div>
                <div class="row col-sm-12 carticas" id="Cards">
                    <div class="card col-sm-3" style="width: 15rem;">
                        <div class="card-body">
                            <p class="card-text">Total Order</p>
                            <h5 class="card-title">40,876</h5>
                            <a>Up from yesterday</a>
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-cart carticas" viewBox="0 0 16 16">
                                <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                            </svg>
                        </div>
                    </div>
                    <div class="card col-sm-3" style="width: 15rem;">
                        <div class="card-body">
                            <p class="card-text">Total Sales</p>
                            <h5 class="card-title">38,876</h5>
                            <a>Up from yesterday</a>
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-cart carticas" viewBox="0 0 16 16">
                                <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                            </svg>
                        </div>
                    </div>

                    <div class="card col-sm-3 p-2" style="width: 15rem;">
                        <div class="card-body">
                            <p class="card-text">Total Profit</p>
                            <h5 class="card-title">12,876</h5>
                            <a>Up from yesterday</a>
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-cart carticas" viewBox="0 0 16 16">
                                <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                            </svg>
                        </div>
                    </div>
                    <div class="card col-sm-3" style="width: 15rem;">
                        <div class="card-body">
                            <p class="card-text">Total return</p>
                            <h5 class="card-title">11,086</h5>
                            <a>Down from yesterday</a>
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-cart carticas" viewBox="0 0 16 16">
                                <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                            </svg>
                        </div>
                    </div>
                </div>

                <div class="row col-sm-12 p-4" id="tablas">
                    <div class="col-sm-7">
                        <table class="table table table-borderless">
                            <h2>Recent Sales</h2>
                            <thead>
                                <tr>
                                    <th scope="col">Date</th>
                                    <th scope="col">Customer</th>
                                    <th scope="col">Sales</th>
                                    <th scope="col">Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>02 Jan 2021</td>
                                    <td>Alex Doe</td>
                                    <td>Delivered</td>
                                    <td>$204.98</td>
                                </tr>
                                <tr>
                                    <td>02 Jan 2021</td>
                                    <td>David Mart</td>
                                    <td>Pending</td>
                                    <td>$24.55</td>
                                </tr>
                                <tr>
                                    <td>02 Jan 2021</td>
                                    <td>Roe Parter</td>
                                    <td>Returned</td>
                                    <td>$25.88</td>
                                </tr>
                                <tr>
                                    <td>02 Jan 2021</td>
                                    <td>Diana Penty</td>
                                    <td>Delivered</td>
                                    <td>$170.66</td>
                                </tr>
                                <tr>
                                    <td>02 Jan 2021</td>
                                    <td>Martin Paw</td>
                                    <td>Pending</td>
                                    <td>$56.56</td>
                                </tr>
                                <tr>
                                    <td>02 Jan 2021</td>
                                    <td>Doe Alex</td>
                                    <td>Returned</td>
                                    <td>$44.95</td>
                                </tr>
                                <tr>
                                    <td>02 Jan 2021</td>
                                    <td>Aiana Lexa</td>
                                    <td>Delivered</td>
                                    <td>$67.33</td>
                                </tr>
                                <tr>
                                    <td>02 Jan 2021</td>
                                    <td>Rexel Mags</td>
                                    <td>Pending</td>
                                    <td>$23.53</td>
                                </tr>
                                <tr>
                                    <td>02 Jan 2021</td>
                                    <td>Tiana Loths</td>
                                    <td>Delivered</td>
                                    <td>$46.52</td>
                                </tr>
                            </tbody>
                        </table>
                        <button type="button" class="btn btn-primary">See All</button>
                    </div>


                    <div class="col-sm-4">
                        <table class="table table table-borderless">
                            <h2>Top Selling Product</h2>
                            <thead>
                                <tr>
                                    <th scope="col"></th>
                                    <th scope="col"></th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><img src="https://www.latiendadegafas.com/wp-content/uploads/2020/11/Gafas-de-sol-adidas-0001-01L.png" width="30" height="30"></td>
                                    <td>Vuitton Sunglasses</td>
                                    <td>$1142</td>
                                </tr>
                                <tr>
                                    <td><img src="https://i.ebayimg.com/thumbs/images/g/EmEAAOSwus1jyO-k/s-l300.jpg" width="30" height="30"></td>
                                    <td>hourglass jeans</td>
                                    <td>$1567</td>
                                </tr>
                                <tr>
                                    <td><img src="https://sportline.com.co/media/catalog/product/cache/31cbefb9be50bdc69d7917a952daa217/C/W/CW2288-111-PHSRH000-1000_1.png" width="30" height="30"></td>
                                    <td>Nike sport shoe</td>
                                    <td>$1234</td>
                                </tr>
                                <tr>
                                    <td><img src="https://assets.adidas.com/images/w_600,f_auto,q_auto/6654ed6f3c7a4c4e8609af5400cadf32_9366/Tenis_Court_Silk_Blanco_GW1453_01_standard.jpg" width="30" height="30"></td>
                                    <td>hermes silk scarves</td>
                                    <td>$2312</td>
                                </tr>
                                <tr>
                                    <td><img src="https://static.dafiti.com.co/p/adidas-performance-4480-2906621-1-product.jpg" width="30" height="30"></td>
                                    <td>Gucci Ladies Bag</td>
                                    <td>$1456</td>
                                </tr>
                                <tr>
                                    <td><img src="https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/60db9db383294dcb9fa4adc600e78a75_9366/Morral_adidas_Logo_Azul_HD9930_01_standard.jpg" width="30" height="30"></td>
                                    <td>Gucci Womens Bags</td>
                                    <td>$2345</td>
                                </tr>
                                <tr>
                                    <td><img src="https://http2.mlstatic.com/D_NQ_NP_860493-MCO50939076363_072022-O.jpg" width="30" height="30"></td>
                                    <td>Adidas Running Shoe</td>
                                    <td>$2345</td>
                                </tr>
                                <tr>
                                    <td><img src="https://assets.adidas.com/images/w_383,h_383,f_auto,q_auto,fl_lossy,c_fill,g_auto/03ad0b1fe9384751beb9ac71011dc811_9366/shorts-marathon-20-pretina-media.jpg" width="30" height="30"></td>
                                    <td>Black Wears Short</td>
                                    <td>$1245</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>

</html>