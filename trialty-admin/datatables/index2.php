<!DOCTYPE html>
<html>

  <head>


    <link rel="stylesheet" type="text/css" media="screen" href="css/stylesheet.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/prettify.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/bootstrap-combined.min.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/datatable-bootstrap.min.css">
    
    <title>Datatable</title>
    
    <style>
    /* Prettify */
    li.L0, li.L1, li.L2, li.L3,
    li.L5, li.L6, li.L7, li.L8 { 
        list-style-type: decimal !important ;
    }
    
    .pagination li {
        padding-left: 0px;
    }
    
    .pagination li a {
    	cursor: pointer ;
    }
    
    .pagination li a:hover {
    	color: rgb(153, 153, 153);
	cursor: default;
    }
    </style>
  </head>

  <body>




<div class="paging"></div>
<table id="example-table">
    <thead>
        <tr>
            <th style="background-color: #373737 !important;">Firstname</th>
            <th style="background-color: #373737 !important; min-width: 90px ;">Lastname</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Linus</td>
            <td>Torvalds</td>
            <td>Computer Science</td>
        </tr>
        <tr>
            <td>Brian</td>
            <td>Kernighan</td>
            <td>Computer Science</td>
        </tr>
        <tr>
            <td>Blaise</td>
            <td>Pascal</td>
            <td>Mathematics</td>
        </tr>
        <tr>
            <td>Larry</td>
            <td>Page</td>
            <td>Computer Science</td>
        </tr>
        <tr>
            <td>Richard</td>
            <td>Hamming</td>
            <td>Mathematics</td>
        </tr>
        <tr>
            <td>Grace</td>
            <td>Hopper</td>
            <td>Computer Science</td>
        </tr>
        <tr>
            <td>Pierre</td>
            <td>Bezier</td>
            <td>Mathematics</td>
        </tr>
        <tr>
            <td>Shigeru</td>
            <td>Miyamoto</td>
            <td>Computer Science</td>
        </tr>
        <tr>
            <td>Leslie</td>
            <td>Lamport</td>
            <td>Computer Science</td>
        </tr>
        <tr>
            <td>Rasmus</td>
            <td>Lerdorf</td>
            <td>Computer Science</td>
        </tr>
        <tr>
            <td>Xavier</td>
            <td>Leroy</td>
            <td>Computer Science</td>
		</tr>
        <tr>
            <td>Albert</td>
            <td>Einstein</td>
            <td>Physics</td>
		</tr>
        <tr>
            <td>Bill</td>
            <td>Gates</td>
            <td>Computer Science</td>
		</tr>
        <tr>
            <td>Leonard</td>
            <td>De Vinci</td>
            <td>Mathematics</td>
		</tr>
        <tr>
            <td>Pierre</td>
            <td>De Fermat</td>
            <td>Mathematics</td>
		</tr>
        <tr>
            <td>René</td>
            <td>Descartes</td>
            <td>Mathematics</td>
		</tr>
        <tr>
            <td>Alan</td>
            <td>Turing</td>
            <td>Computer Science</td>
		</tr>
        <tr>
            <td>Ada</td>
            <td>Lovelace</td>
            <td>Computer Science</td>
		</tr>
        <tr>
            <td>Isaac</td>
            <td>Newton</td>
            <td>Physics</td>
		</tr>
        <tr>
            <td>Carl Friedrich</td>
            <td>Gauss</td>
            <td>Mathematics</td>
		</tr>
        <tr>
            <td>John</td>
            <td>Von Neumann</td>
            <td>Computer Science</td>
		</tr>
        <tr>
            <td>Claude</td>
            <td>Shannon</td>
            <td>Mathematics</td>
		</tr>
        <tr>
            <td>Tim</td>
            <td>Berners-Lee</td>
            <td>Computer Science</td>
		</tr>
        <tr>
            <td>Richard</td>
            <td>Stallman</td>
            <td>Computer Science</td>
		</tr>
        <tr>
            <td>Dennis</td>
            <td>Ritchie</td>
            <td>Computer Science</td>
		</tr>
        <tr>
            <td>Bjarne</td>
            <td>Stroustrup</td>
            <td>Computer Science</td>
		</tr>
        <tr>
            <td>Steve</td>
            <td>Jobs</td>
            <td>Computer Science</td>
		</tr>
    </tbody>
</table>
<div class="paging"></div>

    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script type="text/javascript" src="js/prettify.js"></script>
    <script type="text/javascript" src="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/datatable.min.js"></script>

    <script type="text/javascript">
    
        $('#example-table').datatable({
            pageSize: 5,
            sort: [true, true, false],
            filters: [true, false, 'select'],
            filterText: 'Type to filter... '
        }) ;
    
		$('#show-initial-table').click(function () {
            if ($('#code-initial-table').is(':visible')) {
                $('#code-initial-table').hide('slow') ;
                $(this).removeClass('btn-inverse')
                    .addClass('btn-primary')
                    .html('Show') ;
            }
            else {
                $('#code-initial-table').show('slow') ;
                $(this).removeClass('btn-primary')
                    .addClass('btn-inverse')
                    .html('Hide') ;
            }
        }) ;
        
        prettyPrint() ;
    
    </script>

  </body>
</html>
