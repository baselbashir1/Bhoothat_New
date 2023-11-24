<x-base-layout :scrollspy="false">

    <x-slot:pageTitle>Bhoothat</x-slot>

    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <x-slot:headerFiles>

        @vite(['public/plugins/filepond/filepond.min.css'])
        @vite(['public/plugins/filepond/FilePondPluginImagePreview.min.css'])
        @vite(['public/plugins/tagify/tagify.css'])

        @vite(['resources/scss/light/assets/forms/switches.scss'])
        @vite(['resources/scss/light/plugins/editors/quill/quill.snow.scss'])
        @vite(['resources/scss/light/plugins/tagify/custom-tagify.scss'])
        @vite(['resources/scss/light/plugins/filepond/custom-filepond.scss'])

        @vite(['resources/scss/dark/assets/forms/switches.scss'])
        @vite(['resources/scss/dark/plugins/editors/quill/quill.snow.scss'])
        @vite(['resources/scss/dark/plugins/tagify/custom-tagify.scss'])
        @vite(['resources/scss/dark/plugins/filepond/custom-filepond.scss'])

        @vite(['resources/scss/light/assets/apps/ecommerce-create.scss'])
        @vite(['resources/scss/dark/assets/apps/ecommerce-create.scss'])

        @vite(['public/plugins/leaflet/leaflet.css'])

        @vite(['resources/scss/light/assets/pages/contact_us.scss'])
        @vite(['resources/scss/dark/assets/pages/contact_us.scss'])
        <!--  END CUSTOM STYLE FILE  -->

        <style>
            @media screen and (max-width: 990px) {
                .font-bg {
                    font-size: 26px;
                }
            }

            @media screen and (max-width: 600px) {
                .font-bg {
                    font-size: 18px;
                }

                .font-bg-btn {
                    font-size: 15px;
                }
            }

            @media screen and (max-width: 300px) {
                .font-bg {
                    font-size: 16px;
                }

                .font-bg-btn {
                    font-size: 14px;
                }
            }
        </style>

    </x-slot>
    <!-- END GLOBAL MANDATORY STYLES -->


    <div class="row">
        <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 mb-4">
            <div>
                <div class="featured-image">
                    <div class="featured-image-overlay"></div>
                    <div class="post-header">
                        <div class="post-title">
                            <h1 class="mb-0 font-bg">Our website offers comprehensive educational services, granting
                                easy
                                access to a wealth of resources and learning opportunities. Request the research paper
                                now to explore these valuable resources.</h1>
                        </div>
                        <div class="post-meta-info d-flex justify-content-between">
                            <button class="btn btn-warning m-auto w-auto mb-5"
                                style="font-size: 18px; border-radius: 20px" data-bs-toggle="modal"
                                data-bs-target="#loginModal">
                                <span class="font-bg-btn">Request from here</span>
                            </button>
                            <div class="modal fade inputForm-modal" id="loginModal" tabindex="-1" role="dialog"
                                aria-labelledby="inputFormModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header" id="inputFormModalLabel">
                                            <h5 class="modal-title">Login to <b>Bhoothat</b></h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-hidden="true"><svg aria-hidden="true"
                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-x">
                                                    <line x1="18" y1="6" x2="6" y2="18">
                                                    </line>
                                                    <line x1="6" y1="6" x2="18" y2="18">
                                                    </line>
                                                </svg></button>
                                        </div>
                                        <form method="POST" action="{{ route('login') }}">
                                            @csrf
                                            <div class="modal-body">
                                                <div class="form-group">
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text">
                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                class="icon icon-tabler icon-tabler-mail" width="24"
                                                                height="24" viewBox="0 0 24 24" stroke-width="2"
                                                                stroke="currentColor" fill="none"
                                                                stroke-linecap="round" stroke-linejoin="round">
                                                                <path stroke="none" d="M0 0h24v24H0z" fill="none">
                                                                </path>
                                                                <rect x="3" y="5" width="18" height="14"
                                                                    rx="2">
                                                                </rect>
                                                                <polyline points="3 7 12 13 21 7"></polyline>
                                                            </svg>
                                                        </span>
                                                        {{-- <x-text-input id="email" class="form-control" type="email"
                                                            name="email" :value="old('email')" autocomplete="email"
                                                            placeholder="Enter your email address" required autofocus /> --}}
                                                        <input id="email" class="form-control" type="email"
                                                            name="email" value="{{ old('email') }}"
                                                            autocomplete="email" placeholder="Enter your email address"
                                                            required autofocus />
                                                        {{-- <x-input-error :messages="$errors->get('email')" class="mt-2" /> --}}
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text">
                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                class="icon icon-tabler icon-tabler-lock" width="24"
                                                                height="24" viewBox="0 0 24 24" stroke-width="2"
                                                                stroke="currentColor" fill="none"
                                                                stroke-linecap="round" stroke-linejoin="round">
                                                                <path stroke="none" d="M0 0h24v24H0z" fill="none">
                                                                </path>
                                                                <rect x="5" y="11" width="14" height="10"
                                                                    rx="2"></rect>
                                                                <circle cx="12" cy="16" r="1"></circle>
                                                                <path d="M8 11v-4a4 4 0 0 1 8 0v4"></path>
                                                            </svg>
                                                        </span>
                                                        {{-- <x-text-input id="password" class="form-control"
                                                            type="password" name="password"
                                                            placeholder="Enter your password" autocomplete="password"
                                                            required autofocus /> --}}
                                                        <input id="password" class="form-control" type="password"
                                                            name="password" placeholder="Enter your password"
                                                            autocomplete="password" required autofocus />
                                                        {{-- <x-input-error :messages="$errors->get('password')" class="mt-2" /> --}}
                                                    </div>
                                                </div>
                                                <div class="d-flex justify-content-between">
                                                    <div class="form-check form-check-primary form-check-inline">
                                                        <input class="form-check-input" type="checkbox"
                                                            value="" id="remember_me" name="remember">
                                                        <label class="form-check-label mb-0" for="form-check-primary">
                                                            Remember me
                                                        </label>
                                                    </div>
                                                    <a href="javascript:void(0);">Forget Password?</a>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <div class="btn btn-light-success mt-2 mb-2 btn-no-effect"
                                                    data-bs-dismiss="#loginModal" data-bs-toggle="modal"
                                                    data-bs-target="#registerModal">Sign up</div>
                                                <button type="submit"
                                                    class="btn btn-primary mt-2 mb-2 btn-no-effect">Log in</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="modal fade inputForm-modal" id="registerModal" tabindex="-1" role="dialog"
                                aria-labelledby="inputFormModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header" id="inputFormModalLabel">
                                            <h5 class="modal-title">Register to <b>Bhoothat</b></h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-hidden="true"><svg aria-hidden="true"
                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-x">
                                                    <line x1="18" y1="6" x2="6"
                                                        y2="18">
                                                    </line>
                                                    <line x1="6" y1="6" x2="18"
                                                        y2="18">
                                                    </line>
                                                </svg>
                                            </button>
                                        </div>
                                        <form class="mt-0" method="POST" action="{{ route('register') }}">
                                            @csrf
                                            <div class="modal-body">
                                                <div class="form-group">
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text">
                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                class="icon icon-tabler icon-tabler-user"
                                                                width="24" height="24" viewBox="0 0 24 24"
                                                                stroke-width="2" stroke="currentColor" fill="none"
                                                                stroke-linecap="round" stroke-linejoin="round">
                                                                <path stroke="none" d="M0 0h24v24H0z" fill="none">
                                                                </path>
                                                                <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0"></path>
                                                                <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2">
                                                                </path>
                                                            </svg>
                                                        </span>
                                                        {{-- <x-text-input id="name" class="form-control"
                                                            type="text" name="name" :value="old('name')"
                                                            autocomplete="name" placeholder="Enter your name" required
                                                            autofocus /> --}}
                                                        <input id="name" class="form-control" type="text"
                                                            name="name" value="{{ old('name') }}"
                                                            autocomplete="name" placeholder="Enter your name" required
                                                            autofocus />
                                                        {{-- <x-input-error :messages="$errors->get('name')" class="mt-2" /> --}}
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text">
                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                class="icon icon-tabler icon-tabler-mail"
                                                                width="24" height="24" viewBox="0 0 24 24"
                                                                stroke-width="2" stroke="currentColor" fill="none"
                                                                stroke-linecap="round" stroke-linejoin="round">
                                                                <path stroke="none" d="M0 0h24v24H0z" fill="none">
                                                                </path>
                                                                <rect x="3" y="5" width="18" height="14"
                                                                    rx="2"></rect>
                                                                <polyline points="3 7 12 13 21 7"></polyline>
                                                            </svg>
                                                        </span>
                                                        {{-- <x-text-input id="email" class="form-control"
                                                            type="email" name="email" :value="old('email')"
                                                            autocomplete="email"
                                                            placeholder="Enter your email address" required
                                                            autofocus /> --}}
                                                        <input id="email" class="form-control" type="email"
                                                            name="email" value="{{ old('email') }}"
                                                            autocomplete="email"
                                                            placeholder="Enter your email address" required
                                                            autofocus />
                                                        {{-- <x-input-error :messages="$errors->get('email')" class="mt-2" /> --}}
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text">
                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                class="icon icon-tabler icon-tabler-lock"
                                                                width="24" height="24" viewBox="0 0 24 24"
                                                                stroke-width="2" stroke="currentColor" fill="none"
                                                                stroke-linecap="round" stroke-linejoin="round">
                                                                <path stroke="none" d="M0 0h24v24H0z" fill="none">
                                                                </path>
                                                                <rect x="5" y="11" width="14" height="10"
                                                                    rx="2"></rect>
                                                                <circle cx="12" cy="16" r="1"></circle>
                                                                <path d="M8 11v-4a4 4 0 0 1 8 0v4"></path>
                                                            </svg>
                                                        </span>
                                                        {{-- <x-text-input id="password" class="form-control"
                                                            type="password" name="password"
                                                            placeholder="Enter your password"
                                                            autocomplete="new-password" required autofocus /> --}}
                                                        <input id="password" class="form-control" type="password"
                                                            name="password" placeholder="Enter your password"
                                                            autocomplete="new-password" required autofocus />
                                                        {{-- <x-input-error :messages="$errors->get('password')" class="mt-2" /> --}}
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text">
                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                class="icon icon-tabler icon-tabler-lock"
                                                                width="24" height="24" viewBox="0 0 24 24"
                                                                stroke-width="2" stroke="currentColor" fill="none"
                                                                stroke-linecap="round" stroke-linejoin="round">
                                                                <path stroke="none" d="M0 0h24v24H0z" fill="none">
                                                                </path>
                                                                <rect x="5" y="11" width="14" height="10"
                                                                    rx="2"></rect>
                                                                <circle cx="12" cy="16" r="1"></circle>
                                                                <path d="M8 11v-4a4 4 0 0 1 8 0v4"></path>
                                                            </svg>
                                                        </span>
                                                        {{-- <x-text-input id="password_confirmation" class="form-control"
                                                            type="password" name="password_confirmation"
                                                            autocomplete="new-password"
                                                            placeholder="Confirm your password" required autofocus /> --}}
                                                        <input id="password_confirmation" class="form-control"
                                                            type="password" name="password_confirmation"
                                                            autocomplete="new-password"
                                                            placeholder="Confirm your password" required autofocus />
                                                        {{-- <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" /> --}}
                                                    </div>
                                                </div>
                                                <div class="d-flex justify-content-between">
                                                    <div class="form-check form-check-primary form-check-inline">
                                                        <input class="form-check-input" type="checkbox"
                                                            value="" id="form-check-primary">
                                                        <label class="form-check-label mb-0" for="form-check-primary">
                                                            I agree the <a href="javascript:void(0);"
                                                                class="text-primary">Terms
                                                                and
                                                                Conditions</a>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <div class="btn btn-light-success mt-2 mb-2 btn-no-effect"
                                                    data-bs-dismiss="#registerModal" data-bs-toggle="modal"
                                                    data-bs-target="#loginModal">Sign In</div>
                                                <button type="submit"
                                                    class="btn btn-primary mt-2 mb-2 btn-no-effect">Register</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <h4 class="text-center mt-4 mb-4"><b>Samples</b></h4>
            @for ($i = 1; $i <= 4; $i++)
                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-4 col-sm-6 mb-4">
                    <a href="./app-blog-post.html" class="card style-2 mb-md-0 mb-4">
                        <img src="{{ Vite::asset('public/src/assets/img/pdf-to-word.png') }}" class="card-img-top"
                            alt="...">
                        <div class="card-body px-0 pb-0 text-center">
                            <h5 class="card-title mb-3 font-bg">Convert PDF files to Word.</h5>
                            <button class="btn btn-secondary font-bg-btn">Read</button>
                        </div>
                    </a>
                </div>
            @endfor
        </div>
    </div>

    <!--  BEGIN CUSTOM SCRIPTS FILE  -->
    <x-slot:footerFiles>
        @vite(['public/plugins/editors/quill/quill.js'])
        @vite(['public/plugins/filepond/filepond.min.js'])
        @vite(['public/plugins/filepond/FilePondPluginFileValidateType.min.js'])
        @vite(['public/plugins/filepond/FilePondPluginImageExifOrientation.min.js'])
        @vite(['public/plugins/filepond/FilePondPluginImagePreview.min.js'])
        @vite(['public/plugins/filepond/FilePondPluginImageCrop.min.js'])
        @vite(['public/plugins/filepond/FilePondPluginImageResize.min.js'])
        @vite(['public/plugins/filepond/FilePondPluginImageTransform.min.js'])
        @vite(['public/plugins/filepond/filepondPluginFileValidateSize.min.js'])
        @vite(['public/plugins/tagify/tagify.min.js'])
        @vite(['resources/assets/js/apps/ecommerce-create.js'])
        @vite(['public/plugins/leaflet/leaflet.js'])
        @vite(['public/plugins/leaflet/us-states.js'])
        @vite(['public/plugins/leaflet/eu-countries.js'])
    </x-slot>
    <!--  END CUSTOM SCRIPTS FILE  -->

</x-base-layout>
