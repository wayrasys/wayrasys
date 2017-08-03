<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Starter Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap-3.3.7/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="starter-template.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="js/model/usuario.js" type="text/javascript"></script>
  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Project name</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container">
        <div class="starter-template">
            <div id="socioView" style="display: none;" ></div>
            <div id="sociosView"></div>
        </div>
    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="jquery-3.2.1.min.js"></script>
    <script>window.jQuery || document.write('<script src="jquery-3.2.1.min.js"><\/script>')</script>
    <script src="bootstrap-3.3.7/js/bootstrap.min.js"></script>
    <script src="knockout-3.4.2.js"></script>
    
    <script id="usuariosTmpl" type="text/html">
            <div class="row">
                    <div class="col-lg-6">
                            <div class="input-group">
                                    <input data-bind="textInput: buscar" type="text" class="form-control" placeholder="Apellido Nombre..">
                                    <span class="input-group-btn">
                                            <button data-bind="click: nuevo" class="btn btn-default" type="button">
                                                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                                            </button>
                                    </span>
                            </div><!-- /input-group -->
                    </div><!-- /.col-lg-6 -->
            </div><!-- /.row -->
            <div class="row">
                    <div class="col-lg-6">
                            <table class="table table-hover">
                                    <thead>
                                            <tr>
                                                    <th >Documento</th>
                                                    <th >Socio</th>
                                                    <th >Mail</th>
                                                    <th></th><th></th>
                                            </tr>
                                    </thead>
                                    <tbody data-bind='foreach: filterUsuarios()'>
                                            <tr>
                                                    <td><span data-bind="text: documento "></span></td>
                                                    <td><span data-bind="text: apellido + ', ' + nombre"></span></td>
                                                    <td><span data-bind="text: email "></span></td>
                                                    <td><button class="btn btn-default" type="button">
                                                                    <span class="glyphicon glyphicon-usd" aria-hidden="true"></span>
                                                    </button></td>
                                                    <td><button class="btn btn-default" type="button">
                                                                    <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                                    </button></td>
                                            </tr>
                                    </tbody>
                            </table>
                    </div>
            </div>
    </script>
    
    <script id="usuarioTmpl" type="text/html">
        <form class="form-horizontal">
            <div class="form-group">
                <label class="col-sm-2 control-label">Apellido</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="Apellido">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">Nombre</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="Nombre">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">Email</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" placeholder="Email">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">Documento</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="Documento">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">Fecha Nacimiento</label>
                <div class="col-sm-10">
                    <input type="date" class="form-control" placeholder="Fecha Nacimiento">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">Dirección</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="Dirección">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">Celular</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="Celular">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">Teléno</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="Teléfono">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">Facebook</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="Facebook">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">Instagram</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="Instagram">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-default">Guardar</button>
                    <button type="submit" class="btn btn-default">Cancelar</button>
                </div>
            </div>
        </form>
    </script>
    
    <script type="text/javascript">
        $.ko_deserializeModel = function(model, data){
                for(var v in data){
                        if (model[v] !== undefined){
                                model[v]=data[v];
                        }
                }
        };
	
        var _socio = new usuarioView("#socioView");
        
        var _socios = new usuariosView("#sociosView");
        
        _socios.nuevo_click_handle(function(){
            $("#sociosView").hide();
            $("#socioView").show();
        });
    </script>
  </body>
</html>