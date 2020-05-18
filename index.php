<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Didact+Gothic&display=swap');
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            outline: none;
            font-family: 'Didact Gothic', sans-serif;
        }

        .judul h1 {
            font-size: 40px;
            text-align: center;
            color: aqua;
        }

        body {
            display: flex;
            justify-content: center;
            min-height: 100vh;
        }

        .container {
            width: 1000px;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            grid-gap: 15px;
            margin: 0 auto;
        }

        .container .card {
            position: relative;
            width: 400px;
            height: 400px;
            margin: 0 auto;
            background: #fff;
            transition: 0.5s;
            margin: 50px auto;
        }

        .container .card:hover {
            box-shadow: 0 30px 50px rgba(0,0,0,.3);
            border-radius: 100px;
        }

        .container .card .face {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .container .card .face.face1 {
            box-sizing: border-box;
            padding: 20px;
            text-align: center;
            color: aqua;
        }

        .container .card .face.face1 h5 {
            margin-top: 60px;
        }

        .container .card .face.face1 a {
            display: inline-block;
            padding: 5px 10px;
            margin-top: 20px;
            text-decoration: none;
            color: aqua;
            border: 2px solid aqua;
        }

        .container .card .face.face1 a:hover {
            color: #fff;
            background: aqua;
        }

        .container .card .face.face2 {
            background: aqua;
            transition: 0.5s;
        }

        .container .card:hover .face.face2 {
            width: 90px;
            height: 90px;
            border-radius: 50%;
            top: 40px;
            left: 50%;
            transform: translateX(-50%);
            background: transparent;
            border: 2px solid aqua;
        }

        .container .card .face.face2 {
            margin: 0;
            padding: 0;
            font-size: 80px;
            color: #fff;
            transition: 0.5s;
        }

        .container .card:hover .face.face2 {
            color: aqua;
            font-size: 21px;
        }
    </style>
</head>
<body>
    <div class="container">
		<div class="judul">
        <h1>Adji Pratama 193040101</h1>
            <div class="card">
                <div class="face face1">
                    <div class="content">
                        <h5>Kuliah</h5>
                        <a href="kuliah" target="_blank">Click To See</a>
                    </div>
                </div>
                <div class="face face2">
                    <h5>Kuliah</h5>
                </div>
            </div>

            <div class="card">
                <div class="face face1">
                    <div class="content">
                        <h5>Praktikum</h5>
                        <a href="praktikum" target="_blank">Click To See</a>
                    </div>
                </div>
                <div class="face face2">
                    <h5>Praktikum</h5>
                </div>
            </div>

            <div class="card">
                <div class="face face1">
                    <div class="content">
                        <h5>Tubes</h5>
                        <a href="tubes" target="_blank">Click To See</a>
                    </div>
                </div>
                <div class="face face2">
                    <h5>Tubes</h5>
                </div>
            </div>
	    </div>
	</div>
</body>
</html>