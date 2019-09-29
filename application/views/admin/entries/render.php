<div class="pmf-container" style="margin-left:auto; margin-right:auto; margin-top:30px;  min-height:800px; ">

	<div class="row" style="margin-left:30px; margin-right:30px;">
	   <div class="col-sm-12">
	      <?php if($this->session->flashdata('msg')) {?>
	                  
	          <?php if($this->session->flashdata('type') =='0') { ?>
	      
	          <div class="alert alert-danger">
	      
	          <?php } else {?>
	          <div class="alert alert-success">
	              <?php } ?>
	              <button type="button" class="close" data-dismiss="alert"><i class="fa fa-times"></i>
	              </button> <i class="fa fa-ban-circle"></i>
	              <?php echo $this->session->flashdata('msg');?>
	          </div>
	      <?php } ?>
	   </div>
	   
	</div>


	<!-- breadcrumb -->
	   <div class="row" style="margin-left:30px; margin-right:30px;">
	      <div class="col-sm-12">
	        <!-- .breadcrumb -->
	        <ul class="breadcrumb">
	          <li><a href="<?php echo site_url('admin/dashboard'); ?>"><i class="fa fa-home"></i> <?php echo ('Dashboard'); ?></a></li>
	          <li class='active'><a href="<?php echo site_url('admin/entries'); ?>"><i class="fa fa-list-ul"></i> <?php echo('Entries');?></a></li>
	          <li ><a href="#"><i class="fa fa-list-ul"></i> <?php $tmp = $this->uri->segment(4, 0); 
	          echo  my_section_name($tmp);
	          ?></a> </li>
	        </ul>
	              
	        </div>
	    </div> 
	    <!-- end breadcrumb -->

	   


	<div class="row" style="margin-left:30px; margin-right:30px;">
		<div class="col-sm-8">
		    <header class="panel-heading font-bold">Entry contents  
		    	

		    	
		    	</header>

		    <section class="panel">

		    	
		        
		        
		        
		        <div class="panel-body">

		        		<div class="row" >
                        
                        <div class="col-sm-12">

                           <!-- <div id="standalone-container">
								  <div id="toolbar-container">
								    <span class="ql-formats">
								      
								      <select class="ql-size"></select>
								    </span>
								    <span class="ql-formats">
								      <button class="ql-bold"></button>
								      <button class="ql-italic"></button>
								      <button class="ql-underline"></button>
								      <button class="ql-strike"></button>
								    </span>
								    <span class="ql-formats">
								      <select class="ql-color"></select>
								      <select class="ql-background"></select>
								    </span>
								    
								    <span class="ql-formats">
								      <button class="ql-header" value="1"></button>
								      <button class="ql-header" value="2"></button>
								      <button class="ql-blockquote"></button>
								      <button class="ql-code-block"></button>
								    </span>
								    <span class="ql-formats">
								      <button class="ql-list" value="ordered"></button>
								      <button class="ql-list" value="bullet"></button>
								      <button class="ql-indent" value="-1"></button>
								      <button class="ql-indent" value="+1"></button>
								    </span>
								    <span class="ql-formats">
								      
								      <select class="ql-align"></select>
								    </span>
								    <span class="ql-formats">
								      <button class="ql-link"></button>
								      

								    </span>
								    <span class="ql-formats">
								      <button class="ql-clean"></button>
								      <button>fds</button>
								    </span>
								  </div>
								  <div id="editor-container"></div>
								</div> -->


                        	<!-- existing assets -->
                        	<div class="existing-assets" id='hidden-upload' style="display:none;">
                        		<div class="close btn" id="a-close">&times;</div>
                        		<form  action="<?php echo site_url("admin/asset_files/add_from_lib"); ?>" method="post" enctype="multipart/form-data">
                        		

	                        	<input type="text" name="entryid2" id="entryid2" value="<?php echo $entryid; ?>" style="display:none;"/>
	                          	<input type="text" name="fieldname2" id="fieldname2" value="" style="display:none;"/>
	                          	<input type="text" name="sectionid2" id="sectionid2" value="<?php echo $sectionid; ?>" style="display:none;"/>
	                        	

	                        	<!-- show the image lib -->
	                        	<?php foreach ($query3->result() as $key): ?>

				                  <div class="one-asset">

				                     <img class="img-responsive my-center" src="<?=$key->thumb ?>" alt="image" />

				                    

				                    <div class="">
				                         <input  class="m-l"   type="checkbox" name="chosen[]" value="<?= $key->id; ?>" /> <strong>Add</strong>
				                    </div>
				               
				                  


				                  </div>
				              		<?php endforeach; ?>

				              	<div class="clearfix"></div>
				              	<button type="submit" class="btn btn-purplet btn-s-xs " id="">
				              		    <i class="fa fa-plus"></i> <strong>add</strong>
				              	</button>
				              	
				              	
				              	
				              </form>

                        	</div>

                        	<!-- end existing assets -->
                        </div>
                    </div>
                        	
                        	
                        	
                        		
                        <div class="row" >
                        
                        <div class="col-sm-12">	

                        	

                        	<!-- upload new file -->

                        	<div class="new-file" id='hidden-upload2' style="display:none;">
                        		<div class="close btn" id="m-close">&times;</div>
                        		<?php $atts = array( 'data-validate'=>'parsley'); 
                                  echo form_open_multipart('admin/asset_files/do_upload',$atts); ?>
                  
                          
		                          <div class="form-group">
		                                      
		                          		<input type="text" name="entryid" id="entryid" value="<?php echo $entryid; ?>" style="display:none;"/>
		                          		<input type="text" name="fieldname" id="fieldname" value="" style="display:none;"/>
		                          		<input type="text" name="sectionid" id="sectionid" value="<?php echo $sectionid; ?>" style="display:none;"/>

		                                <label >Upload Image:</label>
		                                
		                                
		                                <input type="file" name="userfile" size="20" data-toggle="tooltip" data-placement="right" title=""/>

		                                <button  type="submit" class="btn btn-purplet btn-s-xs m-t" id="">
		                                <i class="fa fa-plus"></i> <strong>Upload New Image</strong></button>
		                            <?php echo form_close(); ?>
		                              
		                           </div>
                        	</div>
                        	<!-- end upload new file -->
                        </div>
                    </div>

                      

                    <?php $atts= array( 'data-validate'=>'parsley'); echo form_open_multipart("admin/entries/save_content/$sectionid/$entryid",$atts); ?>
		        	<!-- rich text editor -->
		        		  <div id="r-editor" style="display:none;">
                             <div class="form-group"> 
                              <div class="close btn" id="rich-close">&times;</div>
                              
                              	<div class="btn-toolbar m-b-sm btn-editor" data-role="editor-toolbar" data-target="#editor">  
                                
                                
                                  <div class="btn-group"> 
                                    <a class="btn btn-white btn-sm btn-info" data-edit="bold" title="" data-original-title="Bold (Ctrl/Cmd+B)"><i class="fa fa-bold"></i></a>  
                                    <a class="btn btn-white btn-sm" data-edit="italic" title="" data-original-title="Italic (Ctrl/Cmd+I)"><i class="fa fa-italic"></i></a> 
                                      <a class="btn btn-white btn-sm" data-edit="strikethrough" title="" data-original-title="Strikethrough"><i class="fa fa-strikethrough"></i></a>
                                           <a class="btn btn-white btn-sm" data-edit="underline" title="" data-original-title="Underline (Ctrl/Cmd+U)"><i class="fa fa-underline"></i></a> 
                                  </div>
                                  <div class="btn-group"> <a class="btn btn-white btn-sm" data-edit="insertunorderedlist" title="" data-original-title="Bullet list"><i class="fa fa-list-ul"></i></a> 
                                   <a class="btn btn-white btn-sm" data-edit="insertorderedlist" title="" data-original-title="Number list"><i class="fa fa-list-ol"></i></a> 
                                      </div>
                                  <div class="btn-group"> <a class="btn btn-white btn-sm btn-info" data-edit="justifyleft" title="" data-original-title="Align Left (Ctrl/Cmd+L)"><i class="fa fa-align-left"></i></a> 
                                      <a class="btn btn-white btn-sm" data-edit="justifycenter" title="" data-original-title="Center (Ctrl/Cmd+E)"><i class="fa fa-align-center"></i>
                                      </a> <a class="btn btn-white btn-sm" data-edit="justifyright" title="" data-original-title="Align Right (Ctrl/Cmd+R)"><i class="fa fa-align-right"></i></a> 
                                      <a class="btn btn-white btn-sm" data-edit="justifyfull" title="" data-original-title="Justify (Ctrl/Cmd+J)"><i class="fa fa-align-justify"></i>
                                      </a>
                                  </div>
                                  <div class="btn-group"> <a class="btn btn-white btn-sm dropdown-toggle" data-toggle="dropdown" title="" data-original-title="Hyperlink"><i class="fa fa-link"></i></a> 
                                      <div class="dropdown-menu">
                                          <div class="input-group m-l-xs m-r-xs">
                                              <input class="form-control input-sm" placeholder="URL" type="text" data-edit="createLink">
                                              <div class="input-group-btn">
                                                  <button class="btn btn-white btn-sm" type="button">Add</button>
                                              </div>
                                          </div>
                                      </div> <a class="btn btn-white btn-sm" data-edit="unlink" title="" data-original-title="Remove Hyperlink"><i class="fa fa-cut"></i></a> 
                                  </div>
                                  <div class="btn-group"> <a class="btn btn-white btn-sm" data-edit="undo" title="" data-original-title="Undo (Ctrl/Cmd+Z)"><i class="fa fa-undo"></i></a>  <a class="btn btn-white btn-sm" data-edit="redo" title="" data-original-title="Redo (Ctrl/Cmd+Y)"><i class="fa fa-repeat"></i></a> 
                                  </div>
                                  </div>


                                   <!-- test for code view -->
                                  <div class="btn-group">
                                        <div id="r-formatting" class="btn btn-white btn-sm"><strong>Code View</strong></div>
                                  </div>
                       


                                  <div id="editor" class="form-control" style="overflow:scroll;height:250px;max-height:250px" contenteditable="true"> <?php //echo $content; ?> </div>


                              </div> 
                             <!-- end rich text editor -->

                             <div class="form-group">
		        	   			<div  class="btn btn-purplet btn-s-xs pull-right" id="r-edit"><strong>Edit</strong></div>
		        	   
		        			</div>
		        		</div>

		        		<!-- if entry type is multiple -->
		        		
		        		<?php if( $type == "Multiple") {?>

		        		<?php $cont = my_field_content($entryid,'entrytitle'); ?>
		        		<div class="form-group">
		        		    <label>Entry Title</label>
		        		    <div class="errors pull-left">*</div>
		        		    <input name="entrytitle" type="text"  class="form-control" placeholder="Type here" data-toggle="tooltip" data-placement="top"  value="<?php echo $cont; ?>">
		        		    <div class='errors'><?php echo form_error('entrytitle'); ?></div>
		        		</div>

		        		<?php } ?>


		        		<!-- end -->
		        		<div id="app">

                          <div id="box">

  <!-- <div id="items">
    <template v-for="item in items" >
      <div class="itemc">{{ item.title }}</div>
    </template>
  </div>
  <div><button v-on:click.stop.prevent="addItem">Add item</button></div>
  <pre>{{ items }}</pre>
</div> -->

		        		{{todos}}


                       
                        
                       
		        		<br/>
		        		<div id="items">
		        		 <div class="m-list" v-for="todo in todos">
		        		 	<div class="m-del" @click="deleteItem(todo)"><i class="fa fa-trash-o"></i></div>
		        		 	<div v-for="x in todo.length">
			                    <div v-if="todo[x-1].type=='plain-text'">
			                    	<div class="form-group">
			                    	    <label>{{todo[x-1].title}}</label>
			                    	    <div class="igs-small"></div>
			                    	    <input v-model="todo[x-1].value" type="text"  class="form-control" placeholder="Type here" data-toggle="tooltip" data-placement="top"  value="">
			                    	</div>
			                    </div>


			                        
			                    <div v-if="todo[x-1].type=='multi-line'">
			                    	<div class="form-group">
			                    	    <label>{{todo[x-1].title}}</label>
			                    	    <textarea v-model="todo[x-1].value"  class="form-control" rows="5"  data-required="true" placeholder="Type here" data-toggle="tooltip" data-placement="top" title=""></textarea>
			                    	
			                    	</div>

			                        
			                    </div>
			                    <div v-if="todo[x-1].type=='rich-text'">
			                        <textarea v-model="todo[x-1].value" name="" rows="4"></textarea>
			                    </div>
			                    <div v-if="todo[x-1].type=='drop-down'">
			                        <select name="" id="" v-model="todo[x-1].value">
			                            <option v-for="y in todo[x-1].variations.length" :value="todo[x-1].variations[y-1]"> {{todo[x-1].variations[y-1]}} </option>
			                        </select>
			                    </div>

			                    <div v-if="todo[x-1].type=='check-box'">
			                    	<div v-for="y in todo[x-1].variations.length">
			                        <input  type="radio" name="" :value="todo[x-1].variations[y-1]" /> {{todo[x-1].variations[y-1]}} 
			                    	</div>
			                    </div>
			                  </div>
			                  
            			 </div>
            			</div>


			        	<?php foreach ($query->result() as $row): ?>

			        		<?php  $f_name = my_field_name($row->fieldid); ?>

			        		 <?php $err = form_error($f_name); ?>


			        		<?php echo my_field_show($row->fieldid,$entryid,$err); ?>

			        		
			        	<?php endforeach; ?>

			        	</div>


		        	<div class="form-group">
		        	   <button type="submit" class="btn btn-purplet btn-s-xs pull-right" id="save"><strong>Save</strong></button>
		        	   
		        	</div>
		        	<?php echo form_close(); ?>
		        </div>
		    </section>
		</div>

		<?php if(my_is_global($sectionid)) { ?>

		<div class="col-sm-4">
		    <header class="panel-heading font-bold">Global Variables
		    	<div class="pull-right btn btn-sm  btn-info btn-rounded" data-toggle="popover" data-html="true" data-placement="top" data-content="Global Variables" title="" data-original-title="<button type=&quot;button&quot; class=&quot;close pull-right&quot; data-dismiss=&quot;popover&quot;>×</button>Info"> <i class="fa fa-question"></i> <strong></strong> 
		       	 </div>
		    </header>
		    <section class="panel">
		        
		        <div class="panel-body">

		        	These can be accessed <strong>ANYWHERE</strong> in your template files. To use them use the following syntax:

		        	<pre><?php echo my_html_escape('<?= $globalname["fieldHandle"] ?>'); ?>

		        	</pre>

		        </div>
		    </section>
		</div>
		


		

	   <?php } else { ?>

		<div class="col-sm-4">
		    <header class="panel-heading font-bold">Utilities</header>
		    <section class="panel">
		        
		        <div class="panel-body">
		        	<div class="form-group">

		        		
		        		<?php my_friendly_url("admin/test_twig/display/$entryid/$sectionid"); ?>

		        	    <a href="<?php echo site_url(my_friendly_url("admin/test_twig/display/$entryid/$sectionid")); ?>" 
		        	    	target="_blank"
		        	    	class="btn btn-purplet  btn-block">
			        		<i class="fa fa-eye"></i> 
			        		<strong>Preview Page?</strong>
		        		</a>
		        		
		        	</div>

		        	<div class="form-group">
		        	    
		        		<div class="btn btn-sm  btn-danger btn-rounded" data-toggle="popover" data-html="true" data-placement="top" data-content="Click this link if you want the ignitedCMS engine to auto generate the template files including sub directories. <strong>Warning this will overwrite any existing templates you have created for this entry type!!</strong>" title="" data-original-title='<button type="button" class="close pull-right" data-dismiss="popover">&times;</button>Info'> <i class="fa fa-question"></i> <strong></strong> 
		        		                </div>
		        		   <a href="<?php echo site_url("admin/test_twig/gen_template/$sectionid/$entryid"); ?>" >
			        		
			        		<strong>Auto Generate front end template syntax?</strong>
		        		</a>
		        	</div>
		        	
		        </div>
		    </section>
		</div>
		<?php } ?>
		
	</div>




</div>

