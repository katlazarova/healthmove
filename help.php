<?php include 'includes/header.php'; ?>
<h1 class="bottom-spacer">Help</h1>
<div class="contact-form-container">
    <h2>Get In Touch</h2>
    <form class="form" action="/success-page.php">
        <div class="form-group">
            <label for="firstName">First Name
                <span class="required-asterix" title="This field is required">*</span>
            </label>
            <span class="visually-hidden">(required)</span>
            <input type="text" class="form-control" name="firstname" placeholder="First Name" required>
        </div> <!-- End of form-group -->

        <div class="form-group">
            <label for="lastName">Last Name</label>
            <input type="text" class="form-control" name="lastname" placeholder="Last Name">
        </div> <!-- End of form-group -->

        <div class="form-group">
            <label for="email">Email
                <span class="required-asterix" title="This field is required">*</span>
            </label>
            <span class="visually-hidden">(required)</span>
            <input type="email" class="form-control" name="email" placeholder="Email" required>
        </div> <!-- End of form-group -->

        <div class="form-group">
            <label for="age">Your Age</label>
            <input type="number" class="form-control" name="age" placeholder="Age" min="14">
        </div> <!-- End of form-group -->

        <div class="form-group">
            <label for="country">Country
                <span class="required-asterix" title="This field is required">*</span>
            </label>
            <span class="visually-hidden">(required)</span>
            <select class="form-control select-country" name="country" required>
                <option value="">Please Select</option>
            </select>
        </div> <!-- End of form-group -->

        <div class="form-group">
            <label for="subject">Your inquiry</label>
            <div class="character-counter"></div>
            <textarea name="subject" class="text-area" placeholder="Type here" maxlength="300"></textarea>
        </div> <!-- End of form-group -->

        <input type="submit" value="Submit" class="submit btn btn-primary">
    </form>
</div> <!-- End of contact-form-container -->
<h2>FAQ</h2>
<div class="accordion-component bottom-spacer">
    <button class="accordion">My Account
        <span class="icons">
                <i class="fas fa-plus"></i>
                <i class="fas fa-minus"></i>
            </span>
    </button>
    <div class="panel">
        <p>One brave soul did take a stab at translating the almost-not-quite-Latin. According to The Guardian, Jaspreet
            Singh Boparai undertook the challenge with the goal of making the text “precisely as incoherent in English
            as it is in Latin - and to make it incoherent in the same way”. As a result, “the Greek 'eu' in Latin became
            the French 'bien' [...] and the '-ing' ending in 'lorem ipsum' seemed best rendered by an '-iendum' in
            English.”</p>
    </div> <!-- End of panel -->

    <button class="accordion">Donating
        <span class="icons">
                <i class="fas fa-plus"></i>
                <i class="fas fa-minus"></i>
            </span>
    </button>
    <div class="panel">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
            magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
            commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
            nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit
            anim id est laborum.</p>
    </div> <!-- End of panel -->

    <button class="accordion">Contacting the Media Team
        <span class="icons">
                <i class="fas fa-plus"></i>
                <i class="fas fa-minus"></i>
            </span>
    </button>
    <div class="panel">
        <p>The passage experienced a surge in popularity during the 1960s when Letraset used it on their dry-transfer
            sheets, and again during the 90s as desktop publishers bundled the text with their software. Today it's seen
            all around the web; on templates, websites, and stock designs. Use our generator to get your own, or read on
            for the authoritative history of lorem ipsum.</p>
    </div> <!-- End of panel -->

    <button class="accordion">Complaints
        <span class="icons">
                <i class="fas fa-plus"></i>
                <i class="fas fa-minus"></i>
            </span>
    </button>
    <div class="panel">
        <p>McClintock's eye for detail certainly helped narrow the whereabouts of lorem ipsum's origin, however, the
            “how and when” still remain something of a mystery, with competing theories and timelines.</p>
    </div><!-- End of panel -->
</div> <!-- End of accordion-component -->
<?php include 'includes/footer.php'; ?>
