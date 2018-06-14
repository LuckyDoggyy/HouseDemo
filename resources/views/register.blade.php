<?php
/**
 * Created by PhpStorm.
 * User: xuxyu-pc
 * Date: 6/13/18
 * Time: 11:36 AM
 */
?>
@extends('origin')

@section('content')


    <input type="text" name="username" required="required" />
    <input type="password" name="password" required="required" />
    <input type="text" name="phone" required="required" />
    <button type="submit" name="submit" class="btn btn-primary btn-block btn-large" value="register">register</button>

@endsection
