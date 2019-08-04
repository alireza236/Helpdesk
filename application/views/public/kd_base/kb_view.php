 
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Helpdesk</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="stylesheet" href="<?php  ?>" media="screen">
    <link href="<?= base_url('assets'); ?>/bootstrap-4.0/css/bootswatch.min.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url('assets'); ?>/bootstrap-4.0/css/bootstrap-grid.min.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url('assets'); ?>/bootstrap-4.0/custom.min.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url('assets'); ?>/css/typeahead.min.css" rel="stylesheet" type="text/css">
  </head>
  <body>
    <div class="navbar navbar-expand-lg fixed-top navbar-light bg-light">
      <div class="container">
        <a href="<?php echo site_url('public/dashboard') ?>" class="navbar-brand">Home</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav">
            <li class="nav-item dropdown">
               
            </li>
          </ul>

          <ul class="nav navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="#">Helpdesk</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#" target="_blank"> </a>
            </li>
          </ul>

        </div>
      </div>
    </div>
    


    <div class="container">

      <div class="page-header" id="banner">
        <div class="row">
          <div class="col-lg-8 col-md-7 col-sm-6">
            <h1>Help Center</h1>
            <p class="lead">Portal</p>
          </div>
          <span class="col-lg-4 col-md-5 col-sm-6"></span>
          <div class="col-lg-4 col-md-5 col-sm-6">
            <div class="sponsor">
              
            </div>
          </div>
        </div>
      </div>

   

         <div class="js-result-container"></div>

    <form class="form-horizontal" method="POST" action="">
        <div class="typeahead__container">
            <div class="typeahead__field">

            <span class="typeahead__query">
                <input class="js-typeahead form-control-lg"
                       name="tickets"
                       type="text"
                       autofocus
                       autocomplete="off" required>
            </span>
            <span class="typeahead__button">
                <button type="submit">
                    <span class="typeahead__search-icon"></span>
                </button>
            </span>

            </div>
        </div>
    </form>

    

      <footer id="footer">
        <div class="row">
          <div class="col-lg-12">
             <div class="container">
			  <div class="row">
			    
          <?php if (isset($tickets)): ?>
                    <div class="col-sm">
              <?php foreach ($tickets as $row): ?>
                    
                       <div class="card">
                       <div class="card-body">
                        <h4 class="card-title"><?php echo $row->problemsummary; ?></h4>
                        <h6 class="card-subtitle mb-2 text-muted"><?php echo $row->problemdetail; ?></h6>
                        <p class="card-text"><?php echo $row->namacustomer; ?></p>
                        <p class="card-text"><?php echo $row->ticketstatus; ?></p>
                        <a href="#" class="card-link"><?php echo $row->kategori_sla; ?></a>
                      </div>
                    </div>
               <?php endforeach; ?>
          			    </div>
          <?php endif ?>

        </div>
			</div>
             
           

          </div>
        </div>

      </footer>


    </div>


  <script type="text/javascript" src="<?= base_url('assets'); ?>/bootstrap-4.0/js/jquery.slim.js"></script>
	<script type="text/javascript" src="<?= base_url('assets'); ?>/bootstrap-4.0/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?= base_url('assets'); ?>/bootstrap-4.0/custom.min.js"></script>
	<script type="text/javascript" src="<?= base_url('assets'); ?>/js/plugins/forms/inputs/typeahead/typeahead.min.js"></script>
	<script type="text/javascript">
     
        typeof $.typeahead === 'function' && $.typeahead({
            input: ".js-typeahead",
            dynamic: false,
            minLength: 1,
            order: "asc",
            group: true,
            maxItemPerGroup: 3,
            groupOrder: function (node, query, result, resultCount, resultCountPerGroup) {

                var scope = this,
                    sortGroup = [];

                for (var i in result) {
                    sortGroup.push({
                        group: i,
                        length: result[i].length
                    });
                }

                sortGroup.sort(
                    scope.helper.sort(
                        ["length"],
                        false, // false = desc, the most results on top
                        function (a) {
                            return a.toString().toUpperCase()
                        }
                    )
                );

                return $.map(sortGroup, function (val, i) {
                    return val.group
                });
            },
            hint: false,
            dropdownFilter: "All",
            //href: "https://en.wikipedia.org/?title={{display}}",
             href: function(item){
               return  item.group + "/" + item.display + ".html"
             },
            template: "{{display}}, <small><em>{{group}}</em></small>",
            emptyTemplate: "Hasil untuk {{query}} tidak ditemukan",
            source: {
                    tickets: {
      		            ajax: {
      		                url: "  <?php echo base_url('public/knowledgebase/get_json') ?>",
      		                path: "tickets"
      		            }
        		        },
        		       
            },
            callback: {
                onClickAfter: function (node, a, item, event) {
                    event.preventDefault();
                    console.log(node);
                    console.log(a);
                    console.log(item);
                    console.log(event);

                    // var r = confirm("You will be redirected to:\n" + item.href + "\n\nContinue?");
                    // if (r == true) {
                    //     window.open(item.href);
                    // }

                    $('.js-result-container').text('');

                },
                onResult: function (node, query, obj, objCount) {

                    console.log(objCount)
                    var text = "";
                    if (query !== "") {
                        text = objCount + ' elements yang cocok "' + query + '"';
                    }
                    $('.js-result-container').text(text);

                }
            },
            debug: true
        });

    </script>
  </body>
</html>
