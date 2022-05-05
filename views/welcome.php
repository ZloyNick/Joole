<?php
    /** @var string $version */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="text/html">
    <link rel="icon" href="favicon.ico">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=DM+Sans">
    <meta name="viewport" content="width=device-width, user-scalable=no" />
    <title>Joole Home Page</title>
</head>
<body>
<div class="head-content">
    <p>The Joole Framework</p>
    <?php if(!empty($version)): ?>
    <p><?= $version ?></p>
    <?php endif ?>
    <div class="head-items-content container-items center">
        <a class="item" href="/">Documentation</a>
        <a class="item" href="/">Components</a>
        <a class="item" href="https://github.com/ZloyNick/Joole">GIT</a>
        <a class="item" href="/">Forums</a>
    </div>
</div>

<div class="body-content">
    <div class="container-items center">
        <div class="item">
            <p>
                About framework
            </p>
            <div>
                <p>
                    Joole is a universal framework for projects of any level.
                    Manage the components and supplement them if necessary, we give complete freedom to your ideas.
                </p>
            </div>
        </div>
    </div>

    <div class="info-block container-items center">
        <div class="item">
            <p class="title">
                Component
            </p>
            <hr>
            <p class="description">
                Expandable with components.
                The framework allows you to create instructions for an application using components.
                You can change literally everything, from routing to more important things.
                We give you complete freedom to modify your project without restrictions.
            </p>
        </div>

        <div class="item">
            <p class="title">
                Fast
            </p>
            <hr>
            <p class="description">
                Despite the configuration possibilities and convenience of the components,
                we always try to ensure high speed of their operation.
            </p>
        </div>

        <div class="item">
            <p class="title">
                Simple
            </p>
            <hr>
            <p class="description">
                It looks like everything and nothing.
                The basic part of the framework is similar to such popular frameworks as Laravel and Yii.
                Therefore, migrating to Joole will be very easy.
            </p>
        </div>
    </div>
</div>
</body>

<style>

    body {
        background-color: #dddcdc;
        height: 100%;
    }

    .head-content{
        text-align: center;
        font-weight: bold;
        font-family: sans-serif;
        justify-content: center;
        font-size: 64px;
        color: #919090;
        text-shadow: #c7c6c6 0 6px;
    }

    .head-items-content {
        margin-top: 64px;
    }

    .head-items-content .item{
        text-decoration: none;
        display: inline-block;
        width: 300px;
        font-weight: bold;
        font-family: sans-serif;
        color: #8d478d;
        margin: 10px;
        padding-bottom: 6px;
        font-size: 32px;
        cursor: pointer;
        border-bottom: 3px solid #dddcdc;
    }

    .head-items-content .item:hover{
        color: #ff1fd7;
        border-bottom-color: #ff1fd7;
    }

    .body-content{
        padding: 8px;
        height: 100%;
        background-color: #eae7e7;
        margin: 5px 32px 0 32px;
    }

    .body-content .item{
        margin: 5px;
        display: inline-block;
        width: 720px;
        font-weight: bold;
        font-family: sans-serif;
    }

    .body-content .item p{
        font-size: 32px;
        color: #7a7878;
    }

    .body-content .info-block{

    }

    .body-content .info-block .item {
        background-color: #d7d6d6;
        height: 320px;
        width: 385px;
    }

    .body-content .info-block .item .title{
        font-size: 22px;
    }

    .body-content .info-block .item .description{
        font-weight: lighter;
        font-size: 20px;
        margin: 15px;
        color: #8b8888;
    }

    .body-content .item div p{
        font-size: 24px;
        color: #a5a3a3;
        font-weight: lighter;
    }

    .container-items {
        display: flex;
    }

    .center{
        justify-content: center;
        text-align: center;
    }
</style>

</html>