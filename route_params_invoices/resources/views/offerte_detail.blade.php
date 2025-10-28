
<h2>Offerte detail</h2>
<ul>
    <li>Offertenummer: {{ $offerte['offertenummer'] }}</li>
    <li>Klant: {{ $offerte['klant'] }}</li>
    <li>Bedrag: &euro; {{ number_format($offerte['bedrag'], 2, ',', '.') }}</li>
</ul>