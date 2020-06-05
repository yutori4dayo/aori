<!DOCTYPE html>
<html lang="ja">
    <style>
        body {
            background-color: #fffacd;
        }
        h1 {
            font-size: 16px;
            color: #ff6666;
        }
        #button {
            width: 200px;
            text-align: center;
        }
            #button a {
            padding: 10px 20px;
            display: block;
            border: 1px solid #2a88bd;
            background-color: #FFFFFF;
            color: #2a88bd;
            text-decoration: none;
            box-shadow: 2px 2px 3px #f5deb3;
        }
            #button a:hover {
            background-color: #2a88bd;
            color: #FFFFFF;
        }
    </style>
    <body>
        <p>新しい煽り運転ナンバーが投稿されました。</p>
        <table>
        </table>
        </br>
        <span>{{$region}}</span>　<span>{{$Classification}}</span>　<span>{{$Distinction}}</span>　<span>{{$maskednumber}}</span>
        </br>
        <p>{{$text}}</p>
    </body>
</html>
