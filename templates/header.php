<!DOCTYPE html>
<html>
<head>
    <!-- Standard Meta -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

    <!-- Site Properities -->
    <title>Alleyn's Yearbook</title>
    <link rel="stylesheet" type="text/css" href="/semantic/components/reset.css">
    <link rel="stylesheet" type="text/css" href="/semantic/semantic.min.css">

    <script src="/js/jquery.min.js"></script>
    <script src="/semantic/semantic.min.js"></script>
    
    
</head>
<body>
    
<div class="ui internally celled grid">
    
    <?php if(!isset($remove_sidebar) || $remove_sidebar != true) {?>
    
    <div class="three wide column">
    
    <div class="ui flexible secondary vertical menu" style="width: 100%;">
        <span class="item" style="text-align: center">
            <a href="/"><img src="/images/alleyns_logo.png" style="width: 100%;"/>
                <h4 class="ui header"> Yearbook</h4></a>
            <p>Please complete all the pending tasks below</p>
        </span>
        
        <span class="item">
            <i class="grid student icon"></i> Currently logged in as [AUTHOR]
        </span>
        
        <span class="item">
            <p>Tasks</p>
        <div class="menu">
        
            <a class="red item">
                <div class="ui green horizontal label">Done</div> Come up with awards
            </a>

            <a class="red item" href="/voteawards.php">
                <div class="ui orange horizontal label">To Do</div> Vote for awards
            </a>

            <a class="red item" href="/chooseauthors.php">
                <div class="ui grey horizontal label">Future</div> Choose 5 people to write for you
            </a>

            <a class="red item">
                <div class="ui grey horizontal label">Future</div>Write your profile entries
            </a>
            
        </div>
        </span>
        
        <a class="item">
            <i class="grid external icon"></i> Logout
        </a>
        
    </div>
    
<script>
    
$('.sidebar')
  .sidebar('toggle')
;
    
</script>
        
    </div>
    <div class="thirteen wide column">


    <?php } ?>
