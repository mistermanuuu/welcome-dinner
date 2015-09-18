<?php snippet('header') ?>

    <main class="main" role="main">

        <?php echo $page->text()->kirbytext() ?>

        <form method="post" name="form-host" id="jsValidateForm" class="contact__form">

            <input type="hidden" value="host" name="whoAmI" />

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

            <div class="field">
                <label for="language">Welche Sprachen sprichst Du? <abbr title="required">*</abbr></label>
                <input type="text" id="language" name="language" placeholder="z.B. Deutsch, Englisch, Französisch.." required>
            </div>

            <div class="field">
                <label for="date-1" class="field__label_center">An welchen Terminen passt es Dir? <abbr title="required">*</abbr></label>
                <div class="fields_block">
                    <input type="datetime" name="date-1" id="date-1" placeholder="z.B. 01.10.2015" required/>
                    <input type="datetime" name="date-2" id="date-2" placeholder="z.B. 06.10.2015" value="n.a."/>
                    <input type="datetime" name="date-3" id="date-3" placeholder="z.B. 17.11.2015" value="n.a."/>
                </div>
            </div>

            <div class="choice">
                <label for="kids">Dürfen Deine Gäste Kinder mitbringen?</label>
                <select id="kids" name="kids" >
                    <option value="0" selected>Nein</option>
                    <option value="1">ja, 1 Kind</option>
                    <option value="2">ja, 2 Kinder</option>
                    <option value="2">ja, 4 Kinder</option>
                    <option value="2">ja, 5 Kinder</option>
                </select>
            </div>

            <div class="field">
                <label for="friends">Ist noch jemand dabei?</label>
                <input type="text" id="friends" name="friends" placeholder="z.B. Mitbewohner, Partner oder Freunde" >
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