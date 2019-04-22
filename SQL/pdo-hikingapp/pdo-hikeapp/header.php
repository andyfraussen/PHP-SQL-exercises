<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>PDO-Hiking-App</title>
    <style>
        th{
            background: red;
        }
        td{
            background: yellow;
        }

        #wrapper{
            display: flex;
            flex-flow: column wrap;
            align-items: center;
            background: #A5A5A5;
            width: 400px;
        }
        #wrapper input{
            display:block;
        }
    </style>
</head>
<body>
<?php require_once('connect.php')?>
<h1>Hiking App</h1>