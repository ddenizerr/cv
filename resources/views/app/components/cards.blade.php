<div class="row mb-5">
    <div class="font-monospace d-flex justify-content-center">
        <div class="col-lg-4 col-sm-6 d-flex justify-content-center">
            <h5 class="glow fs-6">select your character to begin</h5>
        </div>
    </div>
</div>

<div class="d-none d-sm-block">
    <div class="row ">
        <div class="col-lg-6 col-md-6 col-sm-6">
            <a href="{{route('about.index')}}" class="disabled text-decoration-none">
                <div class="card glow-card">
                    <div class="card-body ">
                        <div class="card-title">
                            <h4 class="card-title-text font-cinzel"><i class="fa-solid fa-feather fa-bounce"></i>
                                Casual</h4>
                        </div>
                        <div class="row d-flex justify-content-center align-items-center">
                            <div class="card-avatar">
                                <img src="/images/avatars/memoji-casual.png" alt="Casual-Avatar" class="card-avatar">
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6">
            <a href="{{route('career.index')}}" class="disabled text-decoration-none">
                <div class="card glow-card">
                    <div class="card-body ">
                        <div class="card-title">
                            <h4 class="card-title-text font-cinzel"><i class="fa-solid fa-briefcase fa-bounce"></i>
                                Corporate</h4>
                        </div>
                        <div class="row d-flex justify-content-center align-items-center">
                            <div class="card-avatar">
                                <img src="/images/avatars/memoji-corporate.png" alt="Casual-Avatar" class="card-avatar">
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>


<div id="carouselExampleAutoplaying" class="carousel slide carousel-fade d-block d-sm-none" data-bs-ride="carousel" data-bs-interval="2000">
    <div class="carousel-indicators" style="color: #7D62F4">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" aria-current="true" class="active" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <a href="{{route('about.index')}}" class="disabled text-decoration-none">
                <div class="card glow-card">
                    <div class="card-body ">
                        <div class="card-title">
                            <h4 class="card-title-text font-cinzel"><i
                                    class="fa-solid fa-feather fa-shake"></i>
                                Casual</h4>
                        </div>
                        <div class="row d-flex justify-content-center align-items-center">
                            <div class="card-avatar">
                                <img src="/images/avatars/memoji-casual.png" alt="Casual-Avatar" class="card-avatar">
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="carousel-item">
            <a href="{{route('career.index')}}" class="disabled text-decoration-none">
                <div class="card glow-card">
                    <div class="card-body ">
                        <div class="card-title">
                            <h4 class="card-title-text font-cinzel"><i class="fa-solid fa-briefcase fa-bounce"></i>
                                Corporate</h4>
                        </div>
                        <div class="row d-flex justify-content-center align-items-center">
                            <div class="card-avatar">
                                <img src="/images/avatars/memoji-corporate.png" alt="Casual-Avatar" class="card-avatar">
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>

