<?php
/**
 * Created by PhpStorm.
 * User: xuxyu-pc
 * Date: 6/14/18
 * Time: 2:15 PM
 */
?>

<html>
<head>
    <title>Add New House</title>
</head>
<body>
<form method="get" action="houseInfo/create">
    <div>
        <lable for="title">title</lable>
        <input type="text" id="title" name="title"/>
    </div>
    <div>
        <lable for="floor">floor</lable>
        <input type="text" id="floor" name="floor"/>
    </div>
    <div>
        <lable for="price">price</lable>
        <input type="text" id="price" name="price"/>
    </div>
    <div>
        <lable for="content">content</lable>
        <input type="text" id="content" name="content"/>
    </div>
    <div>
        <label for="houseType">houseType</label>
        <select id="houseType" name="houseType">
            @foreach($houseTypes as $houseType)
                <option value="{{ $houseType -> id }}">
                    {{$houseType -> room.'/'.$houseType -> hall.'/'.$houseType -> area.'/'.
                    $houseType -> build_year.'/'.$houseType -> t_floor.'/'.$houseType-> comm_name}}
                </option>
            @endforeach
        </select>
    </div>
    <div>
        <input type="submit" value="submit"/>
    </div>
</form>
</body>
</html>
