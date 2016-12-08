<?php
    include "php/config.php";
?>

<!DOCTYPE html>
<html>
<head>
	<title>iMedia Security Solutions</title>
</head>
<body>

</body>
</html>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>iMedia Security</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Paper Dashboard core CSS    -->
    <link href="assets/css/paper-dashboard.css" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />


    <!--  Fonts and icons     -->
    <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/themify-icons.css" rel="stylesheet">





</head>
<body>

<div class="wrapper">

    <!--ADD ITEM MODAL-->
    <div class="modal fade bs-example-modal-lg" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Add Item</h4>
                </div>

                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="form-group">
                                <label>Item Type:</label>
                                <select class="form-control" id="item-type" name="item-type">
                                    <option value="none">None</option>
                                    <option value="camera">Camera</option>
                                    <option value="recorder">Recorder</option>
                                    <option value="accessories">Accessories</option>
                                    <option value="cable">Cable</option>
                                    <option value="switch">Switch</option>
                                    <option value="wireless">Wireless</option>
                                    <option value="router">Router</option>
                                    <option value="power">Power Supply</option>
                                </select>
                            </div>

                        <!--CAMERA FORM-->
                        
                        <form action="" method="" id="formCamera" name="form-camera" style="display: none;">
                            
                            <div class="form-group">
                                <label>Image:</label>
                                <input type="file" class="form-control" name="image">
                            </div>

                            <div class="form-group">
                                <label>Brand:</label>
                                <input type="text" class="form-control" name="brand">
                            </div>

                            <div class="form-group">
                                <label>Model:</label>
                                <input type="text" class="form-control" name="model">
                            </div>

                            <div class="form-group">
                                <label>Type:</label>
                                <select class="form-control" name="type">
                                    <option value="bullet">Bullet</option>
                                    <option value="dome">Dome</option>
                                    <option value="ptz">PTZ</option>
                                    <option value="box">Box</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Camera Type: (IP/Analog)</label>
                                <select class="form-control" name="c-type">
                                    <option value="IP">IP</option>
                                    <option value="Analog">Analog</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>POE:</label>
                                <input type="radio" class="radio-inline" name="poe">Yes
                                <input type="radio" class="radio-inline" name="poe">No
                            </div>

                            <div class="form-group">
                                <label>Specifications:</label>
                                <textarea class="form-control" name="specs"></textarea>
                            </div>

                            <div class="form-group">
                                <label>Lens:</label>
                                <input type="text" class="form-control" name="lens">
                            </div>

                            <div class="form-group">
                                <label>Price</label>
                                <input type="number" class="form-control" name="price">
                            </div>

                        </form>

                        <!--RECORDER FORM-->
                        <form action="" method="" id="form-recorder" name="form-recorder" style="display: none;">
                            
                            <div class="form-group">
                                <label>Image:</label>
                                <input type="file" class="form-control" name="image">
                            </div>

                            <div class="form-group">
                                <label>Brand:</label>
                                <input type="text" class="form-control" name="brand">
                            </div>

                            <div class="form-group">
                                <label>Model:</label>
                                <input type="text" class="form-control" name="model">
                            </div>

                            <div class="form-group">
                                <label>Name:</label>
                                <input type="name" class="form-control" name="name">
                            </div>

                            <div class="form-group">
                                <label>Type:</label>
                                <select class="form-control" name="type">
                                    <option value="NVR">NVR</option>
                                    <option value="DVR">DVR</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>POE:</label>
                                <input type="radio" class="radio-inline" name="poe">Yes
                                <input type="radio" class="radio-inline" name="poe">No
                            </div>

                            <div class="form-group">
                                <label>Specifications:</label>
                                <textarea class="form-control" name="specs"></textarea>
                            </div>

                            <div class="form-group">
                                <label>Ports:</label>
                                <input type="number" class="form-control" name="ports">
                            </div>

                            <div class="form-group">
                                <label>Price</label>
                                <input type="number" class="form-control" name="price">
                            </div>

                        </form>

                        <!--ACCESSORIES FORM-->
                        <form action="" method="" id="form-accessories" name="form-accessories" style="display: none;">
                            
                            <div class="form-group">
                                <label>Image:</label>
                                <input type="file" class="form-control" name="image">
                            </div>

                            <div class="form-group">
                                <label>Brand:</label>
                                <input type="text" class="form-control" name="brand">
                            </div>

                            <div class="form-group">
                                <label>Model:</label>
                                <input type="text" class="form-control" name="model">
                            </div>

                            <div class="form-group">
                                <label>Name:</label>
                                <input type="name" class="form-control" name="name">
                            </div>

                            <div class="form-group">
                                <label>Price</label>
                                <input type="number" class="form-control" name="price">
                            </div>

                        </form>

                        <!--CABLE FORM-->
                        <form action="" method="" id="form-cable" name="form-cable" style="display: none;">
                            
                            <div class="form-group">
                                <label>Image:</label>
                                <input type="file" class="form-control" name="image">
                            </div>

                            <div class="form-group">
                                <label>Brand:</label>
                                <input type="text" class="form-control" name="brand">
                            </div>

                            <div class="form-group">
                                <label>Model:</label>
                                <input type="text" class="form-control" name="model">
                            </div>

                            <div class="form-group">
                                <label>Name:</label>
                                <input type="name" class="form-control" name="name">
                            </div>

                            <div class="form-group">
                                <label>Type:</label>
                                <select class="form-control" name="type">
                                    <option value="NVR">NVR</option>
                                    <option value="DVR">DVR</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Price</label>
                                <input type="number" class="form-control" name="price">
                            </div>

                        </form>

                        <!--SWITCH FORM-->
                        <form action="" method="" id="form-switch" name="form-switch" style="display: none;">
                            
                            <div class="form-group">
                                <label>Image:</label>
                                <input type="file" class="form-control" name="image">
                            </div>

                            <div class="form-group">
                                <label>Brand:</label>
                                <input type="text" class="form-control" name="brand">
                            </div>

                            <div class="form-group">
                                <label>Model:</label>
                                <input type="text" class="form-control" name="model">
                            </div>

                            <div class="form-group">
                                <label>Name:</label>
                                <input type="name" class="form-control" name="name">
                            </div>

                            <div class="form-group">
                                <label>Ports:</label>
                                <input type="number" class="form-control" name="ports">
                            </div>

                            <div class="form-group">
                                <label>Price</label>
                                <input type="number" class="form-control" name="price">
                            </div>

                        </form>

                        <!--WIRELESS FORM-->
                        <form action="" method="" id="form-wireless" name="form-wireless" style="display: none;">
                            
                            <div class="form-group">
                                <label>Image:</label>
                                <input type="file" class="form-control" name="image">
                            </div>

                            <div class="form-group">
                                <label>Brand:</label>
                                <input type="text" class="form-control" name="brand">
                            </div>

                            <div class="form-group">
                                <label>Model:</label>
                                <input type="text" class="form-control" name="model">
                            </div>

                            <div class="form-group">
                                <label>Name:</label>
                                <input type="name" class="form-control" name="name">
                            </div>

                            <div class="form-group">
                                <label>Frequency:</label>
                                <input type="text" class="form-control" name="frequency">
                            </div>

                            <div class="form-group">
                                <label>Speed:</label>
                                <input type="text" class="form-control" name="speed">
                            </div>

                            <div class="form-group">
                                <label>Price</label>
                                <input type="number" class="form-control" name="price">
                            </div>

                        </form>

                        <!--ROUTER FORM-->
                        <form action="" method="" id="form-router" name="form-router" style="display: none;">
                            
                            <div class="form-group">
                                <label>Image:</label>
                                <input type="file" class="form-control" name="image">
                            </div>

                            <div class="form-group">
                                <label>Brand:</label>
                                <input type="text" class="form-control" name="brand"> 
                            </div>

                            <div class="form-group">
                                <label>Model:</label>
                                <input type="text" class="form-control" name="model">
                            </div>

                            <div class="form-group">
                                <label>Name:</label>
                                <input type="name" class="form-control" name="name">
                            </div>

                            <div class="form-group">
                                <label>Wireless Capability:</label>
                                <input type="radio" class="radio-inline" name="wireless-capability" value="yes">Yes
                                <input type="radio" class="radio-inline" name="wireless-capability" value="no">No
                            </div>

                            <div class="form-group">
                                <label>Price</label>
                                <input type="number" class="form-control" name="price">
                            </div>

                        </form>

                        <!--POWER SUPPLY FORM-->
                        <form action="" method="" id="form-power" name="form-power" style="display: none;">
                            
                            <div class="form-group">
                                <label>Image:</label>
                                <input type="file" class="form-control" name="image">
                            </div>

                            <div class="form-group">
                                <label>Brand:</label>
                                <input type="text" class="form-control" name="brand">
                            </div>

                            <div class="form-group">
                                <label>Model:</label>
                                <input type="text" class="form-control" name="model">
                            </div>

                            <div class="form-group">
                                <label>Name:</label>
                                <input type="name" class="form-control" name="name">
                            </div>

                            <div class="form-group">
                                <label>Channels:</label>
                                <input type="number" class="form-control" name="channels">
                            </div>

                            <div class="form-group">
                                <label>Price</label>
                                <input type="number" class="form-control" name="price">
                            </div>

                        </form>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" id="add">Add</button>
                </div>

            </div>
        </div>
    </div>



    <div class="sidebar" data-background-color="white" data-active-color="danger">

    <!--
		Tip 1: you can change the color of the sidebar's background using: data-background-color="white | black"
		Tip 2: you can change the color of the active button using the data-active-color="primary | info | success | warning | danger"
	-->

    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="http://www.creative-tim.com" class="simple-text">
                    iMedia Security 
                </a>
            </div>

            <ul class="nav">
                <li class="active">
                    <a href="index.html">
                        <i class="ti-panel"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li>
                    <a href="user.html">
                        <i class="ti-user"></i>
                        <p>User Profile</p>
                    </a>
                </li>
                <li>
                    <a href="table.html">
                        <i class="ti-view-list-alt"></i>
                        <p>Table List</p>
                    </a>
                </li>
                <li>
                    <a href="typography.html">
                        <i class="ti-text"></i>
                        <p>Typography</p>
                    </a>
                </li>
                <li>
                    <a href="icons.html">
                        <i class="ti-pencil-alt2"></i>
                        <p>Icons</p>
                    </a>
                </li>
                <li>
                    <a href="maps.html">
                        <i class="ti-map"></i>
                        <p>Maps</p>
                    </a>
                </li>
                <li>
                    <a href="notifications.html">
                        <i class="ti-bell"></i>
                        <p>Notifications</p>
                    </a>
                </li>
				<li class="active-pro">
                    <a href="upgrade.html">
                        <i class="ti-export"></i>
                        <p>Upgrade to PRO</p>
                    </a>
                </li>
            </ul>
    	</div>
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar bar1"></span>
                        <span class="icon-bar bar2"></span>
                        <span class="icon-bar bar3"></span>
                    </button>
                    <a class="navbar-brand" href="#">Dashboard</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="ti-panel"></i>
								<p>Stats</p>
                            </a>
                        </li>
                        <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="ti-bell"></i>
                                    <p class="notification">5</p>
									<p>Notifications</p>
									<b class="caret"></b>
                              </a>
                              <ul class="dropdown-menu">
                                <li><a href="#">Notification 1</a></li>
                                <li><a href="#">Notification 2</a></li>
                                <li><a href="#">Notification 3</a></li>
                                <li><a href="#">Notification 4</a></li>
                                <li><a href="#">Another notification</a></li>
                              </ul>
                        </li>
						<li>
                            <a href="#">
								<i class="ti-settings"></i>
								<p>Settings</p>
                            </a>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>


        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="card">
                        <div class="container-fluid">
                            <ul class="nav nav-tabs">
                                <li class="active"><a data-toggle="tab" href="#camera">Camera</a></li>
                                <li><a data-toggle="tab" href="#recorder">Recorder</a></li>
                                <li><a data-toggle="tab" href="#accessories">Accessories</a></li>
                                <li><a data-toggle="tab" href="#cable">Cable</a></li>
                                <li><a data-toggle="tab" href="#switch">Switch</a></li>
                                <li><a data-toggle="tab" href="#wireless">Wireless</a></li>
                                <li><a data-toggle="tab" href="#router">Router</a></li>
                                <li><a data-toggle="tab" href="#power">Power Supply</a></li>
                            </ul>

                            <div class="tab-content">
                                <div id="camera" class="tab-pane fade in active">
                                    <table class="table table-striped">
                                        <thead>
                                            <th></th>
                                            <th>ID</th>
                                            <th>Image</th>
                                            <th>Brand</th>
                                            <th>Model</th>
                                            <th>Type</th>
                                            <th>Camera Type</th>
                                            <th>POE</th>
                                            <th>Specs</th>
                                            <th>Lens</th>
                                            <th>Price</th>
                                            <th></th>
                                            <th></th>
                                        </thead>
                                        <tbody>
                                            <?php 
                                                $sql = "SELECT * FROM camera";
                                                $result = mysqli_query($conn,$sql);
                                                if(mysqli_num_rows($result)>0)
                                                {
                                                    while($row=mysqli_fetch_array($result))
                                                    {
                                            ?>
                                            <td><input type="checkbox" name="checkbox[]" class="form-control" id="checkbox[]"></td>
                                            <td><?php echo $row['id']; ?></td>
                                            <td><?php echo "<img src=images/camera/".$row['image'].">" ?></td>
                                            <td><?php echo $row['brand']; ?></td>
                                            <td><?php echo $row['model']; ?></td>
                                            <td><?php echo $row['type']; ?></td>
                                            <td><?php echo $row['c-type']; ?></td>
                                            <td><?php echo $row['poe']; ?></td>
                                            <td><?php echo $row['specs']; ?></td>
                                            <td><?php echo $row['lens']; ?></td>
                                            <td><?php echo $row['price']; ?></td>
                                            <td><a href="#">Edit Item</a></td>
                                            <td><a href="#">Add Item to Quotation</td>
                                            <?php   }
                                                }   ?>
                                        </tbody>
                                    </table>
                                </div>
                            

                            
                                <div id="recorder" class="tab-pane fade">
                                    <table class="table table-striped">
                                        <thead>
                                            <th></th>
                                            <th>ID</th>
                                            <th>Image</th>
                                            <th>Brand</th>
                                            <th>Model</th>
                                            <th>Name</th>
                                            <th>Type</th>
                                            <th>POE</th>
                                            <th>Specs</th>
                                            <th>Ports</th>
                                            <th>Price</th>
                                            <th></th>
                                            <th></th>
                                        </thead>
                                        <tbody>
                                            <?php 
                                                $sql = "SELECT * FROM recorder";
                                                $result = mysqli_query($conn,$sql);
                                                if(mysqli_num_rows($result)>0)
                                                {
                                                    while($row=mysqli_fetch_array($result))
                                                    {
                                            ?>
                                            <td><input type="checkbox" class="form-control" id="checkbox[]" name="checkbox[]"></td>
                                            <td><?php echo $row['id']; ?></td>
                                            <td><?php echo "<img src=images/recorder/".$row['image'].">"?></td>
                                            <td><?php echo $row['brand']; ?></td>
                                            <td><?php echo $row['model']; ?></td>
                                            <td><?php echo $row['name']; ?></td>
                                            <td><?php echo $row['type']; ?></td>
                                            <td><?php echo $row['poe']; ?></td>
                                            <td><?php echo $row['specs']; ?></td>
                                            <td><?php echo $row['ports']; ?></td>
                                            <td><?php echo $row['price']; ?></td>
                                            <td><a href="#">Edit Item</a></td>
                                            <td><a href="#">Add Item to Quotation</td>
                                            <?php   }
                                                }   ?>
                                        </tbody>
                                    </table>
                                </div>

                                <div id="accessories" class="tab-pane fade">
                                    <table class="table table-striped">
                                        <thead>
                                            <th></th>
                                            <th>ID</th>
                                            <th>Image</th>
                                            <th>Brand</th>
                                            <th>Model</th>
                                            <th>Name</th>
                                            <th>Price</th>
                                            <th></th>
                                            <th></th>
                                        </thead>
                                        <tbody>
                                            <?php 
                                                $sql = "SELECT * FROM accessories";
                                                $result = mysqli_query($conn,$sql);
                                                if(mysqli_num_rows($result)>0)
                                                {
                                                    while($row=mysqli_fetch_array($result))
                                                    {
                                            ?>
                                            <td><input type="checkbox" class="form-control" id="checkbox[]" name="checkbox[]"></td>
                                            <td><?php echo $row['id']; ?></td>
                                            <td><?php echo "<img src=images/accessories/".$row['image'] .">" ?></td>
                                            <td><?php echo $row['brand']; ?></td>
                                            <td><?php echo $row['model']; ?></td>
                                            <td><?php echo $row['name']; ?></td>
                                            <td><?php echo $row['price']; ?></td>
                                            <td><a href="#">Edit Item</a></td>
                                            <td><a href="#">Add Item to Quotation</td>
                                            <?php   }
                                                }   ?>
                                        </tbody>
                                    </table>
                                </div>

                                <div id="cable" class="tab-pane fade">
                                    <table class="table table-striped">
                                        <thead>
                                           
                                            <th></th>
                                            <th>ID</th>
                                            <th>Image</th>
                                            <th>Brand</th>
                                            <th>Model</th>
                                            <th>Name</th>
                                            <th>Type</th>
                                            <th>Price</th>
                                            <th></th>
                                            <th></th>
                                            
                                        </thead>
                                        <tbody>
                                             <?php 
                                                $sql = "SELECT * FROM cable";
                                                $result = mysqli_query($conn,$sql);
                                                if(mysqli_num_rows($result)>0)
                                                {
                                                    while($row=mysqli_fetch_array($result))
                                                    {
                                            ?>
                                            <td><input type="checkbox" class="form-control" id="checkbox[]" name="checkbox[]"></td>
                                            <td><?php echo $row['id']; ?></td>
                                            <td><?php echo "<img src=images/cable/".$row['image'].">"?></th>
                                            <td><?php echo $row['brand']; ?></td>
                                            <td><?php echo $row['model']; ?></td>
                                            <td><?php echo $row['name']; ?></td>
                                            <td><?php echo $row['type']; ?></td>
                                            <td><?php echo $row['price']; ?></td>
                                            <td><a href="#">Edit Item</a></td>
                                            <td><a href="#">Add Item to Quotation</td>
                                            <?php   }
                                                }   ?>
                                        </tbody>
                                     </table>
                                </div>

                                <div id="switch" class="tab-pane fade">
                                    <table class="table table-striped">
                                        <thead>
                                            <th></th>
                                            <th>ID</th>
                                            <th>Image</th>
                                            <th>Brand</th>
                                            <th>Model</th>
                                            <th>Name</th>
                                            <th>Ports</th>
                                            <th>Price</th>
                                            <th></th>
                                            <th></th>
                                        </thead>
                                        <tbody>
                                            <?php 
                                                $sql = "SELECT * FROM switch";
                                                $result = mysqli_query($conn,$sql);
                                                if(mysqli_num_rows($result)>0)
                                                {
                                                    while($row=mysqli_fetch_array($result))
                                                    {
                                            ?>
                                            <td><input type="checkbox" class="form-control" id="checkbox[]" name="checkbox[]"></td>
                                            <td><?php echo $row['id']; ?></td>
                                            <td><?php echo "<img src=images/switch/".$row['image'].">"?></td>
                                            <td><?php echo $row['brand']; ?></td>
                                            <td><?php echo $row['model']; ?></td>
                                            <td><?php echo $row['name']; ?></td>
                                            <td><?php echo $row['ports']; ?></td>
                                            <td><?php echo $row['price']; ?></td>
                                            <td><a href="#">Edit Item</a></td>
                                            <td><a href="#">Add Item to Quotation</td>
                                            <?php   }
                                                }   ?>
                                        </tbody>
                                    </table>
                                </div>

                                <div id="wireless" class="tab-pane fade">
                                    <table class="table table-striped">
                                        <thead>
                                            <th></th>
                                            <th>ID</th>
                                            <th>Image</th>
                                            <th>Brand</th>
                                            <th>Model</th>
                                            <th>Name</th>
                                            <th>Frequency</th>
                                            <th>Speed</th>
                                            <th>Price</th>
                                            <th></th>
                                            <th></th>
                                        </thead>
                                        <tbody>
                                            <?php 
                                                $sql = "SELECT * FROM wireless";
                                                $result = mysqli_query($conn,$sql);
                                                if(mysqli_num_rows($result)>0)
                                                {
                                                    while($row=mysqli_fetch_array($result))
                                                    {
                                            ?>
                                            <td><input type="checkbox" class="form-control" id="checkbox[]" name="checkbox[]"></td>
                                            <td><?php echo $row['id']; ?></td>
                                            <td><?php echo "<img src=images/wireless/".$row['image'].">"?></td>
                                            <td><?php echo $row['brand']; ?></td>
                                            <td><?php echo $row['model']; ?></td>
                                            <td><?php echo $row['name']; ?></td>
                                            <td><?php echo $row['frequency']; ?></td>
                                            <td><?php echo $row['speed']; ?></td>
                                            <td><?php echo $row['price']; ?></td>
                                            <td><a href="#">Edit Item</a></td>
                                            <td><a href="#">Add Item to Quotation</td>
                                            <?php   }
                                                }   ?>
                                        </tbody>
                                    </table>
                                </div>

                                <div id="router" class="tab-pane fade">
                                    <table class="table table-striped">
                                        <thead>
                                            <th></th>
                                            <th>ID</th>
                                            <th>Image</th>
                                            <th>Brand</th>
                                            <th>Model</th>
                                            <th>Name</th>
                                            <th>Capability</th>
                                            <th>Price</th>
                                            <th></th>
                                            <th></th>
                                        </thead>
                                        <tbody>
                                            <?php 
                                                $sql = "SELECT * FROM router";
                                                $result = mysqli_query($conn,$sql);
                                                if(mysqli_num_rows($result)>0)
                                                {
                                                    while($row=mysqli_fetch_array($result))
                                                    {
                                            ?>
                                            <td><input type="checkbox" class="form-control" id="checkbox[]" name="checkbox[]"></td>
                                            <td><?php echo $row['id']; ?></td>
                                            <td><?php echo "<img src=images/router/".$row['image'].">"?></td>
                                            <td><?php echo $row['brand']; ?></td>
                                            <td><?php echo $row['model']; ?></td>
                                            <td><?php echo $row['name']; ?></td>
                                            <td><?php echo $row['wireless-capability']; ?></td>
                                            <td><?php echo $row['price']; ?></td>
                                            <td><a href="#">Edit Item</a></td>
                                            <td><a href="#">Add Item to Quotation</td>
                                            <?php   }
                                                }   ?>
                                        </tbody>
                                    </table>
                                </div>

                                <div id="power" class="tab-pane fade">
                                    <table class="table table-striped">
                                        <thead>
                                            <th></th>
                                            <th>ID</th>
                                            <th>Image</th>
                                            <th>Brand</th>
                                            <th>Model</th>
                                            <th>Name</th>
                                            <th>Channels</th>
                                            <th>Price</th>
                                            <th></th>
                                            <th></th>
                                        </thead>
                                        <tbody>
                                            <?php 
                                                $sql = "SELECT * FROM power";
                                                $result = mysqli_query($conn,$sql);
                                                if(mysqli_num_rows($result)>0)
                                                {
                                                    while($row=mysqli_fetch_array($result))
                                                    {
                                            ?>
                                            <td><input type="checkbox" class="form-control" id="checkbox[]" name="checkbox[]"></td>
                                            <td><?php echo $row['id']; ?></td>
                                            <td><?php echo "<img src=images/router/".$row['image'].">"?></td>
                                            <td><?php echo $row['brand']; ?></td>
                                            <td><?php echo $row['model']; ?></td>
                                            <td><?php echo $row['name']; ?></td>
                                            <td><?php echo $row['channels']; ?></td>
                                            <td><?php echo $row['price']; ?></td>
                                            <td><a href="#">Edit Item</a></td>
                                            <td><a href="#">Add Item to Quotation</td>
                                            <?php   }
                                                }   ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div> <!--End Of Tab Content-->
                        </div>
                    </div><!--End Of Tab Card-->
                    <button type="button" class="btn btn-primary" id="add-item" data-toggle="modal" data-target=".bs-example-modal-lg">Add Item</button>
                    <button type="button" class="btn btn-error" id="delete-item">Delete Item</button>
                </div>
            </div>
        </div>


        <footer class="footer">
            <div class="container-fluid">
                <nav class="pull-left">
                    <ul>

                        <li>
                            <a href="http://www.creative-tim.com">
                                Creative Tim
                            </a>
                        </li>
                        <li>
                            <a href="http://blog.creative-tim.com">
                               Blog
                            </a>
                        </li>
                        <li>
                            <a href="http://www.creative-tim.com/license">
                                Licenses
                            </a>
                        </li>
                    </ul>
                </nav>
                <div class="copyright pull-right">
                    &copy; <script>document.write(new Date().getFullYear())</script>, made with <i class="fa fa-heart heart"></i> by <a href="http://www.creative-tim.com">Creative Tim</a>
                </div>
            </div>
        </footer>

    </div>
</div>


</body>

    <!--   Core JS Files   -->
    <script src="assets/js/jquery-3.1.1.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

    <!--Custom JS-->
    <script src="assets/js/add-item.js" type="text/javascript"></script>
    <script src="assets/js/item-type.js" type="text/javascript"></script>

	<!--  Checkbox, Radio & Switch Plugins -->
	<script src="assets/js/bootstrap-checkbox-radio.js"></script>

	<!--  Charts Plugin -->
	<script src="assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="assets/js/bootstrap-notify.js"></script>


    <!-- Paper Dashboard Core javascript and methods for Demo purpose -->
	<script src="assets/js/paper-dashboard.js"></script>

	<!-- Paper Dashboard DEMO methods, don't include it in your project! -->
	<script src="assets/js/demo.js"></script>


</html>

