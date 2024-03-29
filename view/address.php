<div class="main">

    <div class="container" style="margin-top: 6rem; margin-bottom: 1rem;">
    <button type="button" class="btn btn-warning" onclick="window.location.href='#orders'">Wróć</button>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-8 mb-4">
                <div class="card mb-4">
                    <div class="card-header py-3">
                        <h5 class="mb-0">Adres dostawy</h5>
                    </div>
                    <div class="card-body">
                        <form id="contact-form">
                            <!-- 2 column grid layout with text inputs for the first and last names -->
                            <div class="row mb-4">
                                <div class="col">
                                    <div class="form-outline">
                                        <input type="text" id="name" class="form-control" />
                                        <label id="forName" class="form-label" for="name">Imię</label>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-outline">
                                        <input type="text" id="surname" class="form-control" />
                                        <label id="forSurname" class="form-label" for="surname">Nazwisko</label>
                                    </div>
                                </div>
                            </div>

                            <!-- Text input -->
                            <div class="form-outline mb-4">
                                <input type="text" id="companyName" class="form-control" />
                                <label id="forCompanyName" class="form-label" for="companyName">Nazwa firmy</label>
                            </div>

                            <!-- Text input -->
                            <div class="form-outline mb-4">
                                <input type="text" id="address" class="form-control" />
                                <label id="forAddress" class="form-label" for="address">Adres</label>
                            </div>

                            <!-- Email input -->
                            <div class="form-outline mb-4">
                                <input type="email" id="email" class="form-control" />
                                <label id="forEmail" class="form-label" for="email">Email</label>
                            </div>

                            <!-- Number input -->
                            <div class="form-outline mb-4">
                                <input type="number" id="number" class="form-control" />
                                <label id="forNumber" class="form-label" for="number">Telefon</label>
                            </div>

                            <!-- Message input -->
                            <div class="form-outline mb-4">
                                <textarea class="form-control" id="info" rows="4"></textarea>
                                <label id="forInfo" class="form-label" for="info">Dodatkowe informacje</label>
                            </div>
                            
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card mb-4">
                    <div class="card-header py-3">
                        <h5 class="mb-0">Podsumowanie</h5>
                    </div>
                    <div class="card-body">
                        <ul class="list-group list-group-flush">
                            <li
                                class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 pb-0">
                                Produkty
                                <span>Graits :)</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                                Dostawa
                                <span>Gratis :)</span>
                            </li>
                            <li
                                class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 mb-3">
                                <div>
                                    <strong>Suma</strong>
                                    <strong>
                                        <p class="mb-0">(VAT wliczony)</p>
                                    </strong>
                                </div>
                                <span><strong>Gratis :)</strong></span>
                            </li>
                        </ul>

                        <button type="button" class="btn btn-primary btn-lg btn-block" onclick="validateAddress();">Zamów</button>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>