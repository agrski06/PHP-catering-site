<div class="main">

    <header>
        <div class="mask">
            <div class="content">
                <h1>Catering</h1>
                <p>Najlepszy catering w mieście!</p>
                <button type="submit" class="btn btn-primary"
                    onclick="window.location.href='index.php?content_id=ingredients'">Zamów</button>
            </div>
        </div>
    </header>

    <div class="offer">
        <div class="option">
            <img src="img/zupa.jpg" alt="">
            <div class="text">
                <h3>Zupa</h3>
                <p>Fajna zupka - polecamy</p>
            </div>

        </div>
        <div class="option">
            <img src="img/obiad1.jpg" alt="">
            <div class="text">
                <h3>Obiad 1</h3>
                <p>Zestaw obiadowy 1 - zupa pomidorowa, sałatka + pizza oraz kompot jabłkowy</p>
            </div>
        </div>
        <div class="option">
            <img src="img/obiad2.jpg" alt="">
            <div class="text">
                <h3>Obiad 2</h3>
                <p>Zestaw obiadowy 2 - zupa ogórkowa, zielenina oraz kompot</p>
            </div>
        </div>
    </div>

    <div class="about parallax">
        <div class="mask">
            <div class="content">
                <h1>O nas</h1>
                <p>Jesteśmy firmą specjalizującą się w dostarczaniu cateringu</p>
                <p>Działamy na runku już od wielu lat.</p>
                <button type="button" class="btn btn-primary" onclick="window.location.href='index.php?content_id=about'">Więcej</button>
                <p></p>
            </div>
        </div>
    </div>

    <div class="container">
        <section class="mb-4">

            <h2 class="h1-responsive font-weight-bold text-center my-4">Kontakt</h2>
            <p class="text-center w-responsive mx-auto mb-5">Masz pytania? Napisz do nas!</p>

            <div class="row">

                <div class="col-md-9 mb-md-0 mb-5">
                    <form id="contact-form" name="contact-form" action="mailto:support@example.com">

                        <div class="row">

                            <div class="col-md-6">
                                <div id="divName" class="md-form mb-0">
                                    <input type="text" id="name" name="name" class="form-control">
                                    <label id="forName" for="name" class="">Imię i nazwisko</label>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="md-form mb-0">
                                    <input type="email" id="email" name="email" class="form-control">
                                    <label id="forEmail" for="email" class="">Email</label>
                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                Problem:
                                <div class="md-form mb-0">
                                    <input type="radio" name="problem" id="problem" value="order" checked>
                                    <label for="problem" class="">Zamówienie</label>
                                    <input type="radio" name="problem" id="problem" value="payment">
                                    <label for="problem" class="">Płatność</label>
                                    <input type="radio" name="problem" id="problem" value="other">
                                    <label for="problem" class="">Inne</label>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="md-form mb-0">
                                    <input type="text" id="subject" name="subject" class="form-control">
                                    <label id="forSubject" for="subject" class="">Temat</label>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">

                                <div class="md-form">
                                    <textarea type="text" id="message" name="message" rows="2"
                                        class="form-control md-textarea"></textarea>
                                    <label id="forMessage" for="message">Wiadomość</label>
                                </div>

                            </div>
                        </div>

                    </form>

                    <div class="text-center text-md-left">
                        <button type="button" class="btn btn-primary" onclick="validate();">Wyślij</button>
                    </div>
                    <div class="status"></div>
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-md-3 text-center">
                    <ul class="list-unstyled mb-0">
                        <li><i class="fas fa-map-marker-alt fa-2x"></i>
                            <p>Lublin, Nadbystrzycka 36B</p>
                        </li>

                        <li><i class="fas fa-phone mt-4 fa-2x"></i>
                            <p>+48 123 456 789</p>
                        </li>

                        <li><i class="fas fa-envelope mt-4 fa-2x"></i>
                            <p>contact@example.com</p>
                        </li>
                    </ul>
                </div>
                <!--Grid column-->

            </div>

        </section>
    </div>
</div>