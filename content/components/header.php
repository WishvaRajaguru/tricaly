<!DOCTYPE html>
<html lang="en">

    <header class="vw-100 d-flex justify-content-center">
        <nav class="navbar fixed-top bg-body-tertiary navbar-style shadow-sm p-0" id="navbar">
            <div class="container-fluid body-content-control d-flex flex-column justify-content-center align-items-center p-0">

                <div class="row w-100 nav-div-upper">
                    <div class="col-lg-3 d-flex align-items-center">
                        <div class="row ms-1">
                            <div class="col-12 d-flex align-items-center social-media-section gap-3">
                                <button class="btn-social">
                                    <img src="./resources/drops/main/icons/facebook.svg" class="btn-social-pics" alt="facebook link">
                                    <img src="./resources/drops/main/icons/facebook_h.svg" class="btn-social-pics-hover">
                                </button>
                                <button class="btn-social">
                                    <img src="./resources/drops/main/icons/instagram.svg" class="btn-social-pics" alt="instagram link">
                                    <img src="./resources/drops/main/icons/instagram_h.svg" class="btn-social-pics-hover">
                                </button>
                                <button class="btn-social">
                                    <img src="./resources/drops/main/icons/linkedin.svg" class="btn-social-pics" alt="linkedin link">
                                    <img src="./resources/drops/main/icons/linkedin_h.svg" class="btn-social-pics-hover">
                                </button>
                                <button class="btn-social">
                                    <img src="./resources/drops/main/icons/twitterx.svg" class="btn-social-pics" alt="twitterx link">
                                    <img src="./resources/drops/main/icons/twitterx_h.svg" class="btn-social-pics-hover">
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">

                        <div class="row p-0 mt-2">
                            <div class="col-2 sm-nav-section d-flex justify-content-start align-items-center p-0 m-0">
                                <button class="btn-social btn-menu">
                                    <img src="./resources/drops/main/icons/facebook.svg" class="btn-social-pics btn-menu-pics" alt="facebook link">
                                    <img src="./resources/drops/main/icons/facebook_h.svg" class="btn-menu-pics-hover">
                                </button>
                            </div>
                            <div class="col-8 col-lg-12">
                                <div class="row">
                                    <div class="col-12">
                                        <!-- Name&LOGO -->
                                        <h1 class="text-center tricaly-name p-0 m-0">TRICALY</h1>
                                        <h6 class="text-center tricaly-slogan"><span style="color: #300000;">EXPLORE</span>-<span style="color: #001E59;">ENGAGE</span>-<span style="color: #005838;">EVOLVE</span></h6>
                                        <!-- Name&LOGO -->
                                    </div>
                                </div>
                            </div>
                            <div class="col-2 sm-nav-section justify-content-end align-items-center p-0 m-0">
                                <button class="btn-social">
                                    <img src="./resources/drops/main/icons/facebook.svg" class="btn-social-pics" alt="facebook link">
                                    <img src="./resources/drops/main/icons/facebook_h.svg" class="btn-social-pics-hover">
                                </button>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-3 social-media-section d-flex justify-content-end align-items-center gap-2">
                        <div class="row me-1">
                            <div class="col-12">
                                <button class="btn btn-sign-nav">Sign In</button>
                                <button class="btn btn-sign-nav btn-sign-up-nav">Register</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row w-100 nav-div-bottom">
                    <div class="col-12">
                        <div class="row p-0">
                            <div class="col-lg-3 social-media-section d-flex align-items-center gap-3">
                                <!-- <a href="" data-bs-toggle="tooltip" data-bs-title="About us" class="font-Montserrat fs-5 text-decoration-none text-secondary ms-1 d-flex align-items-center"><i class='bx bx-detail' style='color:#707070'  ></i></a>
                                <a href="" data-bs-toggle="tooltip" data-bs-title="Contact us" class="font-Montserrat fs-5 text-decoration-none text-secondary ms-1 d-flex align-items-center"><i class='bx bx-phone-call' style='color:#707070' ></i></a>
                                <a href="" data-bs-toggle="tooltip" data-bs-title="Our privacy and policy" class="font-Montserrat fs-5 text-decoration-none text-secondary ms-1 d-flex align-items-center"><i class='bx bx-shield-plus' style='color:#707070' ></i></a> -->
                            </div>
                            <div class="col-12 col-lg-6">
                                <ul class="nav justify-content-center" id="collapseButtonList">
                                    <li class="nav-item home-nav-btn activated">
                                        <button class="nav-link font-Montserrat font-size-8 text-secondary-emphasis" onclick="menuCollapseable(this);" data-controls="collapseMenu" data-areacontent="home">Home</button>
                                    </li>
                                    <li class="nav-item business-nav-btn">
                                        <button class="nav-link font-Montserrat font-size-8 text-secondary-emphasis" onclick="menuCollapseable(this);" data-controls="collapseMenu" data-areacontent="business">Business</button>
                                    </li>
                                    <li class="nav-item consultant-nav-btn">
                                        <button class="nav-link font-Montserrat font-size-8 text-secondary-emphasis" onclick="menuCollapseable(this);" data-controls="collapseMenu" data-areacontent="consultant">Consultant</button>
                                    </li>
                                    <li class="nav-item experties-nav-btn">
                                        <button class="nav-link font-Montserrat font-size-8 text-secondary-emphasis" onclick="menuCollapseable(this);" data-controls="collapseMenu" data-areacontent="experties">Experties</button>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-3 d-flex justify-content-end align-items-center social-media-section">
                                <div class="row me-2">
                                    <div class="col-12 d-flex align-items-center gap-1 input-nav-wrap dropdown-center">
                                        <input type="text" class="input-nav-input" placeholder="Search" id="searchInput" data-bs-toggle="dropdown" onkeyup="searchInput();" />
                                        <i class='bx bx-search-alt-2' style='color:#ffffff'></i>
                                        <div class="row">
                                            <div class="col-12">
                                                <ul class="dropdown-menu dropdown-menu-end mt-2">
                                                    <!-- load search results here -->
                                                    <li><button class="dropdown-item" type="button">Action</button></li>
                                                    <li><button class="dropdown-item" type="button">Another action</button></li>
                                                    <li><button class="dropdown-item" type="button">Something else here</button></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="collapse row w-100" id="collapseMenu">
                    <div class="col-12 collapse-container bg-dark opacity-25">

                    </div>
                </div>
            </div>
        </nav>
        <?php include "secondary_header.php";?>
    </header>

</html>