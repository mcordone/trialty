
      <footer class="templatemo-footer">
        <div class="templatemo-copyright">
          <p>Copyright &copy; 2017</p>
        </div>
      </footer>
    </div>
</div>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/templatemo_script.js"></script>
     
     <!--ESTE ES EL CODIGO DE LAS TABLAS -->  
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script type="text/javascript" src="datatables/js/prettify.js"></script>
    <script type="text/javascript" src="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="datatables/js/datatable.min.js"></script>

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

     <!--ESTE ES EL CODIGO DE LAS TABLAS -->  