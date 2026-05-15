
<!DOCTYPE html>
<html lang="en">
   <head>
          <!-- basic -->
           <base href="/public">
      @include('home.homecss')
   </head>
   <style>

.post_container
{
    width: 80%;
    margin: 40px auto;
    background: white;
    padding: 40px;
    border-radius: 15px;
    box-shadow: 0px 10px 30px rgba(0,0,0,0.1);
}

.post_image
{
    padding: 20px;
    height: 400px;
    width: 550px;
    margin: auto;
    display: block;
    border-radius: 12px;
    object-fit: cover;
}

.post_title
{
    text-align: center;
    font-size: 38px;
    font-weight: bold;
    margin-top: 20px;
    color: #111827;
}

.post_description
{
    margin-top: 30px;
    font-size: 18px;
    line-height: 1.9;
    text-align: justify;
    color: #374151;
}

.post_description p
{
    margin-bottom: 20px;
}

.post_description strong
{
    color: #000000;
    font-size: 20px;
    font-weight: bold;
}

.post_author
{
    text-align: center;
    margin-top: 30px;
    font-size: 18px;
    color: #6b7280;
}

</style>
   <body>
      <!-- header section start -->
      <div class="header_section">
         @include('home.header')
         <!-- banner section start -->

      </div>
      <div class="post_container">

    <img class="post_image"
         src="/postimage/{{$post->image}}">

    <h1 class="post_title">
        {{$post->title}}
    </h1>

    <div class="post_description">
        {!! $post->description !!}
    </div>

    <p class="post_author">
        Post by <b>{{$post->name}}</b>
    </p>

</div>

     @include('home.footer')
   </body>
</html>
