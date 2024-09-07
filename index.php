<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>gold calculator</title>
    <link rel="stylesheet" href=" 	https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

</head>

<body>
    <style>
        body{
            font-family:'Times New Roman';
            margin:0;
            padding:0;     
            /* border:1px solid red; */
            background-color: darkgrey;
        }
        .container{
            margin-top:20px;
            box-shadow: 0px 0px 10px ghostwhite;
            background-color: burlywood;
            max-width: 500px;
        }
        h1{
        padding-top:50px;
            font-style:oblique;
            font-size: 50px;
            font-weight: 100;
        }
        label {
            font-size:18px;
            margin-bottom:0;
            /* border:1px solid red; */
        }
      h2{
        font-size: 30px;
        margin-top: 10px;
      }
      .result{
         margin-top: 0;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        color:aquamarine;
      }
      .card{
        margin-bottom: 30px;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
       
       
      }
      .result-items{
        margin-bottom: 25px;
        font-size: 18px;
       
      }
      p{
        margin: auto;
      }
input{
    transition: 0.5s ease-in-out;
}
   input:hover{
    background-color: powderblue;
   }

    </style>
    <?php

    $weight = null;
    $sale = null;
    $market = null;


    if (isset($_POST["weight"]) && isset($_POST["sale"]) && isset($_POST["market"])) {
        $weight = $_POST["weight"];
        $sale = $_POST["sale"];
        $market = $_POST["market"];
        $pae = $weight /1.2025;
        $kyattar = $pae / 16;
        $gold_price = $kyattar * $market;
        $service_charges = $sale - $gold_price;
        $pae = number_format ($pae,2);
        $gold_price = round($gold_price);
        $service_charges = round($service_charges);
    }
    ?>
    <div class="container">
        <h1 class="text-center">Gold Calculator</h1>
        <div class="row justify-content-center ">
            <div class="col col ">
                <form action="index.php" method="post">
                    <div class=" weight  m-4">
                        <label for="gold-weight" >Gold Weight(grams)
                            <span class="text-danger">*</span>
                        </label>
                        <input name="weight" type="number" class="form-control mt-2" id="gold-weight"
                         value="<?php echo $weight; ?>" required>

                    </div>
                    <div class=" m-4" >
                        <label for="sell-price">Sale Price
                        <span class="text-danger">*</span>
                        </label>
                        <input name="sale" type="number" class="form-control mt-2"
                         value="<?php echo $sale; ?>" required>

                    </div>
                    <div class=" m-4">
                        <label for="market-price">Market Price
                        <span class="text-danger">*</span>
                        </label>
                        <input name="market" type="number" class="form-control mt-2"
                            value="<?php echo $market; ?>" required>

                    </div>
                    <div class="m-4 mt-5 " >
                        <button type="submit" class="btn btn-primary " style="width:100%">Claculate</button>
                    </div>
                    <div class="result" style="width: 100%;">
                        <div class="card my-3" style="width: 20rem;">
                            <h2>Results</h2>
                            
                            <div class="result-items">
                                <p> Gold Weight:  <?php echo $pae ."Pae"?></p>
                                <p>Gold Price: <?php echo $gold_price ."Kyats"?></p>
                                <p>Service Charges:<?php echo " ". $service_charges ."Kyats"?> </p>
                            </div>
                        </div>
                    </div>
            </div>
            </form>
        </div>
    </div>




    <script src=" 	https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
