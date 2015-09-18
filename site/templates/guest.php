<?php snippet('header') ?>

<main class="main" role="main">

    <?php echo $page->text()->kirbytext() ?>

    <form method="post" name="form-guest" id="jsValidateForm" class="contact__form">

              <input type="hidden" value="guest" name="whoAmI" />

    <?php if($alert): ?>
        <div class="alert">
            <ul>
                <?php foreach($alert as $message): ?>
                    <li><?php echo html($message) ?></li>
                <?php endforeach ?>
            </ul>
        </div>
    <?php endif ?>

    <div class="error_box"></div>

    <div class="pick field_full-width">
        <input type="radio" id="gender-male" name="gender" value="male" required/>
        <label for="gender-male" class="pick__choice-label_alignment">Herr</label>
        <input type="radio" id="gender-female" name="gender" value="female" required/>
        <label for="gender-female" class="pick__choice-label_alignment">Frau</label>
    </div>

    <div class="field">
        <label for="name">Dein voller Name: <abbr title="required">*</abbr></label>
        <input type="text" id="name" name="name" placeholder="z.B. Susi Sonnenschein" required>
    </div>

    <div class="field">
        <label for="street">Deine Straße und Hausnummer: <abbr title="required">*</abbr></label>
        <input type="text" id="street" name="street" placeholder="z.B. Schloßallee 89" required>
    </div>

    <div class="field">
        <label for="street">PLZ und Dein Wohnort: <abbr title="required">*</abbr></label>
        <input type="text" id="place" name="place" placeholder="z.B. 4711 Köln" required>
    </div>

    <div class="field">
        <label for="email">Deine Email Adresse: <abbr title="required">*</abbr></label>
        <input type="email" id="email" name="email" placeholder="z.B. susi.sonne@gmail.com" required>
    </div>

    <div class="field">
        <label for="phone">Deine Telefon/Mobil - Nummer: <abbr title="required">*</abbr></label>
        <input type="tel" id="phone" name="phone" placeholder="z.B. 0221 47110815" required>
    </div>

    <div class="choice">
        <label for="friends">Bringst Du Freunde mit?</label>
        <select id="friends" name="friends" >
            <option value="0" selected>Nein</option>
            <option value="1">1 Erwachsenen</option>
            <option value="2">2 Erwachsene</option>
        </select>
    </div>

    <div class="choice">
        <label for="kids">Bringst Du Kinder mit?</label>
        <select id="kids" name="kids" >
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
        <label for="language">Welche Sprachen sprichst Du? <abbr title="required">*</abbr></label>
        <input type="text" id="language" name="language" placeholder="z.B. Deutsch, Englisch, Französisch.." required>
    </div>

    <div class="pick">
        <label for="special-food" class="field_full-width">Hast Du spezielle Essenswünsche?</label>
        <div class="fields_block">
            <div class="fields-block__checkbox-group">
                <input type="checkbox" name="special-food[]" id="special-food" value="No-Alcohol"/> <span class="pick__choice-label_alignment">kein Alkohol</span>
                <input type="checkbox" name="special-food[]" id="special-food" value="Halal"/> <span class="pick__choice-label_alignment">Halal</span>
            </div>
            <div class="fields-block__checkbox-group">
                <input type="checkbox" name="special-food[]" id="special-food" value="No-Fish"/> <span class="pick__choice-label_alignment">kein Fisch</span>
                <input type="checkbox" name="special-food[]" id="special-food" value="No-Meat"/> <span class="pick__choice-label_alignment">kein Fleisch</span>
            </div>
        </div>
    </div>

    <div class="field">
        <label for="text" class="field_full-width">Hast Du noch Fragen oder Anmerkungen? </label>
        <div class="fields_block">
            <textarea id="text" name="text" class="field_full-width"></textarea>
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