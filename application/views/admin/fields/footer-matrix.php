          
                    <?php $this->load->view('admin/footer-map'); ?>
                </section>        
            </section> 
        </section>
    </section>
    <!-- /.vbox -->
  </section>
  <!-- jquery -->
  <script src="<?php echo(base_url()."resources") ?>/js/jquery.min.js" type="text/javascript"></script>
  <script src="<?php echo(base_url()."resources") ?>/js/jquery-ui-1.10.3.custom.min.js" type="text/javascript"></script>
  <!-- Bootstrap -->
  <script src="<?php echo(base_url()."resources") ?>/js/bootstrap.js" type="text/javascript"></script>
  <!-- app -->
  <script src="<?php echo(base_url()."resources") ?>/js/app.js" type="text/javascript"></script>
  <script src="<?php echo(base_url()."resources") ?>/js/app.plugin.js" type="text/javascript"></script>
  <script src="<?php echo(base_url()."resources") ?>/js/app.data.js" type="text/javascript"></script>
  <!-- fuelux -->
  <script src="<?php echo(base_url()."resources") ?>/js/fuelux/fuelux.js" type="text/javascript"></script>
  <!-- datepicker -->
  <script src="<?php echo(base_url()."resources") ?>/js/datepicker/bootstrap-datepicker.js" type="text/javascript"></script>
  <!-- combodate -->
  <script src="<?php echo(base_url()."resources") ?>/js/libs/moment.min.js" type="text/javascript"></script>
  <script src="<?php echo(base_url()."resources") ?>/js/combodate/combodate.js" type="text/javascript"></script>

  <!-- parsley -->
  <script src="<?php echo(base_url()."resources") ?>/js/parsley/parsley.min.js" type="text/javascript"></script>
  <script src="<?php echo(base_url()."resources") ?>/js/parsley/parsley.extend.js" type="text/javascript"></script>

  
  <script src="<?php echo(base_url()."resources") ?>/js/jscolor/jscolor.js" type="text/javascript"></script>
  
  <!-- wysiwyg -->
  <script src="<?php echo(base_url()."resources") ?>/js/wysiwyg/jquery.hotkeys.js" type="text/javascript"></script>
  <script src="<?php echo(base_url()."resources") ?>/js/wysiwyg/bootstrap-wysiwyg.js" type="text/javascript" ></script>
  <script src="<?php echo(base_url()."resources") ?>/js/wysiwyg/demo.js" type="text/javascript"></script>
  <!-- markdown -->

  
    <!-- datatables -->
  <script src="<?php echo(base_url()."resources") ?>/js/datatables/jquery.dataTables.min.js" type="text/javascript"></script>


 <script type="text/javascript">

   var app = new Vue({
      el: '#app',
      data: {
          matrix_name:'matrixName',
          crselect: 'plain-text',
          fieldname:'',
          fieldlength:'0',
          filetype:'jpg|png|gif',
          variations: 'cat,dog,mouse',
          todos:
          [
           // {id:1,title:'text'},
           // {id:2,title:'textbox'}

          ],
      },
      methods:
      {
        //save as ajax to db
        save:function()
        {
            
          
         //var d = "";
         $.ajax({
            url: "<?php echo site_url('admin/field_builder/save_matrix') ?>",
            type: 'post',
            async:false,
            data: {data:this.todos, matrix_name:this.matrix_name},
            dataType: 'text',
            success: function (data) {
               
              // d = data
              alert(data);

                }
            });
            
            //use async = false to pass value back
            
            //this.todos = d;
                  
            // $('.m').each(function(idx,el){
            //     alert($(this).text());
            // })
            
        },





        someFunc:function()
        {
          

          if(this.crselect == 'plain-text')
          {
            this.todos.push(
                  {'type': 'plain-text',
                   'title': this.fieldname,
                   'length': this.fieldlength,
                   'variations': ''
                 });
          }

          if(this.crselect == 'multi-line')
          {
            this.todos.push(
                  {'type': 'multi-line',
                   'title': this.fieldname,
                   'length': '',
                   'variations': ''
                 });
          }

          if(this.crselect == 'rich-text')
          {
            this.todos.push(
                  {'type': 'rich-text',
                   'title': this.fieldname,
                   'length': '',
                   'variations': ''
                   
                 });
          }
          
          if(this.crselect == 'drop-down')
          {

            var array = this.variations.split(',');
            //var string = JSON.stringify(array);

            this.todos.push(
                  {'type': 'drop-down',
                   'title': this.fieldname,
                   'length': '',
                   'variations': array,
                   
                 });
          }

          if(this.crselect == 'check-box')
          {
            var array = this.variations.split(',');
            //var string = JSON.stringify(array);

            this.todos.push(
                  {'type': 'check-box',
                   'title': this.fieldname,
                   'length': '',
                   'variations': array
                   
                 });
          }

          if(this.crselect == 'color')
          {
            this.todos.push(
                  {'type': 'color',
                   'title': this.fieldname,
                   'length': '',
                   'variations': ''
                   
                 });
          }

          if(this.crselect == 'file-upload')
          {
            var array = this.filetype.split('|');
            this.todos.push(
                  {'type': 'file-upload',
                   'title': this.fieldname,
                   'length': '',
                   'variations': array
                   
                 });
          }
          if(this.crselect == 'number')
          {
            this.todos.push(
                  {'type': 'number',
                   'title': this.fieldname,
                   'length': this.fieldlength,
                   'variations': ''
                   
                 });
          }

          if(this.crselect == 'date')
          {
            this.todos.push(
                  {'type': 'date',
                   'title': this.fieldname,
                   'length': '',
                   'variations': ''
                   
                 });
          }
          if(this.crselect == 'switch')
          {
            this.todos.push(
                  {'type': 'switch',
                   'title': this.fieldname,
                   'length': '',
                   'variations': ''
                   
                 });
          }
          
         

          

           //clear text box
           this.fieldname = "";

           //alert(this.todos[0].title);
        },
        deleteItem:function(todo)
        {
            this.todos.splice(this.todos.indexOf(todo),1)
        },
      }
  })
   
    $(document).ready(function (event) {


    $('#example').dataTable( {
      "iDisplayLength" : 50
    });

      
        
    });
</script>
</body>
</html>