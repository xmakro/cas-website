+++
title = "Quote"

[extra]
image = "/images/kontakt_komprimiert.jpg"
image_alt = "Digital representation of a handshake surrounded by network lines and nodes, symbolizing digital partnerships or agreements."
large = "Your Ideas, Our Passion"
small = "Contact Us"
+++

## Discover Our Sand Printing Offers

Secure your free quote for sand printing now! From mold and core making to the final product, we stand by your side. Submit your details, and we will send you a tailored offer via email promptly. Don't miss this opportunity – start your inquiry today!

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
