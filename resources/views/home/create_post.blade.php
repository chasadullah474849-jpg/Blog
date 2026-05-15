<!DOCTYPE html>
<html lang="en">
<head>

    @include('home.homecss')

    <style>

        body{
            background: #0f172a;
            font-family: Arial, sans-serif;
        }

        .page_wrapper{
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 50px 15px;
        }

        .form_card{
            background: #1f2937;
            padding: 40px;
            border-radius: 20px;
            width: 100%;
            max-width: 700px;
            box-shadow: 0 10px 40px rgba(0,0,0,0.4);
        }

        .title_deg{
            font-size: 32px;
            font-weight: bold;
            color: white;
            text-align: center;
            margin-bottom: 30px;
        }

        label{
            color: #e5e7eb;
            font-size: 16px;
            font-weight: bold;
            margin-bottom: 8px;
            display: block;
        }

        .field{
            margin-bottom: 20px;
        }

        input[type="text"],
        textarea,
        input[type="file"]{
            width: 100%;
            padding: 12px;
            border-radius: 10px;
            border: none;
            outline: none;
            background: #111827;
            color: white;
        }

        textarea{
            min-height: 150px;
        }

        .btn_submit{
            width: 100%;
            padding: 12px;
            background: linear-gradient(to right, #3b82f6, #8b5cf6);
            border: none;
            border-radius: 10px;
            color: white;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            transition: 0.3s ease;
        }

        .btn_submit:hover{
            transform: scale(1.03);
        }

        /* CKEditor styling */
        .ck-editor__editable{
            min-height: 180px;
            background: white !important;
            color: black !important;
            border-radius: 10px;
        }

    </style>

</head>

<body>

@include('sweetalert::alert')

@include('home.header')

<div class="page_wrapper">

    <div class="form_card">

        <h3 class="title_deg">Create New Post</h3>

        <form action="{{url('user_post')}}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="field">
                <label>Title</label>
                <input type="text" name="title" required>
            </div>

            <div class="field">
                <label>Description</label>
                <textarea name="description" id="description"></textarea>
            </div>

            <div class="field">
                <label>Upload Image</label>
                <input type="file" name="image">
            </div>

            <button type="submit" class="btn_submit">
                Publish Post
            </button>

        </form>

    </div>

</div>

@include('home.footer')

<script src="https://cdn.ckeditor.com/ckeditor5/39.0.1/classic/ckeditor.js"></script>

<script>
ClassicEditor
    .create(document.querySelector('#description'))
    .catch(error => console.error(error));
</script>

</body>
</html>
