
				<div class="col-md-10">
					<div class="well">
                        <h3>Register Page</h3>
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
                        <?php echo form_open_multipart(base_url().'index.php/member/register_action');?>

                        <div class="from-group">
                                <label>Full Name</label>
                                <input type="text" name="name" class="form-control">
                            </div>
                            <div class="from-group">
                                <label>Email</label>
                                <input type="email" name="email" class="form-control">
                            </div>
                            <div class="from-group">
                                <label>Password</label>
                                <input type="password" name="password" class="form-control">
                            </div>
                            <div class="from-group">
                                <label>Photo</label>
                                <input type="file" name="photo" class="form-control">
                            </div>
                            <div class="from-group">
                                <input type="reset" name="reset" value="Reste" class="btn btn-danger">    
                                <input type="submit" name="submit" value="Submit" class="btn btn-success">
                            </div>
                        </form>
                    </div>
				</div>

			