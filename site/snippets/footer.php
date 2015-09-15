<footer class="footer cf" role="contentinfo">

	<div class="copyright">
		<?php echo $site->copyright()->kirbytext() ?>
	</div>

	<div class="colophon">
		<a href="http://getkirby.com/made-with-kirby-and-love">Made with Kirby and <b>♥</b></a>
	</div>

</footer>


<script>
	var validator = new FormValidator('form-guest', [{
		name: 'req',
		display: 'required',
		rules: 'required'
	}, {
		name: 'alphanumeric',
		rules: 'alpha_numeric'
	}, {
		name: 'password',
		rules: 'required'
	}, {
		name: 'password_confirm',
		display: 'password confirmation',
		rules: 'required|matches[password]'
	}, {
		name: 'email',
		rules: 'valid_email',
		depends: function() {
			return Math.random() > .5;
		}
	}, {
		name: 'minlength',
		display: 'min length',
		rules: 'min_length[8]'
	}], function(errors, event) {
		if (errors.length > 0) {
			// Show the errors
		}
	});
</script>

</body>
</html>