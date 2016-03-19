
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NCC Recruitment Portal</title>

    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/bootstrap/css/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/local.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/custom.css" />

    <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/bootstrap/js/bootstrap.min.js"></script>

    <!-- you need to include the shieldui css and js assets in order for the charts to work -->
    <link rel="stylesheet" type="text/css" href="https://www.shieldui.com/shared/components/latest/css/light-bootstrap/all.min.css" />
    <script type="text/javascript" src="https://www.shieldui.com/shared/components/latest/js/shieldui-all.min.js"></script>
    <script type="text/javascript" src="https://www.prepbootstrap.com/Content/js/gridData.js"></script>
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">            
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<a href="<?php echo Yii::app()->createUrl('/'); ?>">Admin Panel</a>
            </div>
            <div class="collapse navbar-collapse navbar-ex1-collapse">
		
		<div class="logopanel">
        <h1><span><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/logo.png"/>NCC</span></h1>
      </div>

                
                
                
                
                
                
                
    <nav class="navbar navbar-default sidebar nav navbar-nav side-nav" role="navigation">
    <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-sidebar-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>      
    </div>
    <div class="collapse navbar-collapse" id="bs-sidebar-navbar-collapse-1">
      <ul class="nav navbar-nav side">
        <li class="active"><a href="<?php echo Yii::app()->createUrl('/'); ?>">Home<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-home"></span></a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Users <span class="caret"></span><span style="font-size:16px;" class="pull-right fa fa-users"></span></a>
          <ul class="dropdown-menu forAnimate" role="menu">
             <li><a href="<?php echo Yii::app()->createUrl('groups/admin'); ?>">Groups</a></li>
             <li><a href="<?php echo Yii::app()->createUrl('users/admin'); ?>">System Users</a></li>
             <li><a href="<?php echo Yii::app()->createUrl('users/admin'); ?>">Group Permissions</a></li>
                         
          </ul>
        </li>
        
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">County Ministries <span class="caret"></span><span style="font-size:16px;" class="pull-right fa fa-bank"></span></a>
          <ul class="dropdown-menu forAnimate" role="menu">
            <li><a href="<?php echo Yii::app()->createUrl('users/admin'); ?>">Create Ministries</a></li>
             <li><a href="<?php echo Yii::app()->createUrl('users/admin'); ?>">Ministries</a></li>
             <li><a href="<?php echo Yii::app()->createUrl('users/admin'); ?>">Org Structure</a></li>
          </ul>
        </li> 
        
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Job Groups <span class="caret"></span><span style="font-size:16px;" class="pull-right fa fa-cubes"></span></a>
          <ul class="dropdown-menu forAnimate" role="menu">
            <li><a href="<?php echo Yii::app()->createUrl('users/admin'); ?>">Create Job Group</a></li>
             <li><a href="<?php echo Yii::app()->createUrl('users/admin'); ?>">Job Groups</a></li>
          </ul>
        </li> 
        
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Job Positions <span class="caret"></span><span style="font-size:16px;" class="pull-right fa fa-2x fa fa-binoculars"></span></a>
          <ul class="dropdown-menu forAnimate" role="menu">
            <li><a href="<?php echo Yii::app()->createUrl('users/admin'); ?>">Create Job Position</a></li>
             <li><a href="<?php echo Yii::app()->createUrl('users/admin'); ?>">Job Positions</a></li>
          </ul>
        </li>
        
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Vacancies <span class="caret"></span><span style="font-size:16px;" class="pull-right fa fa-envelope"></span></a>
          <ul class="dropdown-menu forAnimate" role="menu">
            <li><a href="<?php echo Yii::app()->createUrl('users/admin'); ?>">Create Vacancy</a></li>
            <li><a href="<?php echo Yii::app()->createUrl('users/admin'); ?>">Vacancies</a></li>
             li><a href="<?php echo Yii::app()->createUrl('users/admin'); ?>">Job Applicants</a></li>
          </ul>
        </li>
        
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Employees <span class="caret"></span><span style="font-size:16px;" class="pull-right fa fa-users"></span></a>
          <ul class="dropdown-menu forAnimate" role="menu">
           <li><a href="<?php echo Yii::app()->createUrl('users/admin'); ?>">Create Employee</a></li>
            <li><a href="<?php echo Yii::app()->createUrl('users/admin'); ?>">Employees</a></li>
             <li><a href="<?php echo Yii::app()->createUrl('users/admin'); ?>">Discipline Incidents</a></li>
            <li><a href="<?php echo Yii::app()->createUrl('users/admin'); ?>">Discipline Incident Types</a></li>
             <li><a href="<?php echo Yii::app()->createUrl('users/admin'); ?>">Disciplinary Actions</a></li>
            <li><a href="<?php echo Yii::app()->createUrl('users/admin'); ?>">Document Types</a></li>
          </ul>
        </li>                          
        
                    
       </ul>
    </div>
  </div>
</nav>
                
                
                
                
                
                
                
                
                
                
                
                <ul class="nav navbar-nav navbar-right navbar-user">
                    <li class="dropdown messages-dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i> Messages <span class="badge">2</span> <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-header">2 New Messages</li>
                            <li class="message-preview">
                                <a href="#">
                                    <span class="avatar"><i class="fa fa-bell"></i></span>
                                    <span class="message">Security alert</span>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li class="message-preview">
                                <a href="#">
                                    <span class="avatar"><i class="fa fa-bell"></i></span>
                                    <span class="message">Security alert</span>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li><a href="#">Go to Inbox <span class="badge">2</span></a></li>
                        </ul>
                    </li>
                    <li class="dropdown user-dropdown">
                       <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Steve Miller<b class="caret"></b></a>
                       <ul class="dropdown-menu">
                           <li><a href="#"><i class="fa fa-user"></i> Profile</a></li>
                           <li><a href="#"><i class="fa fa-gear"></i> Settings</a></li>
                           <li class="divider"></li>
                           <li><a href="#"><i class="fa fa-power-off"></i> Log Out</a></li>
                       </ul>
                   </li>
                </ul>
            </div>
        </nav>

        <div id="page-wrapper">
           <?php echo $content; ?>
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->

    <!--
        This section initializes the chart widgets and a grid component, 
        which visualize records and allow sorting and paging. 
        For more information visit: 
        http://www.shieldui.com/documentation/javascript.chart/getting.started
        http://www.shieldui.com/documentation/grid/javascript/getting.started
        http://www.shieldui.com/documentation/datasource/javascript/getting.started
    -->
    <script type="text/javascript">
        jQuery(function ($) {
            var performance = [12, 43, 34, 22, 12, 33, 4, 17, 22, 34, 54, 67],
                visits = [123, 323, 443, 32],
                budget = [23, 19, 11, 134, 242, 352, 435, 22, 637, 445, 555, 57],
                sales = [11, 9, 31, 34, 42, 52, 35, 22, 37, 45, 55, 57];

            $("#shieldui-chart1").shieldChart({
                primaryHeader: {
                    text: "Visitors"
                },
                exportOptions: {
                    image: false,
                    print: false
                },
                dataSeries: [{
                    seriesType: "area",
                    collectionAlias: "Q Data",
                    data: performance
                }]
            });

            $("#shieldui-chart2").shieldChart({
                primaryHeader: {
                    text: "Logins Per week"
                },
                exportOptions: {
                    image: false,
                    print: false
                },
                seriesSettings: {
                    donut: {
                        enablePointSelection: true
                    }
                },
                dataSeries: [{
                    seriesType: "donut",
                    collectionAlias: "logins",
                    data: visits
                }]
            });

            $("#shieldui-chart3").shieldChart({
                primaryHeader: {
                    text: "Budget"
                },
                dataSeries: [{
                    seriesType: "line",
                    collectionAlias: "Budget",
                    data: budget
                }]
            });

            $("#shieldui-chart4").shieldChart({
                primaryHeader: {
                    text: "Sales"
                },
                dataSeries: [{
                    seriesType: "bar",
                    collectionAlias: "sales",
                    data: sales
                }]
            });

            $("#shieldui-grid1").shieldGrid({
                dataSource: {
                    data: gridData
                },
                sorting: {
                    multiple: true
                },
                paging: {
                    pageSize: 12,
                    pageLinksCount: 4
                },
                selection: {
                    type: "row",
                    multiple: true,
                    toggle: false
                },
                columns: [
                    { field: "id", width: "70px", title: "ID" },
                    { field: "name", title: "Person Name" },
                    { field: "company", title: "Company Name" },
                    { field: "email", title: "Email Address", width: "270px" }
                ]
            });
        });
    </script>
</body>
</html>