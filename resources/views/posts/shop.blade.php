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

body, html {
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
    gap: 40px;
}

.card {
    background-color: rgb(215, 215, 215);
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    overflow: hidden;
    width: 300px;
    text-align: left;
    border-radius: 10px;
    padding: 0px;
    margin-top: 30px;
    gap: 0px;

   
}

.card-image {
    width: 300px;
    height: auto;
    border-radius: 0px;
}

.card-content {
    padding: 16px;
    text-align: center;
}

.card-title {
    margin: 0;
    font-size: 20px;
    color: #333;
}

.card-text {
    margin-top: 8px;
    font-size: 16px;
    color: #666;
}
.h{
    text-align: center;
}

</style>

<body>
@include('shared.header')
    <div class="container"> @forelse ($posts as $post)
    <a style=" text-decoration: none;" href="{{ route('posts.show',$post->id) }}">
    
        <div class="card">
            
            <img src="{{ asset('/storage/posts/'.$post->image) }}" alt="Card Image" class="card-image">
            <div class="card-content">
                <h3 class="card-title">{{ $post->judul }}</h3>
                <p class="card-text">Rp{{ $post->harga }}</p>
                <br>
                <a href="beli">
                    <button type="button" class="btn btn-outline-success">Beli</button>
                </a>
                
            </div>
        </div></a>@endforeach
         @if ($search && $posts->isEmpty())
        <div class="alert alert-danger" role="alert">
            tidak di temukan pada pencarian"{{ $search }}"
        </div>
        @endif
    </div>
   
</body>
</html>

    
    {{ $posts->links() }}
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>