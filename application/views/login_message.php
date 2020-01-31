
				<div class="col-md-10">
					<div class="well">
                        <h3>Login Page</h3>
                        <hr/>
                        <form action="<?=base_url()?>index.php/member/login_action">
                            <div class="from-group">
                                <label>Email</label>
                                <input type="email" name="email" class="form-control">
                            </div>
                            <div class="from-group">
                                <label>Password</label>
                                <input type="password" name="password" class="form-control">
                            </div>
                            <div class="from-group">
                                <input type="reset" name="reset" value="Reste" class="btn btn-danger">    
                                <input type="submit" name="submit" value="Submit" class="btn btn-success">
                            </div>
                        </form>
                    </div>
				</div>

			