<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Card with Image and Text</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;

    }

    body,
    html {
        height: 100%;
        font-family: Arial, sans-serif;
        background-color: #f0f0f0;

    }

    .container {
        display: flex;
        justify-content: center;
        align-items: flex-start;
        height: 100%;
        margin-left: 80px;
        gap: 20px;
    }

    .container img {
        width: 50%;
        left: 20%;
    }

    .btn1 {
        padding: 15px 35px;
        background-color: #62aaee;
        border-radius: 30px;
    }
    .btnn{
        position: absolute;
        display: flex;
        gap: 20px;
        left: 15%;
        top: 70%;
    }
    
    .btn1 a{
        text-decoration: none;
        font-size: 1.5vw;
        color: #4B0909;
        font-weight: 700;
    }
    .txt{
        font-size: 3.5vw;
        width: 30%;
        margin-top: 20px;
        line-height: 60px;
        font-weight: 500;
    }

    /* ---------features------------- */

.features{
    padding: 50px 12%;
    font-size: 22px;
}
.row{
    display: flex;
    width: 100%;
    align-items: center;
    flex-wrap: wrap;
    padding: 50px 0;
}

.text-col{
    flex-basis: 50%;
    margin-bottom: 20px;
}
.img-col{
    flex-basis: 50%;
    margin-bottom: 20px;
}
.img-col img{
    display: block;
    width: 90%;
    margin: auto;
}
.features h2{
    font-size: 50px;
    font-weight: 600;
    margin-bottom: 20px;
}

    

</style>

<body>
    @include('shared.header')
    <div class="container mt-1">
    <div class="txt">
            <p>Piscok<br>
             <a href="" style="text-decoration: none; color: red;">Pisang Coklat</a><br>
           gurih dan manis</p>
        </div>

        <img src="{{ Asset ('img/piscok2.jpeg') }}" alt="">
       
        <div class="btnn">
            <div class="btn1"> 
                <a href="#menu">Menu</a>
            </div>    
        </div>
    </div>
    
<section id="menu">
    <div class="features">
        <div class="row">
            <div class="text-col">
                <h2>Piscok Lumer</h2>
                <p>Piscok ini sangat banyak diminati orang karena coklatnya yang begitu lumer yang manisnya bisa menggoda para konsumen</p>
            </div>
            <div class="img-col">
                <img src="img/piscok7.jpg">
            </div>
        </div>
        <div class="row">
            <div class="img-col">
                <img src="img/piscok5.webp">
            </div>
            <div class="text-col">
                <h2>Piscok Coklat Keju</h2>
                <p>Piscok ini di memiliki varian coklat dan juga keju yang begitu gurih sehingga kalian akan ketagihan</p>
            </div>
        </div>
        <div class="row">
            <div class="text-col">
                <h2>Piscok Coklat Susu</h2>
                <p>Piscok ini sangat enak dan ngga kalah lumernya karena memiliki varian coklat susu yang ditaburi dengan mesis dan sangat menggoda</p>
            </div>
            <div class="img-col">
                <img src="img/piscok4.jpg">
            </div>
        </div>
        <div class="row">
            <div class="img-col">
                <img src="img/piscok3.jpg">
            </div>
            <div class="text-col">
                <h2>Piscok Pisang Random Varian</h2>
                <p>Kalau kalian bosan dengan varian yang hanya itu-itu saja dan ingin mencampur varian, kalian bisa beli piscok random varian ini yang begitu enak dan pastinya bisa menerima request dari kalian </p>
            </div>
        </div>
    </div>
</section>

</body>

</html>


{{ $posts->links() }}
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</html>