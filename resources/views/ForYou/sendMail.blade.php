@extends('header')

@section('header')

@endsection

@section('title')
    Anasayfa |
@endsection

@section('content')

    <section id="home">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4 col-sm-6 col-12">
                <div class="shadow-sm bg-light p-sm-5 p-3">
                    <form class="needs-validation" novalidate method="POST" action="{{ url('sendMail') }}">
                        @csrf
                        <div class="form-row">
                            <div class="col-md-12 mb-3">
                                <label for="nameInput">Kim Bu Arkadaş</label>
                                <input type="text" class="form-control" id="nameInput" maxlength="50" name="nameInput" required placeholder="Ad Soyad">
                                <div class="valid-feedback">
                                    Anlaştık
                                </div>
                                <div class="invalid-feedback">
                                    E adını öğrenseydik arkadaşın, nasıl hitap ederiz yoksa
                                </div>
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="exampleInputEmail">Mail Adresi</label>
                                <input type="email" class="form-control" id="exampleInputEmail" maxlength="100" name="exampleInputEmail" required placeholder="Mail Adresi">
                                <div class="valid-feedback">
                                    Anlaştık
                                </div>
                                <div class="invalid-feedback">
                                    Allah aşkına böyle mail adresi mi olur?
                                </div>
                            </div>
                            <div class="col-md-12 mb-3">
                                <select class="form-select" id="helpSelect" name="helpSelect" aria-label="Default select example" onchange="checkIt()" required>
                                    <option hidden disabled selected value="">Derdimiz Nedir?</option>
                                    <option value="ter">Ter kokusu</option>
                                    <option value="ask">Aşk acısı</option>
                                    <option value="borc">Borcumu unuttu</option>
                                    <option value="itiraf">İtiraf</option>
                                </select>
                                <div class="invalid-feedback">
                                    Derdini söylemezsen derman olamam ki.
                                </div>
                            </div>
                            <div class="col-md-12 mb-3 d-none" id="yourName">
                                <label for="yourNameInput">Adından Bahsedelim mi?</label>
                                <input type="text" class="form-control" id="yourNameInput" maxlength="50" name="yourNameInput" placeholder="Ad Soyad">
                                <div class="valid-feedback">
                                    Anlaştık
                                </div>
                                <div class="invalid-feedback">
                                    E adını öğrenseydik, nasıl hitap ederiz yoksa
                                </div>
                                <small>Korkma yaa, adını açık açık söylemiyoruz, ipucu veriyoruz :)</small>
                            </div>

                            <div class="col-md-12 mb-3 d-none" id="howManyDebt">
                                <label for="howManyDebtInput">Ne kadar borcu vardı bu delikanlının?</label>
                                <input type="text" class="form-control" id="howManyDebtInput" name="howManyDebtInput" onkeypress="return isNumberKey(event)" maxlength="10" placeholder="Borç Miktarı">
                                <div class="valid-feedback">
                                    Anlaştık
                                </div>
                                <small>Burayı boş bırakırsan miktar belirtmeyeceğiz.</small>
                            </div>

                            <div class="col-md-12 mb-3 d-none" id="confession">
                                <div class="form-group">
                                    <label for="confessionInput">Ne itiraf ediyoruz?</label>
                                    <textarea class="form-control" maxlength="5000" id="confessionInput" name="confessionInput" rows="3"></textarea>
                                </div>
                            </div>
                        </div>
                        <button class="btn hover-top btn-collab w-100 shadow-sm" type="submit">Yap Bakalım</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </section>


@endsection

@section('footer')
    <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function () {
            'use strict'

            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.querySelectorAll('.needs-validation')

            // Loop over them and prevent submission
            Array.prototype.slice.call(forms)
                .forEach(function (form) {
                    form.addEventListener('submit', function (event) {
                        if (!form.checkValidity()) {
                            event.preventDefault()
                            event.stopPropagation()
                        }

                        form.classList.add('was-validated')
                    }, false)
                })
        })()
    </script>


    <script>
        function checkIt() {
            var helpSelect = $('#helpSelect').val();
            var helpSelectArray = {'yourName' : 'ask', 'howManyDebt' : 'borc', 'confession' : 'itiraf'};

            $.each(helpSelectArray, function( index, value ) {

                if(helpSelect != value)
                {
                    $('#'+index).addClass('d-none');
                    $('#'+index+'Input').removeAttr('required');
                }
                else
                {
                    $('#'+index).removeClass('d-none');
                    if(index == 'confession')
                    {
                        $('#'+index+'Input').attr("required", true);
                    }
                }
            });
        }
    </script>

    <script>
        function isNumberKey(evt){
            var charCode = (evt.which) ? evt.which : evt.keyCode
            if (charCode > 31 && (charCode < 48 || charCode > 57))
                return false;
            return true;
        }
    </script>
@endsection
