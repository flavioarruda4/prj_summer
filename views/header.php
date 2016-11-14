<!DOCTYPE html>

<html>
    <head>
        <title>Summer OS</title>

        <meta content="text/html; charset=UTF-8" http-equiv="content-type" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <meta name="viewport" content="width=device-width,initial-scale=1" />

        <!-- Jquery -->
        <script src="/prj_summer/js/jquery.js"></script>

        <!-- Latest compiled and minified JavaScript -->

        <script src="/prj_summer/css/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>

        <script src="/prj_summer/js/jquery.dataTables.min.js"></script>

        <link rel="stylesheet" href="/prj_summer/css/bootstrap-3.3.7-dist/css/bootstrap.min.css">

        <link rel="stylesheet" href="/prj_summer/css/bootstrap-3.3.7-dist/fonts">

        <link rel="stylesheet" href="/prj_summer/css/dataTable.min.css">
        
        
        <link rel="stylesheet" href="/prj_summer/css/bootstrap-datepicker.min.css">

        <!-- Slider -->
        
        <script src="/prj_summer/js/jquery-ui.js"></script> 
        <link rel="stylesheet" href="/prj_summer/css/jquery-ui.min.css">
          
        <script>
            $( "#slider" ).slider({
                  range: true,
                  min: -10,
                  max: 10,
                  values: [ 2, 4 ],
                  slide: function( event, ui ) {
                    $( ".qtd" ).val( "" + ui.values[ 0 ] + " - " + ui.values[ 1 ] );
                  }
                });
                $( ".qtd" ).val( "" + $( "#slider" ).slider( "values", 0 ) +
                  " - " + $( "#slider" ).slider( "values", 1 ) );
        </script>        

        
        <!-- css style principal -->
        <link rel="stylesheet" href="/prj_summer/css/style.css">


        <link rel="stylesheet" href="/prj_summer/css/menu.css">

        <script src="/prj_summer/js/table.js"></script>
        
        <!-- Datepicker -->
        
        <script src="/prj_summer/js/bootstrap-datepicker.min.js"></script>
        <script src="/prj_summer/js/bootstrap-datepicker.pt-BR.min.js"></script>

        <script src="/prj_summer/js/ajax-render.js"></script>

    </head>
    <body>
        <div class="" id="wrapper">
            <header class="summer-header">
                <div class="wrapper container">
                    <div class="span12" id="heading">

                        <div class="container">
                            <div class="logo__img span6">
                                <a href=""><h1> Summer OS</h1></a>
                            </div>
                        </div>

                    </div>
                </div>
            </header>