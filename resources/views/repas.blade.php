<style>
    #card {
        padding: 16px;
        margin: 16px;

    }
    #card:hover {
        border: 1px solid #ddd;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.6);
    }


    .plus-minus-input {
        -webkit-align-items: center;
        -ms-flex-align: center;
        align-items: center;
    }

    .plus-minus-input .input-group-field {
        text-align: center;
        margin-left: 0.5rem;
        margin-right: 0.5rem;
        padding: 1rem;
        width: 5rem;
        height: 2rem;
    }

    .plus-minus-input .input-group-field::-webkit-inner-spin-button,
    .plus-minus-input .input-group-field ::-webkit-outer-spin-button {
        -webkit-appearance: none;
        appearance: none;
    }

    .plus-minus-input .input-group-button .circle {
        border-radius: 50%;
        padding: 0.25em 0.8em;
        background-color: #DB9A64;
        border: none;
    }


</style>
<div class="Delicious_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title text-center mb-50">
                        <h3>Délicieux Repas Pour Vous</h3>
                    </div>
                </div>
            </div>
            <div class="tablist_menu">
                    <div class="row">
                            <div class="col-xl-12">
                                    <ul class="nav justify-content-center" id="pills-tab" role="tablist">
                                            <li class="nav-item">
                                              <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#" role="tab" aria-controls="pills-home" aria-selected="true">
                                                  <div class="single_menu text-center">
                                                      <div class="icon">
                                                          <i class="flaticon-lunch"></i>
                                                      </div>
                                                        <h4>Dîner</h4>
                                                  </div>
                                              </a>
                                            </li>
                                            <li class="nav-item">
                                              <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#" role="tab" aria-controls="pills-profile" aria-selected="false">
                                                    <div class="single_menu text-center">
                                                            <div class="icon">
                                                                <i class="flaticon-food"></i>
                                                            </div>
                                                            <h4>Petit-déjeuner</h4>
                                                        </div>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                              <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#" role="tab" aria-controls="pills-contact" aria-selected="false">
                                                    <div class="single_menu text-center">
                                                            <div class="icon">
                                                                <i class="flaticon-kitchen"></i>
                                                            </div>
                                                            <h4>Déjeuner</h4>
                                                        </div>
                                                </a>
                                            </li>
                                        <li class="nav-item">
                                              <a class="nav-link" id="fast-food" data-toggle="pill" href="#" role="tab" aria-controls="pills-contact" aria-selected="false">
                                                    <div class="single_menu text-center">
                                                            <div class="icon">
                                                                <i class="flaticon-kitchen"></i>
                                                            </div>
                                                            <h4>Fast-foods</h4>
                                                        </div>
                                                </a>
                                        </li>
                                        <li class="nav-item">
                                              <a class="nav-link" id="boissons" data-toggle="pill" href="#" role="tab" aria-controls="pills-contact" aria-selected="false">
                                                    <div class="single_menu text-center">
                                                            <div class="icon">
                                                                <i class="flaticon-kitchen"></i>
                                                            </div>
                                                            <h4>Boissons</h4>
                                                        </div>
                                                </a>
                                        </li>
                                        <li class="nav-item">
                                              <a class="nav-link" id="glaces" data-toggle="pill" href="#" role="tab" aria-controls="pills-contact" aria-selected="false">
                                                    <div class="single_menu text-center">
                                                            <div class="icon">
                                                                <i class="flaticon-kitchen"></i>
                                                            </div>
                                                            <h4>Glaces</h4>
                                                        </div>
                                                </a>
                                        </li>
                                    </ul>
                            </div>
                        </div>
            </div>

            <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                        <div class="row">

                @foreach ($data as $data )
                <form class="add-to-cart-form {{ strtolower($data->categorie) }}" data-id="{{ $data->id }}" action="{{url('/addcart', $data->id)}}" method="post">
                    @csrf
                    <div id="card" class="col-xl-12 col-md-12 col-lg-12">
                        <div class="single_delicious d-flex align-items-center justify-content-center width-100%">
                            <div class="thumb">
                                <img src="/repasimage/{{ $data->image }}" alt="">
                            </div>
                            <div class="info">
                                <h3>{{ $data->nom }}</h3>

                                <!-- Adding an ID to the paragraph for proper reference in the JavaScript -->
                                @if (strlen($data->description) > 20)
                                    <p id="short-description">{{ substr($data->description, 0, 20) }}...<a onclick="toggleDescription()" style="color: #DB9A64; cursor: pointer;">suite</a></p>
                                @else
                                    <p id="short-description">{{ $data->description }}</p>
                                @endif
                                <p id="description" style="display: none;">{{ $data->description }}
                                    <a id="moins-btn" style="display: none; color: #DB9A64; cursor: pointer;" onclick="toggleDescription()">Réduire</a>
                                </p>
                                <span>{{ $data->prix }} F</span>
                                <button type="submit" class="form-control ajouter-btn" id="ajouter-btn" style="background-color: #DB9A64; border: 1px solid #DB9A64; padding: 8px 16px; border-radius: 4px; cursor: pointer;">Ajouter</button>

                            </div>

                        </div>
                        <!-- Change the `data-field` of buttons and `name` of input field's for multiple plus minus buttons-->
                        <div class="input-group plus-minus-input">
                            <div class="input-group-button">
                                <button type="button" class="button hollow circle" data-quantity="minus" data-field="quantity" onclick="updateQuantity(this)">
                                    <i class="fa fa-minus" aria-hidden="true"></i>
                                </button>
                            </div>
                            <input class="input-group-field" type="number" name="quantity" value="1" class="quantity-input" data-max="20">
                            <div class="input-group-button">
                                <button type="button" class="button hollow circle" data-quantity="plus" data-field="quantity" onclick="updateQuantity(this)">
                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                </button>
                            </div>
                        </div>


                    </div>
                </form>
                @endforeach

            </div>
                    </div>
                    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                        <div class="row">

            </div>
                    </div>
                    <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                        <div class="row">

            </div>
                    </div>
                  </div>

        </div>
    </div>

<script>
    var isDescriptionFull = false;

    function toggleDescription() {
        var description = document.getElementById('description');
        var shortDescription = document.getElementById('short-description');
        var moinsBtn = document.getElementById('moins-btn');
        var ajouterBtn = document.getElementById('ajouter-btn');

        if (!isDescriptionFull) {
            description.style.display = 'block';
            shortDescription.style.display = 'none';
            moinsBtn.style.display = 'inline-block';
            ajouterBtn.style.display = 'none';
            isDescriptionFull = true;
        } else {
            description.style.display = 'none';
            shortDescription.style.display = 'block';
            moinsBtn.style.display = 'none';
            ajouterBtn.style.display = 'inline-block';
            isDescriptionFull = false;
        }
    }
</script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var addToCartForms = document.querySelectorAll('.add-to-cart-form');

        addToCartForms.forEach(function(form) {
            var addButton = form.querySelector('.ajouter-btn');

            addButton.addEventListener('click', function(event) {
                event.preventDefault();

                var itemId = form.getAttribute('data-id');
                addToCartAjax(itemId);
            });
        });

        function addToCartAjax(itemId) {
            var quantity = 1;

            $.ajax({
                url: '/addcart/' + itemId,
                type: 'POST',
                data: {
                    _token: '{{ csrf_token() }}',
                    quantity: quantity
                },
                success: function(response) {
                    if (response.success) {
                        alert(response.message);
                        // Mettre à jour le compteur du panier
                        var cartCount = document.querySelector('.cart-count');
                        if (cartCount) {
                            cartCount.innerHTML = response.count;
                        }
                    } else {
                        alert(response.message);
                    }
                },
                error: function(xhr, status, error) {
                    if (xhr.status === 401) {
                        // Redirection vers la page de connexion
                        window.location.href = 'register';
                    } else {
                        console.error(error);
                    }
                }
            });
        }
    });
</script>

<script>
    function filterMeals(category) {
        // Masquer tous les repas
        var meals = document.querySelectorAll('.add-to-cart-form');
        meals.forEach(function (meal) {
            meal.style.display = 'none';
        });

        // Afficher les repas de la catégorie sélectionnée
        var selectedMeals = document.querySelectorAll('.' + category);
        selectedMeals.forEach(function (meal) {
            meal.style.display = 'block';
        });
    }

    // Ajoutez des écouteurs d'événements pour chaque onglet
    document.getElementById('pills-home-tab').addEventListener('click', function () {
        filterMeals('diner');
    });

    document.getElementById('pills-profile-tab').addEventListener('click', function () {
        filterMeals('petit-dejeuner');
    });

    document.getElementById('pills-contact-tab').addEventListener('click', function () {
        filterMeals('dejeuner');
    });
</script>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Sélectionnez tous les ensembles de boutons
        var plusMinusInputs = document.querySelectorAll('.plus-minus-input');

        // Parcourez chaque ensemble
        plusMinusInputs.forEach(function (inputGroup) {
            // Récupérez l'élément d'entrée associé à cet ensemble
            var inputField = inputGroup.querySelector('.input-group-field');

            // Récupérez les boutons plus et moins de cet ensemble
            var minusButton = inputGroup.querySelector('[data-quantity="minus"]');
            var plusButton = inputGroup.querySelector('[data-quantity="plus"]');

            // Attachez les gestionnaires d'événements aux boutons
            minusButton.addEventListener('click', function () {
                updateQuantity(inputField, 'minus');
            });

            plusButton.addEventListener('click', function () {
                updateQuantity(inputField, 'plus');
            });
        });

        // Fonction de mise à jour de la quantité
        function updateQuantity(inputField, action) {
            var currentValue = parseInt(inputField.value);

            if (action === 'plus' && currentValue < 20) {
                inputField.value = currentValue + 1;
            } else if (action === 'minus' && currentValue > 1) {
                inputField.value = currentValue - 1;
            }

            document.querySelector('[data-quantity="minus"]').disabled = (currentValue === 1);
            document.querySelector('[data-quantity="plus"]').disabled = (currentValue === 20);
        }
    });
</script>






