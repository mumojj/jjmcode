<!-- Welcome Page View -->
<?php 
$this->breadcrumbs = array(
    'Welcome',
);
?>

<div class="container-fluid d-flex justify-content-center align-items-center" style="height: 100vh;"> <!-- Centering the entire content vertically and horizontally -->
    <div class="text-center">
        <img src="Research.png" alt="Research Image" style="width: 200px;"> <!-- Assuming research.jpg is in the same directory as this view file -->
        <div class="jumbotron">
            <h1>Reasearch Grant Module</h1>
           <h4> <p class="lead">Please input the project code:</p></h4>
        </div>

      <!--  <form method="get" action="<?php echo Yii::app()->createUrl('finance3/tukgrant1/view&id='); ?>" class="w-50"> -->

        <?php
$url = $this->createUrl('/finance3/tukgrant1/view');
var_dump($url);
?>
<form method="get" action="<?php echo $url; ?>" class="w-50">


            <div class="form-group d-inline-block"> <!-- Changed from d-block to d-inline-block -->
                <label for="project_code" class="sr-only">Project Code:</label>
                <input type="text" class="form-control" id="project_code" name="project_code" placeholder="Project Code">
            </div>
            <button type="submit" class="btn btn-primary ml-2" style="width: 120px;">Submit</button> <!-- Added ml-2 for margin-left -->
        </form>
    </div>
</div>
