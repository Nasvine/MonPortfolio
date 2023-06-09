<div class="container-xxl pb-5" id="contact">
    <div class="container py-5">
        <div class="row g-5 mb-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="col-lg-6">
                <h1 class="display-5 mb-0">Travaillons ensemble</h1>
            </div>
            <div class="col-lg-6 text-lg-end">
{{--                 <a class="btn btn-primary py-3 px-5" href="">Say Hello</a>
 --}}            </div>
        </div>
        <div class="row g-5">
            <div class="col-lg-5 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <p class="mb-2">My office:</p>
                <h3 class="fw-bold">Ouidah, Pahou, Soglocodji, Maison NASSARA</h3>
                <hr class="w-100">
                <p class="mb-2">Call me:</p>
                <h3 class="fw-bold">+229 91 00 36 06</h3>
                <hr class="w-100">
                <p class="mb-2">Mail me:</p>
                <h3 class="fw-bold">vinenassara@gmail.com</h3>
                <hr class="w-100">
                <p class="mb-2">Follow me:</p>
                <div class="d-flex pt-2">
                    <a class="btn btn-square btn-primary me-2" href=""><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-square btn-primary me-2" href=""><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-square btn-primary me-2" href=""><i class="fab fa-youtube"></i></a>
                    <a class="btn btn-square btn-primary me-2" href=""><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
            <div class="col-lg-7 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <p class="mb-4">
                    Vous pouvez m'envoyer un message par mail à travers ce formulaire.
                </p>
                <form method="POST" action="{{ route('message.admin.store') }}">
                    @csrf
                    <div class="row g-3">
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="text" class="form-control" name="nom" id="name" placeholder="Entrer votre nom">
                                <label for="name">Votre Nom</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="text" class="form-control" name="prenom" id="name" placeholder="Entrer votre prénom">
                                <label for="name">Votre Prénom</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Entrer votre email">
                                <label for="email">Votre Email</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <input type="text" class="form-control" name="objet" id="subject" placeholder="Entrer l'objet">
                                <label for="subject">Objet</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <textarea class="form-control" placeholder="Ecrivez le message ici" name="message" id="message" style="height: 100px"></textarea>
                                <label for="message">Message</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <button class="btn btn-primary py-3 px-5" type="submit">Send Message</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>