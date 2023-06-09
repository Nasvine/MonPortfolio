<div class="container-xxl py-6 pb-5" id="skill">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.1s">
                <h1 class="display-5 mb-5">Compétences & Expériences</h1>
                <p class="mb-4">
                    Avec une solide expérience et des compétences avancées dans le domaine du développement web et mobile, j'ai acquis une expertise approfondie dans la création d'applications innovantes et intuitives.                </p>
                <h3 class="mb-4">Mes compétences</h3>
                <div class="row align-items-center">
                    @foreach ($skills as $skill)
                        <div class="col-md-6">
                            <div class="skill mb-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="font-weight-bold">{{ $skill->name }}</h6>
                                    <h6 class="font-weight-bold">{{ $skill->progression }}%</h6>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar {{ $skill->progression_color }}" role="progressbar" aria-valuenow="{{ $skill->progression }}" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="row g-5 pt-5">
            <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.5s">
                <ul class="nav nav-pills rounded border border-2 border-primary mb-5">
                    <li class="nav-item w-50">
                        <button class="nav-link w-100 py-3 fs-5 active" data-bs-toggle="pill" href="#tab-1">EXPÉRIENCES  PROFESSIONNELLES</button>
                    </li>
                    <li class="nav-item w-50">
                        <button class="nav-link w-100 py-3 fs-5" data-bs-toggle="pill" href="#tab-2">FORMATIONS ET DIPLÔMES</button>
                    </li>
                </ul>
                <div class="tab-content">
                    <div id="tab-1" class="tab-pane fade show p-0 active">
                        <div class="row gy-5 gx-4">
                            @foreach ($experiences as $experience)
                                <div class="col-sm-12 col-md-6 col-xl-16">
                                    <h4>{{ $experience->poste }}</h4>
                                    <hr class="text-primary my-2">
                                    <p class="text-primary mb-1">{{ $experience->date_debut }} - {{ $experience->date_fin }}</p>
                                    <hr class="text-primary my-2">
                                    <p class="mb-0">{{ $experience->statut }} à <b>{{ strtoupper($experience->entreprise) }}</b></p>
                                    <hr class="text-primary my-2">
                                    <p class="mb-0">{{ $experience->description }}</p>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div id="tab-2" class="tab-pane fade show p-0">
                        <div class="row gy-5 gx-4">
                            @foreach ($formations as $formation)
                                <div class="col-sm-12 col-md-6 col-xl-16">
                                    <h4>{{ $formation->formation }}</h4>
                                    <hr class="text-primary my-2">
                                    <p class="text-primary mb-1">{{ $formation->date_debut }} - {{ $formation->date_fin }}</p>
                                    <hr class="text-primary my-2">
                                    <p class="mb-0"><b>{{ strtoupper($formation->ecole) }}</b></p>

                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>