<?php $__env->startSection('content'); ?>
<style type="text/css">
    .modal-lg {
        width: 99% !important;
        height: 100% !important;
    }
</style>
<div class="page-content">
    <!-- BEGIN PAGE HEAD-->
    
    <!-- END PAGE HEAD-->
    <!-- BEGIN PAGE BREADCRUMB -->
    <ul class="page-breadcrumb breadcrumb">
        <li>
            <a href="<?php echo e(url('employee/dashboard')); ?>">Dashboard</a>
            <i class="fa fa-circle"></i>
        </li>
        <li>
           <span class="active"><?php echo e($action); ?></span>
        </li>
    </ul>
    
    <!-- END PAGE BREADCRUMB -->

    <div class="row">
        <div class="col-md-12">
            <!-- BEGIN EXAMPLE TABLE PORTLET-->
            <div class="tabbable-line boxless tabbable-reversed">
                <div class="tab-pane active" id="tab_5">
                    <?php echo $__env->make('layouts.flash-message', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                    <div class="portlet box blue ">
                        <div class="portlet-title">
                            <div class="caption">
                                
                            </div>
                        </div>
                        <div class="portlet-body form">
                           
                            <form action="" class="form-horizontal form-bordered" name="DocumentManagement" id="DocumentManagement" method="POST" enctype="multipart/form-data">

                            <?php echo csrf_field(); ?>
                                
                                <div class="form-body">
                                    
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Client Name*</label>
                                        <div class="col-md-9">
                                            <select class="form-control" name="client_id" id="client_id">
                                            <option value="">Select Client Name</option>

                                            <?php if($client_login): ?>

                                            <?php $__currentLoopData = $client_login; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cl): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($cl->id); ?>"><?php echo e($cl->client_name); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            <?php endif; ?>

                                            </select>
                                        </div>    
                                    </div>
                                   

                                    <div class="form-group">
                                        <label class="control-label col-md-3">Action*</label>
                                        <div class="col-md-9">
                                            <select class="form-control" name="select_action" id="select_action">
                                            <option value="">Select Action</option>

                                            <?php if($show_emp_roles): ?>

                                            <?php $__currentLoopData = $show_emp_roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $permission): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($key); ?>"><?php echo e($permission); ?></option>

                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                            <?php endif; ?>

                                            </select>
                                        </div>    
                                    </div>

                                    <div class="form-group create_folder_div" id="" style="display: none;">
                                        <label class="control-label col-md-3">Folder Type*</label>
                                        <div class="col-md-9">
                                            <select class="form-control" name="folder_type" id="folder_type">
                                            <option value="">Select Folder Type</option>

                                            <?php if($client_login): ?>

                                            <?php $__currentLoopData = $document_type; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($key); ?>"><?php echo e($val); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            <?php endif; ?>

                                            </select>
                                        </div>    
                                    </div>

                                    

                                    <div class="form-group create_folder_div" id="" style="display: none;">
                                        <label class="control-label col-md-3">Sub Folder Name*</label>
                                        <div class="col-md-9" id="create_select_sub_folder">
                                            If other type then folders selection will be here.
                                        </div>    
                                    </div>

                                    <div class="form-group create_folder_div" id="" style="display: none;">
                                        <label class="control-label col-md-3"></label>
                                        <div class="col-md-9">
                                            <input type="checkbox" name="doc_under_other" id="doc_under_other" value="1"> Create Document Type Under Other Type
                                        </div>    
                                    </div>

                                    <div class="form-group create_folder_div" id="" style="display: none;">
                                        <label class="control-label col-md-3">Folder Name*</label>
                                        <div class="col-md-9">
                                            <input type="text" name="folder_name" id="folder_name" placeholder="Enter Folder Name" class="form-control" value="">
                                            <!-- <span class="help-block"> This is inline help </span> -->
                                        </div>    
                                    </div>

                                    <div class="form-group upload_folder_div" id="" style="display: none;">
                                        <label class="control-label col-md-3">Folder Name*</label>
                                        <div class="col-md-9 upload_select_sub_folder">
                                            <select class="form-control select_sub_folder" name="select_sub_folder" id="upload_folder_id">
                                            
                                            </select>
                                        </div>    
                                    </div>

                                    <!-- <div class="form-group upload_folder_div" id="" style="display: none;">
                                        <label class="control-label col-md-3">Sub Folder Name*</label>
                                        <div class="col-md-9">
                                            <select class="form-control" name="upload_subfolder_id" id="upload_subfolder_id">
                                            
                                            </select>
                                        </div>    
                                    </div> -->

                                    <div class="form-group upload_folder_div" id="" style="display: none;">
                                        <label class="control-label col-md-3">Upload File*</label>
                                        <div class="col-md-9">
                                            <input type="file" name="up_upload_file[]" id="up_upload_file" multiple>
                                        </div>    
                                    </div>

                                    <div class="form-group delete_folders" id="" style="display: none;">
                                        <label class="control-label col-md-3">Delete Folders*</label>
                                        <div class="col-md-9" id="folder_structure">
                                            
                                        </div>    
                                    </div>

                                    <div class="form-group delete_files" id="" style="display: none;">
                                        <label class="control-label col-md-3">Delete Files*</label>
                                        <div class="col-md-9" id="files_structure">
                                            
                                        </div>    
                                    </div>

                                    <div class="form-group rename_folders" id="" style="display: none;">
                                        <label class="control-label col-md-3">Rename Folders*</label>
                                        <div class="col-md-9" id="editable_folder">
                                            
                                        </div>    
                                    </div>

                                    <div class="form-group rename_files" id="" style="display: none;">
                                        <label class="control-label col-md-3">Rename Files*</label>
                                        <div class="col-md-9" id="editable_file">
                                            
                                        </div>    
                                    </div>

                                    <div class="form-group archive_folders" id="" style="display: none;">
                                        <label class="control-label col-md-3">Archive Folders*</label>
                                        <div class="col-md-9" id="archive_folders">
                                            
                                        </div>    
                                    </div>

                                    <div class="form-group archive_files" id="" style="display: none;">
                                        <label class="control-label col-md-3">Archives Files*</label>
                                        <div class="col-md-9" id="archive_files">
                                            
                                        </div>    
                                    </div>

                                    <div class="form-group download_files" id="" style="display: none;">
                                        <label class="control-label col-md-3">Download Files*</label>
                                        <div class="col-md-9" id="download_files">
                                            
                                        </div>    
                                    </div>

                                    <div class="form-group view_read_files" id="" style="display: none;">
                                        <label class="control-label col-md-3">View Read Files*</label>
                                        <div class="col-md-9" id="view_read_files">
                                            
                                        </div>    
                                    </div>

                                    <div class="form-group move_folders" id="" style="display: none;">
                                        <label class="control-label col-md-3">Move Folder*</label>
                                        <div class="col-md-4" id="move_folders_from">
                                        </div>
                                        <!-- <div class="col-md-1">
                                            <i class="fa fa-arrow-right icon_move_folder" style="font-size: 42px;color: #3598dc;cursor: pointer;padding-top:50px;" title="Move Folder"></i>
                                        </div>  -->   
                                        <div class="col-md-4" id="move_folders_to">
                                            
                                        </div>    
                                    </div>

                                    <div class="form-group move_files" id="" style="display: none;">
                                        <label class="control-label col-md-3">Move Files*</label>
                                        <div class="col-md-4" id="move_files_from">
                                            
                                        </div>
                                        <div class="col-md-4" id="move_files_to">
                                            
                                        </div>    
                                    </div>

                                        
                                    <div class="form-group" id="display_errors" style="display: none;">
                                        <div class="row">
                                            <div class="col-md-9 col-md-offset-3 error text-danger">
                                                
                                            </div>
                                            <div class="col-md-9 col-md-offset-3 success text-success">
                                                
                                            </div>
                                        </div>
                                    </div>


                                </div>

                                <div class="form-actions">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="col-md-offset-3 col-md-9">
                                                    <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                                                    <button type="button" class="btn green" id="submit_button">
                                                        <i class="fa fa-check"></i> Submit</button>
                                                    <button type="button" class="btn default" onclick="cust_reload();">Clear</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </form>
                            
                            <!-- END FORM-->
                        </div>
                    </div>
                </div>
            </div>
            <!-- END EXAMPLE TABLE PORTLET-->
        </div>
    </div>
</div>


<div class="modal fade bs-modal-lg" id="view_read_doc" tabindex="-1" role="dialog" aria-hidden="true">
<div class="modal-dialog modal-lg">
    <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title">View/Read Files
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <span id="redirect_url">
                
            </span>
            <div id='direct_move_msg' class="success text-success"></div>
            <div id='next_prev_msg' class="danger text-danger text-right" style="font-size: 16px;font-weight: bold;"></div>
            <span id="error_model_move" style="font-size: 15px;margin-left: 16px;">
                <span class="error text-danger">
                                                
                </span>
                <span class="success text-success">

                </span>

            </span>
            </h4>
        </div>
        <div class="modal-body" id="next_pdf" style="height: 700px !important;">

            <iframe id="view_doc_model" src="" width="100%" height="400px;" class="hide_embed" style="height: 100% !important;">
		</iframe>
            
        </div>
        <input type="hidden" name="next_prev_parent_id" id="next_prev_parent_id">
        <div class="modal-footer">
            <button type="button" class="btn dark btn-outline" data-dismiss="modal">Close</button>
        </div>
    </div>
    <!-- /.modal-content -->
</div>
<!-- /.modal-dialog -->
</div>

<div class="modal fade bs-modal-md" id="model_move_files" tabindex="-1" role="dialog" aria-hidden="true">
<div class="modal-dialog modal-md">
    <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title">Select Move Folder</h4>
        </div>
        <div class="modal-body" id="model_move_files_model">
            
        </div>
        <div class="modal-footer">
            <button type="button" class="btn green" id="model_move_btn">Move</button> 
            <button type="button" class="btn dark btn-outline" data-dismiss="modal">Close</button>
        </div>
    </div>
    <!-- /.modal-content -->
</div>
<!-- /.modal-dialog -->
</div>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>

<script type="text/javascript">
    function cust_reload(){
        location.reload();
    }
    $(document).ready(function () {

        var create_parent_folder_id = 0;
        var upload_parent_folder_id = 0;
        var model_move_folder_id = 0;

        function hide_error(){
            $("div#display_errors .error").html("");
            $("div#display_errors .success").html("");
            $("div#display_errors").hide();
        }

        function hide_modal_error(){
            $("span#error_model_move .error").html("");
            $("span#error_model_move .success").html("");
            $("span#error_model_move").hide();
        }

        $(document).on( "change",'select#client_id',function() { 
            $("select#select_action").val("");
            $("select#select_action").trigger('change');
        });     
        $('#client_id').on('change',function(){
            var client_id = $('#client_id').val();

            $.ajax({
                    url: '<?php echo url('/document_mngt/get_emp_permission'); ?>',
                    type: "POST",
                    data: {
                        "_token": "<?php echo e(csrf_token()); ?>",
                        'client_id': client_id,
                        'parent_id': 0,                        
                    },
                    beforeSend: function() {
                        $("button#submit_button").attr('disabled',true);
                    },
                    complete: function() {
                        $("button#submit_button").attr('disabled',false);
                    },
                    success: function(data) {
                        if(data){
                            $("select#select_action").html(data);
                        }            
                    }

                });
        });
        $(document).on( "change",'select#select_action',function() { 
            var action = $(this).val();
            var client_id = $("select#client_id").val();
            hide_error();

            if(action=='create_folder'){
                $("div.create_folder_div").show();
            }else{
                $("div.create_folder_div").hide();
            }

            if(action=='upload_files'){
                $("div.upload_folder_div").show();
                create_parent_folder_id = 0;
                $.ajax({
                    url: '<?php echo url('/document_mngt/get_folder_names'); ?>',
                    type: "POST",
                    data: {
                        "_token": "<?php echo e(csrf_token()); ?>",
                        'action': 'upload_files',
                        'client_id': client_id,
                        'parent_id': 0,                        
                    },
                    beforeSend: function() {
                        $("button#submit_button").attr('disabled',true);
                    },
                    complete: function() {
                        $("button#submit_button").attr('disabled',false);
                    },
                    success: function(data) {
                        if(data.sts==1){
                            $("select#upload_folder_id").html(data.data);
                            $("select#upload_folder_id").nextAll().remove();
                        }else{
                            $("div#display_errors .error").html(data.msg);
                            $("div#display_errors").show();
                        }              
                    }

                });



            }else{
                $("div.upload_folder_div").hide();
            }

            if(action=='delete_folders'){
                $("div.delete_folders").show();

                $.ajax({
                    url: '<?php echo url('/document_mngt/get_list_delete_folders'); ?>',
                    type: "POST",
                    data: {
                        "_token": "<?php echo e(csrf_token()); ?>",
                        'action': 'delete_folders',
                        'client_id': client_id,
                    },
                    beforeSend: function() {
                        $("button#submit_button").attr('disabled',true);
                    },
                    complete: function() { 
                        $("button#submit_button").attr('disabled',false);
                    },
                    success: function(data) {
                        $(".delete_folders #folder_structure").html(data);             
                    }

                });



            }else{
                $("div.delete_folders").hide();
            }

            if(action=='delete_files'){
                $("div.delete_files").show();

                $.ajax({
                    url: '<?php echo url('/document_mngt/get_list_delete_files'); ?>',
                    type: "POST",
                    data: {
                        "_token": "<?php echo e(csrf_token()); ?>",
                        'action': 'delete_files',
                        'client_id': client_id,
                    },
                    beforeSend: function() {
                        $("button#submit_button").attr('disabled',true);
                    },
                    complete: function() { 
                        $("button#submit_button").attr('disabled',false);
                    },
                    success: function(data) {
                        $(".delete_files #files_structure").html(data);             
                    }

                });



            }else{
                $("div.delete_files").hide();
            }

            if(action=='rename_folders'){
                $("div.rename_folders").show();

                $.ajax({
                    url: '<?php echo url('/document_mngt/get_list_rename_folder'); ?>',
                    type: "POST",
                    data: {
                        "_token": "<?php echo e(csrf_token()); ?>",
                        'action': 'rename_folders',
                        'client_id': client_id,
                    },
                    beforeSend: function() {
                        $("button#submit_button").attr('disabled',true);
                    },
                    complete: function() { 
                        $("button#submit_button").attr('disabled',false);
                    },
                    success: function(data) {
                        $(".rename_folders #editable_folder").html(data);
                    }
                });

            }else{
                $("div.rename_folders").hide();
            }

            if(action=='rename_files'){
                $("div.rename_files").show();

                $.ajax({
                    url: '<?php echo url('/document_mngt/get_list_rename_file'); ?>',
                    type: "POST",
                    data: {
                        "_token": "<?php echo e(csrf_token()); ?>",
                        'action': 'rename_files',
                        'client_id': client_id,
                    },
                    beforeSend: function() {
                        $("button#submit_button").attr('disabled',true);
                    },
                    complete: function() { 
                        $("button#submit_button").attr('disabled',false);
                    },
                    success: function(data) {
                        $(".rename_files #editable_file").html(data);
                    }
                });

            }else{
                $("div.rename_files").hide();
            }

            if(action=='archive_folders'){
                $("div.archive_folders").show();

                $.ajax({
                    url: '<?php echo url('/document_mngt/get_list_archive_folder'); ?>',
                    type: "POST",
                    data: {
                        "_token": "<?php echo e(csrf_token()); ?>",
                        'action': 'archive_folders',
                        'client_id': client_id,
                    },
                    beforeSend: function() {
                        $("button#submit_button").attr('disabled',true);
                    },
                    complete: function() { 
                        $("button#submit_button").attr('disabled',false);
                    },
                    success: function(data) {
                        $(".archive_folders #archive_folders").html(data);
                    }
                });

            }else{
                $("div.archive_folders").hide();
            }
            
            if(action=='archive_files'){
                $("div.archive_files").show();

                $.ajax({
                    url: '<?php echo url('/document_mngt/get_list_archive_files'); ?>',
                    type: "POST",
                    data: {
                        "_token": "<?php echo e(csrf_token()); ?>",
                        'action': 'archive_files',
                        'client_id': client_id,
                    },
                    beforeSend: function() {
                        $("button#submit_button").attr('disabled',true);
                    },
                    complete: function() { 
                        $("button#submit_button").attr('disabled',false);
                    },
                    success: function(data) {
                        $(".archive_files #archive_files").html(data);
                    }
                });

            }else{
                $("div.archive_files").hide();
            }

            if(action=='download_files'){
                $("div.download_files").show();

                $.ajax({
                    url: '<?php echo url('/document_mngt/get_list_download_file'); ?>',
                    type: "POST",
                    data: {
                        "_token": "<?php echo e(csrf_token()); ?>",
                        'action': 'download_files',
                        'client_id': client_id,
                    },
                    beforeSend: function() {
                        $("button#submit_button").attr('disabled',true);
                    },
                    complete: function() { 
                        $("button#submit_button").attr('disabled',false);
                    },
                    success: function(data) {
                        $(".download_files #download_files").html(data);
                    }
                });

            }else{
                $("div.download_files").hide();
            }

            if(action=='view_read_files'){
                $("div.view_read_files").show();

                $.ajax({
                    url: '<?php echo url('/document_mngt/get_list_view_read_files'); ?>',
                    type: "POST",
                    data: {
                        "_token": "<?php echo e(csrf_token()); ?>",
                        'action': 'view_read_files',
                        'client_id': client_id,
                    },
                    beforeSend: function() {
                        $("button#submit_button").attr('disabled',true);
                    },
                    complete: function() { 
                        $("button#submit_button").attr('disabled',false);
                    },
                    success: function(data) {
                        $(".view_read_files #view_read_files").html(data);
                    }
                });

            }else{
                $("div.view_read_files").hide();
            }

            if(action=='move_folders'){
                $("div.move_folders").show();

                $.ajax({
                    url: '<?php echo url('/document_mngt/get_list_move_folders_from'); ?>',
                    type: "POST",
                    data: {
                        "_token": "<?php echo e(csrf_token()); ?>",
                        'action': 'move_folders',
                        'client_id': client_id,
                    },
                    beforeSend: function() {
                        $("button#submit_button").attr('disabled',true);
                    },
                    complete: function() { 
                        $("button#submit_button").attr('disabled',false);
                    },
                    success: function(data) {
                        $(".move_folders #move_folders_from").html(data);
                    }
                });

                $.ajax({
                    url: '<?php echo url('/document_mngt/get_list_move_folders_to'); ?>',
                    type: "POST",
                    data: {
                        "_token": "<?php echo e(csrf_token()); ?>",
                        'action': 'move_folders',
                        'client_id': client_id,
                    },
                    beforeSend: function() {
                        $("button#submit_button").attr('disabled',true);
                    },
                    complete: function() { 
                        $("button#submit_button").attr('disabled',false);
                    },
                    success: function(data) {
                        $(".move_folders #move_folders_to").html(data);
                    }
                });

            }else{
                $("div.move_folders").hide();
            }

            if(action=='move_files'){
                $("div.move_files").show();

                $.ajax({
                    url: '<?php echo url('/document_mngt/get_list_move_files_from'); ?>',
                    type: "POST",
                    data: {
                        "_token": "<?php echo e(csrf_token()); ?>",
                        'action': 'move_files',
                        'client_id': client_id,
                    },
                    beforeSend: function() {
                        $("button#submit_button").attr('disabled',true);
                    },
                    complete: function() { 
                        $("button#submit_button").attr('disabled',false);
                    },
                    success: function(data) {
                        $(".move_files #move_files_from").html(data);
                    }
                });

                $.ajax({
                    url: '<?php echo url('/document_mngt/get_list_move_files_to'); ?>',
                    type: "POST",
                    data: {
                        "_token": "<?php echo e(csrf_token()); ?>",
                        'action': 'move_files',
                        'client_id': client_id,
                    },
                    beforeSend: function() {
                        $("button#submit_button").attr('disabled',true);
                    },
                    complete: function() { 
                        $("button#submit_button").attr('disabled',false);
                    },
                    success: function(data) {
                        $(".move_files #move_files_to").html(data);
                    }
                });

            }else{
                $("div.move_files").hide();
            }


        });

        /*$(document).on( "change",'select#upload_folder_id',function() { 
            var action = $("select#select_action").val();
            var client_id = $("select#client_id").val();
            hide_error();

            var upload_folder_id = $("select#upload_folder_id").val();

            if( action=='upload_files' && client_id>0 && upload_folder_id>0 ){

                $.ajax({
                    url: '<?php echo url('/document_mngt/get_folder_names'); ?>',
                    type: "POST",
                    data: {
                        "_token": "<?php echo e(csrf_token()); ?>",
                        'action': 'upload_files',
                        'client_id': client_id,
                        'parent_id': upload_folder_id,                        
                    },
                    beforeSend: function() {
                        $("button#submit_button").attr('disabled',true);
                    },
                    complete: function() {
                        $("button#submit_button").attr('disabled',false);
                    },
                    success: function(data) {
                        if(data.sts==1){
                            $("select#upload_subfolder_id").html(data.data);
                        }else{
                            $("div#display_errors .error").html(data.msg);
                            $("div#display_errors").show();
                        }              
                    }

                });

            }
        });*/

        $(document).on( "change",'select#folder_type',function() { 
            var action = $("select#select_action").val();
            var client_id = $("select#client_id").val();
            var folder_type = $("select#folder_type").val();
            hide_error();
            create_parent_folder_id = 0;

            if( action=='create_folder' && client_id>0 && folder_type==2 ){

                $.ajax({
                    url: '<?php echo url('/document_mngt/get_other_type_folder'); ?>',
                    type: "POST",
                    data: {
                        "_token": "<?php echo e(csrf_token()); ?>",
                        'action': 'create_folder',
                        'client_id': client_id,
                    },
                    beforeSend: function() {
                        $("button#submit_button").attr('disabled',true);
                    },
                    complete: function() {
                        $("button#submit_button").attr('disabled',false);
                    },
                    success: function(data) {
                        if(data.sts==1){
                            $("div#create_select_sub_folder").html(data.data);
                        }else{
                            $("div#display_errors .error").html(data.msg);
                            $("div#display_errors").show();
                        }              
                    }

                });

            }else{
                $("div#create_select_sub_folder").html("If other type then folders selection will be here.")
            }
        });

        $(document).on( "change",'select.select_sub_folder',function() { 
            var action = $("select#select_action").val();
            var client_id = $("select#client_id").val();
            var upload_folder_id = $(this).val();
            create_parent_folder_id = upload_folder_id;
            hide_error();
            current = $(this);

            if( client_id>0 ){

                $.ajax({
                    url: '<?php echo url('/document_mngt/get_folder_names2'); ?>',
                    type: "POST",
                    data: {
                        "_token": "<?php echo e(csrf_token()); ?>",
                        'action': action,
                        'client_id': client_id,
                        'parent_id': upload_folder_id,
                    },
                    beforeSend: function() {
                        $("button#submit_button").attr('disabled',true);
                    },
                    complete: function() {
                        $("button#submit_button").attr('disabled',false);
                    },
                    success: function(data) {
                        
                        if(data.sts==1){
                            current.nextAll().remove();
                            // $("div#create_select_sub_folder").append(data.data);
                            current.parent().append(data.data);
                        }else{
                            $("div#display_errors .error").html(data.msg);
                            $("div#display_errors").show();
                        }              
                    }

                });

            }
        });


        $(document).on( "click",'button#submit_button',function() {

            var action = $("select#select_action").val();
            var client_id = $("select#client_id").val();

            hide_error();

            var error = "";
            if(action==""){
                error = "Select Action";                    
            }else if(client_id==""){
                error = "Select Client Id";
            }

            if(error!=""){
                $("div#display_errors .error").html(error);
                $("div#display_errors").show();
                return;            
            }    


            if( action=='create_folder'){
                
                var folder_type = $("select#folder_type").val();
                var folder_name = $("input#folder_name").val();var error = "";
                
                if(folder_type == 2 && $('input#doc_under_other').is(':checked')){
                    folder_type = 1;
                }

                if(folder_name==""){
                    error = "Enter Folder Name";
                }else if(folder_type==""){
                    error = "Select Folder Type";                    
                }


                if(error==""){

                    hide_error();

                    $.ajax({

                        url: '<?php echo url('/document_mngt/create_folder'); ?>',
                        type: "POST",
                        data: {
                            "_token": "<?php echo e(csrf_token()); ?>",
                            'action': 'create_folder',
                            'client_id': client_id,
                            'folder_name': folder_name,
                            'folder_type': folder_type,
                            'parent_folder_id': create_parent_folder_id,
                        },
                        beforeSend: function() {
                            $("button#submit_button").attr('disabled',true);
                        },
                        complete: function() {
                            $("button#submit_button").attr('disabled',false);
                        },
                        success: function(data) {
                            hide_error();
                            if(data.sts==1){
                                $("div#display_errors .success").html(data.msg);
                                $("div#display_errors").show();
                            }else{
                                $("div#display_errors .error").html(data.msg);
                                $("div#display_errors").show();
                            }              
                        }

                    });

                }else{
                    $("div#display_errors .error").html(error);
                    $("div#display_errors").show();
                }

            }else if( action=='upload_files'){
                
                var upload_folder_id = $("select#upload_folder_id").val();
                var upload_subfolder_id = create_parent_folder_id;
                var error = "";

                var formData = new FormData($("form#DocumentManagement")[0]);
                formData.append('client_id', client_id);
                formData.append('action', action);
                formData.append('upload_folder_id', upload_folder_id);
                formData.append('upload_subfolder_id', upload_subfolder_id);

                if(upload_folder_id==""){
                    error = "Select Folder Name";
                }else if($("#up_upload_file").val()==""){
                    error = "Select File to Upload";                    
                }

                if(error==""){

                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': "<?php echo e(csrf_token()); ?>"
                        }
                    });

                    $.ajax({
                        url: '<?php echo url('/document_mngt/upload_files'); ?>',
                        type: "POST",
                        data: formData,
                        contentType: false,
                        cache : false,
                        processData : false,
                        beforeSend: function() {
                            $("button#submit_button").attr('disabled',true);
                        },
                        complete: function() {
                            $("button#submit_button").attr('disabled',false);
                        },
                        success: function(data) {
                            if(data.sts==1){
                                $("div#display_errors .success").html(data.msg);
                                $("div#display_errors").show();
                            }else{
                                $("div#display_errors .error").html(data.msg);
                                $("div#display_errors").show();
                            }              
                        }

                    });

                }else{
                    $("div#display_errors .error").html(error);
                    $("div#display_errors").show();
                }  


            }else if( action=='move_folders'){
                var move_folder_reasion = $('#move_folder_reasion').val();
                var from_folder_id = [];
               // var from_folder_id = $('.move_from_folder:checked').attr('data-folder_id');
                var to_folder_id = $('.move_to_folder:checked').attr('data-folder_id');

                $('.move_from_folder').each(function(){    
                    if(this.checked){
                        from_folder_id.push($(this).attr('data-folder_id'));
                    }
                });

                if(from_folder_id==""){
                    error = "Select from folder";
                }else if(to_folder_id==""){
                    error = "Select to folder";
                }

                
                if(error==""){

                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': "<?php echo e(csrf_token()); ?>"
                        }
                    });

                    $.ajax({
                        
                        url: '<?php echo url('/document_mngt/move_folders'); ?>',
                        type: "POST",
                        data: {
                            "_token": "<?php echo e(csrf_token()); ?>",
                            'action':'move_folders',
                            client_id:client_id,
                            from_folder_id:from_folder_id,
                            to_folder_id:to_folder_id,
                            move_folder_reasion:move_folder_reasion
                        },                        
                        beforeSend: function() {
                            $("button#submit_button").attr('disabled',true);
                        },
                        complete: function() {
                            $("button#submit_button").attr('disabled',false);
                        },
                        success: function(data) {
                            if(data.sts==1){
                                 $("select#select_action").trigger('change');
				 $("div#display_errors .success").html(data.msg);
				 $("div#display_errors").show();
                            }else{
                                $("div#display_errors .error").html(data.msg);
                                $("div#display_errors").show();
                            }              
                        }

                    });

                }else{
                    $("div#display_errors .error").html(error);
                    $("div#display_errors").show();
                }   


            }else if( action=='move_files'){
                
                /*var from_file_id = $('.move_from_file:checked').attr('data-folder_id');*/
                var move_file_reasion = $('#move_file_reasion').val();
                var to_folder_id = $('.move_to_folder:checked').attr('data-folder_id');

                var from_file_ids = [];

                $('.move_from_file').each(function(){    
                    if(this.checked){
                        from_file_ids.push($(this).attr('data-folder_id'));
                    }
                });

                if(from_file_ids==""){
                    error = "Select from folder";
                }else if(to_folder_id==""){
                    error = "Select to folder";
                }

                
                if(error==""){

                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': "<?php echo e(csrf_token()); ?>"
                        }
                    });

                    $.ajax({
                        
                        url: '<?php echo url('/document_mngt/move_files'); ?>',
                        type: "POST",
                        data: {
                            "_token": "<?php echo e(csrf_token()); ?>",
                            'action':'move_files',
                            client_id:client_id,
                            from_file_ids:from_file_ids,
                            to_folder_id:to_folder_id,
                            move_file_reasion:move_file_reasion
                        },                        
                        beforeSend: function() {
                            $("button#submit_button").attr('disabled',true);
                        },
                        complete: function() {
                            $("button#submit_button").attr('disabled',false);
                        },
                        success: function(data) {
                            if(data.sts==1){                               
                                $("select#select_action").trigger('change');
				 $("div#display_errors .success").html(data.msg);
                                $("div#display_errors").show();
                            }else{
                                $("div#display_errors .error").html(data.msg);
                                $("div#display_errors").show();
                            }              
                        }

                    });

                }else{
                    $("div#display_errors .error").html(error);
                    $("div#display_errors").show();
                }   


            }   

        });

        $(document).on( "click",'.btn_delete_folder',function() {

            var action = $("select#select_action").val();
            var client_id = $("select#client_id").val();
            var folder_id = $(this).attr('data-folder_id');
            var current = $(this);

            if(client_id>0&&folder_id>0){

                $.ajax({

                    url: '<?php echo url('/document_mngt/delete_current_folder'); ?>',
                    type: "POST",
                    data: {
                        "_token": "<?php echo e(csrf_token()); ?>",
                        'action': 'delete_folders',
                        'client_id': client_id,
                        'folder_id': folder_id,
                    },
                    beforeSend: function() {
                        $("button#submit_button").attr('disabled',true);
                    },
                    complete: function() {
                        $("button#submit_button").attr('disabled',false);
                    },
                    success: function(data) {
                        hide_error();
                        if(data.sts==1){
                            $("div#display_errors .success").html(data.msg);
                            $("div#display_errors").show();
                            current.parent().fadeOut('slow');
                        }else{
                            $("div#display_errors .error").html(data.msg);
                            $("div#display_errors").show();
                        }              
                    }
                });
            }
        });

        $(document).on( "click",'#direct_delete',function() {

            var action = $("select#select_action").val();
            var client_id = $("select#client_id").val();
            var file_id = model_move_folder_id;
           
            if(client_id>0&&file_id>0){

                $.ajax({

                    url: '<?php echo url('/document_mngt/direct_delete_current_file'); ?>',
                    type: "POST",
                    data: {
                        "_token": "<?php echo e(csrf_token()); ?>",
                        'action': 'delete_files',
                        'client_id': client_id,
                        'file_id': file_id,
                    },
                    beforeSend: function() {
                        $("button#submit_button").attr('disabled',true);
                    },
                    complete: function() {
                        $("button#submit_button").attr('disabled',false);
                    },
                    success: function(data) {
                        hide_error();
                        if(data.sts==1){
                            $("#direct_move_msg").html(data.msg);
                            $('.model_next_file_link').click();
                        }else{
                            $("#direct_move_msg").html(data.msg);
                        }               
                    }
                });
            }
        });

        $(document).on( "click",'.btn_delete_file',function() {

            var action = $("select#select_action").val();
            var client_id = $("select#client_id").val();
            var file_id = $(this).attr('data-file_id');
            var current = $(this);
            
            if(client_id>0&&file_id>0){

                $.ajax({

                    url: '<?php echo url('/document_mngt/delete_current_file'); ?>',
                    type: "POST",
                    data: {
                        "_token": "<?php echo e(csrf_token()); ?>",
                        'action': 'delete_files',
                        'client_id': client_id,
                        'file_id': file_id,
                    },
                    beforeSend: function() {
                        $("button#submit_button").attr('disabled',true);
                    },
                    complete: function() {
                        $("button#submit_button").attr('disabled',false);
                    },
                    success: function(data) {
                        hide_error();
                        if(data.sts==1){
                            $("div#display_errors .success").html(data.msg);
                            $("div#display_errors").show();
                            $('[data-file_id="'+file_id+'"]').fadeOut('slow');
                            //current.parent().fadeOut('slow');
                        }else{
                            $("div#display_errors .error").html(data.msg);
                            $("div#display_errors").show();
                        }              
                    }
                });
            }
        });

        $(document).on( "click",'.edit_folder_name',function() {
            $(this).removeClass('text-success');
            $(this).removeClass('text-danger');
        });

        $(document).on( "click",'.edit_file_name',function() {
            $(this).removeClass('text-success');
            $(this).removeClass('text-danger');
        });
            
        $(document).on( "blur",'.edit_folder_name',function() {

            var action = $("select#select_action").val();
            var client_id = $("select#client_id").val();
            var folder_id = $(this).attr('data-folder_id');
            var level = $(this).attr('data-level');
            var folder_name = $(this).text();
            var current = $(this);
            
            if(client_id>0&&folder_id>0&&folder_name!=""){

                $.ajax({

                    url: '<?php echo url('/document_mngt/rename_folder'); ?>',
                    type: "POST",
                    data: {
                        "_token": "<?php echo e(csrf_token()); ?>",
                        'action': 'rename_folders',
                        'client_id': client_id,
                        'folder_id': folder_id,                        
                        'folder_name': folder_name,
                    },
                    beforeSend: function() {
                        $("button#submit_button").attr('disabled',true);
                    },
                    complete: function() {
                        $("button#submit_button").attr('disabled',false);
                    },
                    success: function(data) {
                        hide_error();
                        if(data.sts==1){
                            $("div#display_errors .success").html(data.msg);
                            $("div#display_errors").show();
                            current.html('<i class="fa fa-folder icon-state-warning icon-lg"></i> '+data.folder_name);
                            current.addClass('text-success');
                        }else{
                            $("div#display_errors .error").html(data.msg);
                            $("div#display_errors").show();
                            current.addClass('text-danger');
                        }              
                    }
                });
            }
        });

        $(document).on( "click",'#direct_rename_file',function() {
            $('#direct_rename_file_name').show();
            $('#direct_rename_file_button').show();
            $('#note').show();
        });
        $(document).on( "click",'#direct_rename_file_button',function() {

            var action = $("select#select_action").val();
            var client_id = $("select#client_id").val();
            var file_name = $("#direct_rename_file_name").val();

            var file_id = model_move_folder_id;
            

            if(client_id>0&&file_id>0&&file_name!=""){

                $.ajax({

                    url: '<?php echo url('/document_mngt/direct_rename_file'); ?>',
                    type: "POST",
                    data: {
                        "_token": "<?php echo e(csrf_token()); ?>",
                        'action': 'rename_files',
                        'client_id': client_id,
                        'file_id': file_id,                        
                        'file_name': file_name,
                    },
                    beforeSend: function() {
                        $("button#submit_button").attr('disabled',true);
                    },
                    complete: function() {
                        $("button#submit_button").attr('disabled',false);
                    },
                    success: function(data) {
                        hide_error();
                        if(data.sts==1){
                            $("#direct_move_msg").html(data.msg);
                            $('#direct_rename_file_name').hide();
                            $('#direct_rename_file_button').hide();
                            $('#note').hide();
                            $('.model_next_file_link').click();
                        }else{
                            $("#direct_move_msg").html(data.msg);
                        }              
                    }
                });
            }
        });

        $(document).on( "blur",'.edit_file_name',function() {

            var action = $("select#select_action").val();
            var client_id = $("select#client_id").val();
            var file_id = $(this).attr('data-file_id');
            var level = $(this).attr('data-level');
            var file_name = $(this).text();
            var current = $(this);
            
            if(client_id>0&&file_id>0&&file_name!=""){

                $.ajax({

                    url: '<?php echo url('/document_mngt/rename_file'); ?>',
                    type: "POST",
                    data: {
                        "_token": "<?php echo e(csrf_token()); ?>",
                        'action': 'rename_files',
                        'client_id': client_id,
                        'file_id': file_id,                        
                        'file_name': file_name,
                    },
                    beforeSend: function() {
                        $("button#submit_button").attr('disabled',true);
                    },
                    complete: function() {
                        $("button#submit_button").attr('disabled',false);
                    },
                    success: function(data) {
                        hide_error();
                        if(data.sts==1){
                            $("div#display_errors .success").html(data.msg);
                            $("div#display_errors").show();
                            current.html('<i class="fa fa-file icon-state-info icon-lg"></i> '+data.folder_name);
                            current.addClass('text-success');
                        }else{
                            $("div#display_errors .error").html(data.msg);
                            $("div#display_errors").show();
                            current.addClass('text-danger');
                        }              
                    }
                });
            }
        });


        $(document).on( "click",'.btn_restore_folder',function() {

            var action = $("select#select_action").val();
            var client_id = $("select#client_id").val();
            var folder_id = $(this).attr('data-folder_id');
            var current = $(this);
            
            if(client_id>0&&folder_id>0){

                $.ajax({

                    url: '<?php echo url('/document_mngt/restore_current_folder'); ?>',
                    type: "POST",
                    data: {
                        "_token": "<?php echo e(csrf_token()); ?>",
                        'action': 'archive_folders',
                        'client_id': client_id,
                        'folder_id': folder_id,
                    },
                    beforeSend: function() {
                        $("button#submit_button").attr('disabled',true);
                        $("div#archive_folders").css({'parent-event':'none','opacity':0});
                    },
                    complete: function() {
                        $("button#submit_button").attr('disabled',false);
                        $("div#archive_folders").css({'parent-event':'default','opacity':1});
                    },
                    success: function(data) {
                        hide_error();
                        if(data.sts==1){
                            $("select#select_action").trigger('change');
			    $("div#display_errors .success").html(data.msg);
                            $("div#display_errors").show();
                        }else{
                            $("div#display_errors .error").html(data.msg);
                            $("div#display_errors").show();
                        }              
                    }
                });
            }
        });

        $(document).on( "click",'.btn_restore_file',function() {

            var action = $("select#select_action").val();
            var client_id = $("select#client_id").val();
            var file_id = $(this).attr('data-file_id');
            var current = $(this);
            
            if(client_id>0&&file_id>0){

                $.ajax({

                    url: '<?php echo url('/document_mngt/restore_current_file'); ?>',
                    type: "POST",
                    data: {
                        "_token": "<?php echo e(csrf_token()); ?>",
                        'action': 'archive_files',
                        'client_id': client_id,
                        'file_id': file_id,
                    },
                    beforeSend: function() {
                        $("button#submit_button").attr('disabled',true);
                        $("div#archive_files").css({'parent-event':'none','opacity':0});
                    },
                    complete: function() {
                        $("button#submit_button").attr('disabled',false);
                        $("div#archive_files").css({'parent-event':'default','opacity':1});
                    },
                    success: function(data) {
                        hide_error();
                        if(data.sts==1){
			 $("select#select_action").trigger('change');
                            $("div#display_errors .success").html(data.msg);
                            $("div#display_errors").show();
                           
                        }else{
                            $("div#display_errors .error").html(data.msg);
                            $("div#display_errors").show();
                        }              
                    }
                });
            }
        });

        $(document).on( "click",'.open_doc_model',function() {

            hide_modal_error();
            $("#view_doc_model").attr('src',$(this).attr('data-url')+"#toolbar=0&navpanes=0&scrollbar=0");


            model_move_folder_id = $(this).attr('data-folder_id');

            $("#view_doc_model").attr('data-folder_id',model_move_folder_id);

            var client_id = $("select#client_id").val();

            var data = "";

            <?php if( !empty($show_emp_roles) && array_key_exists('delete_files',$show_emp_roles) ): ?>

            /*data += "<small><a href=<?php echo e(url('/employee/document_mngt?action=delete_files&client_id=')); ?>"+client_id+" target='_blank'>Delete Files</a></small><small>";*/
            data += "<small><a href='javascript:;' id='direct_delete'>Delete Files</a></small><small>";

            <?php endif; ?>

            <?php if( !empty($show_emp_roles) && array_key_exists('rename_files',$show_emp_roles) ): ?>

            /*data += " | <a href=<?php echo e(url('/employee/document_mngt?action=rename_files&client_id=')); ?>"+client_id+" target='_blank'>Rename Files</a></small><small>";*/

            data += " | <a href='javascript:;' id='direct_rename_file'>Rename Files</a></small><small>";

            <?php endif; ?>

            <?php if( !empty($show_emp_roles) && array_key_exists('archive_files',$show_emp_roles) ): ?>

            data += " | <a href=<?php echo e(url('/employee/document_mngt?action=archive_files&client_id=')); ?>"+client_id+" target='_blank'>Archive Files</a></small><small>";

            <?php endif; ?>

            <?php if( !empty($show_emp_roles) && array_key_exists('move_files',$show_emp_roles) ): ?>

            data += " | <a href='javascript:void(0)' class='model_move_file_link'>Move Files</a></small>";

            data += " | <small><a href='javascript:void(0)' id='upload_by_client' class='direct_move_file_link'>Upload by client</a></small>";

            data += " | <small><a href='javascript:void(0)' id='posted' class='direct_move_file_link'>Posted</a></small>";

            data += " | <small><a href='javascript:void(0)' id='queries_posted' class='direct_move_file_link'>Queries posted</a></small>";

            data += " | <small><a href='javascript:void(0)' id='queries_not_posted' class='direct_move_file_link'>Queries not_posted</a></small>";

            data += " | <small><a href='javascript:void(0)' id='other' class='direct_move_file_link'>Other</a></small>";

            <?php endif; ?>

            data += " | <small><a href='javascript:void(0)' class='model_pre_file_link' data-folder_id = '"+model_move_folder_id+"'>Previous</a></small>";

            data += " | <small><a href='javascript:void(0)' class='model_next_file_link' data-folder_id = '"+model_move_folder_id+"'>Next</a></small>";
            
            data += "<input type='text' name='direct_rename_file_name' id='direct_rename_file_name' style='display:none;'>&nbsp;&nbsp;<input type='button' name='direct_rename_file_button' id='direct_rename_file_button' class='btn dark btn-outline' value='Rename' style='display:none;'><div id='note' style='display:none;'>Note : Enter Name With Extension</div>"
            $("#redirect_url").html(data);
            $("#view_read_doc").modal('show');

            
        });    

        $(document).on( "click",'.model_next_file_link',function() {
            var folder_id = $("#view_doc_model").attr('data-folder_id');

            var client_id = $("select#client_id").val();
            var next_prev_parent_id = $('#next_prev_parent_id').val();

            $("#next_prev_msg").html("");

            $.ajax({
                url: '<?php echo url('/document_mngt/get_next_list'); ?>',
                type: "POST",
                data: {
                    "_token": "<?php echo e(csrf_token()); ?>",
                    'client_id': client_id,
                    'folder_id': folder_id,
                    'next_prev_parent_id': next_prev_parent_id,
                },
                global: false,
                beforeSend: function() {
                    $("button#submit_button").attr('disabled',true);
                },
                complete: function() { 
                    $("button#submit_button").attr('disabled',false);
                },
                success: function(data) {
                    //$('.hide_embed').hide();
                    $('#next_pdf').html(data.html);
                    
                    if(data==""){
                        $("#next_prev_msg").html("No Files Availabel");
                    }

                    $("#view_read_doc").modal('show');
                    $("#view_doc_model").attr('data-folder_id',data.folder_id);
                    $('#next_prev_parent_id').val(data.parent_id);
                    //$(this).attr('data-folder_id','61');
                    //$(".open_doc_model").$(this).attr('data-folder_id','61');
                   // $("#model_move_files_model").html(data);
                }

            });
        });

        $(document).on( "click",'.model_pre_file_link',function() {
            var folder_id = $(" #view_doc_model").attr('data-folder_id');
            var client_id = $("select#client_id").val();
            var next_prev_parent_id = $('#next_prev_parent_id').val();

            $("#next_prev_msg").html("");

            $.ajax({
                url: '<?php echo url('/document_mngt/get_pre_list'); ?>',
                type: "POST",
                data: {
                    "_token": "<?php echo e(csrf_token()); ?>",
                    'client_id': client_id,
                    'folder_id': folder_id,
                    'next_prev_parent_id': next_prev_parent_id,
                },
                global: false,
                beforeSend: function() {
                    $("button#submit_button").attr('disabled',true);
                },
                complete: function() { 
                    $("button#submit_button").attr('disabled',false);
                },
                success: function(data) {
                    
                    //$('.hide_embed').hide();

                    $('#next_pdf').html(data.html);
                    
                    $("#view_read_doc").modal('show');
                    $("#view_doc_model").attr('data-folder_id',data.folder_id);
                    $('#next_prev_parent_id').val(data.parent_id);

                    if(data==""){
                        $("#next_prev_msg").html("No Files Availabel");
                    }
                    //$(this).attr('data-folder_id','61');
                    //$(".open_doc_model").$(this).attr('data-folder_id','61');
                   // $("#model_move_files_model").html(data);
                }

            });
        });
        $(document).on( "click",'.model_move_file_link',function() {
            
            hide_modal_error();

            var client_id = $("select#client_id").val();

            $.ajax({
                url: '<?php echo url('/document_mngt/get_list_move_files_to'); ?>',
                type: "POST",
                data: {
                    "_token": "<?php echo e(csrf_token()); ?>",
                    'action': 'move_files',
                    'client_id': client_id,
                },
                beforeSend: function() {
                    $("button#submit_button").attr('disabled',true);
                },
                complete: function() { 
                    $("button#submit_button").attr('disabled',false);
                },
                success: function(data) {
                    $("#model_move_files_model").html(data);
                }

            });

            $("#model_move_files").modal('show');

        });    

        $(document).on( "click",'.direct_move_file_link',function() {

            var move_type = $(this).attr('id');
            
            hide_modal_error();

            var from_file_ids = [];var error = "";
            var client_id = $("select#client_id").val();
            var move_file_reasion = $('#move_file_reasion').val();

            from_file_ids.push(model_move_folder_id);

            if(from_file_ids==""){
                error = "Select from folder";
            }

            console.log(from_file_ids);

            
            if(error==""&&client_id>0){

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': "<?php echo e(csrf_token()); ?>"
                    }
                });

                $.ajax({
                    
                    url: '<?php echo url('/document_mngt/direct_move_files'); ?>',
                    type: "POST",
                    data: {
                        "_token": "<?php echo e(csrf_token()); ?>",
                        'action':'move_files',
                        client_id:client_id,
                        from_file_ids:from_file_ids,
                        move_type:move_type,
                        move_file_reasion:move_file_reasion
                    },                        
                    beforeSend: function() {
                        $("button#submit_button").attr('disabled',true);
                    },
                    complete: function() {
                        $("button#submit_button").attr('disabled',false);
                    },
                    success: function(data) {
                       // $("#model_move_files").modal('hide');
                        if(data.sts==1){           
                            $("#direct_move_msg").html(data.msg);
                            $("#next_prev_parent_id").val(data.old_parent_id);
                            $('.model_next_file_link').click();
                           
                        }else{
                            $("#direct_move_msg").html(data.msg);
                        }              
                    }

                });

            }else{
                $("span#error_model_move .error").html(error);
                $("span#error_model_move").show();
            } 

        });

        $(document).on( "click",'button#model_move_btn',function() {

            hide_modal_error();
            var to_folder_id = $('#model_move_files .move_to_folder:checked').attr('data-folder_id');

            var from_file_ids = [];var error = "";
            var client_id = $("select#client_id").val();
            var move_file_reasion = $('#move_file_reasion').val();

            from_file_ids.push(model_move_folder_id);

            if(from_file_ids==""){
                error = "Select from folder";
            }else if(to_folder_id==""){
                error = "Select to folder";
            }

            
            if(error==""&&client_id>0){

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': "<?php echo e(csrf_token()); ?>"
                    }
                });

                $.ajax({
                    
                    url: '<?php echo url('/document_mngt/move_files'); ?>',
                    type: "POST",
                    data: {
                        "_token": "<?php echo e(csrf_token()); ?>",
                        'action':'move_files',
                        client_id:client_id,
                        from_file_ids:from_file_ids,
                        to_folder_id:to_folder_id,
                        move_file_reasion:move_file_reasion
                    },                        
                    beforeSend: function() {
                        $("button#submit_button").attr('disabled',true);
                    },
                    complete: function() {
                        $("button#submit_button").attr('disabled',false);
                    },
                    success: function(data) {
                        $("#model_move_files").modal('hide');
                        if(data.sts==1){
				$("select#select_action").trigger('change');
                            $("span#error_model_move .success").html(data.msg);
                            $("span#error_model_move").show();
                            
                        }else{
                            $("span#error_model_move .error").html(data.msg);
                            $("span#error_model_move").show();
                        }              
                    }

                });

            }else{
                $("span#error_model_move .error").html(error);
                $("span#error_model_move").show();
            }   

        });    

        <?php

            if( isset(request()->action) && isset(request()->client_id) && isset(request()->from) ){
                
                $action = request()->action;
                $client_id = request()->client_id;
                $folder_id = request()->folder_id;

                if(array_key_exists($action,$document_management)){
                    ?>
                    $('select#client_id').val(<?php echo e($client_id); ?>);
                    $('select#select_action').val('<?php echo e($action); ?>');

                    $("div.view_read_files").show();

                    $.ajax({
                        url: '<?php echo url('/document_mngt/get_list_view_read_files_search'); ?>',
                        type: "POST",
                        data: {
                            "_token": "<?php echo e(csrf_token()); ?>",
                            'action': 'view_read_files',
                            'folder_id':"<?php echo e($folder_id); ?>",
                            'client_id':"<?php echo e($client_id); ?>",
                        },
                        beforeSend: function() {
                            $("button#submit_button").attr('disabled',true);
                        },
                        complete: function() { 
                            $("button#submit_button").attr('disabled',false);
                        },
                        success: function(data) {
                            $(".view_read_files #view_read_files").html(data);
                        }
                    });
                    
                    <?php
                }


            }else if( isset(request()->action) && isset(request()->client_id) && isset(request()->from2) && isset(request()->folder_id)){
                
                $action = request()->action;
                $client_id = request()->client_id;
                $folder_id = request()->folder_id;

                if(array_key_exists($action,$document_management)){
                    ?>
                    $('select#client_id').val(<?php echo e($client_id); ?>);
                    $('select#select_action').val('<?php echo e($action); ?>');
                    <?php
                }
                ?>
                $('select#select_action').trigger('change');
                
                 $(document).ajaxComplete(function () {
                    var current;
                current = $("a[data-folder_id="+<?php echo e($folder_id); ?>+"]");
                console.log(current.html());
                current.trigger('click');

                });
                
                <?php

            }
            else if( isset(request()->action)&&isset(request()->client_id) ){

                $action = request()->action;
                $client_id = request()->client_id;

                if(array_key_exists($action,$document_management)){
                    ?>
                    $('select#client_id').val(<?php echo e($client_id); ?>);
                    $('select#select_action').val('<?php echo e($action); ?>');
                    <?php
                }
                ?>
                $('select#select_action').trigger('change');
                <?php

            }

        ?>

        $(document).on('click','.icon_move_folder',function(){

        });

    });
</script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>