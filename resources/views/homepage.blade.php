{{--
/**
 * Created by PhpStorm.
 * User: xuxyu-pc
 * Date: 6/13/18
 * Time: 10:13 AM
 */--}}

        <!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <style>
        * {
            margin: 0;
            padding: 0;
            font-family: 宋体;

        }

        div {
            width: 50%;
            height: 250px;
            border: 1px solid rgb(202, 205, 158);
            margin: 50px auto;
        }

        p {
            font-size: 1em;
            font-weight: bold;
            background: rgb(202, 205, 158);

            padding: 0.2em;
        }

        ul {

            list-style-type: none;
            font-size: 0.8em;

        }

        li {
            padding: 0.7em;
            padding-left: 1.75em;
            border-bottom: 1px dashed black;
            background: url(download.jpg) no-repeat;
            background-size: 2em 2em;
            background-position: 0 0.1em;
        }

        li > span {
            diaplay: inlie-block;
            float: right;
            width: 12em;
        }
    </style>
</head>
<body>
<a href="#">{{ $username }}</a>
<a href="/logout">logout</a>
<div>
    <p>>>House Information</p>
    <ul>
        @foreach($houseInfos as $houseInfo)
            <li><a href="/houseInfo">{{ $houseInfo -> title }}</a><span>{{ $houseInfo -> updated_at }}</span></li>
        @endforeach
    </ul>
</div>
</body>
