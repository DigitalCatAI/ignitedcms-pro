
<div class="pmf-container" style="margin-left:auto; margin-right:auto; margin-top:30px; min-height:800px;  ">
    
    <!-- breadcrumb -->
       <div class="row" style="margin-left:30px; margin-right:30px;">
          <div class="col-sm-12">
            <!-- .breadcrumb -->
            <ul class="breadcrumb">
              <li><a href="<?php echo site_url('admin/dashboard'); ?>"><i class="fa fa-home"></i> <?php echo ('Dashboard'); ?></a></li>
              <li class='active'><a href="<?php echo site_url('admin/field_builder'); ?>"><i class="fa fa-list-ul"></i> <?php echo('Field Builder');?></a></li>
              <li> <a href="#">Add new field</a> </li>
              
            </ul>
                  
            </div>
        </div> 
        <!-- end breadcrumb -->

    <!-- <a href="<?php echo site_url('admin/field_builder/tryME') ?>">Try Me</a>
 -->

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


      <div id="app">
    <div class="row" style="margin-left:30px; margin-right:30px;">
       <div class="col-sm-12">
           <header class="panel-heading font-bold">Matrix Field builder</header>
           <section class="panel">
               
               <div class="panel-body">

                <div class="col-sm-3">
                    <div class="form-group">
                        <label>Matrix Field Name</label>
                        <div class="igs-small">What this field will be called in the control panel. (This MUST be unique and must not contain numbers or spaces.) 
You can NOT use the following names: [url,content,id,section,field]</div>
                        <input  v-model="matrix_name"  name="matrix_name" type="text"  class="form-control" placeholder="Type here" data-toggle="tooltip" data-placement="top"  value="">
                    </div>
                </div>
                <div class="col-sm-9">
                    <strong>Matrix sub fields</strong> <br/>
                    <!-- {{todos}} -->
                  
                        <br/>
                        <div  class="m-list" v-for="todo in todos">
                                <div class="m-item">{{todo.title}}</div> 
                                <div class="m-del" @click="deleteItem(todo)"><i class="fa fa-trash-o"></i></div>
                            </div>
                        

                        <div class="form-group">
                            <label>Field Type</label>
                            <div class="errors pull-left">*</div>
                            <div class="igs-small">Specify the field type</div>
                            <select name="type" class="form-control m-b" id="type" v-model="crselect">
                               
                                <option value="plain-text" selected>Plain Text</option>
                                <option value="multi-line">Multi-line Box</option>
                                <option value="rich-text">Rich Text Box</option>
                                <option value="drop-down">Drop Down</option>
                                <option value="check-box">Check Boxes</option>
                                <option value="color">Color</option>
                                <option value="file-upload">File Upload</option>
                                <option value="number">Number</option>
                                <option value="date">Date</option>
                                <option value="switch">Switch</option>
                            </select>
                            <div class="errors"></div>

                            <div v-if="crselect=='plain-text'">

                                <div class="form-group">
                                    <label>Field Name</label>
                                    <div class="igs-small"></div>
                                    <input v-model="fieldname" name="name" type="text"  class="form-control" placeholder="Type here" data-toggle="tooltip" data-placement="top"  value="">
                                </div>

                                <div class="form-group">
                                    <label>Character length</label>
                                    <div class="igs-small"></div>
                                    <input v-model="fieldlength" name="name" type="text"  class="form-control" placeholder="Type here" data-toggle="tooltip" data-placement="top"  value="">
                                </div>

                                <!-- <input v-model="fieldname" placeholder="Field Name"/> -->
                                <!-- <input v-model="fieldlength" placeholder="Character length"/> -->
                            </div>
                            <div v-if="crselect=='multi-line'">
                                <div class="form-group">
                                    <label>Field Name</label>
                                    <div class="igs-small"></div>
                                    <input v-model="fieldname" name="name" type="text"  class="form-control" placeholder="Type here" data-toggle="tooltip" data-placement="top"  value="">
                                </div>
                                <!-- <input v-model="fieldname" placeholder="Field Name"/> -->
                                
                            </div>
                            <div v-if="crselect=='rich-text'">
                                <div class="form-group">
                                    <label>Field Name</label>
                                    <div class="igs-small"></div>
                                    <input v-model="fieldname" name="name" type="text"  class="form-control" placeholder="Type here" data-toggle="tooltip" data-placement="top"  value="">
                                </div>
                                
                            </div>
                             <div v-if="crselect=='drop-down'">
                                <div class="form-group">
                                    <label>Field Name</label>
                                    <div class="igs-small"></div>
                                    <input v-model="fieldname" name="name" type="text"  class="form-control" placeholder="Type here" data-toggle="tooltip" data-placement="top"  value="">
                                </div>

                                <div class="form-group">
                                    <label>Options</label>
                                    <div class="igs-small">Please separate with commas</div>
                                    <textarea v-model="variations" name="name"  id="inp-box" class="form-control" rows="5" data-maxlength="this" data-required="true" placeholder="Type here" data-toggle="tooltip" data-placement="top" title="hovertext"></textarea>
                                
                                </div>
                                
                               <!--  <textarea name="" id="" cols="30" rows="4" v-model="variations"></textarea> -->
                            </div>
                            <div v-if="crselect=='check-box'">
                                <div class="form-group">
                                    <label>Field Name</label>
                                    <div class="igs-small"></div>
                                    <input v-model="fieldname" name="name" type="text"  class="form-control" placeholder="Type here" data-toggle="tooltip" data-placement="top"  value="">
                                </div>

                                <div class="form-group">
                                    <label>Options</label>
                                    <div class="igs-small">Please separate with commas</div>
                                    <textarea v-model="variations" name="name"  id="inp-box" class="form-control" rows="5" data-maxlength="this" data-required="true" placeholder="Type here" data-toggle="tooltip" data-placement="top" title="hovertext"></textarea>
                                
                                </div>
                            </div>
                            <div v-if="crselect=='color'">
                               <div class="form-group">
                                    <label>Field Name</label>
                                    <div class="igs-small"></div>
                                    <input v-model="fieldname" name="name" type="text"  class="form-control" placeholder="Type here" data-toggle="tooltip" data-placement="top"  value="">
                                </div>
                                
                            </div>
                            <div v-if="crselect=='file-upload'">
                                <div class="form-group">
                                    <label>Field Name</label>
                                    <div class="igs-small"></div>
                                    <input v-model="fieldname" name="name" type="text"  class="form-control" placeholder="Type here" data-toggle="tooltip" data-placement="top"  value="">
                                </div>

                                <div class="form-group">
                                    <label>Allowed File types</label>
                                    <div class="igs-small"></div>
                                    <input v-model="filetype" name="name" type="text"  class="form-control" placeholder="jpg|png|gif" data-toggle="tooltip" data-placement="top"  value="">
                                </div>
                                <!-- <input v-model="filetype" placeholder="jpg|png|gif"/> -->
                            </div>
                            <div v-if="crselect=='number'">
                                <div class="form-group">
                                    <label>Field Name</label>
                                    <div class="igs-small"></div>
                                    <input v-model="fieldname" name="name" type="text"  class="form-control" placeholder="Type here" data-toggle="tooltip" data-placement="top"  value="">
                                </div>
                                
                            </div>
                            <div v-if="crselect=='date'">
                                <div class="form-group">
                                    <label>Field Name</label>
                                    <div class="igs-small"></div>
                                    <input v-model="fieldname" name="name" type="text"  class="form-control" placeholder="Type here" data-toggle="tooltip" data-placement="top"  value="">
                                </div>
                                
                            </div>
                            <div v-if="crselect=='switch'">
                                <div class="form-group">
                                    <label>Field Name</label>
                                    <div class="igs-small"></div>
                                    <input v-model="fieldname" name="name" type="text"  class="form-control" placeholder="Type here" data-toggle="tooltip" data-placement="top"  value="">
                                </div>
                                
                            </div>



                            
                            <a href="#" @click="someFunc"> + Add another</a> 


                    </div>

                    <div class="btn btn-white btn-s-xs" @click="save"><strong>Save</strong></div> 

                </div>
                






               </div>
           </section>
       </div>
       
    </div>
</div>