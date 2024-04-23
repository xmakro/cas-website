+++
title = "Angebot anfordern"

[extra]
image = "/images/kontakt_komprimiert.jpg"
image_alt = "Digitale Darstellung eines Händedrucks, umgeben von Netzwerklinien und Knotenpunkten, symbolisiert digitale Partnerschaften oder Vereinbarungen."
large = "Ihre Ideen, unsere Leidenschaft"
small = "Kontaktieren Sie uns"
+++

## Entdecken Sie Unsere Sanddruck-Angebote

Jetzt kostenloses Angebot für Sanddruck sichern! Von der Form- und Kernherstellung bis zum finalen Produkt stehen wir Ihnen zur Seite. Übermitteln Sie uns Ihre Daten, und wir senden Ihnen zügig ein auf Sie zugeschnittenes Angebot per E-Mail zu. Verpassen Sie nicht diese Chance – beginnen Sie Ihre Anfrage gleich heute!

<form onsubmit="handleSubmit(event)">
    <input type="hidden" name="subject" value="Anfrage" />
    <div class="onerow">
        <p><label>Bauteillänge (mm)</label> <input type="number" name="length" value="1200" required>
        </p>
        <p><label>Bauteilbreite (mm)</label> <input type="number" name="width" value="800" required></p>
        <p><label>Bauteilhöhe (mm)</label> <input type="number" name="height" value="400" required></p>
        <p><label>Stückzahl</label> <input type="number" name="amount" value="1" required></p>
    </div>
    <p>
        <label>Ihre Konstruktion als CAD-Datei (optional)</label>
        <input type="file" name="userfile">
    </p>
    <p><label>Anliegen</label> <textarea name="text" rows="4" required></textarea></p>
    <div class="onerow">
        <p><label>Name</label> <input type="text" name="name" required></p>
        <p><label>Unternehmen</label> <input type="text" name="company" required></p>
    </div>
    <div class="onerow">
        <p><label>E-Mail</label> <input type="text" name="email" required></p>
        <p><label>Telefonnummer (optional)</label> <input type="text" name="phone"></p>
    </div>
    <div>
        <input type="checkbox" id="agb" name="agb" required>
        <label for="agb">Ich stimme den <a href="#terms" target="_blank">AGB</a> und der <a
                href="#data-protection" target="_blank">Datenschutzerklärung</a> zu.</label>
    </div>
    <div id="g-recaptcha" data-sitekey="6Le10aEpAAAAANMNnVxrcNHAKHD13vffgRy7scht"></div>
    <button type="submit">Absenden</button>
</form>
