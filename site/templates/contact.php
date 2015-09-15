<?php snippet('header') ?>

  <main class="main" role="main">

	  <?php echo $page->text()->kirbytext() ?>

	  <form method="post" name="form-guest" id="form-guest" class="contact__form">

		  <?php if($alert): ?>
			  <div class="alert">
				  <ul>
					  <?php foreach($alert as $message): ?>
						  <li><?php echo html($message) ?></li>
					  <?php endforeach ?>
				  </ul>
			  </div>
		  <?php endif ?>

		  <div class="field">
			  <label for="name">Dein voller Name: <abbr title="required">*</abbr></label>
			  <input type="text" id="name" name="name" placeholder="z.B. Susi Sonnenschein">
		  </div>

		  <div class="field">
			  <label for="street">Deine Straße und Hausnummer: <abbr title="required">*</abbr></label>
			  <input type="text" id="street" name="street" placeholder="z.B. Schloßallee 89">
		  </div>

		  <div class="field">
			  <label for="street">PLZ und Dein Wohnort: <abbr title="required">*</abbr></label>
			  <input type="text" id="place" name="place" placeholder="z.B. 4711 Köln">
		  </div>

		  <div class="field">
			  <label for="email">Deine Email Adresse: <abbr title="required">*</abbr></label>
			  <input type="email" id="email" name="email" placeholder="z.B. susi.sonne@gmail.com" required>
		  </div>

		  <div class="choice choice_left">
			  <label for="friends">Bringst Du Freunde mit?</label>
			  <select id="friends" name="friends" >
			    <option value="0" selected>Nein</option>
			    <option value="1">1 Erwachsenen</option>
			    <option value="2">2 Erwachsene</option>
			  </select>
		  </div>

		  <div class="choice choice_right">
			  <label for="friends">Bringst Du Kinder mit?</label>
			  <select id="friends" name="friends" >
			    <option value="0" selected>Nein</option>
			    <option value="1">1 Kind</option>
			    <option value="2">2 Kinder</option>
			  </select>
		  </div>

		  <div class="field">
			  <label for="country">Aus welchem Land kommst Du? </label>
			  <input type="text" id="country" name="country" placeholder="z.B. Deutschland">
		  </div>

		  <div class="field">
			  <label for="street">Welche Sprachen sprichst Du? <abbr title="required">*</abbr></label>
			  <input type="text" id="place" name="place" placeholder="z.B. Deutsch, Englisch, Französisch..">
		  </div>

		  <div class="pick">
			  <label for="special-food[]" class="field_full-width">Hast Du spezielle Essenswünsche?</label>
			  <div class="fields_block">
				  <input type="checkbox" name="special-food[]" id="special-food[]" value="no-fish"/> <span>kein Fisch</span>
				  <input type="checkbox" name="special-food[]" id="special-food[]" value="no-meat"/> <span>kein Fleisch</span>
				  <input type="checkbox" name="special-food[]" id="special-food[]" value="no-alco"/> <span>kein Alkohol</span>
				  <input type="checkbox" name="special-food[]" id="special-food[]" value="halal"/> <span>Halal</span>
			  </div>
		  </div>

		  <div class="field">
			  <label for="text" class="field_full-width">Hast Du noch Fragen oder Anmerkungen? </label>
			  <div class="fields_block">
				  <textarea id="text" name="text" class="field_full-width" required></textarea>
			  </div>
		  </div>

		  <div class="field">
			  <div class="fields_block field_full-width element-centered">
				  <input type="submit" name="submit" value="Absenden :)" class="btn btn_submit">
			  </div>
		  </div>

	  </form>

  </main>

<?php snippet('footer') ?>