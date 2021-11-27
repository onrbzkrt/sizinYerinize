<p>Ya bize bir haber geldi de ondan rahatsızlık verdik kusura bakma dostum.</p>

<p>{{ $details['name'] }} adlı kişinin birine {{ isset($details['dept']) && $details['dept'] != null ? $details['dept'].' TL kadar' : 'bir miktar' }} bir borcu varmış.</p>

<p>Tanıyorsan kendisine iletirsin, unutmasın lütfen :)</p>

@extends('email.email-footer')
