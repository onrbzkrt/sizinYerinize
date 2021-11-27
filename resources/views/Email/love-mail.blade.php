
<p>{{ $details['name'] }} diye birini arıyorduk ama sen misin o?</p>

<p>Biliyor musun bir süredir senden hoşlanan biri var. Ne bileyim belki dikkat edersin, ona göre davranırsın diye bilgilendirmek istedik :)</p>

@if(isset($details['yourName']))
    <p>Hadi son bir kıyak. Adı bizde saklı, ilk harfi; {{ $details['yourName'] }}</p>
@endif

@extends('email.email-footer')
