<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- STYLES -->

<style {csp-style-nonce}> 
h1{
    color: rgba(255, 28, 43);
    background-color: rgba(251, 255, 28);
    height: 50px;
    margin:0;
    font-family: Arial, sans-serif;
    font-weight: bold;
    text-align: center;
    padding-top:15px;
    padding-bottom:5px;
}
li {
    display: inline-block;
}
    li.harga{
			border-radius: 5px;
			margin: 5px 0;
			height: 38px;
			line-height: 36px;
			padding: .4rem .65rem;
			text-align: center;
		}
		li.harga a:hover,
		li.harga a:hover a:focus {
			background-color: rgba(221, 72, 20, .2);
			color: rgba(221, 72, 20, 1);
        }
    
    </style>
</head>
<body>
<h1>ROOM </h1> 
<div class="card" style="width: 18rem;">
    <img src="<?= base_url('assets/image.jpg'); ?> "class="card-img-top" alt="tipe kamar">
    <div class="card-body">
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    </div>
    <li class="harga"><a href="#">700.000</a>
</div>
<div class="card" style="width: 18rem;">
    <img src="<?= base_url('assets/image1.jpg'); ?>  "class="card-img-top" alt="tipe kamar">
    <div class="card-body">
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    </div>
    <li class="harga"><a href="#">1.000.000</a>
</div>
</body>




    

 