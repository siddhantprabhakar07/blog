<!doctype html>
<html class="no-js" lang="en">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Rurban Mission Success Story | Success Story</title>
<link rel="stylesheet" href="https://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.min.css">
<style>
    body{
        background-image: url(
            'image/bg.jpg'
        );
        background-repeat: no-repeat;
    }
    .blog-post{
        padding-top:50px;
    }
    
</style>
</head>
<body>

<div class="top-bar">
<div class="top-bar-left">
    <ul class="menu">
    <li class="menu-text">Rurban MIS</li>
    <li><a href="http://localhost:8888/success_story_ci/index.php/welcome">Success Story</a></li>
    <li><a href="#">Cluster</a></li>
    <li><a href="#">State</a></li>
    </ul>
</div>
</div>

<div class="callout large primary">
<div class="row column text-center">
<h1>Success Story</h1>
<!--<h2 class="subheader">Read Success Story </h2>
--></div>
</div>

<div class="row medium-8 large-7 columns">
<div class="blog-post" style="border: 15px;padding: 10px;border: solid;background-color: white;">
<h3><?php echo $blog_data[0]['title']?> <small>3/6/2015</small></h3>

<div class="callout">
<ul class="menu simple">
<li><a href="#">Cluster Details:</a></li>
<li><a href="#">Cluster: Nandalaur</a></li>
<li><a href="#">District: YSR Kadapa</a></li>
<li><a href="#">SPMRM phase: II</a></li>
<li><a href="#">Category: Non Tribal</a></li>
<li><a href="#">State: Andhra Pradesh</a></li>
</ul>
</div>

<img class="thumbnail" src="image/creating_liveihoods.jpg" style="width: 100%;">

<p><?php $blog_data[0]['cluster_det']?>
    
</p>
<p>
    <?php echo $blog_data[0]['need_of_activity']?>
</p>
<p>
    
</p>
<p><?php echo $blog_data[0]['intervention']?>
    
</p>
<p><?php echo $blog_data[0]['impact']?>
    
</p>
<p><?php echo $blog_data[0]['key_stakeholders']?>
</p>
<p><?php echo $blog_data[0]['beneficiaries']?>
</p>
<p><?php echo $blog_data[0]['activity_det']?>
</p>
<p><?php echo $blog_data[0]['reference_contact']?>
</p>

</div>
<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
<script src="https://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.js"></script>
<script>
    $(document).foundation();
</script>
</body>
</html>
