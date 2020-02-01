
				<div class="col-md-10">
					<div class="well">
                        <h3>Post A Movie</h3>
                        <hr/>
                        <!-- Display Error Massages -->
                        <?php
                            if(validation_errors()){?>
                                <div class="alert alert-danger">
                                    <?php echo validation_errors(); ?>
                                </div>
                        <?php
                            }
                        ?>
                        <hr/>
                        
                        
                        <!-- add for this form tag -->
                        <?php echo form_open_multipart(base_url().'index.php/movie/add_action');?>


                            
                            <div class="from-group"></div>
                                <label>Title</label>
                                <input type="text" name="title" class="form-control">
                            </div>
                            <div class="from-group"></div>
                                <label>Description</label>
                                <input type="text" name="description" class="form-control">
                            </div>
                            <div class="from-group">
                                <label>Photo</label>
                                <input type="file" name="photo" class="form-control">
                            </div>
                            <div class="from-group">
                                <label>Movie</label>
                                <input type="text" name="movie" class="form-control">
                            </div>
                            
                            
                            <div class="from-group">
                                <input type="reset" name="reset" value="Reste" class="btn btn-danger">    
                                <input type="submit" name="submit" value="Publish" class="btn btn-success">
                            </div>
                        </form>
                    </div>
				</div>

			