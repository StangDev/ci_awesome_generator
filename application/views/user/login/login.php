<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<?php if (validation_errors()) : ?>
	<div class="col-md-12 pt-5">
		<div class="alert alert-danger" role="alert">
			<?= validation_errors() ?>
		</div>
	</div>
<?php endif; ?>
<?php if (isset($error)) : ?>
	<div class="col-md-12 pt-5">
		<div class="alert alert-danger" role="alert">
			<?= $error ?>
		</div>
	</div>
<?php endif; ?>
<div class="login-wrap">
		<div class="login-content">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<div class="login-logo">
						<a href="#">
								<img src="<?=base_url()?>/assets/images/logoweb.png" alt="">
						</a>
				</div>
			</div>
			<?= form_open() ?>
				<div class="form-group">
					<label for="username">Username</label>
					<input type="text" class="form-control" id="username" name="username" placeholder="Your username">
				</div>
				<div class="form-group">
					<label for="password">Password</label>
					<input type="password" class="form-control" id="password" name="password" placeholder="Your password">
				</div>
				<div class="form-group">
					<input type="submit" class="btn btn-default" value="Login">
				</div>
			</form>
		</div>
	</div><!-- .row -->
</div><!-- .login-content -->
</div><!-- .login-wrap -->
