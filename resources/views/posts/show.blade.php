<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            min-height: 100vh;
            max-width: 100%;
            overflow-x: hidden;
        }

        /* width */
        ::-webkit-scrollbar {
            width: 0px;
        }

        /* Track */
        ::-webkit-scrollbar-track {
            box-shadow: inset 0 0 5px grey;
            border-radius: 10px;
        }

        /* Handle */
        ::-webkit-scrollbar-thumb {
            background: red;
            border-radius: 10px;
        }

        /* Handle on hover */
        ::-webkit-scrollbar-thumb:hover {
            background: #b30000;
        }

        .tampil {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .show {
            width: 120%;
            display: flex;
            flex-direction: column;
            border-radius: 0px;
            align-content: center;
            justify-content: space-evenly;
            padding: 1%;
            background-size: cover;
            border-bottom: solid 2px orange;

        }

        .back {
            margin-top: 14px;
        }

        .text {
            position: relative;
            text-align: center;
            margin-top: 20px;
            left: 70px;
            text-transform: capitalize;
        }

        .text-dark {
            color: black !important;
        }



        .image {
            width: 450px;
            border-radius: 10px;
            transition: 0.5s;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.325);
        }

       

        @media (min-width: 768px) {
            .show {
                flex-direction: row;
                align-items: flex-start;

            }

            .text {
                text-align: left;
                margin-top: 0;
                margin-left: 20px;
            }



            .image img {
                right: 10%;
                margin: 0;
                min-height: 280px;
                width: 280px;
            }
        }

        /* Modal styles */
        .modal {
            display: none;
            position: fixed;
            z-index: 1000;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0, 0, 0, 0.865);

        }

        .modal-content {
            margin: auto;
            display: block;
            top: 5%;
            height: 90%;
            width: auto;

        }

        .close {
            position: absolute;
            top: 15px;
            z-index: 100;
            right: 35px;
            color: #fff;
            font-size: 40px;
            font-weight: bold;
            transition: 0.3s;

        }

        .close:hover,
        .close:focus {
            color: white;
            border: solid 2px black;
            text-decoration: none;
            cursor: pointer;
        }
    </style>
</head>

<body>
@include('shared.header')
    <div class="tampil container mt-1 mb-5">
        <div class="show bg-purple-500 text-black">
            <img class="image" src="{{ asset('storage/posts/'.$post->image) }}" alt="">

           


        </div>
    </div>
 <div class="text">
                <h4 style="font-size: 4vw;">{{ $post->judul }} </h4>
                <p style="font-size: 2vw;">{{ $post->harga }}</p>
                <p style="font-size: 2vw;">{{ $post->deskripsi }}</p>
                <br>
                <a href="/posts/shop" class="btn back btn-dark">Back</a>
            </div>

    <!-- Modal untuk memperbesar gambar -->
    <div id="myModal" class="modal">
        <span class="close">&times;</span>
        <img class="modal-content" id="img01">
    </div>

   
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>