<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Archivo no encontrado</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f8f9fa;
            font-family: Arial, sans-serif;
            margin: 0;
        }

        .container {
            text-align: center;
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .error-message {
            font-size: 28px;
            font-weight: bold;
            color: #dc3545;
            margin-bottom: 10px;
        }

        .file-name {
            font-size: 18px;
            color: #6c757d;
            margin-bottom: 20px;
        }

        .buho svg {
            width: 150px;
            margin-top: 15px;
        }

        .btn {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            font-size: 16px;
            color: white;
            background-color: #007bff;
            text-decoration: none;
            border-radius: 5px;
            transition: background 0.3s;
        }

        .btn:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>
    <main class="container">
        <h1 class="error-message">Archivo no encontrado</h1>
        <p class="file-name">El archivo "{{ $filename }}" no existe o no fue encontrado.</p>

        <div class="buho">
            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="64px" height="64px"
                viewBox="0 0 64 64" style="enable-background:new 0 0 64 64;" xml:space="preserve">
                <g id="Body">
                    <g>
                        <path style="fill:#735538;" d="M52,34c0-10.81-5.997-15.997-6-16H18c-0.004,0.003-6,5.19-6,16c0,14.251,12,15.563,12,20.001
			C24,59,18,59.188,18,64c0,0,5-2,8-2c1.938,0,2.125,2,6,2s4.063-2,6-2c3,0,8,2,8,2c0-4.813-6-5-6-9.999C40,49.563,52,48.251,52,34z
			" />
                    </g>
                </g>
                <g id="Brench">
                    <g>
                        <path style="fill:#4D4D4D;" d="M60,46.001H4c-2.209,0-4,1.79-4,3.999c0,2.21,1.791,4.001,4,4.001h56c2.209,0,4-1.791,4-4.001
			C64,47.791,62.209,46.001,60,46.001z" />
                    </g>
                </g>
                <g id="Claws">
                    <g>
                        <path style="fill-rule:evenodd;clip-rule:evenodd;fill:#BF8D5E;" d="M28,44c-1.104,0-2,0.896-2,2.001C26,44.896,25.104,44,24,44
			s-2,0.896-2,2.001V50c0,1.104,0.896,2,2,2s2-0.896,2-2c0,1.104,0.896,2,2,2s2-0.896,2-2v-3.999C30,44.896,29.104,44,28,44z M40,44
			c-1.104,0-2,0.896-2,2.001C38,44.896,37.104,44,36,44s-2,0.896-2,2.001V50c0,1.104,0.896,2,2,2s2-0.896,2-2c0,1.104,0.896,2,2,2
			s2-0.896,2-2v-3.999C42,44.896,41.104,44,40,44z" />
                    </g>
                </g>
                <g id="Head">
                    <g>
                        <path style="fill-rule:evenodd;clip-rule:evenodd;fill:#A67A51;" d="M47.138,8.37C47.588,5.736,48,2.617,48,0
			c-2.253,0-5.139,3.697-6.756,6.064C40.835,6.022,40.42,6,40,6c-3.078,0-5.876,1.169-8,3.073C29.876,7.169,27.078,6,24,6
			c-0.42,0-0.835,0.022-1.244,0.064C21.139,3.697,18.253,0,16,0c0,2.617,0.412,5.736,0.862,8.369C13.917,10.556,12,14.05,12,18
			c0,6.628,5.372,12,12,12c3.078,0,5.876-1.169,8-3.073C34.124,28.831,36.922,30,40,30c6.627,0,12-5.372,12-12
			C52,14.05,50.083,10.557,47.138,8.37z" />
                    </g>
                </g>
                <g id="Face">
                    <g>
                        <path style="fill-rule:evenodd;clip-rule:evenodd;fill:#E6E6E6;" d="M40,10c-4.418,0-8,3.582-8,8c0-4.418-3.582-8-8-8
			s-8,3.582-8,8c0,4.419,3.582,8.001,8,8.001c1.933,0,3.705-0.686,5.088-1.826L32,30l2.912-5.825
			c1.383,1.141,3.155,1.826,5.088,1.826c4.418,0,8-3.582,8-8.001C48,13.582,44.418,10,40,10z" />
                    </g>
                </g>
                <g id="Eyes">
                    <g>
                        <path style="fill-rule:evenodd;clip-rule:evenodd;fill:#4D4D4D;" d="M24,14c-2.209,0-4,1.791-4,4s1.791,4,4,4s4-1.791,4-4
			S26.209,14,24,14z M40,14c-2.209,0-4,1.791-4,4s1.791,4,4,4s4-1.791,4-4S42.209,14,40,14z" />
                    </g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
            </svg>
        </div>

        <button class="btn" onclick="cerrarPagina()">Cerrar página</button>
        <script>
        function cerrarPagina() {
            window.close();
        }
        </script>
    </main>
</body>

</html>