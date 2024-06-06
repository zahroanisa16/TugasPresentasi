<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<style>
    body{
        height: 100%;
    font-family: Arial, sans-serif;
    background-color: #f0f0f0;
    }
    .container{
        display: flex;
        justify-content: center;
        gap: 50px;
        margin-top: 40px;
    }
    .container img{
        width: 130%;
    }
    .container .txt{
        margin-top: 20px;
    }

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

/* -----------faq---------- */
.faq{
    padding: 10px 12px;
    text-align: center;
    font-size: 18px;
}
.faq h2{
    font-weight: 500;
    font-size: 40px;
}

.accordion{
    margin: 60px auto;
    width: 100%;
    max-width: 750px;
}
.accordion li{
    list-style: none;
    width: 100%;
    padding: 5px;
}
.accordion li label{
    display: flex;
    align-items: center;
    padding: 20px;
    font-size: 18px;
    font-weight: 500;
    background: #303030;
    margin-bottom: 2px;
    cursor: pointer;
    position: relative;
}
label::after{
    content: '+';
    font-size: 34px;
    position: absolute;
    right: 20px;
    transition: transform 0.5s;
}
input[type="radio"]{
    display: none;
}
.accordion .content{
    background: #303030;
    text-align: left;
    padding: 0 20px;
    max-height: 0;
    overflow: hidden;
    transition: max-height 0.5s, padding 0.5s;
}
.accordion input[type="radio"]:checked+label+ .content{
    max-height: 600px;
    padding: 30px 20px;
}
.accordion input[type="radio"]:checked + label+::after{
    transform: rotate(135deg);
}
.faq .email-signup{
    max-width: 600px;
    margin: 20px auto 60px;
}
.faq small{
    font-size: 13px;
}

/* -----------footer------------ */
.footer{
    padding: 50px 15% 10px;
    border-top: 6px solid #333;
    color: #777;
}
.footer h2{
    font-size: 18px;
    font-weight: 400;
    margin-bottom: 30px;
}
.footer .col{
    flex-basis: 25%;
    flex-grow: 1;
    margin-bottom: 20px;
}
.footer .col a{
    display: block;
    text-decoration: none;
    color: #777;
    font-size: 14px;
    margin-bottom: 10px;
}
.footer .row{
    align-items: flex-start;
    padding: 10px 0;
}
.footer .language-btn{
    color: #fff;
    padding: 10px 20px;
    border-radius: 3px;
}
.copyright-txt{
    font-size: 14px;
    margin-top: 20px;
    margin-bottom: 10px;
}
</style>
<body>
@include('shared.header')

<div class="container text-black">
    <form>
        <div class="row mb-2">
          <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
          <div class="col-sm-10">
            <input type="email" class="form-control" id="inputEmail3">
          </div>
        </div>
        
        <div class="form-floating">
            <h6>Comment</h6>
            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
            
          </div>
        
        <div class="container">
        <div class="row mb-2">
          <div class="col-sm-10">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="gridCheck1">
              <label class="form-check-label" for="gridCheck1">
                Remember me
              </label>
            </div>
          </div>
        </div>
        </div>

        <div class="container">
        <button type="submit" class="btn btn-primary">Send</button>
        </div>
      </form>
</div>


<br>

<section id="kontak">
    <div class="footer">
        <h2 class="text-black">Ada pertanyaan? Hubungi <a href="#">+62 831 5105 6833</a></h2>

        <div class="row">
            <div class="col">
                <a class="text-black" href="">Tanya Jawab</a>
                <a class="text-black" href="">Pusat Media</a>
                <a class="text-black" href="#">Tukar Kartu Hadiah</a>
                <a class="text-black" href="#">Ketentuan Penggunaan</a>
                <a class="text-black" href="#">Informasi Perusahaan</a>
                <a class="text-black" href="#">Informasi Legal</a>
            </div>
            <div class="col">
                <a class="text-black" href="#">Pusat Bantuan</a>
                <a class="text-black" href="#">Hubungan Investor</a>
                <a class="text-black" href="#">Beli Kartu Hadiah</a>
                <a class="text-black" href="#">Privasi</a>
                <a class="text-black" href="#">Hubungi Kami</a>
                <a class="text-black" href="#">Hanya di Netflix</a>
            </div>
            <div class="col">
                <a class="text-black" href="#">Akun</a>
                <a class="text-black" href="#">Lowongan Kerja</a>
                <a class="text-black" href="#">Cara Menonton</a>
                <a class="text-black" href="#">Preferensi Cookie</a>
                <a class="text-black" href="#">Uji Kecepatan</a>
            </div>
        </div>
        <button class="language-btn text-black">Bahasa Indonesia </button>
        <p class="copyright-txt text-white">zahroanisatama</p>
    </div>
    </div>
</section>

</body>
</html>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>