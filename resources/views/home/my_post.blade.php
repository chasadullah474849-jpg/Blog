<!DOCTYPE html>
<html lang="en">
<head>

    @include('home.homecss')

    <style type="text/css">

        body{
            background: #111827;
            font-family: Arial, Helvetica, sans-serif;
        }

        .header_section{
            min-height: 100vh;
        }

        .posts_container{
            width: 90%;
            margin: auto;
            padding-top: 40px;

            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
            gap: 30px;
        }

        .post_card{
            background: #1f2937;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0px 10px 25px rgba(0,0,0,0.4);

            transition: 0.3s ease;
        }

        .post_card:hover{
            transform: translateY(-10px);
            box-shadow: 0px 15px 35px rgba(0,0,0,0.5);
        }

        .img_deg{
            width: 100%;
            height: 240px;
            object-fit: cover;
        }

        .post_content{
            padding: 25px;
            text-align: center;
        }

        .title_deg{
            font-size: 26px;
            font-weight: bold;
            color: white;
            margin-bottom: 15px;
        }

        .des_deg{
            font-size: 16px;
            color: #d1d5db;
            line-height: 1.6;
            margin-bottom: 20px;
        }

        .btn_group{
            display: flex;
            justify-content: center;
            gap: 15px;
        }

        .btn-custom{
            padding: 10px 22px;
            border-radius: 8px;
            font-size: 15px;
            font-weight: bold;
            text-decoration: none;
            transition: 0.3s ease;
        }

        .btn-delete{
            background: #dc2626;
            color: white;
        }

        .btn-delete:hover{
            background: #b91c1c;
            color: white;
        }

        .btn-update{
            background: #2563eb;
            color: white;
        }

        .btn-update:hover{
            background: #1d4ed8;
            color: white;
        }

        .page_title{
            text-align: center;
            color: white;
            font-size: 42px;
            font-weight: bold;
            padding-top: 40px;
        }

        .alert{
            width: 60%;
            margin: 20px auto;
        }

    </style>

</head>

<body>

<div class="header_section">

    @include('home.header')

    @if(session()->has('message'))

        <div class="alert alert-success">
            <button type="button"
                    class="close"
                    data-dismiss="alert"
                    aria-hidden="true">
                x
            </button>

            {{ session()->get('message') }}
        </div>

    @endif

    <h1 class="page_title">
        My Blog Posts
    </h1>

    <div class="posts_container">

        @foreach($data as $post)

            <div class="post_card">

                <img class="img_deg"
                     src="/postimage/{{$post->image}}">

                <div class="post_content">

                    <h2 class="title_deg">
                        {{$post->title}}
                    </h2>

                    <!-- <p class="des_deg">
                        {{$post->description}}
                    </p> -->

                    <div class="btn_group">

                        <a onclick="return confirm('Are you sure to delete this ?')"
                           href="{{ url('my_post_del', $post->uuid) }}"
                           class="btn-custom btn-delete">

                            Delete

                        </a>

                        <a href="{{ url('post_update_page', $post->uuid) }}"
                           class="btn-custom btn-update">

                            Update

                        </a>
                        <a href="{{ url('post_details', $post->uuid) }}"
   class="btn-custom"
   style="background:#10b981; color:white;">

    View Details

</a>

                    </div>

                </div>

            </div>

        @endforeach

    </div>

</div>

@include('home.footer')

</body>
</html>
