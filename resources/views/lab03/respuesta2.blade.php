<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="title m-b-md">
                    Gaseosas
                </div>
                <div class="links">
                    <form action="/gaseosa" method="POST">
                      <table style="width:100%">
                        <tr>
                          <th>Gaseosa</th>
                          <th>Precio</th> 
                          <th>Stock</th>
                          <th>Cantida</th>
                          <th>Pagar</th>
                        </tr>
                        <tr>
                          <td>InkaCola</td>
                          <td>S/3.0</td> 
                          <td>{{ $val_totalic }}</td>
                          <td><input type="number" name="ic" max="90" value="{{$val_ic}}"></td>
                          <td>S/{{ $val_total1 }}</td> 
                        </tr>
                        <tr>
                          <td>CocaCola</td>
                          <td>S/3.0</td> 
                          <td>{{ $val_totalcc }}</td>
                          <td><input type="number" name="ic" max="90" value="{{$val_cc}}"></td>
                          <td>S/{{ $val_total2 }}</td> 
                        </tr>
                        <tr>
                          <td>Guaraná</td>
                          <td>S/1.5</td> 
                          <td>{{ $val_totalgu }}</td>
                          <td><input type="number" name="ic" max="90" value="{{$val_gu}}"></td>
                          <td>S/{{ $val_total3 }}</td> 
                        </tr>
                        <tr>
                          <td>Pepsi</td>
                          <td>S/1.8</td> 
                          <td>{{ $val_totalpe }}</td>
                          <td><input type="number" name="ic" max="90" value="{{$val_pe}}"></td>
                          <td>S/{{ $val_total4 }}</td> 
                        </tr>
                        <tr>
                          <td>Sprite</td>
                          <td>S/2.0</td> 
                          <td>{{ $val_totalsp }}</td>
                          <td><input type="number" name="ic" max="90" value="{{$val_sp}}"></td>
                          <td>S/{{ $val_total5 }}</td> 
                        </tr>
                      </table>
                      <p>Monto pagado: S/.{{ $monto }}</p>
                      <p>Vuelto:  S/.{{ $vuelto }}</p>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>
