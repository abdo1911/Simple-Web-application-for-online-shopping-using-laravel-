<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="{{asset('https://cdn.tailwindcss.com/3.0.12')}}"></script>
    <script src="{{asset('https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js')}}"></script>
    <script src="{{asset('https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js')}}"></script>
    <script src="{{asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css')}}"></script>
    <style>
        #myVideo {
            position: fixed;
            right: 0;
            bottom: 0;
            min-width: 100%;
            min-height: 100%;
        }
        .content {
            position: fixed;
            left: 410px;
            bottom:30px;
            padding: 20px;
        }
    </style>
</head>
<body>
<video autoplay muted loop id="myVideo">
    <source src="back2.mp4" type="video/mp4">
    Your browser does not support HTML5 video.
</video>
<div class="content">
    <div class="flex justify-center items-center min-h-screen">
        <form action="handleSubmit">
            <div class="h-100 px-7 w-[700px] rounded-[12px] bg-white p-4">
                <p class="text-xl font-semibold text-blue-900 cursor-pointer transition-all hover:text-black">User email</p>
                <label>
                    <textarea name="author" class="h-10 px-3 text-sm py-1 mt-5 outline-none border-pink-300 w-full resize-none border rounded-lg placeholder:text-sm" placeholder="Add your email here"></textarea>
                </label>

                <p class="text-xl font-semibold text-blue-900 cursor-pointer transition-all hover:text-black">Add Comment/Questions</p>
                <label>
                    <textarea name="text" class="h-40 px-3 text-sm py-1 mt-5 outline-none border-pink-300 w-full resize-none border rounded-lg placeholder:text-sm" placeholder="Add your comments here"></textarea>
                </label>

                <div class="flex justify-between mt-2">
                    <button class="h-12 w-[150px] bg-blue-400 text-sm text-white rounded-lg transition-all cursor-pointer hover:bg-blue-600">Submit comment</button>
                    <p class="text-sm text-blue-900 ">Enter atleast 15 characters</p>
                </div>
            </div>
        </form>
    </div>
</div>
</body>
</html>
