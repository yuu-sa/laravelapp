<html>
  <head>
    <title>Hello/index</title>
    <style>
    body {font-size:16pt; color:#999; }
    h1 { font-size:-50pt; text-align:right; color:#f6f6f6;
       margin:-20px 0px -30px 0px; letter-spacing: -4pt; }
    </style>
  </head>
  <body>
    <h1>Blaede/Index</h1>
    <p>&#064;forディレクティブの例</p>
    @foreach ($data as $item)
    @if ($loop->first)
    <p>※データ一覧</p><ul>
    @endif
    <li>No,{{$loop->iteration}}. {{$item}}</li>
    @if ($loop->last)
    </ul><p>ーーここまで</p>
    @endif
    @endforeach
  </body>
</html>