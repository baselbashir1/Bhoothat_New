<x-base-layout :scrollspy="false">

    <x-slot:pageTitle>{{ $title }}</x-slot>

    <x-slot:headerFiles>

        {{-- vite --}}

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

    <div class="container" style="margin-top: 100px">
        <h2 class="text-center" style="margin-bottom: 50px">Request your research now</h2>
        <form class="row g-3">
            <div class="col-md-6">
                <label for="inputEmail4" class="form-label">Phone</label>
                <input type="email" class="form-control" id="inputEmail4">
            </div>
            {{-- <div class="col-md-6">
                <label for="inputPassword4" class="form-label">Subject Domain</label>
                <input type="password" class="form-control" id="inputPassword4">
            </div> --}}
            <div class="col-md-4">
                <label for="inputState" class="form-label">Subject Domain</label>
                <select id="inputState" class="form-select">
                    <option selected>Choose...</option>
                    <option>الطب</option>
                    <option>الادب</option>
                    <option>الهندسة الميكانيكية</option>
                    <option>الهندسة الكهربائية</option>
                </select>
            </div>
            <div class="col-12">
                <label for="inputAddress" class="form-label">Research Subject</label>
                <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
            </div>
            {{-- <div class="col-12">
                <label for="inputAddress2" class="form-label">Education Level</label>
                <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
            </div> --}}
            <div class="col-md-6">
                <label for="inputCity" class="form-label">Teacher Name</label>
                <input type="text" class="form-control" id="inputCity">
            </div>
            <div class="col-md-4">
                <label for="inputState" class="form-label">Education Level</label>
                <select id="inputState" class="form-select">
                    <option selected>Choose...</option>
                    <option>المرحلة الاعدادية</option>
                    <option>المرحلة الثانوية</option>
                    <option>المرحلة الجامعية</option>
                    <option>الماجستير</option>
                    <option>الدكتوراة</option>
                </select>
            </div>
            {{-- <div class="col-md-2">
                <label for="inputZip" class="form-label">Zip</label>
                <input type="text" class="form-control" id="inputZip">
            </div> --}}
            {{-- <div class="col-12">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gridCheck">
                    <label class="form-check-label" for="gridCheck">
                        Check me out
                    </label>
                </div>
            </div> --}}
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>

    <x-slot:footerFiles>
        {{-- vite --}}
    </x-slot>

</x-base-layout>
